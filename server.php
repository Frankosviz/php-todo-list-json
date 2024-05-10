<?php 
    // Legge un file
    $dataJson = file_get_contents('data.json'); 
    

    header('Content-Type: application/json');
    echo $dataJson;

?>