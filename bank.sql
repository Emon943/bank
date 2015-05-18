-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.34-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema bank
--

CREATE DATABASE IF NOT EXISTS bank;
USE bank;

--
-- Definition of table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `account_number` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `balance` decimal(10,3) NOT NULL,
  PRIMARY KEY (`account_number`),
  KEY `branch_name` (`branch_name`),
  CONSTRAINT `account_ibfk_2` FOREIGN KEY (`branch_name`) REFERENCES `branch` (`branch_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`account_number`,`branch_name`,`balance`) VALUES 
 ('1223','Mohakhali','123.000'),
 ('123','Dhanmondhi','1253.000'),
 ('1233','123','123.000'),
 ('12345','Dhanmondhi','123.220'),
 ('SB_0055','Mohakhali','250000.000');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;


--
-- Definition of table `borrower`
--

DROP TABLE IF EXISTS `borrower`;
CREATE TABLE `borrower` (
  `customer_name` varchar(255) NOT NULL,
  `loan_number` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_name`,`loan_number`),
  KEY `loan_number` (`loan_number`),
  CONSTRAINT `borrower_ibfk_1` FOREIGN KEY (`customer_name`) REFERENCES `customer` (`customer_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `borrower_ibfk_2` FOREIGN KEY (`loan_number`) REFERENCES `loan` (`loan_number`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower`
--

/*!40000 ALTER TABLE `borrower` DISABLE KEYS */;
INSERT INTO `borrower` (`customer_name`,`loan_number`) VALUES 
 ('Mahedi Azad','123');
/*!40000 ALTER TABLE `borrower` ENABLE KEYS */;


--
-- Definition of table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE `branch` (
  `branch_name` varchar(255) NOT NULL,
  `branch_city` varchar(255) NOT NULL,
  `assets` decimal(10,3) NOT NULL,
  PRIMARY KEY (`branch_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` (`branch_name`,`branch_city`,`assets`) VALUES 
 ('123','2123','2123.000'),
 ('Dhanmondhi','Dhanmondhi','1000000.000'),
 ('Mohakhali','Mohakhali','20000.000');
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;


--
-- Definition of table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `customer_name` varchar(255) NOT NULL,
  `customer_street` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`customer_name`,`customer_street`,`customer_city`) VALUES 
 ('Mahedi Azad','Jakir hossain road','Mohammadpor'),
 ('Moti','Rajiya soltana road','Mohammadpor');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;


--
-- Definition of table `depositor`
--

DROP TABLE IF EXISTS `depositor`;
CREATE TABLE `depositor` (
  `customer_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_name`,`account_number`),
  KEY `account_number` (`account_number`),
  CONSTRAINT `depositor_ibfk_1` FOREIGN KEY (`customer_name`) REFERENCES `customer` (`customer_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `depositor_ibfk_2` FOREIGN KEY (`account_number`) REFERENCES `account` (`account_number`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depositor`
--

/*!40000 ALTER TABLE `depositor` DISABLE KEYS */;
INSERT INTO `depositor` (`customer_name`,`account_number`) VALUES 
 ('Mahedi Azad','123'),
 ('Mahedi Azad','12345'),
 ('Moti','12345');
/*!40000 ALTER TABLE `depositor` ENABLE KEYS */;


--
-- Definition of table `loan`
--

DROP TABLE IF EXISTS `loan`;
CREATE TABLE `loan` (
  `loan_number` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `amount` decimal(10,3) NOT NULL,
  PRIMARY KEY (`loan_number`),
  KEY `branch_name` (`branch_name`),
  CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`branch_name`) REFERENCES `branch` (`branch_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

/*!40000 ALTER TABLE `loan` DISABLE KEYS */;
INSERT INTO `loan` (`loan_number`,`branch_name`,`amount`) VALUES 
 ('001','Dhanmondhi','120000.000'),
 ('12152','Mohakhali','150000.000'),
 ('123','Dhanmondhi','12125.000');
/*!40000 ALTER TABLE `loan` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
