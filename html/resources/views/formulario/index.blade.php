@extends('layout.default')
@section('css')
<link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<div>
    <div>
        <div>
            <div>
                <div>Control de Usuarios</div>
  
                <div>
        
                    <a href="{{ route('formulario.step.one') }}">Añadir Usuario</a>
  
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="display nowrap" style="width:100%" id="myTable">
                        <thead class="thead-dark">
                        <tr>
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
                                <th scope="row">{{$alumno->id}}</th>
                                <td>{{$alumno->nombres}}</td>
                                <td>{{$alumno->apellidos}}</td>
                                <td>{{$alumno->email}}</td>
                                <td>{{$alumno->dni_nie_pasaporte}}</td>
                                <td>{{$alumno->telefono}}</td>
                                <td>{{$alumno->residente}}</td>
                                <td>{{$alumno->ciudad_residencia}}</td>
                                <td>{{$alumno->pais_nacimiento}}</td>
                                <td>{{$alumno->rango_edad}}</td>
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
                                <td>{{$alumno->presentacion_breve}}</td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
    // let table = new DataTable('#myTable');
    new DataTable('#myTable', {
    scrollX: true
});;
</script>
@endsection
@endsection
