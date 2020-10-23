<?php //connection bdd
$pdo = new PDO('mysql:host=mysql;dbname=basedeteste;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$sql = $pdo->query("SELECT * FROM ville"); //request bdd
$villes = $sql->fetchAll();

if(isset($_GET['villes'])) {
    $cap = $_GET['villes'];
    $sql = $pdo->prepare("SELECT pays FROM ville WHERE capital = :capital"); //prepare sql request
    $sql->bindParam(":capital", $cap);                            // bind param
    $sql->execute();         //execute sql request
    $fetch = $sql->fetch();  //fetch sql request
    $pays = $fetch['pays'];
}
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
                        <?php foreach ($villes as $list): ?>                    <!--create select with bdd-->
                            <option name="<?= $list['capital'] ?>"> <?= $list['capital'] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-outline-primary">
            </form><br>
            <?php
            if(isset($_GET['villes'])) {            //print result
                echo "La $pays a pour capital $cap";
            }
            ?>
        </div>
    </body>
</html>