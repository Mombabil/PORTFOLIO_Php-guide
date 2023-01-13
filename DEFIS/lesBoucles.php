<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>DEFIS - Les boucles PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <p class="block">Pour réviser les tables de multiplication, le professeur de mathématiques voudrait que chaque élève trouve une façon originale de les afficher. Vous avez donc eu l’idée de les afficher sur votre ordinateur, avec l’utilisation de php. Grâce à une boucle for.</p>
    <div style="display: flex; align-items: center; justify-content: center">
        <?php
        for ($table = 1; $table < 10; $table++) {
            echo '<div class="tables">';
            for ($mult = 1; $mult < 10; $mult++) {
                echo '<p style="margin: 0 4px; padding: 2px">' . $table . ' x ' . $mult . ' = ' . $table * $mult . '</p><br/>';
            }
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>