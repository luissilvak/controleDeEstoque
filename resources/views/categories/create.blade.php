@extends('layout')

@section('content')
    <h2>Adicionar Categoria</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>

        <button type="submit">Adicionar</button>
    </form>
@endsection