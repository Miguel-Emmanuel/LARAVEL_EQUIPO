<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <table class="table table-striped table-hover">  <thead>

    <tr>
      <th scope="col" style="color: #591C68">Id_tienda</th>
      <th scope="col" style="color: #591C68">Clave</th>
      <th scope="col" style="color: #591C68">Nombre</th>
      <th scope="col" style="color: #591C68">Foto(nombre)</th>
      <th scope="col" style="color: #591C68">Foto</th>


    </tr>
  </thead>

@foreach($tiendas1 as $tienda)
<tr>
    <td>{{ $tienda -> id_tienda }}</td>
    <td>{{ $tienda -> clave }}</td>
    <td>{{ $tienda -> nombre }}</td>
    <td>{{ $tienda -> foto }}</td>
    <td><img src="{{ asset ('archivos/'.$tienda->foto) }}" style="width:50px"></td>
  
   
</tr>
@endforeach



    </table>