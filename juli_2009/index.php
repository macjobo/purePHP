<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'klb';
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
  <title>Porsche Informatik Newsletter Juli 2009</title>  
</head>
 
  
<body>
  
<div id="logo">
	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
</div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p>
</div>

 
<div id="klammer">
 
<div id="inhalt">


 
 <h1>Juli 2009</h1>
 
 
<ul>
 
<li>POI allgemein
	<ul>
			<li <? if($page == "klb") echo "class='selected'";?> >
          <a href="index.php?page=klb" onmouseover="window.status='Verständigung über POI-Rundschreiben'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Verständigung über POI-Rundschreiben</a>				 			
	 		</li>	
			
	</ul>
</li>

<li>CROSS 2
	<ul>
			
				<li <? if($page == "wit") echo "class='selected'";?> >
          <a href="index.php?page=wit" onmouseover="window.status='Tipp: Individuelles Benutzerprofil'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Tipp: Individuelles Benutzerprofil</a>				 			
	 			</li>	
				
						<li <? if($page == "roh") echo "class='selected'";?> >
          <a href="index.php?page=roh" onmouseover="window.status='Rückschau CROSS-Anwendertage'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Rückschau CROSS-Anwendertage</a>				 			
	 			</li>	
				
				
	</ul>
</li>					
				
		  
		  
<li>SAP
	<ul>
			
				<li <? if($page == "let1") echo "class='selected'";?> >
          <a href="index.php?page=let1" onmouseover="window.status='Elektronischer Kontoauszug'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Elektronischer Kontoauszug</a>				 			
	 			</li>	
				
				<li <? if($page == "let2") echo "class='selected'";?> >
          <a href="index.php?page=let2" onmouseover="window.status='Automatische GWL-Verbuchung'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Automatische GWL-Verbuchung</a>				 			
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
