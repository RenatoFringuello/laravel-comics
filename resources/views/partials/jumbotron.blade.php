<div class="jumbotron">
    @if (isset($thumb))
        <div class="filled">
            <div class="comic-container">
                <img class="comic-img img-fluid" src="{{$thumb}}" alt="">
            </div>
        </div>
    @else
        <div class="container">
            <div class="sans-narrow filled">current series</div>
        </div>
    @endif
</div>