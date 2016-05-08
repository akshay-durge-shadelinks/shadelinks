<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SHADELINKS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

<script src="amcharts.js" type="text/javascript"></script>
        <script src="serial.js" type="text/javascript"></script>
<?php

    $file = 'data.txt';
    $currentData = file_get_contents($file); 
    $dataArray = explode(",",$currentData);

$spv = explode("=",$dataArray[0]);
$spi = explode("=",$dataArray[1]);
$vr = explode("=",$dataArray[2]);
$vy = explode("=",$dataArray[3]);
$vb = explode("=",$dataArray[4]);

foreach ($dataArray as $value)
{
    $dataArray1 = explode("=",$value);  
}
?>
        <script type="text/javascript">
            var chart; 
            var chartData = [
                {
                    "year": "<?php echo $spv[0] ?>",
                    "income": "<?php echo $spv[1] ?>"
                },
                {
                    "year": "<?php echo $spi[0] ?>",
                    "income": "<?php echo $spi[1] ?>"
                },
                {
                    "year": "<?php echo $vr[0] ?>",
                    "income": "<?php echo $vr[1] ?>"
                },
                {
                    "year": "<?php echo $vy[0] ?>",
                    "income": "<?php echo $vy[1] ?>"
                },
                {
                    "year": "<?php echo $vb[0] ?>",
                    "income": "<?php echo $vb[1] ?>"
                }
            ];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "year";
                // this single line makes the chart a bar chart,
                // try to set it to false - your bars will turn to columns
                chart.rotate = true;
                // the following two lines makes chart 3D
                chart.depth3D = 20;
                chart.angle = 30;

                // AXES
                // Category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridPosition = "start";
                categoryAxis.axisColor = "#DADADA";
                categoryAxis.fillAlpha = 1;
                categoryAxis.gridAlpha = 0;
                categoryAxis.fillColor = "#FAFAFA";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisColor = "#DADADA";
                valueAxis.title = "";
                valueAxis.gridAlpha = 0.1;
                chart.addValueAxis(valueAxis);

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.title = "Income";
                graph.valueField = "income";
                graph.type = "column";
                graph.balloonText = "";
                graph.lineAlpha = 0;
                graph.fillColors = "#bf1c25";
                graph.fillAlphas = 1;
                chart.addGraph(graph);

                chart.creditsPosition = "top-right";

                // WRITE
                chart.write("chartdiv");
            });
        </script>

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <!-- <img alt="image" class="img-circle" src="img/profile_small.jpg" /> -->
                             </span>
                            <a href="index.html">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">SHADELINKS</strong>
                             </span> </span> </a>
                            
                        </div>
                        <div class="logo-element">
                            SL
                        </div>
                    </li>
                    <li>
                        <a href="demoIndex.html"><i class="fa fa-diamond"></i> <span class="nav-label">Home</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="graph_flot.html">Flot Charts</a></li>
                            <li><a href="graph_chartjs.html">Chart.js</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="stats2.php"><i class="fa fa-desktop"></i> <span class="nav-label">Demo</span></a>
                    </li>                      
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to SHADELINKS</span>
                    </li>   
                    <li>
                        <a data-toggle="modal" href="#modal-form">
                            <i class="fa fa-sign-out"></i> Log in
                        </a>
                    </li>
                </ul>
            </nav>

             <div id="modal-form" class="modal fade" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Sign in</h3>

                            <p>Sign in today for more expirience.</p>

                                <form role="form" action="landing.html">
                                    <div class="form-group"><label>Email</label> <input type="email" placeholder="Enter email" class="form-control"></div>
                                    <div class="form-group"><label>Password</label> <input type="password" placeholder="Password" class="form-control"></div>
                                    <div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log in</strong></button>
                                        <label> <input type="checkbox" class="i-checks"> Remember me </label>
                                    </div>
                                </form>
                                </div>
                                <div class="col-sm-6"><h4>Not a member?</h4>
                                    <p>You can create an account:</p>
                                    <p class="text-center">
                                        <a href="register.html"><i class="fa fa-sign-in big-icon"></i></a>
                                    </p>
                                 </div>
                                </div>
                            </div>
                     </div>
                </div>
            </div>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Charts</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a>Graphs</a>
                    </li>

                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        <div class="row">
            
            <div id="chartdiv" style="width: 500px; height: 600px;"></div>       

        </div>        
    
        <div class="footer">
            <div class="pull-right">
               <!--  10GB of <strong>250GB</strong> Free. -->
            </div>
            <div>
                <strong>ShadeLinks</strong> &copy; 2015
            </div>
        </div>

    </div>
</div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Flot demo data -->
    <script src="js/demo/flot-demo.js"></script>

</body>

</html>







