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
  <title>Porsche Informatik Newsletter Jänner 2010</title>  
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

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Newsletter Jänner 2010" />
	 

<ul>

 
 

	<li>CROSS
	<ul>
	

				
					<li <? if($page == "wag") echo "class='selected'";?> >
          <a href="index.php?page=wag" onmouseover="window.status='Tipp: Auftragseröffnung optimieren'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Auftragseröffnung optimieren</a>				 			
	 				</li>	
	
	
					<li <? if($page == "wag2") echo "class='selected'";?> >
          <a href="index.php?page=wag2" onmouseover="window.status='Tipp: Teilebestände in Filialbetrieben'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Teilebestände in Filialbetrieben</a>				 			
	 				</li>			
		
			</ul>
	</li>		

	
	<li>SAP
	<ul>
					<li <? if($page == "ren") echo "class='selected'";?> >
          <a href="index.php?page=ren" onmouseover="window.status='Beratung zum Fixpreis'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Beratung zum Fixpreis</a>				 			
	 			</li>		
			</ul>
</li>		



	 <li>POI ACADEMY
		<ul>
					<li <? if($page == "wit2") echo "class='selected'";?> >
          <a href="index.php?page=wit2" onmouseover="window.status='Neues MIK-BIS-Anwender-Seminar'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neues MIK-BIS-Anwender-Seminar</a>				 			
	 			</li>		
		</ul>
</li>		

	
 <li>ANWENDUNGEN
		<ul>
					<li <? if($page == "wit") echo "class='selected'";?> >
          <a href="index.php?page=wit" onmouseover="window.status='Neue EBV-Version 3.4'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neue EBV-Version 3.4</a>				 			
	 			</li>		
		</ul>
</li>		
	
	


<li>POCSO
	<ul>
				<li <? if($page == "mal2") echo "class='selected'";?> >
          <a href="index.php?page=mal2" onmouseover="window.status='WLAN bei POCSO Teleworker'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">WLAN bei POCSO Teleworker</a>				 			
	 			</li>			
				
				
					<li <? if($page == "mal") echo "class='selected'";?> >
          <a href="index.php?page=mal" onmouseover="window.status='Neues Desktop-Management'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neues Desktop-Management</a>				 			
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
