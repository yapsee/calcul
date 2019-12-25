<!DOCTYPE <!doctype html>
<html amp lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="type description here" />
    <meta property="og:title" content="type title here" />
    <meta property="og:url" content="type non AMP URL here" />
    <meta property="og:description" content="type description here" />
    <meta property="og:type" content="website">
    <link rel="stylsheet" href="css/calculatrice.css" />

    <title>calculatrice yapsy</title>
</head>

<body style="text-align:center;">
    <!-- body content goes here -->
    <div class="calculatrice" style="text-align:center; background-color:gray;width:30%;height:60%;margin:auto;">
        <div class="h1">
            <h1>Calculatrice</h1>
        </div>
        <div class="form">
            <form action="" method="GET">
                <p>nombre1:<input type="text" name="nombre1"></p>
                <p>nombre2:<input type="text" name="nombre2"></p>
                <select name="operation" style="padding:10px;background-color:red;">
                    <option value="addition">+</option>
                    <option value="soustraction">-</option>
                    <option value="division">/</option>
                    <option value="multiplication">*</option>
                </select>
                <input type="submit" name="CALCULER" value="CALCULER" style="padding:15px;">
            </form>
        </div>
    </div>
    <?php
    if (isset($_GET['CALCULER'])) // Si les varaibles existent ...
    {
        $nombre1 = ($_GET['nombre1']); // On sécurise ...
        $operation = ($_GET['operation']);
        $nombre2 = ($_GET['nombre2']);

        if ($nombre1 != NULL and $nombre2 != NULL) // Puis on vérifie leur valeur ...
        {
            if ($operation == "division" and $nombre2 == 0) {
                echo 'On peut pas diviser par 0!';
            }
            if ($operation == "addition") {
                $resultat = $nombre1 + $nombre2;
                echo 'La somme de ces deux nombres est ' . $resultat;
            }

            if ($operation == "soustraction") // Si on a choisi la soustraction, on calcul la différence.
            {
                $resultat = $nombre1 - $nombre2; // On calcul
                echo 'La différence de ces deux nombres est ' . $resultat; // Puis on affiche le résultat
            }

            if ($operation == "multiplication") {
                $resultat = $nombre1 * $nombre2;
                echo 'Le produit de ces deux nombres est ' . $resultat;
            }

            if ($operation == "division") {
                $resultat = $nombre1 / $nombre2;
                echo 'Le quotient de ces deux nombres est ' . $resultat;
            } else // Si les champs n'ont pas étaient renseigné, on affiche un message d'erreur ...
            {
                echo 'Veuillez ajouter des nombres.';
            }
        }
    }
    ?>


</body>

</html>