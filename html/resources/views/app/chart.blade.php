@extends('layout.home')

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection


@section ('content')

    <div>
        <canvas id="myChart" height="100px"></canvas>
    </div>
@endsection
    <script type="text/javascript">
  
      var labels =  {{ Js::from($labels) }};
      var alumnos =  {{ Js::from($data) }};
  
      const data = {
        labels: labels,
        datasets: [{
          label: 'My First dataset',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: alumnos,
        }]
      };
  
      const config = {
        type: 'line',
        data: data,
        options: {}
      };
  
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
</script>

