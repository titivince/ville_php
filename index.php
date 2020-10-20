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
                    <option name="">Ville</option>
                    <option name="paris">Paris</option>
                    <option name="washington">Washington</option>
                    <option name="tokyo">Tokyo</option>
                </select>
            </div>
            <input type="submit" class="btn btn-outline-primary"><br>
        </form><br>
        <?php $ville = $_GET['villes'];

        if($ville == "Paris"){
            $pays = "de la France";
            echo $ville .' est la capitale '. $pays;
        }elseif ($ville == 'Washington'){
            $pays = "des Etat Unis";
            echo $ville .' est la capitale '. $pays;
        }elseif ($ville == 'Tokyo'){
            $pays = 'du Japon';
            echo $ville .' est la capitale '. $pays;
        }else{
            echo 'Une réponce ';
        } ?>
    </div>
    </body>
</html>