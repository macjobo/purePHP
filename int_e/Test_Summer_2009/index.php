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
  
  <title>Porsche Informatik Newsletter Summer 2009</title>
  
 </head>
 
 
 
 <body>
 

 
 <div id="logo">
<img src="images/poi_logo.gif" alt="poi_logo.gif, 1 kB" title="poi_logo" border="0" height="30" width="170">
 </div>
 
 

 
<div id="streifen"><p>PORSCHE&nbsp;INFORMATIK&nbsp;NEWSLETTER</p></div>

 
 <div id="klammer">
 
 <div id="inhalt">
 
 
 <h1>Summer 2009</h1>
 
 
 
 
<ul>
     				
					   Service Desk
                  <ul>
                    <li <? if($page == "wam") echo "class='selected'";?> >
                <a href="index.php?page=wam" onmouseover="window.status='New search function'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">New search function</a>
                </li>
        			</ul>
  
					

      <li>Lotus Notes Database 
            <ul>
              <li <? if($page == "stz") echo "class='selected'";?> >
          <a href="index.php?page=stz" onmouseover="window.status='Bulletin Board'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Bulletin Board</a>
          </li>
        </ul>
    </li>   
			
	
	    <li>CROSS
			<ul>
					       
				  <li <? if($page == "bam") echo "class='selected'";?> >
          <a href="index.php?page=bam" onmouseover="window.status='Welcome Terminal'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Welcome Terminal</a>
					</li>
									
					<li <? if($page == "hg") echo "class='selected'";?> >
          <a href="index.php?page=hg" onmouseover="window.status='Consulting'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Consulting</a>
          </li>
			</ul>
	</li>   
   
       <li>IT Infrastructure
            <ul>   
               <li <? if($page == "bub") echo "class='selected'";?> >
          <a href="index.php?page=bub" onmouseover="window.status='Video conference system'; return true;"  onmouseout="window.status='Porsche Informatik'; return true;">Video conference system</a>
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
