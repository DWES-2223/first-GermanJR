<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sumar del 1-10</title>
</head>
<body>
<?php
$total = 0;

for ($i = 1; $i < 11; $i++) {
    $total += $i;
    if ($i === 10){
        echo $i . '=' . $total;
    } else {
        echo $i . '+';
    }
}
?>
</body>
</html>