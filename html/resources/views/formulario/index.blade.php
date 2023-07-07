<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Alumnos Registrados</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        *{ 
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        main{
            padding: 2% 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-content: center;
            width: 90%;
            margin: auto;

            background-color: lightgray;
            box-shadow: darkslategray;
        }

        main p {
            position: relative;
            padding: 2%;

        }

        h2 {
            margin-bottom: 2%;
            color: #012060;
        }

        table {
            width: 100%;
        }

        thead {
            border-bottom: 1px #012060;
        }

        th {

            padding: 0 2%;
            font-weight: 400;
            font-size: 0.8rem;
            text-align: center;
            border-bottom: 1px #012060;
        }

    </style>
</head>
<body>
    <main>
        <!-- <p><a href="./formulario/registro"> crear nuevo</a></p> -->
        <div>
            <div>
                <h2>Inscripciones al formulario</h2>
            </div>
           
            <table>           
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Email</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Programa elegido</th>
                        <th scope="col">Cómo conoció el programa</th>
                        <th scope="col">Residente en España</th>
                        <th scope="col">Año de nacimiento</th>
                        <th scope="col">Ciudad de residencia</th>
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