-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Host: db676206635.db.1and1.com
-- Generation Time: Apr 06, 2017 at 12:19 PM
-- Server version: 5.5.54-0+deb7u2-log
-- PHP Version: 5.4.45-0+deb7u8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db676206635`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE IF NOT EXISTS `logintb` (
  `lig` int(20) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `typ` varchar(20) NOT NULL,
  `flg` varchar(20) NOT NULL,
  PRIMARY KEY (`lig`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`lig`, `uid`, `pwd`, `typ`, `flg`) VALUES
(1, 'admin', '8c5ef95c140df7c6c93f07923741a15c', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`mid`, `mname`) VALUES
(1, 'Master'),
(2, 'Data Entry');

-- --------------------------------------------------------

--
-- Table structure for table `orderform`
--

CREATE TABLE IF NOT EXISTS `orderform` (
  `OrderId` int(11) NOT NULL AUTO_INCREMENT,
  `memid` varchar(100) NOT NULL,
  `cartorderid` varchar(100) NOT NULL,
  `itemId` int(11) NOT NULL,
  `itemQty` int(11) NOT NULL,
  `Cname` varchar(255) NOT NULL,
  `Cemail` varchar(255) NOT NULL,
  `Cphone` bigint(20) NOT NULL,
  `Caddress` text NOT NULL,
  `total_amt` mediumint(9) NOT NULL,
  `is_paid` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `Ordered_at` datetime NOT NULL,
  PRIMARY KEY (`OrderId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `orderform`
--

