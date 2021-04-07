<!-- Begin Page Content -->
<div class="container-fluid">
<div class="container">
        <div class="flash-user" data-flashdata="<?php echo $this->session->flashdata('user') ?>"></div>
    </div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">USERS</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Users</button>
    <br><br>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name of User</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $x=1;
                        $no=1;
                        foreach ($user->result() as $row) {?>
                        <tr>
                            <td><?= $x++; ?></td>
                            <td><?= $row->nama_user; ?></td>
                            <td><?= $row->username ?></td>
                            <td><?= $row->ket ?></td>
                            <td><?php if ($row->level == '1') {
                                echo "Admin";
                            }elseif ($row->level == '2') {
                                echo "User";
                            }else {
                                echo "Magement";
                            } ?></td>
                            <td>
                                <button type="button" class="btn btn-warning" title="Edit" data-toggle="modal" data-target="#editModal<?= $no++; ?>"><i class="fa fa-edit"></i></button>
                                <a href="<?= base_url('admin/Master/hapus_user/'.$row->id_user) ?>" class="btn btn-danger hapus-user" title="Delete"><i class="fa fa-trash"></i></a>
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

<!-- Modal Tambah -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="<?= base_url('admin/Master/tambah_user') ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Name of User</label>
            <input type="text" class="form-control" id="nama_user" name="nama_user">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Position</label>
            <select name="position" id="position" class="form-control">
                <option value="">-- Select Position --</option>
                <option value="1">Admin</option>
                <option value="2">Users</option>
                <option value="3">Management</option>
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
<!-- End Modal Tambah -->

<!-- Modal Edit -->
<?php 
$y=1;
foreach ($user->result() as $row) { 
    $id = $row->id_user;
    $nama = $row->nama_user;
    $username = $row->username;
    $lv = $row->level;
?>

<div class="modal fade" id="editModal<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="<?= base_url('admin/Master/edit_user/'.$id) ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Name of User</label>
            <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $nama ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $username ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="<?= $row->ket ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Position</label>
            <select name="position" id="position" class="form-control">
                <option value="">-- Select Position --</option>
                <option <?php if ($lv == '1') {
                    echo "selected";
                } ?> value="1">Admin</option>
                <option <?php if ($lv == '2') {
                    echo "selected";
                }?> value="2">Users</option>
                <option <?php if ($lv == '3') {
                    echo "selected";
                }?> value="3">Management</option>
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
<!-- End Modal Edit -->