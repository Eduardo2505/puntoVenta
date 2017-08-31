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
                    Citas <small>  Reporte </small>
                </h3>
                <!-- BEGIN PAGE CONTENT-->


                <div class="row">

                    <div class="col-md-12">
                        <div class="portlet box yellow">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Stack Chart Controls
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse" data-original-title="" title="">
                                    </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                    </a>
                                    <a href="javascript:;" class="reload" data-original-title="" title="">
                                    </a>
                                    <a href="javascript:;" class="remove" data-original-title="" title="">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="chart_5" style="height: 350px; padding: 0px; position: relative;">
                                    <canvas class="flot-base" width="2110" height="700" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1055px; height: 350px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 40px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 138px; text-align: center;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 236px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 334px; text-align: center;">3</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 432px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 530px; text-align: center;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 628px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 726px; text-align: center;">7</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 824px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 922px; text-align: center;">9</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 81px; top: 334px; left: 1017px; text-align: center;">10</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 322px; left: 7px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 276px; left: 1px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 230px; left: 1px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 184px; left: 1px; text-align: right;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 138px; left: 1px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 92px; left: 1px; text-align: right;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 46px; left: 1px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">70</div></div></div><canvas class="flot-overlay" width="2110" height="700" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1055px; height: 350px;"></canvas><div class="legend"><div style="position: absolute; width: 42px; height: 45px; top: 13px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:13px;right:13px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(237,194,64);overflow:hidden"></div></div></td><td class="legendLabel">sales</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(175,216,248);overflow:hidden"></div></div></td><td class="legendLabel">tax</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(203,75,75);overflow:hidden"></div></div></td><td class="legendLabel">profit</td></tr></tbody></table></div></div>
                                    <div class="btn-toolbar">
                                        <div class="btn-group stackControls">
                                            <input type="button" class="btn blue" value="Dato 1">
                                            <input type="button" class="btn red" value="Dato 2">
                                        </div>
                                        <div class="space5">
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Gráficas Interactivas
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title="">
                                        </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                        </a>
                                        <a href="javascript:;" class="reload" data-original-title="" title="">
                                        </a>
                                        <a href="javascript:;" class="remove" data-original-title="" title="">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="chart_2" class="chart" style="padding: 0px; position: relative;">
                                        <canvas class="flot-base" width="2110" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1055px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 57px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 127px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 198px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 268px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 336px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 407px; text-align: center;">12</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 477px; text-align: center;">14</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 548px; text-align: center;">16</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 618px; text-align: center;">18</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 689px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 759px; text-align: center;">22</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 830px; text-align: center;">24</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 900px; text-align: center;">26</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 971px; text-align: center;">28</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 100px; top: 283px; left: 1042px; text-align: center;">30</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 270px; left: 13px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 251px; left: 7px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 231px; left: 7px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 212px; left: 7px; text-align: right;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 193px; left: 7px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 174px; left: 7px; text-align: right;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 154px; left: 7px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 7px; text-align: right;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 116px; left: 7px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 96px; left: 7px; text-align: right;">90</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 77px; left: 1px; text-align: right;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 58px; left: 1px; text-align: right;">110</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 39px; left: 1px; text-align: right;">120</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 19px; left: 1px; text-align: right;">130</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">140</div></div></div><canvas class="flot-overlay" width="2110" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1055px; height: 300px;"></canvas><div class="legend"><div style="position: absolute; width: 85px; height: 32px; top: 13px; right: 12px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:13px;right:12px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(209,38,16);overflow:hidden"></div></div></td><td class="legendLabel">Unique Visits</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(55,183,243);overflow:hidden"></div></div></td><td class="legendLabel">Page Views</td></tr></tbody></table></div></div>
                                    </div>
                                </div>

                                <div class="portlet box red">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Gráfica
                                        </div>
                                        <div class="tools">
                                            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                            </a>
                                            <a href="javascript:;" class="reload" data-original-title="" title="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                    <h4>Reporte Pastel</h4>
                                        <div id="pie_chart_3" class="chart" style="padding: 0px; position: relative;">
                                            <canvas class="flot-base" width="1004" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 300px;"></canvas><canvas class="flot-overlay" width="1004" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 502px; height: 300px;"></canvas><div class="pieLabelBackground" style="position: absolute; width: 40px; height: 34px; top: 53px; left: 310px; background-color: rgb(237, 194, 64); opacity: 0.5;"></div><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 53px; left: 310px;"><div style="font-size:8pt;text-align:center;padding:2px;color:white;">Series1<br>25%</div></span><div class="pieLabelBackground" style="position: absolute; width: 40px; height: 34px; top: 202px; left: 319px; background-color: rgb(175, 216, 248); opacity: 0.5;"></div><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 202px; left: 319px;"><div style="font-size:8pt;text-align:center;padding:2px;color:white;">Series2<br>22%</div></span><div class="pieLabelBackground" style="position: absolute; width: 40px; height: 34px; top: 233px; left: 180px; background-color: rgb(203, 75, 75); opacity: 0.5;"></div><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 233px; left: 180px;"><div style="font-size:8pt;text-align:center;padding:2px;color:white;">Series3<br>22%</div></span><div class="pieLabelBackground" style="position: absolute; width: 40px; height: 34px; top: 137px; left: 119px; background-color: rgb(77, 167, 77); opacity: 0.5;"></div><span class="pieLabel" id="pieLabel3" style="position: absolute; top: 137px; left: 119px;"><div style="font-size:8pt;text-align:center;padding:2px;color:white;">Series4<br>12%</div></span><div class="pieLabelBackground" style="position: absolute; width: 40px; height: 34px; top: 41px; left: 166px; background-color: rgb(148, 64, 237); opacity: 0.5;"></div><span class="pieLabel" id="pieLabel4" style="position: absolute; top: 41px; left: 166px;"><div style="font-size:8pt;text-align:center;padding:2px;color:white;">Series5<br>20%</div></span></div>
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
                <script src="<?php echo site_url('') ?>metronic/global/plugins/flot/jquery.flot.min.js"></script>
                <script src="<?php echo site_url('') ?>metronic/global/plugins/flot/jquery.flot.resize.min.js"></script>
                <script src="<?php echo site_url('') ?>metronic/global/plugins/flot/jquery.flot.pie.min.js"></script>
                <script src="<?php echo site_url('') ?>metronic/global/plugins/flot/jquery.flot.stack.min.js"></script>
                <script src="<?php echo site_url('') ?>metronic/global/plugins/flot/jquery.flot.crosshair.min.js"></script>
                <script src="<?php echo site_url('') ?>metronic/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
                <script src="<?php echo site_url('') ?>metronic/admin/pages/scripts/charts-flotcharts.js"></script>
                <script>
                    jQuery(document).ready(function() {
                // initiate layout and plugins

                Layout.init(); // init current layout
                QuickSidebar.init(); // init quick sidebar
                Metronic.init(); // init metronic core components
                Demo.init(); // init demo features
                ChartsFlotcharts.init();
                ChartsFlotcharts.initCharts();
                ChartsFlotcharts.initPieCharts();
                ChartsFlotcharts.initBarCharts();
               // UIExtendedModals.init();

           });
       </script>





   </body>
   <!-- END BODY -->
   </html>