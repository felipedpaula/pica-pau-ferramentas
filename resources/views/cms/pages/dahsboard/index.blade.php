@extends('cms.layouts.cms-default')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Gráfico de Acessos às Páginas -->
        <div class="col-xl-6" style="min-height:400px;max-height:400px;display:flex;flex-direction:column;align-items:center">
            <h3 style="width:100%">Acessos às Páginas</h3>
            <canvas id="pageAccessChart"></canvas>
        </div>

        <!-- Gráfico de Tipos de Dispositivos -->
        <div class="col-xl-6" style="min-height:400px;max-height:400px;display:flex;flex-direction:column;align-items:center">
            <h3 style="width:100%">Tipos de Dispositivos</h3>
            <canvas id="deviceChart"></canvas>
        </div>
    </div>


    <!-- Page level plugins -->
    <script src="{{asset('assets/cms/scripts/charts/Chart-4.js')}}"></script>

    <script defer>
        // Supondo que os dados sejam passados do Laravel como objetos JSON
        var pageAccessData = @json($pageAccessData);
        var deviceData = @json($deviceData);

        // Preparar os dados para o gráfico de barras
        var pageAccessLabels = pageAccessData.map(function(item) { return item.page_url; });
        var pageAccessCounts = pageAccessData.map(function(item) { return item.count; });

        // Preparar os dados para o gráfico de pizza
        var deviceLabels = deviceData.map(function(item) { return item.device_type; });
        var deviceCounts = deviceData.map(function(item) { return item.count; });

        // Criar o gráfico de barras para acessos às páginas
        var ctxPageAccess = document.getElementById('pageAccessChart').getContext('2d');
        var pageAccessChart = new Chart(ctxPageAccess, {
            type: 'bar',
            data: {
                labels: pageAccessLabels,
                datasets: [{
                    label: 'Contagem de Acessos',
                    data: pageAccessCounts,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
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

        // Criar o gráfico de pizza para tipos de dispositivos
        var ctxDevice = document.getElementById('deviceChart').getContext('2d');
        var deviceChart = new Chart(ctxDevice, {
            type: 'pie',
            data: {
                labels: deviceLabels,
                datasets: [{
                    label: 'Tipos de Dispositivos',
                    data: deviceCounts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>
@endsection
