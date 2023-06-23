-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 11:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hangout`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(50) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 1,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Age` int(15) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `qrcode` varchar(250) NOT NULL,
  `userprofile` varchar(100) NOT NULL,
  `usercoverphoto` varchar(200) NOT NULL,
  `bio` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `role`, `Firstname`, `Lastname`, `Email`, `Password`, `Age`, `Gender`, `qrcode`, `userprofile`, `usercoverphoto`, `bio`) VALUES
(13, 1, 'Ghina', 'Shbib', 'ali.f2002@gmail.com ', '', 0, '', '0', 'profileuser/istockphoto-918508630-170667a.jpg', 'coverphoto/istockphoto-1295680594-170667a.jpg', 'Ghinaa my description'),
(14, 1, 'Mahmoud', 'Fawaz', 'mahmoud.f2002@gmail.com', '', 0, '', '0', 'https://i.ibb.co/5xgCL7V/austin-wade-X6-Uj51n5-CE8-unsplash.jpg', '0', ''),
(17, 1, 'Hasan', 'Fawaz', 'hasan@gmail.com', '32', 2, 'male', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
