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
                    {{-- limit the comic show --}}
                    @include('partials.book', $comic)
                @endforeach
            </div>
            <div class="btn-container">
                @if (!$isAllLoaded)
                    <a  class="sans-narrow filled text-white py-1 me-2" 
                        href="{{route('home', ['loadBook' => count($comics) + 12])}}">
                        load more
                    </a>
                @else
                    <span class="sans-narrow filled text-white py-1 me-2 disabled">load more</span>
                @endif
                <a href="{{route('comics.create')}}" class="sans-narrow filled text-white py-1">add comic</a>
            </div>
        </div>
    </section>
@endsection