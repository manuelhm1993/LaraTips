<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DataTables</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script defer>
            window.addEventListener('load', function() {
                $('#users').DataTable({
                    "serverSide": true,//Activar el procesamiento del servidor
                    "ajax": "{{ url('api/users') }}",//Quien provee la data
                    "columns": [
                        {data: "id"},
                        {data: "name"},
                        {data: "email"},
                        {data: "btn"},//Implementar botones
                    ],//Campos requeridos
                    "language": {
                        "emptyTable":     "No hay datos disponibles",
                        "info":       "Mostrando _START_ a _END_ de _TOTAL_ registros",
                        "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                        "infoFiltered":   "(filtrado de _MAX_ total registros)",
                        "lengthMenu": "Mostrar _MENU_ registros",
                        "loadingRecords": "Cargando...",
                        "processing":     "Procesando...",
                        "search":     "Buscar:",
                        "zeroRecords":    "No se encontraron resultados",
                        "paginate": {
                            "first":      "Primero",
                            "last":       "Último",
                            "next":       "Siguiente",
                            "previous":   "Anterior"
                        },
                        /*"lengthMenu": 'Mostrar <select class="form-control">' +
                                        '<option value="10">10</option>' +
                                        '<option value="30">30</option>' +
                                        '<option value="-1">Todos</option>' + 
                                      '</select> registros',//Control personalizado*/
                    }
                });
            }, false);
        </script>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container mt-5">
            <table id="users" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>

                {{-- Al usar AJAX el tbody se creará automáticamente --}}
            </table>
        </div>
    </body>
</html>
