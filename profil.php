<?php
session_start();
include "includes/header.php";
include "includes/navbar.php";

?>


<h1>profil de <?= $_SESSION["user"]["name"]?></h1>

<p>pseudo :<?= $_SESSION["user"]["email"]?></p>
