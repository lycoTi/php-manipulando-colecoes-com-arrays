<?php

$notas = [
    "João" => 8,
    "Roberto" => 7,
    "Maria" => 9,
    "Vinicius" => null,
    "Ana" => 10,
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo "É um array" . PHP_EOL;
}
echo "Ana fez a prova" . PHP_EOL;
var_dump(isset($notas["Vinicius"]));

echo "Alguém tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo "Quem tirou nota 10" . PHP_EOL;
var_dump(array_search(10, $notas, true));

var_dump((int) "qalquer coisa");

//array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula
