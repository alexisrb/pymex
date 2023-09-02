@extends('adminlte::page')

@section('title', 'War Room System')

@section('content')
    @livewire('admin.campaign-strategies.campaign-strategy-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop