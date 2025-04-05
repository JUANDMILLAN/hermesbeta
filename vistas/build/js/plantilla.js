window.addEventListener('load', function() {
    initializeDataTable("#tablesedes");
    initializeDataTable("#tabla2");
});

function initializeDataTable(selector) {
    $(selector).DataTable({
        "responsive": true,
        "lengthChange ": false,
        "autoWidth ": false,
        "lengthChange": true,
        "lengthMenu": [5, 10, 25, 50],
        "language": {
            "lengthMenu ": "Mostrar _MENU_ registros ",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate ": {
                "first": "Primero ",
                "last": "Último ",
                "next": "Siguiente ",
                "previous": "Anterior "
            }
        },
        "buttons": ["csv", "excel", "pdf"]
    }).buttons().container().appendTo(selector + '_wrapper .col-md-6:eq(0)');

}