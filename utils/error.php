<?php

function displayErrors(array $errors): void {
    foreach ($errors as $error) {
        echo "$error \n";
    }
}