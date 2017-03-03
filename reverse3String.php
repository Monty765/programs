<?php 
$string='abbbbbcd';
echo $string."\n";
$rev='';
for($i=strlen($string)-1;$i>=0;$i--){
	$count=1;
	for($j=$i+1;$j<strlen($string);$j++){
		if($string[$i]==$string[$j]==$string[$j+1]){
			$count++;
		}
		else{
			exit;
		}
	}
	if($count <3){
		echo $count;
		$rev=$rev."". $string[$i];	
	}
	
}
echo preg_replace("/(.)\\1/", "$1", $rev)."\n";
echo $rev;
?>