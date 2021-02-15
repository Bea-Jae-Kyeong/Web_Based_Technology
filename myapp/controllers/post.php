<?php 
class Post extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Post_M');
        
    }
    public function index(){
        $data['posts']=$this->Post_M->get_posts();
        
        $this->load->view('templates/header');
		$this->load->view('pages/postview', $data);
		$this->load->view('templates/footer');
    }
    
    public function skeyword(){
        $key=$this->input->post('title');
        $data['posts']=$this->Post_M->search($key);
        
        $this->load->view('templates/header');
		$this->load->view('pages/skeyview', $data);
		$this->load->view('templates/footer');
    }
    public function postedit(){
        $id=$this->input->post('id');
        $data['posts']=$this->Post_M->edit_id($id);
        
        $this->load->view('templates/header');
		$this->load->view('pages/skeyview', $data);
		$this->load->view('templates/footer');
    }
    public function delete(){
        $id=$this->input->post('id');
        $data['posts']=$this->Post_M->delete_id($id);
        
        $this->load->view('templates/header');
		$this->load->view('pages/skeyview', $data);
		$this->load->view('templates/footer');
    }
    
    public function add(){
        if(!empty($_POST)){
            $title=$this->input->post('title');
            $descs=$this->input->post('descs');

            if($title){
                $data=array(
                    'title'=>$title,
                    'descs'=>$descs
                );
                $id=$this->Post_M->insert($data);
                $this->load->view('templates/header');
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
            }
        }
        
    }
}