<div class="col-9">

    <div class="container border" style=" height:100%;">

        <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
            <div class="card-body"  style="height: 80vh; width: 60vw;">
                <h3>Cantidad de clientes creados por mes</h3>
                <canvas id="myChart1" width="" height=""></canvas>
            </div>
        </div>
        <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
            <div class="card-body">
                <h3>Cantidad de mascotas creados por mes</h3>
                <canvas id="myChart2" width="" height=""></canvas>
            </div>
        </div>
        <div id="section3ContentId" class="collapse in" role="tabpanel" aria-labelledby="section3HeaderId">
            <div class="card-body">
                <h3>Cantidad de controles creados por mes</h3>
                <canvas id="myChart3" width="" height=""></canvas>
            </div>
        </div>
        <div id="section4ContentId" class="collapse in" role="tabpanel" aria-labelledby="section4HeaderId">
            <div class="card-body">
                <h3></h3>
                <canvas id="myChart3" width="" height=""></canvas>
            </div>
        </div>
        <div id="section5ContentId" class="collapse in" role="tabpanel" aria-labelledby="section5HeaderId">
            <div class="card-body">
                <canvas id="myChart3" width="" height=""></canvas>
            </div>
        </div>
        <div id="section6ContentId" class="collapse in" role="tabpanel" aria-labelledby="section6HeaderId">
            <div class="card-body">
                <canvas id="myChart3" width="" height=""></canvas>
            </div>
        </div>


    </div>
</div>


<script>
    var ctx = document.getElementById('myChart1').getContext('2d');
    var myChart = new Chart(ctx, 
    {
        type: 'bar',
        data: {
            labels: {!! json_encode($cantidadCli['etiquetas']) !!},
            datasets: [{
                label: 'Cantidad de clientes creados por mes',
                data: {!! json_encode($cantidadCli['valor']) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>


<script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: {!! json_encode($cantidadMasco['etiquetas']) !!},
            datasets: [{
                label: 'Cantidad de mascotas creadas creadas por mes',
                data: {!! json_encode($cantidadMasco['valor']) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
    });
</script>


<script>
    var ctx = document.getElementById('myChart3').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($cantidadControl['etiquetas']) !!},
            datasets: [{
                label: 'Cantidad de mascotas atendidas',
                data: {!! json_encode($cantidadControl['valor']) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>