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
                        <a class="nav-link" href="{{route('admin.pages.create')}}">Create</a>
                      </li>
                    </ul>
                  </div>
                </nav>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Created_At</th>
                            <th>Updated_At</th>
                            <th colspan="3">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                            {{-- @dd($page->categories) --}}
                            <tr>
                                <td>{{$page->id}}</td>
                                <td>{{$page->title}}</td>
                                <td>{{$page->category->name}}</td>
                                <td>
                                    @foreach ($page->tags as $tag)
                                      {{$tag->name}} <br>
                                    @endforeach
                                </td>
                                <td>{{$page->created_at}}</td>
                                <td>{{$page->updated_at}}</td>
                                <td><a href="{{route('admin.pages.show', $page->id)}}">Visualizza</a></td>
                                <td>Modifica</td>
                                <td>Elimina</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
