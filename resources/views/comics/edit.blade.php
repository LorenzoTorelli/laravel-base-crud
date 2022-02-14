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
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title"  placeholder="Insert Comic Title" value="{{$comic->title}}">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control  @error('series') is-invalid @enderror" id="series" name="series"  placeholder="Insert Comic Serie" value="{{$comic->series}}">
            @error('series')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Edition Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"  placeholder="Insert Comic Type" value="{{$comic->type}}">
            @error('type')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Release Date</label>
            <input type="date" class="form-control rol @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date"  value="{{$comic->sale_date}}">
            @error('sale_date')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price"  placeholder="Set price" value="{{$comic->price}}">
            @error('price')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Image URL</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"  placeholder="Insert Image URL" value="{{$comic->thumb}}">
            @error('thumb')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="10" placeholder="Insert Description">{{$comic->description}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
       <button class="btn btn-success" type="submit" >Modifica</button>
        <a class="btn btn-secondary" href="{{route("comics.index")}}" role="button">Comics List</a>
        
    </form>
@endsection