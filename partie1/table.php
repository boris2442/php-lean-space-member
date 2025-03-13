<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $table = ['hello', '15', true, 40];

    //ajouter un element a la fin d'u tableau
    array_push($table, 'fin', 50);

    //ajouter un element au debut du tableau
    array_unshift($table, 'debut');

    //suprimer un element a la fin du tableau

    array_pop($table);



    //supprimer  un element au debut du tableau
    array_shift($table);




    //pour diviser en plusieurs parties de deux variables

    $table2 = array_chunk($table, 2);












    ?>
</body>

</html>