<?php

$data = [
    ["nama"=>"Andi", "umur"=>18],
    ["nama"=>"Budi", "umur"=>19],
    ["nama"=>"Caca", "umur"=>20],
    ["nama"=>"Deni", "umur"=>21],
    ["nama"=>"Eka", "umur"=>22],
    ["nama"=>"Fajar", "umur"=>23],
    ["nama"=>"Gina", "umur"=>24],
    ["nama"=>"Hadi", "umur"=>25],
    ["nama"=>"Intan", "umur"=>26],
    ["nama"=>"Joko", "umur"=>27],
    ["nama"=>"Kevin", "umur"=>28],
    ["nama"=>"Lina", "umur"=>29],
    ["nama"=>"Mira", "umur"=>30],
    ["nama"=>"Nanda", "umur"=>31],
    ["nama"=>"Oki", "umur"=>32]
];

$json = json_encode($data, JSON_PRETTY_PRINT);

echo "<pre>";
echo $json;
echo "</pre>";

?>