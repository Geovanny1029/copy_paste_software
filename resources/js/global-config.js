$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    error: (error) => {
        if(error.status === 422) {
            const errors = Object.values(error.responseJSON.errors).join('<br>- ');
            toastr.error("¡ERROR!! <br>- "+errors);
        }

        if (error.status === 403) {
            toastr.error('Error!! No tiene Permisos para usar esta Función');
        }
    }
});

$.extend( true, $.fn.dataTable.defaults, {
    responsive : true,
    destroy    : true,
    processing : true,
    serverSide : true,
    language: {
      url: '/lang/es.json'
    },
    lengthMenu  : [[10,25, 50, -1],[10,25, 50, "Todos"]]
});