@extends('layout.layoutBase')

@section('TitleComponent')
    {{$comic->title}}    
@endsection

@section('MainComponent')

    <a class="btn btn-secondary" href="{{route("comics.index")}}" role="button">Comics List</a>

    <div class="row mt-4">
        <div class="col-2 ">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
        <div class="col-10 pl-5">
            <h1>{{$comic->title}}</h1>
            <h2>{{$comic->series}}</h2>
            <h4>{{$comic->price}}  &dollar;</h4>
            <h4>{{$comic->type}}</h4>
            <h4>{{$comic->sale_date}}</h4>
        </div>
    </div>
   
    
@endsection