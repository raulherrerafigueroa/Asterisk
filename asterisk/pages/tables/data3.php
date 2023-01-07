<?php

include ("conexion.php");

$con = conectar();

date_default_timezone_set('America/Mazatlan');


?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- REFRESCAR PAGINA CADA 20 -->
  <meta http-equiv="refresh" content="120" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro de llamadas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <!--<a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a> -->
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a> 
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <!--<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>-->
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Servicios TI - 411</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tablas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="../tables/data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Llamadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Itop</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../tables/data3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro Llamadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data4.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Sucursales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data5.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Incidentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data6.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Requerimientos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data7.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Llamadas por Hora</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data8.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Llamadas Perdidas</p>
                </a>
              </li>
              </li><li class="nav-item">
                <a href="../tables/data9.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ciclos de Pruebas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data10.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Correos por Agente</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Graficas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/grafica1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Llamadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/grafica2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Itop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/grafica3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Llamadas por Hora</p>
                </a>
              </li>
            </ul>
          </li>
        
          
           
          <li class="nav-item">
            
            <ul class="nav nav-treeview">
              
            </ul>
          </li>
          <li class="nav-item">
            <!--<a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a> -->
            <ul class="nav nav-treeview">
             
            </ul>
          </li>
          
          <li class="nav-item">
            
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
                 
            <h1>Registro de llamadas</h1>
          


           <!-- <div class="col-sm-6">
            <h1>Duracion Promedio de Llamada Diaria: 
            <?php /*echo (int)$tiempoenminutos;?> Minutos <?php echo $tiempoensegundos?> Segundos  
            <?php /*echo number_format((float)$tiempoenminutos,2,'.','');*/?>  </h1>
          </div>-->
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              

            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>


  <!-- SEGUNTA TABLA -->

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          

         
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <!--  <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>-->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              

            </div>
            <!-- /.card -->

            <?php


            $fechasqliniww = getdate();
            $fechasqlini1 = "$fechasqliniww[year]-$fechasqliniww[mon]-$fechasqliniww[mday]";

            $fechasqlfinww = getdate();
          $fechasqlfin2 = "$fechasqlfinww[year]-$fechasqlfinww[mon]-$fechasqlfinww[mday]";



          if(!empty($_GET['fechadata2ini'])){
          $fechasqlini1 = $_GET['fechadata2ini'];
          $fechasqlfin2 = $_GET['fechadata2fin'];
           }
          ?>


            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
               <!-- SE QUITA ID DE EX<table id="example1" */class="table table-bordered table-striped"> -->
               <form  align="right"  action ="" method="margin-top">
                  <input type="date" id="fechadata2ini" name="fechadata2ini" min="2021-02-01" max="2025-12-31"></input> 
                  <input type="date" id="fechadata2fin" name="fechadata2fin" ></input>
                  <button type="submit"  id="btnbuscar" onclick="funcionbusquedadata2()">Buscar</button>
                  <h3  align="left">Fecha:  <?php echo($fechasqlini1) ?>  al <?php echo($fechasqlfin2) ?> </h3>
                 
                </form>

                <table   id="example1" class="table table-bordered table-striped" >
                  <thead>
                  <tr>
                    <th>Fecha</th>
                    <th>Agente</th>
                    <th>Llamó</th>
                    <th>Duracion (Seg)</th>
                  </tr>
                  </thead>
                  <tbody>

                  <script>
                   
                    function funcionbusquedadata2(){
     
                     var G1 =  document.getElementById("fechadata2ini").value;
                     var G2 =  document.getElementById("fechadata2fin").value;
                    }
                  </script>

                 


                  <?php
                        



    
                        $sql="SELECT
   calldate,
   clid,
   src,
   dcontext,
   dst,
   channel,
   CASE
      WHEN dstchannel LIKE '%866800411%' THEN 'GUARDIA'
      WHEN dstchannel LIKE '%8-668-00-413%' THEN 'P.GRAJEDA'
      WHEN dstchannel LIKE '%8-668-00-414%' THEN 'I.MONTOYA'
      WHEN dstchannel LIKE '%8-668-00-471%' THEN 'O.GALAVIZ'
      WHEN dstchannel LIKE '%8-668-00-472%' THEN 'JL.LARA'
      WHEN dstchannel LIKE '%8-668-00-473%' THEN 'JA.TORRES'
      WHEN dstchannel LIKE '%8-668-00-474%' THEN 'O.ECHAVE'
      WHEN dstchannel LIKE '%8-668-00-475%' THEN 'J.DAVALOS'
      WHEN dstchannel LIKE '%8-668-00-476%' THEN 'M.MORALES'
      WHEN dstchannel LIKE '%8-668-00-477%' THEN 'JL.LUNA'
      WHEN dstchannel LIKE '%8-668-00-478%' THEN 'C.APODACA'
      WHEN dstchannel LIKE '%8-668-00-479%' THEN 'G.PADILLA'
      WHEN dstchannel LIKE '%8-668-00-480%' THEN 'R.HERRERA'     
      WHEN dstchannel LIKE '%8-668-00-481%' THEN 'E.OSUNA'
      WHEN dstchannel LIKE '%8-668-00-482%' THEN 'A.ZAMORA'          
      WHEN dstchannel LIKE '%8-668-00-483%' THEN 'H.GALAVIZ'  
      WHEN dstchannel LIKE '%8-668-00-484%' THEN 'B.ROSAS'
      WHEN dstchannel LIKE '%8-668-00-442%' THEN 'N.NIEBLAS'
      WHEN dstchannel LIKE '%8-668-00-443%' THEN 'O.BELTRAN'
      WHEN dstchannel LIKE '%8-668-00-444%' THEN 'A.MARTINEZ'
      WHEN dstchannel LIKE '%8-668-00-415%' THEN 'JA.CHAVARIN'
      WHEN dstchannel LIKE '%IAX2/ASTERISK%' THEN 'SALIENTES'
      WHEN dstchannel LIKE '%SERVICIOS-TI%' THEN 'Servicios TI'
      WHEN dstchannel LIKE '%8-668-00-485%' THEN 'J.COTA'
      WHEN dstchannel LIKE '%SIP/8-668-00-421%' THEN 'Servicios TI'
      WHEN lastapp = 'Playback' THEN 'IVR'
   ELSE
      'NO_IDENTIFICADO' 
   END 'AGENTE',
   dstchannel, lastapp, lastdata, duration, billsec, disposition,
   amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid,
   route_rate, recording_filename, recording_status, recording_path,
   CASE
      WHEN SUBSTR(SRC,1,6)='800000' THEN 'MATRIZ'
      WHEN SUBSTR(SRC,1,6)='822201' THEN 'PBC01'
      WHEN SUBSTR(SRC,1,6)='822202' THEN 'PBC02'
      WHEN SUBSTR(SRC,1,6)='822203' THEN 'PBC03'
      WHEN SUBSTR(SRC,1,6)='822204' THEN 'PBC04'
      WHEN SUBSTR(SRC,1,6)='822801' THEN 'JAL01'
      WHEN SUBSTR(SRC,1,6)='822901' THEN 'VER01'
      WHEN SUBSTR(SRC,1,6)='822902' THEN 'VER02'
      WHEN SUBSTR(SRC,1,6)='823801' THEN 'TCN01'
      WHEN SUBSTR(SRC,1,6)='824601' THEN 'TXA01'
      WHEN SUBSTR(SRC,1,6)='827101' THEN 'CRB01'
      WHEN SUBSTR(SRC,1,6)='827201' THEN 'OZB01'
      WHEN SUBSTR(SRC,1,6)='831101' THEN 'TPQ01'
      WHEN SUBSTR(SRC,1,6)='831201' THEN 'CLQ01'
      WHEN SUBSTR(SRC,1,6)='831202' THEN 'CLQ02'
      WHEN SUBSTR(SRC,1,6)='831401' THEN 'ZLO01'
      WHEN SUBSTR(SRC,1,6)='832201' THEN 'PVR01'
      WHEN SUBSTR(SRC,1,6)='833301' THEN 'GDL01'
      WHEN SUBSTR(SRC,1,6)='833302' THEN 'GDL02'
      WHEN SUBSTR(SRC,1,6)='833303' THEN 'GDL03'
      WHEN SUBSTR(SRC,1,6)='833304' THEN 'GDL04'
      WHEN SUBSTR(SRC,1,6)='833305' THEN 'GDL05'
      WHEN SUBSTR(SRC,1,6)='833306' THEN 'GDL06'
      WHEN SUBSTR(SRC,1,6)='833307' THEN 'GDL07'
      WHEN SUBSTR(SRC,1,6)='833308' THEN 'GDL08'
      WHEN SUBSTR(SRC,1,6)='833309' THEN 'GDL09'
      WHEN SUBSTR(SRC,1,6)='833310' THEN 'GDL10'
      WHEN SUBSTR(SRC,1,6)='833311' THEN 'GDL11'
      WHEN SUBSTR(SRC,1,6)='834101' THEN 'CGM01'
      WHEN SUBSTR(SRC,1,6)='837301' THEN 'ZPL01'
      WHEN SUBSTR(SRC,1,6)='841501' THEN 'ZMA01'
      WHEN SUBSTR(SRC,1,6)='842701' THEN 'JRI01'
      WHEN SUBSTR(SRC,1,6)='844201' THEN 'QRO01'
      WHEN SUBSTR(SRC,1,6)='844202' THEN 'QRO02'
      WHEN SUBSTR(SRC,1,6)='844203' THEN 'QRO03'
      WHEN SUBSTR(SRC,1,6)='844204' THEN 'QRO04'
      WHEN SUBSTR(SRC,1,6)='844205' THEN 'QRO05'
      WHEN SUBSTR(SRC,1,6)='844301' THEN 'MLM01'
      WHEN SUBSTR(SRC,1,6)='844302' THEN 'MLM02'
      WHEN SUBSTR(SRC,1,6)='844401' THEN 'SLP01'
      WHEN SUBSTR(SRC,1,6)='844402' THEN 'SLP02'
      WHEN SUBSTR(SRC,1,6)='844501' THEN 'MRL01'
      WHEN SUBSTR(SRC,1,6)='844901' THEN 'AGU01'
      WHEN SUBSTR(SRC,1,6)='844902' THEN 'AGU02'
      WHEN SUBSTR(SRC,1,6)='844903' THEN 'AGU03'
      WHEN SUBSTR(SRC,1,6)='845201' THEN 'UPN01'
      WHEN SUBSTR(SRC,1,6)='846101' THEN 'CEL01'
      WHEN SUBSTR(SRC,1,6)='846201' THEN 'IRA01'
      WHEN SUBSTR(SRC,1,6)='846202' THEN 'IRA02'
      WHEN SUBSTR(SRC,1,6)='847301' THEN 'GNO01'
      WHEN SUBSTR(SRC,1,6)='847401' THEN 'LDM01'
      WHEN SUBSTR(SRC,1,6)='847701' THEN 'BJX01'
      WHEN SUBSTR(SRC,1,6)='847702' THEN 'BJX02'
      WHEN SUBSTR(SRC,1,6)='847703' THEN 'BJX03'
      WHEN SUBSTR(SRC,1,6)='849201' THEN 'ZCL01'
      WHEN SUBSTR(SRC,1,6)='855501' THEN 'MEX01'
      WHEN SUBSTR(SRC,1,6)='855502' THEN 'MEX02'
      WHEN SUBSTR(SRC,1,6)='855503' THEN 'MEX03'
      WHEN SUBSTR(SRC,1,6)='855504' THEN 'MEX04'
      WHEN SUBSTR(SRC,1,6)='855505' THEN 'MEX05'
      WHEN SUBSTR(SRC,1,6)='855506' THEN 'MEX06'
      WHEN SUBSTR(SRC,1,6)='855508' THEN 'MEX08'
      WHEN SUBSTR(SRC,1,6)='855509' THEN 'MEX09'
      WHEN SUBSTR(SRC,1,6)='855510' THEN 'MEX10'
      WHEN SUBSTR(SRC,1,6)='855511' THEN 'MEX11'
      WHEN SUBSTR(SRC,1,6)='855560' THEN 'MEX60'
      WHEN SUBSTR(SRC,1,6)='861201' THEN 'LAP01'
      WHEN SUBSTR(SRC,1,6)='861301' THEN 'LTO01'
      WHEN SUBSTR(SRC,1,6)='861401' THEN 'CUU01'
      WHEN SUBSTR(SRC,1,6)='861402' THEN 'CUU02'
      WHEN SUBSTR(SRC,1,6)='861801' THEN 'DGO01'
      WHEN SUBSTR(SRC,1,6)='862201' THEN 'GYM01'
      WHEN SUBSTR(SRC,1,6)='862202' THEN 'GYM02'
      WHEN SUBSTR(SRC,1,6)='862401' THEN 'SJD01'
      WHEN SUBSTR(SRC,1,6)='862402' THEN 'SJD02'
      WHEN SUBSTR(SRC,1,6)='862501' THEN 'CUT01'
      WHEN SUBSTR(SRC,1,6)='862502' THEN 'CUT02'
      WHEN SUBSTR(SRC,1,6)='863101' THEN 'NOG01'
      WHEN SUBSTR(SRC,1,6)='863201' THEN 'MAG01'
      WHEN SUBSTR(SRC,1,6)='863301' THEN 'AGP01'
      WHEN SUBSTR(SRC,1,6)='863701' THEN 'CCA01'
      WHEN SUBSTR(SRC,1,6)='863801' THEN 'PPE01'
      WHEN SUBSTR(SRC,1,6)='863901' THEN 'DEL01'
      WHEN SUBSTR(SRC,1,6)='864101' THEN 'STT01'
      WHEN SUBSTR(SRC,1,6)='864201' THEN 'NJA01'
      WHEN SUBSTR(SRC,1,6)='864401' THEN 'CEN01'
      WHEN SUBSTR(SRC,1,6)='864601' THEN 'ENS01'
      WHEN SUBSTR(SRC,1,6)='865301' THEN 'UAC01'
      WHEN SUBSTR(SRC,1,6)='865601' THEN 'CJS01'
      WHEN SUBSTR(SRC,1,6)='866201' THEN 'HMO01'
      WHEN SUBSTR(SRC,1,6)='866202' THEN 'HMO02'
      WHEN SUBSTR(SRC,1,6)='866203' THEN 'HMO03'
      WHEN SUBSTR(SRC,1,6)='866401' THEN 'TIJ01'
      WHEN SUBSTR(SRC,1,6)='866402' THEN 'TIJ02'
      WHEN SUBSTR(SRC,1,6)='866501' THEN 'TEC01'
      WHEN SUBSTR(SRC,1,6)='866701' THEN 'CUL01'
      WHEN SUBSTR(SRC,1,6)='866702' THEN 'CUL02'
      WHEN SUBSTR(SRC,1,6)='866703' THEN 'CUL03'
      WHEN SUBSTR(SRC,1,6)='866704' THEN 'CUL04'
      WHEN SUBSTR(SRC,1,6)='866800' THEN 'MATRIZ'
      WHEN SUBSTR(SRC,1,6)='866801' THEN 'LMM01'
      WHEN SUBSTR(SRC,1,6)='866802' THEN 'LMM02'
      WHEN SUBSTR(SRC,1,6)='866803' THEN 'LMM03'
      WHEN SUBSTR(SRC,1,6)='866804' THEN 'LMM04'
      WHEN SUBSTR(SRC,1,6)='866805' THEN 'LMM05'
      WHEN SUBSTR(SRC,1,6)='866901' THEN 'MZT01'
      WHEN SUBSTR(SRC,1,6)='866902' THEN 'MZT02'
      WHEN SUBSTR(SRC,1,6)='867301' THEN 'GML01'
      WHEN SUBSTR(SRC,1,6)='868601' THEN 'MXL01'
      WHEN SUBSTR(SRC,1,6)='868602' THEN 'MXL02'
      WHEN SUBSTR(SRC,1,6)='868701' THEN 'GVE01'
      WHEN SUBSTR(SRC,1,6)='872201' THEN 'TLC01'
      WHEN SUBSTR(SRC,1,6)='872202' THEN 'TLC02'
      WHEN SUBSTR(SRC,1,6)='872203' THEN 'TLC03'
      WHEN SUBSTR(SRC,1,6)='873301' THEN 'IGW01'
      WHEN SUBSTR(SRC,1,6)='874401' THEN 'ACA01'
      WHEN SUBSTR(SRC,1,6)='874701' THEN 'CGO01'
      WHEN SUBSTR(SRC,1,6)='877101' THEN 'PCA01'
      WHEN SUBSTR(SRC,1,6)='877102' THEN 'PCA02'
      WHEN SUBSTR(SRC,1,6)='877701' THEN 'CVJ01'
      WHEN SUBSTR(SRC,1,6)='878301' THEN 'TUX01'
      WHEN SUBSTR(SRC,1,6)='881801' THEN 'MTY01'
      WHEN SUBSTR(SRC,1,6)='818011' THEN 'MTY01'
      WHEN SUBSTR(SRC,1,6)='881802' THEN 'MTY02'
      WHEN SUBSTR(SRC,1,6)='881803' THEN 'MTY03'
      WHEN SUBSTR(SRC,1,6)='881804' THEN 'MTY04'
      WHEN SUBSTR(SRC,1,6)='881805' THEN 'MTY05'
      WHEN SUBSTR(SRC,1,6)='881806' THEN 'MTY06'
      WHEN SUBSTR(SRC,1,6)='881807' THEN 'MTY07'
      WHEN SUBSTR(SRC,1,6)='881808' THEN 'MTY08'
      WHEN SUBSTR(SRC,1,6)='881809' THEN 'MTY09'
      WHEN SUBSTR(SRC,1,6)='883301' THEN 'TAM01'
      WHEN SUBSTR(SRC,1,6)='883401' THEN 'CVM01'
      WHEN SUBSTR(SRC,1,6)='884401' THEN 'SLW01'
      WHEN SUBSTR(SRC,1,6)='884402' THEN 'SLW02'
      WHEN SUBSTR(SRC,1,6)='886601' THEN 'LOV01'
      WHEN SUBSTR(SRC,1,6)='886701' THEN 'NLD01'
      WHEN SUBSTR(SRC,1,6)='886702' THEN 'NLD02'
      WHEN SUBSTR(SRC,1,6)='886801' THEN 'MAM01'
      WHEN SUBSTR(SRC,1,6)='887101' THEN 'TRC01'
      WHEN SUBSTR(SRC,1,6)='889901' THEN 'REX01'
      WHEN SUBSTR(SRC,1,6)='892101' THEN 'COA01'
      WHEN SUBSTR(SRC,1,6)='892102' THEN 'COA02'
      WHEN SUBSTR(SRC,1,6)='893801' THEN 'CME01'
      WHEN SUBSTR(SRC,1,6)='895101' THEN 'OAX01'
      WHEN SUBSTR(SRC,1,6)='895102' THEN 'OAX02'
      WHEN SUBSTR(SRC,1,6)='896101' THEN 'TGZ01'
      WHEN SUBSTR(SRC,1,6)='896201' THEN 'TAP01'
      WHEN SUBSTR(SRC,1,6)='898101' THEN 'CPE01'
      WHEN SUBSTR(SRC,1,6)='898401' THEN 'PCM01'
      WHEN SUBSTR(SRC,1,6)='899301' THEN 'VSA01'
      WHEN SUBSTR(SRC,1,6)='899801' THEN 'CUN01'
      WHEN SUBSTR(SRC,1,6)='899901' THEN 'MID01'
      WHEN SUBSTR(SRC,1,6)='899902' THEN 'MID02'
      WHEN SUBSTR(SRC,1,6)='899903' THEN 'MID03'
      WHEN SUBSTR(SRC,1,6)='844909' THEN 'AGU09'
      WHEN SUBSTR(SRC,1,6)='844908' THEN 'AGU08'
      WHEN SUBSTR(SRC,1,6)='844905' THEN 'AGU05'
      WHEN SUBSTR(SRC,1,6)='844906' THEN 'AGU06'
      WHEN SUBSTR(SRC,1,6)='844911' THEN 'AGU11'
      WHEN SUBSTR(SRC,1,6)='844907' THEN 'AGU07'
      WHEN SUBSTR(SRC,1,6)='844910' THEN 'AGU10'
      WHEN SUBSTR(SRC,1,6)='847403' THEN 'LDM03'
      WHEN SUBSTR(SRC,1,6)='822802' THEN 'JAL02'
      WHEN SUBSTR(SRC,1,6)='866403' THEN 'TIJ03'
      WHEN SUBSTR(SRC,1,6)='862701' THEN 'PAR01'
      WHEN SUBSTR(SRC,1,6)='864501' THEN 'CAN01'
      WHEN SUBSTR(SRC,1,6)='899904' THEN 'MID04'
      WHEN SUBSTR(SRC,1,6)='844206' THEN 'QRO06'
      WHEN SUBSTR(SRC,1,6)='898301' THEN 'CTM01'

      WHEN SUBSTR(SRC,1,6)='846102' THEN 'CEL02'
      WHEN SUBSTR(SRC,1,6)='893802' THEN 'CME02'
      WHEN SUBSTR(SRC,1,6)='827102' THEN 'CRB02'
      WHEN SUBSTR(SRC,1,6)='862401' THEN 'CSL01'
      WHEN SUBSTR(SRC,1,6)='873501' THEN 'CTA01'
      WHEN SUBSTR(SRC,1,6)='861301' THEN 'CUA01'
      WHEN SUBSTR(SRC,1,6)='899802' THEN 'CUN02'
      WHEN SUBSTR(SRC,1,6)='833312' THEN 'GDL12'
      WHEN SUBSTR(SRC,1,6)='847401' THEN 'LDM01'
      WHEN SUBSTR(SRC,1,6)='847402' THEN 'LDM02'
      WHEN SUBSTR(SRC,1,6)='847403' THEN 'LDM03'
      WHEN SUBSTR(SRC,1,6)='855507' THEN 'MEX07'
      WHEN SUBSTR(SRC,1,6)='855512' THEN 'MEX12'
      WHEN SUBSTR(SRC,1,6)='878201' THEN 'PAZ01'
      WHEN SUBSTR(SRC,1,6)='893301' THEN 'PPR01'
      WHEN SUBSTR(SRC,1,6)='844403' THEN 'SLP03'
      WHEN SUBSTR(SRC,1,6)='896701' THEN 'SZT01'
      WHEN SUBSTR(SRC,1,6)='883302' THEN 'TAM02'
      WHEN SUBSTR(SRC,1,6)='896202' THEN 'TAP02'
      WHEN SUBSTR(SRC,1,6)='822903' THEN 'VER03'
      WHEN SUBSTR(SRC,1,6)='877301' THEN 'TXT01'
      WHEN SUBSTR(SRC,1,6)='847601' THEN 'RIN01'
      WHEN SUBSTR(SRC,1,6)='837801' THEN 'TPT01'

   ELSE
      'OTRO'
   END SUCURSAL,
   CASE
      WHEN MONTH(CALLDATE)=1 THEN 'ENE'
      WHEN MONTH(CALLDATE)=2 THEN 'FEB'
      WHEN MONTH(CALLDATE)=3 THEN 'MAR'
      WHEN MONTH(CALLDATE)=4 THEN 'ABR'
      WHEN MONTH(CALLDATE)=5 THEN 'MAY'
      WHEN MONTH(CALLDATE)=6 THEN 'JUN'
      WHEN MONTH(CALLDATE)=7 THEN 'JUL'
      WHEN MONTH(CALLDATE)=8 THEN 'AGO'
      WHEN MONTH(CALLDATE)=9 THEN 'SEP'
      WHEN MONTH(CALLDATE)=10 THEN 'OCT'
      WHEN MONTH(CALLDATE)=11 THEN 'NOV'
      WHEN MONTH(CALLDATE)=12 THEN 'DIC'
   END MES_TXT,
   CASE
      WHEN SUBSTR(SRC,1,6)= '866800' AND clid LIKE '%AGENTE%' THEN 'MATRIZ CC'
      WHEN SUBSTR(SRC,1,6)= '866800' THEN 'MATRIZ'
      WHEN SUBSTR(SRC,1,6)= '800000' AND clid LIKE '%ANALISTA%' THEN 'MATRIZ CTA CORP'
   ELSE
      'SUCURSALES'
   END ORIGEN,
   YEAR(CALLDATE) ANO,
   MONTH(CALLDATE) MES,
   DAY(CALLDATE) DIA,
   HOUR(CALLDATE) HORA,
   WEEK(CALLDATE,1) SEMANA,
   CONCAT(ELT(WEEKDAY(CALLDATE) + 1, 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom')) AS DIA_SEMANA
   FROM (
                        SELECT distinct (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
                               clid, src, dcontext, dst, channel, null 'dstchannel',
                               lastapp, lastdata,
                               (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'duration',
                               (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'billsec',
                               disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
                          FROM cdr cdr1
                         WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
                               AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
                               AND dst IN ('866800411', '866800413', '866800414')
                               AND disposition = 'BUSY'
                               AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411', '866800413', '866800414') AND disposition IN ('ANSWERED','NO ANSWER','FAILED'))
                    UNION
                        SELECT distinct (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
                               clid, src, dcontext, dst, channel, null 'dstchannel',
                               lastapp, lastdata,
                               (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'duration',
                               (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'billsec',
                               disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
                          FROM cdr cdr1
                         WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
                           AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
                           AND dst IN ('866800411', '866800413', '866800414')
                           AND disposition = 'NO ANSWER'
                           AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411', '866800413', '866800414') AND disposition IN ('ANSWERED','BUSY','FAILED'))
                    UNION
                    SELECT (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
                               clid, src, dcontext, dst, channel, null 'dstchannel',
                               lastapp, lastdata,
                               (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'duration',
                               (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'billsec',
                               disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
                          FROM cdr cdr1
                         WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
                           AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
                           AND dst IN ('866800411', '866800413', '866800414')
                           AND disposition = 'FAILED'
                           AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411', '866800413', '866800414') AND disposition IN ('ANSWERED','NO ANSWER','BUSY'))
                    UNION
                        SELECT (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
                               clid, src, dcontext, dst, CHANNEL,
                               CASE 
                               WHEN dstchannel LIKE '%ASTERISK%' THEN 'Celular'
                               WHEN dstchannel LIKE '%EC500%' THEN 'Celular'
                               ELSE dstchannel
                               END 'dstchannel',
                               lastapp, lastdata,
                               (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'duration',
                               (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'billsec',
                               disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
                          FROM cdr cdr1
                         WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
                           AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
                           AND dst IN ('866800411', 'DIAL411','866800413', '866800414')
                           AND cdr1.billsec>4
                           ) DATA
WHERE  disposition = 'ANSWERED'
AND billsec>4 
ORDER BY calldate DESC
";

$resuladoconsulta=mysqli_query($con,$sql);
 mysqli_close($con);

 while ($mostrar =mysqli_fetch_array($resuladoconsulta)){
   # code...
 
//for($mostrar;$mostrar<=40;$mostrar++){ 
 // $res=mysqli_fetch_array($resuladoconsulta); 

   if($mostrar==null){

   ?>
<tr>
  <td> <?php echo $mostrar=""?></td>
  <td> <?php echo $mostrar=""?></td>
  <td> <?php echo $mostrar=""?></td>
  <td> <?php echo $mostrar=""?></td>
<?php
   }else{?>
 <tr>
  <td> <?php echo $mostrar[0]?></td>
 <td> <?php echo $mostrar[6]?></td>
 <td> <?php echo $mostrar[1]?></td>
 <!-- <td> <?php echo $mostrar[11]?></td>-->
<?php 

$tiempoenminutos = $mostrar[11] /60;
$tiempoensegundos = $mostrar[11]-((int)$tiempoenminutos*60);
?>

 <td> <?php echo (int)$tiempoenminutos?> Min <?php echo $tiempoensegundos?> Seg</td>
           
                            
                     </tr>  
                   
                  <?php } } ?>  

                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!--<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0
    </div> 
    <strong></strong>
  </footer>-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <footer class="main-footer">
    <strong></a></strong>
    By: Raul Herrera / Abner Zamora
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.1.0
    </div>
  </footer>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    $("#example1").DataTable({
      "responsive": false, "lengthChange": true, "autoWidth": true,
      "buttons": [/*"copy"*/,"excel", "pdf", /*"print"*/],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    //}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
</body>
</html>
