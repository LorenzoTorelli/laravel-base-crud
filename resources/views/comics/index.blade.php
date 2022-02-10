@extends('layout.layoutBase')

@section('TitleComponent')
    Comics    
@endsection

@section('MainComponent')
    <h1 class="text-uppercase">Comics List</h1>
    <a class="btn btn-success" href="{{route("comics.create")}}" role="button">Add new Comic</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Price</th>
            <th scope="col">Release Date</th>
            <th scope="col">Edition Type</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>


        </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th>{{$comic->id}}</th>
                    <th>{{$comic->title}}</th>
                    <th>{{$comic->series}}</th>
                    <th>{{$comic->price}} &dollar;</th>
                    <th>{{$comic->sale_date}}</th>
                    <th>{{$comic->type}}</th>
                    <th><a class="btn btn-primary" href="{{route("comics.show",$comic->id)}}" role="button">View</a></th>
                    <th><a class="btn btn-info" href="{{route("comics.edit",$comic->id)}}" role="button">Edit</a></th>
                    <th>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit" >Delete</button>
                        </form>
                    </th>


                </tr>
            @endforeach
        </tbody>
    </table>
       
@endsection