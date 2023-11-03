<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listado de VehÃ­culos</title>
</head>
<?php 
	include("conexion.php");
	$cn=fnconexion();
	$sqlselect="select placa,modelo,marca,precio from vehiculo";
	$rs =mysqli_query($cn,$sqlselect);
	echo "<b>"."Placa     "." Modelo"." Marca "."Precio "."<br>"."</b>";
	while($row=mysqli_fetch_row($rs)){
		
		echo $row[0]."    ".$row[1]."    ".$row[2]."    ". $row[3]."<br>";
 	}
	echo"<br>";
	echo"<br>";
	echo"<a href=formulario1.html>volver</a>";
	echo"<br>";
	
	?>
<body>
</body>
</html>