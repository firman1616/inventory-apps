<!-- Begin Page Content -->
<div class="container-fluid">

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
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label>Item Code</label>
            <select name="item_code" id="item_code" class="form-control" required onchange="return autofill();">
                <option value="">Choose Item Code</option>
                <?php foreach ($code->result() as $row) { ?>
                    <option value="<?= $row->id_item ?>"><?= $row->kode_jadi ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label for="exampleFormControlInput1">Item Name</label>
            <input type="text" class="form-control" id="nama_item" name="nama_item" disabled>
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
            <label for="exampleFormControlInput1">Other Location</label>
            <input type="text" class="form-control" id="other" name="other">
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
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
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
