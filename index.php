<?php

require_once __DIR__ . "/utils/view.utils.php";
require_once __DIR__ . "/utils/error.php";
require_once __DIR__ . "/utils/validator.php";

require_once __DIR__ . "/model/product.model.php";
require_once __DIR__ . "/view/product.view.php";
require_once __DIR__ . "/controller/product.controller.php";

do {
    echo "\n=== MENU GESTION COMMERCIALE ===\n";
    echo "1. Enregistrer un produit\n";
    echo "2. Lister les produits actifs\n";
    echo "3. Archiver un produit\n";
    echo "4. Lister les produits archivés\n";
    echo "0. Quitter\n";
    echo "================================\n";
    
    $choix = saisie("Votre choix : ");

    switch ($choix) {
        case '1':
            ajouterProduitController();
            break;
        case '2':
            listerProduitsActifsController();
            break;
        case '3':
            archiverProduitController();
            break;
        case '4':
            listerProduitsArchivesController();
            break;
        case '0':
            echo "\nAu revoir !\n";
            break;
        default:
            echo "\n[Erreur] Choix invalide. Veuillez réessayer.\n";
            break;
    }

} while ($choix !== '0');