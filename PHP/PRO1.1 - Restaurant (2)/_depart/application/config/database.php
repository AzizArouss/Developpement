<?php

/*
 * Database configuration settings used by PDO.
 */

// on repère le serveur en fonction de la signature
$signature = stripos($_SERVER['SERVER_SIGNATURE'], 'win');
// si on a win dedans on est sur un pc
if ($signature !== false){
    $config['dsn']      = 'mysql:host=localhost;dbname=restaurant';
    $config['password'] = '';
    $config['user']     = 'root';
}else{ // les autres mais surtout Unbuntu en classe
    $config['dsn']      = 'mysql:host=localhost;dbname=restaurant';
    $config['password'] = '3wa';
    $config['user']     = 'root';
}
