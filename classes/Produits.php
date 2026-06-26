<?php

abstract class Produit{
    protected string $nom;
    protected int $prix_ht;
    // ajout type
    protected string $type;


   public function __construct(string $nom, int $prix_ht){
        $this->nom = $nom;
        $this->prix_ht = $prix_ht;
        
    }
    
    public function getNom(): string{
       return  $this->nom;
    }
    public function getprix_ht() : int {
       return $this->prix_ht;
    }

    abstract public function calculerPrixTTC() :float;

    public function getFraisDePort(){
        return 0;
    }

    public function gettype() :string{
        return $this->type;
    }

}


?>