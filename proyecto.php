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
                            <li><a href="index2.php">Inicio</a></li>
                         
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Cartas <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="compra.php">Carta de Aceptacion</a></li>
                                    <li><a href="compro.php">Carta Compromiso</a></li>                              
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Proyecto <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="proyecto.php">Formato de Proyecto</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Informe <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="informe.php">Informe Mensual</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Carta Residencias<span class="caret"></span>
                                </a>
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
                              <li><a href="index.php">Cerrar sesion</a></li>
                                   
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
        <h2>Formato de Proyecto</h2><BR>
        <form class="form-horizontal" action="asd.html" onsubmit="javascript:return Validar(this);" method="post">
          <div class="form-group">
        
            <input type="submit" class="btn btn-primary" value="subir">
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