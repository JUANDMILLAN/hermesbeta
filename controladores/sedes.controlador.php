<?php
class ControladorSedes {

    /*=============================================
    MOSTRAR SEDES
    =============================================*/
    static public function ctrMostrarSedes($item, $valor)
    {
        $tabla = "sedes";
        $respuesta = ModeloSedes::mdlMostrarSedes($tabla, $item, $valor);
        return $respuesta;
    }
    static public function ctrCrearSede()
    {
        if (isset($_POST["nombreSede"]) && isset($_POST["direccionSede"] ) && isset($_POST["descripcionSede"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombreSede"]) && preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["direccionSede"])) {
                $tabla = "sedes";
                $datos = array(
                    "nombre" => $_POST["nombreSede"],
                    "direccion" => $_POST["direccionSede"],
                    "descripcion" => $_POST["descripcionSede"]
                );
                $respuesta = ModeloSedes::mdlCrearSede($tabla, $datos);

                if ($respuesta == "ok") {
                    echo '<script>
                            Swal.fire({
                                icon: "success",
                                title: "¡La sede ha sido creada correctamente!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then((result) => {
                                if (result.value) {
                                    window.location = "sedes";
                                }
                            });
                        </script>';
                } else {
                    echo '<script>
                            Swal.fire({
                                icon: "error",
                                title: "¡Error al crear la sede!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then((result) => {
                                if (result.value) {
                                    window.location = "sedes";
                                }
                            });
                        </script>';
                }
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then((result) => {
                            if (result.value) {
                                window.location = "sedes";
                            }
                        });
                    </script>';
                
                }

                
            
            }
        }

    /*=============================================
    EDITAR SEDES
    =============================================*/
    static public function ctrEditarSede()
    {
        if (isset($_POST["editNombreSede"]) && isset($_POST["editDireccionSede"] ) && isset($_POST["editDescripcionSede"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editNombreSede"]) && preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editDireccionSede"]) && preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editDescripcionSede"])) {
                $tabla = "sedes";
                $datos = array(
                    
                    "nombre" => $_POST["editNombreSede"],
                    "direccion" => $_POST["editDireccionSede"],
                    "descripcion" => $_POST["editDescripcionSede"]
                );
                $respuesta = ModeloSedes::mdlEditarSede($tabla, $datos);

                if ($respuesta == "ok") {
                    echo '<script>
                            Swal.fire({
                                icon: "success",
                                title: "¡La sede ha sido editada correctamente!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then((result) => {
                                if (result.value) {
                                    window.location = "sedes";
                                }
                            });
                        </script>';
                } else {
                    echo '<script>
                            Swal.fire({
                                icon: "error",
                                title: "¡Error al editar la sede!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then((result) => {
                                if (result.value) {
                                    window.location = "sedes";
                                }
                            });
                        </script>';
                }
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then((result) => {
                            if (result.value) {
                                window.location = "sedes";
                            }
                        });
                    </script>';
                
                }

                
            
            }
        }
}
