
<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Data Guru</li><li>Data Training</li>
        </ol>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-12">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fw fa-list"></i>
                    Data Training
                </h1>
                <section id="widget-grid" class="">
                    
                    <div class="widget-body">
                        <div class="row">
                        <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($training as $data) {
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
                                        echo '</tr>';
                                    $no++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                
                </section>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        pageSetUp();
        var responsiveHelper_dt_basic = undefined;
        var responsiveHelper_datatable_fixed_column = undefined;
        var responsiveHelper_datatable_col_reorder = undefined;
        var responsiveHelper_datatable_tabletools = undefined;
        var breakpointDefinition = {
          tablet : 1024,
          phone : 640
        };
        $('#dt_basic').dataTable({
            "scrollX":false,
            pageLength:10,
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+"t"+"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
            "autoWidth" : false,
            "oLanguage": {
                "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
            },
            "preDrawCallback" : function() {
                if (!responsiveHelper_dt_basic) {
                    responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
                }
            },
            "rowCallback" : function(nRow) {
                responsiveHelper_dt_basic.createExpandIcon(nRow);
            },
            "drawCallback" : function(oSettings) {
                responsiveHelper_dt_basic.respond();
            }
        });
    });
</script>