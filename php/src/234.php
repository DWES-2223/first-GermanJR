<!DOCTYPE html>
<html lang="en">
<?php
$persona1 = ['Nom' => 'Pedro', 'Altura' => 180];
$persona2 = ['Nom' => 'Hannibal', 'Altura' => 174];
$persona3 = ['Nom' => 'Marta', 'Altura' => 175];
$persona4 = ['Nom' => 'Megan', 'Altura' => 166];
$persona5 = ['Nom' => 'Mario', 'Altura' => 185];

$personas = [$persona1, $persona2, $persona3, $persona4, $persona5]
?>

<head>
    <meta charset="UTF-8">
    <title>PersonasAltura</title>
</head>
<body>
<table>
    <?php
    echo "<thead> <tr> <th>Nom</th> <th>Alçada</th> </tr> </thead>";
    $alturaMedia = 0;
    foreach ($personas as $persona){
        foreach ($persona as $personaInfo){
            echo "<td>" . $personaInfo . "</td>";
        }
        $alturaMedia += $persona['Altura'];
        echo "<tr> </tr>";
    }
    ?>
</table>
    <p>Altura media: <?=$alturaMedia / count($personas)?></p>
</body>
</html>