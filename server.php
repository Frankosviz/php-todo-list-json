<?php 
$ingredientiJson = file_get_contents("data.json");

if(isset($_POST['id'])){
    $listaIngredienti = json_decode($ingredientiJson, true);
    $newListaIngredienti = [
        'id' => $_POST['id'],
        'text' => $_POST['text'],
        'acquistato' => !(bool)$_POST['acquistato']
    ];
    $listaIngredienti[] = $newListaIngredienti;
    $ingredientiJson = json_encode($listaIngredienti);
    file_put_contents("data.json", $ingredientiJson);
}

$_SERVER['REQUEST_METHOD'];

header('Content-Type: application/json');
echo "$ingredientiJson";
