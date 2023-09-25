<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_GET['numero'])){
    $numero = $_GET['numero'];

    switch ($numero){
        case 0:
            echo 'El número ' . $numero . ' és zero';
            break;
        case $numero > 0:
            echo  'El número ' . $numero . ' és positiu';
            break;
        case $numero < 0:
            echo  'El número ' . $numero . ' és negatiu';
            break;
        default:
            echo 'Error en el número';
    }

} else {
    echo 'Posa el numero a comprobar a la variable numero del QueryString';
}
?>
<head>
    <meta charset="UTF-8">
    <title>Numero par o impar</title>
</head>
<body>

</body>
</html>