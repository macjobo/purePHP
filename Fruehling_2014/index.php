<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'wam1';
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
  <title>Porsche Informatik Neuigkeiten Winter 2014</title>  
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

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Neuigkeiten Winter 2014" />



<ul>


<li>Support
	<ul>
	
	
					<li <? if($page == "wam1") echo "class='selected'";?> >
          <a href="index.php?page=wam1" onmouseover="window.status='Benutzer-Authentifizierung'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Benutzer-Authentifizierung</a>				 			
	 			</li>										
								
						
				
				<li <? if($page == "wam3") echo "class='selected'";?> >
          <a href="index.php?page=wam3" onmouseover="window.status='Unser Dienstleistungsspektrum'; return true;"  onmouseout="window.status='Unser Dienstleistungsspektrum'; return true;">Unser Dienstleistungsspektrum</a>				 			
	 			</li>	
				
			
					<li <? if($page == "alk") echo "class='selected'";?> >
          <a href="index.php?page=alk" onmouseover="window.status='Neues aus dem Service Desk'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neues aus dem Service Desk</a>				 			
	 			</li>		
	
	</ul>
</li>		 
	 



<li>Anwendungen
	<ul>
			
			
				
					<li <? if($page == "alk1") echo "class='selected'";?> >
          <a href="index.php?page=alk1" onmouseover="window.status='Internet Explorer 11'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Internet Explorer 11</a>				 			
	 			</li>		
				
				
				<li <? if($page == "wam2") echo "class='selected'";?> >
          <a href="index.php?page=wam2" onmouseover="window.status='Status Rollout Windows 7'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Status Rollout Windows 7</a>				 			
	 			</li>										
												
				
				<li <? if($page == "klp") echo "class='selected'";?> >
          <a href="index.php?page=klp" onmouseover="window.status='Tipp: Gäste-WLAN'; return true;"  onmouseout="window.status='Unser Dienstleistungsspektrum'; return true;">Tipp: Gast-WLAN</a>				 			
	 			</li>					
				
								
	
													
	</ul>
</li>	



	 
<li>Hardware
	<ul>
						
					<li <? if($page == "mal1") echo "class='selected'";?> >
          <a href="index.php?page=mal1" onmouseover="window.status='Neue Notebook-Modelle'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neue Notebook-Modelle</a>				 			
	 			</li>		
				
				
				
					<li <? if($page == "mal2") echo "class='selected'";?> >
          <a href="index.php?page=mal2" onmouseover="window.status='Neue PC-Modelle'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neue PC-Modelle</a>				 			
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
