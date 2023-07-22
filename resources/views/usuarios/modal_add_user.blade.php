<!-- Nueva Aduana -->
<div class="modal fade" id="modalUserAd" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        
          <small id="titulo" class="text-muted">Agregar usuarios</small>
        
      </div>
      <div class="divider"></div> 
      <div class="modal-body">
        <form id="FormAgregarUsuario">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nombre Completo:</label>
            <input value="" type="text" class="form-control" placeholder="Nombre completo" name="nombre_completo" id="nombre_completo" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Login:</label>
            <input type="text" class="form-control" placeholder="usuario" name="login" id="login" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" placeholder="****" name="password" id="password" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tipo:</label>
                <select class="form-control" name ="tipo" id="tipo_usuario">
                  <option value="1">Administrador</option>
                  <option value="2">Usuario</option>
              </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="divider"></div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="GuardarUsuario">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Editar Tipo de Aduana -->
<div class="modal fade" id="modalTipoAduanaEditar" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1>Interamerica</h1>
        <h2>
          <small id="titulo" class="text-muted">Editar Registro</small>
        </h2>
      </div>
      <div class="divider"></div>
      <div class="modal-body">
        <form id="FormEditarAduana">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nombre:</label>
            <input value="" type="text" class="form-control" placeholder="NOMBRE" name="NOMBRE" id="NombreAduanaEdita" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">No.Aduana:</label>
            <input type="number" class="form-control" placeholder="Numero.Aduana" name="NOADUANA" id="NumeroAduanaEdita" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Seccion:</label>
            <input type="number" class="form-control" placeholder="Seccion" name="SECCION" id="SeccionAduanEdita" required>
            <input value="" type="text" name="id" id="TipoAduanaEditarId" style="display: none;">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="divider"></div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="GuardarEditaAduana">Editar</button>
      </div>
    </div>
  </div>
</div>

<!-- Eliminar Tipo de Aduana -->
<div class="modal fade" id="modalTipoAduanaEliminar" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1>Interamerica</h1>
        <h2>
          <small id="titulo" class="text-muted">Eliminar Registro</small>
        </h2>
      </div>
      <div class="divider"></div>
      <div class="modal-body">
        <form id="FormEliminarAduana">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Estas seguro de eliminar el registro?</label>
            <input value="" type="text" name="id" id="TipoAduanaEliminarId" style="display: none;">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="divider"></div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="EliminarAduana">Estoy Seguro</button>
      </div>
    </div>
  </div>
</div>