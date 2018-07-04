<!--!<!DOCTYPE html> -->
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Municipios</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>
    <div class="container">
        <h1>Municipios</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>IDDepartamento</th>
                    <th>ID RNPN</th>
                </tr>
            </thead>

            <tbody>
                @foreach($municipios as $municipio)
                    <tr>
                        <td>{!! $municipio->id !!}</td>
                        <td>{!! $municipio->nombre !!}</td>
                        <td>{!! $municipio->idDepartamento !!}</td>
                        <td>{!! $municipio->codigoRnpn !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>
