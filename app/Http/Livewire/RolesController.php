<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;


class RolesController extends Component
{
    use WithPagination;

    public $roleName, $search, $selected_id, $pageTitle, $componentName;
    private $pagination = 5;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function mount()
    {
        $this->componentName = 'Roles';
        $this->pageTitle = 'Listado';
        // $this->categoryid = 'Elegir';
    }
    public function render()
    {
        if (strlen($this->search) > 0)
            $roles = Role::where('name', 'like', '%' . $this->search . '%')->paginate($this->pagination);
        else
            $roles = Role::orderBy('name', 'asc')->paginate($this->pagination);
        return view('livewire.roles.component', [
            'roles' => $roles
        ])
            ->extends('adminlte::page')
            ->section('content');
    }
    public function CreateRole() {
        $rules =['roleName' => 'required|min:2|unique:roles,name'];
        $messages = [
            'roleName.required' => 'El nombre del role es requerido',
            'roleName.unique' => 'El nombre del role ya existe',
            'roleName.min' => 'El role debe tener al menos 2 caracteres'
        ];

        $this->validate($rules, $messages);
        Role::create(['name' => $this->roleName]);
        $this->emit('role-added', 'Se registro el role con exito');
        $this->resetUI();
    }

    public function Edit(Role $role) {
        //$role = Role::find($id);
        $this->selected_id = $role->id;
        $this->roleName = $role->name;
        $this->emit('show-modal', 'Show modal');
    }

    public function UpdateRole() {
        $rules =['roleName' => "required|min:2|unique:roles,name, {$this->selected_id}"];
        $messages = [
            'roleName.required' => 'El nombre del role es requerido',
            'roleName.unique' => 'El nombre del role ya existe',
            'roleName.min' => 'El role debe tener al menos 2 caracteres'
        ];

        $this->validate($rules, $messages);
        $role = Role::find($this->selected_id);
        $role->name = $this->roleName;
        $role->save();
        $this->emit('role-updated', 'Se actualizo el role con exito');
        $this->resetUI();
    }

    protected $listeners = ['Destroy' => 'Destroy'];
    public function Destroy($id) {
        $permissionsCount = Role::find($id)->permissions->count();
        if ($permissionsCount > 0) {
            $this->emit('role-error', 'No se puede eliminar el role porque tiene permisos asociados');
            return;
        }
        Role::find($id)->delete();
        $this->emit('role-deleted', 'Se elimino el role con exito');
    }

    public function AsignarRoles($rolesList) {
        if ($this->userSelected > 0) {
            $user = User::find($this->userSelected);
            if ($user) {
                $user->syncRoles($rolesList);
                $this->emit('msg-ok', 'Roles asignados correctamente');
                $this->resetInput();
            }
        }
    }

    public function resetUI() {
        $this->roleName = '';
        $this->search = '';
        $this->selected_id = 0;
    }
}
