<?php 

	defined('BASEPATH') OR exit('Ação não permitida');

	class Adm extends CI_Controller
	{
		
		public function __construct() {
			
			parent::__construct();

			if (!$this->ion_auth->logged_in()) {
				$this->session->set_flashdata('info', 'Sua sessão expirou!');
      			redirect('login');
   			}
  
		}


		public function index(){



			$this->load->view('adm/index');


		}



	}






 ?>
