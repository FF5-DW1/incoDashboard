@extends('layout.default')
@section('content')
<div class="container-form">
    <div class="thank-you-content">
        <div class="thank-you-img">
            <img src="{{ asset('/images/inco_logo.png') }}" alt="Logo-inco">
        </div>

        <div class="thank-you-titulo">
            <h4>Programas de Certificación Profesional de Google 2023</h4>
            <p>¡Muchas gracias por tu interés! </p>
            <p>Por favor, rellena este cuestionario para confirmar tu idoneidad y poder continuar con el proceso para conseguir una plaza en el programa.</p>
        </div>

        <div class="btn-start">
            <a href="{{ route('formulario.step.one') }}">Ir al formulario</a>    
        </div>
    </div>
</div>
@endsection