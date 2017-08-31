<!DOCTYPE html>

<html lang="es">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <?php $this->load->view('plantilla/head') ?>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content ">
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


        <?php echo $menu; ?>


        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">

                <!-- END PAGE HEADER-->
                <h3 class="page-title">
                    Entrada <small> </small>
                </h3>
                <!-- BEGIN PAGE CONTENT-->


                <div class="row">

                    <div class="col-md-12">


                       <div class="tabbable-line boxless tabbable-reversed">

                        <div class="tab-content">


                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>REGISTRO
                                    </div>

                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form class="form-horizontal">
                                        <div class="form-body">

                                           <div class="form-group">
                                            <label class="col-md-3 control-label">Producto *</label>
                                            <div class="col-md-3">

                                             <input type="text" class="form-control input-circle" name="mi_archivo">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                        <label class="col-md-3 control-label">Cantidad *</label>
                                        <div class="col-md-3">

                                         <input type="text" class="form-control input-circle" name="mi_archivo">
                                     </div>
                                 </div>

                                <div class="form-actions">
                                    <div class="row">


                                        <div class="col-md-offset-3 col-md-9">
                                            <a href="javascript:history.back(1)"  class="btn btn-circle default">REGRESAR</a>
                                            <button type="submit" class="btn btn-circle blue">GUARDAR</button>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
            </div>









        </div>



    </div>
</div>
<!-- END PAGE CONTENT-->
</div>
</div>
<!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2016 &copy; HelpMex.com.mx
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>

<!-- END JAVASCRIPTS -->
<?php $this->load->view('plantilla/script') ?>

<script>
    jQuery(document).ready(function() {
                // initiate layout and plugins

                Layout.init(); // init current layout
                QuickSidebar.init(); // init quick sidebar
                Metronic.init(); // init metronic core components
                Demo.init(); // init demo features
               // UIExtendedModals.init();

           });
       </script>





   </body>
   <!-- END BODY -->
   </html>