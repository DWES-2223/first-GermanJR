<?php
function esParell(int $num): bool
{
    return $num % 2 === 0;
}

function arrayAleatori(int $tam, int $min, int $max): array
{
    $arrayDevolver = array();
    for ($i = 0; $i < $tam; $i++) {
        $arrayDevolver[$i] = rand($min, $max);
    }
    return $arrayDevolver;
}

function countParells(array $array): int
{
    $pares = 0;
    foreach ($array as $elemento) {
        if (esParell($elemento))
            $pares++;
    }
    return $pares;
}

function major(): int
{
    $numeros = func_get_args();
    $maximo = $numeros[0];
    foreach ($numeros as $numero) {
        if ($maximo < $numero)
            $maximo = $numero;
    }
    return $maximo;
}

function concatenar(...$paraules): string
{
    return implode(' ', $paraules);
}

function digits(int $num): int
{
    $num = abs($num);
    return strlen((string)$num);
}

function digitsN(int $num, int $post): int
{
    $num = (string)$num;
    if ($post < 1 || $post > strlen($num))
        return false;

    return $num[$post - 1];
}

function llevaDarrere(int $num, int $cant): int
{
    $cantidadRestante = digits($num) - $cant;
    if ($cantidadRestante <= 0)
        return false;
    else
        return substr($num, 0, $cantidadRestante);
}

function llevaDavant(int $num, int $cant): int
{
    $cantidadRestante = $cant - digits($num);
    if ($cantidadRestante >= 0)
        return false;
    else
        return substr($num, $cantidadRestante);
}

function peseta2euros(float $cant, float $cot = 166)
{
    return $cant / $cot;
}

function euro2pesetes(float $cant, float $cot = 166)
{
    return $cant * $cot;
}

function vell(array $fechas): mixed
{
    $masViejo = "9999/12/31";
    foreach ($fechas as $clave => $valor) {
        if (fecha_inglesa($valor) < $masViejo) {
            $masViejo = fecha_inglesa($valor);
            $fecha = $clave;
        }
    }
    return $fecha;
}

function fecha_inglesa($fecha): string
{
    $fechaSeparada = explode(".", $fecha);
    return $fechaSeparada[2] . "/" . $fechaSeparada[1] . "/" . $fechaSeparada[0];
}

function any($fecha)
{
    $fechaSeparada = explode(".", $fecha);
    return $fechaSeparada[2];
}

function laureado(array $clubs): mixed
{
    $cantidadClubs = array_count_values($clubs);
    asort($cantidadClubs);
    return array_key_last($cantidadClubs);
}

function jove(array $fechasNacimiento, array $fechasPruebas): mixed
{
    $index = -1;
    $edat = 99;

    foreach ($fechasNacimiento as $clave => $valor) {
        if (any($fechasPruebas[$clave]) - $valor < $edat) {
            $index = $clave;
            $edat = any($fechasPruebas[$clave]) - $valor;
        }
    }
    return array($index, $edat);
}


function array_column_ext($array, $columnkey, $indexkey = null)
{
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey, $value)) {
            $val = $array[$subarray][$columnkey];
        } else if ($columnkey === null) {
            $val = $value;
        } else {
            continue;
        }

        if ($indexkey === null) {
            $result[] = $val;
        } elseif ($indexkey == -1 || array_key_exists($indexkey, $value)) {
            $result[($indexkey == -1) ? $subarray : $array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}