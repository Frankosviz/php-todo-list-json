<?php 

$ingredientiJson = json_decode(file_get_contents("/data.json"), true);
var_dump($ingredientiJson);