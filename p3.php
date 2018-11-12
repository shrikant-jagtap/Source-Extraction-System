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
	left:10%;
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

    <body >
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js">window.focus();</script>
	 <div id="header" style="width:100%;position:absolute;height:15%;border:0px solid black;top:0%;">
	
	 <div id="navbar" style="position: absolute; top:20%;right:0%;width:100%;height:49%;border:0px solid red;">
	 
	 
	 
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
	
	 
	 <div id="body" style="width:100%;position:absolute;height:80%;border:0px solid black;top:15%;">
	 
	 
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
	 <meta http-equiv="refresh" content="3; url=http://localhost/ABUOCR/p3.php" />
   </div>
	
	 
	 
	 
	 
	
	 
	 
	 </div>
	 <div id="footer" style="width:100%;position:absolute;height:5%;border:0px solid black;top:95%;">
	 
	 
	 
	 </div>
	 </body>
  </html>