# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.30-MariaDB)
# Database: latihan_oop
# Generation Time: 2020-05-11 07:15:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tb_barang
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_barang`;

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_barang` WRITE;
/*!40000 ALTER TABLE `tb_barang` DISABLE KEYS */;

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `stok`, `harga_beli`, `harga_jual`)
VALUES
	(1,'Xiaomi Redmi Note 7',10,1999000,2200000),
	(2,'Samsung M20',7,2520000,2700000),
	(4,'Redmi Note 6',20,2200000,2500000);

/*!40000 ALTER TABLE `tb_barang` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_siswa
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_siswa`;

CREATE TABLE `tb_siswa` (
  `kd_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(255) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`kd_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_siswa` WRITE;
/*!40000 ALTER TABLE `tb_siswa` DISABLE KEYS */;

INSERT INTO `tb_siswa` (`kd_siswa`, `nama_siswa`, `kelas`, `alamat`)
VALUES
	(1,'Samsudin','2','Pedurungan'),
	(4,'Budi','2','Jatingaleh'),
	(5,'Salam','3','Tembalang');

/*!40000 ALTER TABLE `tb_siswa` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
