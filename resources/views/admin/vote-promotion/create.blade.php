@extends('adminlte::page')

@section('title', 'War Room System')

@section('content')
    @livewire('admin.vote-promotion.vote-promotion-create')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop