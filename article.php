<?php
//connexion a la base
require_once "./database.php";

if (!isset($_GET["$id"]) || !empty($_GET["id"])) {
    header("location:articles.php");
    exit;
}
$id = $_GET["id"];



$sql = "SELECT*FROM `articles` WHERE `id`=:id ";
$requete = $db->prepare($sql);
$requete->bindValue(":id", $id, PDO::PARAM_INT);
$requete->execute();
$article = $requette->fetch();

//o verifie si articles est vide
if (!$article) {
    http_response_code(404);
    echo "L'article inexistant";
    exit;
}




$titre = "Liste des articles";
include_once "includes/header.php";
include_once "includes/navbar.php";

?>
<p>listes des articles</p>



<section>

    <article>
        <p>ceci est le <?php echo $article["id"]   ?>e article</p>
        <h1> titre: <?php echo  $article["title"] ?></a></h1>
        <p>contenu:<?php echo $article["content"] ?></p>
        <p>publié le :<?php echo  $article['create_at'] ?> </p>
    </article>


</section>

<?php

include_once "includes/footer.php";


?>