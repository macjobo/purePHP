<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'wam';
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
  
  <title>Porsche Informatik Newsletter März 2008</title>
  
 </head>
 
 
 
 
 <body>
 

 
 <div id="logo">
<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
 </div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p></div>

 
 <div id="klammer">
 
 <div id="inhalt">
 
 
 <h1>März 2008</h1>
  
<ul>

 <li>Customer Care Center
			<ul>
					<li <? if($page == "wam") echo "class='selected'";?> >
          <a href="index.php?page=wam" onmouseover="window.status='Der zentrale Service Desk'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Der zentrale Service Desk</a>
          </li>
					 </ul>
  </li>  

         <li>VU2 Rollout 
            <ul>
              <li <? if($page == "stz") echo "class='selected'";?> >
          <a href="index.php?page=stz" onmouseover="window.status='Einführung in den Partnerländern'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Einführung in den Partnerländern</a>
          </li>
        </ul>
    </li>   
			
		    <li>Lotus Notes
                  <ul>
                    <li <? if($page == "hg") echo "class='selected'";?> >
                <a href="index.php?page=hg" onmouseover="window.status='BlackBerry&reg; Enterprise Mobile User'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">BlackBerry&reg; Enterprise Mobile User</a>
                </li>
              </ul>
          </li>    
   
       <li>IT-Infrastruktur
            <ul>   
               <li <? if($page == "bub") echo "class='selected'";?> >
          <a href="index.php?page=bub" onmouseover="window.status='Leitlinie zur Betriebsführung'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Leitlinie zur Betriebsführung</a>
          </li>         
    </ul>
		
  </li>      
 
 </div>
 

<div id="haupt"><?php include("content/".$page.".txt"); ?>

 </div>
 
 
 
  <div id="imp">
 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2008 | Impressum</a> | <a   onmouseover="window.status='Archiv'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archiv</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Diesen Artikel drucken</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Alle Artikel drucken</a>
 </div>
 
 </div>
 

 </body>
</html>
