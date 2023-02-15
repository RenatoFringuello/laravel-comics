@extends('layouts.app')

@section('title', "DC Comics - {$comic['series']}")

@section('cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
@endsection

@section('comic-info')
    <section class="comic-info bg-light">
        @include('partials.jumbotron', ['thumb' => $comic['thumb']])
        {{-- @dump($comic) --}}
        <section class="comic-container post d-flex">
            <div class="left">
                <h4 class="title sans-narrow text-uppercase mb-3">{{ $comic['title'] }}</h4>
                <div class="price-section mb-3 d-flex justify-content-between text-white">
                    <div class="left d-flex justify-content-between py-2 px-3">
                        <div class="price"> <span class="opacity-75">U.S. Price:</span> ${{$comic['price']}}</div>
                        <div class="available text-uppercase opacity-75"> available</div>
                    </div>
                    <div class="right py-2 px-3">
                        <select class="text-white" name="availability" id="">
                            <option value="-">Check Availability</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                        </select>
                    </div>
                </div>
                <p class="description mb-5">{{ $comic['description'] }}</p> 
            </div>
            <div class="right ">
                <div class="adv-container">
                    <div class="adv-text text-uppercase sans-narrow">Advertisement</div>
                    <img class="img-fluid " src="{{ Vite::asset('resources/assets/images/adv.jpg')}}" alt="">
                </div>
            </div>
        </section>
    </section>
@endsection