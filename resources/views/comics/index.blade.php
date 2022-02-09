@extends('layout.layoutBase')

@section('TitleComponent')
    Comics    
@endsection

@section('MainComponent')

    <button class="btn btn-primary" type="submit">Button</button>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Price</th>
            <th scope="col">Release Date</th>
            <th scope="col">Edition Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th>{{$comic->id}}</th>
                    <th>{{$comic->title}}</th>
                    <th>{{$comic->series}}</th>
                    <th>{{$comic->price}}</th>
                    <th>{{$comic->sale_date}}</th>
                    <th>{{$comic->type}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
       
@endsection