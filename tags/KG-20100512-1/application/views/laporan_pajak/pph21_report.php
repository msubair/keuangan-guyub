<?php

	$npwp = $wajib_pajak_data['npwp'];
	$nama = $wajib_pajak_data['nama'];
	$alamat = $wajib_pajak_data['alamat'];
	$telpon = $wajib_pajak_data['telpon'];
	$email = $wajib_pajak_data['email'];
	$nama_pemilik = $wajib_pajak_data['pemilik'];
	$npwp_pemilik = $wajib_pajak_data['npwp_pemilik'];
	$bulan = $laporan_data['bulan'];
	$tahun = $laporan_data['tahun'];
	$penerima_1 = $laporan_data['penerima_1'];
	$bruto_1 = $laporan_data['bruto_1'];
	$pajak_1 = $laporan_data['pajak_1'];
	$penerima_2 = $laporan_data['penerima_2'];
	$bruto_2 = $laporan_data['bruto_2'];
	$pajak_2 = $laporan_data['pajak_2'];
	$penerima_3 = $laporan_data['penerima_3'];
	$bruto_3 = $laporan_data['bruto_3'];
	$pajak_3 = $laporan_data['pajak_3'];
	$penerima_4 = $laporan_data['penerima_4'];
	$bruto_4 = $laporan_data['bruto_4'];
	$pajak_4 = $laporan_data['pajak_4'];
	$penerima_5 = $laporan_data['penerima_5'];
	$bruto_5 = $laporan_data['bruto_5'];
	$pajak_5 = $laporan_data['pajak_5'];
	$penerima_6 = $laporan_data['penerima_6'];
	$bruto_6 = $laporan_data['bruto_6'];
	$pajak_6 = $laporan_data['pajak_6'];
	$penerima_7 = $laporan_data['penerima_7'];
	$bruto_7 = $laporan_data['bruto_7'];
	$pajak_7 = $laporan_data['pajak_7'];
	$penerima_8 = $laporan_data['penerima_8'];
	$bruto_8 = $laporan_data['bruto_8'];
	$pajak_8 = $laporan_data['pajak_8'];
	$penerima_9 = $laporan_data['penerima_9'];
	$bruto_9 = $laporan_data['bruto_9'];
	$pajak_9 = $laporan_data['pajak_9'];
	$penerima_10 = $laporan_data['penerima_10'];
	$bruto_10 = $laporan_data['bruto_10'];
	$pajak_10 = $laporan_data['pajak_10'];
	$penerima_11 = $laporan_data['penerima_11'];
	$bruto_11 = $laporan_data['bruto_11'];
	$pajak_11 = $laporan_data['pajak_11'];
	$penerima_12 = $laporan_data['penerima_12'];
	$bruto_12 = $laporan_data['bruto_12'];
	$pajak_12 = $laporan_data['pajak_12'];
	$penerima_13 = $laporan_data['penerima_13'];
	$bruto_13 = $laporan_data['bruto_13'];
	$pajak_13 = $laporan_data['pajak_13'];
	$penerima_14 = $laporan_data['penerima_14'];
	$bruto_14 = $laporan_data['bruto_14'];
	$pajak_14 = $laporan_data['pajak_14'];
	$penerima_15 = $laporan_data['penerima_15'];
	$bruto_15 = $laporan_data['bruto_15'];
	$pajak_15 = $laporan_data['pajak_15'];
	$penerima_16 = $laporan_data['penerima_16'];
	$bruto_16 = $laporan_data['bruto_16'];
	$pajak_16 = $laporan_data['pajak_16'];
	$penerima_17 = $laporan_data['penerima_17'];
	$bruto_17 = $laporan_data['bruto_17'];
	$pajak_17 = $laporan_data['pajak_17'];
	$penerima_18 = $laporan_data['penerima_18'];
	$bruto_18 = $laporan_data['bruto_18'];
	$pajak_18 = $laporan_data['pajak_18'];
	$penerima_19 = $laporan_data['penerima_19'];
	$bruto_19 = $laporan_data['bruto_19'];
	$pajak_19 = $laporan_data['pajak_19'];
	$penerima_20 = $laporan_data['penerima_20'];
	$bruto_20 = $laporan_data['bruto_20'];
	$pajak_20 = $laporan_data['pajak_20'];
	$lampiran_a = $laporan_data['lampiran_a'];
	$lampiran_b = $laporan_data['lampiran_b'];
	$lampiran_c = $laporan_data['lampiran_c'];
	$lampiran_d = $laporan_data['lampiran_d'];
	$lampiran_e = $laporan_data['lampiran_e'];
	$lampiran_f = $laporan_data['lampiran_f'];
	$lampiran_g = $laporan_data['lampiran_g'];
	$lampiran_h = $laporan_data['lampiran_h'];

$this->fpdf->SetMargins(1,1,1);
$this->fpdf->SetAutoPageBreak(true,1);
$this->fpdf->Open();
$this->fpdf->AliasNbPages();
$this->fpdf->AddPage();

