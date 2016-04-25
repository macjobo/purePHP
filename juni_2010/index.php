<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'pri';
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
  <title>Porsche Informatik Newsletter Juni 2010</title>  
</head>
 
  
<body>

<div id="imp">



 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2010 | Impressum</a> |  <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
</div>


<div id="logo">


	<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="35" width="170">
</div>
 

<div id="klammer">
 
<div id="inhalt">

   <img src="images/monat.jpg" width="260" height="150" border="0" title="Newsletter Juni 2010" />
	 


<ul>


	<li>CROSS
	<ul>
	
		<li <? if($page == "pri") echo "class='selected'";?> >
          <a href="index.php?page=pri" onmouseover="window.status='Rückschau Anwendertage'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Rückschau Anwendertage</a>				 	
		</li>		
		
		
		
	</ul>
</li>		

	
<li>CROSS Release 2.12
	<ul>			
		

			<li <? if($page == "wag2") echo "class='selected'";?> >
          <a href="index.php?page=wag2" onmouseover="window.status='Mietvertrag Ersatzfahrzeug'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Vermietung</a>				 			
	 		</li>			
			
			<li <? if($page == "wag3") echo "class='selected'";?> >
          <a href="index.php?page=wag3" onmouseover="window.status='Eingangsrechnungskontrolle'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Eingangsrechnungskontrolle</a>				 			
	 		</li>		
						
					
			<li <? if($page == "wag4") echo "class='selected'";?> >
          <a href="index.php?page=wag4" onmouseover="window.status='Auftragsweitergabe'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Auftragsweitergabe</a>				 			
	 		</li>		
			
						<li <? if($page == "mal2") echo "class='selected'";?> >
          <a href="index.php?page=mal2" onmouseover="window.status='Auftragsweitergabe'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Welcome-Terminal</a>				 			
	 		</li>		
			
			
			<li <? if($page == "wag5") echo "class='selected'";?> >
          <a href="index.php?page=wag5" onmouseover="window.status='Teilebestellung im Verbund'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Teilebestellung im Verbund</a>				 			
	 		</li>							
		</ul>
</li>

<!--

	<li>POI Academy
	<ul>
	
		<li <? if($page == "klb") echo "class='selected'";?> >
          <a href="index.php?page=klb" onmouseover="window.status='Seminartermine 2. Halbjahr 2010'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Seminartermine 2. Halbjahr 2010</a>				 	
		</li>		
		
-->

	<li>POCSO
	<ul>
	
	
		<li <? if($page == "mal") echo "class='selected'";?> >
          <a href="index.php?page=mal" onmouseover="window.status='Neu in Ihrem POCSO-Netzwerk'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Neu in Ihrem POCSO-Netzwerk</a>				 	
		</li>		
		
		
		
	</ul>
</li>		
		
		
		
	</ul>
</li>		





		
</ul>

 
</div>
 



<div id="haupt"><?php include("content/".$page.".txt"); ?>
</div>
 
 
 <div id="leiste">
 
<img src="images/leiste.gif" width="900" height="7" alt="leiste (1K)" />
 
</div>
 

 </div>








</body>
</html>
