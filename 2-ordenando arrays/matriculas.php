<?php

$matriculas2021 = ["João", "Roberto", "Maria", "Vinicius", "Ana"];

$novosAlunos = ["Patrícia", "Nico", "Kilderson", "Daiane"];

$alunos2022 = [...$matriculas2021, "Carlos Vinicius", ...$novosAlunos];

var_dump($alunos2022);

funcao(...[1, 2, 3]);

function funcao(int $a, int $b, int $c)
{
}
