@extends('layout.home')

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection

@section ('content')
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

<div>
    <div class="chart-box">
      <canvas id="myChart"></canvas>
    </div>
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var userChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: {!! json_encode($datasets) !!}, 
        }     
    });
  
</script>
        
@endsection

