<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="public/css/app.css"></link>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Controle de Estoque</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('products.index') }}">Produtos</a></li>
                    <li><a href="{{ route('categories.index') }}">Categorias</a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
