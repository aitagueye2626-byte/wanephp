<?php
$products = [
    0 => ['ref' => 'ref1', 'libele' => 'lib1', 'prix' => 2000, 'quantite' => 12],
    1 => ['ref' => 'ref2', 'libele' => 'lib2', 'prix' => 500, 'quantite' => 2],
];

$productsArchived = [];

function genererReference(array $productsList): string {
    $taille = count($productsList) + 1;
    if ($taille <= 9) {
        $ref = "REF00";
    } elseif ($taille <= 99) {
        $ref = "REF0";
    } else {
        $ref = "REF";
    }
    return $ref . $taille;
}


function getProductByLibele(array $productsList, string $value): int {
    foreach ($productsList as $index => $product) {
        if ($product["libele"] === trim($value)) {
            return $index;
        }
    }
    return -1;
}

function supprimerProduit(int $index, array &$productsList): array {
    return array_splice($productsList, $index, 1)[0];
}