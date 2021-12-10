<?php
include('contactForm.php');
require_once('loginserv.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>AgjenciUdhetimesh</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link rel="icon" href="img/plane.png" />
        <link href="css/style.css" rel="stylesheet">
       	<link href="css/login.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<style>
.bodybg{
  background-color: lightblue;
}
.alert
{
    background-color: darkslategray;
    color:white;
    margin-bottom: 0px;
    border: 1px solid black;
    height: 80px;
}
#city{
	width:30%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}
#city:hover{
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}
#txtHint{
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-size:18px;
}
.errori {
	color: #FF0000;
		}
.help{
	text-align:left;
}
.successi{
	text-align:center;
	color:#ff9966;
	font-weight:bold;
	font-size:15px;
 }
.upload{
border:2px solid #B6B4B4;
height:300px;
width:1000px;
margin:50px;
padding:20px;
text-align:left;
}
.file{
 margin-bottom:10px;
 position:absolute;
 left:50px;
 }
 .upload input{
	cursor:pointer;
	border:none;
	background:#0CF;
	color:#FFF;
 }
.upload  input:hover{
	outline:0;
	border:1px solid #999;
}
</style>
    </head>

    <body>

        <!-- Side Menu -->
        <div  id="divoftable" class="bodybg" align="center">
    <table>
        <tr>
            <td><strong><a href="#top">Kryefaqja</a></strong></td>
            <td><a href="#about">Rreth nesh</a></td>
            <td><a href="#places">Vendet</a></td>
            <td><a href="#contact">Kontakti</a></td>
            <td><a href="#login" id="login_up">Login</a></td>
        </tr>
    </table>
