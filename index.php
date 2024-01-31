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







    <h2>ma fonction</h2>


    <pre>
    <?php


    $trucs = array("apple", 5, "orange");
    var_dump($trucs);
    ?>
    </pre>
    <pre>
    <?php
    // Je vais créer une fonction qui va faire exactement la même chose que le var_dump
    $trucs = array(
        0=>"apple", 
        1=>5, 
        2=>"orange"
    );
    
    function dump($trucs) {
        foreach ($trucs as $truc => $value)
            echo 'array', $truc, '{', '<br/>', $value,'=>', '<br/>', gettype($value), "$value";
    }


    ?>
</pre>

</body>

</html>