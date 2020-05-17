-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 12:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coronadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coronacase`
--

CREATE TABLE `coronacase` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `symp` varchar(255) NOT NULL,
  `message` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coronacase`
--

INSERT INTO `coronacase` (`id`, `username`, `email`, `mobile`, `symp`, `message`) VALUES
(13, 'mini', 'mini@gmail.com', '8669538314', 'fever,tired,', 0),
(14, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(15, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(16, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(17, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(18, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(19, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(20, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(21, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(22, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(23, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(24, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(25, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(26, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(27, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0),
(28, 'minal', 'minal@gmail.com', '8669538314', 'cold,fever,tired,', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coronacase`
--
ALTER TABLE `coronacase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coronacase`
--
ALTER TABLE `coronacase`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
