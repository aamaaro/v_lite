@include('livewire.common.modalHead')


<div class="row">
    {{-- <div class="col-sm-12">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                        <label>Nombre</label>
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="name" class="form-control" placeholder="ej: Cursos">
        </div>
        @error('name') <span class="text-danger er"> {{ $message }}</span>

        @enderror
    </div> --}}
    <div class="clo-sm-12 col-md-12">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" wire:model.lazy="name" class="form-control" placeholder="ej: Cursos">
            @error('name') <span class="text-danger er"> {{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 mt-3">
        <label>Imagen</label>
        <div class="form-group custom-file">
            <input type="file" class="custom-file-input form-control" wire:model="image"
                accept="image/x-png, image/gif, image/jpg">
            <label class="custom-file-label">{{$image}}</label>
            @error('image') <span class="text-danger er"> {{ $message }}</span>
            @enderror
        </div>
    </div>
</div>


@include('livewire.common.modalFooter')
