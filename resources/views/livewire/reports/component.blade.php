<div class="row sales layout-top-spacing">
    <div class="widget-heading">
        <h4 class="card-title text-center"><b>{{ $componentName }}</b></h4>
    </div>
    <div class="col-sm-12 mt-2">

        <div class="widget">

            <div class="widget-content">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div class="col-sm-12">
                            <h6>Elije el usuario</h6>
                            <div class="form-group">
                                <select wire:model="userId" class="form-control">
                                    <option value="0">Todos</option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h6>Elije el tipo de reporte</h6>
                            <div class="form-group">
                                <select wire:model="reportType"class="form-control">
                                    <option value="0">Ventas del dia</option>
                                    <option value="1">Ventas por fecha</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <h6>Fecha desde</h6>
                            <div class="form-group">
                                <input type="date" wire:model="dateFrom" class="form-control flatpickr"
                                    placeholder="Click para elegir">
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <h6>Fecha hasta</h6>
                            <div class="form-group">
                                <input type="date" wire:model="dateTo" class="form-control flatpickr"
                                    placeholder="Click para elegir">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button wire:click="$refresh" class="btn btn-dark btn-block">Consultar</button>
                            <a class="btn btn-dark btn-block {{ count($data) <1 ? 'disabled' : '' }}"
                                href="{{ url('report/pdf' . '/' . $userId . '/' . $reportType . '/' . $dateFrom . '/' . $dateTo) }}"
                                target="_blank">Generar PDF</a>
                            <a class="btn btn-dark btn-block {{ count($data) <1 ? 'disabled' : '' }}"
                                href="{{ url('report/excel' . '/' . $userId . '/' . $reportType . '/' . $dateFrom . '/' . $dateTo) }}"
                                target="_blank">Exportar a Excel</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped mt-1">
                                <thead class="text-white" style="background: #3b3f57">
                                    <tr>
                                        <th class="table-th text-white text-center">FOLIO</th>
                                        <th class="table-th text-white text-center">TOTAL</th>
                                        <th class="table-th text-white text-center">ITEMS</th>
                                        <th class="table-th text-white text-center">ESTATUS</th>
                                        <th class="table-th text-white text-center">USUARIO</th>
                                        <th class="table-th text-white text-center">FECHA</th>
                                        <th class="table-th text-white text-center">HORA</th>
                                        <th class="table-th text-white text-center" width="50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data) < 1)
                                    <tr>
                                        <td colspan="8">
                                            <h5>Sin resultados</h5>
                                        </td>
                                    </tr>

                                    @endif
                                    @foreach ($data as $d )
                                    <tr>
                                        <td class="text-center">
                                            <h6> {{ $d->id }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6> {{ number_format($d->total, $total) }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6> {{ $d->items }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6> {{ $d->status }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6> {{ $d->user }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6>
                                               {{ $d->created_at->format('Y-M-d') }}
                                            </h6>
                                        </td>
                                        <td class="text-center">
                                            <h6>
                                                {{ $d->created_at->isoFormat('HH:mm:ss A') }}
                                            </h6>
                                        </td>
                                        <td class="text-center" width="50px">
                                            <button wire:click="getDetails({{ $d->id }})" class="btn btn-dark btn-sm">
                                                <i class="fas fa-list"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.reports.sales-detail')
</div>
<script>
 document.addEventListener('DOMContentLoaded', function(){
         window.livewire.on('show-modal', msg => {
             $('#modalDetails').modal('show')
         })
     })
</script>
