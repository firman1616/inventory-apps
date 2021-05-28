<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Master Brand</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Brand
</button>

<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Brand List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Brand Code</th>
                            <th>Brand Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $x=1;
                        $no=1;
                        foreach ($brand->result() as $row) { ?>
                        <tr>
                            <td><?= $x++ ?></td>
                            <td><?= $row->code_brand ?></td>
                            <td><?= $row->nama_brand ?></td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $no++; ?>"><i class="fa fa-edit"></i></button>
                                <a href="<?= base_url('user/Master/hapus_brand/'.$row->id_master_brand) ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
        <form action="<?= base_url('user/Master/tambah_brand') ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Brand Code</label>
            <input type="text" class="form-control" id="code" name="code" maxlength="3" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Brand Name</label>
            <input type="text" class="form-control" id="nama_brand" name="nama_brand" required>
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
foreach ($brand->result() as $row) { 
  $a = $row->fk_dept;
  ?>
    

<div class="modal fade" id="editModal<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="<?= base_url('user/Master/edit_brand/'.$row->id_master_brand) ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Brand Code</label>
            <input type="text" class="form-control" id="code" name="code" maxlength="3" value="<?= $row->code_brand ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Brand Name</label>
            <input type="text" class="form-control" id="nama_brand" name="nama_brand" value="<?= $row->nama_brand ?>">
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
<?php  $no++;} ?>