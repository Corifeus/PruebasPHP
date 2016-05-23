<?php
	
	echo'
		<form action="borrar.php" method="post">
		Seleccione el identificador del usuario que desea borrar  <input type="text" name="idaborrar"><br>

		<h3>Seleccione los nuevos datos del trabajador</h3>
				Nombre  <input type="text" name="nombre"><br><br>
				Apellidos  <input type="text" name="apellidos"><br><br>
				Edad  <input type="text" name="edad"><br><br>
				Materia  <input type="text" name="materia"><br><br>
				<input type="submit" value="Guardar Cambios"><br><br>
	</form>
	';

	echo '<a href="index.php">Regresar al listado de profesores</a>';

?>