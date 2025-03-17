<?php
session_start();
var_dump($_SESSION);


$_SESSION['panier']=[
    "produits"=>[
        "brouette", "chaises", "dameuse"
    ]
];


?>