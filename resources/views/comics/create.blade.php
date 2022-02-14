@extends('layout.layoutBase')

@section('TitleComponent')
    Add new
@endsection

@section('MainComponent')
    <h1 class="text-uppercase mb-5">Add new Comic </h1>
    <form action="{{route('comics.store')}}" method="post" >
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title"  placeholder="Insert Comic Title" value="{{old('name')}}">
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"  placeholder="Insert Comic Serie" value="{{old('series')}}">
            @error('series')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Edition Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"  placeholder="Insert Comic Type"  value="{{old('type')}}">
            @error('type')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="sale_date">Release Date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}"> 
            @error('sale_date')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price"  placeholder="Set price" value="{{old('price')}}">
            @error('price')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="thumb">Image URL</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"  placeholder="Insert Image URL" value="{{old('thumb')}}">
            @error('thumb')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="10" placeholder="Insert Description" value="{{old('description')}}"></textarea>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
       <button class="btn btn-success" type="submit" >Add to Database</button>
        <a class="btn btn-secondary" href="{{route("comics.index")}}" role="button">Comics List</a>

        {{-- @if ($errors-> any()) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    </form>
@endsection