var l = 3;

    $("#addc").click(function(){
      l++;
       idpcat = $("#idprincipal").val();
      $("#totaltipocp").attr("value",l);
      $('#tabla_conceptos').append(
            '<tr id="row'+l+'" class="agregado">'+
            '<td><select id="selconcepto'+l+'" name="selconcepto[]" class="selconcepto form-control" data-live-search="true"></select></td>'+
            '<td><input type="text" name="descripcion[]" style=" text-transform: uppercase;" id="descripcion'+l+'" placeholder="descripcion" class="form-control descripcion" /></td>'+
            '<td><input type="number" name="cantidad[]" id="cantidad'+l+'" placeholder="Cantidad" class="form-control cantidad "/></td>'+
            '<td><button type="button" name="removec" id="'+l+'" class="btn btn-danger btn_remove">X</button></td></tr>'
            );
        $.ajax({
          url  : '/getcatalogo',
              type : 'POST',
              data : {'id':idpcat},
                beforeSend : function(){
              },
              success    : function(r){

              conceptos = r.conceptos;
            //for select aduanas
            var html_selec = "<option value=''>Selecciona Concepto</option>";
            for (var i = 0; i<conceptos.length; i++) {
              html_selec += "<option value='"+conceptos[i].id+"'>"+conceptos[i].producto+"</option>";
            }
            $("#selconcepto"+l).html(html_selec);
            $("#selconcepto"+l).selectpicker();
            $("#selconcepto"+l).selectpicker('refresh');
          }
      });
    });

    $(document).on('click', '.btn_remove', function(){
    var valcarga = $("#totaltipocp").val();
    $("#totaltipocp").attr("value",valcarga-1);

      var button_idp = $(this).attr("id");
      $('#row'+button_idp+'').remove();

    });