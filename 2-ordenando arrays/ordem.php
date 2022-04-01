<?php

$notas = [
    [
        "aluno" => "Maria",
        "nota" => 10,
    ],
    [
        "aluno" => "vinicius",
        "nota" => 6,
    ],
    [
        "aluno" => "Ana",
        "nota" => 9,
    ],
];

function ordenaNota(array $nota1, array $nota2): int
{
    return $nota2["nota"] <=> $nota1["nota"];
}
usort($notas, "ordenaNota");
var_dump($notas);
