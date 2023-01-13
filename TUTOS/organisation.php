<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>L'organisation des fichiers PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <div class="l-organisation-des-fichiers block">
        <h2>L'organisation des fichiers PHP</h2>
        <p>Tout au long des développements d'une application web PHP, il est recommandé de séparer les différents fichiers HTML les uns des autres et de ne les appeler que lorsque c'est nécessaire. Cela permet de n'écrire que des fichiers HTML plus petits, rangés dans une arborescence facilement maintenable. Nous allons voir comment se fait l'intégration du contenu de ces fichiers au sein d'un seul fichier PHP.</p>
        <h4>Include et require</h4>
        <p>L'inclusion d'un fichier dans un script PHP peut se faire avec deux mots-clés : <code>include</code> et <code>require</code>.</p>
        <ul>
            <li>L'utilisation d'include va ajouter le contenu d'un fichier ciblé dans le fichier PHP courant et n'affichera pas d'erreur si celui-ci n'est pas disponible. Cela signifie que la page sera servie normalement, mais que l'espace normalement rempli par le fichier sera vide.</li>
            <li>Similairement, <code>require</code> va ajouter le contenu d'un fichier dans le script PHP en cours, mais son exécution s'interrompra et une erreur sera retournée si le fichier n'est pas disponible.</li>
        </ul>
        <p>Inclusion du fichier dans un script PHP :</p>
        <div class="code-example">
            <code>include "html/page.html"; <span class="comment">// l'inclusion d'un chemin de fichier erroné génère un warning non bloquant</span></code>
            <code>require "html/page.html"; <span class="comment">// l'inclusion d'un chemin de fichier erroné génère une erreur bloquante</span></code>
        </div>
        <h4>Include_once et require_once</h4>
        <p>Lors de l'inclusion de fichiers PHP, il est nécessaire de s'assurer que les fichiers à inclure ne l'ont pas déjà été. Pour cela, PHP propose les mots-clés include_once et require_once.</p>
        <p style="border-top: 1px solid blue; background: rgb(197,222,235); padding: 12px 24px">Il est considéré comme une bonne pratique de déclarer les constantes d'une application dans un fichier séparé.</p>
        <h4>Séparer l'affichage des calculs</h4>
        <p>Un des principes des bonnes pratiques de développement en termes d'architecture est un découpage le plus important possible entre la partie présentation d'une application et sa partie logique.</p>
    </div>
</body>

</html>