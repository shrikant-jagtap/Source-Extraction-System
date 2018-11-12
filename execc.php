
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
	background-color:white;}
	#body{ 
	position :absolute;
	width:60%;
	left:20%;
	top:20%;
	height:30%;
	}
	</style>
	</head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  <div id="body"  >
	  

	   <div style="border: 0px solid black" class="collection">
        
         <ul style="border: 0px solid black" class="collection with-header">
        <li style="border: 0px solid black" class="collection-header"><h4>The links found are:</h4></li>
  
      </ul>
      
	  
  <?php
$handle = fopen("output.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if($line!="<br>")
		echo "<a style=\"border:0px solid black\" href=\"#!\" class=\"collection-item\">".$line."</a><br>" ;
		
    }

    fclose($handle);
} 
?>
  </div>
  
   </div>
    </body>
  </html>