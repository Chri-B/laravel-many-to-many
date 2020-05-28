@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.pages.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="title">titolo</label>
                        <input type="text" name="title" id="title" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="summary">sommario</label>
                        <input type="text" name="summary" id="summary" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="body">testo</label>
                        <textarea name="body" cols="30" rown="10" id="body" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="" id="category_id" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        @foreach ($tags as $tag)
                            <label for="tags-{{$tag->id}}">{{$tag->name}}</label>
                            <input type="checkbox" name="tags[]" id="tags-{{$tag->id}}" value="{{$tag->id}}">
                        @endforeach
                    </div>
                    <div class="form-group">
                        @foreach ($photos as $photo)
                            <label for="photos-{{$photo->id}}">{{$photo->name}}</label>
                            <input type="checkbox" name="photos[]" id="photos-{{$photo->id}}" value="{{$photo->id}}">
                        @endforeach
                    </div>
                    <input type="submit" value="salva" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
