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
  <title>Porsche Informatik Newsletter April 2008</title>  
</head>
 
  
<body>
  
<div id="logo">
	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
</div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p>
</div>

 
<div id="klammer">
 
<div id="inhalt">


 
 <h1>April 2008</h1>
 
<ul>

  
	<li>CROSS 2
			<ul>
			
				<li <? if($page == "wag") echo "class='selected'";?> >
          <a href="index.php?page=wag" onmouseover="window.status='Vorschau auf Release 2.08'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Vorschau auf Release 2.08</a>				 			
	 			</li>	
				
				<li <? if($page == "wit") echo "class='selected'";?> >
          <a href="index.php?page=wit" onmouseover="window.status='Abwicklung CO2-Besteuerung neu'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Abwicklung CO<sub>2</sub>-Besteuerung neu</a>				 			
	 			</li>					
					
				<li <? if($page == "let") echo "class='selected'";?> >
          <a href="index.php?page=let" onmouseover="window.status='Automatische Vergütungsverbuchung; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Automatische Vergütungsverbuchung</a>				 			
	 			</li>
								
			</ul>
	 </li>			
	 
	 		
				
				
				
		<li>Anwendungen
			<ul>								
				<li <? if($page == "dan") echo "class='selected'";?> >
          <a href="index.php?page=dan" onmouseover="window.status='MIK-BIS; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">MIK-BIS</a>				 			
	 			</li>
				
			
															 			
	 		</ul>
	 </li>	
	 
	 		
			
	
	   	<li>POCSO
				<ul>
				
					<li <? if($page == "mal") echo "class='selected'";?> >
          <a href="index.php?page=mal" onmouseover="window.status='POCSO-Übersicht neu'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">POCSO-Übersicht neu</a>				 			
	 				</li>		
					
											
														 			
	 			</ul>
			<li>
	
	  
	 
</ul>
 
 
 
 
 
</div>
 

<div id="haupt"><?php include("content/".$page.".txt"); ?>
</div>
 
 
 
<div id="imp">
 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2008 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>
 
</div>
 

</body>
</html>
