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
  <title>Porsche Informatik Dezember 2012</title>  
</head>
 
  
<body>

<div id="imp">



 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2012 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>


<div id="logo">


	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="35" width="170">
</div>
 

<div id="klammer">
 
<div id="inhalt">

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Newsletter Dezember 2012" />
	 
<ul>	 
	 


	 
	 
	
	
	<li>CROSS
	<ul>
	
				
		<li <? if($page == "wag") echo "class='selected'";?> >
          <a href="index.php?page=wag" onmouseover="window.status='Tipp: Reservierungsübersicht auflösen'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Inventur abwickeln</a>		
	 		</li>	
				
<!--	
			
			
			<li <? if($page == "wag4") echo "class='selected'";?> >
          <a href="index.php?page=wag4" onmouseover="window.status='Tipp: Serienbriefe mit Word 2007'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Serienbriefe mit Word 2007</a>		
	 		</li>	
			
	-->		
			
	
		
			</ul>			
</li>		 
	 
	
<li>POCSO
	<ul>
	
		
	
		<li <? if($page == "mal1") echo "class='selected'";?> >
         <a href="index.php?page=mal1" onmouseover="window.status='Porsche Premium ADSL inkl. POCSO Wireless Lounge'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Porsche Premium ADSL inkl. POCSO Wireless Lounge</a>				 	
		</li>		
	
			<li <? if($page == "kra") echo "class='selected'";?> >
          <a href="index.php?page=kra" onmouseover="window.status='Mangelhafte Sicherheit alter WLAN-Netzwerke'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Mangelhafte Sicherheit alter WLAN-Richtfunkverbindungen</a>		
	 		</li>		
			
			<li <? if($page == "kra1") echo "class='selected'";?> >
          <a href="index.php?page=kra1" onmouseover="window.status='Steigende Bedrohung durch Malware'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Steigende Bedrohung durch Malware</a>		
	 		</li>		
	
		
	
	<!--
	
			<li <? if($page == "mal4") echo "class='selected'";?> >
          <a href="index.php?page=mal4" onmouseover="window.status='Neuer Lexmark-Farblaserdrucker'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neuer Lexmark-Farblaserdrucker</a>		
	 		</li>	
	-->		
		</ul>			
	
</li>


<li>Porsche Informatik
	<ul>
	
				
		<li <? if($page == "jel") echo "class='selected'";?> >
          <a href="index.php?page=jel" onmouseover="window.status='Seminartermine 1. Halbjahr 2013'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Seminartermine 1. Halbjahr 2013</a>		
	 		</li>	
				
<!--	
			
			
			<li <? if($page == "wam") echo "class='selected'";?> >
          <a href="index.php?page=wam" onmouseover="window.status='Supportzeiten zum Jahreswechsel'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Supportzeiten zum Jahreswechsel</a>		
	 		</li>	
			
	-->		
		</ul>			
	
</li>
	
	<li>Hardware
	<ul>
	
				
		<li <? if($page == "mal2") echo "class='selected'";?> >
          <a href="index.php?page=mal2" onmouseover="window.status='Neuer Farblaserdrucker von Lexmark'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neuer Farblaserdrucker von Lexmark</a>		
	 		</li>	
				
<!--	
			
			
			<li <? if($page == "wam") echo "class='selected'";?> >
          <a href="index.php?page=wam" onmouseover="window.status='Supportzeiten zum Jahreswechsel'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Supportzeiten zum Jahreswechsel</a>		
	 		</li>	
			
	-->		
		</ul>			
	
</li>
	
	
	
	
<li>Service Desk
	<ul>
	
				
		<li <? if($page == "wam") echo "class='selected'";?> >
          <a href="index.php?page=wam" onmouseover="window.status='Supportzeiten zum Jahreswechsel'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Supportzeiten zum Jahreswechsel</a>		
	 		</li>	
				
<!--	
			
			
			<li <? if($page == "wam") echo "class='selected'";?> >
          <a href="index.php?page=wam" onmouseover="window.status='Supportzeiten zum Jahreswechsel'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Supportzeiten zum Jahreswechsel</a>		
	 		</li>	
			
	-->		
			
	
		
			</ul>			
</li>		 


	
</ul>
 
</div>
 


<div id="haupt"><?php include("content/".$page.".txt"); ?>
</div>
 
 
 <div id="leiste">
 
<img src="images/leiste.gif" width="900" height="7" alt="leiste (1K)" />
 
</div>
 

 </div>




<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.porscheinformatik.com/" : "http://piwik.porscheinformatik.com/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 3);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://piwik.porscheinformatik.com/piwik.php?idsite=3" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->




</body>
</html>
