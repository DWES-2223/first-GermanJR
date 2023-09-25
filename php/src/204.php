<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_GET['edat'])){
    $edat = $_GET['edat'];

    $anyActual = date('Y');

    echo "<p> Edat fa 10 anys: " . ($edat - 10) . "<br> Era l'any: " . ($anyActual - 10) . "</p>";
    echo "<p> Edat dins de 10 anys: " . ($edat + 10) . "<br> Será l'any: " . ($anyActual + 10) . "</p>";
    echo "<p> Any de jubilació (als 67 anys): " . ($anyActual + (67 - $edat)) . "</p>";
} else {
    echo 'Posa la teu edat actual a la variable edat pel QueryString.';
}

?>
<head>
    <meta charset="UTF-8">
    <title>Edat</title>
</head>
<body>

</body>
</html>