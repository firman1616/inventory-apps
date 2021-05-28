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
        $this->load->model('M_dash','m_dash');

    }



	

	public function index()

	{

        $data = [

            'name'	=> $this->session->userdata('nama'),
            'title' => 'Dashboard',
            'conten'=> 'conten/dashboard',
            'total_all_item' => $this->m_dash->total_all_item(),
            'item_ga' => $this->m_dash->item_ga(),
            'item_it'   => $this->m_dash->item_it(),
            'item_main' => $this->m_dash->item_main(),
            'item_hse'  => $this->m_dash->item_hse()

        ];

		$this->load->view('template/conten',$data);

	}

}

