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



        <!--SNACK 4 -->
        <!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
        <h2> 15 NUMERI RANDOM DA 1 A 100:</h2>
        <?php
            $arr_random_num = [];

            do {
                $numbers = rand(1, 20);
                if (in_array($numbers, $arr_random_num) == false) {
                    $arr_random_num[] = "$numbers";
                }
            } while (count($arr_random_num) < 15);

            echo "Numeri senza doppioni:\n";
            foreach($arr_random_num as $numbers){
                echo $numbers . "\n" . ', ';
            };
            
        ?>



        <!-- SNACK 5 -->
       <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
        Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
        <h2>TESTO ORIGINALE</h2>
        <?php

        $original_paragraph = "Nel mezzo del cammin di nostra vita
        mi ritrovai per una selva oscura,
        ché la diritta via era smarrita. Ahi quanto a dir qual era è cosa dura
        esta selva selvaggia e aspra e forte
        che nel pensier rinova la paura! Tant' è amara che poco è più morte;
        ma per trattar del ben ch'i' vi trovai,
        dirò de l'altre cose ch'i' v'ho scorte.Io non so ben ridir com' i' v'intrai,
        tant' era pien di sonno a quel punto
        che la verace via abbandonai.Ma poi ch'i' fui al piè d'un colle giunto,
        là dove terminava quella valle
        che m'avea di paura il cor compunto,guardai in alto e vidi le sue spalle
        vestite già de' raggi del pianeta
        che mena dritto altrui per ogne calle.Allor fu la paura un poco queta,
        che nel lago del cor m'era durata
        la notte ch'i' passai con tanta pieta.E come quei che con lena affannata,
        uscito fuor del pelago a la riva,
        si volge a l'acqua perigliosa e guata, così l'animo mio, ch'ancor fuggiva,
        si volse a retro a rimirar lo passo
        che non lasciò già mai persona viva.Poi ch'èi posato un poco il corpo lasso,
        ripresi via per la piaggia diserta,
        sì che 'l piè fermo sempre era 'l più basso.Ed ecco, quasi al cominciar de l'erta,
        una lonza leggiera e presta molto, che di pel macolato era coverta; e non mi si partia dinanzi al volto,
        anzi 'mpediva tanto il mio cammino,
        ch'i' fui per ritornar più volte vòlto.";

        echo $original_paragraph;

        $paragraph_text = str_replace('.', '<p></p>', $original_paragraph);
        ?>
        <h2>TESTO DIVISO IN PARAGRAFI</h2>
        <?php
        echo $paragraph_text;
        ?>

        
</body>
</html>