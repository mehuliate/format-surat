<?php
require_once 'vendor/autoload.php';

use Fpdf\Fpdf;

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();

//
$row_x = $pdf->GetX();
$pdf->SetFont('Arial','B','10');
$pdf->Cell(15,10,'BC 3.4',1,0,'C'); 
$pdf->Cell(0,5,'PEMBERITAHUAN PEMBAWAAN BARANG UNTUK DIBAWA KEMBALI','LTR',2,'C'); 
$pdf->SetFont('Arial','BI','10');
$pdf->Cell(0,5,'DECLARATION OF RETURNABLE GOODS','LRB',1,'C');




//
$row_y = $pdf->GetY();
$pdf->SetFont('Arial','','8');
$pdf->Cell(0,3,'',0,2,'L');
$pdf->Cell(45,3,'Kolom Khusus Bea dan Cukai',0,2,'L'); 
$pdf->SetFont('Arial','I','8');
$pdf->Cell(45,3,'Customs Official Column',0,2,'L');
$pdf->Cell(0,3,'',0,2,'L');
$pdf->SetFont('Arial','','8');
$pdf->Cell(45,3,'Kantor Pabean keberangkatan',0,0,'L'); 
$pdf->Cell(45,3,'050100','B',0,'C'); 
$pdf->Cell(90,3,'Kantor Pelayanan Utama Bea dan Cukai Tipe C Pabean Soekarno Hatta','B',1,'L'); 
$pdf->SetFont('Arial','I','8');
$pdf->Cell(45,3,'Customs Office of Departure',0,1,'L');
$pdf->Cell(0,3,'',0,2,'L');
$pdf->Cell(45,4,'Kantor Pabean Kedatangan',0,2,'L'); 
$pdf->Cell(45,4,'Customs Office of Arrival',0,2,'L');
$pdf->Cell(0,3,'',0,2,'L');
$pdf->Cell(45,4,'Nomor dan Tanggal Pendaftaran',1,2,'L');
$pdf->Cell(45,4,'Number and Date of Registration',0,2,'L');
$pdf->Rect($row_x, $row_y, 190, 45);


// //
// $pdf->Cell(0,4,'DATA PENGANGKUT','1',2,'L');
// $pdf->Cell(0,4,'INFORMATION OF CARRIER','1',2,'L');
// $pdf->Cell(0,4,'1.No. Penerbangan/Pelayanan/Kendaraan','1',2,'L');
// $pdf->Cell(0,4,'Flight/Voyage/vehicle Number','1',2,'L');
// $pdf->Cell(0,4,'2. Tanggal Keberangkatan','1',2,'L');
// $pdf->Cell(0,4,'Date of Departure','1',2,'L');
// //
// $pdf->Cell(0,4,'DATA PENUMPANG','1',2,'L');
// $pdf->Cell(0,4,'INFORMATION OF PASSENGER','1',2,'L');
// $pdf->Cell(0,4,'3. Nama Lengkap','1',2,'L');
// $pdf->Cell(0,4,'Full Name','1',2,'L');
// $pdf->Cell(0,4,'4. Tempat keberangkatan','1',2,'L');
// $pdf->Cell(0,4,'Place of Depature','1',2,'L');
// $pdf->Cell(0,4,'5. Kebangsaan','1',2,'L');
// $pdf->Cell(0,4,'Nationality','1',2,'L');
// $pdf->Cell(0,4,'6. Nomor Paspor','1',2,'L');
// $pdf->Cell(0,4,'Passport Number','1',2,'L');
// $pdf->Cell(0,4,'7. Pekerjaan','1',2,'L');
// $pdf->Cell(0,4,'Occupation','1',2,'L');
// $pdf->Cell(0,4,'8. Negara Tujuan','1',2,'L');
// $pdf->Cell(0,4,'Country of Destination','1',2,'L');

// //
// $pdf->Cell(0,4,'DATA BARANG','1',2,'L');
// $pdf->Cell(0,4,'INFORMATION OF GOODS','1',2,'L');
// $pdf->Cell(0,4,'','1',2,'L');




// $pdf->Cell(0,4,'','1',2,'L');

$pdf->Output();