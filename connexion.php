<?php
if (!empty($_POST)) {
    if (
        isset($_POST['email'], $_POST['password'])
        &&
        (
            !empty($_POST['email']) && !empty($_POST['password'])
        )
    ) {










        
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