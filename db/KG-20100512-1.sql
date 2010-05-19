-- MySQL dump 10.11
--
-- Host: localhost    Database: kg
-- ------------------------------------------------------
-- Server version	5.0.51a-3ubuntu5.5

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
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `akun` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL default '',
  `kode` varchar(100) NOT NULL default '',
  `kelompok_akun_id` tinyint(3) unsigned NOT NULL default '0',
  `pajak` tinyint(1) NOT NULL default '1',
  `saldo` bigint(11) NOT NULL default '0',
  `keterangan` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `kelompok_akun_id` (`kelompok_akun_id`),
  CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`kelompok_akun_id`) REFERENCES `kelompok_akun` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `akun`
--

LOCK TABLES `akun` WRITE;
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f`
--

DROP TABLE IF EXISTS `f`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `f` (
  `id` tinyint(3) unsigned NOT NULL,
  `nama` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

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
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `jurnal` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `no` varchar(20) NOT NULL default '',
  `tgl` date NOT NULL default '0000-00-00',
  `f_id` tinyint(3) unsigned NOT NULL default '0',
  `keterangan` text NOT NULL,
  `proyek_id` int(10) unsigned default NULL,
  `login_id` int(10) unsigned NOT NULL default '0',
  `waktu_post` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `f_id` (`f_id`),
  KEY `proyek_id` (`proyek_id`),
  CONSTRAINT `jurnal_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `f` (`id`),
  CONSTRAINT `jurnal_ibfk_2` FOREIGN KEY (`proyek_id`) REFERENCES `proyek` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `jurnal`
--

