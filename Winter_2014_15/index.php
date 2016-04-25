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
  <title>Porsche Informatik Neuigkeiten Winter 2014/15</title>  
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

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Neuigkeiten Winter 2014_15" />
	 


<ul>







<li>IT-Sicherheit
	<ul>
				<li <? if($page == "lo1") echo "class='selected'";?> >
          <a href="index.php?page=lo1" onmouseover="window.status='USB-Verschlüsselung und Passwort-Safe'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Passwort-Safe</a>				 			
	 			</li>										
								
 				<li <? if($page == "mim") echo "class='selected'";?> >
          <a href="index.php?page=mim" onmouseover="window.status='Gefährliche Spam-Mails'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Gefährliche Spam-Mails</a>				 			
	 			</li>		
												
	</ul>
</li>	



<li>Porsche Informatik
	<ul>
	
	<!--
				<li <? if($page == "weh") echo "class='selected'";?> >
          <a href="index.php?page=weh" onmouseover="window.status='Neues Bankensystem CarFin'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neues Bankensystem CarFin</a>				 			
	 			</li>					
				
				-->					
								
				
					<li <? if($page == "klb1") echo "class='selected'";?> >
          <a href="index.php?page=klb1" onmouseover="window.status='Porsche Informatik in China'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Porsche Informatik in China</a>				 			
	 			</li>		
		</ul>
</li>	


	 
<li>Mobile Geräte
	<ul>
				<li <? if($page == "lo2") echo "class='selected'";?> >
          <a href="index.php?page=lo2" onmouseover="window.status='Mobiler Datenzugriff für iPhone/iPad'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Mobiler Datenzugriff für iPhone und iPad</a>				 			
	 			</li>				
					
				<li <? if($page == "lo3") echo "class='selected'";?> >
          <a href="index.php?page=lo3" onmouseover="window.status='Notes-Aufgaben mobil bearbeiten'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Notes-Aufgaben mobil bearbeiten</a>				 			
	 			</li>						
				
				
				
	</ul>
</li>	


<li>Infrastruktur
	<ul>
				<li <? if($page == "spi") echo "class='selected'";?> >
          <a href="index.php?page=spi" onmouseover="window.status='Bewegte Zeiten'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Bewegte Zeiten im IS</a>				 			
	 			</li>		
	</ul>
</li>	


<li>Support
	<ul>
	
				<li <? if($page == "klb2") echo "class='selected'";?> >
          <a href="index.php?page=klb2" onmouseover="window.status='Wartungswochenenden 2015'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Wartungswochenenden 2015</a>				 			
	 			</li>		
					
	
				<li <? if($page == "alk") echo "class='selected'";?> >
          <a href="index.php?page=alk" onmouseover="window.status='Supportzeiten zum Jahreswechsel'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Supportzeiten zum Jahreswechsel</a>				 			
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
