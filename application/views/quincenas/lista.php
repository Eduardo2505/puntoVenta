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
                    Corte  <small> Quincenal</small>
                </h3>
                <!-- BEGIN PAGE CONTENT-->


                <div class="row">

                    <div class="col-md-12">

                        <div class="row search-form-default">
                            <div class="col-md-12">
                                <form action="<?php echo site_url('') ?>avaluos/mostrar">
                                    <div class="input-group">
                                        <div class="input-cont">


                                            <div class="col-md-4">

                                                <div class="input-group date-picker input-daterange"  data-date-format="yyyy/mm/dd">
                                                    <input type="text" class="form-control"  name="fecha_de_inspeccion_inicio">
                                                    <span class="input-group-addon">
                                                        a </span>
                                                        <input type="text" class="form-control" name="fecha_de_inspeccion_final">
                                                    </div>

                                                    
                                                </div>
                                            </div>

                                            <span class="input-group-btn">

                                                <button type="submit" class="btn green-haze">
                                                    Buscar &nbsp; <i class="m-icon-swapright m-icon-white"></i>
                                                </button>
                                            </span>
                                            &nbsp;
                                            <span class="input-group-btn">   
                                                <a href="<?php echo site_url('') ?>demo/nuevaquincenas" class="btn blue">
                                                    <i class="fa fa-times"></i> Nueva Quincena </a>
                                                </span>

                                            </div>
                                        </form>
                                    </br>
                                </div>
                            </div>



                            <div class="tabbable-line boxless tabbable-reversed">

                                <div class="tab-content">


                                    <div class="tab-pane active" id="tab_1">
                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa fa-child"></i>Lista
                                                </div>



                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-scrollable">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>

                                                                <th>INICIO</th>
                                                                <th>FINAL</th>
                                                                <th>PAGADO</th>

                                                                <th>ACCIONES</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                          <tr>

                                                            <td>2016/25/17 </td>
                                                            <td>2016/25/17</td>
                                                            <td>2016/25/17</td>
                                                            
                                                            <td>
                                                                <a href="<?php echo site_url('') ?>demo/editarquincenas" title="Ficha" class="btn btn-sm input-circle blue">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>

                                                                <a href="#" title="Equipo de Reparto" class="btn input-circle btn-sm yellow eliminarclass">
                                                                    <i class="fa fa-users"></i>
                                                                </a>
                                                                <a href="#" title="Trabajar" class="btn input-circle btn-sm green eliminarclass">
                                                                    <i class="fa fa-gear"></i>
                                                                </a>
                                                                <a href="#" title="Activo" class="btn input-circle btn-sm blue eliminarclass">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a href="#" title="Activo" class="btn input-circle btn-sm red eliminarclass">
                                                                    <i class="fa fa-exclamation"></i>
                                                                </a>


                                                            </td>
                                                        </tr>
                                                       




                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>
                                        <div class="pull-right" >

                                            <?php echo $pagination; ?>

                                        </div>
                                    </div>
                                    <div style="text-align: center">
                                        <a href="javascript:;" class="btn btn-lg green">
                                            <i class="fa fa-file-excel-o"></i>
                                        </a>
                                        <a href="javascript:;" class="btn btn-lg red">
                                            <i class="fa fa-file-pdf-o"></i>
                                        </a>
                                        
                                    </div>


                                </div>


                                <div style="display: none">
                                    <a class="btn default" data-target="#static" data-toggle="modal" id="btnmodal">
                                        View Demo </a>
                                    </div>


                                    <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                        <input type="hidden" id="idHistorial">
                                        <div class="modal-body">
                                            <h4 class="modal-title">¿Esta seguro de eliminar el avalúo ?</h4>
                                        </div>
                                        <div class="modal-footer">


                                            <button type="button" class="btn btn-success btn-clean" data-dismiss="modal" id="btnaceptar">SI</button>
                                            <button type="button" class="btn btn-danger btn-clean" data-dismiss="modal">NO</button>

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
                ComponentsPickers.init();

            });
        </script>





    </body>
    <!-- END BODY -->
    </html>