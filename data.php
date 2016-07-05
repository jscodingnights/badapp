<?php

header('Content-Type: application/json');
$files = glob("./data/*.data");
echo "[";
 foreach($files as $index => $data){
             
    $b = file_get_contents($data);
    if($index < sizeof($files) -1) {
        $b .= ",";
    }
    
    echo $b;
 }
 
 echo "]";