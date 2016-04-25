<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'spi';
  } 

  ?>
  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
        "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
  <meta http-equiv="imagetoolbar" content="no" />
    <link rel="stylesheet" href="../css/screen.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />  
  <title>Porsche Informatik Newsletter Spring 2010</title>  
</head>
 
  
<body>

<div id="imp">

<div id="sprache">

<a href="#">English</a> | <a href="../DE">German</a>


</div>



 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2010 | Imprint</a> |  <a   onmouseover="window.status='Archive'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archive</a> | <a  onmouseover="window.status='Print Article'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Print Article</a> | <a  onmouseover="window.status='Print All Articles'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Print All Articles</a>
</div>


<div id="logo">


	<img src="../images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="35" width="170">
</div>
 

<div id="klammer">
 
<div id="inhalt">

   <img src="../images/monat_en.jpg" width="260" height="150" border="0" title="Newsletter Spring 2010" />

 
<ul>

		  
<li>PORSCHE INFORMATIK
	<ul>
			
			<li <? if($page == "spi") echo "class='selected'";?> >
          <a href="index.php?page=spi" onmouseover="window.status='New Website'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">New Datacenter</a>				 			
	 			</li>	
			
							
	</ul>
</li>
 

<li>CROSS
	<ul>
			
				<li <? if($page == "rar") echo "class='selected'";?> >
          <a href="index.php?page=rar" onmouseover="window.status='New Release 2.12'; return true;"  onmouseout="window.status='CROSS'; return true;">New Release 2.12</a>				 			
	 			</li>	
				
	</ul>
</li>					
					  
			
			
<li>SERVICE DESK 
	<ul>
			
				<li <? if($page == "wam") echo "class='selected'";?> >
          <a href="index.php?page=wam" onmouseover="window.status='Survey'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Customer Satisfaction Survey</a>				 			
	 			</li>	
			</ul>
</li>		


<li>IT INFRASTRUCTURE
	<ul>
			
				<li <? if($page == "bub") echo "class='selected'";?> >
          <a href="index.php?page=bub" onmouseover="window.status='News'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">News</a>				 			
	 			</li>	
			</ul>
</li>		

	

	
				
</ul>

 
</div>
 

<div id="haupt"><?php include("content/".$page.".txt"); ?>
</div>
 

 
<div id="leiste">
 
<img src="../images/leiste.gif" width="900" height="7" alt="leiste (1K)" />
 
</div>
 



</div>



</body>
</html>
