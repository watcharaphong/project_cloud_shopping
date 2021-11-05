-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2021 at 07:42 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `auser` varchar(100) NOT NULL,
  `apassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `apassword`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(10) NOT NULL,
  `csubject` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cEmail` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ccompany` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cmessage` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ctime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `csubject`, `cname`, `cEmail`, `ccompany`, `cmessage`, `ctime`) VALUES
(3, 'collage', 'tung', 'pornhemnn1@gmail.com', 'SELF', 'Hallo word', '2021-10-07 08:28:19'),
(4, 'g', 'tom', 'pornhemnn1@gmail.com', 'MSU', 'Ha Ha Ha', '2021-10-07 10:52:53'),
(5, 'collage', 'Watcharaphong Phummirang', 'pornhemnn1@gmail.com', 'Mahasarakham University', 'Ha', '2021-10-14 22:00:20'),
(6, 'collage', 'Watcharaphong Phummirang', 'thornaew3@gmail.com', 'Mahasarakham University', 'l', '2021-10-14 22:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` int(10) NOT NULL,
  `muser` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mpassword` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `memail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `muser`, `mpassword`, `fname`, `lname`, `tel`, `memail`, `maddress`, `image`) VALUES
(27, 'user', '1234', 'Watcharaphong', 'Phummirang', '0652651390', 'pornhemnn1@gmail.com', 'kalasin', 'profile-images/user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `id` int(11) NOT NULL,
  `ordersid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `procode` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ounit` int(11) NOT NULL,
  `oprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderproduct`
--

INSERT INTO `orderproduct` (`id`, `ordersid`, `procode`, `ounit`, `oprice`) VALUES
(19, '1', '13001', 1, 4049),
(20, '1', '01010', 1, 25899),
(21, '2', '12010', 1, 980),
(22, '3', '12007', 1, 287),
(23, '3', '01003', 1, 14537);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordersid` int(10) NOT NULL,
  `pricetotal` double(255,2) NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `muser` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` datetime NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordersid`, `pricetotal`, `tel`, `address`, `fname`, `lname`, `muser`, `time`, `status`) VALUES
(1, 27712.04, '0652651390', 'kalasin', 'Watcharaphong', 'Phummirang', 'user', '2021-10-15 14:28:39', 'ชำระเงินแล้ว'),
(2, 1048.71, '0652651390', 'kalasin', 'Watcharaphong', 'Phummirang', 'user', '2021-10-15 14:29:43', 'ยังไม่ชำระเงิน'),
(3, 15554.70, '0652651390', 'kalasin', 'Watcharaphong', 'Phummirang', 'user', '2021-10-15 14:41:19', 'ยังไม่ชำระเงิน');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(255,2) NOT NULL,
  `tproid` int(11) NOT NULL,
  `unit` int(11) NOT NULL,
  `sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `tproid`, `unit`, `sale`) VALUES
