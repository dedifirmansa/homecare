<?php
//menyertakan file fpdf, file fpdf.php di dalam folder FPDF yang diekstrak
include "fpdf185/fpdf.php";
include "config.php";
include "index.php";

//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// menyetel font yang digunakan, font yang digunakan adalah arial, bold dengan ukuran 16
$pdf->SetFont('Arial','B',16);
// judul
$pdf->Cell(190,7,'SEKOLAH MENENGAH ATAS NEGRI 50 PALEMBANG',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA SMAN 1 PALEMBANG',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'nama',1,0);
$pdf->Cell(85,6,'pelayanan',1,0);
$pdf->Cell(35,6,'tanggal',1,0);
$pdf->Cell(25,6,'pelayanan',1,1);
$pdf->Cell(25,6,'no_telpon',1,1);
$pdf->Cell(25,6,'perawat',1,1);
$pdf->Cell(25,6,'waktu',1,1);

$pdf->SetFont('Arial','',10);
 
//koneksi ke database
$mysqli = new mysqli("localhost","root","","db_zaenudin");
$no = 1;
$tampil = mysqli_query($mysqli, "select * from pelanggan");
while ($hasil = mysqli_fetch_array($tampil)){
    $pdf->Cell(20,6,$no++,1,0);
    $pdf->Cell(85,6,$hasil['nama'],1,0);
    $pdf->Cell(35,6,$hasil['jeniskelamin'],1,0);
    $pdf->Cell(25,6,$hasil['alamat'],1,1); 
}
 
$pdf->Output();


?>
