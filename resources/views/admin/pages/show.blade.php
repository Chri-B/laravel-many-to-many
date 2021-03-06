@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-center">
                      <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.pages.index')}}">Index</a>
                      </li>
                    </ul>
                  </div>
                </nav>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif (session('failure'))
                    <div class="alert alert-danger">
                        {{ session('failure') }}
                    </div>
                @endif
                <h2>{{$page->title}}</h2>
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
            </div>
        </div>
    </div>
@endsection
