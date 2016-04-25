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
  <title>Neuigkeiten der Porsche Informatik - Herbst 2008</title>  
</head>
 
  
<body>
  
<div id="logo">
	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="33" width="170">
</div>
 
 

 
<div id="streifen"><p>NEUIGKEITEN&nbsp;DER&nbsp;PORSCHE&nbsp;INFORMATIK</p>
</div>

 
<div id="klammer">
 
<div id="inhalt">
 
 
 <h1>Herbst 2008</h1>
 
 
<ul>	        
	
	
	<li>Support
			<ul>
					<li <? if($page == "hg") echo "class='selected'";?> >
          <a href="index.php?page=hg" onmouseover="window.status='Microsoft Office'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">CCC wird zum Service Desk</a>
        	</li>									
			</ul>
 	</li>		
	
	<li>IT Allgemein
			<ul>
					<li <? if($page == "hg1") echo "class='selected'";?> >
          <a href="index.php?page=hg1" onmouseover="window.status='Stromsparen'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Stromsparen</a>				 			
	 				</li>			 			
	 			</ul>
	</li>
	
   	<li>Client TIPP 
			<ul>
			
					<li <? if($page == "lo1") echo "class='selected'";?> >
          <a href="index.php?page=lo1" onmouseover="window.status='Auswahl-Tool'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Druckerauswahl-Tool</a>				 			
	 				</li>							 			
	 			</ul>
		</li>
	
	<li>IT-Sicherheit
			<ul>
			
					<li <? if($page == "li") echo "class='selected'";?> >
          <a href="index.php?page=li" onmouseover="window.status='Umgang mit E-Mails von Kollegen'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Umgang mit E-Mails von Kollegen</a>				 			
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
 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2008 | Impressum</a> | <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a>  | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>
 
</div>
 

</body>
</html>
