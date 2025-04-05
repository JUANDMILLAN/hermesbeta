<?php

// session_start();

require_once "modelos/usuarios.modelo.php";

class ControladorUsuarios{

    public function ctrIngresoUsuario(){
        if (isset($_POST["IngUsuario"])) {
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["IngUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["IngPassword"])) {

                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST["IngUsuario"];

                $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

                

                if ($respuesta["usuario"] == $_POST["IngUsuario"] &&
                    $respuesta["clave"] == $_POST["IngPassword"]) {

                    $_SESSION["iniciarsesion"] = "ok";
                    
                        echo '<script>
                            window.location = "inicio";
                        </script>';
                } else {
                    echo '<div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
                }
            }
        }


    }
    
    
}
