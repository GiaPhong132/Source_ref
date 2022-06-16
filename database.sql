DROP database IF EXISTS webb;
CREATE DATABASE webb;
USE webb;


--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `reviews` varchar(10000) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `rating` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `description`, `reviews`, `img`, `rating`) VALUES
(1, 20, 'CLion (C++ IDE 128 GB)', 'CLion is a smart IDE for developing in C or C++ on Windows, Linux, and macOS.\r\n                            It\'s packed with an in-depth code analyzer, a range of code generation options,\r\n                            and the ability to navigate to anywhere in your code in one click. CLion understands\r\n                            modern C++ standards and provides preprocessor support. It also integrates with GDB/LLDB\r\n                            and a set of unit testing frameworks.', '1985', 'clion.png', 5),
(2, 14.99, 'PHP STORM', 'PhpStorm is an Integrated Development Environment for PHP developers built on top of the IntelliJ IDEA platform. JetBrains PhpStorm is an innovative and cross-platform IDE that become popular over the last couple of year. It is perfect for working with Drupal, Symfony, Laravel, WordPress, Zend Framework, Joomla, CakePHP, and other frameworks. ', '1985', 'phpstorm.png', 5),
(3, 29.99, 'Visual Studio Code (128 GB)', 'Visual Studio Code is a lightweight but powerful source code editor which runs on your desktop and is available for Windows, macOS and Linux. It comes with built-in support for JavaScript, TypeScript and Node.js and has a rich ecosystem of extensions for other languages (such as C++, C#, Java, Python, PHP, Go) and runtimes (such as .NET and Unity).', '1985', 'visual.png', 5),
(4, 14.99, 'Visual Studio 2022 ', 'Visual Studio 2022 is the best Visual Studio ever. Our first 64-bit IDE makes it easier to work with even bigger projects and more complex workloads. The stuff you do every day—like typing code and switching branches—feels more fluid more responsive. ', '2000', 'visual2.png', 4),
(5, 21.99, 'Vim (IDE 128 GB) ', 'Vim is a highly configurable text editor built to make creating and changing any kind of text very efficient. It is included as \"vi\" with most UNIX systems and with Apple OS X. Vim is rock stable and is continuously being developed to become even better. ', '1500', 'vim.png', 4),
(6, 29.99, 'Python Compiler', 'This IDE is the most popular IDE used for Python scripting language. It offers some of the best features to its users and developers in the following aspects − Code completion and inspection, Advanced debugging, Support for web programming and frameworks such as Django and Flask.', '3999', 'python.png', 5),
(7, 19.99, 'Eclipse (Java IDE)', 'Eclipse is an integrated development environment (IDE) for Java and other programming languages like C, C++, PHP, and Ruby etc. Development environment provided by Eclipse includes the Eclipse Java development tools (JDT) for Java, Eclipse CDT for C/C++, and Eclipse PDT for PHP, among others.', '1999', 'eclipse.png', 5),
(8, 25.99, 'Jupyter Notebook', 'The Jupyter Notebook is an open source web application that you can use to create and share documents that contain live code, equations, visualizations, and text. Jupyter Notebook is maintained by the people at Project Jupyter.', '2988', 'jupyter.png', 5);

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


INSERT INTO `user` (`email`, `profile_photo`, `fname`, `lname`, `gender`, `age`, `phone`, `createAt`, `updateAt`, `password`) VALUES
('admin@gmail.com', 'public/img/user/default.png', 'admin', 'admin', 1, 20, '123123', '2022-06-16 21:46:51', '2022-06-16 21:46:51', '$2y$10$GTSVSDI2TFhxJnNFrS8tj.2GKKkbAfiZtvYbRxUvIP/Mp6dtcwC8u'),
('giaphong132@gmail.com', 'public/img/user/default.png', 'Bùi Đoàn', 'Phong', 1, 20, '+103971460', '2022-06-16 20:48:56', '2022-06-16 20:48:56', '$2y$10$NtrSaLnNsR29ouPqCuQF5ukGtuttVs70TYntJrdkyqWEC0YM417H.'),
('phong.bui132@hcmut.edu.vn', 'public/img/user/default.png', 'Phong', 'Phong', 1, 20, '0704701412', '2022-06-16 20:49:12', '2022-06-16 20:49:12', '$2y$10$CMNaGhePLvkl.U4DuIMRfesAGCn3uJohnSaBMyi1EK1pVSGk7OcQi');

--

