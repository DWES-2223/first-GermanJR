<!DOCTYPE html>
<html lang="en">
<?php
include_once('atletes.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Tabla atletas main</title>
</head>
<table>

    <!-- Capçalera de la taula --> <tr><th>Prova</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Natalici</th>
        <th>Club</th>
        <th>Data</th>
        <th>Lloc</th>
    </tr>

    <!-- Cos de la taula -->
    <?php foreach ($records as $prueba => $record){ ?>
        <tr><td><?= $prueba ?></td>
            <td><?= $record["marca"]?></td>
            <td><?= $record["atleta"]?></td>
            <td><?= $record["natalici"]?></td>
            <td><?= $record["club"]?></td>
            <td><?= $record["data"]?></td>
            <td><?= $record["lloc"]?></td>
        </tr>
    <?php } ?>
</table>