<?php 
// Home Controller

// Permet d'inclure le fichier home.model.php et de l'afficher dans index.php
include("model/home.model.php");

// Permet de produire un titre dans l'en-tête de la page web
$layout_title = 'Titre = ' . $header_title;

// Permet d'inclure le fichier home.view.php et de l'afficher dans index.php
include("view/home.view.php");
        
        
