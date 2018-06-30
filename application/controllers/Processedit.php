<?php 
   class Processedit extends CI_Controller {
   		public function index() {
   			$this->load->library('session');

   			$query = $this->db->query('UPDATE pacientes SET nombres="'.$this->input->post('nombres').'", apellidos="'.$this->input->post('apellidos').'", fecha_nacimiento="'.$this->input->post('fecha_nacimiento').'", direccion="'.$this->input->post('direccion').'", motivo_consulta="'.$this->input->post('motivo_consulta').'", enfermedad_actual="'.$this->input->post('enfermedad_actual').'", antecedentes_familiares="'.$this->input->post('antecedentes_familiares').'", antecedentes_personales="'.$this->input->post('antecedentes_personales').'", inmunizaciones="'.$this->input->post('inmunizaciones').'", peso="'.$this->input->post('peso').'", talla="'.$this->input->post('talla').'",cc="'.$this->input->post('cc').'", tension_arterial="'.$this->input->post('tension_arterial').'", saturacion_oxigeno="'.$this->input->post('saturacion_oxigeno').'", tratamiento="'.$this->input->post('tratamiento').'" WHERE cedula='.$this->session->userdata('ci'));

   				if ($query == true) {
   					$array = array('query' => $query);
   					$this->load->view('edit_ci_success', $array);
   					return;
   				} else {

   				}


   		}
   }
 ?>