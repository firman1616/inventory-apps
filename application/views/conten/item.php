<!-- Begin Page Content -->
<div class="container-fluid">
<div class="container">
      <div class="flash-item" data-flashdata="<?php echo $this->session->flashdata('item') ?>"></div>
    </div>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
<a href="<?= site_url('admin/Item/v_tambah') ?>" class="btn btn-primary">Add Item</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Item Code</th>
                        <th>Item Name</th>
                        <th>Dept</th>
                        <th>Validation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $x=1;
                $h=1;
                foreach ($item_list->result() as $row) { 
                    // $a = $row->tipe_kategori;
                    // $b = $row->dept_code;
                    // $c = $row->code_master_tipe;
                    // $d = $row->sub_code;
                    // $e = $row->code_brand;
                    // $f = $row->count;
                    // $g = sprintf("%05s", $f);
                    ?>
                    
                    <tr>
                        <td><?= $x++; ?></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail<?= $h++; ?>"><?= $row->kode_jadi ?></button></td>
                        <td><?= $row->nama_item ?></td>
                        <td><?= $row->nama_dept ?></td>
                        <td><?= date('d-F-Y', strtotime($row->validation)) ?></td>
                        <td>
                            <a href="<?= base_url('admin/Item/v_edit/'.$row->id_item) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a class="hapus-item btn btn-danger" href="<?= base_url('admin/Item/hapus_item/'.$row->id_item) ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- Detail -->
<?php
$z=1; 
foreach ($item_list->result() as $row) { 
    // $a = $row->tipe_kategori;
    // $b = $row->dept_code;
    // $c = $row->code_master_tipe;
    // $d = $row->sub_code;
    // $e = $row->code_brand;
    // $f = $row->count;
    // $g = sprintf("%05s", $f);
?>
    
<div class="modal fade" id="detail<?= $z++ ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail From Code <?= $row->kode_jadi ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-striped">
        <tbody>
            <tr>
                <th scope="row">Item Code</th>
                <td><center>:</center></td>
                <td><?= $row->kode_jadi ?></td>
            </tr>
            <tr>
                <th scope="row">Item Name</th>
                <td><center>:</center></td>
                <td><?= $row->nama_item ?></td>
            </tr>
            <tr>
                <th scope="row">Serial Number type</th>
                <td><center>:</center></td>
                <td>
                    <?php 
                    if ($row->tipe_sn == 'sn') {
                        echo "Serial Number";
                    }else {
                        echo "UnSerial Number";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">Serial Number</th>
                <td><center>:</center></td>
                <td>
                    <?php 
                    if ($row->tipe_sn == 'sn') {
                        echo $row->serial_number;
                    }else {
                        echo "-";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <th scope="row">Department</th>
                <td><center>:</center></td>
                <td><?= $row->nama_dept ?></td>
            </tr>
            <tr>
                <th scope="row">Category Item</th>
                <td><center>:</center></td>
                <td><?= $row->nama_master_tipe ?></td>
            </tr>
            <tr>
                <th scope="row">Sub Category Item</th>
                <td><center>:</center></td>
                <td><?= $row->sub_code. '|' .$row->nama_sub ?></td>
            </tr>
            <tr>
                <th scope="row">Brand Name</th>
                <td><center>:</center></td>
                <td><?= $row->nama_brand ?></td>
            </tr>
            <tr>
                <th scope="row">Color</th>
                <td><center>:</center></td>
                <td><?= $row->warna ?></td>
            </tr>
            <tr>
                <th scope="row">Year of Purchase</th>
                <td><center>:</center></td>
                <td><?= $row->tahun_pembelian ?></td>
            </tr>
            <tr>
                <th scope="row">Note</th>
                <td><center>:</center></td>
                <td><?= $row->keterangan ?></td>
            </tr>
        </tbody>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php $h++;}?>