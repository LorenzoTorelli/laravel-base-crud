@extends('layout.layoutBase')

@section('TitleComponent')
    Comics    
@endsection

@section('MainComponent')
    <ul>
        @foreach ($comics as $comic)
            <li>{{$comic->title}}</li>
        @endforeach    
    </ul>
@endsection