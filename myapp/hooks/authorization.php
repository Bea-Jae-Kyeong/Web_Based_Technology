<?php
class Authorization
{
	public function check($params)
	{
		require_once('acl.php');
		$ci = &get_instance();
		$class = $ci->router->fetch_class();
		$method = $ci->router->fetch_method();

		// The page is available to all
		if (!empty($allowAll[$class][$method])) {
			return True;
		}
		// Session variables extracted from cookies
		if (isset($_COOKIE) && isset($_COOKIE['ci_session'])) {
			$ci_session = $ci->session->userdata;
			if (!empty($ci_session['logged_in'])) {
				$session = $ci_session['logged_in'];
			}
			
		}
		// The session is not initiated and the group is not set
		if (!isset($session) || !isset($session['group'])) {
			redirect(base_url('index.php/pages/view/login'));
		} else {
			// The session is initiated, but the user has no access
			if(empty($allowOnly[$session['group']][$class][$method])
			||
			$allowOnly[$session['group']][$class][$method] != True) {
				redirect(base_url('index.php/pages/view/'));
			}
		}
		// If we get here, authorization is succeed!
		return True;
	}
}
?>