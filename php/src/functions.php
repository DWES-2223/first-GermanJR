<?php
function esParell(int $num):bool{
    return $num % 2 === 0;
}

function arrayAleatori(int $tam, int $min, int $max):array{
    $arrayDevolver = array();
    for ($i = 0; $i < $tam; $i++) {
        $arrayDevolver[$i] = rand($min, $max);
    }
    return $arrayDevolver;
}

function countParells(array $array):int {
    $pares = 0;
    foreach ($array as $elemento){
       if(esParell($elemento))
           $pares++;
    }
    return $pares;
}

function major():int {
    $numeros = func_get_args();
    $maximo = $numeros[0];
    foreach ($numeros as $numero){
        if ($maximo < $numero)
            $maximo = $numero;
    }
    return $maximo;
}

function concatenar(...$paraules):string {
    return implode(' ', $paraules);
}

function digits(int $num): int {
    $num = abs($num);
    return strlen((string)$num);
}

function digitsN(int $num, int $post): int{
    $num = (string)$num;
    if ($post < 1 || $post > strlen($num))
        return false;

    return $num[$post - 1];
}

function llevaDarrere(int $num, int $cant): int{
    $cantidadRestante = digits($num) - $cant;
    if ($cantidadRestante <= 0)
        return false;
     else
        return substr($num, 0, $cantidadRestante);
}

function llevaDavant(int $num, int $cant): int{
    $cantidadRestante = $cant - digits($num);
    if ($cantidadRestante >= 0)
        return false;
     else
        return substr($num, $cantidadRestante);
}

function peseta2euros(float $cant, float $cot = 166){
    return $cant / $cot;
}

function euro2pesetes(float $cant, float $cot = 166){
    return $cant * $cot;
}