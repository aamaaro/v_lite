<div class="row sales layout-top-spacing">
    <div wire:ignore class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake img-circle elevation-8" src="logo8.svg" alt="AdminLTELogo" height="480" width="628">
    </div>
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title text-sl ">
                    <b> {{ $componentName }} | {{ $pageTitle }} </b>
                </h4>
                <ul class="tabs-pills list-unstyled">
                    <li>
                        <a href="javascript:void(0)" class="btn btn-primary float-right tabmenu bg-dark" data-toggle="modal"
                            data-target="#theModal">Agregar</a>
                    </li>
                </ul>
            </div>
            <button data-toggle="modal"
            data-target="#theModal" type="button" class="btn btn-primary bg-dark float-right"><i class="fas fa-plus">
                </i><font _mstmutation="1" _msthash="3423329" _msttexthash="288028"> Agregar</font>
            </button>
            @include('livewire.common.searchBox')
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #3b3f57">
                            <tr>
                                <th class="table-th text-white">TIPO</th>
                                <th class="table-th text-white text-center">VALOR</th>
                                <th class="table-th text-white text-center">IMAGEN</th>
                                <th class="table-th text-white text-center">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $coin )
                            <tr>
                                <td><h6> {{ $coin->type }}</h6></td>
                                <td><h6> ${{ number_format($coin->value,2) }}</h6></td>

                                <td class="text-center">
                                    <span>
                                        <img src=" {{ asset('storage/' .$coin->imagen)}}"
                                            alt="" height="70" width="80" class="rounded">
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" wire:click="Edit({{$coin->id}})"
                                        class="btn btn-dark mtmobile">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="javascript:void(0)" onclick="Confirm('{{$coin->id}}')"
                                        class="btn btn-dark mtmobile" title="Delete">
                                        <i class="fa fa-trash "></i>
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.denominations.form')
</div>
@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.livewire.on('show-modal', postId => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('show');
        });

        window.livewire.on('item-added', msg => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('hide');
        });

        window.livewire.on('item-updated', msg => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('hide');
        });

        window.livewire.on('item-deleted', msg => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('hide');
        });

        window.livewire.on('modal-show', msg => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('show');
        });

        window.livewire.on('modal-hiden', msg => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('hide');
        });

        ('#theModal').on('hidden.bs.modal', msg => {
            $('.er').css('display', 'none')
        });

        // const Toast = Swal.mixin({
        //     toast: true,
        //     position: 'top-end',
        //     showConfirmButton: false,
        //     timer: 2000,
        //     timerProgressBar: true,
        //     didOpen: (toast) => {
        //         toast.addEventListener('mouseenter', Swal.stopTimer)
        //         toast.addEventListener('mouseleave', Swal.resumeTimer)
        //     }
        //     })

        //     Toast.fire({
        //     type: 'success',
        //     title: message
        //     })


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

</script>

@endpush
