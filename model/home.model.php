<?php

// Home model

// permet d'inclure la configuration de la base de donnée
include("config/config.inc.php");
// permet de faire le lien dans les fichiers php avec la base de donnée mysql
include("model/pdo.inc.php");

// permet d'executer une series de requettes SQL pour récupérer des données de la base de donnée en faisant une jointure entre deux tables blog_users et blog_categories
try {
    $query = "
    SELECT post_img_url, post_ID, post_date, LEFT(post_content, " . TRONCATURE . ") AS post_content, post_title, display_name, cat_descr 
    FROM blog_posts
    
    INNER JOIN blog_users
    ON post_author = ID
    
    INNER JOIN blog_categories
    ON post_category = cat_id
    
    ORDER BY post_date DESC";

    //die($query);

    $req = $pdo->query($query);

    $data = $req->fetchAll();

} // catch permet de récupérer les erreurs si les instructions de try ont une erreur
 catch(Exception $e) {
    die("Erreur MySQL : " . $e->getMessage());
}

// la variable $bg recupère une image, header_title recupère une chaine de caractère permetant d'afficher le titre h1 dans le header.view.php, de même que header_subtitle 
$bg = 'assets/img/home-bg.jpg';
$header_title = 'Blog de surf';
$header_subtitle = 'Le meilleur sport de glisse !';

/*
$title_art_1 = 'Planche de surf';
$subtitle_art_1 = 'Comment bien la choisir ?';
$author_art_1 = 'Philippe G.';
$date_art_1 = '17 Mars 2022';
*/