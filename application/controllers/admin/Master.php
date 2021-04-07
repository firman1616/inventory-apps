<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

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
            'title' => 'Master User',
            'conten'=> 'conten/master_user',
            'user'  => $this->m_data->get_data('tbl_user')
        ];
		$this->load->view('template/conten',$data);
	}

    public function tambah_user()
    {
        $table = 'tbl_user';
        $data = array(
            'nama_user' => $this->input->post('nama_user'),
            'username'  => $this->input->post('username'),
            'password'  => md5($this->input->post('username')),
            'ket'       => $this->input->post('username'),
            'level'     => $this->input->post('position')
        );
        $this->m_data->simpan_data($table, $data);
        $this->session->set_flashdata('user', 'Added');
        redirect('admin/Master');
    }

    public function edit_user($id)
    {
        $table = 'tbl_user';
        $data = array(
            'nama_user' => $this->input->post('nama_user'),
            'username'  => $this->input->post('username'),
            'password'  => md5($this->input->post('password')),
            'ket'       => $this->input->post('password'),
            'level'     => $this->input->post('position')
        );
        $where = array('id_user' => $id);
        $this->m_data->update_data($table,$data,$where);
        $this->session->set_flashdata('user','Updated');
        redirect('admin/Master');
    }

    public function hapus_user($id)
    {
        $table = 'tbl_user';
        $where = array('id_user' => $id);
        $this->m_data->hapus_data($table,$where);
        $this->session->set_flashdata('user','Deleted');
        redirect('admin/Master');
    }

    // Master Type Activity
    public function master_tipe()
    {
        $data = [
            'name'	=> $this->session->userdata('nama'),
            'title' => 'Master Type Activity',
            'conten'=> 'conten/master_tipe',
            'tipe'  => $this->m_data->get_data('tbl_tipe')
        ];
        $this->load->view('template/conten',$data);
    }

    public function tabah_tipe()
    {
        $table = 'tbl_tipe';
        $data = array('nama_tipe' => $this->input->post('nama_tipe'));
        $this->m_data->simpan_data($table, $data);
        $this->session->set_flashdata('tipe', 'Added');
        redirect('admin/Master/master_tipe');
    }

    public function edit_tipe($id)
    {
        $table = 'tbl_tipe';
        $data = array('nama_tipe' => $this->input->post('nama_tipe'));
        $where = array('id_tipe' => $id);
        $this->m_data->update_data($table,$data,$where);
        $this->session->set_flashdata('tipe','Updated');
        redirect('admin/Master/master_tipe');
    }
}
