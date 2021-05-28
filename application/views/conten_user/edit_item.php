<?php foreach ($get_data->result() as $row) {
    $a = $row->nama_item;
    $b = $row->tipe_sn;
    $c = $row->serial_number;
    // $d = $row->tipe_kategori;
    $e = $row->dept_item;
    $f = $row->kategori_item;
    $g = $row->sub_kategori_item;
    $h = $row->tipe_brand;
    $i = $row->count;
    $j = $row->warna;
    $k = $row->tahun_pembelian;
    $l = $row->keterangan;
} ?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Data</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Master Item Data</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('user/Item/update_data/'.$row->id_item) ?>" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Item Name <small style="color:red"> * </small> </label>
                <input type="text" class="form-control" id="nama_item" name="nama_item" value="<?= $a ?>">
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-4 col-lg-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Serial Number Type </label>
                        <select name="sn_tipe" id="tipe" class="form-control">
                            <option <?php if ($b == 'usn') {
                                echo "selected";
                            } ?> value="usn">UnSerial Number</option>
                            <option <?php if ($b == 'sn') {
                                echo "selected";
                            } ?> value="sn">Serial Number</option>
                        </select>
                    </div>
                </div>
                <?php if ($b == 'sn') {?>
                    <div class="col-md-4 col-xs-4 col-lg-4">
                        <div class="form-group">
                            <label >Serial Number    </label>
                            <input type="text" placeholder="Serial Number" class="form-control" name="sn" value="<?= $c ?>">
                        </div>
                    </div>
                <?php }else { ?>
                    <!-- <div class="col-md-4 col-xs-4 col-lg-4">
                        <div class="form-group">
                            <label id="sn1">Serial Number    </label>
                            <input type="text" placeholder="Serial Number" class="form-control" name="sn" id="sn2" value="<?= $c ?>">
                        </div>
                    </div> -->
                <?php } ?>
                <div class="col-md-4 col-xs-4 col-lg-4">
                    <div class="form-group">
                        <label for="kategory">Category Type <small style="color:red"> * </small></label>
                        <select name="tipe_kategori" id="tipe_kategori" class="form-control" disabled required>
                            <?php foreach ($kategori->result() as $row) { ?>
                                <option value="<?= $row->kode_kategori ?>"><?= $row->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-xs-4 col-md-4">
                    <label for="kategory">Department <small style="color:red"> * </small></label>
                    <input type="text" class="form-control" value="<?= $e ?>" readonly>
                    <!-- <select name="dept" id="tes" class="form-control" readonly>
                        <option value="">-- Choose Dept --</option>
                        <?php foreach ($dept->result() as $row) { ?>
                            <option <?php if ($e == $row->id_master_dept) {
                                echo "selected";
                            } ?> value="<?= $row->id_master_dept ?>"><?= $row->nama_dept ?></option>
                        <?php } ?>
                    </select> -->
                </div>
                <div class="col-lg-4 col-xs-4 col-md-4">
                    <label for="kategory">Item Type <small style="color:red"> * </small></label>
                    <select name="tipe_item" id="item" class="form-control" required>
                    <option value="">-- Choose One --</option>
                        <?php foreach ($tipe_item->result() as $row) { ?>
                            <option <?php if ($f == $row->id_master_tipe) {
                                echo "selected";
                            } ?> value="<?= $row->id_master_tipe ?>"><?= $row->nama_master_tipe ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-4 col-xs-4 col-md-4">
                    <label for="kategory">Sub Item Type <small style="color:red"> * </small></label>
                    <select name="subitem" id="subitem" class="subitem form-control" required>
                        <option value="<?= $g ?>"><?= $g ?></option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-6">
                    <label for="brand">Brand Name <small style="color:red"> * </small></label>
                    <select class="form-control" name="brand" required>
                        <option value="">-- Choose Brand --</option>
                        <?php foreach ($brand->result() as $row) { ?>
                            <option <?php if ($h == $row->id_master_brand) {
                                echo "selected";
                            } ?> value="<?= $row->id_master_brand ?>"><?= $row->nama_brand ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-6">
                    <label for="fullname">Count </label>
                    <input type="number" class="form-control" name="count" id="count" readonly value="<?= $i ?>">
                    <!-- tampil ndek kene hu,  -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xs-6 col-lg-6">
                    <label for="warna">Colour <small style="color:red"> * </small></label>
                    <input type="text" class="form-control" name="warna" value="<?= $j ?>">
                </div>
                <div class="col-md-6 col-xs-6 col-lg-6">
                    <label for="warna">Year of Purchase <small>(Optional)</small></label>
                    <input type="number" class="form-control" name="tahun_beli" value="<?= $k ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Note <small > (Optional) </small> </label>
                <!-- <textarea name="keterangan" id="keterangan" class="form-control"><?= $l ?></textarea> -->
                <?php echo $this->ckeditor->editor('keterangan',$l); ?>
            </div>
            <br>
            <button type="submit" class="btn btn-warning"><i class="fa fa-upload"></i> | Update Item</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->