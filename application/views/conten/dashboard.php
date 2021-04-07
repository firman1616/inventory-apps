<div class="container-fluid">



                    <!-- Page Heading -->

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                    </div>



                    <!-- Content Row -->

                    <div class="row">



                        <!-- Earnings (Monthly) Card Example -->

                        <div class="col-xl-6 col-md-6 mb-4">

                            <div class="card border-left-primary shadow h-100 py-2">

                                <div class="card-body">

                                    <div class="row no-gutters align-items-center">

                                        <div class="col mr-2">

                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">

                                                TOTAL ACTIVITY FOR TODAY</div>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $today ?></div>

                                        </div>

                                        <div class="col-auto">

                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!-- Earnings (Monthly) Card Example -->

                        <div class="col-xl-6 col-md-6 mb-4">

                            <div class="card border-left-success shadow h-100 py-2">

                                <div class="card-body">

                                    <div class="row no-gutters align-items-center">

                                        <div class="col mr-2">

                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">

                                                TOTAL ACTIVITY <?= date('F'); ?></div>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bulan ?></div>

                                        </div>

                                        <div class="col-auto">

                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                    </div>



                    <!-- Content Row -->



                    <div class="row">

                    <!-- By Type Aktifiti -->

                    <div class="col-xl-12 col-lg-12">

                            <div class="card shadow mb-4">

                                <!-- Card Header - Dropdown -->

                                <div

                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                                    <h6 class="m-0 font-weight-bold text-primary">Type Grafik</h6>

                                </div>

                                <!-- Card Body -->

                                <div class="card-body">

                                    <div id="tipe" class="col-md-12" style="width:100%"></div>

                                </div>

                            </div>

                        </div>

                    <!-- End Type -->



                        <!-- Pie -->

                        <div class="col-xl-12 col-lg-12">

                            <div class="card shadow mb-4">

                                <!-- Card Header - Dropdown -->

                                <div

                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                                    <h6 class="m-0 font-weight-bold text-primary">Pie Grafik</h6>

                                </div>

                                <!-- Card Body -->

                                <div class="card-body">

                                    <div id="aktivitas" class="col-md-12" style="width:100%"></div>

                                </div>

                            </div>

                        </div>

                        <!-- End Pie -->

                    </div>



                </div>

                <!-- /.container-fluid -->



<!-- Chart -->

<script src="http://code.highcharts.com/highcharts.js"></script>

<script src="https://code.highcharts.com/highcharts-3d.src.js"></script>

<!-- Type -->

<script type="text/javascript">

Highcharts.chart('tipe', {

      chart: {

                type: 'pie',

                options3d: {

                    enabled: true,

                    alpha: 45

                }

            },

      title: {

          text: 'Type Grafik'

      },

      tooltip: {

          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'

      },

     plotOptions: {

        pie: {

            innerSize: 100,

            allowPointSelect: true,

            cursor: 'pointer',

            depth: 45,

            dataLabels: {

              enabled: false

            },

            showInLegend: true

        } 

      },

      

      series: [{

          name: 'Type Grafik',

          colorByPoint: true,

          data: [{

              name: 'Serving Maintenance Request',

              y: <?php 

              $main = $maintenance;

              if ($main == null) {

                echo "0";

              }else{

                echo $main;  

              }

              ?>

          },{

              name: 'Unscheduled Maintenance',

              y: <?php 

              $un = $unmaintenance;

              if ($un == null) {

                echo "0";

              }else{

                echo $un;

              }

              ?>

          },{

              name: 'Regular Branch Visit',

              y: <?php 

              $reg = $reguler;

              if ($reg == null) {

                echo "0";

              }else{

                echo $reg;   

              }

              ?>

          },{

              name: 'Purchase Of Parts',

              y: <?php 

              $pur = $pembayaran;

              if ($pur == null) {

                echo "0";

              }else{

                echo $pur;   

              }

              ?>

          },{

              name: 'Create SPP',

              y: <?php 

              $spp = $spp;

              if ($spp == null) {

                echo "0";

              }else{

                echo $spp;   

              }

              ?>

          },{

              name: 'Contact Vendor',

              y: <?php 

              $vendor = $contact;

              if ($vendor == null) {

                echo "0";

              }else{

                echo $vendor;   

              }

              ?>

          },{

              name: 'Maintenance Program',

              y: <?php 

              $main_prog = $main_program;

              if ($main_prog == null) {

                echo "0";

              }else{

                echo $main_prog;   

              }

              ?>

          },{

              name: 'Trial And Error',

              y: <?php 

              $trial = $trial_error;

              if ($trial == null) {

                echo "0";

              }else{

                echo $trial;   

              }

              ?>

          },{

              name: 'Migration Data',

              y: <?php 

              $migrate = $migrasi;

              if ($migrate == null) {

                echo "0";

              }else{

                echo $migrate;   

              }

              ?>

          },{

              name: 'Backup Data',

              y: <?php 

              $backup = $backup;

              if ($backup == null) {

                echo "0";

              }else{

                echo $backup;   

              }

              ?>

          },{

              name: 'Develope Program',

              y: <?php 

              $develop = $build_program;

              if ($develop == null) {

                echo "0";

              }else{

                echo $develop;   

              }

              ?>

          },{

              name: 'Other',

              y: <?php 

              $other = $other;

              if ($other == null) {

                echo "0";

              }else{

                echo $other;   

              }

              ?>

          },{

              name: 'Meeting',

              y: <?php 

              $meeting = $meeting;

              if ($meeting == null) {

                echo "0";

              }else{

                echo $meeting;   

              }

              ?>

          },{

              name: 'Update Program',

              y: <?php 

              $update = $update_program;

              if ($update == null) {

                echo "0";

              }else{

                echo $update;   

              }

              ?>

          }]

      }]

    });

