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
                    @can('Category_Index')
                    <li>
                        <a href="javascript:void(0)" class="btn btn-primary float-right tabmenu bg-dark" data-toggle="modal"
                            data-target="#theModal">Agregar</a>
                    </li>
                    @endcan

                </ul>
            </div>
            {{-- <button data-toggle="modal"
            data-target="#theModal" type="button" class="btn btn-primary bg-dark float-right"><i class="fas fa-plus">
                </i><font _mstmutation="1" _msthash="3423329" _msttexthash="288028"> Agregar</font>
            </button> --}}
            @include('livewire.common.searchBox')


            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #3b3f57">
                            <tr>
                                <th class="table-th text-white text-center">DESCRIPCIÓN</th>
                                <th class="table-th text-white text-center">IMÁGEN</th>
                                <th class="table-th text-white text-center">ACCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category )
                            <tr>
                                <td>
                                    <h6> {{ $category->name }}</h6>
                                </td>
                                <td class="text-center">
                                    <span>
                                        <img src=" {{ asset('storage/categories/' .$category->imagen)}}"
                                            alt="" height="70" width="80" class="rounded">
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" wire:click="Edit({{$category->id}})"
                                        class="btn btn-dark mtmobile">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="javascript:void(0)" onclick="Confirm('{{$category->id}}', '{{$category->products->count()}}')"
                                        class="btn btn-dark mtmobile" title="Delete">
                                        <i class="fa fa-trash "></i>
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.category.form')
</div>
@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.livewire.on('show-modal', postId => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('show');
        });
        window.livewire.on('category-added', postId => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('hide');
        });
        window.livewire.on('category-updated', postId => {
        // alert('A post was added with the id of: ' + postId);
        $('#theModal').modal('hide');
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
