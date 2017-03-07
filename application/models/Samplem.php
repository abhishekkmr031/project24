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

	public function getdata()
	{
		$this->db->select("team, matchname, score");
		$this->db->from('matchscore');//tbname
		$query = $this->db->get();
		return $query->result();
	}

	public function fetchdata()
	{
		$this->db->select("mark");
		$this->db->from("marks");
		$q = $this->db->get();
		return $q->result();
		
	}
}