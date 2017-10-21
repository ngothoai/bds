-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 21 Octobre 2017 à 08:58
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sanbatdongsan`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `title`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Bất động sản Vinhome', 'bat-dong-san-vinhome', '0', NULL, NULL),
(2, 'Bất động sản Xuân Mai', 'bat-dong-san-xuan-mai', '0', NULL, NULL),
(3, 'Bất động sản FLC', 'bat-dong-san-flc', '0', NULL, NULL),
(4, 'Tư vấn', 'tu-van', '2', NULL, NULL),
(5, 'Mua nhà tại Vinhomes', 'mua-nha-tai-vinhomes', '4', NULL, NULL),
(6, 'Bất động sản Linh Đàm', 'bat-dong-san-linh-dam', '0', '2017-08-22 16:05:18', '2017-08-22 16:05:18');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL,
  `type_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_post` int(11) NOT NULL,
  `name_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `type_image`, `id_post`, `name_file`, `created_at`, `updated_at`) VALUES
(7, 'thumnail', 11, '1508530883_Ow2Y_e5e18172-a131-4952-95d9-a1ce27199c95-1492146714243.jpg', '2017-10-20 20:21:23', '2017-10-20 20:21:23'),
(8, 'thumnail', 12, '1508533762_z3Bh_img4632-1508397048169.jpg', '2017-10-20 21:09:22', '2017-10-20 21:09:22');

-- --------------------------------------------------------

--
-- Structure de la table `inforuser`
--

