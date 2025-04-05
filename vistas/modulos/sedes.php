<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sedes</h1>
          </div>
          <div class="col-sm-6 text-right">
            <button class="btn btn-info" data-toggle="modal" data-target="#archivoModal">Agregar Sede</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Listado de Sedes</h3>
        </div>

        <div class="card-body">
          <table id="tblSedes" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $item = null;
              $valor = null;
              $sedes = ControladorSedes::ctrMostrarSedes($item, $valor);


              foreach ($sedes as $key => $value) {
                echo '<tr>
                                        <td>' . ($key + 1) . '</td>
                                        <td>' . $value["nombre_sede"] . '</td>
                                        <td>' . $value["direccion"] . '</td>
                                        <td>' . $value["descripcion"] . '</td>
                                        
                                        <td>';

                if ($value["estado"] == "activo") {
                  echo '<button class="btn btn-success btn-xs btaActivarSede" idSedes="' . $value["id_sede"] . '" estadoSede="inactivo"">Activa</button>';
                } else {
                  echo '<button class="btn btn-danger btn-xs btaActivarSede" idSedes="' . $value["id_sede"] . '" estadoSede="activo"">Inactiva</button>';
                }

                echo '</td>
                      <td>
                      <div class="btn-group">
                      <button class="btn btn-default btn-xs btnEditarSede" idSedes="' . $value["id_sede"] . '" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></button>';

                echo '</div>      
                          </td>
                          </tr>';
              }

              ?>


            </tbody>
            <tfoot>
            </tfoot>
          </table>
        </div>
      </div>
    </section>
  </div>

  <!-- Modal parabrir archivo -->
  <div class="modal fade" id="archivoModal" tabindex="-1" role="dialog" aria-labelledby="archivoModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="archivoModalLabel">Agregar sede</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label for="nombreSede">Nombre</label>
              <input type="text" class="form-control" id="nombreSede" name="nombreSede" placeholder="Ingrese el nombre de la sede">
            </div>
            <div class="form-group">
              <label for="direccionSede">Dirección</label>
              <input type="text" class="form-control" id="direccionSede" name="direccionSede" placeholder="Ingrese la dirección de la sede">
            </div>
            <div class="form-group">
              <label for="descripcionSede">Descripción</label>
              <textarea class="form-control" id="descripcionSede" name="descripcionSede" rows="3"
                placeholder="Ingrese una descripción"></textarea>
            </div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>

          <?php

          $crearsede = new ControladorSedes();
          $crearsede->ctrCrearSede();

          ?>
          </form>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal para editar sede -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Editar Sede</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label for="editNombreSede">Nombre</label>
              <input type="text" class="form-control" id="editNombreSede" placeholder="Ingrese el nombre de la sede">
            </div>
            <div class="form-group">
              <label for="editDireccionSede">Dirección</label>
              <input type="text" class="form-control" id="editDireccionSede"
                placeholder="Ingrese la dirección de la sede">
            </div>
            <div class="form-group">
              <label for="editDescripcionSede">Descripción</label>
              <textarea class="form-control" id="editDescripcionSede" rows="3"
                placeholder="Ingrese una descripción"></textarea>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar Cambios</button>
          <?php

          $editarSede = new ControladorSedes();
          $editarSede->ctrEditarSede();

          ?>
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Incluye Font Awesome para los iconos -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>