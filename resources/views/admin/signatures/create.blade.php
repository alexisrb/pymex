@extends('adminlte::page')

@section('title', 'War Room System')

@section('content')
    @livewire('admin.signatures.signatures-create')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop