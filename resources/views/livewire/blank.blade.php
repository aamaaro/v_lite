@extends('layouts.theme.app')
{{-- @extends('adminlte::page') --}}

@section('title', 'CRUD Categorías')

@section('content_header')
<h1>
    Categorías
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
        Crear
    </button>
</h1>
@stop

@section('content')
<div>
    @include('livewire.startpage.init')
</div>
@stop
