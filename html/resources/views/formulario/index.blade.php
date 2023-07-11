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
            width: 80%;
            margin: auto;
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
    <header>
        @auth
        Estoy logado
        {{Auth::user()->email}}
        @endauth
    </header>
    <main>
        <p><a href="./formulario/registro"> crear nuevo</a></p>
        <div>
            <div>
                <h2>Lista de Alumnos</h2>
            </div>
           
            <table>           
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">email</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Programa</th>
                        <th scope="col">C_programa</th>
                        <th scope="col">Vives_España</th>
                        <th scope="col">Fecha_nacimeinto</th>
                        <th scope="col">Recidencia</th>
                        <!--<th scope="col">Pais_Nacimiento</th>
                        <th scope="col">S_profecional</th>
                        <th scope="col">Situacion</th>
                        <th scope="col">N_Educacion</th>
                        <th scope="col">P_trabajo</th>
                        <th scope="col">Ordenador</th>
                        <th scope="col">C_ingles</th>
                        <th scope="col">Disponibilidad</th>
                        <th scope="col">Estado</th>-->

                    </tr>
                </thead>
                <tbody>
                @foreach($alumnos as $alumno )
                   <tr> 
                        
                        <th scope="row">{{ $alumno->id}} </th>
                        <th>{{ $alumno->nombre}} </th>
                        <th>{{ $alumno->apellido}} </th>
                        <th>{{ $alumno->email}} </th>
                        <th>{{ $alumno->telefono}}</th>
                        <th>{{ $alumno->programa}}</th>
                        <th>{{ $alumno->cprograma}}</th>
                        <th>{{ $alumno->vivesE}}    </th>
                        <th>{{ $alumno->fnacimiento}}</th>
                        <th>{{ $alumno->residencia}}</th> 
                        
                        
                    </tr>
                @endforeach
            </tbody> 
            </table> 
        </div>
    </main>
</body>
</html>