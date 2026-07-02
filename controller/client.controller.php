<?php

function ajouterClientController(): void {
    global $clients; 

    do {
        $errors = [];
        
        $nom = formSaisieClient("nom et prénom");
        required($nom, $errors, "Le nom est obligatoire", "nom");

        $telephone = formSaisieClient("téléphone");
        required($telephone, $errors, "Le téléphone est obligatoire", "tel");
        unique($clients, $telephone, $errors, "Le téléphone existe déjà", "tel");

        $address = formSaisieClient("adresse");

        if (!empty($errors)) {
            displayErrors($errors);
        }

    } while (count($errors) != 0); 

    $newClient = [
        'nomPrenom' => trim($nom),
        'tel' => trim($telephone),
        'address' => trim($address)
    ];

    $clients[] = $newClient;
    echo "\n[Succès] Client enregistré avec succès !\n";
}