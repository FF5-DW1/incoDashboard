@extends('layout.default')
@section('content')

    <div class="form-outer">
        <form action="{{ route('formulario.step.three.store') }}" method="POST" >
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

            <!-- pagina 3 -->
            <div class="page">

                <div class="title-page">
                    <p>3/5</p>
                    <h2>Datos profesionales</h2>
                </div>

                <div class="form-content">

                    <div class="page-step-title">
                        <p>Rellena todos los campos</p>
                    </div>

                    <!--campo 11-->
                    <div class="field">
                        <div class="label_input">
                            <label for="programa_elegido">¿qué programa te interesa?
                                <div class="radio-control">
                                    <div class="radio-control-option">
                                        <input type="radio" name="programa_elegido" id="analisis-de-datos" value="analisis-de-datos" {{ $alumno && $alumno->programa_elegido == 'analisis-de-datos' ? 'checked' : '' }}>Certificado de Análisis de Datos
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="programa_elegido" id="soporte-de-ti" value="soporte-de-ti" {{ $alumno && $alumno->programa_elegido == 'soporte-de-ti' ? 'checked' : '' }}>Certificado de Soporte en TI
                                    </div>
                                </div>
                            </label>
                            @error('programa_elegido')
                            <span class="error-message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!--campo 12-->
                    <div class="field">
                        <div class="label_input">
                            <label for="canal_captacion">¿cómo has conocido este programa?
                                <div class="radio-control">
                                    <div class="radio-control-option">
                                        <input type="radio" name="canal_captacion" id="influencer-veritechie" value="influencer-veritechie" {{ $alumno && $alumno->canal_captacion == 'influencer-veritechie' ? 'checked' : '' }}>Influencer - @veritechie
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="canal_captacion" id="influencer-chicageek" value="influencer-chicageek" {{ $alumno && $alumno->canal_captacion == 'influencer-chicageek' ? 'checked' : '' }}>Influencer - @ChicaGeek
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="canal_captacion" id="amigo-familiar" value="amigo-familiar" {{ $alumno && $alumno->canal_captacion == 'amigo-familiar' ? 'checked' : '' }}>Por un amigo/familiar
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="canal_captacion" id="ong-fundacion-asociacion" value="ong-fundacion-asociacion" {{ $alumno && $alumno->canal_captacion == 'ong-fundacion-asociacion' ? 'checked' : '' }}>ONG/Fundación/Asociación
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="canal_captacion" id="anuncio-fb-ig-linkedin" value="anuncio-fb-ig-linkedin" {{ $alumno && $alumno->canal_captacion == 'anuncio-fb-ig-linkedin' ? 'checked' : '' }}>Anuncio en FB/IG/LinkedIN
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="canal_captacion" id="grupo-facebook" value="grupo-facebook" {{ $alumno && $alumno->canal_captacion == 'grupo-facebook' ? 'checked' : '' }}>Grupo en Facebook
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="canal_captacion" id="busqueda-internet" value="busqueda-internet" {{ $alumno && $alumno->canal_captacion == 'busqueda-internet' ? 'checked' : '' }}>Búsqueda en internet
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="canal_captacion" id="antiguo-alumno" value="antiguo-alumno" {{ $alumno && $alumno->canal_captacion == 'antiguo-alumno' ? 'checked' : '' }}>Por un antiguo alumno
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="canal_captacion" id="inco-academy-espana" value="inco-academy-espana" {{ $alumno && $alumno->canal_captacion == 'inco-academy-espana' ? 'checked' : '' }}>Por INCO Academy España
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="canal_captacion" id="otro" value="otro" {{ $alumno && $alumno->canal_captacion == 'otro' ? 'checked' : '' }}>Otro
                                    </div>
                                </div>
                            </label>
                            @error('programa_elegido')
                            <span class="error-message">
                                {{ $message }}
                            </span>
                            @enderror    
                        </div>
                    </div>

                    <!--campo 13-->
                    <div class="field">
                        <div class="label_input">
                            <label for="situacion_profesional">¿cuál es tu situación profesional actual?
                                <div class="radio-control">
                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_profesional" id="desempleado-busca-trabajo" value="desempleado-busca-trabajo" {{ $alumno && $alumno->situacion_profesional == 'desempleado-busca-trabajo' ? 'checked' : '' }}>Desempleado, en busca de trabajo
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_profesional" id="autonomo" value="autonomo" {{ $alumno && $alumno->situacion_profesional == 'autonomo' ? 'checked' : '' }}>Autónomo
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_profesional" id="empleado-tiempo-completo" value="empleado-tiempo-completo" {{ $alumno && $alumno->situacion_profesional == 'empleado-tiempo-completo' ? 'checked' : '' }}>Empleado a tiempo completo
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_profesional" id="empleado-tiempo-parcial" value="empleado-tiempo-parcial" {{ $alumno && $alumno->situacion_profesional == 'empleado-tiempo-parcial' ? 'checked' : '' }}>Empleado a tiempo parcial
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_profesional" id="becario-aprendiz" value="becario-aprendiz" {{ $alumno && $alumno->situacion_profesional == 'becario-aprendiz' ? 'checked' : '' }}>Becario/Aprendiz
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_profesional" id="fp-universidad" value="fp-universidad" {{ $alumno && $alumno->situacion_profesional == 'fp-universidad' ? 'checked' : '' }}>Estudio FP/ Voy a la universidad
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_profesional" id="programa-de-formacion" value="programa-de-formacion" {{ $alumno && $alumno->situacion_profesional == 'programa-de-formacion' ? 'checked' : '' }}>Participo en un programa de formación
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="situacion_profesional" id="otro" value="otro" {{ $alumno && $alumno->situacion_profesional == 'otro' ? 'checked' : '' }}>Otro
                                    </div>
                                </div>
                            </label>
                            @error('situacion_profesional')
                            <span class="error-message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="field btns">
                        <a class="button-style" href="{{ route('formulario.step.two') }}">Anterior</a>
                        <button class="button-style" type="submit">Siguiente</button>
                    </div>
                </div>              
            </div>
            
        </form>
    </div>
@endsection


  