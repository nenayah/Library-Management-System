-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 10:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_contact`
--
CREATE DATABASE IF NOT EXISTS `home_contact` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_cs;
USE `home_contact`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--
-- Creation: Jan 08, 2020 at 07:26 AM
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `message` longtext COLLATE latin1_general_cs NOT NULL,
  `name` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `email` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `subject` text COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- RELATIONSHIPS FOR TABLE `contact`:
--

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `message`, `name`, `email`, `subject`) VALUES
(4, 'It\'s snowing today', 'Wineas', 'wineas234@wiwiw.com', 'Snow'),
(5, 'bla bla', 'bla', 'bla@bbla.com', 'Bleh'),
(9, 'asdfdjfcdkswefefcdsFEF123', 'SS', 'AS', 'AA'),
(10, 'jj', 'jj', 'jj', 'jj'),
(11, 'gg', 'gg', 'hg', 'gg'),
(12, 'gggggggggsssssssss', 'sssssssss', 'sss@ds.com', 'sssssssssssss'),
(13, 'jhgfds', 'ytfdsz', 'ch', 'ojhgfd'),
(14, 'ertyuiouygugy', 'yyyy', 'fff', 'fyff'),
(15, 'jkk', 'jkk', 'jkk', 'jkk'),
(16, 'jjjjj', 'k', 'lkk', 'aasou');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--
-- Creation: May 22, 2020 at 05:47 PM
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` text COLLATE latin1_general_cs NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- RELATIONSHIPS FOR TABLE `newsletter`:
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
