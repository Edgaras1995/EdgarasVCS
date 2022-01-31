<?php
//Jei klientas siuncia mums žinutę iš kontaktų formos
if(isset($_POST['kliento_zinute'])) {
    require_once 'db.php';
    $vardas = htmlspecialchars($_POST['vardas']);
    $elpastas = htmlspecialchars($_POST['elpastas']);
    $zinute = htmlspecialchars($_POST['zinute']);

    if(!empty($vardas) && !empty($elpastas) && !empty($zinute)) {
        if(filter_var($elpastas, FILTER_VALIDATE_EMAIL)) {
            mysqli_query($mysqli, "INSERT INTO klientu_zinutes(vardas, elpastas, zinute) VALUES('$vardas','$elpastas','$zinute')");
            header("Location: ../../index.php?aciu");
            exit();
        }
    }
}