<?php

	$npwp = $wajib_pajak_data['npwp'];
	$nama = $wajib_pajak_data['nama'];
	$alamat = $wajib_pajak_data['alamat'];
	$kota = $wajib_pajak_data['kota'];
	$bulan = $laporan_data['bulan'];
	$tahun = $laporan_data['tahun'];
	$jenis_pajak = $laporan_data['jenis_pajak'];
	$kode_setoran = $laporan_data['kode_setoran'];
	$keterangan = $laporan_data['keterangan'];
	$jumlah = $laporan_data['jumlah'];
	$terbilang = $laporan_data['terbilang'];
	$sekarang = date("j").' '.nama_bulan(date("m")).' '.date("Y");

$this->fpdf->SetMargins(1,1,1);
$this->fpdf->SetAutoPageBreak(true,1);
$this->fpdf->Open();
$this->fpdf->AliasNbPages();
$this->fpdf->AddPage();

$this->fpdf->Ln(1.2);
$this->fpdf->Image('images/laporan/logo_pajak.jpg',0.8,1.65,1.8,1.8);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.5,'DEPARTEMEN KEUANGAN R.I',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(5.3,0.5,'SURAT SETORAN PAJAK',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.5,'',0,0,'L');
$this->fpdf->Image('images/laporan/1.jpg',17.4,1.65,1,1.3);

$this->fpdf->Ln(0.4);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.5,'DIREKTORAT JENDERAL PAJAK',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',24);
$this->fpdf->Cell(5.3,0.5,'',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.5,'              LEMBAR',0,0,'L');

$this->fpdf->Ln(0.4);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.85,'','R','L');
$this->fpdf->Cell(0.05,0.85,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',24);
$this->fpdf->Cell(5.3,0.85,'(SSP)',0,0,'C');
$this->fpdf->Cell(0.05,0.85,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.85,'              Untuk Arsip WP',0,0,'L');

$this->fpdf->Ln(0.8);
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.25,'','LR','L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'NPWP','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);

