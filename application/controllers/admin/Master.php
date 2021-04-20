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
            'user'  => $this->m_data->user(),
            'employee' => $this->m_data->get_data('tbl_employee'),
            'dept'  => $this->m_data->get_data('tbl_master_dept')
        ];
		$this->load->view('template/conten',$data);
	}

    public function tambah_user()
    {
        $table = 'tbl_user';
        $data = array(
            'nama_user' => $this->input->post('nama_user'),
            'dept_user' => $this->input->post('dept'),
            'username'  => $this->input->post('username'),
            'password'  => md5($this->input->post('username')),
            'keterangan'=> $this->input->post('username'),
            'level'     => $this->input->post('level')
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
            'dept_user' => $this->input->post('dept'),
            'username'  => $this->input->post('username'),
            'password'  => md5($this->input->post('password')),
            'keterangan'=> $this->input->post('password'),
            'level'     => $this->input->post('level')
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

    public function dept()
    {
        $data = [
            'name'	=> $this->session->userdata('nama'),
            'title' => 'Master Department',
            'conten'=> 'conten/master_dept',
            'dept'  => $this->m_data->get_data('tbl_master_dept')
        ];
        $this->load->view('template/conten',$data);
    }

    public function add_dept()
    {
        $table = 'tbl_master_dept';
        $data = array(
            'nama_dept' => $this->input->post('dept_name'),
            'dept_code' => $this->input->post('dept_code')
        );
        $this->m_data->simpan_data($table,$data);
        redirect('admin/Master/dept');
    }

    public function edit_dept($id)
    {
        $table ='tbl_master_dept';
        $data = array(
            'nama_dept' => $this->input->post('dept_name'),
            'dept_code' => $this->input->post('dept_code')
        );
        $where = array('id_master_dept' => $id);
        $this->m_data->update_data($table, $data, $where);
        redirect('admin/Master/dept');
    }

    public function brand()
    {
        $data = [
            'name'	=> $this->session->userdata('nama'),
            'title' => 'Master Brand',
            'conten'=> 'conten/master_brand',
            'brand' => $this->m_data->get_data('tbl_master_brand')
        ];
        $this->load->view('template/conten',$data);
    }

    public function tambah_brand()
    {
        $table = 'tbl_master_brand';
        $data = array(
            'code_brand' => $this->input->post('code'),
            'nama_brand' => $this->input->post('nama_brand')
        );
        $this->m_data->simpan_data($table,$data);
        redirect('admin/Master/brand');
    }

    public function edit_brand($id)
    {
        $table = 'tbl_master_brand';
        $data = array(
            'code_brand' => $this->input->post('code'),
            'nama_brand' => $this->input->post('nama_brand')
        );
        $where = array('id_master_brand' => $id);
        $this->m_data->update_data($table,$data,$where);
        redirect('admin/Master/brand');   
    }

    public function hapus_brand($id)
    {
        $table = 'tbl_master_brand';
        $where = array('id_master_brand' => $id);
        $this->m_data->hapus_data($table,$where);
        redirect('admin/Master/brand');
    }

    public function category_item()
    {
        $data = [
            'name'	=> $this->session->userdata('nama'),
            'title' => 'Master Category Item',
            'conten'=> 'conten/master_category_item',
            'tipe'  => $this->m_data->get_data('tbl_master_tipe')
        ];
        $this->load->view('template/conten',$data);
    }

    public function tambah_category_item()
    {
        $table ='tbl_master_tipe';
        $data = array(
            'code_master_tipe' => $this->input->post('code_item'),
            'nama_master_tipe' => $this->input->post('nama_item')
        );
        $this->m_data->simpan_data($table,$data);
        redirect('admin/Master/category_item');
    }

    public function edit_category_item($id)
    {
        $table ='tbl_master_tipe';
        $data = array(
            'code_master_tipe' => $this->input->post('code_item'),
            'nama_master_tipe' => $this->input->post('nama_item')
        );
        $where = array('id_master_tipe' => $id);
        $this->m_data->update_data($table,$data,$where);
        redirect('admin/Master/category_item');
    }

    public function hapus_category_item($id)
    {
        $table ='tbl_master_tipe';
        $where = array('id_master_tipe' => $id);
        $this->m_data->hapus_data($table,$where);
        redirect('admin/Master/category_item');
    }

    public function sub_category()
    {
        $data = [
            'name'	=> $this->session->userdata('nama'),
            'title' => 'Master Sub Category Item',
            'conten'=> 'conten/master_sub_category_item',
            'sub'   => $this->m_data->get_data('tbl_master_sub_tipe'),
            'master' => $this->m_data->get_data('tbl_master_tipe')
        ];
        $this->load->view('template/conten',$data);
    }

    public function tambah_sub()
    {
        $table = 'tbl_master_sub_tipe';
        $data = array(
            'sub_code'  => $this->input->post('sub_code'),
            'nama_sub'  => $this->input->post('sub_name'),
            'fk_tipe'  => $this->input->post('master_item')
        );
        $this->m_data->simpan_data($table,$data);
        redirect('admin/Master/sub_category');
    }

    public function edit_sub($id)
    {
        $table = 'tbl_master_sub_tipe';
        $data = array(
            'sub_code'  => $this->input->post('sub_code'),
            'nama_sub'  => $this->input->post('sub_name'),
            'fk_tipe'  => $this->input->post('master_item')
        );
        $where = array('id_master_sub' => $id );
        $this->m_data->update_data($table,$data,$where);
        redirect('admin/Master/sub_category');
    }

    public function hapus_sub($id)
    {
        $table = 'tbl_master_sub_tipe';
        $where = array('id_master_sub' => $id );
        $this->m_data->hapus_data($table,$where);
        redirect('admin/Master/sub_category');
    }

    public function lokasi()
    {
        $data = [
            'name'	=> $this->session->userdata('nama'),
            'title' => 'Master Lokasi',
            'conten'=> 'conten/master_lokasi',
            'lokasi'   => $this->m_data->get_data('tbl_master_lokasi')            
        ];
        $this->load->view('template/conten',$data);
    }

    public function tambah_lokasi()
    {
        $table = 'tbl_master_lokasi';
        $data = array(
            'nama_lokasi'   => $this->input->post('nama_lokasi')
        );
        $this->m_data->simpan_data($table,$data);
        redirect('admin/Master/lokasi');
    }

    public function edit_lokasi($id)
    {
        $table = 'tbl_master_lokasi';
        $data = array(
            'nama_lokasi'   => $this->input->post('nama_lokasi')
        );
        $where = array('id_lokasi' => $id);
        $this->m_data->update_data($table,$data, $where);
        redirect('admin/Master/lokasi');
    }

    public function hapus_lokasi($id)
    {
        $table = 'tbl_master_lokasi';
        $where = array('id_lokasi' => $id);
        $this->m_data->hapus_data($table,$where);
        redirect('admin/Master/lokasi');
    }
}
