<?php
// read file
echo readfile("superglobal.txt");


 $myfile = fopen("data.txt", "w");
$txt = "Harry welcome";
fwrite($myfile, $txt);
fclose($myfile);


// $Myfile = fopen("data.txt", "r");
// echo fgets($Myfile);
// fclose($Myfile);

// $myfile = fopen("webdictionary.txt", "r");
// echo fgetc($myfile);
// fclose($myfile);
?>