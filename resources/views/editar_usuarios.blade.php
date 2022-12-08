@include('bares')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body{
        color: ;
        background-image: url("/miguel/metal.gif");
        background-size: 300px;              }
    #best{
        margin-top: 80px;
    background-image: url("/miguel/imagenes/gears.jpg");
    background-repeat: no-repeat;
    background-size: 1300px;
        text-align: center;
        width: 50%;                          }
  
    input,select{
            margin-left: 100px;
            float: center;
            background:;                      }
        #lol{            color: yellow;       }
     #coca {      background: #2C4EC0;        }
        #cma{   margin-left: 300px;           }
       #lom{ margin-left: 340px;              }
       #comit{ margin-left: 380px;            }
        select{  background: #C1BCBC;         }
</style>
</head>
<body>
    
<form action="{{ route('salvar_usuarios',['id' => $usuarios->id_usuario]) }}" method="POST" class="row g-3" enctype="multipart">

@csrf
{{method_field('PUT')}}
    <h1>EDITAR DE USUARIOS</h1>
    <hr>

    



<div class="input-group mb-3">
  <div class="input-group-prepend">
  <input type="hidden" aria-label="First name" value="{{ $usuarios -> nombre }}" class="form-control" name="nombre" style="margin-right: 20px">

    <label class="input-group-text" for="inputGroupSelect01">{{ $usuarios -> nombre }}</label>
  </div>

<div class="input-group">
  <span class="input-group-text" style="margin-left: 60px">APELLIDO  MATERNO</span>
  <input type="text" aria-label="First name" class="form-control" name="ap" value="{{ $usuarios -> ap }}">
    </div>
  <div class="input-group">
  <span class="input-group-text"style="margin-left: 20px"> APELLIDO PATERNO</span>
  <input type="text" aria-label="LApellido Paterno" class="form-control" name="app" value="{{ $usuarios -> app }}">
</div>
<div class="input-group" id="lom">
<span class="input-group-text">
EDAD</span>
 <input type="text" name="fn" value="{{ $usuarios -> edad }}"></div>
 <div  class="input-group"><div id="cma">
 <button type="button" class="btn btn-warning"> 
    <input type="radio" name="gen" value="Femenino"  {{ $usuarios->genero == "Femenino"?'checked':''; }}> Femenino   <br></button>

<button type="button" class="btn btn-secondary" >
<input type="radio" name="gen"  value="Masculino"  {{ $usuarios -> genero == "Masculino"?'checked':''; }}> Masculino <br></button>
</div>
</div>     
<input type="file" name="foto" id=""value="{{ $usuarios -> foto }}">
  


                </div>
                <div class="input-group mb-3" id="comit">
                    <span class="input-group-text" id="basic-addon1" style="margin-left: 15px">Activo</span>
                    <button type="button" class="btn btn-success" >  <input type="checkbox" name="activo" {{ $usuarios -> activo >0?'cheked':''; }}></button> 
                </div>
                    
                    <br><div>
                    <button type="submit" class="btn btn-primary" value="">Salvar el registro del Alumno </button>
                    
</form>
<hr>
<a href="{{route('lista_usuarios')}}"><button class="btn btn-primary" type="button">REGRESAR A LA LISTA DE USUARIOS</button> </a>





</body>
</html>