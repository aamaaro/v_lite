<div class="connect-sorting ">
    <div class="connect-sorting-content bg-secondary">
        <div class="card simple-title-dask ui-sortable-handle">
            @if($total>0)
            <div class="table-responsive"  style="max-heigth:650px; overflow: hidden">
                <table class="table table-bordered table-striped mt-3">
                    <thead class="text-white" style="background: #3B3F5C">
                        <tr>
                            <th width="7%"></th>
                            <th class="table-th text-left text-white">DESCRIPCIÓN</th>
                            <th class="table-th text-center text-white">PRECIO</th>
                            <th width="13%" class="table-th text-center text-white">CANT</th>
                            <th class="table-th text-center text-white">IMPORTE</th>
                            <th class="table-th text-center text-white">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $item )
                        @php
                        <tr>
                            <td class="text-center table-th">
                                @if(count($item->attributes)>0)
                                <span>
                                    <img src="{{ asset('storage/products/' . $item->attributes[0]) }}"
                                    alt="imágen de producto" height="50" width="50" class="rounded">
                                </span>
                                @endif
                            </td>
                            <td><h6 class="text-dark">{{ $item->name }}</h6></td>
                            <td class="text-center text-dark">Bs {{ $item->price }}</td>
                            <td>
                                <input type="text" id="r{{ $item->id }}"
                                wire:change="updateQty({{ $item->id }}, $('#r' + {{$item->id}}).val() )"
                                style="font-size: 1rem!important"
                                class="form-control text-center"
                                value="{{ $item->quantity }}"
                            </td>
                            <td class="text-center text-dark">
                                <h6>
                                    Bs {{ $item->price * $item->quantity }}
                                </h6>
                            </td>
                            <td class="text-center">

                                <button wire:click.prevent="decreaseQty('{{$item->id}}')"
                                    class="btn btn-dark mbmobile">
                                    <i class="fas fa-minus"></i></i>
                                </button>
                                <button onclick="Confirm('{{$item->id}}', 'removeItem', 'Confirmas eliminar registro?')"
                                    class="btn btn-dark mbmobile">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <button wire:click.prevent="increaseQty('{{$item->id}}')"
                                    class="btn btn-dark mbmobile">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <h5 class="text-center text-muted">Agregar productos a la venta</h5>
            @endif
            <div wire:loading.inline wire:target="saveSale">
                <h4 class="text-danger text-center">Guardando Venta...</h4>
            </div>
        </div>
    </div>
</div>
