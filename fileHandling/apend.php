<?php
    $filename="example.txt";
    if(file_exists($filename)){
        $File=fopen($filename,'a');
        $content="THIS IS NEW LINE";
        fwrite($File,$content);
        fclose($File);
    }
    else{
        echo "File does not exist";
    }
?>