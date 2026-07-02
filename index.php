<?php

require_once __DIR__ . "/utils/error.php";
require_once __DIR__ . "/utils/validator.php";

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
    echo "1. Enregistrer un produit\n";
    echo "2. Lister les produits non archivés\n";
    echo "3. Archiver un produit\n";
    echo "4. Enregistrer un client\n";
    echo "5. Lister tous les clients\n";
    echo "0. Quitter l'application\n";
    echo "====================================\n";
    
    $choix = saisie("Votre choix : ");

    switch (trim($choix)) {
        case "1":
            saveProduct(); 
            break;
        case "2":
            listerProduits($products); 
            break;
        case "3":
            archiverProduit();
            break;
        case "4":
            ajouterClientController(); 
            break;
        case "5":
            listerClients($clients); 
            break;
        case "0":
            echo "\nFermeture de l'application. Au revoir !\n";
            break;
        default:
            echo "\n[Erreur] Choix invalide. Veuillez entrer un chiffre entre 0 et 5.\n";
    }

} while (trim($choix) !== "0");