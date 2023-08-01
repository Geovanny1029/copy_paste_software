<!-- Nueva Aduana -->
<div class="modal fade" id="modalProductAd" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        
          <small id="titulo" class="text-muted">Agregar Productos</small>
        
      </div>
      <div class="divider"></div> 
      <div class="modal-body">
        <form id="FormAgregarProducto">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Producto:</label>
            <input value="" type="text" class="form-control" placeholder="Nombre Producto" name="producto" id="producto" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Cantidad:</label>
            <input type="number" class="form-control" placeholder="Cantidad" name="cantidad" id="cantidad" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"> $ Precio:</label>
            <input type="number" class="form-control" placeholder="Precio" name="precio" id="precio" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Marca/modelo:</label>
            <input type="text" class="form-control" placeholder="Marca_modelo" name="marca_modelo" id="marca_modelo" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Codigo de barra:</label>
            <input type="number" class="form-control" placeholder="Codigo" name="Codigo_de_Barras" id="Codigo_de_Barras" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="divider"></div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="GuardarProducto">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Editar Tipo de Aduana -->
<div class="modal fade" id="modalProductEdit" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        
          <small id="titulo" class="text-muted">Editar usuario</small>
        
      </div>
      <div class="divider"></div> 
      <div class="modal-body">
        <form id="FormEditarProducto">
         <div class="form-group">
            <label for="message-text" class="col-form-label">Producto:</label>
            <input value="" type="text" class="form-control" placeholder="Nombre Producto" name="producto_edit" id="producto_edit" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Cantidad:</label>
            <input type="number" class="form-control" placeholder="Cantidad" name="cantidad_edit" id="cantidad_edit" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Precio:</label>
            <input type="number" class="form-control" placeholder="Precio" name="precio_edit" id="precio_edit" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Marca/modelo:</label>
            <input type="text" class="form-control" placeholder="Marca_modelo" name="marca_modelo_edit" id="marca_modelo_edit" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Codigo de barra:</label>
            <input type="number" class="form-control" placeholder="Codigo" name="Codigo_de_Barras_edit" id="Codigo_de_Barras_edit" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="divider"></div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="EditarProducto">Actualizar</button>
      </div>
    </div>
  </div>
</div>
