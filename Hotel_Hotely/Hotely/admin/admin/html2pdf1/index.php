<?php
/* This code will generate PDF file from the HTML file.
 You can also create a PDF file by providing the URL,get content by Curl or file_get_contents function and pass the content to
 WriteHTML function as used in below code.
 Hope this all will help,for more information/help mail to 
 
 scriptarticle(at)gmail(dot)com
 http://www.scriptarticle.com
*/
error_reporting(0);
require('html2fpdf.php');
$pdf=new HTML2FPDF();
$pdf->AddPage();
$fp = fopen("receipt.php?id=201","r");
$strContent = fread($fp, filesize("receipt.php"));
fclose($fp);
$pdf->WriteHTML($strContent);
$pdf->Output("receipt.pdf");
echo "PDF file is generated successfully!";
?>