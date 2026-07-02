<?php
function required(string $value, array &$errors, string $errorRequired): void {
    if (empty(trim($value))) {
        $errors['required'] = $errorRequired;
    }
}

function unique(array $produits, string $value, array &$errors, string $errorUnique): void {
    foreach ($produits as $produit) {
        if ($produit["libele"] === trim($value)) {
            $errors['unique'] = $errorUnique;
            break;
        }
    }
}

function isPositiveNumeric(string $value, array &$errors, string $errorMsg): void {
    if (!is_numeric($value) || $value <= 0) {
        $errors['numeric'] = $errorMsg;
    }
}