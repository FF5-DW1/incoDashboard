@extends('layout.default')

@section('content')
<div class="form-outer">
    <form action="{{ route('formulario.step.one.store') }}" method="POST">
        @csrf
       
        <!-- pagina 1 -->
        <div class="page slide-page">

            <div class="title-page">
                <p>1/5</p>
                <h2>Datos personales</h2>
            </div>

            <div class="form-content">

                <div class="page-step-title">
                    <p>Rellena todos los campos</p>
                </div>

                <!--campo 1-->
                <div class="field">
                    <div class="label_input">
                        <label for="nombres">Nombres</label>
                        <input class="input-box" type="text" id= "nombres" name="nombres" placeholder="Escribe tu nombre" value="{{ $alumno->nombres ?? '' }}">
                    </div>
                    @error('nombres')
                    <p class="error-message">
                        
                            {{ $message }} 
                       
                    </p>
                    @enderror
                </div>

                <!--campo 2-->              
                <div class="field">
                    <div class="label_input">
                        <label for="apellidos">Apellidos</label>
                        <input class="input-box" type="text" placeholder="Escribe tu apellidos" id= "apellidos" name="apellidos" value="{{{ $alumno->apellidos ?? '' }}}">
                    </div>
                    @error('apellidos')
                    <p class="error-message">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="label_field_part">
                    <!--campo 3-->
                    <div class="field">
                        <div class="label_input">
                            <label for="email">Email</label>
                            <input  class="input-box" type="email" placeholder="email@example.com" id= "email" name="email" value="{{{ $alumno->email ?? '' }}}">
                        </div>
                        @error('email')
                        <p class="error-message">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!--campo 4-->
                    <div class="field">
                        <div class="label_input">
                            <label for="dni_nie_pasaporte">DNI/NIE/Pasaporte</label>
                            <input class="input-box" type="text" placeholder="12345678X" id= "dni_nie_pasaporte" name="dni_nie_pasaporte" value="{{{ $alumno->dni_nie_pasaporte ?? '' }}}">
                        </div>
                        @error('dni_nie_pasaporte')
                        <p class="error-message">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>

                <div class="label_field_part">
                    <!--campo 5-->
                    <div class="field">
                        <div class="label_input">
                            <label for="telefono">Teléfono </label>
                            <input class="input-box" type="text" placeholder="+34 666 66 66 66" id= "telefono" name="telefono"  value="{{{ $alumno->telefono ?? '' }}}">
                        </div>
                        @error('telefono')
                        <p class="error-message">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!--campo 6-->
                    <div class="field">
                        <div class="label_input">
                            <label for="residente">¿resides en España?
                                <div class="radio-control">
                                    <div class="radio-control-option">
                                        <input type="radio" name="residente" id="si" value="si">Si  
                                    </div>

                                    <div class="radio-control-option">
                                        <input type="radio" name="residente" id="no" value="no">No  
                                    </div>
                                </div>
                            </label>
                            @error('email')
                            <span class="error-message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="field btns">
                    <button class="button-style next" type="submit">Siguiente</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection