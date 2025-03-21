<?php
session_start();
//connexion a la base
require_once "./database.php";

//cherchons les articles dans la base
$sql = "SELECT * FROM `articles` ORDER BY `create_at` DESC";
$requete = $db->query($sql);
$articles = $requete->fetchAll();



$titre = "Liste des articles";
include_once "includes/header.php";
include_once "includes/navbar.php";

?>
<p>listes des articles</p>



<section>
    <?php foreach ($articles as $article): ?>
        <article>
            <p>ceci est le <?php echo $article["id"]   ?>e article</p>
            <h1> <?php echo  $article["title"] ?> <a href="article.php?id=<?php $article["id"] ?>">titre:</a></h1>
            <p>contenu:<?php echo $article["content"] ?></p>
            <p>publié le :<?php echo  $article['create_at'] ?> </p>
        </article>
    <?php endforeach; ?>

</section>

<?php

include_once "includes/footer.php";


?>