@extends('layouts.app')

@section('main_content')
    <h1>Modifica fumetto {{ $comic->name}} </h1>

    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ $comic->name }}">
        </div>
        
        <div>
            <label for="year">Anno</label>
            <input type="text" name="year" id="year" value="{{ $comic->year }}">
        </div>

        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" value="{{ $comic->description }}"></textarea>
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="{{ $comic->price }}">
        </div>

        <div>
            <label for="cover">Copertina</label>
            <input type="text" name="cover" id="cover" value="{{ $comic->cover }}">
        </div>

        <input type="submit" value="Salva prodotto">
    </form>
    
@endsection