
<?php
session_start();

	$user="root";
	$pass="";
	$server="localhost";
	$db="facias";
	$conexion=mysql_connect($server,$user,$pass) or die ("Error a la conexion");
	mysql_select_db($db,$conexion);
	$username=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];

	$consulta=mysql_query("Select * from usuarios where userid='".$username."' and password='".$pass."'",$conexion);
	$control=mysql_query("Select * from control where admin_id='".$username."' and contra='".$pass."'",$conexion);
	if (mysql_num_rows($consulta) )
	{
		$areglo= mysql_fetch_array($consulta);
		$_SESSION["usuario"]=$areglo[$username];
		session_start();
		header('location:index2.php');
	}
	else
	{
	echo"<script type=\"text/javascript\">alert('usuario y contraseña incorrectos'); window.location='index.php';</script>"; 
	}

	if (mysql_num_rows($control) )
	{
		$areglo= mysql_fetch_array($control);
		$_SESSION["usuario"]=$areglo[$username];
		session_start();
		echo"<script type=\"text/javascript\">alert('Bienvenido ADMINISTRADOR'); window.location='index.php';</script>";
		header('location:http://localhost/residencia/LISTAR/lista.php');
	}
	else
	{
	echo"<script type=\"text/javascript\">alert('usuario y contraseña incorrectos'); window.location='index.php';</script>"; 
	}
?>