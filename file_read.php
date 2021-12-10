<?php

if(isset($_POST['submit'])){

$file = $_FILES["file"];
$path = $file["tmp_name"];
$type = $file["type"];

if($type == "text/plain"){
	
   if($file_exists($path)){
 
     if(is_readable($path)){
		 $obj = fopen(($path),"r");
		 while(!feof($obj)){
			 $line = fgets($obj);
			 $line = htmlspecialchars($line);
			 echo $line;
			 echo "<br/>";
		 }
	 }else{
		 
		 echo "The File is not in a readable format!";
	 }
        
    }else{
		
		echo "The File Does Not Exist!";
	}
 }else{
	 echo "Not a Text File!";
 }

}


if(isset($_POST['submit1'])){
	$file1 = $_FILES['file1'];
	
	
	$fileName = $_FILES['file1']['name'];
	$fileTmpName = $_FILES['file1']['tmp_name'];
	$fileSize = $_FILES['file1']['size'];
	$fileError = $_FILES['file1']['error'];
	$fileType = $_FILES['file1']['type'];
	
	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg','jpeg','png','pdf');
	
	if(in_array($fileActualExt,$allowed)){
		if($fileError === 0){
			if($fileSize < 1000000){
				$filenameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$filenameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
				header("Location: index.php?uploadSuccess");
			}else{
				printf('Your file is too big!');
			}
		}else{
			printf("There was an error uploading your file!");
		}
		
	}else{
		printf("Error!! You cannot upload files of this type!");
	}
	
	
	
	
	
	
}




?>