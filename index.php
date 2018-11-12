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
	   <form action="http://localhost/ABUOCR/upload.php" enctype="multipart/form-data" method="post">
    <div class="file-field input-field" >
      
	  <!--
	  <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
	  -->
	  
	    <input type="file" name="fileToUpload" id="fileToUpload">
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" style="width:75%;left:0%;float:left; ">
		
	 </div>
	  </div>
	  
	    
	    <p style="position:absolute; left:20%;">
      <input class="with-gap"name="group1" type="radio" id="choice3" checked />
      <label for="choice3">Generic</label>
	  
	  <input  class="with-gap" name="group1" type="radio" id="choice1" />
      <label for="choice1">Research Paper</label>
   
      <input class="with-gap"name="group1" type="radio" id="choice2" />
      <label for="choice2">Book</label>
    </p>
     
	
	  
	  
	  	  
	  <input class="waves-effect waves-light btn" value="Upload" type="submit" style="position:absolute;bottom:10%;right:50%; "  name="submit" action="google.com">
	  
   
  </form>

  <?php
 if(isset($_POST['submit'])) 
  {
$destination_path = getcwd().DIRECTORY_SEPARATOR."";
//$destination_path = getcwd();
$target_path = $destination_path . basename( $_FILES["file"]["name"]);
move_uploaded_file($_FILES['file']['tmp_name'], $target_path);
  }
  
  $value="matlab_called";
  if (file_exists($value)) {
        unlink($value);
  $value="matlab_engine_imported";
  }
  if (file_exists($value)) {
        unlink($value);
  }
  $value="matlab_engine_started";
  if (file_exists($value)) {
        unlink($value);
  }
  $value="text_extracted";
  if (file_exists($value)) {
        unlink($value);
  }
?>
  
  
  
   </div>
    </body>
  </html>