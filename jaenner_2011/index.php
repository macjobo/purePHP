<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'ric';
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
  <title>Porsche Informatik Newsletter Jänner 2011</title>  
</head>
 
  
<body>

<div id="imp">



 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2011 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>


<div id="logo">


	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="35" width="170">
</div>
 

<div id="klammer">
 
<div id="inhalt">

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Newsletter Jänner 2011" />
	 


<ul>
<!--

KLB: Seminartermine

WAG: Änderungen bei Stempelung ("Interne Verrechnung")
WAG: Abwicklung Gutschriften
RIC: Aktivitätenmanagement mit CROSS 2.14 (Input aus Programmaussendungsinfo)
MAL: Neues im POCSO-Netzwerk


-->

<li>CROSS Release 2.14
	<ul>			
		
		
			<li <? if($page == "ric") echo "class='selected'";?> >
          <a href="index.php?page=ric" onmouseover="window.status='Aktivitätenmanagement'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Aktivitätenmanagement</a>				 			
	 		</li>	
			
		</ul>
</li>		



<li>CROSS
	<ul>	
		<li <? if($page == "wag1") echo "class='selected'";?> >
          <a href="index.php?page=wag1" onmouseover="window.status='Neue Definition Anwesenheit'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neue Definition "Anwesenheit"</a>				 			
	 	</li>	
	
	
			<li <? if($page == "wag2") echo "class='selected'";?> >
          <a href="index.php?page=wag2" onmouseover="window.status='Leistungsverrechnung durch Gutschrift'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Leistungsverrechnung mittels Gutschrift</a>				 			
	 	</li>	
	
	
	</ul>
</li>		
		



<li>Porsche Informatik Academy
	<ul>			
		
		
			<li <? if($page == "klb") echo "class='selected'";?> >
          <a href="index.php?page=klb" onmouseover="window.status='Schulungstermine 1. Halbjahr'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Schulungstermine 1. Halbjahr</a>				 			
	 		</li>	
			
		</ul>
</li>		




<li>POCSO
	<ul>	

		<li <? if($page == "mal") echo "class='selected'";?> >
          <a href="index.php?page=mal" onmouseover="window.status='Neu im POCSO-Netzwerk'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neu im POCSO-Netzwerk</a>				 	
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








</body>
</html>
