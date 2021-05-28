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
            'code'  => $this->m_data->kode_item(),
            'lokasi'=> $this->m_data->get_data('tbl_master_lokasi'),
            'pic'   => $this->m_data->get_data('tbl_employee'),
            'mutasi'=> $this->m_data->mutasi(),
            'footer_js'        => array(
                'assets/js/mutasi.js',
            ),
        ];

		$this->load->view('template/conten',$data);
	}

    public function cari(){
		$kode = $_GET['kode'];
        $cari = $this->M_data->cari($kode)->result();
        echo json_encode($cari);
	}

    public function add_mutasi()
    {
        $table = 'tbl_mutasi';
        $data = array(
            'fk_item' => $this->input->post('item_code'),
            'nama_item' => $this->input->post('nama_item'),
            'fk_lokasi' => $this->input->post('lokasi'),
            'other_location' => $this->input->post('other'),
            'keterangan'=> $this->input->post('keterangan'),
            'pic' => $this->input->post('pic'),
            'tgl_mutasi' => date('Y-m-d', strtotime($this->input->post('tgl_mutasi')))
        );

        //die(var_dump($data));
        $this->m_data->simpan_data($table,$data);
        $this->session->set_flashdata('mutasi','Moved');
        redirect('admin/Mutasi');
    }

    public function delete_mutasi($id)
    {
        $table = 'tbl_mutasi';
        $where = array('id_mutasi' => $id);
        $this->m_data->hapus_data($table,$where);
        $this->session->set_flashdata('mutasi','Deleted');
        redirect('admin/Mutasi');
    }

    public function v_edit($id)
    {
        $data = [

            'name'	=> $this->session->userdata('nama'),
            'title' => 'Edit Mutation',
            'conten'=> 'conten/edit_mutasi',
            'code'  => $this->m_data->kode_item(),
            'lokasi'=> $this->m_data->get_data('tbl_master_lokasi'),
            'pic'   => $this->m_data->get_data('tbl_employee'),
            'mutasi'=> $this->m_data->mutasi(),
            'footer_js'        => array(
                'assets/js/mutasi.js',
            ),
            'get_data' => $this->m_data->get_data_by_id('tbl_mutasi',array('id_mutasi' => $id))
        ];

		$this->load->view('template/conten',$data);
    }

    public function update_data($id)
    {
        $table = 'tbl_mutasi';
        $data = array(
            'fk_item' => $this->input->post('item_code'),
            'nama_item' => $this->input->post('nama_item'),
            'fk_lokasi' => $this->input->post('lokasi'),
            'other_location' => $this->input->post('other'),
            'keterangan'=> $this->input->post('keterangan'),
            'pic' => $this->input->post('pic'),
            'tgl_mutasi' => date('Y-m-d', strtotime($this->input->post('tgl_mutasi')))
        );
        $where = array('id_mutasi' => $id);
        $this->m_data->update_data($table,$data,$where);
        $this->session->set_flashdata('mutasi','Updated');
        redirect('admin/Mutasi');
    }

}

