<div class="row sales layout-top-spacing">
    <div wire:ignore class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake img-circle elevation-8" src="logo8.svg" alt="AdminLTELogo" height="480"
            width="628">
    </div>
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b> {{$componentName}} | {{$pageTitle}} </b>
                </h4>
                <button data-toggle="modal" data-target="#theModal" type="button"
                    class="btn btn-primary bg-dark float-right"><i class="fas fa-plus">
                    </i>
                    <font _mstmutation="1" _msthash="3423329" _msttexthash="288028"> Agregar</font>
                </button>
            </div>
            @include('livewire.common.searchBox')
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #3b3f57">
                            <tr>
                                <th class="table-th text-white">ID</th>
                                <th class="table-th text-white">NOMBRE</th>
                                <th class="table-th text-white">DESCRIPCION</th>
                                <th class="table-th text-white">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>

                                <td>
                                    <h6>{{$permission->id}}</h6>
                                </td>
                                <td>
                                    <h6>{{$permission->name}}</h6>
                                </td>
                                <td>
                                    <h6>{{$permission->description}}</h6>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" wire:click="Edit({{$permission->id}})"
                                        class="btn btn-dark mtmobile" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="Confirm('{{$permission->id}}')"
                                        class="btn btn-dark mtmobile" title="Delete">
                                        <i class="fa fa-trash "></i>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$permissions->links()}}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.permissions.form')
</div>
@push('js')
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

        window.livewire.on('permission-added', msg => {
        $('#theModal').modal('hide');
        Toast.fire({
            type: 'success',
            title: msg
            })
        });
        window.livewire.on('permission-updated', msg => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('hide');
        Toast.fire({
            type: 'success',
            title: msg
            })
        });
        window.livewire.on('permission-deleted', msg => {
            Toast.fire({
            type: 'success',
            title: msg
            })
        });
        window.livewire.on('permission-exists', msg => {
            noty(Msg)
        });
        window.livewire.on('permission-error', msg => {
            Toast.fire({
            type: 'danger',
            title: msg
            })
        });
        window.livewire.on('hide-modal', msg => {
            $('#theModal').modal('hide');
        });
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show');
        });

    });
    function Confirm(id){

        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, elimínelo!'
            }).then(function(result) {
            if (result.value) {
                window.livewire.emit('Destroy', id)
                Swal.close()
            }
            })


    }

</script>
@endpush
