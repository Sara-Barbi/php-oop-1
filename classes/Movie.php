<?php
class Movie{
    private $titolo;
    private $trama;
    private $genere;
    private $anno;
    private $attori;
    private $lingua = "Italiano";

    public function __construct($_titolo,$_trama,$_genere){
        $this->$_titolo = $titolo;
        $this->$_trama = $trama;
        $this->$_genere = $genere;
    }
}