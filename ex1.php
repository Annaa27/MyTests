<?php

$clients = [
    [
        "name"=> "Vasya  ",
        "lastname"=> "Dolgov",
        "age"=>19,
        "email"=>"vasya@mail.ru"
    ],
    [
     "name"=> "Kolya  ",
        "lastname"=> "Grisin",
        "age"=>50,
        "email"=>"kolya@mail.ru"   
    ],
    [
      "name"=> "Valya  ",
        "lastname"=> "Galkina",
        "age"=>22,
        "email"=>"valya@mail.ru"  
    ],   
];


$emails = [];
foreach ($clients as $client)  {
    $emails[]=$client['email'];
}


$names = [];
foreach ($clients as $client)  {
    $name[]=$client['name'];
}

$total = [];
foreach ($clients as $client)  {
    $total[]=$client['name']  .  $client['lastname'];
}


echo '<pre>';
var_dump($emails, $names, $total);
echo '</pre>';
