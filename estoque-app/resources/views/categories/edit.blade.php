@extends('layout')

@section('content')
    <h2>Editar Categoria</h2>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" required>

        <button type="submit">Salvar</button>
    </form>
@endsection