-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `text` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `text`) VALUES
(10, 'VelMurugan ', 'present'),
(11, 'ajith kumar', 'present'),
(12, 'VelMurugan ', 'absent'),
(13, 'ajith kumar ', 'present'),
(14, 'ajith kumar', 'present'),
(15, 'VelMurugan ', 'absent'),
(16, 'ajith kumar', 'absent'),
(17, 'VelMurugan ', 'present'),
(18, 'Cistron', 'present'),
(19, 'VelMurugan ', 'present'),
(20, 'Cistron', 'present'),
(21, 'ajith kumar', 'present'),
(24, 'ajith kumar', 'present'),
(30, 'ajith', 'absent'),
(31, 'ajax', 'present'),
(32, 'ajith', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `empid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `empid`, `password`) VALUES
(1, 'e378', '123'),
(2, 'e367', '123'),
(3, 'e327', '123'),
(4, 'e0007', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
