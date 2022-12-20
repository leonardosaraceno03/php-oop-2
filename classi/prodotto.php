<?php
include_once __DIR__ . "/category.php";
class prodotto
{

    public $nome;
    public $prezzo;
    public $category;


    public function __construct(

        String $nome,
        float $prezzo,
        category $category


    ) {

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->category = $category;
    }
}
