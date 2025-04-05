window.addEventListener('load', function() {
    initializeDataTable("#tblSedes");
    
});

function initializeDataTable(selector) {
    $(selector).DataTable({
            "responsive": true,
            "autowidth": false,
            "lengthChange": true,
            "lengthmenu": [10, 25, 50,100],
            "language": {
            "lengthmenu ":"Mostrar _MENU_ registros por página",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        "buttons":["csv", "excel", "pdf"]
    }).buttons().container().appendTo(selector + '_wrapper .col-md-6:eq(0)');
}