-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2023 at 04:21 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college5`
--

-- --------------------------------------------------------

--
-- Table structure for table `boardroom`
--

CREATE TABLE `boardroom` (
  `pk` int(11) NOT NULL,
  `title` text NOT NULL,
  `subject` text NOT NULL,
  `detail` text NOT NULL,
  `create_date` text NOT NULL,
  `create_date2` text NOT NULL,
  `create_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boardroom`
--

INSERT INTO `boardroom` (`pk`, `title`, `subject`, `detail`, `create_date`, `create_date2`, `create_time`) VALUES
(2, 'ห้องวิชาการ เลข', '9', '<div>jijoljioj</div>\r\n', '26-01-2023', '2023-01-26', '02:01');

-- --------------------------------------------------------

--
-- Table structure for table `classdata`
--

CREATE TABLE `classdata` (
  `pk` int(11) NOT NULL,
  `data1` text NOT NULL,
  `data2` text NOT NULL,
  `data3` text NOT NULL,
  `data4` text NOT NULL,
  `data5` text NOT NULL,
  `data6` text NOT NULL,
  `data7` text NOT NULL,
  `data8` text NOT NULL,
  `data9` text NOT NULL,
  `data10` text NOT NULL,
  `create_date` text NOT NULL,
  `create_date2` text NOT NULL,
  `create_by` text NOT NULL,
  `create_time` text NOT NULL,
  `datafile` text NOT NULL,
  `data11` text NOT NULL,
  `data12` text NOT NULL,
  `chk1` text NOT NULL,
  `chk2` text NOT NULL,
  `startdate` text NOT NULL,
  `enddate` text NOT NULL,
  `data42` text NOT NULL,
  `data32` text NOT NULL,
  `data13` text NOT NULL,
  `data14` text NOT NULL,
  `data15` text NOT NULL,
  `data16` text NOT NULL,
  `chk3` text NOT NULL,
  `datachk30` text NOT NULL,
  `datachk31` text NOT NULL,
  `chk4` text NOT NULL,
  `datachk4` text NOT NULL,
  `datachk41` text NOT NULL,
  `chk5` text NOT NULL,
  `datachk5` text NOT NULL,
  `datachk51` text NOT NULL,
  `chk6` text NOT NULL,
  `datachk6` text NOT NULL,
  `datachk61` text NOT NULL,
  `tri` text NOT NULL,
  `datatri` text NOT NULL,
  `tri2` text NOT NULL,
  `datatri2` text NOT NULL,
  `tri3` text NOT NULL,
  `datatri3` text NOT NULL,
  `tri4` text NOT NULL,
  `datatri4` text NOT NULL,
  `tri5` text NOT NULL,
  `datatri5` text NOT NULL,
  `grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classdata`
--

INSERT INTO `classdata` (`pk`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `create_date`, `create_date2`, `create_by`, `create_time`, `datafile`, `data11`, `data12`, `chk1`, `chk2`, `startdate`, `enddate`, `data42`, `data32`, `data13`, `data14`, `data15`, `data16`, `chk3`, `datachk30`, `datachk31`, `chk4`, `datachk4`, `datachk41`, `chk5`, `datachk5`, `datachk51`, `chk6`, `datachk6`, `datachk61`, `tri`, `datatri`, `tri2`, `datatri2`, `tri3`, `datatri3`, `tri4`, `datatri4`, `tri5`, `datatri5`, `grade`) VALUES
(20, 'SC313006', 'ปัญญาประดิษฐ์', 'ARTIFICIAL INTELLIGENCE', '3', '3', '3', '2566', 'เทอมต้น', 'ปกติ', 'เบิกบรรยาย-ปฎิบัติการ(Lec-Lab)', '02-05-2023', '2023-05-02', '9', '08:56', ' ', '9', '02/05/2566', 'ปริญญาตรี', 'ปริญญาโท-เอก ', '2023-05-02', '2023-05-03', '', '', '03/05/2566', '', '', '', 'ช่วยสอน', '1', 'ช่วยสอน', 'ช่วยเตรียมการสอน', '3', 'ช่วยเตรียมการสอบ', 'ตรวจแบบทดสอบ ', '2', 'ตรวจแบบทดสอบ', 'อื่นๆระบุ', '4', 'อื่นๆระบุ', 'ช่วยตรวจงาน', '1', 'เช็คชื่อ / เก็บใบงาน', '2', 'อื่นๆ', '3', 'จำนวนชั่วโมง', '4', '', '', 0),
(21, 'CP353201', 'การประกันคุณภาพซอฟต์แวร์', 'Software Quality Assurance', '3', '3', '3', '2570', 'เทอมต้น', 'ปกติ', 'เบิกบรรยาย-ปฎิบัติการ(Lec-Lab)', '02-05-2023', '2023-05-02', '2', '10:28', ' ', '15', '02/05/2566', 'ปริญญาตรี', 'ปริญญาโท-เอก ', '2023-05-02', '2023-05-02', '', '', '02/05/2566', '', '', '', 'ช่วยสอน', '1', 'AA', 'ช่วยเตรียมการสอน', '3', 'DD', 'ตรวจแบบทดสอบ ', '2', 'SS', 'อื่นๆระบุ', '4', 'CC', 'ช่วยตรวจงาน', '1', 'เช็คชื่อ / เก็บใบงาน', '2', 'อื่นๆ', '3', 'จำนวนชั่วโมง', '4', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `classdata_section`
--

CREATE TABLE `classdata_section` (
  `classdata_section_id` int(11) NOT NULL,
  `classdata_pk` int(11) NOT NULL,
  `data14` int(11) NOT NULL,
  `data15` int(11) NOT NULL,
  `data16` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classdata_section`
--

