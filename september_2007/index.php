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
  <title>Porsche Informatik Newsletter September 2007</title>  
</head>
 
  
<body>
  
<div id="logo">
	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
</div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p>
</div>

 
<div id="klammer">
 
<div id="inhalt">
 
 
 <h1>September 2007</h1>
 
 
<ul>
  
	<li>CROSS 2
			<ul>
					<li <? if($page == "wag") echo "class='selected'";?> >
          <a href="index.php?page=wag" onmouseover="window.status='Vorschau auf Release 2.06'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Vorschau auf Release 2.06</a>
         </li>				 
				 
					<li <? if($page == "wag2") echo "class='selected'";?> >
          <a href="index.php?page=wag2" onmouseover="window.status='CROSS Tipp: Reifeneinlagerung'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">CROSS Tipp: Reifeneinlagerung</a>				 			
	 				</li>
													 
			
					<li <? if($page == "wit1") echo "class='selected'";?> >
          <a href="index.php?page=wit1" onmouseover="window.status='Formulare als Word-Vorlagen'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Formulare als Word-Vorlagen</a>				 			
	 				</li>
			

			</ul>
			
			
	<li>Porsche Informatik Academy
			<ul>
					<li <? if($page == "roh") echo "class='selected'";?> >
          <a href="index.php?page=roh" onmouseover="window.status='Regionale CROSS-2-Workshops'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Regionale CROSS-2-Workshops</a>				 			
	 				</li>			 			
	 			</ul>
	</li>
	
	
          
	<li>VU2
			<ul>
					<li <? if($page == "stz") echo "class='selected'";?> >
          <a href="index.php?page=stz" onmouseover="window.status='Vorschau auf Release 2.3.5'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Vorschau auf Release 2.3.5</a>				 			
	 				</li>			 			
	 			</ul>
	</li>
	
	
   	<li>POCSO
			<ul>
			
					<li <? if($page == "lo") echo "class='selected'";?> >
          <a href="index.php?page=lo" onmouseover="window.status='Internet Explorer 7.0'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Internet Explorer 7.0</a>				 			
	 				</li>	
					
		
				
							 			
	 			</ul>
	</li>
	 
	 
</ul>
 
 
 
 
 
</div>
 

<div id="haupt"><?php include("content/".$page.".txt"); ?>
</div>
 
 
 
<div id="imp">
 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2007 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>
 
</div>
 

</body>
</html>
