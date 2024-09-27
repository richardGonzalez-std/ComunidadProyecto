<?php
	if($_SESSION["Priv"]==0){
		echo "<script>alert('ACCESO NO AUTORIZADO')</script>";
		echo "<script>window.location='./Plantilla.php?pagina=inicio'</script>";
	}

	$estudiante = RegistroEstudiante::ctrSeleccionarEstudiante(null, null);
?>


<body style="margin:0; padding: 0;">
	<h1 style="text-align: center;">FICHAS DE INSCRIPCIÓN</h1>
	<table>
		<thead>
			<tr>
				<th colspan="1">1ER AÑO</th>
				<th colspan="1">CÉDULA</th>
				<th colspan="1">NOMBRE</th>
				<th colspan="1">APELLIDO</th>
				<th colspan="1">LUGAR DE NACIMIENTO</th>
				<th colspan="1">FECHA DE NACIMIENTO</th>
				<th colspan="1">EDAD</th>
				<th colspan="1">SEXO</th>
				<th colspan="1">EDITAR</th>
				<th colspan="1">ELIMINAR</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($estudiante as $key => $value):?>
				<tr>
					<td><span class="numero"><?php echo ($key + 1); ?></span></td>

					<td><span class="numero"><?php echo $value["ci"];?></span</td>

					<td><span class="numero"><?php echo $value["nombre_student"]; ?></span></td>

					<td><span class="numero"><?php echo $value["apellido_student"] ?></span></td>

					<td><span class="numero"><?php echo $value["lugar_nacimiento"] ?></span></td>

					<td><span class="numero"><?php echo $value["fecha_nacimiento"] ?></span></td>
					
					<td><span class="numero"><?php echo $value["edad"] ?></span></td>

					<td><span class="numero"><?php echo $value["sexo"] ?></span></td>
					<td><span class="numero"><button style="width:2rem; background-color:yellow; height: 1rem;" onclick="location='plantilla.php?pagina=ficha inscripcion_actualizar&ci=<?php echo $value['ci']?>'"></span></td>
					<td>
						<span class="numero">
							<form method="post" style="border:none;">

								<input type="hidden" value="<?php echo $value["ci"];?>" name="ci">
								<button type="submit" style=" width:2rem;border-radius: 1rem; height: 1rem;background-color:red;"></button>

								<?php

									$eliminar = new RegistroEstudiante();
									$eliminar->ctrEliminarEstudiante();
								?>
							</form>
						</span>
					</td>


				</tr>
			<?php endforeach?>
		</tbody>
	</table>

	<button type="submit" onclick="location='Vista/Paginas/ficha inscripcion.php'" style="width:8rem; height:3rem; border-radius:1rem;background-color:#3F902A; position: relative; top:13rem; margin: 0 auto;">INSCRIBIR</button>
</body>
