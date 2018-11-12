<?php
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
 
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}  
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$myfile = fopen("name.txt", "w") or die("Unable to open file!");
$txt =$target_file;
fwrite($myfile, $txt);
fclose($myfile);    

?>
<html>
<head>

       <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	  
	  
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

<!--
<meta http-equiv="refresh" content="0; url=http://localhost/ABUOCR/imp.py" />-->
<meta http-equiv="refresh" content="0; url=http://localhost/ABUOCR/imp.py" />
 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  <div id="body"  >
	   
  <div class="progress">
      <div class="indeterminate">
	  </div>
	  
  </div>
	  
	  <p style="font-family:verdana;font-size:200%;text-align:center;color:#26A69A">Image Uploaded.<br>Please wait while the image is being processed.</p>
	  <?php
	  if (!file_exists('matlab_called')) {   
		$myfile = fopen("matlab_called", "w");
		echo "<script type=\"text/javascript\">window.open('http://localhost/ABUOCR/p3.php');</script>";
		}
		else
		{
		echo "	<script type=\"text/javascript\">window.close();</script>";
		}
		?>
	<!--
	  <script type="text/javascript">
	  window.open('http://localhost/ABUOCR/upload.php');</script>
	 _-->
	
   </div>
    </body>
  </html>
