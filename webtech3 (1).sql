-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 11:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech3`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `imageName` varchar(45) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `pathtoImage` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`idimages`, `imageName`, `userID`, `date`, `pathtoImage`) VALUES
(1, 'aa', NULL, '2019-04-20 17:30:29', NULL),
(2, 'avatar2.jpg', 10004, '2019-04-20 17:49:56', 'users/10004/avatar2.jpg'),
(3, 'avatar3.jpg', 10004, '2019-04-20 17:49:56', 'users/10004/avatar3.jpg'),
(4, 'avatar.jpg', 10004, '2019-04-20 17:49:56', 'users/10004/avatar.jpg'),
(5, '2.jpg', 10004, '2019-04-20 17:49:56', 'users/10004/2.jpg'),
(6, '2345678.png', 10004, '2019-04-20 17:49:56', 'users/10004/2345678.png'),
(7, 'avatar4.jpg', 10004, '2019-04-20 17:49:56', 'users/10004/avatar4.jpg'),
(8, 'avatar6.jpg', 10004, '2019-04-20 17:49:56', 'users/10004/avatar6.jpg'),
(9, 'avatar5.jpg', 10004, '2019-04-20 17:49:56', 'users/10004/avatar5.jpg'),
(10, 'avatar7.jpg', 10004, '2019-04-20 17:49:56', 'users/10004/avatar7.jpg'),
(11, 'avatar8.jpg', 10004, '2019-04-20 17:49:56', 'users/10004/avatar8.jpg'),
(12, 'avatar9.jpg', 10004, '2019-04-20 17:49:56', 'users/10004/avatar9.jpg'),
(13, 'rva.jpg', 10004, '2019-04-20 17:50:27', 'users/10004/rva.jpg'),
(14, 'evaluateicon.png', 10004, '2019-04-20 17:51:07', 'users/10004/evaluateicon.png');

--
-- Triggers `images`
--
DELIMITER $$
CREATE TRIGGER `images_BEFORE_INSERT` BEFORE INSERT ON `images` FOR EACH ROW BEGIN
SET NEW.date =NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userType` int(11) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `passWord` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `birthDate` varchar(45) DEFAULT NULL,
  `eMail` varchar(180) DEFAULT NULL,
  `pathToDP` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userType`, `userName`, `passWord`, `firstName`, `lastName`, `birthDate`, `eMail`, `pathToDP`) VALUES
(10001, 1, 'dummy', 'dummy', 'dummy', 'dummy', '1999/04/12', NULL, NULL),
(10002, 1, 'dummy2', 'dummy2', 'dummy', 'dummy', '1999/03/03', NULL, NULL),
(10003, 1, 'dummy', '12345', 'dummy', 'dummy', '', 'dummy', NULL),
(10004, 1, 'allenind', '12345', 'Allen', 'Indefenzo', '', 'allen@123.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimages`),
  ADD KEY `uID_idx` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `idimages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `uID` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
