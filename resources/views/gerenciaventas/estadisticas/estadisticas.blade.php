@extends('gerenciaventas.layouts.templatep')
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
                        <select id="monthSelect" class="form-control" onchange="updateCharts()">
                            <option value="" selected disabled>Escoge el mes deseado </option>
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
            </div><br><br>
            <div id="chartsContainer" style="display: none;">
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
                    <div class="d-flex justify-content-center">
                        <div class="col-md-8">
                        <figure class="highcharts-figure">
                            <div id="container"></div>
                        </figure>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateCharts() {
            var selectedMonth = document.getElementById("monthSelect").value;
            if (selectedMonth) {
                document.getElementById("chartsContainer").style.display = "block";
                console.log("Mes seleccionado: ", selectedMonth);
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
                    "viewFullscreen",
                    "downloadPNG",
                    "downloadJPEG",
                    "downloadPDF",
                    "downloadSVG",
                    "separator",
                    "downloadCSV",
                    "downloadXLS",
                    "viewData",
                    "separator",
                    "printChart"
                ]
            }
        }
    },

title: {
    text: 'Total de monto',
    align: 'left'
},

subtitle: {
    text: 'De acuerdo al mes de ...',
    align: 'left'
},

yAxis: {
    title: {
        text: 'Litros'
    },
    accessibility: {
        rangeDescription: 'Range: 10 to 1000'
    }
},

xAxis: {
    title: {
        text: 'Mes'
    }
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        },
        
    }
},

series: [{
    name: 'M-DTE 27 DRUM',
    data: [
        10,864,248,654 ]
}, {
    name: 'MOBIL DTE PM[220]',
    data: [
        249,569,58,14 ]
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});

</script>
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
                    "viewFullscreen",
                    "downloadPNG",
                    "downloadJPEG",
                    "downloadPDF",
                    "downloadSVG",
                    "separator",
                    "downloadCSV",
                    "downloadXLS",
                    "viewData",
                    "separator",
                    "printChart"
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
                    "viewFullscreen",
                    "downloadPNG",
                    "downloadJPEG",
                    "downloadPDF",
                    "downloadSVG",
                    "separator",
                    "downloadCSV",
                    "downloadXLS",
                    "viewData",
                    "separator",
                    "printChart"
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
                },
                {
                    name: 'Otro',
                    y: 19.45,
                    drilldown: 'Otro'
                }
            ]
        }
    ],
    
});

</script>

    @endsection