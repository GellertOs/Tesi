<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.11.3.min.js"></script>

</head>
<body>


<br>
<br>    
<br>

<div class="container-fluid">
  
    <div class="col-md-12 col-xs-12" align="center">
         <img src="imagenes/facias.jpg" class="img-responsive"> 
         <br>
         </div>
  
          
</div>
<br>
<div class="container" >
<div class="col-md-4 col-xs-12">
<div class="actions" align="center">
        <h2>LOGIN</h2><BR>
        <form class="form-horizontal" action="validar.php" onsubmit="javascript:return Validar(this);">
        
    
        <div class="form-group">
            <label class="control-label col-md-4 col-xs-12">Usuario:</label>
                <div class="col-md-8 col-xs-12">
                    <input type="text" class="form-control" id="user" name="user" placeholder="Inserte aqui su usuario" onblur="javascript:Validar();" required >
                </div>
        </div>

          <div class="form-group">
            <label class="control-label col-md-4 col-xs-12">Contraseña:</label>
                <div class="col-md-8 col-xs-12">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Inserte su password"  required title="Campo password requerido" >
                </div>
        </div>
       
       

       <div class="form-group">
        
            <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="reset" class="btn btn-default" value="Limpiar">
       
    </div>
 
    </form>

    </div>
</div>
<div class="col-md-4 col-xs-12">
  <div class="actions" align="center">
    <h2>Agregar</h2>
    <BR>
    <form class="form-horizontal"  method="post" action="registro.php" onsubmit="javascript:return Validar(this);">
      <div class="form-group">
        <label class="control-label col-md-4 col-xs-12">Usuario:</label>
        <div class="col-md-8 col-xs-12">
          <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Inserte aqui su usuario" onblur="javascript:Validar();" required >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-4 col-xs-12">Contraseña:</label>
        <div class="col-md-8 col-xs-12">
          <input type="password" class="form-control" id="password" name="password" placeholder="Inserte su password"  required title="Campo password requerido" >
        </div>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Enviar">
        <input type="reset" class="btn btn-default" value="Limpiar">
      </div>
    </form>
  </div>
</div>
</div>
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<div></div></body>
</html>