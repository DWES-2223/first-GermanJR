<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_GET['edat'])){
    $edat = $_GET['edat'];
    switch ($edat){
        case $edat < 3:
            echo 'ets un bebé';
            break;
        case $edat < 12:
            echo 'ets un xiquet';
            break;
        case $edat < 17:
            echo 'ets un adolescent';
            break;
        case $edat < 66:
            echo 'ets un adult';
            break;
        default:
            echo 'ets un jubilat';

    }
} else {
    echo 'Posa la teu edat actual a la variable edat pel QueryString';
}
?>
<head>
    <meta charset="UTF-8">
    <title>Comparar edat</title>
</head>
<body>

</body>
</html>