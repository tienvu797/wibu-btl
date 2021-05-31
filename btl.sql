-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 31, 2021 lúc 10:22 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` tinyint(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `name`, `user_name`, `password`, `email`, `permission`) VALUES
(1, 'Admin', 'admin', '123456', '', 2),
(2, 'Phạm Khắc Duẩn', 'duan', '123456', 'duan77414@st.vimaru.edu.vn', 1),
(3, 'Vũ Ngọc Tiến', 'tien', '123456', 'tien80030@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_customer`, `id_product`, `amount`) VALUES
(7, 3, 20, 10),
(8, 3, 16, 1);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `deal`
-- (See below for the actual view)
--
CREATE TABLE `deal` (
`id_customer` int(11)
,`id_seller` int(11)
,`amount` int(11)
,`price` int(11)
,`time` datetime
,`name` varchar(255)
,`img` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `expensive`
-- (See below for the actual view)
--
CREATE TABLE `expensive` (
`id` int(11)
,`name` varchar(255)
,`img` varchar(255)
,`price` int(11)
,`amount` int(11)
,`detail` text
,`sold` int(11)
,`id_user` int(11)
,`discount` tinyint(4)
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`id`, `id_customer`, `id_seller`, `id_product`, `amount`, `price`, `time`) VALUES
(1, 2, 3, 19, 2, 1432000, '2021-06-01 02:49:23'),
(2, 2, 1, 2, 5, 2961000, '2021-06-01 02:49:23');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `list_item`
-- (See below for the actual view)
--
CREATE TABLE `list_item` (
`id` int(11)
,`name` varchar(255)
,`img` varchar(255)
,`price` int(11)
,`discount` tinyint(4)
,`amount` int(11)
,`sold` int(11)
,`detail` text
,`id_user` int(11)
,`full_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum ratione temporibus harum exercitationem esse neque a aperiam culpa maxime! Reiciendis libero saepe veniam atque debitis iure alias quibusdam hic dolores.',
  `sold` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL,
  `discount` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `price`, `amount`, `detail`, `sold`, `id_user`, `discount`) VALUES
(2, 'Casio B640WC-5ADF', './uploads/e.jpg', 1974000, 1000, '                                                            Đồng hồ Casio MTP-1374D-1AVDF là chiếc đồng hồ nam giới hiện đại trẻ trung đầy mạnh mẽ. Sản phẩm này có thiết kế hiện đại, với những tính năng đa dạng tiện lợi khiến người tiêu dùng yêu thích. Với bề ngoài ấn tượng sản phẩm này đã nhanh chóng thu hút người tiêu dùng lựa chọn sử dụng.                                                                                                                                                                           ', 1000, 1, 70),
(3, 'Casio MTP-1374D-1AVDF', './uploads/c.jpg', 3726000, 200, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum ratione temporibus harum exercitationem esse neque a aperiam culpa maxime! Reiciendis libero saepe veniam atque debitis iure alias quibusdam hic dolores.', 2452, 2, 0),
(8, 'G-Shock GA-120', './uploads/b.jpg', 1739000, 2, '            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum ratione temporibus harum exercitationem esse neque a aperiam culpa maxime! Reiciendis libero saepe veniam atque debitis iure alias quibusdam hic dolores.                                                                                                         ', 125, 1, 0),
(14, 'Xiaomi Mijia Quartz Watch', './uploads/yes-600x700.jpg', 1200000, 1200, 'Chiếc đồng hồ vừa lên kệ của Xiaomi sở hữu nét độc đáo ở việc ngoại hình như đồng hồ truyến thống, trong khi bên trong lại tích hợp hàng loạt công nghệ theo dõi sức khỏe, thông báo như những chiếc smartwatch thế hệ mới.', 12, 2, 0),
(16, 'Orient RA-AC0J07S10B', './uploads/orient-RA-AC0J07S10B-1.jpg', 8800000, 2000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum ratione temporibus harum exercitationem esse neque a aperiam culpa maxime! Reiciendis libero saepe veniam atque debitis iure alias quibusdam hic dolores.', 0, 3, 0),
(17, 'Orient RA-AR0204G00B', './uploads/orient-RA-AR0204G00B-1.jpg', 13340000, 100, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum ratione temporibus harum exercitationem esse neque a aperiam culpa maxime! Reiciendis libero saepe veniam atque debitis iure alias quibusdam hic dolores.                                                         ', 0, 2, 30),
(19, 'Casio W-217HM-9AVDF Quartz', './uploads/casio-W-217HM-9AVDF.jpg', 716000, 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia explicabo iste quos exercitationem, beatae reprehenderit voluptate veniam accusantium praesentium incidunt reiciendis velit. Cum quaerat cumque officia eum. Nihil, quisquam omnis!', 0, 3, 0),
(20, 'Casio LA-20WH-1ADF', './uploads/dong-ho-casio-LA-20WH-1BDF-hinh-1.jpg', 617000, 1000, '                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia explicabo iste quos exercitationem, beatae reprehenderit voluptate veniam accusantium praesentium incidunt reiciendis velit. Cum quaerat cumque officia eum. Nihil, quisquam omnis!                                                         ', 0, 3, 50);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `random`
-- (See below for the actual view)
--
CREATE TABLE `random` (
`id` int(11)
,`name` varchar(255)
,`img` varchar(255)
,`price` int(11)
,`amount` int(11)
,`detail` text
,`sold` int(11)
,`id_user` int(11)
,`discount` tinyint(4)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `sale`
-- (See below for the actual view)
--
CREATE TABLE `sale` (
`id` int(11)
,`name` varchar(255)
,`img` varchar(255)
,`price` int(11)
,`amount` int(11)
,`detail` text
,`sold` int(11)
,`id_user` int(11)
,`discount` tinyint(4)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `show_cart`
-- (See below for the actual view)
--
CREATE TABLE `show_cart` (
`img` varchar(255)
,`name` varchar(255)
,`price` int(11)
,`discount` tinyint(4)
,`id_customer` int(11)
,`id` int(11)
,`amount` int(11)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `top_sell`
-- (See below for the actual view)
--
CREATE TABLE `top_sell` (
`id` int(11)
,`name` varchar(255)
,`img` varchar(255)
,`price` int(11)
,`amount` int(11)
,`detail` text
,`sold` int(11)
,`id_user` int(11)
,`discount` tinyint(4)
);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `deal`
--
DROP TABLE IF EXISTS `deal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `deal`  AS SELECT `history`.`id_customer` AS `id_customer`, `history`.`id_seller` AS `id_seller`, `history`.`amount` AS `amount`, `history`.`price` AS `price`, `history`.`time` AS `time`, `product`.`name` AS `name`, `product`.`img` AS `img` FROM (`product` join `history` on(`product`.`id` = `history`.`id_product`)) ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `expensive`
--
DROP TABLE IF EXISTS `expensive`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `expensive`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`img` AS `img`, `product`.`price` AS `price`, `product`.`amount` AS `amount`, `product`.`detail` AS `detail`, `product`.`sold` AS `sold`, `product`.`id_user` AS `id_user`, `product`.`discount` AS `discount` FROM `product` ORDER BY `product`.`price` DESC LIMIT 0, 4 ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `list_item`
--
DROP TABLE IF EXISTS `list_item`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_item`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`img` AS `img`, `product`.`price` AS `price`, `product`.`discount` AS `discount`, `product`.`amount` AS `amount`, `product`.`sold` AS `sold`, `product`.`detail` AS `detail`, `account`.`id` AS `id_user`, `account`.`name` AS `full_name` FROM (`product` join `account` on(`product`.`id_user` = `account`.`id`)) ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `random`
--
DROP TABLE IF EXISTS `random`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `random`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`img` AS `img`, `product`.`price` AS `price`, `product`.`amount` AS `amount`, `product`.`detail` AS `detail`, `product`.`sold` AS `sold`, `product`.`id_user` AS `id_user`, `product`.`discount` AS `discount` FROM `product` ORDER BY rand() ASC LIMIT 0, 6 ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `sale`
--
DROP TABLE IF EXISTS `sale`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sale`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`img` AS `img`, `product`.`price` AS `price`, `product`.`amount` AS `amount`, `product`.`detail` AS `detail`, `product`.`sold` AS `sold`, `product`.`id_user` AS `id_user`, `product`.`discount` AS `discount` FROM `product` WHERE `product`.`discount` > 0 ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `show_cart`
--
DROP TABLE IF EXISTS `show_cart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `show_cart`  AS SELECT `product`.`img` AS `img`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`discount` AS `discount`, `cart`.`id_customer` AS `id_customer`, `cart`.`id` AS `id`, `cart`.`amount` AS `amount` FROM (`product` join `cart` on(`product`.`id` = `cart`.`id_product`)) ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `top_sell`
--
DROP TABLE IF EXISTS `top_sell`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top_sell`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`img` AS `img`, `product`.`price` AS `price`, `product`.`amount` AS `amount`, `product`.`detail` AS `detail`, `product`.`sold` AS `sold`, `product`.`id_user` AS `id_user`, `product`.`discount` AS `discount` FROM `product` ORDER BY `product`.`sold` ASC LIMIT 0, 6 ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_seller` (`id_seller`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`id_customer`) REFERENCES `account` (`id`);

--
-- Các ràng buộc cho bảng `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`id_seller`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `history_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
