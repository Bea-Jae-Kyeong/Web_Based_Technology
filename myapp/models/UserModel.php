<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {
 // Attributes
var $id;
var $email;
var $group;

 function __construct() {
 parent::__construct();
 
 $this->load->database();
 }

 public function get_user(){
       
    $this->db->from('user');
    $query=$this->db->get();
    return $query->result();
}
function authenticate($email, $password) {
$this->db->select('*');
$this->db->from('user');
$this->db->where('email', $email);
$this->db->where('password',  hash('sha256', $password));
$this->db->limit(1);
$query = $this->db->get();
 if($query->num_rows() > 0) {
$rows = $query->result();
$this->id = $rows[0]->id;
$this->email = $rows[0]->email;
return $this;
 }
 return FALSE;
}
}
?>