<?php
include('valform.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/plane.png" />
<link rel="stylesheet" href="css/form.css" type="text/css">
<link rel="stylesheet" href="css/select.css" type="text/css">
<style>
body{
	background-image:url("img/bileta.jpg");
	background-repeat:no-repeat;
}
#contact input[type="date"]{
	font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif;
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}
#contact input[type="date"]:hover{
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}
#contact input[type="date"]:focus{
	outline:0;
	border:1px solid #999;
}
</style>
</head>
<body> 
<div class="container">
<div style="color:#5B2205;font-size:13px;">
   <form id="contact" style="background: rgba(255,255,255, 0.3);" action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method="post">
    <h3 style="color:#2751E7;font-size:33px;">Rezervo tani</h3>
	<label id=""><b>Emri</b></label></br>
      <input placeholder="Sheno emrin tuaj..." style="background: rgba(255, 255, 250, 0.6);" type="text" name="firstname" autocomplete="off">
      <span class="error"><?php echo  $firstnameErr; ?></span></br>
	<label id=""><b>Mbiemri</b></label></br>
	  <input placeholder="Sheno mbiemrin tuaj..." style="background: rgba(255, 255, 250, 0.6);" type="text" name="lastname" autocomplete="off">
      <span class="error"><?php echo  $lastnameErr; ?></span></br>
	<label id=""><b>Email</b></label></br>
      <input placeholder="Sheno email-in tuaj..." style="background: rgba(255, 255, 250, 0.6);" type="text" name="email" autocomplete="off">
      <span class="error"><?php echo  $emailErr; ?></span></br>
	<label id=""><b>Telefoni<b></label></br>
      <input placeholder="Sheno numrin e telefonit tuaj me prefiksin +***" style="background: rgba(255, 255, 250, 0.6);" type="tel" name="phone" autocomplete="off">
      <span class="error"><?php echo  $phoneErr; ?></span><br/>
	<label id="">Vendi i nisjes</label></br>
	  <select name="select[]" style="background: rgba(255, 255, 250, 0.6);" id="startpoint" autocomplete="off">
		<option value="" autofocus>Zgjedhni vendin e nisjes</option>
		<option value="Pristina">Pristina</option>
		<option value="Tirana">Tirana</option>
		<option value="Algiers">Algiers</option>
		<option value="Andorra la Vella">Andorra la Vella</option>
		<option value="Luanda">Luanda</option>
		<option value="Saint John's">Saint John's</option>
		<option value="Buenos Aires">Buenos Aires</option>
		<option value="Yerevan">Yerevan</option>
		<option value="Canberra">Canberra</option>
		<option value="Vienna">Vienna</option>
		<option value="Baku">Baku</option>
		<option value="Nassau">	Nassau</option>
		<option value="Manama">Manama</option>
		<option value="Dhaka">Dhaka</option>
		<option value="Bridgetown">Bridgetown</option>
		<option value="Minsk">Minsk</option>
		<option value="Brussels">Brussels</option>
		<option value="Belmopan">Belmopan</option>
		<option value="Porto-Novo">Porto-Novo</option>
		<option value="Thimphu">Thimphu</option>
		<option value="Sucre">Sucre</option>
		<option value="Sarajevo">Sarajevo</option>
		<option value="Gaborone">Gaborone</option>
		<option value="Brasilia">Brasilia</option>
		<option value="Sofia">Sofia</option>
		<option value="Ottawa">Ottawa</option>
		<option value="Beijing">Beijing</option>
		<option value="Santiago">Santiago</option>
		<option value="Bogotá">Bogotá</option>
		<option value="Zagreb">Zagreb</option>
		<option value="Havanal">Havana</option>
		<option value="Copenhagen">Copenhagen</option>
		<option value="Cairo">Cairo</option>
		<option value="Tallinn">Tallinn</option>
		<option value="Helsinki">Helsinki</option>
		<option value="Paris">Paris</option>
		<option value="Berlin">	Berlin</option>
		<option value="New Delhi">New Delhi</option>
		<option value="Dublin">Dublin</option>
		<option value="Rome">Rome</option>
		<option value="Tokyo">Tokyo</option>
		<option value="Riga">Riga</option>
		<option value="Vilnius">Vilnius</option>
		<option value="Skopje">Skopje</option>
		<option value="Mexico City">Mexico City</option>
		<option value="Amsterdam">Amsterdam</option>
		<option value="Wellington">Wellington</option>
		<option value="Oslo">Oslo</option>
		<option value="Lisbon">Lisbon</option>
		<option value="Bucharest">Bucharest</option>
		<option value="Moscow">Moscow</option>
		<option value="Riyadh">Riyadh</option>
		<option value="Belgrade">Belgrade</option>
		<option value="Bratislavai">Bratislava</option>
		<option value="Ljubljana">Ljubljana</option>
		<option value="Madrid">Madrid</option>
		<option value="Stockholm">Stockholm</option>
		<option value="Bern">Bern</option>
		<option value="Ankara">Ankara</option>
		<option value="Kyiv">Kyiv</option>
		<option value="Abu Dhabi">Abu Dhabi</option>
		<option value="London">London</option>
		<option value="Sydney">Sydney</option>
		<option value="Ianca">Inaca</option>
		<option value="Ubá">Ubá</option>
		<option value="Eads">Eads</option>
		<option value="Quzhou">Quzhou</option>
		<option value="Washington, D.C.">Washington, D.C.</option>
	</select>
      <span class="error"><?php echo  $startpointErr; ?></span><br/>
	<label id="">Vendi i mberritjes</label></br>
	<select name="select[]" style="background: rgba(255, 255, 250, 0.6);" id="endpoint" autocomplete="off">
		<option value="" autofocus>Zgjedhni vendin e zbritjes</option>
		<option value="Pristina">Pristina</option>
		<option value="Tirana">Tirana</option>
		<option value="Algiers">Algiers</option>
		<option value="Andorra la Vella">Andorra la Vella</option>
		<option value="Luanda">Luanda</option>
		<option value="Saint John's">Saint John's</option>
		<option value="Buenos Aires">Buenos Aires</option>
		<option value="Yerevan">Yerevan</option>
		<option value="Canberra">Canberra</option>
		<option value="Vienna">Vienna</option>
		<option value="Baku">Baku</option>
		<option value="Nassau">	Nassau</option>
		<option value="Manama">Manama</option>
		<option value="Dhaka">Dhaka</option>
		<option value="Bridgetown">Bridgetown</option>
		<option value="Minsk">Minsk</option>
		<option value="Brussels">Brussels</option>
		<option value="Belmopan">Belmopan</option>
		<option value="Porto-Novo">Porto-Novo</option>
		<option value="Thimphu">Thimphu</option>
		<option value="Sucre">Sucre</option>
		<option value="Sarajevo">Sarajevo</option>
		<option value="Gaborone">Gaborone</option>
		<option value="Brasilia">Brasilia</option>
		<option value="Sofia">Sofia</option>
		<option value="Ottawa">Ottawa</option>
		<option value="Beijing">Beijing</option>
		<option value="Santiago">Santiago</option>
		<option value="Bogotá">Bogotá</option>
		<option value="Zagreb">Zagreb</option>
		<option value="Havanal">Havana</option>
		<option value="Copenhagen">Copenhagen</option>
		<option value="Cairo">Cairo</option>
		<option value="Tallinn">Tallinn</option>
		<option value="Helsinki">Helsinki</option>
		<option value="Paris">Paris</option>
		<option value="Berlin">	Berlin</option>
		<option value="New Delhi">New Delhi</option>
		<option value="Dublin">Dublin</option>
		<option value="Rome">Rome</option>
		<option value="Tokyo">Tokyo</option>
		<option value="Riga">Riga</option>
		<option value="Vilnius">Vilnius</option>
		<option value="Skopje">Skopje</option>
		<option value="Mexico City">Mexico City</option>
		<option value="Amsterdam">Amsterdam</option>
		<option value="Wellington">Wellington</option>
		<option value="Oslo">Oslo</option>
		<option value="Lisbon">Lisbon</option>
		<option value="Bucharest">Bucharest</option>
		<option value="Moscow">Moscow</option>
		<option value="Riyadh">Riyadh</option>
		<option value="Belgrade">Belgrade</option>
		<option value="Bratislavai">Bratislava</option>
		<option value="Ljubljana">Ljubljana</option>
		<option value="Madrid">Madrid</option>
		<option value="Stockholm">Stockholm</option>
		<option value="Bern">Bern</option>
		<option value="Ankara">Ankara</option>
		<option value="Kyiv">Kyiv</option>
		<option value="Abu Dhabi">Abu Dhabi</option>
		<option value="London">London</option>
		<option value="Sydney">Sydney</option>
		<option value="Ianca">Inaca</option>
		<option value="Ubá">Ubá</option>
		<option value="Eads">Eads</option>
		<option value="Quzhou">Quzhou</option>
		<option value="Washington, D.C.">Washington, D.C.</option>
	</select>
      <span class="error"><?php echo  $endpointErr; ?></span></br>
	  <label id="">Data e nisjes tuaj të udhëtimit</label></br>
      <input type="date" name="startdate" style="background: rgba(255, 255, 250, 0.6);" autocomplete="off" min="2020-06-02" max="2022-06-01"><br/>
      <span class="error"><?php echo  $startdateErr;?></span></br>
      <input name="submit" type="submit" value="Rezervo">
  </form>
</div>
</div>
<address>
<?php
$copy="Travel";
$len=strlen($copy);
echo "<p style='text-align:center'>&copy 2020 Travel $len<p>"?>;
</address>
</body>
</html>
