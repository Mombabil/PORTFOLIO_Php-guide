<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Les fonctions PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <div class="les-fonctions block">
        <h2>Les fonctions PHP</h2>
        <h4>Les fonctions internes PHP</h4>
        <p>On appelle fonction une portion de code, représentant un sous-programme, permettant d'effectuer un ensemble d'instructions par son simple appel dans le corps du programme principal.</p>
        <p>Les fonctions permettent d'exécuter dans plusieurs parties du programme une même série d'instructions.</p>
        <p>Il est possible de retrouver l'ensemble des fonctions existantes, triées par catégories, en suivant ce lien :
            <a href="https://www.php.net/manual/fr/funcref.php" target="_blank">https://www.php.net/manual/fr/funcref.php<a>.
        </p>
        <h4>Vérifier la déclaration d'une variable</h4>
        <p>La fonction <code>isset</code> permet de vérifier qu'une variable a bien été déclarée et qu'elle n'est pas nulle.</p>
        <div class="code-example">
            <code>$name = "Hugo";</code>
            <code>echo isset($name); <span class="comment">// affichera true</span></code>
            <code>echo isset($city); <span class="comment">// affichera false</span></code>
        </div>
        <h4>Détruire une variable</h4>
        <p>La fonction <code>unset</code> permet de détruire une variable.</p>
        <div class="code-example">
            <code>$name = "Nathalie";</code>
            <code>echo isset($name); <span class="comment">// affichera true</span></code>
            <code>unset($name); <span class="comment">// destruction de la variable</span></code>
        </div>
        <h4>Vérifier si une variable est vide</h4>
        <p>Il est possible de déterminer simplement si une variable est vide grâce à la fonction empty.</p>

        <p>Les valeurs ci-dessous sont considérées comme étant vides :</p>
        <ul>
            <li>
                "" (une chaîne vide)
            </li>
            <li>
                0 (0 en tant qu'entier)
            </li>
            <li>
                0.0 (0 en tant que nombre à virgule flottante)
            </li>
            <li>
                "0" (0 en tant que chaîne de caractères)
            </li>
            <li>
                NULL
            </li>
            <li>
                FALSE
            </li>
            <li>
                array() (un tableau vide)
            </li>
        </ul>
        <div class="code-example">
            <code>$array = [];</code>
            <code>var_dump(empty($array)); <span class="comment">// affichera true</span></code>
        </div>
        <h4>Vérifier le type d'une variable</h4>
        <p>Il est parfois nécessaire de vérifier le type d'une variable.</p>
        <p>On peut par exemple vérifier qu'une variable est bien un tableau avec la fonction <code>is_array</code>, ou qu'il s'agit bien d'un entier avec la fonction <code>is_int</code>.</p>
        <p>Ces fonctions retournent généralement un booléen.</p>
        <div class="code-example">
            <code>$anArray = [1, 2, 3];</code>
            <code>$anInteger = 4;</code>
            <code>echo is_array($anArray); <span class="comment">// affichera true</span></code>
            <code>echo is_int($anInteger); <span class="comment">// affichera true</span></code>
        </div>
        <h4>Modifier la casse d'une chaîne de caractères</h4>
        <p>Il est possible d'intervenir facilement sur la casse d'une chaîne de caractères. On peut par exemple transformer tous les caractères d'une chaîne en minuscules ou en majuscules.</p>
        <p>La constante PHP_EOL permet de rendre plus lisible le code source. Elle renvoie un saut de ligne correspondant au système d'exploitation actuel.</p>
        <div class="code-example">
            <code>$var = "Une ChaIne dE caractERes";</code>
            <code>echo strtolower($var).PHP_EOL; <span class="comment">// affichera "une chaine de caracteres"</span></code>
            <code>echo strtoupper($var).PHP_EOL; <span class="comment">// affichera "UNE CHAINE DE CARACTERES"</span></code>
        </div>
        <h4>Déterminer la longueur d'une chaîne de caractères</h4>
        <p>Il est possible de déterminer simplement la longueur d'une chaîne de caractères avec la fonction <code>strlen</code>.</p>
        <div class="code-example">
            <code>$var = "une chaine de caracteres";</code>
            <code>echo strlen($var).PHP_EOL; <span class="comment">// affichera "23"</span></code>
        </div>
        <h4>Récupérer la date du jour</h4>
        <p>Grâce à la fonction <code>date</code>, il est possible de récupérer et de formater une date.</p>
        <div class="code-example">
            <code>echo date("d/m/y"); <span class="comment">// affiche la date au format jour/mois/année</span></code>
            <code>echo date("l"); <span class="comment">// affiche le jour de la semaine</span></code>
            <code>echo date("H:i:s"); <span class="comment">// affiche l'heure</span></code>
        </div>
        <h4>Convertir une chaîne de caractères en un tableau (et inversement)</h4>
        <p>Les fonctions <code>explode</code> et <code>implode</code> permettent de transformer une chaîne de caractères en un tableau, ou un tableau en une chaîne de caractères.</p>
        <div class="code-example">
            <code>$array = ['mandarine', 'fraise', 'poire', 'pamplemousse'];</code>
            <code>$arrayToString = implode(',', $array); <span class="comment">// concatene les valeurs du tableau en les séparant par une virgule</span></code>
            <code>echo $arrayToString; <span class="comment">// affichera "mandarine,fraise,poire,pamplemousseArray"</span></code>
            <code>$stringToArray = explode(',', $arrayToString); <span class="comment">// transforme une chaîne en tableau en considérant que les entrées seront les éléments séparés par une virgule</span></code>
            </code>
        </div>
    </div>
</body>

</html>