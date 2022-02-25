<?php
class Movie{
    private $titolo;
    private $trama;
    private $genere;
    private $anno;
    private $attori;
    private $lingua = "Italiano";

    public function __construct($_titolo,$_trama,$_genere){
        $this->titolo = $_titolo;
        $this->trama = $_trama;
        $this->genere = $_genere;
    }

    public function getFilm(){
        return $this->titolo. $this->trama. $this->genere. $this->anno. $this->attori. $this->lingua;
    }
}