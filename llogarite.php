<?php
include('valagency.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/plane.png" />
<link rel="stylesheet" href="css/form.css" type="text/css">
<link rel="stylesheet" href="css/llogarite.css" type="text/css">
<style>
body{
	background-image:url("img/callout5.jpg");
	background-repeat:no-repeat;
}
#agency1,#agency2,#agency{
	width:27%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}
</style>
</head>
<body>
<h1 style="padding:15px;"></h1>
<div class="sherbimi" >
<h1 style="color:#0C1E53";>Cmimet dhe oraret:</h1>
<?php
define("cmimi",1000,false);
echo substr("Njeriun e bën modest Udhëtimi",21); /*substr funksioni*/
echo str_replace("pavlefshme","vlefshëm!"," është i pavlefshme");/*str_replace funksioni*/
echo "<br>";
$array=array("Përshendetje: ","Udhëtimi juaj nga : "," to ","I kërkuar në këtë datë: "," kushton ","€");/*array i thjeshte*/
echo $array[0].$_SESSION['firstname']." ".$_SESSION['lastname']."<br/>";
echo $array[1].$_SESSION['startpoint'].$array[2].$_SESSION['endpoint']."<br/>";
echo $array[3].$_SESSION['startdate'].$array[4]." ".$_SESSION['Vlera']." ".$array[5]."<br/><br/>";
?>
<h1 style="color:#0C1E53">Agjensia jonë operon në këtë kohë</h1>
<h3 style="color:#102D82">Ju duhet të jeni të paktën 30 minuta para fillimit të udhëtimit<br>
në qytetin ku donit të fillonit udhëtimin tuaj!</h3><br/>
<?php
$oraret = array/*array shume dimensionale*/
  (
  array("TurkishAirlines","Fillon udhëtimin në - ",11,0,0,"  AM"),
  array("BritishAirways","Fillon udhëtimin në - ",13,0,0,"  AM"),
  array("AirFrance-KLM","Fillon udhëtimin në - ",10,0,0,"  AM"),
  array("ContinentalAirlines","Fillon udhëtimin në - ",0,9,0,0,"  AM"),
  array("UnitedAirlines","Fillon udhëtimin në - ",0,8,0,0,"  AM")
  ); 
	echo "<b><span style='color:#2B3DC0'>Agjensia: </span></b>"."<b>".$oraret[0][0]."</b>"."<span style='color:green'> -></span>   "
	.$oraret[0][1]."<b>".$oraret[0][2].":".$oraret[0][3].$oraret[0][4]."</b>".$oraret[0][5]."<br>";
	echo "<b><span style='color:#2B3DC0'>Agjensia: </span></b>"."<b>".$oraret[1][0]."</b>"."<span style='color:green'> -></span>   "
	.$oraret[1][1]."<b>".$oraret[1][2].":".$oraret[1][3].$oraret[1][4]."</b>".$oraret[1][5]."<br>";
	echo "<b><span style='color:#2B3DC0'>Agjensia: </span></b>"."<b>".$oraret[2][0]."</b>"."<span style='color:green'> -></span>   "
	.$oraret[2][1]."<b>".$oraret[2][2].":".$oraret[2][3].$oraret[2][4]."</b>".$oraret[2][5]."<br>";
	echo "<b><span style='color:#2B3DC0'>Agjensia: </span></b>"."<b>".$oraret[3][0]."</b>"."<span style='color:green'> -></span>   "
	.$oraret[3][1]."<b>".$oraret[3][2].$oraret[3][3].":".$oraret[3][4].$oraret[3][5]."</b>".$oraret[3][6]."<br>";
	echo "<b><span style='color:#2B3DC0'>Agjensia: </span></b>"."<b>".$oraret[4][0]."</b>"."<span style='color:green'> -></span>   "
	.$oraret[4][1]."<b>".$oraret[4][2].$oraret[4][3].":".$oraret[4][4].$oraret[4][5]."</b>".$oraret[4][6]."<br><br>";
	
	
?>
<label>Zgjedhni nje agjensi për të parë më shumë infromacione:</label><br/>
<select name="users" onchange="showUser(this.value)" id="agency">
  <option value="">Zgjedhni agjensin:</option>
  <option value="1">Turkish Airline</option>
  <option value="2">British Airways</option>
  <option value="3">Air France-KLM</option>
  <option value="4">Continental Airlines</option>
  <option value="5">United Airlines</option>
  </select><br>
<div id="txtHint"></div>

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method="post">
<label>Zgjedhni njëren prej agjensive</label><br/>
  <select name="agency1" id="agency1" onchange="populate(this.id,'agency2')">
  <option value="">Zgjedh agjensin:</option>
  <option value="Turkish Airline">Turkish Airline</option>
  <option value="British Airways">British Airways</option>
  <option value="Air France-KLM">Air France-KLM</option>
  <option value="Continental Airlines">Continental Airlines</option>
  <option value="United Airlines">United Airlines</option>
  </select>
  <select name="agency2" id="agency2">
	<option value="">Zgjedhni oren e fluturimit</option>
  </select>
  <input type="submit" name="dergo" value="Dërgo" style="width:20%;"><br/>
  <span class="error"><?php echo $agency1Err; ?></span><br/>
   <span class="error"><?php echo $agency2Err; ?></span>
</form>
<br/>
<h2>Për më shumë info na kontaktoni ne :</h2>
<div><?php
$string="Në ";
$numb=1;
printf('%s,këtë numër +%u8765987562172',$string,$numb);/*Printf funksioni*/
echo "<br/>";
printf('%s,këtë numër +%u8765987562178',$string,$numb);/*Printf funksioni*/
echo "<br/><br/>";


//Konstruktori Destruktori dhe Trashegimia
class CDI{
	public function __construct($emri_klientit){
		//Konstruktori
		echo "Faleminderit që na zgjodhet kompaninë tonë $emri_klientit!";
	}
	public function __destruct(){
		//Destruktori
		echo "This page will be destroyed";
	}
}
class I extends CDI{
	//Trashigimia
    
}
$someObject = new I($_SESSION['firstname']);
?>


</div><br/>
</div>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","get.php?q="+str,true);
        xmlhttp.send();
    }
}


//option select
function populate(s1,s2){
	var s1=document.getElementById(s1);
	var s2=document.getElementById(s2);
	s2.innerHTML="";
	if(s1.value=="Turkish Airline"){
		var optionArray=["|","11:00 AM|11:00 AM","14:00 PM|14:00 PM","23:00 PM|23:00 PM"];
	}else if(s1.value=="British Airways"){
		var optionArray=["|","13:00 PM|13:00 PM","16:00 PM|16:00 PM","17:00 PM|17:00 PM"];
	}else if(s1.value=="Air France-KLM"){
		var optionArray=["|","10:00 AM|10:00 AM","12:15 PM|12:15 PM","18:00 PM|18:00 PM"];
	}else if(s1.value=="Continental Airlines"){
		var optionArray=["|","09:00 AM|09:00 AM","20:00 PM|20:00 PM"];
	}else if(s1.value=="United Airlines"){
		var optionArray=["|","08:00 AM|08:00 AM","22:00 PM|22:00 PM"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value=pair[0];
		newOption.innerHTML=pair[1];
		s2.options.add(newOption);
	}
	
}
</script>
</body>
</html>