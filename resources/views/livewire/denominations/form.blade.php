@include('livewire.common.modalHead')


<div class="row">
    <div class="clo-sm-12 col-md-6">
        <div class="form-group">
            <label>Tipo</label>
            <select wire:model="type" class="form-control">
                <option value="Elegir">Elegir</option>
                <option value="BILLETE">BILLETE</option>
                <option value="MONEDA">MONEDA</option>
                <option value="OTRO">OTRO</option>
            </select>
            @error('type') <span class="text-danger er"> {{ $message }}</span>@enderror
        </div>
    </div>
    <div class="clo-sm-12 col-md-6">
        <div class="form-group">
            <label>VALOR</label>
            <input type="text" wire:model.lazy="value" class="form-control" placeholder="ej: 1765409887">
            @error('value') <span class="text-danger er"> {{ $message }}</span>@enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-12">
        <div class="form-group custom-file">
            <input type="file" class="custom-file-input form-control" wire:model="image"
                accept="image/x-png, image/gif, image/jpeg">
            <label class="custom-file-label">Imágen {{$image}}</label>
            @error('image') <span class="text-danger er"> {{ $message }}</span>@enderror
        </div>
    </div>

</div>

@include('livewire.common.modalFooter')
