<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nombres pares</title>
</head>
<body>
<ul>
    <?php
    for ($i = 2; $i <= 50; $i = $i + 2){
        printf('<li>%d</li>',$i);
    }
    ?>
</ul>
</body>
</html>