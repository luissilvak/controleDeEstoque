@extends('layout')

@section('content')
    <h2>Editar Produto</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $product-> name }}" required>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description">{{ $product->description }}</textarea>

        <label for="quantify">Quantidade:</label>
        <input type="number" name="quantify" id="quantify" value="{{ $product-> }}" required>

        <label for="price">Preço:</label>
        <input type="text" name="price" id="price" value="{{ $product->price }}" required>

        <label for="category_id">Categoria:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="image">Imagem:</label>
        <input type="file" name="image" id="image">

        <button type="submit">Salvar</button>
    </form>
@endsection
