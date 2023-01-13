<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Créer ses fonctions PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <div class="les-fonctions block">
        <h2>Créer ses fonctions PHP</h2>
        <h4>La déclaration d'une fonction</h4>
        <p>On appelle la définition d'une fonction la "déclaration". La déclaration peut se faire n'importe où dans le code et se fait grâce au mot-clé function.</p>
        <p>PHP doit connaître :</p>
        <ul>
            <li>son nom</li>
            <li>ses paramètres éventuels</li>
            <li>les instructions qu'elle va exécuter</li>
        </ul>
        <div class="code-example">
            <code>
                function functionName($param1, $param2)<br />
                {<br />
                <span class="comment">// liste des instructions</span><br />
                }
            </code>
        </div>
        <p>Les règles de définition d'une fonction sont les suivantes :</p>
        <ul>
            <li>Son nom commence par une lettre ou un _ et peut comporter des lettres, des chiffres et le caractère _.</li>
            <li>Contrairement aux idées reçues, son nom n’est pas sensible à la casse.</li>
            <li>Les paramètres d'une fonction sont facultatifs, mais les parenthèses sont obligatoires.</li>
        </ul>
        <h4>Appeler ses propres fonctions</h4>
        <p>Une fois déclarée, nous pouvons appeler notre fonction autant de fois que nous le souhaitons.</p>
        <div class="code-example">
            <code>functionName()<span class="comment">// appel de la fonction</span></code>
        </div>
        <h4>Les paramètres d'une fonction</h4>
        <p>Les paramètres permettent de faire passer des informations entre le code qui appelle la fonction et la fonction elle-même. Ils pourront ensuite être utilisés pour exécuter les instructions composant la fonction. Il est conseillé de préciser leur type même si ce n’est pas obligatoire.</p>
        <div class="code-example">
            <code>
                function sayHiTo(string $name)<br />
                {<br />
                echo 'Salut '.$name;<br />
                }<br />
                <br />
                sayHiTo('Julie');<br />
                sayHiTo('Anthony');
            </code>
        </div>
        <p>Il peut s'agir de simples variables, mais aussi de tableaux ou d'objets.</p>
        <h4>Récupérer le résultat d'une fonction</h4>
        <p>Il est possible de récupérer une valeur de retour suite à l'exécution d'une fonction. Pour cela, il suffit d'utiliser l'instruction return.</p>
        <p>Lorsque celle-ci est rencontrée, l'exécution des instructions s'arrête et nous avons la possibilité de récupérer la valeur qui suit cette instruction.</p>
        <h5>Syntaxe de l'instruction return</h5>
        <div class="code-example">
            <code>
                function returnAnArray()<br />
                {<br />
                return ['Something', 'Something Else', 'Value'];<br />
                }<br />
                <br />
                $values = returnAnArray();<br />
                <br />
                foreach($values as $value){<br />
                echo $value;<br />
                } <span class="comment">// affichera 'Something Something Else Value'</span>

            </code>
        </div>
        <p>Il n'est pas possible pour une fonction de retourner plusieurs valeurs en même temps. En revanche, il est tout à fait possible de renvoyer un tableau de valeurs.</p>
        <h4>La portée des variables</h4>
        <p>En PHP, il est possible de déclarer une variable n'importe où : en début de script, dans une boucle ou à l'intérieur d'une fonction.</p>
        <p>La portée d'une variable dépend du contexte dans lequel la variable est définie. Pour la majorité des variables, la portée concerne la totalité d'un script PHP. Mais lorsque vous définissez une fonction, la portée d'une variable définie dans cette fonction est locale a la celle-ci.</p>
        <h4>Les variables globales</h4>
        <p>Il peut arriver que nous ayons besoin de nous servir, à l'intérieur d'une fonction, de variables possédant une portée globale, c'est-à-dire des variables ayant été définies en dehors de la fonction.</p>
        <p>Pour cela, il est possible d'utiliser le mot-clé global avant la déclaration des variables. Cela permet d'indiquer que la variable utilisée ici doit être accessible de façon globale.</p>
        <h4>Les variables statiques</h4>
        <p>Une autre caractéristique importante de la portée des variables est la notion de variable statique.</p>
        <p>En définissant une variable de façon locale, celle-ci sera détruite après que notre fonction ait été exécutée. Or, on pourrait avoir besoin de conserver la valeur finale d'une variable (dans le cas d'un compteur, par exemple).</p>
        <p>Il est possible d’empêcher la destruction d'une variable en la précédant du mot-clé static lors de sa déclaration.</p>
        <p>Celle-ci aura toujours une portée locale, mais sa valeur ne sera pas détruite lors de la fin de l'exécution de la fonction : elle sera conservée pour pouvoir être réutilisée lors d'une prochaine exécution. La valeur de cette fonction n'est initialisée qu'au premier appel de la fonction.</p>
        <div class="code-example">
            <code>
                function countElements()<br />
                {<br />
                static $count = 0;<br />
                <br />
                $count++;<br />
                <br />
                echo $count . PHP_EOL;<br />
                }<br />
                countElements();
                <span class="comment">// 1</span><br />
                countElements();
                <span class="comment">// 2</span><br />
                countElements();
                <span class="comment">// 3</span>
            </code>
        </div>
        <h4>La fonction sprintf</h4>
        <p>La chaîne de format peut contenir aucune, une ou plusieurs directives, soit, des caractères basiques (sauf %) qui sont copiés directement dans le résultats et des spécifications de conversion introduites par le caractère %.</p>
        <h4>Les fonctions anonymes</h4>
        <p>On appelle fonctions anonymes ou closures, des fonctions que l'on crée à la volée et qui ne sont pas nommées.</p>
        <p>Ces fonctions sont généralement utilisées comme des fonctions de rappel, sous le terme de callback, c'est-à-dire des fonctions que l'on va passer en argument d'une autre fonction pour effectuer une action spécifique.</p>
        <p>Ces fonctions peuvent être stockées au sein de variables. Ainsi, nous pouvons utiliser la syntaxe suivante :</p>
        <div class="code-example">
            <code>
                $cube = function($n)<br />
                {<br />
                return ($n * $n * $n);<br />
                }<br />
                <br />
                echo $cube(3); <span class="comment">// affichera 27</span>
            </code>
        </div>
        <h4>Les fonctions récursives</h4>
        <p>Nous avons vu qu'il était possible d'appeler une fonction au sein d'une autre fonction. Cependant, une fonction peut également faire appel à elle-même. On appelle cela une fonction récursive.</p>
        <div class="code-example">
            <code>
                function decreaseToZero(int $start) :void<br />
                {<br />
                echo $start.PHP_EOL;<br />
                <br />
                if($start > 0){<br />
                $start--;<br />
                <br />
                decreaseToZero($start);<br />
                }<br />
                }<br />
                <br />
                decreaseToZero(20);
            </code>
        </div>
    </div>
</body>

</html>