<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar formulari</title>
</head>
<body>
<?php
include('atletes.php');

$pruebaExistente = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['prueba'])) {
        extract($_POST);

        if (array_key_exists($prueba, $records)) {

            $records[$prueba]["marca"] = $marca;
            $records[$prueba]["atleta"] = $atleta;
            $records[$prueba]["natalici"] = $natalici;
            $records[$prueba]["club"] = $club;
            $records[$prueba]["data"] = $data;
            $records[$prueba]["lloc"] = $lloc;

            $pruebaExistente = true;
        }
    }
    if ($pruebaExistente) {
        include('270a.php');
    } else { ?>
        <p>La prova <?= $prueba ?> no existeix en la llista de records oficials de la FEA</p>
    <?php }

} else {
    include('formRecord.html');
}
?>
</body>
</html>