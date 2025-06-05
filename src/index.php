<?php
require_once 'Produit.php';

$produit1 = new Produit("Ordinateur", 799.99, 1);
$produit2 = new Produit("Souris", 25.50, 2);
$produit3 = new Produit("Clavier", 45.00, 1);


$panier = [$produit1, $produit2, $produit3];

$total = 0.0;

echo "<h2>Contenu du panier :</h2>";
foreach ($panier as $produit) {
    $produit->afficherProduit();
    $total += $produit->getTotal();
}

echo "<h3>Total du panier : " . number_format($total, 2) . " €</h3>";
