<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 1</title>
</head>
<body>
    <h1>Essa é a page 1!</h1>
    <br>
    <form action="{{ url('page2') }}" method="post">
    @csrf
        <label for="name">Digite seu nome:</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Navegar para page 2">
    </form>

</body>
</html>