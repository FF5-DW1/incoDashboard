@extends('layout.default')
@section('content')

    <div class="form-outer">
        <form  id="fomulario" action="{{ route('formulario.step.five.store') }}" method="POST" >
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

             <!-- pagina 5 -->
             <div class="page">

                <div class="title-page">
                    <p>5/5</p>
                    <h2>Datos adicionales</h2>
                </div>

                <div class="form-content">

                    <div class="page-step-title">
                        <p>Rellena todos los campos</p>
                    </div>

                    <!--campo 17-->
                    <div class="field">
                        <div class="label_input">
                            <label for="disponibilidad_horaria">Como parte del programa ofrecemos sesiones prácticas técnicas y de habilidades sociales en directo: ¿Qué horario se ajustaría más a tu disponibilidad?
                                <div class="radio-control">
                                    <div class="radio-control-option">
                                        <input type="radio" name="disponibilidad_horaria" id="mananas" value="mananas">Mañanas
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="disponibilidad_horaria" id="tardes" value="tardes">Tardes
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="disponibilidad_horaria" id="ambas" value="ambas">Ambas
                                    </div>
                                </div>
                            </label>
                            @error('disponibilidad_horaria')
                            <span class="error-message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!--campo 18-->
                    <div class="field">
                        <div class="label_input">
                            <label for="nivel_ingles">Para realizar este programa NO es necesario hablar inglés, todos los materiales tienen su versión en español. Sin embargo, en ocasiones organizamos eventos a nivel global en inglés: ¿te sientes cómodo participando en una sesión en inglés?
                                <div class="radio-control">
                                    <div class="radio-control-option">
                                        <input type="radio" name="nivel_ingles" id="si" value="si">¡Si!
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="nivel_ingles" id="algo-de-ingles" value="algo-de-ingles">No entiendo al 100% pero puedo hacerme entender
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="nivel_ingles" id="no-sabe-ingles" value="no-sabe-ingles">No, no me siento cómodo para participar en una sesión en inglés
                                    </div>
                                </div>
                            </label>
                            @error('nivel_ingles')
                            <span class="error-message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!--campo 19-->
                    <div class="field">
                        <div class="label_input">
                            <label for="presentacion_breve">Cuéntanos en menos de 300 palabras por qué quieres entrar en el programa elegido.
                                <textarea name="presentacion_breve" id="" cols="30" rows="10"></textarea>
                            </label>
                            @error('presentacion_breve')
                            <span class="error-message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="field btns">
                        <a class="button-style" href="{{ route('formulario.step.four') }}">Anterior</a>
                        <button class="button-style" type="submit">Enviar</button>
                    </div>

                    <!-- agregar un mensaje de aviso de completado y un boton de volver al inicio. -->
                </div>
             </div>
        </form>
    </div>
@endsection


  