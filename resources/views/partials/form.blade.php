<section class="form-container py-4">
    {{-- @dump($action, $method, $methodMap, $comic->id) --}}
    <form action="{{route($action, $comic->id)}}" method="{{$method}}">
        @if ($errors->any())
            <div class="p-3 mb-3 bg-danger rounded-3">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf
        @if (isset($methodMap))
            @method($methodMap)
        @endif

        <div class="mb-3">
            <label class="form-label text-white text-capitalize" for="title">title</label>
            <input type="text" class="form-control" value="{{$comic->title}}" name="title" id="title">
        </div>
        <div class="mb-3">
            <label class="form-label text-white text-capitalize" for="description">description</label>
            <textarea name="description" class="form-control" id="description" rows="4">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label text-white text-capitalize" for="thumb">thumbnail path</label>
            <input type="text" class="form-control" value="{{$comic->thumb}}" name="thumb" id="thumb">
        </div>
        <div class="mb-3">
            <label class="form-label text-white text-capitalize" for="price">price</label>
            <input type="text" class="form-control" value="{{$comic->price}}" name="price" id="price">
        </div>
        <div class="mb-3">
            <label class="form-label text-white text-capitalize" for="series">series</label>
            <input type="text" class="form-control" value="{{$comic->series}}" name="series" id="series">
        </div>
        <div class="mb-3">
            <label class="form-label text-white text-capitalize" for="sale_date">sale date</label>
            <input type="date" class="form-control" value="{{$comic->sale_date}}" name="sale_date" id="sale_date">
        </div>
        <div class="mb-3">
            <label class="form-label text-white text-capitalize" for="type">type</label>
            <input type="text" class="form-control" value="{{$comic->type}}" name="type" id="type">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>