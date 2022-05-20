<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MemberRegister extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$this->load->view("Member/memberRegistration");
		}

		public function addMember()
		{
			$d['v'] = "Member/adminMember_registration";
			$this->load->view('templates',$d);
		}

		public function registerMember()
		{
			if($_FILES['photo']['size'] != '')
			{
				$profileImage = base64_encode(file_get_contents($_FILES['photo']['tmp_name']));	
			}else{
				$profileImage = null;
			}

			$api = 'Member/addMember';
			$data = 'name='.$_POST['name'].'&email_id='.$_POST['email'].'&f_h_name='.$_POST['fatherHusband_name'].'&mobile_no='.$_POST['number'].'&gender='.$_POST['gender'].'&sponsor_id='.$_POST['sponsor_id'].'&side='.$_POST['side'].'&country='.$_POST['country'].'&state='.$_POST['state'].'&city='.$_POST['city'].'&pin='.$_POST['pincode'].'&photo='.$profileImage.'&address='.$_POST['address'].'&c_by='."1";
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			if ($result['response_code']== 200) 
			{
				$this->session->set_flashdata('success', $result['msg']);
                redirect('Member/MemberRegister');
			}else{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('Member/MemberRegister');
			}
		}

		public function adminMember_register()
		{
			if($_FILES['photo']['size'] != '')
			{
				$profileImage = base64_encode(file_get_contents($_FILES['photo']['tmp_name']));	
			}else{
				$profileImage = null;
			}

			$api = 'Member/addMember';
			$data = 'name='.$_POST['name'].'&email_id='.$_POST['email'].'&f_h_name='.$_POST['fatherHusband_name'].'&mobile_no='.$_POST['number'].'&gender='.$_POST['gender'].'&sponsor_id='.$_POST['sponsor_id'].'&side='.$_POST['side'].'&country='.$_POST['country'].'&state='.$_POST['state'].'&city='.$_POST['city'].'&pin='.$_POST['pincode'].'&photo='.$profileImage.'&address='.$_POST['address'].'&c_by='."1";
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			if ($result['response_code']== 200) 
			{
				$this->session->set_flashdata('success', $result['msg']);
                redirect('Member/MemberRegister/addMember');
			}else{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('Member/MemberRegister/addMember');
			}
		}
	}
?>