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

// returns data of students attendance 
	public function fetchdata()
	{
		$this->db->select("usn, sub1, sub2, sub3");
		$this->db->from("attendance");
		$q = $this->db->get();
		return $q->result();
		
	}

// returns data of students marks
	public function getMarks()
	{
		$this->db->select("usn, sub1, sub2, sub3");
		$this->db->from("marks");
		$q = $this->db->get();
		return $q->result();
	}

	public function studentInProctorDb()
	{
		$this->db->select("usn, name");
		$this->db->from("student");
		$query = $this->db->get();
		return $query->result();
	}

	public function personalInformationMethod()
	{
		$this->db->select("usn, name, fathername");
		$this->db->from("personalInformation");
		$query = $this->db->get();

		return $query->result();
	}
}