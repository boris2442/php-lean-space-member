<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $chaine = "ceci est un caractere";
    //afficher un caractere de la chaine
    echo $chaine[6];


    ///modifier un caractere de la chaine
    $chaine[0] = "f";
    echo $chaine;

    ///extraire ou acceder a une partie de la chaine
    echo substr($chaine, 0, 4);
    //commence a zero et donne moi 4 caracteres  . Savoir aussi que i crema est considerer comme deus lettres en php


    echo substr($chaine, -10);
    //donne moi les 10 dernieres lettres


    //remplacer une partie de la chaine

    $chaine = str_replace('ceci', 'cela', $chaine);

    //irreplace ne prend pas en consideration les donnees sensible a la casse
    $chaine = str_ireplace('chaine', 'cela', $chaine);

    //verifier si une chaine de caractere contient quelque chose ou pas

    var_dump(str_contains($chaine, 'une'));

    var_dump(str_starts_with($chaine, 'ce'));

    //permet de verifier si une chaine se termine par un mot
    var_dump(str_ends_with($chaine, 'ere'));


    //trim suprime les espaces entres les caracteres






    ?>
</body>

</html>