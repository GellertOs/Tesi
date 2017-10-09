<script language="JavaScript">
function Borra(idcliente)
{
var agree=confirm("¿Realmente desea eliminar el cliente seleccionado?");
if (agree) { document.location="eliminar.php?id="+idcliente; }
else return false ;
}
</script>
<style type="text/css">
body p {
	font-family: Verdana, Geneva, sans-serif;
}
</style>
<form name="form1" method="post" action="buscador.php" id="cdr" >
  <h3>Buscar Alumno  </h3>
      <p>
        <input name="busca"  type="text" id="busqueda">
        <input type="submit" name="Submit" value="buscar" />
        </p>
  <h3>Buscar Grupo </h3>
  <p>
        <input name="busca2"  type="text" id="busqueda2" />
        <input type="submit" name="Submit2" value="buscar" />
  </p>
  <h3>Buscar Carrera </h3>
      <p>
        <input name="busca3"  type="text" id="busqueda3" />
        <input type="submit" name="Submit3" value="buscar" />
  </p>
      <h3>Buscar Semestre</h3>
      <p>
        <input name="busca4"  type="text" id="busqueda4" />
        <input type="submit" name="Submit4" value="buscar" />
        </p>
</p>
</p>
</form>
 <p>
  <style type="text/css">
input{outline:none;border:0px;}
#busqueda{background:#585858;color:#fff;}
#cdr{padding:5px;background:grey;width:220px;border-radius:10px 0px 0px 10px;}
#tab{background:#CCC;;border-radius:10px 10px 10px 10px;}
</style>
   
  <?php
if(isset($_POST['busca']));
$busca=$_POST['busca'];
mysql_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysql_select_db("facias");//nombre de la base de datos
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM alumno WHERE nombre LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
?>
<table width="1166" border="1" id="tab">
   <tr>
     <td width="19">Nombre </td>
     <td width="61">Apellido</td>
     <td width="157">grupo</td>
     <td width="221">carrera</td>
     <td width="176">turno</td>
     <td width="73">Semestre</td>
    
   </tr>
 
<?php

while($f=mysql_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="19">'.$f['nombre'].'</td>';
echo '<td width="61">'.$f['apellido'].'</td>';
echo '<td width="157">'.$f['grupo'].'</td>';
echo '<td width="221">'.$f['carrera'].'</td>';
echo '<td width="176">'.$f['turno'].'</td>';
echo '<td width="73">'.$f['semestre'].'</td>';
echo '</tr>';
}

}
if(isset($_POST['busca2']));
$busca2=$_POST['busca2'];
mysql_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysql_select_db("facias");//nombre de la base de datos
if($busca2!=""){
$busqueda2=mysql_query("SELECT * FROM alumno WHERE grupo LIKE '%".$busca2."%'");//cambiar nombre de la tabla de busqueda
?>
<table width="1166" border="1" id="tab">
   <tr>
     <td width="19">Nombre </td>
     <td width="61">Apellido</td>
     <td width="157">grupo</td>
     <td width="221">carrera</td>
     <td width="176">turno</td>
     <td width="73">Semestre</td>
    
   </tr>
 
<?php

while($f=mysql_fetch_array($busqueda2)){
echo '<tr>';
echo '<td width="19">'.$f['nombre'].'</td>';
echo '<td width="61">'.$f['apellido'].'</td>';
echo '<td width="157">'.$f['grupo'].'</td>';
echo '<td width="221">'.$f['carrera'].'</td>';
echo '<td width="176">'.$f['turno'].'</td>';
echo '<td width="73">'.$f['semestre'].'</td>';
echo '</tr>';
}

}
if(isset($_POST['busca3']));
$busca3=$_POST['busca3'];
mysql_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysql_select_db("facias");//nombre de la base de datos
if($busca3!=""){
$busqueda3=mysql_query("SELECT * FROM alumno WHERE carrera LIKE '%".$busca3."%'");//cambiar nombre de la tabla de busqueda
?>
<table width="1166" border="1" id="tab">
   <tr>
     <td width="19">Nombre </td>
     <td width="61">Apellido</td>
     <td width="157">grupo</td>
     <td width="221">carrera</td>
     <td width="176">turno</td>
     <td width="73">Semestre</td>
    
   </tr>
 
<?php

while($f=mysql_fetch_array($busqueda3)){
echo '<tr>';
echo '<td width="19">'.$f['nombre'].'</td>';
echo '<td width="61">'.$f['apellido'].'</td>';
echo '<td width="157">'.$f['grupo'].'</td>';
echo '<td width="221">'.$f['carrera'].'</td>';
echo '<td width="176">'.$f['turno'].'</td>';
echo '<td width="73">'.$f['semestre'].'</td>';
echo '</tr>';
}

}
if(isset($_POST['busca4']));
$busca4=$_POST['busca4'];
mysql_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysql_select_db("facias");//nombre de la base de datos
if($busca4!=""){
$busqueda4=mysql_query("SELECT * FROM alumno WHERE semestre LIKE '%".$busca4."%'");//cambiar nombre de la tabla de busqueda
?>
<table width="1166" border="1" id="tab">
   <tr>
     <td width="19">Nombre </td>
     <td width="61">Apellido</td>
     <td width="157">grupo</td>
     <td width="221">carrera</td>
     <td width="176">turno</td>
     <td width="73">Semestre</td>
    
   </tr>
 
<?php

while($f=mysql_fetch_array($busqueda4)){
echo '<tr>';
echo '<td width="19">'.$f['nombre'].'</td>';
echo '<td width="61">'.$f['apellido'].'</td>';
echo '<td width="157">'.$f['grupo'].'</td>';
echo '<td width="221">'.$f['carrera'].'</td>';
echo '<td width="176">'.$f['turno'].'</td>';
echo '<td width="73">'.$f['semestre'].'</td>';
echo '</tr>';
}

}










?>
</table>
<p>&nbsp;</p>
<p align="center"><a href="ex.php">Imprimir en EXCEL</a></p>
<p align="center"><a href="word.php" >Imprimir en WORD</a></p>
<p align="center"><a href="lista.php" >SALIR</a></p>
