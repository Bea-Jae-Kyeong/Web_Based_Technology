<?php
class RegisterModel extends CI_Model {
 // Attributes
function insert($data){
	$this->db->insert('user',$data);
	return $this->db->insert_id();
}
}
?>