<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'att';
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
  
  <title>Porsche Informatik Newsletter June 2007</title>
  
 </head>
 
 
 
 
 <body>
 

 
 <div id="logo">
<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
 </div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p></div>

 
 <div id="klammer">
 
 <div id="inhalt">
 
 
 <h1>June 2007</h1>
 
 
 
 
<ul>
          
    
    <li>CARLOS Start in Hungary
			<ul>
					<li <? if($page == "att") echo "class='selected'";?> >
          <a href="index.php?page=att" onmouseover="window.status='Field report Porsche Hungaria'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Field report Porsche Hungaria</a>
          </li>
        
				  <li <? if($page == "ros") echo "class='selected'";?> >
          <a href="index.php?page=ros" onmouseover="window.status='Field report Porsche Informatik'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Field report Porsche Informatik</a>
					</li>
			</ul>
	</li>        
   
    
         <li>SAP 
            <ul>
              <li <? if($page == "ren") echo "class='selected'";?> >
          <a href="index.php?page=ren" onmouseover="window.status='Rollout'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Rollout</a>
          </li>
        </ul>
    </li>
    
      
   
       <li>VU2 
            <ul>   
               <li <? if($page == "neub") echo "class='selected'";?> >
          <a href="index.php?page=neub" onmouseover="window.status='Support meets Support'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Support meets Support</a>
          </li>         
    </ul>
  </li>   
      
    
       <li>Security News
            <ul>
              <li <? if($page == "spi") echo "class='selected'";?> >
          <a href="index.php?page=spi" onmouseover="window.status='Security Policy'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Security Policy</a>
          </li>
        </ul>
    </li> 
 
 
 </div>
 

<div id="haupt"><?php include("content/".$page.".txt"); ?>

 </div>
 
 
 
  <div id="imp">
 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2007 | Imprint</a> | <!-- <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> |-->
 <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Print Article</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Print All Articles</a>
 </div>
 
 </div>
 

 </body>
</html>
