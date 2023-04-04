<?php
$n = fgets(STDIN);
$st = $t = $at = $s = $b = $a = 0;
for ($i = 0; $i < $n; $i++) {   
    $nome = fgets(STDIN);
    $x = fgets(STDIN);
    $y = explode(" ", $x);
    $st += $y[0];
    $t += $y[1];
    $at += $y[2];
    $x = fgets(STDIN);
    $y = explode(" ", $x);
    $s += $y[0];
    $b += $y[1];
    $a += $y[2];

}

echo "Pontos de Saque: " . number_format((($s/$st) * 100), 2, '.', ' ') . " %." .PHP_EOL;
echo "Pontos de Bloqueio: " . number_format((($b/$t) * 100), 2, '.', ' ') . " %." .PHP_EOL;
echo "Pontos de Ataque: " . number_format((($a/$at) * 100), 2, '.', ' ') . " %." .PHP_EOL;
?>