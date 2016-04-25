<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'wid';
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
  <title>Porsche Informatik April 2016</title>  
</head>
 
  
<body>

<div id="imp">



 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2016 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>


<div id="logo">


	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="35" width="170">
</div>
 

<div id="klammer">
 
<div id="inhalt">

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Newsletter März 2016" />
	 

<ul>


	 <li>CROSS
	<ul>
		
		<li <? if($page == "wid") echo "class='selected'";?> >
          <a href="index.php?page=wid" onmouseover="window.status='CROSS Release 2.34: Allgemein'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">CROSS Release 2.34: Allgemein</a>		
	 		</li>
	<li <? if($page == "wid1") echo "class='selected'";?> >
          <a href="index.php?page=wid1" onmouseover="window.status='CROSS Release 2.34: Werkstattplaner Neu'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">CROSS Release 2.34: Werkstattplaner Neu</a>		
	 		</li>
			
			<li <? if($page == "wid2") echo "class='selected'";?> >
          <a href="index.php?page=wid2" onmouseover="window.status='CROSS Release 2.34: Mobile Serviceannahme'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">CROSS Release 2.34: Mobile Serviceannahme</a>		
	 		</li>
			
			</ul>			
</li>		
				
			 
	
	<li>POCSO
	<ul>
		
		<li <? if($page == "jel") echo "class='selected'";?> >
          <a href="index.php?page=jel" onmouseover="window.status='Kostenloser Austausch bestehender Accesspoints'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Kostenloser Austausch bestehender Accesspoints</a>		
	 		</li>
		
		<li <? if($page == "mal2") echo "class='selected'";?> >
          <a href="index.php?page=mal2" onmouseover="window.status='IBM Notes 9 Rollout startet'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">IBM Notes 9 Rollout startet</a>		
	 		</li>
			
	<li <? if($page == "mal1") echo "class='selected'";?> >
          <a href="index.php?page=mal1" onmouseover="window.status='Neu im POCSO-Netzwerk'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neu im POCSO-Netzwerk</a>		
	 		</li>
	
						
			</ul>			
</li>	
		
		
		
	<li>VU2
	<ul>
		
	<li <? if($page == "stz") echo "class='selected'";?> >
          <a href="index.php?page=stz" onmouseover="window.status='Neue VU2-Version 3.00'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neue VU2-Version 3.00</a>		
	 		</li>
						
			</ul>			
</li>				
		
		<li>Beratung und Training
	<ul>
		
	<li <? if($page == "jel2") echo "class='selected'";?> >
          <a href="index.php?page=jel2" onmouseover="window.status='Seminar CROSS NW/GW-Disposition'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Seminar CROSS NW/GW-Disposition</a>		
	 		</li>
						
			</ul>			
</li>				
		
		
		
	<li>SERVICE DESK
	<ul>
		
	<li <? if($page == "alk") echo "class='selected'";?> >
          <a href="index.php?page=alk" onmouseover="window.status='Jahresrückblick 2015'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Jahresrückblick 2015</a>		
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


