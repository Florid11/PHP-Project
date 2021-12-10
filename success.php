<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="9;url=index.php" />
<link rel="icon" href="img/plane.png" />
<style>
* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:#0CF;
	text-align:center;
}
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 4px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	margin-left:7px;
}


a:hover, a:active {
    background-color: red;
}
</style>
</head>
<body>
<br/><br/>
<h1 style="color:#0C1E53";>Faleminderit që na zgjodhet ne për të udhëtuar</h1><br/>
<h2 style="color:#0C1E53";>Informacione shtesë rreth rezervimit tuaj gjenden në emailin tuaj</h2><br/>
<video width="500" height="350" autoplay loop>
  <source src="video.mp4" type="video/mp4">
  <source src="video.ogg" type="video/ogg">
</video>
<h2 style="color:#0C1E53";> Pas <span id="countdowntimer">10</span> sekonda do të ridrejtoheni në faqen kryesore.</h2><br/><br/>

<script type="text/javascript">
    var timeleft = 10;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft < 0)
        clearInterval(downloadTimer);
    },1000);
</script>
<a
</body>
</html>
