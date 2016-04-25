<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'scc';
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
  <title>Porsche Informatik Dezember 2015</title>  
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

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Newsletter November 2015" />
	 

<ul>


	 

<li>CROSS
	<ul>
	
		
				
			<li <? if($page == "scc") echo "class='selected'";?> >
          <a href="index.php?page=scc" onmouseover="window.status='CROSS: Carport-Abfrage'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">CROSS: Carport-Abfrage</a>		
	 		</li>
	
		
			</ul>			
</li>		
	
	<li>SAP
	<ul>
	
		
				
			<li <? if($page == "mab") echo "class='selected'";?> >
          <a href="index.php?page=mab" onmouseover="window.status='SAP: Neuer ermäßigter Steuersatz'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">SAP: Neuer ermäßigter Steuersatz</a>		
	 		</li>
	
		<li <? if($page == "gri") echo "class='selected'";?> >
          <a href="index.php?page=gri" onmouseover="window.status='SAP: Systemanpassungen bei Firmenumgründungen/Adressänderungen'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">SAP: Systemanpassungen bei Firmenumgründungen/Adressänderungen</a>		
	 		</li>
		
			</ul>			
</li>				 
			 
		
			 
	
	<li>POCSO
	<ul>
	<li <? if($page == "jel") echo "class='selected'";?> >
          <a href="index.php?page=jel" onmouseover="window.status='POCSO: Neue Patchkabel mit LED-Funktion'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">POCSO: Neue Patchkabel mit LED-Funktion</a>		
	 		</li>
	
	
	<li <? if($page == "mal1") echo "class='selected'";?> >
          <a href="index.php?page=mal1" onmouseover="window.status='POCSO: Neu im POCSO-Netzwerk'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">POCSO: Neu im POCSO-Netzwerk</a>		
	 		</li>
	
		</ul>			
</li>		
			
		<li>BERATUNG UND TRAINING
	<ul>
	
	<li <? if($page == "jel2") echo "class='selected'";?> >
          <a href="index.php?page=jel2" onmouseover="window.status='Beratung und Training: Neue Seminartermine 1. HJ 2016'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Beratung und Training: Neue Seminartermine 1. HJ 2016</a>		
	 		</li>
	
									
			
		</ul>			
</li>					
			
			
			<li>SERVICE DESK
	<ul>
	
	<li <? if($page == "alk") echo "class='selected'";?> >
          <a href="index.php?page=alk" onmouseover="window.status='Service Desk: Supportzeiten zum Jahreswechsel'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Service Desk: Supportzeiten zum Jahreswechsel</a>		
	 		</li>
	
					</ul>			
</li>			
									
			
		
	
			
				
			
						
<!--	
			
	-->		
		
			</ul>			
</li>		 
	 
	   
	 

	 
	 
	
</li>		 
	 	 
	
	<!--
	
			<li <? if($page == "mal4") echo "class='selected'";?> >
          <a href="index.php?page=mal4" onmouseover="window.status='Neuer Lexmark-Farblaserdrucker'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neuer Lexmark-Farblaserdrucker</a>		
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
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.porscheinformatik.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 27]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.porscheinformatik.com/piwik.php?idsite=27" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->




</body>
</html>


