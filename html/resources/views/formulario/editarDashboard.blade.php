@extends('layout.default')

@section('content')
<div class="form-outer">
    <form action="{{ route('formulario.update.dashboard', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="page slide-page">

            <div class="title-page">
                <h2>Datos</h2>
            </div>

            <div class="form-content">

                <div class="page-step-title">
                    <p>Actualiza los datos</p>
                </div>
        <!-- Campo 1 -->
        <div class="field">
            <div class="label_input">
                <label for="nombres">Nombres</label>
                <input class="input-box" type="text" id="nombres" name="nombres" value="{{ old('nombres', $alumno->nombres) }}">
            </div>
            @error('nombres')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo 2 -->
        <div class="field">
            <div class="label_input">
                <label for="apellidos">Apellidos</label>
                <input class="input-box" type="text" id="apellidos" name="apellidos" value="{{ old('apellidos', $alumno->apellidos) }}">
            </div>
            @error('apellidos')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo 3 -->
        <div class="field">
            <div class="label_input">
                <label for="email">Email</label>
                <input class="input-box" type="email" id="email" name="email" value="{{ old('email', $alumno->email) }}">
            </div>
            @error('email')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo 4 -->
        <div class="field">
            <div class="label_input">
                <label for="dni_nie_pasaporte">DNI/NIE/Pasaporte</label>
                <input class="input-box" type="text" id="dni_nie_pasaporte" name="dni_nie_pasaporte" value="{{ old('dni_nie_pasaporte', $alumno->dni_nie_pasaporte) }}">
            </div>
            @error('dni_nie_pasaporte')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo 5 -->
        <div class="field">
            <div class="label_input">
                <label for="telefono">Teléfono</label>
                <input class="input-box" type="text" id="telefono" name="telefono" value="{{ old('telefono', $alumno->telefono) }}">
            </div>
            @error('telefono')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo 3 -->
    <div class="field">
        <div class="label_input">
            <label for="estado">Estado</label>
                <select class="input-box" id="estado" name="estado">
                    <option value="pendiente" @if(old('estado', $alumno->estado) === 'Pendiente') selected @endif>Pendiente</option>
                    <option value="aceptado" @if(old('estado', $alumno->estado) === 'Aceptado') selected @endif>Aceptado</option>
                    <option value="rechazado" @if(old('estado', $alumno->estado) === 'Rechazado') selected @endif>Rechazado</option>
                </select>
    </div>
    @error('estado')
    <p class="error-message">{{ $message }}</p>
    @enderror
</div>

                
        <div class="field btns">
                    <button class="button-style next" type="submit">Guardar Cambios</button>
        </div>
    </form>
</div>

@endsection
