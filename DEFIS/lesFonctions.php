<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>DEFIS - les fonctions PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <p>Vous disposez du code HTML et PHP permettant d'afficher la liste des utilisateurs d'un site Internet.</p>
    <section class="block">
        <?php
        $mainTitle = 'administration de votre site';
        $pageTitle = 'liste des utilisateurs';
        $users = ['JOHN', 'LILI', 'CLEMENCE', 'user4']
        ?>

        <h1><?= strtoupper($mainTitle) ?></h1>

        <h2><?= ucfirst($pageTitle) ?></h2>
        <table>
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                // On parcourt ici notre tableau d'utilisateurs pour les afficher un par un
                foreach ($users as $user) {
                ?>
                    <tr>
                        <td><?= strtolower($user) ?></td>
                        <td><a href=" #">Supprimer</a></td>
                    </tr>
                <?php
                }
                ?>
        </table>
        <p>Votre site dispose de <?= count($users) ?> utilisateurs</p>
    </section>
    <p>
        À l'aide des fonctions prévues par PHP, effectuez les modifications suivantes :
    </p>
    <ul>
        <li>
            Le titre principal devra être écrit entièrement en majuscules,
        </li>
        <li>
            Le titre de la page devra être écrit avec sa première lettre en majuscule,
        </li>
        <li>
            Les noms de chaque utilisateur seront écrits en minuscules,
        </li>
        <li>
            À l'aide d'une fonction permettant de compter le nombre d'éléments dans un tableau, vous afficherez le nombre d'utilisateurs. L'ajout d'un nouvel élément dans le tableau permettra de vérifier que ce nombre est généré dynamiquement.
        </li>
    </ul>



</body>

</html>