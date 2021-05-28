<?php 
foreach ($get_data->result() as $row) {
    $a = $row->fk_item;
    $b = $row->nama_item;
    $c = $row->fk_lokasi;
    $d = $row->other_location;
    $e = $row->keterangan;
    $f = $row->pic;
    $g = $row->tgl_mutasi;
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Mutation</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Mutation</h6>
    </div>
    <div class="card-body">
    <form action="<?= base_url('user/Mutasi/update_data/'.$row->id_mutasi) ?>" method="post">
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label>Item Code</label>
            <!-- <select name="item_code" id="item_code" class="form-control" onchange="return autofill();">
                <option value="">Choose Code</option>
                <?php foreach ($code->result() as $row) { ?>
                    <option value="<?= $row->id_item ?>"><?= $row->kode_jadi ?></option>
                <?php } ?>
            </select> -->
            <input list="inv" type="text" name="item_code" id="item_code" class="form-control" required onchange="return autofill();" value="<?= $a; ?>">
        </div>
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label for="exampleFormControlInput1">Item Name</label>
            <input type="text" class="form-control" id="nama_item" name="nama_item" readonly="yes" value="<?= $b; ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label> Location</label>
            <select name="lokasi" id="lokasi" class="form-control" required>
                <option value="">Choose Location</option>
                <?php foreach ($lokasi->result() as $row) { ?>
                    <option <?php if ($c == $row->id_lokasi) {
                        echo "selected";
                    } ?> value="<?= $row->id_lokasi ?>"><?= $row->nama_lokasi ?></option>
                <?php } ?>
                    <option <?php if ($c == '500') {
                        echo "selected";
                    } ?> value="500">Other Location</option>
            </select>
        </div>
        <?php if ($c == '500') { ?>
            <div class="form-group col-md-6 col-lg-6 col-xs-6">
                <label for="exampleFormControlInput1">Other Location</label>
                <input type="text" class="form-control" name="other" value="<?= $d; ?>">
            </div>
        <?php }else {?>
            <div class="form-group col-md-6 col-lg-6 col-xs-6">
                <label id="ot1" for="exampleFormControlInput1">Other Location</label>
                <input type="text" class="form-control" name="other" id="ot2" value="<?= $d; ?>">
            </div>
        <?php } ?>
    </div>

    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label for="exampleFormControlInput1">Note</label>
            <textarea name="keterangan" id="keterangan" class="form-control"><?= $e ?></textarea>
        </div>
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label for="exampleFormControlInput1">PIC</label>
            <input list="karyawan" type="text" name="pic" id="pic" class="form-control" required value="<?= $f; ?>">
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xs-6">
            <label for="exampleFormControlInput1">Mutation Date</label>
            <input type="date" class="form-control" id="tgl_mutasi" name="tgl_mutasi" required value="<?= $g ?>">
        </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> | Save Data</button>
    </form>
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