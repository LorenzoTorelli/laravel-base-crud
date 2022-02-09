@extends('layout.layoutBase')

@section('TitleComponent')
    Add new
@endsection

@section('MainComponent')
    <h1 class="text-uppercase mb-5">Add new Comic </h1>
    <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"  placeholder="Insert Comic Title">
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series"  placeholder="Insert Comic Serie">
        </div>
        <div class="form-group">
            <label for="type">Edition Type</label>
            <input type="text" class="form-control" id="type" name="type"  placeholder="Insert Comic Type">
        </div>
        <div class="form-group">
            <label for="sales_date">Release Date</label>
            <input type="date" class="form-control" id="sales_date" name="sales_date">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price"  placeholder="Set price">
        </div>
       
        <a class="btn btn-success" href="#" role="button">Add to Database</a>
        <a class="btn btn-secondary" href="{{route("comics.index")}}" role="button">Comics List</a>
        <a class="btn btn-danger" href="{{route("comics.index")}}" role="button">Comics List</a>
    </form>
@endsection