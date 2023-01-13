<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Les boucles PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <div class="les-boucles block">
        <h2>Les boucles PHP</h2>
        <p>Une boucle est une structure permettant de répéter une ou plusieurs instructions jusqu'à ce qu'une condition pré-définie soit remplie ou qu'un résultat voulu soit obtenu. Elles permettent d'éviter la réécriture d'instructions et facilitent leur réutilisation.</p>
        <p><code>for</code>, <code>foreach</code>, <code>while</code>, <code>do while</code> sont les quatre types de boucles utilisés en programmation.</p>
        <h4>while</h4>
        <div class="code-example">
            <code>
                while (condition){<br />
                <span class="comment">// code a executer</span><br />
                }</code>
        </div>
        <h4>do while</h4>
        <div class="code-example">
            <code>
                do {<br />
                <span class="comment">// code a executer</span><br />
                } while (condition);
            </code>
        </div>
        <p style="border-top: 1px solid red; background: rgb(252,210,211); padding: 12px 24px">La différence entre ces deux boucles réside dans le fait que while n'exécutera jamais son code si la condition est fausse, alors que do while l'exécutera au moins une fois.</p>
        <h4>for</h4>
        <p>La boucle for est une boucle spécialisée dans les compteurs. Elle se différencie du while par le fait que sa signature intègre directement le compteur d'itération : la variable $compteur, sur laquelle on faisait un $compteur++ plus loin dans la boucle, est remplacée par une structure intégrée au for.</p>
        <p>Pour faire une boucle for, nous indiquerons le mot-clé for suivi de trois instructions permettant de définir le cycle de vie de notre compteur :</p>
        <ul>
            <li>La valeur de départ du compteur, par exemple $compteur=0.</li>
            <li>La condition de sortie basée sur la valeur du compteur, comme $compteur !== 10 ou $compteur <= 10.</li>
            <li>Le pas d'incrémentation du compteur, par exemple $compteur++.</li>
        </ul>
        <p>Ces instructions doivent être entre parenthèses et séparées par des points-virgules, sachant qu'une boucle for peut s'incrémenter, mais aussi se décrémenter.</p>
        <div class="code-example">
            <code><span class="comment">// increment</span></code>
            <code>
                for(min; max; pas++){<br />
                <span class="comment">// code a executer</span><br />
                }
            </code>
            <code><span class="comment">// decrement</span></code>
            <code>
                for(max; min; pas--){<br />
                <span class="comment">// code a executer</span><br />
                }
            </code>
        </div>
        <h4>for each</h4>
        <p>il s'écrit avec le mot-clé foreach suivi de la variable contenant mon tableau (ici, $user), le mot-clé as, puis une variable qui va recevoir les données. Cette variable est déclarée directement dans l'expression du foreach.</p>
        <div class="code-example">
            <code>
                foreach($user as $information){ <span class="comment">// il n'y a pas besoin de declarer la variable information</span><br />
                echo $information; <span class="comment">// va afficher tout les element du tableau tour a tour</span><br />
                }
            </code>
        </div>
        <p>Il est également possible de récupérer les clés du tableau lors d'un foreach : pour cela, il suffit de remplacer la variable recevant les données par la notation $cle => $valeur. Ceci signifie que, pour chaque itération, la clé ou indice de l'élément courant du tableau est associé à $cle et l'élément courant à $valeur. Ces deux variables peuvent avoir n'importe quel nom.</p>
        <div class="code-example">
            <code>
                foreach($user as $userField => $userInformation){<br />
                echo $userField.' : '.$userInformation;<br />
                }
            </code>
        </div>
        <p>Grâce au symbole <b>&</b>, nous assignons une référence à valeur.</p>
        <div class="code-example">
            <code>
                foreach($user as &$information) {<br />
                <span class="comment">// Affecter une valeur a $information ici écrasera la valeur du tableau</span><br />
                }<br />

                foreach($user as $information) {<br />
                <span class="comment">// Affecter une valeur a $information ici n'aura aucune incidence sur la valeur du tableau</span><br />
                }
            </code>
        </div>
    </div>
</body>

</html>