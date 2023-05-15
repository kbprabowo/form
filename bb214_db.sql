-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ba214_db
DROP DATABASE IF EXISTS `ba214_db`;
CREATE DATABASE IF NOT EXISTS `ba214_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ba214_db`;

-- Dumping structure for table ba214_db.agama
DROP TABLE IF EXISTS `agama`;
CREATE TABLE IF NOT EXISTS `agama` (
  `id_agama` int NOT NULL AUTO_INCREMENT,
  `agama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_agama`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ba214_db.agama: ~4 rows (approximately)
INSERT INTO `agama` (`id_agama`, `agama`) VALUES
	(1, 'protestan'),
	(2, 'Konghucu'),
	(3, 'Hindu'),
	(4, 'Budha'),
	(5, 'China');

-- Dumping structure for table ba214_db.jurusan
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ba214_db.jurusan: ~4 rows (approximately)
INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
	(1, 'Perikanan'),
	(2, 'Sistem Infromasi'),
	(3, 'Managemen Informasi');

-- Dumping structure for table ba214_db.mahasiswa
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` char(9) NOT NULL,
  `nama_mhs` varchar(150) NOT NULL,
  `kode_jurusan` int NOT NULL,
  `gender` int NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kode_agama` int NOT NULL,
  `kode_ukm` int NOT NULL,
  PRIMARY KEY (`nim`),
  KEY `kode_jurusan` (`kode_jurusan`),
  KEY `kode_agama` (`kode_agama`),
  KEY `kode_ukm` (`kode_ukm`),
  CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`kode_agama`) REFERENCES `agama` (`id_agama`),
  CONSTRAINT `mahasiswa_ibfk_3` FOREIGN KEY (`kode_ukm`) REFERENCES `ukm` (`id_ukm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ba214_db.mahasiswa: ~6 rows (approximately)
INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `kode_jurusan`, `gender`, `alamat`, `no_hp`, `email`, `kode_agama`, `kode_ukm`) VALUES
	('11111111', 'elang', 3, 1, 'guagagsagsa', '0754578899', 'kbrabowo@outlook.com', 2, 1),
	('122233332', 'asfasfaaff', 2, 2, 'fafafaf abbbalii', '082398249898', 'afnafnafjnjn@afjfajnf.cm', 1, 1),
	('122412414', 'joni', 1, 1, 'guagagsagsa', '0754578899', 'admin@admin.com', 1, 1),
	('1352334', 'sgsgsgsg', 3, 1, 'leakfmkfmkafmkamf', '88658586858', 'sgsdgsdg@hhssh.com', 1, 1);

-- Dumping structure for table ba214_db.ukm
DROP TABLE IF EXISTS `ukm`;
CREATE TABLE IF NOT EXISTS `ukm` (
  `id_ukm` int NOT NULL AUTO_INCREMENT,
  `nama_ukm` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ukm`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ba214_db.ukm: ~0 rows (approximately)
INSERT INTO `ukm` (`id_ukm`, `nama_ukm`) VALUES
	(1, 'Karate'),
	(2, 'mancing'),
	(3, 'Sepak Bola');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
