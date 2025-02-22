
$('#TablaEXL thead tr').clone(true).addClass('filters').appendTo('#TablaEXL thead');

var table = $('#TablaEXL').DataTable({
    dom: 'Bfrtip',
    //Boton del excel para importar los datos de la tabla
    buttons: ['excel'],
    orderCellsTop: true,
    fixedHeader: true,
    // responsive: true,
    // autoWhidth: false,
    // scrollX: true,
    //Ordenamiento
    order: [
        [0, "asc"]
    ],
    //Idioma de los mensajes
    language: {

    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    //Idioma del calendario del rango de fechas
    "datetime": {
        "previous": "Anterior",
        "next": "Próximo",
        "hours": "Horas",
        "minutes": "Minutos",
        "seconds": "Segundos",
        "unknown": "-",
        "amPm": [
            "AM",
            "PM"
        ],
        "months": {
            "0": "Enero",
            "1": "Febrero",
            "2": "Marzo",
            "3": "Abril",
            "4": "Mayo",
            "5": "Junio",
            "6": "Julio",
            "7": "Agosto",
            "8": "Septiembre",
            "9": "Octubre",
            "10": "Noviembre",
            "11": "Diciembre"
        },
        "weekdays": [
            "Dom",
            "Lun",
            "Mar",
            "Mié",
            "Jue",
            "Vie",
            "Sáb"
        ]
    }
},//Filtros del head
    initComplete: function() {
        var api = this.api();
        api.columns().eq(0).each(function(colIdx) {
            var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
            var title = $(cell).text();
            $(cell).html('<input type="text" placeholder="' + title + '" />');
            $('input', $('.filters th').eq($(api.column(colIdx).header()).index()))
                .off('keyup change')
                .on('keyup change', function(e) {
                    e.stopPropagation();
                    $(this).attr('title', $(this).val());
                    var regexr =
                        '({search})';
                    var cursorPosition = this.selectionStart;
                    api
                        .column(colIdx)
                        .search((this.value != "") ? regexr.replace('{search}',
                                '(((' + this.value + ')))') : "", this.value !=
                            "", this.value == "")
                        .draw();
                    $(this).focus()[0].setSelectionRange(cursorPosition,
                        cursorPosition);
                });
        });
    },
    /*↓En esta seccion se cambia el tamaño de lso campos y posicion del texto
    empezando desde la poscision 0*/
    columnDefs: [
        {targets: 0,
        width: "250px",
        createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
        $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},
        {targets: 1,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
            $(td).css('text-align', 'justify'); // centrar el contenido de la celda
            }},
        {targets: 2,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
             $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},
        {targets: 3,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
             $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},
        {targets: 4,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
             $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},

        


]
});
//↓ Cuando se ejecute el filtrado la tabla cambiara en tiempo real
document.querySelectorAll('#min, #max').forEach((el) => {
    el.addEventListener('change', () => $('#TablaEX').DataTable().draw());
});



$('#TablaEXM thead tr').clone(true).addClass('filters').appendTo('#TablaEXM thead');

var table = $('#TablaEXM').DataTable({
    dom: 'Bfrtip',
    //Boton del excel para importar los datos de la tabla
    buttons: ['excel'],
    orderCellsTop: true,
    fixedHeader: true,
    // responsive: true,
    // autoWhidth: false,
    // scrollX: true,
    //Ordenamiento
    order: [
        [0, "asc"]
    ],
    //Idioma de los mensajes
    language: {

    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    //Idioma del calendario del rango de fechas
    "datetime": {
        "previous": "Anterior",
        "next": "Próximo",
        "hours": "Horas",
        "minutes": "Minutos",
        "seconds": "Segundos",
        "unknown": "-",
        "amPm": [
            "AM",
            "PM"
        ],
        "months": {
            "0": "Enero",
            "1": "Febrero",
            "2": "Marzo",
            "3": "Abril",
            "4": "Mayo",
            "5": "Junio",
            "6": "Julio",
            "7": "Agosto",
            "8": "Septiembre",
            "9": "Octubre",
            "10": "Noviembre",
            "11": "Diciembre"
        },
        "weekdays": [
            "Dom",
            "Lun",
            "Mar",
            "Mié",
            "Jue",
            "Vie",
            "Sáb"
        ]
    }
},//Filtros del head
    initComplete: function() {
        var api = this.api();
        api.columns().eq(0).each(function(colIdx) {
            var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
            var title = $(cell).text();
            $(cell).html('<input type="text" placeholder="' + title + '" />');
            $('input', $('.filters th').eq($(api.column(colIdx).header()).index()))
                .off('keyup change')
                .on('keyup change', function(e) {
                    e.stopPropagation();
                    $(this).attr('title', $(this).val());
                    var regexr =
                        '({search})';
                    var cursorPosition = this.selectionStart;
                    api
                        .column(colIdx)
                        .search((this.value != "") ? regexr.replace('{search}',
                                '(((' + this.value + ')))') : "", this.value !=
                            "", this.value == "")
                        .draw();
                    $(this).focus()[0].setSelectionRange(cursorPosition,
                        cursorPosition);
                });
        });
    },
    /*↓En esta seccion se cambia el tamaño de lso campos y posicion del texto
    empezando desde la poscision 0*/
    columnDefs: [
        {targets: 0,
        width: "250px",
        createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
        $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},
        {targets: 1,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
            $(td).css('text-align', 'justify'); // centrar el contenido de la celda
            }},
        {targets: 2,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
             $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},
        {targets: 3,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
             $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},
        {targets: 4,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
             $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},
        {targets: 5,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
             $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},
        {targets: 6,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
             $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},
        {targets: 7,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
             $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},
        {targets: 8,
            width: "250px",
            createdCell: function(td, cellData, rowData, rowIndex, colIndex) {
             $(td).css('text-align', 'justify'); // centrar el contenido de la celda
        }},

        


]
});
//↓ Cuando se ejecute el filtrado la tabla cambiara en tiempo real
document.querySelectorAll('#min, #max').forEach((el) => {
    el.addEventListener('change', () => $('#TablaEXM').DataTable().draw());
});