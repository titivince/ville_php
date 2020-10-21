<?php
$pdo = new PDO('mysql:host=mysql;dbname=basedeteste;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$sql = $pdo->query("SELECT * FROM ville ") ;

$villes = $sql->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Ville</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container p-5">
            <h1>Villes</h1>
            <form method="GET" action="index.php">
                <div class="form-group">
                    <label>Quelles villes choississez-vous ?</label>
                    <select name="villes" class="form-control form-control-sm">
                        <?php foreach ($villes as $list): ?>
                        <option name="<?= $list['capital'] ?>"><?= $list['capital'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-outline-primary">
            </form><br>
            <?php $ville = $_GET['villes'];
                if ($ville == "Paris") {
                $pays = "de la France";
                echo $ville . ' est la capitale ' . $pays;
                } elseif ($ville == 'Rome') {
                $pays = "Italie";
                echo $ville . " est la capitale de l'" . $pays;
                } elseif ($ville == 'Tokyo') {
                $pays = 'du Japon';
                echo $ville . ' est la capitale ' . $pays;
                } else {
                echo 'Une réponce ';
                }
            ?>
        </div>
    </body>
</html>