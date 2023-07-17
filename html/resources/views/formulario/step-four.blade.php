@extends('layout.default')
@section('content')


    <div class="form-outer">
        <form action="{{ route('formulario.step.four.store') }}" method="POST" >
            @csrf
            <!-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->

            <!-- pagina 4 -->
            <div class="page">

                <div class="title-page">
                    <p>4/5</p>
                    <h2>Datos profesionales</h2>
                </div>

                <div class="form-content">
                    <div class="page-step-title">
                        <p>Rellena todos los campos</p>
                    </div>

                    <!--campo 14 cambiar a checkbox para elegir mas de una opcion-->
                    <div class="field">
                        <div class="label_input">
                            <label for="situacion_actual">¿que situación que define mejor? 
                                <div class="radio-control">
                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_actual" id="acceso-limitado-a-educacion" value="acceso-limitado-a-educacion" {{ $alumno->situacion_actual == 'acceso-limitado-a-educacion' ? 'checked' : '' }}>Tengo acceso limitado a la educación superior
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_actual" id="origen-migrante" value="origen-migrante" {{ $alumno->situacion_actual == 'si' ? 'checked' : '' }}>Tengo origen migrante
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_actual" id="sin-expectativas-profesionales" value="sin-expectativas-profesionales" {{ $alumno->situacion_actual == 'sin-expectativas-profesionales' ? 'checked' : '' }}>No tengo expectativas profesionales
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_actual" id="cuido-miembro-de-familia" value="cuido-miembro-de-familia" {{ $alumno->situacion_actual == 'cuido-miembro-de-familia' ? 'checked' : '' }}>Cuido a un miembro de mi familia
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_actual" id="madre-padre-soltero" value="madre-padre-soltero" {{ $alumno->situacion_actual == 'madre-padre-soltero' ? 'checked' : '' }}>Soy madre/padre soltero
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_actual" id="mundo-rural" value="mundo-rural" {{ $alumno->situacion_actual == 'mundo-rural' ? 'checked' : '' }}>Vivo en el mundo rural
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_actual" id="prefiero-no-decir" value="prefiero-no-decir" {{ $alumno->situacion_actual == 'prefiero-no-decir' ? 'checked' : '' }}>Prefiero no decirlo
                                    </div>
                                </div>
                            </label>
                            @error('situacion_actual')
                            <span class="error-message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- campo 15 -->
                    <div class="field">
                        <div class="label_input">
                            <label for="nivel_educacion">¿cuál es tu nivel de educación?
                                <div class="radio-control">
                                    <div class="radio-control-option">
                                        <input type="radio" name="nivel_educacion" id="sin-estudios-primaria-incompleta" value="sin-estudios-primaria-incompleta" {{ $alumno->nivel_educacion == 'sin-estudios-primaria-incompleta' ? 'checked' : '' }}>Sin estudios o enseñanza primaria incompleta
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="nivel_educacion" id="secundaria-eso" value="secundaria-eso" {{ $alumno->nivel_educacion == 'secundaria-eso' ? 'checked' : '' }}>Secundaria (ESO)
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="nivel_educacion" id="formacion-profesional" value="formacion-profesional" {{ $alumno->nivel_educacion == 'formacion-profesional' ? 'checked' : '' }}>Formación profesional
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="nivel_educacion" id="estudios-universitarios" value="estudios-universitarios" {{ $alumno->nivel_educacion == 'estudios-universitarios' ? 'checked' : '' }}>Estudios universitarios
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="nivel_educacion" id="master" value="master" {{ $alumno->nivel_educacion == 'master' ? 'checked' : '' }}>Máster
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="nivel_educacion" id="doctorado" value="doctorado" {{ $alumno->nivel_educacion == 'doctorado' ? 'checked' : '' }}>Doctorado
                                    </div>
                                </div>
                            </label>
                            @error('nivel_educacion')
                            <span class="error-message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="label_field_part">
                        <!--campo 16-->
                        <div class="field">
                            <div class="label_input">
                                <label for="disponibilidad_ordenador">¿tienes ordenador/tablet y conexión a internet? 
                                    <div class="radio-control">
                                        <div class="radio-control-option">
                                            <input type="radio" name="disponibilidad_ordenador" id="si" value="si" {{ $alumno->disponibilidad_ordenador == 'si' ? 'checked' : '' }}>Si  
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="disponibilidad_ordenador" id="no" value="no" {{ $alumno->disponibilidad_ordenador == 'no' ? 'checked' : '' }}>No  
                                        </div>
                                    </div>
                                </label>
                                @error('disponibilidad_ordenador')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- campo 17 -->  
                        <div class="field">
                            <div class="label_input">
                                <label for="permiso_trabajo_es">¿tienes permiso de trabajo en España?
                                    <div class="radio-control">
                                        <div class="radio-control-option">
                                            <input type="radio" name="permiso_trabajo_es" id="si" value="si" {{ $alumno->permiso_trabajo_es == 'si' ? 'checked' : '' }}>Si  
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="permiso_trabajo_es" id="no" value="no" {{ $alumno->permiso_trabajo_es == 'no' ? 'checked' : '' }}>No  
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="permiso_trabajo_es" id="en-proceso" value="en-proceso" {{ $alumno->permiso_trabajo_es == 'en-proceso' ? 'checked' : '' }}>No, en proceso
                                        </div>
                                    </div>
                                </label>
                                @error('permiso_trabajo_es')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="field btns">
                        <a class="button-style" href="{{ route('formulario.step.three') }}">Anterior</a>
                        <button class="button-style" type="submit">Siguiente</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


  