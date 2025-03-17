<?php
use Dompdf\Dompdf;
use Dompdf\Options;



require_once "database.php";
$sql="SELECT * FROM `spacemember`";
$quety=$db->query($sql);
$users=$query->fetchAll();

require_once "pdf-content.php";





require_once "includes/dompdf-3.1.0/dompdf/autoload.inc.php";
$options=new Options();
$options->set('defaultFont', 'Courier');
$dompdf=new Dompdf();

$dompdf->loadHtml('brouete');
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream()






?>