<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'hg';
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
  <title>Porsche Informatik Neuigkeiten Herbst 2012</title>  
</head>
 
  
<body>

<div id="imp">



 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2012 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>


<div id="logo">


	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="35" width="170">
</div>
 

<div id="klammer">
 
<div id="inhalt">

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Neuigkeiten Herbst 2012" />
	
<ul>
	 
<li>Lotus Notes
	<ul>
			
				<li <? if($page == "hg") echo "class='selected'";?> >
          <a href="index.php?page=hg" onmouseover="window.status='Mailfileübergrößen'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Mailfileübergrößen</a>				 			
	 			</li>					
													
	</ul>
</li>		 
	 
	 
<li>POCSO
	<ul>			
			
				
				<li <? if($page == "lo") echo "class='selected'";?> >
          <a href="index.php?page=lo" onmouseover="window.status='VPN Authentifizierung neu'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">VPN Authentifizierung neu</a>				 			
	 			</li>
				
				<li <? if($page == "lo2") echo "class='selected'";?> >
          <a href="index.php?page=lo2" onmouseover="window.status='Neuer Mitarbeiter'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neuer Mitarbeiter</a>				 			
	 			</li>	
 							
				<li <? if($page == "lo3") echo "class='selected'";?> >
          <a href="index.php?page=lo3" onmouseover="window.status='WLAN'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">WLAN</a>				 			
	 			</li>	
						
			</ul>
			
</li>			
				
<li>IT-Sicherheit
	<ul>
			
				<li <? if($page == "mim") echo "class='selected'";?> >
          <a href="index.php?page=mim" onmouseover="window.status='Mobile Datenträger'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Mobile Datenträger</a>				 			
	 			</li>	
				
					<li <? if($page == "mim2") echo "class='selected'";?> >
          <a href="index.php?page=mim2" onmouseover="window.status='E-Mail Sicherheit'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">E-Mail Sicherheit</a>				 			
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
