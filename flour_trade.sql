-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2020 at 05:21 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flour_trade`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `Bank_ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `income` int(11) DEFAULT NULL,
  `outgo` int(11) DEFAULT NULL,
  `note` varchar(150) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Bank_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`Bank_ID`, `income`, `outgo`, `note`, `date`) VALUES
(3, 100000, 0, 'سرمایه اولیه', '1397-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `bargains`
--

DROP TABLE IF EXISTS `bargains`;
CREATE TABLE IF NOT EXISTS `bargains` (
  `B_ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `C_ID` smallint(6) DEFAULT NULL,
  `G_ID` smallint(6) DEFAULT NULL,
  `Stock_ID` smallint(6) DEFAULT NULL,
  `S_ID` smallint(6) DEFAULT NULL,
  `sell_or_buy` char(4) DEFAULT NULL,
  `price_in_ton` int(11) DEFAULT NULL,
  `number_of_cars` smallint(6) DEFAULT NULL,
  `sack` int(11) DEFAULT NULL,
  `weigh_in_Kilo` int(11) DEFAULT NULL,
  `reminder_weigh` int(11) DEFAULT NULL,
  `wastage` smallint(6) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `payment_amount` int(11) DEFAULT NULL,
  `reminder_amount` int(11) DEFAULT NULL,
  `trade_date` date DEFAULT NULL,
  `approve` char(9) DEFAULT NULL,
  `buy_ID` smallint(6) DEFAULT NULL,
  `profit` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`B_ID`),
  KEY `bargains_ibfk_2` (`G_ID`,`Stock_ID`),
  KEY `bargains_ibfk_1` (`C_ID`),
  KEY `bargains_ibfk_3` (`S_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bargains`
--

INSERT INTO `bargains` (`B_ID`, `C_ID`, `G_ID`, `Stock_ID`, `S_ID`, `sell_or_buy`, `price_in_ton`, `number_of_cars`, `sack`, `weigh_in_Kilo`, `reminder_weigh`, `wastage`, `total_price`, `payment_amount`, `reminder_amount`, `trade_date`, `approve`, `buy_ID`, `profit`) VALUES
(17, 4, 6, 4, 4, 'خرید', 400, 10, 1000, 49800, 24800, 200, 19920, 5000, 14920, '1397-01-16', NULL, 0, '0.00'),
(18, 4, 6, 4, 4, 'فروش', 420, 20, 500, 25000, 0, 0, 10500, 5000, 5500, '1397-01-16', NULL, 17, '10500.00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `C_ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `first_tel` char(10) DEFAULT NULL,
  `second_tel` char(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `approve_date` date DEFAULT NULL,
  `approve_result` int(11) DEFAULT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `name`, `last_name`, `first_tel`, `second_tel`, `address`, `start_date`, `approve_date`, `approve_result`) VALUES
(4, 'احمد', 'احمدی', '077900300', '', 'مزار شریف', '1397-01-06', '1397-01-06', NULL),
(5, 'وحید', 'نظری', '0799444333', '', 'کابل', '1397-01-06', '1397-01-06', NULL),
(6, 'فرزاد', 'فرزین', '0786100200', '', 'غزنی', '1397-01-06', '1397-01-06', NULL),
(7, 'فرید', 'عظیمی', '0788555444', '', 'هرات', '1397-01-06', '1397-01-06', NULL),
(8, 'علی', 'انصاری', '0799222333', '', 'مزار', '1397-01-14', '1397-01-14', NULL),
(9, 'صبور', 'انصاری', '077900400', '', 'مزار شریف', '1397-01-16', '1397-01-16', 0),
(10, 'ثمیر', 'احمدی', '0234234', '', 'کابل', '1397-02-03', '1397-02-03', NULL),
(11, 'بشیر', 'وفا', '23234234', '', 'قندهار', '1397-06-05', '1397-06-05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `general_cost`
--

DROP TABLE IF EXISTS `general_cost`;
CREATE TABLE IF NOT EXISTS `general_cost` (
  `cost_ID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `note` varchar(200) NOT NULL,
  `afg` int(11) NOT NULL,
  `exchange_rate` decimal(3,2) NOT NULL,
  `usd` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cost_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `G_ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `Stock_ID` smallint(6) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `stock_supply` int(11) DEFAULT NULL,
  PRIMARY KEY (`G_ID`,`Stock_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`G_ID`, `Stock_ID`, `name`, `stock_supply`) VALUES
(6, 0, 'ارد وطنی', 0),
(7, 0, 'ارد پهلوان چاپ', 0),
(6, 4, 'ارد وطنی', 24800);

-- --------------------------------------------------------

--
-- Table structure for table `installment`
--

DROP TABLE IF EXISTS `installment`;
CREATE TABLE IF NOT EXISTS `installment` (
  `I_ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `C_ID` smallint(6) NOT NULL,
  `B_ID` smallint(6) NOT NULL,
  `trade_type` char(6) NOT NULL,
  `payment_amount` int(11) DEFAULT NULL,
  `note` varchar(120) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `approve` char(9) DEFAULT NULL,
  PRIMARY KEY (`I_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `specific_cost`
--

DROP TABLE IF EXISTS `specific_cost`;
CREATE TABLE IF NOT EXISTS `specific_cost` (
  `SC_ID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `B_ID` smallint(6) DEFAULT NULL,
  `cost_type` varchar(200) NOT NULL,
  `afg` int(11) NOT NULL,
  `exchange_rate` decimal(5,2) NOT NULL,
  `usd` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`SC_ID`),
  KEY `fk` (`B_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `S_ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `staff_name` varchar(15) DEFAULT NULL,
  `first_tel` char(10) DEFAULT NULL,
  `second_tel` char(10) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`S_ID`, `name`, `staff_name`, `first_tel`, `second_tel`, `start_date`) VALUES
(4, 'برادران عزیزی', 'احمد', '0766555444', '', '1397-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `U_ID` smallint(6) NOT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`U_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `user_name`, `password`) VALUES
(1, 'ali ansari', '1397');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
