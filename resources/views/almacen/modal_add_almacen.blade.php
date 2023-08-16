<!-- Nueva producto -->
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

<!-- Editar producto -->
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


<!-- importar excel -->
<div class="modal fade" id="modalimportarproductosexcel" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Carga Layout</h4>
      </div>
      <div class="divider"></div>
      <div class="modal-body">


<form id="">
        <input type="hidden" class="form-control" name="tipo"  value="1" ><!-- identificador para la alta -->
  
                       
        <div class="form-group">
            <label class="col-md-4 control-label">Importar excel de productos</label>
                <div class="col-md-6">
                <input type="file" name="file" id="file" />
            </div>                     
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" id="carga" class="btn btn-primary">
                    Registrar
                </button>
            </div>
        </div>
      </form>>
      </div>
      <div class="modal-footer">
        <article id="cargando" style="text-align: center; display: none;">
          <span style="display: inline-block;">Espere un momento por favor no cerrar la ventana</span>
          <img src="/img/loading.gif" style="display: inline-block; width: 150px;height: 125px;">
        </article> 
        <button type="button" id="cerrarr" class="btn btn-warning" data-dismiss="modal">cerrar</button>
          <!--button type="button" class="btn btn-primary">Save Changes</button-->
      </div>
    </div>
  </div>
</div>

