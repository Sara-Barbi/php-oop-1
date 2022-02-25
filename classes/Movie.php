<?php
class Movie{
    private $titolo;
    private $trama;
    private $genere;
    public $anno ="non Disponibile";
    private $attori="non Disponibili";
    private $lingua;

    public function __construct($_titolo,$_trama,$_genere){
        $this->titolo = $_titolo;      //come mai titolo è senza $?? come fa a capire che è il titolo il valore che le passo
        $this->trama = $_trama;
        $this->genere = $_genere;
    }

    public function getFilm(){
        echo "<li><h1>".$this->titolo."</h1></li>
              <li>Trama:". $this->trama."</li>
              <li>Genere:". $this->genere."</li>
              <li> Attori:". $this->getAttori()."</li>
              <li>Anno:". $this->anno."</li>";
    }

    public function setAttori($_attori){
        $this->attori = $_attori;
    }

    public function getAttori(){
        return $this->attori;
    }
}