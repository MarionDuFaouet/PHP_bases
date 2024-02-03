<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />

    <title>Premier programme PHP</title>
</head>







<body>
    <h2>Premier EXO</h2>
    <?php

    $prenom = 'Milo';
    $nom = 'Le Coz';
    $annees = (string)5;
    $mois = 6;
    $estUnEnfant = true;

    $loisirs = array(
        'prefere' => 'jeux-vidéos',
        'adore' => 'chatouilles',
        array(
            'veut' => 'bagarres',
            'neVeutPas' => 'se brosser les dents'
        )
    );

    $identite = $prenom . ' ' . $nom . ' ' . "est un enfant de " . $annees . ' ans et ' . $mois . ' mois.';
    echo $identite . '<br/>';
    ?>

    <h2>fonction print</h2>
    <pre>
<?php
print_r($loisirs);
echo '</pre><br/><h2>Fonction var_dump</h2><pre>';

var_dump($loisirs);
?>
    </pre>




    <h2>test var_dump</h2>




    <pre>
    <?php


    $test = array("apple", 5, false, "poires");
    // note : var_dump est la commande magique pour débuguer
    var_dump($test);
    echo '</pre><br/><h2>ma fonction pseudo var_dump</h2><pre>';

    // Créer une fonction qui va faire exactement la même chose que le var_dump

    $trucs = array("apple", 5, false, "poires");

    function dump($trucs)
    {
        echo 'array(',count($trucs),') {';
        foreach ($trucs as $truc => $value){
            echo '<br/>[',$truc,']=>', '<br/>', gettype($value),'(', strlen($value),') "',$value,'"';
        }
        echo '<br/>}';
    }
    dump($trucs);

    // Correction Thierry






    ?>
</pre>

</body>

</html>