
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
function __construct() {
 parent::__construct();	
	$this->load->library('form_validation');
	$this->load->model('UserModel');
}
public function index(){
	$data['user']=$this->UserModel->get_user();
	
	$this->load->view('templates/header');
	$this->load->view('pages/home', $data);
	$this->load->view('templates/footer');
}
public function login() {
	//
	// No form post data received
	//
	if (!$this->input->post()) {
		 $this->load->helper(array('form'));
		 $this->load->view('pages/login');
		return;
	}
	//// Post data received
	//
	// Credentials validation
	
	$this->form_validation->set_rules('email', 'Email',
		'trim|required|xss_clean');
	$this->form_validation->set_rules( 'password', 'Password',
		'trim|required|xss_clean|callback_authenticate');

	if($this->form_validation->run() == FALSE) {
	  // Authentication failed!
	  $this->load->view('templates/header');
	  $this->load->view('pages/login');
	  $this->load->view('templates/footer');
	}
	else {
		// Authentication succeed, go to private area
		$this->load->view('templates/header');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}
 }

 public function profile() {
		$this->load->view('templates/header');
		$this->load->view('pages/mypage');
		$this->load->view('templates/footer');
	}

 public function logout(){
	 $this->load->view('templates/header');
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
 }

 public function authenticate($password) {
	 $email = $this->input->post('email');
	 $user = $this->UserModel->authenticate($email, $password);
	 if ($user) {
		 $this->session->set_userdata('logged_in', array(
			'id' => $user->id,
			'email' => $user->email
			));
		 return TRUE;
	}
	
	$this->form_validation->set_message('authenticate',
		'Invalid email or password');
	return FALSE;
}
}
 ?>