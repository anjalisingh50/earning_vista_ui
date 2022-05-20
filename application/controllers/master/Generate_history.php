<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Generate_history extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			// $api = 'Plan_master/getPlanList';
   //          $data = '';
   //          $method = 'POST';
   //          $result = $this->CallAPI($api, $data, $method);
   //          $d['plan_list'] = $result['data'];
            
			$d['v'] = "master/generate_history";
			$this->load->view('templates',$d);
		}
}