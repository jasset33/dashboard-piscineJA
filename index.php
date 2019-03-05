<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$_assets="assets/";
session_start();

$name="Julien Asset";
$projectName="My project of the top";

$_url_deconnexion="index.php?p=deconnexion";

if(!empty($_SESSION)){
    $projectName="La Piscine";
    $PprojectNameShort="L-P";
    $name=$_SESSION['surname']." ".$_SESSION['name'];

        // isset = est-ce que la variable existe?
    if(!isset($_GET['p'])){
        // Traitement des données
        $pageTitle="Accueil";
        // HTML 
        include('view/dashboard.php');
    }
    elseif($_GET['p']=="users"){
        $pageTitle="Liste des utilisateurs";
        // Traitement des données
        //include('model/dashboard.php');
        // HTML 
        include('view/table.php');
    }
elseif($_GET['p']=="deconnexion"){
        unset($_SESSION);
        session_destroy();
        header('location: index.php');
}

    else {
        //header($_serveur["server_protocol"]." 404 NOT FOUND");
        echo "Cette page n'existe pas";
    }
}
else {
    // Traitement du formulaire de connexion
    include('model/login.php');
    // HTML 
    include('view/login.php');    
}