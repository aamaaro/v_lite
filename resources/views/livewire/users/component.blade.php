<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b> {{ $componentName }} | {{ $pageTitle }}</b>
                </h4>
                <ul class="tabs-pills list-unstyled">
                    <li>
                        <a href="javascript:void(0)" class="tabmenu bg-dark" data-toggle="modal"
                            data-target="#theModal">Agregar</a>
                    </li>
                </ul>
            </div>
            @include('livewire.common.searchBox')
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #3b3f57">
                            <tr>
                                <th class="table-th text-white">USUARIO</th>
                                <th class="table-th text-white text-center">TELEFONO</th>
                                <th class="table-th text-white text-center">EMAIL</th>
                                <th class="table-th text-white text-center">ESTATUS</th>
                                <th class="table-th text-white text-center">PERFIL</th>
                                <th class="table-th text-white text-center">IMAGEN</th>
                                <th class="table-th text-white text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $r)
                            <tr>
                                <td class="text-center">
                                    <h6>{{ $r->name }}</h6>
                                </td>
                                <td class="text-center">
                                    <h6>{{ $r->phone }}</h6>
                                </td>
                                <td class="text-center">
                                    <h6>{{ $r->email }}</h6>
                                </td>
                                <td class="text-center">
                                    <span
                                        class="badge {{ $r->status == 'ACTIVE' ? 'badge-success' : 'badge-danger' }} text-uppercase">{{
                                        $r->status }}</span>
                                </td>
                                <td class="text-center">
                                    <h6>{{ $r->profile }}</h6>
                                </td>
                                <td class="text-center">
                                    @if ($r->image != null)
                                    <img src="{{ asset('storage/users/' . $r->image) }}" alt="imagen de ejemplo" height="10" width="10"
                                    class="card-img-top img-fluid">
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" wire:click="edit({{ $r->id }})" class="btn btn-dark mtmobile" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="Confirm({{ $r->id }})" class="btn btn-dark mtmobile" title="Delete">
                                        <i class="fa fa-trash "></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.users.form')
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
        window.livewire.on('user-added', msg => {
            $('#theModal').modal('hide');
            Toast.fire({
            type: 'success',
            title: msg
            })
        })
        window.livewire.on('user-updated', msg => {
            $('#theModal').modal('hide');
            Toast.fire({
            type: 'success',
            title: msg
            })
        })
        window.livewire.on('user-deleted', msg => {
            Toast.fire({
            type: 'success',
            title: msg
            })
        })
        window.livewire.on('hide-modal', msg => {
            $('#theModal').modal('hide');
        })
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show');
        })
        window.livewire.on('user-withsales', msg => {
            Toast.fire({
            type: 'success',
            title: msg
            })
        })
    });

    function Confirm(id)
    {
         Swal.fire({
            title: '¿Estás seguro?',
            text: "Confirmas eliminar el registro?",
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
</script>
</script>
