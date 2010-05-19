<?php

	$npwp = $wajib_pajak_data['npwp'];
	$nama = $wajib_pajak_data['nama'];
	$nama_pemilik = $wajib_pajak_data['pemilik'];
	$alamat = $wajib_pajak_data['alamat'];
	$kota = $wajib_pajak_data['kota'];

$this->fpdf->FPDF("P","cm","A4");
$this->fpdf->SetMargins(2,1,2);
$this->fpdf->SetAutoPageBreak(true,1);

$this->fpdf->Open();
$this->fpdf->AliasNbPages();
$this->fpdf->AddPage();

$this->fpdf->Ln(1);
$this->fpdf->Image('images/laporan/logo.jpg',2,1,2.5,2.5);
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(17,0.7,"$nama",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(17,0.7,"$alamat",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(17,0.7,"NPWP : $npwp",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(17,0.08,"",'TLBR',0,'C',1);

$this->fpdf->Ln(0.7);
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(17,0.5,"LAPORAN LABA RUGI",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(17,0.5,"Proyek ".$proyek,0,0,'C');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(17,0.5,"Pendapatan",0,0,'L');

$this->fpdf->SetFont('Times','',11);

$sum_pendapatan_proyek = 0;
if(isset($laporan_data[4]))
{
	foreach ($laporan_data[4] as $key => $row)
	{
		$this->fpdf->Ln();
		$this->fpdf->Cell(1,0.5,"",0,0,'L');
		$this->fpdf->Cell(9,0.5,$row['nama'],0,0,'L');
		$this->fpdf->Cell(3.5,0.5,"Rp ".-$row['saldo'],0,0,'L');
		$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
		$sum_pendapatan_proyek += -$row['saldo'];
	}
}

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(10,0.5,"Total Pendapatan",0,0,'L');
$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
$this->fpdf->Cell(3.5,0.5,"Rp ".$sum_pendapatan_proyek,0,0,'L');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(17,0.5,"Biaya",0,0,'L');

$this->fpdf->SetFont('Times','',11);

$sum_biaya_proyek = 0;
if(isset($laporan_data[5]))
{
	foreach ($laporan_data[5] as $key => $row)
	{
		$this->fpdf->Ln();
		$this->fpdf->Cell(1,0.5,"",0,0,'L');
		$this->fpdf->Cell(9,0.5,$row['nama'],0,0,'L');
		$this->fpdf->Cell(3.5,0.5,"Rp ".$row['saldo'],0,0,'L');
		$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
		$sum_biaya_proyek += $row['saldo'];
	}
}

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(10,0.5,"Total Biaya",0,0,'L');
$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
$this->fpdf->Cell(3.5,0.5,"( Rp ".$sum_biaya_proyek." )",0,0,'L');

$sum_laba_rugi = $sum_pendapatan_proyek - $sum_biaya_proyek;
$laba_rugi = ($sum_laba_rugi < 0) ? "( Rp ".abs($sum_laba_rugi)." )" : "Rp $sum_laba_rugi" ;
$text_laba_rugi = ($sum_laba_rugi < 0) ? 'Rugi' : 'Laba' ;
$this->fpdf->Ln(0.7);
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(10,0.5,$text_laba_rugi,0,0,'L');
$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
$this->fpdf->Cell(3.5,0.5,$laba_rugi,0,0,'L');

$sekarang = date("j").' '.nama_bulan(date("m")).' '.date("Y");
$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(17,0.5,$kota.", ".$sekarang,0,0,'C');

$this->fpdf->Ln(3);
$this->fpdf->SetFont('Times','B',12);
$y = $this->fpdf->GetX();
$this->fpdf->SetX($y+5);
$this->fpdf->Cell(7,0.5,"$nama_pemilik",'B',0,'C');

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(17,0.5,"Direktur",0,0,'C');

$this->fpdf->Output("Laporan_Proyek.pdf","I");
?> 
