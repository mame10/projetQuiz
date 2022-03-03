<?php 
 function find_data(string $key):array{
    $dataJson=file_get_contents(PATH_DB);
    $data=json_decode($dataJson,true);
    return $data[$key];

 }

 // enregistrement et mis a jour des donnees du fichier
 function save_data(string $key,array $data){
    $dataJson=json_encode($data[$key],true);
    return $dataJson;
 }