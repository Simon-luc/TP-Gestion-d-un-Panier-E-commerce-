<?php
include_once 'classes/Produits.php';


class ProduitFactory{
   
public function creeProduit(array $ligne): Produit {
return match ($ligne["type"]){
"livre" => new Livre ($ligne["nom"], $ligne["prix_ht"]),
"ebook" => new Ebook ($ligne["nom"], $ligne["prix_ht"]),
   default => throw new Exception ("type inconnu"),
};
}
}

$produitFactory= new ProduitFactory();

// pour mon test
// $ligne* =[
//    "type" => "livre",
//    "nom" => "Harry Potter",
//    "prix_ht" => 20
// ];
// $produitFactory= new ProduitFactory();
// $produit = $produitFactory -> creeProduit($ligne*);
?>

