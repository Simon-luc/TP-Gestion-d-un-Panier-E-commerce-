<?php 
include_once 'Produits.php';

class Ebook extends Produit{

// ajout du type dans constru dou le rapel
public function __construct(string $nom, int $prix_ht){
        $this->nom = $nom;
        $this->prix_ht = $prix_ht;
        $this->type = "Ebook";
    }
    
    public function calculerPrixTTC(): float
    {
        return $this->prix_ht * 1.020;
    }
}

$ebook = new Ebook("Harry Potter", 20);

?>