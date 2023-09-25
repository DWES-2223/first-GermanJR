<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array avanzado</title>
</head>
<body>
<?php
$arrayNumeros = array();

for ($i = 0; $i < 33; $i++) {
    $arrayNumeros[] = rand(0, 100);
}

$mayor = 0;
$menor = 101;
$total = 0;

foreach ($arrayNumeros as $numero) {
    if ($numero > $mayor)
        $mayor = $numero;

    if ($numero < $menor)
        $menor = $numero;

    $total += $numero;
}

$media = $total / count($arrayNumeros);

echo "<p>Array: " . implode(' ', $arrayNumeros). "</p>";
?>
    <p>Numero mayor: <?=$mayor?></p>
    <p>Numero menor: <?=$menor?></p>
    <p>Media: <?=$media?></p>

</body>
</html>