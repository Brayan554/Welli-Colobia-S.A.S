<!DOCTYPE html>
<html>
<head>
	<title>Graficos</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <style >
        
        canvas{
            border:1px dotted red;

        }
        .chart-container{
            position: relative;
            margin: auto;
            height: 80vh;
            width: 80vw;
        }
        h1{
          text-align: center;
          font-family: "Times New Roman", Times, serif;
        }
        p{
          font-size: 30px;
        }
    </style>
</head>
<body>
    <H1 >Grafica Informe de Candidatos a Aplicar</H1>
    <div class="chart-container">
    <p>Barras</p>
  	<canvas id="myChart"></canvas>
    </div>
    <div class="chart-container">
    <p>Lineal</p>
  	<canvas id="myChart2"></canvas>
    </div>
    <div class="chart-container">
    <p>Circular</p>
  	<canvas id="myChart3"></canvas>
    </div>
    <div class="chart-container">
    <p>Polar</p>
  	<canvas id="myChart4"></canvas>
    </div>
    
</body>

<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Enero',
          'Febrero',
          'Marzo',
          'Abril',
          'Junio',
          'Julio',
          'Agosto',
          'Septiembre',
          'Noviembre',
          'Diciembre'],
        datasets: [{
            label: '# of Votes',
            data: [20, 19, 9, 5, 15, 3,5,8,10,1],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 102, 0, 0.2)',
                'rgba(255, 0, 102, 0.2)',
                'rgba(0, 153, 255, 0.2)',
                'rgba(0, 255, 204, 0.2)'
                
                
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235,1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 102, 0, 1)',
                'rgba(255, 0, 102, 1)',
                'rgba(0, 153, 255, 1)',
                'rgba(0, 255, 204, 40)'
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


var ctx2 = document.getElementById('myChart2');
var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['Enero',
          'Febrero',
          'Marzo',
          'Abril',
          'Junio',
          'Julio',
          'Agosto',
          'Septiembre',
          'Noviembre',
          'Diciembre'],
        datasets: [{
            label: '# of Votes',
            data: [20, 19, 9, 5, 15, 3,5,8,10,1],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 102, 0, 0.2)',
                'rgba(255, 0, 102, 0.2)',
                'rgba(0, 153, 255, 0.2)',
                'rgba(0, 255, 204, 0.2)'
                
                
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235,1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 102, 0, 1)',
                'rgba(255, 0, 102, 10)',
                'rgba(0, 153, 255, 10)',
                'rgba(0, 255, 204, 40)'
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


var ctx3 = document.getElementById('myChart3');
var myChart3 = new Chart(ctx3, {
    type: 'pie',
    data: {
        labels: ['Enero',
          'Febrero',
          'Marzo',
          'Abril',
          'Junio',
          'Julio',
          'Agosto',
          'Septiembre',
          'Noviembre',
          'Diciembre'],
        datasets: [{
            label: '# of Votes',
            data: [20, 19, 9, 5, 15, 3,5,8,10,1],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 102, 0, 0.2)',
                'rgba(255, 0, 102, 0.2)',
                'rgba(0, 153, 255, 0.2)',
                'rgba(0, 255, 204, 0.2)'
                
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235,1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 102, 0, 1)',
                'rgba(255, 0, 102, 10)',
                'rgba(0, 153, 255, 10)',
                'rgba(0, 255, 204, 40)'
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

var ctx4 = document.getElementById('myChart4');
var myChart4 = new Chart(ctx4, {
    type: 'polarArea',
    data: {
        labels: ['Enero',
          'Febrero',
          'Marzo',
          'Abril',
          'Junio',
          'Julio',
          'Agosto',
          'Septiembre',
          'Noviembre',
          'Diciembre'],
        datasets: [{
            label: '# of Votes',
            data: [20, 19, 9, 5, 15, 3,5,8,10,1],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 102, 0, 0.2)',
                'rgba(255, 0, 102, 0.2)',
                'rgba(0, 153, 255, 0.2)',
                'rgba(0, 255, 204, 0.2)'
                
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235,1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 102, 0, 1)',
                'rgba(255, 0, 102, 10)',
                'rgba(0, 153, 255, 10)',
                'rgba(0, 255, 204, 40)'
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

</html>