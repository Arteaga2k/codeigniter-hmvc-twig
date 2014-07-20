<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['variable'] 		= "Hello World";
		$data['description'] 	= "This is CodeIgniter 2.2.0 + HMVC + Twig 1.16.0"; 
		$this->twig->display('view.twig', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */