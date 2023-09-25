<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $persona1 = ['Nom' => 'Pedro', 'Altura' => 180, 'Email' => '1@gmail.com'];
    $persona2 = ['Nom' => 'Hannibal', 'Altura' => 174, 'Email' => '2@gmail.com'];
    $persona3 = ['Nom' => 'Marta', 'Altura' => 175, 'Email' => '3@gmail.com'];
    $persona4 = ['Nom' => 'Megan', 'Altura' => 166, 'Email' => '4@gmail.com'];
    $persona5 = ['Nom' => 'Mario', 'Altura' => 185, 'Email' => '5@gmail.com'];

    $personas = [$persona1, $persona2, $persona3, $persona4, $persona5]
    ?>
    <meta charset="UTF-8">
    <title>Personas</title>
</head>
<body>
    <table>
        <?php
        echo "<thead> <tr> <th>Nom</th> <th>Alçada</th> <th>Email</th> </tr> </thead>";
        foreach ($personas as $persona){
            foreach ($persona as $personaInfo){
                echo "<td>" . $personaInfo . "</td>";
            }
            echo "<tr> </tr>";
        }
        ?>
    </table>
</body>
</html>