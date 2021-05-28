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

  public function master_item()
  {
    return $this->db->query("SELECT
    a.id_item,
    a.kode_jadi,
    a.nama_item,
    a.tipe_sn,
    a.serial_number,
    a.tipe_kategori,
    a.dept_item,
    a.kategori_item,
    a.sub_kategori_item,
    a.tipe_brand,
    a.count,
    a.warna,
		a.keterangan,
    a.tahun_pembelian,
    a.validation,
    b.id_master_dept,
    b.dept_code,
    b.nama_dept,
    c.id_master_tipe,
    c.code_master_tipe,
		c.nama_master_tipe,
    d.id_master_sub,
    d.sub_code,
		d.nama_sub,
    e.id_master_brand,
    e.code_brand,
    e.nama_brand	 
  FROM
    `tbl_item`AS a
  LEFT JOIN tbl_master_dept as b ON a.dept_item = b.id_master_dept
  LEFT JOIN tbl_master_tipe as c ON a.kategori_item = c.id_master_tipe
  LEFT JOIN tbl_master_sub_tipe as d ON a.sub_kategori_item = d.id_master_sub
  LEFT JOIN tbl_master_brand as e ON a.tipe_brand = e.id_master_brand");
  }

  function cari($id){
    return $this->db->query("SELECT * FROM `tbl_item` WHERE kode_jadi = '$id'");
  }

  function kode_item(){
    return $this->db->query(
      "SELECT
        kode_jadi 
      FROM
        tbl_item 
      WHERE
        kode_jadi NOT IN (
          SELECT
            CONCAT( fk_item ) 
          FROM
          tbl_mutasi 
        )
      "
    );
  }

  public function mutasi()
  {
    return $this->db->query('SELECT
    *,
    a.id_lokasi,
    a.nama_lokasi,
    b.nik,
    b.nama_karyawan 
  FROM
    `tbl_mutasi`
    LEFT JOIN tbl_master_lokasi AS a ON fk_lokasi = a.id_lokasi
    LEFT JOIN tbl_employee AS b ON pic = b.nik');
  }

  public function brand_user($dept)
  {
    return $this->db->query("SELECT * FROM `tbl_master_brand` WHERE fk_dept = $dept");
  }

  public function item_user($dept)
  {
    return $this->db->query("SELECT * FROM `tbl_master_tipe` WHERE fk_dept = $dept");
  }

  public function sub_item_user($dept)
  {
    return $this->db->query("SELECT * FROM `tbl_master_sub_tipe` WHERE fk_dept = $dept");
  }

  public function master_item_user($dept)
  {
    return $this->db->query("SELECT
    a.id_item,
    a.kode_jadi,
    a.nama_item,
    a.tipe_sn,
    a.serial_number,
    a.tipe_kategori,
    a.dept_item,
    a.kategori_item,
    a.sub_kategori_item,
    a.tipe_brand,
    a.count,
    a.warna,
		a.keterangan,
    a.tahun_pembelian,
    a.validation,
    b.id_master_dept,
    b.dept_code,
    b.nama_dept,
    c.id_master_tipe,
    c.code_master_tipe,
		c.nama_master_tipe,
    d.id_master_sub,
    d.sub_code,
		d.nama_sub,
    e.id_master_brand,
    e.code_brand,
    e.nama_brand	 
  FROM
    `tbl_item`AS a
  LEFT JOIN tbl_master_dept as b ON a.dept_item = b.id_master_dept
  LEFT JOIN tbl_master_tipe as c ON a.kategori_item = c.id_master_tipe
  LEFT JOIN tbl_master_sub_tipe as d ON a.sub_kategori_item = d.id_master_sub
  LEFT JOIN tbl_master_brand as e ON a.tipe_brand = e.id_master_brand WHERE dept_item = $dept");
  }

  public function dept_user($dept)
  {
    return $this->db->query("SELECT * FROM tbl_master_dept WHERE id_master_dept = $dept ");
  }

  function kode_item_user($dept){
    return $this->db->query(
      "SELECT
        kode_jadi 
      FROM
        tbl_item 
      WHERE
        kode_jadi NOT IN (
          SELECT
            CONCAT( fk_item ) 
          FROM
          tbl_mutasi 
        )
        AND dept_item = $dept
      "
    );
  }

  public function mutasi_user($dept)
  {
    return $this->db->query("SELECT
    *,
    a.id_lokasi,
    a.nama_lokasi,
    b.nik,
    b.nama_karyawan 
  FROM
    `tbl_mutasi`
    LEFT JOIN tbl_master_lokasi AS a ON fk_lokasi = a.id_lokasi
    LEFT JOIN tbl_employee AS b ON pic = b.nik WHERE fk_dept = $dept");
  }

  public function user_log($where)
  {
    return $this->db->query("SELECT
    *,
    a.nik,
    a.nama_karyawan 
  FROM
    tbl_user
    LEFT JOIN tbl_employee AS a ON nama_user = a.nik $where");
  }
}