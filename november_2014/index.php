<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'klb2';
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
  <title>Porsche Informatik November 2014</title>  
</head>
 
  
<body>

<div id="imp">



 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2014 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>


<div id="logo">


	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="35" width="170">
</div>
 

<div id="klammer">
 
<div id="inhalt">

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Newsletter November 2014" />
	 

<ul>

 <li>Porsche Informatik
		<ul>
	
				<li <? if($page == "klb2") echo "class='selected'";?> >
          <a href="index.php?page=klb2" onmouseover="window.status='Porsche Informatik zieht um'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Porsche Informatik zieht um</a>		
	 		</li>		
		
		</ul>			
</li>			
			
	 

<li>CROSS
	<ul>
	
	<li <? if($page == "klb1") echo "class='selected'";?> >
          <a href="index.php?page=klb1" onmouseover="window.status='Neuer Verk�uferarbeitsplatz in China'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neuer Verk�uferarbeitsplatz in China</a>		
	 </li>		
						
	</ul>			
</li>	

	 	 	 
 <li>Hardware
		<ul>
	
				<li <? if($page == "mal3") echo "class='selected'";?> >
          <a href="index.php?page=mal3" onmouseover="window.status='Neuer Lexmark-Mono-Laserdrucker'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neuer Lexmark-Mono-Laserdrucker</a>		
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

