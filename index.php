<?php

include_once 'classes/Produits.php';
include_once 'classes/Livre.php';
include_once 'classes/Ebook.php';
include_once 'db.php';
include_once 'ProduitFactory.php';



echo $ebook->getNom() . "<p>";
echo $ebook->getFraisDePort() . "<p>";
echo $ebook->calculerPrixTTC() . "<p>";
echo $ebook->getprix_ht() . "<p>";
echo $ebook->gettype() . "<p>";

echo $livre->getNom() . "<p>";
echo $livre->getprix_ht() . "<p>";
echo $livre->getFraisDePort() . "<p>";
echo $livre->calculerPrixTTC() . "<p>";
echo $livre->gettype() . "<p>";



$pdo = Database::getConnexion();
$stmt = $pdo->query("SELECT nom, prix_ht, type FROM produit");
$lignes = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($lignes as $ligne) {
    $produit = $produitFactory->creeProduit($ligne);
    echo $produit->gettype() . "<br>";
    echo $produit->getNom() . "<br>" . "<p>";
}




// PROGRAMME PRINCIPAL :
//     connexion ← Database::getConnexion()
//     lignes    ← exécuter "SELECT * FROM produit"

//     total ← 0
//     POUR CHAQUE ligne DANS lignes :
//         produit ← creerProduit(ligne)       // étape 5
//         ajouterAuPanier(produit)            // polymorphisme
//         total ← total + prixTTC + fraisDePort
//     FIN POUR

//     afficher "TOTAL : [total] €"










?>




