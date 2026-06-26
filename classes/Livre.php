<?php

include_once 'Produits.php';

class Livre extends Produit{
    // Ajout type 
public function __construct(string $nom, int $prix_ht){
        $this->nom = $nom;
        $this->prix_ht = $prix_ht;
        $this->type = "Livre";
    }    


    public function calculerPrixTTC(): float
    {
        return $this->prix_ht * 1.055;
    }

    function getFraisDePort(){
        return 2;
    }
}

$livre = new Livre("Harry Potter", 20);


?>