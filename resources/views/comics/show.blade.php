@extends('layouts.app')

@section('main_content')
    <h1>Dettagli fumetto</h1>

    <div><img src="{{ $comic->cover }}" alt=""></div>
    <div><strong>Nome: </strong>{{$comic->name}}</div>
    <div><strong>Anno: </strong>{{$comic->year}}</div>
    <div><strong>Descrizione: </strong>{{$comic->description}}</div>
    <div><strong>Prezzo: </strong>{{$comic->price}} €</div>
@endsection