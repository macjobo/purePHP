<?php 
  
  if (isset($_REQUEST['page']))  {
  $page = $_REQUEST['page']; 
  } 
  else {
  $page = 'lut';
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
  
  <title>Porsche Informatik Newsletter October 2007</title>
  
 </head>
 
 
 
 
 <body>
 

 
 <div id="logo">
<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
 </div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p></div>

 
 <div id="klammer">
 
 <div id="inhalt">
 
 
 <h1>October 2007</h1>
 
 
 
 
<ul>
      <li>IT Manager Meeting
                  <ul>
                    <li <? if($page == "lut") echo "class='selected'";?> >
                <a href="index.php?page=lut" onmouseover="window.status='Topic and outcome review'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Review of topics and results</a>
                </li>
              </ul>
          </li> 

      <li>SAGA2/KD3 Rollout 
            <ul>
              <li <? if($page == "scg") echo "class='selected'";?> >
          <a href="index.php?page=scg" onmouseover="window.status='Field report'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Field report</a>
          </li>
        </ul>
    </li>   
			
		    
    <li>SPS Rollout
			<ul>
					<li <? if($page == "pfn") echo "class='selected'";?> >
          <a href="index.php?page=pfn" onmouseover="window.status='Application in the Balkans'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Application in the Balkans</a>
          </li>
					 </ul>
  </li>  
   
       <li>Requirements databases
            <ul>   
               <li <? if($page == "neub") echo "class='selected'";?> >
          <a href="index.php?page=neub" onmouseover="window.status='Process for new requirements'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Process for new requirements</a>
          </li>         
    </ul>
  </li>      
 
 </div>
 

<div id="haupt"><?php include("content/".$page.".txt"); ?>

 </div>
 
 
 
  <div id="imp">
 <a   onmouseover="window.status='Impressum'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=imp">&copy; Porsche Informatik 2007 | Imprint</a> | <a   onmouseover="window.status='Archive'; return true;" onmouseout="window.status='Porsche Informatik'; return true;"href="index.php?page=archiv">Archive</a> | <a  onmouseover="window.status='Diesen Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="javascript:window.print()">Print Article</a> | <a  onmouseover="window.status='Alle Artikel drucken'; return true;" onmouseout="window.status='Porsche Informatik'; return true;" href="full.php" target="_blank">Print All Articles</a>
 </div>
 
 </div>
 

 </body>
</html>
