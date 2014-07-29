<?php
define("CONSTANT5A", "Hello 5A world.");

header('Content-Type: text/html; charset=utf-8');

    $page = $_GET['q'];
	
    //Вывести запрос
    //echo $_GET['q'];

//функция определения страницы        
function page ($url, $file_open)   {
        global $page;
     if($page == $url)  {
        	include_once $file_open;
    } 
}    
       
page ('', "page/index.php") ;      
page ('заказать-работу.html', "page/order.php") ; 
page ('oplata.html', "page/oplata.php") ; 
page ('гарантии.html', "page/warranty.php") ; 
page ('контакты.html', "page/contacts.php") ;   
page ('условия-работы.html', "page/operating_conditions.php") ; 
page ('услуги.html', "page/services.php") ; 
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