</div>
        <!-- /Side Menu -->

        <!-- Full Page Image Header Area -->
        <div id="top" class="header">
            <div class="vert-text parallax">
                <h1 class="header-text">To travel is to live</h1>
                <h3 class="header-text">
                </h3><br />
                <a href="#about" class="btn header-btn">Zbulo per me shume</a>
                <br/>
                
            </div>
        </div>
        <!-- /Full Page Image Header Area -->

        <!-- Intro -->
        <div id="about">
            <div class="light-wrapper">
                <div class="container inner">
                    <div class="row">
                        <div class="text-center">
                            <h2 class="main-title">Rreth kompanisë tonë</h2>
                            <hr>
                        </div>
                        <div class="divide50"></div>
                        <div class="col-sm-4">
                          <figure><img src="img/office2.jpg" alt="" style="width: 100%;"></figure>
                        </div>
                        <div class="col-sm-8">
                          <h4>Vendi i punës</h4>
                          <p>Agjensia ka një staf të specializuar në fushën e turizmit dhe me aftësi shume të mira komunikimi. Agjensia është gjithnjë në kërkim të inovacioneve
                             teknologjike në fushën informatike (sidomos në programet informatike për fushën e turizmit pa përjashtuar edhe ato të fushës së finance-kontabilitetit)
                             të cilat ndihmojnë në rritjen e performancës në ofrimin e produkteve turistike.Kompania jonë është renditur vazhdimisht si një nga agjensitë më të mira në                              vend.</p>
                        </div>
                      </div>
                      <div class="divide50"></div>
                      <div class="row">
                        <div class="col-sm-4">
                          <h4>Udhëtimet tona</h4><hr>
                          <p>Agjensia jonë e udhetimit, ofron planifikim unik të udhëtimit tuaj.Kjo faqe ka për qëllim t'ju asistoje gjatë kërkimit tuaj për                                                               udhëtimet që po planifikoni.Të ju japë informacione të plota mbi llojllojshmërine e shërbimeve që ne ofrojmë si dhe t'ju mundësoj
                             kryerjen e rezervimeve për destinacionet që deshironi.</p>
                          <div class="divide5"></div>
                          <ul class="progress-list">
                            <li>
                              <p>Asia <em>45%</em></p>
                              <div class="progress plain">
                                <div class="bar" style="width: 45%;"></div>
                              </div>
                        </li>
                            <li>
                              <p>Australia <em>60%</em></p>
                             <div class="progress plain" style>
                                <div class="bar" style="width: 60%;"></div>
                              </div>
                            </li>

                            <li>
                              <p>America <em>80%</em></p>
                              <div class="progress plain">
                                <div class="bar" style="width: 80%;"></div>
                              </div>
                            </li>
                            <li>
                              <p>Europe <em>90%</em></p>
                              <div class="progress plain">
                                <div class="bar" style="width: 90%;"></div>
                              </div>
                            </li>
                          </ul>
                          <!-- /.progress-list -->
                        </div>
                        <!-- /.col -->

                        <div class="col-sm-4">
                          <h4>Pse duhet te na zgjedhni ne</h4><hr>
                          <p>Ka shumë arsye për të udhëtuar me ne</p>
                          <div class="divide10"></div>
                            <ul class="color">
								<li>
								Ndryshe nga shume agjensi ne vend ne ofrojme nje                                                                 sherbim dhe informim perfekt online, nga ku ju mund                                                                 te lundroni dhe zgjidhni udhetimin dhe pushimin tuaj                                                                 te deshiruar. Tek ne do te gjeni informacion pa fund                                                                 si te dhena specifike te produktit, foto, video,                                                                 vendodhje te sakte, si dhe finalizimin me nje                                                                 aplikacion te lehte e te shkurter te rezervimit te                                                                 ketij sherbimi.
								</li>
                          </ul>
                        </div>
                        <!-- /.col -->

                        <div class="col-sm-4">
                          <h4>Transportet tona</h4><hr>
                          <div class="divide10"></div>
                          <div class="services-2">
                            <div class="icon"> <img src="img/icon-webi.png" data-src="style/images/icons/icon-web.png" data-ret="style/images/icons/icon-web@2x.png" class="retina" alt="" /> </div>
                            <!-- /.icon -->
                            <div class="text">
                              <h5>Responsive Layout</h5>
                            </div>
                            <!-- /.text -->
                            <div class="divide20"></div>
                            <div class="icon"> <img src="img/icon-heart.png" data-src="style/images/icons/icon-heart.png" data-ret="style/images/icons/icon-heart@2x.png" class="retina" alt="" /> </div>
                            <!-- /.icon -->
                            <div class="text">
                              <h5>Flat & Clean design</h5>
                            </div>
                            <!-- /.text -->
                            <div class="divide20"></div>
                            <div class="icon"> <img src="img/icon-printt.png" data-src="style/images/icons/icon-print.png" data-ret="style/images/icons/icon-print@2x.png" class="retina" alt="" /> </div>
                            <!-- /.icon -->
                            <div class="text">
                              <h5>Print Design</h5>
                            </div>
                            <!-- /.text -->

                          </div>
                          <!-- /.services-2 -->

                        </div>
                        <!-- /.col -->

                      </div>
                      <!-- /.row -->

                    </div>
                    <!-- /.container -->
                  </div>
                  <!-- /.light-wrapper -->
                </div>
        <!-- /Intro -->
        <!-- Callout -->
         <div class="callout">
            <div class="vert-text">
                
            </div>
        </div>
        <!-- /Callout -->



        <!-- Portfolio -->
        <div id="places" class="places">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-3 text-center">
                        <h2 class="main-title">Vendet për tu vizituar</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="divide50"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/parisi.jpg" alt="paris" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Paris</h2>
                                    <p class="icon-links">
                                        <a href="install.php"><i class="fa fa-bookmark-o" style="color:black;">Rezervo tani</i></a>
                                    </p>
                                    <p class="description">Paris</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/sydneyy.jpg" alt="sydney" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Sydney</h2>
                                    <p class="icon-links">
                                        <a href="install.php"><i class="fa fa-bookmark-o" style="color:black;">Rezervo tani</i></a>
                                    </p>
                                    <p class="description">Sydney</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class= "row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/washingtonn.jpg" alt="washington" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Washington</h2>
                                    <p class="icon-links">
                                        <a href="install.php"><i class="fa fa-bookmark-o" style="color:black;">Rezervo tani</i></a>
                                    </p>
                                    <p class="description">Washington</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/londonn.jpg" alt="london" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Londra</h2>
                                    <p class="icon-links">
                                        <a href="install.php"><i class="fa fa-bookmark-o" style="color:black;">Rezervo tani</i></a>
                                    </p>
                                    <p class="description">Londra</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/usa.jpg" alt="statue_of_liberty" class="img-responsive center-block">
                                <figcaption>
                                    <h2>U.S.A</h2>
                                    <p class="icon-links">
                                        <a href="install.php"><i class="fa fa-bookmark-o" style="color:black;">Rezervo tani</i></a>
                                    </p>
                                    <p class="description">U.S.A</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/italy.jpg" alt="pizza_tower" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Itali</h2>
                                    <p class="icon-links">
                                        <a href="install.php"><i class="fa fa-bookmark-o" style="color:black;">Rezervo tani</i></a>
                                    </p>
                                    <p class="description">Itali</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
					<div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/berlin.jpg" alt="Qyteti Berlinit" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Berlin</h2>
                                    <p class="icon-links">
                                        <a href="install.php"><i class="fa fa-bookmark-o" style="color:black;">Rezervo tani</i></a>
                                    </p>
                                    <p class="description">Berlin</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
					<div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/moska.jpg" alt="Qyteti Moskes" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Moska</h2>
                                    <p class="icon-links">
                                        <a href="install.php"><i class="fa fa-bookmark-o" style="color:black;">Rezervo tani</i></a>
                                    </p>
                                    <p class="description">Moska</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

					<!-- ----------------------------------------------------------------------------- -->
					<!--AJAX PHP SCRIPT  -->
					<form>
						<label>Vendet që mund ti vizitoni</label><br/>
						<input type="text" id="city" onkeyup="showHint(this.value)">
						</form>
						<span><label>Sugjerime:</label><br/><span id="txtHint"></span></span>
					</form>
					<!--AJAX PHP SCRIPT  -->
					<!-- ----------------------------------------------------------------------------- -->

                </div>
            </div>
        </div>

        <!-- /Portfolio -->

        <!-- Call to Action -->
        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h3>Shtyp butonin posht per rezervim</h3>
                        <a href="install.php" class="btn booking-btn text-center">Click for Booking !</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Call to Action -->

		<!-- ----------------------------------------------------------------------------- -->
         <!-- Contact Section -->
        <div id="contact" class="container parallax">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2 class="main-title">Kontakto</h2>
                <hr>
                <div class="divide50"></div>
            </div>
            <!-- Contact Inner -->
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->

					<div class="err" style="text-align:left;">

					</div>
                    <form id="contact-us" method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 col-xs-12 animated">
                            <!-- Name -->
                            <input type="text" name="name" id="name"  value="<?php echo $name;?>" class="form" placeholder="Jepni emrin tuaj..." />
							<div class = "help">
							<span class="errori"><?php echo $nameError; ?></span>
                            </div><br/>
							<!-- Email -->
							<input type="email" name="email" id="mail" value="<?php echo $email;?>" class="form" placeholder="Jepni e-mail tuaj..." />
                            <div class="help">
							<span class="errori"><?php echo $emailError; ?></span>
                            </div>
							<!-- Subject -->
							<br/>
							<input type="text" name="subject" id="subject" value="<?php echo $subject;?>" class="form" placeholder="Jepni subjektin tuaj..." />
                            <div class="help">
							 <span class="errori"><?php echo $subjectError; ?></span>
						     </div> <br/>
						</div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 col-xs-12 animated">
                            <!-- Message -->
                            <textarea name="message" id="message" value="<?php echo $message;?>" class="form textarea"  placeholder="Mesazhi juaj..."></textarea>
                            <span class="errori"><?php echo $messageError ;?> </span>
 						</div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Dergo</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>
					<span class="successi"><?php echo $success;?></span>
                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>
                </div>
				<!-- End Contact Form Area -->
			</div><!-- End Inner -->
        </div><!-- End Contact Section -->

		<!-- Read and opload  -->
			 <div class="upload">
				<h4>Upload Your Text Message!</h4>
					<form method="post" enctype="multipart/form-data" action="file_read.php">
						<input type="file" name="file"/><br/>
						<input type ="submit" name="submit" value="Read"/>
					</form><br/><br/>
				<div class="file">
				<h4>Upload your Trips Here!</h4>
					<form  method="POST" enctype="multipart/form-data" action="file_read.php">
						<input type="file" name="file1"/><br/>
						<input type="submit" name="submit1" value="Upload"/>
					</form>
                </div>
			 </div>
					<!-- Read and opload -->

				<!-- Login -->
				<!-- ----------------------------------------------------------------------------- -->
				<div class="login" id="login" style="display:none; text-align:center;">
				<h2 class="main-title">Login</h2>
					<div>
						<hr>
						<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
						<label id="">Username</label><br/>
						<input type="text" name="user" placeholder="Enter your administrator username..." autocomplete="off" autofocus><br/>
						<label id="">Password</label><br/>
						<input type="password" name="pass" placeholder="Enter your administrator password..." autocomplete="off"><br/>
						<input type="submit" value="login" name="submit"><br/>
						<span style="color:red;"><?php echo $error; ?></span>
						</form>
						<hr><hr>
					</div>
				</div>
				<!-- ----------------------------------------------------------------------------- -->
				<!-- /Login -->

     <div class="alert" align="center">
            <button style="cursor: pointer; float: right; margin:0px; padding:3px; border:1px solid white;"><strong>X</strong></button>
            <p>20% zbritje ne te gjitha fluturimet duke perdorur kodin : AgjensiaUdhetimeve2020</p>
        </div>
   <!--/Footer-->
