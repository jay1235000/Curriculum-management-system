-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2021 at 10:41 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edms`
--

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

DROP TABLE IF EXISTS `committee`;
CREATE TABLE IF NOT EXISTS `committee` (
  `Committee_ID` int NOT NULL,
  `Committee_name` varchar(30) NOT NULL,
  PRIMARY KEY (`Committee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`Committee_ID`, `Committee_name`) VALUES
(1, 'SCC'),
(2, 'FCC'),
(3, 'OCDE');

-- --------------------------------------------------------

--
-- Table structure for table `committee-school_major`
--

DROP TABLE IF EXISTS `committee-school_major`;
CREATE TABLE IF NOT EXISTS `committee-school_major` (
  `Committee_ID` int NOT NULL,
  `Programme_ID` int NOT NULL,
  UNIQUE KEY `Commitee - School_Major_fk` (`Committee_ID`,`Programme_ID`) USING BTREE,
  KEY `Programme_ID_fk` (`Programme_ID`),
  KEY `Committee_ID_fk` (`Committee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee-school_major`
--

INSERT INTO `committee-school_major` (`Committee_ID`, `Programme_ID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `committee_members`
--

DROP TABLE IF EXISTS `committee_members`;
CREATE TABLE IF NOT EXISTS `committee_members` (
  `Member_ID` int NOT NULL,
  `Committee_ID` int NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Profile_Picture` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Education` varchar(255) DEFAULT NULL,
  `Skill` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Note` varchar(255) NOT NULL,
  PRIMARY KEY (`Member_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committee_members`
--

INSERT INTO `committee_members` (`Member_ID`, `Committee_ID`, `Name`, `Profile_Picture`, `Email`, `Address`, `Education`, `Skill`, `Position`, `Note`) VALUES
(789012, 1, 'Jane Doe', NULL, 'jane12@gmail.com', '52 King Street, Kingston', 'Bsc Comp. Sci', 'Java, Python, HTML, PHP, C#, C++, C, ASP.NET, Javascript', 'Council Member', 'Fear nothing');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `Faculty_ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  PRIMARY KEY (`Faculty_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Faculty_ID`, `Name`, `Description`) VALUES
(1, 'Faculty of Engineering and Computing (FENC)', ''),
(2, 'College of Health Science (COHS)', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `ID` int NOT NULL,
  `Member_ID` int DEFAULT NULL,
  `Committee_ID` int DEFAULT NULL,
  `Author_ID` int DEFAULT NULL,
  `Password` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Role` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `CommitteeID_fk` (`Committee_ID`),
  KEY `Author_ID_fk` (`Author_ID`),
  KEY `MemberID_fk` (`Member_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `Member_ID`, `Committee_ID`, `Author_ID`, `Password`, `Name`, `Role`) VALUES
(123456, NULL, NULL, 123456, 'Password*1', 'John Doe', 'Lecturer'),
(789012, 789012, 1, NULL, 'Password*1', 'Jane Doe', 'Committee');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
CREATE TABLE IF NOT EXISTS `schools` (
  `School_ID` int NOT NULL AUTO_INCREMENT,
  `Faculty_ID` int NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  PRIMARY KEY (`School_ID`),
  KEY `Faculty_ID` (`Faculty_ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`School_ID`, `Faculty_ID`, `Name`, `Description`) VALUES
(1, 1, 'School of Computing and Information Technology (SCIT)', ''),
(2, 1, 'School of Engineering (SOE)', '');

-- --------------------------------------------------------

--
-- Table structure for table `school_major`
--

DROP TABLE IF EXISTS `school_major`;
CREATE TABLE IF NOT EXISTS `school_major` (
  `Programme_ID` int NOT NULL AUTO_INCREMENT,
  `School_ID` int NOT NULL,
  `Major` varchar(50) NOT NULL,
  `Minor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Programme_ID`),
  UNIQUE KEY `School_ID` (`School_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_major`
--

INSERT INTO `school_major` (`Programme_ID`, `School_ID`, `Major`, `Minor`) VALUES
(1, 1, 'Computer Science', NULL),
(2, 2, 'Information Technology', 'Enterprise Systems');

-- --------------------------------------------------------

--
-- Table structure for table `school_major-syllabus`
--

DROP TABLE IF EXISTS `school_major-syllabus`;
CREATE TABLE IF NOT EXISTS `school_major-syllabus` (
  `Programme_ID` int NOT NULL,
  `Syllabus_ID` int NOT NULL,
  UNIQUE KEY `Scit_Major-Syllabus_Index` (`Programme_ID`,`Syllabus_ID`),
  KEY `scit major-syllabus` (`Syllabus_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_major-syllabus`
--

INSERT INTO `school_major-syllabus` (`Programme_ID`, `Syllabus_ID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

DROP TABLE IF EXISTS `syllabus`;
CREATE TABLE IF NOT EXISTS `syllabus` (
  `Syllabus_ID` int NOT NULL AUTO_INCREMENT,
  `Author_ID` int NOT NULL,
  `Committee_ID` int NOT NULL,
  `Module_code` varchar(10) NOT NULL,
  `Module_name` varchar(50) NOT NULL,
  `Link_to_syllabus` varchar(150) DEFAULT NULL,
  `Years_outdated` int NOT NULL,
  `Level` int NOT NULL,
  `Remarks` varchar(150) DEFAULT NULL,
  `Approval_Status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Syllabus_ID`),
  KEY `Syllabus_Author_ID_fk` (`Author_ID`) USING BTREE,
  KEY `syllabus_committee_ID_fk` (`Committee_ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`Syllabus_ID`, `Author_ID`, `Committee_ID`, `Module_code`, `Module_name`, `Link_to_syllabus`, `Years_outdated`, `Level`, `Remarks`, `Approval_Status`) VALUES
(1, 123456, 1, 'CMP2021', 'Advanced Programming ', 'syllabus_folder/DA_Group_Project_Sem2_2020.pdf', 3, 3, NULL, 'Pending Review'),
(4, 123456, 1, 'ENT1001', 'Environmental Studies', 'syllabus_folder/A Case Study on the Use of Drones on Heavy Civil Construction Pro.pdf', 3, 3, NULL, 'Pending Review'),
(8, 123456, 1, 'MCD2000', 'Analysis of Programming languages', 'syllabus_folder/FACTORIAL ANALYSIS OF VARIANCE  DESIGN_REVISED.pdf', 1, 2, NULL, 'Pending Review');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus_author`
--

DROP TABLE IF EXISTS `syllabus_author`;
CREATE TABLE IF NOT EXISTS `syllabus_author` (
  `Author_ID` int NOT NULL,
  `Faculty_ID` int NOT NULL,
  `School_ID` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Profile_Picture` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Education` varchar(60) DEFAULT NULL,
  `Skill` varchar(100) DEFAULT NULL,
  `Position` varchar(50) NOT NULL,
  `Note` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Author_ID`),
  UNIQUE KEY `Faculty_ID` (`Faculty_ID`) USING BTREE,
  UNIQUE KEY `School_ID` (`School_ID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus_author`
--

INSERT INTO `syllabus_author` (`Author_ID`, `Faculty_ID`, `School_ID`, `Name`, `Profile_Picture`, `Email`, `Address`, `Education`, `Skill`, `Position`, `Note`) VALUES
(123456, 1, 1, 'John Doe', NULL, 'johndoe@email.com', 'east street', 'Bsc Computer Science', 'Java, Python, C#, C++', 'lead lecturer', 'Stay Blessed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `committee-school_major`
--
ALTER TABLE `committee-school_major`
  ADD CONSTRAINT `CommitteeID2_fk` FOREIGN KEY (`Committee_ID`) REFERENCES `committee` (`Committee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Programme_ID_fk` FOREIGN KEY (`Programme_ID`) REFERENCES `school_major` (`Programme_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `Author_ID_fk` FOREIGN KEY (`Author_ID`) REFERENCES `syllabus_author` (`Author_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CommitteeID_fk` FOREIGN KEY (`Committee_ID`) REFERENCES `committee` (`Committee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `MemberID_fk` FOREIGN KEY (`Member_ID`) REFERENCES `committee_members` (`Member_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `school_faculty_ID_fk` FOREIGN KEY (`Faculty_ID`) REFERENCES `faculty` (`Faculty_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `school_major`
--
ALTER TABLE `school_major`
  ADD CONSTRAINT `school_major_school_id_fk` FOREIGN KEY (`School_ID`) REFERENCES `schools` (`School_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `school_major-syllabus`
--
ALTER TABLE `school_major-syllabus`
  ADD CONSTRAINT `Programme_ID2_fk` FOREIGN KEY (`Programme_ID`) REFERENCES `school_major` (`Programme_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `syllabus_ID_fk` FOREIGN KEY (`Syllabus_ID`) REFERENCES `syllabus` (`Syllabus_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD CONSTRAINT `Author_ID1_fk` FOREIGN KEY (`Author_ID`) REFERENCES `syllabus_author` (`Author_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `syll_Committee_ID_fk` FOREIGN KEY (`Committee_ID`) REFERENCES `committee` (`Committee_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `syllabus_author`
--
ALTER TABLE `syllabus_author`
  ADD CONSTRAINT `author_faculty_ID_fk` FOREIGN KEY (`Faculty_ID`) REFERENCES `faculty` (`Faculty_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `author_school_ID_fk` FOREIGN KEY (`School_ID`) REFERENCES `schools` (`School_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
