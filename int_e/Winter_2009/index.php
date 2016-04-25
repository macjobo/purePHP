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
  
  <title>Porsche Informatik Newsletter Winter 2009</title>
  
 </head>
 
 
 
 <body>
 

 
 <div id="logo">
<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
 </div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p></div>

 
 <div id="klammer">
 
 <div id="inhalt">
 
 
 <h1>Winter 2009</h1>
 
 
 
 
<ul>
      <li>Service Desk
                  <ul>
                    <li <? if($page == "wam") echo "class='selected'";?> >
                <a href="index.php?page=wam" onmouseover="window.status='Online Support'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Online Support</a>
                </li>
              </ul>
          </li> 

      <li>SAP R3 
            <ul>
              <li <? if($page == "stz") echo "class='selected'";?> >
          <a href="index.php?page=stz" onmouseover="window.status='Transition to SAP ERP'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Transition to SAP ERP</a>
          </li>
        </ul>
    </li>   
			
		<!--     
    <li>Partner.Net
			<ul>
					<li <? if($page == "hg") echo "class='selected'";?> >
          <a href="index.php?page=hg" onmouseover="window.status='NEW employee maintenance'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">NEW employee maintenance</a>
          </li>
					 </ul>
  </li>   -->
   
       <li>IT Infrastructure
            <ul>   
               <li <? if($page == "bub") echo "class='selected'";?> >
          <a href="index.php?page=bub" onmouseover="window.status='International Workshop'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">International Workshop</a>
          </li>         
    </ul>
  </li>      
 
 </div>
 

<div id="haupt"><?php include("content/".$page.".txt"); ?>

 </div>
 
 
 
  <div id="imp">
 <a   onmouseover="window.status='Imprint'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2009 | Imprint</a> | <a   onmouseover="window.status='Archive'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archive</a> | <a  onmouseover="window.status='Print Article'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Print Article</a> | <a  onmouseover="window.status='Print All Articles'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Print All Articles</a>
 </div>
 
 </div>
 

 </body>
</html>
