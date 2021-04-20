<?php

class M_data extends CI_Model

{

  function __construct()

  {

    parent::__construct();

  }

  function get_data($table)

  {

    return $this->db->get($table);

  }

  function get_data_by_id($table, $where)

  {

    return $this->db->get_where($table, $where);

  }

  function simpan_data($table, $data)

  {

    $this->db->insert($table, $data);

  }

  function update_data($table, $data, $where)

  {

    $this->db->update($table, $data, $where);

  }

  function hapus_data($table, $where)

  {

    $this->db->delete($table, $where);

  }



  public function upload_employee($filename)

  {

    ini_set('memory_limit', '-1');

    $inputFileName = './assets/doc/' . $filename;

    try {

      $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

    } catch (Exception $e) {

      die('Error loading file :' . $e->getMessage());

    }



    $worksheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

    $numRows = count($worksheet);



    for ($i = 2; $i < ($numRows + 1); $i++) {



      $ins = array(

        "nik"                       => $worksheet[$i]["A"],

        "nama_karyawan"             => $worksheet[$i]["B"]

      );

      $this->db->insert('tbl_employee', $ins);

    }

  }

  public function user()
  {
    return $this->db->query("SELECT
	*,
	a.nik,
	a.nama_karyawan,
	b.id_master_dept,
	b.nama_dept 
FROM
	`tbl_user`
	LEFT JOIN tbl_employee AS a ON nama_user = a.nik
	LEFT JOIN tbl_master_dept AS b ON dept_user = b.id_master_dept");
  }

  function get_subitem($id)
  {
    $hasil = $this->db->query("SELECT * FROM tbl_master_sub_tipe WHERE fk_tipe='$id'");
    return $hasil->result();
  }

}

