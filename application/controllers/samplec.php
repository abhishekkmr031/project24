<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
 class SampleX extends CI_Controller{

 	public function __construct() {

	    parent::__construct();
		$this->load->helper('url');

   }

 	public function index()
 	{
 		$this->load->view('samplev');
 	}

 	public function addfacultydb()
 	{
 		$this->load->model('samplem');
 		$this->samplem->addfaculty();
 		$this->load->view("confirm");
 	}
 }