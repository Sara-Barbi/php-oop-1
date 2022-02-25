<?php
class Movie{
    private $titolo;
    private $trama;
    private $genere;
    public $anno ="non Disponibile";
    private $attori="non Disponibili";    //attori è private, perciò dovrò fare prima un set e poi un get . NON posso fare tutto dentro get perche non funziona.
    private $lingua;

    public function __construct($_titolo,$_trama,$_genere){
        $this->titolo = $_titolo;      //come mai titolo è senza $?? come fa a capire che è il titolo il valore che le passo
        $this->trama = $_trama;
        $this->genere = $_genere;
    }

    public function getFilm(){
        echo "<ul class='list-group list-group-flush p-4 col-4 border'>
                <li class='list-group-item'><h1>".$this->titolo."</h1></li>
                <li class='list-group-item'><span class='fw-bold'>Trama:</span>". $this->trama."</li>
                <li class='list-group-item'><span class='fw-bold'>Genere:</span>". $this->genere."</li>
                <li class='list-group-item'><span class='fw-bold'> Attori:</span>". $this->getAttori()."</li>
                <li class='list-group-item'><span class='fw-bold'>Anno:</span>". $this->anno."</li>
              </ul>";      
            }

    public function setAttori($_attori){
        $this->attori = $_attori;
    }

    public function getAttori(){
        return $this->attori;
    }
}