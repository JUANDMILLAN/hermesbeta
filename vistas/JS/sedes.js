$(document).on("click", ".btnEditarSede", function() {

    var idSede = $(this).attr("idSedes");
    console.log(idSede);
    var datos = new FormData();
    datos.append("idSede", idSede);
    $.ajax({
        url: "ajax/sedes.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            console.log(respuesta);
            $("#editNombreSede").val(respuesta["nombre_sede"]);
            $("#editDireccionSede").val(respuesta["direccion"]);
            $("#editDescripcionSede").val(respuesta["descripcion"]);
            $("#idSede").val(respuesta["id_sede"]);
        }


    });
});