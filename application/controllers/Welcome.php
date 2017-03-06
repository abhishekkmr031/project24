	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {

	    parent::__construct();
		$this->load->helper('url');

   }
	public function index()
	{
		$this->load->view('samplev');

	}
	public function confirmation() 
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[3]|xss_clean');
		$fname = $_POST['first_name'];
		if($this->form_validation->run() == FALSE){
			echo $fname;
			$this->load->view('confirm');		}
		else{
			$this->load->view('confirm');
		}
	}

	public function test()
	{
		$this->load->view('navbar');
	}

	public function test2()
	{
		$this->load->view('userlogin');
	}

	public function addfacultyDb()
	{
		$this->load->model('Samplem');
		$this->Samplem->addfaculty();
		$this->load->view('confirm');
	}
}
