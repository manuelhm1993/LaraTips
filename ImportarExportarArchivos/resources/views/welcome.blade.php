<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Archivos</title>
    </head>
    <body>
        <h1>Exportar datos</h1>

        <p>
            Click <a href="{{ route('users.pdf') }}">aquí</a> para descargar en PDF a los usuarios
        </p>

        <p>
            Click <a href="{{ route('users.excel') }}">aquí</a> para descargar en EXCEL a los usuarios
        </p>

        <form action="{{ route('users.excel.import') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if (session('message'))
                <p>{{ session('message') }}</p>
            @endif

            <input type="file" name="file">
            
            <button>Importar usuarios</button>
        </form>
    </body>
</html>
