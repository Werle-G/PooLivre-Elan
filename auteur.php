<?php
class Auteur{
    public string $nom;
    public string $prenom;
    public DateTime $born;

    public DateTime $death;
    public array $livres;

    public function __construct(string $nom, string $prenom, $born, $death) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->born = new DateTime($born);
        $this->death = new DateTime($death);
    }
    //--------------Getters---------------
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getBorn(){
        return $this->born;
    }
    public function getDeath(){
        return $this->death;
    }

    //-------------Setters--------------
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setBorn($born){
        $this->born = $born;
    }
    public function setDeath($death){
        $this->death = $death;
    }
    public function __toString() {
        $age = $this->born->diff(new DateTime())->y;
        return "{$this->prenom} {$this->nom} || Age : $age";
    }

    public function ajouterLivre(Livre $livres) {
        $this->livres[] = $livres;
    }

    public function afficherBibliographie() {
        echo "Livres de $this <br>";
        foreach ($this->livres as $book) {
            echo "{$book->__toString()}<br>";
        }
        echo '<br>';
    }
}