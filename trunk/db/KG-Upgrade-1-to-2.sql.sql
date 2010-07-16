-- Table structure for table `akun`
-- `nama` varchar(100) NOT NULL default '', diganti `nama` varchar(30) NOT NULL default '',
-- `kode` varchar(100) NOT NULL default '', diganti `kode` varchar(5) NOT NULL default '',
-- `saldo` bigint(11) NOT NULL default '0', diganti `saldo` bigint(20) NOT NULL default '0',
-- menambahkan `saldo_awal` bigint(20) NOT NULL DEFAULT '0'

ALTER TABLE `akun` MODIFY `nama` varchar(30) NOT NULL default '';
ALTER TABLE `akun` MODIFY `kode` varchar(5) NOT NULL default '';
ALTER TABLE `akun` MODIFY `saldo` bigint(20) NOT NULL default '0';
ALTER TABLE `akun` ADD `saldo_awal` bigint(20) NOT NULL DEFAULT '0' AFTER `pajak`;

-- Table structure for table `f`
-- `nama` varchar(30) NOT NULL default '', diganti `nama` char(20) NOT NULL default '',

ALTER TABLE `f` MODIFY `nama` char(20) NOT NULL default '';

-- Table structure for table `jurnal_detail`
-- `nilai` bigint(11) NOT NULL default '0', diganti `nilai` bigint(20) NOT NULL default '0',
-- `item` varchar(30) NOT NULL default '', diganti `item` tinyint(3) NOT NULL default '0',

ALTER TABLE `jurnal_detail` MODIFY `nilai` bigint(20) NOT NULL default '0';
ALTER TABLE `jurnal_detail` MODIFY `item` tinyint(3) NOT NULL default '0';

-- Table structure for table `kelompok_akun`
-- `nama` varchar(100) NOT NULL default '', diganti `nama` char(10) NOT NULL default '', 

ALTER TABLE `kelompok_akun` MODIFY `nama` char(10) NOT NULL default '';

-- Table structure for table `klien`
-- `nama` varchar(30) NOT NULL default '', diganti ke `nama` varchar(100) NOT NULL default '',
-- `email` varchar(60) NOT NULL default '', diganti `email` varchar(100) NOT NULL default '',
-- `website` varchar(30) NOT NULL default '', diganti `website` varchar(100) NOT NULL default '',

ALTER TABLE `klien` MODIFY `nama` varchar(100) NOT NULL default '';
ALTER TABLE `klien` MODIFY `email` varchar(100) NOT NULL default '';
ALTER TABLE `klien` MODIFY `website` varchar(100) NOT NULL default '';

-- Table structure for table `login`
-- `nama_depan` varchar(100) NOT NULL default '', diganti `nama_depan` varchar(60) NOT NULL default '',
-- `nama_belakang` varchar(100) NOT NULL default '', diganti `nama_belakang` varchar(60) NOT NULL default '',

ALTER TABLE `login` MODIFY `nama_depan` varchar(60) NOT NULL default '';
ALTER TABLE `login` MODIFY `nama_belakang` varchar(60) NOT NULL default '';

-- Table structure for table `proyek`
-- `nama` varchar(30) NOT NULL default '', diganti jadi `nama` varchar(100) NOT NULL default '',
-- `spk_no` varchar(30) NOT NULL default '', diganti `spk_no` varchar(100) NOT NULL default '', 

ALTER TABLE `proyek` MODIFY `nama` varchar(100) NOT NULL default '';
ALTER TABLE `proyek` MODIFY `spk_no` varchar(100) NOT NULL default '';

-- Table structure for table `wp`
-- `nama` varchar(30) NOT NULL default '', diganti `nama` varchar(100) NOT NULL default '',
-- `alamat` varchar(60) NOT NULL default '', diganti `alamat` varchar(100) NOT NULL default '',
-- `kota` varchar(40) NOT NULL default '', diganti `kota` varchar(50) NOT NULL default '', 
-- `email` varchar(45) NOT NULL default '', diganti `email` varchar(100) NOT NULL default '',
-- `pemilik` varchar(30) NOT NULL default '', diganti `pemilik` varchar(100) NOT NULL default '',

ALTER TABLE `wp` MODIFY `nama` varchar(100) NOT NULL default '';
ALTER TABLE `wp` MODIFY `alamat` varchar(100) NOT NULL default '';
ALTER TABLE `wp` MODIFY `kota` varchar(50) NOT NULL default '';
ALTER TABLE `wp` MODIFY `email` varchar(100) NOT NULL default '';
ALTER TABLE `wp` MODIFY `pemilik` varchar(100) NOT NULL default '';



