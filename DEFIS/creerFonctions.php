<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>DEFIS - Creer des fonctions PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <div class="block">
        <p>Déclarez une fonction <code>greetings</code> qui permettra à un utilisateur d'afficher plusieurs informations le concernant :</p>
        <ul>
            <li>Son nom : il doit s'agir d'une chaîne de caractères</li>
            <li>Son âge : il doit s'agir d'un entier</li>
            <li>Ses langages de programmation préférés : il doit s'agir d'un tableau qui, par défaut, peut être vide</li>
        </ul>
        <p>La fonction devra afficher les éléments suivants :</p>
        <ul>
            <li>"Bonjour, je m'appelle ... et j'ai ... ans."</li>
            <li>Si l'utilisateur n'a pas défini de langages de programmation préférés, affichez "Je n'ai pas de langage de programmation favori"</li>
            <li>Si l'utilisateur a défini des langages de programmation préférés, affichez "J'ai N langages de programmation favoris, il s'agit de : ... ... ..."</li>
        </ul>
    </div>
    <h4>Résultat: </h4>
    <p>
        <?php
        function greetings(string $name, int $age, array $langages = [])
        {
            echo '- Bonjour, je m\'appelle ' . $name . ' et j\'ai ' . $age . '.<br/>';

            if (empty($langages)) {
                echo 'Je n\'ai pas de langages de programmation favori<br/>';
            } else {
                echo 'J\'ai ' . count($langages) . ' langages de programmation favoris, il s\'agit de ' . implode(', ', $langages) . '.<br/>';
            }
            countGreetings();
            echo '<br/><br/>';
        }
        ?>
    </p>
    <?php
    greetings('Mougan', 30);
    greetings('Zozo', 30, ['php', 'js', 'html', 'css']);
    ?>
    <div class="block">
        <p>Reprenez la solution de la question précédente.</p>
        <p>Déclarez une seconde fonction, <code>countGreetings</code>, qui implémentera un compteur qui sera incrémenté à chaque appel.</p>
        <p>Cette fonction devra retourner la valeur de son compteur.</p>
        <p>La fonction greetings devra appeler la fonction countGreetings à chaque fois qu'elle est appelée, et affichera le message "La fonction a été exécutée ... fois".</p>
        <p>Réalisez plusieurs appels de votre fonction et affichez la valeur du compteur après avoir réalisé le dernier appel.</p>
    </div>
    <h4>Résultat: </h4>
    <?php
    function countGreetings(): void
    {
        static $nb = 1;
        echo 'La fonction a été exécutée ' . $nb . ' fois';

        $nb++;
    }

    greetings('Mougan', 47);
    greetings('Zozo', 23, ['league of legends', 'grounded', 'hogwart legacy']);
    ?>
</body>

</html>