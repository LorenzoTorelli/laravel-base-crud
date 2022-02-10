@extends('layout.layoutBase')

@section('TitleComponent')
    Add new
@endsection

@section('MainComponent')
    <h1 class="text-uppercase mb-5">EDIT: {{$comic->title}} </h1>
    <form action="{{route('comics.update', $comic->id)}}" method="post" >
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"  placeholder="Insert Comic Title" value="{{$comic->title}}">
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series"  placeholder="Insert Comic Serie" value="{{$comic->series}}">
        </div>
        <div class="form-group">
            <label for="type">Edition Type</label>
            <input type="text" class="form-control" id="type" name="type"  placeholder="Insert Comic Type" value="{{$comic->type}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Release Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date"  value="{{$comic->sale_date}}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price"  placeholder="Set price" value="{{$comic->price}}">
        </div>
        <div class="form-group">
            <label for="thumb">Image URL</label>
            <input type="text" class="form-control" id="thumb" name="thumb"  placeholder="Insert Image URL" value="{{$comic->thumb}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="10" placeholder="Insert Description">{{$comic->description}}</textarea>

        </div>
       <button class="btn btn-success" type="submit" >Modifica</button>
        <a class="btn btn-secondary" href="{{route("comics.index")}}" role="button">Comics List</a>
    </form>
@endsection