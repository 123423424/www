<?php
    
    $ip=$_SERVER['REMOTE_ADDR'];
    
    $ip = 0;
    foreach ($_POST  as $key => $value) {
        $ip .='<br />'.$key.'=>'.$value;
    }
    
    $ip = 0;
    if ( $_POST['name'] =='John' ) {$ip = $_POST['location'] ;}
	echo $ip;
?>