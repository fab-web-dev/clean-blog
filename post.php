<?php 
//var_dump($_GET);
//exit;
//die($_GET['article']);
//echo($_GET['article']);

// Si la variable $_GET["article"] n'est pas paramètrer, die interrompte le processus et affiche une page avec le text "Manque paramètre"
if (!isset($_GET["article"])) {
    die("Manque paramètre !");
}
// charge le fichier post1.model.php
include("model/post1.model.php"); 


$bg = $data['post_img_url'];
$layout_title = $data["post_title"];
$header_title = substr($data["post_title"], 0, TRONCATURE_HEADER) . '...';
$header_subtitle = '...' . substr($data["post_title"], TRONCATURE_HEADER);

include("view/post.view.php"); 




