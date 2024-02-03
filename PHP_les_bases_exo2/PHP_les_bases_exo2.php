<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_les_bases_exo2/b</title>

</head>

<body>
    <?php

    if (
        isset($_POST['nom'])
        && (isset($_POST['prenom']))
        && (isset($_POST['f'])) || (isset($_POST['m']))
        && (isset($_POST['mail']))
    ) {
        if (!strpos($_POST['mail'], '@')) {
            $answer = "Veuillez entre un mail valide";
        } else if (strlen($_POST['nom']) < 3) {
            $answer = "Veuillez entrer un nom de 3 lettres minimum";
        } else {
            $answer = (ucfirst($_POST['nom'])) . " " . (ucfirst($_POST['prenom']) . "<br/>" . $_POST['mail']);
        }
    } else $answer = "Veuillez compléter tous les champs de saisie.";

    ?>
    <p><?php echo $answer ?></p>
</body>

</html>