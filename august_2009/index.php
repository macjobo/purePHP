<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'wag';
  } 

  ?>
  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
        "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
  <meta http-equiv="imagetoolbar" content="no" />
    <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />  
  <title>Porsche Informatik Newsletter August 2009</title>  
</head>
 
  
<body>
  
<div id="logo">
	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
</div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p>
</div>

 
<div id="klammer">
 
<div id="inhalt">


 
 <h1>August 2009</h1>
 
 
<ul>
 

<li>CROSS 2
	<ul>
			
				<li <? if($page == "wag") echo "class='selected'";?> >
          <a href="index.php?page=wag" onmouseover="window.status='Vorschau auf Release 2.11'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Vorschau auf Release 2.11 - Service</a>				 			
	 			</li>	
				
				
						<li <? if($page == "ric") echo "class='selected'";?> >
          <a href="index.php?page=ric" onmouseover="window.status='Vorschau auf Release 2.11'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Vorschau auf Release 2.11 - Handel</a>				 			
	 			</li>	
				
				
					<li <? if($page == "wag2") echo "class='selected'";?> >
          <a href="index.php?page=wag2" onmouseover="window.status='Tipp: Sonderzeichen bei E-Mails'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Sonderzeichen bei E-Mails</a>				 			
	 			</li>	
		
				
					<!--	<li <? if($page == "wag2") echo "class='selected'";?> >
          <a href="index.php?page=wag2" onmouseover="window.status='Tipp: Teilmengen zubuchen'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Teilmengen zubuchen</a>				 			
	 			</li>	
				-->
				
				
	</ul>
</li>					
				
		  
		  
<li>POI Academy
	<ul>
			
			<li <? if($page == "klb") echo "class='selected'";?> >
          <a href="index.php?page=klb" onmouseover="window.status='Seminartermine 2. Halbjahr 2009'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Seminartermine 2. Halbjahr 2009</a>				 			
	 			</li>	
			
				
				<li <? if($page == "roh") echo "class='selected'";?> >
          <a href="index.php?page=roh" onmouseover="window.status='Seminar CROSS Reifenmanagement'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Seminar "CROSS Reifenmanagement"</a>				 			
	 			</li>	
	
				
				
	</ul>
</li>
	  

<li>IT-Sicherheit
	<ul>
			
				<li <? if($page == "spi") echo "class='selected'";?> >
          <a href="index.php?page=spi" onmouseover="window.status='Tipp: Sichere Passwörter'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Sichere Passwörter</a>				 			
	 			</li>	
			</ul>
</li>					
				

	
				
</ul>
 
 
</div>
 

<div id="haupt"><?php include("content/".$page.".txt"); ?>
</div>
 
 
 
<div id="imp">
 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2009 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>
 
</div>
 

</body>
</html>
