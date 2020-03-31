<?php
	include_once 'connect.php';
	$qry1 = "SELECT * FROM db_updating_table WHERE status = 0 ORDER BY id ASC LIMIT 0,5";
	$getrows = mysqli_query($con, $qry1);
	$a = Array();
	$i =0;
	echo '<div class="w3-bar" style="font-size:20 vw;border-bottom:5px; border-bottom-style:solid; border-bottom-color:green;">
		<div class="w3-bar-item w3-padding-12" style="width: 50%;background-color:#ff5722; color:#FFFFFF; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">Token Number</h1></div>
		<div class="w3-bar-item w3-padding-12" style="width: 50%;background-color:#ff5722; color:#FFFFFF; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">Counter Number</h1></div>
	</div>';
	while($row = mysqli_fetch_assoc($getrows))
	{
	
		//$a[$i] = $row;
		//echo "</br>";
		//echo "Token:  ".$row['token']."--->Counter:  ".$row['counter']."---->Status";
		
		echo '<div class="w3-bar" style="font-size:20 vw;border-bottom:5px; border-bottom-style:solid; border-bottom-color:green;">
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">'.str_pad($row['token'], 3, '0', STR_PAD_LEFT).'</h1></div>
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">'.str_pad($row['counter'], 3, '0', STR_PAD_LEFT).'</h1></div>
		</div>';
		$i++;	
	
	}
	
	/*echo '<div class="w3-bar" style="font-size:20 vw;border-bottom:5px; border-bottom-style:solid; border-bottom-color:green;">
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">001</h1></div>
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">1</h1></div>
	</div>
	<div class="w3-bar" style="font-size:20 vw;border-bottom:5px; border-bottom-style:solid; border-bottom-color:green;">
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">002</h1></div>
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">2</h1></div>
	</div>
	<div class="w3-bar" style="font-size:20 vw;border-bottom:5px; border-bottom-style:solid; border-bottom-color:green;">
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">003</h1></div>
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">4</h1></div>
	</div>
	<div class="w3-bar" style="font-size:20 vw;border-bottom:5px; border-bottom-style:solid; border-bottom-color:green;">
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">004</h1></div>
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">7</h1></div>
	</div>
	<div class="w3-bar" style="font-size:20 vw;border-bottom:5px; border-bottom-style:solid; border-bottom-color:green;">
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">005</h1></div>
		<div class="w3-bar-item w3-padding-12" style="width: 50%; font-size:20 vw;"><h1 style="font-size: 8.2em; font-weight: 600; text-align: center;">3</h1></div>
	</div>';*/
	//$a = mysqli_fetch_assoc($getrows);
	// = array('data'=>$a,'value'=>array("status"=>"$status","message"=>"$message"));
	//echo json_encode($a); 
	?>