<?php

use FontLib\Table\Type\post;

defined('BASEPATH') OR exit('No direct script access allowed');



class Item extends CI_Controller {



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
            'title' => 'Master Item',
            'conten'=> 'conten/item',
        ];
		$this->load->view('template/conten',$data);
	}

    public function v_tambah()
    {
        $data = [

            'name'	=> $this->session->userdata('nama'),
            'title' => 'Add Item',
            'conten'=> 'conten/tambah_item',
            'footer_js'        => array(
                'assets/js/item.js',
            ),
            'kategori' => $this->m_data->get_data('tbl_master_kategori'),
            'dept'  => $this->m_data->get_data('tbl_master_dept'),
            'tipe_item' => $this->m_data->get_data('tbl_master_tipe'),
            'brand'     => $this->m_data->get_data('tbl_master_brand')
        ];
		$this->load->view('template/conten',$data);
    }

    public function get_subitem()
    {
        $id = $this->input->post('id');
        $data = $this->M_data->get_subitem($id);
        echo json_encode($data);
    }

    public function tes()
    {
        $param = $this->input->post('id');
        $get = $this->M_data->get_data_by_id('tbl_item', array('tipe_brand' => $param))->num_rows();
        $angka = $get + 1;
        echo json_encode($angka);
    }

    public function tamah_item()
    {
        $table = 'tbl_item';
        $args = $this->input->post();
        $date = date('Y-m-d');
        $data = array(
            'nama_item'     => $args['nama_item'],
            'tipe_sn'       => $args['sn_tipe'],
            'serial_number' => $args['sn'],
            'tipe_kategori' => 'INV',
            'dept_item'     => $args['dept'],
            'kategori_item' => $args['tipe_item'],
            'sub_kategori_item'     => $args['subitem'],
            'tipe_brand'    => $args['brand'],
            'count'         => $args['count'],
            'warna'         => $args['warna'],
            'tahun_pembelian'     => $args['tahun_beli'],
            'validation'    => $date
        );
        $this->m_data->simpan_data($table,$data);
        $this->session->set_flashdata('item', 'Added');
        redirect('admin/Item');

    }

}

