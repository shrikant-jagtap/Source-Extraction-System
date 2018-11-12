<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
	<style>
	
	body{
	
	<!--background-color:#26A69A;
	-->
	text-align:center;
	background-color:white;}
	
	</style>
	</head>

    <body >
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	 <div id="header" style="width:100%;position:absolute;height:15%; top:0%;">
	
	 <div id="navbar" style="position: absolute; top:20%;right:0%;width:100%;height:49%; ">
	 
	 
	 
	   <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Reveles</a>
      <ul style="position:absolute;left:20%;"id="nav-mobile" class="hide-on-med-and-down">
        <li><a href="p2.html">Home</a></li>
     
        <li><a href="p4.html">FAQ</a></li>
         
      </ul>
    </div>
  </nav>
        </div>
	 </div>
	
	 
	 <div id="body" style="width:100%;position:absolute;height:80%; top:15%;">
	 
	 
	 <div id="body"  >
	   
  
  
     <div style="border: 0px solid black;" class="collection">
        
         <ul style="border: 0px solid black" class="collection with-header">
        <li style="border: 0px solid black;" class="collection-header"><h4>The links found are:</h4></li>
  
      </ul>
      
	  
  <?php
$handle = fopen("output.txt", "r");
if ($handle) {
$flag=0;
    while (($line = fgets($handle)) !== false) {
		$line2=fgets($handle);
        if($line!="\n" && $line!="\r" && $line!="<br>" && $line!='' && $line!=' ' )
		echo "<a   href=\"".$line2."\" class=\"collection-item\">".$line."</a>" ;
		
		
    }

    fclose($handle);
} 
?>
  </div>
  
  
  
  
  
  
  
  
   </div>
	
	 
	 
	 
	 
	
	 
	 
	 </div>
	 <div id="footer" style="width:100%;position:absolute;height:5%; top:95%;">
	 
	 
	 
	 </div>
	 </body>
  </html>