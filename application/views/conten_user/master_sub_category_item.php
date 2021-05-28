<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Master Sub Category Item</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Sub Item
</button>
<!-- DataTales Example -->
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
                        <th>Sub Code</th>
                        <th>Sub Category Name</th>
                        <th>Category Master</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $x=1;
                    $no=1;
                    foreach ($sub->result() as $row) { ?>
                        
                    <tr>
                        <td><?= $x++ ?></td>
                        <td><?= $row->sub_code ?></td>
                        <td><?= $row->nama_sub ?></td>
                        <td><?= $row->fk_tipe ?></td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $no++; ?>"><i class="fa fa-edit"></i></button>
                            <a href="<?= base_url('user/Master/hapus_sub/'.$row->id_master_sub) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }?>
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
        <form action="<?= base_url('user/Master/tambah_sub') ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Sub Code Item</label>
            <input type="number" class="form-control" id="sub_code" name="sub_code">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Sub Name Item</label>
            <input type="text" class="form-control" id="sub_name" name="sub_name">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Master Item</label>
            <select name="master_item" id="item" class="form-control">
                <option value="">Choose master</option>
                <?php foreach ($master->result() as $row) { ?>
                    <option value="<?= $row->id_master_tipe ?>"><?= $row->nama_master_tipe ?></option>
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
foreach ($sub->result() as $row) {  
    $a=$row->fk_tipe;
    $b = $row->fk_dept; ?>

<div class="modal fade" id="editModal<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="<?= base_url('user/Master/edit_sub/'.$row->id_master_sub) ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Sub Code Item</label>
            <input type="number" class="form-control" id="sub_code" name="sub_code" value="<?= $row->sub_code ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Sub Name Item</label>
            <input type="text" class="form-control" id="sub_name" name="sub_name" value="<?= $row->nama_sub ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Master Item</label>
            <select name="master_item" id="item" class="form-control">
                <option value="">Choose master</option>
                <?php foreach ($master->result() as $row) { ?>
                    <option <?php if ($a == $row->id_master_tipe) { 
                        echo "selected";
                    } ?> value="<?= $row->id_master_tipe ?>"><?= $row->nama_master_tipe ?></option>
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
<?php $no++;} ?>