<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1) {
            redirect(base_url("login"));
        }
        //  $this->load->library('Pdf');
        // $this->load->library('PHPExcel');
    }

	
	public function index()
	{
        $data = [
            'name'	=> $this->session->userdata('nama'),
            'title' => 'Master Employee',
            'conten'=> 'conten/employee',
            'employee' => $this->m_data->get_data('tbl_employee')
        ];
		$this->load->view('template/conten',$data);
	}

    public function tambah_data()
    {
        $table = 'tbl_employee';
        $data = array(
            'nik'   => $this->input->post('nik'),
            'nama_karyawan' => $this->input->post('nama')
        );
        $this->m_data->simpan_data($table,$data);
        $this->session->set_flashdata('karyawan','Added');
        redirect('admin/Employee');
    }

    public function edit_data($id)
    {
        $table = 'tbl_employee';
        $data = array(
            'nama_karyawan' => $this->input->post('nama')
        );
        $where = array('nik' => $id);
        $this->m_data->update_data($table,$data,$where);
        $this->session->set_flashdata('karyawan','Updated');
        redirect('admin/Employee');
    }

    public function hapus_data($id)
    {
        $table = 'tbl_employee';
        $where = array('nik' => $id);
        $this->m_data->hapus_data($table,$where);
        $this->session->set_flashdata('karyawan','Deleted');
        redirect('admin/Employee');
    }

    // public function import_employee()
    // {
    //     $config['upload_path'] = './assets/doc/';
    //     $config['allowed_types'] = 'xlsx|xls';

    //     $this->load->library('upload');
    //     $this->upload->initialize($config);

    //     if (!$this->upload->do_upload()) {
    //         $this->session->set_flashdata("gagal", "<center><strong>Import Failed !!!</strong></center>");
    //         redirect('admin/Employee');
    //         // print_r('gagal');
    //     } else {
    //         $data = array('upload_data' => $this->upload->data());
    //         $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
    //         $filename = $upload_data['file_name'];
    //         $this->M_data->upload_employee($filename);
    //         unlink('./assets/doc/' . $filename);
    //         $this->session->set_flashdata("berhasil", "<center><strong>Import Successfully!!!</strong></center>");
    //         redirect('admin/Employee');
    //     }
    // }
}
