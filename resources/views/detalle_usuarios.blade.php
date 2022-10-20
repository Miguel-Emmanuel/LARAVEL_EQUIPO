<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DETALLE DE USUARIOS</h1>
    <hr>
    <b>NOMBRE: {{$detalle_usuarios->app . '   ' . $detalle_usuarios->ap . '   ' . $detalle_usuarios-> nombre}}</b><br>
   <b>EDAD: {{$detalle_usuarios->edad}}</b><br>
   <b>GENERO: {{$detalle_usuarios->genero}}</b><br>

   @if($detalle_usuarios -> activo ==1)
    <b style="color: #FF28B4;">Activo</b>
    @else
    <b style="color: #f00;">Inactivo</b>
    @endif   



</body>
</html>