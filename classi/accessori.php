<?php
include_once __DIR__ . "/prodotto.php";
class accessori extends prodotto
{
    public $materiale;
    public $dimensioni;

    public function __construct(

        string $nome,
        float $prezzo,
        category $category,
        string $materiale,
        string $dimensioni
    ) {
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
        parent::__construct($nome, $prezzo, $category);
    }
}
