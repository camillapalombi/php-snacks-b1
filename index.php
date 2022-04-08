<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks B1</title>
</head>
<body>
    <!-- SNACK 1 -->
    <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60 -->
    <ul>
    <?php
        $arr_partite_gg15 = [
            [
                'squadreSfidanti' => [
                    'casa' => 'OLIMPIA MILANO',
                    'ospite' => 'CANTU'
                ],
                'punti' => [
                    'casa' => '55',
                    'ospite' => '60'
                ]
            ],
            [
                'squadreSfidanti' => [
                    'casa' => 'UMANA VENEZIA',
                    'ospite' => 'BANCO DI SARDEGNA SASSARI'
                ],
                'punti' => [
                    'casa' => '45',
                    'ospite' => '65'
                ]
            ],
            [
                'squadreSfidanti' => [
                    'casa' => 'ALLIANZ PALLACANESTRO TRIESTE',
                    'ospite' => 'HAPPY CASA BRINDISI'
                ],
                'punti' => [
                    'casa' => '25',
                    'ospite' => '85'
                ]
            ]
        ];


            for ($i=0; $i < count($arr_partite_gg15); $i++) { ?>
                <li>
                    <span> <?= $arr_partite_gg15[$i]['squadreSfidanti']['casa'] ?> - </span> 
                    <span> <?= $arr_partite_gg15[$i]['squadreSfidanti']['ospite'] ?> | </span>
                    <span> <?= $arr_partite_gg15[$i]['punti']['casa'] ?> - </span> 
                    <span> <?= $arr_partite_gg15[$i]['punti']['ospite'] ?> </span>
                </li>
            <?php }
    ?>
    </ul> 
</body>
</html>