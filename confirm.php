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
	
	
	
	<!--background-color:#26A69A;
	-->body{
	
	background-color:white;
	}
	
	
	</style>
	</head>

    <body >
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
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
	 
	 
	 <div>
	  <div id="bod2" style="position:absolute;width:100%;border:0px solid red;font-size:200%;text-align:center">
	 <p> Confirm the text that you uploaded<sup>*</sup></p></div>
	   
   <div class="row" style="border:0px solid cyan;position:absolute;top:30%;width:100%;"  >
    <form method="post" class="col s12" action="ex1.php">
      <div class="row">
        <div class="input-field col s12">
          <textarea name="txtarea" id="textarea1" class="materialize-textarea" placeholder="">
		  
		  <?php
	$f = fopen("Text.txt", "r");
	echo fgets($f);
	?>
</textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
	   <div style="position:absolute; width:12%; height:10%;left:46%;top:110%;border:0px solid black;">
	  <input class="waves-effect waves-light btn" value="Comfirm" type="submit" style="position:absolute;bottom:10%;right:40%;  " ></div>
    </form>
  </div>	  
	  
   </div>
	
	 
	 
	 
	 
	
	 
	 <p style="position:absolute; bottom:0%;right:1%;font-size:70%;"> * There should be no space preceding the text. </p>
	 </div>
	 <div id="footer" style="width:100%;position:absolute;height:5%;border:0px solid black;top:95%;">
	 
	 
	 
	 </div>
	 </body>
  </html>