<?php


	$usuario = ControladorUsuario::ctrSeleccionarRegistros(null, null);
?>

<body style="margin:0; padding: 0;">
	<h1 style="text-align: center;">USUARIOS REGISTRADOS</h1>
	<table>
		<thead>
			<tr>
				<th colspan="1">ID</th>
				<th colspan="1">NOMBRE</th>
				<th colspan="1">USUARIO</th>
				<th colspan="1">CORREO</th>
			</tr>
			
		</thead>
		<tbody>
			<?php foreach ($usuario as $key => $value):?>
				<tr>
					<td><span class="numero"><?php echo ($key);?></span</td>

					<td><span class="numero"><?php echo $value["nombre"];?></span</td>

					<td><span class="numero"><?php echo $value["usuario"]; ?></span></td>

					<td><span class="numero"><?php echo $value["correo"] ?></span></td>


				</tr>
			<?php endforeach?>
		</tbody>
	</table>