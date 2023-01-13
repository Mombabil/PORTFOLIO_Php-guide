<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>DEFIS - les conditions PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <?php

    $type = 'moto'; // a changer à chaque réparation

    switch ($type) {
        case 'voiture':
        case 'quad':
            $nbPneus = 4;
            break;
        case 'trikes':
            $nbPneus = 3;
            break;
        case 'moto':
        case 'scooter':
            $nbPneus = 2;
            break;
        default:
            $nbPneus = 1;
    }
    $pneufPrice = $nbPneus * 60;
    if ($nbPneus === 4) {
        $pneufPrice *= 0.85;
    }
    $rouesCoolPrice = $nbPneus * 75;
    if ($nbPneus >= 3) {
        $rouesCoolPrice *= 0.75;
    }
    ?>

    <p>Un garage répare des voitures, des quads, des scooters, des motos et des trikes. Pour chaque réparation, il a besoin d'acheter des pneus neufs : il préfère remplacer toutes les roues du véhicule, par précaution. Chaque type de véhicule possède un nombre variable de roues : les voitures et les quads en ont 4, les trikes en ont 3, et les scooters et motos en ont 2. Pour tous les autres véhicules (remorques, monocycles, et autres), il achète quand même un pneu par sécurité.</p>
    <p>Il a le choix entre deux fabricants de pneus, qui ont différents tarifs :</p>
    <ul>
        <li>"Pneufs" vend ses pneus 60 € pièce, mais si on lui en achète 4, alors il propose une remise de 15 % sur la facture finale.</li>
        <li>"Roues cool" vend ses pneus 75 € pièce, mais, à partir du troisième, il propose une remise de 25 % sur la facture finale.</li>
    </ul>
    <p>À chaque réparation, c'est donc un casse-tête pour savoir chez quel fournisseur il est le plus intéressant d'acheter ses pneus.</p>
    <p>Écrivez un script qui sera appelé à chaque réparation de véhicule. Ainsi, à partir d'une variable contenant le type de véhicule, votre script va afficher le nom du fournisseur le plus intéressant.</p>
    <div class="block">
        <div class="code-example">
            <code>$type = 'voiture'; <span class="comment">//a changer a chaque reparation</span></code>
            <code><span class="comment">// affectation du nombre de pneus a la variable $nbPneus</span></code>
            <code><span class="comment">// calcul des deux prix $pneufPrice et $rouesCoolPrice</span></code>
            <code><span class="comment">// affichage du nom du fournisseur le plus intéressant</span></code>
        </div>
    </div>
    <h2>Résultat:</h2>
    <ul>
        <li>Type : <?= $type ?></li>
        <li>Nombre de pneus : <?= $nbPneus ?></li>
        <li>Prix pneuf : <?= $pneufPrice ?></li>
        <li>Prix rouesCool : <?= $rouesCoolPrice ?></li>
        <li>Dans ces conditions, le fournisseur le moins cher est :
            <?php
            if ($pneufPrice < $rouesCoolPrice) {
                echo 'pneuf';
            } else {
                echo 'rouesCool';
            } ?>
        </li>
    </ul>
</body>

</html>