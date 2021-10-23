-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 11:12 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id_answer` int(11) NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id_answer`, `answer`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `name_course` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `name_course`) VALUES
(1, 'Tiêng Anh 1'),
(2, 'Tiếng Anh 2'),
(3, 'Tiếng Anh 3'),
(4, 'Tiếng Anh 4'),
(5, 'Tiếng Anh 5');

-- --------------------------------------------------------

--
-- Table structure for table `grammar`
--

CREATE TABLE `grammar` (
  `id_grammar` int(11) NOT NULL,
  `tittle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(8000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_course` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grammar`
--

INSERT INTO `grammar` (`id_grammar`, `tittle`, `description`, `content`, `id_course`, `id_teacher`) VALUES
(1, 'Thì Hiện Tại Đơn (Simple Present)', 'S + Vs/es + O (Đối với động từ Tobe)\r\nS + do/does + V + O (Đối với động từ thường)', 'Cách dùng thì hiện tại đơn\r\nThì hiện tại đơn diễn tả một chân lý , một sự thật hiển nhiên. Ex: The sun ries in the East. Tom comes from England.\r\nThì hiện tại đơn diễn tả 1 thói quen , một hành động xảy ra thường xuyên ở hiện tại. Ex: Mary often goes to school by bicycle. I get up early every morning.\r\nLưu ý : ta thêm "es" sau các động từ tận cùng là : O, S, X, CH, SH.\r\nThì hiện tại đơn diễn tả năng lực của con người : Ex : He plays badminton very well\r\nThì hiện tại đơn còn diễn tả một kế hoạch sắp xếp trước trong tương lai hoặc thời khoá biểu , đặc biệt dùng với các động từ di chuyển.', 1, 1),
(2, '								Thì hiện tại tiếp diễn (Present Continuous)						', '								S + be (am/ is/ are) + V_ing + O						', '<p>C&aacute;ch d&ugrave;ng Th&igrave; hiện tại tiếp diễn Th&igrave; hiện tại tiếp diễn tả một h&agrave;nh động đang diễn ra v&agrave; k&eacute;o d&agrave;i d&agrave;i một thời gian ở hiện tại. Ex: The children are playing football now. Th&igrave; n&agrave;y cũng thường tiếp theo sau c&acirc;u đề nghị, mệnh lệnh. Ex: Look! the child is crying. Be quiet! The baby is sleeping in the next room. Th&igrave; n&agrave;y c&ograve;n diễn tả 1 h&agrave;nh động xảy ra lặp đi lặp lại d&ugrave;ng với ph&oacute; từ ALWAYS: Ex : He is always borrowing our books and then he doesn&#39;t remember - Th&igrave; n&agrave;y c&ograve;n được d&ugrave;ng để diễn tả một h&agrave;nh động sắp xảy ra ( ở tương lai gần) Ex: He is coming tomrow Lưu &yacute; : Kh&ocirc;ng d&ugrave;ng th&igrave; n&agrave;y với c&aacute;c động từ chỉ nhận thức chi gi&aacute;c như : to be, see, hear, understand, know, like , want , glance, feel, think, smell, love. hate, realize, seem, remmber, forget,.......... Ex: I am tired now. She wants to go for a walk at the moment. Do you understand your lesson? Khi học tiếng anh online, bạn c&oacute; thể đọc th&ecirc;m về c&aacute;ch chia th&igrave; trong tiếng anh</p>\r\n', 2, 1),
(11, '												\r\n			Tương lai đơn (Simple Future)						', '												\r\n			S + shall/will + V(infinitive) + O						', '<p><strong>C&aacute;ch d&ugrave;ng th&igrave; tương lai đơn</strong>:</p>\r\n\r\n<ul>\r\n	<li>Khi bạn đo&aacute;n (predict, guess), d&ugrave;ng will hoặc be going to.</li>\r\n	<li>Khi bạn chỉ dự định trước, d&ugrave;ng be going to kh&ocirc;ng được d&ugrave;ng will. CHỦ TỪ + AM (IS/ARE) GOING TO + &ETH;ỘNG TỪ (ở hiện tại: simple form)</li>\r\n	<li>Khi bạn diễn tả sự t&igrave;nh nguyện hoặc sự sẵn s&agrave;ng, d&ugrave;ng will kh&ocirc;ng được d&ugrave;ng be going to. CHỦ TỪ + WILL + &ETH;ỘNG TỪ (ở hiện tại: simple form)</li>\r\n</ul>\r\n', 1, 1),
(12, '								Thì quá khứ đơn (Simple Past)\r\n						', '								S + was/were + V_ed + O\r\n						', '<p>Dấu hiệu nhận biết th&igrave; qu&aacute; khứ đơn: yesterday, yesterday morning, last week, las month, last year, last night.</p>\r\n\r\n<p>C&aacute;ch d&ugrave;ng th&igrave; qu&aacute; khứ đơn: Th&igrave; qu&aacute; khứ đơn diễn tả h&agrave;nh động đ&atilde; xảy ra v&agrave; kết th&uacute;c trong qu&aacute; khứ với thời gian x&aacute;c định.</p>\r\n\r\n<p>CHỦ TỪ + &ETH;ỘNG TỪ QU&Aacute; KHỨ</p>\r\n\r\n<ul>\r\n	<li>When + th&igrave; qu&aacute; khứ đơn (simple past)</li>\r\n	<li>When + h&agrave;nh động thứ nhất</li>\r\n</ul>\r\n', 1, 1),
(13, '								\r\n			Thì quá khứ tiếp diễn (Past Continuous)			', '								\r\n			 S + was/were + V_ing + O			', '<p>Dấu hiệu nhận biết th&igrave; qu&aacute; khứ tiếp diễn: While, at that very moment, at 10:00 last night, and this morning (afternoon).</p>\r\n\r\n<p>C&aacute;ch d&ugrave;ng th&igrave; qu&aacute; khứ tiếp diễn: D&ugrave;ng để diễn tả h&agrave;nh động đ&atilde; xảy ra c&ugrave;ng l&uacute;c. Nhưng h&agrave;nh động thứ nhất đ&atilde; xảy ra sớm hơn v&agrave; đ&atilde; đang tiếp tục xảy ra th&igrave; h&agrave;nh động thứ hai xảy ra.</p>\r\n\r\n<p>CHỦ TỪ + WERE/WAS + &ETH;ỘNG T&Ugrave; TH&Ecirc;M -ING. While + th&igrave; qu&aacute; khứ tiếp diễn (past progressive)</p>\r\n', 2, 1),
(14, '								Thì hiện tại hoàn thành (Present Perfect)\r\n						', '								\r\n			S + have/ has + Past participle + O			', '<p>Dấu hiệu nhận biết th&igrave; hiện tại ho&agrave;n th&agrave;nh: already, not...yet, just, ever, never, since, for, recenthy, before...</p>\r\n\r\n<p>C&aacute;ch d&ugrave;ng th&igrave; hiện tại ho&agrave;n th&agrave;nh:</p>\r\n\r\n<ul>\r\n	<li>Th&igrave; hiện tại ho&agrave;n th&agrave;nh diễn tả h&agrave;nh động đ&atilde; xảy ra hoặc chưa bao giờ xảy ra ở 1 thời gian kh&ocirc;ng x&aacute;c định trong qu&aacute; khứ.</li>\r\n	<li>Th&igrave; hiện tại ho&agrave;n th&agrave;nh cũng diễn tả sự lập đi lập lại của 1 h&agrave;nh động trong qu&aacute; khứ.</li>\r\n	<li>Th&igrave; hiện tại ho&agrave;n th&agrave;nh cũng được d&ugrave;ng với i since v&agrave; for.</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<ul>\r\n	<li>Since + thời gian bắt đầu (1995, I was young, this morning etc.) Khi người n&oacute;i d&ugrave;ng since, người nghe phải t&iacute;nh thời gian l&agrave; bao l&acirc;u.</li>\r\n	<li>For + khoảng thời gian (từ l&uacute;c đầu tới b&acirc;y giờ) Khi người n&oacute;i d&ugrave;ng for, người n&oacute;i phải t&iacute;nh thời gian l&agrave; bao l&acirc;u.</li>\r\n</ul>\r\n</blockquote>\r\n', 3, 1),
(15, '								Thì hiện tại hoàn thành tiếp diễn (Present Perfect Continuous)\r\n						', '								\r\n			S + have/ has + been + V_ing + O			', '<p><strong>Dấu hiệu nhận biết Th&igrave; hiện tại ho&agrave;n th&agrave;nh tiếp diễn</strong>: all day, all week, since, for, for a long time, almost every day this week, recently, lately, in the past week, in recent years, up until now, and so far.</p>\r\n\r\n<p><strong>C&aacute;ch d&ugrave;ng th&igrave; hiện tại ho&agrave;n th&agrave;nh tiếp diễn</strong>: Th&igrave; hiện tại ho&agrave;n th&agrave;nh tiếp diễn nhấn mạnh khoảng thời gian của 1 h&agrave;nh động đ&atilde; xảy ra trong qu&aacute; khứ v&agrave; tiếp tục tới hiện tại (c&oacute; thể tới tương lai).</p>\r\n', 4, 1),
(16, '								Quá khứ hoàn thành (Past Perfect)\r\n						', '								S + had + Past Participle + O\r\n						', '<p><strong>Dấu hiệu nhận biết th&igrave; qu&aacute; khứ ho&agrave;n th&agrave;nh</strong>: after, before, as soon as, by the time, when, already, just, since, for....</p>\r\n\r\n<p><strong>C&aacute;ch d&ugrave;ng th&igrave; qu&aacute; khứ ho&agrave;n th&agrave;nh</strong>: Th&igrave; qu&aacute; khứ ho&agrave;n th&agrave;nh diễn tả 1 h&agrave;nh động đ&atilde; xảy ra v&agrave; kết th&uacute;c trong qu&aacute; khứ trước 1 h&agrave;nh động kh&aacute;c cũng xảy ra v&agrave; kết th&uacute;c trong qu&aacute; khứ.</p>\r\n', 5, 1),
(17, '								\r\n			Quá khứ hoàn thành tiếp diễn (Pas Perfect Continuous)			', '								\r\n			S + had + been + V_ing + O			', '<p>Từ nhận biết th&igrave; qu&aacute; khứ ho&agrave;n th&agrave;nh tiếp diễn: until then, by the time, prior to that time, before, after.</p>\r\n\r\n<p>C&aacute;ch d&ugrave;ng th&igrave; khứ ho&agrave;n th&agrave;nh tiếp diễn: Th&igrave; qu&aacute; khứ ho&agrave;n th&agrave;nh tiếp diễn nhấn mạnh khoảng thời gian của 1 h&agrave;nh động đ&atilde; đang xảy ra trong qu&aacute; khứ v&agrave; kết th&uacute;c trước 1 h&agrave;nh động kh&aacute;c xảy ra v&agrave; cũng kết th&uacute;c trong qu&aacute; khứ</p>\r\n', 4, 1),
(18, '				\r\n			Thì tương lai tiếp diễn (Future Continuous)', '				S + shall/will + be + V_ing+ O\r\n			', '<p>Dấu hiện nhận biết Th&igrave; tương lai tiếp diễn: in the future, next year, next week, next time, and soon.</p>\r\n\r\n<p>C&aacute;ch d&ugrave;ng Th&igrave; tương lai tiếp diễn:Th&igrave; tương lai tiếp diễn diễn tả h&agrave;nh động sẽ xảy ra ở 1 thời điểm n&agrave;o đ&oacute; trong tương lai.</p>\r\n\r\n<ul>\r\n	<li>CHỦ TỪ + WILL + BE + &ETH;ỘNG TỪ TH&Ecirc;M -ING hoặc</li>\r\n	<li>CHỦ TỪ + BE GOING TO + BE + &ETH;ỘNG TỪ TH&Ecirc;M -ING</li>\r\n</ul>\r\n', 1, 1),
(19, '								Thì tương lai hoàn thành (Future Perfect)\r\n						', '								S + shall/will + have + Past Participle\r\n						', '<p>Dấu hiệu nhận biết Th&igrave; tương lai ho&agrave;n th&agrave;nh: by the time and prior to the time (c&oacute; nghĩa l&agrave; before)</p>\r\n\r\n<p>C&aacute;ch d&ugrave;ng Th&igrave; tương lai ho&agrave;n th&agrave;nh: Th&igrave; tương lai ho&agrave;n th&agrave;nh diễn tả 1 h&agrave;nh động trong tương lai sẽ kết th&uacute;c trước 1 h&agrave;nh động kh&aacute;c trong tương lai. CHỦ TỪ + WILL + HAVE + QU&Aacute; KHỨ PH&Acirc;N TỪ (PAST PARTICIPLE)</p>\r\n', 3, 1),
(20, '								\r\n			Tương Lai Hoàn Thành Tiếp Diễn (Future Perfect Continuous)			', '								S + shall/will + have been + V_ing + O\r\n						', '<p>C&aacute;ch d&ugrave;ng:Th&igrave; tương lai ho&agrave;n th&agrave;nh tiếp diễn nhấn mạnh khoảng thời gian của 1 h&agrave;nh động sẽ đang xảy ra trong tương lai v&agrave; sẽ kết th&uacute;c trước 1 h&agrave;nh động kh&aacute;c trong tương lai.</p>\r\n', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `name_question` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `choice1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `choice2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `choice3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `choice4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_course` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id_question`, `name_question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`, `id_course`, `id_teacher`) VALUES
(1, 'They always go to school ............. bicycle.', 'with', 'in', 'on', 'by', 'D', 1, 1),
(2, ' What ............ now?', 'is the time', 'does the time', 'is time', 'is it', 'A', 1, 2),
(3, ' "Do the children go to school every day?"\r\n"....................."', 'Yes, they go.', 'Yes, they do.', 'They go.', 'No, they don''t go.', 'B', 1, 1),
(4, 'Is Susan ........... home?', 'in', 'at', 'on', 'under', 'B', 3, 1),
(5, 'What color ........... his new car?', 'have', 'is', 'does', 'are', 'B', 1, 1),
(6, 'Are there many students in Room 12?', 'Yes there are', 'Yes, they are', 'Some are', 'No they aren''t', 'A', 4, 1),
(7, 'You should do your ................. before going to class', 'home work', 'homework', 'homeworks', 'housework', 'B', 1, 1),
(8, ' Mr. Pike ............ us English.', 'teach', 'teaches', 'teaching', 'to teach', 'B', 2, 1),
(9, 'Tom and ............. are going to the birthday party together', 'I', 'me', 'my', 'mine', 'A', 2, 1),
(10, 'Our English lessons are ............... long.', 'many', 'much', 'a lot of', 'very', 'D', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_test`
--

CREATE TABLE `quiz_test` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `name_question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `choice1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `choice2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `choice3` text COLLATE utf8_unicode_ci NOT NULL,
  `choice4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz_test`
--

INSERT INTO `quiz_test` (`id`, `id_question`, `id_test`, `id_course`, `name_question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(56, 1, 36, 1, 'Banana là quả gì?', 'Chuối', 'Táo', 'Cam', 'Quýt', 'A'),
(57, 2, 36, 1, 'Onion là gì?', 'Cam', 'Quýt', 'Hành', 'Tỏi', 'C'),
(58, 3, 36, 1, 'Tôi tên là gì?', 'Phong', 'Haha', 'Hihi', 'Hehe', 'A'),
(59, 4, 36, 1, 'Lê Đức Phong sinh năm bao nhiêu?', '1996', '1995', '1994', '1993', 'C'),
(60, 1, 38, 2, 'Banana là quả gì?', 'Chuối', 'Táo', 'Cam', 'Quýt', 'A'),
(61, 2, 38, 2, 'Onion là gì?', 'Cam', 'Quýt', 'Hành', 'Tỏi', 'C'),
(62, 3, 38, 2, 'Tôi tên là gì?', 'Phong', 'Haha', 'Hihi', 'Hehe', 'A'),
(63, 4, 38, 2, 'Lê Đức Phong sinh năm bao nhiêu?', '1996', '1995', '1994', '1993', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `name_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `name_student`, `email`, `phone_number`, `username`, `password`) VALUES
(1, 'Lê Đức Phong', 'leducphong21@gmail.com', '01654785965', 'phong1', 'phong1'),
(2, 'Nguyễn Đình Thành', 'nguyendinhthanh128@gmail.com', '0987654321', 'thanh1', 'thanh1');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id_teacher` int(11) NOT NULL,
  `name_teacher` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id_teacher`, `name_teacher`, `email`, `phone_number`, `username`, `password`) VALUES
(1, 'Lê Đức Phong', 'leducphong21@gmail.com', '01654179277', 'phong1', 'phong1'),
(2, 'Nguyễn Đình Thành', 'nguyendinhthanh128@gmail.com', '09877654321', 'thanh1', 'thanh1');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `name_test` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_course` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id_test`, `name_test`, `id_course`, `id_teacher`) VALUES
(2, ' de 2', 1, 2),
(18, 'đề 1', 2, 1),
(31, 'đề 1', 1, 1),
(33, 'đề 2', 2, 1),
(35, 'đề 3', 1, 1),
(36, 'đề 4', 1, 1),
(37, 'đề 3', 2, 1),
(38, 'đề 4', 2, 1),
(40, 'Đề 1', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `grammar`
--
ALTER TABLE `grammar`
  ADD PRIMARY KEY (`id_grammar`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `answer` (`answer`),
  ADD KEY `answer_2` (`answer`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indexes for table `quiz_test`
--
ALTER TABLE `quiz_test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_question` (`id_question`),
  ADD KEY `id_test` (`id_test`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teacher`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `grammar`
--
ALTER TABLE `grammar`
  MODIFY `id_grammar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `quiz_test`
--
ALTER TABLE `quiz_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `grammar`
--
ALTER TABLE `grammar`
  ADD CONSTRAINT `grammar_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`),
  ADD CONSTRAINT `grammar_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`),
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`);

--
-- Constraints for table `quiz_test`
--
ALTER TABLE `quiz_test`
  ADD CONSTRAINT `quiz_test_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `test` (`id_test`),
  ADD CONSTRAINT `quiz_test_ibfk_2` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`),
  ADD CONSTRAINT `test_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
