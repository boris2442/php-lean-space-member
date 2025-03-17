<?php

use Dompdf\Dompdf;
use Dompdf\Options;



require_once "database.php";
$sql = "SELECT * FROM `spacemember`";
$query = $db->query($sql);
$users = $query->fetchAll();
// var_dump($users);

ob_start();
require_once "pdf-content.php";
$html=ob_get_contents();
// die($html);


ob_end_clean();





require_once "includes/dompdf-3.1.0/dompdf/autoload.inc.php";
$options = new Options();
$options->set('defaultFont', 'Courier');
$dompdf = new Dompdf($options);

// $dompdf->loadHtml('brouete');

 $dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream();
