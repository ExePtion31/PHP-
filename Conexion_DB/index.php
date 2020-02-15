<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $baseDatos = "Prueba2";

 $conexion = mysqli_connect($server, $user, $password) or die ("No se puede conectar a la DB");

 $db = mysqli_select_db($conexion, $baseDatos) or die ("Problema de conexion con la DB");

 $consulta = "SELECT * FROM estudiantes";
 $resultado = mysqli_query($conexion, $consulta) or die ("Problemas al consultar la DB");

 echo "<table border='2px'>";

 while($registro = mysqli_fetch_array($resultado))
 {
  echo "<tr>";
  echo "<td>". $registro ['ID']."<br>".$registro['Nombre']."<br>".$registro['Apellido']."</td>";
  echo "</tr>";

 }
echo "</table>";

?>