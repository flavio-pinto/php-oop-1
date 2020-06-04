<?php
class Film {
    public $titolo;
    public $genere; 
    public $regista;
    public $anno;
    public $incassi_milioni_dollari;

    //Constructor
    public function __construct($_titolo, $_genere, $_regista, $_anno, $_incassi_milioni_dollari) {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->incassi_milioni_dollari = $_incassi_milioni_dollari;
    }
    //Methods

    //Funzione print
    public function print() {
        echo "Titolo: {$this->titolo}<br>";
        echo "Genere: {$this->genere}<br>";
        echo "Regista: {$this->regista}<br>";
        echo "Anno: {$this->anno}<br>";
        echo "Incassi: {$this->incassi_milioni_dollari}<br>";
        echo "<br>";
    }

    //Convertire incassi dollari in euro
    public function dollarsToEuro($incassi_milioni_dollari, $tasso_cambio) {
        $incassi_milioni_euro = number_format($incassi_milioni_dollari, 2) * $tasso_cambio;
        return $incassi_milioni_euro;
    }
}

//Istanza film "Lost in Translation"
$film1 = new Film('Lost in Translation', 'drammatico', 'Sofia Coppola', '2003', '120');

//Istanza film "Pulp Fiction"
$film2 = new Film('Pulp Fiction', 'gangster', 'Quentin Tarantino', '1994', '214');

//Stampa a schermo info films
var_dump($film1);
var_dump($film2);

$film1->print();
$film2->print();

//Stampa a schermo incassi in Euro
echo "<hr>";
echo "Incassi in euro: <br>";
echo "Incassi in Euro di $film1->titolo: € {$film1->dollarsToEuro($film1->incassi_milioni_dollari, 0.88)}mln<br>";
echo "Incassi in Euro di $film2->titolo: € {$film2->dollarsToEuro($film2->incassi_milioni_dollari, 0.88)}mln";