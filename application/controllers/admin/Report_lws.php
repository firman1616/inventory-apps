<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1) {
            redirect(base_url("login"));
        }
        //  $this->load->library('Pdf');
    }

	
	public function index()
	{
        $data = [
            'name'	=> $this->session->userdata('nama'),
            'title' => 'Monthly Report',
            'conten'=> 'conten/report'
        ];
		$this->load->view('template/conten',$data);
	}

    public function print_report()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['daily'] = $this->m_data->report($bulan, $tahun);
        $this->load->view('conten/view_report', $data);
    }
}

