<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Personas</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>
    <div class="container">
        <h1>Personas</h1>
        @if(session('estado'))
            <div class="alert alert-success">
                {{session('estado')}}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DUI</th>
                    <th>Fecha de Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($coleccion as $items)
                    @foreach($items as $item)
                        <tr>
                          <td>{!! $item->nombre !!}</td>
                          <td>{!! $item->apellido !!}</td>
                          <td>{!! $item->dui !!}</td>
                          <td>{!! $item->fechaNacimiento !!}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
