<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{$componentName}}</b>
                </h4>

            </div>
            <div class="widget-content">
                <div class="form-inline">
                    <div class="form-group mr-5">
                        <select wire:model="role" class="form-control">
                            <option value="Elegir" selected>== Seleccione el Role ==</option>
                            @foreach ( $roles as $role)
                            <option value="{{ $role->id }}">{{$role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="button" wire:click.prevent="SyncAll()" class="btn btn-dark mbmobile inblock mr-5">Sincronizar Todos</button>
                    <button type="button" onclick="Revocar()" class="btn btn-dark mbmobile mr-5">Revocar Todos</button>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped mt-1">
                                <thead class="text-white" style="background: #3b3f57">
                                    <tr>
                                        <th class="table-th text-white text-center">ID</th>
                                        <th class="table-th text-white text-center">PERMISO</th>
                                        <th class="table-th text-white text-center">DESCRIPCION</th>
                                        <th class="table-th text-white text-center">ROLE CON EL PERMISO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                    <tr>
                                        <td><h6 class="text-center">{{ $permission->id}}</h6></td>
                                        <td class="text-center">

                                            <div class="n-check">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox"
                                                    wire:change="SyncPermission($('#p' + {{ $permission->id }}).is(':checked'), '{{ $permission->name }}')"
                                                    id="p{{ $permission->id }}"
                                                    value="{{ $permission->id }}"
                                                    class="new-control-input"
                                                    {{ $permission->checked == 1 ? 'checked' : '' }}
                                                    >
                                                    <span class="new-control-indicator"></span>
                                                    <h6>{{ $permission->name }}</h6>
                                                </label>
                                            </div>
                                        </td>
                                        <td><h6 class="text-center">{{ $permission->description}}</h6></td>
                                        <td class="text-center">
                                            {{-- <h6>{{ \App\Models\User::permission($permission->name)->count() }}</h6> --}}
                                            @foreach ($permission->getRoleNames() as $role )
                            {{ $role }}
                            @endforeach
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $permissions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Include Form
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })
        window.livewire.on('sync-error', msg => {
            Toast.fire({
            type: 'success',
            title: msg
            })
        })
        window.livewire.on('permi', msg => {
            Toast.fire({
            type: 'success',
            title: msg
            })
        })
        window.livewire.on('syncall', msg => {
            Toast.fire({
            type: 'success',
            title: msg
            })
        })
        window.livewire.on('removeall', msg => {
            Toast.fire({
            type: 'success',
            title: msg
            })
        })
    });

    function Revocar()
    {
         Swal.fire({
            title: '¿Estás seguro?',
            text: "Confirmas revocar todos los permisos?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, elimínelo!'
            }).then(function(result) {
            if (result.value) {
                window.livewire.emit('revokeall')
                Swal.close()
            }
            })
    }
</script>
