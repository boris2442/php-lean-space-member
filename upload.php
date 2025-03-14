<?php

//les donnees  type files sont enrefistrer dans la superglobale file id $file['name]
//toujours savoir que lorsque il ya deja un type file dans le projet, ajouter l'attrbut miltipaart/form-data
// echo "<pre>";
// var_dump($_FILES);
// echo "</pre>";

//que de mettre plusieurs champs pour les fichiers, nous pouvons mettre l'attriblt multiple 

//nous avons aussi l'attribut accepts 
?>

<?php
if (
    isset($_FILES["file"])
    && $_FILES["file"]["error"] === 0
) {
    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";
    //l'image a ete bparfaitement ete recu
    // var_dump($_FILES);

    //controles des verification 
    //verifierl'extension du fichier
    //verifier la taille de l'image


    //verifier toujours l'extension et le type mail;

    $allowed = [
        'png' => 'image/png',
        'jpe' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'pdf' => 'application/pdf',


    ]; 
    $filename = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $filesize = $_FILES['file']['size'];
    //ici, nous avons mit l'extension en miniscule
    $extension =strtolower(pathinfo($filename,  PATHINFO_EXTENSION));

    //verifie l'absence de l'extension dans les cles de $allowed 
    if (!array_key_exists($extension, $allowed) || !in_array($filetype, $allowed)) {
        //soit l'extension soit le type est incorect ou les deux
        die("l'extension du fichier n'est pas autorisee");
        die("formmat de fichier incorrect");
    }

    //ici, le fichier est correct.
    //lmitons la taille du fichier a 1m0
    if($filesize>1024*1024){
        die("le fichier est trop gros");
    }

    //on genere un nom unique 
    $newname=md5(uniqid());
    //generer  le chemin d'accees complet a mon fichier
    $newfilename= __DIR__."/uploads/$newname.$extension";

    if(!move_uploaded_file($_FILES['file'],$newfilename)){
        die("L'upload a echoué");
    }

    //si je veux proteger contre les ecritures
    chmod($newfilename,0644);
}


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
            <input type="file" name="file[]" id="file" accept="">
        </div>
        <!-- <div class="">
            <label for="image">Enter une image</label>
            <input type="file" name="image" id="image">
        </div> -->
        <input type="submit" value="Envoyer">

    </form>
</body>

</html>