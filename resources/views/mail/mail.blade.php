<h1>{{$page->title}}</h1>
<h3><small>Categoria: </small>{{$page->category->name}}</h3>
<p><small>autore: </small>{{$page->user->name}}</p>
<p><small>ultima modifica: </small>{{$page->updated_at}}</p>
<div>
    <p>{{$page->body}}</p>
</div>
@if($page->tags->count() > 0)
    <div>
        <h5>Tags</h5>
        <ul>
            @foreach ($page->tags as $tag)
            <li>{{$tag->name}}</li>
            @endforeach
        </ul>
    </div>
@endempty
@if($page->photos->count() > 0)
    <div>
        <h5>Photos</h5>
        <ul>
            @foreach ($page->photos as $photo)
            <li>{{$photo->name}}</li>
            @endforeach
        </ul>
    </div>
@endempty
