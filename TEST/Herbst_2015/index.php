<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'klb1';
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
  <title>Porsche Informatik Neuigkeiten Herbst 2015</title>  
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

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Neuigkeiten Herbst 2015" />
	 
	
	<!--
	
	KLB: Start Bosnien mit 9 POI-Systemen
KLB (+SPI): Highlights Notes 9
ALK: Feiertagssupport/ Erreichbarkeit des Service Desks
POE: Archivlaufwerk I:
WAM: Vorschau ITSM-Suite neu
	
	
	-->
	
	
	 


<ul>




<li>Porsche Informatik
	<ul>
						
 				<li <? if($page == "klb1") echo "class='selected'";?> >
          <a href="index.php?page=klb1" onmouseover="window.status='POI-Systeme in Bosnien'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">POI-Systeme in Bosnien</a>				 			
	 			</li>		
												
	</ul>
</li>	


<li>Anwendungen
		<ul>
		
				<li <? if($page == "klb2") echo "class='selected'";?> >
          <a href="index.php?page=klb2" onmouseover="window.status='Rollout und Highlights Notes 9'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Rollout und Highlights Notes 9</a>				 			
	 			</li>		
	
		</ul>
</li>	



<li>Infrastruktur
		<ul>
		
				<li <? if($page == "poe") echo "class='selected'";?> >
          <a href="index.php?page=poe" onmouseover="window.status='Abschaltung Archivlaufwerk I:/'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;"> Abschaltung Archivlaufwerk I:/</a>				 			
	 			</li>		

		</ul>
</li>	

<li>Support
	<ul>
				
			 		<li <? if($page == "wam1") echo "class='selected'";?> >
          <a href="index.php?page=wam1" onmouseover="window.status='Online-Support Neu'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Online-Support Neu</a>				 			
	 			</li>			
						
 				<li <? if($page == "wam2") echo "class='selected'";?> >
          <a href="index.php?page=wam2" onmouseover="window.status='Neue Feiertagsbereitschaft'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neue Feiertagsbereitschaft</a>				 			
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



</body>
</html>
