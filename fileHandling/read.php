<?php
    $filename = "example.txt";
    if(file_exists($filename)){
        $File=fopen($filename,'r');
        $content = fread($File, filesize($filename));
        echo $content;
        fclose($File);
    }
    else{
        echo "File does not exist";
    }
?>