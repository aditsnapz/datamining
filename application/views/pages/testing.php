<!-- <div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Data Guru</li>
            <li>Data Testing</li>
        </ol>
    </div>
    <div id="content">


        <section id="widget-grid" class="">


           

            <div class="row">

                
                <article class="col-sm-12 col-md-12 col-lg-6">

                   
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false"
                        data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Checkout Form </h2>

                        </header>

                        
                        <div>

                            
                            <div class="jarviswidget-editbox">
                                

                            </div>
                            

                            
                            <div class="widget-body no-padding">
                                <form action="<?php //base_url('Testing/klasifikasi')?>" enctype="multipart/form-data"
                                    id="form" class="smart-form" novalidate="novalidate" method="post">
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="Usia">Pangkat</label>
                                            <section class="col-md-8">
                                                <label class="input">
                                                    <input type="text" name="pangkat" id="pangkat" value=""
                                                        class="form-control" required>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="Usia">Jabatan</label>
                                            <section class="col-md-8">
                                                <label class="input">
                                                    <input type="text" name="jabatan" id="jabatan" value=""
                                                        class="form-control" required>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="Usia">Usia</label>
                                            <section class="col-md-8">
                                                <label class="input">
                                                    <input type="number" name="usia" id="usia" value=""
                                                        class="form-control" required>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="Usia">Masa Kerja</label>
                                            <section class="col-md-8">
                                                <label class="input">
                                                    <input type="number" name="masa_kerja" id="masa_kerja" value=""
                                                        class="form-control" required>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="Usia">Pendidikan</label>
                                            <section class="col-md-8">
                                                <label class="input">
                                                    <input type="text" name="pendidikan" id="pendidikan" value=""
                                                        class="form-control" required>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="Usia">Mengajar</label>
                                            <section class="col-md-8">
                                                <label class="input">
                                                    <input type="text" name="mengajar" id="mengajar" value=""
                                                        class="form-control" required>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="Usia">Kepala Sekolah</label>
                                            <section class="col-md-8">
                                                <label class="input">
                                                    <input type="text" name="kepala_sekolah" id="kepala_sekolah"
                                                        value="" class="form-control" required>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm btn-primary pull-right"><i
                                                    class="fa fa-dot-circle-o"></i> Testing</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            

                        </div>
                        
                    </div>
                </article>
            
                
            </div>
        </section>
    </div>
</div> -->
<!-- END MAIN CONTENT -->

<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Data Guru</li><li>Data Testing</li>
        </ol>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-12">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fw fa-list"></i>
                    Data Testing
                </h1>
                <section id="widget-grid" class="">
                    
                    <div class="widget-body">
                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-md-1 col-form-label" for="select"></label>
                                    <button type="button" class="btn btn-sm btn-success pull-left" data-toggle="modal" data-target="#tambah_testing"><i class="fa fa-plus"></i> Tambah</button>
                            </div>             
                        </form>
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
<!-- MODAL USER -->
<div class="modal fade" id="tambah_testing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-success" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Testing</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
              <form action="<?= base_url('testing/tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="modal-body">
                    
                        <div class="form-group">
                            <label class="col-md-4 col-form-label" for="Usia">Pangkat</label>
                            <section class="col-md-8">
                                
                                    <input type="text" name="pangkat" id="pangkat" value=""
                                        class="form-control" required>
                                
                            </section>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-form-label" for="Usia">Jabatan</label>
                            <section class="col-md-8">
                                
                                    <input type="text" name="jabatan" id="jabatan" value=""
                                        class="form-control" required>
                                
                            </section>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-form-label" for="Usia">Usia</label>
                            <section class="col-md-8">
                                
                                    <input type="number" name="usia" id="usia" value=""
                                        class="form-control" required>
                                
                            </section>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-form-label" for="Usia">Masa Kerja</label>
                            <section class="col-md-8">
                                
                                    <input type="number" name="masa_kerja" id="masa_kerja" value=""
                                        class="form-control" required>
                                
                            </section>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-form-label" for="Usia">Pendidikan</label>
                            <section class="col-md-8">
                                
                                    <input type="text" name="pendidikan" id="pendidikan" value=""
                                        class="form-control" required>
                                
                            </section>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-form-label" for="Usia">Mengajar</label>
                            <section class="col-md-8">
                                
                                    <input type="text" name="mengajar" id="mengajar" value=""
                                        class="form-control" required>
                                
                            </section>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-form-label" for="Usia">Kepala Sekolah</label>
                            <section class="col-md-8">
                                
                                    <input type="text" name="kepala_sekolah" id="kepala_sekolah"
                                        value="" class="form-control" required>
                                
                            </section>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-form-label" for="Usia">Class</label>
                            <section class="col-md-8">
                                
                                    <input type="text" name="class" id="class"
                                        value="" class="form-control" required>
                                
                            </section>
                        </div>
                        
                    
                </div>  
                    
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" name="submit" id="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                </div>
              </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
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