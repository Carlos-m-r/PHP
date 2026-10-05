<?php

$maxNumber = $_POST["primes"];



function esPrimo($numero) {
    if ($numero <= 1) return false;
    if ($numero == 2) return true;
    if ($numero % 2 == 0) return false;

    $root = ceil(sqrt($numero));
    for ($i = 3; $i <= $root; $i += 2) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

function getPrimesInRange($start, $end) {
    $primes = [];
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}