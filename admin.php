<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="robots" content="noindex">
<link rel="icon" href="img/plane.png" />
<title>Administratori</title>
<style>
body{
	text-align:center;
	//background-color: #34E940;
        background-image: url("img/admini.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
}
a:link, a:visited {
    background-color: #112B9C;
    color: #CEF050;
    padding: 4px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	margin-left:7px;
}


a:hover, a:active {
    background-color: blue;
}
</style>
</head>
<body>
<h1 class="page" style="color:#E2F1AC;">Mirësevini ne faqen e Administratorit!</h1>

<div style="color: #E2F1AC">
<?php
//Set dhe Get 
class Status{
	private $admin;
	public function __set($admin,$value){
		echo "Mirësevini ".$admin." <strong>".$value."</strong><br/>";
		$this->admin=$value;
	}
	public function __get($admin){
		echo "<h3>".$this->admin."</h3><br/>";
	}
}
$status=new Status;
$status->admin=$_SESSION['user'];
echo $status->admin;
//set dhe get 
?>
</div>



<div class="sherbimi" >
<div>
<span><abbr title="Rezervimet e biletave!"><b><a href="ClientData.php" >Rezervimet</a></b></abbr></span>
<span><abbr title="Largohuni nga faqja Administratorit!"><b><a href="index.php">LogOut</a></b></abbr></span><br/><br/>

<div style="background-color:#FFFFFF;background: rgba(76, 175, 80, 0.1);color:#E2F1AC;position:fixed;left:0;right:0;">
<?php 
$string = "<h2>Ju jeni administratori për faqen Agjensia Antikorrupsion!</h2><br/>";
$patterns = array();
$patterns[0] = "/Antikorrupsion/";
$replacements = array();
$replacements[0] = "Flurimeve";
ksort($patterns);
ksort($replacements);
echo preg_replace($patterns, $replacements, $string)."<br/>";
?>
<?php
echo "<br/><br/>";
//preg_split eshte funksion qe sherben per ta ndare nje string ne nje varg numerik
// sherbejn per ndarje te cdo numri,presje pike ose hapesire te karaktereve.
$str = 'AgjensiaFluturimeve';
$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
print_r($chars);
?>
</div>
</div>
<footer style="padding:30px;height:3%;font-size:20px;font-weight:bold;text-align:center;width:100%;position:fixed;left:0;bottom:0;color:white;opacity: 0.6;font-family:"helvetica neue", sans-serif;letter-spacing:3px;">
    <p>&copy;Te gjitha te drejtat e rezervuara - AgjensiaFluturimeve</p>
                   </footer>
</body>
</html>
