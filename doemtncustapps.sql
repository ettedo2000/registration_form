-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2013 at 03:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doemtncustapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(3, 'doemountain', 'password1'),
(5, 'DoeMountain', 'FreeSpirit');

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE IF NOT EXISTS `regform` (
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(35) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `contact` varchar(6) NOT NULL,
  `volunteer` varchar(40) NOT NULL,
  `volunteer1` varchar(45) NOT NULL,
  `volunteer2` varchar(45) NOT NULL,
  `time` varchar(3) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`First_Name`, `Last_Name`, `Email`, `Phone`, `contact`, `volunteer`, `volunteer1`, `volunteer2`, `time`) VALUES
('Tina', 'Delahunty', 'jdel40@hotmail.com', '5614144372', 'Email', 'Database Managment', 'none', 'none', '3 h'),
('Mark', 'Simons', 'marksimons@centurylink.net', '4235555555', 'Email', 'Light Trail Maintenance', 'Landscaping', 'none', '6 h'),
('Odette', 'Simons', 'odettesimons@centurylink.net', '4237275151', 'Email', 'Database Managment', 'none', 'none', '6 h'),
('odette', 'Simons', 'odettesimons@live.com', '4237275151', 'Email', 'Database Managment', 'none', 'none', '6 h'),
('Test', 'Test', 'test@test.com', '4235555555', 'Phone', 'Database Management', 'Equestrian Trail Maintenance', 'Hicking Trail Maintenance', '15 '),
('Tomy', 'Tommy', 'tom@email.com', '4235555555', 'Phone', 'Cleaning', 'Database Management', 'none', '3 h');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
