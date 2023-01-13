<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Les variables PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <div class="les-variables block">
        <h2>Les variables PHP</h2>
        <h4>Déclaration d'une variable PHP</h4>
        <p>Pour déclarer une variable PHP, on précède le nom qu'on souhaite lui donner du symbole dollar ($).</p>
        <ul>
            <li>
                Les noms des variables sont sensibles à la casse (prise en compte des majuscules/minuscules).
            </li>
            <li>
                Ils doivent commencer par une lettre ou le symbole souligné ( _ ) et peuvent contenir des lettres, chiffres ou des soulignés.
            </li>
            <li>
                Une variable ne peut pas commencer par un chiffre (ex : $1userName) ou par un autre caractère spécial (ex : $/userName)
            </li>
            <li>
                La bonne pratique veut que le nom de la variable soit en anglais et assez descriptif (ex : $userName pour définir le nom de l'utilisateur).
            </li>
            <li>
                Pour lui affecter une valeur, on fait suivre le nom du symbole égal (=), suivi de la valeur désirée.
            </li>
            <li>
                Comme toutes les instructions en PHP, l'affectation doit être clôturée avec un point-virgule (;).
            </li>
        </ul>
        <div class="code-example">
            <code>$userName = 'John'; <span class="comment">// la variable appelée "userName" reçoit pour valeur "John"</span></code>
            <code>$userAge = 36; <span class="comment">// la variable appelée "userAge" reçoit la valeur 36</span></code>
        </div>
        <h2>Les constantes PHP</h2>
        <p>Les constantes permettent de stocker des valeurs en les figeant de manière à ce qu'elles ne puissent jamais être modifiées.</p>
        <p>Un taux peut en être un exemple, si nous ne voulons pas que la valeur de ce taux puisse être modifiée et si nous voulons réutiliser exactement la même valeur àplusieurs endroits de notre code.</p>
        <div class="code-example">
            <code>define('NAME', value);</code>
        </div>
        <p>Pour déclarer une constante, il faut utiliser la fonction define(), au sein de laquelle nous précisons en premier son nom (en majuscules), puis ensuite sa valeur.</p>
        <h2>Les booléens PHP</h2>
        <p>Les booléens sont des informations purement logiques : il n'est pas possible des les afficher simplement en utilisant echo. Il faut utiliser la fonction var_dump pour visualiser leur contenu.</p>
        <div class="code-example">
            <code>$var = false;</code>
            <code>var_dump($var); <span class="comment">// affiche: (boolean) false</span></code>
        </div>
    </div>
</body>

</html>