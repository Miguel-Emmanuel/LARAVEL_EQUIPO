<!DOCTYPE html>
<html lang="en">
<head>
    @yield('section')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        background-image: url(../public/archivos/SOL.png);
   
      }
      li.nav-item:hover{
      font-size: 18px;
      background-color: #c0c0c0;
      border-radius: 40px;
      box-shadow: 0px 0px 30px 10px #c0c0c0;

      }
    </style>
</head>
<body>
    
<header id="nav">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 700px">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link " href="{{route('lista_productos') }}">PRODUCTOS     </a>
      </li>
      <li class="nav-item">
      <a class="nav-link " href="{{route('lista_tipos') }}">TIPOS    </a>
      </li>
      <li class="nav-item">
      <a class="nav-link " href="{{route('lista_tiendas') }}">TIENDAS     </a>
      </li>
      <li class="nav-item">
      <a class="nav-link " href="{{route('lista_usuarios') }}">ADMINISTRADORES     </a>
      </li>
      
   <!--    <li class="nav-item">
      <a class="nav-link " href="{{route('alta_usuarios') }}" tabindex="-1" aria-disabled="true">CREAR UN NUEVO USUARIO</a>

      </li> -->
    
    </ul>
  </div>
</nav>
</header>

</body>
</html>