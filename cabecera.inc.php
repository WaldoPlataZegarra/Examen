<html>
	<head>
		<title>Bienvenida</title>
		<script>
		function colorE()
		{
			var x=document.getElementById("color");
			var bgcolor=x.options[x.selectedIndex].value;
			document.body.style.backgroundColor=bgcolor;
		}
		</script>
		<link href="hoja.css"  rel="stylesheet" />
	</head>
	<body>
	
		<div id="cabecera">
		</div>
		<?php
		/*
		Pregunta 1
		*/
		include "conexion.inc.php";
		session_start();
		echo "<select id='color'>";
		echo "<option value='' selected disabled hidden>Elige Color</option>";
		echo "<option class='Blue'>blue</option>";
		echo "<option class='Pink'>pink</option>";
		echo "<option class='Green'>green</option>";
		echo "</select>";
		echo "<button onclick='colorE()'>aceptar</button>";
		echo "<div id='fondo'>";
		$id=$_SESSION['username'];
		$sql = "SELECT * FROM identificador WHERE ci='$id'";
		$resultado = mysqli_query($conn, $sql);
		$array =mysqli_fetch_array($resultado);
		echo $array['NombreCompleto']."<br>";
		echo "<a href='salir.php'>Salir</a>";
		echo "</div>";
		$imagen="cabecera".$array['CI'];
		echo "<div id='$imagen'>";
		echo "</div>";
		/*
		Pregunta 2
		*/
		$consulta="select
		(SELECT count(i.LugarResidencia) FROM identificador i, notamateria n where n.CI=i.CI and n.Nota>=51 and i.LugarResidencia='01')as chq,
		(SELECT count(i.LugarResidencia) FROM identificador i, notamateria n where n.CI=i.CI and n.Nota>=51 and i.LugarResidencia='02')as lpz,
		(SELECT count(i.LugarResidencia) FROM identificador i, notamateria n where n.CI=i.CI and n.Nota>=51 and i.LugarResidencia='03')as cba,
		(SELECT count(i.LugarResidencia) FROM identificador i, notamateria n where n.CI=i.CI and n.Nota>=51 and i.LugarResidencia='04')as oru,
		(SELECT count(i.LugarResidencia) FROM identificador i, notamateria n where n.CI=i.CI and n.Nota>=51 and i.LugarResidencia='05')as pot,
		(SELECT count(i.LugarResidencia) FROM identificador i, notamateria n where n.CI=i.CI and n.Nota>=51 and i.LugarResidencia='06')as trj,
		(SELECT count(i.LugarResidencia) FROM identificador i, notamateria n where n.CI=i.CI and n.Nota>=51 and i.LugarResidencia='07')as sc,
		(SELECT count(i.LugarResidencia) FROM identificador i, notamateria n where n.CI=i.CI and n.Nota>=51 and i.LugarResidencia='08')as ben,
		(SELECT count(i.LugarResidencia) FROM identificador i, notamateria n where n.CI=i.CI and n.Nota>=51 and i.LugarResidencia='09')as pnd";
		$aprobados =mysqli_query($conn, $consulta);
		$datos = mysqli_fetch_array($aprobados);
		$chq=$datos['chq'];
		$lpz=$datos['lpz'];
		$cba=$datos['cba'];
		$oru=$datos['oru'];
		$pot=$datos['pot'];
		$trj=$datos['trj'];
		$sc=$datos['sc'];
		$ben=$datos['ben'];
		$pnd=$datos['pnd'];
		echo "<table border='1' bordercolor='red'>";
		echo "<tr>";
		echo "<td>Chuqisaca</td>";
		echo "<td>La Paz</td>";
		echo "<td>Cochabamba</td>";
		echo "<td>Oruro</td>";
		echo "<td>Potosi</td>";
		echo "<td>Tarija</td>";
		echo "<td>Santa Cruz</td>";
		echo "<td>Beni</td>";
		echo "<td>Pando</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$chq."</td>";
		echo "<td>".$lpz."</td>";
		echo "<td>".$cba."</td>";
		echo "<td>".$oru."</td>";
		echo "<td>".$pot."</td>";
		echo "<td>".$trj."</td>";
		echo "<td>".$sc."</td>";
		echo "<td>".$ben."</td>";
		echo "<td>".$pnd."</td>";
		echo "</tr>";
		echo "<table>";
		?>
		

		