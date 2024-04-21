-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 03:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-porto`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image_path`, `created_at`, `updated_at`, `isi`) VALUES
(6, 'Cermin | 2020', '1713247601.jpg', '2024-04-16 02:36:50', '2024-04-16 06:08:25', '<p>\"Hai si lemah, buatlah semesta menerima dirimu apa adanya. Relakanlah, masih banyak senyum di dunia yang bisa terima semua indah kurangmu\" </p><p>\r\n- Si Lemah by Hindia and RAN</p>'),
(7, 'marionette | 2021', '1713235644.jpg', '2024-04-16 02:47:24', '2024-04-16 06:04:23', '/ di panggung sandiwara ia tidak terkendali, sebab hati, pikiran, dan waktu sedang tidak bersahabat /'),
(8, 'Last Dance | 2022', '1713247578.jpg', '2024-04-16 06:06:18', '2024-04-16 07:03:48', '<p>\'cause there we are again in the middle of the night, we\'re dancin\' \'round the kitchen in the refrigerator light</p><p>- All too well by Taylor Swift</p>'),
(9, 'Bersedih Bersama | 2022', '1713248134.jpg', '2024-04-16 06:15:34', '2024-04-16 06:15:34', '<p>kata Hindia di lagunya yang berjudul Secukupnya (2019), kita semua gagal, angkat minumanmu, bersedih bersama-sama.<br></p>'),
(10, 'Promise | 2021', '1713248543.png', '2024-04-16 06:22:23', '2024-04-16 06:22:23', '<p>\"Janji, takkan kemana-mana\"&nbsp;</p><p>- Dunia Tipu-Tipu by Yura Yunita</p>'),
(11, 'OceanEnginees | 2021', '1713334476.jpg', '2024-04-17 06:10:00', '2024-04-21 13:03:29', '<p><span jsname=\"YS01Ge\" style=\"\">\"I have so many questions, b</span><span jsname=\"YS01Ge\" style=\"\">ut I\'m pouring them into the ocean, a</span><span jsname=\"YS01Ge\" style=\"\">nd I\'m starting up my engine\"</span></p><p><span jsname=\"YS01Ge\" style=\"\">-Ocean &amp; Enginees by NIKI</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `created_at`, `updated_at`, `judul`, `isi`) VALUES
(5, '2024-04-14 10:39:39', '2024-04-15 12:48:08', 'AILEEN ANGELICA LEE', '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size: 10.5pt; line-height: 107%; font-family: Arial, sans-serif; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">As\r\na prospective graduate from BINUS University with a major in Computer Science,\r\nset to complete my studies in 2026, I bring forth a deep-seated drive and\r\ncuriosity to seize fresh opportunities, especially those that foster personal\r\ngrowth. Recognized for my unwavering commitment and disciplined approach, I\r\nthrive in collaborative settings, where teamwork is paramount. I approach\r\nchallenges with enthusiasm, always striving to expand my skill set and make\r\nmeaningful contributions to dynamic projects. With a steadfast dedication to\r\ncontinual improvement, I am poised to embark on a journey of professional and\r\npersonal development, eager to make a positive\r\nimpact&nbsp;wherever&nbsp;I&nbsp;go.</span><span style=\"font-family:\r\n&quot;Arial&quot;,sans-serif\"><o:p></o:p></span></p>'),
(7, '2024-04-14 12:25:33', '2024-04-17 06:40:20', 'Interest', '<p>In my personal interests section, I love to immerse myself in the world of books, finding solace and inspiration within their pages. I have a deep appreciation for the aroma and taste of coffee, often finding joy in the quiet moments spent savoring a freshly brewed cup. Additionally, I have a passion for self-expression and exploring emotions through art, finding comfort in sketching and painting as a means of communication.</p><p>Mathematics has always intrigued me, and I find joy in unraveling its complexities, constantly seeking to expand my understanding. I am inherently curious and open-minded, always eager to embark on new learning journeys and embrace unfamiliar concepts. With a knack for quick learning, I thrive in environments that challenge me to adapt and grow.</p><p>Efficient time management is a cornerstone of my approach to life, allowing me to balance my diverse interests and responsibilities effectively. Alongside my pursuits, I also run a small business specializing in homemade cookies, pastries, and pies. This endeavor not only fuels my entrepreneurial spirit but also serves as a creative outlet where I can share my love for baking with others.</p>'),
(8, '2024-04-21 12:50:04', '2024-04-21 12:50:04', 'Awards', '<p>----</p>');

-- --------------------------------------------------------

--
-- Table structure for table `metadata`
--

CREATE TABLE `metadata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metadata`
--

INSERT INTO `metadata` (`id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
(3, '_language', 'php, mysql, java, cplusplus, laravel, python, kotlin', '2024-04-14 03:03:43', '2024-04-21 13:00:27'),
(4, '_others', '<ul><li><span class=\"OYPEnA text-decoration-none text-strikethrough-none\" style=\"color: rgb(39, 39, 39);\">Design (Canva, Figma)</span></li><li><span class=\"OYPEnA text-decoration-none text-strikethrough-none\" style=\"color: rgb(39, 39, 39);\">Communication, Time Management, Problem Solving</span></li><li><span class=\"OYPEnA text-decoration-none text-strikethrough-none\" style=\"color: rgb(39, 39, 39);\">Editing video</span></li></ul>', '2024-04-14 03:03:43', '2024-04-21 13:00:27'),
(13, '_foto', '240421051104.jpg', '2024-04-14 07:19:02', '2024-04-21 10:11:04'),
(14, '_email', 'aileen.liexiuai@gmail.com', '2024-04-14 07:19:03', '2024-04-14 18:55:19'),
(15, '_kota', 'Malang', '2024-04-14 08:58:54', '2024-04-21 13:02:22'),
(16, '_provinsi', 'Jawa Timur', '2024-04-14 08:58:54', '2024-04-14 09:01:47'),
(17, '_nohp', '083127776898', '2024-04-14 08:58:54', '2024-04-14 08:58:54'),
(18, '_instagram', 'https://www.instagram.com/aileen.a.lee/', '2024-04-14 08:58:54', '2024-04-15 13:57:25'),
(19, '_linkedin', 'https://id.linkedin.com/in/aileenangelicalee', '2024-04-14 08:58:54', '2024-04-15 13:57:53'),
(20, '_github', 'https://github.com/aileenliexiuai', '2024-04-14 08:58:54', '2024-04-15 14:00:10'),
(21, '_halamanabout', '5', '2024-04-14 13:00:51', '2024-04-14 13:10:05'),
(22, '_halamaninterest', '7', '2024-04-14 13:10:05', '2024-04-14 13:10:08'),
(23, '_halamanawards', '8', '2024-04-14 13:10:05', '2024-04-21 12:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_03_093801_table_users_add_colomn_google_id', 2),
(6, '2024_04_06_100853_users_set_default_password', 3),
(7, '2024_04_10_083002_user_add_coloumn_avatar', 4),
(8, '2024_04_10_092312_create_halamen_table', 5),
(9, '2024_04_11_093353_create_riwayats_table', 6),
(10, '2024_04_12_213546_riwayat_set_default_isi', 7),
(11, '2024_04_13_004422_create_metadata_table', 8),
(12, '2024_04_16_004934_create_galleries_table', 9),
(13, '2024_04_16_123340_add_column_to_galleries', 10),
(14, '2024_04_16_124528_add_isi_to_galleries_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tipe` enum('experience','education','publication') NOT NULL,
  `starteddate` date NOT NULL,
  `enddate` date DEFAULT NULL,
  `info1` varchar(255) DEFAULT NULL,
  `info2` varchar(255) DEFAULT NULL,
  `info3` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `judul`, `tipe`, `starteddate`, `enddate`, `info1`, `info2`, `info3`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Freshmen Partner', 'experience', '2023-09-15', NULL, 'BINUS University · Seasonal', NULL, NULL, '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size: 10.5pt; line-height: 107%; font-family: &quot;Segoe UI&quot;, sans-serif; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">As a Freshmen Partner at Binus@Malang\'s Computer\r\nScience program, my role is to support and guide freshmen throughout their\r\nfirst year. I help them understand and embrace the SPIRIT values, providing\r\ndirection and materials to integrate these values into their college\r\nexperience. Additionally, I work to ensure that our freshmen successfully\r\nnavigate their first year and stay on the right path.</span><o:p></o:p></p>', '2024-04-11 07:00:15', '2024-04-15 16:05:47'),
(2, 'Bakti Sosial di Vihara Paramitha, Desa Ngadas', 'experience', '2023-05-14', '2023-05-18', 'Keluarga Mahasiswa Buddhis Malang  · Contract', NULL, NULL, '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size: 10.5pt; line-height: 107%; font-family: &quot;Segoe UI&quot;, sans-serif; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">I actively participated in diverse creative\r\nendeavors, undertaking responsibilities such as crafting captivating posters\r\nand banners, generating photo and video documentation, designing stickers for\r\npiggy banks, and conceptualizing Instagram feed layouts for comprehensive\r\ndocumentation reports. Additionally, I took charge of crafting distinctive\r\ndesign certificates for all committee members.</span><o:p></o:p></p>', '2024-04-11 23:40:07', '2024-04-15 16:09:16'),
(4, 'Design and Documentation Division in Penerimaan Mahasiswa Baru x Welcoming Party', 'experience', '2023-07-12', '2023-09-15', 'Keluarga Mahasiswa Buddhis Dhammavaddhana Binus University· Contract', NULL, NULL, '<p class=\"MsoNormal\" style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:\r\n12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\ncolor:black;mso-color-alt:windowtext;mso-font-kerning:0pt;mso-ligatures:none;\r\nmso-fareast-language:EN-ID\">During this event, my team and I are involved in\r\nseveral tasks, such as designing posters, creating a mascot, designing\r\nstickers, logos, T-shirt designs, and preparing PowerPoint presentations. We\r\nare also responsible for documenting the event through photography and\r\nvideography. Furthermore, we produce a post-event video.</span><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:\r\nEN-ID\"><o:p></o:p></span></p>', '2024-04-12 14:13:17', '2024-04-15 16:12:33'),
(6, 'Dhammasanti Waisak 2023 \"Restoring Dhamma after Pandemic\" on Design and Documentation Division', 'experience', '2023-06-15', '2023-06-15', 'Keluarga Mahasiswa Buddhis Malang', NULL, NULL, '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size: 10.5pt; line-height: 107%; font-family: &quot;Segoe UI&quot;, sans-serif; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">During this event, I assumed a pivotal role in the\r\nDesign and Documentation Division, where my duties encompassed the intricate\r\ndesign of posters and banners, meticulous documentation of activities, and the\r\nreal-time provision of live reports on Instagram through the handle\r\n@kmbm_malang. Additionally, I curated visually engaging Instagram feeds\r\nshowcasing comprehensive event documentation.</span><o:p></o:p></p>', '2024-04-12 14:29:48', '2024-04-15 16:14:34'),
(10, 'BINUS University', 'education', '2022-07-21', NULL, 'Bachelor', 'Computer Science', 'MySQL | C Programming | Java | Laravel', NULL, '2024-04-15 16:30:34', '2024-04-21 12:58:44'),
(11, 'ARnatomi: An Augmented Reality Mobile Application for Interactive Body Anatomy Learning using Unity3D', 'publication', '2023-12-14', NULL, 'IEEE', 'https://doi.org/10.1109/ICIMCIS60089.2023.10349043', NULL, NULL, '2024-04-15 17:14:05', '2024-04-15 17:14:05'),
(12, 'Evaluation of Indorelawan.org Website in User Experience Perspective using User Experience Questionnaire (UEQ)', 'publication', '2023-08-24', NULL, 'IEEE', 'https://doi.org/10.1109/ICIMTech59029.2023.10277756', NULL, NULL, '2024-04-15 17:17:27', '2024-04-15 17:17:27'),
(13, 'Saint Joseph College Senior High School', 'education', '2019-07-16', '2022-05-16', 'Senior High School', 'Science', 'Basic mathematics | Biology | Basic physics | Basic chemistry | Mandarin | English | Presentations | Visual Basic | Microsoft Word | Graphic Design | Business Development', NULL, '2024-04-16 07:18:54', '2024-04-16 07:18:54'),
(14, 'Treasurer of the Malam Keakraban \"Let\'s Grow Together\"', 'experience', '2023-01-03', '2023-01-05', 'Keluarga Mahasiswa Buddhis Dhammavaddhana Binus University· Contract', NULL, NULL, '<p>Create budgets, quotations, event financial reports, and coordinate events with the Event Core Management Board and the Events Division<br></p>', '2024-04-17 06:43:20', '2024-04-17 06:43:20'),
(16, 'Owner Bakery Online Shop', 'experience', '2020-07-21', NULL, 'byleens', NULL, NULL, '<p><b><u>Instagram : @byleens</u></b></p>', '2024-04-21 12:57:26', '2024-04-21 12:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` text NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `avatar`) VALUES
(1, 'allena', 'allennaa.123@gmail.com', NULL, NULL, NULL, '2024-04-06 04:12:55', '2024-04-10 02:09:12', '116055913134319861443', '116055913134319861443.jpg'),
(2, 'Allenne Victoria', 'lee.ailinli@gmail.com', NULL, NULL, NULL, '2024-04-06 04:48:45', '2024-04-10 06:03:23', '110932216778637390592', '110932216778637390592.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `metadata`
--
ALTER TABLE `metadata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
