@extends('layouts.app')

@section('title', 'DC Comics')

@section('cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
@endsection

@section('comics-cards')
    <section class="comics-cards">
        @include('partials.jumbotron')
        <div class="container">
            <div class="wrapper">
                @foreach ($comics as $index => $comic)
                    @if ($index < $maxBookRequested)
                        @include('partials.book', $comic)
                    @endif
                @endforeach
            </div>
            <div class="btn-container">
                <button 
                    class="sans-narrow filled {{ (count($comics) <= $maxBookRequested) ? 'disabled' : 'clickable'  }}" 
                    {{-- @click="maxBookRequested += (nBookPerRow * 2)" --}}
                    >
                    load more
                </button>
                <a href="{{route('create')}}" class="sans-narrow filled text-white py-1">add comic</a>
            </div>
        </div>
    </section>
@endsection