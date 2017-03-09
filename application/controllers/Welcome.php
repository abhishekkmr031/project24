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
		$this->load->database();

   }
	public function index()
	{
		$this->load->view('studentInProctor');

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
	// this retrieve_data() function will return json formatted data  to line.js file
	public function retrieve_data()
	{
		$this->load->model('Samplem');
		$this->data['matches'] = $this->Samplem->getdata();
		//$this->load->view('dataview', $this->data);

		// for json data include this header
		header('Content-Type: application/json');


		$data1 = array();

		foreach ($this->data['matches'] as $key) { 
			 
			$data1[] = $key;
			
		 }
		 // returns  data in json format
		  echo json_encode($data1);
		  

	}

	// this view will be loaded first before any thing which in  turn will call retrieve_data() function
	public function loadGraphView($data)
	{
		$this->data['usn'] = $data;
		$this->load->view('attendanceGraph', $this->data);


		//echo $data;
		//$usn = $data;
	}

	public function attendance($data1) //  for students marks and attendance testing data
	{
		$usn = "1AY13IS005";

		$this->load->model('Samplem');
		$this->data['attendance'] = $this->Samplem->fetchdata();

		// for json format data include this header
		header('Content-Type:application/json');

		$data  = array( );

		foreach ($this->data['attendance'] as $key ) {
			if ($key->usn == $data1) {	// comparison of usn
				$data[] = $key;
			}
		}
		echo json_encode($data);
		
	}

	public function studentInProctor()
	{
		$this->load->model("Samplem");
		$this->data['studentInProctor'] = $this->Samplem->studentInProctorDb();

		$this->load->view('studentInProctor', $this->data);
	}
}
