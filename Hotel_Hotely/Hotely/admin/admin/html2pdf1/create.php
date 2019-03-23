<?php
function Create_PDF()
{
require('html2fpdf.php');
$pdf=new HTML2FPDF();
$pdf->AddPage();
$fp = fopen("scriptarticle-sample.html","r");
$strContent = fread($fp, filesize("scriptarticle-sample.html"));
fclose($fp);
$pdf->WriteHTML($strContent);
$pdf->Output("marksheet.pdf");
}
?>