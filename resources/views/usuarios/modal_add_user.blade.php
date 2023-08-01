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
<div class="modal fade" id="modalUserEdit" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        
          <small id="titulo" class="text-muted">Editar usuario</small>
        
      </div>
      <div class="divider"></div> 
      <div class="modal-body">
        <form id="FormEditarUsuario">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nombre Completo:</label>
            <input value="" type="text" class="form-control" placeholder="Nombre completo" name="nombre_completo_edit" id="nombre_completo_edit" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Login:</label>
            <input type="text" class="form-control" placeholder="usuario" name="login_edit" id="login_edit" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" placeholder="****" name="password_edit" id="password_edit" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tipo:</label>
                <select class="form-control" name ="tipo_edit" id="tipo_edit">
                  <option value="1">Administrador</option>
                  <option value="2">Usuario</option>
              </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="divider"></div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="EditarUsuario">Actualizar</button>
      </div>
    </div>
  </div>
</div>
