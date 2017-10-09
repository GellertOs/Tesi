<?php

		//recibimos datos de usuario
		$nombre = $_POST["nump"];
		$apellido = $_POST["des"];
		$grupo = $_POST["bodega"];
		$carrera = $_POST["fecha"];
		$turno = $_POST["fecha2"];
		$semestre = $_POST["fecha3"];

	//conexion a la base de datos
		$conexion = mysql_connect("localhost","root","");
		mysql_select_db("facias",$conexion);
	
	//validar que el usuario no existe

		$registro = "INSERT INTO alumno(nombre, apellido, grupo, carrera, turno, semestre) VALUES('$nombre','$apellido','$grupo','$carrera','$turno','$semestre')";
		mysql_query($registro);
	//Verificacion de registros o nulacion de dicha operacion
		if($registro){
	echo"<script type=\"text/javascript\">alert('USUARIO ".$nombre." AGREGADO'); window.location='http://localhost/residencia/LISTAR/lista.php';</script>"; 
		}else{
	echo"<script type=\"text/javascript\">alert('usuario NO AGREGADO'); window.location='http://localhost/residencia/LISTAR/lista.php';</script>";
		}
?> 