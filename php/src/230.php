<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array aleatorio</title>
</head>
<body>
    <ul>
        <?php
        $arrayNumeros = array();
        for ($i = 0; $i < 50; $i++) {
            $arrayNumeros[] = rand(0, 99);
        }
        foreach ($arrayNumeros as $numero) {
            echo "<li>$numero</li>";
        }
        ?>
    </ul>
</body>
</html>