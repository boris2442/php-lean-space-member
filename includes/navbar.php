
<?php 
// session_start();
?>
<nav>
    <ul>
        <li>Accueil</li>
        <li>services</li>
        <li>contact</li>

        <?php if (!isset($_SESSION["user"])) { ?>
            <li><a href="connexion.php">connexion</a></li>
            <li><a href="inscription.php">Inscription</a></li>

        <?php }else{ ?>
      
      <li>bonjour <?php $_SESSION['user']['name'] ?></li>
      


<li><a href="deconnexion.php">Deconnexion</a></li>
<?php  }?>
       

          
         
    </ul>

</nav>