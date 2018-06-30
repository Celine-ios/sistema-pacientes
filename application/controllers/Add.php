<?php 
	class Add extends CI_Controller {
		function index() {
			$this->load->library('form_validation');
			$this->load->helper(array('form','url'));
			/* Validation Rules */
		$this->form_validation->set_rules('nombres', 'Nombres', 'required', array('required' => 'Se requiere Nombre'));
		$this->form_validation->set_rules('apellidos', 'Apellidos', 'required', array('required' => 'Se requiere Apellido'));
		$this->form_validation->set_rules('fecha_nacimiento', 'Fecha de Nacimiento', 'required', array('required' => 'Se requiere Fecha de Nacimiento'));

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('add');
			} else {
				$this->load->view('add');
			}
			
		}
	}
 ?>