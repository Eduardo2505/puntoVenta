<!DOCTYPE html>

<html lang="es">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
 <?php $this->load->view('plantilla/head') ?>
 <!-- BEGIN PAGE LEVEL STYLES -->
 <link href="<?php echo site_url('') ?>metronic/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet"/>
 <!-- END PAGE LEVEL STYLES -->

 <!-- BEGIN PAGE DATEPICKER -->
 <link rel="stylesheet" type="text/css" href="<?php echo site_url('') ?>metronic/global/plugins/clockface/css/clockface.css"/>
 <link rel="stylesheet" type="text/css" href="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
 <link rel="stylesheet" type="text/css" href="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
 <link rel="stylesheet" type="text/css" href="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
 <link rel="stylesheet" type="text/css" href="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
 <link rel="stylesheet" type="text/css" href="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
 <!-- END FIN PAGE DATEPICKER -->
 <link href="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
 <link href="<?php echo site_url('') ?>metronic/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
 <link href="<?php echo site_url('') ?>metronic/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed page-sidebar-closed-hide-logo page-container-bg-solid">
  <!-- BEGIN HEADER -->
  <div class="page-header -i navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <?php echo $barra; ?>
    <!-- END HEADER INNER -->
  </div>
  <!-- END HEADER -->
  <div class="clearfix">
  </div>
  <!-- BEGIN CONTAINER -->
  <div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <?php echo $menu; ?>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
      <div class="page-content">


        <div class="row margin-top-5">
          <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
              <!-- PORTLET MAIN -->
              <div class="portlet light profile-sidebar-portlet">
                <!-- SIDEBAR USERPIC -->

                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                  <div class="profile-usertitle-name">
                   Profesionales
                 </div>

                 <form role="form"  class="form-horizontal">




                  <div class="md-radio-list">

                    <div class="form-group">
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                       <div class="md-radio has-error">
                        <input type="radio" id="radio10" name="radio1" class="md-radiobtn" checked="">
                        <label for="radio10">
                          <span></span>
                          <span class="check"></span>
                          <span class="box"></span>
                          Dr. Eduardo Padilla Cruz </label>
                        </div>


                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                       <div class="md-radio has-error">
                        <input type="radio" id="radio11" name="radio1" class="md-radiobtn">
                        <label for="radio11">
                          <span></span>
                          <span class="check"></span>
                          <span class="box"></span>
                          <p>Dr. Eduardo Padilla Cruz</p> </label>
                        </div>


                      </div>
                    </div>






                  </div>

                </form>
              </div>
              <!-- END SIDEBAR USER TITLE -->
              

              <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
            <div class="portlet light">
              <!-- STAT -->
              <div class="profile-usertitle-name">
                Clasificación
              </div><br>

              <span class="label" style="background-color: #F3565D">
                <i class="fa fa-times-circle"></i> No confirmado </span><hr/>
                <span class="label" style="background-color:#69A4E0">
                  <i class="fa fa-check-square"></i> Confirmado </span><hr/>
                  <span class="label" style="background-color:#F8CB00">
                   <i class="fa fa-history"></i> Hora cancelada </span><hr/>
                   <span class="label" style="background-color:#1BBC9B">
                    <i class="fa fa-envelope"></i> Confirmado por mail </span><hr/>
                    <span class="label" style="background-color:#9B59B6">
                     <i class="fa fa-envelope-o"></i> Cancelado por mail </span><hr/>
                     <!-- END STAT -->

                   </div>

                   <div class="portlet light">
                    <div class="date-picker" data-date-format="mm/dd/yyyy">
                    </div>
                  </div>
                  <!-- END PORTLET MAIN -->
                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="portlet box green-meadow calendar">
                        <div class="portlet-title">
                          <div class="caption">
                            <a href="#" onclick="nuevaCita()" class="btn btn-default btn-sm">
                              <i class="fa fa-pencil"></i> Nueva Cita </a>

                            </div>

                          </div>
                          <div class="portlet-body">
                            <div class="row">

                              <div class="col-md-12 col-sm-12">
                                <div id="calendar" class="has-toolbar">
                                </div>
                              </div>
                            </div>
                            <!-- END CALENDAR PORTLET-->
                          </div>
                        </div>
                      </div>



                    </div>



                  </div>
                  <!-- END PROFILE CONTENT -->
                </div>
              </div>
              <!-- END PAGE CONTENT-->
            </div>
          </div>
          <!-- END CONTENT -->
          <!-- BEGIN QUICK SIDEBAR -->

          <div style="display: none">
            <a class="btn default" data-target="#static" data-toggle="modal" id="btnmodal">
              View Demo </a>
            </div>


            <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
              <input type="hidden" id="idHistorial">
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-body">
                  
                    <div class="form-group">
                      <label class="col-md-3 control-label">Cliente *</label>
                      <div class="col-md-8">

                       <input type="text" class="form-control input-circle" name="cliente">
                     </div>
                   </div>

                   <div class="form-group">
                     <label class="control-label col-md-3">Fecha *</label>
                     <div class="col-md-3">
                      <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                        <input type="text" class="form-control" readonly="">
                        <span class="input-group-btn">
                          <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                      </div>
                      <!-- /input-group -->
                    </div>
                  </div>


                  <div class="form-group">
                   <label class="col-md-3 control-label">Hora *</label>
                   <div class="col-md-5">
                    <div class="input-group">
                      <input type="text" class="form-control timepicker timepicker-24">
                      <span class="input-group-btn">
                        <button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Profesional *</label>
                  <div class="col-md-5">

                   <select class="form-control">
                    <option>Selecciona</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                  </select>
                </div>
              </div>








            </div>
          </form>
        </div>
        <div class="modal-footer">


          <button type="button" class="btn btn-success btn-clean" data-dismiss="modal" id="btnaceptar">SI</button>
          <button type="button" class="btn btn-danger btn-clean" data-dismiss="modal">NO</button>

        </div>
      </div>

      <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
      <div class="page-footer-inner">
       2014 &copy; Metronic by keenthemes.
     </div>
     <div class="scroll-to-top">
      <i class="icon-arrow-up"></i>
    </div>
  </div>

  <?php $this->load->view('plantilla/script') ?>
  <!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
  <script src="<?php echo site_url('') ?>metronic/global/plugins/moment.min.js"></script>
  <script src="<?php echo site_url('') ?>metronic/global/plugins/fullcalendar/fullcalendar.min.js"></script>
  <script src="<?php echo site_url('') ?>metronic/admin/pages/scripts/calendar.js"></script>
  <script src="<?php echo site_url('') ?>metronic/global/plugins/fullcalendar/lang/es.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL PLUGINS -->

  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script type="text/javascript" src="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url('') ?>metronic/global/plugins/clockface/js/clockface.js"></script>
  <script type="text/javascript" src="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <!-- END PAGE LEVEL PLUGINS -->
  <script src="<?php echo site_url('') ?>metronic/admin/pages/scripts/components-pickers.js"></script>
  <script src="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js" type="text/javascript"></script>
  <script>
    jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
//Profile.init(); // init page demo
Calendar.init();

ComponentsPickers.init();
$.datepicker.setDefaults($.datepicker.regional['es']);

});
</script>


</body>
<!-- END BODY -->
</html>