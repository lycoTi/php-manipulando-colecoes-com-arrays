<?php

$notas = [
    "João" => 8,
    "Roberto" => 7,
    "Maria" => 9,
    "Vinicius" => 6,
    "Ana" => 10,
];

krsort($notas);
var_dump($notas);
