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