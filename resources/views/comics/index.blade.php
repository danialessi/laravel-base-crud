@extends('layouts.app')

@section('main_content')
    <h1>Lista fumetti</h1>
    <div><button><a href="{{ route('comics.create') }}">Aggiungi fumetto</a></button></div>

    @foreach ($comics as $comic)
    <div>
        <div><img src="{{ $comic->cover }}" alt=""></div>
        <div><strong>Nome: </strong>{{$comic->name}}</div>
        <div><button><a href="{{ route('comics.show', ['comic' => $comic->id ]) }}">Dettagli</a></button></div>
        <div><button><a href="{{ route('comics.edit', ['comic' => $comic->id ]) }}">Modifica fumetto</a></button></div>
    </div> 
    @endforeach
@endsection