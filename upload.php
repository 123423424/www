<?php
//sleep(2);

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
    
     
        
    // A list of permitted file extensions
   /* $allowed = array('exe', 'php');
	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
    if(in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;}*/
        
        
        $sizeText = $_FILES['upl']['size'];
  if($sizeText > 19000000){
		echo '{"status":"error", "infoError":"yes", "nameEror":"big-'.$sizeText.'"}';
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
$name_file = $rand.'-'.$someText;

	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'file/uploads/'.$name_file)){
	
     //  rename('file/uploads/'.$name_file, 'file/uploads2/'.$name_file)
		echo '{"status":"success" , "param":"'.$name_file.'" }';
		exit;
       
	}
}

echo '{"status":"error", "infoError":"yes", "nameEror":"end-'.$_FILES['upl']['tmp_name'].'"}';
exit;