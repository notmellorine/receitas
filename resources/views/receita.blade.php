<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$item}}</h1>
    <h3>Ingredientes:</h3>
    <ul>
        @foreach ($ingredientes as $ingrediente)
            <li>{{$ingrediente}}</li>
        @endforeach
    </ul>
    <h3>Modo de preparo:</h3>
    <p>
        @foreach($preparo as $preparos)
            <li>{{$preparos}}</li>
        @endforeach
    </p>
</body>
</html>
