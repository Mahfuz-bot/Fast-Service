-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 11:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fast_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `reference_number` int(25) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `saddress` varchar(25) NOT NULL,
  `scontact` varchar(25) NOT NULL,
  `rname` varchar(25) NOT NULL,
  `raddress` varchar(25) NOT NULL,
  `rcontact` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `weight` varchar(25) NOT NULL,
  `size` varchar(25) NOT NULL,
  `money` varchar(25) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`reference_number`, `sname`, `saddress`, `scontact`, `rname`, `raddress`, `rcontact`, `quantity`, `weight`, `size`, `money`, `status`) VALUES
(1029, 'nabeel', 'malibagh ', '01723402990', 'rafi ', 'khilgaon ', '0143434343 ', '2', '11', '4', '4496', 'Unsuccessfull'),
(1031, 'nabeel', 'malibagh ', '01723402990', 'hasan ', 'khilgaon ', '97687687678 ', '36', '78', '25', '572400', 'Ready to Pickup'),
(1032, 'naruto', 'shantibagh ', '01723402990', 'saskue ', 'savar ', '97687687678 ', '3', '11', '4', '6744', 'Delivered'),
(1033, 'mahfuz', 'malibagh ', '01723402990', 'joy ', 'khilgaon ', '01723402990 ', '3', '25', '45', '16620', 'Out for Delivery'),
(1034, 'mahfuz', 'shantinagar ', '01723402990', 'nabeel ', 'khilgaon ', '01723402990 ', '3', '38', '22', '23592', 'Out for Delivery'),
(1035, 'mahfuz', 'malibagh ', '01723402990', 'saskue ', 'savar ', '01723402990 ', '3', '25', '25', '15900', 'Delivered'),
(1036, 'hasan', 'shantibagh ', '01723402990', 'mahfuz ', 'savar ', '01723402990 ', '2', '22', '87', '10888', 'Ready to Pickup'),
(1037, 'nabeel', 'shantibagh ', '01723402990', 'mahfuz ', 'Jurain ', '01723402990 ', '36', '78', '87', '599184', 'Item Accepted by Fast Service'),
(1038, 'nabeel', 'malibagh ', '01723402990', 'Sumon ', 'savar ', '01723402990 ', '6', '24', '34', '31248', 'Item Accepted by Fast Service'),
(1039, 'nabeel', 'malibagh ', '01723402990', 'KSI ', 'Baily Road ', '97687687678 ', '36', '78', '4', '563328', 'Item Accepted by Fast Service'),
(1040, 'nabeel', 'malibagh ', '01723402990', 'Cena ', 'khilgaon ', '0134343433333 ', '2', '11', '4', '4496', 'Item Accepted by Fast Service'),
(1041, 'nabeel', 'malibagh ', '01723402990', 'rafi ', 'khilgaon ', '01723402990 ', '3', '11', '4', '6744', 'Ready to Pickup');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ID` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `name`, `email`, `message`) VALUES
(50004, 'hasan', 'nabeelr007@gmail.com', 'This is my message'),
(50007, 'joy', 'piercealtair@gmail.com', 'This is new message');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(25) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `user_name`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`reference_number`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `reference_number` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1042;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50008;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
