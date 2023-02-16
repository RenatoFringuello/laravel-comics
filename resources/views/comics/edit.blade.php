@extends('layouts.app')

@section('title',  "DC Comics - {$comic['series']}")

@section('cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
@endsection

@section('form-create')
    {{-- @dump(['action' => 'comics.update', 'method' => 'POST', 'methodMap' => 'PUT', 'comic' => $comic]); --}}
    @include('partials.form', ['action' => 'comics.update', 'method' => 'POST', 'methodMap' => 'PUT', 'comic'])
@endsection

@section('scripts')
    <script src="{{Vite::asset('./resources/js/scripts/actionConfirm.js')}}"></script>
@endsection