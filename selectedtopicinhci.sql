-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 06:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selectedtopicinhci`
--

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `picid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `picloc` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`picid`, `pid`, `picloc`, `type`) VALUES
(1, 1, '/public/images/Milk Caramel_1.jpg', 't'),
(2, 1, '/public/images/Milk Caramel_2.jpg', 't'),
(3, 1, '/public/images/Milk Caramel_3.jpg', 'f'),
(4, 1, '/public/images/Milk Caramel_4.jpg', 'f'),
(5, 2, '/public/images/Sweet ''n'' Cheesy_1.jpg', 't'),
(6, 2, '/public/images/Sweet ''n'' Cheesy_2.jpg', 'f'),
(7, 2, '/public/images/Sweet ''n'' Cheesy_3.jpg', 't'),
(8, 2, '/public/images/Sweet ''n'' Cheesy_4.jpg', 't'),
(9, 2, '/public/images/Sweet ''n'' Cheesy_5.jpg', 'f'),
(10, 3, '/public/images/Goldfish Crackers_1.jpg', 't'),
(11, 3, '/public/images/Goldfish Crackers_2.jpg', 'f'),
(12, 3, '/public/images/Goldfish Crackers_3.jpg', 't'),
(14, 4, '/public/images/Fresh Yatsuhashi Mochi Matcha_1.jpg', 'f'),
(15, 4, '/public/images/Fresh Yatsuhashi Mochi Matcha_2.jpg', 't'),
(16, 4, '/public/images/Fresh Yatsuhashi Mochi Matcha_3.jpg', 't'),
(17, 5, '/public/images/Tostitos Original_1.jpg', 't'),
(18, 5, '/public/images/Tostitos Original_2.jpg', 'f'),
(19, 5, '/public/images/Tostitos Original_3.jpg', 't'),
(20, 6, '/public/images/Kyoto Ippin Kuzumochi_1.jpg', 'f'),
(21, 6, '/public/images/Kyoto Ippin Kuzumochi_2.jpg', 't'),
(22, 6, '/public/images/Kyoto Ippin Kuzumochi_3.jpg', 't'),
(23, 7, '/public/images/Naruto Kintoki Sweet Potato Tart Cake_1.jpg', 't'),
(24, 7, '/public/images/Naruto Kintoki Sweet Potato Tart Cake_2.jpg', 'f'),
(25, 7, '/public/images/Naruto Kintoki Sweet Potato Tart Cake_3.jpg', 'f'),
(26, 7, '/public/images/Naruto Kintoki Sweet Potato Tart Cake_4.jpg', 't'),
(27, 8, '/public/images/Osaka Banana no Koibito_1.jpg', 'f'),
(28, 8, '/public/images/Osaka Banana no Koibito_2.jpg', 't'),
(29, 8, '/public/images/Osaka Banana no Koibito_3.jpg', 't'),
(30, 9, '/public/images/Sanin 20th Century Pear Jelly_1.jpg', 'f'),
(31, 9, '/public/images/Sanin 20th Century Pear Jelly_2.jpg', 't'),
(32, 9, '/public/images/Sanin 20th Century Pear Jelly_3.jpg', 't'),
(33, 10, '/public/images/Milk Boro_1.jpg', 'f'),
(34, 10, '/public/images/Milk Boro_2.jpg', 't'),
(35, 10, '/public/images/Milk Boro_3.jpg', 't'),
(36, 10, '/public/images/Milk Boro_4.jpg', 'f'),
(37, 11, '/public/images/Kyoto Ramune_1.jpg', 'f'),
(38, 11, '/public/images/Kyoto Ramune_2.jpg', 't'),
(39, 11, '/public/images/Kyoto Ramune_3.jpg', 't'),
(40, 12, '/public/images/1.jpg', 't'),
(41, 12, '/public/images/1.1.jpg', 't'),
(42, 12, '/public/images/1.2.jpg', 'f'),
(43, 12, '/public/images/1.3.jpg', 'f'),
(44, 12, '/public/images/1.4.jpg', 'f'),
(45, 12, '/public/images/1.5.jpg', 'f'),
(46, 12, '/public/images/1.6.jpg', 'f'),
(47, 13, '/public/images/2.jpg', 't'),
(48, 13, '/public/images/2.1.jpg', 'f'),
(49, 13, '/public/images/2.2.jpg', 't'),
(50, 14, '/public/images/3.jpg', 't'),
(51, 14, '/public/images/3.1.jpg', 'f'),
(52, 14, '/public/images/3.2.jpg', 'f'),
(53, 15, '/public/images/4.jpg', 't'),
(54, 15, '/public/images/4.1.jpg', 'f'),
(55, 15, '/public/images/4.2.jpg', 'f'),
(56, 15, '/public/images/4.3.jpg', 'f'),
(57, 15, '/public/images/4.4.jpg', 'f'),
(58, 16, '/public/images/5.jpg', 't'),
(59, 16, '/public/images/5.1.jpg', 'f'),
(60, 16, '/public/images/5.2.jpg', 'f'),
(61, 16, '/public/images/5.3.jpg', 'f'),
(62, 16, '/public/images/5.4.jpg', 'f'),
(63, 17, '/public/images/6.jpg', 't'),
(64, 17, '/public/images/6.1.jpg', 'f'),
(65, 17, '/public/images/6.2.jpg', 't'),
(66, 17, '/public/images/6.3.jpg', 'f'),
(67, 17, '/public/images/6.4.jpg', 'f'),
(68, 17, '/public/images/6.5.jpg', 'f'),
(69, 18, '/public/images/7.jpg', 't'),
(70, 18, '/public/images/7.1.jpg', 't'),
(71, 18, '/public/images/7.2.jpg', 'f'),
(72, 18, '/public/images/7.3.jpg', 'f'),
(73, 18, '/public/images/7.4.jpg', 'f'),
(74, 18, '/public/images/7.5.jpg', 'f'),
(75, 19, '/public/images/8.4.jpg', 't'),
(76, 19, '/public/images/8.jpg', 't'),
(77, 19, '/public/images/8.1.jpg', 'f'),
(78, 19, '/public/images/8.2.jpg', 'f'),
(79, 19, '/public/images/8.3.jpg', 'f'),
(80, 20, '/public/images/9.jpg', 't'),
(81, 20, '/public/images/9.1.jpg', 'f'),
(82, 20, '/public/images/9.2.jpg', 'f'),
(83, 20, '/public/images/9.3.jpg', 'f'),
(84, 20, '/public/images/9.4.jpg', 'f'),
(85, 21, '/public/images/10.jpg', 't'),
(86, 21, '/public/images/10.1.jpg', 'f'),
(87, 21, '/public/images/10.2.jpg', 'f'),
(88, 21, '/public/images/10.3.jpg', 'f'),
(89, 22, '/public/images/11.jpg', 't'),
(90, 22, '/public/images/11.1.jpg', 't'),
(91, 22, '/public/images/11.2.jpg', 'f'),
(92, 22, '/public/images/11.3.jpg', 'f'),
(93, 22, '/public/images/11.4.jpg', 'f'),
(94, 22, '/public/images/11.5.jpg', 'f'),
(95, 23, '/public/images/12.jpg', 't'),
(96, 23, '/public/images/12.1.jpg', 't'),
(97, 23, '/public/images/12.2.jpg', 'f'),
(98, 23, '/public/images/12.3.jpg', 'f'),
(99, 23, '/public/images/12.4.jpg', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `name` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `pid`, `caption`, `detail`, `price`) VALUES
('Cool Milk Cookie', 1, 'ลูกอมที่มีความอ่อนหวานและความอ่อนโยนจากคาราเมล จะช่วยให้คุณได้เพิ่มความหวานไปทั้งหัวใจของคุณ', 'ขนาด: 102 กรัม\r\n\r\nส่วนประกอบ :\r\n\r\nน้ำตาล, นมข้นหวาน, น้ำมันพืช, โปรตีนข้าวสาลี, เนย, สารสกัดจากมอลต์, น้ำเชื่อมน้ำตาล, เกลือ, ซอร์บิทอล,\r\n\r\nอิมัลชัน (จากถั่วเหลือง)\r\n\r\nข้อมูลทางโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 19 กิโลแคลอรี่\r\n\r\nไขมัน: 0.18 กรัม\r\n\r\nคาร์โบไฮเดรต: 3.6 กรัม\r\n\r\nโปรตีน: 0.18 กรัม\r\n\r\nโซเดียม: 4.9 มิลลิกรัม', 150),
('Sweet ''n'' Cheesy Caramel Cheddar Cheese', 2, 'ความหวานพิเศษจากข้าวโพดคั่วเนยคาราเมลกับถั่ววานิลลาและรสจัดจ้านจากชีสเชดดาร์ที่ผสมผสานกันได้อย่างลงตั\r\n\r\nว ขนมขบเคี้ยวแสนอร่อยนี้จะทำให้คุณไม่สามารถหยุดทานและวางมันลงได้', 'ขนาด: 240 กรัม\r\n\r\nส่วนประกอบ:\r\n\r\nป๊อปคอร์น, น้ำตาลอ้อย, น้ำตาลทรายแดง, น้ำมันดอกทานตะวัน, น้ำเชื่อมข้าวกล้อง, เนยเค็ม, ชีสเชดดาร์, เกลือ, ครีม,\r\n\r\nโซเดียมฟอสเฟต, สารสกัดสีจากแอนนาโต, เลซิตินจากถั่วเหลือง, สารสกัดวานิลลา, ผงฟู\r\n\r\nข้อมูลโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 130 กิโลแคลอรี่\r\n\r\nไขมันทั้งหมด: 6 กรัม\r\n\r\nไขมันอิ่มตัว: 1.5 กรัม\r\n\r\nไขมันไม่อิ่มตัว: 0 กรัม\r\n\r\nคอเลสเตอรอล: 5 มิลลิกรัม\r\n\r\nโซเดียม: 170 มิลลิกรัม\r\n\r\nคาร์โบไฮเดรตทั้งหมด: 19 กรัม\r\n\r\nไฟเบอร์: 1 กรัม\r\n\r\nน้ำตาล: 13 กรัม\r\n\r\nโปรตีน: 1 กรัม', 170),
('Goldfish Crackers', 3, 'แครกเกอร์รูปปลาที่ทำให้หลายครอบครัวต้องยิ้มเมื่อได้ลิ้มรสความอร่อยจากการอบกับชีสและเพิ่มสีสันที่ทำมาจากพืช\r\n\r\nทำให้การกินของทุกคนสนุกสนานและปลอดภัยจากสารกันบูด', 'ขนาด: 350 กรัม\r\n\r\nส่วนประกอบ:\r\n\r\nแป้ง, น้ำมันถั่วเหลือง, ชีสเชดเดอร์, เกลือ, ยีสต์, น้ำตาล, เครื่องเทศ, สารสกัดจากธรรมชาติ\r\n\r\nข้อมูลโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 140 กิโลแคลอรี่\r\n\r\nไขมันทั้งหมด: 5 กรัม\r\n\r\nไขมันอิ่มตัว: 1 กรัม\r\n\r\nไขมันไม่อิ่มตัว: 0 กรัม\r\n\r\nคอเลสเตอรอล: 5 มิลลิกรัม\r\n\r\nโซเดียม: 240 มิลลิกรัม\r\n\r\nคาร์โบไฮเดรตทั้งหมด: 20 กรัม\r\n\r\nไฟเบอร์: 1 กรัม\r\n\r\nน้ำตาล: 1 กรัม\r\n\r\nโปรตีน: 3 กรัม', 130),
('Fresh Yatsuhashi Mochi Matcha', 4, 'ขนมโมจิเค้กข้าวขนาดพอดีคำ มีกลิ่นหอมละมุนของชาเขียว ผ่านฝีมือผู้ทำโดยต้นตำรับจากเมืองโตเกียว\r\n\r\nเมื่อได้ลิ้มลองรสชาติของโมจินี้ คุณจะอิ่มอกอิ่มใจ', 'ขนาด: 100 กรัม\r\n\r\nส่วนประกอบ:\r\n\r\nน้ำตาล, น้ำเชื่อม, ข้าวเหนียว, ชาเขียวมัทฉะ, แป้งถั่วเหลือง, สารให้ความหวาน\r\n\r\nข้อมูลโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 257 กิโลแคลอรี่\r\n\r\nไขมันทั้งหมด: 0.2 กรัม\r\n\r\nโซเดียม: 1 มิลลิกรัม\r\n\r\nคาร์โบไฮเดรตทั้งหมด: 62.5 กรัม\r\n\r\nโปรตีน: 1.3 กรัม', 140),
('Tostitos Original', 5, 'ขนมขบเคี้ยวที่คุณสามารถทานในช่วงเวลาไหนก็ได้ ไม่ว่าจะดูหนัง เล่นเกมกับเพื่อน หรือแม้กระทั่งจัดปาร์ตี้\r\n\r\nก็ทำให้คุณได้มีช่วงดีๆ และเพื่อเพิ่มความสนุกต้องทานคู่กับเครื่องดื่มจะยิ่งทำให้อร่อยได้ไม่หยุดไม่หย่อนไปเลย', 'ขนาด: 510 กรัม\r\n\r\nส่วนประกอบ:\r\n\r\nข้าวโพด, น้ำมันพืช, เกลือ\r\n\r\nข้อมูลโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 140 กิโลแคลอรี่\r\n\r\nไขมันทั้งหมด: 7 กรัม\r\n\r\nไขมันอิ่มตัว: 1 กรัม\r\n\r\nไขมันไม่อิ่มตัว: 0 กรัม\r\n\r\nคอเลสเตอรอล: 0 มิลลิกรัม\r\n\r\nโซเดียม: 115 มิลลิกรัม\r\n\r\nคาร์โบไฮเดรตทั้งหมด: 19 กรัม\r\n\r\nไฟเบอร์: 1 กรัม\r\n\r\nน้ำตาล: 0 กรัม\r\n\r\nโปรตีน: 2 กรัม', 150),
('Kyoto Ippin Kuzumochi', 6, 'ขนม Kuzumochi รสชาติต้นตำรับที่ทำขึ้นผ่านการตรวจสอบจากผู้เชี่ยวชาญด้านเต้าหู้ ไม่มีสารกันบูดเจือปน\r\n\r\nทำโดยแป้งและน้ำตาลเท่านั้น ทานพร้อมกับน้ำเชื่อมและแป้งถั่วเหลือง อร่อยได้อย่างลงตัว', 'ขนาด: 100 กรัม\r\n\r\nส่วนประกอบ:\r\n\r\nแป้ง(มันเทศ , kudzu), น้ำตาลทราย, น้ำอ้อย, แป้งถั่วเหลือง, ถั่วเหลือง, เกลือ\r\n\r\nข้อมูลโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 63 กิโลแคลอรี่\r\n\r\nไขมันทั้งหมด: น้อยกว่า 0.1 กรัม\r\n\r\nโซเดียม: 1.7 มิลลิกรัม\r\n\r\nคาร์โบไฮเดรตทั้งหมด: 15.8 กรัม\r\n\r\nโปรตีน: น้อยกว่า 0.1กรัม', 145),
('ทาร์ตเค้ก Naruto Kintoki', 7, 'ขนมทาร์ตเค้กมันฝรั่งหวานจากจังหวัดโทะกุชิมะ รสชาติยอดเยี่ยม เหมาะแก่การซื้อฝากให้กับคนที่คุณรัก', 'ขนาด: 100 กรัม\r\n\r\nส่วนประกอบ:\r\n\r\nแป้งสาลี, เนยเทียม, แยมถั่วขาว, ครีมคัสตาร์, ไข่แดง, มันฝรั่งหวาน, น้ำตาล, ช็อกโกแลต, ผงอัลมอนด์, แอลกอฮอล์,\r\n\r\nสารกันบูด\r\n\r\nข้อมูลโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 471 กิโลแคลอรี่\r\n\r\nไขมันทั้งหมด: 26.6 กรัม\r\n\r\nโซเดียม: 73 มิลลิกรัม\r\n\r\nคาร์โบไฮเดรตทั้งหมด: 52.7 กรัม\r\n\r\nโปรตีน: 5.2กรัม', 150),
('Osaka Banana no Koibito', 8, 'ขนม Manju นี้จะให้ความเอร็ดอร่อยทั้งสี รูปร่างและรสชาติของกล้วยหอม โดยสอดไส้ถั่วภายในแป้งคัสเตลลา\r\n\r\nให้ความรู้สึกเนื้อนุ่มและกลิ่นกล้วยหอมที่เหมือนจริง', 'ขนาด: 100 กรัม\r\n\r\nส่วนประกอบ:\r\n\r\nแยมถั่วขาว, แป้งสาลี, น้ำตาล, ไข่, เนยเทียม, น้ำเชื่อม, นมข้นหวาน, สารสังเคราะห์ธรรมชาติสีเหลือง\r\n\r\nข้อมูลโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 334 กิโลแคลอรี่\r\n\r\nไขมันทั้งหมด: 4.1 กรัม\r\n\r\nโซเดียม: 15 มิลลิกรัม\r\n\r\nคาร์โบไฮเดรตทั้งหมด: 67.6 กรัม\r\n\r\nโปรตีน: 6.5กรัม', 155),
('Sanin 20th Century Pear Jelly', 9, 'ความสดใหม่ของลูกแพร์ศตวรรษที่ 20 ได้แปลงโฉมกลายเป็นวุ้นหวาน มีทั้งน้ำและเนื้อที่ทานแล้วสดชื่น เย็นสบาย\r\n\r\nทำให้เป็นขนมที่เหมาะกับฤดูร้อน', 'ขนาด: 40 กรัม\r\n\r\nส่วนประกอบ:\r\n\r\nน้ำซุปลูกแพร์, เนื้อลูกแพร์, น้ำตาล, น้ำเชื่อม, สารที่ให้กรด, สารที่ทำให้เกิดเจล\r\n\r\nข้อมูลโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 39 กิโลแคลอรี่\r\n\r\nไขมันทั้งหมด: 0 กรัม\r\n\r\nโซเดียม: 7 มิลลิกรัม\r\n\r\nคาร์โบไฮเดรตทั้งหมด: 10.2 กรัม\r\n\r\nโปรตีน: 0.1 กรัม', 100),
('Milk Boro', 10, 'ขนมรสนมBoro สำหรับคนทุกเพศทุกวัยทานได้ตั้งแต่เด็กจนถึงผู้สูงอายุ\r\n\r\nด้วยความหวานแบบธรรมชาติและเนื้อที่สัมผัสละลายในปากจะทำให้คุณฟินลืมไม่ลงเลยทีเดียว', 'ขนาด: 90 กรัม\r\n\r\nส่วนประกอบ:\r\n\r\nแป้งมันฝรั่ง, น้ำตาล, ไข่, กลูโคส, มอลโตส, นมไขมันต่ำ\r\n\r\nข้อมูลโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 347 กิโลแคลอรี่\r\n\r\nไขมันทั้งหมด: 0.7 กรัม\r\n\r\nโซเดียม: 19 มิลลิกรัม\r\n\r\nคาร์โบไฮเดรตทั้งหมด: 83.8 กรัม\r\n\r\nโปรตีน: 1.4 กรัม', 155),
('Kyoto Ramune', 11, 'ลูกอมที่จะละลายในปาก แล้วให้รสเปรี้ยวหวานที่น่าหลงใหล ชวนคิดถึง และมีความซ่าของโซดาที่อมได้ไม่เบื่อ', 'ขนาด: 90 กรัม\r\n\r\nส่วนประกอบ:\r\n\r\nน้ำตาล, แป้งข้าวโพด, สารที่ให้กรด, เบกกิ้งโซดา, แต่งปรุงกลิ่นสังเคราะห์\r\n\r\nข้อมูลโภชนาการ:\r\n\r\nพลังงานทั้งหมด: 384 กิโลแคลอรี่\r\n\r\nไขมันทั้งหมด: 0 กรัม\r\n\r\nโซเดียม: 1มิลลิกรัม\r\n\r\nคาร์โบไฮเดรตทั้งหมด: 96 กรัม\r\n\r\nโปรตีน: 0 กรัม', 147),
('Knabber Esspapier รสสตอเบอร์รี่', 12, 'ขนมกระดาษยอดฮิตสำหรับเด็กทุกเพศทุกวัย ใคร ๆ ก็ชอบ\r\n\r\nเล่นสนุก กินอร่อย เขียนได้ แผ่นบางกรอบหักได้ก๊อบแก๊บ', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 25 กรัม\r\n\r\n-แป้งสาลี 86% แป้งมัน 14% น้ำบีตรูท 0.8% กลิ่นผลไม้รวม\r\n\r\nซูคาโลส', 128),
('มันฝรั่งแผ่นทอดไขมันต่ำ Ruffles', 13, 'มันฝรั่งแท้ทอดกรอบ ชนิดไขมันต่ำ\r\n\r\nจะกินเยอะแค่ไหนก็ไม่ต้องกลัวอ้วน รสชาติดั้งเดิม\r\n\r\nกรอบสนุก แสนอร่อย', 'ข้อมูลโภชนาการ\r\n\r\n- ขนาด 28 กรัม\r\n\r\n- มันฝรั่ง , น้ำมันพืช(ดอกทานตะวัน,ข้าวโพด,คาโนลา) ,\r\n\r\nเกลือ', 120),
('ขนมถั่วลิสง Bamba', 14, 'ไม่มีใครจะไม่รู้จักBamba ขนมถั่วลิสง ที่นิยมในหมูเด็ก\r\n\r\nและวัยรุ่น ส่วนผสมจากถั่วลิสงถึง49%\r\n\r\nถ้าไม่เคยกินถือว่าพลาดแล้ว', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 25 กรัม\r\n\r\n- ถั่ว 49% ,ข้าวโพด ,น้ำมันปาล์ม ,เกลือ', 170),
('ตอร์ตียาแผ่นทอด รสมะนาว', 15, 'ขนมข้าวโพดทอด สไตล์เม็กซิโก รสมะนาว\r\n\r\nรสชาติแปลกใหม่ในหมู่คนอเมริกา แค่ลอง\r\n\r\nแล้วคุณจะติดใจ', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 28 กรัม\r\n\r\n- ข้าวโพด ,น้ำมันพืช(ข้าวโพด, คาโนลา ,ดอกทานตะวัน)\r\n\r\n,เกลือ ,น้ำตาล ,เจือรสธรรมชาติ(มะนาว) ,ซาวครีม\r\n\r\n,รำข้าวโพด,เครื่องเทศ, สารสกัดจากยีสต์', 100),
('Mott’s เจลลี่ รสเบอร์รี่', 16, 'เจลลี่ รสเบอร์รี่ ทำจากน้ำผลไม้แท้ มีประโยชน์ต่อสุขภาพ\r\n\r\nกินง่าย อร่อยง่าย พกไปได้ทุกที่ เหมือนได้กินน้ำผลไม้แท้', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 23 กรัม\r\n\r\n-น้ำเชื่อมข้าวโพด, น้ำตาล ,แป้งข้าวโพด\r\n\r\n,น้ำลูกแพร์เข้มข้น, น้ำแอปเปิ้ลเข้มข้น,\r\n\r\nน้ำสตรอเบอร์รี่เข้มข้น, น้ำแครอทเข้มข้น', 110),
('SUNCHIPS ขนมธัญพืช รสดั้งเดิม', 17, 'ขนมธัญพืช ดีต่อสุขภาพ\r\n\r\nประกอบไปด้วยธัญพืชนานาชนิด\r\n\r\nที่คุณได้ลิ้มลองแล้วจะหยุดกินไม่ได้\r\n\r\nนิยมกันในหมู่คนอเมริกา', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 28 กรัม\r\n\r\n-ธัญพืช (ข้าวโพด ,ดอกทานตะวัน ,คาโนลา) ,\r\n\r\nแป้งข้าวกล้อง ,แป้งข้าวโอ๊ต ,น้ำตาล ,เกลือ', 130),
('ขนมเพรทเซลจิ๋ว Roldgold รสดั้งเดิม', 18, 'ขนมเพรทเซลจิ๋ว รสดั้งเดิม ไร้ไขมัน อร่อย กินเพลิน\r\n\r\nมีติดไว้ที่บ้านสิ กี่ถุงๆก็ไม่เคยพอ', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 28 กรัม\r\n\r\n-แป้งสาลี ,เนียซิน ,เกลือ ,น้ำเชื่อมข้าวโพด\r\n\r\n,สารสกัดจากมอลต์', 110),
('Stacy’s ขนมมันฝรั่งทอด', 19, 'ขนมมันฝรั่งแท้ทอดกรอบ หั่นสไลด์ หยิบง่าย กินง่าย\r\n\r\nอร่อยได้หลายสไตล์ สามารถนำไปmix&amp;match อาหาร\r\n\r\nหรือซอสต่างๆ เพิ่มสีสันความสนุกให้กับชีวิตประจำวันต้อง\r\n\r\nStacy’s', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 28 กรัม\r\n\r\n- แป้งสาลี,เนียซิน,น้ำมันดอกทานตะวัน ,น้ำมันคาโนลา\r\n\r\n,น้ำตาลอ้อย ,กลูเตนข้าวสาลี , เกลือทะเล , 2% จาก\r\n\r\nสารสกัดมอลต์ ,ยีสต์ , สารสกัดโรสแมร์รี่ ,แป้งข้าวบาร์เล่ต์', 119),
('Cracker Jack ป๊อปคอร์น รสคาราเมล และถั่ว', 20, 'อร่อยเพลินกับป๊อปคอร์นหอมกลิ่นคาราเมล\r\n\r\nหวานกลมกล่อม กับถั่วเป็นเม็ด\r\n\r\nเข้ากันได้ดีทุกสถานการณ์ หรือเป็นเพื่อนคู่ใจ\r\n\r\nยามดูหนังที่ขาดไม่ได้', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 28 กรัม\r\n\r\n-น้ำตาล, น้ำเชื่อมข้าวโพด, ป๊อปคอร์น, ถั่ว, เกลือ,\r\n\r\nกากน้ำตาล, น้ำมันข้าวโพด และน้ำมันถั่วเหลือง,\r\n\r\nเลซิตินจากถั่วเหลือง', 145),
('ISLENO ขนมกล้วยทอด รสดั้งเดิม', 21, 'กล้วยแผ่นทอด กินง่ายสะดวกสบาย\r\n\r\nเหมือนกินกล้วยจากสวน แผ่นบางกรอบกำลังดี\r\n\r\nเคี้ยวเพลินจนลืมการกินกล้วยแบบเดิมๆไปเลย', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 28 กรัม\r\n\r\n-กล้วย ,น้ำมันพืช(ถั่วขาว,ข้าวโพด,เมล็ดฝ้าย) และเกลือ', 119),
('SABRITONES รสพริกและมะนาว', 22, 'ขนมธัญพืชทอดกรอบ รสจี๊ดจ๊าด\r\n\r\nถูกปากคนไทยแน่นอน ด้วยรสเผ็ดและมะนาว\r\n\r\nเข้ากันได้ดี เป็นขนมที่ขาดไม่ได้เลยจริงๆ', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 28 กรัม\r\n\r\n- แป้งสาลี, น้ำมันเมล็ดฝ้าย, น้ำมันคาโนลา, แป้งข้าวโพด,\r\n\r\nเกลือ, พริก, ผงฟู ,น้ำมันดอกทานตะวัน, น้ำเชื่อมข้าวโพด,\r\n\r\nน้ำมะนาว', 139),
('SANTITAS รส Sazonados', 23, 'ขนมตอร์ตียาทำจากแป้งข้าวโพด สไตล์เม็กซิกัน\r\n\r\nรสชาติแปลกใหม่ที่ต้องได้ลิ้มลอง\r\n\r\nหาทานได้ง่ายแล้วในถุงนี้', 'ข้อมูลโภชนาการ\r\n\r\n-ขนาด 28 กรัม\r\n\r\n-ข้าวโพด ,น้ำมันพืช(ดอกทานตะวัน,ข้าวโพด,คาโนลา)\r\n\r\n,เกลือ,ผงปาปิก้า,ผงพริก,ผงกระเทียม', 129);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `pid` int(11) NOT NULL,
  `rate` double NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`pid`, `rate`, `rid`) VALUES
(1, 5, 1),
(2, 4.8, 2),
(14, 3.6, 3),
(1, 1.4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`picid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `picid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
