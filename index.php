<?php
define("CONSTANT5A", "Hello 5A world.");

header('Content-Type: text/html; charset=utf-8');

    $page = $_GET['q'];
	
    //Вывести запрос
    //echo $_GET['q'];
    

$page_arr = explode('/', $page);
$page_count = count($page_arr);
$page = $page_arr [0];

//echo $page_count.'<hr />';
//phpinfo();

//функция определения страницы        
function page ($url, $file_open)   {
        global $page;
     if($page == $url)  {
            $page = 1;
        	include_once $file_open;
    } 
}    

  
if ($page_count == 1) {
page ('', "page/index.php") ;      
page ('заказать-работу.html', "page/order.php") ; 
page ('oplata.html', "page/oplata.php") ; 
page ('гарантии.html', "page/warranty.php") ; 
page ('контакты.html', "page/contacts.php") ;   
page ('условия-работы.html', "page/operating_conditions.php") ; 
page ('услуги.html', "page/services.php") ; 

}      


    if ($page_arr[0]== 'client') {      
        
        $nomer_order = $page_arr[1]*1;        
        if ($nomer_order > 1){
            include_once "page/client/order.php";
        $page = 1;
        }  else {
            page ('client', "page/client/index.php"); 
        }
    }



if($page !=1){
	header("HTTP/1.0 404 Not Found");
	//header('Location: 404.php');
    //include('404.html');
	exit;
}

//page ('', "page/index.php") ; 


/*
page ('', "page/index.php") ; 
page ('', "page/index.php") ; 
page ('', "page/index.php") ;   
page ('', "page/index.php") ; 
page ('', "page/index.php") ; 
page ('', "page/index.php") ;      
*/        
   
      
   

    
    
?>