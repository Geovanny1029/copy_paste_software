$( "#adduser" ).on( "click", function() {
   $("#modalUserAd").modal("show"); 
} );


$("#GuardarUsuario").on( "click", (e) => {
    e.preventDefault();
    let form  = $("#FormAgregarUsuario");
        $.ajax({
            url     : `/copy_paste_software/public/usuarios/crear `,
            type    : 'POST',
            data    : form.serialize(),
            beforeSend : function(){
                $("#GuardarUsuario").attr('disabled',true).text("Cargando...");
            },
            success : function(response){
            Swal.fire(
                'Excelente',
                'Proceso completado correctamente!',
                'success'
            );

                $("#GuardarUsuario").attr('disabled',false).text("Guardar");
                $('form').trigger("reset");
                $("#modalUserAd").modal('hide');
                refreshTableUser();
            },
            error: function(){

                $('form').trigger("reset");
                $("#GuardarUsuario").attr('disabled',false).text("Guardar");
                $("#modalUserAd").modal('hide');
            }
        });
 
});


$("#EditarUsuario").on( "click", (e) => {
    e.preventDefault();
    var id_user = $("#EditarUsuario").val();
    let form  = $("#FormEditarUsuario");
        $.ajax({
            url     : `/copy_paste_software/public/actualizarusuario/`+id_user,
            type    : 'POST',
            data    : form.serialize(),
            beforeSend : function(){
                $("#EditarUsuario").attr('disabled',true).text("Actualizando...");
            },
            success : function(response){
            Swal.fire(
                'Excelente',
                'Proceso completado correctamente!',
                'success'
            );
                $("#EditarUsuario").attr('disabled',false).text("Guardar");
                $('form').trigger("reset");
                $("#modalUserEdit").modal('hide');
                refreshTableUser();
            },
            error: function(){

                $('form').trigger("reset");
                $("#EditarUsuario").attr('disabled',false).text("Guardar");
                $("#modalUserEdit").modal('hide');
            }
        });
 
});