</script>

<!-- End type -->

<script type="text/javascript">

Highcharts.chart('aktivitas', {

      chart: {

                type: 'pie',

                options3d: {

                    enabled: true,

                    alpha: 45

                }

            },

      title: {

          text: 'User Grafik'

      },

      tooltip: {

          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'

      },

     plotOptions: {

        pie: {

            innerSize: 100,

            allowPointSelect: true,

            cursor: 'pointer',

            depth: 45,

            dataLabels: {

              enabled: false

            },

            showInLegend: true

        } 

      },

      

      series: [{

          name: 'User Grafik',

          colorByPoint: true,

          data: [{

              name: 'Moch. Firman Firdaus',

              y: <?php 

              $fir = $firman;

              if ($fir == null) {

                echo "0";

              }else{

                echo $fir;  

              }

              ?>

          },{

              name: 'Kristian Prasetyo Lobo',

              y: <?php 

              $kris = $kristian;

              if ($kris == null) {

                echo "0";

              }else{

                echo $kris;

              }

              ?>

          },{

              name: 'Novita Setyani Febri',

              y: <?php 

              $nov = $novita;

              if ($nov == null) {

                echo "0";

              }else{

                echo $nov;   

              }

              ?>

          },{

              name: 'Yulius Sebastian',

              y: <?php 

              $yul = $yuli;

              if ($yul == null) {

                echo "0";

              }else{

                echo $yul;   

              }

              ?>

          }]

      }]

    });

</script>



<!-- Type -->

<script type="text/javascript">

Highcharts.chart('tipe', {

      chart: {

                type: 'pie',

                options3d: {

                    enabled: true,

                    alpha: 45

                }

            },

      title: {

          text: 'Type Grafik'

      },

      tooltip: {

          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'

      },

     plotOptions: {

        pie: {

            innerSize: 100,

            allowPointSelect: true,

            cursor: 'pointer',

            depth: 45,

            dataLabels: {

              enabled: false

            },

            showInLegend: true

        } 

      },

      

      series: [{

          name: 'Type Grafik',

          colorByPoint: true,

          data: [{

              name: 'Serving Maintenance Request',

              y: <?php 

              $main = $maintenance;

              if ($main == null) {

                echo "0";

              }else{

                echo $main;  

              }

              ?>

          },{

              name: 'Unscheduled Maintenance',

              y: <?php 

              $un = $unmaintenance;

              if ($un == null) {

                echo "0";

              }else{

                echo $un;

              }

              ?>

          },{

              name: 'Regular Branch Visit',

              y: <?php 

              $reg = $reguler;

              if ($reg == null) {

                echo "0";

              }else{

                echo $reg;   

              }

              ?>

          },{

              name: 'Purchase Of Parts',

              y: <?php 

              $pur = $pembayaran;

              if ($pur == null) {

                echo "0";

              }else{

                echo $pur;   

              }

              ?>

          },{

              name: 'Create SPP',

              y: <?php 

              $spp = $spp;

              if ($spp == null) {

                echo "0";

              }else{

                echo $spp;   

              }

              ?>

          },{

              name: 'Contact Vendor',

              y: <?php 

              $vendor = $contac;

              if ($vendor == null) {

                echo "0";

              }else{

                echo $vendor;   

              }

              ?>

          },{

              name: 'Maintenance Program',

              y: <?php 

              $main_prog = $main_program;

              if ($main_prog == null) {

                echo "0";

              }else{

                echo $main_prog;   

              }

              ?>

          },{

              name: 'Trial And Error',

              y: <?php 

              $trial = $trial_error;

              if ($trial == null) {

                echo "0";

              }else{

                echo $trial;   

              }

              ?>

          },{

              name: 'Migration Data',

              y: <?php 

              $migrate = $migrasi;

              if ($migrate == null) {

                echo "0";

              }else{

                echo $migrate;   

              }

              ?>

          },{

              name: 'Backup Data',

              y: <?php 

              $backup = $backup;

              if ($backup == null) {

                echo "0";

              }else{

                echo $backup;   

              }

              ?>

          },{

              name: 'Develope Program',

              y: <?php 

              $develop = $build_program;

              if ($develop == null) {

                echo "0";

              }else{

                echo $develop;   

              }

              ?>

          },{

              name: 'Other',

              y: <?php 

              $other = $other;

              if ($other == null) {

                echo "0";

              }else{

                echo $other;   

              }

              ?>

          },{

              name: 'Meeting',

              y: <?php 

              $meeting = $meeting;

              if ($meeting == null) {

                echo "0";

              }else{

                echo $meeting;   

              }

              ?>

          },{

              name: 'Update Program',

              y: <?php 

              $update = $update_program;

              if ($update == null) {

                echo "0";

              }else{

                echo $update;   

              }

              ?>

          }]

      }]

    });

</script>

<!-- End type -->

