<?php

$maxNumber = $_POST["primes"];

function esPrimo($numero) {
    if ($numero < 2) return false;
    if ($numero % 2 == 0) return false;

    $root = ceil(sqrt($numero));
    for ($i = 2; $i <= $root; $i++) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

function getPrimos($maxNumber) {
    $primes = [];
    for ($i = 2; $i <= $maxNumber; $i++) {
        if (esPrimo($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}