
-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 166.62.8.41
-- Generation Time: Dec 30, 2020 at 09:04 PM
-- Server version: 5.5.51
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `College`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_sub`
--

CREATE TABLE `assign_sub` (
  `assign_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `topic` varchar(300) NOT NULL,
  `asign_code` varchar(300) NOT NULL,
  `submittion_date` varchar(300) NOT NULL,
  `batch_id` varchar(300) NOT NULL,
  `faculty_id` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  PRIMARY KEY (`assign_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `assign_sub`
--

INSERT INTO `assign_sub` VALUES(1, 'S1', 'Data Structures', 'Description about Stack and  Queue', 'S1001', '2020-12-10', '1', '1', 'http://srishti-systems.info/projects/College/uploads/2.png');
INSERT INTO `assign_sub` VALUES(11, 'S3', 'C Programming', 'C Token', '', '2020-12-23', '1', '1', 'http://srishti-systems.info/projects/College/uploads/1.png');
INSERT INTO `assign_sub` VALUES(14, 'S3', 'C Programming', 'variables and data types', '', '2021-01-01', '1', '1', 'http://srishti-systems.info/projects/College/uploads/1356.jpg');
INSERT INTO `assign_sub` VALUES(12, 'S3', 'C Programming', 'Pointer', '', '2020-12-24', '1', '1', 'http://srishti-systems.info/projects/College/uploads/1234567.jpg');
INSERT INTO `assign_sub` VALUES(13, 'S1', 'Data Structures', 'Stack and Queue', '', '2020-12-26', '1', '1', 'http://srishti-systems.info/projects/College/uploads/12345.png');
INSERT INTO `assign_sub` VALUES(15, 'S1', 'Data Structures', 'Sort', '', '2021-01-04', '1', '1', 'http://srishti-systems.info/projects/College/uploads/123456.jpg');
INSERT INTO `assign_sub` VALUES(16, 'S3', 'C Programming', 'String functions', '', '2020-12-18', '1', '1', 'http://srishti-systems.info/projects/College/uploads/1234.png');
INSERT INTO `assign_sub` VALUES(17, 'S1', 'Switching Theory', 'Circuits', '', '2020-12-31', '1', '1', 'http://srishti-systems.info/projects/College/uploads/123.png');
INSERT INTO `assign_sub` VALUES(18, 'S1', 'Switching Theory', 'Logic Gates', '', '2020-12-29', '1', '1', 'http://srishti-systems.info/projects/College/uploads/644626-8.jpg');
INSERT INTO `assign_sub` VALUES(20, 'S1', 'Switching Theory', 'Logic gate and design', '', '2020-12-25', '1', '1', 'http://srishti-systems.info/projects/College/uploads/644626-8.jpg');
INSERT INTO `assign_sub` VALUES(21, 'S1', 'Switching Theory', 'And Gate', '', '2020-12-21', '1', '1', 'http://srishti-systems.info/projects/College/uploads/839851-download-(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_name` varchar(300) NOT NULL,
  PRIMARY KEY (`batch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` VALUES(1, 'Computer Science');
INSERT INTO `batch` VALUES(2, 'Electronics and Communication ');
INSERT INTO `batch` VALUES(3, 'Mechanical Engineering');
INSERT INTO `batch` VALUES(4, 'Civil Engineering.');
INSERT INTO `batch` VALUES(5, 'Electrical & Electronics');
INSERT INTO `batch` VALUES(6, 'Aeronautical Engineering.');
INSERT INTO `batch` VALUES(7, 'Automobile Engineering.');
INSERT INTO `batch` VALUES(8, 'Biotechnology.');
INSERT INTO `batch` VALUES(9, 'Artificial Intelligence');
INSERT INTO `batch` VALUES(10, 'Chemical Engineering');
INSERT INTO `batch` VALUES(11, 'B.Sc. Agriculture');
INSERT INTO `batch` VALUES(12, 'B.Sc. Computer Science');
INSERT INTO `batch` VALUES(13, 'B.Sc. Zoology');
INSERT INTO `batch` VALUES(14, 'B.Sc. Nursing');
INSERT INTO `batch` VALUES(15, 'B.Sc. (Hons.) Physics');
INSERT INTO `batch` VALUES(16, 'B.Sc. Biotechnology');
INSERT INTO `batch` VALUES(17, 'B.Sc. (Hons.) Chemistry');
INSERT INTO `batch` VALUES(18, 'B.Sc. Biochemistry');
INSERT INTO `batch` VALUES(19, 'B.Sc. (Hons.) Mathematics');
INSERT INTO `batch` VALUES(20, 'B.A. English');
INSERT INTO `batch` VALUES(21, 'B.A. in Political Science');
INSERT INTO `batch` VALUES(22, 'B.A. LLB');
INSERT INTO `batch` VALUES(23, 'B.A. Journalism and Mass Communication');
INSERT INTO `batch` VALUES(24, 'B.A Geography');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `faculty_id` varchar(300) NOT NULL,
  `batch_id` varchar(300) NOT NULL,
  `exam_date` varchar(300) NOT NULL,
  `exam_title` varchar(300) NOT NULL,
  `examtime` varchar(300) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` VALUES(1, 'S1', 'Data Structures', '1', '1', '2020-12-16', 'Data Structure Exam 1', '6', 1);
INSERT INTO `exam` VALUES(2, 'S1', 'Switching Theory', '1', '1', '2020-12-25', 'Switching Theory Exam 1', '8', 1);
INSERT INTO `exam` VALUES(3, 'S1', 'Basic Electronics', '1', '1', '2020-12-17', 'Basic Electronics Exam !', '1', 1);
INSERT INTO `exam` VALUES(4, 'S5', 'Python', '9', '1', '2020-12-29', 'python assignment', '60', 1);
INSERT INTO `exam` VALUES(5, 'S5', 'WDM', '9', '1', '2020-12-30', 'wdm series exam', '5', 1);
INSERT INTO `exam` VALUES(6, 'S5', 'Cryptography', '9', '1', '2020-12-30', 'cryptography series exam', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `no_of_correct_answer` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `semester` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `exam_title` varchar(300) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` VALUES(1, 1, 1, 3, 1, 'S1', 'Data Structures', 'Data Structure Exam 1', 1);
INSERT INTO `exam_result` VALUES(2, 3, 1, 0, 1, 'S1', 'Basic Electronics', 'Basic Electronics Exam !', 1);
INSERT INTO `exam_result` VALUES(3, 2, 1, 2, 1, 'S1', 'Switching Theory', 'Switching Theory Exam 1', 1);
INSERT INTO `exam_result` VALUES(4, 1, 28, 1, 1, 'S1', 'Data Structures', 'Data Structure Exam 1', 1);
INSERT INTO `exam_result` VALUES(5, 4, 25, 1, 1, 'S5', 'Python', 'python assignment', 1);
INSERT INTO `exam_result` VALUES(6, 5, 25, 0, 1, 'S5', 'WDM', 'wdm series exam', 1);
INSERT INTO `exam_result` VALUES(7, 6, 25, 1, 1, 'S5', 'Cryptography', 'cryptography series exam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_reg`
--

CREATE TABLE `faculty_reg` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `batch_id` varchar(300) NOT NULL,
  `semester` varchar(300) NOT NULL,
  `subject_id` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `batch` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `faculty_reg`
--

INSERT INTO `faculty_reg` VALUES(1, 'Athira', 'athirasurendran.sics@gmail.com', '1', ',S1', '', 'a', 'Computer Science', ',Data Structures');
INSERT INTO `faculty_reg` VALUES(3, 'Arathi', 'arathi@gmail.com', '2', '', '', 'Arathi@', 'Electronics and Communication ', '');
INSERT INTO `faculty_reg` VALUES(4, 'Nandini Nandakumar', 'nandininandakumar1997@gmail.com', '1', '', '', '0123456789', 'Computer Science', '');
INSERT INTO `faculty_reg` VALUES(5, 'Kichu', 'kichu123@gmail.com', '1', '', '', '1234', 'Computer Science', '');
INSERT INTO `faculty_reg` VALUES(6, 'Kichu', 'kichu123@gmail.com', '1', '', '', '1234', 'Computer Science', '');
INSERT INTO `faculty_reg` VALUES(7, 'Devu', 'devu11@gmail.com', '3', '', '', 'devu11', 'Mechanical Engineering', '');
INSERT INTO `faculty_reg` VALUES(8, 'Kannan', 'vichuponnu95@gmail.com', '19', '', '', 'kannan11', 'B.Sc. (Hons.) Mathematics', '');
INSERT INTO `faculty_reg` VALUES(9, 'Veena', 'vichuponnu95@gmail.com', '1', '', '', '6645', 'Computer Science', '');

-- --------------------------------------------------------

--
-- Table structure for table `online_test`
--

CREATE TABLE `online_test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(3000) NOT NULL,
  `a` varchar(300) NOT NULL,
  `b` varchar(300) NOT NULL,
  `c` varchar(300) NOT NULL,
  `d` varchar(300) NOT NULL,
  `batch_id` varchar(300) NOT NULL,
  `faculty_id` varchar(300) NOT NULL,
  `semester` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `correct_answer` varchar(300) NOT NULL,
  `submit_answer` varchar(300) NOT NULL,
  `exam_id` varchar(300) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `online_test`
--

INSERT INTO `online_test` VALUES(1, 'Process of inserting an element in stack is called ____________', 'Create', 'Push', 'Evaluation', 'Pop', '1', '1', 'S1', 'Data Structures', 'b', '', '1');
INSERT INTO `online_test` VALUES(2, 'Process of removing an element from stack is called __________', 'Create', 'Push', 'Evaluation', 'Pop', '1', '1', 'S1', 'Data Structures', 'd', '', '1');
INSERT INTO `online_test` VALUES(3, ' In a stack, if a user tries to remove an element from empty stack it is called _________', 'Underflow', 'Empty collection', 'Overflow', ' Garbage Collection', '1', '1', 'S1', 'Data Structures', 'a', '', '1');
INSERT INTO `online_test` VALUES(4, 'Which of the following is not the application of stack?', 'A parentheses balancing program', 'Tracking of local variables at run time', 'Compiler Syntax Analyzer', 'Data Transfer between two asynchronous process', '1', '1', 'S1', 'Data Structures', 'd', '', '1');
INSERT INTO `online_test` VALUES(5, 'Consider the usual algorithm for determining whether a sequence of parentheses is balanced.\r\nSuppose that you run the algorithm on a sequence that contains 2 left parentheses and 3 right parentheses (in some order).\r\nThe maximum number of parentheses that appear on the stack AT ANY ONE TIME during t', '1', '2', '3', '4 or more', '1', '1', 'S1', 'Data Structures', 'b', '', '1');
INSERT INTO `online_test` VALUES(6, 'What is the value of the postfix expression 6 3 2 4 + â€“ *?', '1', '40', '74', '-18', '1', '1', 'S1', 'Data Structures', 'd', '', '1');
INSERT INTO `online_test` VALUES(18, ' A galvanometer in series with a high resistance is called â€¦â€¦â€¦â€¦â€¦', 'An ammeter', 'A voltmeter', 'A wattmeter', 'None of the above', '1', '1', 'S1', 'Basic Electronics', 'b', '', '3');
INSERT INTO `online_test` VALUES(17, ' An ammeter is connected in â€¦â€¦â€¦â€¦â€¦.. with the circuit element whose current we wish to measure', 'Series', 'Parallel', 'Series or parallel', 'None of the above', '1', '1', 'S1', 'Basic Electronics', 'a', '', '3');
INSERT INTO `online_test` VALUES(9, 'A switch has â€¦â€¦â€¦â€¦â€¦â€¦', 'One state', 'Two states', 'Three states', 'None of the above', '1', '1', 'S1', 'Switching Theory', 'b', '', '2');
INSERT INTO `online_test` VALUES(10, 'The switch that has the fastest speed of operation is â€¦â€¦â€¦â€¦.. switch', 'Electronic', 'Mechanical', 'Electromechanical', 'None of the above', '1', '1', 'S1', 'Switching Theory', 'a', '', '2');
INSERT INTO `online_test` VALUES(11, ' The most inexpensive switch is â€¦â€¦â€¦â€¦.. switch', 'Electronic', 'Mechanical', 'Electromechanical', 'None of the above', '1', '1', 'S1', 'Switching Theory', 'a', '', '2');
INSERT INTO `online_test` VALUES(12, 'The main disadvantage of a mechanical switch is that itâ€¦â€¦â€¦â€¦.', 'Is operated mechanically', 'Is costly', 'Has high inertia', 'None of the above', '1', '1', 'S1', 'Switching Theory', 'c', '', '2');
INSERT INTO `online_test` VALUES(13, '. â€¦â€¦â€¦â€¦â€¦â€¦. multivibrator is a square wave oscillator', 'Monostable', 'Astable', 'Bistable', 'None of the above', '1', '1', 'S1', 'Switching Theory', 'b', '', '2');
INSERT INTO `online_test` VALUES(14, 'An astable multivibrator has â€¦â€¦â€¦â€¦.', 'One stable state', 'Two stable states', 'No stable state', 'None of the above', '1', '1', 'S1', 'Switching Theory', 'c', '', '2');
INSERT INTO `online_test` VALUES(15, 'If d.c. supply of 10 V is fed to a differentiating circuit, then output will be â€¦â€¦.', '20 V', '10 V', '0 V', 'None of the above', '1', '1', 'S1', 'Switching Theory', 'c', '', '2');
INSERT INTO `online_test` VALUES(16, ' If the input to a differentiating circuit is a saw-tooth wave, then output will be â€¦â€¦â€¦â€¦.', 'Square', 'Triangular', 'Sine', 'Rectangular', '1', '1', 'S1', 'Switching Theory', 'd', '', '2');
INSERT INTO `online_test` VALUES(19, 'What is the output of print str [2:5] if str = ''python programming''?', 'tho', 'oth', 'yth', 'thy', '1', '9', 'S5', 'Python', 'a', '', '4');
INSERT INTO `online_test` VALUES(20, 'Self organizing maps are an example of', 'unsupervised learning', 'supervised learning', 'reinforcement learning', 'missing data imputation', '1', '9', 'S5', 'WDM', 'a', '', '5');
INSERT INTO `online_test` VALUES(21, 'What is data encryption standards', 'Block cipher', 'Stream cipher', 'Big cipher', 'Byte cipher', '1', '9', 'S5', 'Cryptography', 'a', '', '6');
INSERT INTO `online_test` VALUES(22, 'In asymmetric key cryptography, the private key is kept by ', 'sender', 'receiver', 'both a and b', 'all the connected  devices', '1', '9', 'S5', 'Cryptography', 'b', '', '6');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(300) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` VALUES(1, 'S1');
INSERT INTO `semester` VALUES(2, 'S2');
INSERT INTO `semester` VALUES(3, 'S3');
INSERT INTO `semester` VALUES(4, 'S4');
INSERT INTO `semester` VALUES(5, 'S5');
INSERT INTO `semester` VALUES(6, 'S6');
INSERT INTO `semester` VALUES(7, 'S7');
INSERT INTO `semester` VALUES(8, 'S8');

-- --------------------------------------------------------

--
-- Table structure for table `semester_subject`
--

CREATE TABLE `semester_subject` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(300) NOT NULL,
  `batch_id` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `semester_subject`
--

INSERT INTO `semester_subject` VALUES(1, 'S1', '1', 'Data Structures', 'http://srishti-systems.info/projects/College/uploads/111511-1_kpdokmfagdwagtqhl0r70g.png', 1);
INSERT INTO `semester_subject` VALUES(2, 'S3', '1', 'C Programming', 'http://srishti-systems.info/projects/College/uploads/743755-c-programming-course.png', 1);
INSERT INTO `semester_subject` VALUES(3, 'S1', '1', 'Switching Theory', 'http://srishti-systems.info/projects/College/uploads/552819-51ig7oe-8ml._sx376_bo1,204,203,200_.jpg', 1);
INSERT INTO `semester_subject` VALUES(4, 'S1', '1', 'Basic Electronics', 'http://srishti-systems.info/projects/College/uploads/956187-download-(2).jpg', 1);
INSERT INTO `semester_subject` VALUES(6, 'S5', '1', 'Python', 'http://srishti-systems.info/projects/College/uploads/367314-capture.jpg', 9);
INSERT INTO `semester_subject` VALUES(7, 'S5', '1', 'WDM', 'http://srishti-systems.info/projects/College/uploads/994528-capture2.jpg', 9);
INSERT INTO `semester_subject` VALUES(8, 'S5', '1', 'Cryptography', 'http://srishti-systems.info/projects/College/uploads/428246-images.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `batch` varchar(300) NOT NULL,
  `semester` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `batch_id` varchar(300) NOT NULL,
  `regno` varchar(300) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` VALUES(1, 'Athira', 'athira@gmail.com', 'Computer Science', 'S1', 'Athira@123', '1', 'CS001');
INSERT INTO `student_reg` VALUES(10, 'harish', 'hsh', 'Mechanical Engineering', 'S5', '000', '3', '000');
INSERT INTO `student_reg` VALUES(4, 'gsbss', 'abcagahaha', 'Computer Science', 'S1', 'password', '1', '123');
INSERT INTO `student_reg` VALUES(25, 'nandini nandakumar', 'nandininandakumar1997@gmail.com', 'Computer Science', 'S5', '0123456789', '1', '6644');
INSERT INTO `student_reg` VALUES(6, 'Adarsh', 'shshsh', 'Computer Science', 'S1', 'passwordghss', '1', '123ghs');
INSERT INTO `student_reg` VALUES(7, 'harish', 'harishpadmanabh@gmail.com', 'Computer Science', 'S2', 'qwerty', '1', '123');
INSERT INTO `student_reg` VALUES(8, 'qwe', 'qwe', 'Mechanical Engineering', 'S4', '111', '3', '133');
INSERT INTO `student_reg` VALUES(11, 'hsh', 'hshsh', 'Mechanical Engineering', 'S5', 'gsha', '3', 'hshah');
INSERT INTO `student_reg` VALUES(24, 'monisha', 'monishahchandran@gmail.com', 'Computer Science', 'S2', '12345678', '1', '12345678');
INSERT INTO `student_reg` VALUES(22, 'Aathi', 'athiras@gmail.com', 'Computer Science', 'S1', 'Athira@123', '1', 'CS002');
INSERT INTO `student_reg` VALUES(23, 'Adarsh', 'adarsh@gmail.com', 'Civil Engineering.', 'S1', '1234', '4', '1234');
INSERT INTO `student_reg` VALUES(26, 'harish', 'hh', 'Computer Science', 'S1', '00098', '1', '00098');
INSERT INTO `student_reg` VALUES(27, 'Adarsh', 'a', 'Mechanical Engineering', 'S5', '007', '3', '007');
INSERT INTO `student_reg` VALUES(28, 'Arathi', 'arathi@gmail.com', 'Computer Science', 'S1', 'arathi@123', '1', '1012');

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

CREATE TABLE `study_material` (
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` varchar(300) NOT NULL,
  `semester` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `faculty_id` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  PRIMARY KEY (`material_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `study_material`
--

INSERT INTO `study_material` VALUES(1, '1', 'S1', 'Data Structures', 'http://srishti-systems.info/projects/College//uploads/933720-lecture1428550942.pdf', '1', 'PROGRAMMING PERFORMANCE');
INSERT INTO `study_material` VALUES(2, '1', 'S1', 'Data Structures', 'http://srishti-systems.info/projects/College//uploads/21253-dsa.pdf', '1', 'SPACE COMPLEXITY and others');
INSERT INTO `study_material` VALUES(3, '1', 'S1', 'Data Structures', 'http://srishti-systems.info/projects/College//uploads/223851-ds-ln.pdf', '1', 'Basics of data structure');
INSERT INTO `study_material` VALUES(4, '1', 'S3', 'C Programming', 'http://srishti-systems.info/projects/College//uploads/968204-computer-programming.pdf', '1', 'Lecture note of c programming');
INSERT INTO `study_material` VALUES(6, '1', 'S1', 'Switching Theory', 'http://srishti-systems.info/projects/College//uploads/579485-cs201-discrete-computational-structures.pdf', '1', 'Switching theory syllabus');

-- --------------------------------------------------------

--
-- Table structure for table `submit_assignment`
--

CREATE TABLE `submit_assignment` (
  `submit_id` int(11) NOT NULL AUTO_INCREMENT,
  `asign_code` varchar(300) NOT NULL,
  `batch_id` varchar(300) NOT NULL,
  `semester` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `assign_id` varchar(300) NOT NULL,
  `stud_id` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `faculty_id` varchar(300) NOT NULL,
  `submit_flag` int(11) NOT NULL,
  PRIMARY KEY (`submit_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `submit_assignment`
--

INSERT INTO `submit_assignment` VALUES(1, 'S1001', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/985524-akhil-suku-cv.pdf', '1', '1', 'Data Structures', '1', 0);
INSERT INTO `submit_assignment` VALUES(3, 'S1001', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/868275-dsa.pdf', '1', '2', 'teest', '1', 0);
INSERT INTO `submit_assignment` VALUES(4, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/667381-dsa.pdf', '1', '3', 'teest', '1', 0);
INSERT INTO `submit_assignment` VALUES(14, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/918518-stallings_cryptography_and_network_security.pdf', '1', '8', 'blabla', '1', 0);
INSERT INTO `submit_assignment` VALUES(13, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/669045-stallings_cryptography_and_network_security.pdf', '1', '7', 'blabla', '1', 0);
INSERT INTO `submit_assignment` VALUES(11, 'S1001', '1', 'S1', 'http://srishti-systems.info/projects/College/api//uploads/369339-array', '1', '4', 'Data Structures', '1', 0);
INSERT INTO `submit_assignment` VALUES(12, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/819863-pdffromlayout.pdf', '1', '6', 'blabla', '1', 0);
INSERT INTO `submit_assignment` VALUES(15, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/166139-dsa.pdf', '1', '13', 'teest', '1', 0);
INSERT INTO `submit_assignment` VALUES(16, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/215693-pdffromlayout.pdf', '1', '14', 'blabla', '1', 1);
INSERT INTO `submit_assignment` VALUES(18, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/248659-dsa.pdf', '1', '17', 'Data Structures', '1', 1);
INSERT INTO `submit_assignment` VALUES(21, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/77858-stallings_cryptography_and_network_security.pdf', '1', '26', 'Data Structures', '1', 1);
INSERT INTO `submit_assignment` VALUES(20, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/917498-slot-algorithm-logic22.pdf', '13', '1', 'Data Structures', '1', 1);
INSERT INTO `submit_assignment` VALUES(22, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/700541-pdffromlayout.pdf', '21', '26', 'Switching Theory', '1', 1);
INSERT INTO `submit_assignment` VALUES(23, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/545659-dsa.pdf', '1', '25', 'Data Structures', '1', 1);
INSERT INTO `submit_assignment` VALUES(24, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/773813-dsa.pdf', '17', '1', 'Switching Theory', '1', 1);
INSERT INTO `submit_assignment` VALUES(25, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/670658-slot-algorithm-logic22.pdf', '21', '1', 'Switching Theory', '1', 1);
INSERT INTO `submit_assignment` VALUES(26, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/557920-mcs-033-2020-21.pdf', '18', '1', 'Switching Theory', '1', 1);
INSERT INTO `submit_assignment` VALUES(27, '', '1', 'S1', 'http://srishti-systems.info/projects/College/api/uploads/614070-mcs-031-2020-21.pdf', '20', '1', 'Switching Theory', '1', 1);
