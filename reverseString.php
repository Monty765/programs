<?php 
$string='abcd';
echo $string."\n";
$rev='';
for($i=strlen($string)-1;$i>=0;$i--){
	$rev=$rev."". $string[$i];
}
echo $rev;
?>