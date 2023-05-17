<div class="row">
    <div class="col-sm-12 bg-secondary">
        <div class="connect-sorting">
            <h5 class="text-center mb-2">RESUMEN DE VENTA</h5>

            <div class="connect-sorting-content mt-4">
                <div class="card simple-title-task ui-sortable-handle">
                    <div class="card-body">

                        <div class="task-header">
                            <div>
                                <h2 class="text-dark">TOTAL: Bs. {{number_format($total,2)}}</h2>
                                <input type="hidden" id="total" name="hiddenTotal" value="{{$total}}">
                            </div>
                            <div>
                                <h4 class="text-dark mt-3">Articulos: {{$itemsQuantity}}</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
