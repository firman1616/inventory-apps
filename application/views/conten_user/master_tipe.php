<div class="container-fluid">
<div class="container">
        <div class="flash-tipe" data-flashdata="<?php echo $this->session->flashdata('tipe') ?>"></div>
    </div>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Master Type</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Type</button>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Master Type Daily</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Type Name</th>
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
                                            <td><?= $row->nama_tipe ?></td>
                                            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit" data-toggle="modal" data-target="#editModal<?= $no++; ?>"></i></button></td>
                                        </tr>
                                        
                                        <?php }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<!-- Add Type -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="<?= base_url('admin/Master/tabah_tipe') ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Name Type</label>
            <input type="text" class="form-control" id="nama_tipe" name="nama_tipe">
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
<!-- End Tambah -->

<!-- Edit Tipe -->
<?php 
$y=1;
foreach ($tipe->result() as $row) {?>
    
<div class="modal fade" id="editModal<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="<?= base_url('admin/Master/edit_tipe/'.$row->id_tipe) ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Name Type</label>
            <input type="text" class="form-control" id="nama_tipe" name="nama_tipe" value="<?= $row->nama_tipe ?>">
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
<?php $no++; }
?>
<!-- end edit -->