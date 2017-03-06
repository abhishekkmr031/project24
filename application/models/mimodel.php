<?php

class Mimodel extends CI_Model{
	
	public function getdata(){

	$this->load->database();
	$this->db->query("SELECT * FROM matchscore ORDER BY matchname");

}

public function addfaculty()
{
	$data = array(
		'fname' => $this->input->post('first_name') ,
		'lname'=> $this->input->post('last_name'),
		'email'=>$this->input->post('email'),
		'assigned_password'=>$this->input->post('assigned_password')
		 );

	$this->db->insert('faculty', $data);


	
}
}