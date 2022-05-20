<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class LoginPage extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$this->load->view("loginPage");
		}

		public function doLogin()
		{
			$api = 'Login_c/checkLogin';
			$data = 'member_id='.$_POST['admin_username'].'&password='.$_POST['admin_password'];
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			
			if ($result['response_code'] == 200) 
			{
				$logged_in_session = array(
						'id' => $result['data'][0]['id'],
						'member_id' => $result['data'][0]['member_id'],
						'sponsor_id' => $result['data'][0]['sponsor_id'],
						'title' => $result['data'][0]['title'],
						'name' => $result['data'][0]['name'],
						'gender' => $result['data'][0]['gender'],
						'f_h_name' => $result['data'][0]['f_h_name'],
						'country' => $result['data'][0]['country'],
						'state' => $result['data'][0]['state'],
						'city' => $result['data'][0]['city'],
						'address' => $result['data'][0]['address'],
						'pin' => $result['data'][0]['pin'],
						'mobile_no' => $result['data'][0]['mobile_no'],
						'email_id' => $result['data'][0]['email_id'],
						'registration_date' => $result['data'][0]['registration_date'],
						'activation_date' => $result['data'][0]['activation_date'],
					);
				$this->session->set_userdata($logged_in_sess);
                redirect('Dashboard','refresh');
			}
			else
			{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('LoginPage');
			}
			
		}

		public function logout()
		{
			$this->session->sess_destroy(); 
        	redirect('LoginPage', 'refresh');
		}
	}
?>