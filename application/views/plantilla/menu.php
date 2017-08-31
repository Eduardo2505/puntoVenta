<div class="page-sidebar-wrapper">

  <div class="page-sidebar navbar-collapse collapse">

    <ul class="page-sidebar-menu page-sidebar-menu-closed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
      <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
      <li class="sidebar-search-wrapper">

        <form class="sidebar-search sidebar-search-bordered" action="#" method="POST">
          <a href="javascript:;" class="remove">
            <i class="icon-close"></i>
          </a>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
              <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
            </span>
          </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
      </li>

      <li  class="<?php  if(!empty($agenda)) {echo $agenda; }?>">

        <a href="<?php echo site_url('') ?>demo">
          <i class="fa fa-calendar"></i>
          <span class="title">Agenda</span>
          <span class="selected"></span>

        </a>

      </li>

      <li  class="<?php  if(!empty($paciente)) {echo $paciente; }?>">

        <a href="<?php echo site_url('') ?>demo/pacienteLista">
          <i class="fa fa fa-child"></i>
          <span class="title">Paciente</span>
          <span class="selected"></span>

        </a>

      </li>



      <li class="<?php  if(!empty($reportes)) {echo $reportes; }?>">
        <a href="javascript:;">
          <i class="fa fa-cubes"></i>
          <span class="title">Reportes</span>
          <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
          <li class="<?php  if(!empty($rhistorial)) {echo $rhistorial; }?>">
            <a href="<?php echo site_url('') ?>demo/rHistorial">
              <i class="fa fa-file"></i>
              Historial</a>
            </li>
            <li  class="<?php  if(!empty($rPagos)) {echo $rPagos; }?>">
              <a href="<?php echo site_url('') ?>demo/rPagos">
                <i class="fa fa-money"></i>
                Pagos</a>
              </li>
              <li class="<?php  if(!empty($rCitas)) {echo $rCitas; }?>">
                <a href="<?php echo site_url('') ?>demo/rCitas">
                  <i class="fa fa-calendar"></i>
                  Agenda</a>
                </li>

              </ul>
            </li>

            <li class="<?php  if(!empty($admin)) {echo $admin; }?>">
              <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span class="title">Administración</span>
                <span class="arrow "></span>
              </a>
              <ul class="sub-menu">
                
                <li class="<?php  if(!empty($aprofesionales)) {echo $aprofesionales; }?>">
                  <a href="<?php echo site_url('') ?>demo/profesionales">
                    <i class="fa fa-user"></i>
                    Equipo Reparto</a>
                  </li>
                  <li class="<?php  if(!empty($aempresa)) {echo $aempresa; }?>" >
                    <a href="<?php echo site_url('') ?>demo/empresa">
                      <i class="icon-home"></i>
                      Empresa</a>
                    </li>


                  </ul>
                </li>


                <li class="<?php  if(!empty($inventario)) {echo $inventario; }?>">
                  <a href="javascript:;">
                    <i class="fa icon-basket"></i>
                    <span class="title">Inventario</span>
                    <span class="arrow "></span>
                  </a>
                  <ul class="sub-menu">


                    <li class="<?php  if(!empty($iexitencias)) {echo $iexitencias; }?>" >
                      <a href="<?php echo site_url('') ?>demo/exitencias">
                        <i class="icon-tag"></i>
                        Existencias</a>
                      </li>
                      <li class="<?php  if(!empty($ientradas)) {echo $ientradas; }?>" >
                      <a href="<?php echo site_url('') ?>demo/entradas">
                        <i class="fa fa-share"></i>
                        Entradas</a>
                      </li>
                      <li class="<?php  if(!empty($isalidas)) {echo $isalidas; }?>" >
                      <a href="<?php echo site_url('') ?>demo/salidas">
                        <i class="fa fa-reply"></i>
                        Salidas</a>
                      </li>

                      <li class="<?php  if(!empty($iproducto)) {echo $iproducto; }?>">
                       <a href="<?php echo site_url('') ?>demo/productos">
                        <i class="fa icon-handbag"></i>
                        Productos</a>
                      </li>




                    </ul>
                  </li>
                  <li class="<?php  if(!empty($corte)) {echo $corte; }?>">
                    <a href="javascript:;">
                      <i class="fa fa-cogs"></i>
                      <span class="title">Corte Quincenal</span>
                      <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">


                      <li class="<?php  if(!empty($cquincenas)) {echo $cquincenas; }?>" >
                        <a href="<?php echo site_url('') ?>demo/quincenas">
                          <i class="icon-home"></i>
                          Quincenas</a>
                      </li>

                        



                      </ul>
                    </li>

                  </ul>
                  <!-- END SIDEBAR MENU -->
                </div>
              </div>