<?php

include ("conexion.php");

$con = conectar();

include ("conexionitop.php");

$conitop = conectaritop();

date_default_timezone_set('America/Mazatlan');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="refresh" content="60" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grafica Itop</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
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
      <li class="nav-item d-none d-sm-inline-block">
       <!--  <a href="../../index3.html" class="nav-link">Home</a> -->
      </li>
      <li class="nav-item d-none d-sm-inline-block">
       <!-- <a href="#" class="nav-link">Contact</a> -->
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
      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Servicios TI - 411</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
     


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
        
          <li class="nav-item">
            
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
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
            <h1>Grafica Itop</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
          
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1" > </div>
          <div class="col-md-12" >
            <!-- AREA CHART  INIIIIIIIIIIIIIICIO POSICIOOONNN 1-->


         <?php
            $fechasqlini = getdate();
        $fein = "$fechasqlini[year]-$fechasqlini[mon]-$fechasqlini[mday]";

        $fechasqlfin = getdate();
        $fefi = "$fechasqlfin[year]-$fechasqlfin[mon]-$fechasqlfin[mday]";

         
         if (!empty($_GET['fechaini'])) {

          $fein = $_GET['fechaini'];
          $fefi = $_GET['fechafin'];
           }
          ?>

            <div class="card card-success">
              <div class="card-header">

                
                <div class="col-md-1" > </div>
               
                <div class="card-tools">
              
                  <form align="" action ="" method="margin-top">
                        <input type="date" id="fechaini" name="fechaini" min="2015-11-21" max="2025-12-31"></input> 
                        <input type="date" id="fechafin" name="fechafin" ></input>
                        <button type="submit"  id="btnbuscar" onclick="funcionbusqueda()">Buscar</button>
                        <h3  align="left">Fecha:  <?php echo($fein) ?>  al <?php echo($fefi) ?> </h3>
               </form>
                </div>

                <div >
                
              </div>
              </div>
              
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>


            <!-- /.card FIIIIIIIIIIIIIIIIIIIIIIIIIIIN POSIIICIIOOONNN 1-->

            <!-- INIICIOOO POSICIOOOOOOOOOOOOOOOOOOOOOOOOOOOON 3 -->


            <div class="card card-danger" hidden="true">
              <div class="card-header">
                <h3 class="card-title">ATENCION MENSUAL POR AGENTE</h3>
                <div class="card-tools">
              
                
                </div>
                <div class="card-tools">
                  
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>


            <!-- /.card FIIIIIIIIIIIIIIIIIIIIIIIIIN  POSICIOOOON 3 -->

            <!-- PIE CHART INICIOOO POSICION 5 IIIIIIIIIIIIIIIIIIIII -->

             

                
              
              <div hidden="true">
                <canvas id="donutChart" ></canvas>
              </div>
            



          <!-- /.FIIIIIIIIINN POSICION 5 IIIIIIIIIIIIIIIIIIIII -->

          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-1" > </div>
          <div class="col-md-1" > </div>
          <div class="col-md-10">
            <!-- LINE CHART IIIIIIIIIIIIINIIIIICIO POSIICON  2 -->

            
            <div class="card card-primary" hidden="true">
              <div class="card-header">
                <h3 class="card-title">PRUEBA 1</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 300%;"></canvas>
                </div>
              </div>
            </div>


            <!-- /.card FIIIIIIIIIIIIIIIIIIIIIIIIIIN POSICIOONNNN 2 -->

            <!-- BAR CHART INIIIIIIIIICIOOO POSICION 4 -->
            
            
            <div class="card card-info" hidden="true">
              <div class="card-header">
                <h3 class="card-title">GRAFICA DE PUNTOS</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

               

          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
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
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->


<script>
  
  function funcionbusqueda(){
     
    var f1 =  document.getElementById("fechaini").value;
    var f2 =  document.getElementById("fechafin").value;
          
  }
   <?php
    
        

    /*
    $fein ='2021-08-23 00:00:00';
    $fefi ='2021-08-23 23:00:00';*/

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
      WHEN dstchannel LIKE '%8-668-00-477%' THEN 'A.GRIJALVA'
      WHEN dstchannel LIKE '%8-668-00-478%' THEN 'C.APODACA'
      WHEN dstchannel LIKE '%8-668-00-479%' THEN 'G.PADILLA'
      WHEN dstchannel LIKE '%8-668-00-480%' THEN 'R.HERRERA'     
      WHEN dstchannel LIKE '%8-668-00-481%' THEN 'E.OSUNA'
      WHEN dstchannel LIKE '%8-668-00-482%' THEN 'A.ZAMORA'          
      WHEN dstchannel LIKE '%8-668-00-483%' THEN 'H.GALAVIZ'  
      WHEN dstchannel LIKE '%8-668-00-484%' THEN 'B.ROSAS'
      WHEN dstchannel LIKE '%8-668-00-442%' THEN 'M.GALAVIZ'
      WHEN dstchannel LIKE '%8-668-00-443%' THEN 'O.BELTRAN'
      WHEN dstchannel LIKE '%8-668-00-444%' THEN 'A.MARTINEZ'
      WHEN dstchannel LIKE '%8-668-00-415%' THEN 'JA.CHAVARIN'
      WHEN dstchannel LIKE '%IAX2/ASTERISK%' THEN 'SALIENTES'
      WHEN dstchannel LIKE '%SERVICIOS-TI%' THEN 'Servicios TI'
      WHEN dstchannel LIKE '%8-668-00-485%' THEN 'J.COTA'
      WHEN dstchannel LIKE '%SIP/8-668-00-421%' THEN 'Servicios TI'
  END Atendio, count(calldate) NumLlamadas FROM cdr
 
