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
            'item_list' => $this->m_data->master_item()
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
        $get = $this->M_data->get_data_by_id('tbl_item', array('dept_item' => $param))->num_rows();
        $angka = $get + 1;
        echo json_encode($angka);
    }

    public function tamah_item()
    {
        $table = 'tbl_item';
        $args = $this->input->post();
        $date = date('Y-m-d');

        $SQL_dept = $this->M_data->get_data_by_id('tbl_master_dept', array('id_master_dept' => $args['dept']))->result();
        $SQL_tipe = $this->M_data->get_data_by_id('tbl_master_tipe', array('id_master_tipe' => $args['tipe_item']))->result();
        $SQL_subtipe = $this->M_data->get_data_by_id('tbl_master_sub_tipe', array('id_master_sub' => $args['subitem']))->result();
        $SQL_brand = $this->M_data->get_data_by_id('tbl_master_brand', array('id_master_brand' => $args['brand']))->result();

        $dept       = $SQL_dept[0]->dept_code;
        $tipe_item  = $SQL_tipe[0]->code_master_tipe;
        $subtipe    = $SQL_subtipe[0]->sub_code;
        $brand      = $SQL_brand[0]->code_brand;

        $kode_jadi = 'INV/'.$dept.'/'.$tipe_item.'/'. $subtipe.'/'.$brand.'/'.sprintf("%05s", $args['count']);
        $data = array(
            'kode_jadi'     => $kode_jadi,
            'nama_item'     => $args['nama_item'],
            'tipe_sn'       => $args['sn_tipe'],
            'serial_number' => $args['sn'],
            'tipe_kategori' => 'INV',
            //
            'dept_item'     => $args['dept'],
            'kategori_item' => $args['tipe_item'],
            'sub_kategori_item'     => $args['subitem'],
            'tipe_brand'    => $args['brand'],
            //
            'count'         => $args['count'],
            'warna'         => $args['warna'],
            'tahun_pembelian'     => $args['tahun_beli'],
            'validation'    => $date,
            'keterangan'    => $args['keterangan']
        );
        $this->m_data->simpan_data($table,$data);
        $this->session->set_flashdata('item', 'Added');
        redirect('admin/Item');

    }

    public function hapus_item($id)
    {
        $table = 'tbl_item';
        $where = array('id_item' => $id);
        $this->m_data->hapus_data($table,$where);
        $this->session->set_flashdata('item', 'Deleted');
        redirect('admin/Item');
    }

    public function v_edit($id)
    {
        $data = [
            'name'	=> $this->session->userdata('nama'),
            'title' => 'Edit Item',
            'conten'=> 'conten/edit_item',
            'footer_js'        => array(
                'assets/js/item.js',
            ),
            'kategori' => $this->m_data->get_data('tbl_master_kategori'),
            'dept'  => $this->m_data->get_data('tbl_master_dept'),
            'tipe_item' => $this->m_data->get_data('tbl_master_tipe'),
            'brand'     => $this->m_data->get_data('tbl_master_brand'),
            'get_data'  => $this->m_data->get_data_by_id('tbl_item', array('id_item' => $id))
        ];
        $this->load->view('template/conten',$data);
    }

    public function update_data($id)
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
            'validation'    => $date,
            'keterangan'    => $args['keterangan']
        );
        $where = array('id_item' => $id);
        $this->m_data->update_data($table,$data,$where);
        $this->session->set_flashdata('item','Updated');
        redirect('admin/Item');
    }

}

