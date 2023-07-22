$( "#adduser" ).on( "click", function() {
  
   $("#modalUserAd").modal("show");
} );


import Swal from 'sweetalert2';
window.Swal = Swal;

//prueba
// var Tableuser = null;

//   if (Tableuser == null) {
//     Tableuser = $("#usuario-table").DataTable({
//       rowId: "id",
//       ajax: {
//         url: '/CargarUsuarios',
//         type: 'GET'
//       },

//       columns: [
//         {data : 'id'},
//         {data : 'nombre_completo'},
//         {data : 'login'},
//         {data : 'tipo'},    
//         {data : 'fecha_creacion'},
//         {data : 'estatus'}


//       ],
//       language: {
//         "sProcessing":     "Procesando...",
//         "sLengthMenu":     "Mostrar MENU registros",
//         "sZeroRecords":    "No se encontraron resultados",
//         "sEmptyTable":     "Ningún dato disponible en esta tabla",
//         "sInfo":           "Mostrando registros del START al END de un total de TOTAL registros",
//         "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
//         "sInfoFiltered":   "(filtrado de un total de MAX registros)",
//         "sInfoPostFix":    "",
//         "sSearch":         "Buscar:",
//         "sUrl":            "",
//         "sInfoThousands":  ",",
//         "sLoadingRecords": "Cargando...",
//         "oPaginate": {
//           "sFirst":    "Primero",
//           "sLast":     "Último",
//           "sNext":     "Siguiente",
//           "sPrevious": "Anterior"
//         },
//         "oAria": {
//           "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
//           "sSortDescending": ": Activar para ordenar la columna de manera descendente"
//         }
//      },
//       order: [[ 0, "asc" ]]
//     })
//   }else{
//     refreshTableUser();
//   }
//prueba




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
                Swal.fire('Usuario Guardado correctamente')
                $("#GuardarUsuario").attr('disabled',false).text("Guardar");
                $('form').trigger("reset");
                $("#modalUserAd").modal('hide');
                refreshTableUser();
            },
            error: function(){
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'algo salio mal!'
                })
                $('form').trigger("reset");
                $("#GuardarUsuario").attr('disabled',false).text("Guardar");
                $("#modalUserAd").modal('hide');
            }
        });
 
});
