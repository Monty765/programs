<?php 

function LetterChanges($str) {  
$s='';
$arr=array('a','e','i','o','u');
  // code goes here
  for($i=0;$i<=strlen($str)-1;$i++){
  	if(!is_numeric($str[$i])){
  		$b=$str[$i]; 
  		$b++;
      if(in_array($b,$arr)){
          $b = strtoupper($b);
      }
      $str[$i]=$b;
  	}
      $s=$s."".$str[$i];   
  }
  return $s; 
         
}
     
echo LetterChanges('123456789aed');  

?>

