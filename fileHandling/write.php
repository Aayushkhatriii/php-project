<?php
    $filename = "example.txt";
    $file=fopen($filename,'w');
    if($file){
        fwrite($file, "Hello World. Testing!");
        fwrite($file, "\n");
        fwrite($file, "File created by php");
        fclose($file);
    }
    else{
        echo "Unable to open file";
    }
?>