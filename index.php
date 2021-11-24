<!DOCTYPE html>
<html lang="es"> 
<head>
	<title>Lab. Aplicaciones - EEST 2</title> 
	<meta charset="utf-8" /> <!-- mapa de caracteres -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="estilos.css" />
</head>

<body>

<div class="contenedor">

	<h1>Mis Contactos - Original</h1>
	
	<nav>
		<ul>
			<li><a href="formulario.php?accion=agregar">Nuevo Contacto</a></li>
		</ul>
	</nav>
	
	<table>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Fecha de Nacimiento</th>
			<th>Domicilio</th>
			<th>Teléfono</th>
			<th>Mail</th>
			<th>Acciones</th>
		</tr>
		
		<?php 
			//Abrimos la conexión con la BD
			require('abrir-conexion.php');

			//Configuración de charset mapa de caracteres
			mysqli_set_charset($conexion, "utf8");

			//Definimos la consulta SQL
			$consulta = "SELECT	* FROM contactos ORDER BY contactos.nombre";

			//Ejecutamos la consulta y almacenamos los resultados en una variable
			$resultado = $conexion->query($consulta);

			if ($resultado) {
				
				//Imprimimos la cantidad de filas
				echo "Total: " . $resultado->num_rows;

				//Recorremos los resultados de la consulta uno por uno y generamos las filas de la tabla en html
				while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {
					echo "<tr>";
					echo "<td>" . $fila['id'] . "</td>";
					echo "<td>" . $fila['nombre'] . "</td>";
					echo "<td>" . $fila['fecha'] . "</td>";
					echo "<td>" . $fila['domicilio'] . "</td>";
					echo "<td>" . $fila['tel'] . "</td>";
					echo "<td>" . $fila['mail'] . "</td>";
					echo "<td>" . "<a href='formulario.php?accion=modificar&id=$fila[id]&nombre=$fila[nombre]&fecha=$fila[fecha]&domicilio=$fila[domicilio]&tel=$fila[tel]&mail=$fila[mail]'>Editar</a> | <a href='backend.php?accion=eliminar&id=$fila[id]' onclick='return confirmar();'>Borrar</a>" . "</td>";
					echo "<tr>";
				};
			
			}else{				
		
				echo "Error en la consulta SQL";
				exit();
			
			};

			//Liberar los resultados de la memoria
			$resultado->close();

			//Cerramos la conexión a la Base de Datos
			require('cerrar-conexion.php');

		?>
	</table>
</div>

<script type="text/javascript">
	function confirmar() {
		if (confirm('Esta seguro de eliminar el registro?')==true) {
			return true;
		}else{
			return false;
		};
	};
</script>

</body>
</html>