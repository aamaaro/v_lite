<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Denomination;
use Livewire\WithFileUploads; //Trait
use Livewire\WithPagination;
use Iluminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CoinsController extends Component
{

    use WithFileUploads;
    use WithPagination;
    public $type, $value, $search, $image, $selected_id, $pageTitle, $componentName;
    private $pagination = 15;
    protected $paginationTheme = 'bootstrap';
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->componentName = 'Denominaciones';
        $this->pageTitle = 'Listado';
        $this->type = 'Elegir';
    }

    public function render()
    {
        if (strlen($this->search) > 0)
            $data = Denomination::where('value', 'like', '%' . $this->search . '%')
                ->paginate($this->pagination);
        else
            $data = Denomination::orderBy('id', 'desc')->paginate($this->pagination);

            return view('livewire.denominations.component', [
                'data' => $data
            ])->extends('adminlte::page')
                ->section('content');
    }

    public function Edit($id)
    {
        $record = Denomination::find($id, ['id', 'type', 'value', 'image']);
        $this->type = $record->type;
        $this->value = $record->value;
        $this->selected_id = $record->id;
        $this->image = null;
        $this->emit('show-modal', 'Show Modal!');
    }

    public function Store()
    {
        $rules = [
            'type' => 'required|not_in:Elegir',
            'value' => 'required|unique:denominations'
        ];

        $messages = [
            'type.required' => 'El tipo de denominación es requerido',
            'type.not_in' => 'Debe elegir una denominación',
            'value.required' => 'El valor es requerido',
            'value.unique' => 'Ya existe el valor',
        ];

        $this->validate($rules, $messages);


        $denomination = Denomination::create([
            'type' => $this->type,
            'value' => $this->value
        ]);

        // $customFileName;
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/denominations', $customFileName);
            $denomination->image = $customFileName;
            $denomination->save();
        }
        $this->resetUI();
        $this->emit('item-added', 'Denominación registrada');
    }

    public function resetUI()
    {
        $this->type = 'Elegir';
        $this->value = '';
        $this->image = null;
        $this->search = '';
        $this->selected_id = 0;
    }
    public function Update()
    {
        $rules = [
            'type' => 'required|not_in:Elegir',
            'value' => "required|unique:denominations,value,{$this->selected_id}"
        ];
        $messages = [
            'type.required' => 'El tipo de denominación es requerido',
            'type.not_in' => 'Debe elegir una denominación',
            'value.required' => 'El valor es requerido',
            'value.unique' => 'Ya existe el valor',
        ];

        $this->validate($rules, $messages);
        $denomination = Denomination::find($this->selected_id);
        $denomination->update([
            'type' => $this->type,
            'value' => $this->value
        ]);
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/denominations', $customFileName);
            $imageName = $denomination->image;
            $denomination->image = $customFileName;
            $denomination->save();
            if ($imageName != null) {
                if (file_exists('storage/denominations/' . $imageName)) {
                    if ($imageName !== 'noimg.png') {
                        unlink('storage/denominations/' . $imageName);
                    }
                }
            }
        }
        $this->resetUI();
        $this->emit('item-updated', 'Denominación actualizada');
    }

    protected $listeners = [
        'deleteRow' => 'Destroy'
    ];
    // protected $listeners = ['render', 'delete'];
    public function Destroy(Denomination $denomination) {

        // $category = Category::find($id); Se instancio la clase
        $imageName = $denomination->image;
        $denomination->delete();
        if ($imageName != null) {
            if (file_exists('storage/denominations/' . $imageName)) {
                if ($imageName !== 'noimg.png') {
                    unlink('storage/denominations/' . $imageName);
                }
            }
        }
        $this->resetUI();
        $this->emit('item-deleted', 'Denominación eliminada');
    }
}