$this->fpdf->SetFont('Times','',9);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+14.6);
$this->fpdf->Cell(5,0.4,'Lampiran I','TLR',0,'L');
$this->fpdf->Ln();
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+14.6);
$this->fpdf->Cell(5,0.4,'Peraturan Direktur Jenderal Pajak','LR',0,'L');
$this->fpdf->Ln();
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+14.6);
$this->fpdf->Cell(5,0.4,'Nomor : PER-32/PJ/2009','LR',0,'L');
$this->fpdf->Ln();
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+14.6);
$this->fpdf->Cell(5,0.4,'Tanggal : 25 Mei 2009','LBR',0,'L');

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Image('images/laporan/logo_pajak.jpg',1.2,3.15,2.5,2.5);
$this->fpdf->SetFont('Times','B',11);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+2.8);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.2,'','LR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(7,0.2,'','LR',0,'C');
$this->fpdf->SetFont('Times','B',10);
$this->fpdf->Cell(0.2,0.2,'',0,0,'L');
$this->fpdf->Cell(1,0.2,'',0,0,'L');
$this->fpdf->Cell(6,0.2,'',0,0,'L');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+2.8);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.6,'','LR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(7,0.5,'SPT Masa','LR',0,'C');
$this->fpdf->SetFont('Times','B',10);
$this->fpdf->Cell(0.2,0.5,'',0,0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(1,0.7,'','TLBR',0,'L',1);
$this->fpdf->Cell(6,0.7,'SPT Normal',0,0,'L');
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+2.8);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.55,'Departemen','LR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(7,0.5,'Pajak Penghasilan','LR',0,'C');
$this->fpdf->SetFont('Times','B',10);
$this->fpdf->Cell(0.2,0.5,'',0,0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(1,0.7,'',0,0,'L');
$this->fpdf->Cell(6,0.5,'',0,0,'L');
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+2.8);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.55,'Keuangan RI','LR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(7,0.5,'Pasal 21 dan/atau Pasal 26','LR',0,'C');
$this->fpdf->SetFont('Times','B',10);
$this->fpdf->Cell(0.2,0.5,'',0,0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(1,0.7,'','TLBR',0,'L',1);
$this->fpdf->Cell(3.3,0.7,'SPT Pembetulan Ke-',0,0,'L');
$this->fpdf->Cell(0.7,0.7,'','B',0,'L');
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Image('images/laporan/logo_pajak.jpg',1.2,3,2.5,2.5);
$this->fpdf->SetFont('Times','B',11);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+2.8);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.55,'Direktorat','LR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(7,0.5,'','LBR',0,'C');
$this->fpdf->SetFont('Times','B',10);
$this->fpdf->Cell(0.2,0.5,'','B',0,'L');
$this->fpdf->Cell(1,0.5,'','B',0,'L');
$this->fpdf->Cell(6,0.5,'','B',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+2.8);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.55,'Jenderal','LR',0,'C',1);
$this->fpdf->SetFont('Times','B',8);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(7,0.7,'Formulir ini digunakan untuk melaporkan','LR',0,'C');
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(3.6,0.7,'Tahun Kalender','LR',0,'C');
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(3.6,0.7,'Formulir',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+2.8);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.55,'Pajak','LR',0,'C',1);
$this->fpdf->SetFont('Times','B',8);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(7,0.5,'kewajiban Pemotongan Pajak Penghasilan Pasal','LR',0,'C');
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(3.6,0.5,'','LR',0,'C');
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(3.6,0.5,'',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+2.8);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.55,'','LR',0,'C',1);
$this->fpdf->SetFont('Times','B',8);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(7,0.3,'21 dan/atau Pasal 26','LR',0,'C');
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(1.8,0.5,substr($tahun, 0, 2),'L',0,'R');
$this->fpdf->Cell(0.8,0.5,substr($tahun, 2, 2),'B',0,'L');
$this->fpdf->Cell(1,0.5,'','R',0,'R');
$this->fpdf->SetFont('Times','B',20);
$this->fpdf->Cell(3.6,0.5,'1721',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+2.8);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.2,'','LR',0,'C',1);
$this->fpdf->SetFont('Times','B',8);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(7,0.2,'','LR',0,'C');
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(3.6,0.2,'','LR',0,'C');
$this->fpdf->SetFont('Times','B',20);
$this->fpdf->Cell(3.6,0.2,'',0,0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.5,'','L',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.5,'(Bulan/Tahun)','LR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',16);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Masa Pajak','L',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(2.55,0.7,'','LR',0,'C');
$bulan1 = (strlen($bulan) == 1) ? '0' : substr($bulan, 0, 1);
$bulan2 = (strlen($bulan) == 1) ? $bulan : substr($bulan, 1, 1);
$this->fpdf->Cell(0.7,0.7,$bulan1,'TLBR',0,'C');
$this->fpdf->Cell(0.7,0.7,$bulan2,'TBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($tahun, 0, 1),'TLBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($tahun, 1, 1),'TBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($tahun, 2, 1),'TBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($tahun, 3, 1),'TBR',0,'C');
$this->fpdf->Cell(2,0.7,'','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.3,'','L',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.3,'','LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.7,"Bagian A - Informasi Identitas Wajib Pajak",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.3,'','LR',0,'C',1);
$this->fpdf->Cell(2,0.3,'','R',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(16.8,0.2,'',0,0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.6,'1','LR',0,'C',1);
$this->fpdf->Cell(2,0.6,'NPWP','R',0,'L',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,substr($npwp, 0, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,substr($npwp, 1, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,".",0,0,'C');
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,".",0,0,'C');
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,".",0,0,'C');
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,"-",0,0,'C');
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,".",0,0,'C');
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,substr($npwp, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(6.6,0.5,"",'R',0,'C');
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.2,'','LBR',0,'C',1);
$this->fpdf->Cell(2,0.2,'','BR',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(16.8,0.2,'','B',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.5,'2','LBR',0,'C',1);
$this->fpdf->SetFont('Times','',8);
$this->fpdf->Cell(2,0.5,'Nama WP','BR',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(16.8,0.5,"$nama",'B',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.75,'3','LR',0,'C',1);
$this->fpdf->SetFont('Times','',11);
$this->fpdf->Cell(2,0.75,'Alamat','R',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(16.8,0.5,"$alamat",'B',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.5,'','LBR',0,'C',1);
$this->fpdf->SetFont('Times','',11);
$this->fpdf->Cell(2,0.5,'','BR',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(16.8,0.5,'','B',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.5,'4','LBR',0,'C',1);
$this->fpdf->SetFont('Times','',7);
$this->fpdf->Cell(2,0.5,'Nomor Telpon','BR',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->SetFont('Times','',11);
$this->fpdf->Cell(7,0.5,"$telpon",'B',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.5,'5','LBR',0,'C',1);
$this->fpdf->SetFont('Times','',7);
$this->fpdf->Cell(2,0.5,'Alamat Email','BR',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->SetFont('Times','',11);
$this->fpdf->Cell(7.1,0.5,"$email",'B',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(19.6,0.7,"Bagian B - Objek Pajak",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',6);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.3,'','LR',0,'C');
$this->fpdf->Cell(7.3,0.3,'','R',0,'C');
$this->fpdf->Cell(3,0.3,'Jumlah','R',0,'C');
$this->fpdf->Cell(4.5,0.3,'Jumlah','R',0,'C');
$this->fpdf->Cell(4,0.3,'Jumlah','R',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',6);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.3,'No','LR',0,'C');
$this->fpdf->Cell(7.3,0.3,'Golongan Penerima','R',0,'C');
$this->fpdf->Cell(3,0.3,'Penerima','R',0,'C');
$this->fpdf->Cell(4.5,0.3,'Penghasilan Bruto','R',0,'C');
$this->fpdf->Cell(4,0.3,'Pajak Terutang','R',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',6);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.3,'','LBR',0,'C');
$this->fpdf->Cell(7.3,0.3,'Penghasilan','BR',0,'C');
$this->fpdf->Cell(3,0.3,'Penghasilan','BR',0,'C');
$this->fpdf->Cell(4.5,0.3,'(Rp)','BR',0,'C');
$this->fpdf->Cell(4,0.3,'(Rp)','BR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',6);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.3,'(1)','LBR',0,'C');
$this->fpdf->Cell(7.3,0.3,'(2)','BR',0,'C');
$this->fpdf->Cell(3,0.3,'(3)','BR',0,'C');
$this->fpdf->Cell(4.5,0.3,'(4)','BR',0,'C');
$this->fpdf->Cell(4,0.3,'(5)','BR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'6','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Pegawai Tetap','BR',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_1",'BR',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_1",'BR',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_1",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'7','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Penerima Pensiun Berkala','BR',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_2",'BR',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_2",'BR',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_2",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'8','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Pegawai Tidak Tetap atau Tenaga Kerja Lepas','BR',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_3",'BR',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_3",'BR',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_3",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'9','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Distributor MLM','BR',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_4",'BR',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_4",'BR',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_4",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'10','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Petugas Dinas Luar Asuransi','BR',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_5",'BR',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_5",'BR',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_5",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'11','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Penjaja Barang Dagangan','BR',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_6",'BR',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_6",'BR',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_6",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'12','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Tenaga Ahli','BR',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_7",'BR',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_7",'BR',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_7",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.85,'13','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Anggota Dewan Komisaris atau Dewan Pengawas yang','R',0,'L');
$this->fpdf->Cell(3,0.85,"$penerima_8",'R',0,'C');
$this->fpdf->Cell(4.5,0.85,"$bruto_8",'R',0,'C');
$this->fpdf->Cell(4,0.85,"$pajak_8",'R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.4,'','LBR',0,'C');
$this->fpdf->Cell(7.3,0.4,'tidak Merangkap sebagai Pegawai Tetap','BR',0,'L');
$this->fpdf->Cell(3,0.4,"",'BR',0,'C');
$this->fpdf->Cell(4.5,0.4,"",'BR',0,'C');
$this->fpdf->Cell(4,0.4,"",'BR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.85,'14','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Mantan Pegawai yang Menerima Jasa Produksi,','R',0,'L');
$this->fpdf->Cell(3,0.85,"$penerima_9",'R',0,'C');
$this->fpdf->Cell(4.5,0.85,"$bruto_9",'R',0,'C');
$this->fpdf->Cell(4,0.85,"$pajak_9",'R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.4,'','LBR',0,'C');
$this->fpdf->Cell(7.3,0.4,'Tantiem, Bonus atau Imbalan Lain','BR',0,'L');
$this->fpdf->Cell(3,0.4,"",'BR',0,'C');
$this->fpdf->Cell(4.5,0.4,"",'BR',0,'C');
$this->fpdf->Cell(4,0.4,"",'BR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'15','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Pegawai yang Melakukan Penarikan Dana Pensiun','BR',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_10",'BR',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_10",'BR',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_10",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'16','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Peserta Kegiatan','BR',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_11",'BR',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_11",'BR',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_11",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.8,'17','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Bukan Pegawai yang Menerima Penghasilan yang','R',0,'L');
$this->fpdf->Cell(3,0.8,"$penerima_12",'R',0,'C');
$this->fpdf->Cell(4.5,0.8,"$bruto_12",'R',0,'C');
$this->fpdf->Cell(4,0.8,"$pajak_12",'R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.4,'','LBR',0,'C');
$this->fpdf->Cell(7.3,0.4,'Bersifat Berkesinambungan','BR',0,'L');
$this->fpdf->Cell(3,0.4,'','BR',0,'C');
$this->fpdf->Cell(4.5,0.4,'','BR',0,'C');
$this->fpdf->Cell(4,0.4,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.85,'18','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Bukan Pegawai yang Menerima Penghasilan yang Tidak','R',0,'L');
$this->fpdf->Cell(3,0.85,"$penerima_13",'R',0,'C');
$this->fpdf->Cell(4.5,0.85,"$bruto_13",'R',0,'C');
$this->fpdf->Cell(4,0.85,"$pajak_13",'R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.4,'','LBR',0,'C');
$this->fpdf->Cell(7.3,0.4,'Bersifat Berkesinambungan','BR',0,'L');
$this->fpdf->Cell(3,0.4,'','BR',0,'C');
$this->fpdf->Cell(4.5,0.4,'','BR',0,'C');
$this->fpdf->Cell(4,0.4,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.85,'19','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Pegawai atau Pemberi Jasa sebagai Wajib Pajak Luar','R',0,'L');
$this->fpdf->Cell(3,0.85,"$penerima_14",'R',0,'C');
$this->fpdf->Cell(4.5,0.85,"$bruto_14",'R',0,'C');
$this->fpdf->Cell(4,0.85,"$pajak_14",'R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.4,'','LBR',0,'C');
$this->fpdf->Cell(7.3,0.4,'Negeri','BR',0,'L');
$this->fpdf->Cell(3,0.4,'','BR',0,'C');
$this->fpdf->Cell(4.5,0.4,'','BR',0,'C');
$this->fpdf->Cell(4,0.4,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.85,'20','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Jumlah Bagian B','R',0,'L');
$this->fpdf->Cell(3,0.85,'','R',0,'C');
$this->fpdf->Cell(4.5,0.85,'','R',0,'C');
$this->fpdf->Cell(4,0.85,'','R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.4,'','LBR',0,'C');
$this->fpdf->Cell(7.3,0.4,'(Penjumlahan Angka 6 s.d. 19)','BR',0,'L');
$this->fpdf->Cell(3,0.4,'','BR',0,'C');
$this->fpdf->Cell(4.5,0.4,'','BR',0,'C');
$this->fpdf->Cell(4,0.4,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.85,'21','LR',0,'C');
$this->fpdf->Cell(14.8,0.5,'PPh Pasal 21 dan/atau Pasal 26 yang telah Disetor pada Masa Pajak Januari s.d. November','R',0,'L');
$this->fpdf->Cell(4,0.85,"$pajak_15",'R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.4,'','LBR',0,'C');
$this->fpdf->Cell(14.8,0.4,'(Diisi hanya pada Masa Pajak Desember)','BR',0,'L');
$this->fpdf->Cell(4,0.4,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'22','LBR',0,'C');
$this->fpdf->Cell(14.8,0.5,'STP PPh Pasal 21 dan/atau Pasal 26 (hanya Pokok Pajak)','BR',0,'L');
$this->fpdf->Cell(4,0.5,"$pajak_16",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'','LR',0,'C');
$this->fpdf->Cell(10.8,0.5,'Kelebihan setor PPh Pasal 21 dan/atau Pasal 26 dari:','R',0,'L');
$this->fpdf->Cell(4,0.5,'','R',0,'C');
$this->fpdf->Cell(4,0.5,'','R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.75,'23','LR',0,'C');
$this->fpdf->Cell(10.8,0.5,'Masa Pajak','R',0,'C');
$this->fpdf->SetFont('Times','',11);
$this->fpdf->Cell(4,0.5,'Tahun Kalender','R',0,'C');
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(4,0.75,'','R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'','LR',0,'C');
$this->fpdf->Cell(0.2,0.5,'','L',0,'C');
$this->fpdf->Cell(0.6,0.5,'1','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.6,0.5,'2','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.7,0.5,'3','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.7,0.5,'4','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.7,0.5,'5','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.7,0.5,'6','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.7,0.5,'7','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.7,0.5,'8','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.7,0.5,'9','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.7,0.5,'10','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.7,0.5,'11','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'',0,0,'C');
$this->fpdf->Cell(0.7,0.5,'12','TLBR',0,'C');
$this->fpdf->Cell(0.2,0.5,'','R',0,'C');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.6,0.5,'','R',0,'C');
$this->fpdf->Cell(0.7,0.5,substr($tahun, 0, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,substr($tahun, 1, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,substr($tahun, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,substr($tahun, 3, 1),'TLBR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.6,0.5,'','R',0,'C');
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(4,0.5,'','R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.1,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.1,'','LR',0,'C');
$this->fpdf->Cell(10.8,0.1,':','R',0,'L');
$this->fpdf->Cell(4,0.1,'','R',0,'C');
$this->fpdf->Cell(4,0.1,'','R',0,'C');
$this->fpdf->Cell(0.05,0.1,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'24','LBR',0,'C');
$this->fpdf->Cell(14.8,0.5,'Jumlah (angka 21 + angka 22 + angka 23)','BR',0,'L');
$this->fpdf->Cell(4,0.5,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'25','LBR',0,'C');
$this->fpdf->Cell(14.8,0.5,'PPh Pasal 21 dan/atau Pasal 26 yang Kurang (Lebih) Disetor (angka 20  - angka 24)','BR',0,'L');
$this->fpdf->Cell(4,0.5,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'','LBR',0,'C');
$this->fpdf->Cell(10.8,0.5,'25a. Penyetoran dengan SSP PPh Pasal 21 Ditanggung Pemerintah','BR',0,'L');
$this->fpdf->Cell(4,0.5,"$bruto_17",'BR',0,'C');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(4,0.5,"$pajak_17",'BR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'','LBR',0,'C');
$this->fpdf->Cell(10.8,0.5,'25b. Penyetoran dengan SSP','BR',0,'L');
$this->fpdf->Cell(4,0.5,"$bruto_18",'BR',0,'C');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(4,0.5,"$pajak_18",'BR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','I',7);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Jika SPT Pembetulan, maka dilanjutkan ke angka 26  dan 27','LBR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.75,'26','LR',0,'C');
$this->fpdf->Cell(14.8,0.5,'PPh Pasal 21 dan/atau Pasal 26 yang Kurang (Lebih) Disetor pada SPT yang Dibetulkan','R',0,'L');
$this->fpdf->Cell(4,0.75,'','R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.4,'','LBR',0,'C');
$this->fpdf->Cell(14.8,0.4,'(merupakan pindahan dari Bagian B Angka 25 dari SPT yang Dibetulkan)','BR',0,'L');
$this->fpdf->Cell(4,0.4,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'27','LBR',0,'C');
$this->fpdf->Cell(14.8,0.5,'PPh Pasal 21 dan/atau Pasal 26 yang Kurang (Lebih) Disetor karena pembetulan (angka 25  - angka 26)','BR',0,'L');
$this->fpdf->Cell(4,0.5,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'28','LBR',0,'C');
$this->fpdf->Cell(10.5,0.5,'Kelebihan setor pada angka 25 atau angka 27 akan dikompensasikan ke Masa Pajak','BR',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,'','TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,'','TLBR',0,'C',1);
$this->fpdf->Cell(2,0.5,'Tahun','BR',0,'C');
$this->fpdf->Cell(0.5,0.5,'','TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,'','TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,'','TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.5,'','TLBR',0,'C',1);
$this->fpdf->Cell(3.3,0.5,'','BR',0,'C');
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln(0.5);
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',9);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(19.5,0.55,'Catatan:','LR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(19.5,0.55,'Khusus Untuk Masa Pajak Desember, Jumlah  Penghasilan Bruto (kolom 4) dan Jumlah Pajak Terutang (kolom 5) pada angka','LR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(19.5,0.5,'6 sampai dengan angka 20 diisi jumlah kumulatif dalam Tahun Kalender yang bersangkutan.','LR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->AddPage();

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(19.6,0.7,"Bagian C - Objek Pajak - Final",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',6);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.35,'','LR',0,'C',1);
$this->fpdf->Cell(7.3,0.35,'','R',0,'C',1);
$this->fpdf->Cell(3,0.35,'Jumlah','R',0,'C',1);
$this->fpdf->Cell(4.5,0.35,'Jumlah','R',0,'C',1);
$this->fpdf->Cell(4,0.35,'Jumlah','R',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',6);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.35,'No','LR',0,'C',1);
$this->fpdf->Cell(7.3,0.35,'Golongan Penerima','R',0,'C',1);
$this->fpdf->Cell(3,0.35,'Penerima','R',0,'C',1);
$this->fpdf->Cell(4.5,0.35,'Penghasilan Bruto','R',0,'C',1);
$this->fpdf->Cell(4,0.35,'Pajak Terutang','R',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',6);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.3,'','LBR',0,'C',1);
$this->fpdf->Cell(7.3,0.3,'Penghasilan','BR',0,'C',1);
$this->fpdf->Cell(3,0.3,'Penghasilan','BR',0,'C',1);
$this->fpdf->Cell(4.5,0.3,'(Rp)','BR',0,'C',1);
$this->fpdf->Cell(4,0.3,'(Rp)','BR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',6);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.7,0.3,'(1)','LBR',0,'C',1);
$this->fpdf->Cell(7.3,0.3,'(2)','BR',0,'C',1);
$this->fpdf->Cell(3,0.3,'(3)','BR',0,'C',1);
$this->fpdf->Cell(4.5,0.3,'(4)','BR',0,'C',1);
$this->fpdf->Cell(4,0.3,'(5)','BR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Penerima Uang Pesangon, Uang Manfaat Pensiun, Tunjangan','R',0,'L');
$this->fpdf->Cell(3,0.5,'','R',0,'C');
$this->fpdf->Cell(4.5,0.5,'','R',0,'C');
$this->fpdf->Cell(4,0.5,'','R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'29','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Hari Tua atau Jaminan Hari Tua, dan Pembayaran Lain','R',0,'L');
$this->fpdf->Cell(3,0.5,"",'R',0,'C');
$this->fpdf->Cell(4.5,0.5,"",'R',0,'C');
$this->fpdf->Cell(4,0.5,"",'R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Sejenis yang Dibayarkan Sekaligus','BR',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_19",'BR',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_19",'BR',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_19",'BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Pejabat Negara, Pegawai Negeri Sipil, Anggota TNI/POLRI','R',0,'L');
$this->fpdf->Cell(3,0.5,'','R',0,'C');
$this->fpdf->Cell(4.5,0.5,'','R',0,'C');
$this->fpdf->Cell(4,0.5,'','R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'30','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'dan Pensiunan yang Menerima Honorarium dan Imbalan Lain','R',0,'L');
$this->fpdf->Cell(3,0.5,"$penerima_20",'R',0,'C');
$this->fpdf->Cell(4.5,0.5,"$bruto_20",'R',0,'C');
$this->fpdf->Cell(4,0.5,"$pajak_20",'R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.5,'','LBR',0,'C');
$this->fpdf->Cell(7.3,0.5,'yang Dibebankan Kepada Keuangan Negara/Daerah','BR',0,'L');
$this->fpdf->Cell(3,0.5,'','BR',0,'C');
$this->fpdf->Cell(4.5,0.5,'','BR',0,'C');
$this->fpdf->Cell(4,0.5,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.85,'31','LR',0,'C');
$this->fpdf->Cell(7.3,0.5,'Jumlah Bagian C','R',0,'L');
$this->fpdf->Cell(3,0.85,'','R',0,'C');
$this->fpdf->Cell(4.5,0.85,'','R',0,'C');
$this->fpdf->Cell(4,0.85,'','R',0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.7,0.4,'','LBR',0,'C');
$this->fpdf->Cell(7.3,0.4,'(Penjumlahan Angka 29 s.d 30)','BR',0,'L');
$this->fpdf->Cell(3,0.4,'','BR',0,'C');
$this->fpdf->Cell(4.5,0.4,'','BR',0,'C');
$this->fpdf->Cell(4,0.4,'','BR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(19.6,0.7,"Bagian D - Lampiran",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.1,"",'TLBR',0,'C',1);
$this->fpdf->Cell(6.5,0.1,'','LR',0,'C');
$this->fpdf->Cell(6.5,0.1,'','R',0,'L');
$this->fpdf->Cell(6.5,0.1,'','R',0,'C');
$this->fpdf->Cell(0.05,0.1,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.1,0.5,'','L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,"$lampiran_a",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,'a)',0,0,'R');
$this->fpdf->Cell(2.6,0.5,'Surat Setoran Pajak',0,0,'L');
$this->fpdf->Cell(0.8,0.5,'','B',0,'L');
$this->fpdf->Cell(2,0.5,'Lembar',0,0,'L');
$this->fpdf->Cell(0.1,0.5,'','L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,"$lampiran_b",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,'b)',0,0,'R');
$this->fpdf->Cell(5.4,0.5,'Surat Setoran Pajak PPh Pasal 21 DTP','R',0,'L');
$this->fpdf->Cell(0.1,0.5,'','L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,"$lampiran_c",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.3,'C)',0,0,'R');
$this->fpdf->Cell(5.4,0.3,'Surat Kuasa Khusus/ Surat Keterangan',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(6.5,0.3,'','R',0,'R');
$this->fpdf->Cell(6.5,0.3,'','R',0,'R');
$this->fpdf->Cell(0.1,0.3,'','L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.3,'',0,0,'C');
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.3,'',0,0,'R');
$this->fpdf->Cell(5.4,0.1,'Kematian',0,0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.001,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(6.5,0.4,'','LR',0,'C');
$this->fpdf->Cell(6.5,0.4,'','R',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.6,0.4,'',0,0,'C');
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,'f)',0,0,'R');
$this->fpdf->Cell(5.4,0.5,'Formulir 1721 - I','R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.1,0.5,'','L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,"$lampiran_d",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.4,'d)',0,0,'R');
$this->fpdf->Cell(5.4,0.4,'Daftar Bukti Pemotongan Pajak','R',0,'L');
$this->fpdf->Cell(0.1,0.5,'','L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,"$lampiran_e",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.4,'e)',0,0,'R');
$this->fpdf->Cell(5.4,0.4,'Daftar Bukti Pemotongan Pajak','R',0,'L');
$this->fpdf->Cell(0.1,0.5,'','L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,"$lampiran_f",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.3,'',0,0,'R');
$this->fpdf->SetFont('Times','BI',8.5);
$this->fpdf->Cell(5.4,0.4,'(Disampaikan hanya pada Masa','R',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.1,0.3,'',0,0,'R');
$this->fpdf->Cell(5,0.1,'Penghasilan Tidak Final',0,0,'L');
$this->fpdf->Cell(0.4,0.3,'','R',0,'L');
$this->fpdf->Cell(1.1,0.3,'',0,0,'R');
$this->fpdf->Cell(5,0.1,'Penghasilan Final',0,0,'L');
$this->fpdf->Cell(0.4,0.3,'','R',0,'L');
$this->fpdf->Cell(1.1,0.3,'',0,0,'R');
$this->fpdf->SetFont('Times','BI',8.5);
$this->fpdf->Cell(5.4,0.1,'Pajak  Desember)','R',0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.001,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(6.5,0.4,'','LR',0,'C');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.6,0.4,'',0,0,'C');
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.4,'h)',0,0,'R');
$this->fpdf->Cell(5.4,0.4,'Daftar Biaya untuk Wajib Pajak yang','R',0,'L');
$this->fpdf->Cell(6.5,0.4,'','R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.1,0.5,'','L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,"$lampiran_g",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.4,'g)',0,0,'R');
$this->fpdf->Cell(5.4,0.4,'Formulir 1721 - II','R',0,'L');
$this->fpdf->Cell(0.1,0.5,'','L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,"$lampiran_h",'TLBR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.4,'',0,0,'R');
$this->fpdf->Cell(5.4,0.4,'Tidak Wajib Menyampaikan SPT','R',0,'L');
$this->fpdf->Cell(0.1,0.5,'','L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,'','TLBR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,'i)',0,0,'R');
$this->fpdf->Cell(5.4,0.5,'','R',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.1,0.3,'',0,0,'R');
$this->fpdf->SetFont('Times','BI',8.5);
$this->fpdf->Cell(5,0.1,'(Disampaikan hanya pada Masa Pajak',0,0,'L');
$this->fpdf->Cell(0.4,0.3,'','R',0,'L');
$this->fpdf->Cell(1.1,0.3,'',0,0,'R');
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(2.5,0.1,'Tahunan PPh Badan',0,0,'L');
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(2.5,0.1,'(Disampaikan',0,0,'L');
$this->fpdf->Cell(0.4,0.3,'','R',0,'L');
$this->fpdf->Cell(1.1,0.3,'',0,0,'R');
$this->fpdf->Cell(5.4,0.1,'','R',0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.1,0.3,'',0,0,'R');
$this->fpdf->SetFont('Times','BI',8.5);
$this->fpdf->Cell(5,0.2,'terjadi perubahan Pegawai Tetap)',0,0,'L');
$this->fpdf->Cell(0.4,0.3,'','R',0,'L');
$this->fpdf->Cell(1.1,0.3,'',0,0,'R');
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(5,0.2,'hanya pada Masa Pajak Desember)',0,0,'L');
$this->fpdf->Cell(0.4,0.3,'','R',0,'L');
$this->fpdf->Cell(1.1,0.3,'',0,0,'R');
$this->fpdf->Cell(5.4,0.2,'','R',0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.001,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(19.6,0.7,"Bagian E - Pernyataan dan Tanda Tangan",0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14,0.4,"Dengan   menyadari   sepenuhnya  akan  segala   akibatnya   termasuk   sanksi - sanksi   sesuai   dengan   ketentuan",'LR',0,'L');
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.5,"",'R',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14,0.4,"perundang-undangan  yang  berlaku,  saya  menyatakan  bahwa  apa  yang  telah  saya  beritahukan  di atas  beserta",'LR',0,'L');
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.45,"Diisi oleh Petugas",'R',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14,0.4,"lampiran-lampirannya  adalah  benar,  lengkap  dan  jelas.",'LBR',0,'L');
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.4,"",'BR',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14,0.2,"",'LR',0,'L');
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.3,"",'R',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.1,0.5,"",'L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,"",'TLBR',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.5,"PEMOTONG PAJAK (PIMPINAN)",0,0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.5,"",'TLBR',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(7.4,0.5,"Kuasa Wajib Pajak",'R',0,'L');
$this->fpdf->SetFont('Times','',10);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.6,"SPT Masa Diterima:",'R',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14,0.2,"",'LBR',0,'L');
$this->fpdf->SetFont('Times','',10);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.3,"",'R',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.4,0.2,"",'LR',0,'L');
$this->fpdf->Cell(12.6,0.2,"",'LR',0,'L');
$this->fpdf->SetFont('Times','',10);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.8,"",0,0,'L',1);
$this->fpdf->Cell(0.6,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.4,0.8,"Langsung dari WP",'R',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.4,0.5,"Nama",'LR',0,'C');
$this->fpdf->SetFont('Times','B',10);
$this->fpdf->Cell(0.2,0.5,"",'L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 0, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 1, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 3, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 4, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 5, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 6, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 7, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 8, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 9, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 10, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 11, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 12, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 13, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 14, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 15, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 16, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 17, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 18, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 19, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 20, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 21, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 22, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 23, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 24, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 25, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($nama_pemilik, 26, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.25,0.5,"",'R',0,'L');
$this->fpdf->SetFont('Times','',10);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.5,"",'R',0,'L');
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.4,0.2,"",'LBR',0,'C');
$this->fpdf->Cell(12.6,0.2,"",'LBR',0,'L');
$this->fpdf->SetFont('Times','',10);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.3,"",'R',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.4,0.2,"",'LR',0,'C');
$this->fpdf->Cell(12.6,0.2,"",'LR',0,'L');
$this->fpdf->SetFont('Times','',10);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.5,0.8,"",0,0,'L',1);
$this->fpdf->Cell(0.6,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.4,0.8,"Melalui Pos",'R',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.4,0.5,"NPWP",'LR',0,'C');
$this->fpdf->SetFont('Times','B',10);
$this->fpdf->Cell(0.2,0.5,"",'L',0,'L');
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 0, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 1, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,".",0,0,'C');
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,".",0,0,'C');
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,".",0,0,'C');
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,"-",0,0,'C');
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,".",0,0,'C');
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(0.45,0.5,substr($npwp_pemilik, 2, 1),'TLBR',0,'C',1);
$this->fpdf->Cell(3.4,0.5,"",'R',0,'L');
$this->fpdf->SetFont('Times','',10);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.5,"",'R',0,'L');
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.4,0.2,"",'LBR',0,'C');
$this->fpdf->Cell(12.6,0.2,"",'LBR',0,'L');
$this->fpdf->SetFont('Times','',10);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(5.5,0.2,"",'BR',0,'L',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.4,"Tanda Tangan",'LR',0,'L');
$this->fpdf->Cell(7,0.4,"Tanggal (dd/mm/yyyy)",'LR',0,'L');
$this->fpdf->SetFont('Times','',7);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.45,"Tanggal (dd/mm/yyyy)",'R',0,'C',1);
$this->fpdf->Cell(3,0.45,"Tanda Tangan",'R',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,1,"",'LR',0,'L');
$this->fpdf->Cell(7,1,"",'LR',0,'L');
$this->fpdf->SetFont('Times','',7);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,1,"",'R',0,'C',1);
$this->fpdf->Cell(3,1,"",'R',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.2,"",'LR',0,'L');
$this->fpdf->Cell(0.2,0.2,"",'L',0,'L');
$this->fpdf->Cell(0.5,0.2,"",'B',0,'L');
$this->fpdf->Cell(0.2,0.2,"/",0,0,'L');
$this->fpdf->Cell(0.5,0.2,"",'B',0,'L');
$this->fpdf->Cell(0.2,0.2,"/",0,0,'L');
$this->fpdf->Cell(1,0.2,"",'B',0,'L');
$this->fpdf->Cell(4.4,0.2,"",'R',0,'L');
$this->fpdf->SetFont('Times','',7);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.15,0.25,"",'L',0,'L',1);
$this->fpdf->Cell(0.5,0.2,"",'B',0,'L',1);
$this->fpdf->Cell(0.2,0.25,"/",0,0,'L',1);
$this->fpdf->Cell(0.5,0.2,"",'B',0,'L',1);
$this->fpdf->Cell(0.2,0.25,"/",0,0,'L',1);
$this->fpdf->Cell(0.8,0.2,"",'B',0,'L',1);
$this->fpdf->Cell(0.15,0.25,"",'R',0,'L',1);
$this->fpdf->Cell(3,0.25,"",'R',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.1,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.1,"",'LR',0,'L');
$this->fpdf->Cell(7,0.1,"",'R',0,'L');
$this->fpdf->SetFont('Times','',10);
$this->fpdf->SetFillColor(150,150,150);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(2.5,0.1,"",'R',0,'C',1);
$this->fpdf->Cell(3,0.1,"",'R',0,'C',1);
$this->fpdf->SetFillColor(0,0,0);
$this->fpdf->SetTextColor(0);
$this->fpdf->Cell(0.05,0.1,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln(0.2);
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,"TARIF PPh PASAL 21 MENGGUNAKAN TARIF PASAL 17 UU PPh",'LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"Dalam  ketentuan  baru  ini,  tarif  pemotongan  PPh  Pasal 21  adalah  dengan  menggunakan  tarif  Pasal 17  ayat (1)  huruf a  UU  PPh  atas  penghasilan  yang",'LR',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"diterima  oleh:",'LR',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"1.",'L',0,'L');
$this->fpdf->Cell(19,0.4,"Pegawai tetap.",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"2.",'L',0,'L');
$this->fpdf->Cell(19,0.4,"Penerima pensiun yang dibayarkan secara bulanan.",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"3.",'L',0,'L');
$this->fpdf->Cell(19,0.4,"Pegawai tidak tetap atau tenaga kerja lepas yang dibayarkan secara bulanan.",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"4.",'L',0,'L');
$this->fpdf->Cell(19,0.4,"Pegawai  tidak  tetap  atau  tenaga  kerja  lepas  berupa  upah  harian,  upah  mingguan,  upah  satuan,  upah  borongan  dan  uang  saku  harian  yang  tidak",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"",'L',0,'L');
$this->fpdf->Cell(19,0.4,"dibayarkan  secara  bulanan.",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"5.",'L',0,'L');
$this->fpdf->Cell(19,0.4,"Bukan pegawai yang menerima pembayaran yang bersifat tidak berkesinambungan.",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"6.",'L',0,'L');
$this->fpdf->Cell(19,0.4,"Peserta kegiatan setiap kali menerima pembayaran yang bersifat utuh dan tidak dipecah.",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"7.",'L',0,'L');
$this->fpdf->Cell(19,0.4,"Bukan pegawai yang menerima imbalan yang berkesinambungan.",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"8.",'L',0,'L');
$this->fpdf->Cell(19,0.4,"Anggota  dewan  komisaris  atau  dewan  pengawas  yang  tidak  merangkap  sebagai  pegawai  tetap  yang  menerima  atau  memperoleh  honorarium  atau",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"",'L',0,'L');
$this->fpdf->Cell(19,0.4,"imbalan yang bersifat tidak teratur.",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"9.",'L',0,'L');
$this->fpdf->Cell(19,0.4,"Mantan pegawai yang menerima atau memperoleh jasa produksi, tantiem, gratifikasi, bonus atau imbalan lain yang bersifat tidak teratur.",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.5,0.4,"10.",'L',0,'L');
$this->fpdf->Cell(19,0.4,"Peserta program pensiun yang berstatus sebagai pegawai yang melakukan penarikan Dana Pensiun.",'R',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"(Pasal 13, 14, 15 dan 16 PMK 252/PMK.03/2008)",'LR',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.3,"",'LR',0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,"PTKP BAGI PENERIMA PENGHASILAN BUKAN PEGAWAI",'LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"PTKP  Bagi  orang  pribadi  bukan  Pegawai  seperti  petugas  dinas  luar  asuransi  yang  tidak  berstatus  sebagai  pegawai,  distributor MLM atau direct selling,",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"penjaja  barang  dagangan yang  tidak  berstatus  pegawai  atau  penerima  penghasilan  lainnya  yang menerima penghasilan  dari pemotong PPh Pasal 21 secara",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"berkesinambungan.",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"Syarat  bagi  penerima  penghasilan  bukan  pegawai  untuk  mendapatkan  pengurangan  PTKP  yaitu   orang   pribadi   bukan   pegawai   penerima  penghasilan",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"tersebut  harus  memiliki  NPWP  (untuk wanita kawin, maka suaminya harus memiliki NPWP)  dan  memberikan  fotokopi  kartu  NPWP  miliknya  (atau milik",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"suaminya, bagi wanita kawin)  kepada  pemotong  PPh  Pasal  21. (Pasal 12 PMK 252/PMK.03/2008).",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.3,"",'LR',0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,"BIAYA JABATAN",'LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"Biaya Jabatan  ditetapkan sebesar 5% dari penghasilan bruto dengan jumlah setinggi-tingginya Rp 6.000.000,00 setahun atau Rp 500.000,00 sebulan.",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"Biaya Pensiun ditetapkan sebesar 5% dari penghasilan bruto dengan jumlah setinggi-tingginya Rp 2.400.000,00 setahun atau Rp 200.000,00 sebulan.",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"(Pasal 1 PMK 250/PMK.03/2008)",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.3,"",'LR',0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,"BATAS UPAH HARIAN YANG TIDAK DIPOTONG PPh PASAL 21",'LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"Batas  penghasilan  bruto  yang  diterima  atau diperoleh  pegawai  harian,  mingguan  dan pegawai  tidak  tetap  lainnya  sampai  dengan  jumlah Rp 150.000,00",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"sehari tidak dipotong  PPh  Pasal 21.  Namun  ketentuan ini tidak  berlaku  jika  penghasilan  bruto ini telah  melebihi Rp 1.320.000,00 (jika upah harian tersebut",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"diakumulasikan selama sebulan) atau jika penghasilan upah  harian  ini  dibayarkan  secara  bulanan. (Pasal 1 dan Pasal 2 PMK 254/PMK.03/2008).",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.3,"",'LR',0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',8.5);
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,"PEMOTONGAN PPh PASAL 21 YANG TIDAK MEMILIKI NPWP",'LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8.5);
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"Atas  penghasilan  yang  dibayarkan  kepada  pegawai dan bukan  pegawai  yang tidak memiliki NPWP,  dikenakan Pemotongan PPh Pasal 21 dengan tarif yang",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"lebih  tinggi  20%  daripada  tarif  yang  diterapkan  dalam  PPh  Pasal 21,  sehingga jumlah PPh yang dipotong tarifnya menjadi 120% dari jumlah PPh Pasal 21",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"yang  seharusnya  dipotong.  Pemotongan  tersebut  hanya  berlaku  untuk  pemotongan  PPh  Pasal 21 yang bersifat  tidak  final.",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.4,"(Pasal 20 PMK 252/PMK.03/2008).",'LR',0,'J');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Output("SPT.pdf","I");
?>
