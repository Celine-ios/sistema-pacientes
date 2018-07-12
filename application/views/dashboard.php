<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Administración de Pacientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<header class="container" style="padding: 2%;">
		<?php echo form_open('ci'); ?>
		<div class="row">
			<div class="col-sm-8">
			<input type="number" name="ci" class="form-control" placeholder="Cédula de Identidad">
			<br>
			<span style="color: var(--red);"><?php echo form_error('ci');?></span>
			</div>
			<div class="col">
				<button type="submit" class="btn btn-success">Buscar</button>
			</div>
		</div>
	</header>
	<hr style="border: 0.5px solid #ddd; width: 80%;">
	<section>
		<div style="display: flex;justify-content: center;">
			<a href="add">
				<button class="btn btn-success" type="button">Agregar Paciente</button>
			</a>
		</div>
		<?php 
		if (isset($nombres)) {
			$html = '<ul style="list-style-type: none;">
			<li>Nombres: '.$nombres.'</li>
			<li>Apellidos: '.$apellidos.'</li>
			<li>Fecha de Nacimiento: '.$fecha_nacimiento.'</li>
			<li>Dirección: '.$direccion.'</li>
			<li>Motivo de Consulta: '.$motivo_consulta.'</li>
			<li>Enfermedad Actual: '.$enfermedad_actual.'</li>
			<li>Antecedentes Familiares: '.$antecedentes_familiares.'</li>
			<li>Antecedentes Personales: '.$antecedentes_personales.'</li>
			<li>Inmunizaciones: '.$inmunizaciones.'</li>
			<li>Peso: '.$peso.' Kg</li>
			<li>Talla: '.$talla.' cm</li>
			<li>CC: '.$cc.' cm</li>
			<li>Tensión Arterial: '.$tension_arterial.'</li>
			<li>Saturación de Oxígeno: '.$saturacion_oxigeno.'</li>
			<li>Tratamiento: '.$tratamiento.'</li>
			<li>Fecha: '.$fecha.'</li>
		</ul>
		<br/>
		<div class="container" style="margin-left: 2%;">
		<a href="ci/edit">
		<button type="button" class="btn btn-success">Editar</button>
		</a>
		</div>
		';
		echo $html;
		}
		?>
	</section>
	</div>
</body>
</html>