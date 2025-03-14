<?php
if (!empty($_POST)) {
    if (
        isset($_POST['name'], $_POST['email'], $_POST['password'])
        &&
        (
            !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])
        )
    ) {
        $name = htmlspecialchars($_POST['name']);
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "adresse mail incorrect!";
        }
        $email = $_POST['email'];

        //hachage du mot de passe
        $pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);

        require_once "database.php";
        $sql = "INSERT INTO `spacemember` (`name`, `email`, `pass`) VALUES(:name, :email, '$pass')";

        $requete = $db->prepare($sql);
        $requete->bindValue(":name", $name, PDO::PARAM_STR);
        $requete->bindValue(":email", $email, PDO::PARAM_STR);
        $requete->execute();
        echo "etudiant inserer a la database avec succes";

        ////////ici, l'on connectera notre utilisateur









    }
}





?>


<?php
include_once "includes/header.php";
include_once "includes/navbar.php";

?>
<p>Contenu de la page</p>
<h1>inscription</h1>

<form action="" method="post">
    <div>
        <label for="name">Enter your name</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="email">Enter your email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">Enter your password</label>
        <input type="password" id="password" name="password">
    </div>

    <div class="">
        <input type="submit" value="S'inscrire">
    </div>


</form>
<?php

include_once "includes/footer.php";








?>