<?php 
  
 var_dump( $_FILES['file']['tmp_name']);
 mkdir("./resourse/_pdf_".$_POST["name"],0777);
 chmod("./resourse/_pdf_".$_POST["name"],0777);

 
 
 $count_  = count($_FILES['file']['tmp_name']);
 echo $count_;
 for($i=0;$i<$count_;$i++){
   $file_name = $_FILES['file']['tmp_name'][$i];
   $new_file = "/var/www/resourse/_pdf_".$_POST["name"]."/".$_FILES['file']['name'][$i];
   echo $new_file;
     if (!move_uploaded_file($file_name, $new_file)) {
		echo "No $file...\n";
	}else{
		echo "OK";
	}
	chmod($new_file,0777);

 }
 	header ('Location: e2.php');
	die();
   
 
?> 
