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
    
    //�������� �������
    $someText = iconv("UTF-8", "windows-1251//TRANSLIT", $_FILES['upl']['name']);
    
    
    
     
    //�������� �������
    $cyrillicTxt=$someText;
$cyrillicPattern  = array('�','�','�','�','�','�', '�','�','�','�','�','�','�','�','�','�','�','�','�','�','�', 
        '�','�','�','�','�','�','�','�', '�', '�', '�','�','�','�','�','�','�','�', '�','�','�','�','�','�','�','�','�','�','�','�','�','�','�',
        '�','�','�','�','�','�','�','�', '�', '�', '�','�' );
$latinPattern = array( 'a','b','v','g','d','e','jo','zh','z','i','y','k','l','m','n','o','p','r','s','t','u',
        'f' ,'h' ,'ts' ,'ch','sh' ,'sht', '', '`', 'je','ji','yu' ,'ya','A','B','V','G','D','E','Jo','Zh',
        'Z','I','Y','K','L','M','N','O','P','R','S','T','U',
        'F' ,'H' ,'Ts' ,'Ch','Sh','Sht', '', '`', 'Je' ,'Ji' ,'Yu' ,'Ya' );

$someText = str_replace($cyrillicPattern, $latinPattern, $cyrillicTxt);

$rand = rand(1000000, 9999999);


$n_cooc = count($_COOKIE['cookieN']);
setcookie('cookieN['.$n_cooc.']', $rand.'-'.$someText, time()+(60*60*2),  '/'); 


	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'file/uploads/'.$rand.'-'.$someText)){
		echo '{"status":"success" , "param":"new_name" }';
		exit;
	}
}

echo '{"status":"error"}';
exit;