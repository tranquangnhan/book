-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2021 lúc 08:59 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_chay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `bannerImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerStatus` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `bannerImage`, `bannerStatus`) VALUES
(1, 'bannergiay17.jpg', 1),
(2, 'bannergiay28.jpg', 1),
(3, 'bannergiay18.jpg', 1),
(4, 'bannergiay19.jpg', 1),
(5, 'bannergiay20.jpg', 1),
(6, 'bannergiay21.jpg', 1),
(7, 'bannergiay25.jpg', 1),
(8, 'bannergiay22.jpg', 1),
(9, 'bannergiay23.jpg', 1),
(10, 'bannergiay2.jpg', 1),
(11, 'bannergiay11.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `style` tinyint(2) DEFAULT 0,
  `hangcosan` tinyint(2) DEFAULT 0,
  `parent` int(11) NOT NULL DEFAULT 0,
  `ctrl` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `slug`, `image_list`, `description`, `style`, `hangcosan`, `parent`, `ctrl`) VALUES
(1, 'TRANG CHỦ', '', NULL, 'sản phẩm này siêu xịn ', 0, 0, 0, 'home'),
(2, 'SẢN PHẨM', 'san-pham', NULL, 'sản phẩm này siêu xịn ', 0, 0, 0, 'product'),
(3, 'CHÍNH SÁCH VẬN CHUYỂN', 'chinh-sach-van-chuyen', NULL, '<p>sản phẩm n&agrave;y si&ecirc;u xịn</p>\r\n', 0, 1, 0, 'dietary-supplement'),
(4, 'LIÊN HỆ', 'lien-he', NULL, 'sản phẩm này siêu cực xịn', 0, 0, 0, 'contact'),
(6, 'Giày', 'giay', NULL, 'sản phẩm này siêu xịn ', 0, 0, 2, NULL),
(7, 'Quần áo', 'quan-ao', NULL, 'sản phẩm này siêu xịn ', 0, 0, 2, NULL),
(8, 'Phụ kiện', 'phu-kien', NULL, 'sản phẩm này siêu cực xịn', 0, 0, 2, NULL),
(124, 'Hàng có sẵn', 'hang-co-san', '', '', 0, 0, 6, NULL),
(125, 'Hàng order', 'hang-order', '', '', 0, 1, 6, NULL),
(126, 'Hàng order', 'hang-order', '', '', 0, 1, 7, NULL),
(127, 'Hàng order', 'hang-order', '', '', 0, 1, 8, NULL),
(128, 'Hàng có sẵn', 'hang-co-san', '', '', 0, 0, 7, NULL),
(129, 'Hàng có sẵn', 'hang-co-san', '', '', 1, 0, 0, NULL),
(130, 'Hàng order', 'hang-order', '', '', 1, 1, 0, NULL),
(131, 'Adidas', 'adidas', '', '', 1, 0, 129, NULL),
(132, 'Nike', 'nike', '', '', 1, 0, 129, NULL),
(133, 'Nike', 'nike', '', '', 1, 1, 130, NULL),
(134, 'Luxury', 'luxury', '', '', 1, 0, 129, NULL),
(135, 'Adidas', 'adidas', '', '', 1, 1, 130, NULL),
(136, 'Gucci', 'gucci', '', '', 1, 1, 130, NULL),
(137, 'Dior', 'dior', '', '', 1, 1, 130, NULL),
(138, 'Louis Vuitton', 'louis-vuitton', '', '', 1, 1, 130, NULL),
(139, 'Chanel', 'chanel', '', '', 1, 1, 130, NULL),
(153, 'Vans', 'vans', '', '', 1, 0, 129, NULL),
(154, 'BẢO HÀNH', 'bao-hanh', '', '', 0, 1, 0, NULL),
(157, 'air 2019', 'air-2019', NULL, NULL, 1, 0, 132, NULL),
(158, 'air 2020', 'air-2020', NULL, NULL, 1, 1, 133, NULL),
(159, 'chanel 1', 'chanel-1', NULL, NULL, 1, 1, 139, NULL),
(160, 'luxury 1', 'luxury-1', NULL, NULL, 1, 0, 134, NULL),
(161, 'air 2020', 'air-2020', NULL, NULL, 1, 0, 132, NULL),
(162, 'Vans', 'vans', '', '', 1, 1, 130, NULL),
(163, 'Vans 1', 'vans-1', '', '', 1, 1, 162, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` tinyint(2) DEFAULT NULL,
  `email` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `messeges` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `idsp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `subject`, `email`, `messeges`, `idsp`) VALUES
