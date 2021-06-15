@extends('layouts.app')

@section('main_content')
    <h1>Lista fumetti</h1>

    @foreach ($comics as $comic)
    <div>
        <div><img src="{{ $comic->cover }}" alt=""></div>
        <div><strong>Nome: </strong>{{$comic->name}}</div>
        <div><a href="{{ route('comics.show', ['comic' => $comic->id ]) }}">Dettagli</a></div>
        <div><a href="{{ route('comics.create') }}">Aggiungi fumetto</a></div>
    </div> 
    @endforeach
@endsection