<?php 

$str='+d+=3=+s+';
$no=false;
  // code goes here
  for($i=0;$i<=strlen($str)-1;$i++){
      if(ctype_alpha($str[$i])){
         if($i==1 || $i==strlen($str)){
             $no=false;
         }elseif($str[$i-1]=='+' && $str[$i+1]=='+'){
             $no= true;
          }
          else{
             $no=false;
          } 
         }
      }
    
  echo $no; 


?>















  