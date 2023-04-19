<?php

$file = fopen("MyFirstTextFile.txt", "w") or die("Unable to open/create file!");

echo readfile("MyFirstTextFile.txt") . " <br> ";

$textFillFile = "Oh no! Lost my past text... ";
fwrite($file, $textFillFile);
fclose($file);


echo readfile("MyFirstTextFile.txt");

?>
