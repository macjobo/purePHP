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
  <title>Neuigkeiten der Porsche Informatik - Herbst 2007</title>  
</head>
 
  
<body>
  
<div id="logo">
	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="33" width="170">
</div>
 
 

 
<div id="streifen"><p>NEUIGKEITEN&nbsp;DER&nbsp;PORSCHE&nbsp;INFORMATIK</p>
</div>

 
<div id="klammer">
 
<div id="inhalt">
 
 
 <h1>Herbst 2007</h1>
 
 
<ul>	
          
	<li>Internet Explorer
			<ul>
					<li <? if($page == "lo") echo "class='selected'";?> >
          <a href="index.php?page=lo" onmouseover="window.status='Vorschau auf Version 7.0'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Vorschau auf Version 7.0</a>				 			
	 				</li>			 			
	 			</ul>
	</li>
	
	<li>Customer Care Center
			<ul>
					<li <? if($page == "wam") echo "class='selected'";?> >
          <a href="index.php?page=wam" onmouseover="window.status='Ihr zentraler Ansprechpartner'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Ihr zentraler Ansprechpartner</a>
        	</li>									
			</ul>
 	</li>		
	
   	<li>Notebook 
			<ul>
			
					<li <? if($page == "lo1") echo "class='selected'";?> >
          <a href="index.php?page=lo1" onmouseover="window.status='Sicherung Eigene Dateien'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Sicherung Eigene Dateien</a>				 			
	 				</li>							 			
	 			</ul>
		</li>
	
	<li>IT-Sicherheit
			<ul>
			
					<li <? if($page == "spi") echo "class='selected'";?> >
          <a href="index.php?page=spi" onmouseover="window.status='Verhalten am Arbeitsplatz'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Verhalten am Arbeitsplatz</a>				 			
	 				</li>							 			
	 			</ul>
		</li> 
			
	<!-- 	<li>Lotus Notes
			<ul>
			
					<li <? if($page == "lo") echo "class='selected'";?> >
          <a href="index.php?page=lo" onmouseover="window.status='Tipps & Tricks zu Lotus Notes'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipps & Tricks</a>				 			
	 				</li>							 			
	 			</ul>
		</li>  -->
	 
</ul>
 
 
 
</div>
 

<div id="haupt"><?php include("content/".$page.".txt"); ?>
</div>
 
 
 
<div id="imp">
 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2007 | Impressum</a> | <!--  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a>  | --> <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>
 
</div>
 

</body>
</html>
