<?php
	
	$conn=mysqli_connect("localhost","root","","cursos");

	$sentence='Select * from profesores';

	$res=mysqli_query($conn,$sentence);

	$id=1;

	echo'
		<html>
		<head><title>Aplicacion</title></head>
		<body>
		<form>
		<table border="2px">
	';

	while ($ob=mysqli_fetch_object($res)) 
	{
		echo'
			<tr>
			<td>' . $ob->id . '</td>
			<td>' . $ob->nombre . '</td>
			<td>' . $ob->apellidos . '</td>
			<td>' . $ob->edad . '</td>
			<td>' . $ob->materia . '</td>
			<td><a href="Preborrar.php">Borrar</a></td>
			<td><a href="Premodificar.php">Modificar</a></td>
			</form>
			</td>
		'
		;
	}
	echo '</table></form></body></html>';

?>