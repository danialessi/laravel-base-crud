@extends('layouts.app')

@section('main_content')
    <h1>Aggiungi fumetto</h1>

    <form action="{{ route('comics.store') }}">
        @csrf
        @method('POST')

        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
    </form>
    
@endsection