<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="container">
      <div class="flash-user" data-flashdata="<?php echo $this->session->flashdata('user') ?>"></div>
    </div>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Master User</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add User
</button>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Name User</th>
                                            <th>Dept</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $x=1;
                                      $no=1;
                                      foreach ($user->result() as $row) { ?>
                                        
                                      
                                        <tr>
                                            <td><?= $x++ ?></td>
                                            <td><?= $row->nama_karyawan ?></td>
                                            <td><?= $row->nama_dept ?></td>
                                            <td><?= $row->username ?></td>
                                            <td><?= $row->keterangan ?></td>
                                            <td><?= $row->level ?></td>
                                            <td>
                                              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEdit<?= $no++; ?>"><i class="fa fa-edit"></i></button>
                                              <a href="<?= base_url('admin/Master/hapus_user/'.$row->id_user) ?>" class="hapus-user btn btn-danger"><i class="fa fa-trash"></i></a>
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
      <form action="<?= base_url('admin/Master/tambah_user') ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nama_user">Name User</label>
          <input list="employee" type="text" id="nama_user" name="nama_user" class="form-control">
        </div>
        <div class="form-group">
          <label for="nama_user">Dept User</label>
          <select name="dept" id="dept" class="form-control">
            <option value="">Choose Dept</option>
            <?php foreach ($dept->result() as $row ) {?>
              <option value="<?= $row->id_master_dept ?>"><?= $row->nama_dept ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="nama_user">Username</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="nama_user">Level</label>
          <select name="level" id="level" class="form-control">
            <option value="">Choose Level</option>
            <option value="1">Admin</option>
            <option value="2">Users</option>
            <option value="3">Manager</option>
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
foreach ($user->result() as $row) { 
  $a=$row->dept_user;
  $b=$row->username;
  $c=$row->keterangan;
  $d=$row->level;
  ?>

<div class="modal fade" id="modalEdit<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url('admin/Master/edit_user/'.$row->id_user) ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nama_user">Name User</label>
          <input list="employee" type="text" id="nama_user" name="nama_user" class="form-control" value="<?= $row->nama_user ?>">
        </div>
        <div class="form-group">
          <label for="nama_user">Dept User</label>
          <select name="dept" id="dept" class="form-control">
            <option value="">Choose Dept</option>
            <?php foreach ($dept->result() as $row ) {?>
              <option <?php if ($a == $row->id_master_dept) {
                echo "selected";
              } ?> value="<?= $row->id_master_dept ?>"><?= $row->nama_dept ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="nama_user">Username</label>
          <input type="text" name="username" id="username" class="form-control" value="<?= $b ?>">
        </div>
        <div class="form-group">
          <label for="nama_user">Password</label>
          <input type="text" name="password" id="password" class="form-control" value="<?= $c ?>">
        </div>
        <div class="form-group">
          <label for="nama_user">Level</label>
          <select name="level" id="level" class="form-control">
            <option value="">Choose Level</option>
            <option <?php if ($d == '1') {
              echo "selected";
            } ?> value="1">Admin</option>
            <option <?php if ($d == '2') {
              echo "selected";
            } ?> value="2">Users</option>
            <option <?php if ($d == '3') {
              echo "selected";
            } ?> value="3">Manager</option>
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


<!-- Data List -->
<datalist id="employee">
    <?php
    foreach ($employee->result() as $row) { ?>
        <option value=<?= $row->nik ?>><?= $row->nama_karyawan ?></option>
    <?php } ?>
</datalist>

