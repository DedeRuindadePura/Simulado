<?php
$n = readline();
for ($i = 0; $i < $n; $i++) {
    $strings = fgets(STDIN);
    $string = explode(" ", $strings);
    $a = $string[0];
    $b = $string[1];

    $aa = strlen($a) - 1;
    $bb = strlen($b) - 1;
    
    if ($aa >= $bb){
        $d = $aa - $bb;
        $c = 0;
        for ($j = $d; $j <= $aa; $j++) {
            if ($a[$j] == $b[$c]) {
                $e = 1;
            } else {
                $e = 0;
                break;
            }            
            $c++;
        }
    } else {
        $e = 0;
    }

    if($e == 1) {
        echo "encaixa" . PHP_EOL;
    } 
    else {
        echo "nao encaixa" . PHP_EOL;
    }
}
?>