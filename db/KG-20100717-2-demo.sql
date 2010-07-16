-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: kg
-- ------------------------------------------------------
-- Server version	5.1.41-3ubuntu12.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `akun`
--

DROP TABLE IF EXISTS `akun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `akun` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL DEFAULT '',
  `kode` varchar(5) NOT NULL DEFAULT '',
  `kelompok_akun_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pajak` tinyint(1) NOT NULL DEFAULT '1',
  `saldo_awal` bigint(20) NOT NULL DEFAULT '0',
  `saldo` bigint(20) NOT NULL DEFAULT '0',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kelompok_akun_id` (`kelompok_akun_id`),
  CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`kelompok_akun_id`) REFERENCES `kelompok_akun` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `akun`
--

LOCK TABLES `akun` WRITE;
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT INTO `akun` VALUES (2,'Kas','101',1,1,-100000,38200000,'aktiva lancar'),(3,'Sewa Dibayar Dimuka','102',1,1,-150000,5400000,'aktiva'),(4,'Perlengkapan','103',1,1,0,4800000,'aktiva'),(5,'Peralatan','104',1,1,300000,9700000,'aktiva'),(6,'Akumulasi Penyusutan Peralatan','105',1,1,0,300000,'aktiva'),(7,'Modal','301',3,1,-50000,-56500000,'modal'),(8,'Pendapatan Proyek','401',4,1,0,-4000000,'pendapatan'),(9,'Beban Gaji','501',5,1,0,0,'biaya'),(10,'Beban Upah','502',5,1,0,0,'biaya'),(11,'Beban Transportasi','503',5,1,0,100000,'biaya'),(12,'Beban Konsumsi','504',5,1,0,0,'biaya\n'),(13,'Beban Telpon','505',5,1,0,0,'biaya'),(14,'Beban Internet','506',5,1,0,0,'biaya'),(15,'Beban Sewa','507',5,1,0,0,'biaya'),(16,'Beban Perlengkapan','508',5,1,0,0,'biaya'),(17,'Ikhtisar Laba Rugi','302',3,0,0,0,'Ikhtisar Laba Rugi'),(18,'Bank Nasional','106',1,1,0,2000000,'Akun Bank Nasional');
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f`
--

DROP TABLE IF EXISTS `f`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `f` (
  `id` tinyint(3) unsigned NOT NULL,
  `nama` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f`
--

