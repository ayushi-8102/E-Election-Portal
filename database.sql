


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";





CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(2, 'Admin', 'Admin', 'admin', 'admin'),
(6, 'Ayushi', 'Shukla', 'admin001', 'admin001');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `country` varchar(500) NOT NULL,
  `club` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `country`, `club`, `img`) VALUES
(46, 'Class Representative(CR)', 'Ankit', 'Bhatia', 'I have a good CPI and would love to take this responsibility', 'Encore MOD-5', 'images/cr1.jpg'),
(47, 'Class Representative(CR)', 'Sana', 'Khan', 'I have a good CPI and would love to take this responsibility', 'Shades', 'images/images (4).png'),
(48, 'Class Representative(CR)', 'Tanmay', 'Mishra', 'After serving as a CR In the Last Semester I woukd love to take this responsibility again!', 'None', 'images/game-1.jpg'),
(53, 'MOD-5 Sec', 'Divanshi', 'Singh', 'I am Passionate about dancing and would love to be a secratory of our wonderful family', 'MOD-5 ,Shades', 'images/mod-2.jpg'),
(54, 'MOD-5 Sec', 'Piyush', 'Shinde', 'After serving as ythe JSEC, I am all ready for this post!', 'MOD-5', 'images/mod-3.png'),
(55, 'MOD-5 Sec', 'Arika', 'gupta', 'Dancing is my passion from childhood, would love to be a Sec and guild everyone who are as ethusiast as me!', 'Masquarade MOD5', 'images/mod-1.jpg'),
(58, 'Encore Sec', 'Shreeyam', 'Tiwari', 'Music makes me move and after handling so many events I guess i am all ready for this rigirous job!', 'Encore MOD5 ', 'images/encore-3.png'),
(59, 'Encore Sec', 'Mohammed', 'Salah', 'After serving as the JSEC, I think I am all ready for this post', 'Encore', 'images/encore-2.png'),
(60, 'Encore Sec', 'Bella', 'Kuruian', 'Vote me if you want more fun events , concerts and celebrities in the house:)', 'Encore MOD5 Masquarade', 'images/encore-1.png'),
(62, 'Obscura Sec', 'Kavan', 'Shah', 'After serving as ythe JSEC, I am all ready for this post!', 'Obscura Encore', 'images/obs-3.jpg'),
(63, 'Obscura Sec', 'Yuvraj', 'Ratore', 'Photography is my passion and after handling so many events I guess i am all ready for this rigirous post!', 'Pensieve Obscura', 'images/obs-2.jpg'),
(64, 'Obscura Sec', 'Sheetal', 'Khare', 'I,m Passionate about photography and would love to be a secratory of our wonderful family', 'Obscura', 'images/obs-1.jpg'),
(66, 'Masquarade Sec', 'Niyati', 'Mehta', 'Acting makes me move and after handling so many events I guess i am all ready for this rigirous job!', 'Masquarade', 'images/drama-3.png'),
(67, 'Masquarade Sec', 'Pallavi', 'Sharma', 'Acting is my passion from childhood, would love to be a Sec and guild everyone who are as ethusiast as me!', 'Masquarade Obscura', 'images/drama-2.jpg'),
(68, 'Masquarade Sec', 'Tushar', 'Aggrawal', 'After serving as the JSEC, I am all ready for this post!', 'Masquarade Pensieve', 'images/drama-1.jpg'),
(71, 'Pensieve Sec', 'Siddhant', 'Mohan', 'Writing is my passion from childhood, would love to be a Sec and guild everyone who are as ethusiast as me!', 'Pensieve MOD5', 'images/lit-3.jpg'),
(72, 'Pensieve Sec', 'Gautam', 'Sharma', 'After serving as ythe JSEC, I am all ready for this post!', 'Pensieve', 'images/lit-2.png'),
(73, 'Pensieve Sec', 'Nidhi', 'Ahuja', 'Vote me if you want more fun events , stand ups , open-mics and celebrities in the house:)', 'Pensieve Obscura', 'images/lit-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `firstname`, `lastname`, `email_address`, `password`) VALUES
(8, 'Himanshu', 'Verma', 'demo@example.com', 'Him_1234');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `users_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `candidate_id`, `users_id`) VALUES
(12, '', '5'),
(13, '', '5'),
(14, '', '5'),
(15, '', '5'),
(16, '', '5'),
(17, '', '5'),
(18, '', '5'),
(19, '', '5'),
(20, '', '5'),
(21, '', '5'),
(22, '', '5'),
(23, '', '5'),
(24, '', '5'),
(25, '', '5'),
(26, '', '5'),
(27, '', '5'),
(28, '', '5'),
(29, '', '5'),
(30, '', '5'),
(31, '', '5'),
(32, '', '5'),
(33, '', '5'),
(34, '68', '5'),
(35, '46', '5'),
(36, '58', '5'),
(37, '59', '5'),
(38, '60', '5'),
(39, '27', '5'),
(40, '63', '5'),
(41, '71', '5'),
(42, '62', '5'),
(43, '54', '5'),
(67, '48', '8'),
(68, '53', '8'),
(69, '58', '8'),
(70, '62', '8'),
(71, '68', '8'),
(73, '74', '8'),
(74, '55', '8'),
(75, '66', '8'),
(76, '72', '8');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