WHERE 

calldate BETWEEN CONCAT('$fein',' 00:00:00') AND CONCAT('$fefi',' 23:59:00')

AND billsec>4 
and dcontext IN ('INTERNAL','SERVICIOS-TI') 
AND dst = '866800411'
AND disposition='ANSWERED'
group by Atendio
order by NumLlamadas DESC
";


$sqlitop="SELECT 
CASE
WHEN  agent_id = '2' THEN 'P.GRAJEDA'
      WHEN agent_id = '1600' THEN 'I.MONTOYA'
      WHEN agent_id = '5324' THEN 'H.GALAVIZ'
      WHEN agent_id = '12' THEN 'JL.LARA'
      WHEN agent_id = '825' THEN 'JA.TORRES'
      WHEN agent_id = '2954' THEN 'O.ECHAVE'
      WHEN agent_id = '8351' THEN 'J.DAVALOS'
      WHEN agent_id = '4771' THEN 'M.MORALES'
      WHEN agent_id = '3102' THEN 'JL.LUNA'
      WHEN agent_id = '3264' THEN 'C.APODACA'
      WHEN agent_id = '1794' THEN 'G.PADILLA'
      WHEN agent_id = '4503' THEN 'R.HERRERA'     
      WHEN agent_id = '5490' THEN 'E.OSUNA'
      WHEN agent_id = '2952' THEN 'A.ZAMORA'          
      WHEN agent_id = '11' THEN 'O.GALAVIZ'  
      WHEN agent_id = '6022' THEN 'B.ROSAS'
      WHEN agent_id = '8924' THEN 'N.NIEBLAS'
      WHEN agent_id = '13426' THEN 'M.GALAVIZ'
      WHEN agent_id = '13419' THEN 'A.GRIJALVA'
      WHEN agent_id = '8918' THEN 'O.BELTRAN'
      WHEN agent_id = '8763' THEN 'A.MARTINEZ'
      WHEN agent_id = '8897' THEN 'JA.CHAVARIN'
      WHEN agent_id = '9713' THEN 'J.COTA'
      END agent_id, count(agent_id) NumItop FROM ticket
  WHERE
  
  start_date BETWEEN CONCAT('$fein', ' 00:00:00') AND CONCAT('$fefi', ' 23:59:00')
   AND team_id IN ('4')


  group BY AGENT_ID
  ORDER BY NumItop DESC
  ";



$resul1=mysqli_query($con,$sql);
$resul2=mysqli_query($con,$sql);
$resulitop=mysqli_query($conitop,$sqlitop);
$resulitop2=mysqli_query($conitop,$sqlitop);
$resul3=mysqli_query($con,$sql);
$resul4=mysqli_query($con,$sql);

//mysqli_close($conn);
//mysqli_close($conitop);
 ?>

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : [
       <?php 
      $num=1;
      //CICLO PARA RECORRER TABLA CON DATOS DE ITOP  AQUI ESTABA REULTITOP2
       while ($mostrar =mysqli_fetch_array($resulitop)){ ?>
          '<?php echo $num ,' - ',$mostrar[0]?>',
         <?php  $num = $num+1;
           } ?>
           ],

           //INSERCION DE DATOS DE ITOP

      
      datasets: [
        
        {
          label               : 'Itop',
          backgroundColor     : '#ff9705',
          borderColor         : '#ff9705',
          pointRadius          : true,
          pointColor          : '#ff9705',
          pointStrokeColor    : '#ff9705',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#ff9705',
          data                : [
          //DATOS LLAMADAS 
      <?php 
       while ($mostrar =mysqli_fetch_array($resulitop2)){ ?>
          <?php echo $mostrar[1]?>,
          <?php } ?>
           ]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : false,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = true;
    lineChartOptions.datasetFill = true

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.

    //Datos de Consulta Mensual de llamadas
    //aquiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
 
  

    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
      <?php 
      $num=1;
      //CICLO PARA RECORRER TABLA 
       while ($mostrar =mysqli_fetch_array($resul1)){ ?>
          '<?php echo $num ,' - ',$mostrar[0]?>',
         <?php  $num = $num+1;
           } ?>
              ],
      datasets: [
        {
          data: [
      <?php 
      //CICLO PARA RECORRER TABLA 
       while ($mostrar =mysqli_fetch_array($resul2)){ ?>
          <?php echo $mostrar[1]?>,
          <?php } ?>
          ],  
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de',  '#DC143C',  '#00FFFF',  '#00008B',  
'#008B8B',  '#B8860B',  '#A9A9A9',  '#006400',  '#A9A9A9',  '#BDB76B','#556B2F', '#FF8C00',  '#9932CC'  ],
        }
      ]
     
    }
    var donutOptions     = {
      maintainAspectRatio : true,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
   new Chart(donutChartCanvas, {
     type: 'doughnut',
    data: donutData,
    options: donutOptions
    }
    )


    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : true,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART - taaaaaablaaaaaaaaa
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    barChartData.datasets[0] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : true
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  
</script>
</body>
</html>
