<?php
	
	$conn=mysqli_connect("localhost","root","","cursos");

	$sentence="delete from profesores where id=$_POST[idborrar]";

	if($res=mysqli_query($conn,$sentence))
	{
		echo "Registro Eliminado<br>";
		echo '<a href="index.php">Regresar al listado de profesores</a>';
	}else{
		echo "Ha ocurrido un error al borrar los datos<br>";
		echo mysqli_error($conn);
	}


?>