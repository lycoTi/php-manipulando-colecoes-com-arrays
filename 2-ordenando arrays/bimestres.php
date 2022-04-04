<?php

$notasBimenstre1 = [
    "João" => 8,
    "Roberto" => 7,
    "Maria" => 9,
    "Vinicius" => 6,
    "Ana" => 10,
];

$notasBimenstre2 = [
    "João" => 8,
    "Ana" => 9,
    "Roberto" => 7,
];
$alunosFaltantes = array_diff_key($notasBimenstre1, $notasBimenstre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomesAlunos, $notasAlunos));
var_dump(array_flip($alunosFaltantes));
