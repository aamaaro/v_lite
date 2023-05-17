<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class AssignController extends Component
{
    use WithPagination;

    public $permissionSelected = [], $old_permissions = [], $componentName, $role;
    private $pagination = 10;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->componentName = 'Asinar Permisos';
        $this->role = 'Elegir';
    }

    public function render()
    {
        $permissions = Permission::select('name', 'id', DB::raw("0 as checked"))
        ->orderBy('name', 'asc')
        ->paginate($this->pagination);
        if ($this->role != 'Elegir')
        {
            $list = Permission::join('role_has_permissions as rp', 'rp.permission_id', 'permissions.id')
            ->where('role_id', '=', $this->role)->pluck('permissions.id')->toArray();
            $this->old_permissions = $list;
        }
        if($this->role != 'Elegir'){
            foreach ($permissions as $permission){
                $role = Role::find($this->role);
                $tienepermiso = $role->hasPermissionTo($permission->name);
                if($tienepermiso){
                    $permission->checked = 1;
                }
            }
        }
        return view('livewire.assign.component',[
            'roles' => Role::orderBy('name', 'asc')->get(),

            'permissions' => $permissions,
        ])

        ->extends('adminlte::page')->section('content');
    }

    public $listeners = ['revokeall' => 'RemoveAll'];

    public function RemoveAll(){
        if($this->role == 'Elegir'){
            $this->emit('sync-error', 'Seleccione un role valido');
            return;
        }
        $role = Role::find($this->role);
        $role->syncPermissions([0]);
        $this->emit('removeall', "Se revocaron todos los permisos al role $role->name");
    }
    public function SyncAll(){
        if($this->role == 'Elegir'){
            $this->emit('sync-error', 'Seleccione un role valido');
            return;
        }
        $role = Role::find($this->role);
        $permissions = Permission::pluck('id')->toArray();
        $role->syncPermissions($permissions);
        $this->emit('syncall', "Se sincronizaron todos los permisos al role $role->name");
    }
    public function SyncPermission($state, $permissionName){
        if($this->role != 'Elegir'){
           $roleName = Role::find($this->role);
           if($state){
                 $roleName->givePermissionTo($permissionName);
                 $this->emit('permi', 'Permiso asignado correctamente');
           }else{
                $roleName->revokePermissionTo($permissionName);
                $this->emit('permi', 'Permiso eliminando correctamente');
           }
        }else{
            $this->emit('sync-error', 'Seleccione un role valido');
        }

    }

}
