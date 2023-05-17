<div class="row sales layout-top-spacing">
    <div wire:ignore class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake img-circle elevation-8" src="logo8.svg" alt="AdminLTELogo" height="480" width="628">
    </div>
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b> {{$componentName}} | {{$pageTitle}} </b>
                </h4>
                <button data-toggle="modal"
            data-target="#theModal" type="button" class="btn btn-primary bg-dark float-right"><i class="fas fa-plus">
                </i><font _mstmutation="1" _msthash="3423329" _msttexthash="288028"> Agregar</font>
            </button>
            </div>
            @include('livewire.common.searchBox')
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #3b3f57">
                            <tr>
                                <th class="table-th text-white text-center">DESCRIPCION</th>
                                <th class="table-th text-white text-center">BARCODE</th>
                                <th class="table-th text-white text-center">CATEGORÍA</th>
                                <th class="table-th text-white text-center">PRECIO</th>
                                <th class="table-th text-white text-center">STOCK</th>
                                <th class="table-th text-white text-center">INV.MIN</th>
                                <th class="table-th text-white text-center">IMAGEN</th>
                                <th class="table-th text-white text-center">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $product)
                            <tr>
                            <td><h6 class="text-left">{{ $product->name }}</h6></td>
                            <td><h6 class="text-center">{{ $product->barcode }}</h6></td>
                            <td><h6 class="text-center">{{ $product->category }}</h6></td>
                            <td><h6 class="text-center">{{ $product->price }}</h6></td>
                            <td><h6 class="text-center">{{ $product->stock }}</h6></td>
                            <td><h6 class="text-center">{{ $product->alerts }}</h6></td>
                            <td class="text-center">
                                    <span>
                                        <img src=" {{ asset('storage/products/' .$product->imagen)}}"
                                            alt="" height="70" width="80" class="rounded">
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" wire:click="Edit({{$product->id}})"
                                        class="btn btn-dark mtmobile">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="javascript:void(0)" onclick="Confirm('{{$product->id}}}')"
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
    @include('livewire.products.form')
</div>
@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.livewire.on('show-modal', postId => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('show');
        });

        window.livewire.on('product-added', msg => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('hide');
        });

        window.livewire.on('product-updated', msg => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('hide');
        });

        window.livewire.on('product-deleted', msg => {
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

        ('#theModal').on('hidden.bs.modal', function (e) {
            $('.er').css('display','none')
        })

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
<script>
    Livewire.on('show-modal', postId => {
        // alert('A post was added with the id of: ' + postId);
        // $('#theModal').modal('show');
    })
</script>
<script>
        Livewire.on('category-updated', function(message) {
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

            Toast.fire({
            type: 'success',
            title: message
            })
        })

</script>

@endpush
