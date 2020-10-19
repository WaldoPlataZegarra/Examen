<html>
<head>
</head>
<body>


<form  action="accion.php" method="POST">
<table>
<?php
	include "conexion.inc.php";
	echo "<tr>";
	echo "<td>".'<label>ID:  </label>'."</td>";
	echo "<td>".'<input type="text" name="id"/>'."</td>";	 
	echo "</tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td>".'<label>Contraseña:  </label>'."</td>";
	echo "<td>".'<input type="password" name="Contra"/>'."</td>";	 
	echo "</tr>";
	echo "<tr>";
	echo "<tr >";
	echo "<td colspan='2' align='center'>".'<input type="submit" name="Aceptar" value="Aceptar"/>'."</td>";
	echo "<tr>";
?>
</table>
</form>
</body>
</html>