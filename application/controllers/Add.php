<?php 
	class Add extends CI_Controller {
		function index() {
			$this->load->library('form_validation');
			$this->load->helper(array('form','url'));
			/* Validation Rules */
	$this->form_validation->set_rules('nombres', 'Nombres', 'required', array('required' => 'Se requiere Nombre'));
	$this->form_validation->set_rules('apellidos', 'Apellidos', 'required', array('required' => 'Se requiere Apellido'));
	$this->form_validation->set_rules('fecha_nacimiento', 'Fecha de Nacimiento', 'required', array('required' => 'Se requiere Fecha de Nacimiento'));
	$this->form_validation->set_rules('direccion', 'Direccion', 'required', array('required' => 'Se requiere Dirección'));
	$this->form_validation->set_rules('motivo_consulta', 'Motivo de Consulta', 'required', array('required' => 'Se requiere Motivo'));
	$this->form_validation->set_rules('enfermedad_actual', 'Enfermedad Actual', 'required', array('required' => 'Se requiere Enfermedad Actual'));
	$this->form_validation->set_rules('antecedentes_familiares', 'Antecedentes Familiares', 'required', array('required' => 'Se requieren Antecedentes Familiares'));
	$this->form_validation->set_rules('antecedentes_personales', 'Antecedentes Personales', 'required', array('required' => 'Se requieren Antecedentes Personales'));
	$this->form_validation->set_rules('inmunizaciones', 'Inmunizaciones', 'required', array('required' => 'Se requieren Inmunizaciones'));
	$this->form_validation->set_rules('peso', 'Peso', 'required', array('required' => 'Se requiere Peso'));
	$this->form_validation->set_rules('talla', 'Talla', 'required', array('required' => 'Se requiere Talla'));
	$this->form_validation->set_rules('cc', 'CC', 'required', array('required' => 'Se requiere CC'));
	$this->form_validation->set_rules('tension_arterial', 'Tension Arterial', 'required', array('required' => 'Se requiere Tensión Arterial'));
	$this->form_validation->set_rules('saturacion_oxigeno', 'Saturacion Oxigeno', 'required', array('required' => 'Se requiere Saturación de Oxígeno'));	
	$this->form_validation->set_rules('tratamiento', 'Tratamiento', 'required', array('required' => 'Se requiere Tratamiento'));
	$this->form_validation->set_rules('ci', 'Cedula', 'required', array('required' => 'Se requiere Cédula'));

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('add');
			} 
			else {
				$query = $this->db->query('INSERT INTO 
					pacientes(nombres, apellidos,
					 fecha_nacimiento, direccion, motivo_consulta, 
					 enfermedad_actual, antecedentes_familiares, antecedentes_personales, inmunizaciones, peso, 
					 talla, cc, tension_arterial, saturacion_oxigeno, tratamiento, cedula, fecha)
					  VALUES("'.$this->input->post('nombres').'",
					   "'.$this->input->post('apellidos').'",
					   "'.$this->input->post('fecha_nacimiento').'",
					   "'.$this->input->post('direccion').'",
					   "'.$this->input->post('motivo_consulta').'",
					   "'.$this->input->post('enfermedad_actual').'",
					   "'.$this->input->post('antecedentes_familiares').'",
					   "'.$this->input->post('antecedentes_personales').'",
					    "'.$this->input->post('inmunizaciones').'",
					    '.$this->input->post('peso').',
					    '.$this->input->post('talla').',
					    '.$this->input->post('cc').',
					    '.$this->input->post('tension_arterial').',
					    '.$this->input->post('saturacion_oxigeno').',
					   "'.$this->input->post('tratamiento').'",
					    '.$this->input->post('ci').',"'.$this->input->post('fecha').'");');
				
							$this->load->view('success_add');
			}
			
		}
	}
 ?>