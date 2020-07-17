-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 11:41 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safekids_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `nino_table`
--

CREATE TABLE `nino_table` (
  `Id_nino` int(5) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Ap_paterno` varchar(50) NOT NULL,
  `Ap_materno` varchar(50) NOT NULL,
  `Fecha_nacimineto` date NOT NULL,
  `Id_padre` int(5) NOT NULL,
  `Id_pulsera` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nino_table`
--

INSERT INTO `nino_table` (`Id_nino`, `Nombre`, `Ap_paterno`, `Ap_materno`, `Fecha_nacimineto`, `Id_padre`, `Id_pulsera`) VALUES
(1, 'victor', 'Espinoza', 'Garcia', '2020-06-17', 1, 123123),
(4, 'victor', 'Cortez', '3', '2020-06-09', 2, 654654);

-- --------------------------------------------------------

--
-- Table structure for table `padre_table`
--

CREATE TABLE `padre_table` (
  `Id_padre` int(5) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Ap_paterno` varchar(50) NOT NULL,
  `Ap_materno` varchar(50) NOT NULL,
  `Fecha_nacimineto` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `padre_table`
--

INSERT INTO `padre_table` (`Id_padre`, `Nombre`, `Ap_paterno`, `Ap_materno`, `Fecha_nacimineto`, `Email`, `Password`) VALUES
(1, 'victor', 'Cortez', 'Garcia', '2006-06-06', 'hola2@gmail.com', '1234'),
(2, 'victor', 'Cortez', 'Garcia', '2020-06-17', 'hola1@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `pulsera_table`
--

CREATE TABLE `pulsera_table` (
  `Id_pulsera` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pulsera_table`
--

INSERT INTO `pulsera_table` (`Id_pulsera`) VALUES
(123123),
(321321),
(654654);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nino_table`
--
ALTER TABLE `nino_table`
  ADD PRIMARY KEY (`Id_nino`),
  ADD UNIQUE KEY `Id_pulsera` (`Id_pulsera`),
  ADD KEY `Id_padre` (`Id_padre`);

--
-- Indexes for table `padre_table`
--
ALTER TABLE `padre_table`
  ADD PRIMARY KEY (`Id_padre`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `pulsera_table`
--
ALTER TABLE `pulsera_table`
  ADD PRIMARY KEY (`Id_pulsera`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nino_table`
--
ALTER TABLE `nino_table`
  MODIFY `Id_nino` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `padre_table`
--
ALTER TABLE `padre_table`
  MODIFY `Id_padre` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nino_table`
--
ALTER TABLE `nino_table`
  ADD CONSTRAINT `nino_table_ibfk_1` FOREIGN KEY (`Id_padre`) REFERENCES `padre_table` (`Id_padre`),
  ADD CONSTRAINT `nino_table_ibfk_2` FOREIGN KEY (`Id_pulsera`) REFERENCES `pulsera_table` (`Id_pulsera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
