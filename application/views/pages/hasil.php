<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Data Testing</li>
            <li>Hasil</li>
        </ol>
    </div>
    <div id="content">
        <section id="widget-grid" class="">


            <!-- START ROW -->

            <div class="row">

                <!-- NEW COL START -->
                <article class="col-sm-12 col-md-12 col-lg-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false"
                        data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Hasil Perhitungan </h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->

                            <div class="widget-body">
                                <div class="row">
                                    <p><b> Confusion Matrix</b> </p>
                                    <table id="dt_basic" class="table table-striped table-bordered table-hover table-responsive"
                                        >
                                        <thead>
                                            <tr>
                                                <td width="20%">Class</td>
                                                <td width="40%">IV/a</td>
                                                <td width="40%">Bukan IV/a</td>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                
                                                    echo '<tr>';
                                                    echo '<td>IV/a</td>';
                                                    echo '<td>'.$perhitungan['tp'].'</td>';
                                                    echo '<td>'.$perhitungan['fn'].'</td>';
                                                    echo '</tr>';

                                                    echo '<tr>';
                                                    echo '<td>IV/a</td>';
                                                    echo '<td>'.$perhitungan['fp'].'</td>';
                                                    echo '<td>'.$perhitungan['tn'].'</td>';
                                                    echo '</tr>';
                                                
                                            ?>
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <table id="dt_basic" class="table table-striped table-bordered table-hover table-responsive"
                                        >
                                        <thead>
                                            <tr>
                                                <td width="40%">Perhitungan</td>
                                                <td width="60%">Prosentase (%)</td>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                
                                                    echo '<tr>';
                                                    echo '<td >Akurasi</td>';
                                                    echo '<td>'.$akurasi.'</td>';
                                                    echo '</tr>';

                                                    echo '<tr>';
                                                    echo '<td>Error</td>';
                                                    echo '<td>'.$error.'</td>';
                                                    echo '</tr>';

                                                    echo '<tr>';
                                                    echo '<td>Presisi</td>';
                                                    echo '<td>'.$presisi.'</td>';
                                                    echo '</tr>';

                                                    echo '<tr>';
                                                    echo '<td>Recall</td>';
                                                    echo '<td>'.$recall.'</td>';
                                                    echo '</tr>';
                                                   
                                                
                                            ?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            <!-- end widget div -->

                        </div>
                        <!-- end widget -->
                    </div>
                </article>
                <!-- NEW COL START -->
                <article class="col-sm-12 col-md-12 col-lg-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-2" data-widget-editbutton="false"
                        data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Hasil Klasifikasi </h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->

                            <div class="widget-body">
                                <div class="row">
                                    

                                    <table id="dt_basic" class="table table-striped table-bordered table-hover table-responsive"
                                        >
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Pangkat</td>
                                                <td>Jabatan</td>
                                                <td>Usia</td>
                                                <td>Masa Kerja</td>
                                                <td>Pendidikan</td>
                                                <td>Mengajar</td>
                                                <td>KepSek</td>
                                                <td>Class</td>
                                                <td>Klasifikasi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                foreach ($testing as $data) {
                                                    echo '<tr>';
                                                    echo '<td>'.$no.'</td>';
                                                    echo '<td>'.$data['pangkat'].'</td>';
                                                    echo '<td>'.$data['jabatan'].'</td>';
                                                    echo '<td>'.$data['usia'].'</td>';
                                                    echo '<td>'.$data['masa_kerja'].'</td>';
                                                    echo '<td>'.$data['pendidikan'].'</td>';
                                                    echo '<td>'.$data['mengajar'].'</td>';
                                                    echo '<td>'.$data['kepala_sekolah'] .'</td>';
                                                    echo '<td>'.$data['class'].'</td>';
                                                    echo '<td>'.$data['klasifikasi'].'</td>';
                                                    echo '</tr>';
                                                $no++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end widget div -->

                        </div>
                        <!-- end widget -->
                    </div>
                </article>
                <article class="col-sm-12 col-md-12 col-lg-6">
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-6" data-widget-editbutton="false">
                        <!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"

								-->
                        <header>
                            <span class="widget-icon"> <i class="fa fa-bar-chart-o"></i> </span>
                            <h2>Perbandingan Label (%)</h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">

                                <div id="donut-graph" class="chart no-padding"></div>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->
                </article>
                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false">
                        <!-- widget options:
    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

    data-widget-colorbutton="false"
    data-widget-editbutton="false"
    data-widget-togglebutton="false"
    data-widget-deletebutton="false"
    data-widget-fullscreenbutton="false"
    data-widget-custombutton="false"
    data-widget-collapsed="true"
    data-widget-sortable="false"

    -->
                        <header>
                            <span class="widget-icon"> <i class="fa fa-bar-chart-o"></i> </span>
                            <h2>Bukan IV/a Jabatan (%) </h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">

                                <div id="bar-graph" class="chart no-padding"></div>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->
                </article>
            </div>
            
        </section>
    </div>
</div>
<!-- Morris Chart Dependencies -->
<script src="<?= base_url('assets/templates/') ?>js/plugin/morris/raphael.min.js"></script>
<script src="<?= base_url('assets/templates/') ?>js/plugin/morris/morris.min.js"></script>
<script>
    // PAGE RELATED SCRIPTS

    /*
     * Run all morris chart on this page
     */
    $(document).ready(function () {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();
        if ($('#donut-graph').length) {
            Morris.Donut({
                element: 'donut-graph',
                data: [{
                    value: <?= $perbandingan['IV/a'] ?> * 100,
                    label: 'IV/a'
                }, {
                    value: <?= $perbandingan['Bukan IV/a'] ?> * 100,
                    label: 'Bukan IV/a'
                }],
                formatter: function (x) {
                    return x + "%"
                }
            });
        }
        // bar graph color
        if ($('#bar-graph').length) {

            Morris.Bar({
                element: 'bar-graph',
                data: [{
                    x: 'Pembina Tingkat I',
                    y: <?= $discrete['Bukan IV/a'][0]['Pembina Tingkat I'] * 100 ?>
                }, {
                    x: 'Pengatur Tingkat I',
                    y: <?= $discrete['Bukan IV/a'][0]['Pengatur Tingkat I'] * 100 ?>
                }, {
                    x: 'Penata',
                    y: <?= $discrete['Bukan IV/a'][0]['Penata'] * 100 ?>
                }, {
                    x: 'Penata Tingkat I',
                    y: <?= $discrete['Bukan IV/a'][0]['Penata Tingkat I'] * 100 ?>
                }, {
                    x: 'Pembina Utama Muda',
                    y: <?= $discrete['Bukan IV/a'][0]['Pembina Utama Muda'] * 100 ?>
                }, {
                    x: 'Penata Muda Tingkat I',
                    y: <?= $discrete['Bukan IV/a'][0]['Penata Muda Tingkat I'] * 100 ?>
                }, {
                    x: 'Pengatur Muda Tingkat I',
                    y: <?= $discrete['Bukan IV/a'][0]['Pengatur Muda Tingkat I'] * 100 ?>
                }, {
                    x: 'Penata Muda',
                    y: <?= $discrete['Bukan IV/a'][0]['Penata Muda'] * 100 ?>
                }, {
                    x: 'Pengatur',
                    y: <?= $discrete['Bukan IV/a'][0]['Pengatur'] * 100 ?>
                }, {
                    x: 'Pengatur Muda',
                    y: <?= $discrete['Bukan IV/a'][0]['Pengatur Muda'] * 100 ?>
                }],
                xkey: 'x',
                ykeys: ['y'],
                labels: ['Y'],
                barColors: function (row, series, type) {
                    if (type === 'bar') {
                        var red = Math.ceil(150 * row.y / this.ymax);
                        return 'rgb(' + red + ',0,0)';
                    } else {
                        return '#000';
                    }
                }
            });

        }
    });
</script>