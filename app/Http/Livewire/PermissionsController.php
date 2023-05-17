<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Component
{
    use WithPagination;

    public $permissionName, $permissionDescription, $search, $selected_id, $pageTitle, $componentName;
    private $pagination = 10;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function mount()
    {
        $this->componentName = 'Permisos';
        $this->pageTitle = 'Listado';
        // $this->categoryid = 'Elegir';
    }
    public function render()
    {
        if (strlen($this->search) > 0)
            $permissions = Permission::where('name', 'like', '%' . $this->search . '%')->paginate($this->pagination);
        else
            $permissions = Permission::orderBy('name', 'asc')->paginate($this->pagination);
        return view('livewire.permissions.component', [
            'permissions' => $permissions
            ])
        ->extends('adminlte::page')
        ->section('content');
    }
    public function CreatePermission() {
        $rules =['permissionName' => 'required|min:2|unique:permissions,name'];
        $messages = [
            'permissionName.required' => 'El nombre del permiso es requerido',
            'permissionName.unique' => 'El nombre del permiso ya existe',
            'permissionName.min' => 'El permiso debe tener al menos 2 caracteres'
        ];

        $this->validate($rules, $messages);
        Permission::create(['name' => $this->permissionName, 'description' => $this->permissionDescription]);
        $this->emit('permission-added', 'Se registro el permiso con exito');
        $this->resetUI();
    }

    public function Edit(Permission $permission) {
        //$role = Role::find($id);
        $this->selected_id = $permission->id;
        $this->permissionName = $permission->name;
        $this->permissionDescription= $permission->description;
        $this->emit('show-modal', 'Show modal');
    }

    public function UpdatePermission() {
        $rules =['permissionName' => "required|min:2|unique:roles,name, {$this->selected_id}"];
        $messages = [
            'permissionName.required' => 'El nombre del permiso es requerido',
            'permissionName.unique' => 'El nombre del permiso ya existe',
            'permissionName.min' => 'El permiso debe tener al menos 2 caracteres'
        ];

        $this->validate($rules, $messages);
        $permission = Permission::find($this->selected_id);
        $permission->name = $this->permissionName;
        $permission->description = $this->permissionDescription;
        $permission->save();
        $this->emit('permission-updated', 'Se actualizo el permiso con exito');
        $this->resetUI();
    }

    protected $listeners = ['Destroy' => 'Destroy'];
    public function Destroy($id) {
        $rolesCount = Permission::find($id)->getRoleNames()->count();
        if ($rolesCount > 0) {
            $this->emit('permission-error', 'No se puede eliminar el permiso porque tiene roles asociados');
            return;
        }
        Permission::find($id)->delete();
        $this->emit('permission-deleted', 'Se elimino el permiso con exito');
    }

    public function resetUI() {
        $this->permissionName = '';
        $this->search = '';
        $this->selected_id = 0;
        $this->resetValidation();
    }
}
