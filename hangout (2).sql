-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 11:41 AM
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
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `AdsID` int(11) NOT NULL,
  `AdsImage` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryname`) VALUES
(1, 'Food'),
(2, 'Sport'),
(3, 'Computers'),
(4, 'Cars');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(50) NOT NULL,
  `postID` int(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `commentDate` date NOT NULL,
  `likeID` int(50) NOT NULL,
  `userID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `follower`
--

CREATE TABLE `follower` (
  `followerID` int(50) NOT NULL,
  `userID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follower`
--

INSERT INTO `follower` (`followerID`, `userID`) VALUES
(1, 13),
(2, 13),
(3, 13);

-- --------------------------------------------------------

--
-- Table structure for table `following`
--

CREATE TABLE `following` (
  `followingID` int(50) NOT NULL,
  `userID` int(50) NOT NULL,
  `categoryID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `following`
--

INSERT INTO `following` (`followingID`, `userID`, `categoryID`) VALUES
(1, 13, 4),
(2, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `LikeID` int(50) NOT NULL,
  `userID` int(50) NOT NULL,
  `PostID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(50) NOT NULL,
  `Text` varchar(200) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp(),
  `userID` int(50) NOT NULL,
  `postImage` varchar(200) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `reportID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `Text`, `Time`, `userID`, `postImage`, `categoryId`, `reportID`) VALUES
(1, 'hiii ', '2023-06-21 15:03:08', 13, '', 4, NULL),
(2, 'hhhhhh', '2023-06-21 16:13:13', 13, '', 4, NULL),
(3, 'hhhhkkjkhjhkhkjghh', '2023-06-21 16:13:42', 13, '', 4, NULL),
(4, 'hiiiii', '2023-06-21 18:43:50', 13, '', 4, NULL),
(5, 'hiiiii', '2023-06-21 18:50:02', 13, '', 4, NULL),
(6, 'hiiiii', '2023-06-21 18:50:02', 13, '', 4, NULL),
(7, 'hiiiii', '2023-06-21 18:50:02', 13, '', 4, NULL),
(8, 'hiiiii', '2023-06-21 18:50:02', 13, '', 4, NULL),
(9, 'hiiiii', '2023-06-21 18:50:02', 13, '', 4, NULL),
(10, 'hiiiii', '2023-06-21 18:50:03', 13, '', 4, NULL),
(11, 'hiiiii', '2023-06-21 18:50:03', 13, '', 4, NULL),
(12, 'hiiiii', '2023-06-21 18:50:03', 13, '', 4, NULL),
(13, 'hiiiii', '2023-06-21 18:50:03', 13, '', 4, NULL),
(14, 'hiiiii', '2023-06-21 18:50:03', 13, '', 4, NULL),
(15, 'hiiiii', '2023-06-21 18:50:03', 13, '', 4, NULL),
(16, 'waittttt', '2023-06-22 16:18:40', 13, '', 4, NULL),
(26, 'ccc', '2023-06-21 18:56:45', 13, '', 4, NULL),
(27, 'kkk', '2023-06-21 18:56:45', 13, '', 4, NULL),
(28, 'kkkk', '2023-06-21 18:56:45', 13, '', 4, NULL),
(29, 'kkkk', '2023-06-21 18:56:45', 13, '', 4, NULL),
(30, 'kkkkk', '2023-06-21 18:56:45', 13, '', 4, NULL),
(31, 'kkkk', '2023-06-21 19:01:04', 13, '', 4, NULL),
(32, 'kkkkk', '2023-06-21 19:01:04', 13, '', 4, NULL),
(33, 'jjjjjj', '2023-06-21 19:01:04', 13, '', 4, NULL),
(34, 'aaaaa', '2023-06-21 19:01:04', 13, '', 4, NULL),
(35, 'hixxxxxiiii', '2023-06-21 19:01:04', 13, '', 4, NULL),
(36, 'zzzzz', '2023-06-21 19:01:04', 13, '', 4, NULL),
(37, 'mmmmm', '2023-06-21 19:01:04', 13, '', 4, NULL),
(38, 'hhhh', '2023-06-21 19:01:04', 13, '', 4, NULL),
(39, 'wwww', '2023-06-21 19:01:04', 13, '', 4, NULL),
(40, 'ffff', '2023-06-21 19:01:04', 13, '', 4, NULL),
(41, 'ccc', '2023-06-21 19:01:04', 13, '', 4, NULL),
(42, 'kkk', '2023-06-21 19:01:04', 13, '', 4, NULL),
(43, 'kkkk', '2023-06-21 19:01:05', 13, '', 4, NULL),
(44, 'kkkk', '2023-06-21 19:01:05', 13, '', 4, NULL),
(45, 'kkkkk', '2023-06-21 19:01:05', 13, '', 4, NULL),
(46, 'jjjjjj', '2023-06-21 19:01:05', 13, '', 4, NULL),
(47, 'aaaaa', '2023-06-21 19:01:05', 13, '', 4, NULL),
(48, 'hixxxxxiiii', '2023-06-21 19:01:05', 13, '', 4, NULL),
(49, 'zzzzz', '2023-06-21 19:01:05', 13, '', 4, NULL),
(50, 'mmmmm', '2023-06-21 19:01:05', 13, '', 4, NULL),
(51, 'hhhh', '2023-06-21 19:01:05', 13, '', 4, NULL),
(52, 'wwww', '2023-06-21 19:01:05', 13, '', 4, NULL),
(53, 'ffff', '2023-06-21 19:01:05', 13, '', 4, NULL),
(54, 'ccc', '2023-06-21 19:01:05', 13, '', 4, NULL),
(55, 'kkk', '2023-06-21 19:01:05', 13, '', 4, NULL),
(56, 'kkkk', '2023-06-21 19:01:05', 13, '', 4, NULL),
(57, 'kkkk', '2023-06-21 19:01:05', 13, '', 4, NULL),
(58, 'kkkkk', '2023-06-21 19:01:05', 13, '', 4, NULL),
(59, 'jjjjjj', '2023-06-21 19:01:05', 13, '', 4, NULL),
(60, 'aaaaa', '2023-06-21 19:01:05', 13, '', 4, NULL),
(61, 'hixxxxxiiii', '2023-06-21 19:01:05', 13, '', 4, NULL),
(62, 'zzzzz', '2023-06-21 19:01:05', 13, '', 4, NULL),
(63, 'mmmmm', '2023-06-21 19:01:05', 13, '', 4, NULL),
(64, 'hhhh', '2023-06-21 19:01:05', 13, '', 4, NULL),
(65, 'wwww', '2023-06-21 19:01:05', 13, '', 4, NULL),
(66, 'ffff', '2023-06-21 19:01:05', 13, '', 4, NULL),
(67, 'ccc', '2023-06-21 19:01:05', 13, '', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `reportID` int(11) NOT NULL,
  `postID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`reportID`, `postID`, `userID`) VALUES
(55, 65, 13),
(56, 64, 13),
(57, 61, 13),
(58, 58, 13),
(59, 62, 13),
(60, 67, 13),
(61, 49, 13),
(62, 57, 13),
(63, 60, 13),
(64, 54, 13),
(65, 34, 13),
(66, 43, 13),
(67, 39, 13);

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `shareID` int(50) NOT NULL,
  `postID` int(50) NOT NULL,
  `userID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `storyID` int(50) NOT NULL,
  `userID` int(50) NOT NULL,
  `storyTime` time(6) NOT NULL,
  `storyImage` varchar(100) NOT NULL,
  `storyTile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`AdsID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `postID` (`postID`),
  ADD KEY `likeID` (`likeID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `follower`
--
ALTER TABLE `follower`
  ADD PRIMARY KEY (`followerID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `following`
--
ALTER TABLE `following`
  ADD PRIMARY KEY (`followingID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`LikeID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `PostID` (`PostID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `categoryId` (`categoryId`),
  ADD KEY `FK_post_reports` (`reportID`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`reportID`),
  ADD KEY `postID` (`postID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`shareID`),
  ADD KEY `postID` (`postID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`storyID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `AdsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follower`
--
ALTER TABLE `follower`
  MODIFY `followerID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `following`
--
ALTER TABLE `following`
  MODIFY `followingID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `LikeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `shareID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `storyID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`postID`) REFERENCES `post` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`likeID`) REFERENCES `likes` (`LikeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `follower`
--
ALTER TABLE `follower`
  ADD CONSTRAINT `follower_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `following`
--
ALTER TABLE `following`
  ADD CONSTRAINT `following_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `following_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`PostID`) REFERENCES `post` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_post_reports` FOREIGN KEY (`reportID`) REFERENCES `reports` (`reportID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `post` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `share`
--
ALTER TABLE `share`
  ADD CONSTRAINT `share_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `post` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `share_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `story_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `story_ibfk_2` FOREIGN KEY (`storyID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
