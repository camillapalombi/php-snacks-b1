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



    <!-- SNACK 2 -->
        <!-- Passare come parametri GET name, mail e age e verificare
         (cercando i metodi che non conosciamo nella documentazione)
          che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola
           e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
        <form>
        <label for=""> INSERISCI QUI I TUOI DATI: </label>
        <input type="text" name="userName" placeholder="Inserisci nome">
        <input type="text" name="userEmail" id="" placeholder="Inserisci email">
        <input type="text" name="userAge" id="" placeholder="Inserisci età">
        <button>ACCEDI</button>
        </form>

        <?php

        $name = $_GET['userName'];
        $email = $_GET['userEmail'];
        $age = $_GET['userAge'];
        
        /*
        if (strlen($name) > 3) {
            echo 'ACCESSO RIUSCITO';
        } else {
            echo 'ACCESSO NEGATO';
        }

        if (strpos($email, '@') !== false) {
            echo 'ACCESSO RIUSCITO';
        } else {
            echo 'ACCESSO NEGATO';
        }

        if (is_numeric($age)) {
            echo 'ACCESSO RIUSCITO';
        } else {
            echo 'ACCESSO NEGATO';
        }*/

        if (strlen($name) > 3 && strpos($email, '@') !== false && is_numeric($age)) {
            echo 'ACCESSO RIUSCITO';
        } else {
            echo 'ACCESSO NEGATO';
        }

        ?>
</body>
</html>