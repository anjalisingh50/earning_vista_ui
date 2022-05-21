<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class FundGenerate extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$api = 'GenerateFund/get_available_fund';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['available_fund'] = $result['data']['package_fund'];

			$api = 'Plan/getPlanList';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['pakage'] = $result['data'];

			$d['v'] = "Admin/Master/FundGenerate";
			$this->load->view('templates',$d);
		}

		public function GenerateFund()
		{
			$api = 'GenerateFund/generate_fund';
			$data = 'package_id='.$_POST['pakage_name'].'&qty='.$_POST['qty'].'&c_by='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);

			if($result['response_code'] == 200)
            {
                $this->session->set_flashdata('success', $result['msg']);
                redirect('Admin/Master/FundGenerate');
            }
            else
            {
                $this->session->set_flashdata('error', $result['msg']);
                redirect('Admin/Master/FundGenerate');
            }
		}

		public function fund_historyList()
		{
			$api = 'GenerateFund/get_generate_fund_history';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['history'] = $result['data']['histories'];
			// echo "<pre>";
			// print_r($result); die;
			$d['v'] = "Admin/Master/fundHistory";
			$this->load->view('templates',$d);
		}	
	}
?>