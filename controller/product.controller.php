<?php

function ajouterProduitController(): void {
    global $products; 

    do {
        $errors = [];
        
        $libelle = formSaisieProduit("libellé");
        required($libelle, $errors, "Le libellé est obligatoire.");
        unique($products, $libelle, $errors, "Ce libellé existe déjà.");
        
        $prix = formSaisieProduit("prix");
        isPositiveNumeric($prix, $errors, "Le prix doit être un nombre strictement positif.");
        
        $quantite = formSaisieProduit("quantité");
        isPositiveNumeric($quantite, $errors, "La quantité doit être un nombre strictement positif.");

        if (!empty($errors)) {
            displayErrors($errors);
        }

    } while (!empty($errors));

    $newProduct = [
        "ref" => genererReference($products),
        "libele" => trim($libelle),
        "prix" => (float)$prix,
        "quantite" => (int)$quantite
    ];

    $products[] = $newProduct;
    echo "\n[Succès] Produit enregistré avec succès !\n";
}


 * Feat 2 : Archiver un produit par son libellé
 */
function archiverProduitController(): void {
    global $products, $productsArchived;

    $libelle = formSaisieProduit("libellé du produit à archiver");
    $index = getProductByLibele($products, $libelle);

    if ($index !== -1) {
        $produitExtrait = supprimerProduit($index, $products);
        $productsArchived[] = $produitExtrait;
        echo "\n[Succès] Le produit '{$libelle}' a été archivé.\n";
    } else {
        echo "\n[Erreur] Produit non trouvé.\n";
    }
}

function listerProduitsActifsController(): void {
    global $products;
    listerProduits($products, "Produits Actifs");
}

function listerProduitsArchivesController(): void {
    global $productsArchived;
    listerProduits($productsArchived, "Produits Archivés");
}