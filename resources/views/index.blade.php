<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container {
            display: flex;
            justify-content: space-around;
        }
        .btn {
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{route('alumnos.index')}}" class="btn btn-success mb-3">Alumnos</a>
        <a href="{{route('recetas.index')}}" class="btn btn-success mb-3">Recetas</a>
        <a href="{{route('libros.index')}}" class="btn btn-success mb-3">Libros</a>
    </div>

    
</body>
</html>