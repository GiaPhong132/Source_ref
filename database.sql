DROP database IF EXISTS ass_web;
CREATE DATABASE ass_web;
USE ass_web;


--
-- Table structure for table `product`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- --------------------------------------------------------
-- --------------------------------------------------------
--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(1, 2900, 'Visual Studio Code', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/visual_studio_code.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(2, 5900, 'Docker', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/docker.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(3, 3300, 'PhpStorm', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/phpstorm.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(4, 4800, 'Jupyter', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/jupyter.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(5, 2100, 'Vim', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/vim.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(6, 7200, 'Eclipse', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/eclipse.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(7, 4000, 'Sublime', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/sublime.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(8, 1000, 'Atom', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/atom.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(9, 4000, 'PyCharm', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/pycharm.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(10, 8000, 'Android-Studio', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/androidstudio.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(11, 7000, 'IntelliJ', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/intellij.png');
INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(12, 6000, 'Visual Studio', 'Powerful', 'Đây là một sản phẩm đến từ BKBLUE', 'public2/images/product/visualstudio.png');


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `profile_photo`, `fname`, `lname`, `gender`, `age`, `phone`, `createAt`, `updateAt`, `password`) VALUES
('admin@gmail.com', 'public/img/user/default.png', 'admin', 'admin', 1, 20, '123123', '2022-06-16 21:46:51', '2022-06-16 21:46:51', '$2y$10$GTSVSDI2TFhxJnNFrS8tj.2GKKkbAfiZtvYbRxUvIP/Mp6dtcwC8u'),
('giaphong132@gmail.com', 'public2/images/user/2022_06_17_12_42_04pm.png', 'Bùi Đoàn', 'Phong', 1, 20, '1', '2022-06-16 20:48:56', '2022-06-17 17:42:04', '$2y$10$NtrSaLnNsR29ouPqCuQF5ukGtuttVs70TYntJrdkyqWEC0YM417H.'),
('phong.bui132@hcmut.edu.vn', 'public/img/user/default.png', 'Phong', 'Phong', 1, 20, '0704701412', '2022-06-16 20:49:12', '2022-06-16 20:49:12', '$2y$10$CMNaGhePLvkl.U4DuIMRfesAGCn3uJohnSaBMyi1EK1pVSGk7OcQi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `company`
--

-- Indexes for table `news`
--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--

-- AUTO_INCREMENT for table `news`
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`parent`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;