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
                    <button class="btn btn-info" data-toggle="modal" data-target="#archivoModal">agregar sede</button>
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
                <table id="tablesedes" class="table table-bordered table-striped">
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
                        <tr>
                            <td>1</td>
                            <td>Sede Central</td>
                            <td>Av. Principal 123, Ciudad</td>
                            <td>Oficinas administrativas y de operaciones.</td>
                            <td>
                                <button class="btn btn-success" style="font-size:80%; padding: 2px 5px;">
                                    Activo
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-default btn-edit" style="font-size:80%; padding: 2px 5px;" 
                                    data-id="1" 
                                    data-nombre="Sede Central" 
                                    data-direccion="Av. Principal 123, Ciudad" 
                                    data-descripcion="Oficinas administrativas y de operaciones.">
                                    <i class="fas fa-edit" style="font-size: 0.5em;"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sucursal Norte</td>
                            <td>Calle Norte 456, Ciudad</td>
                            <td>Centro de distribución y ventas.</td>
                            <td>
                                <button class="btn btn-danger" style="font-size:80%; padding: 2px 5px;">
                                    Inactivo
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-default btn-edit" style="font-size:80%; padding: 2px 5px;" 
                                    data-id="2" 
                                    data-nombre="Sucursal Norte" 
                                    data-direccion="Calle Norte 456, Ciudad" 
                                    data-descripcion="Centro de distribución y ventas.">
                                    <i class="fas fa-edit" style="font-size: 0.5em;"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- Modal para abrir archivo -->
<div class="modal fade" id="archivoModal" tabindex="-1" role="dialog" aria-labelledby="archivoModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="archivoModalLabel">agregar nueva sede</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nombreSede">Nombre</label>
                        <input type="text" class="form-control" id="nombreSede" placeholder="Ingrese el nombre de la sede">
                    </div>
                    <div class="form-group">
                        <label for="direccionSede">Dirección</label>
                        <input type="text" class="form-control" id="direccionSede" placeholder="Ingrese la dirección de la sede">
                    </div>
                    <div class="form-group">
                        <label for="descripcionSede">Descripción</label>
                        <textarea class="form-control" id="descripcionSede" rows="3" placeholder="Ingrese una descripción"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-primary">guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para editar sede -->
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="editarNombreSede">Nombre</label>
                        <input type="text" class="form-control" id="editarNombre">
                    </div>
                    <div class="form-group">
                        <label for="editarNombreSede">direccion</label>
                        <input type="text" class="form-control" id="editarNombreSede">
                    </div>
                    <div class="form-group">
                        <label for="editarDireccionSede">descripcion</label>
                        <input type="text" class="form-control" id="editarDireccionSede">
                    </div>
                    <div class="form-group">
                        <label for="editarDescripcionSede">estado</label>
                        <textarea class="form-control" id="editarDescripcionSede" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editarDescripcionSede">acciones</label>
                        <textarea class="form-control" id="editarDescripcionSede" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-primary">guardar cambios</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.btn-edit');
        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                const nombre = this.getAttribute('data-nombre');
                const direccion = this.getAttribute('data-direccion');
                const descripcion = this.getAttribute('data-descripcion');

                document.getElementById('editarNombreSede').value = nombre;
                document.getElementById('editarDireccionSede').value = direccion;
                document.getElementById('editarDescripcionSede').value = descripcion;

                $('#editarModal').modal('show');
            });
        });
    });
</script>