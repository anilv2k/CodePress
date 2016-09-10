<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CMS_Controller class
 *
 * @author Anil
 */

class MY_Controller extends CI_Controller
{


  public function __construct()
    {
        parent::__construct();
		
	   
        
    }
	
	
	public function view($view,$data)
	{
	
	   $template_module = '../../modules/'.$this->router->fetch_module().'/views/'.$view;
		
       $this->load->view($template_module,$data);
	   
	}
	
	
	public function test()
	{
	

	
	}
}
