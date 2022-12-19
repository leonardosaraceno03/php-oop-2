<?php
include_once __DIR__ . "/prodotto.php";
class giocattoli extends prodotto
{

    public $caratteristiche;
    public $dimensioni;

    public function __construct(
        string $nome,
        float $prezzo,
        category $category,
        string $caratteristiche,
        string $dimensioni

    ) {
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
        parent::__construct($nome, $prezzo, $category);
    }
}
