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
  <title>Porsche Informatik Neuigkeiten Winter 2010</title>  
</head>
 
  
<body>

<div id="imp">



 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2010 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>


<div id="logo">


	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="35" width="170">
</div>
 

<div id="klammer">
 
<div id="inhalt">

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Neuigkeiten Winter 2010" />
	 

<ul>
			
				
<li>Netzwerk
	<ul>
			
				<li <? if($page == "lo") echo "class='selected'";?> >
          <a href="index.php?page=lo" onmouseover="window.status='Neue Mitarbeiter'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">WLAN in Besprechungsräumen</a>				 			
	 			</li>	
							
							
	</ul>
</li>	
		  

<li>POCSO
	<ul>			
			
				
				<li <? if($page == "haw") echo "class='selected'";?> >
          <a href="index.php?page=haw" onmouseover="window.status='Auslieferungsprozess'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Auslieferungsprozess</a>				 			
	 			</li>
				
				<li <? if($page == "klp") echo "class='selected'";?> >
          <a href="index.php?page=klp" onmouseover="window.status='Konzern PowerPoint-Vorlage'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Konzern PowerPoint-Vorlage</a>				 			
	 			</li>	
 							
				<li <? if($page == "spi") echo "class='selected'";?> >
          <a href="index.php?page=spi" onmouseover="window.status='Neue Mitarbeiter'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neue Mitarbeiter</a>				 			
	 			</li>	
						
			</ul>
			
</li>			

	 

<li>SERVICE DESK
	<ul>
			
			<li <? if($page == "spi") echo "class='selected'";?> >
          <a href="index.php?page=wam" onmouseover="window.status='Supportzeiten zum Jahreswechsel'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Supportzeiten zum Jahreswechsel</a>				 			
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