(1001, 'Cockpit Next Level F-GT Lite Racing ', '01001', 'product-images/01001.jpg', 10000.00, 1, 4, 7),
(1002, 'Cockpit Next Level GTtrack Racing ', '01002', 'product-images/01002.jpg', 15000.00, 1, 3, 5),
(1003, 'Cockpit ชุดขับรถแบบมี motion ', '01003', 'product-images/01003.jpg', 15000.00, 1, 3, 5),
(1004, 'Cockpit GP-02 Racing Add-on ', '01004', 'product-images/01004.jpg', 2000.00, 1, 3, 5),
(1005, 'Cockpit Next Level F-GT Racing ', '01005', 'product-images/01005.jpg', 13000.00, 1, 5, 5),
(1006, 'Cockpit Playseat® Challenge Racing ', '01006', 'product-images/01006.jpg', 12300.00, 1, 5, 5),
(1007, 'Cockpit Next Level CHALLENGER', '01007', 'product-images/01007.jpg', 14000.00, 1, 5, 5),
(1008, 'Cockpit Next Level F-GT Lite Racing ', '01008', 'product-images/01008.jpg', 13500.00, 1, 5, 5),
(1009, 'Cockpit GP-02 Racing Add-on', '01009', 'product-images/01009.jpg', 29000.00, 1, 5, 5),
(1010, 'Cockpit HumanRacing GT Chassis ', '01010', 'product-images/01010.jpg', 23000.00, 1, 4, 5),
(1011, 'Playstation Thrustmaster ', '02001', 'product-images/02001.jpg', 7000.00, 2, 4, 5),
(1012, 'Playstation 4 SLIM Console 1TB ', '02002', 'product-images/02002.jpg', 13000.00, 2, 6, 5),
(1013, 'Playstation PSN Card ', '02003', 'product-images/02003.jpg', 2250.00, 2, 5, 5),
(1014, 'Playstation PSN Card ', '02004', 'product-images/02004.jpg', 360.00, 2, 5, 5),
(1015, 'Playstation PSN Card ', '02005', 'product-images/02005.jpg', 900.00, 2, 5, 5),
(1016, 'PlayStation 5 Console - White', '02006', 'product-images/02006.jpg', 32900.00, 2, 5, 5),
(1017, ' Playstation PS4 : 4 - Pro Console ', '02007', 'product-images/02007.jpg', 14000.00, 2, 5, 5),
(1018, 'Playstation PSN Plus ', '02008', 'product-images/02008.jpg', 550.00, 2, 5, 5),
(1019, 'Playstation PSN Plus ', '02009', 'product-images/02009.jpg', 1290.00, 2, 5, 5),
(1020, 'Ride 2 [ps4] - Day One Edition', '02010', 'product-images/02010.jpg', 1300.00, 2, 5, 5),
(1021, 'Simulator บริการ - ชุดขับรถแบบมี ', '03001', 'product-images/03001.jpg', 18000.00, 3, 3, 1),
(1022, 'Simulator บริการ - ชุด Human ', '03002', 'product-images/03002.jpg', 8000.00, 3, 5, 1),
(1023, 'Simulator Next Level ', '03003', 'product-images/03003.jpg', 149000.00, 3, 5, 1),
(1024, ' Simulator Human Racing เกมส์ขับรถ', '03004', 'product-images/03004.jpg', 5990.00, 3, 5, 1),
(1025, 'Xbox Thrustmaster Ferrari 458 ', '04001', 'product-images/04001.jpg', 5490.00, 4, 5, 2),
(1026, 'bagCooler Master Accessory ', '05001', 'product-images/05001.jpg', 2990.00, 5, 10, 3),
(1027, 'bag Razer Mercenary Gaming ', '05002', 'product-images/05002.jpg', 4100.00, 5, 7, 2),
(1028, 'bag ThunderX3 B17 GAMING ', '05003', 'product-images/05003.jpg', 1500.00, 5, 7, 2),
(1029, 'bag Tt eSPORTS Battle Dragon', '05004', 'product-images/05004.jpg', 2200.00, 5, 8, 4),
(1030, 'bag Asus ROG Ranger', '05005', 'product-images/05005.jpg', 3000.00, 5, 5, 2),
(1031, ' bag Asus ROG Ranger ', '05006', 'product-images/05006.jpg', 3000.00, 5, 2, 4),
(1032, 'bag Asus ROG Ranger BP2500  ', '05007', 'product-images/05007.jpg', 3000.00, 5, 4, 4),
(1033, 'joystick Razer Raiju Ultimate ', '06001', 'product-images/06001.jpg', 7290.00, 6, 5, 1),
(1034, 'joystick Gamesir G4s Wireless ', '06002', 'product-images/06002.jpg', 1490.00, 6, 5, 1),
(1035, 'joystick VX2 AimSwitch Wrieless ', '06003', 'product-images/06003.jpg', 4790.00, 6, 5, 1),
(1036, 'joystick Thrustmaster Hotas Warthog', '06004', 'product-images/06004.jpg', 21900.00, 6, 5, 1),
(1037, 'joystick Gamesir G5 Wireless  ', '06005', 'product-images/06005.jpg', 2390.00, 6, 5, 1),
(1038, 'joystick Gamesir G6 Wireless', '06006', 'product-images/06006.jpg', 1690.00, 6, 5, 1),
(1039, 'steering-wheel Thrustmaster T-LCM ', '07001', 'product-images/07001.jpg', 9900.00, 7, 4, 2),
(1040, 'steering-wheel Thrustmaster 1', '07002', 'product-images/07002.jpg', 12900.00, 7, 5, 2),
(1041, 'steering-wheel Thrustmaster SF1000 ', '07003', 'product-images/07003.jpg', 17990.00, 7, 5, 1),
(1042, 'steering-wheel Thrustmaster 458 ', '07004', 'product-images/07004.jpg', 5490.00, 7, 5, 1),
(1043, 'steering-wheel Thrustmaster T3PA', '07005', 'product-images/07005.jpg', 7900.00, 7, 5, 1),
(1044, 'steering-wheel Thrustmaster T80 ', '07006', 'product-images/07006.jpg', 5490.00, 7, 5, 1),
(1045, 'steering-wheel Thrustmaster T4PA ', '07007', 'product-images/07007.jpg', 5490.00, 7, 5, 1),
(1046, 'steering-wheel Thrustmaster T300 ', '07008', 'product-images/07008.jpg', 23900.00, 7, 5, 1),
(1047, 'mouse Fantech X14 RANGERS', '08001', 'product-images/08001.jpg', 790.00, 8, 9, 4),
(1048, 'mouse Signo E-sport GM-908 ', '08002', 'product-images/08002.jpg', 390.00, 8, 15, 10),
(1049, 'mouse Glorious Model O- (Minus)', '08003', 'product-images/08003.jpg', 2190.00, 8, 5, 2),
(1050, 'mouse Steelseries Prime Wireless ', '08004', 'product-images/08004.jpg', 4900.00, 8, 5, 2),
(1051, 'mouse Cougar 700M EVO 16000 ', '08005', 'product-images/08005.jpg', 2990.00, 8, 5, 4),
(1052, 'mouse Cougar Revenger S Optical ', '08006', 'product-images/08006.jpg', 2900.00, 8, 5, 2),
(1053, 'keyboard Ducky One 2 Mini RGB Black ', '09001', 'product-images/09001.jpg', 3290.00, 9, 5, 1),
(1054, 'keyboard Ducky One 1 MINI RGB ', '09002', 'product-images/09002.jpg', 3290.00, 9, 5, 1),
(1055, 'keyboard Ducky One 2 MINI RGB ', '09003', 'product-images/09003.jpg', 3290.00, 9, 5, 1),
(1056, 'keyboard  Ducky One 3 Mini RGB ', '09004', 'product-images/09004.jpg', 3290.00, 9, 5, 1),
(1057, 'keyboard Ducky ABS Doubleshot ', '09005', 'product-images/09005.jpg', 2090.00, 9, 5, 1),
(1058, 'keyboard Steelseries Apex 7 ', '09006', 'product-images/09006.jpg', 2090.00, 9, 5, 1),
(1059, 'keyboard Philips SPK8605 ', '09007', 'product-images/09007.jpg', 890.00, 9, 5, 1),
(1060, 'keyboard Corsair K83 Wireless ', '09008', 'product-images/09008.jpg', 3990.00, 9, 5, 1),
(1061, 'keyboard Logitech G Pro X ', '09009', 'product-images/09008.jpg', 4190.00, 9, 5, 1),
(1062, 'keyboard Corsair K70 RGB ', '09010', 'product-images/09010.jpg', 4690.00, 9, 5, 1),
(1063, 'mouse-pad Logitech G640 ', '10001', 'product-images/10001.jpg', 890.00, 10, 5, 1),
(1064, 'mouse-pad COUGAR Speed2 ', '10002', 'product-images/10002.jpg', 450.00, 10, 5, 1),
(1065, 'mouse-pad Zowie P-SR  ', '10003', 'product-images/10003.jpg', 450.00, 10, 5, 1),
(1066, 'mouse-pad Cooler Master ', '10004', 'product-images/10004.jpg', 790.00, 10, 5, 1),
(1067, 'mouse-pad Cooler Master MP511  ', '10005', 'product-images/10005.jpg', 690.00, 10, 5, 1),
(1068, 'mouse-pad COUGAR Control2', '10006', 'product-images/10006.jpg', 450.00, 10, 5, 1),
(1069, 'Gaming-Chair DXRacer D-series ', '11001', 'product-images/11001.jpg', 13490.00, 11, 5, 1),
(1070, 'Gaming-Chair Fantech ALPHA', '11002', 'product-images/11002.jpg', 4900.00, 11, 5, 1),
(1071, 'Gaming-Chair Anda Seat DARK ', '11003', 'product-images/11003.jpg', 14900.00, 11, 5, 1),
(1072, 'Gaming-Chair Anda Seat Kaiser ', '11004', 'product-images/11004.jpg', 15900.00, 11, 5, 1),
(1073, 'Gaming-Chair DXRacer ', '11005', 'product-images/11005.jpg', 16990.00, 11, 5, 1),
(1074, 'Gaming-Chair Nubwo Vanguard ', '11006', 'product-images/11006.jpg', 3990.00, 11, 5, 1),
(1075, 'speaker Fantech GS-201 White', '12001', 'product-images/12001.jpg', 290.00, 12, 0, 1),
(1076, 'speaker Fantech  GS-201 Black', '12002', 'product-images/12002.jpg', 290.00, 12, 1, 1),
(1077, 'speaker Fantech GS-733 White', '12003', 'product-images/12003.jpg', 290.00, 12, 4, 1),
(1078, 'speaker Fantech GS-733 Black', '12004', 'product-images/12004.jpg', 290.00, 12, 4, 1),
(1079, 'speaker FANTECH GS202 SONAR ', '12005', 'product-images/12005.jpg', 390.00, 12, 5, 1),
(1080, 'speaker Xiaomi Mi Pocket V.2 ', '12006', 'product-images/12006.jpg', 990.00, 12, 5, 1),
(1081, 'speaker Marvo SG-119 ', '12007', 'product-images/12007.jpg', 290.00, 12, 4, 1),
(1082, 'speaker Xiaomi Mi Basic 2 ', '12008', 'product-images/12008.jpg', 890.00, 12, 5, 1),
(1083, 'speaker Razer Leviathan ', '12009', 'product-images/12009.jpg', 8190.00, 12, 3, 1),
(1084, 'speaker Edifier R19U Compact ', '12010', 'product-images/12010.jpg', 990.00, 12, 4, 1),
(1085, 'Logitech G733 Lightspeed Wireless ', '13001', 'product-images/13001.jpg', 4090.00, 13, 4, 1),
(1086, 'Headphone Logitech G PRO ', '13002', 'product-images/13002.jpg', 5990.00, 13, 4, 1),
(1087, 'Headphone Logitech G PRO ', '13003', 'product-images/13003.jpg', 3990.00, 13, 5, 1),
(1088, 'Headphone Signo E-Sport', '13004', 'product-images/13004.jpg', 550.00, 13, 5, 1),
(1089, 'Headphone HyperX Cloud AMP ', '13005', 'product-images/13005.jpg', 990.00, 13, 5, 1),
(1090, 'Headphone Cougar Immersa Pro ', '13006', 'product-images/13007.jpg', 3190.00, 13, 5, 1),
(1091, 'Headphone Logitech G733 ', '13007', 'product-images/13007.jpg', 4090.00, 13, 4, 1),
(1092, 'Headphone Cooler Master ', '13008', 'product-images/13008.jpg', 690.00, 13, 5, 1),
(1093, 'computer-desk Cougar MARS ', '14001', 'product-images/14001.jpg', 11900.00, 14, 5, 1),
(1094, 'computer-desk Neolution Mask ', '14002', 'product-images/14002.jpg', 4790.00, 14, 4, 1),
(1095, 'computer-desk Neolution Electric ', '14003', 'product-images/14003.jpg', 6900.00, 14, 5, 1),
(1096, 'computer-desk Neolution MASK II ', '14004', 'product-images/14001.jpg', 6900.00, 14, 5, 1),
(1097, 'computer-desk Neolution Quora', '14005', 'product-images/14005.jpg', 2090.00, 14, 5, 1),
(1098, 'computer-desk Nubwo ND-600s', '14006', 'product-images/14006.jpg', 2990.00, 14, 4, 1),
(1099, 'microphone HYPERX QuadCast ', '15001', 'product-images/15001.jpg', 5990.00, 15, 5, 1),
(1100, 'microphone Signo  ', '15002', 'product-images/15002.jpg', 850.00, 15, 4, 1),
(1101, 'microphone Trust Madell ', '15003', 'product-images/15003.jpg', 590.00, 15, 5, 1),
(1102, 'microphone Trust GXT 239 ', '15004', 'product-images/15004.jpg', 290.00, 15, 5, 1),
(1104, 'microphone Trust Primo ', '15006', 'product-images/15006.jpg', 190.00, 15, 5, 1),
(1105, 'microphone Trust Mico USB ', '15007', 'product-images/15007.jpg', 790.00, 15, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `typeproduct`
--

CREATE TABLE `typeproduct` (
  `tproid` int(11) NOT NULL,
  `tproname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeproduct`
--

INSERT INTO `typeproduct` (`tproid`, `tproname`) VALUES
(1, 'Cockpit'),
(2, 'Playstation'),
(3, 'Simulator'),
(4, 'Xbox'),
(5, 'Bag'),
(6, 'Joystick'),
(7, 'Steering-wheel'),
(8, 'Mouse'),
(9, 'Keyboard'),
(10, 'Mouse-pad'),
(11, 'Gaming-Chair'),
(12, 'Speaker'),
(13, 'Headphone'),
(14, 'Computer-desk'),
(15, 'Microphone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`,`muser`);

--
-- Indexes for table `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`id`,`ordersid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordersid`,`muser`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`,`code`),
  ADD KEY `tproid` (`tproid`);

--
-- Indexes for table `typeproduct`
--
ALTER TABLE `typeproduct`
  ADD PRIMARY KEY (`tproid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ordersid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
