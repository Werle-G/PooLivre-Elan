<?php

class Livre{
    public string $title;
    public int $nbPage;
    public int $publicationYear;
    public float $price;
    public Auteur $auteur;

    public function __construct(string $title, int $nbPage,int $publicationYear, float $price, Auteur $auteur){
        $this->title = $title;
        $this->nbPage = $nbPage;
        $this->publicationYear = $publicationYear;
        $this->price = $price;
        $this->auteur = $auteur;
        $auteur->ajouterLivre($this);
    }
    //----------------getters-------------
    public function getTitle(){
        return $this->title;
    }
    public function getNbPage(){
        return $this->nbPage;
    }
    public function getPublicationYear(){
        return $this->publicationYear;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getAuteur(){
        return $this->auteur;
    }

    //-------------Setters--------------
    public function setTitle($title){
        $this->title = $title;
    }
    public function setNbPage($nbPage){
        $this->nbPage = $nbPage;
    }
    public function setPublicationYear($publicationYear){
        $this->publicationYear = $publicationYear;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }

    public function __toString() {
        $formatedPrice = number_format($this->price,2,".","");
        return "{$this->title} ({$this->publicationYear}) {$this->nbPage} pages / $formatedPrice €";
    }

}


?>