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
  <title>Porsche Informatik Newsletter Dezember 2008</title>  
</head>
 
  
<body>
  
<div id="logo">
	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
</div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p>
</div>

 
<div id="klammer">
 
<div id="inhalt">


 
 <h1>Dezember 2008</h1>
 

<ul>
 
<li>CROSS 2
	<ul>
			<li <? if($page == "wag") echo "class='selected'";?> >
          <a href="index.php?page=wag" onmouseover="window.status='Vorschau auf Release 2.09'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Vorschau auf Release 2.09</a>				 			
	 		</li>	
	
														
			<li <? if($page == "hof") echo "class='selected'";?> >
          <a href="index.php?page=hof" onmouseover="window.status='Tipp: Versicherungsmeldungen'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Versicherungsmeldungen</a>				 			
	 		</li>	
			
	</ul>
</li>
	  
		
<li>POCSO
	<ul>
			<li <? if($page == "mal1") echo "class='selected'";?> >
          <a href="index.php?page=mal1" onmouseover="window.status='POCSO: Neue EBV-Version 3.2.01'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">POCSO: Neue EBV-Version 3.2.01</a>				 			
	 		</li>	
	</ul>
</li>	
		
		  
<li>Hardware
	<ul>
			
				<li <? if($page == "mal2") echo "class='selected'";?> >
          <a href="index.php?page=mal2" onmouseover="window.status='Neuer Desktop-PC HP dc7900'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neuer Desktop-PC HP dc7900</a>				 			
	 			</li>	
	</ul>
</li>
	  

<li>Support
	<ul>
			
				<li <? if($page == "wam1") echo "class='selected'";?> >
          <a href="index.php?page=wam1" onmouseover="window.status='Supportzeiten zum Jahreswechsel'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Supportzeiten zum Jahreswechsel</a>				 			
	 			</li>	
				
							<li <? if($page == "wam2") echo "class='selected'";?> >
          <a href="index.php?page=wam2" onmouseover="window.status='Neuer Online-Support'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neuer Online-Support</a>				 			
	 			</li>	
				
				
	</ul>
</li>


	  		
		
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