CREATE TABLE IF NOT EXISTS `inforuser` (
  `id` int(10) unsigned NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `inforuser`
--

INSERT INTO `inforuser` (`id`, `firstname`, `lastname`, `birthday`, `address`, `phonenumber`, `idUser`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Tiến', 'Dũng', '08/16/1994', 'Trung Chính - Lương Tài - Bắc Ninh, Lương Tài', '986174304', 3, '2017-08-19 18:10:09', '2017-08-19 18:10:09'),
(2, 'Ngô Văn', 'Thoại', '08/08/1990', 'Trung Chính - Lương Tài - Bắc Ninh, Lương Tài', '986174304', 1, '2017-08-19 18:45:15', '2017-08-19 18:46:05'),
(3, 'Ngô Văn', 'Tùng', '08/09/1998', 'Hà Nội, Việt Nam', '1216103678', 2, '2017-08-20 03:42:36', '2017-08-20 03:42:36');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_08_10_073902_post', 1),
(2, '2017_08_14_155813_Tags', 1),
(3, '2017_08_14_160209_Tag_post', 1),
(4, '2017_08_20_160209_Tag_post', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcat` int(10) unsigned NOT NULL,
  `idUser` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `idcat`, `idUser`, `created_at`, `updated_at`) VALUES
(11, 'Chung cư, biệt thự Hà Nội bán nhiều nhưng mua ít', 'chung-cu-biet-thu-ha-noi-ban-nhieu-nhung-mua-it', '<h2>Theo b&aacute;o c&aacute;o thị trường bất động sản H&agrave; Nội qu&yacute; 1/2017 của Savills Việt Nam, nguồn cung căn hộ để b&aacute;n v&agrave; biệt thự, nh&agrave; liền kề tăng mạnh nhưng tỷ lệ hấp thụ giảm.</h2>\r\n\r\n<p>Cụ thể, b&aacute;o c&aacute;o của Savills cho biết, tổng nguồn cung thị trường biệt thự, liền kề đạt 36.068 căn, tăng 3% theo qu&yacute; v&agrave; 14% theo năm. Trong qu&yacute; n&agrave;y, 3 dự &aacute;n mới được tung ra thị trường với xấp xỉ 1.005 căn, trong đ&oacute; biệt thự chiếm 58%.</p>\r\n\r\n<p>Tổng lượng giao dịch trong qu&yacute; 1/2017 đạt 579 căn giảm 24% so với qu&yacute; trước nhưng tăng 40% so với Q1/2016, lượng giao dịch được chia đều cho cả hai ph&acirc;n kh&uacute;c biệt thự v&agrave; liền kề. Tỷ lệ hấp thụ trong qu&yacute; đạt 21%, giảm 9 điểm % theo qu&yacute; v&agrave; 3 điểm % theo năm.</p>\r\n\r\n<p>Savills dự b&aacute;o, c&oacute; khoảng 74% trong số 78 dự &aacute;n tương lai đang ở giai đoạn lập kế hoạch. Từ qu&yacute; 2/2017, sẽ c&oacute; khoảng hơn 350 căn được tung ra thị trường.</p>\r\n\r\n<p>C&ograve;n đối với ph&acirc;n kh&uacute;c căn hộ, b&aacute;o c&aacute;o của Savills cho biết, trong qu&yacute; 1/2017, tổng nguồn cung sơ cấp căn hộ để b&aacute;n đạt 24.160 căn, tăng 12% theo qu&yacute; v&agrave; 49% theo năm. 14 dự &aacute;n mở b&aacute;n mới v&agrave; 21 dự &aacute;n mở b&aacute;n th&ecirc;m cung cấp khoảng 9.220 căn hộ, giảm -10% theo qu&yacute; nhưng tăng 39% theo năm.</p>\r\n\r\n<p><img alt="" src="http://localhost/sanbatdongsan/public/uploads/posts/images/Posts/e5e18172-a131-4952-95d9-a1ce27199c95-1492146714243.jpg" style="width:100%" /></p>', 4, 1, '2017-10-20 20:21:23', '2017-10-20 20:21:23'),
(12, 'Có 1 tỷ đồng trong tay, nghĩ ngay đến những dự án chung cư này', 'co-1-ty-dong-trong-tay-nghi-ngay-den-nhung-du-an-chung-cu-nay', '<h2>C&agrave;ng về cuối năm, nhu cầu nh&agrave; ở c&agrave;ng tăng mạnh, đặc biệt l&agrave; ph&acirc;n kh&uacute;c nh&agrave; vừa t&uacute;i tiền. Tuy nhi&ecirc;n, một điều nghịch l&yacute; l&agrave; nguồn cung của ph&acirc;n kh&uacute;c n&agrave;y đang ng&agrave;y c&agrave;ng hiếm.</h2>\r\n\r\n<p>C&aacute;ch đ&acirc;y 2 năm khi thị trường BĐS c&ograve;n trầm lắng, ph&aacute;t triển c&aacute;c dự &aacute;n nh&agrave; ở vừa t&uacute;i tiền được coi l&agrave; cứu c&aacute;nh của nhiều doanh nghiệp địa ốc. Với mức gi&aacute; tr&ecirc;n dưới 1 tỷ đồng/căn được vay vốn hỗ trợ đến 70-80%, đặc biệt nhiều dự &aacute;n thuộc diện được vay g&oacute;i l&atilde;i suất ưu đ&atilde;i 30.000 tỷ đồng đ&atilde; nhanh ch&oacute;ng v&agrave;o tầm ngắm của người mua nh&agrave;. Giao dịch nh&agrave; gi&aacute; rẻ cũng v&igrave; thế m&agrave; s&ocirc;i động v&agrave;o bậc nhất thị trường.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, khoảng gần 2 năm trở lại đ&acirc;y, c&aacute;c dự &aacute;n nh&agrave; gi&aacute; rẻ bỗng khan hiếm, nguồn cung cũ cạn dần trong khi nguồn cung mới kh&aacute; hạn chế. Nh&agrave; gi&aacute; rẻ dường như bị l&atilde;ng qu&ecirc;n, ph&acirc;n kh&uacute;c cao cấp chiếm ưu thế tr&ecirc;n thị trường với h&agrave;ng chục dự &aacute;n mới bung h&agrave;ng mỗi qu&yacute;, trong khi đ&oacute; dự &aacute;n nh&agrave; c&oacute; gi&aacute; 1 tỷ mỏi mắt vẫn hiếm xuất hiện dự &aacute;n mới.</p>\r\n\r\n<p>Điểm tr&ecirc;n thị trường BĐS 10 th&aacute;ng đầu năm 2017 nguồn cung căn hộ mới tầm 1 tỷ cũng chỉ đếm tr&ecirc;n đầu ng&oacute;n tay. Gi&aacute; b&aacute;n tại c&aacute;c dự &aacute;n n&agrave;y giao động quanh mức 16-18 triệu đồng/m2. Tuy nhi&ecirc;n, c&oacute; một điều dễ nhận thấy trong khi nguồn cung căn hộ mới ng&agrave;y c&agrave;ng &iacute;t th&igrave; những dự &aacute;n sẵn s&agrave;ng b&agrave;n giao v&agrave; c&oacute; thể ở ngay c&agrave;ng trở n&ecirc;n khan hiếm.</p>\r\n\r\n<p>Về nguồn cung mới, trong 9 th&aacute;ng đầu năm thị trường ghi nhận sự gia nhập của một số dự &aacute;n mới, chủ yếu nằm ở khu vực ph&iacute;a T&acirc;y. Cụ thể như dự &aacute;n dự &aacute;n ICID Complex H&agrave; Đ&ocirc;ng của C&ocirc;ng ty TNHH đầu tư x&acirc;y dựng v&agrave; ph&aacute;t triển hạ tầng ICID, dự &aacute;n Start Up Tower Đại Mỗ do C&ocirc;ng ty CP Kiến tr&uacute;c Đ&ocirc; thị Nam Thăng Long l&agrave;m chủ đầu tư&hellip;Ngo&agrave;i ra c&ograve;n một số &ocirc;ng lớn kh&aacute;c c&ocirc;ng bố chiến lược sẽ ra mắt nguồn cung lớn căn hộ chung cư vừa t&uacute;i tiền nhưng hiện nay vẫn chưa ch&iacute;nh thức ra mắt thị trường.</p>\r\n\r\n<p>Đối với nguồn cung &iacute;t ỏi căn hộ gi&aacute; 1 tỷ c&oacute; thể nhận nh&agrave; ở ngay tập trung tại một số dự &aacute;n nằm chủ yếu ở khu T&acirc;y v&agrave; T&acirc;y Nam th&agrave;nh phố. Đầu ti&ecirc;n, phải kể đến dự &aacute;n Tứ Hiệp Plaza do C&ocirc;ng ty CP Thương mại v&agrave; Dịch vụ tổng hợp Vinh Hạnh l&agrave;m chủ đầu tư với 30 tầng với 2 tầng hầm hầm. Tứ Hiệp Plaza nằm ngay cạnh c&ocirc;ng vi&ecirc;n Y&ecirc;n Sở l&agrave; một trong những dự &aacute;n hiếm hoi khuc vực T&acirc;y Nam H&agrave; Nội c&oacute; gi&aacute; chưa đến 1.1 tỷ đồng/căn. Theo th&ocirc;ng tin ch&uacute;ng t&ocirc;i c&oacute; được, lượng căn hộ c&ograve;n tại dự &aacute;n n&agrave;y kh&ocirc;ng nhiều, với mức gi&aacute; kh&aacute; ph&ugrave; hợp lại c&oacute; chất lượng tốt, thiết kế hợp l&yacute;, hệ thống an to&agrave;n ph&ograve;ng ch&aacute;y nhập từ mỹ, vị tr&iacute; đẹp c&aacute;c căn hộ tại đ&acirc;y l&agrave; lựa chọn h&agrave;ng đầu cho ph&acirc;n kh&uacute;c nh&agrave; ở vừa t&uacute;i tiền khu vực T&acirc;y Nam H&agrave; Nội.</p>\r\n\r\n<p>Xa hơn một ch&uacute;t về khu vực ph&iacute;a T&acirc;y H&agrave; Nội, những dự &aacute;n chung cư chuẩn bị b&agrave;n gian c&ograve;n c&oacute; thể kể đến như Dự &aacute;n Xu&acirc;n Mai Spark State Dương Nội (H&agrave; Đ&ocirc;ng) với mức gi&aacute; 18 triệu đồng/m2, Chung cư FLC Garden City Đại Mỗ (Quận Nam Từ Li&ecirc;m) của Tập đo&agrave;n FLC Group với gi&aacute; từ 16-18 triệu đồng/m2. Khu chung cư Xu&acirc;n Phương Residence của C&ocirc;ng Ty CP Tasco với mức gi&aacute; được giao dịch tr&ecirc;n thị trường 15,5-18 triệu đồng/m2.</p>\r\n\r\n<p>Xuống dưới khu vực Huyện Ho&agrave;i Đức dọc đại lộ Thăng Long, thị trường cũng vẫn c&ograve;n nguồn cung từ một số dự &aacute;n như Gemek Premium huyện Ho&agrave;i Đức (18 triệu đồng/m2); T&ograve;a T2, Dự &aacute;n Thăng Long Victory An Kh&aacute;nh (15 triệu đồng/m2), Dự &aacute;n The Golden An Kh&aacute;nh (16 triệu đồng/m2)&hellip; Tuy nhi&ecirc;n, c&aacute;c dự &aacute;n n&agrave;y đ&atilde; được chủ đầu tư mở b&aacute;n kh&aacute; l&acirc;u v&agrave; số lượng c&ograve;n lại kh&ocirc;ng nhiều.</p>\r\n\r\n<p>Tại sao nh&agrave; gi&aacute; rẻ đang đắt như t&ocirc;m tươi bỗng nhi&ecirc;n trở n&ecirc;n khan hiếm tr&ecirc;n thị trường? Cho &yacute; kiến về vấn đề n&agrave;y &ocirc;ng L&ecirc; Ngọc Quỳnh, Gi&aacute;m đốc S&agrave;n giao dịch địa ốc thịnh vượng TVR thừa nhận: &quot;Lợi nhuận hấp dẫn từ ph&acirc;n kh&uacute;c căn hộ cao cấp đ&atilde; khiến c&aacute;c doanh nghiệp BĐS ồ ạt đầu tư v&agrave;o lĩnh vực n&agrave;y m&agrave; bỏ qu&ecirc;n ph&acirc;n kh&uacute;c cốt l&otilde;i của thị trường nh&agrave; gi&aacute; rẻ. Trong khi ph&acirc;n kh&uacute;c nh&agrave; gi&aacute; rẻ vừa tốn rất nhiều thời gian để ho&agrave;n th&agrave;nh thủ tục b&aacute;n nh&agrave; vừa mang lại lợi nhuận thấp&quot;.</p>\r\n\r\n<p>Đ&aacute;nh gi&aacute; về triển vọng ph&acirc;n kh&uacute;c nh&agrave; gi&aacute; rẻ tr&ecirc;n thị trường thời gian tới &ocirc;ng Quỳnh cũng chi biết th&ecirc;m do nguồn cung khan hiếm n&ecirc;n c&aacute;c dự &aacute;n chung cư gi&aacute; rẻ c&agrave;ng trở n&ecirc;n đắt gi&aacute;, đặc biệt l&agrave; những dự &aacute;n chất lượng tốt, c&oacute; vị tr&iacute; thuận tiện v&agrave; c&oacute; mức gi&aacute; ph&ugrave; hợp.</p>', 6, 1, '2017-10-20 21:09:22', '2017-10-20 21:09:22');

-- --------------------------------------------------------

--
-- Structure de la table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(10) unsigned NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) unsigned NOT NULL,
  `rolename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `rolename`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '1', NULL, NULL),
(2, 'Moderator', '2', NULL, NULL),
(3, 'Seller', '3', NULL, NULL),
(4, 'Subscribe', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `singleproperty`
--

CREATE TABLE IF NOT EXISTS `singleproperty` (
  `id` int(10) unsigned NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `idproperty` int(10) unsigned NOT NULL,
  `iduser` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Bất động sản Vinhome', 'bat-dong-san-vinhome', '2017-08-21 10:54:13', '2017-08-21 10:54:13'),
(2, 'Bất động sản FLC', 'bat-dong-san-flc', '2017-08-21 14:40:48', '2017-08-21 14:40:48'),
(3, 'Mua bất động sản ở đâu?', 'mua-bat-dong-san-o-dau', '2017-08-21 14:41:41', '2017-08-21 14:41:41'),
(4, 'Mua nhà giá rẻ', 'mua-nha-gia-re', '2017-08-21 14:41:50', '2017-08-21 14:41:50');

-- --------------------------------------------------------

--
-- Structure de la table `tag_post`
--

CREATE TABLE IF NOT EXISTS `tag_post` (
  `id` int(10) unsigned NOT NULL,
  `id_tag` int(10) unsigned NOT NULL,
  `id_post` int(10) unsigned NOT NULL,
  `type_post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tag_post`
--

INSERT INTO `tag_post` (`id`, `id_tag`, `id_post`, `type_post`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 'post', '2017-10-20 20:21:23', '2017-10-20 20:21:23'),
(2, 3, 11, 'post', '2017-10-20 20:21:23', '2017-10-20 20:21:23'),
(3, 3, 12, 'post', '2017-10-20 21:09:22', '2017-10-20 21:09:22');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Role` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `id_Role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thoại Ngô', 'cheng94.bn@gmail.com', '$2y$10$5VHW7IDn3gEi4lUwbgUaVuJMv6iE83qB6U1ARIn.uZGV2A61Ghgeq', 1, 'RMHANLE3ftPlottL3jLzM607P6FP2FZSOret9kYiFTkVcLPqZjzL3iphmtnb', '2017-08-14 07:06:16', '2017-08-14 07:06:16'),
(2, 'Thoại Ngô', 'thoaingo.vnkingnet@gmail.com', '$2y$10$E4ow.N/t9asWbNzeA.MU8ONoj3JxbIAnicEkW3.9wD1VB3N2.IvYi', 4, 'GRjEyHwFWxvoUuh29huZJP3bAIyYrLUfHauL69vECfeJiyZTDpSL9OCLfFPD', '2017-08-14 07:14:34', '2017-08-14 07:14:34'),
(3, 'Ngô Văn Thoại', 'nguyentiendung81094@gmail.com', '$2y$10$tBn0P9.QR3CVLbBuwl5UUeqAcSxKAbPl/dc7vjdyt.uUgpA187FbS', 3, NULL, '2017-08-15 02:18:12', '2017-08-15 02:18:12'),
(4, 'Seller', 'cheng1994.bn@gmail.com', '$2y$10$CwSHWIuBeO1YiLqPLtbLKehVXCNwhyRVSVCD27JrPUsYtuEacB6FW', 3, NULL, '2017-10-01 04:16:58', '2017-10-01 04:16:58');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inforuser`
--
ALTER TABLE `inforuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inforuser_iduser_foreign` (`idUser`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_idcat_foreign` (`idcat`),
  ADD KEY `posts_iduser_foreign` (`idUser`);

--
-- Index pour la table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `singleproperty`
--
ALTER TABLE `singleproperty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `singleproperty_iduser_foreign` (`iduser`),
  ADD KEY `singleproperty_idproperty_foreign` (`idproperty`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag_post`
--
ALTER TABLE `tag_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_post_id_post_foreign` (`id_post`),
  ADD KEY `tag_post_id_tag_foreign` (`id_tag`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_role_foreign` (`id_Role`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `inforuser`
--
ALTER TABLE `inforuser`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `singleproperty`
--
ALTER TABLE `singleproperty`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tag_post`
--
ALTER TABLE `tag_post`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `inforuser`
--
ALTER TABLE `inforuser`
  ADD CONSTRAINT `inforuser_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_idcat_foreign` FOREIGN KEY (`idcat`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `singleproperty`
--
ALTER TABLE `singleproperty`
  ADD CONSTRAINT `singleproperty_idproperty_foreign` FOREIGN KEY (`idproperty`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `singleproperty_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tag_post`
--
ALTER TABLE `tag_post`
  ADD CONSTRAINT `tag_post_id_post_foreign` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tag_post_id_tag_foreign` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_role_foreign` FOREIGN KEY (`id_Role`) REFERENCES `role` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
