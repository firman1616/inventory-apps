<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daily extends CI_Controller {

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
            'id_user' => $this->session->userdata('id'),
            'name'	=> $this->session->userdata('nama'),
            'title' => 'Daily Activity',
            'conten'=> 'conten/daily',
            'daily' => $this->m_data->list_daily(),
            'employee' => $this->m_data->get_data('tbl_employee'),
            'tipe'  => $this->m_data->get_data('tbl_tipe'),
            'stts'=> $this->m_data->get_data('tbl_status')
        ];
		$this->load->view('template/conten',$data);
	}

    public function tambah_daily()
    {
        $id_user = $this->session->userdata('id');
        $start_time = date('Y-m-d H:i:s', strtotime($this->input->post('start')));
        $end_time = date('Y-m-d H:i:s', strtotime($this->input->post('end')));
        $table = 'tbl_activity';
        $data = array(
            'pic' => $id_user,
            'other_pic' => $this->input->post('other'),
            'tipe_aktifitas' => $this->input->post('tipe'),
            'start' => $start_time,
            'end'   => $end_time,
            'deskripsi' => $this->input->post('deskripsi'),
            'note'  => $this->input->post('note'),
            'prog'    => $this->input->post('status'),
            'validation' => date('Y-m-d')
        );
        $this->m_data->simpan_data($table,$data);
        $this->session->set_flashdata('daily','Added');
        redirect('admin/Daily');
    }

    public function ubah_daily($id)
    {
        $id_user = $this->session->userdata('id');    
        $table = 'tbl_activity';
        $data = array(
            'pic' => $id_user,
            'other_pic' => $this->input->post('other'),
            'tipe_aktifitas' => $this->input->post('tipe'),
            'deskripsi' => $this->input->post('deskripsi'),
            'note'  => $this->input->post('note'),
            'prog'    => $this->input->post('status'),
            'validation' => date('Y-m-d')
        );
        $where = array('id_aktivitas' => $id);
        $this->m_data->update_data($table,$data,$where);
        $this->session->set_flashdata('daily','Updated');
        redirect('admin/Daily');
    }

    public function hapus_daily($id)
    {
        $table = 'tbl_activity';
        $where = array('id_aktivitas' => $id);
        $this->m_data->hapus_data($table,$where);
        $this->session->set_flashdata('daily','Deleted');
        redirect('admin/Daily');
    }
}
