
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Signup extends CI_Controller {
function __construct() {
 parent::__construct();
	$this->load->library('form_validation');
	$this->load->model('RegisterModel');
 }
public function register() {
	
	$data=array(
		'username'=>$this->input->post('username'),
		'email'=>$this->input->post('email'),
		'password'=>hash('sha256', $this->input->post('password'))
	);
	$id=$this->RegisterModel->insert($data);
	$this->load->view('templates/header');
	$this->load->view('pages/success');
	$this->load->view('templates/footer');
}
 
public function validation() {
	//
	// No form post data received
	//
	if (!$this->input->post()) {
		 $this->load->helper(array('form'));
		 $this->load->view('templates/header');
		 $this->load->view('pages/signup');
		 $this->load->view('templates/footer');
	}
	//// Post data received
	//
	// Credentials validation
	$this->form_validation->set_rules('username', 'Username',
		'trim|required|xss_clean');
	$this->form_validation->set_rules('email', 'Email Address',
		'trim|required|xss_clean|valid_email|is_unique[user.email]');
	$this->form_validation->set_rules( 'password', 'Password',
		'trim|required|xss_clean|callback_authenticate');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('pages/signup');
			$this->load->view('templates/footer');
		}
		else {
			$this->load->view('templates/header');
			$this->load->view('pages/success');
			$this->load->view('templates/footer');
		}
		
	}
}
?>