<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SISTEMA</title>
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.11.3.min.js"></script>

</head>
<body>
<header>
            <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a href="index2.php" class="navbar-brand">Sistema </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">
                            <li></li>
                            <li class="dropdown">
                              <ul class="dropdown-menu">
                                  <li><a href="proyecto.php">Formato de Proyecto</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                              <ul class="dropdown-menu">
                                  <li><a href="informe.php">Informe Mensual</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                              <ul class="dropdown-menu">
                                  <li><a href="carta.php">Carta Residencias</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                              <ul class="dropdown-menu">
                                <li><a href=""></a></li>
                              </ul>
                          </li>
                        </ul>
                         <ul class="nav navbar-nav navbar-right">
                           <li><a href="http://localhost/residencia/LISTAR/lista.php">Volver</a></li>
                                   
                         </ul>
                    </div>
                </div>

            </nav>
        </header>

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
<div class="actions" align="center">
        <h2>Registro de Alumnos</h2><BR>
        <h3>ADMINISTRADOR Rellene los campos </h3>
        <form class="form-horizontal" method="post" action="alto.php" onsubmit="javascript:return Validar(this);" >
        
    
        <div class="form-group">
            <label class="control-label col-md-3 col-xs-12">Nombre:</label>
                <div class="col-md-6 col-xs-12">
                    <input type="text" class="form-control" id="nump" name="nump" placeholder="Ingrese Nombre" onblur="javascript:Validar();" required>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-xs-12">	 Apellidos:</label>
                <div class="col-md-6 col-xs-12">
                    <input type="text" class="form-control" id="des" name="des" placeholder="Ingrese Apellido" onblur="javascript:Validar();" required>
                </div>
        </div>

         <div class="form-group">
            <label class="control-label col-md-3 col-xs-12">Grupo:</label>
                <div class="col-md-6 col-xs-12">
                    <input type="int" class="form-control" id="bodega" name="bodega" placeholder="Ingrese grupo" onblur="javascript:Validar();" required>
                </div>
        </div>

    <div class="form-group">
            <label class="control-label col-md-3 col-xs-12">Carrera
            :</label>
                <div class="col-md-6 col-xs-12">
                <input type="text" name="fecha" id="fecha" class="form-control" placeholder="Ingrese Carrera" onblur="javascript:Validar();" required>
                </div>
        </div>

        <div class="form-group">
          <div id="alert">Hola</div>
          <div class="form-group">
            <label class="control-label col-md-3 col-xs-12">Turno
              :</label>
            <div class="col-md-6 col-xs-12">
              <input type="text" name="fecha2" id="fecha2" class="form-control" placeholder="Ingrese Turno" onblur="javascript:Validar();" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-xs-12">Semestre(&quot;NUMERO&quot;)
              :</label>
            <div class="col-md-6 col-xs-12">
              <input type="int" name="fecha3" id="fecha3" class="form-control" placeholder="Ingrese Semestre" onblur="javascript:Validar();" required>
            </div>
          </div>
          <p>&nbsp;</p>
        </div>

       <div class="form-group">
        
            <input type="submit" class="btn btn-primary" value="Subir">
            <input type="reset" class="btn btn-default" value="Limpiar">
       
    </div>

    <div class="form-group"></div>
 
    </form>
    <br>
  
    <br>
<br>

    </div>
</div>

    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>