<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'lo';
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
  <title>Porsche Informatik Neuigkeiten Frühjahr 2016</title>  
	

</head>
 
  
<body>



<div id="imp">



 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2015 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>


<div id="logo">


	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="35" width="170">
</div>
 

<div id="klammer">
 
<div id="inhalt">

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Neuigkeiten Frühjahr 2016" />
	 
	

	
<ul>



<li>Telefonie
		<ul>
		
				<li <? if($page == "lo") echo "class='selected'";?> >
          <a href="index.php?page=lo" onmouseover="window.status='Windows Phones freigegeben'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Windows Phones jetzt!</a>				 			
	 			</li>		

		</ul>
</li>	




<li>IT-Sicherheit
		<ul>
		
				<li <? if($page == "mim") echo "class='selected'";?> >
          <a href="index.php?page=mim" onmouseover="window.status='Cryptolocker und kein Ende'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Cryptolocker und kein Ende</a>				 			
	 			</li>		

		</ul>
</li>	





<li>Tipps und Tricks
		<ul>
		
				<li <? if($page == "spi1") echo "class='selected'";?> >
          <a href="index.php?page=spi1" onmouseover="window.status='Passwort-Safe - feine Sache!'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Passwort-Safe - feine Sache!</a>				 			
	 			</li>		
				
				<li <? if($page == "spi2") echo "class='selected'";?> >
          <a href="index.php?page=spi2" onmouseover="window.status='Nützliches in Notes'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Nützliches in Notes</a>				 			
	 			</li>		
								
		</ul>
</li>				

<li>Support
	<ul>

								
		 		<li <? if($page == "alk1") echo "class='selected'";?> >
          <a href="index.php?page=alk1" onmouseover="window.status='Wissenswertes zum Gäste-WLAN'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Wissenswertes zum Gäste-WLAN</a>				 			
	 			</li>		
						
 				<li <? if($page == "alk2") echo "class='selected'";?> >
          <a href="index.php?page=alk2" onmouseover="window.status='Leistungsschau Service Desk 2015'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">"Leistungsschau" Service Desk 2015</a>				 			
	 			</li>		
				
					
	</ul>
</li>	
				
				




</div>
 



<div id="haupt"><?php include("content/".$page.".txt"); ?>
</div>
 
 
 <div id="leiste">
 
<img src="images/leiste.gif" width="900" height="7" alt="leiste (1K)" />
 
</div>
 

 </div>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.porscheinformatik.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 5]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.porscheinformatik.com/piwik.php?idsite=5" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>
</html>
