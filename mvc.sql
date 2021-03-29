-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mvc_blog
CREATE DATABASE IF NOT EXISTS `mvc_blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mvc_blog`;

-- Dumping structure for table mvc_blog.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `type_post_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mvc_blog.category: ~5 rows (approximately)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Công nghệ', '2021-03-20 12:05:39', '2021-03-20 12:05:39'),
	(2, 'Đời Sống', '2021-03-21 12:05:39', '2021-03-21 12:05:39'),
	(3, 'Du lịch', '2021-03-25 17:21:42', '2021-03-25 17:21:42'),
	(4, 'Xã hội', '2021-03-25 17:23:01', '2021-03-25 17:23:01'),
	(5, 'Con người', '2021-03-25 17:24:03', '2021-03-25 17:24:03');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table mvc_blog.new
CREATE TABLE IF NOT EXISTS `new` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `add_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mvc_blog.new: ~4 rows (approximately)
DELETE FROM `new`;
/*!40000 ALTER TABLE `new` DISABLE KEYS */;
INSERT INTO `new` (`id`, `title`, `content`, `add_date`) VALUES
	(1, 'Quang dev', 'lorem lorom lorom', NULL),
	(2, 'Hạ Băng', 'ĐGFFD TRHTG ', NULL),
	(3, 'Hải Đăng', 'lorem loromf v  lorom', NULL),
	(4, 'Quang dev', 'lorem lorom lorom', NULL);
/*!40000 ALTER TABLE `new` ENABLE KEYS */;

-- Dumping structure for table mvc_blog.post
CREATE TABLE IF NOT EXISTS `post` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contentHot` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci COMMENT 'nội dung bài viết dạng html',
  `view-count` int(11) NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `cate_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `post_id_index` (`id`),
  KEY `post_tag_index` (`tag`),
  KEY `post_user_id_index` (`user_id`),
  KEY `post_typepost_id_index` (`cate_id`),
  CONSTRAINT `post_typepost_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mvc_blog.post: ~5 rows (approximately)
DELETE FROM `post`;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`id`, `title`, `contentHot`, `slug`, `image`, `tag`, `content`, `view-count`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
	(1, 'France Bans Metam-Sodium Sprays 1', 'đây là nội dung nổi bật', 'aaaaa', '06_ducati-899-panigale.jpg', 'dowisong', 'Nội dung hiển thị                    \r\n                  ', 10, 1, 1, '2020-08-01 03:47:49', '2020-08-21 06:49:43'),
	(2, 'France Bans Metam-Sodium Sprays 2', 'aaaaaaaaaaaaaaaa', 'aaaaa', 'anh.jpg', 'dowisong', 'nội dung2', 10, 1, 2, '2020-08-01 03:47:49', '2020-08-21 06:49:43'),
	(3, 'demo1', 'fsdskyuklikdhmf', NULL, '06_ducati-899-panigale.jpg', 'EGRGRG', 'ƯEGGFGS                      \r\n                                        \r\n                  ', 0, 4, 3, '2021-03-26 14:06:20', '2021-03-26 14:06:20'),
	(4, 'DEMO2', 'ADSACVVE TRHEYJTTYEJYRRT', NULL, '04_Ducati_Superbike_1199.jpg', 'EGRGRG', '', 0, 4, 2, '2021-03-26 14:08:03', '2021-03-26 14:08:03'),
	(5, 'bài viết mới', 'bài viết mới1', NULL, '11_ducati-monster_821.jpg', 'bài viết mới1', 'bài viết mới1                      \r\n                  ', 0, 6, 5, '2021-03-29 09:43:19', '2021-03-29 09:43:19'),
	(6, 'Bài viết mới demo', 'Bài viết mới demo nội dung hot', NULL, '', 'bai ,viet,mới', 'Bài viết mới demo', 0, 1, 4, '2021-03-29 13:49:28', '2021-03-29 13:49:28');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Dumping structure for table mvc_blog.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Avatar',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên đầy đủ',
  `slug` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Số điện thoại',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ Email',
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Địa chỉ',
  `gender` tinyint(4) DEFAULT NULL COMMENT 'Giới tính',
  `birthday` datetime DEFAULT '1912-01-01 00:00:00' COMMENT 'Ngày sinh',
  `info` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Thông tin thêm',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mật khẩu đăng nhập',
  `level` tinyint(4) NOT NULL DEFAULT '2' COMMENT 'Cấp độ phân quyền: 1: Tài khoản hệ thống - 2: Tài khoản viết bài - 3: Tài khoản quản lý bài viết - 4: Tài khoản biên tập sản phẩm/dự án - 5: Tài khoản quản lý sản phẩm/dự án ',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mvc_blog.user: ~4 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `image`, `name`, `slug`, `phone`, `email`, `address`, `gender`, `birthday`, `info`, `password`, `level`, `created_at`, `updated_at`) VALUES
	(1, 'IMAGE-SLIDE-1596248481102399018_996080340851263_4444681276898649967_n.jpg', 'Quang Merce', 'quang-merce', '0969030421', 'dvq.dev@gmail.com', 'Nam Định', 1, '1998-07-26 21:30:30', '22 Year Old', '$2y$10$Kzh/AosW3boQzoXaHJiP8ehMdkBixQfa54HLsgDRbKEuLXWqY3EA6', 1, '2020-08-01 02:05:12', '2020-08-01 02:21:21'),
	(4, 'IMAGE-SLIDE-1596948955im-105325.jpg', 'Bill Gates', 'bill-gates-4', '094654676312', 'henryjohn.dev@gmail.com', 'THON TON THANH .dddd', 1, '2020-08-26 00:00:00', 'Bill Gates', '$2y$10$/ZACL7TAc1D48/jE85ATouHSIoUwK35J029FslBBSY5a2NJ6Tmg7y', 2, '2020-08-07 10:28:35', '2020-08-09 04:55:55'),
	(5, 'IMAGE-AUTHOR-1596948782100496736-steve-jobs-march-2011-getty.jpg', 'Steve Jobs', 'steve-jobs-5', '0245634789', 'stevejobs@gmail.com', 'New York', 1, '1964-08-09 00:00:00', 'steve jobs ss', '$2y$10$a435R8ZMQTJMHfrKbd7ykuw.SlLG5dcTE7uZMmU7BTgpP6NlQloAO', 3, '2020-08-09 04:53:02', '2020-08-09 04:53:02'),
	(6, 'IMAGE-AUTHOR-1596949117pham-nhat-vuong-giau-tu-dau-giau-nhu-the-nao-bytuong-com.jpg', 'Phạm Nhật Vượng', 'pham-nhat-vuong-6', '0956789368', 'phamnhatvuong@gmail.com', 'Hà Nội, Việt Nam', 1, '1967-08-04 00:00:00', 'Phạm Nhật Vượng là tỷ phú người Việt đầu tiên!', '$2y$10$V61mE/MSZQImKDTg6OufCubIRVx0z7zFK51dN3dk5zaxaTV4LUljO', 2, '2020-08-09 04:58:37', '2020-08-09 04:58:37');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
