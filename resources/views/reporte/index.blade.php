
@extends('layouts.app')

@section('template_title')
    Reportes
@endsection


@section('content')
    <div class="container-fluid">
        <div style="width: 80%; margin: 0 auto;">
            <canvas id="casosPorAnio"></canvas>
        </div>
    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
        <script>
            var datos = @json($casosPorAño);
            
            var labels = datos.map(function(item) {
                return item.year;
            });

            var valores = datos.map(function(item) {
                return item.count;
            });

            var ctx = document.getElementById('casosPorAnio').getContext('2d');

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Casos por Año',
                        data: valores,
                        backgroundColor: 'rgba(75, 192, 192, 0.6)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        </script>
@endsection