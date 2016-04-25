<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'lug';
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
  <title>Porsche Informatik Newsletter März 2009</title>  
</head>
 
  
<body>
  
<div id="logo">
	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
</div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p>
</div>

 
<div id="klammer">
 
<div id="inhalt">


 
 <h1>März 2009</h1>
 
 
 <!--

WAG: Notfallkonzept

 
-->


<ul>
 
<li>CROSS 2
	<ul>
			<li <? if($page == "lug") echo "class='selected'";?> >
          <a href="index.php?page=lug" onmouseover="window.status='CROSS für die Volkswagen AG'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">CROSS für die Volkswagen AG</a>				 			
	 		</li>	
			
			
			<li <? if($page == "wag1") echo "class='selected'";?> >
          <a href="index.php?page=wag1" onmouseover="window.status='Tipp: Kennzeichnung Lackmaterial'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Kennzeichnung Lackmaterial</a>				 			
	 		</li>	
	
														
			<li <? if($page == "wag2") echo "class='selected'";?> >
          <a href="index.php?page=wag2" onmouseover="window.status='Tipp: Umgang mit EBV-Schnittstelle; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Umgang mit EBV-Schnittstelle</a>				 			
	 		</li>	
			
	</ul>
</li>
	  
	

<li>POCSO
	<ul>
			
				<li <? if($page == "mal1") echo "class='selected'";?> >
          <a href="index.php?page=mal1" onmouseover="window.status='Tipps zum Energiesparen'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipps zum Energiesparen</a>				 			
	 			</li>	
	</ul>
</li>					
				
		
		  
<li>Hardware
	<ul>
			
				<li <? if($page == "mal2") echo "class='selected'";?> >
          <a href="index.php?page=mal2" onmouseover="window.status='Neue Notebooks'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neue Notebooks</a>				 			
	 			</li>	
			
				
	</ul>
</li>
	  

	  		
		
</ul>
 
 
</div>
 

<div id="haupt"><?php include("content/".$page.".txt"); ?>
</div>
 
 
 
<div id="imp">
 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2009 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>
 
</div>
 

</body>
</html>