(1, 'asd', NULL, 2, 'asd', 'asd', NULL),
(2, 'asd', NULL, 2, 'zxczxczxc', 'asd', NULL),
(3, 'asd', NULL, 2, 'asd', 'asd', NULL),
(4, 'nhan', NULL, 2, 'tranquangnhan1606@gmail.com', 'dsadsadsasadsda', NULL),
(5, 'nhan', NULL, 1, 'tamtran9250@gmail.com', 'dasdasdsa', NULL),
(6, 'nhan', NULL, 1, 'tranquangnhan1606@gmail.com', 'sadad', NULL),
(7, 'nhan', NULL, 1, 'tranquangnhan1606@gmail.com', 'dsdada', NULL),
(8, 'nhan', NULL, 1, 'tranquangnhan1606@gmail.com', 'dadsdasad', NULL),
(9, 'nhan', NULL, 1, 'tranquangnhan1606@gmail.com', 'dsdaasdsad', NULL),
(10, 'nhan', NULL, 1, 'tranquangnhan1606@gmail.com', 'ddaadsasd', 2),
(11, 'đào nhật anh', '0394501430', 1, NULL, 'tôi muốn hỏi về đôi giày', NULL),
(12, 'Dao Nhat Anh', '0394501430', 2, NULL, 'giày giày bao nhiêu ?', 103);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `housenumber` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` double DEFAULT NULL,
  `ngaydat` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `payments` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `firstname`, `lastname`, `phone`, `email`, `address`, `street`, `housenumber`, `city`, `country`, `note`, `total`, `ngaydat`, `status`, `payments`, `postcode`) VALUES
(28, 'Dao Anh', '', '0394501430', 'daonhatanh630@gmail.com', '289/12 nguyễn thái sơn phường 5 gò vấp', NULL, NULL, NULL, NULL, 'giao nhanh cho e', 2181292, '2021-05-11', 0, NULL, NULL),
(29, 'Dao Anh', '', '0394501430', 'daonhatanh630@gmail.com', '289/12 nguyễn thái sơn phường 5 gò vấp', NULL, NULL, NULL, NULL, 'giao nhanh cho e nha a trai ơi', 880000, '2021-05-18', 0, NULL, NULL),
(30, 'nhan tran', '', '0924698776', 'tranquangnhan1606@gmail.com', '16 tranquangnhan, hcm, Gò vấp', NULL, NULL, NULL, NULL, 'nhan thanh toan', 2980989, '2021-06-08', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id` int(11) NOT NULL,
  `donhang_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_product` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `price` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id`, `donhang_id`, `product_id`, `name_product`, `img_product`, `size`, `color`, `quantity`, `price`) VALUES
(121, 28, 84, 'Jean nam gucci', '../uploads/52884260_2229255920671340_6206757264942956544_n.jpg', 'null', 'null', 4, 545323),
(122, 29, 121, 'test 2', '../uploads/', '42.5', '#000', 1, 880000),
(124, 30, 99, 'Gucci Ace embroidered low-top men\'s sneaker bee', '../uploads/gucci-ace-embroidered-low-top-sneaker-bee-1-600x450.jpg', 'null', 'null', 1, 2980989);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `discount` int(2) DEFAULT 0,
  `image_list` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `buyed` int(11) DEFAULT NULL,
  `hot` tinyint(1) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cosan` tinyint(2) NOT NULL DEFAULT 0,
  `Brand` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `properties` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `name`, `slug`, `price`, `discount`, `image_list`, `view`, `buyed`, `hot`, `color`, `size`, `cosan`, `Brand`, `description`, `properties`) VALUES
