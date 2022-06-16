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
CREATE TABLE `NEWS` (
  `id` int AUTO_INCREMENT,
  `status` boolean DEFAULT NULL,
  `date` datetime  DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000)  DEFAULT NULL,
  `title` varchar(255)  DEFAULT NULL,
  primary key (id)
) ;

CREATE TABLE `USER` (
  `email` varchar(255) ,
  `profile_photo` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` boolean DEFAULT NULL,
  `age` int default null,
  `phone` varchar(10) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  primary key (email)
) ;

CREATE TABLE `COMMENT` (
  `id` int AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `approved` BOOLEAN,
  `content` varchar(10000),
  `news_id` int,
  `user_id` varchar(255),
  `parent` int DEFAULT NULL,
  primary key (id),
  foreign key(news_id) references NEWS(id) ON DELETE CASCADE ON UPDATE CASCADE,
  foreign key(user_id) references USER(email) ON DELETE CASCADE ON UPDATE CASCADE
);

ALTER TABLE `COMMENT`
ADD foreign key (parent) references COMMENT(id) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE `ADMIN` (
  `username` varchar(255),
  `password` varchar(255) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  primary key (username)
);

CREATE TABLE `COMPANY` (
  `id` int AUTO_INCREMENT,
	`name` varchar(255),
  `address` varchar(1000) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  primary key(id)
);


-- Example data
INSERT INTO `ADMIN` (username, password) VALUES ('admin', '');
INSERT INTO `ADMIN` (username, password) VALUES ('username', '');

INSERT INTO `USER` (email, fname, lname, gender, age, phone, password)
VALUES ('admin@hcmut.edu.vn', 'Nguyen Van', 'A', 1, 15, '0123456789', '');
INSERT INTO `USER` (email, fname, lname, gender, age, phone, password)
VALUES ('user@hcmut.edu.vn', 'Nguyen Van', 'B', 0, 30, '0123456789', '');



INSERT INTO `NEWS` (status, date, title, description, content)
VALUES (1, '2021-11-11', 'Ca nhiễm tăng, TP.HCM kiểm soát di biến động dân cư ra sao?',
'TTO - TP.HCM không lập lại các chốt kiểm soát để kiểm tra di biến động dân cư như trước đây. Tuy vậy người dân từ các tỉnh thành đến TP.HCM sẽ phải đăng ký tạm trú tạm vắng để địa phương có biện pháp kiểm soát.',
'UBND TP.HCM yêu cầu tăng cường kiểm soát chặt chẽ di biến động dân cư. Các địa phương phải nắm chắc tình hình người dân khi ra, vào địa bàn, người có nguy cơ đang lưu trú, làm việc tại các địa phương, doanh nghiệp như lái xe, phụ xe liên tỉnh, người làm việc ngoài tỉnh về địa phương lưu trú… Từ đó sẽ chủ động các biện pháp quản lý phù hợp.
Tuy nhiên trước chủ trương này của thành phố, nhiều người dân bày tỏ sự băn khoăn, không biết liệu thành phố có lập lại các chốt kiểm soát và cần phải chuẩn bị những thủ tục gì khi đến TP.HCM.
Trao đổi về vấn đề này, thượng tá Lê Mạnh Hà - phó trưởng Phòng tham mưu Công an TP.HCM - cho biết TP.HCM không lập lại các chốt kiểm soát để kiểm tra di biến động dân cư như trước đây.
Theo thượng tá Hà, biến động dân cư được hiểu là sự thay đổi về dân cư, thường trú, tạm trú, không phải là lực lượng chức năng kiểm soát người dân đi lại ở các chốt.
Hiện nay Công an TP.HCM đang thực hiện các công tác quản lý di biến động dân cư như: đăng ký thường trú, tạm trú, rà soát hộ khẩu, những ai có mặt thực tế ở địa phương. Công an TP cũng đang rà soát, đối sánh các dữ liệu dân cư, cấp mã số định danh cá nhân.
Bên cạnh đó ngành công an cũng đang kiểm tra diện thường trú, tạm trú, những người đang lưu trú ở khách sạn, nhà nghỉ... khai báo để quản lý chặt chẽ và thực hiện các chính sách an sinh xã hội.');
INSERT INTO `NEWS` (status, date, title, description, content)
VALUES (1, '2021-11-11', '50% ca tử vong ở TP.HCM chưa tiêm vắc xin, thành phố đang "đánh chặn" số ca chuyển nặng',
'TTO - Với việc ban hành hướng dẫn gói chăm sóc sức khỏe cho F0 cách ly tại nhà phiên bản 1.6, ngành y tế TP.HCM cho thấy quyết tâm tập trung "đánh chặn từ xa" bằng việc kiểm soát F0 cách ly tại cộng đồng không để trở nặng.',
'Không phải F0 nào cũng cách ly tại nhà
Theo thống kê, trong tổng số ca F0 hiện tại có khoảng 70% trường hợp có triệu chứng nhẹ, hoặc không có triệu chứng đang được cách ly chăm sóc tại nhà hoặc khu cách ly tập trung. Làm gì để giảm số ca mắc chuyển nặng? Hướng dẫn mới nhất từ TP.HCM được "chi tiết hóa" từ phân loại người F0 nào được cách ly ở nhà; chăm sóc ra sao; nên và không nên làm gì; dấu hiệu cần báo ngay cho y tế và kê đơn, cấp cứu F0 tại nhà...
Hướng dẫn lần này quy định rõ hơn về đối tượng được chăm sóc tại nhà khi đảm bảo đủ 2 điều kiện bao gồm không triệu chứng hoặc triệu chứng nhẹ (không có suy hô hấp SpO2 lớn hơn hoặc bằng 96% khi thở khí trời, nhịp thở bằng hoặc dưới 20 lần/phút). Chỉ những F0 có độ tuổi từ 1 - 50 tuổi, không có bệnh nền, không đang mang thai, không béo phì mới được cách ly ở nhà.
Ngoài ra quy định này chỉ cho phép một số trường hợp không thỏa các điều kiện nêu trên có thể xem xét cách ly ở nhà nếu có bệnh nền ổn định, bảo đảm tiêm đủ 2 mũi vắc xin hoặc sau 14 ngày kể từ ngày tiêm mũi đầu tiên.
TP Thủ Đức (TP.HCM) là một trong các địa phương được ghi nhận có số ca mắc tăng nhanh gần đây. Ông Nguyễn Văn Chức - giám đốc Trung tâm Y tế TP Thủ Đức - cho biết để "đánh chặn từ xa", ngoài 32 trạm y tế cố định, các trạm y tế lưu động, các phường triển khai tổ y tế lưu động đến từng khu phố (trước đây là phường) để kịp thời xử lý các ca F0 chuyển nặng. "Tổ lưu động của từng khu phố khá đông, bao gồm đủ các ban ngành từ y tế, đoàn thanh niên, dân quân, giáo dục, thành ra việc phản ứng và tiếp cận sẽ được gần người dân hơn" - ông Chức nói.');

INSERT INTO `COMMENT` (news_id, user_id, date, approved, content)
VALUES (1, 'admin@hcmut.edu.vn', '2021-12-12', 1, 'Bất ngờ quá');
INSERT INTO `COMMENT` (news_id, user_id, date, approved, content)
VALUES (1, 'admin@hcmut.edu.vn', '2021-12-12', 1, 'Bất ngờ quá');
INSERT INTO `COMMENT` (news_id, user_id, date, approved, content)
VALUES (2, 'user@hcmut.edu.vn', '2021-12-12', 0, 'Không thể tin được');

INSERT INTO `COMPANY` (name, address)
VALUES ('Chi nhánh TPHCM', '268 Lý Thường Kiệt, Phường 14, Quận 10, TPHCM');
INSERT INTO `COMPANY` (name, address)
VALUES ('Chi nhánh Hà Nội', 'Hà Nội');