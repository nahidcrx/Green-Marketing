-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 12:31 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(50) NOT NULL,
  `pass_word` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `pass_word`, `type`) VALUES
('deepta', '9876543210', 'admin'),
('naymul', '12345678', 'admin'),
('nahidcrx', '1234567890', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adtable`
--

CREATE TABLE `adtable` (
  `adid` int(50) NOT NULL,
  `regid` varchar(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price_per_unit` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adtable`
--

INSERT INTO `adtable` (`adid`, `regid`, `product_name`, `product_category`, `image`, `quantity`, `price_per_unit`, `description`, `phone`, `division`) VALUES
(70, '201867', 'Mango', 'Fruit', 'assets/images/dc-Cover-4e2cvsbeldn1k5ou6249l1sob5-20170426222129.Medi.jpeg', '300Kg', '80Tk', 'Formalin Free', '01777431117', 'Rajshahi'),
(71, '201867', 'Guava', 'Fruit', 'assets/images/guava.jpg', '300Kg', '30Tk', 'Fresh', '01777431117', 'Barisal'),
(72, '201867', 'Hilsha Fish', 'Fish', 'assets/images/_8c0eaed4-dc22-11e6-a538-54bd197a5a1b.jpg', '100Kg', '550Tk', 'Formalin Free', '01777431117', 'Barisal'),
(73, '201867', 'Ruhi Fish', 'Fish', 'assets/images/images-10.jpeg', '250Kg', '230Tk', 'Formalin Free', '01777431117', 'Barisal'),
(74, '201868', 'Pack Milk', 'Drinks', 'assets/images/Milk2.jpg', '20 litter', '60 taka', 'Good & Fresh', '01686142901', 'Comilla'),
(75, '201868', 'Beef', 'Meat', 'assets/images/meat.jpg', '40 kg', '450 taka', 'Good & Fresh', '01686142901', 'Dhaka'),
(76, '201869', 'fresh meat(beef)', 'Meat', 'assets/images/5eb138c95a37258ed586009113dae0924e8658bdcd08607bd7ecc36dc6ff10c8.jpg', '100kg', '500tk', 'fresh', '01516174119', 'Chittagong'),
(77, '201869', 'duck meat', 'Meat', 'assets/images/raw_duck_isolated_on_a_white_background.jpg', '100kg', '250tk', 'fresh', '01777431117', 'Chittagong'),
(78, '201870', 'Beef Flesh', 'Meat', 'assets/images/rawbeef.jpg', '100kg', '500tk', 'fresh', '01521111706', 'Dhaka'),
(79, '201870', 'Strawberry', 'Fruit', 'assets/images/Strawberry-Fruits-HD-Wallpaper2-1024x640.jpg.pagespeed.ce.e9-nMwn6yo.jpg', '100kg', '450 taka', 'fresh', '01521111706', 'Meat'),
(80, '201870', 'Capsicum', 'Vegetables', 'assets/images/capsicum-different-colours-capsicum-different-colours-red-yellow-green-106166023.jpg', '100kg', '100 taka', 'fresh', '01521111706', 'Meat'),
(81, '201870', 'Bashmoti Rice', 'Rice', 'assets/images/1121-steam-rice-500x500.jpg', '100kg', '120 taka', 'Good & Fresh', '01521111706', 'Dhaka'),
(82, '201870', 'Shrimp', 'Fish', 'assets/images/14968609-fresh-river-prawn-from-the-market.jpg', '50kg', '600 taka', 'Formalin Free', '01521111706', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `categorytable`
--

CREATE TABLE `categorytable` (
  `cid` int(50) NOT NULL,
  `cname` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorytable`
--

INSERT INTO `categorytable` (`cid`, `cname`, `image`) VALUES
(2, 'Meat', 'assets/category/Meat.jpg'),
(3, 'Vegetables', 'assets/category/Vegetables.jpg'),
(4, 'Fruit', 'assets/category/Fruit.jpg'),
(5, 'Rice', 'assets/category/Rice.jpg'),
(7, 'Drinks', 'assets/category/Drinks.jpg'),
(8, 'Fish', 'assets/category/Fish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `divisiontable`
--

CREATE TABLE `divisiontable` (
  `divisionID` int(50) NOT NULL,
  `divisionname` varchar(50) NOT NULL,
  `districtid` int(50) NOT NULL,
  `districtname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisiontable`
--

INSERT INTO `divisiontable` (`divisionID`, `divisionname`, `districtid`, `districtname`) VALUES
(11, 'Chittagong', 11, 'chittagong'),
(22, 'Dhaka', 22, 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `registrationtable`
--

CREATE TABLE `registrationtable` (
  `ID` int(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Division` varchar(50) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `NID` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DB_Date` varchar(20) NOT NULL,
  `DB_Month` varchar(50) NOT NULL,
  `DB_Year` varchar(50) NOT NULL,
  `Nationality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationtable`
--

INSERT INTO `registrationtable` (`ID`, `First_Name`, `Last_Name`, `User_Name`, `Pass`, `Phone`, `Division`, `User_Type`, `Email`, `NID`, `Gender`, `DB_Date`, `DB_Month`, `DB_Year`, `Nationality`) VALUES
(201867, 'Naymul', 'Islam', 'naymulcbf', '123456789', '01777431117', 'Dhaka', 'seller', 'nahid@gmail.com', '0987654345678', 'Male', '14', 'June', '1995', 'Bangladeshi'),
(201868, 'Rifat Hossain', 'Khan', 'rifat', 'rifat1234', '01686142901', 'Dhaka', 'seller', 'rifat.hk889@gmail.com', '01248622142014622', 'Male', '11', 'October', '1995', 'Bangladeshi'),
(201869, 'imtiaz ur rahman', 'khan', 'imtiazdeepta', '1234567890', '01516174119', 'Chittagong', 'seller', 'deepta71dem1666@gmail.com', '01248622142014622', 'Male', '18', 'February', '1995', 'Bangladeshi'),
(201870, 'Mahbub', 'Murshed (Shaishob)', 'Mahbub', 'asdf1234', '01521111706', 'Dhaka', 'seller', 'halcyon.shaishob@gmail.com', '121121212155', 'Male', '30', 'November', '1995', 'Bangladeshi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adtable`
--
ALTER TABLE `adtable`
  ADD PRIMARY KEY (`adid`);

--
-- Indexes for table `categorytable`
--
ALTER TABLE `categorytable`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `divisiontable`
--
ALTER TABLE `divisiontable`
  ADD PRIMARY KEY (`divisionname`);

--
-- Indexes for table `registrationtable`
--
ALTER TABLE `registrationtable`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `User_Name` (`User_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adtable`
--
ALTER TABLE `adtable`
  MODIFY `adid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `categorytable`
--
ALTER TABLE `categorytable`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registrationtable`
--
ALTER TABLE `registrationtable`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201871;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
