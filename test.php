<?php
 /* 	$n_cooc =0;
 $arr['cookieN'][]  =13; 
 $arr['cookieN'][]  =33; 
 $arr['cookieN'][]  =44; 
  $arr['cookieN'][]  =13; 
 $arr['cookieN'][]  =33; 
 $arr['cookieN'][]  =44; 
  
function rep($n, $arrB ) {
    if (isset($arrB[$n])){    
    $n = $n+1; } else { return $n; }
    rep($n, $arrB);   
}

echo $arr.'<br />';
foreach ($arr['cookieN'] as $key => $value) {
    $s .= "$key => $value <br />";
}
echo $s;    


$n_cooc = rep($n_cooc, $arr['cookieN']);
  */
  
  $n_cooc = count($arr['cookieN']);
echo '<hr />'.$n_cooc;

?>