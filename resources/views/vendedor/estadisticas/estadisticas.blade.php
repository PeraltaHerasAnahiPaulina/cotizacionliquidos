@extends('vendedor.layouts.templatep')
<!--CDNS necesarios para highcharts-->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #00144F;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .welcome-container {
            background: white;
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            max-width: 2000px; 
            width: 95%; 
            margin: 40px auto; 
        }
        .highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

.highcharts-description {
    margin: 0.3rem 10px;
}

       
       
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <label for="monthSelect" class="d-block mb-2" style="font-size: 1.2rem; font-weight: bold;">
                        <i class="fas fa-calendar-alt" style="color: #007bff; margin-right: 8px;"></i>Selecciona el año:
                    </label>
                    <div class="input-group" style="max-width: 300px; margin: 0 auto;">
                        <select id="monthSelect" class="form-control" onchange="updateCharts()">
                            <option value="" selected disabled>Escoge el año deseado </option>
                            <option value="1">2024</option>
                            <option value="2">2025</option>
                            
                        </select>
                    </div>
                </div>
            </div><br><br> 
           
            <div id="chartsContainer" style="display: none;">
                <div class="container mt-4">
                    
            
                <div class="row">
                    <div class="col-md-6 ">
                        <figure class="highcharts-figure">
                            <div id="container"></div>
                            
                        </figure>
                       
                    </div>
                    <div class="col-md-6">
                        <figure class="highcharts-figure">
                            <div id="container1"></div>
                            
                        </figure>
                      
                    </div>
                  
                    <div class="col-md-6">
                        <figure class="highcharts-figure">
                            <div id="container3"></div>
                            
                        </figure>
                      
                    </div>
                    
            </div>
        </div>
    </div>
    <script>
        function updateCharts() {
            var selectedMonth = document.getElementById("monthSelect").value;
            if (selectedMonth) {
                document.getElementById("chartsContainer").style.display = "block";
                console.log("Año seleccionado: ", selectedMonth);
             }
        }
    </script>
</body>

</html>
<script>
    Highcharts.chart('container', {
        credits: {
        enabled: false
    },
    lang: {
        contextButtonTitle: "Menú de exportación",
        downloadJPEG: "Descargar imagen JPEG",
        downloadPDF: "Descargar PDF",
        downloadPNG: "Descargar imagen PNG",
        downloadSVG: "Descargar imagen SVG",
        downloadCSV: "Descargar CSV",
        downloadXLS: "Descargar Excel",
        printChart: "Imprimir gráfico",
        viewFullscreen: "Ver en pantalla completa",
        exitFullscreen: "Salir de pantalla completa",
        openInCloud: "Abrir en Highcharts Cloud",
        viewData: "Ver tabla de datos",
        hideData: "Ocultar tabla de datos",
        thousandsSep: ",",
        decimalPoint: "."
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    "downloadPNG",
                    "downloadPDF"
                ]
            }
        }
    },
    chart: {
        type: 'column'
    },
    title: {
        text: ' Monto de venta Anual'
    },
    subtitle: {
        text:
            'Del año 2024'
    },
    xAxis: {
        categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        crosshair: true,
        accessibility: {
            description: 'Meses'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        valueSuffix: ' '
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Cotizado',
            data: [235, 158, 359, 459, 165, 348, 235, 158, 359, 459, 165, 348]
        },
        {
            name: 'Facturado',
            data: [50, 18, 98, 100, 57, 46, 50, 18, 98, 100, 57, 46]
        }
    ]
});  
</script>
<script>
    Highcharts.chart('container1', {
        credits: {
        enabled: false
    },
    lang: {
        contextButtonTitle: "Menú de exportación",
        downloadJPEG: "Descargar imagen JPEG",
        downloadPDF: "Descargar PDF",
        downloadPNG: "Descargar imagen PNG",
        downloadSVG: "Descargar imagen SVG",
        downloadCSV: "Descargar CSV",
        downloadXLS: "Descargar Excel",
        printChart: "Imprimir gráfico",
        viewFullscreen: "Ver en pantalla completa",
        exitFullscreen: "Salir de pantalla completa",
        openInCloud: "Abrir en Highcharts Cloud",
        viewData: "Ver tabla de datos",
        hideData: "Ocultar tabla de datos",
        thousandsSep: ",",
        decimalPoint: "."
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    "downloadPNG",
                    "downloadPDF"
                ]
            }
        }
    },
    chart: {
        type: 'column'
    },
    title: {
        text: ' Monto de litros vendidos'
    },
    subtitle: {
        text:
            'Del año 2024'
    },
    xAxis: {
        categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        crosshair: true,
        accessibility: {
            description: 'Meses'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        valueSuffix: ' '
    },
    plotOptions: {
        column: {
            pointPadding: 0.1,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Litros',
            data: [235, 158, 359, 459, 165, 348, 235, 158, 359, 459, 165, 348]
        },
       
    ]
 });  
</script>

<script>
    Highcharts.chart('container3', {
        credits: {
        enabled: false
    },
    lang: {
        contextButtonTitle: "Menú de exportación",
        downloadJPEG: "Descargar imagen JPEG",
        downloadPDF: "Descargar PDF",
        downloadPNG: "Descargar imagen PNG",
        downloadSVG: "Descargar imagen SVG",
        downloadCSV: "Descargar CSV",
        downloadXLS: "Descargar Excel",
        printChart: "Imprimir gráfico",
        viewFullscreen: "Ver en pantalla completa",
        exitFullscreen: "Salir de pantalla completa",
        openInCloud: "Abrir en Highcharts Cloud",
        viewData: "Ver tabla de datos",
        hideData: "Ocultar tabla de datos",
        thousandsSep: ",",
        decimalPoint: "."
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    "downloadPNG",
                    "downloadPDF"
                ]
            }
        }
    },
    chart: {
        type: 'column'
    },
    title: {
        text: ' Total de pedidos en proceso'
    },
    subtitle: {
        text:
            'Del año 2024'
    },
    xAxis: {
        categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        crosshair: true,
        accessibility: {
            description: 'Meses'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        valueSuffix: ' '
    },
    plotOptions: {
        column: {
            pointPadding: 0.1,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Pedidos Autorizados',
            data: [465, 158, 459, 559, 165, 348, 135, 108, 159, 559, 165, 348]
        },
        {
            name: ' Pedidos en proceso',
            data: [35, 18, 109, 59, 65, 38, 35, 18, 159, 59, 65, 48]
        },
        {
            name: 'Cancelados',
            data: [25, 19, 9, 20, 35, 38, 45, 18, 59, 39, 65, 60]
        },
       
    ]
 });  
</script>

    @endsection