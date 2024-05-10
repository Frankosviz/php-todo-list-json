<?php 
    // Legge un file
    $dataJson = file_get_contents('data.json'); 

    // Restituisce i dati in formato JSON
    header('Content-Type: application/json');

    // Restituisce i dati
    echo $dataJson;

?>