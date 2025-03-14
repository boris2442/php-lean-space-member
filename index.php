 <?php
  session_start();
 $titre="page d'accueil";
    include_once "includes/header.php";
    include_once "includes/nav.php";
    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores atque mollitia dolor, amet, blanditiis, soluta necessitatibus consequuntur beatae omnis corporis architecto veritatis ratione laudantium libero? Expedita odio aliquam earum provident!</p>


    <?php

require_once "./database.php";
$username='aubin';
$password='azerty';
// $password="azerty' OR 1=1; --";
// $sql="SELECT * FROM `users` WHERE `username`='aubin' AND `password`= 'azerty'";
// $sql="SELECT * FROM `users` WHERE `username`='$username' AND `password`= '$password'";
// $sql="SELECT * FROM `users` WHERE `username`=? AND `password`= ? ";
$sql="SELECT * FROM `users` WHERE `username`=:username AND `password`=:password ";

$requete=$db->prepare($sql);
// on doit devoir injecter les valeurs

// $requete->bindValue(1, $username, PDO::PARAM_STR_CHAR);
// $requete->bindValue(1, $password, PDO::PARAM_STR_CHAR);

$requete->bindValue(":username", $username, PDO::PARAM_STR);
$requete->bindValue(":password", $password, PDO::PARAM_STR);

$requete->execute();
$user=$requete->fetchAll();

// $requete=$db->query($sql);
// $user=$requete->fetchAll();










    include_once "/includes/footer.php";


    ?>
   