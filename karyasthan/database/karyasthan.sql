-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 05:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karyasthan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE IF NOT EXISTS `tbl_booking` (
  `b_id` int(5) NOT NULL AUTO_INCREMENT,
  `u_id` varchar(20) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  `b_category` varchar(10) NOT NULL,
  `b_days` varchar(10) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`b_id`, `u_id`, `c_id`, `b_category`, `b_days`) VALUES
(7, 'subinjohn@gmail.com', 'shane@gmail.com', '2', '2'),
(8, 'ashil@gmail.com', 'shane@gmail.com', '1', '5'),
(11, 'sanjay@gmail.com', 'shane@gmail.com', '2', '3'),
(12, 'ashil@gmail.com', 'sunny@gmail.com', '1', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `c_id` int(5) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`c_id`, `c_name`) VALUES
(1, 'painter'),
(2, 'carpenter'),
(4, 'ac repaer'),
(5, 'plumber'),
(6, 'computer repaer'),
(7, 'Electrition');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `u_id` varchar(30) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_pass` varchar(20) NOT NULL,
  `u_status` varchar(20) NOT NULL,
  `block` varchar(10) NOT NULL,
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`u_id`, `u_name`, `u_pass`, `u_status`, `block`, `log_id`) VALUES
('admin@gmail.com', 'admin', 'admin007', '1', 'Block', 1),
('ajil@gmail.com', 'ajil', 'ajil', '2', 'Unblock', 2),
('amal@gmail.com', 'amal', 'amal', '3', 'Unblock', 3),
('ashil@gmail.com', 'ashil', 'ashil', '2', 'Block', 4),
('sanjay@gmail.com', 'sanjay', 'sanjay', '2', 'Block', 5),
('shane@gmail.com', 'shane', 'shane', '3', 'Block', 6),
('sunny@gmail.com', 'sunny john', 'sunny', '3', 'Block', 7),
('subinjohn@gmail.com', 'subin', 'subin', '2', 'Block', 8),
('appu@gmail.com', 'appu', 'appu', '2', 'Block', 9),
('jins@gmail.com', 'jins', 'jins', '3', 'Block', 10),
('mini@gmail.com', 'mini', 'mini', '2', 'Block', 11),
('asdas@g.com', 'sss', 'asdas', '2', 'Unblock', 13),
('jithu@gmail.com', 'jithu', 'jithu', '2', 'Block', 17),
('jonath@gmail.com', 'jonath', 'jonath', '2', 'Block', 18),
('jithin@gmail.com', 'asd1234', 'jithin', '3', 'Block', 19),
('arun@gmail.com', 'arun12', 'arun', '3', 'Block', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg_user`
--

CREATE TABLE IF NOT EXISTS `tbl_reg_user` (
  `u_id` varchar(20) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `u_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reg_user`
--

INSERT INTO `tbl_reg_user` (`u_id`, `u_name`, `contact`, `category`, `photo`, `u_pass`) VALUES
('ajil@gmail.com', 'ajil', '8593967684', 'Null', 'Null', 'ajil'),
('alan@gmail.com', 'alan', '258963321', '1', '1510914611919902278569.jpg', 'alan'),
('amal@gmail.com', 'amal', '9061353569', 'Null', 'Null', 'amal'),
('appu@gmail.com', 'appu', '8086640769', '4', '1510914611919902278569.jpg', 'appu'),
('arun@gmail.com', 'arun12', '9638527410', 'Null', 'Null', 'arun'),
('asdas@g.com', 'sss', '7410258963', '1', '1510914611919902278569.jpg', 'asdas'),
('ashil@gmail.com', 'ashil', '8086640769', '1', '1510935438Fr-Dr-Francis-Karackat.jpg', 'ashil'),
('jins@gmail.com', 'jins', '9446986854', 'Null', 'Null', 'jins'),
('jithin@gmail.com', 'asd1234', '9495461810', 'Null', 'Null', 'jithin'),
('jithu@gmail.com', 'jithu', '8529637410', '5', '1510935663computer.jpg', 'jithu'),
('jonath@gmail.com', 'jonath', '7410258963', '5', '151108493620160204_172357 - Copy.jpg', 'jonath'),
('mini@gmail.com', 'mini', '9638527410', '2', '1510902123computer.jpg', 'mini'),
('sanjay@gmail.com', 'sanjay', '2589631478', '2', '1510902123computer.jpg', 'sanjay'),
('shane@gmail.com', 'shane', '2583697441', '1', '1510902123computer.jpg', 'shane'),
('subinjohn@gmail.com', 'subin', '9656091942', '2', '1510902123computer.jpg', 'subin'),
('sunny@gmail.com', 'sunny john', '9495461810', 'Null', 'Null', 'sunny');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
