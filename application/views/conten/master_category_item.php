<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Master Category Item</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Category Item
</button>
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Category Item List </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Item Category Code</th>
                            <th>Name Catefgory Item</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $x=1; 
                        $no=1;
                        foreach ($tipe->result() as $row) { ?>
                        
                        <tr>
                            <td><?= $x++; ?></td>
                            <td><?= $row->code_master_tipe ?></td>
                            <td><?= $row->nama_master_tipe ?></td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $no++; ?>"><i class="fa fa-edit"></i></button>
                                <a href="<?= base_url('admin/Master/hapus_category_item/'.$row->id_master_tipe) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="<?= base_url('admin/Master/tambah_category_item') ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Item Code</label>
            <input type="text" class="form-control" id="code_item" name="code_item" maxlength="3">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Item Name</label>
            <input type="text" class="form-control" id="nama_item" name="nama_item" >
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Dept</label>
            <select name="dept" id="dept" class="form-control">
                <option value="">Choose Dept</option>
                <?php foreach ($dept->result() as $row) { ?>
                  <option value="<?= $row->id_master_dept ?>"><?= $row->nama_dept ?></option>
                <?php } ?>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<?php 
$y=1;
foreach ($tipe->result() as $row) { 
  $a = $row->fk_dept;
  ?>
    <div class="modal fade" id="editModal<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="<?= base_url('admin/Master/edit_category_item/'.$row->id_master_tipe) ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Item Code</label>
            <input type="text" class="form-control" id="code_item" name="code_item" maxlength="3" value="<?= $row->code_master_tipe ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Item Name</label>
            <input type="text" class="form-control" id="nama_item" name="nama_item" value="<?= $row->nama_master_tipe ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Dept</label>
            <select name="dept" id="dept" class="form-control">
                <option value="">Choose Dept</option>
                <?php foreach ($dept->result() as $row) { ?>
                  <option <?php if ($a == $row->id_master_dept) {
                    echo "selected";
                  } ?> value="<?= $row->id_master_dept ?>"><?= $row->nama_dept ?></option>
                <?php } ?>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php $no++;}
?>