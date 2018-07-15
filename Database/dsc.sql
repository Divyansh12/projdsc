-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2018 at 06:21 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `maibox`
--

DROP TABLE IF EXISTS `maibox`;
CREATE TABLE IF NOT EXISTS `maibox` (
  `username` varchar(256) DEFAULT NULL,
  `mailTo` varchar(256) DEFAULT NULL,
  `subject` varchar(256) DEFAULT NULL,
  `body` varchar(256) DEFAULT NULL,
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maibox`
--

INSERT INTO `maibox` (`username`, `mailTo`, `subject`, `body`) VALUES
('raj', 'raj@gmail.com', 'bank', 'hdfc'),
('rajeev', 'rajeev@gmail.com', 'bank', 'hdfc');

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

DROP TABLE IF EXISTS `regist`;
CREATE TABLE IF NOT EXISTS `regist` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email_id` varchar(256) NOT NULL,
  `security_quest` varchar(256) NOT NULL,
  `answer` varchar(256) NOT NULL,
  `dob` date DEFAULT NULL,
  `hobby` varchar(256) DEFAULT NULL,
  `gender` varchar(256) NOT NULL,
  `Mob_no` bigint(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`username`, `password`, `email_id`, `security_quest`, `answer`, `dob`, `hobby`, `gender`, `Mob_no`) VALUES
('Divyansh12345', 'divyansh', 'di@mail.com', 'What is your first car name', '12332', '2018-06-26', 'Swimming , Music', '', 9898989878),
('abs', 'asvnads', 'di@gamil.com', 'any', 'ans', '2018-08-07', 'any', 'male', 9898989898),
('raj', 'f', 'df@gamil.com', 'Where were you born', '213', '2018-06-27', 'Swimming', 'Male', 9898989891),
('details', 'ss', 'df@gamil.com', 'Who is your favourite soccer player', 'messi', '2018-06-03', 'Paragliding , Music', 'Male', 3214235231),
('Name', '12.div', 'df@gamil.com', 'What is your pet name', 'messi', '2018-01-03', 'Paragliding , Music', 'Male', 9642213403),
('divyansh', '1223', 'df@gamil.com', 'What is your favourite place', 'messi', '2018-07-01', 'Swimming', 'Male', 1234567891),
('raj2', '1234', 'raj@gmial.com', 'What is your pet name', '2443', '2018-06-03', 'Swimming', 'Male', 1234567892);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
