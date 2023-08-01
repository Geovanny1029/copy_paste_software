$( "#addproduct" ).on( "click", function() {
    $("#modalProductAd").modal("show"); 
 } );
 
 
 $("#GuardarProducto").on( "click", (e) => {
     e.preventDefault();
     let form  = $("#FormAgregarProducto");
         $.ajax({
             url     : `/copy_paste_software/public/producto/crear `,
             type    : 'POST',
             data    : form.serialize(),
             beforeSend : function(){
                 $("#GuardarProducto").attr('disabled',true).text("Cargando...");
             },
             success : function(response){
             Swal.fire(
                 'Excelente',
                 'Proceso completado correctamente!',
                 'success'
             );
 
                 $("#GuardarProducto").attr('disabled',false).text("Guardar");
                 $('form').trigger("reset");
                 $("#modalProductAd").modal('hide');
                 refreshTablealmacen();
             },
             error: function(){
 
                 $('form').trigger("reset");
                 $("#GuardarAlmacen").attr('disabled',false).text("Guardar");
                 $("#modalProductAd").modal('hide');
             }
         });
  
 });
 
 
 $("#EditarProducto").on( "click", (e) => {
     e.preventDefault();
     var id_producto = $("#EditarProducto").val();
     let form  = $("#FormEditarProducto");
         $.ajax({
             url     : `/copy_paste_software/public/actualizarproducto/`+id_producto,
             type    : 'POST',
             data    : form.serialize(),
             beforeSend : function(){
                 $("#EditarProducto").attr('disabled',true).text("Actualizando...");
             },
             success : function(response){
             Swal.fire(
                 'Excelente',
                 'Proceso completado correctamente!',
                 'success'
             );
                 $("#EditarProducto").attr('disabled',false).text("Guardar");
                 $('form').trigger("reset");
                 $("#modalProductEdit").modal('hide');
                 refreshTablealmacen();
             },
             error: function(){
 
                 $('form').trigger("reset");
                 $("#EditarProducto").attr('disabled',false).text("Guardar");
                 $("#modalProductEdit").modal('hide');
             }
         });
  
 });
 
 
 