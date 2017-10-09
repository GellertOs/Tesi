<?php

		//recibimos datos de usuario
		$usuario = $_POST["usuario"];
		$password = $_POST["password"];

	//conexion a la base de datos
		$conexion = mysql_connect("localhost","root","");
		mysql_select_db("facias",$conexion);
	
	//validar que el usuario no existe

		$registro = "INSERT INTO usuarios(userid, password) VALUES('$usuario','$password')";
		mysql_query($registro);

		if($registro){
	echo"<script type=\"text/javascript\">alert('USUARIO ".$usuario." AGREGADO'); window.location='index.php';</script>"; 
		}else{
	echo"<script type=\"text/javascript\">alert('usuario NO AGREGADO'); window.location='index.php';</script>";
		}
?> 