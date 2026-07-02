<?php
require_once __DIR__ . "/utils/error.php";
require_once __DIR__ . "/utils/validator.php";
require_once __DIR__ . "/utils/view.utils.php";

require_once __DIR__ . "/model/product.model.php";
require_once __DIR__ . "/model/client.model.php";

require_once __DIR__ . "/view/product.view.php";
require_once __DIR__ . "/view/client.view.php";

require_once __DIR__ . "/controller/product.controller.php";
require_once __DIR__ . "/controller/client.controller.php";

do {
    echo "\n====================================\n";
    echo "          MENU PRINCIPAL            \n";
    echo "====================================\n";
    echo "--- INCREMENT 1 (PRODUITS) ---\n";
    echo "1. Enregistrer un produit\n";
    echo "2. Archiver un produit\n";
    echo "3. Lister les produits non archivés\n";
    echo "\n--- INCREMENT 2 (CLIENTS) ---\n";
    echo "4. Enregistrer un client\n";
    echo "5. Lister les clients qui n'ont pas de commande\n";
    echo "\n0. Quitter l'application\n";
    echo "====================================\n";
    
    $choix = saisie("Votre choix : ");

    switch (trim($choix)) {
        case "1":
            ajouterProduitController(); 
            break;
        case "2":
            archiverProduitController(); 
            break;
        case "3":
            listerProduits($products); 
            break;

        case "4":
            ajouterClientController(); 
            break;
        case "5":
            listerClientsSansCommandeController(); 
            break;

        case "0":
            echo "\nFermeture de l'application. Au revoir !\n";
            break;
        default:
            echo "\n[Erreur] Choix invalide. Veuillez entrer un chiffre entre 0 et 5.\n";
    }

} while (trim($choix) !== "0");