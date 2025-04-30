<?php
require_once('vendor/tc-lib-pdf-main/src/Tcpdf.php'); 
require_once('controllers/deliveries/ get_data.php'); 

if (!isset($_GET['type'])) {
    die("Error: No report type specified.");
}

$type = ucfirst($_GET['type']); // Capitalize the first letter
$data = getData(strtolower($type));

if (!$data) {
    die("Error: No data found for $type report.");
}

class MYPDF extends TCPDF {
    public function Header() {
        $image_file = 'assets/images/company_logo.png';
        $this->Image($image_file, 10, 10, 30);
        $this->SetFont('helvetica', 'B', 14);
        $this->Cell(0, 10, 'Company Name - ' . ucfirst($_GET['type']) . ' Report', 0, 1, 'C');
        $this->Ln(5);
    }

    public function Footer() {
        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, 0, 'C');
    }
}

$pdf = new MYPDF();
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle("$type Report");
$pdf->SetMargins(10, 40, 10);
$pdf->SetAutoPageBreak(TRUE, 25);
$pdf->AddPage();

// Table Header
$html = '<h3 style="text-align:center;">' . $type . ' List</h3>';
$html .= '<table border="1" cellpadding="5">
            <tr style="background-color:#f2f2f2; font-weight:bold;">';

// Dynamically generate table headers
foreach (array_keys($data[0]) as $column) {
    $html .= '<th>' . ucfirst(str_replace('_', ' ', $column)) . '</th>';
}
$html .= '</tr>';

// Table Data
foreach ($data as $row) {
    $html .= '<tr>';
    foreach ($row as $value) {
        $html .= '<td>' . htmlspecialchars($value) . '</td>';
    }
    $html .= '</tr>';
}
$html .= '</table>';

// Add table to PDF
$pdf->writeHTML($html, true, false, false, false, '');
$pdf->Output("{$type}_report.pdf", 'D');
?>
