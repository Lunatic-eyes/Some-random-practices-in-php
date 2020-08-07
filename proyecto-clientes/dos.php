<?php 

//conexion a la base de datos
include("conexion.php");

//consulta
$solicitud = "SELECT * FROM datos ORDER BY Nombre ASC";
$resultado = mysqli_query($conexion, $solicitud);

//vaciar datos

echo "<table border='4'> <tr><td> NOMBRE</td> <td>APELLIDO</td> <td>EDAD</td> <td>CELULAR</td><td colspan='2'>ACCIONES</td></tr>" ;

//tabla con datos

while ($fila = mysqli_fetch_array($resultado) ) {
	echo "<tr>";
	echo "<td>". $fila['Nombre'] ."</td>";
	echo "<td>". $fila['Apellido'] ."</td>";
	echo "<td>". $fila['Edad'] ."</td>";
	echo "<td>". $fila['Celular'] ."</td>";
	echo "<td> <a href='tres.php?id=". $fila['ID'] ."'>Eliminar</a></td>";
	echo "<td> <a href='cuatro.php?id=". $fila['ID'] ."'>Modificar</a></td>";
	echo"</tr>";
}

echo "</table>";

 ?>