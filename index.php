//$stringa = 'Ciao'; //un solo uguale, assegnazione

//const INTERO = 78; // senza dollaro,costanti IN MAIUSCOLO


//$testoNuovoDaScrivere = 'ciao'; //camelcase (usare per variabili)
//$testo_nuovo_da_compilare ='ciao'; //snake case (usare per nomi dei file)


//come non scrivere variabili
//$2ciao = 'lorenzo';
//$_ciao = 'lorenzo';
//$ci.ao = 'lorenzo';
//$ ciaociao = 'lorenzo';

//echo $stringa //stampa

//1 Predefiniti, scalari o primitivi
//2 composti o user defined

//$stringa = 'ciao'; //stringa
//$intero = 67890; //intero
//$float = 56.90; // float (punti, non virgola)
//$booleano = true; //vero o falso
//$null = null;


//$parte1 ='oggi fa caldo' . "\n"; // come andare a capo
//$parte2 ='speriamo che domani sia piu fresco';

//echo $parte1 . $parte2;

//dati complessi o user defined
//$scatola = []; //Definizione di array vuoto
//$scatola1 = ['ciao', 'sono', 'io'];
//$scatola2 = [8787, 92827];

//$scatola3 = ['sciojdis','ssx', 44, 34.09];

//array chiave valore o associativo
//$person1 = [
//'name'=> 'Lorenzo',
//'surname' => 'Di Raco'
//];

//echo $person1['surname'];

//mixed
//$mixed = [
//'name' => 'Lorenzo',
//89 =>'Gama',
//34

//];
//echo $mixed;



// echo stampa solo numeri primitivi

//print r stampa tutto ma per debug

/// tipi di operatori
//1 matematico
//2 confronto
//3 logico

//1 echo $x + $y;
//echo $x - $y;
//echo $x * $y;
//echo $x / $y;
//echo $x % $y;(modulo resto);

//echo $a == $b;//confronta il valore
//echo $a === $b;//confronta il valore e il tipo///



<?php
  $user = [
     'name' =>'Leysan'];
  echo $user ['name'];


$person1 = [
'name'=> 'Leysan',
'surname' => 'Nasretdinova'
];

echo $person1['surname'];

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = 'hai';
$text7 = 'bevuto';
$text8 = "tutto";

echo $text1, $text2, $text3, $text4, $text5, $text6, $text7, $text8;

<?php
// Creare una variabile di tipo Stringa chiamata $results che stampi sul terminale il testo (rispettando spazi e punteggiature) di questi due array.

// Ricordando l’accesso agli array con indici e chiavi visti a lezione, ricostruire questa frase:

// **Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita.**

// ATTENZIONE: Nell’array potreste trovare degli intrusi o non trovare alcune preposizioni. Approcciate il problema nel modo che ritenute più opportuno: nuove variabili, concatenamenti, apice singolo, doppio apice ecc..


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];

var_dump ($words2['elemento3'][1]);
$results =  ""; //<--- Tutto in questa variabile
echo $result;