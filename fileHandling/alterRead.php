<?php
    $filename="example.txt";
    $file=fopen($filename,'r');
    if($file){
        // while(!feOF($file)){
        //     echo fgets($file)."<br>";
        // }
        $content=file_get_contents($filename);
        echo $content;
        fclose($file);
    }
    else{
        echo "Unable to open file";
    }
?>