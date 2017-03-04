<?php
//You have an array of integers, and for each index you want to find the product of every integer except the integer at that index
$arr=array(2,4,5,6);
$res=array();
for($i=0;$i<=count($arr)-1;$i++){
	$res[$i]=1;
	for($j=0; $j<=count($arr)-1;$j++){
		if($i!=$j){
			$res[$i]= $res[$i]*$arr[$j];
		} 
	}
}
for($k=0;$k<=count($res)-1;$k++){
	echo $res[$k]."\n";
}
?>