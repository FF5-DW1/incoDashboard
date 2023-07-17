@extends('layout.home')

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection


@section ('content')
    <div class="sales-boxes">
        <canvas id="myChart"></canvas>
    </div>
    <script>
        const ctx = document.getElementById('myChart');
        const datos_backend = [{{ implode(",", $datos['edades']) }}]
        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['18-23', '24-28', '29-33', '34-40', '41-50', '51+'],
            datasets: [{
                label: '# of Votes',
                data: datos_backend,
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
    </script>
        
@endsection
