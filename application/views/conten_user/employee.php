<div class="container-fluid">
<div class="container">
        <div class="flash-karyawan" data-flashdata="<?php echo $this->session->flashdata('karyawan') ?>"></div>
    </div>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Employee</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Employee</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#importModal">Import Employee</button>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Employee List</h6>
                        </div>
                        <div class="card-body">

                        <?php
                        if ($this->session->flashdata('gagal') == TRUE) { ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('gagal') ?>
                            </div>
                        <?php } ?>
                        <?php
                        if ($this->session->flashdata('berhasil') == TRUE) { ?>
                            <div class="alert alert-success">
                                <?php echo $this->session->flashdata('berhasil') ?>
                            </div>
                        <?php } ?>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $x=1;
                                        $no=1;
                                        foreach ($employee->result() as $row) { ?>
                                        
                                        <tr>
                                            <td><?= $x++; ?></td>
                                            <td><?= $row->nik; ?></td>
                                            <td><?= $row->nama_karyawan ?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $no++; ?>"><i class="fa fa-edit"></i></button>
                                                <a href="<?= base_url('admin/Employee/hapus_data/'.$row->nik) ?>" class="btn btn-danger hapus-karyawan"><i class="fa fa-trash"></i></a>
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

<!-- Add -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="<?= base_url('admin/Employee/tambah_data') ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="number" name="nik" id="nik" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Employee Name</label>
            <input type="text" name="nama" id="nama" class="form-control">
            <br>
            <small>Format : xlsx, xls</small>
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
<!-- End Add -->

<!-- Import -->
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form method="POST" action="<?= base_url('admin/Employee/import_employee') ?>" enctype="multipart/form-data" accept-charset="utf-8">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="Import">Import Data</label>
            <input type="file" name="userfile" id="userfile" class="form-control">
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
<!-- End Import -->

<!-- Edit -->
<?php 
$y=1;
foreach ($employee->result() as $row) { ?>
    

<div class="modal fade" id="editModal<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="<?= base_url('admin/Employee/edit_data/'.$row->nik) ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="number" name="nik" id="nik" class="form-control" value="<?= $row->nik; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="nama">Employee Name</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $row->nama_karyawan; ?>">
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
<!-- end edit -->