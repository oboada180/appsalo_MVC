<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

//buscar ultima 
function esUltimo(string $actual, string $proximo) : bool {

    if($actual !== $proximo) {
        return true;
    }
    return false;
}

//funcion para revisar autenticacion
function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /public/');
    }
}

function isAdmin():void {
    if(!isset($_SESSION['admin'])) {
        header('Location: /public/');
    }
}