LOCK TABLES `f` WRITE;
/*!40000 ALTER TABLE `f` DISABLE KEYS */;
INSERT INTO `f` VALUES (1,'Jurnal Umum'),(2,'Jurnal Penyesuaian'),(3,'Jurnal Penutup');
/*!40000 ALTER TABLE `f` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurnal`
--

DROP TABLE IF EXISTS `jurnal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurnal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no` varchar(20) NOT NULL DEFAULT '',
  `tgl` date NOT NULL DEFAULT '0000-00-00',
  `f_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `keterangan` text NOT NULL,
  `proyek_id` int(10) unsigned DEFAULT NULL,
  `login_id` int(10) unsigned NOT NULL DEFAULT '0',
  `waktu_post` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `f_id` (`f_id`),
  KEY `proyek_id` (`proyek_id`),
  CONSTRAINT `jurnal_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `f` (`id`),
  CONSTRAINT `jurnal_ibfk_2` FOREIGN KEY (`proyek_id`) REFERENCES `proyek` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurnal`
--

LOCK TABLES `jurnal` WRITE;
/*!40000 ALTER TABLE `jurnal` DISABLE KEYS */;
INSERT INTO `jurnal` VALUES (1,'1','2010-05-03',1,'Setoran modal pemilik',NULL,1,'2010-05-10 08:47:54'),(2,'2','2010-05-04',1,'Sewa tempat usaha 1 tahun',NULL,1,'2010-05-10 08:50:43'),(3,'3','2010-05-04',1,'Membeli perlengkapan kantor',NULL,1,'2010-05-10 08:52:30'),(4,'4','2010-05-04',1,'Membeli peralatan kantor',NULL,1,'2010-05-10 08:56:37'),(5,'5','2010-05-05',1,'Menerima uang muka proyek aplikasi keuangan dari PT. ABC',NULL,1,'2010-05-10 09:00:23'),(6,'6','2010-05-05',1,'Salah menginput akun pendapatan proyek',NULL,1,'2010-05-10 09:04:13'),(7,'7','2010-05-04',1,'Menerima uang muka proyek aplikasi',1,1,'2010-05-10 10:17:30'),(8,'8','2010-05-06',1,'Membayar biaya konsultan',1,1,'2010-05-10 10:28:09'),(9,'9','2010-05-07',1,'Menerima uang muka proyek website',2,1,'2010-05-10 10:29:26'),(10,'10','2010-05-08',1,'Membayar biaya transportasi untuk proyek website',2,1,'2010-05-10 10:31:10'),(11,'11','2010-05-08',1,'Membayar biaya konsumsi untuk proyek website',2,1,'2010-05-10 10:33:36'),(12,'12','2010-05-10',1,'Menerima pembayaran kedua proyek website PT. Sinar Mas',2,1,'2010-05-10 10:49:14'),(13,'13','2010-05-12',1,'Menerima pelunasan proyek website PT. Sinar Mas',2,1,'2010-05-10 10:50:41'),(14,'14','2010-05-13',1,'Menerima pelunasan proyek aplikasi keuangan  PT. ABC',1,1,'2010-05-10 10:51:56'),(15,'15','2010-05-27',1,'Membayar gaji pegawai',NULL,1,'2010-05-10 10:54:31'),(16,'16','2010-05-28',1,'Membayar biaya telpon kantor',NULL,1,'2010-05-10 10:55:08'),(17,'17','2010-05-28',1,'Membayar biaya internet kantor',NULL,1,'2010-05-10 10:55:55'),(18,'18','2010-05-31',2,'Sewa tempat usaha',NULL,1,'2010-05-10 11:00:34'),(19,'19','2010-05-31',2,'Beban perlengkapan',NULL,1,'2010-05-10 11:02:20'),(20,'20','2010-05-31',1,'Akumulasi penyusutan peralatan',NULL,1,'2010-05-10 11:03:09'),(21,'21','2010-05-31',3,'Jurnal penutup bulan Mei',NULL,4,'2010-05-12 20:01:15'),(22,'22','2010-06-21',1,'Beban Transportasi ke Jakarta',NULL,1,'2010-06-21 17:43:48'),(23,'20100602','2010-07-02',1,'uang muka proyek SI',NULL,1,'2010-07-02 10:23:46'),(24,'20100602-koreksi2','2010-07-02',1,'salah nih harusnya di jurnal proyek',NULL,1,'2010-07-02 10:24:29'),(25,'20100602xx','2010-07-02',1,'uang muka SI',3,1,'2010-07-02 10:28:46');
/*!40000 ALTER TABLE `jurnal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurnal_detail`
--

DROP TABLE IF EXISTS `jurnal_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurnal_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jurnal_id` int(10) unsigned NOT NULL DEFAULT '0',
  `item` tinyint(3) NOT NULL DEFAULT '0',
  `akun_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `debit_kredit` tinyint(1) NOT NULL DEFAULT '1',
  `nilai` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `jurnal_id` (`jurnal_id`),
  KEY `akun_id` (`akun_id`),
  CONSTRAINT `jurnal_detail_ibfk_1` FOREIGN KEY (`jurnal_id`) REFERENCES `jurnal` (`id`),
  CONSTRAINT `jurnal_detail_ibfk_2` FOREIGN KEY (`akun_id`) REFERENCES `akun` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurnal_detail`
--

LOCK TABLES `jurnal_detail` WRITE;
/*!40000 ALTER TABLE `jurnal_detail` DISABLE KEYS */;
INSERT INTO `jurnal_detail` VALUES (1,1,1,2,1,50000000),(2,1,2,7,0,50000000),(3,2,1,3,1,6000000),(4,2,2,2,0,6000000),(5,3,1,4,1,5000000),(6,3,2,2,0,5000000),(7,4,1,5,1,10000000),(8,4,2,2,0,10000000),(9,5,1,2,1,4000000),(10,5,2,8,0,4000000),(11,6,1,2,0,4000000),(12,6,2,8,1,4000000),(13,7,1,2,1,4000000),(14,7,2,8,0,4000000),(15,8,1,10,1,1500000),(16,8,2,2,0,1500000),(17,9,1,2,1,3000000),(18,9,2,8,0,3000000),(19,10,1,11,1,300000),(20,10,2,2,0,300000),(21,11,1,12,1,200000),(22,11,2,2,0,200000),(23,12,1,2,1,1000000),(24,12,2,8,0,1000000),(25,13,1,2,1,2000000),(26,13,2,8,0,2000000),(27,14,1,2,1,4000000),(28,14,2,8,0,4000000),(29,15,1,9,1,4000000),(30,15,2,2,0,4000000),(31,16,1,13,1,300000),(32,16,2,2,0,300000),(33,17,1,14,1,500000),(34,17,2,2,0,500000),(35,18,1,15,1,500000),(36,18,2,3,0,500000),(37,19,1,16,1,200000),(38,19,2,4,0,200000),(39,20,1,6,1,300000),(40,20,2,5,0,300000),(41,21,1,8,1,14000000),(42,21,2,17,0,14000000),(43,21,3,9,0,4000000),(44,21,4,10,0,1500000),(45,21,5,11,0,300000),(46,21,6,12,0,200000),(47,21,7,13,0,300000),(48,21,8,14,0,500000),(49,21,9,15,0,500000),(50,21,10,16,0,200000),(51,21,11,17,1,7500000),(52,21,12,17,1,6500000),(53,21,13,7,0,6500000),(54,22,1,11,1,100000),(55,22,2,3,0,100000),(56,23,1,2,1,2000000),(57,23,2,18,1,2000000),(58,23,3,8,0,4000000),(59,24,1,2,0,2000000),(60,24,2,18,0,2000000),(61,24,3,8,1,4000000),(62,25,1,2,1,2000000),(63,25,2,18,1,2000000),(64,25,3,8,0,4000000);
/*!40000 ALTER TABLE `jurnal_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelompok_akun`
--

DROP TABLE IF EXISTS `kelompok_akun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelompok_akun` (
  `id` tinyint(3) unsigned NOT NULL,
  `nama` char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelompok_akun`
--

LOCK TABLES `kelompok_akun` WRITE;
/*!40000 ALTER TABLE `kelompok_akun` DISABLE KEYS */;
INSERT INTO `kelompok_akun` VALUES (1,'Aktiva'),(2,'Kewajiban'),(3,'Modal'),(4,'Pendapatan'),(5,'Biaya');
/*!40000 ALTER TABLE `kelompok_akun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `klien`
--

DROP TABLE IF EXISTS `klien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klien` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL DEFAULT '',
  `npwp` char(15) NOT NULL DEFAULT '',
  `alamat` varchar(100) NOT NULL DEFAULT '',
  `telpon_1` varchar(30) NOT NULL DEFAULT '',
  `telpon_2` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `website` varchar(100) NOT NULL DEFAULT '',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klien`
--

LOCK TABLES `klien` WRITE;
/*!40000 ALTER TABLE `klien` DISABLE KEYS */;
INSERT INTO `klien` VALUES (2,'PT. Sinar Mas','124445678910111','Jl. Bukit Baru No.1','0711357644','','sinar_mas@yahoo.com','','','data klien'),(4,'PT. ABC','123456789101112','Jl. Suka rame no.13','0711440588','','abc@gmail.com','','','data klien'),(5,'Kemkominfo','','Jakarta','021','','','','','CP: Pak Menteri');
/*!40000 ALTER TABLE `klien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lap_pph21`
--

DROP TABLE IF EXISTS `lap_pph21`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lap_pph21` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bulan` char(2) NOT NULL DEFAULT '00',
  `tahun` char(4) NOT NULL DEFAULT '0000',
  `penerima_1` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_1` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_1` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_2` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_2` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_2` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_3` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_3` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_3` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_4` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_4` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_4` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_5` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_5` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_5` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_6` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_6` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_6` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_7` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_7` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_7` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_8` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_8` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_8` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_9` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_9` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_9` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_10` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_10` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_10` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_11` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_11` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_11` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_12` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_12` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_12` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_13` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_13` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_13` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_14` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_14` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_14` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_15` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_15` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_15` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_16` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_16` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_16` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_17` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_17` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_17` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_18` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_18` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_18` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_19` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_19` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_19` bigint(20) unsigned NOT NULL DEFAULT '0',
  `penerima_20` int(10) unsigned NOT NULL DEFAULT '0',
  `bruto_20` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pajak_20` bigint(20) unsigned NOT NULL DEFAULT '0',
  `lampiran_a` tinyint(1) NOT NULL DEFAULT '0',
  `lampiran_b` tinyint(1) NOT NULL DEFAULT '0',
  `lampiran_c` tinyint(1) NOT NULL DEFAULT '0',
  `lampiran_d` tinyint(1) NOT NULL DEFAULT '0',
  `lampiran_e` tinyint(1) NOT NULL DEFAULT '0',
  `lampiran_f` tinyint(1) NOT NULL DEFAULT '0',
  `lampiran_g` tinyint(1) NOT NULL DEFAULT '0',
  `lampiran_h` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lap_pph21`
--

LOCK TABLES `lap_pph21` WRITE;
/*!40000 ALTER TABLE `lap_pph21` DISABLE KEYS */;
INSERT INTO `lap_pph21` VALUES (1,'05','2010',3,6000000,0,0,0,0,1,800000,0,0,0,0,0,0,0,0,0,0,2,4000000,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0);
/*!40000 ALTER TABLE `lap_pph21` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lap_ssp`
--

DROP TABLE IF EXISTS `lap_ssp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lap_ssp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bulan` char(2) NOT NULL DEFAULT '00',
  `tahun` char(4) NOT NULL DEFAULT '0000',
  `jenis_pajak` char(6) NOT NULL,
  `kode_setoran` char(3) NOT NULL DEFAULT '',
  `keterangan` text NOT NULL,
  `jumlah` bigint(20) unsigned NOT NULL DEFAULT '0',
  `terbilang` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lap_ssp`
--

LOCK TABLES `lap_ssp` WRITE;
/*!40000 ALTER TABLE `lap_ssp` DISABLE KEYS */;
INSERT INTO `lap_ssp` VALUES (1,'05','2010','123456','123','pajak ssp bulan mei',225000,'Dua ratus dua puluh lima ribu rupiah');
/*!40000 ALTER TABLE `lap_ssp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(60) NOT NULL DEFAULT '',
  `nama_belakang` varchar(60) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `administrator` tinyint(1) NOT NULL DEFAULT '0',
  `aktif` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'Admin','Guyub','admin','704b037a97fa9b25522b7c014c300f8a',1,1),(2,'Adhe','Kania','2','c81e728d9d4c2f636f067f89cc14862c',0,0),(3,'Muhammad','Subair','1','c4ca4238a0b923820dcc509a6f75849b',1,1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyek`
--

DROP TABLE IF EXISTS `proyek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyek` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL DEFAULT '',
  `klien_id` int(10) unsigned NOT NULL DEFAULT '0',
  `spk_no` varchar(100) NOT NULL DEFAULT '',
  `spk_tgl` date DEFAULT NULL,
  `biaya` bigint(20) unsigned DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` enum('Start','Pending','Cancel','Close') NOT NULL DEFAULT 'Start',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `klien_id` (`klien_id`),
  CONSTRAINT `proyek_ibfk_1` FOREIGN KEY (`klien_id`) REFERENCES `klien` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyek`
--

LOCK TABLES `proyek` WRITE;
/*!40000 ALTER TABLE `proyek` DISABLE KEYS */;
INSERT INTO `proyek` VALUES (1,'Aplikasi Keuangan PT.ABC',4,'123','2010-05-04',8000000,'2010-05-04','2010-06-04','Close','data proyek, close tanggal xxxx-xx-xx'),(2,'Website PT. Sinar Mas',2,'222','2010-05-06',6000000,'2010-05-06','2010-06-06','Start','data klien'),(3,'SI Penjurian INAICTA',5,'','2010-07-02',20000000,'2010-07-02','2010-08-25','Start','Testing aja');
/*!40000 ALTER TABLE `proyek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp`
--

DROP TABLE IF EXISTS `wp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `npwp` char(15) NOT NULL DEFAULT '',
  `nama` varchar(100) NOT NULL DEFAULT '',
  `alamat` varchar(100) NOT NULL DEFAULT '',
  `kota` varchar(50) NOT NULL DEFAULT '',
  `telpon` varchar(30) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `jenis_usaha` varchar(45) NOT NULL DEFAULT '',
  `klu` char(6) NOT NULL DEFAULT '',
  `pemilik` varchar(100) NOT NULL DEFAULT '',
  `npwp_pemilik` char(15) NOT NULL DEFAULT '',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp`
--

LOCK TABLES `wp` WRITE;
/*!40000 ALTER TABLE `wp` DISABLE KEYS */;
INSERT INTO `wp` VALUES (1,'121231231123123','PT. Keuangan Guyub','Jl. Keuangan No.30','Palembang','07117744002','','keuangan@guyub.co.id','Pelayanan Jasa','123456','Muhammad Subair','112223334555666','data wajib pajak');
/*!40000 ALTER TABLE `wp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-07-13 11:10:02