<footer style="padding:70px;height:35%;font-size:20px;font-weight:bold;text-align:center;background:#85ecec;color:white;font-family:"helvetica neue", sans-serif;letter-spacing:3px;">
                    <p>Shperndajeni faqen tone:</p>
    <img src="img/email_32.png" alt="Dergojani dikujt ne Email"/>
    <img src="img/facebook_32.png" alt="Shperndajeni ne Facebook"/>
    <img src="img/twitter_32.png" alt="Shperndajeni ne Twitter"/>
    <img src="img/insta.png" alt="Shperndajeni ne Instagram"/>
    <img src="img/rss_32.png" alt="RSS"/>
    <p>&copy;Te gjitha te drejtat e rezervuara - AgjensiUdhetimesh</p>
                   </footer>
        <!-- /Footer -->
        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>

        <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
        <script>
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        </script>
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        </script>
        <script>
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
        </script>

        <!-- modal -->

        <script>
		$("#login_up").click(function(){
			$(".login").toggle();
		});
            $('.modal').on('shown.bs.modal', function () {
                var curModal = this;
                $('.modal').each(function(){
                    if(this != curModal){
                        $(this).modal('hide');
                    }
                });
            });
        </script>


		<script>
/*AJAX PHP SCRIPT UPDATE*/
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "update.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

    </body>
</html>
