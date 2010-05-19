<?php

	$npwp = $wajib_pajak_data['npwp'];
	$nama = $wajib_pajak_data['nama'];
	$nama_pemilik = $wajib_pajak_data['pemilik'];
	$alamat = $wajib_pajak_data['alamat'];
	$kota = $wajib_pajak_data['kota'];
	$sekarang = date("j").' '.nama_bulan(date("m")).' '.date("Y");

$this->fpdf->FPDF("P","cm","A4");
$this->fpdf->SetMargins(2,1,2);
$this->fpdf->SetAutoPageBreak(true,1);

$this->fpdf->Open();
$this->fpdf->AliasNbPages();
$this->fpdf->AddPage();

$this->fpdf->Ln(1);
$this->fpdf->Image('images/laporan/logo.jpg',2,1,2.5,2.5);
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(17,0.7,$nama,0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(17,0.7,$alamat,0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(17,0.7,"NPWP : $npwp",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(17,0.08,"",'TLBR',0,'C',1);

$this->fpdf->Ln(0.7);
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(17,0.5,"LAPORAN LABA RUGI",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$periode = 'Periode ';
if($bulan) $periode .= "Bulan $bulan ";
if($tahun) $periode .= "Tahun $tahun";
if($periode != 'Periode ') $this->fpdf->Cell(17,0.5,$periode,0,0,'C');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(17,0.5,"Pendapatan Usaha",0,0,'L');

$this->fpdf->SetFont('Times','',11);

$sum_pendapatan_proyek = 0;
if(isset($laba_rugi_data[1][4]))
{
	foreach ($laba_rugi_data[1][4] as $key => $row)
	{
		$this->fpdf->Ln();
		$this->fpdf->Cell(1,0.5,"",0,0,'L');
		$this->fpdf->Cell(9,0.5,$row['nama'],0,0,'L');
		$this->fpdf->Cell(3.5,0.5,to_rupiah(-$row['saldo']),0,0,'R');
		$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
		$sum_pendapatan_proyek += -$row['saldo'];
	}
}

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(10,0.5,"Pendapatan Bersih",0,0,'L');
$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
$this->fpdf->Cell(3.5,0.5,to_rupiah($sum_pendapatan_proyek),0,0,'R');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(17,0.5,"Biaya-Biaya Usaha",0,0,'L');

$this->fpdf->SetFont('Times','',11);

$sum_biaya_proyek = 0;
if(isset($laba_rugi_data[1][5]))
{
	foreach ($laba_rugi_data[1][5] as $key => $row)
	{
		$this->fpdf->Ln();
		$this->fpdf->Cell(1,0.5,"",0,0,'L');
		$this->fpdf->Cell(9,0.5,$row['nama'],0,0,'L');
		$this->fpdf->Cell(3.5,0.5,to_rupiah($row['saldo']),0,0,'R');
		$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
		$sum_biaya_proyek += $row['saldo'];
	}
}
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(10,0.5,"Total Biaya Usaha",0,0,'L');
$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
$this->fpdf->Cell(3.5,0.5,to_rupiah(-$sum_biaya_proyek),0,0,'R');

$laba_kotor = $sum_pendapatan_proyek - $sum_biaya_proyek;
$this->fpdf->Ln(0.7);
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(10,0.5,"Laba/(Rugi) Kotor",0,0,'L');
$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
$this->fpdf->Cell(3.5,0.5,to_rupiah($laba_kotor),0,0,'R');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(17,0.5,"Pendapatan Luar Usaha",0,0,'L');

$this->fpdf->SetFont('Times','',11);

$sum_pendapatan = 0;
if(isset($laba_rugi_data[0][4]))
{
	foreach ($laba_rugi_data[0][4] as $key => $row)
	{
		$this->fpdf->Ln();
		$this->fpdf->Cell(1,0.5,"",0,0,'L');
		$this->fpdf->Cell(9,0.5,$row['nama'],0,0,'L');
		$this->fpdf->Cell(3.5,0.5,to_rupiah(-$row['saldo']),0,0,'R');
		$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
		$sum_pendapatan += -$row['saldo'];
	}
}

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(10,0.5,"Total Pendapatan Luar Usaha",0,0,'L');
$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
$this->fpdf->Cell(3.5,0.5,to_rupiah($sum_pendapatan),0,0,'R');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(17,0.5,"Biaya-Biaya Luar Usaha",0,0,'L');

$this->fpdf->SetFont('Times','',11);

$sum_biaya = 0;
if(isset($laba_rugi_data[0][5]))
{
	foreach ($laba_rugi_data[0][5] as $key => $row)
	{
		$this->fpdf->Ln();
		$this->fpdf->Cell(1,0.5,"",0,0,'L');
		$this->fpdf->Cell(9,0.5,$row['nama'],0,0,'L');
		$this->fpdf->Cell(3.5,0.5,to_rupiah($row['saldo']),0,0,'R');
		$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
		$sum_biaya += $row['saldo'];
	}
}

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(10,0.5,"Total Biaya Luar Usaha",0,0,'L');
$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
$this->fpdf->Cell(3.5,0.5,to_rupiah(-$sum_biaya),0,0,'R');

$sum = $laba_kotor + $sum_pendapatan - $sum_biaya;
$laba_rugi = ($sum < 0) ? 'Rugi' : 'Laba' ;
$this->fpdf->Ln(0.7);
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(10,0.5,$laba_rugi,0,0,'L');
$this->fpdf->Cell(3.5,0.5,"",0,0,'L');
$this->fpdf->Cell(3.5,0.5,to_rupiah($sum),0,0,'R');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(17,0.5,$kota.", ".$sekarang,0,0,'C');

$this->fpdf->Ln(3);
$this->fpdf->SetFont('Times','B',12);
$y = $this->fpdf->GetX();
$this->fpdf->SetX($y+5);
$this->fpdf->Cell(7,0.5,$nama_pemilik,'B',0,'C');

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(17,0.5,"Direktur",0,0,'C');

$this->fpdf->Output("Laporan_Laba_Rugi.pdf","I");
?>
