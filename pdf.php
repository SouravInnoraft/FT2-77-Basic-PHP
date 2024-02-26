<?php
require('./fpdf186/fpdf.php');
//creating an object of fpdf
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$fname = $_POST["First_Name"];
$lname = $_POST["Last_Name"];
$number = $_POST["phone_number"];
$email = $_POST["email"];
$subjects = $_POST["comment"];

$myArray = preg_split("/\r\n|\n|\r/", $subjects);
$tabledata = [[]];
for ($x = 0; $x < count($myArray); $x++) {
  $sub = explode("|", $myArray[$x]);
  $tdata = [$sub[0], $sub[1]];
  array_push($tabledata, $tdata);
}
$pdf->Cell(40, 10, 'User Data');
$pdf->Ln();
$pdf->Cell(40, 10, 'FirstName: ' . $fname);
$pdf->Ln();
$pdf->Cell(40, 10, 'LastName: ' . $lname);
$pdf->Ln();
$pdf->Cell(40, 10, 'Phone Number: ' . $number);
$pdf->Ln();
$pdf->Cell(40, 10, 'Email: ' . $email);
$pdf->Ln();
$header = array("subject", "Marks");
$data = $tabledata;
$width_cell = array(30, 30);
$pdf->SetFillColor(193, 229, 252);

for ($i = 0; $i < count($header); $i++) {
  $pdf->Cell($width_cell[$i], 10, $header[$i], 1, 0, 'C', true);
}
$pdf->Ln();
for ($i = 1; $i < count($data); $i++) {
  for ($j = 0; $j < 2; $j++) {
    $pdf->Cell($width_cell[$j], 10, $data[$i][$j], 1, 0, 'C', true);
  }
  $pdf->Ln();
}
$width = $pdf->GetPageWidth();
//store the pdf in local store
$pdf->Output('F', "pdfs/{$fname}.pdf");
//download the pdf
$pdf->Output('D', "{$fname}.pdf");
