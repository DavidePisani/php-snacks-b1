<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

    $matchas= [
        [
            'homeTeam'=> 'Brindisi',
            'guestTeam'=> 'Milano',
            'score'=>[
                'home'=> 150,
                'guest'=>100,
            ],
        ],

        [
            'homeTeam'=> 'Trieste',
            'guestTeam'=> 'Roma',
            'score'=>[
                'home'=> 90,
                'guest'=>93,
            ],
        ],

        [
            'homeTeam'=> 'Venezia',
            'guestTeam'=> 'Rimini',
            'score'=>[
                'home'=> 140,
                'guest'=>160,
            ],
        ],
    ];

    // stampo in pagina

    for($i = 0; $i < count($matchas); $i++){
        $thisSquad = $matchas[$i];
        echo $thisSquad['homeTeam'] . '-' . $thisSquad['guestTeam'] . ' | ' . $thisSquad['score']['home'] . '-'.$thisSquad['score']['guest'].  '<br>';
    }

?>