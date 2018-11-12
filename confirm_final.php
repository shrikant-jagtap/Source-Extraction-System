<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
	<style>
	
	body{
	
	background-color:white;
	}
	#body{ 
	position :absolute;
	width:60%;
	left:20%;
	top:30%;
	
	}
	</style>
	</head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>


<div id="body">
  <div class="row">
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
	  
	  <input class="waves-effect waves-light btn" value="Comfirm" type="submit" style="position:absolute;bottom:10%;right:40%;  " >
    </form>
  </div>	  
	  
	  </div>
    </body>
  </html>