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
  <title>Porsche Informatik M�rz 2015</title>  
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

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Newsletter Februar 2015" />
	 

<ul>


	 

<li>CROSS
	<ul>
	
	<li <? if($page == "scc") echo "class='selected'";?> >
          <a href="index.php?page=scc" onmouseover="window.status='Highlights Allgemein'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">CROSS Release 2.30: Highlights Allgemein</a>		
	 		</li>		
	
	<li <? if($page == "scc1") echo "class='selected'";?> >
          <a href="index.php?page=scc1" onmouseover="window.status='Highlights Service'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">CROSS Release 2.30: Highlights Service</a>		
	 		</li>	
	
	<li <? if($page == "scc2") echo "class='selected'";?> >
          <a href="index.php?page=scc2" onmouseover="window.status='Highlights Neu- u. Gebrauchtwagen'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">CROSS Release 2.30: Highlights Neu- u. Gebrauchtwagen</a>		
	 		</li>	
	
	<li <? if($page == "arn") echo "class='selected'";?> >
          <a href="index.php?page=arn" onmouseover="window.status='Tipp: Inventur'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Inventur</a>		
	 		</li>	
			
			<li <? if($page == "arn1") echo "class='selected'";?> >
          <a href="index.php?page=arn1" onmouseover="window.status='Tipp: Reifenselektion'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Reifenselektion</a>		
	 		</li>	
	
	
				</ul>			
</li>	
	 
	 
	 
		
		 <li>CROSS Beratung und Training
	<ul>
	
	
	
	<li <? if($page == "jel") echo "class='selected'";?> >
          <a href="index.php?page=jel" onmouseover="window.status='Freie Pl�tze CROSS- und SAP-Seminare im M�rz'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Freie Pl�tze CROSS- und SAP-Seminare</a>		
	 		</li>
					
						
			</ul>			
</li>		
		
	<li>POCSO
	<ul>
	
		
	<li <? if($page == "mal1") echo "class='selected'";?> >
          <a href="index.php?page=mal1" onmouseover="window.status='POCSO: Neu im POCSO-Netzwerk'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neu im POCSO-Netzwerk</a>		
	 		</li>
					
				
							</ul>			
</li>	
					
		<li>SERVICE DESK
	<ul>
	
	
	
	<li <? if($page == "alk") echo "class='selected'";?> >
          <a href="index.php?page=alk" onmouseover="window.status='SERVICE DESK: Neue Mitarbeiter'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Fakten aus dem Service Desk</a>		
	 		</li>	
	<li <? if($page == "alk1") echo "class='selected'";?> >
          <a href="index.php?page=alk1" onmouseover="window.status='SERVICE DESK: Fakten aus dem Service Desk'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neue Mitarbeiter</a>		
	 		</li>
		
		
		
			</ul>			
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


