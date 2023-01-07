<?php

include ("conexion.php");

$con = conectar();


date_default_timezone_set('America/Mazatlan');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- REFRESCAR PAGINA CADA 20 -->
  <meta http-equiv="refresh" content="60" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Top Sucursales</title>

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
            
            <ul class="nav nav-treeview">
              
            </ul>
          </li>
          
         
           
          <li class="nav-item">
           
            <ul class="nav nav-treeview">
              
                </ul>
              
            </ul>
          </li>
          <li class="nav-item">
          </li>
          
        </ul>
      </nav>
      
    </div>
    
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Top 15 - Sucursales </h1>
          </div>

            <div class="col-sm-6">
            
          </div>
        </div>
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

            <?php


         $fechasqlinixx = getdate();
         $fechasqlini4 = "$fechasqlinixx[year]-$fechasqlinixx[mon]-$fechasqlinixx[mday]";

         $fechasqlfinxx = getdate();
         $fechasqlfin4 = "$fechasqlfinxx[year]-$fechasqlfinxx[mon]-$fechasqlfinxx[mday]";

         

          if(!empty($_GET['fechadata4ini'])){
          $fechasqlini4 = $_GET['fechadata4ini'];
          $fechasqlfin4 = $_GET['fechadata4fin'];
          }
          ?>

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
              <form align="right" action ="" method="margin-top">
                  <input type="date" id="fechadata4ini" name="fechadata4ini" min="2021-02-01" max="2025-12-31"></input> 
                  <input type="date" id="fechadata4fin" name="fechadata4fin" ></input>
                  <button type="submit"  id="btnbuscartop" onclick="funcionbusquedadata3()">Buscar</button>
                  <h3  align="left"  id="fechadatafin" name="fechadatafin" >Fecha:  <?php echo($fechasqlini4) ?>  al <?php echo($fechasqlfin4) ?> </h3>
                  
                </form>
               <!-- SE QUITA ID DE EX<table id="example1" */class="table table-bordered table-striped"> -->
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Plaza</th>
                    <th>No_Llamadas</th>
                  </tr>
                  </thead>
                  <tbody>

                    <script>
                   
                    function funcionbusquedadata3(){
     
                     var H1 =  document.getElementById("fechadata4ini").value;
                     var H2 =  document.getElementById("fechadata4fin").value;
                    }

                  </script>

          <?php
      $sqltopsuc="SELECT
      calldate,

CASE
WHEN SUBSTR(SRC,1,6)= '800000' AND clid LIKE '%AGENTE%' THEN 'MATRIZ AGENTE CC'
WHEN SUBSTR(SRC,1,6)= '866800' AND clid LIKE '%JEFA%' THEN 'MATRIZ AGENTE CC'
WHEN SUBSTR(SRC,1,6)= '866800' AND clid LIKE '%TELEMARKETING%' THEN 'MATRIZ TELEMARKETING'
WHEN SUBSTR(SRC,1,6)= '800000' AND clid LIKE '%ANALISTA%' THEN 'MATRIZ ANALISTAS CORP'
WHEN SUBSTR(SRC,1,6)= '866800' AND clid LIKE '%ANALISTA%' THEN 'MATRIZ ANALISTAS CORP'
WHEN SUBSTR(SRC,1,6)= '866800' THEN 'MATRIZ'
WHEN SUBSTR(SRC,1,4)='8222' THEN 'PUEBLA'
WHEN SUBSTR(SRC,1,4)='8735' THEN 'CUAUTLA'
WHEN SUBSTR(SRC,1,4)='8782' THEN 'POZA RICA'
WHEN SUBSTR(SRC,1,4)='8228' THEN 'JALAPA'
WHEN SUBSTR(SRC,1,4)='8229' THEN 'VERACRUZ'
WHEN SUBSTR(SRC,1,4)='8238' THEN 'TEGUACAN'
WHEN SUBSTR(SRC,1,4)='8246' THEN 'TLAXCALA'
WHEN SUBSTR(SRC,1,4)='8271' THEN 'CORDOBA'
WHEN SUBSTR(SRC,1,4)='8272' THEN 'ORIZABA'
WHEN SUBSTR(SRC,1,4)='8311' THEN 'TEPIC'
WHEN SUBSTR(SRC,1,4)='8312' THEN 'COLIMA'
WHEN SUBSTR(SRC,1,4)='8314' THEN 'MANZANILLO'
WHEN SUBSTR(SRC,1,4)='8322' THEN 'PUERTO VALLARTA'
WHEN SUBSTR(SRC,1,4)='8333' THEN 'GUADALAJARA'
WHEN SUBSTR(SRC,1,4)='8341' THEN 'CIUDAD GUZMAN'
WHEN SUBSTR(SRC,1,4)='8373' THEN 'ZAPOTLANEJO'
WHEN SUBSTR(SRC,1,4)='8415' THEN 'SAN MIGUEL DE ALLENDE'
WHEN SUBSTR(SRC,1,4)='8427' THEN 'SAN JUAN DEL RIO'
WHEN SUBSTR(SRC,1,4)='8442' THEN 'QUERETARO'
WHEN SUBSTR(SRC,1,4)='8443' THEN 'MORELIA'
WHEN SUBSTR(SRC,1,4)='8444' THEN 'SAN LUIS POTOSI'
WHEN SUBSTR(SRC,1,4)='8445' THEN 'MOROLEON'
WHEN SUBSTR(SRC,1,4)='8449' THEN 'AGUASCALIENTES'
WHEN SUBSTR(SRC,1,4)='8452' THEN 'URUAPAN'
WHEN SUBSTR(SRC,1,4)='8461' THEN 'CELAYA'
WHEN SUBSTR(SRC,1,4)='8462' THEN 'IRAPUATO'
WHEN SUBSTR(SRC,1,4)='8473' THEN 'GUANAJUATO'
WHEN SUBSTR(SRC,1,4)='8474' THEN 'LAGOS DE MORENO'
WHEN SUBSTR(SRC,1,4)='8477' THEN 'LEON'
WHEN SUBSTR(SRC,1,4)='8492' THEN 'ZACATECAS'
WHEN SUBSTR(SRC,1,4)='8555' THEN 'MEXICO'
WHEN SUBSTR(SRC,1,4)='8612' THEN 'LA PAZ'
WHEN SUBSTR(SRC,1,4)='8613' THEN 'LORETO'
WHEN SUBSTR(SRC,1,4)='8614' THEN 'CHIHUAHUA'
WHEN SUBSTR(SRC,1,4)='8618' THEN 'DURANGO'
WHEN SUBSTR(SRC,1,4)='8622' THEN 'GUAYMAS'
WHEN SUBSTR(SRC,1,4)='8624' THEN 'SAN JOSE DEL CABO'
WHEN SUBSTR(SRC,1,4)='8625' THEN 'CUAHUTEMOC'
WHEN SUBSTR(SRC,1,4)='8631' THEN 'NOGALES'
WHEN SUBSTR(SRC,1,4)='8632' THEN 'MAGDALENA'
WHEN SUBSTR(SRC,1,4)='8633' THEN 'AGUA PRIETA'
WHEN SUBSTR(SRC,1,4)='8637' THEN 'CABORCA'
WHEN SUBSTR(SRC,1,4)='8638' THEN 'PUERTO PEÑASCO'
WHEN SUBSTR(SRC,1,4)='8639' THEN 'DELICIAS'
WHEN SUBSTR(SRC,1,4)='8641' THEN 'SANTA ANA'
WHEN SUBSTR(SRC,1,4)='8642' THEN 'NAVOJOA'
WHEN SUBSTR(SRC,1,4)='8644' THEN 'OBREGON'
WHEN SUBSTR(SRC,1,4)='8646' THEN 'ENSENADA'
WHEN SUBSTR(SRC,1,4)='8653' THEN 'SAN LUIS RIO COLORADO'
WHEN SUBSTR(SRC,1,4)='8656' THEN 'CUIDAD JUAREZ'
WHEN SUBSTR(SRC,1,4)='8662' THEN 'HERMOSILLO'
WHEN SUBSTR(SRC,1,4)='8664' THEN 'TIJUANA'
WHEN SUBSTR(SRC,1,4)='8665' THEN 'TECATE'
WHEN SUBSTR(SRC,1,4)='8667' THEN 'CULIACAN'
WHEN SUBSTR(SRC,1,4)='8668' THEN 'MATRIZ'
WHEN SUBSTR(SRC,1,4)='8668' THEN 'LOS MOCHIS'
WHEN SUBSTR(SRC,1,4)='8669' THEN 'MAZATLAN'
WHEN SUBSTR(SRC,1,4)='8673' THEN 'GUAMUCHIL'
WHEN SUBSTR(SRC,1,4)='8686' THEN 'MEXICALI'
WHEN SUBSTR(SRC,1,4)='8687' THEN 'GUASAVE'
WHEN SUBSTR(SRC,1,4)='8722' THEN 'TOLUCA'
WHEN SUBSTR(SRC,1,4)='8733' THEN 'IGUALA'
WHEN SUBSTR(SRC,1,4)='8744' THEN 'ACAPULCO'
WHEN SUBSTR(SRC,1,4)='8747' THEN 'CHILPANCINGO'
WHEN SUBSTR(SRC,1,4)='8771' THEN 'PACHUCA'
WHEN SUBSTR(SRC,1,4)='8777' THEN 'CUERNAVACA'
WHEN SUBSTR(SRC,1,4)='8783' THEN 'TUXPAN VERACRUZ'
WHEN SUBSTR(SRC,1,4)='8818' THEN 'MONTERREY'
WHEN SUBSTR(SRC,1,4)='8833' THEN 'TAMPICO'
WHEN SUBSTR(SRC,1,4)='8834' THEN 'CIUDAD VICTORIA'
WHEN SUBSTR(SRC,1,4)='8844' THEN 'SALTILLO'
WHEN SUBSTR(SRC,1,4)='8866' THEN 'MONCLOVA'
WHEN SUBSTR(SRC,1,4)='8867' THEN 'NUEVO LARENO'
WHEN SUBSTR(SRC,1,4)='8868' THEN 'MATAMOROS'
WHEN SUBSTR(SRC,1,4)='8871' THEN 'TORREON'
WHEN SUBSTR(SRC,1,4)='8899' THEN 'REYNOSA'
WHEN SUBSTR(SRC,1,4)='8921' THEN 'COATZACOALCOS'
WHEN SUBSTR(SRC,1,4)='8938' THEN 'CUIDAD DEL CARMEN'
WHEN SUBSTR(SRC,1,4)='8951' THEN 'OAXACA'
WHEN SUBSTR(SRC,1,4)='8961' THEN 'TUXTLA GUTIERREZ'
WHEN SUBSTR(SRC,1,4)='8962' THEN 'TAPACHULA'
WHEN SUBSTR(SRC,1,4)='8981' THEN 'CAMPECHE'
WHEN SUBSTR(SRC,1,4)='8984' THEN 'PLAYA DEL CARMEN'
WHEN SUBSTR(SRC,1,4)='8993' THEN 'VILLAHERMOSA'
WHEN SUBSTR(SRC,1,4)='8998' THEN 'CANCUN'
WHEN SUBSTR(SRC,1,4)='8999' THEN 'MERIDA'
WHEN SUBSTR(SRC,1,4)='8474' THEN 'LAGOS DE MORENO'
WHEN SUBSTR(SRC,1,4)='8228' THEN 'JALAPA'
WHEN SUBSTR(SRC,1,4)='8627' THEN 'PARRAL'
WHEN SUBSTR(SRC,1,4)='8645' THEN 'CANANEA'
WHEN SUBSTR(SRC,1,4)='8983' THEN 'CHETUMAL'

WHEN SUBSTR(SRC,1,4)='8933' THEN 'PUERTO PARAISO'
WHEN SUBSTR(SRC,1,4)='8967' THEN 'SAN CRISTOBAL DE LAS CASAS'
WHEN SUBSTR(SRC,1,4)='8773' THEN 'TULA DE ALLENDE'
WHEN SUBSTR(SRC,1,4)='8476' THEN 'SAN FRANCISCO DEL RINCON'
WHEN SUBSTR(SRC,1,4)='8378' THEN 'TEPATITLAN'
WHEN SUBSTR(SRC,1,10)       THEN 'NUMERO EXTERNO'
WHEN SUBSTR(SRC,1,0)=''     THEN 'SIN NUMERO'

ELSE
'OTRO'
END SUCURSAL,

COUNT(calldate) TOTAL
      FROM (
       SELECT distinct (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
              clid, src, dcontext, dst, channel, null 'dstchannel',
              lastapp, lastdata,
              (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'duration',
              (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'billsec',
              disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
         FROM cdr cdr1
        WHERE CALLDATE BETWEEN CONCAT('$fechasqlini4', ' 00:00:00') AND CONCAT('$fechasqlfin4', ' 23:59:00')
              AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
              AND dst IN ('866800411', '866800413', '866800414')
              AND disposition = 'BUSY'
              AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini4', ' 00:00:00') AND CONCAT('$fechasqlfin4', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411', '866800413', '866800414') AND disposition IN ('ANSWERED','NO ANSWER','FAILED'))
   UNION
       SELECT distinct (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
              clid, src, dcontext, dst, channel, null 'dstchannel',
              lastapp, lastdata,
              (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'duration',
              (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'billsec',
              disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
         FROM cdr cdr1
        WHERE CALLDATE BETWEEN CONCAT('$fechasqlini4', ' 00:00:00') AND CONCAT('$fechasqlfin4', ' 23:59:00')
          AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
          AND dst IN ('866800411', '866800413', '866800414')
          AND disposition = 'NO ANSWER'
          AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini4', ' 00:00:00') AND CONCAT('$fechasqlfin4', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411', '866800413', '866800414') AND disposition IN ('ANSWERED','BUSY','FAILED'))
   UNION
   SELECT (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
              clid, src, dcontext, dst, channel, null 'dstchannel',
              lastapp, lastdata,
              (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'duration',
              (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'billsec',
              disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
         FROM cdr cdr1
        WHERE CALLDATE BETWEEN CONCAT('$fechasqlini4', ' 00:00:00') AND CONCAT('$fechasqlfin4', ' 23:59:00')
          AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
          AND dst IN ('866800411', '866800413', '866800414')
          AND disposition = 'FAILED'
          AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini4', ' 00:00:00') AND CONCAT('$fechasqlfin4', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411', '866800413', '866800414') AND disposition IN ('ANSWERED','NO ANSWER','BUSY'))
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
        WHERE CALLDATE BETWEEN CONCAT('$fechasqlini4', ' 00:00:00') AND CONCAT('$fechasqlfin4', ' 23:59:00')
          AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
          AND dst IN ('866800411', '866800413', '866800414')
          AND cdr1.billsec>4
          ) DATA
          WHERE  disposition = 'ANSWERED'
          AND billsec>4
          GROUP BY CASE
          WHEN SUBSTR(SRC,1,6)= '800000' AND clid LIKE '%AGENTE%' THEN 'MATRIZ AGENTE CC'
WHEN SUBSTR(SRC,1,6)= '866800' AND clid LIKE '%JEFA%' THEN 'MATRIZ AGENTE CC'
WHEN SUBSTR(SRC,1,6)= '866800' AND clid LIKE '%TELEMARKETING%' THEN 'MATRIZ TELEMARKETING'
WHEN SUBSTR(SRC,1,6)= '800000' AND clid LIKE '%ANALISTA%' THEN 'MATRIZ ANALISTAS CORP'
WHEN SUBSTR(SRC,1,6)= '866800' AND clid LIKE '%ANALISTA%' THEN 'MATRIZ ANALISTAS CORP'
WHEN SUBSTR(SRC,1,6)= '866800' THEN 'MATRIZ'
WHEN SUBSTR(SRC,1,4)='8222' THEN 'PUEBLA'
WHEN SUBSTR(SRC,1,4)='8735' THEN 'CUAUTLA'
WHEN SUBSTR(SRC,1,4)='8782' THEN 'POZA RICA'
WHEN SUBSTR(SRC,1,4)='8228' THEN 'JALAPA'
WHEN SUBSTR(SRC,1,4)='8229' THEN 'VERACRUZ'
WHEN SUBSTR(SRC,1,4)='8238' THEN 'TEGUACAN'
WHEN SUBSTR(SRC,1,4)='8246' THEN 'TLAXCALA'
WHEN SUBSTR(SRC,1,4)='8271' THEN 'CORDOBA'
WHEN SUBSTR(SRC,1,4)='8272' THEN 'ORIZABA'
WHEN SUBSTR(SRC,1,4)='8311' THEN 'TEPIC'
WHEN SUBSTR(SRC,1,4)='8312' THEN 'COLIMA'
WHEN SUBSTR(SRC,1,4)='8314' THEN 'MANZANILLO'
WHEN SUBSTR(SRC,1,4)='8322' THEN 'PUERTO VALLARTA'
WHEN SUBSTR(SRC,1,4)='8333' THEN 'GUADALAJARA'
WHEN SUBSTR(SRC,1,4)='8341' THEN 'CIUDAD GUZMAN'
WHEN SUBSTR(SRC,1,4)='8373' THEN 'ZAPOTLANEJO'
WHEN SUBSTR(SRC,1,4)='8415' THEN 'SAN MIGUEL DE ALLENDE'
WHEN SUBSTR(SRC,1,4)='8427' THEN 'SAN JUAN DEL RIO'
WHEN SUBSTR(SRC,1,4)='8442' THEN 'QUERETARO'
WHEN SUBSTR(SRC,1,4)='8443' THEN 'MORELIA'
WHEN SUBSTR(SRC,1,4)='8444' THEN 'SAN LUIS POTOSI'
WHEN SUBSTR(SRC,1,4)='8445' THEN 'MOROLEON'
WHEN SUBSTR(SRC,1,4)='8449' THEN 'AGUASCALIENTES'
WHEN SUBSTR(SRC,1,4)='8452' THEN 'URUAPAN'
WHEN SUBSTR(SRC,1,4)='8461' THEN 'CELAYA'
WHEN SUBSTR(SRC,1,4)='8462' THEN 'IRAPUATO'
WHEN SUBSTR(SRC,1,4)='8473' THEN 'GUANAJUATO'
WHEN SUBSTR(SRC,1,4)='8474' THEN 'LAGOS DE MORENO'
WHEN SUBSTR(SRC,1,4)='8477' THEN 'LEON'
WHEN SUBSTR(SRC,1,4)='8492' THEN 'ZACATECAS'
WHEN SUBSTR(SRC,1,4)='8555' THEN 'MEXICO'
WHEN SUBSTR(SRC,1,4)='8612' THEN 'LA PAZ'
WHEN SUBSTR(SRC,1,4)='8613' THEN 'LORETO'
WHEN SUBSTR(SRC,1,4)='8614' THEN 'CHIHUAHUA'
WHEN SUBSTR(SRC,1,4)='8618' THEN 'DURANGO'
WHEN SUBSTR(SRC,1,4)='8622' THEN 'GUAYMAS'
WHEN SUBSTR(SRC,1,4)='8624' THEN 'SAN JOSE DEL CABO'
WHEN SUBSTR(SRC,1,4)='8625' THEN 'CUAHUTEMOC'
WHEN SUBSTR(SRC,1,4)='8631' THEN 'NOGALES'
WHEN SUBSTR(SRC,1,4)='8632' THEN 'MAGDALENA'
WHEN SUBSTR(SRC,1,4)='8633' THEN 'AGUA PRIETA'
WHEN SUBSTR(SRC,1,4)='8637' THEN 'CABORCA'
WHEN SUBSTR(SRC,1,4)='8638' THEN 'PUERTO PEÑASCO'
WHEN SUBSTR(SRC,1,4)='8639' THEN 'DELICIAS'
WHEN SUBSTR(SRC,1,4)='8641' THEN 'SANTA ANA'
WHEN SUBSTR(SRC,1,4)='8642' THEN 'NAVOJOA'
WHEN SUBSTR(SRC,1,4)='8644' THEN 'OBREGON'
WHEN SUBSTR(SRC,1,4)='8646' THEN 'ENSENADA'
WHEN SUBSTR(SRC,1,4)='8653' THEN 'SAN LUIS RIO COLORADO'
WHEN SUBSTR(SRC,1,4)='8656' THEN 'CUIDAD JUAREZ'
WHEN SUBSTR(SRC,1,4)='8662' THEN 'HERMOSILLO'
WHEN SUBSTR(SRC,1,4)='8664' THEN 'TIJUANA'
WHEN SUBSTR(SRC,1,4)='8665' THEN 'TECATE'
WHEN SUBSTR(SRC,1,4)='8667' THEN 'CULIACAN'
WHEN SUBSTR(SRC,1,4)='8668' THEN 'MATRIZ'
WHEN SUBSTR(SRC,1,4)='8668' THEN 'LOS MOCHIS'
WHEN SUBSTR(SRC,1,4)='8669' THEN 'MAZATLAN'
WHEN SUBSTR(SRC,1,4)='8673' THEN 'GUAMUCHIL'
WHEN SUBSTR(SRC,1,4)='8686' THEN 'MEXICALI'
WHEN SUBSTR(SRC,1,4)='8687' THEN 'GUASAVE'
WHEN SUBSTR(SRC,1,4)='8722' THEN 'TOLUCA'
WHEN SUBSTR(SRC,1,4)='8733' THEN 'IGUALA'
WHEN SUBSTR(SRC,1,4)='8744' THEN 'ACAPULCO'
WHEN SUBSTR(SRC,1,4)='8747' THEN 'CHILPANCINGO'
WHEN SUBSTR(SRC,1,4)='8771' THEN 'PACHUCA'
WHEN SUBSTR(SRC,1,4)='8777' THEN 'CUERNAVACA'
WHEN SUBSTR(SRC,1,4)='8783' THEN 'TUXPAN VERACRUZ'
WHEN SUBSTR(SRC,1,4)='8818' THEN 'MONTERREY'
WHEN SUBSTR(SRC,1,4)='8833' THEN 'TAMPICO'
WHEN SUBSTR(SRC,1,4)='8834' THEN 'CIUDAD VICTORIA'
WHEN SUBSTR(SRC,1,4)='8844' THEN 'SALTILLO'
WHEN SUBSTR(SRC,1,4)='8866' THEN 'MONCLOVA'
WHEN SUBSTR(SRC,1,4)='8867' THEN 'NUEVO LARENO'
WHEN SUBSTR(SRC,1,4)='8868' THEN 'MATAMOROS'
WHEN SUBSTR(SRC,1,4)='8871' THEN 'TORREON'
WHEN SUBSTR(SRC,1,4)='8899' THEN 'REYNOSA'
WHEN SUBSTR(SRC,1,4)='8921' THEN 'COATZACOALCOS'
WHEN SUBSTR(SRC,1,4)='8938' THEN 'CUIDAD DEL CARMEN'
WHEN SUBSTR(SRC,1,4)='8951' THEN 'OAXACA'
WHEN SUBSTR(SRC,1,4)='8961' THEN 'TUXTLA GUTIERREZ'
WHEN SUBSTR(SRC,1,4)='8962' THEN 'TAPACHULA'
WHEN SUBSTR(SRC,1,4)='8981' THEN 'CAMPECHE'
WHEN SUBSTR(SRC,1,4)='8984' THEN 'PLAYA DEL CARMEN'
WHEN SUBSTR(SRC,1,4)='8993' THEN 'VILLAHERMOSA'
WHEN SUBSTR(SRC,1,4)='8998' THEN 'CANCUN'
WHEN SUBSTR(SRC,1,4)='8999' THEN 'MERIDA'
WHEN SUBSTR(SRC,1,4)='8474' THEN 'LAGOS DE MORENO'
WHEN SUBSTR(SRC,1,4)='8228' THEN 'JALAPA'
WHEN SUBSTR(SRC,1,4)='8627' THEN 'PARRAL'
WHEN SUBSTR(SRC,1,4)='8645' THEN 'CANANEA'
WHEN SUBSTR(SRC,1,4)='8983' THEN 'CHETUMAL'

WHEN SUBSTR(SRC,1,4)='8933' THEN 'PUERTO PARAISO'
WHEN SUBSTR(SRC,1,4)='8967' THEN 'SAN CRISTOBAL DE LAS CASAS'
WHEN SUBSTR(SRC,1,4)='8773' THEN 'TULA DE ALLENDE'
WHEN SUBSTR(SRC,1,4)='8476' THEN 'SAN FRANCISCO DEL RINCON'
WHEN SUBSTR(SRC,1,4)='8378' THEN 'TEPATITLAN'
WHEN SUBSTR(SRC,1,10)       THEN 'NUMERO EXTERNO'
WHEN SUBSTR(SRC,1,0)=''     THEN 'SIN NUMERO'
ELSE
'OTRO'
END
ORDER BY TOTAL DESC";

  
$resul=mysqli_query($con,$sqltopsuc);
 mysqli_close($con);

 for($mostrar = 1;$mostrar<=15;$mostrar++){
 $res=mysqli_fetch_array($resul);
  
if($res==null){
   ?>
<?php
   }else{?>
 <tr>
 <td> <?php echo $mostrar;?></td>
<td> <?php echo $res[1];?></td>
 <td> <?php echo $res[2];?></td>
                            
                       </tr> 
                   
                  <?php }}  ?>  
                            
                   

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
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print" ]
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
