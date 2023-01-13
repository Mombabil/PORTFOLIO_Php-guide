<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Les conditions PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <div class="les-conditions block">
        <h2>Les conditions PHP</h2>
        <h4>if else</h4>
        <ul>
            <li>Indiquez le mot-clé if</li>
            <li>Suivi de la condition entre parenthèses (condition)</li>
            <li>Puis du code à exécuter, si la condition est vraie, entre accolades { }</li>
        </ul>
        <div class="code-example">
            <code>if ($condition){<br />
                <span class="comment">// code si vrai</span><br />
                }else if ($condition){<br />
                <span class="comment">// sinon, code si vrai </span><br />
                }else{</br>
                <span class="comment">// sinon, code si faux</span><br />
                }
            </code>
        </div>
        <p>Dès qu'une condition est évaluée comme vraie, les suivantes sont ignorées.</p>
        <h4>L'écriture ternaire</h4>
        <p>Les ternaires vont nous permettre de condenser notre code, en écrivant une structure conditionnelle sur une seule ligne.</p>
        <p>Une écriture ternaire se décompose ainsi : (condition) ? alors : sinon</p>
        <ul>
            <li>(condition) est l'expression booléenne à évaluer</li>
            <li>? est l'opérateur ternaire, équivalent du if</li>
            <li>alors est exécuté si la condition est vraie </li>
        </ul>
        <div class="code-example">
            <code>$pays = 'france';</code>
            <code>$francais = ($pays === 'france') ? true:false;</code>
        </div>
        <p>Si <code>$pays</code> est égal à 'france', alors on affecte la valeur true à <code>$francais</code> ; sinon on lui affecte la valeur false.</p>
        <h4>switch</h4>
        <p>Le principe du switch est de prendre une variable et de la comparer à plusieurs valeurs, chaque cas ayant un code correspondant :</p>
        <div class="code-example">
            <code>
                switch ($variable) {<br />
                case 'valeur1':<br />
                <span class="comment">// code a executer</span><br />
                break;<br />
                case 'valeur2':<br />
                <span class="comment">// code a executer</span><br />
                break;<br />
                default:<br />
                <span class="comment">// code a executer</span><br />
                }
            </code>
        </div>
        <p>La <code>$variable</code> paramètre du switch n'est pas une expression booléenne, mais une valeur qui sera comparée ensuite avec chaque case. Une fois le case trouvé, le code correspondant est exécuté et l'exécution du switch est interrompue quand le mot-clé break est rencontré.</p>
        <p style="border-top: 1px solid red; background: rgb(252,210,211); padding: 12px 24px">Le switch ne traite que l'égalité ==, et non la supériorité ou l'infériorité.</p>
    </div>
</body>

</html>