INSERT INTO `orderform` (`OrderId`, `memid`, `cartorderid`, `itemId`, `itemQty`, `Cname`, `Cemail`, `Cphone`, `Caddress`, `total_amt`, `is_paid`, `details`, `Ordered_at`) VALUES
(1, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-01 12:07:44'),
(2, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-01 12:10:09'),
(3, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-01 12:10:43'),
(4, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-01 12:17:53'),
(5, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-01 12:18:11'),
(6, 'TM2', 'VNZLN2', 1, 1, 'sumathi', 'esumathi@gmail.com', 0, '', 100, 0, '', '2017-04-01 03:42:21'),
(7, 'TM1', 'VNZLN3', 1, 1, 'George', 'guwah699@gmail.com', 0, '', 100, 0, '', '2017-04-01 03:44:29'),
(8, 'TM2', 'VNZLN4', 1, 1, 'joel', 'joel@gmail.com', 0, '', 100, 0, '', '2017-04-01 03:47:21'),
(9, 'TM1', 'VNZLN3', 1, 1, 'George', 'guwah699@gmail.com', 0, '', 100, 0, '', '2017-04-01 04:52:44'),
(10, 'TM1', 'VNZLN4', 1, 1, 'joel', 'joel@gmail.com', 0, '', 100, 0, '', '2017-04-01 05:02:41'),
(11, 'TM1', 'VNZLN5', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-01 05:26:07'),
(12, 'TM2', 'VNZLN6', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 200, 0, '', '2017-04-01 05:40:30'),
(13, 'TM2', 'VNZLN6', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 200, 0, '', '2017-04-01 05:40:38'),
(14, 'TM2', 'VNZLN7', 1, 1, 'test', 'testabc@gmail.com', 0, '', 100, 0, '', '2017-04-01 05:42:29'),
(15, 'TM5', 'VNZLN8', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-01 05:43:43'),
(16, 'TM5', 'VNZLN9', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-01 05:49:27'),
(17, 'TM3', 'VNZLN10', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-01 07:00:21'),
(18, 'TM4', 'VNZLN11', 1, 1, 'xxx', 'xxx@gmail.com', 0, '', 100, 0, '', '2017-04-01 08:47:33'),
(19, 'TM4', 'VNZLN12', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-01 08:49:54'),
(20, 'TM4', 'VNZLN12', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-01 08:49:54'),
(21, 'TM4', 'VNZLN12', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-01 08:49:54'),
(22, 'TM5', 'VNZLN13', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-01 09:11:34'),
(23, 'TM6', 'VNZLN14', 1, 1, 'Fontia ', 'f.neels@gmail.com', 0, '', 100, 0, '', '2017-04-01 11:19:02'),
(24, 'TM9', 'VNZLN15', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-02 03:55:23'),
(25, 'TM9', 'VNZLN15', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-02 03:55:45'),
(26, 'TM1', 'VNZLN16', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-03 09:38:03'),
(27, 'TM1', 'VNZLN16', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-03 09:38:03'),
(28, 'TM1', 'VNZLN16', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-03 09:38:03'),
(29, 'TM1', 'VNZLN16', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-03 09:38:03'),
(30, 'TM1', 'VNZLN16', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-03 09:38:03'),
(31, 'TM1', 'VNZLN17', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-03 05:09:43'),
(32, 'TM1', 'VNZLN18', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-03 08:49:28'),
(33, 'TM1', 'VNZLN18', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-03 08:49:30'),
(34, 'TM1', 'VNZLN19', 1, 1, 'test@tes.com', 'test@test.com', 0, '', 0, 0, '', '2017-04-04 02:03:07'),
(35, 'TM1', 'VNZLN19', 1, 1, 'test@tes.com', 'test@test.com', 0, '', 0, 0, '', '2017-04-04 02:03:07'),
(36, 'TM2', 'VNZLN20', 1, 1, 'sumathi', 'esumo@gmail.com', 0, '', 100, 0, '', '2017-04-04 12:21:06'),
(37, 'TM4', 'VNZLN4', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-04 04:15:28'),
(38, 'TM7', 'VNZLN7', 1, 1, 'test', 'testabc@gmail.com', 0, '', 100, 0, '', '2017-04-05 11:14:17'),
(39, 'TM7', 'VNZLN7', 1, 1, 'test', 'testabc@gmail.com', 0, '', 100, 0, '', '2017-04-05 11:17:19'),
(40, 'TM7', 'VNZLN7', 1, 1, 'test', 'testabc@gmail.com', 0, '', 100, 0, '', '2017-04-05 11:21:25'),
(41, 'TM7', 'VNZLN7', 1, 1, 'test', 'testabc@gmail.com', 0, '', 100, 0, '', '2017-04-05 11:27:12'),
(42, 'TM7', 'VNZLN7', 1, 1, 'test', 'testabc@gmail.com', 0, '', 100, 0, '', '2017-04-05 11:27:55'),
(43, 'TM7', 'VNZLN7', 1, 1, 'test', 'testabc@gmail.com', 0, '', 100, 0, '', '2017-04-05 11:38:23'),
(44, 'TM7', 'VNZLN7', 1, 1, 'test', 'testabc@gmail.com', 0, '', 100, 0, '', '2017-04-05 11:38:23'),
(45, 'TM7', 'VNZLN7', 1, 1, 'test', 'testabc@gmail.com', 0, '', 100, 0, '', '2017-04-05 11:38:59'),
(46, 'TM7', 'VNZLN7', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-05 11:41:28'),
(47, 'TM8', 'VNZLN8', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-05 01:34:09'),
(48, 'TM8', 'VNZLN8', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-05 01:37:40'),
(49, 'TM8', 'VNZLN8', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-05 01:40:24'),
(50, 'TM8', 'VNZLN8', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-05 01:40:41'),
(51, 'TM8', 'VNZLN8', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-05 03:36:21'),
(52, 'TM8', 'VNZLN8', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-05 03:36:53'),
(53, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-05 04:33:49'),
(54, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-05 04:33:49'),
(55, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-05 04:33:49'),
(56, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-05 04:33:56'),
(57, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-05 04:33:56'),
(58, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-05 04:33:56'),
(59, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-05 04:36:11'),
(60, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-05 04:36:11'),
(61, 'TM1', 'VNZLN1', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 300, 0, '', '2017-04-05 04:36:11'),
(62, 'TM2', 'VNZLN2', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-05 05:40:56'),
(63, 'TM2', 'VNZLN2', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-05 05:40:56'),
(64, 'TM2', 'VNZLN2', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-05 05:41:56'),
(65, 'TM2', 'VNZLN2', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-05 05:41:56'),
(66, 'TM2', 'VNZLN2', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-05 08:28:17'),
(67, 'TM1', 'VNZLN1', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 01:44:33'),
(68, 'TM2', 'VNZLN2', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 02:54:05'),
(69, 'TM3', 'VNZLN3', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 11:47:13'),
(70, 'TM3', 'VNZLN3', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 11:47:13'),
(71, 'TM3', 'VNZLN3', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 11:47:13'),
(72, 'TM3', 'VNZLN3', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 11:47:13'),
(73, 'TM3', 'VNZLN3', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 11:47:13'),
(74, 'TM1', 'VNZLN4', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 12:14:14'),
(75, 'TM168', 'VNZLN5', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 12:28:43'),
(76, 'TM168', 'VNZLN5', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 12:35:43'),
(77, 'TM168', 'VNZLN5', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 12:37:57'),
(78, 'TM174', 'VNZLN6', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 200, 0, '', '2017-04-06 12:56:34'),
(79, 'TM174', 'VNZLN6', 1, 1, 'Malar', 'm.malar123@gmail.com', 0, '', 200, 0, '', '2017-04-06 12:56:34'),
(80, 'TM169', 'VNZLN7', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 01:14:30'),
(81, 'TM169', 'VNZLN7', 1, 1, '', '', 0, '', 0, 0, '', '2017-04-06 01:14:30'),
(82, 'TM178', 'VNZLN8', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-06 01:52:03'),
(83, 'TM178', 'VNZLN8', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-06 01:52:34'),
(84, 'TM178', 'VNZLN9', 1, 1, 'Rowthrinath', 'rowthrinath.natarajan@testperfectlimited.com', 0, '', 100, 0, '', '2017-04-06 01:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`pid`, `product_name`, `cat_image`) VALUES
(3, 'Suits', ''),
(4, 'Shoes', 'shoe.jpg'),
(5, 'Ties', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_type` int(11) NOT NULL,
  `prod_sub_cat` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_category` varchar(100) NOT NULL,
  `prod_material` varchar(100) NOT NULL,
  `prod_color` varchar(100) NOT NULL,
  `prod_code` varchar(100) NOT NULL,
  `prod_des` text NOT NULL,
  `prod_size` varchar(100) NOT NULL,
  `prod_quantity` int(11) NOT NULL,
  `prod_stock` int(11) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `discount_code` varchar(100) NOT NULL,
  `prod_image1` varchar(100) NOT NULL,
  `prod_image2` varchar(100) NOT NULL,
  `prod_image3` varchar(100) NOT NULL,
  `prod_image4` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `prod_type`, `prod_sub_cat`, `prod_name`, `prod_category`, `prod_material`, `prod_color`, `prod_code`, `prod_des`, `prod_size`, `prod_quantity`, `prod_stock`, `prod_price`, `discount_code`, `prod_image1`, `prod_image2`, `prod_image3`, `prod_image4`, `created_at`) VALUES
(1, 4, 7, 'Temad Black', 'Casuals', 'Leather', 'Dropdown to select color Black/Brown', 'TB-001', 'This is a high quality show with soft sole that is confortable and stylish to wear.', '5', 4, 1, 100, 'VANZ#100', '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rolprvs`
--

CREATE TABLE IF NOT EXISTS `rolprvs` (
  `rid` int(10) unsigned DEFAULT '0',
  `mid` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rolprvs`
--

INSERT INTO `rolprvs` (`rid`, `mid`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE IF NOT EXISTS `submenu` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mmid` varchar(45) DEFAULT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `pid` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`mid`, `mmid`, `sname`, `fname`, `pid`) VALUES
(1, '1', 'Add Category', 'Add Category', '18'),
(2, '1', 'Sub Category ', 'Add Sub Category', '19'),
(3, '2', 'Product Entry', 'Add Product Details', '20');

-- --------------------------------------------------------

--
-- Table structure for table `sub_product_category`
--

CREATE TABLE IF NOT EXISTS `sub_product_category` (
  `scid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `scname` varchar(100) NOT NULL,
  `scat_image` varchar(255) NOT NULL,
  PRIMARY KEY (`scid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `sub_product_category`
--

INSERT INTO `sub_product_category` (`scid`, `cid`, `scname`, `scat_image`) VALUES
(1, 1, 'Casual', ''),
(2, 1, 'Formal', ''),
(3, 1, 'T-Shirts', ''),
(4, 1, 'Polo Shirts', ''),
(5, 2, 'Jeans', ''),
(6, 2, 'Chinos', ''),
(7, 4, 'Leather shoes', ''),
(8, 4, 'Loafer shoes', ''),
(9, 4, 'Pumps', ''),
(10, 4, 'Sandals', ''),
(11, 4, 'Derby', '');

-- --------------------------------------------------------

--
-- Table structure for table `tempcart`
--

CREATE TABLE IF NOT EXISTS `tempcart` (
  `MemId` varchar(20) NOT NULL,
  `OrderId` varchar(20) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `Qty` varchar(50) NOT NULL,
  `ItemID` varchar(200) NOT NULL,
  `Checkout` varchar(20) NOT NULL,
  `OrderDate` date NOT NULL,
  `item_rate` float NOT NULL,
  `Tempid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Tempid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

--
-- Dumping data for table `tempcart`
--

INSERT INTO `tempcart` (`MemId`, `OrderId`, `session_id`, `Qty`, `ItemID`, `Checkout`, `OrderDate`, `item_rate`, `Tempid`) VALUES
('TM1', 'VNZLN18', 'd08d1ce0578654bee5441be7a0df8c27', '1', '1', 'N', '2017-04-03', 0, 84),
('TM2', 'VNZLN21', '02cbadccb92b2ca9fa82dc8bd3e47ad8', '1', '1', 'N', '2017-04-04', 0, 103),
('TM2', 'VNZLN21', '02cbadccb92b2ca9fa82dc8bd3e47ad8', '1', '1', 'N', '2017-04-04', 0, 104),
('TM3', 'VNZLN21', '694b1c0014af7af2dadf6407f105c1c0', '1', '1', 'N', '2017-04-04', 0, 105),
('TM4', 'VNZLN4', 'fb2e33cce2c8f8a6c9c204e66aa455a8', '1', '1', 'N', '2017-04-04', 0, 106),
('TM7', 'VNZLN7', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 120),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 124),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 125),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 126),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 127),
('', '', '867fe2a94086e099be674bab03fec288', '1', '1', 'N', '2017-04-05', 0, 128),
('', '', '867fe2a94086e099be674bab03fec288', '1', '1', 'N', '2017-04-05', 0, 129),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 130),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 131),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 132),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 133),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 135),
('TM2', 'VNZLN2', '3788cac6d4591c92582a1c8f765f664d', '1', '1', 'N', '2017-04-05', 0, 140),
('TM2', 'VNZLN2', '3788cac6d4591c92582a1c8f765f664d', '1', '1', 'N', '2017-04-05', 0, 141),
('', '', '30bdc431d2eba2cf65a8536377a93806', '1', '1', 'N', '2017-04-05', 0, 142),
('', '', '30bdc431d2eba2cf65a8536377a93806', '1', '1', 'N', '2017-04-05', 0, 143),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-05', 0, 144),
('TM1', 'VNZLN1', '7ba68cf4e19b9c5135b184fc5a1144d0', '1', '1', 'N', '2017-04-05', 0, 145),
('TM1', 'VNZLN1', '7ba68cf4e19b9c5135b184fc5a1144d0', '1', '1', 'N', '2017-04-05', 0, 146),
('TM2', 'VNZLN2', '8b3867de6dbf1150858ae45191ca2923', '1', '1', 'N', '2017-04-05', 0, 147),
('TM3', 'VNZLN3', 'eee219f0cae1ec65017e4868c7ec9fe1', '1', '1', 'N', '2017-04-06', 0, 148),
('TM4', 'VNZLN4', 'd8e209995f6a87881b1deee2592ace6f', '1', '1', 'N', '2017-04-06', 0, 149),
('TM4', 'VNZLN4', 'd8e209995f6a87881b1deee2592ace6f', '1', '1', 'N', '2017-04-06', 0, 150),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-06', 0, 151),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-06', 0, 152),
('', '', 'a1541b84c67192fdb22fa5b70259c9ee', '1', '1', 'N', '2017-04-06', 0, 153),
('', '', '867fe2a94086e099be674bab03fec288', '1', '1', 'N', '2017-04-06', 0, 154),
('TM1', 'VNZLN1', '76eb921022cc3168d42425691a050d24', '1', '1', 'N', '2017-04-06', 0, 155),
('TM2', 'VNZLN2', '2dce2c195af320c57455d8ae3057b93e', '1', '1', 'N', '2017-04-06', 0, 156),
('', '', '867fe2a94086e099be674bab03fec288', '1', '1', 'N', '2017-04-06', 0, 158),
('', '', '867fe2a94086e099be674bab03fec288', '1', '1', 'N', '2017-04-06', 0, 159),
('TM1', 'VNZLN4', 'b9e5ac3fe0576c9e6ad953476ecd9bd7', '1', '1', 'N', '2017-04-06', 0, 166),
('TM167', 'VNZLN5', '99efc453317241c213733e2e0d3613fa', '1', '1', 'N', '2017-04-06', 0, 167),
('TM168', 'VNZLN5', '8793bb9a511a8e81056efa3c8c6cb1ea', '1', '1', 'N', '2017-04-06', 0, 168),
('TM169', 'VNZLN7', '9c7a5b6484217d6ed9697d2a4e2bdc17', '1', '1', 'N', '2017-04-06', 0, 176),
('TM169', 'VNZLN7', '9c7a5b6484217d6ed9697d2a4e2bdc17', '1', '1', 'N', '2017-04-06', 0, 177);

-- --------------------------------------------------------

--
-- Table structure for table `tempproducttable`
--

CREATE TABLE IF NOT EXISTS `tempproducttable` (
  `aid` int(20) NOT NULL AUTO_INCREMENT,
  `cid` int(20) NOT NULL,
  `scid` int(20) NOT NULL,
  `prodid` varchar(200) NOT NULL,
  `MRP` float NOT NULL,
  `stock` int(11) NOT NULL,
  `brandid` int(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
