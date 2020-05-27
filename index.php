<?php

function sum($a, $b, $d = 0)
{
    if (count($a) === 0 && count($b) === 0) {
        return ($d || '');
    }
    $r = intval(array_pop($a)) + intval(array_pop($b)) + intval($d);
    return sum($a, $b, $r > 9 ? 1 : 0) . ($r % 10) ;
}

$a = str_split('5');
$b = str_split('6');

$result = sum($a, $b);
echo $result, PHP_EOL;
