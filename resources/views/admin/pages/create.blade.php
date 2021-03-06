@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.pages.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="title">titolo</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="summary">sommario</label>
                        <input type="text" name="summary" id="summary" class="form-control" value="{{old('summary')}}">
                        @error('summary')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">testo</label>
                        <textarea name="body" cols="30" rown="10" id="body" class="form-control">{{old('body')}}</textarea>
                        @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="" id="category_id" name="category_id">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{(!empty(old('category_id'))) ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        {{-- $tags è una collection da DB --}}
                        <h5>Tags</h5>
                        @foreach ($tags as $tag)
                        <label for="tags-{{$tag->id}}">{{$tag->name}}</label>
                        <input type="checkbox" name="tags[]" id="tags-{{$tag->id}}" value="{{$tag->id}}" {{(is_array(old('tags')) && in_array($tag->id, old('tags'))) ? 'checked' : ''}}>
                        {{-- controllo  ad ogni giro che old(tags) sia un array, e controllo se all'interno dell'array old(tags) è presente il mio $tag->id --}}
                        @endforeach
                        @error('tags')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <h5>Photo</h5>
                        @foreach ($photos as $photo)
                        <label for="photos-{{$photo->id}}">{{$photo->name}}</label>
                        <input type="checkbox" name="photos[]" id="photos-{{$photo->id}}" value="{{$photo->id}}">
                        @endforeach
                        @error('photos')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="submit" value="salva" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
