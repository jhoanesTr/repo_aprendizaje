<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>PDF</title>
    <style>
        body{
            font-family: "Montserrat", sans-serif;
        }
        .container{
            /*background: red;*/
            align-content: center;
        }
        .text-center{
            text-align: center;
        }
        .pe-1{
            padding-right: 10px;
        }
        .pe-2{
            padding-right: 20px;
        }
        .pe-3{
            padding-right: 30px;
        }
        .ps-0{
            padding-left: 0;
        }
        .ps-1{
            padding-left: 10px;
        }
        .ps-2{
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <h1>Listado de personas</h1>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th class="ps-1">Nombre</th>
                    <th class="ps-1">1º Apellido</th>
                    <th class="ps-1">2º Apellido</th>
                    <th class="ps-1">NIF</th>
                    <th>Fecha de nacimiento</th>
                    <th>Sexo</th>
                    <th class="ps-1">CP</th>
                    <th class="ps-1">Teléfono</th>
                    <th class="ps-1">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persoa)
                <tr>
                    <td class="text-center">{{ $persoa->id }}</td>
                    <td class="ps-1">{{ $persoa->nome }}</td>
                    <td class="ps-1">{{ $persoa->primeiro_apelido }}</td>
                    <td class="ps-1">{{ $persoa->segundo_apelido }}</td>
                    <td class="ps-1">{{ $persoa->nif }}</td>
                    <td class="text-center">{{ $persoa->data_nacemento }}</td>
                    <td>{{ $persoa->sexo }}</td>
                    <td class="ps-1">{{ $persoa->codigo_postal }}</td>
                    <td class="ps-1">{{ $persoa->telefono }}</td>
                    <td class="ps-1">{{ $persoa->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
