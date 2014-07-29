<?php
//sleep(5);

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
    
     
        
    // A list of permitted file extensions
   /* $allowed = array('exe', 'php');
	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
    if(in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;}*/
        
        
        $sizeText = $_FILES['upl']['size'];
  if($sizeText > 1900000 ){
		echo '{"status":"error"}';
		exit;}
    
    //Проблема денвера
    $someText = iconv("UTF-8", "windows-1251//TRANSLIT", $_FILES['upl']['name']);
    
    
    
     
    //Изменить символы
    $cyrillicTxt=$someText;
$cyrillicPattern  = array('а','б','в','г','д','e', 'ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у', 
        'ф','х','ц','ч','ш','щ','ъ','ь', 'э', 'ы', 'ю','я','А','Б','В','Г','Д','Е', 'Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У',
        'Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ь', 'Э', 'Ы', 'Ю','Я' );
$latinPattern = array( 'a','b','v','g','d','e','jo','zh','z','i','y','k','l','m','n','o','p','r','s','t','u',
        'f' ,'h' ,'ts' ,'ch','sh' ,'sht', '', '`', 'je','ji','yu' ,'ya','A','B','V','G','D','E','Jo','Zh',
        'Z','I','Y','K','L','M','N','O','P','R','S','T','U',
        'F' ,'H' ,'Ts' ,'Ch','Sh','Sht', '', '`', 'Je' ,'Ji' ,'Yu' ,'Ya' );

$someText = str_replace($cyrillicPattern, $latinPattern, $cyrillicTxt);

$rand = rand(1000000, 9999999);

$n_cooc = 1;
$n_cooc = 'kk='.$_COOKIE['cookie'].'=ss3s';
/*
function ch_cooc ($n_cooc){
    if (isset($_COOKIE['cookie..'.$n_cooc])){
        $n_cooc.='ddd';
    $n_cooc++;    
    ch_cooc ($n_cooc);
    } else {return $n_cooc;}
}
$n_cooc = ch_cooc ($n_cooc);
*/

setcookie('cookie', $n_cooc.rawUrlEncode($rand), time()+(60*60*24),  '/');   
$n_cooc = 'kk='.$_COOKIE['cookie'].'=ss3s';
setcookie('cookie', $n_cooc.rawUrlEncode($rand), time()+(60*60*24),  '/');


	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'file/uploads/'.$someText)){
		echo '{"status":"success"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;