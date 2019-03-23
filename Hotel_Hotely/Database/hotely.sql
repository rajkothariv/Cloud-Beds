-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 04:31 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotely`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin1', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `roomno` varchar(10) NOT NULL,
  `billamount` int(11) NOT NULL,
  `ispayment` int(11) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `uid`, `checkin`, `checkout`, `roomno`, `billamount`, `ispayment`) VALUES
(1, 2, '2017-04-10', '2017-04-13', 'LUX-007', 5000, 0),
(2, 2, '2017-04-10', '2017-04-12', 'LUX-008', 5000, 1),
(4, 2, '2017-04-04', '2017-04-06', 'LUX-013', 5000, 0),
(5, 2, '2017-04-03', '2017-04-04', 'LUX-010', 15000, 1),
(7, 3, '2017-04-04', '2017-04-05', ' LUX-008', 10000, 0),
(8, 3, '2017-04-04', '2017-04-06', 'DEL-011', 12000, 1),
(14, 3, '2017-04-05', '2017-04-06', 'DEL-012', 12000, 0),
(15, 3, '2017-04-10', '2017-04-13', 'COM-025', 8000, 1),
(16, 3, '2017-04-11', '2017-04-12', 'COM-021', 6000, 1),
(17, 3, '2017-04-13', '2017-04-14', 'COM-023', 6000, 1),
(18, 3, '2017-04-10', '2017-04-14', 'LUX-009', 15000, 1),
(19, 3, '2017-04-06', '2017-04-07', 'DEL-001', 3000, 0),
(20, 4, '2017-04-11', '2017-04-14', 'LUX-011', 15000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categoty`
--

CREATE TABLE IF NOT EXISTS `categoty` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `desc` varchar(110) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `onecalldoc` tinyint(1) NOT NULL,
  `isAC` tinyint(1) NOT NULL,
  `isMWater` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `cimage` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categoty`
--

INSERT INTO `categoty` (`cid`, `cname`, `desc`, `wifi`, `onecalldoc`, `isAC`, `isMWater`, `price`, `cimage`) VALUES
(1, 'Luxury Room', 'Full fledged room service.', 1, 1, 1, 1, 5000, 'luxury.jpg'),
(2, 'Deluxe Room', 'Medium Size Package', 1, 0, 1, 1, 3000, 'deluxe.jpg'),
(3, 'Comfort Room', 'Room for Students', 0, 0, 1, 1, 2000, 'comfort.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fcategory`
--

