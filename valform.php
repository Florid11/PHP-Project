<?php 
session_start();
// define variables and set to empty values
$firstnameErr =$lastnameErr= $emailErr = $phoneErr = $startpointErr = $endpointErr = $startdateErr="";
$firstname = $lastname = $email = $phone = $startpoint = $endpoint = $startdate = $startdateG ="";
$ClientData=$teksti= "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$valid = true;	
	/*firstname */
	if (empty($_POST["firstname"])) {
		$firstnameErr = "Fusha emrit duhet plotesuar!";
		$valid = false;
	} else {
    $firstname= test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$firstname)){
			$firstnameErr = "Vetem shkronjat dhe hapesirat lejohen!"; 
			$valid = false;
		}
	}
  
  /*lastname */
	if (empty($_POST["lastname"])) {
		$lastnameErr = "Fusha mbiemrit duhet plotesuar!";
		$valid = false;
	} else {
    $lastname= test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$lastname)){
			$lastnameErr = "Vetem shkronjat dhe hapesirat lejohen!"; 
			$valid = false;
		}
	}
	/*Email */
	if (empty($_POST["email"])) {
		$emailErr = "Fusha email duhet plotesuar!";
		$valid = false;
	} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Formati email eshte i pavlefshum!"; 
			$valid = false;
		}
	}
  
  /*Phone */
	if (empty($_POST["phone"])) {
		$phoneErr= "Fusha e telefonit duhet plotesuar!";
		$valid = false;
	}else {
		$phone = test_input($_POST["phone"]);
		// check if e-mail address is well-formed
		if (!preg_match('/^(\+383|00377)?\(?([0-9]{2})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{3})/',$_POST['phone'])
			&& !preg_match('/^(\+386|00386)?\(?([0-9]{2})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{3})/',$_POST['phone'])) {
			$phoneErr = "Formati telefonit eshte i pavlefshum!"; 
			$valid=false;
		}
	}
  
  /*StartPoint */
	if (empty($_POST["select"][0])) {
		$startpointErr= "Vendi nisjes duhet plotesuar!";
		$valid = false;
	}else {
		$startpoint = test_input($_POST["select"][0]); 
		
	}

	/*EndPoint */
	if(empty($_POST["select"][1])) {
		$endpointErr= "Vendi zbritjes duhet plotesuar!";
		$valid = false;
	}else {
		if ($_POST["select"][1] == $_POST["select"][0]) {
			$endpointErr="Nuk lejohet qe vendi nisjes te jetë i njejtë me vendin e zbritjes!";
			$valid=false;
		}else{
			$endpoint = test_input($_POST["select"][1]);
		}
	}
	/* Date and Ticket price*/
	if(empty($_POST["startdate"])){
		$startdateErr= "Data nisjes tuaj se udhetimet duhet plotesuar!";
		$valid=false;
	}else{
		define("cmimi",1000,false);
		$this_date=strtotime(date("Y/m/d"));
		for($i=0;$i<=364;$i++){
			$this_date=strtotime(date("Y/m/d"));
			$date = date('Y/m/d', strtotime("+$i day"));
			$Cmimi=(int)((cmimi*1.05/($i+1))+(cmimi/17));
			$age = array($date=>$Cmimi);
			foreach($age as $x => $x_value) {
				$startdata=test_input($_POST["startdate"]);
				if(strtotime($x) == strtotime($startdata)){
					$startdataG= $x_value;
				}
			}
		}
	}
	
		try{
			if($valid){				
				$_SESSION['firstname']=$firstname;
				$_SESSION['lastname']=$lastname;
				$_SESSION['email']=$email;
				$_SESSION['phone']=$phone;
				$_SESSION['startpoint']=$startpoint;
				$_SESSION['endpoint']=$endpoint;
				$_SESSION['startdate']=$startdata;
				$_SESSION['Vlera']=$startdataG;
				header('Location:llogarite.php');
				exit();
			}else{
				throw new Exception("<h2 style='text-align:center;color:red;'><b>Te dhenat nuk jane valide!</b></h2>");
			}
		}catch(Exception $ex){
			echo "<p style='text-align:center;color:black'><b>Error:</b></p> ".$ex->getMessage();
		}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>