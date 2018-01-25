<!-- 
-->
<?php 
if(isset($_POST['submitted'])) {
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
		if(trim($_POST['contactName']) === '') {
			$nameError = 'Bitte tragen Sie Ihren Namen ein!';
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
	if(trim($_POST['email']) === '')  {
			$emailError = 'Sie haben Ihre eMail-Adresse vergessen!';
			$hasError = true;
		} else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", trim($_POST['email']))) {
			$emailError = 'Die eingetragene eMail-Adresse ist ungültig!';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
		if(trim($_POST['comments']) === '') {
			$commentError = 'Sie haben vergessen, eine Nachricht einzutragen.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
		if(!isset($hasError)) {

			$emailTo = 'info@battlethegalaxy.de';  // ==================   Hier wird die eMail-Adresse des Mail-Empfängers eingetragen. 
			$subject = 'Kontaktformular BTG BETA'; // ================== Hier wird die Betreffzeile der eMail Nachricht eingetragen. 
			$body = "\nName: $name \nE-Mail Adresse: $email \n\nNachricht: $comments "; // ================== Hier wird der Inhalt der Mail gebildet
			$headers = 'From: <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			$headers .= "MIME-Version: 1.0\r\n";
    			$headers .= "Content-type: text/plain; charset=utf-8\r\n";
    			$headers .= "Content-Transfer-Encoding: 8bit";
			mail($emailTo, $subject, $body, $headers);

			$emailSent = true;

		}
	}
} 
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width" />
<title>Battlethegalaxy.de</title> <!-- // ================== Hier wird der Seitentitel eingetragen -->
<meta name="description" content="Responsives Under Construction Template inklusive Kontaktformular" /> <!-- // ================== Hier wird die Seitenbeschreibung eingetragen -->
<meta name="keywords" content="template, under construction, kontaktformular" /> <!-- // ================== Hier können keywords eingetragen werden - löschen Sie diese Zeile, wenn keine keywords genutzt werden sollen -->

<!-- Google Webfonts -- andere Fonts finden Sie auf http://www.google.com/fonts/ -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css"> 
<link href="css/fontello.css" rel="stylesheet" type="text/css">


</head>
<body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>


</head>
<body>
<!-- Hintergrund Slider -->

<div class="sliderwrap">
<div class="slideshow" 
    data-cycle-fx="fade"
    data-cycle-speed="800"
    data-cycle-timeout="5000"
    data-cycle-loader=wait
    data-cycle-swipe=true
    data-cycle-slides=">img">
    
    <!-- Hier können Sie die Hintergrundbilder austauschen -->
    <img src="images/bg1.jpg" alt="brings-online.com - under construction" />
    <img src="images/bg2.jpg" alt="brings-online.com - under construction" />
    <img src="images/bg3.jpg" alt="brings-online.com - under construction" />
    <img src="images/bg4.jpg" alt="brings-online.com - under construction" />
        
    </div>
</div>

<script type="text/javascript">
$( '.slideshow' ).cycle();
</script>


<div id="wrapper">
<header>
<!-- Hier kann alternativ auch ein Bild als Logo eingebunden werden -->
<div id="logo">
<div class="title">Wartungsarbeiten</div>
<div class="subtitle">Under Construction</div>
</div>
</header>


<div id="page">

<!-- ==================  Infotexte ================== -->
<div id="info">

<!-- infotext  -->
<h1>Entschuldigung!</h1>
<h2>Das Spiel wird gereade überarbeitet</h2>
<p>Neustart 01.03.2018 wenn Sie das Spiel testen möchten können Sie dies unter <a href="http://beta.battlethegalaxy.de/index.php">beta.Battlethegalaxy.de</a> </p>

<!-- ==================  Kontaktformular ================== -->
<?php if(isset($emailSent) && $emailSent == true) { ?>
<!-- Hier kann der Text eingetragen werden, der nach dem Versand einer Mail angezeigt wird. -->
	<div class="thanks">
   	<h1>Vielen Dank, <?php echo $name;?></h1>
	<h2>Ihre Nachricht wurde verschickt. <br />Sie erhalten schnellstm&ouml;glich Antwort!</h2>
	</div>

<?php } else { ?>
<h1>Sie haben Fragen?</h1>
<h2>Hier können Sie uns eine Nachricht senden</h2>
<div id="contact-form" >
<form action="#" id="contactForm" method="post">
<div class="col-ohc ct">
<label for="contactName">Ihr Name:*</label>
<input required type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" />
<?php if($nameError != '') { ?><span class="error"><?php echo $nameError;?></span> <?php } ?>
</div>
<div class="col-ohc cr ct">
<label for="email">Ihre E-Mail Adresse:*</label>
<input required type="email" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>"  />
<?php if($emailError != '') { ?><span class="error"><?php echo $emailError;?></span><?php } ?>
 </div>
 
<label for="commentsText">Ihre Nachricht:*</label>
<textarea required name="comments" id="commentsText" rows="4" cols="30" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
<?php if($commentError != '') { ?> 	<span class="error"><?php echo $commentError;?></span> <?php } ?>
                    
            
<div class="honey" style="position: absolute; left: -9999px;  top: -9999px;">
<label for="checking" class="honey">Check</label><input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" /></div>
<input type="hidden" name="submitted" id="submitted" value="true" />

<button type="submit">Nachricht jetzt absenden &rarr;</button><br />
</form>
</div><!-- eof contact-form -->
<?php } ?>

<?php if(isset($hasError) || isset($captchaError)) { ?>
        
 <div class="error">
  	<p>Entschuldigung - Es hat einen Fehler bei der &Uuml;bermittlung gegeben!</p><br><br>
		</div>
		<?php } ?>



<!-- ==================  Social Media Icons ================== -->
<div class="social-media">
<div class="smicon"><a href="#"><i class="icon-twitter-1"></i></a></div>
<div class="smicon"><a href="#"><i class="icon-facebook-1"></i></a></div>
<!--<div class="smicon"><a href="#"><i class="icon-xing"></i></a></div> -->
<!--<div class="smicon"><a href="#"><i class="icon-gplus-1"></i></a></div> -->
<!-- <div class="smicon"> <a href="#"><i class="icon-vine"></i></a></div> -->
<!-- <div class="smicon"><a href="#"><i class="icon-linkedin-1"></i></a></div> -->
<!-- <div class="smicon"><a href="#"><i class="icon-stumbleupon-1"></i></a></div> -->
<!-- <div class="smicon"><a href="#"><i class="icon-youtube"></i></a></div> -->
<div class="clear"></div>
</div><!-- eof social media -->



</div><!-- eof info -->
</div><!-- eof page -->
	
<!-- Diese Zeile kann angepasst oder ganz entfernt werden -->
<div id="footer">&copy; 2010-2018 - <a href="http://battlethegalaxy.de">Battlethegalaxy.de</a> - v5.1
<div    <p align="center">  
        <a href="http://www.livewatch.de" target="_blank"><img src="http://uptime.livewatch.de/uptime/59003fb905822" alt="Serverüberwachung / Servermonitoring mit Livewatch.de" border="0"></a>  
        <br><a href="http://www.livewatch.de"></a>  
    </p> </div>
</div><!-- eof wrapper -->
<!-- JavaScript  -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/script.js"></script>

</body>
</html>