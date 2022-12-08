<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield('section')

    <table class="table table-striped table-hover">  <thead>

    <tr>
      <th scope="col" style="color: #591C68">Id_tipo</th>
      <th scope="col" style="color: #591C68">Nombre</th>
      <th scope="col" style="color: #591C68">Detalle</th>
      <th scope="col" style="color: #591C68">Activo</th>

    </tr>
  </thead>

@foreach($tipos1 as $tipo)
<tr>
    <td>{{ $tipo -> id_tipo }}</td>
    <td>{{ $tipo -> nombre }}</td>
    <td>{{ $tipo -> detalle }}</td>
    <td>
    @if($tipo -> activo ==1)
    <b style="color: #FF28B4;">Activo</b>
    @else
    <b style="color: #f00;">Inactivo</b>
    @endif    
</td>
</tr>
@endforeach


    </table>
    
</body>
</html>