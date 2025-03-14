<?php
//les donnees  type files sont enrefistrer dans la superglobale file id $file['name]
//toujours savoir que lorsque il ya deja un type file dans le projet, ajouter l'attrbut miltipaart/form-data
echo "<pre>";
var_dump($_FILES);
echo "</pre>";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload files</title>
</head>

<body>
    <h1>Ajout d'un fichier</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="">
            <label for="file">Enter un fichier</label>
            <input type="file" name="file" id="file">
        </div>
        <input type="submit" value="Envoyer">










    </form>
</body>

</html>