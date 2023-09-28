<!DOCTYPE html>
<html lang="en">
<?php
include_once('functions.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Formulari productes b</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<table><thead><tr><th>Producto</th><th>€</th><th>Pesetas.</th></tr></thead><tbody>';
    $total = 0;
    foreach ($_POST as $clave => $valor) {
        if (strpos($clave, 'nom') !== false) {
            echo '<tr><td>' . $valor . '</td>';
        }
        if (strpos($clave, 'preu') !== false && is_numeric($valor)) {
            echo '<td>' . $valor . '</td><td>' . euro2pesetes($valor) . '</td></tr>';
            $total += $valor;
        }
    }
    echo '<tr><td>Total</td><td>' . $total . '</td><td>' . euro2pesetes($total) . '</td></tr>';
    echo '</tbody></table>';
}
?>
</body>
</html>