INSERT INTO `classdata_section` (`classdata_section_id`, `classdata_pk`, `data14`, `data15`, `data16`) VALUES
(1, 13, 1, 2, 2),
(2, 13, 2, 2, 2),
(3, 13, 3, 2, 2),
(4, 12, 1, 2, 2),
(5, 16, 1, 2, 2),
(6, 17, 1, 2, 2),
(7, 20, 3, 1, 3),
(8, 20, 1, 1, 1),
(9, 20, 2, 3, 1),
(10, 21, 1, 2, 3),
(11, 21, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_class`
--

CREATE TABLE `data_class` (
  `pk` int(11) NOT NULL,
  `data1` text NOT NULL,
  `data3` text NOT NULL,
  `data2` text NOT NULL,
  `iddata` text NOT NULL,
  `data4` text NOT NULL,
  `data5` text NOT NULL,
  `data6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_class`
--

INSERT INTO `data_class` (`pk`, `data1`, `data3`, `data2`, `iddata`, `data4`, `data5`, `data6`) VALUES
(18, '1', '5', '1', '8', '2', '3', '1'),
(19, '1', '4', '1', '9', 'SC1', 'SC12', '3'),
(20, '1', '7', '1', '11', 'SC2', 'SC3', '1'),
(21, '3', '8', '5', '11', 'SC1', 'SC1234', '1'),
(22, '1', '3', '1', '12', 'SC8', '8515', ''),
(24, '2', '9', '5', '12', 'SC8', '8505', ''),
(28, '1', '7', '3', '13', 'SC9', '9100', '2'),
(29, '3', '7', '3', '13', 'SC9', '9120', '2'),
(33, '1', '10', '5', '20', 'SC3', 'SC369', '1'),
(34, '3', '13', '9', '20', 'SC5', 'SC5123', '2');

-- --------------------------------------------------------

--
-- Table structure for table `dropday`
--

CREATE TABLE `dropday` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dropday`
--

INSERT INTO `dropday` (`pk`, `name`) VALUES
(1, 'วันจันทร์'),
(2, 'วันอังคาร'),
(3, 'วันพุธ'),
(4, 'วันพฤหัสษดี'),
(5, 'วันศุกร์'),
(6, 'วันเสาร์'),
(7, 'วันอาทิตย์');

-- --------------------------------------------------------

--
-- Table structure for table `droptime`
--

CREATE TABLE `droptime` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `droptime`
--

INSERT INTO `droptime` (`pk`, `name`) VALUES
(1, '08.00'),
(2, '08.30'),
(3, '09.00'),
(4, '09.30'),
(5, '10.00'),
(6, '10.30'),
(7, '11.00'),
(8, '11.30'),
(9, '12.00'),
(10, '12.30'),
(11, '13.00'),
(12, '13.30'),
(13, '14.00'),
(14, '14.30'),
(15, '15.00'),
(16, '15.30'),
(17, '16.00'),
(18, '16.30'),
(19, '17.00'),
(20, '17.30'),
(21, '18.00'),
(22, '18.30'),
(23, '19.00'),
(24, '19.30'),
(25, '20.00');

-- --------------------------------------------------------

--
-- Table structure for table `drop_build`
--

CREATE TABLE `drop_build` (
  `pk` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drop_build`
--

INSERT INTO `drop_build` (`pk`, `name`) VALUES
(1, 'SC1'),
(2, 'SC2'),
(3, 'SC3'),
(4, 'SC4'),
(5, 'SC5'),
(6, 'SC6'),
(7, 'SC7'),
(8, 'SC8'),
(9, 'SC9');

-- --------------------------------------------------------

--
-- Table structure for table `drop_other`
--

CREATE TABLE `drop_other` (
  `pk` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drop_other`
--

INSERT INTO `drop_other` (`pk`, `name`) VALUES
(1, 'เบิกเฉพาะบรรยาย(Lec)'),
(2, 'เบิกเฉพาะปฎิบัติการ(Lab)'),
(3, 'เบิกบรรยาย-ปฎิบัติการ(Lec-Lab)');

-- --------------------------------------------------------

--
-- Table structure for table `drop_show`
--

CREATE TABLE `drop_show` (
  `pk` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drop_show`
--

INSERT INTO `drop_show` (`pk`, `name`) VALUES
(1, 'รับสมัคร'),
(2, 'สอบชดเชย');

-- --------------------------------------------------------

--
-- Table structure for table `drop_status`
--

CREATE TABLE `drop_status` (
  `pk` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drop_status`
--

INSERT INTO `drop_status` (`pk`, `name`, `status`) VALUES
(1, 'กำลังตรวจสอบ', '0'),
(2, 'ไม่อนุมัติ', '2'),
(3, 'อนุมัติ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `drop_status2`
--

CREATE TABLE `drop_status2` (
  `pk` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drop_status2`
--

INSERT INTO `drop_status2` (`pk`, `name`, `status`) VALUES
(1, 'นักศึกษา', 'M'),
(2, 'อาจารย์', 'AJ'),
(3, 'ผู้ช่วยอาจารย์', 'SAJ');

-- --------------------------------------------------------

--
-- Table structure for table `drop_subject`
--

CREATE TABLE `drop_subject` (
  `pk` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drop_subject`
--

INSERT INTO `drop_subject` (`pk`, `name`) VALUES
(1, 'ปริญญาตรี'),
(2, 'ปริญญาโท-เอก ');

-- --------------------------------------------------------

--
-- Table structure for table `drop_term`
--

CREATE TABLE `drop_term` (
  `pk` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drop_term`
--

INSERT INTO `drop_term` (`pk`, `name`) VALUES
(1, 'เทอมต้น'),
(2, 'เทอมปลาย'),
(3, 'ภาคฤดูร้อน');

-- --------------------------------------------------------

--
-- Table structure for table `drop_type`
--

CREATE TABLE `drop_type` (
  `pk` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drop_type`
--

INSERT INTO `drop_type` (`pk`, `name`) VALUES
(1, 'ปกติ'),
(2, 'พิเศษ');

-- --------------------------------------------------------

--
-- Table structure for table `drop_type2`
--

CREATE TABLE `drop_type2` (
  `pk` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drop_type2`
--

INSERT INTO `drop_type2` (`pk`, `name`) VALUES
(1, 'ทั่วไป'),
(2, 'ประกาศรับสมัคร'),
(3, 'วันชดเชย');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `pk` int(11) NOT NULL,
  `bill_no` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`pk`, `bill_no`, `img`) VALUES
(7, 'N-18', 'img11900model240320239275.jpg'),
(6, 'N-23', 'img1156model240320238290.jpg'),
(5, 'N-24', 'img11551model240320234714.jpg'),
(8, 'N-26', 'img11491model2504202329.jpg'),
(9, 'N-27', 'img11976model250420234061.jpg'),
(10, 'N-28', 'img11631model020520234642.jpg'),
(11, 'N-29', 'img11513model020520237605.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images2`
--

CREATE TABLE `images2` (
  `pk` int(11) NOT NULL,
  `bill_no` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images2`
--

INSERT INTO `images2` (`pk`, `bill_no`, `img`) VALUES
(1, 'N-19', 'img1122303model18012023856.jpg'),
(3, 'N-21', 'img1122923model210120235651.jpg'),
(5, 'N-25', 'img1122410model240320234886.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `telphone` text NOT NULL,
  `address` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL,
  `img` text NOT NULL,
  `name2` text NOT NULL,
  `codestudent` text NOT NULL,
  `subject` text NOT NULL,
  `major` text NOT NULL,
  `major2` text NOT NULL,
  `major3` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`pk`, `name`, `email`, `telphone`, `address`, `username`, `password`, `status`, `img`, `name2`, `codestudent`, `subject`, `major`, `major2`, `major3`, `img2`, `img3`, `img4`) VALUES
(2, 'admin1', '2@dafddsfad.com', '511620041', 'บ้าน', 'admin', '1234', 'A', 'resimg232img4989.png', '', '', '', '', '', '', '', '', ''),
(4, 'puri', 'poompuri30233@gmail.com', '511620041', '', 'student', '1234', 'SAJ', 'resimg408img5185.png', '', 'St1457955450', 'ปริญญาตรี', '123', 'ปกติ', '5140', '', '', ''),
(9, 'นางวัล ลบสอนดีจริง', 'jhon@gmail.com', '511620041', '', 'teacher', '1234', 'AJ', '', '', '511620044', 'ปริญญาตรี', '23', 'ปกติ', '10', '', '', ''),
(11, 'ผู้ช่วยวันทอง ใจดี', 'jhon@gmail.com', '511620041', '', 'steacher', '1234', 'SAJ', '', '', '5116200499', 'ปริญญาตรี', 'สาขา เดา', 'ปกติ', 'คณะ เอก', 'resimg22106img634.png', '', ''),
(15, 'เพชร อิ่มทองคำ', 'petch@kkumail.com', '095123', 'SC3', 'petch', '1234', 'AJ', 'resimg232img4989.png', 'PHET IMTONGKHUM', '127627', 'ปริญญาโท-เอก ', '', '', '', '', '', ''),
(18, 'สุธน เจริญศิริ', 'suton@kkumail.com', '0123456', 'SC8', 'suton', '1234', 'A', '', 'SUTON CHAROENSIRI', '120807', '', '', '', '', '', '', ''),
(20, 'ผู้ช่วย คนใหม่', 'jhon@gmail.com', '511620041', '', 'steacher2', '1234', 'SAJ', '', '', '5116200499', 'ปริญญาโท-เอก ', 'สาขา เดา', 'ปกติ', 'คณะ เอก', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news_report`
--

CREATE TABLE `news_report` (
  `pk` int(11) NOT NULL,
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `img` text NOT NULL,
  `date_start` text NOT NULL,
  `date_start2` text NOT NULL,
  `date_time` text NOT NULL,
  `bill_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_report`
--

INSERT INTO `news_report` (`pk`, `title`, `detail`, `img`, `date_start`, `date_start2`, `date_time`, `bill_no`) VALUES
(10, 'ม.ขอนแก่น', '<div>ม.ขอนแก่น</div>\r\n', '', '02-05-2023', '2023-05-02', '08:38', 'N-28'),
(11, 'ม.นเรศวร', '<div>ม.นเรศวร</div>\r\n', '', '02-05-2023', '2023-05-02', '08:39', 'N-29');

-- --------------------------------------------------------

--
-- Table structure for table `news_report2`
--

CREATE TABLE `news_report2` (
  `pk` int(11) NOT NULL,
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `img` text NOT NULL,
  `datafile` text NOT NULL,
  `date_start` text NOT NULL,
  `date_start2` text NOT NULL,
  `date_time` text NOT NULL,
  `bill_no` text NOT NULL,
  `subject` text NOT NULL,
  `createby` text NOT NULL,
  `datestart` text NOT NULL,
  `headdata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_report2`
--

INSERT INTO `news_report2` (`pk`, `title`, `detail`, `img`, `datafile`, `date_start`, `date_start2`, `date_time`, `bill_no`, `subject`, `createby`, `datestart`, `headdata`) VALUES
(5, '1', '<div>AAAA</div>\r\n', '', '', '21-01-2023', '2023-01-21', '00:59', 'N-22', '9', '2', '2023-01-21', 'รับสมัครครูผู้ช่วยสอน'),
(6, '2', '', '', '', '24-03-2023', '2023-03-24', '10:40', 'N-25', '11', '9', '2023-03-24', 'ประกาศรับสมัคร');

-- --------------------------------------------------------

--
-- Table structure for table `run_bill`
--

CREATE TABLE `run_bill` (
  `pk` int(11) NOT NULL,
  `bill_no` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `run_bill`
--

INSERT INTO `run_bill` (`pk`, `bill_no`) VALUES
(2, 'N-1'),
(3, 'N-2'),
(4, 'N-3'),
(5, 'N-4'),
(6, 'N-5'),
(7, 'N-6'),
(8, 'N-7'),
(9, 'N-8'),
(10, 'N-9'),
(11, 'N-10'),
(12, 'N-11'),
(13, 'N-12'),
(14, 'N-13'),
(15, 'N-14'),
(16, 'N-15'),
(17, 'N-16'),
(18, 'N-17'),
(19, 'N-18'),
(20, 'N-19'),
(21, 'N-20'),
(22, 'N-21'),
(23, 'N-22'),
(24, 'N-23'),
(25, 'N-24'),
(26, 'N-25'),
(27, 'N-26'),
(28, 'N-27'),
(29, 'N-28'),
(30, 'N-29');

-- --------------------------------------------------------

--
-- Table structure for table `student_paper`
--

CREATE TABLE `student_paper` (
  `pk` int(11) NOT NULL,
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  `price1` text COLLATE utf8_unicode_ci NOT NULL,
  `price2` text COLLATE utf8_unicode_ci NOT NULL,
  `price3` text COLLATE utf8_unicode_ci NOT NULL,
  `price4` text COLLATE utf8_unicode_ci NOT NULL,
  `price5` text COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date2` text COLLATE utf8_unicode_ci NOT NULL,
  `create_time` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `pricesave` text COLLATE utf8_unicode_ci,
  `create_by` text COLLATE utf8_unicode_ci NOT NULL,
  `note_data` text COLLATE utf8_unicode_ci,
  `note_data2` text COLLATE utf8_unicode_ci NOT NULL,
  `grade` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_paper`
--

INSERT INTO `student_paper` (`pk`, `student`, `price1`, `price2`, `price3`, `price4`, `price5`, `subject`, `create_date`, `create_date2`, `create_time`, `status`, `pricesave`, `create_by`, `note_data`, `note_data2`, `grade`) VALUES
(28, '11', '', '', '', '', '', '21', '02-05-2023', '2023-05-02', '10:58', '1', '', '2', '', 'SAJ', 0),
(27, '4', '', '', '', '', '', '20', '02-05-2023', '2023-05-02', '10:05', '1', '', '2', '', 'SAJ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_copy`
--

CREATE TABLE `teacher_copy` (
  `pk` int(11) NOT NULL,
  `data1` text COLLATE utf8_unicode_ci NOT NULL,
  `data2` text COLLATE utf8_unicode_ci NOT NULL,
  `data3` text COLLATE utf8_unicode_ci NOT NULL,
  `data4` text COLLATE utf8_unicode_ci NOT NULL,
  `data5` text COLLATE utf8_unicode_ci NOT NULL,
  `data6` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher_copy`
--

INSERT INTO `teacher_copy` (`pk`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`) VALUES
(245907, '320219', 'การโปรแกรมเชิงวัตถุ', 'OBJECT ORIENTED PROGRAMMING', '3', '3', '3'),
(245908, '320220', 'การสร้างโปรแกรมบนเว็บ', 'WEB PROGRAMMING', '3', '3', '3'),
(245909, '320221', 'การสร้างโปรแกรมภาษาจาวา', 'JAVA PROGRAMMING', '3', '3', '3'),
(245910, '320312', 'โครงสร้างข้อมูล', 'DATA STRUCTURES', '3', '3', '3'),
(245911, '320212', 'การเขียนโปรแกรมภาษาซี', 'PROGRAMMING IN C LANGUAGE', '3', '3', '3'),
(245912, '320317', 'การวิเคราะห์ขั้นตอนวิธี', 'ANALYSIS OF ALGORITHMS', '3', '3', '3'),
(245913, '320320', 'ระบบสารสนเทศภูมิศาสตรขั้นแนะนำ', 'INTRODUCTION TO GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(245914, '320321', 'ทฤษฏีการคำนวณ', 'THEORY OF COMPUTATION', '3', '3', '3'),
(245915, '320322', 'การพัฒนาโปรแกรมประยุกต์แบบไคลเอนต์-เซิร์ฟเวอร์', 'CLIENT-SERVER APPLICATION DEVELOPMENT', '3', '3', '3'),
(245916, '320411', 'ระบบปฏิบัติการ', 'OPERATING SYSTEMS', '3', '3', '3'),
(245917, '320417', 'ปัญหาประดิษฐ์และระบบผู้เชี่ยวชาญ', 'ARTIFICIAL INTELLIGENCE AND EXPERT SYSTEM', '3', '3', '3'),
(245918, '320421', 'ยูนิกซ์ขั้นพื้นฐาน', 'UNIX FUNDAMENTALS', '3', '3', '3'),
(245919, '320422', 'ภาษาคอมพิวเตอร์ยุคที่ 4', 'FOURTH GENERATION LANGUAGE FOR COMPUTER', '3', '3', '3'),
(245920, '320423', 'ระบบผู้เชี่ยวชาญ', 'EXPERT SYSTEMS', '3', '3', '3'),
(245921, '320424', 'การเชื่อมต่อเครือข่ายคอมพิวเตอร์', 'COMPUTER INTERNETWORKING', '3', '3', '3'),
(245922, '320425', 'ปฏิบัติการเครือข่ายและรบบปฏิบัติการ', 'NETWORKING AND OPERATING SYSTEMS LABORATORY', '3', '3', '3'),
(245923, '320491', 'สัมมนา', 'SEMINAR', '1', '1', '1'),
(245924, '320761', 'หลักการการรับรู้จากระยะไกล', 'PRINCIPLES OF REMOTE SENSING', '3', '3', '3'),
(245925, '320762', 'การประมวลผลภาพเชิงตัวเลข', 'DIGITAL  IMAGE  PROCESSING', '3', '3', '3'),
(245926, '320780', 'การประยุกต์ภาษาซีในระบบสารสนเทศภูมิศาสตร์', 'C  LANGUAGE  APPLICATION IN GIS', '3', '3', '3'),
(245927, '320891', 'สัมมนา 1', 'SEMINAR I', '1', '1', '1'),
(245928, '320892', 'สัมมนา 2', 'SEMINAR II', '1', '1', '1'),
(245929, '320899', 'วิทยานิพนธ์', 'THESIS', '1', '12', '12'),
(245930, '320494', 'โครงงานคอมพิวเตอร์', 'COMPUTER PROJECT', '2', '2', '2'),
(245931, '320102', 'การใช้คอมพิวเตอร์ในวิธีการทางวิทยาศาสตร์', 'COMPUTER USAGE IN SCIENTIFIC METHODS', '3', '3', '3'),
(245932, '320103', 'คอมพิวเตอร์เบื้องต้น', 'INTRODUCTION TO COMPUTER', '3', '3', '3'),
(245933, '320215', 'การเขียนโปรแกรมภาษาฟอร์แทรน', 'PROGRAMMING IN FORTRAN LANGUAGE', '3', '3', '3'),
(245934, '320419', 'การจัดการศูนย์คอมพิวเตอร์', 'COMPUTER CENTRE MANAGEMENT', '3', '3', '3'),
(245935, '320481', 'เรื่องในแขนงวิทยาการคอมพิวเตอร์', 'TOPICS IN COMPUTER SCIENCE', '3', '3', '0'),
(245936, '320211', 'การเขียนโปรแกรมแอสแซมบลี', 'ASSEMBLY LANGUAGE PROGRAMMING', '3', '3', '3'),
(245937, '320213', 'การเขียนโปรแกรมภาษาโคบอล', 'PROGRAMMING IN COBOL LANGUAGE', '3', '3', '3'),
(245938, '320320', 'ระบบสารสนเทศภูมิศาสตรขั้นแนะนำ', 'INTRODUCTION TO GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(245939, '320219', 'การเขียนโปรแกรมเชิงวัตถุ', 'OBJECT- ORIENTED PROGRAMMING', '3', '3', '3'),
(245940, '320221', 'การสร้างโปรแกรมภาษาจาวา', 'JAVA PROGRAMMING', '3', '3', '3'),
(245941, '320321', 'ทฤษฏีการคำนวณ', 'THEORY OF COMPUTATION', '3', '3', '3'),
(245942, '320313', 'การประมวลผลแฟ้มข้อมูล', 'FILE PROCESSING', '3', '3', '3'),
(245943, '320323', 'การประมวลผลภาพทางการแพทย์', 'MEDICAL IMAGE PROCESSING', '3', '3', '3'),
(245944, '320416', 'ระบบสารสนเทศเพื่อการจัดการ', 'MANAGEMENT INFORMATION SYSTEM', '3', '3', '3'),
(245945, '322341', 'ปัญญาประดิษฐ์', 'ARTIFICIAL INTELLIGENCE', '3', '3', '3'),
(245946, '322352', 'การวิเคราะห์ขั้นตอนวิธี', 'ANALYSIS OF ALGORITHMS', '3', '3', '3'),
(245947, '322372', 'การวิเคราะห์และออกแบบระบบ', 'SYSTEMS ANALYSIS AND DESIGN', '3', '3', '3'),
(245948, '322421', 'ปฏิบัติการระบบข่ายงานและระบบปฏิบัติการ', 'NETWORKING AND OPERATING SYSTEMS LABORATORY', '3', '3', '3'),
(245949, '322721', 'ทฤษฎีการคำนวณ', 'THEORY OF COMPUTATION', '3', '3', '3'),
(245950, '322741', 'องค์การและสถาปัตยกรรมคอมพิวเตอร์', 'COMPUTER ARCHITECTURE AND ORGANIZATION', '3', '3', '3'),
(245951, '322726', 'ระบบแบบกระจาย', 'DISTRIBUTED SYSTEMS', '3', '3', '3'),
(245952, '322732', 'การพาณิชย์อิเล็กทรอนิกส์', 'ELECTRONIC COMMERCE', '3', '3', '3'),
(245953, '322744', 'การบริหารเครือข่ายคอมพิวเตอร์', 'COMPUTER NETWORK ADMINISTRATION', '3', '3', '3'),
(245954, '322753', 'การเรียนรู้เครื่อง', 'MACHINE LEARNING', '3', '3', '3'),
(245955, '322771', 'หัวเรื่องพิเศษทางวิทยาการคอมพิวเตอร์', 'SPECIAL TOPICS IN COMPUTER SCIENCE', '3', '3', '3'),
(245956, '322892', 'สัมมนาวิทยาการคอมพิวเตอร์ 2', 'COMPUTER SCIENCE SEMINAR II', '3', '3', '1'),
(245957, '322898', 'วิทยานิพนธ์', 'THESIS', '1', '44', '44'),
(245958, '322214', 'ขั้นตอนวิธีและโครงสร้างข้อมูล', 'ALGORITHM AND DATA STRUCTURES', '3', '3', '4'),
(245959, '322334', 'การพัฒนาการประยุกต์แบบรับ-ให้บริการ', 'CLIENT/SERVER APPLICATION DEVELOPMENT', '3', '3', '3'),
(245960, '322311', 'ทฤษฏีการคำนวณ', 'THEORY OF COMPUTATION', '3', '3', '3'),
(245961, '322232', 'ภูมิสารสนเทศขั้นแนะนำ', 'INTRODUCTION TO GEOINFORMATICS', '3', '3', '3'),
(245962, '322251', 'การเขียนโปรแกรมจาวา', 'PROGRAMMING IN JAVA', '3', '3', '3'),
(245963, '322472', 'การพัฒนาและการจัดการซอฟต์แวร์', 'SOFTWARE DEVELOPMENT AND MANAGEMANT', '3', '3', '3'),
(245964, '322495', 'โครงงานคอมพิวเตอร์ 2', 'COMPUTER PROJECT II', '3', '3', '4'),
(245965, '320316', 'การประยุกต์คอมพิวเตอร์ในธุรกิจ', 'COMPUTER APPLICATION IN BUSINESS', '3', '3', '3'),
(245966, '322103', 'คอมพิวเตอร์ขั้นแนะนำ', 'INTRODUCTION TO COMPUTER', '3', '3', '3'),
(245967, '322104', 'การเขียนโปรแกรมเชิงโครงสร้าง', 'STRUCTURED PROGRAMMING', '3', '3', '3'),
(245968, '322322', 'เครือข่ายคอมพิวเตอร์', 'COMPUTER NETWORKS', '3', '3', '4'),
(245969, '322748', 'ความมั่นคงเทคโนโลยีสารสนเทศ', 'INFORMATION TECHNOLOGY SECURITY', '3', '3', '3'),
(245970, '322743', 'เครื่อข่ายคอมพิวเตอร์ขั้นสูง', 'ADVANCED COMPUTER NETWORKS', '3', '3', '3'),
(245971, '322494', 'โครงงานคอมพิวเตอร์ 1', 'COMPUTER PROJECT I', '3', '3', '2'),
(245972, '322497', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 1', 'SPECIAL TOPIC IN COMPUTER SCIENCE I', '3', '3', '3'),
(245973, '322498', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 2', 'SPECIAL TOPIC IN COMPUTER SCIENCE II', '3', '3', '3'),
(245974, '322233', 'การจัดการแฟ้มข้อมูลและฐานข้อมูล', 'FILE AND DATABASE MANAGEMANT', '3', '3', '4'),
(245975, '322121', 'องค์ประกอบคอมพิวเตอร์และภาษาแอสเซมบลี', 'COMPUTER ORGANIZATION AND ASSEMBLY LANGUAGE', '3', '3', '4'),
(245976, '322211', 'ขั้นตอนวิธีและโครงสร้างข้อมูล', 'ALGORITHMS AND DATA STRUCTRES', '3', '3', '4'),
(245977, '320318', 'การค้นคืนสารสนเทศเบื้องต้น', 'INTRODUCTION TO INFORMATION RETRIEVAL', '3', '3', '3'),
(245978, '320412', 'การวิเคราะห์และการออกแบบระบบ', 'SYSTEMS ANALYSIS AND DESIGN', '3', '3', '3'),
(245979, '320414', 'วิศวกรรมซอฟต์แวร์', 'SOFTWARE ENGINEERING', '3', '3', '3'),
(245980, '322782', 'ปฏิบัติการทางเทคโนโลยีสารสนเทศ 1', 'INFORMATION TECHNOLOGY WORKSHOP I', '3', '3', '1'),
(245981, '322783', 'ปฏิบัติการทางเทคโนโลยีสารสนเทศ 2', 'INFORMATION TECHNOLOGY WORKSHOP II', '3', '3', '1'),
(245982, '320416', 'ระบบสารสนเทศเพื่อการจัดการ', 'MANAGEMENT INFORMATION SYSTEM', '3', '3', '3'),
(245983, '322111', 'การเขียนโปรแกรมขั้นแนะนำ', 'INTRODUCTION TO PROGRAMMING', '3', '3', '4'),
(245984, '322231', 'หลักการพัฒนาซอฟต์แวร์', 'PRINCIPLES OF SOFTWARE DEVELOPMENT', '3', '3', '3'),
(245985, '322234', 'การรับรู้ระยะไกลขั้นแนะนำ', 'INTRODUCTION TO REMOTE SENSING', '3', '3', '3'),
(245986, '322252', 'การเขียนโปรแกรมจาวาขั้นสูง', 'ADVANCED PROGRAMMING IN JAVA', '3', '3', '3'),
(245987, '322253', 'หลักภาษาโปรแกรม', 'PRINCIPLES OF PROGRAMMING LANGUAGES', '3', '3', '3'),
(245988, '320315', 'การโปรแกรมระบบ', 'SYSTEMS PROGRAMMING', '3', '3', '3'),
(245989, '322891', 'สัมมนาเทคโนโลยีสารสนเทศ 1', 'INFORMATION TECHNOLOGY SEMINAR I', '3', '3', '1'),
(245990, '322892', 'สัมมนาเทคโนโลยีสารสนเทศ2', 'INFORMATION TECHNOLOGY  SEMINAR II', '3', '3', '1'),
(245991, '322898', 'วิทยานิพนธ์', 'THESIS', '0', '39', '39'),
(245992, '320311', 'องค์ประกอบระบบคอมพิวเตอร์', 'COMPUTER ORGANIZATION', '3', '3', '3'),
(245993, '320313', 'การประมวลผลแฟ้มข้อมูล', 'FILE PROCESSING', '3', '3', '3'),
(245994, '322361', 'สถาปัตยกรรมระบบคอมพิวเตอร์', 'COMPUTER SYSTEMS ARCHITECTURE', '3', '3', '3'),
(245995, '322331', 'การประยุกต์คอมพิวเตอร์ในธุรกิจ', 'COMPUTER APPLICATION IN BUSINESS', '3', '3', '3'),
(245996, '322332', 'คอมพิวเตอร์เรขภาพ', 'COMPUTER GRAPHICS', '3', '3', '3'),
(245997, '322333', 'ระบบฐานข้อมูลขั้นสูง', 'ADVANCED DATABASE SYSTEMS', '3', '3', '3'),
(245998, '322335', 'ภาพเคลื่อนไหวด้วยคอมพิวเตอร์', 'COMPUTER ANIMATION', '3', '3', '3'),
(245999, '322351', 'การแปลภาษาโปรแกรม', 'TRANSLATION OF PROGRAMMING LANGUAGES', '3', '3', '3'),
(246000, '320420', 'สมรรถนะระบบคอมพิวเตอร์', 'COMPUTER SYSTEM PERFORMANCE', '3', '3', '3'),
(246001, '320418', 'การพัฒนาและจัดการซอฟต์แวร์', 'SOFTWARE DEVELOPMENT AND MANAGEMENT', '3', '3', '3'),
(246002, '322321', 'ระบบปฏิบัติการ', 'OPERATING SYSTEMS', '3', '3', '4'),
(246003, '322724', 'การออกแบบและวิเคราะห์เชิงวัตถุ', 'OBJECT-ORIENTED DESIGN AND ANALYSIS', '3', '3', '3'),
(246004, '322726', 'ระบบแบบกระจาย', 'DISTRIBUTED SYSTEMS', '3', '3', '3'),
(246005, '322744', 'การบริหารเครือข่ายคอมพิวเตอร์', 'COMPUTER NETWORK ADMINISTRATION', '3', '3', '3'),
(246006, '322746', 'การคอมพิวเตอร์แบบกระจายและขนาน', 'PARALLEL AND DISTRIBUTED COMPUTING', '3', '3', '3'),
(246007, '322752', 'เครือข่ายประสาทเทียม', 'ARTIFICIAL NEURAL NETWORKS', '3', '3', '3'),
(246008, '322772', 'หัวข้อเรื่องพิเศษทางเทคโนโลยีสารสนเทศ', 'SPECIAL TOPICS IN INFORMATION TECHNOLOGY', '3', '3', '3'),
(246009, '320111', 'คอมพิวเตอร์เบื้องต้น', 'INTRODUCTION TO COMPUTER', '3', '3', '3'),
(246010, '322754', 'วิศวกรรมฐานความรู้', 'KNOWLEDGE ENGINEERING', '3', '3', '3'),
(246011, '322374', 'การประมวลผลภาพทางการแพทย์', 'MEDICAL IMAGE PROCESSING', '3', '3', '4'),
(246012, '322441', 'เครือข่ายประสาท', 'NEURAL NETWORKS', '3', '3', '3'),
(246013, '322461', 'สถาปัตยกรรมข่ายงาน', 'NETWORK ARCHITECTURE', '3', '3', '3'),
(246014, '322462', 'การเชื่อมต่ออินเตอร์เน็ต', 'INTERNETWORKING', '3', '3', '3'),
(246015, '322471', 'การจัดการเทคโนโลยีสารสนเทศ', 'MANAGEMANT OF INFORMATION TECHNOLOGY', '3', '3', '3'),
(246016, '322490', 'สหกิจศึกษา', 'CO-OPERATIVE EDUCATION', '3', '3', '6'),
(246017, '320101', 'ไมโครคอมพิวเตอร์และการใช้งาน', 'MICROCOMPUTER AND APPLICATIONS', '2', '2', '2'),
(246018, '322373', 'การพาณิชย์อิเล็กทรอนิกส์', 'ELECTRONIC COMMERCE', '3', '3', '3'),
(246019, '320218', 'การเขียนโปรแกรมภาษาอาร์พีจี', 'PROGRAMMING IN RPG LANGUAGE', '3', '3', '3'),
(246020, '320214', 'การเขียนโปรแกรมภาษาเบสิก', 'PROGRAMMING IN BASIC LANGUAGE', '3', '3', '3'),
(246021, '320216', 'การเขียนโปรแกรมภาษาปาสคาล', 'PROGRAMMING IN PASCAL LANGUAGE', '3', '3', '3'),
(246022, '320217', 'การเขียนโปรแกรมภาษาโปรล็อก', 'COMPUTER PROGRAMMING IN PROLOG', '3', '3', '3'),
(246023, '322362', 'สมรรถนะระบบคอมพิวเตอร์', 'COMPUTER SYSTEMS PERFORMANCE', '3', '3', '3'),
(246024, '322371', 'วิศวกรรมซอฟต์แวร์', 'SOFTWARE ENGINEERING', '3', '3', '3'),
(246025, '322722', 'การวิเคราะห์และออกแบบขั้นตอนวิธี', 'ALGORITHM ANALYSIS AND DESIGN', '3', '3', '3'),
(246026, '322723', 'ระบบปฏิบัติการ', 'OPERATING SYSTEMS', '3', '3', '3'),
(246027, '322724', 'การออกแบบและวิเคราะห์เชิงวัตถุ', 'OBJECT-ORIENTED DESIGN AND ANALYSIS', '3', '3', '3'),
(246028, '322725', 'วิศวกรรมส่วนชุดคำสั่งขั้นสูง', 'ADVANCED SOFTWARE ENGINEERING', '3', '3', '3'),
(246029, '322731', 'เทคโนโลยีอินเทอร์เน็ตและวิศวกรรมเว็บ', 'INTERNET TECHNOLOGIES AND WEB ENGINEERING', '3', '3', '3'),
(246030, '320781', 'ระบบสารสนเทศภูมิศาสตร์', 'GEOGRAPHIC  INFORMATION SYSTEM', '3', '3', '3'),
(246031, '320314', 'ระบบการจัดการฐานข้อมูล', 'DATABASE MANAGEMENT SYSTEMS', '3', '3', '3'),
(246032, '320316', 'การประยุกต์คอมพิวเตอร์ในธุรกิจ', 'COMPUTER APPLICATION IN BUSINESS', '3', '3', '3'),
(246033, '320211', 'การเขียนโปรแกรมแอสแซมบลี', 'ASSEMBLY LANGUAGE PROGRAMMING', '3', '3', '3'),
(246034, '320213', 'การเขียนโปรแกรมภาษาโคบอล', 'PROGRAMMING IN COBOL LANGUAGE', '3', '3', '3'),
(246035, '322711', 'หลักการภาษาโปรแกรม', 'PRINCIPLES OF PROGRAMMING LANGUAGES', '3', '3', '3'),
(246036, '322733', 'ระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN', '3', '3', '3'),
(246037, '322751', 'กระบวนทัศน์ปัญญาประดิษฐ์', 'PARADIGMS OF ARTIFICIAL INTELLIGENCE', '3', '3', '3'),
(246038, '322761', 'เรขภาพคอมพิวเตอร์ขั้นสูง', 'ADVANCED COMPUTER GRAPHICS', '3', '3', '3'),
(246039, '322762', 'การประมวลผลภาพดิจิทัลขั้นสูง', 'ADVANCED DIGITAL IMAGE PROCESSING', '3', '3', '3'),
(246040, '322891', 'สัมมนาวิทยาการคอมพิวเตอร์ 1', 'COMPUTER SCIENCE SEMINAR I', '3', '3', '1'),
(246041, '322897', 'การศึกษาอิสระ', 'INDEPENDENT STUDY', '1', '6', '6'),
(246042, '322899', 'วิทยานิพนธ์', 'THESIS', '1', '12', '12'),
(246043, '322734', 'เทคโนโลยีสารสนเทศและการจัดการ', 'INFORMATION TECHNOLOGY AND MANAGEMENT', '3', '3', '3'),
(246044, '322735', 'เทคโนโลยี XML และการประยุกต์', 'XML TECHNOLOGIES AND APPLICATIONS', '3', '3', '3'),
(246045, '322373', 'การพาณิชย์อิเล็กทรอนิกส์', 'ELECTRONIC COMMERCE', '3', '3', '3'),
(246046, '322745', 'ความมั่นคงระบบคอมพิวเตอร์', 'COMPUTER SYSTEM SECURITY', '3', '3', '3'),
(246047, '320319', 'คอมพิวเตอร์เรขภาพ', 'COMPUTER GRAPHIC', '3', '3', '3'),
(246048, '320413', 'การสื่อสารข้อมูลและเครื่อข่าย', 'DATA COMMUNICATION AND NETWORK', '3', '3', '3'),
(246049, '320415', 'การออกแบบตัวแปลโปรแกรมเบื้องต้น', 'INTRODUCTION TO COMPILER DESIGN', '3', '3', '3'),
(246050, '322746', 'การคอมพิวเตอร์แบบกระจายและขนาน', 'PARALLEL AND DISTRIBUTED COMPUTING', '3', '3', '3'),
(246051, '322747', 'การประเมินสมรรถนะคอมพิวเตอร์', 'COMPUTER PERFORMANCE EVALUATION', '3', '3', '3'),
(246052, '322728', 'การพัฒนาซอฟท์แวร์และการจัดการโครงการ', 'SOFTWARE DEVELOPMENT AND PROJECT MANAGEMENT', '3', '3', '3'),
(246053, '322755', 'ระบบสนับสนุนการตัดสินใจ', 'DECISION SUPPORT SYSTEMS', '3', '3', '3'),
(246054, '322742', 'เครือข่ายการสื่อสารคอมพิวเตอร์', 'COMPUTER COMMUNICATION NETWORKS', '3', '3', '3'),
(246055, '322232', 'ภูมิสารสนเทศขั้นแนะนำ', 'INTRODUCTION TO GEOINFORMATICS', '3', '3', '3'),
(246056, '322102', 'การใช้คอมพิวเตอร์ในวิธีการทางวิทยาศาสตร์', 'COMPUTER USAGE IN SCIENTIFIC METHODS', '3', '3', '3'),
(246057, '322441', 'เครือข่ายประสาท', 'NEURAL NETWORKS', '3', '3', '3'),
(246058, '320782', 'ระบบสารสนเทศการจัดการทรัพยากร', 'RESOURCE MANAGEMENT INFORMATION SYSTEM', '3', '3', '3'),
(246059, '320783', 'ระบบการจัดการฐานข้อมูลและมาตรฐานระบบสารสนเทศภูมิศาสตร์', 'DATABASE  MANAGEMENT SYSTEM AND GEOGRAPHIC INFORMATION  SYSTEM', '3', '3', '3'),
(246060, '320894', 'ปัญหาพิเศษ', 'SPECIAL PROBLEMS', '3', '3', '3'),
(246061, '320898', 'วิทยานิพนธ์', 'THESIS', '1', '36', '36'),
(246062, '322736', 'เทคโนโลยีเว็บแบบสื่อความหมาย', 'SEMANTIC WEB TECHNOLOGIES', '3', '3', '3'),
(246063, '320772', 'ทรัพยากรที่ดินและสิ่งแวดล้อม', 'LAND RESOURCES AND ENVIRONMENT', '3', '3', '3'),
(246064, '320763', 'การรับรู้จากระยะไกลไมโครเวฟ', 'MICROWAVE REMOTE SENSING', '3', '3', '3'),
(246065, '322112', 'การเขียนโปรแกรมขั้นแนะนำ', 'INTRODUCTION TO PROGRAMMING', '3', '3', '3'),
(246066, '322161', 'เทคโนโลยีสารสนเทศและการสื่อสารขั้นแนะนำ', 'INTRODUCTION TO INFORMATION AND COMMUNICATION TECHNOLOGY', '3', '3', '3'),
(246067, '322162', 'องค์ประกอบและสถาปัตยกรรมคอมพิวเตอร์ขั้นแนะนำ', 'INTRODUCTION TO COMPUTER ORGANIZATION AND ARCHITECTURE', '3', '3', '3'),
(246068, '322212', 'โครงสร้างข้อมูล', 'DATA STRUCTURES', '3', '3', '3'),
(246069, '322854', '', '', '3', '3', '0'),
(246070, '322362', 'สมรรถนะระบบคอมพิวเตอร์', 'COMPUTER SYSTEMS PERFORMANCE', '3', '3', '3'),
(246071, '322363', 'การสื่อสารข้อมูล', 'DATA COMMUNICATIONS', '3', '3', '3'),
(246072, '322372', 'การวิเคราะห์และออกแบบระบบ', 'SYSTEMS ANALYSIS AND DESIGN', '3', '3', '3'),
(246073, '322339', 'ปฎิบัติการระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN LABORATORY', '3', '3', '1'),
(246074, '322353', 'ปฏิบัติการทางเทคโนโลยีสารสนเทศและการสื่อสาร:การพัฒนาซอฟต์แวร์แบบธุรกิจขั้นสูง', 'INFORMATION AND COMMUNICATION TECHNOLOGY LABORATORY: ENTERPRISE APPLICATION SOFTWARE DEVELOPMENT', '3', '3', '3'),
(246075, '322379', 'การจัดการความรู้', 'KNOWLEDGE MANAGEMENT', '3', '3', '3'),
(246076, '322373', 'การพาณิชย์อิเล็กทรอนิกส์', 'ELECTRONIC COMMERCE', '3', '3', '3'),
(246077, '322377', 'หัวข้อเรื่องพิเศษทางเทคโนโลยีสารสนเทศและการสื่อสาร', 'SPECIAL TOPICS IN INFORMATION AND COMMUNICATION TECHNOLOGY', '3', '3', '3'),
(246078, '322378', 'ระบบการวางแผนทรัพยากรระดับองค์กรธุรกิจ', 'ENTERPRISE RESOURCE PLANNING SYSTEM', '3', '3', '3'),
(246079, '322215', 'ปฏิบัติการทางเทคโนโลยีสารสนเทศและการสื่อสาร:การเขียนโปรแกรมขั้นสูง', 'INFORMATION AND COMMUNICATION TECHNOLOGY LABORATORY :ADVANCED PROGRAMMING', '3', '3', '3'),
(246080, '322252', 'การเขียนโปรแกรมจาวาขั้นสูง', 'ADVANCED PROGRAMMING IN JAVA', '3', '3', '3'),
(246081, '322271', 'เทคโนโลยีอินเทอร์เน็ตและวิศวกรรมเว็บ', 'INTERNET TECHNOLOGIES AND WEB ENGINEERING', '3', '3', '3'),
(246082, '322323', 'ปฏิบัติการทางเทคโนโลยีสารสนเทศและการสื่อสาร:ระบบเครือข่าย 2', 'INFORMATION AND COMMUNICATION TECHNOLOGY LABORATORY:NETWORKING SYSTEM II', '3', '3', '3'),
(246083, '324201', 'ภูมิสารสนเทศศาสตร์ขั้นมูลฐาน', 'FUNDAMENTALS OF GEO-INFORMATIONS', '3', '3', '3'),
(246084, '324202', 'ระบบสารสนเทศภูมิศาสตรขั้นแนะนำ', 'INTRODUCTION TO GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246085, '324211', 'การรับรู้จากระยะไกล', 'REMOTE SENSING', '3', '3', '3'),
(246086, '322331', 'การประยุกต์คอมพิวเตอร์ในธุรกิจ', 'COMPUTER APPLICATION IN BUSINESS', '3', '3', '3'),
(246087, '322219', 'การเขียนโปรแกรมเชิงวัตถุ', 'OBJECT-ORIENTED PROGRAMMING', '3', '3', '3'),
(246088, '322375', 'เทคโนโลยี XML และการประยุกต์', 'XML TECHNOLOGIES AND APPLICATIONS', '3', '3', '3'),
(246089, '322376', 'ความมั่นคงเทคโนโลยีสารสนเทศและการสื่อสาร', 'INFORMATION AND COMMUNICATION TECHNOLOGY SECURITY', '3', '3', '3'),
(246090, '322333', 'ระบบฐานข้อมูลขั้นสูง', 'ADVANCED DATABASE SYSTEMS', '3', '3', '3'),
(246091, '322334', 'การพัฒนาการประยุกต์แบบรับ-ให้บริการ', 'CLIENT/SERVER APPLICATION DEVELOPMENT', '3', '3', '3'),
(246092, '322336', 'ระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN', '3', '3', '3'),
(246093, '322337', 'ปฏิบัติการทางเทคโนโลยีสารสนเทศและการสื่อสาร:ฐานข้อมูลขั้นสูง', 'INFORMATION AND COMMUNICATION TECHNOLOGY LABORATORY: DATABASE', '3', '3', '3'),
(246094, '322338', 'ปฏิบัติการทางเทคโนโลยีสารสนเทศและการสื่อสาร:เทคโนโลยีบนเว็บ', 'INFORMATION AND COMMUNICATION TECHNOLOGY LABORATORY: WEB TECHNOLOGY', '3', '3', '3'),
(246095, '322473', 'การพัฒนาซอฟท์แวร์และการจัดการโครงการ', 'SOFTWARE DEVELOPMENT AND PROJECT MANAGEMENT', '3', '3', '3'),
(246096, '324411', 'การประมวลผลเชิงเลขของข้อมูลจากดาวเทียม', 'DIGITAL PROCESSING OF SATELLITE DATA', '3', '3', '3'),
(246097, '324413', 'การรับรู้จากระยะไกลด้วยคลื่นไมโครเวฟขั้นแนะนำ', 'INTRODUCTION TO MICROWAVE REMOTE SENSING', '3', '3', '3'),
(246098, '324421', 'การวางแผนการใช้ที่ดินขั้นแนะนำ', 'INTRODUCTION TO LAND USE PLANNING', '3', '3', '3'),
(246099, '324311', 'รูปถ่ายทางอากาศและการแปลความหมาย', 'AERIAL PHOTOGRAPH AND INTERPRETATION', '3', '3', '3'),
(246100, '324494', 'ระเบียบวิธีการวิจัยทางภูมิสารสนเทศศาสตร์', 'RESEARCH METHODOLOGY IN GEO-INFORMATICS', '3', '3', '3'),
(246101, '324495', 'สหกิจศึกษา', 'CO-OPERATIVE EDUCATION', '3', '3', '6'),
(246102, '322462', 'การเชื่อมต่ออินเตอร์เน็ต', 'INTERNETWORKING', '3', '3', '3'),
(246103, '322491', 'สัมมนาทางเทคโนโลยีสารสนเทศและการสื่อสาร', 'SEMINAR IN INFORMATION AND COMMUNIACATION TECHNOLOGY', '3', '3', '1'),
(246104, '322495', 'สหกิจศึกษา', 'CO-OPERATIVE EDUCATION', '3', '3', '6'),
(246105, '322421', 'ปฏิบัติการระบบข่ายงานและระบบปฏิบัติการ', 'NETWORKING AND OPERATING SYSTEMS LABORATORY', '3', '3', '3'),
(246106, '322461', 'สถาปัตยกรรมเครือข่าย', 'NETWORK ARCHITECTURE', '3', '3', '3'),
(246107, '322496', 'โครงการคอมพิวเตอร์ 2', 'COMPUTER PROJECT II', '3', '3', '4'),
(246108, '322221', 'ระบบปฏิบัติการ', 'OPERATING SYSTEMS', '3', '3', '3'),
(246109, '322236', 'การเขียนโปรแกรมประยุกต์บนเว็บ', 'WEB APPLICATION PROGRAMMING', '3', '3', '3'),
(246110, '322237', 'เทคโนโลยีเชิงวัตถุ', 'OBJECT-ORIENTED TECHNOLOGY', '3', '3', '3'),
(246111, '322737', 'นวัตกรรมและองค์กรเรียนรู้', 'INNOVATION AND LEARNING ORGANIZATION', '3', '3', '3'),
(246112, '322471', 'การจัดการเทคโนโลยีสารสนเทศ', 'MANAGEMANT OF INFORMATION TECHNOLOGY', '3', '3', '3'),
(246113, '324321', 'ภูมิศาสตร์กายภาพ', 'PHYSICAL GEOGRAPHY', '3', '3', '3'),
(246114, '324322', 'ภูมิศาสตร์ดิน', 'SOIL GEOGRAPHY', '3', '3', '3'),
(246115, '324401', 'ภูมิสารสนเทศศาสตร์ประยุกต์', 'APPLIED GEO-INFORMATICS', '3', '3', '3'),
(246116, '324402', 'หลักการทำแผนที่', 'PRINCIPLES OF CARTORGRAPHY', '3', '3', '3'),
(246117, '322381', 'การวางแผนเชิงกลยุทธ์ระบบสารสนเทศ', 'STRATEGIC PLANNING OF INFORMATION SYSTEMS', '3', '3', '3'),
(246118, '322382', 'นวัตกรรมกระบวนการ', 'PROCESS INNOVATION', '3', '3', '3'),
(246119, '322921', 'คณิตศาสตร์ดีสครีตขั้นสูง', 'ADVANCED DISCRETE MATHEMATICS', '3', '3', '3'),
(246120, '322923', 'การออกแบบและวิเคราะห์ขั้นตอนวิธี', 'DESIGN AND ANALYSIS OF ALGORITHMS', '3', '3', '3'),
(246121, '322924', '', 'NUMERICAL ANALYSIS AND APPLICATIONS', '3', '3', '3'),
(246122, '322926', '', 'THEORY OF OPERATING SYSTEM', '3', '3', '3'),
(246123, '322931', '', 'DATABASE SYSTEMS', '3', '3', '3'),
(246124, '322933', '', 'OBJECT-ORIENTED DESIGN', '3', '3', '3'),
(246125, '322934', '', 'LARGE SCALE SOFTWARE PROJECT MANAGEMENT', '3', '3', '3'),
(246126, '322941', '', 'COMPUTER SYSTEM ORGANIZATION', '3', '3', '3'),
(246127, '322942', '', 'COMPUTER NETWORKS', '3', '3', '3'),
(246128, '322945', '', 'DISTRIBUTED COMPUTER SYSTEMS', '3', '3', '3'),
(246129, '322947', '', 'THEORY OF HIGH-SPEED PARALLEL COMPUTATION', '3', '3', '3'),
(246130, '322971', '', 'SPECIAL TOPICS IN COMPUTER SCIENCE', '3', '3', '3'),
(246131, '322998', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '48', '48'),
(246132, '322991', '', 'DOCTORAL DISSERTATION SEMINAR', '3', '3', '0'),
(246133, '322997', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '48', '48'),
(246134, '322925', '', 'FORMAL LANGUAGES AND COMPUTATION COMPLEXITY', '3', '3', '3'),
(246135, '322932', '', 'SOFTWARE METHODOLOGY', '3', '3', '3'),
(246136, '322943', '', 'DESIGN OF FAULT-TOLERANT DIGITAL SYSTEMS', '3', '3', '3'),
(246137, '322944', '', 'COMPUTER SYSTEM ANALYSIS', '3', '3', '3'),
(246138, '322946', '', 'PARALLEL NUMERICAL ALGORITHMS', '3', '3', '3'),
(246139, '322951', '', 'ARTIFICIAL NEURAL NETWORKS', '3', '3', '3'),
(246140, '322952', '', 'SCIENTIFIC VISUALIZATION', '3', '3', '3'),
(246141, '322922', 'ทฤษฎีออโตมาตา', 'AUTOMATA THEORY', '3', '3', '3'),
(246142, '322912', 'การเขียนโปรแกรมแบบขนาน', 'PARALLEL PROGRAMMING', '3', '3', '3'),
(246143, '322911', 'การออกแบบภาษาโปรแกรม', 'PROGRAMMING LANGUAGE DESIGN', '3', '3', '3'),
(246144, '322476', 'วิศวกรรมซอฟต์แวร์ขั้นสูง', 'ADVANCED SOFTWARE ENGINEERING', '3', '3', '3'),
(246145, '322473', 'วิศวกรรมซอฟต์แวร์ขั้นสูง', 'ADVANCED SOFTWARE ENGINEERING', '3', '3', '3'),
(246146, '322212', 'โครงสร้างข้อมูล', 'DATA STRUCTURES', '3', '3', '3'),
(246147, '322219', 'การเขียนโปรแกรมเชิงวัตถุ', 'OBJECT-ORIENTED PROGRAMMING', '3', '3', '3'),
(246148, '322231', 'หลักการออกแบบและพัฒนาซอฟต์แวร์', 'PRINCIPLES OF SOFTWARE DESIGN AND DEVELOPMENT', '3', '3', '3'),
(246149, '322234', 'การรับรู้ระยะไกลขั้นแนะนำ', 'INTRODUCTION TO REMOTE SENSING', '3', '3', '3'),
(246150, '322238', 'ระบบจัดการฐานข้อมูลและการออกแบบฐานข้อมูล', 'DATABASE MANAGEMENT SYSTEM AND DATABASE DESIGN', '3', '3', '3'),
(246151, '322251', 'การเขียนโปรแกรมจาวา', 'PROGRAMMING IN JAVA', '3', '3', '3'),
(246152, '322252', 'การเขียนโปรแกรมจาวาขั้นสูง', 'ADVANCED PROGRAMMING IN JAVA', '3', '3', '3'),
(246153, '322253', 'หลักภาษาโปรแกรม', 'PRINCIPLES OF PROGRAMMING LANGUAGES', '3', '3', '3'),
(246154, '322232', 'ภูมิสารสนเทศขั้นแนะนำ', 'INTRODUCTION TO GEOINFORMATICS', '3', '3', '3'),
(246155, '322332', 'คอมพิวเตอร์เรขภาพ', 'COMPUTER GRAPHICS', '3', '3', '3'),
(246156, '324301', 'การเขียนโปรแกรมในระบบสารสนเทศภูมิศาสตร์', 'PROGRAMMING IN GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246157, '324412', 'หลักการโฟโตแกรมเมตรี', 'PRINCIPLES OF PHOTOGRAMMETRY', '3', '3', '3'),
(246158, '322383', 'คลังข้อมูลและการประยุกต์', 'DATA WAREHOUSE AND APPLICATIONS', '3', '3', '3'),
(246159, '324302', 'การประยุกต์ทำแผนที่บนเว็บ', 'WEB MAPPING APPLICATION', '3', '3', '3'),
(246160, '322475', 'การทำเหมืองข้อมูล', 'DATA MINING', '3', '3', '3'),
(246161, '320784', 'ระบบสารสนเทศภูมิศาสตร์ผ่านอินเตอร์เน็ต', 'INTERNET GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246162, '322756', 'การทำเหมืองข้อมูล', 'DATA MINING', '3', '3', '3'),
(246163, '322131', 'การโต้ตอบระหว่างมนุษย์และคอมพิวเตอร์', 'HUMAN-COMPUTER INTERACTION', '3', '3', '3'),
(246164, '322311', 'ทฤษฏีการคำนวณ', 'THEORY OF COMPUTATION', '3', '3', '3'),
(246165, '322325', 'ระบบปฏิบัติการและการเขียนโปรแกรมซีสเต็มคอล', 'OPERATING SYSTEM AND SYSTEM CALLS PROGRAMMING', '3', '3', '3'),
(246166, '322326', 'เครื่อข่ายคอมพิวเตอร์', 'COMPUTER NETWORK', '3', '3', '3'),
(246167, '322331', 'การประยุกต์คอมพิวเตอร์ในธุรกิจ', 'COMPUTER APPLICATION IN BUSINESS', '3', '3', '3'),
(246168, '322332', 'คอมพิวเตอร์เรขภาพ', 'COMPUTER GRAPHICS', '3', '3', '3'),
(246169, '322333', 'ระบบฐานข้อมูลขั้นสูง', 'ADVANCED DATABASE SYSTEMS', '3', '3', '3'),
(246170, '322334', 'การพัฒนาการประยุกต์แบบรับ-ให้บริการ', 'CLIENT/SERVER APPLICATION DEVELOPMENT', '3', '3', '3'),
(246171, '322341', 'ปัญญาประดิษฐ์', 'ARTIFICIAL INTELLIGENCE', '3', '3', '3'),
(246172, '322351', 'การแปลภาษาโปรแกรม', 'TRANSLATION OF PROGRAMMING LANGUAGES', '3', '3', '3'),
(246173, '322352', 'การวิเคราะห์ขั้นตอนวิธี', 'ANALYSIS OF ALGORITHMS', '3', '3', '3'),
(246174, '322354', 'การออกแบบตัวแปรโปรแกรม', 'COMPILER DESIGN', '3', '3', '3'),
(246175, '322361', 'สถาปัตยกรรมระบบคอมพิวเตอร์', 'COMPUTER SYSTEMS ARCHITECTURE', '3', '3', '3'),
(246176, '322362', 'สมรรถนะระบบคอมพิวเตอร์', 'COMPUTER SYSTEMS PERFORMANCE', '3', '3', '3'),
(246177, '322371', 'วิศวกรรมซอฟต์แวร์', 'SOFTWARE ENGINEERING', '3', '3', '3'),
(246178, '322372', 'การวิเคราะห์และออกแบบระบบ', 'SYSTEMS ANALYSIS AND DESIGN', '3', '3', '3'),
(246179, '322232', 'ภูมิสารสนเทศขั้นแนะนำ', 'INTRODUCTION TO GEOINFORMATICS', '3', '3', '3'),
(246180, '322116', 'ฝึกปฏิบัติการสำหรับวิทยาการคอมพิวเตอร์ 2', 'WORKSHOP FOR COMPUTER SCIENCE II', '3', '3', '2'),
(246181, '322235', 'การทดสอบซอฟต์แวร์', 'SOFTWARE TESTING', '3', '3', '3'),
(246182, '322261', 'เครื่อข่ายการสื่อสารไร้สายและโทรศัพท์เคลื่อนที่', 'WIRELESS AND MOBILE COMMUNICATION NETWORKS', '3', '3', '3'),
(246183, '322117', 'การเขียนโปรแกรมคอมพิวเตอร์ 1', 'COMPUTER PROGRAMMING I', '3', '3', '3'),
(246184, '322122', 'องค์ประกอบคอมพิวเตอร์และภาษาแอสแซมบลี', 'COMPUTER ORGANIZATION AND ASSEMBLY LANGUAGE', '3', '3', '3'),
(246185, '324491', 'สัมมนาทางภูมิสารสนเทศศาสตร์ 1', 'SEMINAR IN GEO-INFORMATICS I', '3', '3', '1'),
(246186, '322113', 'วิทยาการคอมพิวเตอร์หลักมูล', 'FUNDAMENTAL COMPUTER SCIENCE', '3', '3', '3'),
(246187, '322114', 'การเขียนโปรแกรมเชิงโครงสร้างสำหรับวิทยาการคอมพิวเตอร์', 'STRUCTURED PROGRAMMING FOR COMPUTER SCIENCE', '3', '3', '3'),
(246188, '322115', 'ฝึกปฏิบัติการสำหรับวิทยาการคอมพิวเตอร์', 'WORKSHOP FOR COMPUTER SCIECNCE I', '3', '3', '2'),
(246189, '322373', 'การพาณิชย์อิเล็กทรอนิกส์', 'ELECTRONIC COMMERCE', '3', '3', '3'),
(246190, '322374', 'การประมวลผลภาพ', 'IMAGE PROCESSING', '3', '3', '3'),
(246191, '322381', 'การวางแผนเชิงกลยุทธ์ระบบสารสนเทศ', 'STRATEGIC PLANNING OF INFORMATION SYSTEMS', '3', '3', '3'),
(246192, '322382', 'นวัตกรรมกระบวนการ', 'PROCESS INNOVATION', '3', '3', '3'),
(246193, '322421', 'ปฏิบัติการระบบข่ายงานและระบบปฏิบัติการ', 'NETWORKING AND OPERATING SYSTEMS LABORATORY', '3', '3', '2'),
(246194, '322441', 'โครงข่ายประสาท', 'NEURAL NETWORKS', '3', '3', '3'),
(246195, '322461', 'สถาปัตยกรรมข่ายงาน', 'NETWORK ARCHITECTURE', '3', '3', '3'),
(246196, '322462', 'การเชื่อมต่ออินเตอร์เน็ต', 'INTERNETWORKING', '3', '3', '3'),
(246197, '322471', 'การจัดการเทคโนโลยีสารสนเทศ', 'MANAGEMANT OF INFORMATION TECHNOLOGY', '3', '3', '3'),
(246198, '322474', 'การค้นคืนสารสนเทศแบบทันสมัย', 'MODERN INFORMATION RETRIEVAL', '3', '3', '3'),
(246199, '322475', 'การทำเหมืองข้อมูล', 'DATA MINING', '3', '3', '3'),
(246200, '322494', 'โครงการคอมพิวเตอร์ 1', 'COMPUTER PROJECT I', '3', '3', '3'),
(246201, '322495', 'สหกิจศึกษา', 'CO-OPERATIVE EDUCATION', '3', '3', '6'),
(246202, '322496', 'โครงงานคอมพิวเตอร์ 2', 'COMPUTER PROJECT II', '3', '3', '3'),
(246203, '324411', 'การประมวลผลเชิงเลขของข้อมูลจากดาวเทียม', 'DIGITAL PROCESSING OF SATELLITE DATA', '3', '3', '3'),
(246204, '322436', 'เทคโนโลยีเว็บแบบสื่อความหมาย', 'SEMANTIC WEB TECHNOLOGY', '3', '3', '3'),
(246205, '322272', 'ขั้นตอนวิธีเชิงรหัสลับ', 'CRYTOGRAPHY ALGORITHMS', '3', '3', '3'),
(246206, '322263', 'ระบบสื่อสารดิจิตอล', 'DIGITAL COMMUNICATION SYSTEMS', '3', '3', '3'),
(246207, '322262', 'เครือข่ายไร้สาย', 'WIRELESS NETWORKS', '3', '3', '3'),
(246208, '322224', 'ตรรกะดิจิตอลและคอมพิวเตอร์อินเตอร์เฟส', 'DIGITAL LOGIC AND COMPUTER INTERFACING', '3', '3', '3'),
(246209, '322234', 'การรับรู้ระยะไกลขั้นแนะนำ', 'INTRODUCTION TO REMOTE SENSING', '3', '3', '3'),
(246210, '322749', 'เทคโนโลยีการสื่อสารเคลื่อนที่และเครือข่ายไร้สาย', 'MOBILE AND WIRELESS NETWORKING TECHNOLOGY', '3', '3', '3'),
(246211, '322777', 'หัวข้อเรื่องพิเศษทางการบริหารข้อมูลสารสนเทศ', 'SPECIAL TOPICS IN INFROMATION MANAGEMENT', '3', '3', '3'),
(246212, '322898', 'วิทยานิพนธ์', 'THESIS', '1', '41', '41'),
(246213, '322891', 'สัมมนาทางวิทยาการคอมพิวเตอร์ 1', 'COMPUTER SCIENCE SEMINAR I', '3', '3', '1'),
(246214, '322892', 'สัมมนาทางวิทยาการคอมพิวเตอร์ 2', 'COMPUTER SCIENCE SEMINAR II', '3', '3', '1'),
(246215, '322731', 'เทคโนโลยีเว็บ', 'WEB TECHNOLOGIES', '3', '3', '3'),
(246216, '322763', 'ระบบสารสนเทศสำหรับการจัดการโลจิสติกส์และหว่งโซ่อุปทาน', 'INFORMATION SYSTEM FOR LOGISTICS AND SUPPLY CHAIN MANAGEMENT', '3', '3', '3'),
(246217, '322764', 'การจัดการหว่งโซ่อุปทานธุรกิจอิเล็กทรอนิกส์', 'ELECTRONIC BUSINESS SUPPLY CHAIN MANAGEMENT', '3', '3', '3'),
(246218, '322891', 'สัมมนาทางเทคโนโลยีสารสนเทศ 1', 'INFORMATION TECHNOLOGY SEMINAR I', '3', '3', '1'),
(246219, '322892', 'สัมมนาทางเทคโนโลยีสารสนเทศ 2', 'INFORMATION TECHNOLOGY SEMINAR II', '3', '3', '1'),
(246220, '322898', 'วิทยานิพนธ์', 'THESIS', '0', '38', '38'),
(246221, '322118', 'การเขียนโปรแกรมคอมพิวเตอร์ 2', 'COMPUTER PROGRAMMING II', '3', '3', '3'),
(246222, '322162', 'องค์ประกอบและสถาปัตยกรรมคอมพิวเตอร์ขั้นแนะนำ', 'INTRODUCTION TO COMPUTER ORGANIZATION AND ARCHITECTURE', '3', '3', '3'),
(246223, '322221', 'ระบบปฏิบัติการ', 'OPERATING SYSTEMS', '3', '3', '3'),
(246224, '322222', 'เครือข่าย 1', 'NETWORK I', '3', '3', '3'),
(246225, '322223', 'เครื่อข่าย 2', 'NETWORK II', '3', '3', '3'),
(246226, '322235', 'การทดสอบซอฟต์แวร์', 'SOFTWARE TESTING', '3', '3', '3'),
(246227, '322236', 'การเขียนโปรแกรมประยุกต์บนเว็บ', 'WEB APPLICATION PROGRAMMING', '3', '3', '3'),
(246228, '322239', 'โปรแกรมประยุกต์กับระบบฐานข้อมูล', 'DATABASE APPLICATION', '3', '3', '3'),
(246229, '322992', 'สัมมนาดุษฎีนิพนธ์ 2', 'DISSERTATION SEMINAR II', '3', '3', '1'),
(246230, '322981', 'ระเบียบวิธีวิจัย', 'RESEARCH METHODOLOGY', '3', '3', '2'),
(246231, '322927', 'การวิเคราะห์และออกแบบระบบ', 'SYSTEM  ANALYSIS AND DESIGN', '3', '3', '3'),
(246232, '322935', 'เทคโนโลยีเว็บ', 'WEB TECHNOLOGY', '3', '3', '3'),
(246233, '322936', 'ระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN', '3', '3', '3'),
(246234, '322937', 'การจัดการเทคโนโลยีสารสนเทศ', 'MANAGING INFORMATION TECHNOLOGY', '3', '3', '3'),
(246235, '322938', 'เทคโนโลยี XML และการประยุกต์', 'XML TECHNOLOGIES AND APPLICATIONS', '3', '3', '3'),
(246236, '322939', 'เทคโนโลยีเว็บแบบสื่อความหมาย', 'SEMANTIC WEB TECHNOLOGY', '3', '3', '3'),
(246237, '322948', 'การบริหารเครือข่ายคอมพิวเตอร์', 'COMPUTER NETWORK ADMINISTRATION', '3', '3', '3'),
(246238, '322949', 'ความมั่นคงเทคโนโลยีสารสนเทศ', 'INFORMATION TECHNOLOGY SECURITY', '3', '3', '3'),
(246239, '322961', 'เทคโนโลยีการสื่อสารเคลื่อนที่และเครือข่ายไร้สาย', 'MOBILE AND WIRELESS NETWORKING TECHNOLOGY', '3', '3', '3'),
(246240, '322954', 'วิศวกรรมความรู้', 'KNOWLEDGE ENGINEERING', '3', '3', '3'),
(246241, '322955', 'เทคโนโลยีสนับสนุนการตัดสินใจ', 'DECISION SUPPORT TECHNOLOGIES', '3', '3', '3'),
(246242, '322956', 'การทำเหมืองข้อมูล', 'DATA MINING', '3', '3', '3'),
(246243, '322957', 'การจัดการความรู้', 'KNOWLEDGE MANAGEMENT', '3', '3', '3'),
(246244, '322963', 'ระบบสารสนเทศสำหรับการจัดการโลจิสติกส์และหว่งโซ่อุปทาน', 'INFORMATION SYSTEM FOR LOGISTICS AND SUPPLY CHAIN MANAGEMENT', '3', '3', '3'),
(246245, '322964', 'การจัดการหว่งโซ่อุปทานธุรกิจอิเล็กทรอนิกส์', 'ELECTRONIC BUSINESS SUPPLY CHAIN MANAGEMENT', '3', '3', '3'),
(246246, '322965', 'การจัดการโครงการด้านเทคโนโลยีสารสนเทศ', 'INFORMATION TECHNOLOGY PROJECT MANAGEMENT', '3', '3', '3'),
(246247, '322966', 'เครื่อข่ายคอมพิวเตอร์', 'COMPUTER NETWORKS', '3', '3', '3'),
(246248, '322976', 'หัวข้อพิเศษเครื่อข่ายและการสื่อสาร', 'SELECTED TOPICS IN NETWORK AND COMMMUNICATION', '3', '3', '3'),
(246249, '322977', 'หัวข้อพิเศษทางหุ่นยนต์และระบบแบบฝังตัว', 'SELECTED TOPICS IN ROBOTICS AND EMBEDDED SYSTEM', '3', '3', '3'),
(246250, '322978', 'หัวข้อพิเศษทางปัญญาประดิษฐ์', 'SELECTED TOPICS IN ARTIFICICAL INTELLIGENCE', '3', '3', '3'),
(246251, '322979', 'หัวข้อพิเศษทางเทคโนโลยีเว็บเชิงความหมาย', 'SELECTED TOPICS IN SEMANTIC WEB TECHNOLOGY', '3', '3', '3'),
(246252, '322982', 'หัวข้อพิเศษทางความหยั่งรู้ทางธุรกิจ', 'SELECTED TOPICS IN BUSINESS INTELLIGENCE', '3', '3', '3'),
(246253, '322983', 'หัวข้อพิเศษทางการจัดการโลจิสติกส์และห่วงโซ่อุปทาน', 'SELECTED TOPICS IN LOGISTICS AND SUPPLY CHAIN', '3', '3', '3'),
(246254, '322984', 'หัวข้อพิเศษทางเทคโนโลยีสังคม', 'SELECTED TOPICS IN SOCIAL TECHNOLOGY', '3', '3', '3'),
(246255, '322985', 'หัวข้อพิเศษทางการประมวลผลภาษาธรรมชาติ', 'SELECTED TOPICS IN NATURAL LANGUAGE PROCESSING', '3', '3', '3'),
(246256, '322986', 'หัวข้อพิเศษทางวิศวกรรมซอฟต์แวร์', 'SELECTED TOPICS IN SOFTWARE ENGINEERING', '3', '3', '3'),
(246257, '322989', 'ระเบียบวิธีวิจัยสำหรับเทคโนโลยีสารสนเทศ', 'RESEARCH METHODOLOGY FOR INFORMATION TECHNOLOGY', '3', '3', '3'),
(246258, '322991', 'สัมมนาทางเทคโนโลยีสารสนเทศ 1', 'INFORMATION TECHNOLOGY SEMINAR I', '3', '3', '1'),
(246259, '322992', 'สัมมนาทางเทคโนโลยีสารสนเทศ 2', 'INFORMATION TECHNOLOGY SEMINAR II', '3', '3', '1'),
(246260, '322993', 'สัมมนาทางเทคโนโลยีสารสนเทศ 3', 'INFORMATION TECHNOLOGY SEMINAR III', '3', '3', '1'),
(246261, '322999', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '36', '36'),
(246262, '322991', 'สัมมนาดุษฎีนิพนธ์', 'DISSERTATION SEMINAR I', '3', '3', '1'),
(246263, '322261', 'เครื่อข่ายการสื่อสารไร้สายและโทรศัพท์เคลื่อนที่', 'WIRELESS AND MOBILE COMMUNICATION NETWORKS', '3', '3', '3'),
(246264, '322793', 'ระเบียบวิธีวิจัย', 'RESEARCH METHODOLOGY', '3', '3', '3'),
(246265, '322766', 'เครื่อข่ายคอมพิวเตอร์', 'COMPUTER NETWORKS', '3', '3', '3'),
(246266, '322741', 'สถาปัตยกรรมระบบคอมพิวเตอร์', 'COMPUTER SYSTEMS ARCHITECTURE', '3', '3', '3'),
(246267, '322434', 'ระบบการจัดการเนื้อหา', 'CONTENT MANAGEMENT SYSTEM', '3', '3', '3'),
(246268, '322475', 'การทำเหมืองข้อมูล', 'DATA MINING', '3', '3', '3'),
(246269, '322477', 'ผู้ประกอบการเทคโนโลยีสารสนเทศ', 'INFORMATION TECHNOLOGY ENTREPRENEURSHIP', '3', '3', '3'),
(246270, '322478', 'การปรับปรุงกระบวนการซอฟต์แวร์', 'CONTENT MANAGEMENT SYSTEM', '3', '3', '3'),
(246271, '322262', 'เครือข่ายไร้สาย', 'WIRELESS NETWORKS', '3', '3', '3'),
(246272, '322391', 'ระเบียบวิธีวิจัย', 'RESEARCH METHODOLOGY', '3', '3', '3'),
(246273, '322431', 'เทคโนโลยีเว็บ', 'WEB TECHNOLOGY', '3', '3', '3'),
(246274, '322432', 'เทคโนโลยีการออกแบบเว็บ', 'WEB DESIGN TECHNOLOGY', '3', '3', '3'),
(246275, '322433', 'เทคโนโลยีเว็บเซอร์วิส', 'WEB SERVICES TECHNOLOGY', '3', '3', '3'),
(246276, '322711', 'ภาษาโปรแกรม', 'PROGRAMMING LANGUAGES', '3', '3', '3'),
(246277, '322724', 'การวิเคราะห์และออกแบบระบบ', 'SYSTEM  ANALYSIS AND DESIGN', '3', '3', '3'),
(246278, '322725', 'วิศวกรรมซอฟต์แวร์ขั้นสูง', 'ADVANCED SOFTWARE ENGINEERING', '3', '3', '3'),
(246279, '322734', 'การจัดการเทคโนโลยีสารสนเทศ', 'MANAGING INFORMATION TECHNOLOGY', '3', '3', '3'),
(246280, '322755', 'เทคโนโลยีสนับสนุนการตัดสินใจ', 'DECISION SUPPORT TECHNOLOGIES', '3', '3', '3'),
(246281, '322757', 'การจัดการความรู้', 'KNOWLEDGE MENAGEMENT', '3', '3', '3'),
(246282, '322765', 'การจัดการโครงการด้านเทคโนโลยีสารสนเทศ', 'INFORMATION TECHNOLOGY PROJECT MANAGEMENT', '3', '3', '3'),
(246283, '322767', 'เทคโนโลยีสื่อประสม', 'MUTIMEDIA TECHNOLOGY', '3', '3', '3'),
(246284, '322768', 'ปฏิสัมพันธ์ระหว่างมนุษย์กับคอมพิวเตอร์', 'HUMAN COMPUTER INTERACTION', '3', '3', '3'),
(246285, '322769', 'คอมพิวเตอร์วิทัศน์', 'COMPUTER VISION', '3', '3', '3'),
(246286, '322773', 'หัวข้อเรื่องพิเศษทางวิศวกรรมซอฟต์แวร์', 'SPECIAL TOPICS IN SOFTWARE ENGINEERING', '3', '3', '3'),
(246287, '322774', 'หัวข้อเรื่องพิเศษทางระบบอัจฉริยะ', 'SPECIAL TOPICS IN INTELLIGENCE SYSTEM', '3', '3', '3'),
(246288, '322775', 'หัวข้อเรื่องพิเศษทางเครือข่ายคอมพิวเตอร์ศูนย์กลาง', 'SPECIAL TOPICS IN NET CENTRIC COMPUTING', '3', '3', '3'),
(246289, '322776', 'หัวข้อเรื่องพิเศษทางคอมพิวเตอร์จินตทัศน์และเรขภาพ', 'SPECIAL TOPICS IN GRAPHIC AND VISUAL COMPUTING', '3', '3', '3'),
(246290, '322234', 'การรับรู้ระยะไกลขั้นแนะนำ', 'INTRODUCTION TO REMOTE SENSING', '3', '3', '3'),
(246291, '322236', 'การเขียนโปรแกรมประยุกต์บนเว็บ', 'WEB APPLICATION PROGRAMMING', '3', '3', '3'),
(246292, '322238', 'ระบบจัดการฐานข้อมูลและการออกแบบฐานข้อมูล', 'DATABASE MANAGEMENT SYSTEM AND DATABASE DESIGN', '3', '3', '3'),
(246293, '322251', 'การเขียนโปรแกรมจาวา', 'PROGRAMMING IN JAVA', '3', '3', '3'),
(246294, '322261', 'เครื่อข่ายการสื่อสารไร้สายและโทรศัพท์เคลื่อนที่', 'WIRELESS AND MOBILE COMMUNICATION NETWORKS', '3', '3', '3'),
(246295, '322263', 'ระบบสื่อสารดิจิตอล', 'DIGITAL COMMUNICATION SYSTEMS', '3', '3', '3'),
(246296, '322311', 'ทฤษฏีการคำนวณ', 'THEORY OF COMPUTATION', '3', '3', '3'),
(246297, '322312', 'วิทยาการคำนวณ', 'COMPUTATIONAL SCIENCE', '3', '3', '3'),
(246298, '322325', 'ระบบปฏิบัติการและการเขียนโปรแกรมซีสเต็มคอล', 'OPERATING SYSTEM AND SYSTEM CALLS PROGRAMMING', '3', '3', '3'),
(246299, '322326', 'เครื่อข่ายคอมพิวเตอร์', 'COMPUTER NETWORK', '3', '3', '3'),
(246300, '322327', 'ความมั่นคงระบบเครื่อข่ายคอมพิวเตอร์', 'COMPUTER NETWORK SECURITY', '3', '3', '3'),
(246301, '322328', 'การเขียนโปรแกรมภาษาวีเอชดีแอล', 'VHDL PROGRAMMING', '3', '3', '3'),
(246302, '322329', 'โครงแบบเครือข่าย', 'NETWORK CONFIGURATIONS', '3', '3', '3'),
(246303, '322332', 'คอมพิวเตอร์เรขภาพ', 'COMPUTER GRAPHICS', '3', '3', '3'),
(246304, '322339', 'ปฎิบัติการระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN LABORATORY', '3', '3', '1'),
(246305, '322342', 'การเรียนรู้เครื่องจักร', 'MACHINE LEARNING', '3', '3', '3'),
(246306, '322351', 'การแปลภาษาโปรแกรม', 'TRANSLATION OF PROGRAMMING LANGUAGES', '3', '3', '3'),
(246307, '322352', 'การวิเคราะห์ขั้นตอนวิธี', 'ANALYSIS OF ALGORITHMS', '3', '3', '3'),
(246308, '322361', 'สถาปัตยกรรมระบบคอมพิวเตอร์', 'COMPUTER SYSTEMS ARCHITECTURE', '3', '3', '3'),
(246309, '322362', 'สมรรถนะระบบคอมพิวเตอร์', 'COMPUTER SYSTEMS PERFORMANCE', '3', '3', '3'),
(246310, '322371', 'วิศวกรรมซอฟต์แวร์', 'SOFTWARE ENGINEERING', '3', '3', '3'),
(246311, '322372', 'การวิเคราะห์และออกแบบระบบ', 'SYSTEMS ANALYSIS AND DESIGN', '3', '3', '3'),
(246312, '322374', 'การประมวลผลภาพ', 'IMAGE PROCESSING', '3', '3', '3'),
(246313, '322381', 'การวางแผนเชิงกลยุทธ์ระบบสารสนเทศ', 'STRATEGIC PLANNING OF INFORMATION SYSTEMS', '3', '3', '3'),
(246314, '322382', 'นวัตกรรมกระบวนการ', 'PROCESS INNOVATION', '3', '3', '3'),
(246315, '322421', 'ปฏิบัติการระบบข่ายงานและระบบปฏิบัติการ', 'NETWORKING AND OPERATING SYSTEMS LABORATORY', '3', '3', '3'),
(246316, '322422', 'ระบบฝังตัว', 'EMBEDDED SYSTEMS', '3', '3', '3'),
(246317, '322431', 'เทคโนโลยีเว็บ', 'WEB TECHNOLOGY', '3', '3', '3'),
(246318, '322435', 'การโต้ตอบระหว่างมนุษย์และคอมพิวเตอร์', 'HUMAN-COMPUTER INTERACTION', '3', '3', '3'),
(246319, '322441', 'โครงข่ายประสาท', 'NEURAL NETWORKS', '3', '3', '3'),
(246320, '322462', 'การเชื่อมต่ออินเตอร์เน็ต', 'INTERNETWORKING', '3', '3', '3'),
(246321, '322474', 'การค้นค้นสารสนเทศแบบทันสมัย', 'MODERN INFORMATION RETRIEVAL', '3', '3', '3'),
(246322, '322475', 'การทำเหมืองข้อมูล', 'DATA MINING', '3', '3', '3'),
(246323, '322478', 'การปรับปรุงกระบวนการซอฟต์แวร์', 'SOFTWARE PROCES INPROVEMENT', '3', '3', '3'),
(246324, '322498', 'โครงการวิจัยทางวิทยาการคอมพิวเตอร์ ระดับปริญญาตรี 1', 'UNDERGRADUATE RESEARCH PROJECT FOR COMPUTER SCIENCE I', '3', '3', '3'),
(246325, '322499', 'โครงการวิจัยทางวิทยาการคอมพิวเตอร์ ระดับปริญญาตรี 2', 'UNDERADUATE RESEARCH PROJECT FOR COMPUTER SCIENCE II', '3', '3', '3'),
(246326, '322232', 'ภูมิสารสนเทศขั้นแนะนำ', 'INTRODUCTION TO GEOINFORMATICS', '3', '3', '3'),
(246327, '322753', 'การเรียนรู้ของเครื่องจักร', 'MACHINE LEARNING', '3', '3', '3'),
(246328, '320787', 'สถิติศาสตร์เชิงพื้นที่', 'SPATIAL STATISTICS', '3', '3', '3'),
(246329, '322971', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 1', 'SPECIAL TOPICS IN COMPUTER SCIENCE I', '3', '3', '3'),
(246330, '322972', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 2', 'SPECIAL TOPICS IN COMPUTER SCIENCE II', '3', '3', '3'),
(246331, '322973', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 3', 'SPECIAL TOPICS IN COMPUTER SCIENCE III', '3', '3', '3'),
(246332, '322974', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 4', 'SPECIAL TOPICS IN COMPUTER SCIENCE IV', '3', '3', '3'),
(246333, '322975', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 5', 'SPECIAL TOPICS IN COMPUTER SCIENCE V', '3', '3', '3'),
(246334, '322993', 'สัมมนาดุษฎีนิพนธ์ 3', 'DISSERTATION SEMINAR III', '3', '3', '1'),
(246335, '322994', 'สัมมนาดุษฎีนิพนธ์ 4', 'DISSERTATION SEMINAR IV', '3', '3', '1'),
(246336, '322996', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '72', '72'),
(246337, '320761', 'หลักการการรับรู้จากระยะไกล', 'PRINCIPLES OF REMOTE SENSING', '3', '3', '3'),
(246338, '320763', 'การรับรู้จากระยะไกลไมโครเวฟ', 'MICROWAVE REMOTE SENSING', '3', '3', '3'),
(246339, '320773', 'ระบบนิเวศภาคพื้นดิน', 'TERRESTRIAL ECOSYSTEM', '3', '3', '3'),
(246340, '320774', 'การประเมินที่ดินและการวางแผนการใช้ที่ดิน', 'LAND EVALUATION AND LAND USE PLANNING', '3', '3', '3'),
(246341, '320781', 'ระบบสารสนเทศภูมิศาสตร์', 'GEOGRAPHIC  INFORMATION SYSTEM', '3', '3', '3'),
(246342, '320783', 'ระบบการจัดการฐานข้อมูลและมาตรฐานระบบสารสนเทศภูมิศาสตร์', 'DATABASE  MANAGEMENT SYSTEM AND GEOGRAPHIC INFORMATION  SYSTEM STANDARD', '3', '3', '3'),
(246343, '320785', 'การสร้างแบบจำลองทางระบบสารสนเทศภูมิศาสตร์', 'MODELING IN GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246344, '320786', 'การเขียนโปรแกรมขั้นสูงในระบบสารสนเทศภูมิศาสตร์', 'ADVANCED PROGRAMMING IN GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246345, '320961', 'การรับรู้จากระยะไกลขั้นสูง', 'ADVANCED REMOTE SENSING', '3', '3', '3'),
(246346, '320981', 'ระบบสารสนเทศภูมิศาสตร์ขั้นสูง', 'ADVANCED GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246347, '320982', 'ภูมิสารสนเทศศาสตร์ในด้านทรัพยากรธรรมชาติและสิ่งแวดล้อม', 'GEO-INFORMATICS IN NATURAL RESOURCES AND ENVIRONMENT', '3', '3', '3'),
(246348, '320983', 'ภูมิสารสนเทศศาสตร์ในด้านอุทกวิทยา', 'GEO-INFORMATICS IN HYDROLOGY', '3', '3', '3'),
(246349, '320991', 'สัมมนา 1', 'SEMINAR I', '3', '3', '1'),
(246350, '320992', 'สัมมนา 2', 'SEMINAR II', '3', '3', '1'),
(246351, '320993', 'สัมมนา 3', 'SEMINAR III', '3', '3', '1'),
(246352, '320996', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '72', '72'),
(246353, '320997', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '48', '48'),
(246354, '320998', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '48', '48'),
(246355, '320999', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '36', '36'),
(246356, '320764', 'การทำแผนที่จากภาพถ่ายทางอากาศ', 'PHOTOGRAMMETRY', '3', '3', '3'),
(246357, '320772', 'ทรัพยากรที่ดินและสิ่งแวดล้อม', 'LAND RESOURCES AND ENVIRONMENT', '3', '3', '3'),
(246358, '320782', 'ระบบสารสนเทศการจัดการทรัพยากร', 'RESOURCE MANAGEMENT INFORMATION SYSTEM', '3', '3', '3'),
(246359, '320892', 'สัมมนา 2', 'SEMINAR II', '1', '1', '1'),
(246360, '320894', 'ปัญหาพิเศษ', 'SPECIAL PROBLEMS', '3', '3', '3'),
(246361, '320897', 'การศึกษาอิสระ', 'INDEPENDENT STUDY', '1', '6', '6'),
(246362, '322114', 'การเขียนโปรแกรมเชิงโครงสร้างสำหรับวิทยาการคอมพิวเตอร์', 'STRUCTURED PROGRAMMING FOR COMPUTER SCIENCE', '3', '3', '3'),
(246363, '322123', 'องค์ประกอบและระบบคอมพิวเตอร์หลักมูล', 'FUNDAMENTALS OF COMPUTER SYSTEM AND ORGANIZATION', '3', '3', '3'),
(246364, '322212', 'โครงสร้างข้อมูล', 'DATA STRUCTURES', '3', '3', '3'),
(246365, '322213', 'ฝึกปฏิบัติการสำหรับวิทยาการคอมพิวเตอร์', 'WORKSHOP FOR COMPUTER SCIENCE', '3', '3', '3'),
(246366, '322219', 'การเขียนโปรแกรมเชิงวัตถุ', 'OBJECT-ORIENTED PROGRAMMING', '3', '3', '3'),
(246367, '322224', 'ตรรกะดิจิตอลและคอมพิวเตอร์อินเตอร์เฟส', 'DIGITAL LOGIC AND COMPUTER INTERFACING', '3', '3', '3'),
(246368, '322231', 'หลักการออกแบบและพัฒนาซอฟต์แวร์', 'PRINCIPLES OF SOFTWARE DESIGN AND DEVELOPMENT', '3', '3', '3'),
(246369, '324221', 'ธรณีวิทยาขั้นแนะนำ', 'INTRODUCTION TO GEOLOGY', '3', '3', '2'),
(246370, '324303', 'การออกแบบและมาตรฐานข้อมูลเชิงพื้นที่', 'DESIGN AND STANDARD GEO-SPATIAL DATABASE', '3', '3', '3'),
(246371, '324401', 'ภูมิสารสนเทศศาสตร์ประยุกต์', 'APPLIED GEO-INFORMATICS', '3', '3', '3'),
(246372, '324402', 'หลักการทำแผนที่', 'PRINCIPLES OF CARTORGRAPHY', '3', '3', '2'),
(246373, '324403', 'การสำรวจรังวัดและระบบกำหนดตำแหน่งบนโลก', 'SURVEYING AND GLOBAL POSITIONING SYSTEM', '3', '3', '3'),
(246374, '324404', 'การวิเคราะห์เชิงพื้นที่', 'GEOSPATIAL ANALYSIS', '3', '3', '3'),
(246375, '324412', 'หลักการโฟโตแกรมเมตรี', 'PRINCIPLES OF PHOTOGRAMMETRY', '3', '3', '3'),
(246376, '324421', 'การวางแผนการใช้ที่ดินขั้นแนะนำ', 'INTRODUCTION TO LAND USE PLANNING', '3', '3', '3'),
(246377, '324422', 'การวางผังเมืองและภูมิสารสนเทศศาสตร์', 'CITY PLANNING AND GEO-INFORMATICS', '3', '3', '3'),
(246378, '324495', 'สหกิจศึกษา', 'CO-OPERATIVE EDUCATION', '3', '3', '6'),
(246379, '324494', 'ระเบียบวิธีการวิจัยทางภูมิสารสนเทศศาสตร์', 'RESEARCH METHODOLOGY IN GEO-INFORMATICS', '3', '3', '3'),
(246380, '324203', 'ภูมิสารสนเทศศาสตร์สำหรับชีวิตประจำวัน', 'GEO-INFORMATICS FOR DAILY LIFE', '3', '3', '2'),
(246381, '320891', 'สัมมนา 1', 'SEMINAR I', '1', '1', '1'),
(246382, '324211', 'หลักมูลการรับรู้จากระยะไกล', 'FUNDAMENTAL OF REMOTE SENSING', '3', '3', '3'),
(246383, '322336', 'ระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN', '3', '3', '3'),
(246384, '322376', 'ความมั่นคงเทคโนโลยีสารสนเทศและการสื่อสาร', 'INFORMATION AND COMMUNICATION TECHNOLOGY SECURITY', '3', '3', '3'),
(246385, '322758', 'การวิเคราะห์ข้อมูลขนาดใหญ่', 'BIG DATA ANALYTICS', '3', '3', '3'),
(246386, '322254', 'การเขียนโปรแกรมสคริปต์', 'SCRIPT PROGRAMMING', '3', '3', '3'),
(246387, '322375', 'เทคโนโลยี XML และการประยุกต์', 'XML TECHNOLOGIES AND APPLICATIONS', '3', '3', '3'),
(246388, '322364', 'การเขียนโปรแกรมแบบขนาน', 'PARALLEL PROGRAMMING', '3', '3', '3'),
(246389, '322265', 'การพัฒนาแอปพลิเคชั่นบนโทรศัพท์มือถือ', 'MOBILE APPLICATION DEVELOPMENT', '3', '3', '3'),
(246390, '322492', 'สัมมนาทางวิทยาการคอมพิวเตอร์', 'SEMINAR IN COMPUTER SCIENCE', '3', '3', '1'),
(246391, '322132', 'การพัฒนาโปรแกรมประยุกต์บนเว็บ', 'WEB APPLICATION DEVELOPMENT', '3', '3', '3'),
(246392, '322151', 'การเขียนโปรแกรมเชลล์', 'SHELL PROGRAMMING', '3', '3', '1'),
(246393, '322216', 'ปฏิบัติการโครงสร้างข้อมูล', 'DATA STRUCTURE LABORATORY', '3', '3', '1'),
(246394, '322217', 'การแข่งขันการเขียนโปรแกรมคอมพิวเตอร์', 'COMPUTER PROGRAMMING CONTEST', '3', '3', '1'),
(246395, '324201', 'หลักมูลภูมิสารสนเทศศาสตร์', 'FUNDAMETALS OF GEO-INFORMATIONS', '3', '3', '3'),
(246396, '322275', 'XMLสำหรับเทคโนโลยีเว็บและการประยุกต์', 'XML TOWARDS WEB TECHNOLOGIES AND APPLICATIONS', '3', '3', '3'),
(246397, '322479', 'พื้นฐานวิชาชีพด้านเทคโนโลยีสารสนเทศ', 'INTRODUCTION TO INFORMATION TECHNOLOGY PROFESSIONAL', '3', '3', '3'),
(246398, '322264', 'เทคโนโลยีมือถือและไร้สาย', 'MOBILE AND WIRELESS TECHNOLOGY', '3', '3', '3'),
(246399, '322371', 'วิศวกรรมซอฟต์แวร์', 'SOFTWARE ENGINEERING', '3', '3', '3'),
(246400, '320762', 'การประมวลผลภาพเชิงตัวเลข', 'DIGITAL  IMAGE  PROCESSING', '3', '3', '3'),
(246401, '324411', 'การประมวลผลเชิงเลขของข้อมูลจากดาวเทียม', 'DIGITAL PROCESSING OF SATELLITE DATA', '3', '3', '3'),
(246402, '324413', 'การรับรู้จากระยะไกลด้วยคลื่นไมโครเวฟขั้นแนะนำ', 'INTRODUCTION TO MICROWAVE REMOTE SENSING', '3', '3', '3'),
(246403, '324401', 'ภูมิสารสนเทศศาสตร์ประยุกต์', 'APPLIED GEO-INFORMATICS', '3', '3', '3'),
(246404, '320898', 'วิทยานิพนธ์', 'THESIS', '1', '38', '38'),
(246405, '322745', 'ความมั่นคงระบบคอมพิวเตอร์', 'COMPUTER SYSTEM SECURITY', '3', '3', '3'),
(246406, '322738', 'ระบบธุรกิจอัจฉริยะขั้นสูง', 'ADVANCED BUSINESS INTELLIGENCE', '3', '3', '3'),
(246407, '322437', 'การพัฒนาโปรแกรมประยุกต์บนเว็บด้วยภาษาจาวา', 'JAVA WEB APPLICATION DEVELOPMENT', '3', '3', '3'),
(246408, '322384', 'ระบบธุรกิจอัจฉริยะ', 'BUSINESS INTELLIGENCE', '3', '3', '3'),
(246409, '320788', 'การวางฝังเมืองและระบบสารสนเทศภูมิศาสตร์', 'CITY PLANNING AND GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246410, '342267', 'การเขียนโปรแกรมอุปกรณ์เคลื่อนที่', 'MOBILE DEVICE PROGRAMMING', '3', '3', '3'),
(246411, '322218', 'พื้นฐานการเขียนโปรแกรมเกม', 'BASIC OF GAME PROGRAMMING', '3', '3', '3'),
(246412, '342181', 'ตรรกะและแนวคิด', 'LOGIC AND CONCEPTS', '3', '3', '3'),
(246413, '342182', 'ความบันดาลใจในวิชาชีพเทคโนโลยีสารสนเทศ', 'INSPIRATION IN IT CAREER', '3', '3', '1'),
(246414, '342211', 'ขั้นตอนวิธีและโครงสร้างข้อมูล', 'ALGORITHMS AND DATA STRUCTURES', '3', '3', '3'),
(246415, '342221', 'ระบบปฏิบัติการ', 'OPERATING SYSTEMS', '3', '3', '3'),
(246416, '322385', 'การประกันคุณภาพซอฟต์แวร์', 'SOFTWARE QUALITY ASSURANCE', '3', '3', '3'),
(246417, '342756', 'การทำเหมืองข้อมูล', 'DATA MINING', '3', '3', '3'),
(246418, '322421', 'ปฏิบัติการระบบข่ายงานและระบบปฏิบัติการ', 'NETWORKING AND OPERATING SYSTEMS LABORATORY', '3', '3', '3'),
(246419, '342162', 'องค์ประกอบและสถาปัตยกรรมคอมพิวเตอร์ขั้นแนะนำ', 'INTRODUCTION TO COMPUTER ORGANIZATION AND ARCHITECTURE', '3', '3', '3'),
(246420, '342375', 'เทคโนโลยีเอ็กซ์เอ็มแอลและการประยุกต์', 'XML TECHNOLOGIES AND APPLICATIONS', '3', '3', '3'),
(246421, '342376', 'ความมั่นคงเทคโนโลยีสารสนเทศและการสื่อสาร', 'INFORMATION AND COMMUNICATION TECHNOLOGY SECURITY', '3', '3', '3'),
(246422, '342378', 'ระบบการวางแผนทรัพยากรองค์กร', 'ENTERPRISE RESOURCE PLANNING SYSTEM', '3', '3', '3'),
(246423, '342384', 'ระบบธุรกิจอัจฉริยะ', 'BUSINESS INTELLIGENCE SYSTEM', '3', '3', '3'),
(246424, '342391', 'ระเบียบวิธีวิจัย', 'RESEARCH METHODOLOGY', '3', '3', '3'),
(246425, '342431', 'เทคโนโลยีเว็บ', 'WEB TECHNOLOGY', '3', '3', '3'),
(246426, '340727', 'การพัฒนาซอฟต์แวร์แบบอาไจล์', 'AGILE SOFTWARE DEVELOPMENT', '3', '3', '3'),
(246427, '340733', 'ระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEM AND DESIGN', '3', '3', '3'),
(246428, '340741', 'สถาปัตยกรรมระบบคอมพิวเตอร์', 'COMPUTER SYSTEMS ARCHITECTURE', '3', '3', '3'),
(246429, '340742', 'การเชื่อมต่ออินเทอร์เน็ตสื่อผสมไร้สาย', 'WIRELESS MULTIMEDIA INTERNETWORKING', '3', '3', '3'),
(246430, '340743', 'เครือข่ายคอมพิวเตอร์ขั้นสูง', 'ADVANCED COMPUTER NETWORKS', '3', '3', '3'),
(246431, '340745', 'ความมั่นคงระบบคอมพิวเตอร์และเครือข่าย', 'COMPUTER AND NETWORK SECURITY', '3', '3', '3'),
(246432, '342224', 'ตรรกะดิจิทัลและระบบฝังตัว', 'DIGITAL LOGIC AND EMBEDDED SYSTEMS', '3', '3', '3'),
(246433, '342233', 'การวิเคราะห์และออกแบบฐานข้อมูล', 'DATABASE ANALYSIS AND DESIGN', '3', '3', '3'),
(246434, '342235', 'การทดสอบซอฟต์แวร์และการประกันคุณภาพ', 'SOFTWARE TESTING AND QUALITY ASSURANCE', '3', '3', '3');
INSERT INTO `teacher_copy` (`pk`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`) VALUES
(246435, '342236', 'การเขียนโปรแกรมประยุกต์บนเว็บ', 'WEB APPLICATION PROGRAMMING', '3', '3', '3'),
(246436, '342264', 'เทคโนโลยีเคลื่อนที่และไร้สาย', 'MOBILE AND WIRELESS TECHNOLOGY', '3', '3', '3'),
(246437, '342266', 'การพัฒนาโปรแกรมประยุกต์บนเว็บสำหรับอุปกรณ์เคลื่อน', 'MOBILE WEB APPLICATION DEVELOPMENT', '3', '3', '3'),
(246438, '342281', 'ระบบสารสนเทศทางธุรกิจ', 'BUSINESS INFORMATION SYSTEMS', '3', '3', '3'),
(246439, '342329', 'โครงแบบเครือข่าย', 'NETWORK CONFIGURATIONS', '3', '3', '3'),
(246440, '342334', 'การพัฒนาการประยุกต์แบบรับ-ให้บริการ', 'CLIENT/SERVER APPLICATION DEVELOPMENT', '3', '3', '3'),
(246441, '342364', 'การเขียนโปรแกรมแบบขนาน', 'PARALLEL PROGRAMMING', '3', '3', '3'),
(246442, '342365', 'การประมวลผลแบบกลุ่มเมฆและการประยุกต์', 'CLOUD COMPUTING AND APPLICATIONS', '3', '3', '3'),
(246443, '342366', 'เทคโนโลยีสำหรับข้อมูลขนาดใหญ่', 'BIG DATA TECHNOLOGY', '3', '3', '3'),
(246444, '342371', 'วิศวกรรมซอฟต์แวร์', 'SOFTWARE ENGINEERING', '3', '3', '3'),
(246445, '342372', 'การวิเคราะห์และออกแบบระบบ', 'SYSTEMS ANALYSIS AND DESIGN', '3', '3', '3'),
(246446, '342373', 'พาณิชย์อิเล็กทรอนิกส์และโปรแกรมประยุกต์', 'ELECTRONIC COMMERCE AND APPLICATIONS', '3', '3', '3'),
(246447, '342432', 'เทคโนโลยีการออกแบบเว็บ', 'WEB DESIGN TECHNOLOGIES', '3', '3', '3'),
(246448, '342433', 'เทคโนโลยีเว็บเซอร์วิส', 'WEB SERVICES TECHNOLOGY', '3', '3', '3'),
(246449, '342434', 'ระบบการจัดการเนื้อหา', 'CONTENT MANAGEMENT SYSTEM', '3', '3', '3'),
(246450, '342436', 'เทคโนโลยีเว็บแบบสื่อความหมาย', 'SEMANTIC WEB TECHNOLOGY', '3', '3', '3'),
(246451, '342471', 'การจัดการเชิงกลยุทธ์เทคโนโลยีสารสนเทศ', 'STRATEGIC MANAGEMENT OF INFORMATION TECHNOLOGY', '3', '3', '3'),
(246452, '342473', 'การบริหารโครงการ', 'PROJECT MANAGEMENT', '3', '3', '3'),
(246453, '342475', 'การทำเหมืองข้อมูล', 'DATA MINING', '3', '3', '3'),
(246454, '342477', 'การเป็นผู้ประกอบการเทคโนโลยีสารสนเทศ', 'INFORMATION TECHNOLOGY ENTREPRENEURSHIP', '3', '3', '3'),
(246455, '342478', 'การปรับปรุงกระบวนการซอฟต์แวร์', 'SOFTWARE PROCESS IMPROVEMENT', '3', '3', '3'),
(246456, '342479', 'วิชาชีพเทคโนโลยีสารสนเทศ', 'INFORMATION TECHNOLOGY PROFESSION', '3', '3', '3'),
(246457, '342491', 'สัมมนาทางเทคโนโลยีสารสนเทศ', 'SEMINAR IN INFORMATION TECHNOLOGY', '3', '3', '1'),
(246458, '342494', 'โครงงานคอมพิวเตอร์ 1', 'COMPUTER PROJECT I', '3', '3', '3'),
(246459, '342495', 'สหกิจศึกษา', 'CO-OPERATIVE EDUCATION', '3', '3', '6'),
(246460, '342496', 'โครงงานคอมพิวเตอร์ 2', 'COMPUTER PROJECT II', '3', '3', '3'),
(246461, '340711', 'ภาษาโปรแกรม', 'PROGRAMMING LANGUAGES', '3', '3', '3'),
(246462, '340721', 'ทฤษฎีการคำนวณ', 'THEORY OF COMPUTATION', '3', '3', '3'),
(246463, '340891', 'สัมมนาทางวิทยาการคอมพิวเตอร์ 1', 'COMPUTER SCIENCE SEMINAR I', '3', '3', '1'),
(246464, '340892', 'สัมมนาทางวิทยาการคอมพิวเตอร์ 2', 'COMPUTER SCIENCE SEMINAR II', '3', '3', '1'),
(246465, '340897', 'การศึกษาอิสระ', 'INDEPENDENT STUDY', '1', '6', '6'),
(246466, '340898', 'วิทยานิพนธ์', 'THESIS', '1', '6', '41'),
(246467, '340899', 'วิทยานิพนธ์', 'THESIS', '1', '12', '12'),
(246468, '340712', 'การพัฒนาโปรแกรมประยุกต์ข้ามแพลตฟอร์ม', 'CROSS-PLATFORM APPLICATION DEVELOPMENT', '3', '3', '3'),
(246469, '340713', 'การพัฒนาโปรแกรมประยุกต์บนเว็บขั้นสูง', 'ADVANCED WEB APPLICATION DEVELOPMENT', '3', '3', '3'),
(246470, '340722', 'การวิเคราะห์และออกแบบขั้นตอนวิธี', 'ALGORITHM ANALYSIS AND DESIGN', '3', '3', '3'),
(246471, '340723', 'ระบบปฏิบัติการ', 'OPERATING SYSTEMS', '3', '3', '3'),
(246472, '340725', 'วิศวกรรมซอฟต์แวร์ขั้นสูง', 'ADVANCED SOFTWARE ENGINEERING', '3', '3', '3'),
(246473, '340726', 'การประกันคุณภาพซอฟต์แวร์', 'SOFTWARE QUALITY ASSURANCE', '3', '3', '3'),
(246474, '340746', 'ทฤษฎีสารสนเทศ', 'INFORMATION THEORY', '3', '3', '3'),
(246475, '340747', 'ระบบแบบกระจาย', 'DISTRIBUTED SYSTEMS', '3', '3', '3'),
(246476, '340751', 'กระบวนทัศน์ปัญญาประดิษฐ์', 'PARADIGMS OF ARTIFICIAL INTELLIGENCE', '3', '3', '3'),
(246477, '340752', 'โครงข่ายประสาทเทียม', 'ARTIFICIAL NEURAL NETWORKS', '3', '3', '3'),
(246478, '340753', 'การเรียนรู้ของเครื่องสำหรับวิทยาการข้อมูล', 'MACHINE LEARNING FOR DATA SCIENCE', '3', '3', '3'),
(246479, '340755', 'เทคโนโลยีสนับสนุนการตัดสินใจ', 'DECISION SUPPORT TECHNOLOGIES', '3', '3', '3'),
(246480, '340756', 'การทำเหมืองข้อมูล', 'DATA MINING', '3', '3', '3'),
(246481, '340759', 'การประมวลผลภาษาธรรมชาติ', 'NATURAL LANGUAGE PROCESSING', '3', '3', '3'),
(246482, '340761', 'เทคโนโลยีเสมือนจริง', 'VIRTUAL REALITY TECHNOLOGY', '3', '3', '3'),
(246483, '340762', 'การประมวลผลและวิเคราะห์ข้อมูลภาพดิจิทัล', 'DIGITAL IMAGE PROCESSING AND ANALYSIS', '3', '3', '3'),
(246484, '340763', 'การออกแบบปฏิสัมพันธ์สำหรับส่วนต่อประสานผู้ใช้', 'INTERACTION DESIGN FOR USER INTERFACE', '3', '3', '3'),
(246485, '340769', 'คอมพิวเตอร์วิทัศน์', 'COMPUTER VISION', '3', '3', '3'),
(246486, '340773', 'หัวเรื่องพิเศษทางวิทยาการคอมพิวเตอร์', 'SPECIAL TOPICS IN COMPUTER SCIENCE', '3', '3', '3'),
(246487, '340793', 'ระเบียบวิธีวิจัย', 'RESEARCH METHODOLOGY', '3', '3', '3'),
(246488, '342724', 'การวิเคราะห์และออกแบบระบบ', 'SYSTEM ANALYSIS AND DESIGN', '3', '3', '3'),
(246489, '342734', 'การจัดการเทคโนโลยีสารสนเทศ', 'MANAGING INFORMATION TECHNOLOGY', '3', '3', '3'),
(246490, '342738', 'ระบบธุรกิจอัจฉริยะขั้นสูง', 'ADVANCED BUSINESS INTELLIGENCE', '3', '3', '3'),
(246491, '342744', 'การบริหารเครือข่ายคอมพิวเตอร์', 'COMPUTER NETWORK ADMINISTRATION', '3', '3', '3'),
(246492, '342758', 'การวิเคราะห์ข้อมูลขนาดใหญ่', 'BIG DATA ANALYTICS', '3', '3', '3'),
(246493, '344781', 'ระบบสารสนเทศภูมิศาสตร์', 'GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246494, '342735', 'เทคโนโลยี XML และการประยุกต์', 'XML TECHNOLOGIES AND APPLICATIONS', '3', '3', '3'),
(246495, '342736', 'เทคโนโลยีเว็บแบบสื่อความหมาย', 'SEMANTIC WEB TECHNOLOGY', '3', '3', '3'),
(246496, '342117', 'การเขียนโปรแกรมเชิงโครงสร้างสำหรับเทคโนโลยีสารสนเทศ', 'STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY', '3', '3', '3'),
(246497, '342118', 'แนวคิดและการเขียนโปรแกรมเชิงวัตถุ', 'OBJECT ORIENTED CONCEPTS AND PROGRAMMING', '3', '3', '3'),
(246498, '342739', 'การวิเคราะห์และออกแบบฐานข้อมูล', 'DATABASE ANALYSIS AND DESIGN', '3', '3', '3'),
(246499, '342748', 'ความมั่นคงเทคโนโลยีสารสนเทศ', 'INFORMATION TECHNOLOGY SECURITY', '3', '3', '3'),
(246500, '342749', 'เทคโนโลยีการสื่อสารเคลื่อนที่และเครือข่ายไร้สาย', 'MOBILE AND WIRELESS NETWORKING TECHNOLOGY', '3', '3', '3'),
(246501, '342766', 'เครือข่ายคอมพิวเตอร์ขั้นสูง', 'ADVANCED COMPUTER NETWORKS', '3', '3', '3'),
(246502, '342793', 'ระเบียบวิธีวิจัย', 'RESEARCH METHODOLOGY', '3', '3', '3'),
(246503, '342891', 'สัมมนาทางเทคโนโลยีสารสนเทศ 1', 'SEMINAR IN INFORMATION TECHNOLOGY I', '3', '3', '2'),
(246504, '342892', 'สัมมนาทางเทคโนโลยีสารสนเทศ 2', 'SEMINAR IN INFORMATION TECHNOLOGY II', '3', '3', '2'),
(246505, '342897', 'การศึกษาอิสระ', 'INDEPENDENT STUDY', '1', '6', '6'),
(246506, '322372', 'การวิเคราะห์และออกแบบระบบ', 'SYSTEMS ANALYSIS AND DESIGN', '3', '3', '3'),
(246507, '322462', 'การเชื่อมต่ออินเทอร์เน็ต', 'INTERNETWORKING', '3', '3', '3'),
(246508, '342131', 'การโต้ตอบระหว่างมนุษย์กับคอมพิวเตอร์', 'HUMAN-COMPUTER INTERACTION', '3', '3', '3'),
(246509, '342222', 'เครือข่ายคอมพิวเตอร์ขั้นแนะนำ', 'INTRODUCTION TO COMPUTER NETWORKING', '3', '3', '3'),
(246510, '322327', 'ความมั่นคงระบบเครือข่ายคอมพิวเตอร์', 'COMPUTER NETWORK SECURITY', '3', '3', '3'),
(246511, '322254', 'การเขียนโปรแกรมสคริปต์', 'SCRIPT PROGRAMMING', '3', '3', '3'),
(246512, '342898', 'วิทยานิพนธ์', 'THESIS', '1', '37', '37'),
(246513, '342899', 'วิทยานิพนธ์', 'THESIS', '1', '12', '12'),
(246514, 'SC334785', 'สหกิจศึกษา', 'CO-OPERATIVE EDUCATION', '9', '9', '9'),
(246515, '322336', 'ระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN', '3', '3', '3'),
(246516, '322339', 'ปฎิบัติการระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN LABORATORY', '3', '1', '1'),
(246517, '322373', 'การพาณิชย์อิเล็กทรอนิกส์', 'ELECTRONIC COMMERCE', '3', '3', '3'),
(246518, '322473', 'การพัฒนาซอฟท์แวร์และการจัดการโครงการ', 'SOFTWARE DEVELOPMENT AND PROJECT MANAGEMENT', '3', '3', '3'),
(246519, '322473', 'การพัฒนาซอฟท์แวร์และการจัดการโครงการ', 'SOFTWARE DEVELOPMENT AND PROJECT MANAGEMENT', '3', '3', '2'),
(246520, '322161', 'เทคโนโลยีสารสนเทศและการสื่อสารขั้นแนะนำ', 'INTRODUCTION TO INFORMATION AND COMMUNICATION TECHNOLOGY', '3', '3', '3'),
(246521, 'SC362101', 'ระบบสารสนเทศทางธุรกิจ', 'Business Information Systems', '3', '3', '3'),
(246522, 'SC362102', 'วิศวกรรมซอฟต์แวร์', 'Software Engineering', '3', '3', '3'),
(246523, 'SC362103', 'การทำเหมืองข้อมูล', 'Data Mining', '3', '3', '3'),
(246524, 'SC363305', 'การประมวลผลแบบกลุ่มเมฆและการประยุกต์', 'Cloud Computing and Application', '3', '3', '3'),
(246525, 'SC363306', 'เทคโนโลยีบล็อกเชนและสกุลเงินเข้ารหัส', 'Blockchain and Cryptocurrency Technology', '3', '3', '3'),
(246526, 'SC363307', 'เทคโนโลยีบล็อกเชนและสกุลเงินเข้ารหัส', 'Blockchain and Cryptocurrency Technology', '3', '3', '3'),
(246527, 'SC362201', 'เทคโนโลยีการออกแบบเว็บ', 'Web Design Technologies', '3', '3', '3'),
(246528, 'SC337861', 'หลักการการรับรู้จากระยะไกล', 'PRINCIPLES OF REMOTE SENSING', '3', '3', '3'),
(246529, 'SC337881', 'ระบบสารสนเทศภูมิศาสตร์', 'GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246530, 'SC337898', 'วิทยานิพนธ์', 'THESIS', '1', '38', '38'),
(246531, '342365', 'การประมวลผลแบบกลุ่มเมฆและการประยุกต์', 'CLOUD COMPUTING AND APPLICATIONS', '3', '3', '3'),
(246532, 'SC348802', 'คอมพิวเตอร์วิทัศน์', 'Computer Vision', '3', '3', '3'),
(246533, 'SC313001', 'ระบบปฏิบัติการและการเขียนโปรแกรมซีสเต็มคอล', 'OPERATING SYSTEMS AND SYSTEM CALLS PROGRAMMING', '3', '3', '3'),
(246534, 'SC313002', 'หลักการออกแบบพัฒนาซอฟต์แวร์', 'PRINCIPLES OF SOFTWARE DESIGN AND DEVELOPMENT', '3', '3', '3'),
(246535, 'SC313003', 'การวิเคราะห์และออกแบบระบบ', 'SYSTEM ANALYSIS AND DESIGN', '3', '3', '3'),
(246536, 'SC348808', 'ปฏิสัมพันธ์ระหว่างมนุษย์กับคอมพิวเตอร์และการสร้างภาพนิทัศน์จากสารสนเทศ', 'Human Computer Interaction and Information Visualization', '3', '3', '3'),
(246537, 'SC348899', 'วิทยานิพนธ์', 'Thesis', '1', '12', '12'),
(246538, 'SC363301', 'การบริหารและบำรุงรักษาระบบ', 'System Administrationand Maintenance', '3', '3', '3'),
(246539, 'SC363302', 'การโปรแกรมและคำนวณเครือข่าย', 'Network Programming and Computing', '3', '3', '3'),
(246540, 'SC311503', 'การเขียนโปรแกรมสคริปต์', 'SCRIPT PROGRAMMING', '3', '3', '3'),
(246541, 'SC311302', 'การเขียนโปรแกรมสำหรับโมบายแอปพลิเคชั่น', 'Programming for Mobile Application', '3', '3', '3'),
(246542, 'SC361001', 'ความบันดาลใจในวิชาชีพเทคโนโลยีสารสนเทศ', 'Inspiration in IT Career', '1', '1', '1'),
(246543, 'SC361002', 'การเขียนโปรแกรมเชิงโครงสร้างสำหรับเทคโนโลยีสารสนเทศ', 'Structured Programming for Information Technology', '3', '3', '3'),
(246544, 'SC361003', 'แนวคิดและการเขียนโปรแกรมเชิงวัตถุ', 'Object Oriented Concepts and Programming', '3', '3', '3'),
(246545, 'SC361004', 'การโต้ตอบระหว่างมนุษย์กับคอมพิวเตอร์', 'Human-Computer Interaction', '3', '3', '3'),
(246546, 'SC312503', 'การแข่งขันเขียนโปรแกรมคอมพิวเตอร์', 'Computer Programming Contest', '3', '3', '3'),
(246547, 'SC362005', 'การวิเคราะห์และออกแบบฐานข้อมูล', 'Database Analysis and Design', '3', '3', '3'),
(246548, 'SC362006', 'ความมั่นคงเทคโนโลยีสารสนเทศและการสื่อสาร', 'Information and Communication Technology Security', '3', '3', '3'),
(246549, 'SC362007', 'การเขียนโปรแกรมอุปกรณ์เคลื่อนที่', 'Mobile Device Programming', '3', '3', '3'),
(246550, 'SC363303', 'เทคโนโลยีความมั่นคงปลอดภัยไซเบอร์เกิดใหม่', 'Cybersecurity Emerging Technology', '3', '3', '3'),
(246551, 'SC363304', 'ระบบคำนวณแบบขนานและกระจาย', 'Parallel and Distributed Computing System', '3', '3', '3'),
(246552, 'SC363203', 'เทคโนโลยีเว็บเซอร์วิส', 'Web Services Technology', '3', '3', '3'),
(246553, 'SC363204', 'การพัฒนาโปรแกรมประยุกต์บนเว็บด้วยภาษาจาวา', 'Java Web Application Development', '3', '3', '3'),
(246554, 'SC363401', 'การบูรณาการการเรียนรู้กับการทำงานด้านเทคโนโลยีสารสนเทศทางธุรกิจ', 'Work-Integrated Learningin Business Information Technology', '9', '9', '9'),
(246555, 'SC361005', 'องค์ประกอบและสถาปัตยกรรมคอมพิวเตอร์ขั้นแนะนำ', 'Introduction to Computer Organization and Architecture', '3', '3', '3'),
(246556, 'SC363402', 'การบูรณาการการเรียนรู้กับการทำงานด้านการพัฒนาโปรแกรมประยุกต์บนอุปกรณ์เคลื่อนที่และเว็บ', 'Work-Integrated Learning in Mobile and Web Application Development', '9', '9', '9'),
(246557, 'SC363403', 'การบูรณาการการเรียนรู้กับการทำงานด้านระบบเครือข่ายความมั่นคงเทคโนโลยีสารสนเทศและอินเทอร์เน็ตของสรรพฯ', 'Work-Integrated Learning in Information Technology Systems, Network,Security', '9', '9', '9'),
(246558, 'SC362202', 'การพัฒนาโปรแกรมประยุกต์บนเว็บสำหรับอุปกรณ์เคลื่อนที่', 'Mobile Web Application Development', '3', '3', '3'),
(246559, 'SC362001', 'ระบบปฏิบัติการ', 'Operating Systems', '3', '3', '3'),
(246560, 'SC348808', 'ปฏิสัมพันธ์ระหว่างมนุษย์กับคอมพิวเตอร์และการสร้างภาพนิทัศน์จากสารสนเทศ', 'Human Computer Interaction and Information Visualization', '3', '3', '3'),
(246561, 'SC362003', 'เครือข่ายคอมพิวเตอร์ขั้นแนะนำ', 'Introduction to Computer Networking', '3', '3', '3'),
(246562, 'SC362002', 'ขั้นตอนวิธีและโครงสร้างข้อมูล', 'Algorithms and Data Structures', '3', '3', '3'),
(246563, 'SC362203', 'ระบบการจัดการเนื้อหา', 'Content Management System', '3', '3', '3'),
(246564, 'SC364771', 'โครงงานทางเทคโนโลยีสารสนเทศ 1', 'Information Technology Project I', '3', '3', '3'),
(246565, 'SC364772', 'โครงงานทางเทคโนโลยีสารสนเทศ 2', 'Information Technology Project II', '3', '3', '3'),
(246566, 'SC362301', 'ตรรกะดิจิทัลและระบบฝังตัว', 'Digital Logic and Embedded Systems', '3', '3', '3'),
(246567, 'SC364785', 'สหกิจศึกษาทางเทคโนโลยีสารสนเทศ', 'Co-Operative Education in Information Technology', '6', '6', '6'),
(246568, 'SC363762', 'ระเบียบวิธีวิจัย', 'Research Methodology', '3', '3', '3'),
(246569, 'SC362004', 'การเขียนโปรแกรมประยุกต์บนเว็บ', 'Web Application Programming', '3', '3', '3'),
(246570, 'SC362302', 'เครือข่ายไร้สายและเคลื่อนที่กับอินเทอร์เน็ตของสรรพสิ่ง', 'Wireless and Mobile Networks with Internet of Things', '3', '3', '3'),
(246571, 'SC362303', 'เทคโนโลยีสำหรับข้อมูลมหัต', 'Big Data Technology', '3', '3', '3'),
(246572, '342437', 'การพัฒนาโปรแกรมประยุกต์บนเว็บด้วยภาษาจาวา', 'JAVA WEB APPLICATION DEVELOPMENT', '3', '3', '3'),
(246573, 'SC363001', 'การวิเคราะห์และออกแบบระบบ', 'Systems Analysis and Design', '3', '3', '3'),
(246574, 'SC363002', 'การจัดการเชิงกลยุทธ์เทคโนโลยีสารสนเทศ', 'Strategic Management of Information Technology', '3', '3', '3'),
(246575, 'SC363003', 'วิชาชีพเทคโนโลยีสารสนเทศ', 'Information Technology Profession', '3', '3', '3'),
(246576, 'SC363101', 'การทดสอบซอฟต์แวร์และการประกันคุณภาพ', 'Software Testing and Quality Assurance', '3', '3', '3'),
(246577, 'SC363103', 'การเป็นผู้ประกอบการเทคโนโลยีสารสนเทศ', 'Information Technology Entrepreneurship', '3', '3', '3'),
(246578, 'SC328847', 'ใบรับรองร่วมกับอุตสาหกรรมในด้านเครือข่ายและความมั่นคง', 'Jointed industrial certification in network and security', '3', '3', '3'),
(246579, 'SC328851', 'กระบวนทัศน์ปัญญาประดิษฐ์', 'Paradigms of Artificial Intelligence', '3', '3', '3'),
(246580, 'SC328853', 'การเรียนรู้ของเครื่องสำหรับวิทยาการข้อมูล', 'Machine Learning for Data Science', '3', '3', '3'),
(246581, 'SC328854', 'การวิเคราะห์ข้อมูลขนาดใหญ่และการทำเหมืองข้อมูล', 'Big Data Analytic and Mining', '3', '3', '3'),
(246582, 'SC328856', 'วิธีการเชิงคำนวณสำหรับวิทยาการข้อมูล', 'Computational Methods for Data Science', '3', '3', '3'),
(246583, 'SC328857', 'การคำนวณเชิงวิวัฒนาการ', 'Evolutionary Computing', '3', '3', '3'),
(246584, 'SC328859', 'การประมวลผลภาษาธรรมชาติและการประยุกต์ใช้', 'Natural Language Processing and Applications', '3', '3', '3'),
(246585, 'SC328871', 'หัวเรื่องพิเศษทางวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ', 'Special Topics in Computer Science and Information Technology', '3', '3', '3'),
(246586, 'SC328892', 'สัมมนาทางวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ 2', 'Computer Science and Information Technology Seminar II', '2', '2', '2'),
(246587, 'SC328897', 'การศึกษาอิสระ', 'Independent Study', '1', '6', '6'),
(246588, 'SC363104', 'พาณิชย์อิเล็กทรอนิกส์และโปรแกรมประยุกต์', 'Electronic Commerce and Applications', '3', '3', '3'),
(246589, 'SC328841', 'เทคโนโลยีเครือข่ายคอมพิวเตอร์ขั้นสูง', 'Advanced Computer Network Technology', '3', '3', '3'),
(246590, 'SC328842', 'เทคโนโลยีไร้สาย เคลื่อนที่ อินเทอร์เน็ตของทุกสิ่ง', 'Wireless, Mobile, Internet of Thing Technology', '3', '3', '3'),
(246591, 'SC328824', 'การวิเคราะห์และออกแบบระบบขั้นสูง', 'Advanced System Analysis and Design', '3', '3', '3'),
(246592, 'SC328834', 'การจัดการเทคโนโลยีสารสนเทศ', 'Managing Information Technology', '3', '3', '3'),
(246593, 'SC328839', 'การทำเหมืองข้อมูลขั้นสูง', 'Advanced Data Mining', '3', '3', '3'),
(246594, 'SC328843', 'ความมั่นคงทางไซเบอร์และการเจาะระบบตามหลักจรรยา', 'Cyber Security and Ethical Hacking', '3', '3', '3'),
(246595, 'SC328846', 'ทฤษฎีสารสนเทศ', 'Information Theory', '3', '3', '3'),
(246596, 'SC328852', 'โครงข่ายประสาทเทียม', 'Artificial Neural Networks', '3', '3', '3'),
(246597, 'SC328855', 'การเรียนรู้เชิงลึกในการประมวลผลข้อมูล', 'Deep Learning for Data Processing', '3', '3', '3'),
(246598, 'SC328858', 'วิศวกรรมข้อมูล', 'Data Engineering', '3', '3', '3'),
(246599, 'SC328861', 'เทคโนโลยีการประมวลผลภาพ', 'Image Processing Technology', '3', '3', '3'),
(246600, 'SC328891', 'สัมมนาทางวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ 1', 'Computer Science and Information Technology Seminar I', '2', '2', '2'),
(246601, 'SC328898', 'วิทยานิพนธ์', 'Thesis', '1', '37', '37'),
(246602, 'SC328899', 'วิทยานิพนธ์', 'Thesis', '1', '12', '12'),
(246603, '342991', 'สัมมนาทางเทคโนโลยีสารสนเทศ 1', 'INFORMATION TECHNOLOGY SEMINAR I', '1', '1', '1'),
(246604, '342992', 'สัมมนาทางเทคโนโลยีสารสนเทศ 2', 'INFORMATION TECHNOLOGY SEMINAR II', '1', '1', '1'),
(246605, '342993', 'สัมมนาทางเทคโนโลยีสารสนเทศ 3', 'INFORMATION TECHNOLOGY SEMINAR III', '1', '1', '1'),
(246606, '342997', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '54', '54'),
(246607, '342998', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '48', '48'),
(246608, 'SC328831', 'กระบวนการพัฒนาซอฟต์แวร์ขั้นสูง', 'Advanced Software Process', '3', '3', '3'),
(246609, 'SC328832', 'กลยุทธ์ประสบการณ์ผู้ใช้', 'User Experience Strategy', '3', '3', '3'),
(246610, 'SC328833', 'หลักการของระบบฐานข้อมูลและการออกแบบ', 'Principles of Database System and Design', '3', '3', '3'),
(246611, 'SC328835', 'การจัดการฐานข้อมูลสมัยใหม่', 'Modern Database Management', '3', '3', '3'),
(246612, 'SC328836', 'เว็บแบบสื่อความหมายและวิศวกรรมออนโทโลยี', 'Semantic Web and Ontology Engineering', '3', '3', '3'),
(246613, 'SC328837', 'การพิจารณาธุรกิจโดยใช้เทคโนโลยีไร้สายยุคที่ห้า อินเทอร์เน็ตของสรรพสิ่ง และปัญญาประดิษฐ์', 'Business Consideration for 5G IoT and Artificial Intelligence', '3', '3', '3'),
(246614, 'SC328838', 'ระบบธุรกิจอัจฉริยะขั้นสูง', 'Advanced Business Intelligence', '3', '3', '3'),
(246615, 'SC328844', 'เทคโนโลยีระบบขนานและกระจาย', 'Parallel and Distributed System Technology', '3', '3', '3'),
(246616, 'SC328845', 'ระบบฝังตัวและเทคโนโลยีหุ่นยนต์', 'Embedded Systems and Robotics Technology', '3', '3', '3'),
(246617, 'SC363105', 'การปรับปรุงกระบวนการซอฟต์แวร์', 'Software Process Improvement', '3', '3', '3'),
(246618, 'SC363106', 'ระบบการวางแผนทรัพยากรองค์กร', 'Enterprise Resource Planning System', '3', '3', '3'),
(246619, 'SC363201', 'เทคโนโลยีเอ็กซ์เอ็มแอลและการประยุกต์', 'XML Technologies and Applications', '3', '3', '3'),
(246620, 'SC363202', 'เทคโนโลยีเว็บแบบสื่อความหมาย', 'Semantic Web Technology', '3', '3', '3'),
(246621, 'SC311003', 'การเขียนโปรแกรมเชิงวัตถุ', 'OBJECT – ORIENTED PROGRAMMING', '3', '3', '3'),
(246622, 'SC311004', 'สถาปัตยกรรมระบบคอมพิวเตอร์', 'COMPUTER SYSTEMS ARCHITECTURE', '3', '3', '3'),
(246623, 'SC311301', 'การพัฒนาโปรแกรมประยุกต์บนเว็บ', 'WEB APPLICATION DEVELOPMENT', '3', '3', '3'),
(246624, 'SC348803', 'การคำนวณที่ได้แรงบันดาลใจจากธรรมชาติ', 'Nature-Inspired Computing', '3', '3', '3'),
(246625, 'SC312105', 'วิศวกรรมข้อมูลขั้นพื้นฐาน', 'BASICS OF DATA ENGINEERING', '3', '3', '3'),
(246626, 'SC312104', 'วิทยาการข้อมูลขั้นแนะนำ', 'INTRODUCTION TO DATA SCIENCE', '3', '3', '3'),
(246627, 'SC338887', 'สถิติศาสตร์เชิงพื้นที่', 'SPATIAL STATISTICS', '3', '3', '3'),
(246628, 'SC320001', 'เทคโนโลยีสารสนเทศและการสื่อสารขั้นแนะนำ', 'INTRODUCTION TO INFORMATION AND COMMUNICATION TECHNOLOGY', '3', '3', '3'),
(246629, 'SC313304', 'เครือข่ายเซ็นเซอร์ไร้สาย', 'WIRELESS SENSOR NETWORKS', '3', '3', '3'),
(246630, 'SC313305', 'คลาวน์คอมพิวติ้งขั้นนำ', 'INTRODUCTION TO CLOUD COMPUTING', '3', '3', '3'),
(246631, 'SC313306', 'อินเตอร์เน็ตของสรรพสิ่ง', 'INTERNET OF THINGS', '3', '3', '3'),
(246632, 'SC313402', 'การเข้ารหัสและความมั่นคงระบบเครือข่าย', 'CRYPTOGRAPHY AND NETWORK SECURITY', '3', '3', '3'),
(246633, 'SC313403', 'ความมั่นคงสารสนเทศและไซเบอร์', 'INFORMATION AND CYBER SECURITY', '3', '3', '3'),
(246634, 'SC313404', 'การบริหารระบบคอมพิวเตอร์และเครือข่าย', 'COMPUTER SYSTEM AND NETWORK ADMINISTRATION', '3', '3', '3'),
(246635, 'SC313501', 'หลักภาษาโปรแกรม', 'PRINCIPLES OF PROGRAMMING LANGUAGES', '3', '3', '3'),
(246636, 'SC313502', 'การออกแบบภาษาโปรแกรม', 'PROGRAMMING LANGUAGE DESIGN', '3', '3', '3'),
(246637, 'SC313503', 'การเขียนซอฟต์แวร์อัตโนมัติ', 'AUTOMATIC PROGRAMMING', '3', '3', '3'),
(246638, 'SC313504', 'การประกันคุณภาพซอฟต์แวร์', 'SOFTWARE QUALITY ASSURANCE', '3', '3', '3'),
(246639, 'SC313505', 'การปรับปรุงและประเมินกระบวนการซอฟต์แวร์', 'SOFTWARE PROCESS APPRAISALS AND IMPROVEMENT', '3', '3', '3'),
(246640, 'SC313761', 'สัมมนาทางวิทยาการคอมพิวเตอร์', 'SEMINAR IN COMPUTER SCIENCE', '1', '1', '1'),
(246641, 'SC313762', 'ระเบียบวิธีวิจัย', 'RESEARCH METHODOLOGY', '3', '3', '3'),
(246642, 'SC411224', 'ภาษาอังกฤษเทคนิคสำหรับวิทยาศาสตร์และเทคโนโลยี 2', 'TECHNICAL ENGLISH FOR SCIENCES AND TECHNOLOGY II', '3', '3', '3'),
(246643, 'SC310002', 'โครงสร้างข้อมูล', 'DATA STRUCTURES', '3', '3', '3'),
(246644, 'SC338872', 'ทรัพยากรที่ดินและสิ่งแวดล้อม', 'LAND RESOURCES AND ENVIRONMENT', '3', '3', '3'),
(246645, 'SC338883', 'ระบบการจัดการฐานข้อมูลและมาตรฐานระบบสารสนเทศภูมิศาสตร์', 'DATABASE MANAGEMENT SYSTEM AND GEOGRAPHIC INFORMATION SYSTEM STANDARD', '3', '3', '3'),
(246646, 'SC337892', 'สัมมนาทางการรับรู้จากระยะไกลและระบบสารสนเทศภูมิศาสตร์ 2', 'REMOTE SENSING AND GEOGRAPHICIINFORMATION SYSTEM SEMINAR II', '1', '1', '1'),
(246647, 'SC337897', 'การศึกษาอิสระ', 'INDEPENDENT STUDY', '6', '6', '6'),
(246648, 'SC337899', 'วิทยานิพนธ์', 'THESIS', '1', '12', '12'),
(246649, 'SC338863', 'การรับรู้จากระยะไกลไมโครเวฟ', 'MICROWAVE REMOTE SENSING', '3', '3', '3'),
(246650, 'SC348701', 'แบบจำลองข้อมูลและการจัดการข้อมูล', 'Data Modeling and Management', '3', '3', '3'),
(246651, '342264', 'เทคโนโลยีเคลื่อนที่และไร้สาย', 'MOBILE AND WIRELESS TECHNOLOGY', '3', '3', '3'),
(246652, '342266', 'การพัฒนาโปรแกรมประยุกต์บนเว็บสำหรับอุปกรณ์เคลื่อน', 'MOBILE WEB APPLICATION DEVELOPMENT', '3', '3', '3'),
(246653, 'SC312103', 'การค้นคืนสารสนเทศ', 'INFORMATION RETRIEVAL', '3', '3', '3'),
(246654, 'SC312301', 'เครือข่ายการสื่อสารไร้สายและอุปกรณ์เคลื่อนที่', 'WIRELESS AND MOBILE COMMUNICATION NETWORKS', '3', '3', '3'),
(246655, 'SC312302', 'เทคโนโลยีการออกแบบเว็บ', 'WEB DESIGN TECHNOLOGIES', '3', '3', '3'),
(246656, 'SC312303', 'การพัฒนาแอปพลิเคชันบนอุปกรณ์เคลื่อนที่', 'MOBILE APPLICATION DEVELOPMENT', '3', '3', '3'),
(246657, 'SC312401', 'พาณิชย์อิเล็กทรอนิกส์และโปรแกรมประยุกต์', 'ELECTRONIC COMMERCE AND APPLICATIONS', '3', '3', '3'),
(246658, 'SC311001', 'วิทยาการคอมพิวเตอร์หลักมูล', 'FUNDAMENTALS OF COMPUTER SCIENCE', '3', '3', '3'),
(246659, 'SC311002', 'การเขียนโปรแกรมเชิงโครงสร้างสำหรับวิทยาการคอมพิวเตอร์', 'STRUCTURED PROGRAMMING FOR COMPUTER SCIENCE', '3', '3', '3'),
(246660, 'SC331021', 'เทคโนโลยีสารสนเทศขั้นพื้นฐาน', 'BASICS OF INFORMATION TECHNOLOGY', '3', '3', '3'),
(246661, 'SC331001', 'หลักมูลภูมิสารสนเทศศาสตร์', 'FUNDAMENTALS OF GEO-INFORMATICS', '3', '3', '3'),
(246662, 'SC338884', 'ระบบสารสนเทศภูมิศาสตร์บนอินเตอร์เน็ต', 'INTERNET GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246663, 'SC338888', 'ระบบสารสนเทศภูมิศาสตร์สำหรับการวางผังเมือง', 'GEOGRAPHIC INFORMATION SYSTEM FOR URBAN PLANNING', '3', '3', '3'),
(246664, 'SC338894', 'ปัญหาพิเศษทางภูมิสารสนเทศศาสตร์', 'SPECIAL PROBLEMS IN GEO-INFORMATICS', '3', '3', '3'),
(246665, 'SC313303', 'การพัฒนาโปรแกรมประยุกต์สำหรับองค์กร', 'ENTERPRISE APPLICATION DEVELOPMENT', '3', '3', '3'),
(246666, 'SC312501', 'การเขียนโปรแกรมภาษาจาวาขั้นสูง', 'ADVANCE PROGRAMMING IN JAVA', '3', '3', '3'),
(246667, 'SC310001', 'การเขียนโปรแกรมคอมพิวเตอร์ 1', 'COMPUTER PROGRAMMING I', '3', '3', '3'),
(246668, 'SC333302', 'การประยุกต์ทำแผนที่บนเว็บ', 'WEB MAPPING APPLICATION', '3', '3', '3'),
(246669, 'SC333303', 'การออกแบบและมาตรฐานของฐานข้อมูลเชิงพื้นที่', 'DESIGN AND STANDARD GEO-SPATIAL DATABASE', '3', '3', '3'),
(246670, 'SC332211', 'รูปถ่ายทางอากาศและการแปลความหมาย', 'AERIAL PHOTOGRAPH AND INTERPRETATION', '3', '3', '3'),
(246671, 'SC331032', 'ภูมิศาสตร์กายภาพ', 'PHYSICAL GEOGRAPHY\nPHYSICAL', '3', '3', '3'),
(246672, 'SC312005', 'เครือข่ายคอมพิวเตอร์', 'COMPUTER NETWORKS', '3', '3', '3'),
(246673, 'SC312006', 'การวิเคราะห์ขั้นตอนวิธี', 'ANALYSIS OF ALGORITHM', '3', '3', '3'),
(246674, 'SC312101', 'การเรียนรู้เชิงเครื่องจักรสำหรับวิทยาการข้อมูล', 'MACHINE LEARNING FOR DATA SCIENCE', '3', '3', '3'),
(246675, 'SC312102', 'การจัดการความรู้', 'KNOWLEDGE MANAGEMENT', '3', '3', '3'),
(246676, 'SC312001', 'โครงสร้างข้อมูล', 'DATA STRUCTURES', '3', '3', '3'),
(246677, 'SC312002', 'การโต้ตอบระหว่างมนุษย์และคอมพิวเตอร์', 'HUMAN COMPUTER INTERACTION', '3', '3', '3'),
(246678, 'SC312201', 'พื้นฐานการเขียนโปรแกรมเกม', 'BASIC OF GAME PROGRAMMING', '3', '3', '3'),
(246679, 'SC311503', 'การเขียนโปรแกรมสคริปต์', 'SCRIPT PROGRAMMING', '3', '3', '3'),
(246680, '340728', 'แนวคิด ทฤษฎี และการประยุกต์ข้อมูลขนาดใหญ่', 'BIG DATA CONCEPTS, THEORIES AND APPLICATIONS', '3', '3', '3'),
(246681, '342267', 'การเขียนโปรแกรมอุปกรณ์เคลื่อนที่', 'MOBILE DEVICE PROGRAMMING', '3', '3', '3'),
(246682, 'SC312003', 'ระบบจัดการฐานข้อมูลและการออกแบบฐานข้อมูล', 'DATABASE MANAGEMENT SYSTEM AND DATABASE DESIGN', '3', '3', '3'),
(246683, 'SC312004', 'ปฏิบัติการระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN LABORATORY', '1', '1', '1'),
(246684, 'SC363102', 'ระบบธุรกิจอัจฉริยะ', 'Business Intelligence System', '3', '3', '3'),
(246685, 'SC334703', 'โครงงานวิจัยทางภูมิสารสนเทศศาสตร์', 'RESEARCH PROJECT IN GEO-INFORMATICS', '3', '3', '3'),
(246686, 'SC310003', 'ระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN', '3', '3', '3'),
(246687, 'SC310004', 'ปฎิบัติการระบบฐานข้อมูลและการออกแบบ', 'DATABASE SYSTEMS AND DESIGN LABORATORY', '1', '1', '1'),
(246688, 'SC312401', 'การพาณิชย์อิเล็กทรอนิกส์', 'ELECTRONIC COMMERCE', '3', '3', '3'),
(246689, 'SC314774', 'โครงงานวิทยาการคอมพิวเตอร์ 1', 'COMPUTER SCIENCE PROJECT I', '3', '3', '3'),
(246690, 'SC348701', 'แบบจำลองข้อมูลและการจัดการข้อมูล', 'Data Modeling and Management', '2', '2', '2'),
(246691, 'SC348702', 'การเรียนรู้ของเครื่อง', 'Machine Learning', '3', '3', '3'),
(246692, 'SC348703', 'การเขียนโปรแกรมคอมพิวเตอร์สำหรับวิทยาการข้อมูลและปัญญาประดิษฐ์', 'Computer Programming for Data Science and Artificial Intelligence', '2', '2', '2'),
(246693, 'SC310006', 'การพัฒนาโปรแกรมประยุกต์สำหรับอุปกรณ์เคลื่อนที่และเว็บ', 'Mobile and Web Application Development', '3', '3', '3'),
(246694, 'SC328781', 'ระเบียบวิธีวิจัย', 'Research Methodology', '3', '3', '3'),
(246695, 'SC328811', 'ภาษาโปรแกรม', 'Programming Languages', '3', '3', '3'),
(246696, 'SC328812', 'การพัฒนาโปรแกรมประยุกต์ข้ามแพลตฟอร์ม', 'Cross-Platform Application Development', '3', '3', '3'),
(246697, 'SC328813', 'การพัฒนาโปรแกรมประยุกต์บนเว็บขั้นสูง', 'Advanced Web Application Development', '3', '3', '3'),
(246698, 'SC328821', 'ทฤษฎีการคำนวณ', 'Theory of Computation', '3', '3', '3'),
(246699, 'SC328822', 'การวิเคราะห์และออกแบบขั้นตอนวิธี', 'Algorithm Analysis and Design', '3', '3', '3'),
(246700, 'SC329971', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ 1', 'Special Topics in Computer Science and Information Technology I', '3', '3', '3'),
(246701, 'SC329972', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ 2', 'Special Topics in Computer Science and Information Technology II', '3', '3', '3'),
(246702, 'SC329973', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ 3', 'Special Topics in Computer Science and Information Technology III', '3', '3', '3'),
(246703, 'SC329981', 'ระเบียบวิธีวิจัย', 'Research Methodology', '3', '3', '3'),
(246704, 'SC329991', 'สัมมนาดุษฎีนิพนธ์ 1', 'Dissertation Seminar I', '1', '1', '1'),
(246705, 'SC329992', 'สัมมนาดุษฎีนิพนธ์ 2', 'Dissertation Seminar II', '1', '1', '1'),
(246706, 'SC329993', 'สัมมนาดุษฎีนิพนธ์ 3', 'Dissertation Seminar III', '1', '1', '1'),
(246707, 'SC329996', 'ดุษฎีนิพนธ์', 'Dissertation', '1', '54', '54'),
(246708, 'SC329997', 'ดุษฎีนิพนธ์', 'Dissertation', '1', '72', '72'),
(246709, 'SC329998', 'ดุษฎีนิพนธ์', 'Dissertation', '1', '42', '42'),
(246710, 'SC329999', 'ดุษฎีนิพนธ์', 'Dissertation', '1', '48', '48'),
(246711, 'SC320002', 'ธุรกิจอัจฉริยะ: การจัดการกระบวนการอย่างอัจฉริยะ', 'Business Intelligence: Smart Process Management', '6', '6', '6'),
(246712, 'SC310005', 'การประยุกต์ปัญญาประดิษฐ์และการเรียนรู้ของเครื่อง', 'Artificial Intelligence and Machine Learning Application', '3', '3', '3'),
(246713, 'SC332002', 'ระบบสารสนเทศภูมิศาสตร์ขั้นแนะนำ', 'INTRODUCTION TO GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246714, 'SC332101', 'ภูมิสารสนเทศศาสตร์สำหรับชีวิตประจำวัน', 'GEO-INFORMATICS FOR DAILY LIFE', '2', '2', '2'),
(246715, 'SC332011', 'หลักมูลการรับรู้จากระยะไกล', 'FUNDAMENTALS OF REMOTE SENSING', '3', '3', '3'),
(246716, 'SC332131', 'ระบบนิเวศป่าไม้และการจัดการ', 'FOREST ECOSYSTEMS AND MANAGEMENT', '3', '3', '3'),
(246717, 'SC331031', 'ธรณีวิทยาขั้นแนะนำ', 'INTRODUCTION TO GEOLOGY', '2', '2', '2'),
(246718, 'SC333301', 'การเขียนโปรแกรมในระบบสารสนเทศภูมิศาสตร์', 'PROGRAMMING IN GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246719, 'SC348705', 'ธุรกิจอัจฉริยะและการวิเคราะห์', 'Business Intelligence and Analytics', '3', '3', '3'),
(246720, 'SC348801', 'การแทนความรู้', 'Knowledge Representation', '3', '3', '3'),
(246721, 'SC348804', 'การหาค่าที่เหมาะสมแบบหลายเกณฑ์และการวิเคราะห์การตัดสินใจ', 'Multicriteria Optimization and Decision Analysis', '3', '3', '3'),
(246722, 'SC348805', 'ภาษาศาสตร์คอมพิวเตอร์', 'Computation Linguistics', '3', '3', '3'),
(246723, 'SC348806', 'แนวโน้มในการเรียนรู้ของเครื่อง', 'Recent Trends in Machine Learning', '3', '3', '2'),
(246724, 'SC348807', 'การวิเคราะห์เครือข่ายสังคม', 'Social Network Analysis', '3', '3', '3'),
(246725, 'SC348809', 'ระบบกระจาย', 'Distributed Systems', '3', '3', '3'),
(246726, 'SC348811', 'การวิเคราะห์ข้อมูลเชิงพื้นที่และเชิงเวลา', 'Spatial Temporal Data Analysis', '3', '3', '3'),
(246727, 'SC348897', 'การศึกษาอิสระ', 'Independent Study', '6', '6', '6'),
(246728, 'SC348898', 'วิทยานิพนธ์', 'Thesis', '1', '38', '38'),
(246729, 'SC332103', 'ระบบดาวเทียมนำทางสากลขั้นแนะนำ', 'INTRODUCTION TO GLOBAL NAVIGATION SATELLITE SYSTEM', '3', '3', '3'),
(246730, '322444', 'การวิเคราะห์ข้อมูลขนาดใหญ่โดยแรพพิดไมเนอร์', 'BIG DATA ANALYTICS USING RAPIDMINER', '3', '3', '3'),
(246731, 'SC337862', 'การประมวลผลภาพเชิงเลข', 'DIGITAL IMAGE PROCESSING', '3', '3', '3'),
(246732, 'SC337891', 'สัมมนาทางการรับรู้จากระยะไกลและระบบสารสนเทศ สัมมนาทางการรับรู้จากระยะไกลและระบบสารสนเทศภูมิศาสตร์ 1', 'REMOTE SENSING AND GEOGRAPHIC INFORMATION SYSTEM SEMINAR I', '3', '1', '1'),
(246733, 'SC314785', 'สหกิจศึกษาทางวิทยาการคอมพิวเตอร์', 'CO-OPERATIVE EDUCATION IN COMPUTER SCIENCE', '6', '6', '6'),
(246734, 'SC314775', 'โครงงานวิทยาการคอมพิวเตอร์ 2', 'COMPUTER SCIENCE PROJECT II', '3', '3', '3'),
(246735, 'SC322301', 'ตรรกะดิจิทัลและระบบฝังตัว', 'DIGITAL LOGIC AND EMBEDDED SYSTEMS', '3', '3', '3'),
(246736, 'SC323004', 'การบริหารโครงการ', 'PROJECT MANAGEMENT', '3', '3', '3'),
(246737, 'SC323107', 'การเป็นผู้ประกอบการเทคโนโลยีสารสนเทศ', 'INFORMATION TECHNOLOGY ENTREPRENEURSHIP', '3', '3', '3'),
(246738, 'SC348704', 'ปัญญาประดิษฐ์', 'Artificial Intelligence', '3', '3', '3'),
(246739, 'SC348810', 'การพัฒนาซอฟต์แวร์และการจัดการโครงการสำหรับวิทยาการข้อมูลและปัญญาประดิษฐ์', 'Software Development and Project Management for Data Science and Artificial Intelligence', '3', '3', '3'),
(246740, 'SC313103', 'การวิเคราะห์วิทยาข้อมูลและการทำเหมืองข้อมูล', 'DATA ANALYTICS AND MINING', '3', '3', '3'),
(246741, 'SC319911', 'การออกแบบภาษาโปรแกรม', 'PROGRAMMING LANGUAGE DESIGN', '3', '3', '3'),
(246742, 'SC319912', 'การเขียนโปรแกรมแบบขนาน', 'PARALLEL PROGRAMMING', '3', '3', '3'),
(246743, 'SC319921', 'คณิตศาสตร์ดิสครีตขั้นสูง', 'ADVANCED DISCRETE MATHEMATICS', '3', '3', '3'),
(246744, 'SC319922', 'ทฤษฎีการคำนวณ', 'THEORY OF COMPUTATION', '3', '3', '3'),
(246745, 'SC319923', 'การออกแบบและวิเคราะห์ขั้นตอนวิธี', 'DESIGN AND ANALYSIS OF ALGORITHMS', '3', '3', '3'),
(246746, 'SC319924', 'การวิเคราะห์เชิงตัวเลขและการประยุกต์', 'NUMERICAL ANALYSIS AND APPLICATIONS', '3', '3', '3'),
(246747, 'SC319925', 'ทฤษฎีของระบบปฏิบัติการ', 'THEORY OF OPERATING SYSTEM', '3', '3', '3'),
(246748, 'SC319926', 'วิธีสถิติแบบหลายตัวแปร', 'MULTIVARIATE STATISITCAL METHODS', '3', '3', '3'),
(246749, 'SC319931', 'ระบบฐานข้อมูล', 'DATABASE SYSTEMS', '3', '3', '3'),
(246750, 'SC319932', 'วิธีวิทยาซอฟต์แวร์', 'SOFTWARE METHODOLOGY', '3', '3', '3'),
(246751, 'SC319933', 'การออกแบบเชิงวัตถุ', 'OBJECT-ORIENTED DESIGN', '3', '3', '3'),
(246752, 'SC319934', 'การจัดการโครงการซอฟต์แวร์ขนาดใหญ่', 'LARGE SCALE SOFTWARE PROJECT MANAGEMENT', '3', '3', '3'),
(246753, 'SC319941', 'การจัดระบบคอมพิวเตอร์', 'COMPUTER SYSTEM ORGANIZATION', '3', '3', '3'),
(246754, 'SC319942', 'เครือข่ายคอมพิวเตอร์', 'COMPUTER NETWORKS', '3', '3', '3'),
(246755, 'SC319943', 'การออกแบบระบบดิจิทัลที่ทนต่อความผิดพร่อง', 'DESIGN OF FAULT-TOLERANT DIGITAL SYSTEMS', '3', '3', '3'),
(246756, 'SC319994', 'สัมมนาดุษฎีนิพนธ์ 4', 'DISSERTATION SEMINAR IV', '1', '1', '1'),
(246757, 'SC319944', 'การวิเคราะห์ระบบคอมพิวเตอร์', 'COMPUTER SYSTEM ANALYSIS', '3', '3', '3'),
(246758, 'SC319945', 'ระบบคอมพิวเตอร์แบบกระจาย', 'DISTRIBUTED COMPUTER SYSTEMS', '3', '3', '3'),
(246759, 'SC319946', 'ขั้นตอนวิธีเชิงตัวเลขแบบขนาน', 'PARALLEL NUMERICAL ALGORITHMS', '3', '3', '3'),
(246760, 'SC319951', 'กระบวนทัศน์ปัญญาประดิษฐ์', 'PARADIGMS OF ARTIFICIAL INTELLIGENCE', '3', '3', '3'),
(246761, 'SC319971', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 1', 'SPECIAL TOPICS IN COMPUTER SCIENCE I', '3', '3', '3'),
(246762, 'SC319972', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 2', 'SPECIAL TOPICS IN COMPUTER SCIENCE II', '3', '3', '3'),
(246763, 'SC319973', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 3', 'SPECIAL TOPICS IN COMPUTER SCIENCE III', '3', '3', '3'),
(246764, 'SC319974', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 4', 'SPECIAL TOPICS IN COMPUTER SCIENCE IV', '3', '3', '3'),
(246765, 'SC319975', 'หัวข้อพิเศษทางวิทยาการคอมพิวเตอร์ 5', 'SPECIAL TOPICS IN COMPUTER SCIENCE V', '3', '3', '3'),
(246766, 'SC319981', 'ระเบียบวิธีวิจัย', 'RESEARCH METHODOLOGY', '2', '2', '2'),
(246767, 'SC319991', 'สัมมนาดุษฎีนิพนธ์ 1', 'DISSERTATION SEMINAR I', '1', '1', '1'),
(246768, 'SC319992', 'สัมมนาดุษฎีนิพนธ์ 2', 'DISSERTATION SEMINAR II', '1', '1', '1'),
(246769, 'SC319993', 'สัมมนาดุษฎีนิพนธ์ 3', 'DISSERTATION SEMINAR III', '1', '1', '1'),
(246770, 'SC319996', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '48', '48'),
(246771, 'SC319997', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '72', '72'),
(246772, 'SC319998', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '36', '36'),
(246773, 'SC319999', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '48', '48'),
(246774, 'SC337961', 'การรับรู้จากระยะไกลขั้นสูง', 'ADVANCED REMOTE SENSING', '3', '3', '3'),
(246775, 'SC337981', 'ระบบสารสนเทศภูมิศาสตร์ขั้นสูง', 'ADVANCED GEOGRAPHIC INFORMATION SYSTEM', '3', '3', '3'),
(246776, 'SC337991', 'สัมมนาดุษฎีนิพนธ์ 1', 'DISSERTATION SEMINAR I', '3', '3', '1'),
(246777, 'SC337992', 'สัมมนาดุษฎีนิพนธ์ 2', 'DISSERTATION SEMINAR II', '3', '3', '1'),
(246778, 'SC337993', 'สัมมนาดุษฎีนิพนธ์ 3', 'DISSERTATION SEMINAR III', '3', '3', '1'),
(246779, 'SC337996', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '48', '48'),
(246780, 'SC337997', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '72', '72'),
(246781, 'SC337998', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '36', '36'),
(246782, 'SC337999', 'ดุษฎีนิพนธ์', 'DISSERTATION', '1', '48', '48'),
(246783, '342496', 'โครงงานคอมพิวเตอร์ 2', 'COMPUTER PROJECT II', '3', '3', '3'),
(246784, 'SC313004', 'วิศวกรรมซอฟต์แวร์', 'SOFTWARE ENGINEERING', '3', '3', '3'),
(246785, 'SC313005', 'ทฤษฎีการคำนวณ', 'THEORY OF COMPUTATION', '3', '3', '3'),
(246786, 'SC313006', 'ปัญญาประดิษฐ์', 'ARTIFICIAL INTELLIGENCE', '3', '3', '3'),
(246787, 'SC313101', 'วิทยาการคำนวณ', 'COMPUTATIONAL SCIENCE', '3', '3', '3'),
(246788, 'SC313102', 'โครงข่ายประสาท', 'NEURAL NETWORKS', '3', '3', '3'),
(246789, 'SC313103', 'การวิเคราะห์วิทยาข้อมูลและการทำเหมืองข้อมูล', 'DATA ANALYTICS AND MINING', '3', '3', '3'),
(246790, 'SC313107', 'การวิเคราะห์ข้อมูลขนาดใหญ่', 'BIG DATA ANALYTICS', '3', '3', '3'),
(246791, 'SC313201', 'การประมวลผลภาพดิจิทัล', 'DIGITAL IMAGE PROCESSING', '3', '3', '3'),
(246792, 'SC313302', 'การเชื่อมต่ออินเตอร์เน็ต', 'INTERNETWORKING', '3', '3', '3'),
(246793, 'SC333033', 'ภูมิศาสตร์ของดิน', 'SOIL GEOGRAPHY', '3', '3', '3'),
(246794, 'SC334003', 'ภูมิสารสนเทศศาสตร์ประยุกต์', 'APPLIED GEO-INFORMATICS', '3', '3', '3'),
(246795, 'SC332102', 'หลักการทำแผนที่', 'PRINCIPLES OF CARTOGRAPHY', '2', '2', '2'),
(246796, 'SC332213', 'การสำรวจรังวัดและระบบกำหนดตำแหน่งบนโลก', 'SURVEYING AND GLOBAL POSITIONING SYSTEM', '3', '3', '3'),
(246797, 'SC333201', 'การวิเคราะห์เชิงพื้นที่', 'GEOSPATIAL ANALYSIS', '3', '3', '3'),
(246798, 'SC333012', 'การประมวลผลเชิงเลขของข้อมูลจากดาวเทียม', 'DIGITAL PROCESSING OF SATELLITE DATA', '3', '3', '3'),
(246799, 'SC333212', 'หลักการโฟโตแกรมเมตรี', 'PRINCIPLES OF PHOTOGRAMMETRY', '3', '3', '3'),
(246800, 'SC333214', 'การรับรู้จากระยะไกลด้วยคลื่นไมโครเวฟขั้นแนะนำ', 'INTRODUCTION TO MICROWAVE REMOTE SENSING', '3', '3', '3'),
(246801, 'SC333034', 'การวางแผนการใช้ที่ดินขั้นแนะนำ', 'INTRODUCTION TO LAND USE PLANNING', '3', '3', '3'),
(246802, 'SC333202', 'การวางผังเมืองและภูมิสารสนเทศศาสตร์', 'CITY PLANNING AND GEO-INFORMATICS', '3', '3', '3'),
(246803, 'SC333701', 'สัมมนาทางภูมิสารสนเทศศาสตร์', 'SEMINAR IN GEO-INFORMATICS', '3', '3', '1'),
(246804, 'SC333702', 'ระเบียบวิธีวิจัยทางภูมิสารสนเทศศาสตร์', 'RESEARCH METHODOLOGY IN GEO-INFORMATICS', '3', '3', '3'),
(246805, 'CP353203', 'การพัฒนาโปรแกรมประยุกต์เสมือนจริง', 'Virtual Reality Application Development', '3', '3', '3'),
(246806, 'CP378811', 'ระบบดาวเทียมนาทางสากล', 'Global Navigation Satellite System', '3', '3', '3'),
(246807, 'CP378821', 'หลักการการรับรู้จากระยะไกล', 'Principles of Remote Sensing', '3', '3', '3'),
(246808, 'CP378831', 'ระบบสารสนเทศภูมิศาสตร์', 'Geographic Information System', '3', '3', '3'),
(246809, 'CP378891', 'สัมมนาทางภูมิสารสนเทศศาสตร์ 1', 'Geo-Informatics Seminar I', '1', '1', '1'),
(246810, 'CP378892', 'สัมมนาทางภูมิสารสนเทศศาสตร์ 2', 'Geo-Informatics Seminar II', '1', '1', '1'),
(246811, 'CP378897', 'การศึกษาอิสระ', 'Independent Study', '6', '6', '6'),
(246812, 'CP353204', 'การพัฒนาโปรแกรมประยุกต์บนเว็บ', 'Web Application Development', '3', '3', '3'),
(246813, 'CP353301', 'การเชื่อมต่ออินเทอร์เน็ต', 'Internetworking', '3', '3', '3'),
(246814, 'CP353302', 'ความมั่นคงสารสนเทศและไซเบอร์', 'Information and Cyber Security', '3', '3', '3'),
(246815, 'CP353303', 'วิทยาการเข้ารหัสลับและความมั่นคงระบบเครือข่าย', 'Cryptography and Network Security', '3', '3', '3'),
(246816, 'CP353304', 'การวางระบบอัตโนมัติแพลตฟอร์มสมาร์ต', 'Smart Platform Automation', '3', '3', '3'),
(246817, 'CP353305', 'อินเทอร์เน็ตของสรรพสิ่ง', 'Internet of Things', '3', '3', '3'),
(246818, 'CP353306', 'วิศวกรรม DevOps', 'DevOps Engineering', '3', '3', '3'),
(246819, 'CP353761', 'สัมมนาทางวิทยาการคอมพิวเตอร์', 'Seminar in Computer Science', '1', '1', '1'),
(246820, 'CP353764', 'ระเบียบวิธีวิจัย', 'Research Methodology', '3', '3', '3'),
(246821, 'CP353796', 'การฝึกงานทางวิทยาการคอมพิวเตอร์', 'Internship in Computer Science', '3', '3', '3'),
(246822, 'CP354771', 'โครงงานทางวิทยาการคอมพิวเตอร์ 1', 'Computer Science Project I', '3', '3', '3'),
(246823, 'CP354772', 'โครงงานทางวิทยาการคอมพิวเตอร์ 2', 'Computer Science Project II', '3', '3', '3'),
(246824, 'CP354785', 'สหกิจศึกษาทางวิทยาการคอมพิวเตอร์', 'Co-Operative Education in Computer Science', '6', '6', '6'),
(246825, 'CP350001', 'การเขียนโปรแกรมคอมพิวเตอร์ 1', 'Computer Programming I', '3', '3', '3'),
(246826, 'CP350002', 'โครงสร้างข้อมูล', 'Data Structure', '3', '3', '3'),
(246827, 'CP371041', 'ภูมิศาสตร์กายภาพ', 'Physical Geography', '3', '3', '3'),
(246828, 'CP372002', 'ระบบสารสนเทศภูมิศาสตร์ขั้นแนะนำ', 'Introduction to Geographic Information System', '3', '3', '3'),
(246829, 'CP372011', 'หลักมูลการรับรู้จากระยะไกล', 'Fundamentals of Remote Sensing', '3', '3', '3'),
(246830, 'CP372012', 'การประมวลผลเชิงเลขของข้อมูลจากดาวเทียม', 'Digital Processing of Satellite Data', '3', '3', '3'),
(246831, 'CP372021', 'ระบบดาวเทียมนาทางสากลขั้นแนะนำ', 'Introduction to Global Navigation Satellite System', '3', '3', '3'),
(246832, 'CP373003', 'หลักการทำแผนที่', 'Principles of Cartography', '3', '3', '3'),
(246833, 'CP373004', 'ภูมิสารสนเทศศาสตร์ประยุกต์', 'Applied Geo-informatics', '3', '3', '3'),
(246834, 'CP373032', 'การเขียนโปรแกรมในระบบสารสนเทศภูมิศาสตร์', 'Programming in Geographic Information System', '3', '3', '3'),
(246835, 'CP373042', 'การวางแผนการใช้ที่ดินขั้นแนะนำ', 'Introduction to Land Use Planning', '3', '3', '3'),
(246836, 'CP373101', 'การวางผังเมืองและภูมิสารสนเทศศาสตร์', 'City Planning and Geo-informatics', '3', '3', '3'),
(246837, 'CP373111', 'การรับรู้จากระยะไกลด้วยคลื่นไมโครเวฟขั้นแนะนำ', 'Introduction to Microwave Remote Sensing', '3', '3', '3'),
(246838, 'CP373112', 'การทำแผนที่ด้วยอากาศยานไร้คนขับ', 'Unmanned Aerial Vehicle Mapping', '3', '3', '3'),
(246839, 'CP373122', 'การสารวจรังวัดเบื้องต้น', 'Introduction to Surveying', '3', '3', '3'),
(246840, 'CP373201', 'การวิเคราะห์เชิงพื้นที่', 'Geospatial Analysis', '3', '3', '3'),
(246841, 'CP373231', 'การประยุกต์ทาแผนที่บนเว็บ', 'Web mapping application', '3', '3', '3'),
(246842, 'CP373232', 'การจัดการฐานข้อมูลเชิงพื้นที่', 'Spatial Database Management', '3', '3', '3'),
(246843, 'CP373701', 'ระเบียบวิธีวิจัยในภูมิสารสนเทศศาสตร์', 'Research Methodology in Geo-informatics', '3', '3', '3'),
(246844, 'CP374702', 'โครงงานวิจัยในภูมิสารสนเทศศาสตร์ 1', 'Research Project in Geo-Informatics I', '3', '3', '3'),
(246845, 'CP374703', 'โครงงานวิจัยในภูมิสารสนเทศศาสตร์ 2', 'Research Project in Geo-Informatics II', '3', '3', '3'),
(246846, 'CP379981', 'ระเบียบวิธีวิจัย', 'Research Methodology', '3', '3', '3'),
(246847, 'CP379991', 'สัมมนาดุษฎีนิพนธ์ 1', 'Dissertation Seminar I', '1', '1', '1'),
(246848, 'CP379992', 'สัมมนาดุษฎีนิพนธ์ 2', 'Dissertation Seminar II', '1', '1', '1'),
(246849, 'CP379993', 'สัมมนาดุษฎีนิพนธ์ 3', 'Dissertation Seminar III', '1', '1', '1'),
(246850, 'CP379996', 'ดุษฎีนิพนธ์', 'Dissertation', '1', '48', '48'),
(246851, 'CP379997', 'ดุษฎีนิพนธ์', 'Dissertation', '1', '72', '72'),
(246852, 'CP379998', 'ดุษฎีนิพนธ์', 'Dissertation', '1', '36', '36'),
(246853, 'CP379999', 'ดุษฎีนิพนธ์', 'Dissertation', '1', '48', '48'),
(246854, 'CP001001', 'เอ บี ซี ดี สำหรับทุกวิชาชีพ', 'ABCD for All Professions', '3', '3', '3'),
(246855, 'CP378898', 'วิทยานิพนธ์', 'Thesis', '1', '38', '38'),
(246856, 'CP378899', 'วิทยานิพนธ์', 'Thesis', '1', '12', '12'),
(246857, 'CP373702', 'โครงงานวิจัยในภูมิสารสนเทศศาสตร์ 1', 'Research Project in Geo-Informatics I', '3', '3', '3'),
(246858, 'CP373703', 'โครงงานวิจัยในภูมิสารสนเทศศาสตร์ 2', 'Research Project in Geo-Informatics II', '3', '3', '3'),
(246859, 'CP373784', 'การฝึกงานทางภูมิสารสนเทศศาสตร์', 'Internship in Geo-Informatics', '3', '3', '3'),
(246860, 'CP373785', 'สหกิจศึกษาทางภูมิสารสนเทศศาสตร์', 'Co-Operative Education in Geo-Infromatics', '6', '6', '6'),
(246861, 'CP378721', 'การรับรู้จากระยะไกลไมโครเวฟ', 'Microwave Remote Sensing', '3', '3', '3'),
(246862, 'CP378722', 'การทำแผนที่ด้วยอากาศยานไร้คนขับแบบอัจฉริยะ', 'Intelligent Unmanned Aerial Vehicle Mapping', '3', '3', '3'),
(246863, 'CP378731', 'ระบบสารสนเทศการจัดการทรัพยากร', 'Resource Management Information System', '3', '3', '3'),
(246864, 'CP378732', 'สถิติศาสตร์เชิงพื้นที่', 'Spatial Statistics', '3', '3', '3'),
(246865, 'CP378733', 'ระบบการจัดการฐานข้อมูลและมาตรฐานระบบสารสนเทศภูมิศาสตร์', 'Database Management System and Geographic Information System Standard', '3', '3', '3'),
(246866, 'CP378734', 'ระบบสารสนเทศภูมิศาสตร์บนอินเทอร์เน็ต', 'Internet Geographic Information System', '3', '3', '3'),
(246867, 'CP378735', 'แบบจำลองและการวิเคราะห์ข้อมูลเชิงพื้นที่', 'Spatial Data Analytics and Modeling', '3', '3', '3'),
(246868, 'CP378736', 'การเขียนโปรแกรมขั้นสูงในระบบสารสนเทศภูมิศาสตร์', 'Advanced Programming in Geographic Information System', '3', '3', '3'),
(246869, 'CP378737', 'ระบบสารสนเทศภูมิศาสตร์สาหรับการวางผังเมือง', 'Geographic Information System for Urban Planning', '3', '3', '3'),
(246870, 'CP378741', 'ทรัพยากรที่ดินและสิ่งแวดล้อม', 'Land Resources and Environment', '3', '3', '3'),
(246871, 'CP378742', 'การประเมินที่ดินและการวางแผนการใช้ที่ดิน', 'Land Evaluation and Land Use Planning', '3', '3', '3'),
(246872, 'CP378771', 'ปัญหาพิเศษทางภูมิสารสนเทศศาสตร์', 'Special Problems in Geo-Informatics', '3', '3', '3'),
(246873, 'CP002001', 'การเตรียมความพร้อมก่อนปฏิบัติงานสหกิจศึกษาสำหรับนักศึกษาวิทยาลัยการคอมพิวเตอร์', 'Orientation to Co-Operative Education for Computing Students', '1', '1', '1'),
(246874, 'CP351003', 'การเขียนโปรแกรมเชิงวัตถุ', 'Object Oriented Programming', '3', '3', '3'),
(246875, 'CP351004', 'สถาปัตยกรรมคอมพิวเตอร์', 'Computer Architecture', '3', '3', '3'),
(246876, 'CP351101', 'วิทยาการคำนวณ', 'Computational Science', '3', '3', '3'),
(246877, 'CP351201', 'คอมพิวเตอร์แอนิเมชัน', 'Computational Science', '3', '3', '3'),
(246878, 'CP371001', 'หลักมูลภูมิสารสนเทศศาสตร์', 'Fundamentals of Geo-informatics', '3', '3', '3'),
(246879, 'CP371031', 'เทคโนโลยีสารสนเทศขั้นพื้นฐาน', 'Basics of Information Technology', '3', '3', '3'),
(246880, 'CP351001', 'วิทยาการคอมพิวเตอร์หลักมูล', 'Fundamental Computer Science', '3', '3', '3'),
(246881, 'CP351002', 'การเขียนโปรแกรมเชิงโครงสร้างสำหรับวิทยาการคอมพิวเตอร์', 'Structure Programming Languages for Computer Science', '3', '3', '3'),
(246882, 'CP352001', 'โครงสร้างข้อมูล', 'Data Structure', '3', '3', '3'),
(246883, 'CP352002', 'การออกแบบประสบการณ์ผู้ใช้', 'User Experience Design', '3', '3', '3'),
(246884, 'CP352003', 'ระบบจัดการฐานข้อมูลและการออกแบบฐานข้อมูล', 'Database Management System and Database Design', '3', '3', '3'),
(246885, 'CP352004', 'ปฏิบัติการระบบจัดการฐานข้อมูลและการออกแบบฐานข้อมูล', 'Database Management System and Database Design Laboratory', '1', '1', '1'),
(246886, 'CP352005', 'เครือข่ายคอมพิวเตอร์', 'Computer Networks', '3', '3', '3'),
(246887, 'CP352006', 'การวิเคราะห์ขั้นตอนวิธี', 'Analysis of Algorithms', '3', '3', '3'),
(246888, 'CP352101', 'วิทยาการข้อมูลขั้นแนะนำ', 'Introduction to Data Science', '3', '3', '3'),
(246889, 'CP352102', 'การประมวลผลภาพดิจิทัล', 'Digital Image Processing', '3', '3', '3'),
(246890, 'CP352103', 'การเขียนโปรแกรมเชิงแข่งขัน', 'Competitive Programming', '3', '3', '3'),
(246891, 'CP352104', 'หัวข้อพิเศษทางปัญญาประดิษฐ์และวิทยาการข้อมูล', 'Special Topics in Artificial Intelligence and Data Science', '3', '3', '3'),
(246892, 'CP352201', 'เทคโนโลยีการออกแบบเว็บ', 'Web Design Technologies', '3', '3', '3'),
(246893, 'CP352202', 'การเขียนโปรแกรมสำหรับโมบายแอปพลิเคชัน', 'Programming for Mobile Application', '3', '3', '3'),
(246894, 'CP352203', 'การพัฒนาเกมคอมพิวเตอร์', 'Computer Game Development', '3', '3', '3'),
(246895, 'CP352204', 'การวิเคราะห์และออกแบบระบบ', 'System Analysis and Design', '3', '3', '3'),
(246896, 'CP352205', 'หัวข้อพิเศษทางการพัฒนาสื่อผสมและโปรแกรมประยุกต์', 'Special Topics in Multimedia and Application Development', '3', '3', '3'),
(246897, 'CP352301', 'การเขียนโปรแกรมสคริปต์', 'Script Programming', '3', '3', '3'),
(246898, 'CP352302', 'เครือข่ายสื่อสารไร้สายและเคลื่อนที่', 'Wireless and Mobile Communication Networks', '3', '3', '3'),
(246899, 'CP352303', 'หัวข้อพิเศษทางระบบและเครือข่ายอัจฉริยะ', 'Special Topics in Smart System and Intelligent Network', '3', '3', '3'),
(246900, 'CP353001', 'ระบบปฏิบัติการและการเขียนโปรแกรมซีสเต็มคอล', 'Operating Systems and System Calls Programming', '3', '3', '3'),
(246901, 'CP353002', 'หลักการออกแบบพัฒนาซอฟต์แวร์', 'Principles of Software Design and Development', '3', '3', '3'),
(246902, 'CP353003', 'ปัญญาประดิษฐ์', 'Artificial Intelligence', '3', '3', '3'),
(246903, 'CP353004', 'วิศวกรรมซอฟต์แวร์', 'Software Engineering', '3', '3', '3'),
(246904, 'CP353005', 'ทฤษฎีการคำนวณ', 'Theory of Computation', '3', '3', '3'),
(246905, 'CP353101', 'วิศวกรรมข้อมูล', 'Data Engineering', '3', '3', '3'),
(246906, 'CP353102', 'เครื่องจักรเรียนรู้ขั้นนำ', 'Introduction to Machine Learning', '3', '3', '3'),
(246907, 'CP353103', 'การวิเคราะห์และการประยุกต์ข้อมูล', 'Data Analytics and Application', '3', '3', '3'),
(246908, 'CP353104', 'หลักภาษาโปรแกรม', 'Principles of Programming Languages', '3', '3', '3'),
(246909, 'CP353105', 'การออกแบบภาษาโปรแกรม', 'Programming Language Design', '3', '3', '3'),
(246910, 'CP353106', 'การค้นคืนสารสนเทศ', 'Information Retrieval', '3', '3', '3'),
(246911, 'CP353107', 'การจัดการความรู้', 'Knowledge Management', '3', '3', '3'),
(246912, 'CP353108', 'โครงข่ายประสาทและการเรียนรู้เชิงลึก', 'Neural Network and Deep Learning', '3', '3', '3'),
(246913, 'SC313506', 'พื้นฐานการทวนสอบเชิงรูปนัย', 'FUNDAMENTALS OF FORMAL VERIFICATION', '3', '3', '3'),
(246914, 'CP353202', 'การพัฒนาโปรแกรมประยุกต์สาหรับองค์กร', 'Enterprise Application Development', '3', '3', '3'),
(246915, 'CP353109', 'การประมวลผลภาษาธรรมชาติ', 'Natural Language Processing', '3', '3', '3'),
(246916, 'CP353110', 'ปฏิบัติการปัญญาประดิษฐ์', 'Artificial Intelligence Workshop', '3', '3', '3'),
(246917, 'CP353111', 'การเขียนโปรแกรมคอมพิวเตอร์ควอนตัม', 'Quantum Computer Programming', '3', '3', '3'),
(246918, 'CP353201', 'การประกันคุณภาพซอฟต์แวร์', 'Software Quality Assurance', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_copy2`
--

CREATE TABLE `teacher_copy2` (
  `pk` int(11) NOT NULL,
  `data1` text COLLATE utf8_unicode_ci NOT NULL,
  `data2` text COLLATE utf8_unicode_ci NOT NULL,
  `data3` text COLLATE utf8_unicode_ci NOT NULL,
  `data4` text COLLATE utf8_unicode_ci NOT NULL,
  `data5` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher_copy2`
--

INSERT INTO `teacher_copy2` (`pk`, `data1`, `data2`, `data3`, `data4`, `data5`) VALUES
(38071, '02170', 'งามนิจ', 'อาจอินทร์', 'NGAMNIJ', 'ARCH-INT'),
(38072, '02179', 'สันติ', 'ทินตะนัย', 'SUNTI', 'TINTANAI'),
(38073, '02182', 'พุธษดี', 'ศิริแสงตระกูล', 'PUSADEE', 'SERESANGTAKUL'),
(38074, '02183', 'อุรฉัตร', 'โคแก้ว', 'URACHART', 'KOKAEW'),
(38075, '02186', 'สุมณฑา', 'เกษมวิลาศ', 'SUMONTA', 'KASEMVILAS'),
(38076, '02198', 'รัศมี', 'สุวรรณวีระกำธร', 'RASAMEE', 'SUWANWERAKAMTORN'),
(38077, '02185', 'วชิราวุธ', 'ธรรมวิเศษ', 'WACHIRAWUT', 'THAMVISET'),
(38078, '02187', 'สิรภัทร', 'เชี่ยวชาญวัฒนา', 'SIRAPAT', 'CHIEWCHANWATTANA'),
(38079, '02225', 'สิลดา', 'อินทรโสธรฉันท์', 'SILADA', 'INTARASOTHONCHUN'),
(38080, '02229', 'คำรณ', 'สุนัติ', 'KHAMRON', 'SUNAT'),
(38081, '02188', 'บุญทรัพย์', 'ไวคำ', 'BOONSUP', 'WAIKHAM'),
(38082, '4409071', 'ไพรวัลย์', 'คุณาสถิตย์ชัย', 'PRAIWAN', 'KUNASATITCHAI'),
(38083, '02184', 'ปัญญาพล', 'หอระตะ', 'PUNYAPHOL', 'HORATA'),
(38084, '02206', 'ศิริรัตน์', 'ทินตะนัย', 'SIRIRAT', 'TINTANAI'),
(38085, '02268', 'อุราวรรณ', 'จันทร์เกษ', 'URAWAN', 'CHANKET'),
(38086, '02269', 'ปวีณา', 'วันชัย', 'PAWEENA', 'WANCHAI'),
(38087, '02270', 'ณกร', 'วัฒนกิจ', 'NAGON', 'WATANAKIJ'),
(38088, '05409', 'พิพัธน์', 'เรืองแสง', 'PIPAT', 'REUNGSANG'),
(38089, '02289', 'วรารัตน์', 'สงฆ์แป้น', 'WARARAT', 'SONGPAN'),
(38090, '53080102', 'จักรชัย', 'โสอินทร์', 'CHAKCHAI', 'SO-IN'),
(38091, '02297', 'สายยัญ', 'สายยศ', 'SAIYAN', 'SAIYOD'),
(38092, '55011701', 'ชัยพล', 'กีรติกสิกร', 'CHAIYAPON', 'KEERATIKASIKORN'),
(38093, '108750', 'ฉันทนา', 'เรืองวงศ์วิทยา', 'CHANTANA', 'RUENGWONGWITAYA'),
(38094, '112377', 'มัลลิกา', 'วัฒนะ', 'MONLICA', 'WATTANA'),
(38095, '116798', 'พงษ์เทพ', 'พระคุณ', 'PONGTEP', 'PRAKUN'),
(38096, '110655', 'เนตรนรินทร์', 'ชนะบัว', 'NATENARIN', 'CHANABUA'),
(38097, '56070801', 'ชิตสุธา', 'สุ่มเล็ก', 'CHITSUTHA', 'SOOMLEK'),
(38098, '119990', 'วิจิตรา', 'ขจร', 'WIJITTRA', 'KAJOHN'),
(38099, '120807', 'สุธน', 'เจริญศิริ', 'SUTON', 'CHAROENSIRI'),
(38100, '129523', 'Arfat Ahmad', 'Khan', 'ARFAT AHMAD', 'KHAN'),
(38101, '113373', 'นันทสิทธิ์', 'บางใบ', 'NANTASIT', 'BANGBAI'),
(38102, '121623', 'วาสนา', 'พุฒกลาง', 'WASANA', 'PUTKLANG'),
(38103, '02181', 'ศาสตรา', 'วงศ์ธนวสุ', 'SARTRA', 'WONGTHANAVASU'),
(38104, '124129', 'โรจนวรรณ', 'หาดี', 'ROJANAWAN', 'HADI'),
(38105, '128193', 'ไพรสันต์', 'ผดุงเวียง', 'PRAISAN', 'PADUNGWEANG'),
(38106, '129597', 'ญานิกา', 'คงโสรส', 'YANIKA', 'KONGSOROT'),
(38107, '129451', 'ภัคราช', 'มุสิกะวัน', 'PAKARAT', 'MUSIKAWAN'),
(38108, '127627', 'เพชร', 'อิ่มทองคำ', 'PHET', 'IMTONGKHUM');

-- --------------------------------------------------------

--
-- Table structure for table `work_time`
--

CREATE TABLE `work_time` (
  `pk` int(11) NOT NULL,
  `member` text NOT NULL,
  `student_paper` text NOT NULL,
  `subject` text NOT NULL,
  `savedata1` text NOT NULL,
  `savedata2` text NOT NULL,
  `savedata3` text NOT NULL,
  `savedata4` text NOT NULL,
  `savedata5` text NOT NULL,
  `savedata6` text NOT NULL,
  `savedata7` text NOT NULL,
  `create_date` text NOT NULL,
  `create_date2` text NOT NULL,
  `create_time` text NOT NULL,
  `newdate` text NOT NULL,
  `newdate2` text NOT NULL,
  `img1` text,
  `img2` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_time`
--

INSERT INTO `work_time` (`pk`, `member`, `student_paper`, `subject`, `savedata1`, `savedata2`, `savedata3`, `savedata4`, `savedata5`, `savedata6`, `savedata7`, `create_date`, `create_date2`, `create_time`, `newdate`, `newdate2`, `img1`, `img2`) VALUES
(4, '11', '17', '11', '2023-04-24', '20:43', '21:45', 'ปกติ', 'd', 'f', 'f', '24-04-2023', '2023-04-24', '18:42', '24-04-2023', '2023-04-24', '', ''),
(5, '11', '17', '11', '2023-04-24', '22:30', '10:30', 'ปกติ', '1', '2', 'ABC', '24-04-2023', '2023-04-24', '22:31', '24-04-2023', '2023-04-24', '', ''),
(6, '11', '23', '16', '2023-05-01', '04:54', '04:58', 'ปกติ', '1', '1', '1', '01-05-2023', '2023-05-01', '04:54', '01-05-2023', '2023-05-01', NULL, NULL),
(7, '4', '27', '20', '2023-05-02', '04:39', '04:39', 'พิเศษ', '2', '3', 'AA', '02-05-2023', '2023-05-02', '14:38', '02-05-2023', '2023-05-02', NULL, NULL),
(8, '4', '27', '20', '2023-05-03', '20:00', '21:00', 'ปกติ', '2', '2', 'ZZZZZ', '02-05-2023', '2023-05-02', '14:41', '03-05-2023', '2023-05-03', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boardroom`
--
ALTER TABLE `boardroom`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `classdata`
--
ALTER TABLE `classdata`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `classdata_section`
--
ALTER TABLE `classdata_section`
  ADD PRIMARY KEY (`classdata_section_id`);

--
-- Indexes for table `data_class`
--
ALTER TABLE `data_class`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `dropday`
--
ALTER TABLE `dropday`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `droptime`
--
ALTER TABLE `droptime`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_build`
--
ALTER TABLE `drop_build`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_other`
--
ALTER TABLE `drop_other`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_show`
--
ALTER TABLE `drop_show`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_status`
--
ALTER TABLE `drop_status`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_status2`
--
ALTER TABLE `drop_status2`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_subject`
--
ALTER TABLE `drop_subject`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_term`
--
ALTER TABLE `drop_term`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_type`
--
ALTER TABLE `drop_type`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_type2`
--
ALTER TABLE `drop_type2`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `images2`
--
ALTER TABLE `images2`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `news_report`
--
ALTER TABLE `news_report`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `news_report2`
--
ALTER TABLE `news_report2`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `run_bill`
--
ALTER TABLE `run_bill`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `student_paper`
--
ALTER TABLE `student_paper`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `teacher_copy`
--
ALTER TABLE `teacher_copy`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `teacher_copy2`
--
ALTER TABLE `teacher_copy2`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `work_time`
--
ALTER TABLE `work_time`
  ADD PRIMARY KEY (`pk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boardroom`
--
ALTER TABLE `boardroom`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `classdata`
--
ALTER TABLE `classdata`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `classdata_section`
--
ALTER TABLE `classdata_section`
  MODIFY `classdata_section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `data_class`
--
ALTER TABLE `data_class`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `dropday`
--
ALTER TABLE `dropday`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `droptime`
--
ALTER TABLE `droptime`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `drop_build`
--
ALTER TABLE `drop_build`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `drop_other`
--
ALTER TABLE `drop_other`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `drop_show`
--
ALTER TABLE `drop_show`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drop_status`
--
ALTER TABLE `drop_status`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `drop_status2`
--
ALTER TABLE `drop_status2`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `drop_subject`
--
ALTER TABLE `drop_subject`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drop_term`
--
ALTER TABLE `drop_term`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `drop_type`
--
ALTER TABLE `drop_type`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drop_type2`
--
ALTER TABLE `drop_type2`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `images2`
--
ALTER TABLE `images2`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `news_report`
--
ALTER TABLE `news_report`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news_report2`
--
ALTER TABLE `news_report2`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `run_bill`
--
ALTER TABLE `run_bill`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `student_paper`
--
ALTER TABLE `student_paper`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `teacher_copy`
--
ALTER TABLE `teacher_copy`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246919;
--
-- AUTO_INCREMENT for table `teacher_copy2`
--
ALTER TABLE `teacher_copy2`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38109;
--
-- AUTO_INCREMENT for table `work_time`
--
ALTER TABLE `work_time`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
