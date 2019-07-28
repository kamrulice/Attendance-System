-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2018 at 07:04 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sams`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendence`
--

DROP TABLE IF EXISTS `tbl_attendence`;
CREATE TABLE IF NOT EXISTS `tbl_attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roll` int(22) NOT NULL,
  `attend` varchar(212) NOT NULL,
  `attend_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendence`
--

INSERT INTO `tbl_attendence` (`id`, `roll`, `attend`, `attend_date`) VALUES
(1, 19, '', '2018-10-23'),
(2, 12, 'present', '2018-10-27'),
(3, 13, 'absent', '2018-10-27'),
(4, 14, 'present', '2018-10-27'),
(5, 15, 'absent', '2018-10-27'),
(6, 16, 'present', '2018-10-27'),
(7, 17, 'absent', '2018-10-27'),
(8, 18, 'absent', '2018-10-27'),
(9, 19, 'present', '2018-10-27'),
(10, 12, 'present', '2018-10-27'),
(11, 13, 'absent', '2018-10-27'),
(12, 14, 'present', '2018-10-27'),
(13, 15, 'absent', '2018-10-27'),
(14, 16, 'present', '2018-10-27'),
(15, 17, 'absent', '2018-10-27'),
(16, 18, 'absent', '2018-10-27'),
(17, 19, 'absent', '2018-10-27'),
(18, 12, 'present', '2018-10-27'),
(19, 13, 'present', '2018-10-27'),
(20, 14, 'present', '2018-10-27'),
(21, 15, 'present', '2018-10-27'),
(22, 16, 'present', '2018-10-27'),
(23, 17, 'present', '2018-10-27'),
(24, 18, 'present', '2018-10-27'),
(25, 19, 'present', '2018-10-27'),
(26, 12, 'present', '2018-10-27'),
(27, 13, 'present', '2018-10-27'),
(28, 14, 'present', '2018-10-27'),
(29, 15, 'present', '2018-10-27'),
(30, 16, 'present', '2018-10-27'),
(31, 17, 'present', '2018-10-27'),
(32, 18, 'present', '2018-10-27'),
(33, 19, 'present', '2018-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

DROP TABLE IF EXISTS `tbl_student`;
CREATE TABLE IF NOT EXISTS `tbl_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `roll` int(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `roll`) VALUES
(1, 'Kamrul ', 12),
(2, 'Joy', 13),
(3, 'Hashem', 14),
(4, 'Asad', 15),
(5, 'Niamul', 16),
(6, 'Raj', 17),
(7, 'Shahadat', 18),
(8, 'Saikat', 19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
