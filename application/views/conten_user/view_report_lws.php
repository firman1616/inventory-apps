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
<table width="1133" border="1">
<tr>
    <td width="41" rowspan="2"><div align="center"><strong>No</strong></div></td>
    <td width="127" rowspan="2"><div align="center"><strong>PIC</strong></div></td>
    <td width="147" rowspan="2"><div align="center"><strong>OTHER PIC </strong></div></td>
    <td width="156" rowspan="2"><div align="center"><strong>ACTIVITY TYPE </strong></div></td>
    <td colspan="2"><div align="center"><strong>DATE TIME </strong></div></td>
    <td width="152" rowspan="2"><div align="center"><strong>DESCRIPTION</strong></div></td>
    <td width="105" rowspan="2"><div align="center"><strong>NOTES</strong></div></td>
	<td width="93" rowspan="2"><div align="center"><strong>STATUS</strong></div></td>
  </tr>
  <tr>
    <td width="114"><div align="center"><strong>START</strong></div></td>
    <td width="122"><div align="center"><strong>END</strong></div></td>
  </tr>
  <?php 
  $x=1;
  foreach ($daily->result() as $row) { ?> 
  <tr>
    <td style="font-size: 9px;"><?= $x++; ?></td>
    <td style="font-size: 9px;"><?= $row->nama_user ?></td>
    <td style="font-size: 9px;"><?= $row->nama_karyawan ?></td>
    <td style="font-size: 9px;"><?= $row->nama_tipe ?></td>
    <td style="font-size: 9px;"><?= $row->START ?></td>
    <td style="font-size: 9px;"><?= $row->END ?></td>
    <td style="font-size: 9px;"><?= $row->deskripsi ?></td>
    <td style="font-size: 9px;"><?= $row->note ?></td>
	  <td style="font-size: 9px;"><?= $row->nama_status ?></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>
