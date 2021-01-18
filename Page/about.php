<p></p>
<?php
   if (isset($_GET['file'])) {
    $myfile = fopen("files/".$_GET['file'], "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
      }
    fclose($myfile);
   }
?>
