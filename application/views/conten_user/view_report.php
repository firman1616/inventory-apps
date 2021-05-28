<?php 
if (isset($_POST['cek'])) {
    $bulan=$_POST['bulan'];
    $tahun=$_POST['tahun'];
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VIEW</title>
<style>
    table{
        border-collapse: collapse;;
    }
</style>
</head>

<body>
<table width="100%" border="1">
<tr>
    <td width="25%" rowspan="2"><div align="center"><strong>No</strong></div></td>
    <td width="126px" rowspan="2"><div align="center"><strong>PIC</strong></div></td>
    <td width="130px" rowspan="2"><div align="center"><strong>OTHER PIC </strong></div></td>
    <td width="127px" rowspan="2"><div align="center"><strong>ACTIVITY TYPE </strong></div></td>
    <td colspan="2"><div align="center"><strong>DATE TIME </strong></div></td>
    <td width="90px" rowspan="2"><div align="center"><strong>DESCRIPTION</strong></div></td>
    <td width="75px" rowspan="2"><div align="center"><strong>NOTES</strong></div></td>
	<td width="50px" rowspan="2"><div align="center"><strong>STATUS</strong></div></td>
  </tr>
  <tr>
    <td width="110px"><div align="center"><strong>START</strong></div></td>
    <td width="110px"><div align="center"><strong>END</strong></div></td>
  </tr>
  <?php 
  $x=1;
  foreach ($daily->result() as $row) { ?> 
  <tr>
    <td><?= $x++; ?></td>
    <td><?= $row->nama_user ?></td>
    <td><?= $row->nama_karyawan ?></td>
    <td><?= $row->nama_tipe ?></td>
    <td><?= $row->START ?></td>
    <td><?= $row->END ?></td>
    <td><?= $row->deskripsi ?></td>
    <td><?= $row->note ?></td>
	<td><?= $row->nama_status ?></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>
