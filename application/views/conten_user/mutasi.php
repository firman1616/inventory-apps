<!-- Begin Page Content -->
<div class="container-fluid">
<div class="container">
      <div class="flash-mutasi" data-flashdata="<?php echo $this->session->flashdata('mutasi') ?>"></div>
    </div>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Item Mutation</h1>

<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Add Mutation
  </button>
  <br><br>

<div class="card shadow mb-4 collapse" id="collapseExample">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Mutation</h6>
    </div>
    <div class="card-body">
    <form action="<?= base_url('user/Mutasi/add_mutasi') ?>" method="post">
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label>Item Code</label>
            <!-- <select name="item_code" id="item_code" class="form-control" onchange="return autofill();">
                <option value="">Choose Code</option>
                <?php foreach ($code->result() as $row) { ?>
                    <option value="<?= $row->id_item ?>"><?= $row->kode_jadi ?></option>
                <?php } ?>
            </select> -->
            <input list="inv" type="text" name="item_code" id="item_code" class="form-control" required onchange="return autofill();">
        </div>
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label for="exampleFormControlInput1">Item Name</label>
            <input type="text" class="form-control" id="nama_item" name="nama_item" readonly="yes">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label> Location</label>
            <select name="lokasi" id="lokasi" class="form-control" required>
                <option value="">Choose Location</option>
                <?php foreach ($lokasi->result() as $row) { ?>
                    <option value="<?= $row->id_lokasi ?>"><?= $row->nama_lokasi ?></option>
                <?php } ?>
                    <option value="500">Other Location</option>
            </select>
        </div>
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label id=ot1 for="exampleFormControlInput1">Other Location</label>
            <input type="text" class="form-control" id="ot2" name="other">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label for="exampleFormControlInput1">Note</label>
            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
        </div>
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label for="exampleFormControlInput1">PIC</label>
            <input list="karyawan" type="text" name="pic" id="pic" class="form-control" required>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label for="exampleFormControlInput1">Mutation Date</label>
            <input type="date" class="form-control" id="tgl_mutasi" name="tgl_mutasi" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> | Save Data</button>
    </form>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Mutation List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Item Code</th>
                        <th>Location</th>
                        <th>PIC</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php 
                $x=1;
                foreach ($mutasi->result() as $row) { ?>
                    <tr>
                        <td><?= $x++ ?></td>
                        <td><?= $row->fk_item ?></td>
                        <td>
                            <?php 
                            if ($row->fk_lokasi == '500') {
                                echo $row->other_location;
                            }else {
                                echo $row->nama_lokasi;
                            }
                            ?>
                        </td>
                        <td><?= $row->nama_karyawan; ?></td>
                        <td><?= date('d F Y', strtotime($row->tgl_mutasi)) ?></td>
                        <td>
                        <a href="<?= base_url('user/Mutasi/v_edit/'.$row->id_mutasi) ?>"><button type="submit" class="btn btn-warning"><i class="fa  fa-edit"></i></button></a>
                        <a href="<?= base_url('user/Mutasi/delete_mutasi/'.$row->id_mutasi) ?>" class="hapus-mutasi btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
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

<datalist id="karyawan">
    <?php foreach ($pic->result() as $row) { ?>
        <option value="<?= $row->nik ?>"><?= $row->nama_karyawan ?></option>
    <?php } ?>
</datalist>

<datalist id="inv">
    <?php foreach ($code->result() as $row) { ?>
        <option value="<?= $row->kode_jadi ?>"></option>
    <?php } ?>
</datalist>
<!-- $row->id_item -->
