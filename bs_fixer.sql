-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2016 at 09:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bs_fixer`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`comment_ID` int(7) NOT NULL,
  `text` int(11) NOT NULL,
  `published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ID_fk` int(7) NOT NULL,
  `event_ID_fk` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_ID`, `text`, `published`, `user_ID_fk`, `event_ID_fk`) VALUES
(1, 121, '2016-02-27 17:30:55', 1, 1),
(2, 121, '2016-02-27 17:31:43', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`event_ID` int(7) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `x` double NOT NULL,
  `y` double NOT NULL,
  `picture` varchar(1024) NOT NULL,
  `problem_ID_fk` int(7) DEFAULT '0',
  `user_ID_fk` int(7) NOT NULL,
  `interested` int(11) NOT NULL DEFAULT '0',
  `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_Due` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_ID`, `title`, `description`, `x`, `y`, `picture`, `problem_ID_fk`, `user_ID_fk`, `interested`, `submitted`, `time_Due`) VALUES
(1, '1', '1', 1, 1, '1', 1, 1, 3, '2016-02-27 14:00:26', '2000-01-01 00:00:00'),
(2, '1', '1', 1, 1, '1', 1, 1, 3, '2016-02-27 14:28:13', NULL),
(3, '1', '1', 1, 1, '1', 1, 1, 3, '2016-02-27 14:28:15', NULL),
(4, '1', '1', 1, 1, '1', 1, 1, 3, '2016-02-27 14:29:30', '2000-01-01 00:00:00'),
(5, '1', '1', 1, 1, '1', 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '123', '1', 1, 1, '1', 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE IF NOT EXISTS `problem` (
`problem_ID` int(7) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `x` double NOT NULL,
  `y` double NOT NULL,
  `picture` varchar(1024) DEFAULT NULL,
  `user_ID_fk` int(7) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `solved` int(11) NOT NULL,
  `date_Solved` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`problem_ID`, `title`, `description`, `submitted`, `x`, `y`, `picture`, `user_ID_fk`, `rating`, `solved`, `date_Solved`) VALUES
(1, '1', '1', '0000-00-00 00:00:00', 1, 1, '1', 0, 2, 0, '0000-00-00'),
(2, '1', '1', '0000-00-00 00:00:00', 1, 1, '1', 0, 6, 0, '0000-00-00'),
(3, '1', '1', '0000-00-00 00:00:00', 1, 1, '1', 0, 1, 0, '0000-00-00'),
(4, '1', '1', '0000-00-00 00:00:00', 1, 1, '1', 0, 1, 0, '0000-00-00'),
(5, '1231', '1', '0000-00-00 00:00:00', 1, 1, '1', 1, 1, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_ID` int(7) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `f_Name` varchar(128) NOT NULL,
  `l_Name` varchar(128) NOT NULL,
  `mail` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `username`, `password`, `f_Name`, `l_Name`, `mail`) VALUES
(1, '$user', '$pass', '$f_name', '$l_name', '$mail'),
(2, 'GoshoGoten69', 'tainoobichamazis', '', '', 'mumun@abv.bg'),
(3, 'GoshoGoten69', 'tainoobichamazis', 'Georgi', 'Mehmed', 'mumun@abv.bg'),
(4, 'GoshoGoten69', 'tainoobichamazis', 'Georgi', 'Mehmed', 'mumun@abv.bg'),
(5, 'GoshoGoten69', 'tainoobichamazis', 'Georgi', 'Mehmed', 'mumun@abv.bg'),
(6, 'GoshoGoten69', 'tainoobichamazis', 'Georgi', 'Mehmed', 'mumun@abv.bg'),
(7, 'GoshoGoten69', 'tainoobichamazis', 'Georgi', 'Mehmed', 'mumun@abv.bg'),
(8, 'GoshoGoten6922121', 'tainoobichamazis', 'Georgi', 'Mehmed', 'mumun@abv.bg'),
(9, 'GoshoGoten6922121', 'tainoobichamazis', 'Georgi', 'Mehmed', 'mumun@abv.bg'),
(10, 'GoshoGoten69', 'tainoobichamazis', 'Georgi', 'Mehmed', 'mumun@abv.bg'),
(11, 'GoshoGoten69', 'tainoobichamazis', 'Georgi', 'Mehmed', 'mumun@abv.bg'),
(12, 'GoshoGoten692412', 'tainoobichamazis', 'Georgi', 'Mehmed', 'mumun@abv.bg');

-- --------------------------------------------------------

--
-- Table structure for table `user_interested`
--

CREATE TABLE IF NOT EXISTS `user_interested` (
`userInterested_ID` int(7) NOT NULL,
  `user_ID_fk` int(7) NOT NULL,
  `event_ID_fk` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_upvote`
--

CREATE TABLE IF NOT EXISTS `user_upvote` (
`userUpvote_ID` int(7) NOT NULL,
  `user_ID_fk` int(7) NOT NULL,
  `problem_ID_fk` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_upvote`
--

INSERT INTO `user_upvote` (`userUpvote_ID`, `user_ID_fk`, `problem_ID_fk`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`comment_ID`), ADD KEY `user_ID_fk` (`user_ID_fk`), ADD KEY `comment_ID` (`comment_ID`), ADD KEY `event_ID_fk` (`event_ID_fk`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`event_ID`), ADD KEY `user_ID_fk` (`user_ID_fk`), ADD KEY `problem_ID_fk` (`problem_ID_fk`), ADD KEY `event_ID` (`event_ID`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
 ADD PRIMARY KEY (`problem_ID`), ADD KEY `Problem_ID` (`problem_ID`), ADD KEY `Problem_ID_2` (`problem_ID`), ADD KEY `problem_ID_3` (`problem_ID`), ADD KEY `problem_ID_4` (`problem_ID`), ADD KEY `user_id_fk` (`user_ID_fk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_ID`), ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `user_interested`
--
ALTER TABLE `user_interested`
 ADD PRIMARY KEY (`userInterested_ID`), ADD KEY `userInterested_ID` (`userInterested_ID`), ADD KEY `user_ID_fk` (`user_ID_fk`), ADD KEY `event_ID_fk` (`event_ID_fk`);

--
-- Indexes for table `user_upvote`
--
ALTER TABLE `user_upvote`
 ADD PRIMARY KEY (`userUpvote_ID`), ADD KEY `userUpvote_ID` (`userUpvote_ID`), ADD KEY `user_ID_fk` (`user_ID_fk`), ADD KEY `problem_ID_fk` (`problem_ID_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `comment_ID` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `event_ID` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
MODIFY `problem_ID` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_ID` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_interested`
--
ALTER TABLE `user_interested`
MODIFY `userInterested_ID` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_upvote`
--
ALTER TABLE `user_upvote`
MODIFY `userUpvote_ID` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_ID_fk`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`event_ID_fk`) REFERENCES `event` (`event_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
-- ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`problem_ID_fk`) REFERENCES `problem` (`problem_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`user_ID_fk`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_interested`
--
ALTER TABLE `user_interested`
ADD CONSTRAINT `user_interested_ibfk_1` FOREIGN KEY (`user_ID_fk`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `user_interested_ibfk_2` FOREIGN KEY (`event_ID_fk`) REFERENCES `event` (`event_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_upvote`
--
ALTER TABLE `user_upvote`
ADD CONSTRAINT `user_upvote_ibfk_1` FOREIGN KEY (`user_ID_fk`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `user_upvote_ibfk_2` FOREIGN KEY (`problem_ID_fk`) REFERENCES `problem` (`problem_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
