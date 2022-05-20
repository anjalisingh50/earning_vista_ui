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
	}
?>