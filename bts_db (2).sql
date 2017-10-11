-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 11:58 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `adminID` int(11) NOT NULL,
  `fName` varchar(20) DEFAULT NULL,
  `lName` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adress` int(11) DEFAULT NULL,
  `Column 7` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`adminID`, `fName`, `lName`, `password`, `email`, `adress`, `Column 7`) VALUES
(1, 'renan', 'nuevo', 'password', 'renan.nuevo@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE IF NOT EXISTS `booking_tbl` (
  `bookingID` int(10) NOT NULL,
  `scheduledDate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `cutomerID` int(9) NOT NULL,
  `customerEmail` varchar(50) NOT NULL,
  `bookingDate` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `originID` int(10) NOT NULL,
  `destinationID` int(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `description` varchar(15) NOT NULL,
  `weight` int(5) NOT NULL,
  `origin` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_tbl`
--

INSERT INTO `booking_tbl` (`bookingID`, `scheduledDate`, `cutomerID`, `customerEmail`, `bookingDate`, `originID`, `destinationID`, `status`, `description`, `weight`, `origin`, `destination`) VALUES
(1, '2017-10-11 17:27:13.000000', 0, 'jpfoods@gmail.com', '2017-10-11 17:27:13.000000', 352407221, 352407221, 'Pending', '098765432', 352407221, '0', ''),
(2, '2017-10-11 19:56:59.521655', 0, '2@gmail.com', '2017-10-11 19:56:59.000000', 5, 5, 'Pending', '', 1, '0', ''),
(3, '2017-10-11 20:07:18.462821', 0, 'wew@gmail.com', '2017-10-11 20:07:18.000000', 0, 0, 'Pending', '', 2, '0', ''),
(4, '2017-10-11 20:11:18.185232', 0, '23@gmail.com', '2017-10-11 20:11:18.000000', 0, 0, 'Pending', '', 2, ',', ','),
(5, '2017-10-11 20:17:33.384231', 0, 'kjal@lj.com', '2017-10-11 20:17:33.000000', 0, 0, 'Pending', '', 2, ' ', ' '),
(6, '2017-10-11 20:19:10.438642', 0, '2k@w.com', '2017-10-11 20:19:10.000000', 0, 0, 'Pending', '', 2, '', ''),
(7, '2017-10-11 20:23:52.804906', 0, '22@laj22.com', '2017-10-11 20:23:52.000000', 0, 0, 'Pending', '', 2, '', ''),
(8, '2017-10-11 20:47:55.455334', 0, '222@lasjf.com', '2017-10-11 20:47:55.000000', 0, 0, 'Pending', '', 2, '1', ''),
(9, '2017-10-11 20:48:21.211042', 0, '2lJ@kj.com', '2017-10-11 20:48:21.000000', 0, 0, 'Pending', '', 2, '1', '1'),
(10, '2017-10-11 20:57:31.832123', 0, 'wewwww@gmail.com', '2017-10-11 20:57:31.000000', 0, 0, 'Pending', '', 2, 'Del Monte,1', 'San Miguel,1'),
(11, '2017-10-11 21:06:09.952769', 0, 'email@gmail.com', '2017-10-11 21:06:09.000000', 0, 0, 'Pending', '', 2, '1,1', '2,1'),
(12, '2017-10-11 21:17:07.472842', 0, 'renan.nuevo@gmail.com', '2017-10-11 21:17:07.000000', 0, 0, 'Pending', '', 2, '2,1', '2,1');

-- --------------------------------------------------------

--
-- Table structure for table `city_branch_tbl`
--

CREATE TABLE IF NOT EXISTS `city_branch_tbl` (
  `branchID` int(10) NOT NULL,
  `branchName` varchar(20) NOT NULL,
  `cityID` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_branch_tbl`
--

INSERT INTO `city_branch_tbl` (`branchID`, `branchName`, `cityID`) VALUES
(1, 'San Miguel', 1),
(2, 'Del Monte', 1);

-- --------------------------------------------------------

--
-- Table structure for table `destination_tbl`
--

CREATE TABLE IF NOT EXISTS `destination_tbl` (
  `destinationID` int(11) NOT NULL,
  `cityName` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination_tbl`
--

INSERT INTO `destination_tbl` (`destinationID`, `cityName`) VALUES
(1, 'Bulacan'),
(2, 'Pampanga'),
(3, 'Bataan'),
(4, 'Zambales'),
(5, 'Nueva Ecija'),
(6, 'Tarlac'),
(7, 'Dagupan'),
(8, 'La Union'),
(9, 'Baguio'),
(10, 'Ilocos Sur'),
(11, 'Abra'),
(12, 'Ilocos Norte'),
(13, 'Nueva Vizcaya'),
(14, 'Isabela'),
(15, 'Tuguegarao'),
(16, 'Cavite'),
(17, 'Batangas'),
(18, 'Quezon'),
(19, 'Bicol'),
(20, 'Bocaue Bulacan'),
(21, 'Meycauayan Bulacan'),
(22, 'Marilao Bulacan'),
(23, 'Pandi Bulacan'),
(24, 'San Jose Del Monte Bulacan'),
(25, 'Balagtas Bulacan'),
(26, 'San Luis Pampanga'),
(27, 'Macabebe Pampanga'),
(28, 'San Fernando Pampanga'),
(29, 'Mexico Pampanga'),
(30, 'Sta. Rita Pampanga'),
(31, 'Sta. Ana Pampanga'),
(32, 'Dinalupihan Bataan'),
(33, 'Hermosa Bataan'),
(34, 'Orani Bataan'),
(35, 'Balanga Bataan'),
(36, 'Samat Bataan'),
(37, 'Abucay Bataan'),
(38, 'Olongapo Zambales'),
(39, 'Castillejos Zambales'),
(40, 'San Marcelino Zambales'),
(41, 'Subic Zambales'),
(42, 'San Antonio Zambales'),
(43, 'San Narciso Zambales'),
(44, 'Jaen Nueva Ecija'),
(45, 'Gapan Nueva Ecija'),
(46, 'San Isidro Nueva Ecija'),
(47, 'San Leonardo Nueva Ecija'),
(48, 'Sta. Rosa Nueva Ecija'),
(49, 'General Tinio Nueva Ecija'),
(50, 'Bacoor Cavite'),
(51, 'Rosario Cavite'),
(52, 'Imus Cavite'),
(53, 'Kawit Cavite'),
(54, 'Noveleta Cavite'),
(55, 'Binakayan Cavite'),
(56, 'Sto. Tomas Batangas'),
(57, 'Tanauan Batangas'),
(58, 'Malvar Batangas'),
(59, 'Calaca Batangas'),
(60, 'Lipa Batangas'),
(61, 'Nasugbu Batangas'),
(62, 'Alaminos Quezon'),
(63, 'San Pablo Quezon'),
(64, 'Candelaria Quezon'),
(65, 'Lucena Quezon'),
(66, 'Lucban Quezon'),
(67, 'Atimonan Quezon'),
(68, 'Legaspi Albay'),
(69, 'Daet Camarines Norte'),
(70, 'Naga Camarines Sur'),
(71, 'Pili Camarines Sur'),
(72, 'Sorsogon');

-- --------------------------------------------------------

--
-- Table structure for table `origin_city_tbl`
--

CREATE TABLE IF NOT EXISTS `origin_city_tbl` (
  `originID` int(11) NOT NULL,
  `city_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phone_tbl`
--

CREATE TABLE IF NOT EXISTS `phone_tbl` (
  `phoneNumber` int(11) NOT NULL,
  `customerID` varchar(30) DEFAULT NULL,
  `phoneType` varchar(30) DEFAULT NULL,
  `comment` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trucktype_tbl`
--

CREATE TABLE IF NOT EXISTS `trucktype_tbl` (
  `truckID` int(11) NOT NULL,
  `truckType` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trucktype_tbl`
--

INSERT INTO `trucktype_tbl` (`truckID`, `truckType`) VALUES
(1, '2-Tonner'),
(2, '4-Tonner'),
(3, '6-Tonner'),
(4, '8-Tonner'),
(5, '10-Tonner'),
(6, '12-Tonner'),
(7, '15-Tonner');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `hash`, `active`, `password`, `address`, `city`) VALUES
(1, 'JP Foods Corporation', '098765432', 'jpfoods@gmail.com', 0, '352407221afb776e3143e8a1a0577885', 0, '$2y$10$YlQILEghqwQdgFacBy1FQ.w.q4a9BYuEm1FzgfemBTAuNMqh26gH6', '', ''),
(2, '2', '', '2@gmail.com', 2, '5c936263f3428a40227908d5a3847c0b', 0, '$2y$10$4baKyjBfQY8j0Hg4Oh26Te1GqA3hVHbmjDQCkl9AaAfL3d84BA6IG', '', ''),
(3, '2', '', 'wew@gmail.com', 22, '06eb61b839a0cefee4967c67ccb099dc', 0, '$2y$10$QWzCJ1ykEzgLzcc1/wIJ2uJrIFwstibpYl5Nq/Cdc0FV7VGOIW9nS', '', ''),
(4, '2', '', '23@gmail.com', 2, '02522a2b2726fb0a03bb19f2d8d9524d', 0, '$2y$10$dsnwfOaO7XIbpKEGB.z1w.V/Y.l7D5E9WS4dKaEB59vqNtArezfby', '', ''),
(5, '2', '', 'kjal@lj.com', 2, 'a5bfc9e07964f8dddeb95fc584cd965d', 0, '$2y$10$p833fzum3O5NDD7srRTKcehjX8iIj4rHQLxTARgcoh2mH4ZZAQ.Wi', '', ''),
(6, '2', '', '2k@w.com', 2, '7647966b7343c29048673252e490f736', 0, '$2y$10$BNmT./8EkyoUuUC2izefO.fbzBaqVqIIPPlY22YeM7QkaJOUYy.T6', '', ''),
(7, '22', '', '22@laj22.com', 2222, '5ef698cd9fe650923ea331c15af3b160', 0, '$2y$10$SfC4VqzE2bP6r0JJRxCLKumXCLowKeFqJzrWos1fre.fwCLBdWPjC', '', ''),
(8, '2', '', '222@lasjf.com', 2, '912d2b1c7b2826caf99687388d2e8f7c', 0, '$2y$10$5/k3/8EPorjFaD9ag7NqcuO23p8zdSeQ/3yckrQWmEK7Y42jJ0I2W', '', ''),
(9, '2', '', '2lJ@kj.com', 2, 'a8c88a0055f636e4a163a5e3d16adab7', 0, '$2y$10$nbA5tE8lv7/BQRRqze2/nOznWD7k6rWIKg5sD2CO1G6OyAvZ/orlO', '', ''),
(10, 'wew', '', 'wewwww@gmail.com', 123, 'f2fc990265c712c49d51a18a32b39f0c', 0, '$2y$10$G1DWxmvQ1ossz75SaiMJYemQ.DzN..GsozI9Emw0zFSP75wCZA/gC', '', ''),
(11, 'name', '', 'email@gmail.com', 0, 'f7664060cc52bc6f3d620bcedc94a4b6', 0, '$2y$10$f51IAT0Lyg5.5s0TM9GiQuUsRXIZU37bMZpG.m.d66VxOPyhfRydW', '', ''),
(12, 'rTech', '', 'renan.nuevo@gmail.com', 987654321, '54a367d629152b720749e187b3eaa11b', 1, '$2y$10$qApkofY4CZyub/BldDY6HeEAFvk4SDpYektGDMlLUC5NSCvp1RJpu', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `city_branch_tbl`
--
ALTER TABLE `city_branch_tbl`
  ADD PRIMARY KEY (`branchID`);

--
-- Indexes for table `destination_tbl`
--
ALTER TABLE `destination_tbl`
  ADD PRIMARY KEY (`destinationID`);

--
-- Indexes for table `origin_city_tbl`
--
ALTER TABLE `origin_city_tbl`
  ADD PRIMARY KEY (`originID`);

--
-- Indexes for table `phone_tbl`
--
ALTER TABLE `phone_tbl`
  ADD PRIMARY KEY (`phoneNumber`);

--
-- Indexes for table `trucktype_tbl`
--
ALTER TABLE `trucktype_tbl`
  ADD PRIMARY KEY (`truckID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `bookingID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `city_branch_tbl`
--
ALTER TABLE `city_branch_tbl`
  MODIFY `branchID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `destination_tbl`
--
ALTER TABLE `destination_tbl`
  MODIFY `destinationID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `trucktype_tbl`
--
ALTER TABLE `trucktype_tbl`
  MODIFY `truckID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
