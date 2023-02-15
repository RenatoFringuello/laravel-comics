<a href="{{route('comics.show', $comic)}}" class="book">
    <div class="img-container">
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
    </div>
    <div class="text">{{ $comic['series'] }}</div>
    <div class="text">{{ $comic['price'] }}</div>
</a>