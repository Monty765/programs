<?php 
	$time=135;
 	$hours = floor($time / 60);
 	$minutes = str_pad($time % 60, 2, '0', STR_PAD_LEFT); 
  	echo $hours.":".$minutes; 
?>