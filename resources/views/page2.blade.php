<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2</title>
</head>
<body>
    <h1>Está é a page 2</h1>

    <p>Plus -> Meu nome é: 
        @foreach ($name as $names) 
        {{$names['name']}}
        @endforeach
    </p>
 
    <a href="{{ url('') }}">Voltar para page 1</a>
</body>
</html>