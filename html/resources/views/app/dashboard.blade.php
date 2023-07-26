@extends('layout.home')
@section('css')
<link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')

{{-- <header>
    @auth
    Bienvenido: 
    {{Auth::user()->nombre}} 
    @endauth
</header> --}}
<div class="overview-boxes">
    <div class="box">
        <div class="right-side">
            <div class="box-topic">Total Registrados</div>
            <div class="number">{{$totalAlumnos}}</div>          
        </div>
</div>
<div class="box">
    <div class="right-side">
        <div class="box-topic">Total Aceptados</div>
        <div class="number">{{$totalAceptados}}</div>    
    </div>

</div>
<div class="box">
    <div class="right-side">
        <div class="box-topic">Total Mujeres</div>
        <div class="number">{{$totalMujeres}}</div>
    </div>
</div>
<div class="box">
    <div class="right-side">
        <div class="box-topic">Total Pendientes</div>
        <div class="number">{{$totalPendientes}}</div>
    </div>
</div>
</div>

<div class="data_table">
    <div>
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <div class="table_header_dashboard">
            <p>Últimos registros</p>
            <a href="{{ route('formulario.step.one') }}">Añadir inscripción</a>
        </div>
        <table class="display nowrap" style="width:100%" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Edit</th>
                    <th scope="col">Estado</th>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Identificación</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Residente</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Pais Nac.</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Programa</th>
                    <th scope="col">Canal</th>
                    <th scope="col">Sit. Profesional</th>
                    <th scope="col">Sit. Academica</th>
                    <th scope="col">Estudios</th>
                    <th scope="col">Permiso trabajo</th>
                    <th scope="col">Ordenador</th>
                    <th scope="col">Disponibilidad</th>
                    <th scope="col">Nivel Ingles</th>
                    <th scope="col">Presentación</th>

                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td>
                        <a href="{{ route('formulario.edit.dashboard', $alumno->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>{{$alumno->estado}}</td>
                    <td>{{$alumno->id}}</td>
                    <td>{{$alumno->nombres}}</td>
                    <td>{{$alumno->apellidos}}</td>
                    <td>{{$alumno->email}}</td>
                    <td>{{$alumno->dni_nie_pasaporte}}</td>
                    <td>{{$alumno->telefono}}</td>
                    <td>{{$alumno->residente}}</td>
                    <td>{{$alumno->ciudad_residencia}}</td>
                    <td>{{$alumno->pais_nacimiento}}</td>
                    <td>{{$alumno->edad}}</td>
                    <td>{{$alumno->genero}}</td>
                    <td>{{$alumno->programa_elegido}}</td>
                    <td>{{$alumno->canal_captacion}}</td>
                    <td>{{$alumno->situacion_profesional}}</td>
                    <td>{{$alumno->situacion_actual}}</td>
                    <td>{{$alumno->nivel_educacion}}</td>
                    <td>{{$alumno->permiso_trabajo_es}}</td>
                    <td>{{$alumno->disponibilidad_ordenador}}</td>
                    <td>{{$alumno->disponibilidad_horaria}}</td>
                    <td>{{$alumno->nivel_ingles}}</td>
                    <td class="presentation-column">
                        @if (strlen($alumno->presentacion_breve) > 10)
                        {{ substr($alumno->presentacion_breve, 0, 10) }}...
                        <button class="read-more-btn" data-full-text="{{ $alumno->presentacion_breve }}">Leer más</button>
                        @else
                        {{ $alumno->presentacion_breve }}
                        @endif
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p id="modalText"></p>
    </div>
</div>
@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
    // let table = new DataTable('#myTable');
    new DataTable('#myTable', {
        scrollX: true
    });
</script>
<script>
    $(document).ready(function() {
        // Configurar evento para el botón "Leer más"
        $('.read-more-btn').on('click', function() {
            var fullText = $(this).data('full-text');
            $('#modalText').text(fullText);
            $('#myModal').css('display', 'block');
        });

        // Configurar evento para cerrar el modal
        $('.close').on('click', function() {
            $('#myModal').css('display', 'none');
        });

        // Si se hace clic fuera del modal, también se cerrará.
        $(window).on('click', function(event) {
            if (event.target === document.getElementById('myModal')) {
                $('#myModal').css('display', 'none');
            }
        });
    });
</script>
@endsection
@endsection