<?php 
class Post_M extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_posts(){
       
        $this->db->from('posts');
        $query=$this->db->get();
        return $query->result();
    }

    public function insert($data){
        $this->db->insert('posts', $data);
        return $id=$this->db->insert_id();
    }
    public function delete_id($id){
        $this->db->where('id', $id);
        $this->db->delete('posts');
    }

    public function edit_id($id){
        $this->db->from('posts');
        $this->db->where('id', $id);
        $query=$this->db->get();
        return $query->row();
    }

    public function search($key){
        $this->db->like('title', $key);
        
        $query=$this->db->get('posts');
        return $query->result();
    }
}