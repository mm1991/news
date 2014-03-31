<?php
class Test_model extends CI_Model {
	function __construct() 
	{	
		parent::__construct();
		$this->load->database();
	}
	
	function user_insert($arr)
	{
		$this->db->insert('news',$arr);
		return true;
	}
	function user_update($id,$arr)
	{
		$this->db->where('id',$id);
		$this->db->update('news',$arr);
		return true;
	}
	function user_select_all()
	{
		$query = $this->db->get('news');
		return $query->result();
	}
	function user_select($id)
	{
		$this->db->where('id',$id);
		$this->db->select('*');
		$query = $this->db->get('news');
		return $query->result();
	}
	function user_select_in($username)
	{
		$this->db->where('username',$username);
		$this->db->select('*');
		$query = $this->db->get('student_in');
		return $query->result();
	}
	function user_select_like($title,$arr)
	{
		$this->db->like('title',$title);
		$this->db->select($arr);
		$query = $this->db->get('news');
		return $query->result();		
	}
   function user_count($table)
   {
   		$re = $this->db->count_all_results($table);
   		return $re;
   }
   function user_count_like($title)
   {
   		$this->db->like('title',$title);
   		$this->db->from('news');
   		$re = $this->db->count_all_results();
   		return $re;
   }
   function user_limit($l,$h)
   {
   		$this->db->limit($l,$h);
   		$query = $this->db->get('news');
		return $query->result();	
   }
   function user_limit_like($l,$h,$title)
   {
   		$this->db->like('title',$title);
   		$this->db->limit($l,$h);
   		$query = $this->db->get('news');
		return $query->result();	
   }
   function user_delete($id)
   {
		$this->db->where('id', $id);
   		$this->db->delete('news');
   		return true;
   }
}