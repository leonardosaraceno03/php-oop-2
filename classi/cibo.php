<?php
include_once __DIR__ . "/prodotto.php";
class cibo extends prodotto
{
    public $peso_netto;
    public $ingredienti;

    public function __construct(
        string $nome,
        float $prezzo,
        category $category,
        string $peso_netto,
        string $ingredienti
    ) {
        $this->peso_netto = $peso_netto;
        $this->ingredienti = $ingredienti;
        parent::__construct($nome, $prezzo, $category);
    }
}
