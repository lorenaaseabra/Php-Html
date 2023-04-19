<?php

    $file = fopen("MyFirstTextFile.txt", "x") or die("Unabel to open/Create file!");
    $fwrite($file, "This my first file.");
    fclose($file);

    echo readfile("MyFirstTextFile.txt");
    

?>