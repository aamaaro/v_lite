<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads; //Trait
use Livewire\WithPagination;
use Iluminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProductsController extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $name, $barcode, $cost, $price, $stock, $alerts, $categoryid, $search, $image, $selected_id, $pageTitle,
        $componentName;
    private $pagination = 10;
    protected $paginationTheme = 'bootstrap';

    // public function paginationView()
    // {
    //     return 'vendor.livewire.bootstrap';
    // }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->componentName = 'Productos';
        $this->pageTitle = 'Listado';
        $this->categoryid = 'Elegir';
    }

    public function render()
    {
        if (strlen($this->search) > 0)
            $products = Product::join('categories as c', 'c.id', 'products.category_id')
                ->select('products.*', 'c.name as category')
                ->where('products.name', 'like', '%' . $this->search . '%')
                ->orWhere('products.barcode', 'like', '%' . $this->search . '%')
                ->orWhere('c.name', 'like', '%' . $this->search . '%')
                ->orderBy('products.name', 'asc')
                ->paginate($this->pagination);
        else
            $products = Product::join('categories as c', 'c.id', 'products.category_id')
                ->select('products.*', 'c.name as category')
                ->orderBy('products.name', 'asc')
                ->paginate($this->pagination);
        return view('livewire.products.component', [
            'data' => $products,
            'categories' => Category::orderBy('name', 'ASC')->get(),
        ])->extends('adminlte::page')
            ->section('content');
    }

    public function Store()
    {
        $rules = [
            'name' => 'required|unique:products|min:3',
            'cost' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'alerts' => 'required',
            'categoryid' => 'required|not_in:Elegir'
        ];

        $messages = [
            'name.required' => 'Nombre del producto es requerido',
            'name.unique' => 'Ya existe el nombre del producto',
            'name.min' => 'Nombre del producto debe tener al menos 3 caracteres',
            'cost.required' => 'El costo es requerido',
            'price.required' => 'El precio es requerido',
            'stock.required' => 'El stock es requerido',
            'alerts.required' => 'Ingresa el valor minimo en existencias',
            'categoryid.not_in' => 'Elije el nombre de una categoria',
        ];

        $this->validate($rules, $messages);


        $product = Product::create([
            'name' => $this->name,
            'cost' => $this->cost,
            'price' => $this->price,
            'barcode' => $this->barcode,
            'stock' => $this->stock,
            'alerts' => $this->alerts,
            'category_id' => $this->categoryid,
        ]);

        // $customFileName;
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/products', $customFileName);
            $product->image = $customFileName;
            $product->save();
        }
        $this->resetUI();
        $this->emit('product-added', 'Producto registrado');
    }

    public function resetUI()
    {
        $this->name = '';
        $this->cost = '';
        $this->price = '';
        $this->barcode = '';
        $this->stock = '';
        $this->alerts = '';
        $this->categoryid = 'Elegir';

        $this->image = null;
        $this->search = '';
        $this->selected_id = 0;
    }

    public function Edit(Product $product)
    {
        $this->selected_id = $product->id;
        $this->name = $product->name;
        $this->barcode = $product->barcode;
        $this->cost = $product->cost;
        $this->price = $product->price;
        $this->stock = $product->stock;
        $this->alerts = $product->alerts;
        $this->categoryid = $product->category_id;
        $this->image = null;
        $this->emit('show-modal', 'Enviado desde el BackEnd');
    }

    public function Update()
    {
        $rules = [
            'name' => "required|min:3|unique:products,name,{$this->selected_id}",
            'cost' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'alerts' => 'required',
            'categoryid' => 'required|not_in:Elegir'
        ];

        $messages = [
            'name.required' => 'Nombre del producto es requerido',
            'name.unique' => 'Ya existe el nombre del producto',
            'name.min' => 'Nombre del producto debe tener al menos 3 caracteres',
            'cost.required' => 'El costo es requerido',
            'price.required' => 'El precio es requerido',
            'stock.required' => 'El stock es requerido',
            'alerts.required' => 'Ingresa el valor minimo en existencias',
            'categoryid.not_in' => 'Elije el nombre de una categoria',
        ];

        $this->validate($rules, $messages);
        $product = Product::find($this->selected_id);
        $product->update([
            'name' => $this->name,
            'cost' => $this->cost,
            'price' => $this->price,
            'barcode' => $this->barcode,
            'stock' => $this->stock,
            'alerts' => $this->alerts,
            'category_id' => $this->categoryid,
        ]);
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/products', $customFileName);
            $imageName = $product->image;
            $product->image = $customFileName;
            $product->save();
            if ($imageName != null) {
                if (file_exists('storage/products/' . $imageName)) {
                    if ($imageName !== 'noimg.png') {
                        unlink('storage/products/' . $imageName);
                    }
                }
            }
        }
        $this->resetUI();
        $this->emit('product-updated', 'Producto actualizado');
    }

    protected $listeners = [
        'deleteRow' => 'Destroy',
        'scan-code' => 'ScanCode'
    ];


    public function ScanCode($barcode)
    {
        $this->barcode = $barcode;
        // dd('hola' . $container);
        $this->emitTo('pos', 'scan-code', $barcode);

    }

    // protected $listeners = ['render', 'delete'];
    public function Destroy(Product $product)
    {
        
        $imageName = $product->imagen;
        $product->delete();
        if($imageName !== null) {
            if ($imageName !== 'noimg.png'){
                unlink('storage/products/' . $imageName);
            }
        }
        if ($imageName != null) {
            if (file_exists('storage/products/' . $imageName)) {
                if ($imageName !== 'noimg.png') {
                    unlink('storage/products/' . $imageName);
                }
            }
        }
        $this->resetUI();
        $this->emit('product-deleted', 'Producto eliminado');
    }
}