LOCK TABLES `jurnal` WRITE;
/*!40000 ALTER TABLE `jurnal` DISABLE KEYS */;
/*!40000 ALTER TABLE `jurnal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurnal_detail`
--

DROP TABLE IF EXISTS `jurnal_detail`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `jurnal_detail` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `jurnal_id` int(10) unsigned NOT NULL default '0',
  `item` varchar(30) NOT NULL default '',
  `akun_id` smallint(5) unsigned NOT NULL default '0',
  `debit_kredit` tinyint(1) NOT NULL default '1',
  `nilai` bigint(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `jurnal_id` (`jurnal_id`),
  KEY `akun_id` (`akun_id`),
  CONSTRAINT `jurnal_detail_ibfk_1` FOREIGN KEY (`jurnal_id`) REFERENCES `jurnal` (`id`),
  CONSTRAINT `jurnal_detail_ibfk_2` FOREIGN KEY (`akun_id`) REFERENCES `akun` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `jurnal_detail`
--

LOCK TABLES `jurnal_detail` WRITE;
/*!40000 ALTER TABLE `jurnal_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `jurnal_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelompok_akun`
--

DROP TABLE IF EXISTS `kelompok_akun`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `kelompok_akun` (
  `id` tinyint(3) unsigned NOT NULL,
  `nama` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

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
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `klien` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(30) NOT NULL default '',
  `npwp` char(15) NOT NULL default '',
  `alamat` varchar(100) NOT NULL default '',
  `telpon_1` varchar(30) NOT NULL default '',
  `telpon_2` varchar(30) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `fax` varchar(30) NOT NULL default '',
  `website` varchar(30) NOT NULL default '',
  `keterangan` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `klien`
--

LOCK TABLES `klien` WRITE;
/*!40000 ALTER TABLE `klien` DISABLE KEYS */;
/*!40000 ALTER TABLE `klien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lap_pph21`
--

DROP TABLE IF EXISTS `lap_pph21`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `lap_pph21` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `bulan` char(2) NOT NULL default '00',
  `tahun` char(4) NOT NULL default '0000',
  `penerima_1` int(10) unsigned NOT NULL default '0',
  `bruto_1` bigint(20) unsigned NOT NULL default '0',
  `pajak_1` bigint(20) unsigned NOT NULL default '0',
  `penerima_2` int(10) unsigned NOT NULL default '0',
  `bruto_2` bigint(20) unsigned NOT NULL default '0',
  `pajak_2` bigint(20) unsigned NOT NULL default '0',
  `penerima_3` int(10) unsigned NOT NULL default '0',
  `bruto_3` bigint(20) unsigned NOT NULL default '0',
  `pajak_3` bigint(20) unsigned NOT NULL default '0',
  `penerima_4` int(10) unsigned NOT NULL default '0',
  `bruto_4` bigint(20) unsigned NOT NULL default '0',
  `pajak_4` bigint(20) unsigned NOT NULL default '0',
  `penerima_5` int(10) unsigned NOT NULL default '0',
  `bruto_5` bigint(20) unsigned NOT NULL default '0',
  `pajak_5` bigint(20) unsigned NOT NULL default '0',
  `penerima_6` int(10) unsigned NOT NULL default '0',
  `bruto_6` bigint(20) unsigned NOT NULL default '0',
  `pajak_6` bigint(20) unsigned NOT NULL default '0',
  `penerima_7` int(10) unsigned NOT NULL default '0',
  `bruto_7` bigint(20) unsigned NOT NULL default '0',
  `pajak_7` bigint(20) unsigned NOT NULL default '0',
  `penerima_8` int(10) unsigned NOT NULL default '0',
  `bruto_8` bigint(20) unsigned NOT NULL default '0',
  `pajak_8` bigint(20) unsigned NOT NULL default '0',
  `penerima_9` int(10) unsigned NOT NULL default '0',
  `bruto_9` bigint(20) unsigned NOT NULL default '0',
  `pajak_9` bigint(20) unsigned NOT NULL default '0',
  `penerima_10` int(10) unsigned NOT NULL default '0',
  `bruto_10` bigint(20) unsigned NOT NULL default '0',
  `pajak_10` bigint(20) unsigned NOT NULL default '0',
  `penerima_11` int(10) unsigned NOT NULL default '0',
  `bruto_11` bigint(20) unsigned NOT NULL default '0',
  `pajak_11` bigint(20) unsigned NOT NULL default '0',
  `penerima_12` int(10) unsigned NOT NULL default '0',
  `bruto_12` bigint(20) unsigned NOT NULL default '0',
  `pajak_12` bigint(20) unsigned NOT NULL default '0',
  `penerima_13` int(10) unsigned NOT NULL default '0',
  `bruto_13` bigint(20) unsigned NOT NULL default '0',
  `pajak_13` bigint(20) unsigned NOT NULL default '0',
  `penerima_14` int(10) unsigned NOT NULL default '0',
  `bruto_14` bigint(20) unsigned NOT NULL default '0',
  `pajak_14` bigint(20) unsigned NOT NULL default '0',
  `penerima_15` int(10) unsigned NOT NULL default '0',
  `bruto_15` bigint(20) unsigned NOT NULL default '0',
  `pajak_15` bigint(20) unsigned NOT NULL default '0',
  `penerima_16` int(10) unsigned NOT NULL default '0',
  `bruto_16` bigint(20) unsigned NOT NULL default '0',
  `pajak_16` bigint(20) unsigned NOT NULL default '0',
  `penerima_17` int(10) unsigned NOT NULL default '0',
  `bruto_17` bigint(20) unsigned NOT NULL default '0',
  `pajak_17` bigint(20) unsigned NOT NULL default '0',
  `penerima_18` int(10) unsigned NOT NULL default '0',
  `bruto_18` bigint(20) unsigned NOT NULL default '0',
  `pajak_18` bigint(20) unsigned NOT NULL default '0',
  `penerima_19` int(10) unsigned NOT NULL default '0',
  `bruto_19` bigint(20) unsigned NOT NULL default '0',
  `pajak_19` bigint(20) unsigned NOT NULL default '0',
  `penerima_20` int(10) unsigned NOT NULL default '0',
  `bruto_20` bigint(20) unsigned NOT NULL default '0',
  `pajak_20` bigint(20) unsigned NOT NULL default '0',
  `lampiran_a` tinyint(1) NOT NULL default '0',
  `lampiran_b` tinyint(1) NOT NULL default '0',
  `lampiran_c` tinyint(1) NOT NULL default '0',
  `lampiran_d` tinyint(1) NOT NULL default '0',
  `lampiran_e` tinyint(1) NOT NULL default '0',
  `lampiran_f` tinyint(1) NOT NULL default '0',
  `lampiran_g` tinyint(1) NOT NULL default '0',
  `lampiran_h` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `lap_pph21`
--

LOCK TABLES `lap_pph21` WRITE;
/*!40000 ALTER TABLE `lap_pph21` DISABLE KEYS */;
/*!40000 ALTER TABLE `lap_pph21` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lap_ssp`
--

DROP TABLE IF EXISTS `lap_ssp`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `lap_ssp` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `bulan` char(2) NOT NULL default '00',
  `tahun` char(4) NOT NULL default '0000',
  `jenis_pajak` char(6) NOT NULL,
  `kode_setoran` char(3) NOT NULL default '',
  `keterangan` text NOT NULL,
  `jumlah` bigint(20) unsigned NOT NULL default '0',
  `terbilang` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `lap_ssp`
--

LOCK TABLES `lap_ssp` WRITE;
/*!40000 ALTER TABLE `lap_ssp` DISABLE KEYS */;
/*!40000 ALTER TABLE `lap_ssp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `login` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama_depan` varchar(100) NOT NULL default '',
  `nama_belakang` varchar(100) NOT NULL default '',
  `username` varchar(100) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `administrator` tinyint(1) NOT NULL default '0',
  `aktif` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'Muhammad','Subair','1','c4ca4238a0b923820dcc509a6f75849b',1,0),(2,'Keuangan','Guyub','admin','21232f297a57a5a743894a0e4a801fc3',1,0),(3,'Keuangan','Guyub','admin','704b037a97fa9b25522b7c014c300f8a',1,1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyek`
--

DROP TABLE IF EXISTS `proyek`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `proyek` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(30) NOT NULL default '',
  `klien_id` int(10) unsigned NOT NULL default '0',
  `spk_no` varchar(30) NOT NULL default '',
  `spk_tgl` date default NULL,
  `biaya` bigint(20) unsigned default NULL,
  `tgl_mulai` date default NULL,
  `tgl_selesai` date default NULL,
  `status` enum('Start','Pending','Cancel','Close') NOT NULL default 'Start',
  `keterangan` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `klien_id` (`klien_id`),
  CONSTRAINT `proyek_ibfk_1` FOREIGN KEY (`klien_id`) REFERENCES `klien` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `proyek`
--

LOCK TABLES `proyek` WRITE;
/*!40000 ALTER TABLE `proyek` DISABLE KEYS */;
/*!40000 ALTER TABLE `proyek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp`
--

DROP TABLE IF EXISTS `wp`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wp` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `npwp` char(15) NOT NULL default '',
  `nama` varchar(30) NOT NULL default '',
  `alamat` varchar(60) NOT NULL default '',
  `kota` varchar(40) NOT NULL default '',
  `telpon` varchar(30) NOT NULL default '',
  `fax` varchar(30) NOT NULL default '',
  `email` varchar(45) NOT NULL default '',
  `jenis_usaha` varchar(45) NOT NULL default '',
  `klu` char(6) NOT NULL default '',
  `pemilik` varchar(30) NOT NULL default '',
  `npwp_pemilik` char(15) NOT NULL default '',
  `keterangan` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wp`
--

LOCK TABLES `wp` WRITE;
/*!40000 ALTER TABLE `wp` DISABLE KEYS */;
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

-- Dump completed on 2010-05-11  6:49:23
