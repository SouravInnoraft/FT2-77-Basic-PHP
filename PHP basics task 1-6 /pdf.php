<?php

require('./fpdf186/fpdf.php');

// Creating an object of fpdf.
$pdf = new FPDF();
// Adding a new page.
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$input_value = $_POST['comment'];
$input_data = explode("\n", $input_value);
for ($i = 0; $i < count($input_data); $i++) {
  // Trimming any whitespaces at the beginning and end of the string.
  $input_data[$i] = trim($input_data[$i]);
  echo "$input_data[$i]";

  // Cleaning up spaces in the string.
  $input_data[$i] = preg_replace('/[ ]/', '', $input_data[$i]);
  if (!preg_match($regex_marks, $input_data[$i])) {
    $marks_error = 1;
    echo 'Incorrect Marks Format at line ' . $i + 1;
  }
}
if (!$marks_error) {
  $table_data = [[]];

  for ($x = 0; $x < count($input_data); $x++) {
    $sub = explode('|', $input_data[$x]);
    $tdata = [$sub[0], $sub[1]];
    array_push($table_data, $tdata);
  }
  // Adding data into the pdf.
  $pdf->Cell(40, 10, 'User Data');
  $pdf->Ln();
  $pdf->Cell(40, 10, 'FirstName: ' . $_POST['first_Name']);
  $pdf->Ln();
  $pdf->Cell(40, 10, 'LastName: ' . $_POST['last_Name']);
  $pdf->Ln();
  $pdf->Cell(40, 10, 'Phone Number: ' . $_POST['phone_number']);
  $pdf->Ln();
  $pdf->Cell(40, 10, 'Email: ' . $_POST['email']);
  $pdf->Ln();
  $header = array('subject', 'Marks');
  $data = $table_data;
  $width_cell = array(30, 30);
  $pdf->SetFillColor(193, 229, 252);

  for ($i = 0; $i < count($header); $i++) {
    $pdf->Cell($width_cell[$i], 10, $header[$i], 1, 0, 'C', TRUE);
  }
  $pdf->Ln();
  for ($i = 1; $i < count($data); $i++) {
    for ($j = 0; $j < 2; $j++) {
      $pdf->Cell($width_cell[$j], 10, $data[$i][$j], 1, 0, 'C', TRUE);
    }
    $pdf->Ln();
  }
  // Store the pdf in local store.
  $pdf->Output('F', "pdfs/{$fname}.pdf");
  // Download the pdf.
  $pdf->Output('D', "{$fname}.pdf");
}
