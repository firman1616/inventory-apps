<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends CI_Controller {



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

            'title' => 'Dashboard',

            'conten'=> 'conten/dashboard',

            'today' => $this->m_data->today(),

            'bulan' => $this->m_data->bulan(),

            'firman' => $this->m_data->firman(),

            'kristian' => $this->m_data->kristian(),

            'novita' => $this->m_data->novita(),
	    'yuli'    => $this->m_data->yuli(),

            'maintenance' => $this->m_data->maintenance(),

            'unmaintenance' => $this->m_data->unmaintenance(),

            'reguler' => $this->m_data->reguler(),

            'pembayaran' => $this->m_data->pembayaran(),

            'spp'   => $this->m_data->spp(),

            'contact' => $this->m_data->contact(),

            'main_program' =>$this->m_data->main_program(),

            'trial_error' => $this->m_data->trial_eror(),

            'migrasi'   => $this->m_data->migrasi(),

            'backup'    => $this->m_data->backup(),

            'build_program' => $this->m_data->build_program(),

            'other' => $this->m_data->other(),

            'meeting' => $this->m_data->meeting(),

            'update_program' => $this->m_data->update_program()

        ];

		$this->load->view('template/conten',$data);

	}

}

