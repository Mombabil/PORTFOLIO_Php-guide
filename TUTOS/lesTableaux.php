<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Les tableaux PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <div class="les-tableaux block">
        <h2>Les Tableaux PHP</h2>
        <h4>Déclarer un tableau indexé</h4>
        <p>Quand on crée un tableau, on peut le déclarer vide dans le but d'y insérer des données par la suite, ou directement avec ses valeurs.</p>
        <p>Pour déclarer un tableau vide, on va donc créer une variable (ex : $myArray) et lui affecter comme valeur des crochets : [].</p>
        <div class="code-example">
            <code>$myArray = [];</code>
        </div>
        <h4>Tableaux initialisés avec des valeurs (nombres ou texte)</h4>
        <p>Les valeurs d'un tableau sont séparées par une virgule suivie d'un espace (pour une meilleure lisibilité), quand il est déclaré sur une seule ligne.</p>
        <div class="code-example">
            <code>$numbers = [5, 20, 16, 2, 99];</code>
            <code>$animals = ['Lion', 'Chat', 'Chien', 'Cheval', 'Tigre', 'Ours'];</code>
        </div>
        <h4>Insertion de données</h4>
        <p>Pour insérer des données dans notre tableau, il faut reprendre la variable déclarée en lui accolant des crochets, pour signifier que l'on vient ajouter une valeur à la fin du tableau, puis lui affecter la valeur désirée.</p>
        <div class="code-example">
            <code>$myArray[] = 'value';</code>
        </div>
        <h4>Lecture de données</h4>
        <p>Pour lire une donnée, on indique sa position au sein du tableau, entre crochets.</p>
        <div class="code-example">
            <code>echo myArray[position];</code>
        </div>
        <p>Les tableaux PHP fonctionnent selon un système de valeurs associées à des clés (ou index).</p>
        <p>Plus concrètement, quand vous créez un tableau comme : <code>$animals = ['Lion', 'Chat', 'Chien']</code>, celui-ci contient 3 valeurs ('Lion', 'Chat' et 'Chien').</p>
        <p>Par défaut, pour l'index PHP, on utilise un entier qui commence à 0 et qui s'incrémente à chaque valeur ajoutée. Dans le précédent tableau, la valeur 'Lion' a donc la clé 0, 'Chat' la clé 1 et 'Chien' la clé 2.</p>
        <h4>Modification de données</h4>
        <p>Pour modifier une donnée d'un tableau, on utilise la variable en indiquant entre crochets la clé correspondant à la donnée à modifier.</p>
        <div class="code-example">
            <code>$myArray[position] = 'new value';</code>
        </div>
        <h4>Déclarer un tableau associatif</h4>
        <p>Au lieu de lister les valeurs comme dans un tableau indexé (<code>$numbers = [5, 20, 16, 2, 99];</code>), il faut préciser la clé textuelle (entre apostrophes, car elle est au format texte) et lui affecter la valeur désirée grâce au symbole => (symbole égal suivi du chevron supérieur).</p>
        <div class="code-example">
            <code>$myArray = ['key' => 'value', 'key2' => 'value2'];</code>
        </div>
        <h4>Insertion de données</h4>
        <p>Pour insérer des données dans un tableau associatif, précisez la nouvelle clé entre crochets, puis affectez la valeur voulue.</p>
        <div class="code-example">
            <code>$myArray['key'] = 'value';</code>
        </div>
        <h4>Lecture de données</h4>
        <p>Pour lire une donnée, spécifiez sa clé entre crochets.</p>
        <div class="code-example">
            <code>echo $myArray['key'];</code>
        </div>
        <h4>Déclarer un tableau multidimensionnel</h4>
        <p>Pour déclarer un tableau à plusieurs dimensions, nous allons déclarer un tableau avec la méthode habituelle et nous allons lui insérer comme valeurs d'autres tableaux</p>
        <div class="code-example">
            <code>$users = [<br />
                ['lastName' => 'Martin', 'firstname' => 'Jean'],<br />
                ['lastName' => 'Doe', 'firstname' => 'Jane'],<br />
                ['lastName' => 'Dupont', 'firstname' => 'Marc'],<br />
                ];
            </code>
        </div>
        <h4>Lecture de données</h4>
        <p>Dans l'exemple ci-dessous, nous affichons (grâce à var_dump()) le tableau associatif de l'utilisateur Martin / Jean, car il est à la clé 0 du tableau $users.</p>
        <div class="code-example">
            <code>var_dump($users[0]);</code>
        </div>
        <p>Nous pouvons également accéder directement aux valeurs des tableaux situés dans le tableau multidimensionnel.</p>
        <p>Dans l'exemple ci-dessous, nous affichons directement (avec echo) la valeur Martin.</p>
        <div class="code-example">
            <code>echo $users[0]['lastName'];</code>
        </div>
        <h4>Quelques fonctions utiles pour les tableaux</h4>
        <h4>Affichage avec implode()</h4>
        <p>Les tableaux étant des "blocs" de valeurs multiples, il n'est pas possible de les afficher avec l'instruction echo : PHP ne sait pas comment les afficher. Pour pallier ce problème, nous connaissons la fonction var_dump, mais elle n'est pas adaptée à l'affichage pour les utilisateurs.</p>
        <p>Il existe cependant une autre fonction permettant d'afficher le contenu d'un tableau : implode(). Cette fonction va afficher tous les éléments d'un tableau, séparés par un séparateur choisi par le développeur.</p>
        <div class="code-example">
            <code>$winningNumbers = [4, 5, 65, 78, 87];</code>
            <code>echo implode(',', $winningNumber); <span class="comment">// affiche '4, 5, 65, 78, 87'</span></code>
        </div>
        <h4>Tri simple avec sort()</h4>
        <p>Cette fonction permet de trier les valeurs d'un tableau par ordre croissant.</p>
        <div class="code-example">
            <code>$numbers = [99, 52, 104, 0, 16];</code>
            <code>sort($numbers);</code>
        </div>
        <p>Le tableau est à présent trié du plus petit au plus grand : 0, 16, 52, 99, 104.</p>
        <p>Il existe d'autres fonctions de tri, comme <code>rsort()</code> qui trie dans l'ordre décroissant, ou <code>ksort()</code>, qui permet de trier un tableau en fonction de ses clés et qui sera donc utile pour les tableaux associatifs.</p>
        <h4>Nombre d'éléments avec count()</h4>
        <p>Cette méthode compte le nombre d'éléments dans le tableau.</p>
        <div class="code-example">
            <code>$users = ['John', 'Jane', 'Bob'];</code>
            <code>echo count($users); <span class="comment">// affiche '3'</span></code>
        </div>
    </div>
</body>

</html>