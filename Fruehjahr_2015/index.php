<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'weh';
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
  <title>Porsche Informatik Neuigkeiten Fr�hjahr 2015</title>  
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

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Neuigkeiten Fr�hjahr 2015" />
	 


<ul>


<li>Porsche Informatik
		<ul>
				<li <? if($page == "weh") echo "class='selected'";?> >
          <a href="index.php?page=weh" onmouseover="window.status='Neues Bankensystem CarFin'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neues Bankensystem CarFin</a>				 			
	 			</li>					
		</ul>
</li>	




<li>IT-Sicherheit
	<ul>
						
 				<li <? if($page == "mim") echo "class='selected'";?> >
          <a href="index.php?page=mim" onmouseover="window.status='Dubiose Telefonanrufe'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Dubiose Telefonanrufe</a>				 			
	 			</li>		
												
	</ul>
</li>	


<li>Infrastruktur
	<ul>
				<li <? if($page == "spi") echo "class='selected'";?> >
          <a href="index.php?page=spi" onmouseover="window.status='G�ste-WLAN Neu'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">G�ste-WLAN Neu</a>				 			
	 			</li>		
				
					<li <? if($page == "lo") echo "class='selected'";?> >
          <a href="index.php?page=lo" onmouseover="window.status='Jahresr�ckblick Client-Team'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Jahresr�ckblick Client-Team</a>				 			
	 			</li>		
				
				
				
	</ul>
</li>	



<li>Mailing
	<ul>
				<li <? if($page == "boj") echo "class='selected'";?> >
          <a href="index.php?page=boj" onmouseover="window.status='Umstellung auf IBM Notes 9'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Umstellung auf IBM Notes 9</a>				 			
	 			</li>		
	</ul>
</li>	



<li>Support
	<ul>
	
				<li <? if($page == "alk") echo "class='selected'";?> >
          <a href="index.php?page=alk" onmouseover="window.status='Neue KollegInnen im Service Desk'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neue KollegInnen im Service Desk</a>				 			
	 			</li>		
					
	
				<li <? if($page == "alk2") echo "class='selected'";?> >
          <a href="index.php?page=alk2" onmouseover="window.status='Jahresr�ckblick Service Desk 2014'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Jahresr�ckblick Service Desk</a>				 			
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
