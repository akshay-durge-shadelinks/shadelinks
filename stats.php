<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="style.css" type="text/css">
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


        <div id="chartdiv" style="width: 500px; height: 600px;"></div>
    </body>

</html>