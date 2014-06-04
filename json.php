<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	echo "{[";
	for($i=0;$i<20;$i++){
	
		$filename = "BBB";
		$id = "14";
		$difficulty = "15";
		$mark = "16";
		$score = "17";
	
	echo "{filename:'$filename',id:'$id',difficulty:'$difficulty',mark:'$mark',score:'$score'}";
	if($i<19)echo ",";
	}
	echo "]}";
?>
