<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MemberLogin extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$this->load->view("Member/memberLogin");
		}

		public function doLogin()
		{
			$d['v'] = 'Member/Dashboard';
			$this->load->view('templates',$d);
		}
	}
?>