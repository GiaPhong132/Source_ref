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
(1, 2900, 'Visual Studio Code', 'Powerful', 'Visual Studio Code is a lightweight but powerful
source code editor which runs on your desktop and is available for Windows, macOS and Linux.
It comes with built-in support for JavaScript, TypeScript and Node.js and has a rich ecosystem
 of extensions for other languages (such as C++, C#, Java, Python, PHP, Go) and runtimes
 (such as .NET and Unity).', 'public2/images/product/visual_studio_code.png');

INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(2, 5900, 'Docker', 'Powerful', 'Docker is a Linux-based, open-source containerization platform that developers
use to build, run, and package applications for deployment using containers. Unlike virtual machines, Docker
containers offer: OS-level abstraction with optimum resource utilization.', 'public2/images/product/docker.png');


INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(3, 3300, 'PhpStorm', 'Powerful', 'PhpStorm is an Integrated Development Environment for PHP developers built
on top of the IntelliJ IDEA platform. JetBrains PhpStorm is an innovative and cross-platform IDE that become
popular over the last couple of year. It is perfect for working with Drupal, Symfony, Laravel, WordPress,
Zend Framework, Joomla, CakePHP, and other frameworks.', 'public2/images/product/phpstorm.png');


INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(4, 4800, 'Jupyter', 'Powerful', 'The Jupyter Notebook is an open source web application that you can
use to create and share documents that contain live code, equations, visualizations, and text. Jupyter
Notebook is maintained by the people at Project Jupyter.', 'public2/images/product/jupyter.png');


INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(5, 2100, 'Vim', 'Powerful', 'Vim is a highly configurable text editor built to make creating and changing
any kind of text very efficient. It is included as "vi" with most UNIX systems and with Apple OS X. Vim is
rock stable and is continuously being developed to become even better.', 'public2/images/product/vim.png');


INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(6, 7200, 'Eclipse', 'Powerful', 'Eclipse is an integrated development environment (IDE) for
Java and other programming languages like C, C++, PHP, and Ruby etc. Development environment
provided by Eclipse includes the Eclipse Java development tools (JDT) for Java, Eclipse CDT
for C/C++, and Eclipse PDT for PHP, among others.', 'public2/images/product/eclipse.png');


INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(7, 4000, 'Sublime', 'Powerful', 'Sublime Text Editor is a full featured Text editor for
editing local files or a code base. It includes various features for editing code base
which helps developers to keep track of changes.', 'public2/images/product/sublime.png');


INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(8, 1000, 'Atom', 'Powerful', 'Atom is a free and open-source text and source code editor for macOS,
Linux, and Microsoft Windows[8] with support for plug-ins written in JavaScript, and embedded Git Control.
Developed by BKBLUE, Atom is a desktop application built using web technologies.', 'public2/images/product/atom.png');


INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(9, 4000, 'PyCharm', 'Powerful', 'PyCharm is a dedicated Python Integrated Development Environment (IDE)
providing a wide range of essential tools for Python developers, tightly integrated to create a convenient
environment for productive Python, web, and data science development.', 'public2/images/product/pycharm.png');


INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(10, 8000, 'Android-Studio', 'Powerful', 'Android Studio is an IDE for BKBLUE launched on 16th May 2013
, during BKBLUE I/O 2013 event. Android Studio contains all the Android tools to design, test, debug,
and profile your application.', 'public2/images/product/androidstudio.png');


INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(11, 7000, 'IntelliJ', 'Powerful', 'IntelliJ is one of the most powerful and popular Integrated Development Environments
(IDE) for Java. It is developed and maintained by JetBrains and available as community and ultimate edition. This feature
rich IDE enables rapid development and helps in improving code quality.', 'public2/images/product/intellij.png');


INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(12, 6000, 'Visual Studio', 'Powerful', 'To develop any type of app or learn a language, you’ll be working in the
Visual Studio Integrated Development Environment (IDE). Beyond code editing, Visual Studio IDE brings together
graphical designers, extensions and many more features in one place. ', 'public2/images/product/visualstudio.png');


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
('giaphong132@gmail.com', 'public2/images/user/defau.png', 'Bùi Đoàn', 'Phong', 1, 20, '1', '2022-06-16 20:48:56', '2022-06-17 17:42:04', '$2y$10$NtrSaLnNsR29ouPqCuQF5ukGtuttVs70TYntJrdkyqWEC0YM417H.'),
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