@extends('layouts.app')

@section('title', 'DC Comics - Add a new Superheroes')

@section('cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
@endsection

@section('form-create')
    @include('partials.form', ['action' => 'comics.store', 'method' => 'POST', 'methodMap' => '', 'comic'])
@endsection