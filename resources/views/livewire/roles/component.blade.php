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
                                <th class="table-th text-white">DESCRIPCION</th>
                                <th class="table-th text-white">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>

                                <td>
                                    <h6>{{$role->id}}</h6>
                                </td>
                                <td>
                                    <h6>{{$role->name}}</h6>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" wire:click="Edit({{$role->id}})"
                                        class="btn btn-dark mtmobile" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="Confirm('{{$role->id}}')"
                                        class="btn btn-dark mtmobile" title="Delete">
                                        <i class="fa fa-trash "></i>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$roles->links()}}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.roles.form')
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

        window.livewire.on('role-added', msg => {
        $('#theModal').modal('hide');
        Toast.fire({
            type: 'success',
            title: msg
            })
        });
        window.livewire.on('role-updated', msg => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('hide');
        Toast.fire({
            type: 'success',
            title: msg
            })
        });
        window.livewire.on('role-deleted', msg => {
            Toast.fire({
            type: 'success',
            title: msg
            })
        });
        window.livewire.on('role-exists', msg => {
            noty(Msg)
        });
        window.livewire.on('role-error', msg => {
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
        window.livewire.on('hidden.bs.modal', msg => {
            $('.er').css('display','none')
        });
        function Confirm(id, products){
        if(products>0){
            Swal.fire({
                type: 'error',
                title: 'Error, no se puede borrar',
                text: 'La categoria tiene productos relacionados',
                });
                return;
        }



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
                window.livewire.emit('deleteRow', id)
                Swal.close()
            }
            })


            }


    });
    function Confirm(id, products){
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
