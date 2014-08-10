<?php
define("CONSTANT5A", "Hello 5A world.");

header('Content-Type: text/html; charset=utf-8');

//Определение класса для загрузки страницы
class OpenPages {  
    public $fileOpen; //Инклуюируемый фаил
    public $page404; //Чекер для странцы 404
    public $pageArr; //Массив для ЮРЛ
   // public $page_count;
    public $nomer_order; //Для заказов номер второй подстаринцы  *(client/165943)
    //protected $url; 
        public function __construct()
        {               
                $this->page_arr = explode('/', $_GET['q']); //Забрать строку 
               // $this->page_count = count($this->page_arr);                
        }        
        //функция определения страницы
        public function page ($url, $file_open)   {            
            //Если есть прямая (заказать-работу.html) страница 
             if($this->page_arr [0] == $url)  {
                    $this->page404 = 1;
                	include_once $file_open; 
                    die();
                }                
              //Eсли зашли в client
              if ($this->page_arr[0]== 'client') { 
                    //$this->nomer_order = $this->page_arr[1]*1;        
                        if (is_numeric($this->page_arr[1]) ){
                            include_once "page/client/order.php";  
                            $this->page404 = 1; 
                        }  else { include_once "page/client/index.php";  
                            $this->page404 = 1;   }    
                        }     
                 //Установка города в ХЕД-меню
            /* if ($this->page_arr[0]== 'ip') {                     
                        if (($this->page_arr[1])== 'example.php') {
                             echo    '-тут-'.$this->page_arr[1];
                            include_once "ip/example.php";    
                            $this->page404 = 1;                         
                                } 
                        } */   
                      
            } //функция /page
            
            //функция для вызова 404 ошибки
            public function page404 ()   { 
                    if($this->page404 !=1){                        
                	header("HTTP/1.0 404 Not Found");
                	header('Location: 404.php?a='. $this->page_arr[0].$this->page_arr[1]);
                    //include('404.html');
                	exit;
                }               
            }       
        
        //Функция отображения переменных для отладки
        public function getVar ($var){
            return $this->$var.'<br />';
        }
        
}

$pageO = new OpenPages;


$pageO->page ('', "page/index.php") ;  
$pageO->page ('заказать-работу.html', "page/order.php"); 
$pageO->page ('oplata.html', "page/oplata.php") ; 
$pageO->page ('гарантии.html', "page/warranty.php") ; 
$pageO->page ('контакты.html', "page/contacts.php") ;   
$pageO->page ('условия-работы.html', "page/operating_conditions.php") ; 
$pageO->page ('услуги.html', "page/services.php") ; 


$pageO->page404 ();     
	
 
    
    
?>