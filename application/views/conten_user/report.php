<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Export Daily Report</h1>
<form action="<?= base_url('admin/Report/print_report') ?>" method="post">
<div class="row">
    <div class="col-md-3">
        <select name="bulan" id="bulan" class="form-control" required>
            <option value="">-- Choose Month --</option>
            <option value="01">Januari</option>
            <option value="02">Febuari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select>
    </div>

    <div class="col-md-3">
        <?php
            $now=date('Y');
            $ymin=$now-4;
            echo "<select name='tahun' class=form-control required>";
            echo "<option value=''>Pilih Tahun</option>";
            for($a=$now;$a>=$ymin;--$a)
            {
            echo "<option value='$a'>$a</option>";
            }
            echo "</select>";
            ?>
        </div>
</div>
<br>
<div class="row">
    <div class="col-xl-6 col-md-6 mb-6" >
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Monthly Report</div>
                        <button class="btn btn-primary" type="submit" name="cek" id="cek">View Report</button>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

</div>
<!-- /.container-fluid -->