$this->fpdf->Cell(0.7,0.7,substr($npwp, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 2, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 3, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 4, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 5, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 6, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 7, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 8, 1),'LBR',0,'C');
$this->fpdf->Cell(0.5,0.7,"-",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 9, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 10, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 11, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 12, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 13, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 14, 1),'BR',0,'C');
$this->fpdf->Cell(2.5,0.7,"",'R',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki','LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'NAMA WP','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,"$nama",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'ALAMAT','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,"$alamat",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'','L',0,'L');
$this->fpdf->Cell(0.5,0.7,'',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,'','R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.7,"MAP/Kode Jenis Pajak",'L',0,'L');
$this->fpdf->Cell(3.75,0.7,"Kode Jenis Setoran",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,"Uraian Pembayaran",'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.3,"",0,0,'L');
$this->fpdf->Cell(3.75,0.3,'',0,0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.3,substr($keterangan, 0, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.2,0.7,"",'L',0,'L');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 2, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 3, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 4, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 5, 1),'BR',0,'C');
$this->fpdf->Cell(1.55,0.7,"",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 2, 1),'BR',0,'C');
$this->fpdf->Cell(1,0.7,"",0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,substr($keterangan, 58, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.7,'','L',0,'L');
$this->fpdf->Cell(3.75,0.7,'','R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,substr($keterangan, 116, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14.4,0.7,'Masa Pajak','L',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',13);
$this->fpdf->Cell(5.05,0.7,'Tahun','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.2,1,'Jan','TLBR',0,'C');
$this->fpdf->Cell(1.2,1,'Peb','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Mar','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Apr','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Mei','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Jun','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Jul','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Ags','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Sep','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Okt','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Nop','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Des','TBR',0,'C');
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(1.2,0.7,"",'L',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 2, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 3, 1),'BR',0,'C');
$this->fpdf->Cell(1.05,0.7,'',0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+14.5);
$this->fpdf->Cell(5.05,0.3,'Diisi tahun terutangnya pajak','LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14.4,0.4,'Beri tanda silang pada salah satu kolom bulan untuk masa yang berkenaan','LR',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(5.05,0.4,'','LR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'Nomor Ketetapan','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(3,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT','LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.7,'Jumlah Pembayaran','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(2.15,0.7,'Terbilang',0,0,'C');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->Cell(9.8,0.7,'',0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.2,'Diisi dengan rupiah penuh','LR',0,'L');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(12.45,0.2,substr($terbilang, 0, 70),'LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.7,"Rp $jumlah",'LR',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.7,substr($terbilang, 70, 70),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Diterima oleh Kantor Penerima Pembayaran','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.7,'Wajib Pajak/Penyetor','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Tanggal ...................','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.7,"$kota, tgl $sekarang",'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.2,'Cap dan tanda tangan','LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.2,'Cap dan tanda tangan','LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,2,'','LR',0,'C');
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,2,'','LR',0,'C');
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(2.5,0.7,'Nama Jelas','L',0,'C');
$this->fpdf->Cell(0.2,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(7.3,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(2.5,0.7,'Nama Jelas','L',0,'C');
$this->fpdf->Cell(0.2,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.75,0.7,"$nama",0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.7,'Ruang Validasi Kantor Penerima Pembayaran','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.7,'','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,1.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,1.5,'','L',0,'L');
$this->fpdf->Cell(0.05,1.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln(0.2);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai buku petunjuk pengisian',0,0,'L');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(19.5,0.5,'F.2.0.32.01',0,0,'L');

$this->fpdf->AddPage();

$this->fpdf->Ln(1.2);
$this->fpdf->Image('images/laporan/logo_pajak.jpg',0.8,1.65,1.8,1.8);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.5,'DEPARTEMEN KEUANGAN R.I',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(5.3,0.5,'SURAT SETORAN PAJAK',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.5,'',0,0,'L');
$this->fpdf->Image('images/laporan/2.jpg',17.4,1.65,1,1.3);

$this->fpdf->Ln(0.4);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.5,'DIREKTORAT JENDERAL PAJAK',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',24);
$this->fpdf->Cell(5.3,0.5,'',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.5,'              LEMBAR',0,0,'L');

$this->fpdf->Ln(0.4);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.85,'','R','L');
$this->fpdf->Cell(0.05,0.85,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',24);
$this->fpdf->Cell(5.3,0.85,'(SSP)',0,0,'C');
$this->fpdf->Cell(0.05,0.85,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.85,'              Untuk KPP melalui KPPN',0,0,'L');

$this->fpdf->Ln(0.8);
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.25,'','LR','L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'NPWP','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);

$this->fpdf->Cell(0.7,0.7,substr($npwp, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 2, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 3, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 4, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 5, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 6, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 7, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 8, 1),'LBR',0,'C');
$this->fpdf->Cell(0.5,0.7,"-",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 9, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 10, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 11, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 12, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 13, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 14, 1),'BR',0,'C');
$this->fpdf->Cell(2.5,0.7,"",'R',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki','LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'NAMA WP','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,"$nama",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'ALAMAT','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,"$alamat",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'','L',0,'L');
$this->fpdf->Cell(0.5,0.7,'',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,'','R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.7,"MAP/Kode Jenis Pajak",'L',0,'L');
$this->fpdf->Cell(3.75,0.7,"Kode Jenis Setoran",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,"Uraian Pembayaran",'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.3,"",0,0,'L');
$this->fpdf->Cell(3.75,0.3,'',0,0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.3,substr($keterangan, 0, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.2,0.7,"",'L',0,'L');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 2, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 3, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 4, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 5, 1),'BR',0,'C');
$this->fpdf->Cell(1.55,0.7,"",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 2, 1),'BR',0,'C');
$this->fpdf->Cell(1,0.7,"",0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,substr($keterangan, 58, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.7,'','L',0,'L');
$this->fpdf->Cell(3.75,0.7,'','R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,substr($keterangan, 116, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14.4,0.7,'Masa Pajak','L',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',13);
$this->fpdf->Cell(5.05,0.7,'Tahun','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.2,1,'Jan','TLBR',0,'C');
$this->fpdf->Cell(1.2,1,'Peb','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Mar','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Apr','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Mei','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Jun','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Jul','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Ags','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Sep','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Okt','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Nop','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Des','TBR',0,'C');
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(1.2,0.7,"",'L',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 2, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 3, 1),'BR',0,'C');
$this->fpdf->Cell(1.05,0.7,'',0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+14.5);
$this->fpdf->Cell(5.05,0.3,'Diisi tahun terutangnya pajak','LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14.4,0.4,'Beri tanda silang pada salah satu kolom bulan untuk masa yang berkenaan','LR',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(5.05,0.4,'','LR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'Nomor Ketetapan','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(3,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT','LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.7,'Jumlah Pembayaran','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(2.15,0.7,'Terbilang',0,0,'C');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->Cell(9.8,0.7,'',0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.2,'Diisi dengan rupiah penuh','LR',0,'L');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(12.45,0.2,substr($terbilang, 0, 70),'LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.7,"Rp $jumlah",'LR',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.7,substr($terbilang, 70, 70),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Diterima oleh Kantor Penerima Pembayaran','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.7,'Wajib Pajak/Penyetor','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Tanggal ...................','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.7,"$kota, tgl $sekarang",'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.2,'Cap dan tanda tangan','LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.2,'Cap dan tanda tangan','LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,2,'','LR',0,'C');
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,2,'','LR',0,'C');
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(2.5,0.7,'Nama Jelas','L',0,'C');
$this->fpdf->Cell(0.2,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(7.3,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(2.5,0.7,'Nama Jelas','L',0,'C');
$this->fpdf->Cell(0.2,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.75,0.7,"$nama",0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.7,'Ruang Validasi Kantor Penerima Pembayaran','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.7,'','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,1.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,1.5,'','L',0,'L');
$this->fpdf->Cell(0.05,1.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln(0.2);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai buku petunjuk pengisian',0,0,'L');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(19.5,0.5,'F.2.0.32.01',0,0,'L');

$this->fpdf->AddPage();

$this->fpdf->Ln(1.2);
$this->fpdf->Image('images/laporan/logo_pajak.jpg',0.8,1.65,1.8,1.8);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.5,'DEPARTEMEN KEUANGAN R.I',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(5.3,0.5,'SURAT SETORAN PAJAK',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.5,'              LEMBAR',0,0,'L');
$this->fpdf->Image('images/laporan/3.jpg',17.4,1.35,1,1.3);

$this->fpdf->Ln(0.4);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.5,'DIREKTORAT JENDERAL PAJAK',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',24);
$this->fpdf->Cell(5.3,0.5,'',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.8,'              Untuk dilaporkan',0,0,'L');

$this->fpdf->Ln(0.4);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.85,'','R','L');
$this->fpdf->Cell(0.05,0.85,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',24);
$this->fpdf->Cell(5.3,0.85,'(SSP)',0,0,'C');
$this->fpdf->Cell(0.05,0.85,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.85,'              Oleh WP ke KPP',0,0,'L');

$this->fpdf->Ln(0.8);
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.25,'','LR','L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'NPWP','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);

$this->fpdf->Cell(0.7,0.7,substr($npwp, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 2, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 3, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 4, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 5, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 6, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 7, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 8, 1),'LBR',0,'C');
$this->fpdf->Cell(0.5,0.7,"-",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 9, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 10, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 11, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 12, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 13, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 14, 1),'BR',0,'C');
$this->fpdf->Cell(2.5,0.7,"",'R',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki','LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'NAMA WP','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,"$nama",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'ALAMAT','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,"$alamat",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'','L',0,'L');
$this->fpdf->Cell(0.5,0.7,'',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,'','R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.7,"MAP/Kode Jenis Pajak",'L',0,'L');
$this->fpdf->Cell(3.75,0.7,"Kode Jenis Setoran",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,"Uraian Pembayaran",'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.3,"",0,0,'L');
$this->fpdf->Cell(3.75,0.3,'',0,0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.3,substr($keterangan, 0, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.2,0.7,"",'L',0,'L');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 2, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 3, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 4, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 5, 1),'BR',0,'C');
$this->fpdf->Cell(1.55,0.7,"",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 2, 1),'BR',0,'C');
$this->fpdf->Cell(1,0.7,"",0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,substr($keterangan, 58, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.7,'','L',0,'L');
$this->fpdf->Cell(3.75,0.7,'','R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,substr($keterangan, 116, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14.4,0.7,'Masa Pajak','L',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',13);
$this->fpdf->Cell(5.05,0.7,'Tahun','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.2,1,'Jan','TLBR',0,'C');
$this->fpdf->Cell(1.2,1,'Peb','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Mar','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Apr','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Mei','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Jun','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Jul','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Ags','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Sep','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Okt','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Nop','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Des','TBR',0,'C');
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(1.2,0.7,"",'L',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 2, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 3, 1),'BR',0,'C');
$this->fpdf->Cell(1.05,0.7,'',0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+14.5);
$this->fpdf->Cell(5.05,0.3,'Diisi tahun terutangnya pajak','LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14.4,0.4,'Beri tanda silang pada salah satu kolom bulan untuk masa yang berkenaan','LR',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(5.05,0.4,'','LR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'Nomor Ketetapan','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(3,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT','LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.7,'Jumlah Pembayaran','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(2.15,0.7,'Terbilang',0,0,'C');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->Cell(9.8,0.7,'',0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.2,'Diisi dengan rupiah penuh','LR',0,'L');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(12.45,0.2,substr($terbilang, 0, 70),'LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.7,"Rp $jumlah",'LR',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.7,substr($terbilang, 70, 70),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Diterima oleh Kantor Penerima Pembayaran','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.7,'Wajib Pajak/Penyetor','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Tanggal ...................','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.7,"$kota, tgl $sekarang",'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.2,'Cap dan tanda tangan','LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.2,'Cap dan tanda tangan','LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,2,'','LR',0,'C');
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,2,'','LR',0,'C');
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(2.5,0.7,'Nama Jelas','L',0,'C');
$this->fpdf->Cell(0.2,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(7.3,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(2.5,0.7,'Nama Jelas','L',0,'C');
$this->fpdf->Cell(0.2,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.75,0.7,"$nama",0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.7,'Ruang Validasi Kantor Penerima Pembayaran','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.7,'','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,1.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,1.5,'','L',0,'L');
$this->fpdf->Cell(0.05,1.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln(0.2);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai buku petunjuk pengisian',0,0,'L');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(19.5,0.5,'F.2.0.32.01',0,0,'L');

$this->fpdf->AddPage();

$this->fpdf->Ln(1.2);
$this->fpdf->Image('images/laporan/logo_pajak.jpg',0.8,1.65,1.8,1.8);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.5,'DEPARTEMEN KEUANGAN R.I',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(5.3,0.5,'SURAT SETORAN PAJAK',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.5,'              LEMBAR',0,0,'L');
$this->fpdf->Image('images/laporan/4.jpg',17.4,1.35,1,1.3);

$this->fpdf->Ln(0.4);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.5,'DIREKTORAT JENDERAL PAJAK',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',24);
$this->fpdf->Cell(5.3,0.5,'',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.8,'              Untuk Bank Persepsi/',0,0,'L');

$this->fpdf->Ln(0.4);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.85,'','R','L');
$this->fpdf->Cell(0.05,0.85,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',24);
$this->fpdf->Cell(5.3,0.85,'(SSP)',0,0,'C');
$this->fpdf->Cell(0.05,0.85,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.85,'              Kantor Pos & Giro',0,0,'L');

$this->fpdf->Ln(0.8);
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.25,'','LR','L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'NPWP','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);

$this->fpdf->Cell(0.7,0.7,substr($npwp, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 2, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 3, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 4, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 5, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 6, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 7, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 8, 1),'LBR',0,'C');
$this->fpdf->Cell(0.5,0.7,"-",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 9, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 10, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 11, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 12, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 13, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 14, 1),'BR',0,'C');
$this->fpdf->Cell(2.5,0.7,"",'R',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki','LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'NAMA WP','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,"$nama",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'ALAMAT','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,"$alamat",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'','L',0,'L');
$this->fpdf->Cell(0.5,0.7,'',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,'','R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.7,"MAP/Kode Jenis Pajak",'L',0,'L');
$this->fpdf->Cell(3.75,0.7,"Kode Jenis Setoran",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,"Uraian Pembayaran",'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.3,"",0,0,'L');
$this->fpdf->Cell(3.75,0.3,'',0,0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.3,substr($keterangan, 0, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.2,0.7,"",'L',0,'L');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 2, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 3, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 4, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 5, 1),'BR',0,'C');
$this->fpdf->Cell(1.55,0.7,"",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 2, 1),'BR',0,'C');
$this->fpdf->Cell(1,0.7,"",0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,substr($keterangan, 58, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.7,'','L',0,'L');
$this->fpdf->Cell(3.75,0.7,'','R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,substr($keterangan, 116, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14.4,0.7,'Masa Pajak','L',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',13);
$this->fpdf->Cell(5.05,0.7,'Tahun','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.2,1,'Jan','TLBR',0,'C');
$this->fpdf->Cell(1.2,1,'Peb','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Mar','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Apr','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Mei','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Jun','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Jul','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Ags','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Sep','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Okt','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Nop','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Des','TBR',0,'C');
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(1.2,0.7,"",'L',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 2, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 3, 1),'BR',0,'C');
$this->fpdf->Cell(1.05,0.7,'',0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+14.5);
$this->fpdf->Cell(5.05,0.3,'Diisi tahun terutangnya pajak','LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14.4,0.4,'Beri tanda silang pada salah satu kolom bulan untuk masa yang berkenaan','LR',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(5.05,0.4,'','LR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'Nomor Ketetapan','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(3,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT','LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.7,'Jumlah Pembayaran','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(2.15,0.7,'Terbilang',0,0,'C');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->Cell(9.8,0.7,'',0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.2,'Diisi dengan rupiah penuh','LR',0,'L');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(12.45,0.2,substr($terbilang, 0, 70),'LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.7,"Rp $jumlah",'LR',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.7,substr($terbilang, 70, 70),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Diterima oleh Kantor Penerima Pembayaran','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.7,'Wajib Pajak/Penyetor','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Tanggal ...................','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.7,"$kota, tgl $sekarang",'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.2,'Cap dan tanda tangan','LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.2,'Cap dan tanda tangan','LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,2,'','LR',0,'C');
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,2,'','LR',0,'C');
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(2.5,0.7,'Nama Jelas','L',0,'C');
$this->fpdf->Cell(0.2,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(7.3,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(2.5,0.7,'Nama Jelas','L',0,'C');
$this->fpdf->Cell(0.2,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.75,0.7,"$nama",0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.7,'Ruang Validasi Kantor Penerima Pembayaran','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.7,'','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,1.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,1.5,'','L',0,'L');
$this->fpdf->Cell(0.05,1.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln(0.2);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai buku petunjuk pengisian',0,0,'L');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(19.5,0.5,'F.2.0.32.01',0,0,'L');

$this->fpdf->AddPage();

$this->fpdf->Ln(1.2);
$this->fpdf->Image('images/laporan/logo_pajak.jpg',0.8,1.65,1.8,1.8);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.5,'DEPARTEMEN KEUANGAN R.I',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(5.3,0.5,'SURAT SETORAN PAJAK',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.5,'              LEMBAR',0,0,'L');
$this->fpdf->Image('images/laporan/5.jpg',17.4,1.35,1,1.3);

$this->fpdf->Ln(0.4);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.5,'DIREKTORAT JENDERAL PAJAK',0,0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',24);
$this->fpdf->Cell(5.3,0.5,'',0,0,'C');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.8,'              Untuk Arsip Wajib Pungut',0,0,'L');

$this->fpdf->Ln(0.4);
$this->fpdf->SetFont('Times','',10);
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+1.5);
$this->fpdf->Cell(5.7,0.85,'','R','L');
$this->fpdf->Cell(0.05,0.85,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',24);
$this->fpdf->Cell(5.3,0.85,'(SSP)',0,0,'C');
$this->fpdf->Cell(0.05,0.85,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.6,0.85,'              atau pihak lain',0,0,'L');

$this->fpdf->Ln(0.8);
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.25,'','LR','L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'NPWP','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);

$this->fpdf->Cell(0.7,0.7,substr($npwp, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 2, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 3, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 4, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 5, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 6, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 7, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 8, 1),'LBR',0,'C');
$this->fpdf->Cell(0.5,0.7,"-",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 9, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 10, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 11, 1),'BR',0,'C');
$this->fpdf->Cell(0.5,0.7,".",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 12, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 13, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($npwp, 14, 1),'BR',0,'C');
$this->fpdf->Cell(2.5,0.7,"",'R',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki','LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'NAMA WP','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,"$nama",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'ALAMAT','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,"$alamat",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'','L',0,'L');
$this->fpdf->Cell(0.5,0.7,'',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(15.5,0.7,'','R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.7,"MAP/Kode Jenis Pajak",'L',0,'L');
$this->fpdf->Cell(3.75,0.7,"Kode Jenis Setoran",'R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,"Uraian Pembayaran",'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.3,"",0,0,'L');
$this->fpdf->Cell(3.75,0.3,'',0,0,'L');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.3,substr($keterangan, 0, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(0.2,0.7,"",'L',0,'L');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 2, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 3, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 4, 1),'BR',0,'C');
$this->fpdf->Cell(0.6,0.7,substr($jenis_pajak, 5, 1),'BR',0,'C');
$this->fpdf->Cell(1.55,0.7,"",0,0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($kode_setoran, 2, 1),'BR',0,'C');
$this->fpdf->Cell(1,0.7,"",0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,substr($keterangan, 58, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(4.7,0.7,'','L',0,'L');
$this->fpdf->Cell(3.75,0.7,'','R',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(11,0.7,substr($keterangan, 116, 58),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14.4,0.7,'Masa Pajak','L',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',13);
$this->fpdf->Cell(5.05,0.7,'Tahun','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->Cell(1.2,1,'Jan','TLBR',0,'C');
$this->fpdf->Cell(1.2,1,'Peb','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Mar','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Apr','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Mei','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Jun','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Jul','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Ags','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Sep','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Okt','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Nop','TBR',0,'C');
$this->fpdf->Cell(1.2,1,'Des','TBR',0,'C');
$this->fpdf->Cell(0.05,1,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(1.2,0.7,"",'L',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 0, 1),'LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 1, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 2, 1),'BR',0,'C');
$this->fpdf->Cell(0.7,0.7,substr($laporan_data['tahun'], 3, 1),'BR',0,'C');
$this->fpdf->Cell(1.05,0.7,'',0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$y=$this->fpdf->GetX();
$this->fpdf->SetX($y+14.5);
$this->fpdf->Cell(5.05,0.3,'Diisi tahun terutangnya pajak','LR',0,'C');
$this->fpdf->Cell(0.05,0.3,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(14.4,0.4,'Beri tanda silang pada salah satu kolom bulan untuk masa yang berkenaan','LR',0,'L');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);
$this->fpdf->Cell(5.05,0.4,'','LR',0,'C');
$this->fpdf->Cell(0.05,0.4,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(3.5,0.7,'Nomor Ketetapan','L',0,'L');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(0.5,0.7,'/',0,0,'C');
$this->fpdf->Cell(0.7,0.7,'','LBR',0,'C');
$this->fpdf->Cell(0.7,0.7,'','BR',0,'C');
$this->fpdf->Cell(3,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT','LR',0,'L');
$this->fpdf->Cell(0.05,0.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.7,'Jumlah Pembayaran','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(2.15,0.7,'Terbilang',0,0,'C');
$this->fpdf->Cell(0.5,0.7,':',0,0,'C');
$this->fpdf->Cell(9.8,0.7,'',0,0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.2,'Diisi dengan rupiah penuh','LR',0,'L');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(12.45,0.2,substr($terbilang, 0, 70),'LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.25,'','LR',0,'L');
$this->fpdf->Cell(0.05,0.25,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(7,0.7,"Rp $jumlah",'LR',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(12.45,0.7,substr($terbilang, 70, 70),'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Diterima oleh Kantor Penerima Pembayaran','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.7,'Wajib Pajak/Penyetor','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.7,'Tanggal ...................','LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.7,"$kota, tgl $sekarang",'LR',0,'C');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln();
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,0.2,'Cap dan tanda tangan','LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,0.2,'Cap dan tanda tangan','LR',0,'C');
$this->fpdf->Cell(0.05,0.2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(10,2,'','LR',0,'C');
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);
$this->fpdf->Cell(9.45,2,'','LR',0,'C');
$this->fpdf->Cell(0.05,2,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(2.5,0.7,'Nama Jelas','L',0,'C');
$this->fpdf->Cell(0.2,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(7.3,0.7,'',0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(2.5,0.7,'Nama Jelas','L',0,'C');
$this->fpdf->Cell(0.2,0.7,':',0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6.75,0.7,"$nama",0,0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.7,'Ruang Validasi Kantor Penerima Pembayaran','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,0.7,'','L',0,'L');
$this->fpdf->Cell(0.05,0.7,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(0.05,1.5,"",'TLBR',0,'C',1);
$this->fpdf->Cell(19.5,1.5,'','L',0,'L');
$this->fpdf->Cell(0.05,1.5,"",'TLBR',0,'C',1);

$this->fpdf->Ln();
$this->fpdf->Cell(19.6,0.05,"",'TLBR',0,'C',1);

$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Ln(0.2);
$this->fpdf->Cell(19.5,0.5,'Diisi sesuai buku petunjuk pengisian',0,0,'L');

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(19.5,0.5,'F.2.0.32.01',0,0,'L');

$this->fpdf->Output("Surat_Setoran_Pajak.pdf","I");
?>
