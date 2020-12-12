-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2018 at 07:16 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_benefit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL,
  `create_id` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `status` enum('Admin','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `create_id`, `name`, `username`, `password`, `photo`, `status`) VALUES
(1, '', 'Shohag', 'shohag@gmail.com', 'ca4b8968f24ee88bb0dbd77312b2a095', '', 'Admin'),
(2, '', 'admin', 'admin@gmail.com', '18c6d818ae35a3e8279b5330eda01498', '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_audit_trail`
--

CREATE TABLE IF NOT EXISTS `tbl_audit_trail` (
  `slno` int(11) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `field_name` varchar(20) NOT NULL,
  `old_value` varchar(150) NOT NULL,
  `new_value` varchar(150) NOT NULL,
  `change_by` varchar(20) NOT NULL,
  `change_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_audit_trail`
--

INSERT INTO `tbl_audit_trail` (`slno`, `table_name`, `field_name`, `old_value`, `new_value`, `change_by`, `change_date`) VALUES
(1, 'tbl_vs_client', 'subscrpition_paid', '75.00', '10', '4', '2018-02-10'),
(2, 'tbl_vs_client', 'subscrpition_paid', '75.00', '10', '4', '2018-02-10'),
(3, 'tbl_vs_client', 'subscrpition_paid', '10.00', '10', '4', '2018-02-10'),
(4, 'tbl_vs_client', 'subscrpition_paid', '10.00', '10', '4', '2018-02-10'),
(5, 'tbl_vs_client', 'subscrpition_paid', '10.00', '9.95', '4', '2018-02-10'),
(6, 'tbl_vs_client', 'subscrpition_paid', '10.00', '9.95', '4', '2018-02-10'),
(7, 'tbl_vs_client', 'subscrpition_paid', '', '9.95', '3', '2018-02-10'),
(8, 'tbl_vs_client', 'subscrpition_paid', '', '9.95', '3', '2018-02-10'),
(9, 'tbl_vs_client', 'subscrpition_paid', '9.95', '9.95', '4', '2018-02-10'),
(10, 'tbl_vs_client', 'subscrpition_paid', '9.95', '9.95', '4', '2018-02-10'),
(11, 'tbl_vs_client', 'subscrpition_paid', '75.00', '75.00', '2768', '2018-02-12'),
(12, 'tbl_vs_client', 'subscrpition_paid', '0.00', '75.00', '4290', '2018-02-14'),
(13, 'tbl_vs_client', 'lifetime_pay', '399.00', '399.00', '4290', '2018-02-14'),
(14, 'tbl_vs_client', 'subscrpition_paid', '0.00', '75.00', '1960', '2018-02-14'),
(16, 'tbl_vs_client', 'lifetime_pay', '399.00', '399.00', '2859', '2018-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_authorized_representive`
--

CREATE TABLE IF NOT EXISTS `tbl_authorized_representive` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `auth_f_name` varchar(120) NOT NULL,
  `auth_l_name` varchar(100) NOT NULL,
  `relation` varchar(120) NOT NULL,
  `remark` text NOT NULL,
  `active_code` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_authorized_representive`
--

INSERT INTO `tbl_authorized_representive` (`id`, `client_id`, `auth_f_name`, `auth_l_name`, `relation`, `remark`, `active_code`) VALUES
(1, 5172, 'sho', 'mu', 'brother', 't', 0),
(2, 5170, 'habib', 'mulla', 'sons', 'tes', 0),
(5, 5170, 'tesss', 'testss', 'noss', 'testttss', 0),
(6, 1536, '', '', '', '', 0),
(7, 2008, '', '', '', '', 0),
(8, 2032, '', '', '', '', 0),
(12, 5170, 'client details', 'client details', 'client details', 'client details', 0),
(13, 3917, '', '', '', '', 0),
(14, 3917, '', '', '', '', 0),
(15, 0, '', '', '', '', 0),
(16, 2768, 'haks', 'maks', 'sons', 'Test oks', 0),
(17, 2768, 'dda', 'aasa', 'noa', 'daa', 0),
(18, 1154, 'sdd', 'dd', 'brother', 'ddd', 0),
(19, 1960, 'test', 'test', 'no', 'testing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank_master`
--

CREATE TABLE IF NOT EXISTS `tbl_bank_master` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_address` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bank_master`
--

INSERT INTO `tbl_bank_master` (`bank_id`, `bank_name`, `bank_address`) VALUES
(4, 'sdfawef', 'dafadf'),
(5, 'ss', 'ssssssssssss'),
(6, 'dddddddd', 'ddddddd'),
(7, 'UK bank', 'uk bank united'),
(8, 'sdfasdddddddddddd', 'sdafddddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE IF NOT EXISTS `tbl_cities` (
  `id` int(11) NOT NULL,
  `country_id` varchar(120) NOT NULL,
  `city_name` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id`, `country_id`, `city_name`) VALUES
(1, 'United States of America', 'New York'),
(2, 'United States of America', 'Los Angeles'),
(3, 'Canada', 'Capitals'),
(4, 'Canada', 'Alberta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companypaytrack`
--

CREATE TABLE IF NOT EXISTS `tbl_companypaytrack` (
  `id` int(11) NOT NULL,
  `comapny_code` int(11) NOT NULL,
  `company_roster_code` int(11) NOT NULL,
  `pay_month` float(15,2) NOT NULL,
  `pay_year` float(15,2) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_companypaytrack`
--

INSERT INTO `tbl_companypaytrack` (`id`, `comapny_code`, `company_roster_code`, `pay_month`, `pay_year`, `pay_date`, `pay_status`) VALUES
(1, 6, 0, 0.00, 75.00, '2017-11-08', 'Active'),
(2, 6, 0, 0.00, 75.00, '2017-11-08', 'Active'),
(3, 8, 0, 0.00, 100.00, '2017-11-18', 'Active'),
(4, 8, 0, 0.00, 100.00, '2017-11-18', 'Active'),
(5, 8, 0, 0.00, 120.00, '2017-11-18', 'Active'),
(6, 8, 0, 0.00, 120.00, '2017-11-18', 'Active'),
(7, 8, 0, 0.00, 130.00, '2017-11-18', 'Active'),
(8, 8, 0, 0.00, 130.00, '2017-11-18', 'Active'),
(9, 8, 0, 0.00, 60.00, '2017-11-18', 'Active'),
(10, 8, 0, 0.00, 60.00, '2017-11-18', 'Active'),
(11, 8, 0, 0.00, 50.00, '2017-11-18', 'Active'),
(12, 8, 0, 0.00, 50.00, '2017-11-18', 'Active'),
(13, 8, 0, 0.00, 130.00, '2017-11-18', 'Active'),
(14, 8, 0, 0.00, 130.00, '2017-11-18', 'Active'),
(15, 8, 0, 0.00, 43.00, '2017-11-18', 'Active'),
(16, 8, 0, 0.00, 43.00, '2017-11-18', 'Active'),
(17, 8, 0, 0.00, 50.00, '2017-11-18', 'Active'),
(18, 8, 0, 0.00, 50.00, '2017-11-18', 'Active'),
(19, 8, 0, 0.00, 75.00, '2017-11-18', 'Active'),
(20, 8, 0, 0.00, 75.00, '2017-11-18', 'Active'),
(21, 8, 0, 0.00, 70.00, '2017-11-18', 'Active'),
(22, 8, 0, 0.00, 70.00, '2017-11-18', 'Active'),
(23, 8, 0, 0.00, 75.00, '2017-11-18', 'Active'),
(24, 8, 0, 0.00, 75.00, '2017-11-18', 'Active'),
(25, 8, 0, 0.00, 75.00, '2017-11-18', 'Active'),
(26, 8, 0, 0.00, 75.00, '2017-11-18', 'Active'),
(27, 4, 0, 0.00, 10.00, '2018-02-10', 'Active'),
(28, 4, 0, 0.00, 10.00, '2018-02-10', 'Active'),
(29, 4, 0, 0.00, 10.00, '2018-02-10', 'Active'),
(30, 4, 0, 0.00, 10.00, '2018-02-10', 'Active'),
(31, 4, 0, 0.00, 9.95, '2018-02-10', 'Active'),
(32, 4, 0, 0.00, 9.95, '2018-02-10', 'Active'),
(33, 3, 0, 0.00, 9.95, '2018-02-10', 'Active'),
(34, 3, 0, 0.00, 9.95, '2018-02-10', 'Active'),
(35, 4, 0, 0.00, 9.95, '2018-02-10', 'Active'),
(36, 4, 0, 0.00, 9.95, '2018-02-10', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `name`) VALUES
(1, 'United States of America'),
(2, 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_roster`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_roster` (
  `id` int(11) NOT NULL,
  `company_code` int(11) NOT NULL,
  `company_roster_code` int(11) NOT NULL,
  `employeeid` varchar(15) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_designation` varchar(100) NOT NULL,
  `employee_date_of_birth` date NOT NULL,
  `employee_ssn` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_employee_roster`
--

INSERT INTO `tbl_employee_roster` (`id`, `company_code`, `company_roster_code`, `employeeid`, `employee_name`, `employee_designation`, `employee_date_of_birth`, `employee_ssn`) VALUES
(1, 2, 1, 'ddd3', 'dsaw', 'officer', '1989-08-26', 1231);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hr_company`
--

CREATE TABLE IF NOT EXISTS `tbl_hr_company` (
  `comapny_code` int(11) NOT NULL,
  `company_name` varchar(60) NOT NULL,
  `company_address` varchar(150) NOT NULL,
  `vs_code_company` varchar(20) NOT NULL,
  `no_of_employee_registered` int(4) NOT NULL,
  `last_payment_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hr_company`
--

INSERT INTO `tbl_hr_company` (`comapny_code`, `company_name`, `company_address`, `vs_code_company`, `no_of_employee_registered`, `last_payment_date`) VALUES
(2, 'UW', 'Dsvcxzcv D', '', 8, '2017-09-03'),
(3, 'Duro', 'Uk', '', 10, '2017-08-27'),
(4, 'Cd', 'Fdes', '', 4, '2017-09-13'),
(6, 'Test', 'Test Tes', '', 10, '2017-10-10'),
(8, 'Savdcsv', 'Dsvcscv', '', 10, '2017-10-11'),
(9, 'dsafasd', 'Dsvcscv', '', 10, '2017-10-11'),
(10, 'Dsxco', 'DEXCO', '', 4, '2017-10-12'),
(11, 'Testy', 'Testy', '', 10, '2017-10-25'),
(14, 'Cds', 'Sadas', '', 0, '2017-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hr_company_roster`
--

CREATE TABLE IF NOT EXISTS `tbl_hr_company_roster` (
  `company_roster_code` int(11) NOT NULL,
  `company_code` int(11) NOT NULL,
  `company_roster_create_date` date NOT NULL,
  `company_roster_status` varchar(10) NOT NULL,
  `roster_description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hr_company_roster`
--

INSERT INTO `tbl_hr_company_roster` (`company_roster_code`, `company_code`, `company_roster_create_date`, `company_roster_status`, `roster_description`) VALUES
(1, 2, '2017-08-24', 'Inactive', 'test Roster Description'),
(2, 3, '2017-08-26', 'Inactive', 'non '),
(3, 6, '2017-10-14', 'Inactive', 'shohag shohag test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_insurance_agent`
--

CREATE TABLE IF NOT EXISTS `tbl_insurance_agent` (
  `agent_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `agent_address` text NOT NULL,
  `ss_tax_id` varchar(50) NOT NULL,
  `agent_company_code` varchar(60) NOT NULL,
  `agents_license` varchar(50) NOT NULL,
  `agent_email` varchar(120) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `mail_verify` varchar(20) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_insurance_agent`
--

INSERT INTO `tbl_insurance_agent` (`agent_id`, `first_name`, `last_name`, `agent_address`, `ss_tax_id`, `agent_company_code`, `agents_license`, `agent_email`, `password`, `status`, `user_type`, `mail_verify`, `active`) VALUES
(1, 'Ddddddd', 'Ssssssssss', 'ddddddd', '', '0', '', 'shohagcse@gmail.com', 'aaaaaa', 'Approved', '', '59ef65c57419a', 1),
(3, 'Dewfssdxgv', 'Dsfdf', 'sdfsd', '', '0', '', 'fde@gmail.com', '8a94ecfa54dcb88a2fa993bfa6388f9e', 'Approved', 'agent', '59ef67ab9d502', 1),
(4, 'Ddd', 'Ggggg', 'dddddd', '', '0', '', 'asa@gmail.com', 'fd4d801731725513a4d77aa9bb35534b', 'Approved', 'agent', '59ef682cbbecb', 1),
(5, 'Last namext', 'frist namet', 'Dhaka test', '232222', 'data testingss', '543534653654', 'aasa@gmail.com', '3dbe00a167653a1aaee01d93e77e730e', 'Approved', 'agent', '59ef6956127e0', 1),
(6, 'Safsdf', 'Dfdf', 'dfsdf', '', '0', '', 'aaaa@gmail.com', 'a35fe7f7fe8217b4369a0af4244d1fca', 'Approved', 'agent', '59ef69cfbce49', 0),
(10, 'Hjg', 'Mni', '', '', '0', '', 'shoha@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'Approved', 'agent', '59f45aeb6b90d', 0),
(11, 'Dff', 'Dsafsd', 'sdfsd', '', '', '', 'shwdfsfohagcse@gmail.com', '4589b8b6a21b964025a84f6499070b83', 'Approved', 'agent', '5a0ac841e68cb', 0),
(12, 'Dfds', 'Dsfsdf', 'sdfvsdb ', '3333', 'sdfdsvfxbv', '33333333333', 'saaahohagcse@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'Pending', 'agent', '5a0ae806c49b9', 1),
(13, 'We', 'Wed', '', '4444', '333', '33', 'dsaa33333s@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'Pending', 'agent', '5a2e65b8cafad', 0),
(14, 'Sdc', 'Sdx', '', '4444', 'dd', '233', 'ssshohadddgcse@gmail.com', '2a49f4219490063fc79217dabede6168', 'Pending', 'agent', '5a2fbfb647903', 0),
(15, 'Sdc', 'Sdx', '', '4444', 'dd', '233', 'ssshohddadddgcse@gmail.com', '2a49f4219490063fc79217dabede6168', 'Pending', 'agent', '5a2fc0aee43a9', 0),
(16, 'Sdc', 'Sdx', '', '4444', 'dd', '233', 'ssshccohddadddgcse@gmail.com', '49dec5fb8af4eeef7c95e7f5c66c8ae6', 'Pending', 'agent', '5a2fc0f42de41', 0),
(17, 'Sdc', 'Sdx', '', '4444', 'dd', '233', 'sssshcsscohddadddgcse@gmail.com', '83eb31c9749627ae244acc63c166d0ee', 'Pending', 'agent', '5a2fc3293c8c2', 0),
(18, 'Sdc', 'Sdx', '', '4444', 'dd', '233', 'ddsssshcsscohddadddgcse@gmail.com', '83eb31c9749627ae244acc63c166d0ee', 'Pending', 'agent', '5a2fc72d2ef78', 0),
(19, 'From', 'Valientines', '', '21243', 'val', '13214', 'valentines@gmail.com', '92ab2c1c8f150f5edfba5db5f640fb47', 'Pending', 'agent', '5a83dc2b1b142', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_insurance_company`
--

CREATE TABLE IF NOT EXISTS `tbl_insurance_company` (
  `insurance_comapny_id` int(11) NOT NULL,
  `company_name` varchar(60) NOT NULL,
  `company_address` varchar(150) NOT NULL,
  `company_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_insurance_company`
--

INSERT INTO `tbl_insurance_company` (`insurance_comapny_id`, `company_name`, `company_address`, `company_description`) VALUES
(1, 'test', 'tes addresss', 'insurance description'),
(2, 'ceu', 'fcsdvdf', 'sfddvd'),
(3, 'Dala', 'Test Dala', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_fees`
--

CREATE TABLE IF NOT EXISTS `tbl_payment_fees` (
  `id` int(11) NOT NULL,
  `type_payment` varchar(100) NOT NULL,
  `amount_fees` float(15,2) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment_fees`
--

INSERT INTO `tbl_payment_fees` (`id`, `type_payment`, `amount_fees`, `type`, `status`) VALUES
(1, 'Annual fees', 75.00, 'annual', 1),
(2, 'Company fees', 75.00, 'company', 1),
(3, 'Delinquent Customer Annual fees', 9.95, 'renewal', 1),
(4, 'Searcher Accesses Code fees', 19.95, 'search', 1),
(5, 'Lifetime Membership', 399.00, 'lifetime ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vscode_master`
--

CREATE TABLE IF NOT EXISTS `tbl_vscode_master` (
  `vs_code` varchar(20) NOT NULL,
  `vs_code_type` varchar(20) NOT NULL,
  `vs_code_issue_date` date NOT NULL,
  `vs_code_status` varchar(10) NOT NULL,
  `vs_code_description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vscode_master`
--

INSERT INTO `tbl_vscode_master` (`vs_code`, `vs_code_type`, `vs_code_issue_date`, `vs_code_status`, `vs_code_description`) VALUES
('59ef7772a2334', 'Client', '2018-10-31', 'InActive', ''),
('59ef77ab9d617', 'Client', '2017-11-18', 'Active', ''),
('59ef78d1076cc', 'Client', '0000-00-00', 'InActive', ''),
('59ef7949183d0', 'Client', '0000-00-00', 'InActive', ''),
('59ef7a3192232', 'Client', '0000-00-00', 'InActive', 'Search Pay'),
('59ef7a570220e', 'Client', '0000-00-00', 'InActive', ''),
('59ef825d74ffa', 'Client', '0000-00-00', 'InActive', ''),
('59ef82c04780e', 'Client', '0000-00-00', 'InActive', ''),
('59ef82e2429b6', 'Client', '0000-00-00', 'InActive', ''),
('59ef83ce67d71', 'Client', '0000-00-00', 'InActive', ''),
('59ef93869a2cc', 'Client', '0000-00-00', 'InActive', ''),
('59ef95b1cf569', 'Client', '0000-00-00', 'InActive', ''),
('59f432a96b335', 'Client', '2018-11-08', 'Active', ''),
('59f45eeacfa66', 'Client', '0000-00-00', 'InActive', ''),
('59f46058481bc', 'Client', '0000-00-00', 'InActive', ''),
('59f478b8c0727', 'Client', '2019-01-23', 'InActive', 'Search Pay'),
('59f479fed8bc9', 'Client', '0000-00-00', 'InActive', ''),
('59f577b516af2', 'Client', '0000-00-00', 'InActive', ''),
('59f577bbca216', 'Client', '0000-00-00', 'InActive', ''),
('59f578080d33b', 'Client', '2018-11-05', 'InActive', ''),
('59f5784a782d3', 'Client', '0000-00-00', 'InActive', ''),
('59f5788295ffa', 'Client', '0000-00-00', 'InActive', ''),
('59f85640053ba', 'Client', '0000-00-00', 'InActive', ''),
('59f8569bdd972', 'Client', '0000-00-00', 'InActive', ''),
('59f85708742e9', 'Client', '0000-00-00', 'InActive', ''),
('59f85986007a9', 'Client', '0000-00-00', 'InActive', ''),
('59febe3c8b1ce', 'Company', '0000-00-00', 'InActive', ''),
('59febe3cca96f', 'Company', '0000-00-00', 'InActive', ''),
('59febe3ce08ff', 'Company', '0000-00-00', 'InActive', ''),
('59febec26270c', 'Company', '0000-00-00', 'InActive', ''),
('59febec2849ec', 'Company', '0000-00-00', 'InActive', ''),
('59febec29f79c', 'Company', '0000-00-00', 'InActive', ''),
('59fec51d59914', 'Company', '0000-00-00', 'InActive', ''),
('59fec51d7bbf4', 'Company', '0000-00-00', 'InActive', ''),
('59fec51dac934', 'Company', '0000-00-00', 'InActive', ''),
('59fec592ac26b', 'Company', '0000-00-00', 'InActive', ''),
('59fec592d336b', 'Company', '0000-00-00', 'InActive', ''),
('59fec5930fe6c', 'Company', '0000-00-00', 'InActive', ''),
('59fec91dde222', 'Company', '0000-00-00', 'InActive', ''),
('59fec91e137f2', 'Company', '0000-00-00', 'InActive', ''),
('59fec91e35ad2', 'Company', '0000-00-00', 'InActive', ''),
('59fecd055d7d9', 'Company', '2018-11-08', 'Active', ''),
('5a0ab91f7891b', 'Company', '2018-11-18', 'Active', ''),
('5a0ab91fabd6b', 'Company', '2018-11-18', 'Active', ''),
('5a10500c7d67f', 'Client', '0000-00-00', 'InActive', ''),
('5a1bb630a3ac3', 'Client', '0000-00-00', 'InActive', ''),
('5a28ebed1657c', 'Client', '0000-00-00', 'InActive', ''),
('5a28f992a2e97', 'Client', '0000-00-00', 'InActive', ''),
('5a28ff088bee8', 'Client', '0000-00-00', 'InActive', ''),
('5a290bad431a6', 'Client', '0000-00-00', 'InActive', ''),
('5a2e65f191e34', 'Client', '0000-00-00', 'InActive', ''),
('5a2e66c9090c3', 'Client', '0000-00-00', 'InActive', ''),
('5a2e6e8885763', 'Client', '0000-00-00', 'InActive', ''),
('5a2e71cd30c01', 'Company', '2018-12-11', 'Active', ''),
('5a2e71d070b77', 'Company', '2018-12-11', 'Active', ''),
('5a2e72f6721f9', 'Company', '2018-12-11', 'Active', ''),
('5a2e72fa7e54f', 'Company', '2018-12-11', 'Active', ''),
('5a2fa77aeccaa', 'Company', '2116-12-12', 'Active', ''),
('5a2fa77e9c39f', 'Company', '2116-12-12', 'Active', ''),
('5a4372d4e5c1b', 'Client', '0000-00-00', 'InActive', ''),
('5a43732e8bda2', 'Client', '0000-00-00', 'InActive', ''),
('5a452516490af', 'Client', '0000-00-00', 'InActive', ''),
('5a45251889fc4', 'Client', '0000-00-00', 'InActive', ''),
('5a6725fa3d57d', 'Client', '0000-00-00', 'InActive', ''),
('5a67269743c82', 'Client', '2117-01-31', 'InActive', ''),
('5a689993b8966', 'Client', '0000-00-00', 'InActive', ''),
('5a689a28bb1b7', 'Client', '0000-00-00', 'InActive', ''),
('5a6dacb50aad1', 'Client', '0000-00-00', 'InActive', ''),
('5a6db01b73fdd', 'Client', '0000-00-00', 'InActive', ''),
('5a6ded7306120', 'Client', '0000-00-00', 'InActive', ''),
('5a6def3d9f17a', 'Client', '0000-00-00', 'InActive', ''),
('5a6df768b4276', 'Client', '0000-00-00', 'InActive', ''),
('5a6df7f325623', 'Client', '0000-00-00', 'InActive', ''),
('5a6df8b6bbac9', 'Client', '0000-00-00', 'InActive', ''),
('5a6ee35582212', 'Client', '2019-02-12', 'InActive', ''),
('5a71a7de48a79', 'Client', '2019-01-31', 'InActive', ''),
('5a7ee6bc93bd7', 'Company', '2019-02-10', 'Active', ''),
('5a7ee6c1ab2e2', 'Company', '2019-02-10', 'Active', ''),
('5a8173008f99b', 'Client', '0000-00-00', 'InActive', ''),
('5a8173d519fe0', 'Client', '0000-00-00', 'InActive', ''),
('5a81801e53bc4', 'Company', '2019-02-12', 'Active', ''),
('5a818020b2f37', 'Company', '2019-02-12', 'Active', ''),
('5a8180618fd7f', 'Company', '2019-02-12', 'Active', ''),
('5a81806250db1', 'Company', '2019-02-12', 'Active', ''),
('5a8180629a192', 'Company', '2019-02-12', 'Active', ''),
('5a81806324e92', 'Company', '2019-02-12', 'Active', ''),
('5a81806785982', 'Company', '2019-02-12', 'Active', ''),
('5a81806806a42', 'Company', '2019-02-12', 'Active', ''),
('5a818069052d6', 'Company', '2019-02-12', 'Active', ''),
('5a818069b3019', 'Company', '2019-02-12', 'Active', ''),
('5a81806a42b39', 'Company', '2019-02-12', 'Active', ''),
('5a81819576626', 'Company', '2117-02-12', 'Active', ''),
('5a818196e72d9', 'Company', '2117-02-12', 'Active', ''),
('5a818198c57cd', 'Company', '2117-02-12', 'Active', ''),
('5a81819ceff85', 'Company', '2117-02-12', 'Active', ''),
('5a818212d635c', 'Company', '2117-02-12', 'Active', ''),
('5a8182139c1af', 'Company', '2117-02-12', 'Active', ''),
('5a8182146db80', 'Company', '2117-02-12', 'Active', ''),
('5a818214b9671', 'Company', '2117-02-12', 'Active', ''),
('5a8182154c073', 'Company', '2117-02-12', 'Active', ''),
('5a818216c1375', 'Company', '2117-02-12', 'Active', ''),
('5a81821790636', 'Company', '2117-02-12', 'Active', ''),
('5a8182184e787', 'Company', '2117-02-12', 'Active', ''),
('5a818218a17a7', 'Company', '2117-02-12', 'Active', ''),
('5a818219cfdd9', 'Company', '2117-02-12', 'Active', ''),
('5a81821a81bda', 'Company', '2117-02-12', 'Active', ''),
('5a81821c0152f', 'Company', '2117-02-12', 'Active', ''),
('5a81821c5ba7f', 'Company', '2117-02-12', 'Active', ''),
('5a81821cb11b0', 'Company', '2117-02-12', 'Active', ''),
('5a81821d85291', 'Company', '2117-02-12', 'Active', ''),
('5a81821fb38c4', 'Company', '2117-02-12', 'Active', ''),
('5a81822091db6', 'Company', '2117-02-12', 'Active', ''),
('5a818223a6dae', 'Company', '2117-02-12', 'Active', ''),
('5a81822540ce3', 'Company', '2117-02-12', 'Active', ''),
('5a8182267be38', 'Company', '2117-02-12', 'Active', ''),
('5a818228881a2', 'Company', '2117-02-12', 'Active', ''),
('5a818228efdd7', 'Company', '2117-02-12', 'Active', ''),
('5a818262e662d', 'Company', '2117-02-12', 'Active', ''),
('5a8182634cd26', 'Company', '2117-02-12', 'Active', ''),
('5a82be0f8385f', 'Client', '2117-02-14', 'InActive', ''),
('5a82be402ec89', 'Client', '0000-00-00', 'InActive', ''),
('5a82be87d31db', 'Client', '0000-00-00', 'InActive', ''),
('5a82bebd0beee', 'Client', '0000-00-00', 'InActive', ''),
('5a83d4b19d4a1', 'Client', '2019-02-14', 'InActive', ''),
('5a83d5c97bfdb', 'Client', '2117-02-14', 'InActive', ''),
('5a83dabe613b0', 'Company', '2019-02-14', 'Active', ''),
('5a83dac07c934', 'Company', '2019-02-14', 'Active', ''),
('5a83db1595855', 'Company', '2117-02-14', 'Active', ''),
('5a83db164c476', 'Company', '2117-02-14', 'Active', ''),
('5a8525cd1ff87', 'Client', '0000-00-00', 'InActive', ''),
('5a8549f00a9d6', 'Company', '2117-02-15', 'Active', ''),
('5a854a14d19bb', 'Company', '2117-02-15', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vs_client`
--

CREATE TABLE IF NOT EXISTS `tbl_vs_client` (
  `client_id` varchar(11) NOT NULL,
  `client_first_name` varchar(30) NOT NULL,
  `client_last_name` varchar(30) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `client_email` varchar(30) NOT NULL,
  `client_ssn` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `client_address` text NOT NULL,
  `zip_code` varchar(120) NOT NULL,
  `vs_code` varchar(20) NOT NULL,
  `subscription_rcbl` float(15,2) NOT NULL,
  `subscrpition_paid` float(15,2) NOT NULL,
  `lifetime_pay` float(15,2) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `renewal_number` float(15,2) NOT NULL,
  `company_client` varchar(3) NOT NULL,
  `company_id` int(11) NOT NULL,
  `company_roster_id` int(11) NOT NULL,
  `company_employee_id` int(11) NOT NULL,
  `client_password` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vs_client`
--

INSERT INTO `tbl_vs_client` (`client_id`, `client_first_name`, `client_last_name`, `agent_id`, `client_email`, `client_ssn`, `country_name`, `city`, `state`, `client_address`, `zip_code`, `vs_code`, `subscription_rcbl`, `subscrpition_paid`, `lifetime_pay`, `valid_from`, `valid_to`, `renewal_number`, `company_client`, `company_id`, `company_roster_id`, `company_employee_id`, `client_password`, `status`, `active`) VALUES
('1112', 'Fn', 'Ln', 5, 'fnln@gmail.com', 0, '', '', '', 'dhaka', '', '5a82bebd0beee', 75.00, 0.00, 399.00, '0000-00-00', '2018-02-15', 0.00, 'N', 0, 0, 0, 'c4d3027aa852a1e12b24f62f92de5b96', 'Annual', 1),
('1606', 'tom', 'tory', 0, 'tom@gmail.com', 0, '', '', '', '', '', '5a83dabe613b0', 75.00, 75.00, 399.00, '2018-02-14', '2019-02-14', 9.95, 'Y', 6, 0, 0, 'b0afae8569dc764a11c09a0ee3f42dee', 'Annual', 0),
('1960', 'Paglu', 'Hasgu', 5, 'shohagprem@gmail.com', 0, '', '', '', 'Dhaka', '', '5a83d4b19d4a1', 75.00, 75.00, 399.00, '2018-02-14', '2019-02-14', 0.00, 'N', 0, 0, 0, '295e39c1cf9cce45d5eea90112da894d', 'Annual', 1),
('2859', 'Try', 'Tru', 4, 'try23463t4@gmail.com', 0, '', '', '', 'test data', '', '5a83d5c97bfdb', 75.00, 0.00, 399.00, '2018-02-14', '2117-02-14', 0.00, 'N', 0, 0, 0, '1d1140f93fcce1ffa8c905a963ee3d7b', 'Lifetime', 1),
('4290', 'Flor', 'Pak', 0, 'shohag@gmail.com', 0, '', '', '', '', '', '5a82be0f8385f', 75.00, 75.00, 399.00, '2018-02-14', '2117-02-14', 0.00, 'N', 0, 0, 0, '3dbe00a167653a1aaee01d93e77e730e', 'Lifetime', 1),
('4426', 'shohag2', 'l2', 0, 'shohagcse2@gmail.com', 0, '', '', '', '', '', '5a8182634cd26', 75.00, 0.00, 399.00, '2018-02-12', '2017-02-12', 9.95, 'Y', 11, 0, 0, 'c4e3e1a23ce47b3205a036f52e2eb543', 'Annual ', 1),
('6060', 'tori', 'jary', 0, 'jary@gmail.com', 0, '', '', '', '', '', '5a83dac07c934', 75.00, 75.00, 399.00, '2018-02-14', '2019-02-14', 9.95, 'Y', 6, 0, 0, '4932675e76109f0582a6908d2ac2e2be', 'Annual', 0),
('6772', 'Shohag', 'Mia', 0, 'shohagmia@gmail.com', 0, '', '', '', '', '', '5a8525cd1ff87', 75.00, 75.00, 399.00, '2018-02-15', '2019-02-15', 0.00, 'N', 0, 0, 0, '179ad45c6ce2cb97cf1029e212046e81', 'Annual', 1),
('8258', 'Durnto', 'Dara', 5, 'durnot@gmail.com', 0, '', '', '', 'Data Test', '', '5a82be87d31db', 75.00, 0.00, 399.00, '0000-00-00', '0000-00-00', 0.00, 'N', 0, 0, 0, 'b61a4d62d159fce412d47286e483a237', '', 1),
('8797', 'Fat', 'Fro', 0, 'ftroy@gmail.com', 0, '', '', '', '', '', '5a8549f00a9d6', 75.00, 0.00, 399.00, '2018-02-15', '2117-02-15', 0.00, 'Y', 11, 0, 0, '481eac88fa1a129c5e52f50028c440ed', 'Lifetime', 0),
('8969', 'Rok', 'Ray', 0, 'tokray@gmail.com', 0, '', '', '', '', '', '5a854a14d19bb', 75.00, 0.00, 399.00, '2018-02-15', '2117-02-15', 0.00, 'Y', 11, 0, 0, '78479e17c6c3d386c6dde23ddb0dbbe8', 'Lifetime', 0),
('9599', 'Tesing', 'Data', 0, 'testingdata@gmail.com', 0, '', '', '', '', '', '5a82be402ec89', 75.00, 0.00, 399.00, '0000-00-00', '0000-00-00', 0.00, 'N', 0, 0, 0, '179ad45c6ce2cb97cf1029e212046e81', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vs_client_assest`
--

CREATE TABLE IF NOT EXISTS `tbl_vs_client_assest` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `asset_type` varchar(20) NOT NULL,
  `asset_address` varchar(150) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `boat_name` varchar(200) NOT NULL,
  `other_name` varchar(200) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vs_client_assest`
--

INSERT INTO `tbl_vs_client_assest` (`id`, `client_id`, `asset_type`, `asset_address`, `company_name`, `boat_name`, `other_name`, `remark`) VALUES
(1, 2617, 'Stocks', '', 'Dhaka', '', '', ''),
(4, 2617, 'Property', 'qwdfdsas', '', '', '', ''),
(10, 5170, 'Property', 'efdjksdgfk sjhdfaxcbds', '', '', '', 'jhfjhwedf kjhbasdfxc jkwefd jksedf jkhi  juwer'),
(11, 5170, 'Stocks', '', 'ttt', '', '', 'tttt'),
(13, 2032, 'P', 't', '', '', '', 't'),
(14, 2032, 'P', 't', '', '', '', 't'),
(15, 2032, 'P', 't', '', '', '', 't'),
(16, 2032, 'Property', 'test property', '', '', '', 'tes r'),
(17, 2032, 'Property', 'test property', '', '', '', 'tes r'),
(18, 2032, 'Stocks', '', 'stocks', '', '', 'Remark Or Addres'),
(19, 2032, 'Stocks', '', 'stocks', '', '', 'Remark Or Addres'),
(20, 2032, 'Stocks', '', 'stocks', '', '', 'Remark Or Addres'),
(21, 2032, 'Stocks', '', 'stocks', '', '', 'Remark Or AddresRemark Or Addres'),
(22, 2008, '', '', '										', '', '', ''),
(23, 2008, '', '', '										', '', '', ''),
(24, 2032, 'Property', 'efdsvfds', '', '', '', ''),
(25, 3087, 'Stocks', '', 'usakka', '', '', 'Remark 2'),
(26, 8140, 'Property', 'sad', '', '', '', 'sda'),
(28, 5170, 'Property', 'pr', '', '', '', 't'),
(29, 5170, 'Boat', '', '', 'br', '', 't'),
(30, 5170, 'Other', '', '', '', 'oth', 'th'),
(32, 1914, '', '', '', '', '', ''),
(33, 1536, '', '', '', '', '', ''),
(34, 1536, '', '', '', '', '', ''),
(36, 1536, '', '', '', '', '', ''),
(37, 2008, 'Boat', '', '', 'bvhgv', '', 'bvbh'),
(38, 2032, 'Other', '', '', '', 'o', 't'),
(42, 5170, 'Stocks', '', 'client details gg', '', '', 'client details, client details gg'),
(43, 3917, '', '', '', '', '', ''),
(44, 3917, '', '', '', '', '', ''),
(45, 0, '', '', '', '', '', ''),
(46, 3217, 'Stocks', '', '', '', '', ''),
(47, 3217, 'Stocks', '', 'Stock', '', '', 'test Stock'),
(48, 3217, 'Property', 'Property ', '', '', '', 'test Property '),
(49, 3217, 'Boat', '', '', 'Boat', '', 'test Boat'),
(50, 3217, 'Other', '', '', '', 'Other', 'test Other'),
(51, 5170, 'Boat', '', '', 'sdf', '', 'dsf'),
(52, 5170, 'Stocks', '', 'rr', '', '', 'rr'),
(53, 2768, 'Stocks', 'If Property Address detail', '', '', '', 'If Property Address detail, If Property Address detail'),
(54, 2768, 'Boat', '', '', 'If Boat', '', 'If Boat If Boat'),
(55, 5170, 'Property', 'tjyfuy', '', '', '', 'tyfuy'),
(56, 1154, 'Stocks', '', 'sadsdasadsda', '', '', 'sdfdsasd'),
(57, 1960, 'Stocks', '', 'Dhaka', '', '', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vs_client_bank`
--

CREATE TABLE IF NOT EXISTS `tbl_vs_client_bank` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `bank_code` varchar(50) NOT NULL,
  `bank_account` varchar(30) NOT NULL,
  `bank_account_type` varchar(50) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vs_client_bank`
--

INSERT INTO `tbl_vs_client_bank` (`id`, `client_id`, `bank_code`, `bank_account`, `bank_account_type`, `remark`) VALUES
(1, 2617, '2', 'Card', 'Saving', ''),
(9, 5170, 'test bank', 'test account', 'Saving', 'a b c d e f g h i j k l m n o p q r s t u v w x y z'),
(10, 5170, 'Yeya hu', 'bc uihs iuh uia', 'Checking', 'hasfc uiahc buisadb'),
(11, 5170, 'ddido', '43542542', 'Saving', 'testing bank'),
(15, 2032, 'test bank', '11111', 'Saving', 'tes r'),
(16, 2032, 'test bank', '11111', 'Saving', 'tes r'),
(17, 2032, 'sdaf', '1244', 'Checking', 'Remark Or Addres'),
(18, 2032, 'sdaf', '1244', 'Checking', 'Remark Or Addres'),
(19, 2032, 'sdaf', '1244', 'Checking', 'Remark Or Addres'),
(20, 2032, 'sdaf', '1244', 'Checking', 'Remark Or AddresRemark Or Addres'),
(21, 2008, '', '', '', ''),
(22, 2008, '', '', '', ''),
(23, 2032, 'aesdfsdf', '213213', 'Checking', ''),
(24, 3087, 'test bank', '11111343', 'Checking', 'Remark  3'),
(25, 8140, 'as', 'sa', 'Checking', 'sa'),
(28, 5170, 'efsd', 'sd', 'Certificat', 'dsfsd'),
(30, 5170, 'dddddddddd', '32434', 'Saving', 'ddd'),
(31, 5170, 'ssssssssssss', 'rrrrrrrrrrrrrrr', 'Certificate of Deposit', 'ssssssssssssssssss'),
(32, 5170, 'dd', '', 'Saving', 'dd'),
(34, 1914, '', '', '', ''),
(35, 1536, '', '', '', ''),
(36, 1536, '', '', '', ''),
(37, 5170, 'ff', '1244', 'Checking', 'fdd'),
(38, 1536, 'yaa', '', 'Certificate of Deposit', 'tttttttttt'),
(39, 2008, '', '', '', ''),
(40, 2032, '', '', '', ''),
(43, 5170, 'hjgyfrlut', '', 'Saving', 'htf7yt'),
(45, 5170, 'client details', '', 'Certificate of Deposit', 'client details'),
(46, 3917, '', '', '', ''),
(47, 3917, '', '', '', ''),
(48, 0, '', '', '', ''),
(49, 2768, 'Barck', '', 'Saving', 'Bank Address'),
(50, 2768, 'test bank', '', 'Certificate of Deposit', 'test'),
(51, 5170, 'ghfuy', '', 'Money Market', 'kgiy'),
(52, 3217, 'hjg', '', 'Certificate of Deposit', 'jhg'),
(53, 1154, 'sdvfs', '', 'Saving', 'sdsd'),
(54, 3217, 's', '', 'Saving', 's'),
(55, 1960, 'Barck', '', 'Certificate of Deposit', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vs_client_insurance`
--

CREATE TABLE IF NOT EXISTS `tbl_vs_client_insurance` (
  `id` int(11) NOT NULL,
  `client_id` varchar(11) NOT NULL,
  `insurance_comapny_code` varchar(60) NOT NULL,
  `insurance_name` varchar(200) NOT NULL,
  `policy_number` varchar(20) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vs_client_insurance`
--

INSERT INTO `tbl_vs_client_insurance` (`id`, `client_id`, `insurance_comapny_code`, `insurance_name`, `policy_number`, `remark`) VALUES
(1, '2617', '2', 'dddddddd', 'dddd', ''),
(9, '', '1', 'ddd', '3222', ''),
(16, '5047', '2', 'sssss', '2222', 'ddd'),
(17, '5170', 'tstt', 'hdakaka', '12121111333', 'test data'),
(24, '2032', '', 'tset 1', '11111', 'tes r'),
(25, '2032', 'test is', 'tset 1', '11111', 'tes r'),
(26, '2032', 'fasd', 'sdafsd', 'dsfsd', 'Remark Or Addres'),
(27, '2032', 'fasd', 'sdafsd', 'dsfsd', 'Remark Or Addres'),
(28, '2032', 'fasd', 'sdafsd', 'dsfsd', 'Remark Or Addres'),
(29, '2032', 'fasd', 'sdafsd', 'dsfsd', 'Remark Or AddresRemark Or Addres'),
(30, '2008', '', '', '', ''),
(31, '2008', '', '', '', ''),
(32, '2032', 'eqwf', 'sadf', 'sdafsdf', ''),
(33, '3087', 'usacode', 'inu', '23545', 'Remark  1'),
(34, '8140', 'xc', 'dsc', 'sda', 'sda'),
(36, '1914', '', '', '', ''),
(37, '1536', '', '', '', ''),
(38, '1536', '', '', '', ''),
(39, '5170', 'PK', 'Life time', '11111', 'Testing Data'),
(40, '1536', '', '', '', ''),
(41, '2008', '', '', '', ''),
(42, '2032', '', '', '', ''),
(45, '5170', 'uku', 'life is', '', 'yyy'),
(46, '5170', 'client details', 'client details', '', 'client details'),
(47, '3917', 'ee', 'ee', '', ''),
(51, '3217', 'dfes', 'wfdwef', '', 'ewerfwf'),
(52, '3217', 'sdfc', 'dfw', '', 'wfdwf'),
(53, '3217', 'Tuku', 'Rwe', '', 'test data'),
(54, '3217', 'foook', 'wook', '', 'toook'),
(55, '3217', 'hhh', 'hhhh', '', 'fffggh'),
(56, '3217', 'Insurance Company ', 'Insurance Type', '', 'Remark Or Address'),
(57, '5170', 'ewf', 'sfde', '', 'sdf'),
(58, '5170', 'rr', 'rr', '', 'rr'),
(59, '2768', 'diyalos', 'Lifes', '', 'test diyalo life s'),
(60, '2768', 'sadf', 'ASDSAFC', '', 'sadsad'),
(61, '5170', 'vyv', 'gft', '', 'trtd'),
(62, '1154', 'tests', 'Test 11', '', 'test types'),
(63, '4290', 'test', 'test2', '', 'test3'),
(64, '1960', 'Life', 'Life Time', '', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vs_client_location`
--

CREATE TABLE IF NOT EXISTS `tbl_vs_client_location` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `typewill` varchar(50) NOT NULL,
  `location_testament` varchar(150) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vs_client_location`
--

INSERT INTO `tbl_vs_client_location` (`id`, `client_id`, `typewill`, `location_testament`, `remark`) VALUES
(4, 5170, '', ' test Location of Clientâ€™s will and testament', 'Location of Clientâ€™s will and testament'),
(5, 5170, 'Residence', 'ajhbadfs  Location of Clientâ€™s will and testament', 'Location of Clientâ€™s will and testament Location of Clientâ€™s will and testament'),
(9, 2032, '', 'test	 Location ', 'tes r'),
(10, 2032, '', 'test	 Location ', 'tes r'),
(12, 2032, '', 'dd', 'Remark Or Addres'),
(13, 2032, '', 'dd', 'Remark Or Addres'),
(14, 2032, '', 'dd', 'Remark Or AddresRemark Or Addres'),
(17, 2032, '', 'ewfsdfgs', ''),
(18, 3087, '', 'test loc', 'Remark  4'),
(19, 8140, '', 'sasa', 'sa'),
(21, 5170, 'Other', 'dd', 'ss'),
(25, 5170, 'Attorney', 'Clientâ€™s will and testament', 'fdf'),
(28, 2032, '', '', ''),
(30, 5170, 'Bank', 'Test will', 'test'),
(35, 5170, 'Residence', 'ttttyftt', 'vytfvktuy'),
(38, 5170, 'Attorney', 'test', 'yes'),
(39, 5170, 'Bank', 'client details', 'client details'),
(40, 3917, '', '', ''),
(41, 3917, '', '', ''),
(42, 0, '', '', ''),
(43, 2768, 'Attorney', 'location of Clientâ€™s will and testament Attorney', 'location of Clientâ€™s will and testament, location of Clientâ€™s will and testament Attorney'),
(44, 2768, 'Bank', 'testament  d', 'testament  f'),
(45, 5170, 'Attorney', 'uykg', 'trfdu'),
(46, 1154, 'Bank', 'sdxfsd', 'sdasd'),
(47, 2768, '', 'test t', 't t'),
(48, 3217, '', 'sadafsd', 'ttttttt'),
(49, 3217, '', 't', 'u'),
(50, 3217, '', 'yes', 'tes'),
(51, 3217, '', 'wfwef', 'rrr'),
(52, 1960, '', 'Yeshuk', 'test data');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vs_client_paytrack`
--

CREATE TABLE IF NOT EXISTS `tbl_vs_client_paytrack` (
  `sl_no` int(11) NOT NULL,
  `vs_client_id` varchar(11) NOT NULL,
  `pay_type` varchar(111) NOT NULL,
  `pay_amount` float(15,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vs_client_paytrack`
--

INSERT INTO `tbl_vs_client_paytrack` (`sl_no`, `vs_client_id`, `pay_type`, `pay_amount`, `date`) VALUES
(1, '2768', '1', 75.00, '2018-02-12'),
(2, '4290', '1', 75.00, '2018-02-14'),
(3, '4290', '1', 399.00, '2018-02-14'),
(4, '1960', '1', 75.00, '2018-02-14'),
(6, '2859', '1', 399.00, '2018-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL,
  `names` varchar(122) NOT NULL,
  `fname` varchar(120) NOT NULL,
  `lname` varchar(120) NOT NULL,
  `description` varchar(120) NOT NULL,
  `vscode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_audit_trail`
--
ALTER TABLE `tbl_audit_trail`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `tbl_authorized_representive`
--
ALTER TABLE `tbl_authorized_representive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bank_master`
--
ALTER TABLE `tbl_bank_master`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_companypaytrack`
--
ALTER TABLE `tbl_companypaytrack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee_roster`
--
ALTER TABLE `tbl_employee_roster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hr_company`
--
ALTER TABLE `tbl_hr_company`
  ADD PRIMARY KEY (`comapny_code`),
  ADD UNIQUE KEY `company_name` (`company_name`) USING BTREE;

--
-- Indexes for table `tbl_hr_company_roster`
--
ALTER TABLE `tbl_hr_company_roster`
  ADD PRIMARY KEY (`company_roster_code`);

--
-- Indexes for table `tbl_insurance_agent`
--
ALTER TABLE `tbl_insurance_agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `mail_verify` (`mail_verify`),
  ADD UNIQUE KEY `agent_email` (`agent_email`);

--
-- Indexes for table `tbl_insurance_company`
--
ALTER TABLE `tbl_insurance_company`
  ADD PRIMARY KEY (`insurance_comapny_id`);

--
-- Indexes for table `tbl_payment_fees`
--
ALTER TABLE `tbl_payment_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vscode_master`
--
ALTER TABLE `tbl_vscode_master`
  ADD PRIMARY KEY (`vs_code`);

--
-- Indexes for table `tbl_vs_client`
--
ALTER TABLE `tbl_vs_client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_email` (`client_email`),
  ADD UNIQUE KEY `vs_code` (`vs_code`);

--
-- Indexes for table `tbl_vs_client_assest`
--
ALTER TABLE `tbl_vs_client_assest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vs_client_bank`
--
ALTER TABLE `tbl_vs_client_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vs_client_insurance`
--
ALTER TABLE `tbl_vs_client_insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vs_client_location`
--
ALTER TABLE `tbl_vs_client_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vs_client_paytrack`
--
ALTER TABLE `tbl_vs_client_paytrack`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_audit_trail`
--
ALTER TABLE `tbl_audit_trail`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_authorized_representive`
--
ALTER TABLE `tbl_authorized_representive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_bank_master`
--
ALTER TABLE `tbl_bank_master`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_companypaytrack`
--
ALTER TABLE `tbl_companypaytrack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_employee_roster`
--
ALTER TABLE `tbl_employee_roster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_hr_company`
--
ALTER TABLE `tbl_hr_company`
  MODIFY `comapny_code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_hr_company_roster`
--
ALTER TABLE `tbl_hr_company_roster`
  MODIFY `company_roster_code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_insurance_agent`
--
ALTER TABLE `tbl_insurance_agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_insurance_company`
--
ALTER TABLE `tbl_insurance_company`
  MODIFY `insurance_comapny_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_payment_fees`
--
ALTER TABLE `tbl_payment_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_vs_client_assest`
--
ALTER TABLE `tbl_vs_client_assest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_vs_client_bank`
--
ALTER TABLE `tbl_vs_client_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tbl_vs_client_insurance`
--
ALTER TABLE `tbl_vs_client_insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `tbl_vs_client_location`
--
ALTER TABLE `tbl_vs_client_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbl_vs_client_paytrack`
--
ALTER TABLE `tbl_vs_client_paytrack`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
