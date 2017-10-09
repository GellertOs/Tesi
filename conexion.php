<?php

function conectar(){
	
	$user="root";
	$pass="";
	$server="localhost";
	$db="facias";
	$con=mysql_connect($server,$user,$pass) or die ("Error a la conexion");
	mysql_select_db($db,$con);

	return $con;
}
	
	
?>