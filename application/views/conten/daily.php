<!-- Begin Page Content -->

<div class="container-fluid">

<div class="container">

        <div class="flash-daily" data-flashdata="<?php echo $this->session->flashdata('daily') ?>"></div>

    </div>

<!-- Page Heading -->

<h1 class="h3 mb-4 text-gray-800">Daily</h1>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Activity</button>



<div class="card shadow mb-4">

                        <div class="card-header py-3">

                            <h6 class="m-0 font-weight-bold text-primary">Daily List</h6>

                        </div>

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>

                                        <tr>

                                            <th style="width: 5%;">No</th>

                                            <th>Name User</th>

                                            <th>Activity Type</th>

                                            <th>Validation</th>

                                            <th>Status</th>

                                            <th>Action</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php 

                                        $x=1;

                                        $no=1;

                                        foreach ($daily->result() as $row) { ?>

                                        <tr>

                                            <td><?= $x++ ?></td>

                                            <td><?= $row->nama_user ?></td>

                                            <td><?= $row->nama_tipe ?></td>

                                            <td><?= date('d F Y',strtotime($row->validation)) ?></td>

                                            <td>

                                                <?php if ($row->id_status == '1') { ?>

                                                    <button type="button" class="btn btn-primary">Done</button>

                                                <?php }elseif ($row->id_status == '2') { ?>

                                                    <button type="button" class="btn btn-warning">Work In Progress</button>

                                                <?php }else { ?>

                                                    <button type="button" class="btn btn-danger">Not Yet</button>

                                                <?php } ?>

                                                </td>

                                            <td>

                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $no++; ?>"><i class="fa fa-edit" title="Edit"></i></button>

                                                <a class="hapus-daily btn btn-danger" href="<?= base_url('admin/Daily/hapus_daily/'.$row->id_aktivitas) ?>"><i class="fa fa-trash"></i></a>

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



<!-- Add Modal -->

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

        <form action="<?= base_url('admin/Daily/tambah_daily') ?>" method="post">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Add Modal</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="form-group">

            <label for="exampleFormControlInput1">User</label>

            <input type="text" class="form-control" id="pic" name="pic" value="<?= $name ?>" disabled>

        </div>

        <div class="form-group">

            <label for="exampleFormControlInput1">Other User</label>

            <input list="tes" type="text" id="other" name="other" class="form-control">

        </div>

        <div class="form-group">

            <label for="tipe">Activity Type</label>

            <select name="tipe" id="tipe" class="form-control">

                <option value="">Choose Type</option>

                <?php 

                foreach ($tipe->result() as $row) { ?>

                    <option value="<?= $row->id_tipe ?>"><?= $row->nama_tipe ?></option>

                <?php }

                ?>

            </select>

        </div>

        <div class="row">

            <div class="form-group col-md-6 col-xs-6 col-lg-6">

                <label for="start">Start Time</label>

                <input type="datetime-local" name="start" id="start" class="form-control">

            </div>

            <div class="form-group col-md-6 col-xs-6 col-lg-6">

                <label for="start">End Time</label>

                <input type="datetime-local" name="end" id="end" class="form-control" value="<?= date('Y-m-d H:i:s') ?>">

            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-6 col-xs-6 col-lg-6">

                <label for="start">Description</label>

                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>

            </div>

            <div class="form-group col-md-6 col-xs-6 col-lg-6">

                <label for="start">Notes</label>

                <textarea name="note" id="note" class="form-control"></textarea>

            </div>

        </div>

        <div class="form-group">

            <label for="exampleFormControlInput1">Status</label>

            <select name="status" id="status" class="form-control">

                <option value="">Choose Status</option>

                <?php foreach ($stts->result() as $row) { ?>

                    <option value="<?= $row->id_status ?>"><?= $row->nama_status ?></option>

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

<!-- End Add Modal -->



<!-- Edit Modal -->

<?php 

$y=1;

foreach ($daily->result() as $row) { 

    $other = $row->other_pic;

    $type = $row->tipe_aktifitas;

    $description = $row->deskripsi;

    $notes = $row->note;

    $sts = $row->prog;

?>



<div class="modal fade" id="editModal<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

        <form action="<?= base_url('admin/Daily/ubah_daily/'.$row->id_aktivitas) ?>" method="post">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Edit Modal</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="form-group">

            <label for="exampleFormControlInput1">User</label>

            <input type="text" class="form-control" id="pic" name="pic" value="<?= $name ?>" disabled>

        </div>

        <div class="form-group">

            <label for="exampleFormControlInput1">Other User</label>

            <input list="tes" type="text" id="other" name="other" class="form-control" value="<?= $other ?>">

        </div>

        <div class="form-group">

            <label for="tipe">Activity Type</label>

            <select name="tipe" id="tipe" class="form-control">

                <option value="">Choose Type</option>

                <?php 

                foreach ($tipe->result() as $row) { ?>

                    <option <?php if($type == $row->id_tipe){echo "selected";} ?> value="<?= $row->id_tipe ?>"><?= $row->nama_tipe ?></option>

                <?php }

                ?>

            </select>

        </div>

        <div class="row">

            <div class="form-group col-md-6 col-xs-6 col-lg-6">

                <label for="start">Description</label>

                <textarea name="deskripsi" class="form-control" ><?= $description; ?></textarea>

            </div>

            <div class="form-group col-md-6 col-xs-6 col-lg-6">

                <label for="start">Notes</label>

                <textarea name="note" id="note" class="form-control"><?= $notes ?></textarea>

            </div>

        </div>



        <div class="form-group">

            <label for="exampleFormControlInput1">Status</label>

            <select name="status" id="status" class="form-control">

                <option value="">Choose Status</option>

                <?php foreach ($stts->result() as $row) { ?>

                    <option <?php if($sts == $row->id_status){echo "selected";} ?> value="<?= $row->id_status ?>"><?= $row->nama_status ?></option>

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

<?php  $no++;}

?>

<!-- End Edit modal  -->



<!-- datalist -->

<datalist id="tes">

    <?php

    foreach ($employee->result() as $row) { ?>

        <option value=<?= $row->nik ?>><?= $row->nama_karyawan ?></option>

    <?php } ?>

</datalist>

<!-- End Datalist -->



