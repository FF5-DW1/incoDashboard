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
            

            @foreach($alumno as $alumno )
                <div class="listado">  
                    
                     <div>{{ $alumno->id}} </div>
                    <div>{{ $alumno->nombre}} </div>
                    <div>{{ $alumno->email}}</div>
                    <div>{{ $alumno->telefono}}</div>
                    <div>{{ $alumno->programa}}</div>
                    <div>{{ $alumno->cprograma}}</div>
                    <div>{{ $alumno->residencia}}</div>
                    <div>{{ $alumno->fnacimiento}}</div>
                    <div>{{ $alumno->pnacimiento}}</div>
                    <div>{{ $alumno->sprofesional}}</div>
                    <div>{{ $alumno->situacion}}</div>
                    <div>{{ $alumno->neducación}}</div>
                    <div>{{ $alumno->permisoTrabajo}}</div>
                    <div>{{ $alumno->tienes_ordenador}}</div>
                    <div>{{ $alumno->cingles}}</div>
                    <div>{{ $alumno->disponibilidad}}</div>
                    
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>