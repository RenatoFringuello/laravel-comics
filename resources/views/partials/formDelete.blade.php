<form action="{{route('comics.delete', $comic->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="sans-narrow me-3 bg-danger filled text-white" >delete comic</button> 
</form>