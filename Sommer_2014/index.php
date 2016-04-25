<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'lo1';
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
  <title>Porsche Informatik Neuigkeiten Sommer 2014</title>  
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

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Neuigkeiten Sommer 2014" />

	  

<ul>

<li>IT-Sicherheit
	<ul>
			
		
	
					<li <? if($page == "lo1") echo "class='selected'";?> >
          <a href="index.php?page=lo1" onmouseover="window.status='Verschlüsselung von USB-Datenträger'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Verschlüsselung von USB-Datenträger</a>				 			
	 			</li>										
								
								
				
					<li <? if($page == "mim") echo "class='selected'";?> >
          <a href="index.php?page=mim" onmouseover="window.status='Erneute E-Mail-Spamwelle'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Erneute E-Mail-Spamwelle</a>				 			
	 			</li>		
			
								
	
													
	</ul>
</li>	

<li>Anwendungen
	<ul>
	
				
				<li <? if($page == "lo2") echo "class='selected'";?> >
          <a href="index.php?page=lo2" onmouseover="window.status='Windows-7-Rollout'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Windows-7-Rollout</a>				 			
	 			</li>	
				
			
					<li <? if($page == "lo3") echo "class='selected'";?> >
          <a href="index.php?page=lo3" onmouseover="window.status='Rollout Internet Explorer 11'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Rollout Internet Explorer 11</a>				 			
	 			</li>		
				
				
					<li <? if($page == "buc") echo "class='selected'";?> >
          <a href="index.php?page=buc" onmouseover="window.status='Sicherer Datentransfer'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Sicherer Datentransfer</a>				 			
	 			</li>		
								
																	
	
	</ul>
</li>		 
	 

	 
<li>Mobile Geräte
	<ul>
						
					<li <? if($page == "wam") echo "class='selected'";?> >
          <a href="index.php?page=wam" onmouseover="window.status='BlackBerry 10'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">BlackBerry 10</a>				 			
	 			</li>				
	</ul>
</li>	



<li>Support
	<ul>
						
					<li <? if($page == "wam2") echo "class='selected'";?> >
          <a href="index.php?page=wam2" onmouseover="window.status='Benutzerauthentifizierung; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Benutzerauthentifizierung</a>				 			
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