CREATE TABLE IF NOT EXISTS `fcategory` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fcategory`
--

INSERT INTO `fcategory` (`cid`, `cname`, `description`) VALUES
(1, 'South Indian', 'The traditional food of South India is simply delicious and easily digestible.```'),
(2, 'North Indian', 'North Indian cuisine is a part of Indian cuisine, from the region of Northern India which includes t'),
(3, 'Punjabi', 'Punjabi cuisine is associated with food from the Punjab region of India '),
(4, 'Gujarati', 'The sweet flavour of these dishes is believed to neutralize the slightly bland taste of the vegetabl'),
(5, 'Italian', 'Pizza, Pastas');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `fname`, `price`, `cid`, `image`) VALUES
(1, 'Masala Dosa', 300, 1, 'F_1.jpg'),
(2, 'Idli', 80, 1, 'F_2.jpg'),
(4, 'Chicken Dum Biryani', 200, 2, 'F_4.jpg'),
(5, 'Tandoori Chicken', 300, 3, 'F_5.jpg'),
(6, 'Machchli Amritsari', 210, 3, 'F_6.jpg'),
(7, 'Khaman', 80, 4, 'F_7.jpg'),
(8, 'Fafda Jalebi', 110, 4, 'F_8.jpg'),
(9, 'Pizza', 400, 5, 'F_9.jpg'),
(10, 'Pasta', 300, 5, 'F_10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `message` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `emailid`, `message`) VALUES
(9, 'abc', 'acb@gmail.com', 'efwe');

-- --------------------------------------------------------

--
-- Table structure for table `ord`
--

CREATE TABLE IF NOT EXISTS `ord` (
  `orderid` bigint(10) NOT NULL AUTO_INCREMENT,
  `userid` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `totalbill` bigint(10) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `ord`
--

INSERT INTO `ord` (`orderid`, `userid`, `date`, `totalbill`, `status`) VALUES
(21, 2, '2017-04-28', 5000, 0),
(22, 3, '2017-04-20', 2000, 0),
(24, 4, '2017-04-11', 80, 1),
(27, 4, '2017-04-11', 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `orderid` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `quantity` bigint(10) NOT NULL,
  `totalprice` bigint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `orderid`, `fname`, `quantity`, `totalprice`) VALUES
(26, 21, 'Masala Dosa', 5, 5000),
(27, 21, 'Manchurian', 10, 8000),
(28, 22, 'Pizza', 3, 500),
(29, 22, 'Pasta', 2, 800),
(30, 22, 'Sandwich', 8, 900),
(31, 22, 'Pav Bhaji', 1, 500),
(32, 24, 'Idli', 1, 80),
(35, 27, 'Masala Dosa', 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `roomid` int(11) NOT NULL AUTO_INCREMENT,
  `roomname` varchar(50) NOT NULL,
  `cid` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `accomodation` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`roomid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `roomname`, `cid`, `status`, `accomodation`, `image`) VALUES
(1, 'LUX-001', 1, 1, '1', 'L_1.jpeg'),
(2, 'LUX-002', 1, 1, '1', 'L_1.jpeg'),
(3, 'LUX-003', 1, 1, '1', 'L_1.jpeg'),
(4, 'LUX-004', 1, 1, '1', 'L_1.jpeg'),
(5, 'LUX-005', 1, 1, '2', 'L_2.jpeg'),
(6, 'LUX-006', 1, 1, '2', 'L_2.jpeg'),
(7, 'LUX-007', 1, 1, '2', 'L_2.jpeg'),
(8, 'LUX-008', 1, 1, '2', 'L_2.jpeg'),
(9, 'LUX-009', 1, 1, '3', 'L_3.jpeg'),
(10, 'LUX-010', 1, 1, '3', 'L_3.jpeg'),
(11, 'LUX-011', 1, 1, '3', 'L_3.jpeg'),
(12, 'LUX-012', 1, 1, '3', 'L_3.jpeg'),
(13, 'LUX-013', 1, 1, '4', 'L_4.jpeg'),
(14, 'LUX-014', 1, 1, '4', 'L_4.jpeg'),
(15, 'LUX-015', 1, 1, '4', 'L_4.jpeg'),
(16, 'LUX-016', 1, 1, '4', 'L_4.jpeg'),
(17, 'DEL-001', 2, 1, '1', 'D_1.jpeg'),
(18, 'DEL-002', 2, 1, '1', 'D_1.jpeg'),
(19, 'DEL-003', 2, 1, '1', 'D_1.jpeg'),
(20, 'DEL-004', 2, 1, '1', 'D_1.jpeg'),
(21, 'DEL-004', 2, 1, '2', 'D_2.jpeg'),
(22, 'DEL-005', 2, 1, '2', 'D_2.jpeg'),
(23, 'DEL-006', 2, 1, '2', 'D_2.jpeg'),
(24, 'DEL-007', 2, 1, '2', 'D_2.jpeg'),
(25, 'DEL-007', 2, 1, '3', 'D_3.jpeg'),
(26, 'DEL-008', 2, 1, '3', 'D_3.jpeg'),
(27, 'DEL-009', 2, 1, '3', 'D_3.jpeg'),
(28, 'DEL-010', 2, 1, '3', 'D_3.jpeg'),
(29, 'DEL-011', 2, 1, '4', 'D_4.jpeg'),
(30, 'DEL-012', 2, 1, '4', 'D_4.jpeg'),
(31, 'DEL-013', 2, 1, '4', 'D_4.jpeg'),
(32, 'DEL-014', 2, 1, '4', 'D_4.jpeg'),
(33, 'COM-013', 3, 1, '1', 'C_1.jpeg'),
(34, 'COM-014', 3, 1, '1', 'C_1.jpeg'),
(35, 'COM-035', 3, 1, '5', 'C_1.jpeg'),
(36, 'COM-016', 3, 1, '1', 'C_1.jpeg'),
(37, 'COM-017', 3, 1, '2', 'C_2.jpeg'),
(38, 'COM-018', 3, 1, '2', 'C_2.jpeg'),
(39, 'COM-019', 3, 1, '2', 'C_2.jpeg'),
(40, 'COM-020', 3, 1, '2', 'C_2.jpeg'),
(41, 'COM-021', 3, 1, '3', 'C_3.jpeg'),
(42, 'COM-022', 3, 1, '3', 'C_3.jpeg'),
(43, 'COM-023', 3, 1, '3', 'C_3.jpeg'),
(44, 'COM-024', 3, 1, '3', 'C_3.jpeg'),
(45, 'COM-025', 3, 1, '4', 'C_4.jpeg'),
(46, 'COM-026', 3, 1, '4', 'C_4.jpeg'),
(47, 'COM-027', 3, 1, '4', 'C_4.jpeg'),
(48, 'COM-028', 3, 1, '4', 'C_4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `accstatus` tinyint(1) NOT NULL,
  `city` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `password`, `name`, `email`, `mobileno`, `accstatus`, `city`) VALUES
(2, 'hardik', 'hardik123', 'Hardik Tuvra', '14bce175@nirmauni.ac.in', 9898050902, 1, 'Rajkot'),
(3, 'raj', 'raj123', 'Raj Kothari', 'raj.kothariv@gmail.com', 8347655770, 0, 'veraval'),
(4, 'mit', 'mit123', 'Mit', '14bce177@nirmauni.ac.in', 9898805508, 0, 'Ahmedabad');
