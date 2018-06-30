<?php class Form extends CI_Controller {
	function index() {
		            $this->load->helper(array('form', 'url'));
                $this->load->library('session');
                $this->load->library('form_validation');
                /* Validation Rules */
                $this->form_validation->set_rules('name','Username','required', array('required' => 'Por favor, indique un usuario'));
                $this->form_validation->set_rules('password','Password','required', array('required' => 'Por favor, indique una contraseña'));


                if ($this->form_validation->run() == FALSE)
                {
                  if($this->session->userdata('ci')) {
                    $this->load->view('dashboard');
                    return;
                  }

                   $this->load->view('login');     
                  
                }
                else
                {
                	$query =  $this->db->query('SELECT * FROM usuarios WHERE usuario="'.$this->input->post('name').'" AND contrasena="'.$this->input->post('password').'";');

                	if ((!isset($query->row()->contrasena)) || (!isset($query->row()->usuario))) {
                		$this->load->view('error_login.php');
                		return;
                	}

               if ($query->row()->contrasena == $this->input->post('password') && $query->row()->usuario == $this->input->post('name')) {
              		$this->load->view('dashboard');
              }
              else {
              	$this->load->view('error_login.php');
              }

                }
			
	}
}
 ?>