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



  public function list_daily()

  {

    return $this->db->query(

      "SELECT

      a.id_aktivitas,

      a.pic,

      a.other_pic,

      a.tipe_aktifitas,

      a.START,

      a.END,

      a.deskripsi,

      a.note,

      a.prog,

      a.validation,

      

      b.id_user,

      b.nama_user,

      

      c.nik,

      c.nama_karyawan,

      

      d.id_status,

      d.nama_status,

      

      e.id_tipe,

      e.nama_tipe

    FROM

      tbl_activity as a

      LEFT JOIN tbl_user as b on a.pic = b.id_user

      LEFT JOIN tbl_employee as c on a.other_pic = c.nik

      LEFT JOIN tbl_status as d on a.prog = d.id_status

      LEFT JOIN tbl_tipe as e on a.tipe_aktifitas = e.id_tipe"

    );

  }



  public function today()

  {

    return $this->db->query("SELECT validation FROM tbl_activity WHERE validation = DATE(NOW())")->num_rows();

  }



  public function bulan()

  {

    return $this->db->query("SELECT validation FROM `tbl_activity` where MONTH(validation) = MONTH(NOW())")->num_rows();

  }

  public function year()
  {
    return $this->db->query("SELECT validation FROM `tbl_activity` WHERE YEAR(validation) = YEAR(NOW())")->num_rows();
  }



  public function firman()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE pic = '1'")->num_rows();

  }



  public function kristian()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE pic = '2'")->num_rows();

  }



  public function novita()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE pic = '3'")->num_rows();

  }

  public function yuli()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE pic = '5'")->num_rows();

  }



  public function maintenance()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '1'")->num_rows();

  }



  public function unmaintenance()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '2'")->num_rows();

  }



  public function reguler()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '3'")->num_rows();

  }



  public function pembayaran()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '4'")->num_rows();

  }



  public function spp()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '5'")->num_rows();

  }



  public function contact()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '6'")->num_rows();

  }



  public function main_program()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '7'")->num_rows();

  }



  public function trial_eror()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '8'")->num_rows();

  }



  public function migrasi()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '9'")->num_rows();

  }



  public function backup()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '10'")->num_rows();

  }



  public function build_program()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '11'")->num_rows();

  }



  public function other()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '12'")->num_rows();

  }



  public function meeting()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '13'")->num_rows();

  }



  public function update_program()

  {

    return $this->db->query("SELECT * FROM `tbl_activity` WHERE tipe_aktifitas = '14'")->num_rows();

  }



  public function report($bulan, $tahun)

  {

    return $this->db->query("SELECT

    a.id_aktivitas,

    a.pic,

    a.other_pic,

    a.tipe_aktifitas,

    a.START,

    a.END,

    a.deskripsi,

    a.note,

    a.prog,

    a.validation,

    b.id_user,

    b.nama_user,

    c.nik,

    c.nama_karyawan,

    d.id_status,

    d.nama_status,

    e.id_tipe,

    e.nama_tipe 

  FROM

    tbl_activity AS a

    LEFT JOIN tbl_user AS b ON a.pic = b.id_user

    LEFT JOIN tbl_employee AS c ON a.other_pic = c.nik

    LEFT JOIN tbl_status AS d ON a.prog = d.id_status

    LEFT JOIN tbl_tipe AS e ON a.tipe_aktifitas = e.id_tipe 

  WHERE

    MONTH ( validation ) = $bulan 

    AND YEAR ( validation ) = $tahun");

  }

  public function bar()
  {
    return $this->db->query("SELECT count(validation) as jumlah
    FROM tbl_activity 
    GROUP BY YEAR(validation), MONTH(validation)");
  }

  

}

