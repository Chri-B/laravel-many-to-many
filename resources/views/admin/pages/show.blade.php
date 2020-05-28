@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{$page->title}}</h2>
                {{-- <h3>Categoria :{{$page->category->name}}</h3> --}}
                <p>autore: {{$page->user->name}}</p>
                <small>ultima modifica: {{$page->updated_at}}</small>
                <div>
                    {{$page->body}}
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
            </div>
        </div>
    </div>
@endsection
