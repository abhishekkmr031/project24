<?php 
class Samplem extends CI_Model{

	public function addfaculty()
	{
		$data = array('fname' =>$this->input->post('first_name')  
			);

		$q = $this->db->insert('faculty', $data);

		if($q)
				return true;
		else
				return false;
	}
}