<?php

	$file = 'data.txt';
	$spv = $_GET["spv"];
	$spi = $_GET["spi"];
	$vr = $_GET["vr"];
	$vy = $_GET["vy"];
	$vb = $_GET["vb"];
	echo 'Received'; 
	file_put_contents($file,'spv='.$spv.','.'spi='.$spi.','.'vr='.$vr.','.'vy='.$vy.','.'vb='.$vb);
	
?> 

