<?php

function listerProduits(array $productsList, string $titre = "Liste des Produits"): void {
    echo "\n=== $titre ===\n";
    if (empty($productsList)) {
        echo "Aucun produit dans cette liste.\n";
        return;
    }
    foreach ($productsList as $product) {
        echo "Référence : {$product['ref']} | Libellé : {$product['libele']} | Prix : {$product['prix']} FCFA | Quantité : {$product['quantite']}\n";
    }
    echo "=====================\n";
}

function formSaisieProduit(string $label): string {
    return saisie("Entrez le $label : ");
}