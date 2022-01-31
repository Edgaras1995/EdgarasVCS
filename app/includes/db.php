<?php    
    define("DB_SERVER", "127.0.0.1");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "svetaine");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Atsiprasome, bet svetaine susidure su problema";
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }