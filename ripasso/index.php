<?php
// Oggetto
class Console{
    public $nome;
    public $produttore;

    function __construct($nome, $produttore)
    {
        $this -> nome = $nome;
        $this-> produttore = $produttore;
    }
}

$c1 = new Console("Playstation", "Sony");

var_dump($c1);

// Array

$citta = ["milano", "roma", "napoli"];
// print_r($citta);

// Array associativi
$persona = [
    "nome" => "Mario",
    "cognome" => "Rossi",
    "eta" => 30
];

// echo $persona["nome"];
foreach($persona as $chiave => $valore){
    echo $chiave . ": " . $valore . "<br>";
}

//Array multidimensionale
$matrice = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

// echo $matrice[0][2];

for($i = 0; $i < count($matrice); $i++){
    for($j = 0; $j < count($matrice[$i]); $j++){
        echo $matrice[$i][$j] . " ";
    }
    echo "<br>";
}

// ordinare un array sort() rsort(): sort -> oridne crescente, rsort -> ordine decrescente
// ordinare un array associativo per chiave ksort() krsort()
// ordinare un array associativo per valore asort() arsort()
/* array_push() -> aggiunge un elemento alla fine di un array
 * array_pop() -> rimuove l'ultimo elemento di un array
 * array_unshift() -> aggiunge un elemento all'inizio di un array
 * array_shift() -> rimuove l'elemento all'inizio di un array
*/
?>