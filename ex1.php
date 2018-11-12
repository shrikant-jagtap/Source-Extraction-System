<?php 
$txt=$_POST["txtarea"];
echo $txt;
//$bin_path="C:\Program Files\Java\jdk1.7.0_01\bin";


$myfile = fopen("input.txt", "w");
fwrite($myfile, $txt);
fclose($myfile);

echo exec ('javap');

echo "<meta http-equiv=\"refresh\" content=\"0; url=links.php\" />"
?>