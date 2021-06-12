<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro_Exitoso</title>



</head>
<body>

<?php

$con = mysqli_connect('localhost','root','','formecology') or die('Error en la Conexion');
$sql = "INSERT INTO resultado (Nombre,Edad,Nivel_Educativo,Rama_Favorita,Interes,Uso_de_Producto_Biodeg,Email) values ('".$_POST["Nombre"]."','".$_POST["Edad"]."','".$_POST["Nivel_Educativo"]."','".$_POST["Rama_Favorita"]."','".$_POST["Interes"]."','".$_POST["Uso_de_Producto_Biodeg"]."','".$_POST["Email"]."')";

$resultado=mysqli_query($con, $sql)or die('Error de Conexion. ¡Intente Nuevamente!');
mysqli_close($con);

echo "<h1>"."¡Datos Guardados Correctamente!"."</h1>"."<br>"."<br>";


//('".$_POST["Nombre"]."','".$_POST["Edad"]."','".$_POST["Nivel_Educativo"]."','".$_POST["Rama_Favorita"]."','".$_POST["Interes"]."','".$_POST["Uso_de_Producto_Biodeg"]."','".$_POST["Email"]."');


?>


</body>
</html>