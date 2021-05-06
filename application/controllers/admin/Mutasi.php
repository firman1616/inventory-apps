<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Mutasi extends CI_Controller {

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
            'title' => 'Mutation',
            'conten'=> 'conten/mutasi',
            'code'  => $this->m_data->get_data('tbl_item'),
            'lokasi'=> $this->m_data->get_data('tbl_master_lokasi'),
            'pic'   => $this->m_data->get_data('tbl_employee')
        ];

		$this->load->view('template/conten',$data);
	}

    public function cari(){
        $kode=$_GET['item_code'];
        $cari =$this->m_data->cari($kode)->result();
        echo json_encode($cari);
    } 

}

