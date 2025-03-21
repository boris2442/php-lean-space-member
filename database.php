
    <?php

    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'database');

    $dsn = "mysql:dbname=" . DBNAME . "; host=" . DBHOST;


    try {
        $db = new PDO($dsn, DBUSER, DBPASS);
        //envoyer les donnees en utf8
        $db->exec("SET NAMES utf8");
        echo "connexion a la database  reussie";
        
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    //on peut recuperer la liste des utilisateurs

    $sql="SELECT*FROM `users`";
    // $requete=$db->query($sql);
    //on recupere les donnees a l'aide de fetch ou de fetchAll
    // $user=$requete->fetchAll(PDO::FETCH_ASSOC);


    //ajouter un utilisateur
    // $sql="INSERT INTO `users` (`email`, `pass`, `roles`) VALUES('aubin@gmail.cm', 'azerty@1', 'dev')";

    // // $requete=$db->query($sql);

    // //modifier un utilisateur
    // $sql="UPDATE SET `password`='bro@pass' WHERE ID='2'";
    // $requete=$db->query($sql);


    // //supprimer les utilisateurs

    // $sql="DELETE FROM `users` WHERE `ID`>3";
    // $requete=$db->query($sql);


    // //savoir combien de ligne ont ete supprimer
    // echo $db

    ?>
</body>

</html>