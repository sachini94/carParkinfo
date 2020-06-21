-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 06:57 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvsupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `advamcontacts`
--

CREATE TABLE `advamcontacts` (
  `Parker_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address_Line1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address_Line2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address_City` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address_Postcode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile_Number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Accept_Marketing_Info` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `advamvehicles`
--

CREATE TABLE `advamvehicles` (
  `Parker_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Access_Identity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vehicle_Make` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vehicle_Model` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_06_09_021942_create__advam_contacts_table', 1),
(2, '2020_06_09_131327_create__advam_vehicles_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
