<?php 
session_start();
// define variables and set to empty values
$agency1Err=$agency2Err="";
$agency1=$agency2="";
$ClientData=$teksti="";
//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$valid = true;	
	$ClientData=fopen("ClientData.php","a") or die("Unable to open this file!");
	/*firstname */
	if (empty($_POST["agency1"])) {
		$agency1Err= "Agency is required";
		$valid = false;
	}else {
		$agency1 = test_input($_POST["agency1"]); 
	}
	
	if (empty($_POST["agency2"])) {
		$agency2Err= "Travel time is required";
		$valid = false;
	}else {
		$agency2 = test_input($_POST["agency2"]); 
	}
		try{
			if($valid){
					$date_clicked = date('H:i:s d-m-Y');
					$teksti="<tr>";fwrite($ClientData,$teksti);
					$teksti="<td>".$_SESSION['firstname']."</td>";fwrite($ClientData,$teksti);
					$teksti="<td>".$_SESSION['lastname']."</td>";fwrite($ClientData,$teksti);
					$teksti="<td>".$_SESSION['email']."</td>";fwrite($ClientData,$teksti);
					$teksti="<td>".$_SESSION['phone']."</td>";fwrite($ClientData,$teksti);
					$teksti="<td>".$_SESSION['startpoint']."</td>";fwrite($ClientData,$teksti);
					$teksti="<td>".$_SESSION['endpoint']."</td>";fwrite($ClientData,$teksti);
					$teksti="<td>".$_SESSION['startdate']."</td>";fwrite($ClientData,$teksti);
					$teksti="<td>".$agency2."</td>";fwrite($ClientData,$teksti);
					$teksti="<td>".$agency1."</td>";fwrite($ClientData,$teksti);
					$teksti="<td>".$_SESSION['Vlera']." Euro"."</td>";fwrite($ClientData,$teksti);
					$teksti="<td>".$date_clicked."</td>";fwrite($ClientData,$teksti);
					$teksti="</tr>";fwrite($ClientData,$teksti);
				header('Location:success.php');
				exit();
			}else{
				throw new Exception("<h2 style='text-align:center;color:red;'><b>Te dhenat nuk jane  valide!</b></h2>");
			}
		}catch(Exception $ex){
			echo "<p style='text-align:center;color:black;'><b>Error:</b></p> ".$ex->getMessage();
		}
		
  fclose($ClientData);
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>