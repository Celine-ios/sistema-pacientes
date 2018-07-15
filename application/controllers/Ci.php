<?php 
	class Ci extends CI_Controller {
		function index() {
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->library('session');
				/* Validation Rules */
				$this->form_validation->set_rules('ci', 'Cédula de Identidad', 'required', array('required' => 'Debe Introducir un Número de Cédula'));
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard');
			} else {
				$query = $this->db->query('SELECT * FROM pacientes WHERE cedula='.$this->input->post('ci'));
				if ($query->row() == NULL) {
					$error = array('info' => 'No existe un paciente registrado con éste Número de Cédula');
					$this->load->view('dashboard', $error);
					return;
									}
								$paciente = array('nombres' => $query->row()->nombres, 'apellidos' => $query->row()->apellidos, 'fecha_nacimiento' => $query->row()->fecha_nacimiento, 'direccion' => $query->row()->direccion, 'motivo_consulta' => $query->row()->motivo_consulta, 'enfermedad_actual' => $query->row()->enfermedad_actual, 'antecedentes_familiares' => $query->row()->antecedentes_familiares, 'antecedentes_personales' => $query->row()->antecedentes_personales, 'inmunizaciones' => $query->row()->inmunizaciones, 'peso' => $query->row()->peso, 'talla' => $query->row()->talla, 'cc' => $query->row()->cc, 'tension_arterial' => $query->row()->tension_arterial, 'saturacion_oxigeno' => $query->row()->saturacion_oxigeno, 'tratamiento' => $query->row()->tratamiento, 'cedula' => $query->row()->cedula, 'fecha' => $query->row()->fecha);

				$this->session->set_userdata('ci', $this->input->post('ci'));
				$this->session->set_userdata('nombres', $query->row()->nombres);
				$this->session->set_userdata('apellidos', $query->row()->apellidos);
				$this->session->set_userdata('fecha_nacimiento', $query->row()->fecha_nacimiento);
				$this->session->set_userdata('direccion', $query->row()->direccion);
				$this->session->set_userdata('motivo_consulta', $query->row()->motivo_consulta);
				$this->session->set_userdata('enfermedad_actual', $query->row()->enfermedad_actual);
				$this->session->set_userdata('antecedentes_familiares', $query->row()->antecedentes_familiares);
				$this->session->set_userdata('antecedentes_personales', $query->row()->antecedentes_personales);
				$this->session->set_userdata('inmunizaciones', $query->row()->inmunizaciones);
				$this->session->set_userdata('peso', $query->row()->peso);
				$this->session->set_userdata('talla', $query->row()->talla);
				$this->session->set_userdata('cc', $query->row()->cc);
				$this->session->set_userdata('tension_arterial', $query->row()->tension_arterial);
				$this->session->set_userdata('saturacion_oxigeno', $query->row()->saturacion_oxigeno);
				$this->session->set_userdata('tratamiento', $query->row()->tratamiento);

				$this->load->view('dashboard', $paciente);
			}
		}
		function edit() {
			$this->load->library('session');
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			
			$paciente_info = array('nombres' => $this->session->userdata('nombres'),
			 						'apellidos' => $this->session->userdata('apellidos'),
			  						'fecha_nacimiento' => $this->session->userdata('fecha_nacimiento'),
			   						'direccion' => $this->session->userdata('direccion'),
			   						'motivo_consulta' => $this->session->userdata('motivo_consulta'),
			   						'enfermedad_actual' => $this->session->userdata('enfermedad_actual'), 
			   						'antecedentes_familiares' => $this->session->userdata('antecedentes_familiares'), 
			   						'antecedentes_personales' => $this->session->userdata('antecedentes_personales'), 
			   						'inmunizaciones' => $this->session->userdata('inmunizaciones'), 
			   						'peso' => $this->session->userdata('peso'),
			   						'talla' => $this->session->userdata('talla'),
			   						'cc' => $this->session->userdata('cc'),
			   						'tension_arterial' => $this->session->userdata('tension_arterial'),
			   						'saturacion_oxigeno' => $this->session->userdata('saturacion_oxigeno'),
			   						'tratamiento' => $this->session->userdata('tratamiento'),
			   						'ci' => $this->session->userdata('ci'));

			$this->load->view('edit_ci', $paciente_info);

		}
	}
 ?>