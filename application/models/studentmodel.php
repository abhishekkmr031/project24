<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Studentmodel extends CI_Model {

	 public function __construct()
    {
        parent::__construct();
    }

	public function addfaculty(){

		$data = array(
		'fname' => $this->input->post('first_name') ,
		'lname'=> $this->input->post('last_name'),
		'email'=>$this->input->post('email'),
		'assigned_password'=>$this->input->post('assigned_password')
		 );

	$q = $this->db->insert('faculty', $data);
	if($q)
			return true;
	else
			return false;
	}
}

