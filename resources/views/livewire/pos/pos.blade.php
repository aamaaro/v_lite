<div>
    <style></style>
    <div class="row layout-top-spacing">
        <div class="col-m-12 col-md-8">
            {{-- DETALLES --}}
            @include('livewire.pos.partials.detail')
        </div>
        <div class="col-m-12 col-md-4">
            {{-- TOTAL --}}
            @include('livewire.pos.partials.total')

            {{-- DENOMINATIONS --}}
            @include('livewire.pos.partials.coins')

        </div>
    </div>
</div>


<script src="js/onscan.js"></script>

<script src="js/keypress-2.1.5.min.js"></script>



<script src="js/jquery.js"></script>

<script src="js/jquery.nicescroll.js"></script>
@include('livewire.pos.scripts.events')
@include('livewire.pos.scripts.shortcuts')
@include('livewire.pos.scripts.general')
@include('livewire.pos.scripts.scan')

<!-- <i class="fas fa-bars"></i>
<i class="fas fa-barcode"></i>
<i class="fas fa-ban"></i>
<i class="fas fa-backspace"></i>
<i class="fas fa-box"></i>
<i class="fas fa-braille"></i>
<i class="fas fa-calendar-day"></i>
<i class="fas fa-calendar-alt"></i>
<i class="far fa-calendar-alt"></i>
<i class="fas fa-calendar-check"></i>
<i class="fas fa-calendar"></i>
<i class="fas fa-cash-register"></i>
<i class="fas fa-cart-plus"></i>
<i class="far fa-check-square"></i>
<i class="fas fa-check-double"></i>
<i class="fas fa-clipboard-list"></i>
<i class="far fa-clipboard"></i>
<i class="fas fa-clipboard"></i>
<i class="fas fa-cogs"></i>
<i class="fas fa-cog"></i>
<i class="fas fa-file-invoice-dollar"></i>
<i class="fas fa-house-user"></i>
<i class="fas fa-shopping-cart"></i>
<i class="fas fa-th"></i>
<i class="fas fa-th-large"></i>
<i class="fas fa-th-list"></i>
<i class="fas fa-trash"></i>
<i class="fas fa-trash-restore"></i>
<i class="fas fa-trash-alt"></i>
<i class="fas fa-trash-restore-alt"></i>
<i class="fas fa-user"></i>
<i class="fas fa-user-alt"></i>
<i class="fas fa-user-alt-slash"></i>
<i class="fas fa-user-check"></i>
<i class="fas fa-user-cog"></i>
<i class="fas fa-user-friends"></i>
<i class="fas fa-users"></i>
<i class="fas fa-user-tie"></i> -->
