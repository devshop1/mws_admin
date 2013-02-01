-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2012 at 08:57 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vattrad`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_det_information`
--

CREATE TABLE IF NOT EXISTS `acc_det_information` (
  `acc_code` text NOT NULL,
  `gr_type` text NOT NULL,
  `acc_name` text NOT NULL,
  `short_name` text NOT NULL,
  `add1` text NOT NULL,
  `add2` text NOT NULL,
  `add3` text NOT NULL,
  `city` text NOT NULL,
  `phno` text NOT NULL,
  `telex` text NOT NULL,
  `gram` text NOT NULL,
  `mst_no` text NOT NULL,
  `cst_no` text NOT NULL,
  `other` text NOT NULL,
  `bank` text NOT NULL,
  `bank_acc` text NOT NULL,
  `propritor` text NOT NULL,
  `propritor1` text NOT NULL,
  `bazar_day` text NOT NULL,
  `sub_cd` text NOT NULL,
  `limit` text NOT NULL,
  `disc` text NOT NULL,
  `scheme1` text NOT NULL,
  `scheme2` text NOT NULL,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `acc_det_information`
--

INSERT INTO `acc_det_information` (`acc_code`, `gr_type`, `acc_name`, `short_name`, `add1`, `add2`, `add3`, `city`, `phno`, `telex`, `gram`, `mst_no`, `cst_no`, `other`, `bank`, `bank_acc`, `propritor`, `propritor1`, `bazar_day`, `sub_cd`, `limit`, `disc`, `scheme1`, `scheme2`, `ID`) VALUES
('1', '121', 'nitin kumar', 'nk', 'khatav', '', '', 'Khatav', '9028536574', 'q123', 'nitin@gmail.com', 'c234', 'h567', 'as123', 'maharashtra', '1122', 'paresh', 'gajkumar', 'tuesday', '', '', '1', '2', '3', 5),
('2', '122', 'saurbh', 'sd', 'bazarpet', '', '', 'satara', '9087654321', 'f23', 'saurbh@gmail.com', 't67', 'c234', 'p124', 'mhrashtra', 's4567', 'rutul', '', 'sunday', '', '', '2', '3', '4', 7),
('2', '123', 'seema', 'sj', 'santtukaram', '', '', 'pune', '9876546789', 'f34', 'seema@gmail.com', 't987', 'c567', 'p1234', 'bdoda', '5674', 'puja', 'nikita', 'monday', '', '', '2', '', '2', 8);

-- --------------------------------------------------------

--
-- Table structure for table `bank_book`
--

CREATE TABLE IF NOT EXISTS `bank_book` (
  `date` text NOT NULL,
  `v_no` text NOT NULL,
  `b_code` text NOT NULL,
  `a_name` text NOT NULL,
  `o_bal` text NOT NULL,
  `debit` text NOT NULL,
  `credit` text NOT NULL,
  `balance` text NOT NULL,
  `receipt` text NOT NULL,
  `payment` text NOT NULL,
  `ac_code` text NOT NULL,
  `chq_no` text NOT NULL,
  `withdraw` text NOT NULL,
  `deposited` text NOT NULL,
  `narration` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_book`
--


-- --------------------------------------------------------

--
-- Table structure for table `billst`
--

CREATE TABLE IF NOT EXISTS `billst` (
  `book` text NOT NULL,
  `vouno` text NOT NULL,
  `sr` text NOT NULL,
  `date` text NOT NULL,
  `acc_code` text NOT NULL,
  `debit` text NOT NULL,
  `credit` text NOT NULL,
  `receipts` text NOT NULL,
  `payment` text NOT NULL,
  `due` text NOT NULL,
  `amount` text NOT NULL,
  `vno` text NOT NULL,
  `no` text NOT NULL,
  `bk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billst`
--


-- --------------------------------------------------------

--
-- Table structure for table `brand_master`
--

CREATE TABLE IF NOT EXISTS `brand_master` (
  `item_name` text NOT NULL,
  `op_bal_dr` text NOT NULL,
  `op_bal_cr` text NOT NULL,
  `op_bal_pcs` text NOT NULL,
  `op_bal` text NOT NULL,
  `brand_code` text NOT NULL,
  `brand_name` text NOT NULL,
  `op_amnt` text NOT NULL,
  `inventory_control` text NOT NULL,
  `upper` text NOT NULL,
  `lower` text NOT NULL,
  `qty1` text NOT NULL,
  `qty2` text NOT NULL,
  `ul` text NOT NULL,
  `pcs_qty` text NOT NULL,
  `mrp` text NOT NULL,
  `sales_tax` text NOT NULL,
  `type` text NOT NULL,
  `hamali` text NOT NULL,
  `tolai` text NOT NULL,
  `pur` text NOT NULL,
  `sal` text NOT NULL,
  `pur1` text NOT NULL,
  `sal1` text NOT NULL,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `brand_master`
--

INSERT INTO `brand_master` (`item_name`, `op_bal_dr`, `op_bal_cr`, `op_bal_pcs`, `op_bal`, `brand_code`, `brand_name`, `op_amnt`, `inventory_control`, `upper`, `lower`, `qty1`, `qty2`, `ul`, `pcs_qty`, `mrp`, `sales_tax`, `type`, `hamali`, `tolai`, `pur`, `sal`, `pur1`, `sal1`, `ID`) VALUES
('cake', '0.00', '0.00', '0.00', '0.00', '2', 'pestry', '0.00', '', 'box', 'pcs', '1', '5', '1 box = pcs', '5.00', '10', '0.00', 'Inclusive', '1.00', '', '45.00', '50.00', '9.00', '10.00', 2),
('cake', '0.00', '0.00', '0.00', '0.00', '1234', 'blackforest', '10', 'u', 'box', 'pcs', '0.00', '0', '1 box = pcs', '10', '100', '0.00', 'Dependon', '1.00', '1.00', '100', '110', '10', '11', 6),
('cell', '0.00', '0.00', '0.00', '0.00', '412', 'nippo', '0.00', 'u', 'box', 'pcs', '0.00', '0', '1 box = pcs', '12.00', '120', '1', 'Dependon', '0.00', '0.00', '100', '120', '8.333333333333334', '10', 8);

-- --------------------------------------------------------

--
-- Table structure for table `broker`
--

CREATE TABLE IF NOT EXISTS `broker` (
  `code` text NOT NULL,
  `name` text NOT NULL,
  `add1` text NOT NULL,
  `add2` text NOT NULL,
  `add3` text NOT NULL,
  `city` text NOT NULL,
  `phno` text NOT NULL,
  `brate` text NOT NULL,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `broker`
--

INSERT INTO `broker` (`code`, `name`, `add1`, `add2`, `add3`, `city`, `phno`, `brate`, `ID`) VALUES
(' 1', 'anuja', 'khatav', 'baramati', 'khatav', 'pimpri', '2345876', '2', 2),
(' 3', 'reshama', 'phaltan', 'khatav', 'mulikvadi', 'satara', '13579', '4', 3),
('12', 'pankaj', 'pbn', 'latur', '', 'pune', '09856111', '4', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE IF NOT EXISTS `cash` (
  `vno` text NOT NULL,
  `ent` text NOT NULL,
  `vouno` text NOT NULL,
  `date` text NOT NULL,
  `payno` text NOT NULL,
  `pdate` text NOT NULL,
  `accode` text NOT NULL,
  `details` text NOT NULL,
  `debit` text NOT NULL,
  `credit` text NOT NULL,
  `person` text NOT NULL,
  `oc` text NOT NULL,
  `time` text NOT NULL,
  `tdate` text NOT NULL,
  `billyn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash`
--


-- --------------------------------------------------------

--
-- Table structure for table `cashr`
--

CREATE TABLE IF NOT EXISTS `cashr` (
  `vno` text NOT NULL,
  `ent` text NOT NULL,
  `vouno` text NOT NULL,
  `date` text NOT NULL,
  `rec` text NOT NULL,
  `rdate` text NOT NULL,
  `accode` text NOT NULL,
  `details` text NOT NULL,
  `debit` text NOT NULL,
  `credit` text NOT NULL,
  `person` text NOT NULL,
  `scode` text NOT NULL,
  `oc` text NOT NULL,
  `time` text NOT NULL,
  `tdate` text NOT NULL,
  `billyn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashr`
--


-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(40) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`sr_no`, `city_name`) VALUES
(1, 'Khatav'),
(2, 'pune'),
(3, 'khatav'),
(4, 'satara'),
(5, 'pimpri'),
(15, 'baramati'),
(16, 'kolhapur');

-- --------------------------------------------------------

--
-- Table structure for table `group_master`
--

CREATE TABLE IF NOT EXISTS `group_master` (
  `BSNO` varchar(20) DEFAULT NULL,
  `IN_OUT` varchar(20) DEFAULT NULL,
  `ASSET_HEADING` varchar(20) DEFAULT NULL,
  `SCHD` varchar(20) DEFAULT NULL,
  `GROUP_NAME` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_master`
--

INSERT INTO `group_master` (`BSNO`, `IN_OUT`, `ASSET_HEADING`, `SCHD`, `GROUP_NAME`) VALUES
('1', '0', 'FIXED ASSETS', 'F', 'Asset Group'),
('2', '0', 'CURRENT ASSETS', 'F', 'Asset Group'),
('3', '0', 'OTHER DEBIT BALANCES', 'F', 'Asset Group'),
('4', '0', 'SUNDRY DEBTORS', 'F', 'Asset Group'),
('5', '', 'DEPOSITE', 'F', 'Asset Group'),
('6', '', 'INVESTMENTS', 'F', 'Asset Group'),
('50', '0', 'BANK BALANCES', 'F', 'Liability Group'),
('51', '0', 'CASH IN HAND', 'F', 'Liability Group'),
('426', '', 'OTEHR INCOME', 'F', 'P & L Debit Group'),
('427', '', 'COMMICATION ( REC )', 'F', 'P & L Debit Group'),
('428', '', 'INTEREST ( REC )', 'F', 'P & L Debit Group'),
('429', '', 'DIVIDANT', 'F', 'P & L Debit Group'),
('101', '', 'INDIRECT EXP.', 'F', 'P & L Credit Group'),
('102', '', 'SALARIES & STAFF EXP', 'F', 'P & L Credit Group'),
('103', '', 'OTHER EXP.', 'F', 'P & L Credit Group'),
('104', '', 'INTEREST', 'F', 'P & L Credit Group'),
('105', '', 'DEPRECATION', 'F', 'P & L Credit Group'),
('106', '', 'SARES & BOUNDS', 'F', 'P & L Credit Group'),
('201', '', 'CAPITAL', 'F', 'P & L Credit Group'),
('202', '', 'SECURED LOANS', 'F', 'P & L Credit Group'),
('203', '0', 'SUNDRY CREDITORS', 'F', 'P & L Credit Group'),
('204', '', 'OTEHR CREDIT BALANCE', 'F', 'P & L Credit Group'),
('205', '', 'PROVISIONS', 'F', 'P & L Credit Group'),
('206', '', 'LOANS AND ADVANCES', 'F', 'P & L Credit Group');

-- --------------------------------------------------------

--
-- Table structure for table `item_master`
--

CREATE TABLE IF NOT EXISTS `item_master` (
  `group_code` text NOT NULL,
  `group_name` text NOT NULL,
  `opening` text NOT NULL,
  `sales` text NOT NULL,
  `purchase` text NOT NULL,
  `closing` text NOT NULL,
  `exp1` text NOT NULL,
  `exp2` text NOT NULL,
  `exp3` text NOT NULL,
  `inc1` text NOT NULL,
  `inc2` text NOT NULL,
  `inc3` text NOT NULL,
  `total1` text NOT NULL,
  `total2` text NOT NULL,
  `upper_unit` text NOT NULL,
  `lower_unit` text NOT NULL,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `item_master`
--

INSERT INTO `item_master` (`group_code`, `group_name`, `opening`, `sales`, `purchase`, `closing`, `exp1`, `exp2`, `exp3`, `inc1`, `inc2`, `inc3`, `total1`, `total2`, `upper_unit`, `lower_unit`, `ID`) VALUES
('1', 'cake', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0.00', '0.00', '', '', 1),
('2', 'cell', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0.00', '0.00', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `narration`
--

CREATE TABLE IF NOT EXISTS `narration` (
  `narration_no` text NOT NULL,
  `heading` text NOT NULL,
  `narration` text NOT NULL,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `narration`
--


-- --------------------------------------------------------

--
-- Table structure for table `purchase_det`
--

CREATE TABLE IF NOT EXISTS `purchase_det` (
  `date` text NOT NULL,
  `entry_id` text NOT NULL,
  `bill_no` text NOT NULL,
  `bill_date` text NOT NULL,
  `supplier` text NOT NULL,
  `payment_mode` text NOT NULL,
  `broker` text NOT NULL,
  `brand_code` text NOT NULL,
  `brand_name` text NOT NULL,
  `purchase_type` text NOT NULL,
  `mrp` text NOT NULL,
  `qty` text NOT NULL,
  `qty1` text NOT NULL,
  `rate` text NOT NULL,
  `rate1` text NOT NULL,
  `amount` text NOT NULL,
  `dis_per` text NOT NULL,
  `vat` text NOT NULL,
  `tax_typ` text NOT NULL,
  `dis_amnt` text NOT NULL,
  `tax_amnt` text NOT NULL,
  `total` text NOT NULL,
  `day` text NOT NULL,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `purchase_det`
--

INSERT INTO `purchase_det` (`date`, `entry_id`, `bill_no`, `bill_date`, `supplier`, `payment_mode`, `broker`, `brand_code`, `brand_name`, `purchase_type`, `mrp`, `qty`, `qty1`, `rate`, `rate1`, `amount`, `dis_per`, `vat`, `tax_typ`, `dis_amnt`, `tax_amnt`, `total`, `day`, `ID`) VALUES
('13/8/2012', 'P_6', '191', '13/8/2012', 'nitin kumar', 'Credit', 'anuja', 'nippo', '412', 'TaxFree', '120', '5', '0.00', '100', '8.333333333333334', '500', ' 1', '2', 'Dependon', '5', '9.9', '505', ' Monday', 6),
('16/8/2012', 'P_8', '192', '16/8/2012', 'saurbh', 'Cash', 'reshama', '2', 'pestry', 'TaxFree', '10', '0', '10', '45.00', '9.00', '90', ' 2', '2', 'Inclusive', '1.8', '1.764', '86', ' Thursday', 8);

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE IF NOT EXISTS `salesman` (
  `code` text NOT NULL,
  `name` text NOT NULL,
  `add1` text NOT NULL,
  `add2` text NOT NULL,
  `add3` text NOT NULL,
  `city` text NOT NULL,
  `phno` text NOT NULL,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `salesman`
--

INSERT INTO `salesman` (`code`, `name`, `add1`, `add2`, `add3`, `city`, `phno`, `ID`) VALUES
(' 2', 'prtiksha', 'natepute', 'satara', 'pimpri', 'undefined', '87843677', 7),
(' 3', 'anu', 'baramti', 'phaltan', 'khatav', 'pune', '12345678', 8),
(' 21', 'yash', 'khatav', 'pune', 'pimpri', 'satara', '98762345678', 9);

-- --------------------------------------------------------

--
-- Table structure for table `sale_det`
--

CREATE TABLE IF NOT EXISTS `sale_det` (
  `bill_no` text NOT NULL,
  `date` text NOT NULL,
  `customer` text NOT NULL,
  `payment_mode` text NOT NULL,
  `broker` text NOT NULL,
  `brand_code` text NOT NULL,
  `brand_name` text NOT NULL,
  `mrp` text NOT NULL,
  `qty` text NOT NULL,
  `qty1` text NOT NULL,
  `rate` text NOT NULL,
  `rate1` text NOT NULL,
  `amount` text NOT NULL,
  `tax_type` text NOT NULL,
  `s_tax` text NOT NULL,
  `tax_amnt` text NOT NULL,
  `scheme1` text NOT NULL,
  `scheme2` text NOT NULL,
  `dis_per` text NOT NULL,
  `dis_amnt` text NOT NULL,
  `hamali` text NOT NULL,
  `postage` text NOT NULL,
  `fright` text NOT NULL,
  `add_less` text NOT NULL,
  `acc_no` text NOT NULL,
  `other` text NOT NULL,
  `dis_per1` text NOT NULL,
  `dis_amount1` text NOT NULL,
  `total` text NOT NULL,
  `recived` text NOT NULL,
  `balance` text NOT NULL,
  `day` text NOT NULL,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sale_det`
--

INSERT INTO `sale_det` (`bill_no`, `date`, `customer`, `payment_mode`, `broker`, `brand_code`, `brand_name`, `mrp`, `qty`, `qty1`, `rate`, `rate1`, `amount`, `tax_type`, `s_tax`, `tax_amnt`, `scheme1`, `scheme2`, `dis_per`, `dis_amnt`, `hamali`, `postage`, `fright`, `add_less`, `acc_no`, `other`, `dis_per1`, `dis_amount1`, `total`, `recived`, `balance`, `day`, `ID`) VALUES
('321', '23/4/2012', 'seema', 'Cash', 'anuja', '2', 'pestry', '10', '1', '2', '50.00', '10.00', '70', 'Inclusive', '2', '1.386', '2', '1', '1', '0.7', '1', '2', '1', 'Add', '', '0.00', '1', '0.71', '70', '65', '5', ' Monday', 1);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `vouno` text NOT NULL,
  `name` text NOT NULL,
  `add1` text NOT NULL,
  `add2` text NOT NULL,
  `add3` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

