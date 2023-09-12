<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livro de receitas</title>
</head>
<body>
    <h1>Sumário:</h1>
    <h2>Pratos Principais</h2>
    <ul>
        {{-- linka cada item com sua respectiva página de receita --}}
        @foreach ($receita as $receitas)
            <li><a href={{url('pagina', $receitas['id'])}}>{{$receitas['name']}}</a></li>
        @endforeach
    </ul>
</body>
</html>
