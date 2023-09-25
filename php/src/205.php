<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_GET['quantitat'])){
    $quantitat = $_GET['quantitat'];

    $bitllets = [500, 200, 100, 50, 20, 10, 5, 2, 1];

    $quantitatBitllet = intdiv($quantitat, $bitllets[0]);
    $quantitat -= $quantitatBitllet * $bitllets[0];
    echo '<p>' . $quantitatBitllet . ' bitllet de ' . $bitllets[0] . '</p>';

    $quantitatBitllet = intdiv($quantitat, $bitllets[1]);
    $quantitat -= $quantitatBitllet * $bitllets[1];
    echo '<p>' .  $quantitatBitllet . ' bitllet de ' . $bitllets[1] . '</p>';

    $quantitatBitllet = intdiv($quantitat, $bitllets[2]);
    $quantitat -= $quantitatBitllet * $bitllets[2];
    echo '<p>' .  $quantitatBitllet . ' bitllet de ' . $bitllets[2] . '</p>';

    $quantitatBitllet = intdiv($quantitat, $bitllets[3]);
    $quantitat -= $quantitatBitllet * $bitllets[3];
    echo '<p>' .  $quantitatBitllet . ' bitllet de ' . $bitllets[3] . '</p>';

    $quantitatBitllet = intdiv($quantitat, $bitllets[4]);
    $quantitat -= $quantitatBitllet * $bitllets[4];
    echo '<p>' .  $quantitatBitllet . ' bitllet de ' . $bitllets[4]. '</p>';

    $quantitatBitllet = intdiv($quantitat, $bitllets[5]);
    $quantitat -= $quantitatBitllet * $bitllets[5];
    echo '<p>' .  $quantitatBitllet . ' bitllet de ' . $bitllets[5] . '</p>';

    $quantitatBitllet = intdiv($quantitat, $bitllets[6]);
    $quantitat -= $quantitatBitllet * $bitllets[6];
    echo '<p>' .  $quantitatBitllet . ' bitllet de ' . $bitllets[6] . '</p>';

    $quantitatBitllet = intdiv($quantitat, $bitllets[7]);
    $quantitat -= $quantitatBitllet * $bitllets[7];
    echo '<p>' .  $quantitatBitllet . ' moneda de ' . $bitllets[7] . '</p>';

    $quantitatBitllet = intdiv($quantitat, $bitllets[8]);
    $quantitat -= $quantitatBitllet * $bitllets[8];
    echo '<p>' .  $quantitatBitllet . ' moneda de ' . $bitllets[8] . '</p>';




} else {
    echo 'Posa la quantitat a la variable quantitat pel QueryString';
}
?>
<head>
    <meta charset="UTF-8">
    <title>Diners</title>
</head>
<body>

</body>
</html>