@extends('layout')

@section('content')
    <h2>Adicionar Produto</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description"></textarea>

        <label for="quantify">Quantidade:</label>
        <input type="number" name="quantify" id="quantify" required>

        <label for="price">Preço:</label>
        <input type="text" name="price" id="price" required>

        <label for="category_id">Categoria:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id}}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="image">Imagem:</label>
        <input type="file" name="image" id="image">

        <button type="submit">Adicionar</button>
    </form>
@endsection