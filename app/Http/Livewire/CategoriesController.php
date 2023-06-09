<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads; //Trait
use Livewire\WithPagination;
use Iluminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CategoriesController extends Component
{

    use WithFileUploads;
    use WithPagination;
    public $name, $search, $image, $selected_id, $pageTitle, $componentName;
    private $pagination = 5;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Categoria';
    }

    public function render()
    {
        if (strlen($this->search) > 0)
            $data = Category::where('name', 'like', '%' . $this->search . '%')
                ->paginate($this->pagination);
        else
            $data = Category::orderBy('id', 'desc')->paginate($this->pagination);




        return view('livewire.category.categories', ['categories' => $data])
            ->extends('adminlte::page')
            ->section('content');
    }

    public function Edit($id)
    {
        $record = Category::find($id, ['id', 'name', 'image']);
        $this->name = $record->name;
        $this->selected_id = $record->id;
        $this->image = null;
        $this->emit('show-modal', 'Show Modal!');
        $this->emit('alert', 'El cliente se registró satisfactoriamente');
    }

    public function Store()
    {
        $rules = [
            'name' => 'required|unique:categories|min:3',
        ];

        $messages = [
            'name.required' => 'Nombre de la categoria es requerido',
            'name.unique' => 'Ya existe el nombre de la categoria',
            'name.min' => 'Nombre de la categoria debe tener al menos 3 caracteres'
        ];

        $this->validate($rules, $messages);


        $category = Category::create([
            'name' => $this->name,
        ]);

        $customFileName;
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/categories', $customFileName);
            $category->image = $customFileName;
            $category->save();
        }
        $this->resetUI();
        $this->emit('category-added', 'Categoria registrada');
    }

    public function resetUI()
    {
        $this->name = '';
        $this->image = null;
        $this->search = '';
        $this->selected_id = 0;
    }
    public function Update()
    {
        $rules = [
            'name' => "required|min:3|unique:categories,name,{$this->selected_id}"
        ];
        $messages = [
            'name.riquired' => 'El nombre de la categoria es requerido',
            'name.unique' => 'Ya existe el nombre de la categoria',
            'name.min' => 'Nombre de la categoria debe tener al menos 3 caracteres'
        ];

        $this->validate($rules, $messages);
        $category = Category::find($this->selected_id);
        $category->update([
            'name' => $this->name
        ]);
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/categories', $customFileName);
            $imageName = $category->image;
            $category->image = $customFileName;
            $category->save();
            if ($imageName != null) {
                if (file_exists('storage/categories/' . $imageName)) {
                    unlink('storage/categories/' . $imageName);
                }
            }
        }
        $this->resetUI();
        $this->emit('category-updated', 'Categoria actualizada');
    }

    protected $listeners = [
        'deleteRow' => 'Destroy'
    ];
    // protected $listeners = ['render', 'delete'];
    public function Destroy(Category $category) {

        // $category = Category::find($id); Se instancio la clase
        $imageName = $category->image;
        $category->delete();
        if($imageName !== null) {
            unlink('storage/categories/' . $imageName);
        }
        $this->resetUI();
        $this->emit('category-deleted', 'Categoria eliminada');
    }
}
