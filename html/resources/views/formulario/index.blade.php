<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Alumnos Registrados</title>
    <style>
        main{
            display: flex;
            justify-content: center;
            align-content: center;
        }
        .listado{
            border:1px solid red;
            display:flex;
            flex-direction: row;
            margin-bottom: 1rem;
        }

    </style>
</head>
<body>
    <main>
        <p><a href="./formulario/registro"> crear nuevo</a></p>
        <div>
            <div>
                <h2>Lista de Alumnos</h2>
            </div>

            @foreach($alumno as $alumnos )
            <div>{{ $alumnos->id }}&nbsp;&nbsp;&nbsp;  {{ $alumnos->nombre}}&nbsp;&nbsp; {{ $alumnos->apellido}} </div>
            @endforeach
        </div>
    </main>
</body>
</html>