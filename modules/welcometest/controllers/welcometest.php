<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcometest extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	$this->load->theme('demo');
	$this->load->database();
	$this->load->library('grocery_CRUD');
		
	try{
		

     	$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();

	     $this->load->theme('demo');
		

		
		// echo $this->test();
		// die;
		
		
		 //$this->load->template('demo/theam');
		 $this->load->view('example',$output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		
		
		
	}
	
		public function test()
	{
	
	
	//$this->load->theme('demo');

		
	try{
		



	    $this->load->theme('demo');
		 

		 
		
		 //$this->load->template('demo/theam');
		 $data=array();
		 
		
		$this->view('testview',$data);
		

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */