@extends('direccioncomercial.layouts.templatep')
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
       
        //Grafica de barras
        .highcharts-figure,
.highcharts-data-table table {
    min-width: 360px;
    max-width: 800px;
    margin: 1em auto;
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
//pastel 1
.highcharts-figure,
.highcharts-data-table table {
    min-width: 320px;
    max-width: 660px;
    margin: 1em auto;
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
.card-custom {
            border-left: 4px solid #d0f20f; 
            border-radius: 10px;
        }
        .card-custom-blue {
            border-left: 4px solid #fc00f0;
            border-radius: 10px;
        }
       

    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <label for="monthSelect" class="d-block mb-2" style="font-size: 1.2rem; font-weight: bold;">
                        <i class="fas fa-calendar-alt" style="color: #007bff; margin-right: 8px;"></i>Selecciona Mes:
                    </label>
                    <div class="input-group" style="max-width: 300px; margin: 0 auto;">
                        <select id="monthSelect" class="form-control" onchange="updateVendors()">
                            <option value="" selected disabled>Escoge el mes deseado</option>
                            <option value="1">Enero</option>
                            <option value="2">Febrero</option>
                            <option value="3">Marzo</option>
                            <option value="4">Abril</option>
                            <option value="5">Mayo</option>
                            <option value="6">Junio</option>
                            <option value="7">Julio</option>
                            <option value="8">Agosto</option>
                            <option value="9">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-md-12 text-center mt-3" id="vendorContainer" style="display: none;">
                    <label for="vendorSelect" class="d-block mb-2" style="font-size: 1.2rem; font-weight: bold;">
                        <i class="fas fa-building" style="color: #28a745; margin-right: 8px;"></i>Selecciona Sucursal:
                    </label>
                    <div class="input-group" style="max-width: 300px; margin: 0 auto;">
                        <select id="vendorSelect" class="form-control" onchange="updateCharts()">
                            <option value="" selected disabled>Escoge la sucrsal</option>
                            <option value="v1">AME-1</option>
                            <option value="v2">AME-2</option>
                            <option value="v3">AME-3</option>
                        </select>
                    </div>
                </div>
            </div><br><br> 
           
            <div id="chartsContainer" style="display: none;">
                <div class="container mt-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card card-custom shadow-sm border-4">
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="text fw-bold">MONTO DE VENTA DEL MES </h6>
                                        <h2 class="fw-bold">$30,000</h2>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="#d0f20f" class="bi bi-clipboard2-data-fill" viewBox="0 0 16 16">
                                            <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5" />
                                            <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585q.084.236.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5q.001-.264.085-.5M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0V9a1 1 0 0 1 1-1"/>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-custom-blue shadow-sm border-4">
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="text fw-bold">LITROS VENDIDOS</h6>
                                        <h2 class="fw-bold">754 Lts</h2>
                                    </div>
                                    <div >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fc00f0" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z"/>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>
            
                <div class="row">
                    <div class="col-md-6 ">
                        <figure class="highcharts-figure">
                            <div id="container1"></div>
                            <p class="highcharts-description">
                                Se muestra el porcentaje de pedidos entregados o no entregados
                            </p>
                            
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <figure class="highcharts-figure">
                            <div id="container2"></div>
                        </figure>
                    </div>
                    
            </div>
        </div>
    </div>
    <script>
         function updateCharts() {
            var selectedMonth = document.getElementById("monthSelect").value;
            var selectedVendor = document.getElementById("vendorSelect").value;
            
            if (selectedMonth && selectedVendor) {
                document.getElementById("chartsContainer").style.display = "block";
                console.log("Mes seleccionado: ", selectedMonth);
                console.log("Vendedor seleccionado: ", selectedVendor);
            }
        }
        function updateVendors() {
            var selectedMonth = document.getElementById("monthSelect").value;
            if (selectedMonth) {
                document.getElementById("vendorContainer").style.display = "block";
            }
        }
    
       
    </script>
</body>

</html>

<script>
    //Grafica de pastel
Highcharts.chart('container1', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Total de pedidos'
    },
    subtitle: {
        text: 'De acuerdo  al mes de Enero'
    },

    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: '%'
        }
    },
    //oculta marca de agua
    credits: {
        enabled: false
    },
    //traducir a español
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
    //estas etiquetas son las que sobresalen de la grafica
    plotOptions: {
        series: {
            borderRadius: 5,
            dataLabels: [{
                enabled: true,
                distance: 15,
                format: '{point.name}'
            }, {
                enabled: true,
                distance: '-30%',
                filter: {
                    property: 'percentage', 
                    operator: '>',
                    value: 5
                },
                format: '{point.y:.1f}%',
                style: {
                    fontSize: '0.9em',
                    textOutline: 'none'
                }
            }]
        }
    },
    //es la informacion que se observa  al pasarle el pulsor por encima de la grafica
    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: ' +
            '<b>{point.y:.2f}%</b> en total<br/>'
    },

    series: [
        {
            name: 'Pedido',
            colorByPoint: true,
            data: [
               
                {
                    name: 'No entregados ',
                    y: 38.98,
                    drilldown: 'Firefox'
                },
                {
                    name: 'Entregados',
                    y: 61.02,
                    drilldown: null
                }
            ]
        }
    ],
   
});

</script>

<script>
    //Grafica de pastel
Highcharts.chart('container2', {
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
        type: 'pie'
    },
    title: {
        text: 'Total de pedidos en proceso'
    },
    subtitle: {
        text: 'De acuerdo al mes de ...'
    },

    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: '%'
        }
    },

    plotOptions: {
        series: {
            borderRadius: 5,
            dataLabels: [{
                enabled: true,
                distance: 15,
                format: '{point.name}'
            }, {
                enabled: true,
                distance: '-30%',
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 5
                },
                format: '{point.y:.1f}%',
                style: {
                    fontSize: '0.9em',
                    textOutline: 'none'
                }
            }]
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: ' +
            '<b>{point.y:.2f}%</b> en total<br/>'
    },

    series: [
        {
            name: 'Pedido',
            colorByPoint: true,
            data: [
                {
                    name: 'Autorizacion de cliente',
                    y: 28.02,
                    drilldown: 'Autorizacion de cliente'
                },
                {
                    name: 'Entregados',
                    y: 20.30,
                    drilldown: 'Entregados'
                },
                {
                    name: 'Cancelados',
                    y: 32.23,
                    drilldown: 'Cancelados'
                }
            ]
        }
    ],
    
});

</script>

    @endsection