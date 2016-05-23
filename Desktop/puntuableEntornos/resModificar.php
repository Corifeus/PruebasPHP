<?php

	$conn=mysqli_connect("localhost","root","","cursos");

	$sentence="update profesores set nombre='$_POST[nombre]',apellidos='$_POST[apellidos]',edad=$_POST[edad],materia='$_POST[materia]' where id=$_POST[idmod]";

	if($res=mysqli_query($conn,$sentence))
	{
		echo "Registro Modificado<br>";
		echo '<a href="index.php">Regresar al listado de profesores</a>';
	}else{
		echo "Ha ocurrido un error al actualizar los datos<br>";
		echo mysqli_error($conn);
	}


?>