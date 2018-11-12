
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
	#text
	
	{
		
		 font-family:verdana;
		 font-size:100%;
		 
		 color:#26A69A"
	}
	</style>
	
	
	 
	  
</head>
<body>

<!--
<meta http-equiv="refresh" content="0; url=http://localhost/ABUOCR/imp.py" />
<meta http-equiv="refresh" content="0; url=http://localhost/ABUOCR/" />-->
 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js">
	  window.focus();</script>
	  
	  <div id="body"  >
	   
	   <?php
	   if (file_exists('matlab_engine_started'))
	   {
		   $value='67%';
		   
	   }
	   else if (file_exists('matlab_engine_imported'))  {
		   
		   $value='33%';
	   }
	   else
	   {
		   $value='0%';
	   }
	   ?>
  <div class="progress">
      <div id="loader" class="determinate" style="width:<?php echo $value;?>">
	  
	  </div>
	  
  </div>
	  
	  <p style="font-family:verdana;font-size:200%;text-align:center;color:#26A69A">Image Uploaded.<br>Please wait while the image is being processed.</p>
	  <?php
	  echo $value;
	  if (!file_exists('matlab_called')) {   
		$myfile = fopen("matlab_called", "w");
		echo "<script type=\"text/javascript\">window.open('http://localhost/ABUOCR/imp.py','_blank');</script>";
		}
		if (file_exists('matlab_engine_imported'))
		{
		echo "<p id=\"text\"> Matlab Engine imported.
      <input type=\"checkbox\" id=\"test6\" checked=\"checked\" disabled=\"disabled\" />
      <label for=\"test7\"></label>
  </p>";
		
		}
		
		else
		{
			
			echo "<p id=\"text\"> Importing Matlab Engine.
			 
      <input type=\"checkbox\" id=\"indeterminate-checkbox\" />
      <label for=\"indeterminate-checkbox\"></label>
    </p>";
		}
		if (file_exists('matlab_engine_started'))
		{

		echo "<p id=\"text\"> Matlab Engine started. <input type=\"checkbox\" id=\"test7\" checked=\"checked\" disabled=\"disabled\" />
      <label for=\"test7\"></label></p>";
			
		}
		else
		{
			
			echo "<p id=\"text\"> Starting Matlab engine.
			
      <input type=\"checkbox\" id=\"indeterminate-checkbox\" />
      <label for=\"indeterminate-checkbox\"></label>
    </p>";
		}
	if (file_exists('text_extracted'))
	{
		
		echo "<p id=\"text\">Text extracted. <input type=\"checkbox\" id=\"test7\" checked=\"checked\" disabled=\"disabled\" />
      <label for=\"test7\"></label></p>";
		echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ABUOCR/confirm.php\" />";
		
	}
	else
		{
			
			echo "<p id=\"text\"> Text extracting.
		
      <input type=\"checkbox\" id=\"indeterminate-checkbox\" />
      <label for=\"indeterminate-checkbox\"></label>
    </p>";
		}
	?>
	<!--
	  <script type="text/javascript">
	  window.open('http://localhost/ABUOCR/upload.php');</script>
	 _-->
	 <meta http-equiv="refresh" content="3; url=http://localhost/ABUOCR/upload2.php" />
   </div>
    </body>
  </html>
