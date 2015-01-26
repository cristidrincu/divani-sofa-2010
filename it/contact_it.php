<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Divani&amp;Sofa - Contemporary Home - Despre noi</title>
<link rel="stylesheet" type="text/css" href="../css/divaniesofa.css" media="screen"/>
<script src="../js/cufon-yui.js" type="text/javascript"></script>
<script src="../js/Brush_Script_Std_italic_500.font.js" type="text/javascript"></script>
<script type="text/javascript">
		Cufon.replace('h1');
		
</script>

</head>

<body>
<div class="mainContentContainer">
	<div class="containerLogo">
   	  <a href="../index.html" target="_self"><img src="../images/logo/logo.jpg" alt="Divani&amp;Sofa - Contemporary Home"  border=0 /></a>
    </div><!--ends containerLogo-->
    <div class="containerLinkItaliano">
    	<a href="../contact.php" target="_self">ROMANA</a>
      <a href="contact_it.php" target="_self">ITALIANO</a>
</div><!--ends containerLinkItaliano-->
    <br class="clearFloats"/>
<div class="containerUniversalContent">
    	<div class="mainMenu">
        	<ul class="listMenuTimesNewRoman">
            	<li>
               	  <a class="inactiveLink" href="index_it.html" target="_self">HOME</a>
                </li>
                <li><a class="inactiveLink" href="despre_noi_it.html" target="_self">CHI SIAMO</a></li>
                <li><a class="inactiveLink" href="colectii_selection_page_main_it.html" target="_self">PRODOTTI</a></li>
                <li><a class="activeLink" href="contact_it.php" target="_self">CONTATTI</a></li>
            </ul>
        </div><!--ends mainMenu-->		
        <div class="sectionMotto">
        	<h1>Contatti</h1>
        </div><!--ends sectionMotto-->
        <br class="clearFloats"/>
        
        
        <div class="wrapperForm">
        
<?php
	   if ($_SERVER['REQUEST_METHOD'] != 'POST'){
      $me = $_SERVER['PHP_SELF'];
?>
		        <form method='post' action="<?=$me?>">
		  			<div class="wrapperLabels"> 
                		<div><p class="ContactText">*NUME</p></div>
                        <div><p class="ContactText">TELEFON</p></div>
                        <div><p class="ContactText">*ADRESA E-MAIL</p></div>
                        <div><p class="ContactText">*MESAJ</p></div>
                	</div>
                	<div class="wrapperTextArea"> 
                    	<input class="textarea" name='name' type='text' />
                        <input class="textarea" name='phone' type='text' />
                        <input class="textarea" name='email' type='text' />
                        <textarea name='message' rows="80" cols="30" ></textarea>
                    </div>
                
				<input id="SendButton" type='submit' value=" "/>
        
        	    </form>

<?php
   } else {
      error_reporting(0);
      // initialize a array to 
      //hold any errors we encounter
      $errors = array();

      
      // check to see if a name was entered
      if (!$_POST['email'])
         $errors[] = "<META HTTP-EQUIV='refresh' content='0;URL=contact.php'>";
      // if there are any errors, display them
      if (count($errors)>0) {
         foreach($errors as $err)
            echo "<META HTTP-EQUIV='refresh' content='0;URL=contact.php'>";
	  } else {
         // no errors, so we build our message
         
         $from = stripslashes($_POST['name']);
		 $subject = "Mesaj de pe divaniesofa.ro";
		 $email= stripslashes($_POST['email']);
		 $phone=stripslashes($_POST['phone']);
		 $msg = "Messaj trimis de $from\n\n";
		 $msg.= "Numar de telefon:$phone\n\nMesaj:";
		 $msg.=stripslashes($_POST['message']);
		 
        if(mail( "robert.sescu@globe-studios.com", "$subject", $msg,"From: $email"))
			echo "<div class='wrapperLabels'> <p class='ContactText'>Mesaj trimis cu succes!</p> </div>";
		else
			echo "<META HTTP-EQUIV='refresh' content='0;URL=contact.php'>";
      } }
?>
        
        </div><!--ends wrapperForm-->
        
        <div class="wrapperInformatiiContact">
        	<p class="ICTitle">INFORMATII CONTACT </p><br />
            <p class="ICOther">ADRESA: </p>
            <p class="ICOther">TELEFOANE: </p>
            <p class="ICOther">EMAIL: </p>
        </div><!--ends wrapperInformatiiContact-->
        	
      <br class="clearFloats"/>
  </div><!--ends containerUniversalContent-->
    <div class="containerBottomContent">
    	<div class="contentWrapper285">
        	<h2>CHI SIAMO</h2>
            <p>Su Divani &amp;Sofa
DIVANI & SOFA nasce dall’idea dell’imprenditore italiano Lorenzo Dimagli, da anni impegnato nel settore dell’arredamento e del design di interni.</p>
          <a href="despre_noi_it.html" target="_self">clicca qui per maggiori dettagli</a>
        </div><!--ends contentWrapper285-->
        <div class="contentWrapper285">
        	<h2>PRODOTTI</h2>
            <ul>
            	<li>
                    <p class="increaseFontTitle">INDOOR</p>
                  <a href="colectii_selection_page_it.html" target="_self">CLICCA QUI PER MAGGIORI DETTAGLI</a>
                  <img class="breakLineBottomContent" src="../images/break_line_bottom_content/break_line.jpg"/>
               	</li>
                <li>
                    <p class="increaseFontTitle">OUTDOOR</p>
                  <a href="colectii_selection_page_main_outdoor_it.html" target="_self">CLICCA QUI PER MAGGIORI DETTAGLI</a>
                  <img class="breakLineBottomContent" src="../images/break_line_bottom_content/break_line.jpg"/>
                </li>
          </ul>
          <a href="colectii_selection_page_main_it.html" target="_self">CLICCA QUI PER TUTTI GLI COLEZZIONI</a>
        </div><!--ends contentWrapper285-->
        <div class="contactWrapper">
        	<h2>CONTATTI</h2>
            <ul>
            	<li>
            		<h3>ADRESA</h3>
                	<p>Showroom Timisoara, Blv. Liviu Rebreanu 1/3</p>
                  <img class="breakLineBottomContent" src="../images/break_line_bottom_content/break_line.jpg"/>
                </li>
                <li>
            		<h3>TELEFOANE</h3>
                	<p>0356453753, fax: 0356453853</p>
                  <img class="breakLineBottomContent" src="../images/break_line_bottom_content/break_line.jpg"/>
                </li>
                <li>
            		<h3>EMAIL</h3>
                	<p>divaniesofa@gmail.com</p>
                </li>
          </ul>
        </div><!--ends contactWrapper-->
        <br class="clearFloats"/>
    </div><!--ends containerBottomContent-->
</div><!--ends mainContentContainer-->
<div class="containerFooter">
	<div class="wrapperFooter">
    	<div class="wrapperFooterContent">
        	<p>Copyright 2010 DIVANI E SOFA’ | DESIGN&amp;DEVELOPMENT - <a href="http://www.globe-studios.com" target="_blank">GLOBE STUDIOS</a></p>
        </div>  	
    </div><!--ends wrapperFooter-->
</div><!--ends containerFooter-->

<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
