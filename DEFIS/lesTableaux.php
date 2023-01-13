<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>DEFIS - Les tableaux PHP</title>
</head>

<body>
    <?php

    $student1 = [
        'fullName' => 'Hugo',
        'marks' => [
            [
                'name' => 'mathématiques',
                'values' => [18, 12, 14, 8, 16]
            ],
            [
                'name' => 'physique',
                'values' => [11, 9, 7, 14, 18]
            ],
        ]
    ];
    $student2 = [
        'fullName' => 'Simone',
        'marks' => [
            [
                'name' => 'informatique',
                'values' => [12, 11, 12, 10, 17]
            ],
            [
                'name' => 'chimie',
                'values' => [12, 8, 18, 14, 11]
            ],
        ]
    ];
    $result1 = [
        [
            'name' => $student1['marks'][0]['name'],
            'average' => (array_sum($student1['marks'][0]['values']) / count($student1['marks'][0]['values']))
        ],
        [
            'name' => $student1['marks'][1]['name'],
            'average' => (array_sum($student1['marks'][1]['values']) / count($student1['marks'][1]['values']))
        ],
    ];
    $result2 = [
        [
            'name' => $student2['marks'][0]['name'],
            'average' => (array_sum($student2['marks'][0]['values']) / count($student2['marks'][0]['values']))
        ],
        [
            'name' => $student2['marks'][1]['name'],
            'average' => (array_sum($student2['marks'][1]['values']) / count($student2['marks'][1]['values']))
        ],
    ];

    ?>
    <a href="../index.php">INDEX</a>
    <p>Soit deux étudiants Hugo et Simone, représentés par les tableaux ci-après :</p>
    <div style="display: flex; justify-content: center" class="block">
        <code style="border: 1px solid black; padding: 12px 24px; margin: 0 12px">
            $student1 = [<br />
            'fullName' => 'Hugo',<br />
            'marks' => [<br />
            [<br />
            'name' => 'mathématiques',<br />
            'values' => [18, 12, 14, 8, 16]<br />
            ],<br />
            [<br />
            'name' => 'physique',<br />
            'values' => [11, 9, 7, 14, 18]<br />
            ],<br />
            ]<br />
            ];
        </code>
        <code style=" border: 1px solid black; padding: 12px 24px; margin: 0 12px">
            $student2 = [<br />
            'fullName' => 'Simone',<br />
            'marks' => [<br />
            [<br />
            'name' => 'informatique',<br />
            'values' => [12, 11, 12, 10, 17]<br />
            ],<br />
            [<br />
            'name' => 'chimie',<br />
            'values' => [12, 8, 18, 14, 11]<br />
            ],<br />
            ]<br />
            ];
        </code>
    </div>
    <p>
        Réalisez un programme qui :</p>
    <ul>
        <li>
            instancie student1 et student2,
        </li>
        <li>
            crée un nouveau tableau multidimensionnel pour chaque étudiant, respectivement $result1 et $result2 qui contiennent pour chacun la moyenne de chacune des matières suivies.
        </li>
    </ul>
    <p>
        La dernière instruction du programme sera var_dump($result1, $result2) et elle renverra le résultat ci-après :
    </p>
    <div class="block" style="display: flex; justify-content: center">
        <div style="border: 1px solid black; width: 30%; padding: 12px 24px; margin: 0 12px">
            <code>
                array(2) {<br />
                [0]=><br />
                array(2) {<br />
                ["name"]=><br />
                string(14) "mathématiques"<br />
                ["average"]=><br />
                float(13.6)<br />
                }<br />
                [1]=><br />
                array(2) {<br />
                ["name"]=><br />
                string(8) "physique"<br />
                ["average"]=><br />
                float(11.8)<br />
                }<br />
                }<br />
                array(2) {<br />
                [0]=><br />
                array(2) {<br />
                ["name"]=><br />
                string(12) "informatique"<br />
                ["average"]=><br />
                float(12.4)<br />
                }<br />
                [1]=><br />
                array(2) {<br />
                ["name"]=><br />
                string(6) "chimie"<br />
                ["average"]=><br />
                float(12.6)<br />
                }<br />
                }
            </code>
        </div>
    </div>
    <h2>Résultat:</h2>
    <p><?php var_dump($result1); ?></p>
    <p><?php var_dump($result2); ?></p>
</body>

</html>