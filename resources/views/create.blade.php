@extends('layouts.app')

@section('title', 'DC Comics - Add a new Superheroes')

@section('cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
@endsection

@section('form-create')
    <section class="form-container py-4">

        <form action="{{route('store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label text-white text-capitalize" for="title">title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="mb-3">
                <label class="form-label text-white text-capitalize" for="description">description</label>
                <textarea name="description" class="form-control" id="description" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label text-white text-capitalize" for="thumb">thumbnail path</label>
                <input type="text" class="form-control" name="thumb" id="thumb">
            </div>
            <div class="mb-3">
                <label class="form-label text-white text-capitalize" for="price">price</label>
                <input type="number" class="form-control" name="price" id="price">
            </div>
            <div class="mb-3">
                <label class="form-label text-white text-capitalize" for="series">series</label>
                <input type="text" class="form-control" name="series" id="series">
            </div>
            <div class="mb-3">
                <label class="form-label text-white text-capitalize" for="sale_date">sale date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date">
            </div>
            <div class="mb-3">
                <label class="form-label text-white text-capitalize" for="type">type</label>
                <input type="text" class="form-control" name="type" id="type">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection