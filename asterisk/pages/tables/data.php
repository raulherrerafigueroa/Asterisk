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
  <title>Llamadas</title>

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
              <li class="nav-item">
                <a href="../tables/data11.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Despliegues</p>
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
              <!--
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>-->
             
             
              
            </ul>
          </li>
          
          <li class="nav-item">
            <!-- <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a> -->
          </li>
          <!-- <li class="nav-header">LABELS</li>
          
        -->
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Llamadas por Agente </h1>
          </div>

<?php

         $fechasqlini = getdate();
        $fechasqlini1 = "$fechasqlini[year]-$fechasqlini[mon]-$fechasqlini[mday]";

         $fechasqlfin = getdate();
         $fechasqlfin2 = "$fechasqlfin[year]-$fechasqlfin[mon]-$fechasqlfin[mday]";

         
         

         if (!empty($_GET['fechadataini'])) {

          $fechasqlini1 = $_GET['fechadataini'];
          $fechasqlfin2 = $_GET['fechadatafin'];
           }


                        $sqlduracion="SELECT
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
      WHEN dstchannel LIKE '%8-668-00-442%' THEN 'A.GRIJALVA'
      WHEN dstchannel LIKE '%8-668-00-478%' THEN 'C.APODACA'
      WHEN dstchannel LIKE '%8-668-00-479%' THEN 'G.PADILLA'
      WHEN dstchannel LIKE '%8-668-00-480%' THEN 'R.HERRERA'     
      WHEN dstchannel LIKE '%8-668-00-481%' THEN 'E.OSUNA'
      WHEN dstchannel LIKE '%8-668-00-482%' THEN 'A.ZAMORA'          
      WHEN dstchannel LIKE '%8-668-00-483%' THEN 'H.GALAVIZ'  
      WHEN dstchannel LIKE '%8-668-00-484%' THEN 'B.ROSAS'
      WHEN dstchannel LIKE '%8-668-00-180%' THEN 'M.GALAVIZ'
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
           AND dst IN ('866800411')
           AND disposition = 'BUSY'
           AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411','866800445') AND disposition IN ('ANSWERED','NO ANSWER','FAILED'))
UNION
    SELECT distinct (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
           clid, src, dcontext, dst, channel, null 'dstchannel',
           lastapp, lastdata,
           (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) - (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'duration',
           (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'billsec',
           disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
      FROM cdr cdr1
     WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
       AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
       AND dst IN ('866800411')
       AND disposition = 'NO ANSWER'
       AND cdr1.billsec > 9
       AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') /*AND dst IN ('866800411','866800445','866800448','866800421','866800423','866800482')*/ AND disposition IN ('ANSWERED','FAILED'))
UNION
    SELECT (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
           clid, src, dcontext, dst, channel, null 'dstchannel',
           lastapp, lastdata,
           (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) - (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'duration',
           (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'billsec',
           disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
      FROM cdr cdr1
     WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
       AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
       AND dst IN ('866800411')
       AND disposition = 'FAILED'
       AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411') AND disposition IN ('ANSWERED','NO ANSWER','BUSY'))
UNION
    SELECT (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
           clid, src, dcontext, dst, channel,
           CASE 
           WHEN dstchannel LIKE '%ASTERISK%' THEN 'Celular'
           WHEN dstchannel LIKE '%EC500%' THEN 'Celular'
           ELSE dstchannel
           END 'dstchannel',
           lastapp, lastdata,
           (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) - (SELECT ifnull(max(billsec),0) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'duration',
           (SELECT ifnull(max(billsec),0) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'billsec',
           disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
      FROM cdr cdr1
     WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
       AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
       AND dst IN ('866800411')
       AND disposition = 'ANSWERED'
       AND (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) - (SELECT ifnull(max(billsec),0) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') >4
UNION
    SELECT (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
           clid, src, dcontext, dst, channel, null 'dstchannel',
           lastapp, lastdata,
           (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) - (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'duration',
           (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'billsec',
           'FAILED', amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
      FROM cdr cdr1
     WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
       AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
       AND dst IN ('866800411')
       AND disposition = 'ANSWERED'
       AND billsec = 0
       AND lastapp != 'Playback'
       AND clid NOT LIKE '%SERVICIOS TI%'
       AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411') AND disposition IN ('ANSWERED','NO ANSWER','BUSY') AND billsec > '0')

) data
WHERE  disposition = 'ANSWERED'
AND dstchannel NOT IN ('SALIENTES','Servicios TI') 
ORDER BY calldate DESC
";

$resultadoduracion=mysqli_query($con,$sqlduracion);
//mysqli_close($con);

$numllamadas = 0;
$duraciontotalseg = 0;

if(mysqli_fetch_array($resultadoduracion)){
  
while ($mostrar =mysqli_fetch_array($resultadoduracion)){ 
        $duraciontotalseg = $duraciontotalseg + $mostrar[10];
        
        $numllamadas ++;
        } 

        $tiempototalagetes = $duraciontotalseg/$numllamadas;

        $tiempoenminutos = $tiempototalagetes /60;

        $tiempoensegundos = (int)$tiempototalagetes-((int)$tiempoenminutos*60);
        }else {$tiempoenminutos= 0; $tiempoensegundos=0;}
    ?>
            <div class="col-sm-6">
            <h1>Duracion Promedio de Llamada Diaria: 
            <?php echo (int)$tiempoenminutos;?> Minutos <?php echo $tiempoensegundos?> Segundos  
            <?php /*echo number_format((float)$tiempoenminutos,2,'.','');*/?>  </h1>
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

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <form align="right" action ="" method="margin-top">
                  <input type="date" id="fechadataini" name="fechadataini" min="2021-02-01" max="2025-12-31"></input> 
                  <input type="date" id="fechadatafin" name="fechadatafin" ></input>
                  <button type="submit"  id="btnbuscar" onclick="funcionbusquedadata()">Buscar</button>
                  <h3  align="left"  id="fechadatafin" name="fechadatafin" >Fecha:  <?php echo($fechasqlini1) ?>  al <?php echo($fechasqlfin2) ?> </h3>
                  
                </form>
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Agente</th>
                    <th>No_Llamadas</th>
                  </tr>
                  </thead>
                  <tbody>
                  <script>
                   
                    function funcionbusquedadata(){
     
                     var G1 =  document.getElementById("fechadataini").value;
                     var G2 =  document.getElementById("fechadatafin").value;
                    }
                  </script>
              
     

          <?php

          
                        $sql="SELECT
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
                          WHEN dstchannel LIKE '%8-668-00-442%' THEN 'A.GRIJALVA'
                          WHEN dstchannel LIKE '%8-668-00-478%' THEN 'C.APODACA'
                          WHEN dstchannel LIKE '%8-668-00-479%' THEN 'G.PADILLA'
                          WHEN dstchannel LIKE '%8-668-00-480%' THEN 'R.HERRERA'     
                          WHEN dstchannel LIKE '%8-668-00-481%' THEN 'E.OSUNA'
                          WHEN dstchannel LIKE '%8-668-00-482%' THEN 'A.ZAMORA'          
                          WHEN dstchannel LIKE '%8-668-00-483%' THEN 'H.GALAVIZ'  
                          WHEN dstchannel LIKE '%8-668-00-484%' THEN 'B.ROSAS'
                          WHEN dstchannel LIKE '%8-668-00-180%' THEN 'M.GALAVIZ'
                          WHEN dstchannel LIKE '%8-668-00-443%' THEN 'O.BELTRAN'
                          WHEN dstchannel LIKE '%8-668-00-444%' THEN 'A.MARTINEZ'
                          WHEN dstchannel LIKE '%8-668-00-415%' THEN 'JA.CHAVARIN'
                          WHEN dstchannel LIKE '%IAX2/ASTERISK%' THEN 'SALIENTES'
                          WHEN dstchannel LIKE '%8-668-00-485%' THEN 'J.COTA'
                          WHEN dstchannel LIKE '%SERVICIOS-TI%' THEN 'Servicios TI'
                          WHEN dstchannel LIKE '%SIP/8-668-00-421%' THEN 'Servicios TI'
                          WHEN lastapp = 'Playback' THEN 'IVR'
                       ELSE
                          'NO_IDENTIFICADO'
                       END AGENTE, COUNT(CALLDATE) CONTAR
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
           AND dst IN ('866800411')
           AND disposition = 'BUSY'
           AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411','866800445') AND disposition IN ('ANSWERED','NO ANSWER','FAILED'))
UNION
    SELECT distinct (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
           clid, src, dcontext, dst, channel, null 'dstchannel',
           lastapp, lastdata,
           (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) - (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'duration',
           (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'billsec',
           disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
      FROM cdr cdr1
     WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
       AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
       AND dst IN ('866800411')
       AND disposition = 'NO ANSWER'
       AND cdr1.billsec > 9
       AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') /*AND dst IN ('866800411','866800445','866800448','866800421','866800423','866800482')*/ AND disposition IN ('ANSWERED','FAILED'))
UNION
    SELECT (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
           clid, src, dcontext, dst, channel, null 'dstchannel',
           lastapp, lastdata,
           (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) - (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'duration',
           (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'billsec',
           disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
      FROM cdr cdr1
     WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
       AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
       AND dst IN ('866800411')
       AND disposition = 'FAILED'
       AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411') AND disposition IN ('ANSWERED','NO ANSWER','BUSY'))
UNION
    SELECT (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
           clid, src, dcontext, dst, channel,
           CASE 
           WHEN dstchannel LIKE '%ASTERISK%' THEN 'Celular'
           WHEN dstchannel LIKE '%EC500%' THEN 'Celular'
           ELSE dstchannel
           END 'dstchannel',
           lastapp, lastdata,
           (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) - (SELECT ifnull(max(billsec),0) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'duration',
           (SELECT ifnull(max(billsec),0) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') 'billsec',
           disposition, amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
      FROM cdr cdr1
     WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
       AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
       AND dst IN ('866800411')
       AND disposition = 'ANSWERED'
       AND (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) - (SELECT ifnull(max(billsec),0) FROM cdr WHERE uniqueid = cdr1.uniqueid AND disposition = 'NO ANSWER') >4
UNION
    SELECT (SELECT max(calldate) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'calldate',
           clid, src, dcontext, dst, channel, null 'dstchannel',
           lastapp, lastdata,
           (SELECT max(duration) FROM cdr WHERE uniqueid = cdr1.uniqueid) - (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'duration',
           (SELECT max(billsec) FROM cdr WHERE uniqueid = cdr1.uniqueid) 'billsec',
           'FAILED', amaflags, accountcode, uniqueid, userfield, peeraccount, linkedid, route_rate, recording_filename, recording_status, recording_path
      FROM cdr cdr1
     WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00')
       AND dcontext IN ('INTERNAL', 'SERVICIOS-TI')
       AND dst IN ('866800411')
       AND disposition = 'ANSWERED'
       AND billsec = 0
       AND lastapp != 'Playback'
       AND clid NOT LIKE '%SERVICIOS TI%'
       AND cdr1.uniqueid NOT IN (SELECT DISTINCT uniqueid FROM cdr WHERE CALLDATE BETWEEN CONCAT('$fechasqlini1', ' 00:00:00') AND CONCAT('$fechasqlfin2', ' 23:59:00') AND dcontext IN ('INTERNAL', 'SERVICIOS-TI') AND dst IN ('866800411') AND disposition IN ('ANSWERED','NO ANSWER','BUSY') AND billsec > '0')

) data
GROUP BY CASE
                          WHEN dstchannel LIKE '%866800411%' THEN 'GUARDIA'
                          WHEN dstchannel LIKE '%8-668-00-413%' THEN 'P.GRAJEDA'
                          WHEN dstchannel LIKE '%8-668-00-414%' THEN 'I.MONTOYA'
                          WHEN dstchannel LIKE '%8-668-00-471%' THEN 'O.GALAVIZ'
                          WHEN dstchannel LIKE '%8-668-00-472%' THEN 'JL.LARA'
                          WHEN dstchannel LIKE '%8-668-00-473%' THEN 'JA.TORRES'
                          WHEN dstchannel LIKE '%8-668-00-474%' THEN 'O.ECHAVE'
                          WHEN dstchannel LIKE '%8-668-00-475%' THEN 'J.DAVALOS'
                          WHEN dstchannel LIKE '%8-668-00-476%' THEN 'M.MORALES'
                          WHEN dstchannel LIKE '%8-668-00-442%' THEN 'A.GRIJALVA'
                          WHEN dstchannel LIKE '%8-668-00-478%' THEN 'C.APODACA'
                          WHEN dstchannel LIKE '%8-668-00-479%' THEN 'G.PADILLA'
                          WHEN dstchannel LIKE '%8-668-00-480%' THEN 'R.HERRERA'     
                          WHEN dstchannel LIKE '%8-668-00-481%' THEN 'E.OSUNA'
                          WHEN dstchannel LIKE '%8-668-00-482%' THEN 'A.ZAMORA'          
                          WHEN dstchannel LIKE '%8-668-00-483%' THEN 'H.GALAVIZ'  
                          WHEN dstchannel LIKE '%8-668-00-484%' THEN 'B.ROSAS'
                          WHEN dstchannel LIKE '%8-668-00-180%' THEN 'M.GALAVIZ'
                          WHEN dstchannel LIKE '%8-668-00-443%' THEN 'O.BELTRAN'
                          WHEN dstchannel LIKE '%8-668-00-444%' THEN 'A.MARTINEZ'
                          WHEN dstchannel LIKE '%8-668-00-415%' THEN 'JA.CHAVARIN'
                          WHEN dstchannel LIKE '%IAX2/ASTERISK%' THEN 'SALIENTES'
                          WHEN dstchannel LIKE '%8-668-00-485%' THEN 'J.COTA'
                          WHEN dstchannel LIKE '%SERVICIOS-TI%' THEN 'Servicios TI'
                          WHEN dstchannel LIKE '%SIP/8-668-00-421%' THEN 'Servicios TI'
                          WHEN lastapp = 'Playback' THEN 'IVR'
                       ELSE
                          'NO_IDENTIFICADO'
                       END
                           ORDER BY CONTAR DESC";



$resul=mysqli_query($con,$sql);

$SUMA = 0;
while ($mostrar =mysqli_fetch_array($resul)){ ?>
 <tr>
 <td> <?php echo $mostrar[0]?></td>

 <td> <?php echo $mostrar[1]?></td>
 <?php $SUMA = $SUMA + $mostrar[1];?>
 
                <?php } ?>    
                  </tr>
                  <tr>
                  <td> <b>Total:</b></td>
                  <td > <b> <?php echo $SUMA?> </b></td>
                  </tr>
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

            <div class="card">
              
              <!-- /.card-header -->
              
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
