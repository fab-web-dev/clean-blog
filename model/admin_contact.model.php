<?php

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query="
    SELECT * FROM blog_contacts
    ";
    $req = $pdo->query($query);

    $data = $req->fetchAll();

} catch (Exception $e) {
    die('Erreur requete: ' . $e->getMessage());
}

$bg = 'assets/img/home-bg.jpg';
$header_title = 'Fetch forms';
$header_subtitle = '';
