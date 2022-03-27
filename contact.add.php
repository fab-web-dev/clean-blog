<?php

// var_dump($_GET);

if (!isset($_POST["name"])) {
    die("Nom Obligatoire !");
}
if ($_POST["name"] == "") {
    die("Nom doit contenir une valeur");
}
if (strlen($_POST["name"]) > 25) {
    die("Nom doit etre inferieur a 26 caracteres");
}

include("./model/contact.add.model.php");
header("Location: index.php?notif=1");
