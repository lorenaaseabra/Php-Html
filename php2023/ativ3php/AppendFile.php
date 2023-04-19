<?php

$file = fopen("MyFirstTextFile.txt", "a") or die("Unable to open/create file!");

$textFillFile = " Uhau! I can add more text to the file. I am amazing ";
fwrite($file, $textFillFile);

fclose($file);

echo readfile("MyFirstTextFile.txt");
?>