(79, 6, 'Nike Flyknit Racer rainbow', 'nike-flyknit-racer-rainbow', 1512320, 1, 'nike-flyknit-racer-rainbow-1-600x450.jpg,nike-flyknit-racer-rainbow-2-590x443.jpg', NULL, NULL, 1, '', '', 0, 'air-2019', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:503px; position:absolute; top:194.6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', ''),
(80, 6, 'Air Force 1 Low Travis Scott Cactus Jack', 'air-force-1-low-travis-scott-cactus-jack', 230232, 10, 'air-force-1-low-travis-scott-cactus-jack-1-600x450.jpg,air-force-1-low-travis-scott-cactus-jack-2-590x443.jpg', NULL, NULL, 0, '', '', 1, 'air-2020', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:686px; position:absolute; top:140px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:776px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(81, 6, 'Nike Air Max 95 Triple Black', 'nike-air-max-95-triple-black', 12312300, 20, 'nike-air-max-95-triple-black-1-600x450.jpg,nike-air-max-95-triple-black-2-590x443.jpg', NULL, NULL, 1, '', '', 0, 'air-2019', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:578px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(82, 8, 'Cài áo Chanel', 'cai-ao-chanel', 1023120, 2, 'phukien-chanel.png', NULL, NULL, 0, '', '', 1, 'chanel-1', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:709px; position:absolute; top:29px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(84, 7, 'Jean nam gucci', 'jean-nam-gucci', 545323, 0, '52884260_2229255920671340_6206757264942956544_n.jpg,jean-gucci-nam.jpg', NULL, NULL, 0, '', '', 1, 'gucci', '<p>Non-comedogenic formula provides eight-hour</p>\r\n\r\n<p>moisture protection. Designed for all skin types.</p>\r\n\r\n<p><strong>AMOUNT: 1/2 GRAM USE DAILY:&nbsp;AM PM</strong></p>\r\n\r\n<p>Use daily or as needed. Apply evenly to skin and&nbsp;feather onto neck. Allow to absorb and follow with next recommended product.</p>\r\n', '<p><strong>KEY INGREDIENTS</strong></p>\r\n\r\n<p>Hydromanil (derived from Tara Tree Seed), Shea Butter, Mango Butter, Avocado Oil, Glycerin</p>\r\n'),
(85, 7, 'Quần thun dài adias', 'quan-thun-dai-adias', 564523, 0, 'ao_khoac__4__44ffae0a75254ccfb13512b740bf2429_master.jpg,quan-adidas-3-soc-03-6212.jpg', NULL, NULL, 0, '', '', 0, 'adidas', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:659px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(86, 8, 'Túi adidas mini', 'tui-adidas-mini', 456456, 0, 'adidas-mini.png', NULL, NULL, 0, '', '', 0, 'adidas', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:471px; position:absolute; top:25.8px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(95, 7, 'Áo thun Nike', 'ao-thun-nike', 100000, 0, 'aothunike.jpg', NULL, NULL, 0, '', '', 1, 'nike-2020', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:726px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(99, 6, 'Gucci Ace embroidered low-top men\'s sneaker bee', 'gucci-ace-embroidered-lowtop-mens-sneaker-bee', 3312210, 10, 'gucci-ace-embroidered-low-top-sneaker-bee-1-600x450.jpg,gucci-ace-embroidered-low-top-sneaker-bee-3-590x443.jpg', NULL, NULL, 1, '', '', 1, 'gucci', '<p>Non-comedogenic formula provides eight-hour&nbsp;moisture protection. Designed for all skin types.</p>\r\n\r\n<p><strong>AMOUNT: 1/2 GRAM USE DAILY:&nbsp;AM PM</strong></p>\r\n\r\n<p>Use daily or as needed. Apply evenly to skin and&nbsp;feather onto neck. Allow to absorb and follow with next recommended product.</p>\r\n', '<p><strong>KEY INGREDIENTS</strong></p>\r\n\r\n<p>Hydromanil (derived from Tara Tree Seed), Shea Butter, Mango Butter, Avocado Oil, Glycerin</p>\r\n'),
(100, 6, 'Giày running adidas ALPHABOUNCE', 'giay-running-adidas-alphabounce', 300000, 0, 'giay-running-adidas-nam-g54125-1_3b59393ef5a2419c8e2d328b054a839a_master.jpg,giay-running-adidas-nam-g54125-3_a9377ff2df1444be9138c45bd755fb4c_master.jpg', NULL, NULL, 0, '', '', 0, 'adidas', '<p>Specifically engineered with key biomimetic peptides, this non-comedogenic moisturizer provides overnight, ultrarich moisturization and has a luxurious, balm-like texture.</p>\r\n\r\n<p><strong>MORNING USE:&nbsp;AM</strong></p>\r\n\r\n<p>Apply a pea-sized amount to face, neck, and chest as&nbsp;needed after other products and prior to sunscreen.</p>\r\n\r\n<p><strong>EVENING USE:&nbsp;PM</strong>&nbsp;</p>\r\n\r\n<p>Apply a pea-sized amount to face, neck, and chest as&nbsp;needed as last step in your night regimen.</p>\r\n', '<p><strong>KEY INGREDIENTS</strong></p>\r\n\r\n<p>Hydromanil (derived from Tara Tree Seed), Chronoline, Kollaren, Shea Butter, Mango Butter, Avocado Oil, Glycerin</p>\r\n'),
(101, 6, 'Nike Air Max 1 Parra 2018', 'nike-air-max-1-parra-2018', 33333300, 0, 'img32.jpg,maxresdefault.jpg', NULL, NULL, 0, '', '', 0, 'air-2020', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:610px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(102, 6, 'Nike Kyrie 4 “Wheaties”', 'nike-kyrie-4-wheaties', 44445400, 0, 'Jayson-Tatum-Wheaties-Nike-Kyrie-4.jpg', NULL, NULL, 0, '', '', 0, 'air-2020', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:237px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(103, 6, 'Air Jordan 4', 'air-jordan-4-103', 0, 0, 'Air-Jordan-4-Retro-Oregon-Ducks.png', NULL, NULL, 1, '', '', 1, 'air-2019', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:748px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(117, 2, 'Nike Kyrie 4 “Wheaties” 2', 'nike-kyrie-4-wheaties-2', 123123, 0, '', NULL, NULL, 0, '', '', 1, 'adidas', '', ''),
(120, 7, 'test 1', 'test-1', 1000000, 12, '', NULL, NULL, 0, '', '', 0, 'nike', '', ''),
(121, 6, 'test 2', 'test-2', 1000000, 12, '', NULL, NULL, 0, '#fff,#000', '43.5,44.5,45.5,42.5', 0, 'adidas', '', ''),
(122, 8, 'test 3', 'test-3', 1000000, 0, '', NULL, NULL, 1, '', '', 0, 'vans', '', ''),
(123, 7, 'test 4', 'test-4', 1000000, 20, '', NULL, NULL, 0, '', '', 0, 'luxu', '', ''),
(124, 8, 'test 5', 'test-5', 1000000, 0, '', NULL, NULL, 0, '', '', 1, 'chanel-1', '', ''),
(125, 6, 'test nha', 'test-nha', 1000000, 0, '', NULL, NULL, 0, '', '', 1, 'vans-1', '', ''),
(127, 6, 'Nu derm', 'nu-derm-126', 0, 0, '1597308998_Hinh-anh-que-huong-dat-nuoc-con-nguoi-Viet-Nam.jpg', NULL, NULL, 0, '', '', 1, 'air-2019', '<p>&aacute;dasdấds</p>\r\n', ''),
(128, 6, 'test up load ảnh', 'test-up-load-anh-128', 0, 0, 'baivietso1.png', NULL, NULL, 1, '', '', 0, 'air-2019-0', '<p>adsadssd</p>\r\n', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `name`, `email`, `pass`, `role`) VALUES
(1, 'nhat anh 1', 'daonhatanh630@gmail.com', 'asdasd', 1),
(4, 'nhan', 'tranquangnhan1606@gmail.com', '111111', 1),
(10, 'Dao Nhat Anh', 'anhdnps12765@fpt.edu.vn', 'asdasd', 0),
(11, 'Dao Anh', 'chikon555@gmail.com', 'asdasd', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dh_dhct` (`donhang_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cata_pro` (`catalog_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `fk_dh_dhct` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_cata_pro` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
