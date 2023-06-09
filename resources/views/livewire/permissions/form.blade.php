<div wire:ignore.self class="modal face" id="theModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white">
                    {{ $componentName }} | {{ $selected_id > 0 ? 'Editar' : 'Crear' }}
                </h5>
                <h6 class="text-cent text-warning" wire:loading>POR FAVOR ESPERE</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fas fa-edit">
                                        <label>Nombre</label>
                                    </span>
                                </span>
                            </div>
                            <input type="text" wire:model.lazy="permissionName" class="form-control" placeholder="ej: Category_Index" maxlength="255">
                        </div>
                        @error('permissionName') <span class="text-danger er"> {{ $message }}</span>@enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fas fa-edit">
                                        <label>Descripcion</label>
                                    </span>
                                </span>
                            </div>
                            <input type="text" wire:model.lazy="permissionDescription" class="form-control" placeholder="ej: Category Index" maxlength="255">
                        </div>
                        @error('permissionName') <span class="text-danger er"> {{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="resetUI()" class="btn btn-dark close-btn text-info"
                    data-dismiss="modal">CERRAR</button>
                @if ($selected_id < 1) <button type="button" wire:click.prevent="CreatePermission()"
                    class="btn btn-dark close-modal">
                    GUARDAR</button>
                    @else
                    <button type="button" wire:click.prevent="UpdatePermission()"
                        class="btn btn-dark close-modal">ACTUALIZAR</button>
                    @endif

            </div>
        </div>
    </div>
</div>
