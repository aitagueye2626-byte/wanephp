<?php

function formSaisieClient(string $messageAffiche): string {
    return saisie("Entrer votre $messageAffiche : ");
}

function listerClients(array $listeClients, string $titre = "Liste des Clients"): void {
    echo "\n=== $titre ===\n";
    if (empty($listeClients)) {
        echo "Aucun client trouvé.\n";
        return;
    }
    foreach ($listeClients as $client) {
        echo "Nom & Prénom : {$client['nomPrenom']} | Tél : {$client['tel']} | Adresse : {$client['address']}\n";
    }
    echo "=====================\n";
}
function afficherClientsSansCommande(array $clientsFiltres): void {
    echo "\n--------------------------------------------------\n";
    echo "      LISTE DES CLIENTS SANS COMMANDE             \n";
    echo "--------------------------------------------------\n";

    if (empty($clientsFiltres)) {
        echo "Aucun client n'est actuellement sans commande.\n";
        return;
    }

    foreach ($clientsFiltres as $client) {
        echo "Client : " . $client['nomPrenom'] . " | Tél : " . $client['tel'] . " | Adresse : " . $client['address'] . "\n";
    }
    echo "--------------------------------------------------\n";
}