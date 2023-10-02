<!DOCTYPE html>
<html lang="en">

    <?php
    include('atletes.php');
    include('functions.php');
    ?>

    <head>
        <meta charset="UTF-8">
        <title>Estadísticas y funciones</title>
    </head>

    <body>
        <?php
        $fechaPruebas = array_column_ext($records, "data", -1);
        $club = array_column_ext($records, "club", -1);
        $ciudades = array_column_ext($records, "lloc", -1);
        $fechasNacimientos = array_column_ext($records, "natalici", -1);
        $atletas = array_column_ext($records, "atleta", -1);

        $clubMasNombrado = laureado($club);
        $personaMasVictoriosa = laureado($atletas);
        $ciudadMasTitulada = laureado($ciudades);
        $recordMasViejo = vell($fechaPruebas);
        $atletaMasJoven = jove($fechasNacimientos, $fechaPruebas);

        $nombreAtletaJoven = '';
        $edadAtletaMasJoven = -1;

        foreach ($records as $record => $nombre) {
            if ($record == $atletaMasJoven[0]) {
                $nombreAtletaJoven = $records[$record]["atleta"];
                $edadAtletaMasJoven = $atletaMasJoven[1];
            }
        }
        ?>

        <p>Record més antic: <?= $recordMasViejo ?></p>
        <p>Club amb més títols: <?= $clubMasNombrado ?></p>
        <p>Persona amb més records: <?= $personaMasVictoriosa ?> </p>
        <p>Ciutat més propicia: <?= $ciudadMasTitulada ?></p>
        <p>Mes jove en aconsegir el record: <?= $nombreAtletaJoven ?> - <?= $atletaMasJoven[1] ?> anys</p>

        <?php
        include('270a.php');
        ?>
    </body>
</html>