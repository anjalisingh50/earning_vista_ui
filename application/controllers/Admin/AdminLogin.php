<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminLogin extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$this->load->view("Admin/adminLogin");
		}

		public function doLogin()
		{
			$api = 'Login/login_admin';
			$data = 'user_id='.$_POST['username'].'&password='.$_POST['password'];
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);

			if ($result['response_code'] == 200) 
			{
				if (isset($result['data']['userData']['role_type']) == 1) 
				{
					$logged_in_sess = array(
                        'user_id' => $result['data']['userData']['user_id'],
                        'name' => $result['data']['userData']['name'],
                        'role_type' => $result['data']['userData']['role_type'],
                        'gender' => $result['data']['userData']['gender'],
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata($logged_in_sess);
                    redirect('Admin/Dashboard','refresh');
				}
				else
				{
					$this->session->set_flashdata('error', $result['msg']);
                	redirect('Admin/AdminLogin');
				}
			}
			else
			{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('Admin/AdminLogin');
			}
		}

		public function logout()
		{
			$this->session->sess_destroy(); 
        	redirect('Admin/AdminLogin', 'refresh');
		}
	}
?>