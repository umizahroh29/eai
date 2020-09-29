-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 04:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `keaktifan`
--

CREATE TABLE `keaktifan` (
  `nim` text DEFAULT NULL,
  `tak` int(11) NOT NULL,
  `lomba` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keaktifan`
--

INSERT INTO `keaktifan` (`nim`, `tak`, `lomba`) VALUES
('16010915 2819', 82, 'PKM 2018'),
('16011219 3172', 107, 'Karya Tulis Ilmiah'),
('16030319 1878', 115, 'Bisnis Plan BINUS'),
('16050616 7725', 96, 'Bisnis Plan BINUS'),
('16061107 3404', 144, 'Hackathon Telkom'),
('16061229 7150', 146, 'Bisnis Plan BINUS'),
('16080411 9733', 28, 'PKM 2019'),
('16100126 8620', 90, 'PKM 2020'),
('16141106 0203', 93, 'Imagine Cup 2019'),
('16150808 8695', 87, 'PKM 2019'),
('16151110 2921', 95, 'Gemastik XI'),
('16160104 6954', 119, 'Bisnis Plan UI'),
('16160921 9694', 141, 'PKM 2020'),
('16170207 5571', 67, 'Karya Tulis Ilmiah'),
('16170508 9983', 42, 'Bisnis Plan UI'),
('16170804 8283', 87, NULL),
('16171104 8650', 46, 'PKM 2020'),
('16171215 1370', 122, 'PKM 2018'),
('16180120 5509', 86, 'Hackathon Telkom'),
('16190922 3693', 150, 'Gemastik XIII'),
('16200209 1680', 132, 'Imagine Cup 2018'),
('16200321 6781', 147, NULL),
('16200424 6852', 30, 'PKM 2018'),
('16210714 8963', 120, 'PKM 2020'),
('16220202 5231', 52, 'Imagine Cup 2018'),
('16220705 4210', 109, 'Gemastik XII'),
('16230206 6408', 109, 'Bisnis Plan BINUS'),
('16241013 4775', 100, 'Bisnis Plan UI'),
('16251104 1978', 24, 'PKM 2020'),
('16270806 6317', 63, 'PKM 2019'),
('16290601 3517', 83, 'Imagine Cup 2018'),
('16300624 4226', 143, 'PKM 2020'),
('16300703 8080', 59, 'Gemastik XI'),
('16331018 5875', 119, 'Bisnis Plan UI'),
('16341110 1300', 136, 'PKM 2019'),
('16341214 6650', 143, 'Hackathon Telkomsel'),
('16360727 8862', 46, 'Hackathon Telkomsel'),
('16380818 7706', 31, 'Bisnis Plan UI'),
('16380902 5780', 18, 'Hackathon Telkom'),
('16380913 6959', 16, 'Hackathon Telkomsel'),
('16400927 9243', 113, 'Imagine Cup 2018'),
('16401018 3657', 124, 'Imagine Cup 2019'),
('16430822 2951', 75, 'Gemastik XIII'),
('16431213 5462', 13, 'PKM 2019'),
('16471219 4960', 125, 'Bisnis Plan BINUS'),
('16481220 3240', 100, NULL),
('16490601 1657', 110, 'Gemastik XIII'),
('16500127 6319', 60, 'PKM 2020'),
('16500428 1167', 61, NULL),
('16500630 3837', 55, 'Bisnis Plan UI'),
('16510207 2179', 58, 'PKM 2019'),
('16520609 4426', 35, 'PKM 2019'),
('16531016 6037', 74, 'PKM 2018'),
('16560420 2746', 105, 'Hackathon Telkom'),
('16560704 1638', 102, 'Imagine Cup 2018'),
('16561204 9741', 40, 'PKM 2019'),
('16571107 2412', 61, 'PKM 2018'),
('16580712 6916', 87, 'Bisnis Plan UI'),
('16590723 0402', 42, 'Imagine Cup 2019'),
('16600311 7964', 42, 'Gemastik XI'),
('16600312 2121', 106, 'PKM 2018'),
('16600316 6144', 92, 'PKM 2019'),
('16601201 0713', 21, 'Hackathon Telkom'),
('16630522 0995', 38, 'Karya Tulis Ilmiah'),
('16641123 3619', 118, 'Karya Tulis Ilmiah'),
('16641204 2704', 37, 'PKM 2020'),
('16661228 0971', 82, 'PKM 2018'),
('16670128 1583', 140, 'Karya Tulis Ilmiah'),
('16670812 0180', 99, 'PKM 2018'),
('16691123 6708', 44, 'Imagine Cup 2018'),
('16710423 7271', 68, 'Gemastik XIII'),
('16711119 5512', 133, 'Imagine Cup 2018'),
('16720105 6244', 112, 'Hackathon Telkom'),
('16720203 5973', 114, 'Hackathon Telkom'),
('16720224 2454', 51, 'Gemastik XII'),
('16720914 3267', 77, 'PKM 2018'),
('16740916 1119', 121, 'Gemastik XIII'),
('16750817 5374', 90, 'Gemastik XI'),
('16750830 4446', 28, 'Bisnis Plan UI'),
('16780125 3142', 35, 'Bisnis Plan UI'),
('16780615 8619', 50, NULL),
('16801204 4205', 67, 'Imagine Cup 2018'),
('16810619 3165', 61, 'Karya Tulis Ilmiah'),
('16840319 5103', 150, 'Imagine Cup 2018'),
('16840427 6050', 72, 'Hackathon Telkom'),
('16840518 0343', 118, 'Imagine Cup 2018'),
('16860224 8752', 148, 'PKM 2018'),
('16870715 6132', 146, 'Karya Tulis Ilmiah'),
('16880114 3788', 146, 'Imagine Cup 2019'),
('16880423 4972', 83, 'PKM 2020'),
('16880703 6234', 68, 'Bisnis Plan BINUS'),
('16880822 5927', 144, 'Bisnis Plan UI'),
('16900202 2482', 72, 'Gemastik XII'),
('16900220 2472', 22, 'Gemastik XIII'),
('16911227 9865', 131, 'Bisnis Plan UI'),
('16920328 7306', 110, 'Karya Tulis Ilmiah'),
('16930411 5034', 40, NULL),
('16940828 1575', 32, 'Hackathon Telkomsel'),
('16960921 8913', 51, 'PKM 2019'),
('16981121 2670', 50, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `nim` varchar(13) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `zona_tinggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesehatan`
--

INSERT INTO `kesehatan` (`nim`, `kondisi`, `zona_tinggal`) VALUES
('16160104 6954', 'Sehat', 'Merah'),
('16210714 8963', 'Sakit', 'Orange'),
('16860224 8752', 'Sakit', 'Hitam'),
('16571107 2412', 'Sakit', 'Hijau'),
('16171104 8650', 'Sehat', 'Orange'),
('16171215 1370', 'Sehat', 'Hitam'),
('16220202 5231', 'Sakit', 'Merah'),
('16180120 5509', 'Sakit', 'Merah'),
('16241013 4775', 'Sehat', 'Orange'),
('16560420 2746', 'Sakit', 'Orange'),
('16661228 0971', 'Sakit', 'Hitam'),
('16880423 4972', 'Sehat', 'Merah'),
('16600311 7964', 'Sakit', 'Orange'),
('16160921 9694', 'Sehat', 'Hijau'),
('16190922 3693', 'Sakit', 'Hitam'),
('16920328 7306', 'Sehat', 'Hijau'),
('16880822 5927', 'Sehat', 'Hitam'),
('16341214 6650', 'Sehat', 'Hijau'),
('16940828 1575', 'Sehat', 'Hijau'),
('16670128 1583', 'Sakit', 'Hijau'),
('16200424 6852', 'Sakit', 'Orange'),
('16360727 8862', 'Sakit', 'Hitam'),
('16531016 6037', 'Sakit', 'Orange'),
('16500127 6319', 'Sakit', 'Hijau'),
('16380902 5780', 'Sakit', 'Hitam'),
('16880703 6234', 'Sehat', 'Merah'),
('16010915 2819', 'Sehat', 'Merah'),
('16300624 4226', 'Sehat', 'Merah'),
('16900220 2472', 'Sakit', 'Hitam'),
('16200209 1680', 'Sehat', 'Hitam'),
('16911227 9865', 'Sehat', 'Hijau'),
('16560704 1638', 'Sehat', 'Hijau'),
('16840518 0343', 'Sehat', 'Hijau'),
('16930411 5034', 'Sakit', 'Hitam'),
('16960921 8913', 'Sehat', 'Orange'),
('16641204 2704', 'Sakit', 'Hitam'),
('16500428 1167', 'Sehat', 'Orange'),
('16170508 9983', 'Sehat', 'Merah'),
('16590723 0402', 'Sakit', 'Hijau'),
('16471219 4960', 'Sakit', 'Hitam'),
('16290601 3517', 'Sakit', 'Merah'),
('16151110 2921', 'Sehat', 'Merah'),
('16691123 6708', 'Sakit', 'Hijau'),
('16170207 5571', 'Sehat', 'Orange'),
('16251104 1978', 'Sehat', 'Hijau'),
('16780125 3142', 'Sehat', 'Hitam'),
('16801204 4205', 'Sehat', 'Merah'),
('16490601 1657', 'Sakit', 'Hitam'),
('16981121 2670', 'Sehat', 'Merah'),
('16500630 3837', 'Sehat', 'Orange'),
('16230206 6408', 'Sehat', 'Hijau'),
('16720203 5973', 'Sakit', 'Hitam'),
('16510207 2179', 'Sehat', 'Merah'),
('16580712 6916', 'Sakit', 'Hijau'),
('16050616 7725', 'Sakit', 'Hitam'),
('16011219 3172', 'Sakit', 'Hijau'),
('16880114 3788', 'Sehat', 'Hijau'),
('16061107 3404', 'Sakit', 'Hitam'),
('16810619 3165', 'Sehat', 'Merah'),
('16380818 7706', 'Sehat', 'Orange'),
('16080411 9733', 'Sehat', 'Hijau'),
('16601201 0713', 'Sakit', 'Hijau'),
('16270806 6317', 'Sakit', 'Orange'),
('16481220 3240', 'Sehat', 'Orange'),
('16870715 6132', 'Sehat', 'Hijau'),
('16641123 3619', 'Sehat', 'Hijau'),
('16431213 5462', 'Sakit', 'Merah'),
('16520609 4426', 'Sehat', 'Hitam'),
('16750817 5374', 'Sehat', 'Orange'),
('16561204 9741', 'Sakit', 'Merah'),
('16141106 0203', 'Sakit', 'Hijau'),
('16600316 6144', 'Sehat', 'Hitam'),
('16341110 1300', 'Sakit', 'Orange'),
('16200321 6781', 'Sehat', 'Hijau'),
('16780615 8619', 'Sehat', 'Hijau'),
('16720914 3267', 'Sehat', 'Hijau'),
('16220705 4210', 'Sakit', 'Merah'),
('16401018 3657', 'Sakit', 'Merah'),
('16711119 5512', 'Sakit', 'Merah'),
('16720224 2454', 'Sehat', 'Orange'),
('16170804 8283', 'Sehat', 'Hitam'),
('16430822 2951', 'Sehat', 'Merah'),
('16840427 6050', 'Sehat', 'Hijau'),
('16030319 1878', 'Sakit', 'Merah'),
('16331018 5875', 'Sakit', 'Merah'),
('16840319 5103', 'Sehat', 'Hitam'),
('16600312 2121', 'Sehat', 'Hijau'),
('16740916 1119', 'Sakit', 'Hitam'),
('16400927 9243', 'Sakit', 'Orange'),
('16300703 8080', 'Sakit', 'Merah'),
('16750830 4446', 'Sehat', 'Merah'),
('16380913 6959', 'Sehat', 'Hijau'),
('16630522 0995', 'Sehat', 'Orange'),
('16100126 8620', 'Sakit', 'Hitam'),
('16670812 0180', 'Sehat', 'Hitam'),
('16720105 6244', 'Sehat', 'Orange'),
('16900202 2482', 'Sakit', 'Hijau'),
('16061229 7150', 'Sehat', 'Merah'),
('16710423 7271', 'Sehat', 'Orange'),
('16150808 8695', 'Sakit', 'Orange');

-- --------------------------------------------------------

--
-- Table structure for table `telat_lulus`
--

CREATE TABLE `telat_lulus` (
  `nim` varchar(13) NOT NULL,
  `semester` double DEFAULT NULL,
  `sks_lulus` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telat_lulus`
--

INSERT INTO `telat_lulus` (`nim`, `semester`, `sks_lulus`) VALUES
('16960921 8913', 12, 126),
('16641204 2704', 11, 133),
('16500428 1167', 12, 138),
('16170508 9983', 14, 134),
('16590723 0402', 13, 140),
('16471219 4960', 13, 136),
('16290601 3517', 12, 120),
('16151110 2921', 14, 139),
('16691123 6708', 11, 141),
('16170207 5571', 12, 129),
('16251104 1978', 10, 140),
('16780125 3142', 14, 128),
('16801204 4205', 13, 141),
('16490601 1657', 13, 136),
('16981121 2670', 13, 142),
('16500630 3837', 11, 132),
('16230206 6408', 10, 141),
('16720203 5973', 10, 130),
('16510207 2179', 14, 123),
('16580712 6916', 10, 137),
('16050616 7725', 11, 128),
('16011219 3172', 12, 134),
('16880114 3788', 10, 138),
('16061107 3404', 12, 141);

-- --------------------------------------------------------

--
-- Table structure for table `tunggakan`
--

CREATE TABLE `tunggakan` (
  `nim` varchar(13) NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunggakan`
--

INSERT INTO `tunggakan` (`nim`, `alasan`) VALUES
('16160921 9694', 'PHK'),
('16171104 8650', 'Orang Tua Meninggal'),
('16740916 1119', 'Orang Tua Meninggal'),
('16531016 6037', 'PHK'),
('16151110 2921', 'Telat Registrasi'),
('16030319 1878', 'Orang Tua Meninggal'),
('16750817 5374', 'PHK'),
('16840518 0343', 'Orang Tua Meninggal'),
('16200321 6781', 'Telat Registrasi'),
('16840427 6050', 'PHK'),
('16080411 9733', 'Covid-19'),
('16870715 6132', 'Orang Tua Meninggal'),
('16170508 9983', 'Covid-19'),
('16170804 8283', 'Covid-19'),
('16011219 3172', 'PHK'),
('16200424 6852', 'Covid-19'),
('16360727 8862', 'Covid-19'),
('16331018 5875', 'Covid-19'),
('16960921 8913', 'PHK'),
('16880703 6234', 'Covid-19'),
('16520609 4426', 'Covid-19'),
('16641123 3619', 'Telat Registrasi'),
('16720105 6244', 'Orang Tua Meninggal'),
('16661228 0971', 'PHK'),
('16691123 6708', 'Covid-19'),
('16601201 0713', 'Telat Registrasi'),
('16061107 3404', 'PHK'),
('16061229 7150', 'Telat Registrasi'),
('16380913 6959', 'Covid-19'),
('16750830 4446', 'Orang Tua Meninggal'),
('16341110 1300', 'Covid-19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
