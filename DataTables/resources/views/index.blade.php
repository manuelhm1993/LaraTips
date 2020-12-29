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
                    ]//Campos requeridos
                });
            }, false);
        </script>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container mt-5">
            <table id="users" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>

                {{-- Al usar AJAX el tbody se creará automáticamente --}}
            </table>
        </div>
    </body>
</html>
