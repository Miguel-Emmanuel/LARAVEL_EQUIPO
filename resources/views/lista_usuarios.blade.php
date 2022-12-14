
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('bares')
    <table class="table table-striped table-hover">  <thead>
    <tr>
      <th scope="col" style="color: #591C68">ID</th>
      <th scope="col" style="color: #591C68">Foto(nombre)</th>
      <th scope="col" style="color: #591C68">Foto</th>
      <th scope="col" style="color: #591C68">Nombre</th>
      <th scope="col" style="color: #591C68">Apellido Paterno</th>
      <th scope="col" style="color: #591C68">Apellido Materno</th>
      <th scope="col" style="color: #591C68">Edad</th>
      <th scope="col" style="color: #591C68">Genero</th>
      <th scope="col" style="color: #591C68">Activo</th>
      <th scope="col" style="color: #591C68">Editar</th>
      <th scope="col" style="color: #591C68">Eliminar</th>
      <th scope="col" style="color: #591C68">Detalles</th>


    </tr>
  </thead>

@foreach($usuarios1 as $usuario)
<tr>
    <td>{{ $usuario -> id_usuario }}</td>
    <td>{{ $usuario -> foto }}</td>
    <td><img src="{{ asset ('archivos/'.$usuario->foto) }}" style="width:50px"></td>
    <td>{{ $usuario -> nombre }}</td>
    <td>{{ $usuario -> app }}</td>
    <td>{{ $usuario -> ap }}</td>
    <td>{{ $usuario -> edad }}</td>
    <td>{{ $usuario -> genero }}</td>
    <td>
    @if($usuario -> activo ==1)
    <b style="color: #FF28B4;">Activo</b>
    @else
    <b style="color: #f00;">Inactivo</b>
    @endif          
</td>

<td>
<a href="{{route('editar_usuarios',['id' => $usuario->id_usuario]) }}">

    <button style="background-color:#FAB9F3;  border-radius:22px; border:3px solid #FAB9F3;"  type="submit" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
  <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
</svg></button></td>
<td>
<a href="{{route('borrar_usuarios',['id' => $usuario->id_usuario]) }}" onclick="return confirm('ESTAS SEGURO QUE QUIERES BORRAR ESTE USUARIO');">
    
<button  style="background-color:#C482BF;  border-radius:22px; border:3px solid #C482BF;"  type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
  <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
</svg></button></td>
<td>
<a href="{{  route('detalle_usuarios',['id' => $usuario->id_usuario]) }}">  
<button style="background-color:#FAB9F3;  border-radius:22px; border:3px solid #FAB9F3;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>

</svg>
</button></td>
</td>

</tr>
@endforeach

<br>
<br>

    </table>
    
</body>
</html>