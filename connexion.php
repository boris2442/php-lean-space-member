<?php
    session_start();
    if(isset($_SESSION['user'])){
        header("location:profil.php");
        exit;
     }
if (!empty($_POST)) {
    if (
        isset($_POST['email'], $_POST['password'])
        &&
        (
            !empty($_POST['email']) && !empty($_POST['password'])
        )
    ) {
        //verifier que c'est un email

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            die("ce n'est pas un email");
        }

        //verifier que l'emal existe dans notre database

        require_once "database.php";

        $sql = "SELECT* FROM `spacemember` WHERE `email`=:email";

        $requete = $db->prepare($sql);
        $requete->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
        $requete->execute();
        $user = $requete->fetch();

        if (!$user) {
            die("l'utilisateur et ou le mot de passe est incorect");
        }
        //ici, on a un user existant et peut donc verifier le password

        //on utilise le password verify

        if (!password_verify($_POST["password"], $user["pass"])) {
            die("l'utilisateur et ou le mot de passe est incorrect");
        }
        //ici l'utilisateur et le mot de passe sont correct
        //ici, l'on devra ouvrir la session et connecter l'utilisateur

        //on doit stocker dans $session les informations de l'utilisateur

        $_SESSION["user"]=[
            "id"=>$user["id"],
            "pseudo"=>$user["name"],
            "email"=>$user["email"]
        ];

        // var_dump($_SESSION);
        //l'urilisateur est connecte et on le redirige vers la page de profil

        header("location:profil.php");
    }
}





?>


<?php
include_once "includes/header.php";
include_once "includes/navbar.php";

?>
<!-- <p>Contenu de la page</p> -->
<h1>Connexion</h1>

<form action="" method="post">

    <div>
        <label for="email">Enter your email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">Enter your password</label>
        <input type="password" id="password" name="password">
    </div>

    <div class="">
        <input type="submit" value="Se connecter">
    </div>


</form>
<?php

include_once "includes/footer.php";








?>