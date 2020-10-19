<html>
<body>
<?php
session_start();
include "conexion.inc.php";
$id=$_POST["id"];
$Contra=$_POST["Contra"];
$sql = "SELECT count(*) as c FROM usuario WHERE ci='$id.' and Clave='$Contra'";
$resultado = mysqli_query($conn, $sql);
$array =mysqli_fetch_array($resultado);
if($array['c']==1)
{	$_SESSION['username']=$id;
	header ("location: Bienvenida.php");
}
else
{
	echo "Datos Erroneos"."<br>";
	echo "<a href='index.php'>Intentar Nuevamente</a>";
}
?>
</body>
<html>