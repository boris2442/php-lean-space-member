<?php

// mail("aubin@gmail.cm", "sujet du message", "contenu du message");
$to="aubin@gmail.com";
$subject="sujet du message";
$message="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates dolore consequatur ipsam optio minus nihil a, dolores quam! Ullam, a maxime adipisci amet nobis nulla delectus ipsa error itaque voluptates sapiente odit similique possimus, asperiores doloribus reprehenderit natus nam aperiam?";
// mail($to, $subjet, $message);

//l'envoie de mails a plus de 75 caracteres a un ptt problemes
//raisons pour aquelle nous devons utiliser cette methode
$message=wordwrap($message,70, "\r\n");

$headers=[
    "From"=>"aubinsimo@gmail.com",  //on envoi le message a ...
    "Reply-To"=>"aubinsimo@gmail.com", //quand on repond au message, a qui sa part 
    "Cc"=>"copie@gmail.com", //on envoi la cope du message aa ...


];
    
    
    mail($to, $subjet, $message, $headers);
    ?>
