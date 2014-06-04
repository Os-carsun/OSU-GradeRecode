<?php
	$count = "asda";
	
	$grade[$count][asdas] = "AAA";
	$grade[$count][2] = "2";
	$grade[$count][3] = "3";
	$grade[$count][4] = "4";
	$grade[$count][5] = "5";
	$grade[$count][6] = "6";
	$grade[$count][7] = "7";
	$grade[$count][8] = "8";
	$grade[$count][9] = "9";
	$grade[$count][10] = "10";
	$grade[$count][11] = "11";
	$grade[$count][12] = "12";
	
	$count = "qwe";
	
	$grade[$count][1] = "BBB";
	$grade[$count][2] = "14";
	$grade[$count][3] = "15";
	$grade[$count][4] = "16";
	$grade[$count][5] = "17";
	$grade[$count][6] = "18";
	$grade[$count][7] = "19";
	$grade[$count][8] = "20";
	$grade[$count][9] = "21";
	$grade[$count][10] = "22";
	$grade[$count][11] = "23";
	$grade[$count][12] = "24";
	
	$json_string = json_encode($grade);
	//echo $json_string;

?>
<script Language="JavaScript">
<!--
	var array = <?php echo($json_string); ?>;
	
//var user = <?php echo($json_string)?>;
//var data=JSON.parse(user);
alert(array.qwe);
-->
</script>
