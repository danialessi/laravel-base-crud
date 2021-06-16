@extends('layouts.app')

@section('main_content')
    <h1>Aggiungi fumetto</h1>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        @method('POST')

        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
        </div>
        
        <div>
            <label for="year">Anno</label>
            <input type="text" name="year" id="year">
        </div>

        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price">
        </div>

        <div>
            <label for="cover">Copertina</label>
            <input type="text" name="cover" id="cover">
        </div>

        <input type="submit" value="Salva prodotto">
    </form>
    
@endsection