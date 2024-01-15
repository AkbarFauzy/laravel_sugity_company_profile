-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 03:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sugity_company_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `bod`
--

CREATE TABLE `bod` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `affiliation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bod`
--

INSERT INTO `bod` (`id`, `name`, `position`, `img`, `affiliation`, `created_at`, `updated_at`) VALUES
(1, 'Masashi Suzuki', 'President Director', 'MasashiSuzuki-Pres.Director.png', 'Toyota Auto Body Co., Ltd.', '2024-01-03 01:18:03', '2024-01-03 01:18:03'),
(2, 'Riwan Darmanto', 'Executive Vice President', 'RiwanDarmanto-ExecutiveVicePres.Director.png', NULL, '2024-01-03 01:18:03', '2024-01-03 01:18:03'),
(3, 'Djoko Santoso', 'Director', 'DjokoSantoso-Director.png', NULL, '2024-01-03 01:18:03', '2024-01-03 01:18:03'),
(4, 'Koji Yasuda', 'Director', 'KojiYasuda-Director.png', 'Toyota Auto Body Co., Ltd.', '2024-01-03 01:18:03', '2024-01-03 01:18:03'),
(5, 'Asep Chandra P.Y.', 'Director', 'AsepChandra-Director.png', NULL, '2024-01-03 01:18:03', '2024-01-03 01:18:03'),
(6, 'Maya Maharini', 'Director', 'MayaMaharini-Director.png', NULL, '2024-01-03 01:18:03', '2024-01-03 01:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `csr`
--

CREATE TABLE `csr` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isPublish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csr`
--

INSERT INTO `csr` (`id`, `headline`, `headline_img`, `content`, `isPublish`, `created_at`, `updated_at`) VALUES
(1, 'Early Childhood Literacy Space', 'small-card-7.jpg', '<p>To foster a culture of reading interest among children, SUGITY collaborates with the COMMUNITY READING FORUM to organize drawing and storytelling competitions for children aged 4 to 7. The theme of the event is inspired by the picture books (EHON) created by Motoko Matsuda. Through this activity, it is hoped that the children of employees and the local community can develop a strong passion for reading from an early age.&nbsp;</p><p>Merit activity: The initiative has received a positive response from the local community and the regional government (PEMDA), garnering coverage in six local media outlets.</p>', 1, '2023-01-20 19:47:39', '2024-01-08 00:49:55'),
(2, 'Aid Shipment for Cianjur Earthquake Victims', 'small_card_6_1704631502.jpg', '<p>In November 2022, Cianjur experienced an extraordinary earthquake that resulted in loss of life and property. Therefore, on December 9, SUGITY provided donations such as rice, oil, blankets, etc., to the JABAR QUICK RESPONSE institution as volunteers. The hope is that this donation will aid the refugees from Cianjur in returning to normalcy.&nbsp;</p><p>Merit activity: The initiative received appreciation from JABAR QUICK RESPONSE, acknowledging the good commitment from the TOP Management.</p>', 1, '2022-12-08 19:47:40', '2024-01-08 00:50:35'),
(3, 'Donation for Cianjur Earthquake Victims', 'small-card-5_1704419736.jpg', '<p>In November 2022, Cianjur experienced an extraordinary earthquake that resulted in loss of life and property. Therefore, on December 9, SUGITY provided donations such as rice, oil, blankets, etc., to the JABAR QUICK RESPONSE institution as volunteers. The hope is that this donation will aid the refugees from Cianjur in returning to normalcy.&nbsp;</p><p>Merit activity: The initiative received appreciation from JABAR QUICK RESPONSE, acknowledging the good commitment from the TOP Management.</p>', 1, '2022-12-08 19:47:41', '2024-01-07 19:52:49'),
(4, 'Pemda Bekasi and Sugity Creatives Tree Planting Event', 'small_card_4_1704631412.png', '<p>On December 17, 2022, SUGITY conducted a tree planting ceremony at Pantai Bahagia, Muara Gembong, Bekasi. The planting initiative was driven by the region\'s vulnerability to submersion due to coastal erosion, necessitating preventive measures such as tree planting. The activity is planned to take place from 2022 to 2024, with a target of planting a total of 45,000 Mangrove trees. It is hoped that this undertaking will help curb the rate of erosion and enhance the economic well-being of the local community.&nbsp;</p><p>Merit activity: The event received a positive response from the local community and the regional government (PEMDA), resulting in coverage by five local media outlets.</p>', 1, '2022-12-16 19:47:39', '2024-01-08 00:51:42'),
(5, 'Sugity Creative CSR in Muara Gembong', 'SugityCreativeCSRinMuaraGembong.png', '<p>On December 17, 2022, SUGITY conducted a tree planting ceremony at Pantai Bahagia, Muara Gembong, Bekasi. The planting initiative was driven by the region\'s vulnerability to submersion due to coastal erosion, necessitating preventive measures such as tree planting. The activity is planned to take place from 2022 to 2024, with a target of planting a total of 45,000 Mangrove trees. It is hoped that this undertaking will help curb the rate of erosion and enhance the economic well-being of the local community.&nbsp;</p><p>Merit activity: The event received a positive response from the local community and the regional government (PEMDA), resulting in coverage by five local media outlets.</p>', 1, '2022-12-16 19:47:40', '2024-01-07 19:51:31'),
(6, 'Muara Gembong Mangrove Forest', 'MuaraGembongMangroveForest.png', '<p>On December 17, 2022, SUGITY conducted a tree planting ceremony at Pantai Bahagia, Muara Gembong, Bekasi. The planting initiative was driven by the region\'s vulnerability to submersion due to coastal erosion, necessitating preventive measures such as tree planting. The activity is planned to take place from 2022 to 2024, with a target of planting a total of 45,000 Mangrove trees. It is hoped that this undertaking will help curb the rate of erosion and enhance the economic well-being of the local community.&nbsp;</p><p>Merit activity: The event received a positive response from the local community and the regional government (PEMDA), resulting in coverage by five local media outlets.</p>', 1, '2022-12-16 19:47:41', '2024-01-07 19:51:08'),
(7, 'Ehon Literacy Space', 'RuangLiterasiEhon.png', '<p>To foster a culture of reading interest among children, SUGITY collaborates with the COMMUNITY READING FORUM to organize drawing and storytelling competitions for children aged 4 to 7. The theme of the event is inspired by the picture books (EHON) created by Motoko Matsuda. Through this activity, it is hoped that the children of employees and the local community can develop a strong passion for reading from an early age.&nbsp;</p><p>Merit activity: The initiative has received a positive response from the local community and the regional government (PEMDA), garnering coverage in six local media outlets.</p>', 1, '2023-01-20 19:47:39', '2024-01-07 19:50:26'),
(8, 'Ehon Storytelling Frame', 'BingkaiCeritaStorytellingEhon.png', '<p>To foster a culture of reading interest among children, SUGITY collaborates with the COMMUNITY READING FORUM to organize drawing and storytelling competitions for children aged 4 to 7. The theme of the event is inspired by the picture books (EHON) created by Motoko Matsuda. Through this activity, it is hoped that the children of employees and the local community can develop a strong passion for reading from an early age.&nbsp;</p><p>Merit activity: The initiative has received a positive response from the local community and the regional government (PEMDA), garnering coverage in six local media outlets.</p>', 1, '2023-01-20 19:47:39', '2024-01-07 19:48:54'),
(9, 'Handover of Sacrificial Animals to Jamiul Khoir Rawajulang Mosque', 'medium_card_1_1704631568.jpg', '<p>Every year, Sugity carries out its Corporate Social Responsibility (CSR) program in the religious domain, specifically in the form of animal sacrifice donations. This initiative serves as a manifestation of social responsibility towards the surrounding community, with benefits that can be felt by the local residents. This year, Sugity donated a total of 2 cows, distributed in the vicinity of Sugity\'s locations in Cibitung and Karawang. In his address, Mr. Suzuki, the President Director of Sugity, conveyed the following points:</p><p>1. Sugity is situated in the midst of the community, and the happiness of the community contributes to Sugity\'s own happiness.</p><p>2. The success of Sugity is also derived from the support of the surrounding community; hence, Sugity expresses gratitude for the support and collaboration that has been established.&nbsp;</p><p>The sacrificial animals donated by Sugity were received directly by the chairman of the Mosque Prosperity Council (DKM) of Masjid Jamiul Khoir in Rawajulang, Mr. Amin. In his statement, Mr. Amin expressed, \"As the DKM, we express our heartfelt thanks to Sugity, who cares and is consistently active every year in conducting CSR animal sacrifice, which is beneficial for the surrounding community.\"</p>', 1, '2023-06-27 19:47:39', '2024-01-07 19:48:17'),
(10, 'Planting 45,000 Mangrove Trees in Muara Gembong', 'mangrove_1_1704700506.jpg', '<p>Against the backdrop of the current global issue of increasing CO2 emissions and the local environmental concern of coastal abrasion in the Bekasi region, there is a need for tangible activities that can contribute to the environment, biodiversity, and the socio-economic well-being of the surrounding community. One such initiative is being undertaken by TAB Group Indonesia (SUGITY, TTEC, RPT), which involves the ongoing planting of mangrove trees in Kampung Beting, Desa Pantai Bahagia, Kecamatan Muaragembong.</p><p>The Muara Gembong Mangrove Forest is a long-term program spanning three years, aiming to plant a total of 45,000 mangrove trees (15,000 per year). In 2023, the ceremonial activity was attended by TAB guests Kimura-san and Kino-san, who conveyed a message: the Trees Planting activity is crucial as a contribution against global warming. They emphasized the importance of starting with small actions to preserve the environment.</p><p>It is hoped that through this CSR initiative, benefits will accrue to all parties involved, including the government, the local community, and the sustainability of our joint venture, SUGITY Company.</p>', 1, '2023-11-10 19:47:39', '2024-01-08 00:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `csr_content_gallery`
--

CREATE TABLE `csr_content_gallery` (
  `csr_id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csr_content_gallery`
--

INSERT INTO `csr_content_gallery` (`csr_id`, `img`, `created_at`, `updated_at`) VALUES
(10, '1_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(10, '2_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(10, '3_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(10, '4_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(10, '5_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(10, '6_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(9, '2_1704699721.jpg', '2024-01-08 00:42:01', '2024-01-08 00:42:01'),
(9, '3_1704699721.jpg', '2024-01-08 00:42:01', '2024-01-08 00:42:01'),
(8, '1_1704699998.jpg', '2024-01-08 00:46:38', '2024-01-08 00:46:38'),
(8, '2_1704699998.jpg', '2024-01-08 00:46:38', '2024-01-08 00:46:38'),
(8, '3_1704699998.jpg', '2024-01-08 00:46:38', '2024-01-08 00:46:38'),
(8, '4_1704699998.jpg', '2024-01-08 00:46:38', '2024-01-08 00:46:38'),
(7, '1_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '2_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '3_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '4_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '1_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '2_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '3_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '4_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(1, '2_1704700195.jpg', '2024-01-08 00:49:55', '2024-01-08 00:49:55'),
(1, '3_1704700195.jpg', '2024-01-08 00:49:55', '2024-01-08 00:49:55'),
(1, '4_1704700195.jpg', '2024-01-08 00:49:55', '2024-01-08 00:49:55'),
(2, '11_1704700235.jpg', '2024-01-08 00:50:35', '2024-01-08 00:50:35'),
(2, '12_1704700235.jpg', '2024-01-08 00:50:35', '2024-01-08 00:50:35'),
(2, 'img_4148_1704700235.jpg', '2024-01-08 00:50:35', '2024-01-08 00:50:35'),
(2, 'img_4283_1704700235.jpg', '2024-01-08 00:50:35', '2024-01-08 00:50:35'),
(3, '12_1704700270.jpg', '2024-01-08 00:51:10', '2024-01-08 00:51:10'),
(3, 'img_4148_1704700270.jpg', '2024-01-08 00:51:10', '2024-01-08 00:51:10'),
(3, 'img_4270_1704700270.jpg', '2024-01-08 00:51:10', '2024-01-08 00:51:10'),
(3, 'img_4283_1704700270.jpg', '2024-01-08 00:51:10', '2024-01-08 00:51:10'),
(4, 'picture1_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture4_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture6_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture7_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture8_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture9_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture10_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(5, 'picture1_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture4_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture5_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture6_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture8_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture9_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture10_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(6, 'picture1_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture4_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture5_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture6_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture7_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture9_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture10_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `headline`, `headline_img`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Magni totam atque quasi quibusdam est nemo.', 'reprehenderit', 'Voluptatem recusandae quis et dolorem molestiae rerum. Culpa sapiente quo ratione dolorum vel nostrum sit. Molestias rerum et impedit adipisci mollitia. Cum et qui cupiditate omnis. Cupiditate omnis eligendi dolorem laudantium enim mollitia totam. Non tempora magni omnis qui omnis. Voluptatibus animi rerum omnis dolores. Perspiciatis officiis adipisci recusandae nihil adipisci aperiam illo dolorum.', '2024-01-03 01:18:01', '2024-01-03 01:18:01'),
(2, 'Ipsam quod necessitatibus minima qui asperiores accusantium reiciendis.', 'facere', 'Nemo neque adipisci enim temporibus aliquid et. Nulla maxime qui consequuntur maxime. Vel similique sed optio. In quis ut aut itaque commodi fuga. Qui non est doloribus qui ut commodi repellat aut. Natus doloremque et eaque cum aut. Eos est illo dicta ab et eum enim. Repellat esse quia id officia est. Dolores eos culpa necessitatibus eligendi quaerat natus quas. Velit atque doloremque excepturi est. Unde enim repudiandae iure libero. Provident eos odit voluptas velit est est rerum. Ut qui sunt et sapiente animi.', '2024-01-03 01:18:01', '2024-01-03 01:18:01'),
(3, 'Neque et et molestiae distinctio voluptas.', 'iusto', 'Cum aut atque et provident quasi doloribus. Voluptas quis eligendi illum. Aperiam qui doloremque excepturi sequi enim consequatur minima. Sed placeat sint est. Magni ex corporis laudantium accusamus in voluptatem. Maiores non architecto esse eos odit ipsa. Ratione et et ipsam. Aut aliquid dolores consequatur quis sint consequatur nihil. Dolores dolor aut ad sunt. Dolore corrupti asperiores et excepturi earum labore. Tenetur provident a non et.', '2024-01-03 01:18:01', '2024-01-03 01:18:01'),
(4, 'Provident fugiat eveniet delectus.', 'voluptatum', 'Vel et repudiandae odit qui. Odio nisi facere et. Ut nam eos error necessitatibus officia sed. Nobis quos necessitatibus praesentium magnam velit aut quis. Ad quia dolores omnis delectus. Et officia qui quas ea non. Ea eos distinctio deserunt quasi. Aut numquam iusto sunt sunt a adipisci. Dicta qui iste eligendi illum cum. Aut voluptatem enim esse nobis. Quibusdam ea repellat eligendi dolores itaque est.', '2024-01-03 01:18:01', '2024-01-03 01:18:01'),
(5, 'Autem aut excepturi dignissimos.', 'et', 'Consequuntur quaerat minima quia porro fugiat consequatur. Et aut sequi beatae tenetur non. In cumque enim doloribus porro. Adipisci ad doloribus eius incidunt adipisci. Deleniti qui magni et ut. Consequuntur quibusdam ab eos et quisquam voluptatibus voluptates odit. Possimus qui veniam in fugiat est repellat quia quod.', '2024-01-03 01:18:01', '2024-01-03 01:18:01'),
(6, 'Tempore sunt repellendus perspiciatis.', 'cumque', 'Atque dolor in laborum eum veritatis at fugiat. Voluptas aut ab voluptas molestias. Ex ut modi qui assumenda enim illum. Est ipsam odit voluptatem quia pariatur. Laborum soluta doloremque rerum dignissimos laborum maxime autem. Illo ut tempora possimus reiciendis cupiditate et ut. Ducimus nam qui quae ratione repellendus consequatur et. Velit placeat autem quaerat et. Doloremque ex molestiae impedit perspiciatis. Inventore ducimus quo provident dignissimos.', '2024-01-03 01:18:01', '2024-01-03 01:18:01'),
(7, 'Sit natus aut accusantium animi asperiores.', 'quis', 'Odit nihil autem consequatur. Aspernatur accusamus recusandae ad. Perferendis minima earum est voluptatem. Neque mollitia voluptas nobis molestiae consequatur et. Recusandae repellat eveniet magnam beatae. Perferendis aut molestiae voluptate. Est sit repudiandae quidem doloremque nam eligendi voluptatem. Deleniti modi magnam blanditiis unde laboriosam. Voluptatem quas culpa magnam. Explicabo ducimus numquam eaque enim.', '2024-01-03 01:18:01', '2024-01-03 01:18:01'),
(8, 'Eos et et expedita ipsam quae quia sunt.', 'corrupti', 'Possimus voluptatem autem labore modi et. Et temporibus voluptatem voluptatibus est veniam. Corporis modi voluptate fuga occaecati sed ratione. Omnis ut quasi laborum qui consectetur nesciunt cumque tempore. Voluptates laborum pariatur recusandae repellendus porro hic sint repellat. Suscipit et doloribus maiores. Quia necessitatibus aliquid aut recusandae. Et mollitia sequi dolorum maxime quos modi molestiae quo. Eaque sequi et veritatis id quis facilis temporibus. Harum debitis quod ipsam ipsam. Maxime quo culpa eos placeat. Itaque quis beatae non sit. Ipsum molestiae impedit nemo ut aliquam rerum.', '2024-01-03 01:18:01', '2024-01-03 01:18:01'),
(9, 'Voluptatem odio dolor dolorem nihil cum qui.', 'nobis', 'Possimus officia nostrum vitae. Est cupiditate fugit assumenda assumenda reiciendis possimus aperiam. Voluptatem accusamus modi ea animi animi. Ullam sint ab amet veritatis enim voluptate omnis sed. Voluptatibus consequuntur ea quisquam ratione minima animi. Ab minima illo maxime aut. Ut molestiae in omnis quam et commodi. Blanditiis dolor blanditiis a culpa. Dolor et est ratione repudiandae eligendi.', '2024-01-03 01:18:01', '2024-01-03 01:18:01'),
(10, 'Magni deserunt eos ullam iure aliquid tempore enim.', 'commodi', 'Pariatur velit adipisci est omnis exercitationem harum iste. Doloribus expedita fugiat nam harum id non commodi voluptas. Molestiae labore alias quo ea molestias quaerat non delectus. Sit sed dolores iste facere. Quos molestiae inventore voluptatibus quae porro. A dolorem voluptatem eaque fuga. Enim quidem accusamus eligendi quo. Cumque sed officia commodi quisquam omnis ipsam autem aut. Consequatur voluptatem rerum sint quasi in non vel. Voluptates iste quaerat at unde ipsa. Sunt debitis facere omnis voluptatum omnis. Commodi vero magnam in illum voluptatem magni.', '2024-01-03 01:18:01', '2024-01-03 01:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `created_at`, `updated_at`, `title`, `year`, `img`) VALUES
(1, '2024-01-03 01:18:03', '2024-01-07 04:41:21', 'Sugity Establish', 1995, '1995_1_1704627681.png'),
(2, '2024-01-03 01:18:03', '2024-01-07 04:16:30', 'Vehicle Assembly Dyna', 1996, '8-dyna.jpg'),
(3, '2024-01-03 01:18:03', '2024-01-07 04:41:55', 'Vehicle Assembly Dyna', 1996, '1996_2_1704627715.jpg'),
(4, '2024-01-03 01:18:03', '2024-01-07 04:42:08', 'Vehicle Assembly Kijang SCM', 1996, '1996_3_1704627728.jpg'),
(5, '2024-01-03 01:18:03', '2024-01-07 04:42:15', 'Vehicle Assembly Kijang SCM', 1996, '1996_4_1704627735.jpg'),
(6, '2024-01-03 01:18:03', '2024-01-07 04:42:24', 'Vehicle Assembly Resin Painting', 1996, '1996_5_1704627744.jpg'),
(7, '2024-01-03 01:18:03', '2024-01-07 04:42:32', 'Vehicle Assembly Resin Painting', 1996, '1996_6_1704627752.jpg'),
(8, '2024-01-03 01:18:03', '2024-01-07 04:42:39', 'Vehicle Assembly Resin Painting', 1996, '1996_7_1704627759.jpg'),
(9, '2024-01-03 01:18:03', '2024-01-07 04:42:46', 'Vehicle Assembly Resin Painting', 1996, '1996_8_1704627766.jpg'),
(10, '2024-01-03 01:18:03', '2024-01-07 04:43:52', 'Factory 3 Finished', 1998, '1998_1_1704627832.jpg'),
(11, '2024-01-03 01:18:03', '2024-01-07 04:45:06', 'Automotive Part: Plating', 2000, '2000_1_1704627906.jpg'),
(12, '2024-01-03 01:18:03', '2024-01-07 04:45:36', 'Factory 4 Finished', 2001, '2001_2_1704627936.jpg'),
(13, '2024-01-03 01:18:03', '2024-01-07 04:45:52', 'Mold Making', 2004, '2004_1_1704627952.jpg'),
(14, '2024-01-03 01:18:03', '2024-01-07 04:46:05', 'TTEC Establish', 2005, '2005_1_1704627965.jpg'),
(15, '2024-01-03 01:18:03', '2024-01-07 04:46:36', 'Sugity Plant 2 @ TMMIN Karawang', 2011, '2011_1_1704627996.jpg'),
(16, '2024-01-03 01:18:03', '2024-01-07 04:46:48', 'NAV1 Production', 2012, '2012_1_1704628008.jpg'),
(17, '2024-01-03 01:18:03', '2024-01-07 04:47:01', 'RPT Establish', 2013, '2013_1_1704628021.jpg'),
(18, '2024-01-03 01:18:03', '2024-01-07 04:47:19', 'HiAce Conversion', 2017, '2017_1_1704628039.jpg'),
(19, '2024-01-03 01:18:03', '2024-01-07 04:47:31', 'Education Center Establish', 2019, '2019_1_1704628051.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2023_11_14_030601_create_product_table', 1),
(6, '2023_11_14_040920_create_news_table', 1),
(7, '2023_11_15_121901_create_event_table', 1),
(8, '2023_11_15_121925_create_csr_table', 1),
(9, '2023_11_16_023049_create_bod_table', 1),
(10, '2023_12_18_020144_create_history_table', 1),
(11, '2023_12_28_062234_create_sliders_table', 1),
(12, '2023_12_31_142628_create_table_services', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isPublish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `headline_img`, `content`, `isPublish`, `created_at`, `updated_at`) VALUES
(1, 'Early Childhood Literacy Space', 'small-card-7.jpg', '<p>To foster a culture of reading interest among children, SUGITY collaborates with the COMMUNITY READING FORUM to organize drawing and storytelling competitions for children aged 4 to 7. The theme of the event is inspired by the picture books (EHON) created by Motoko Matsuda. Through this activity, it is hoped that the children of employees and the local community can develop a strong passion for reading from an early age.&nbsp;</p><p>Merit activity: The initiative has received a positive response from the local community and the regional government (PEMDA), garnering coverage in six local media outlets.</p>', 1, '2021-01-30 19:47:39', '2024-01-08 00:49:55'),
(2, 'Aid Shipment for Cianjur Earthquake Victims', 'small_card_6_1704631502.jpg', '<p>In November 2022, Cianjur experienced an extraordinary earthquake that resulted in loss of life and property. Therefore, on December 9, SUGITY provided donations such as rice, oil, blankets, etc., to the JABAR QUICK RESPONSE institution as volunteers. The hope is that this donation will aid the refugees from Cianjur in returning to normalcy.&nbsp;</p><p>Merit activity: The initiative received appreciation from JABAR QUICK RESPONSE, acknowledging the good commitment from the TOP Management.</p>', 1, '2021-12-30 19:47:40', '2024-01-08 00:50:35'),
(3, 'Donation for Cianjur Earthquake Victims', 'small-card-5_1704419736.jpg', '<p>In November 2022, Cianjur experienced an extraordinary earthquake that resulted in loss of life and property. Therefore, on December 9, SUGITY provided donations such as rice, oil, blankets, etc., to the JABAR QUICK RESPONSE institution as volunteers. The hope is that this donation will aid the refugees from Cianjur in returning to normalcy.&nbsp;</p><p>Merit activity: The initiative received appreciation from JABAR QUICK RESPONSE, acknowledging the good commitment from the TOP Management.</p>', 1, '2021-12-30 19:47:41', '2024-01-07 19:52:49'),
(4, 'Pemda Bekasi and Sugity Creatives Tree Planting Event', 'small_card_4_1704631412.png', '<p>On December 17, 2022, SUGITY conducted a tree planting ceremony at Pantai Bahagia, Muara Gembong, Bekasi. The planting initiative was driven by the region\'s vulnerability to submersion due to coastal erosion, necessitating preventive measures such as tree planting. The activity is planned to take place from 2022 to 2024, with a target of planting a total of 45,000 Mangrove trees. It is hoped that this undertaking will help curb the rate of erosion and enhance the economic well-being of the local community.&nbsp;</p><p>Merit activity: The event received a positive response from the local community and the regional government (PEMDA), resulting in coverage by five local media outlets.</p>', 1, '2021-12-30 19:47:39', '2024-01-08 00:51:42'),
(5, 'Sugity Creative CSR in Muara Gembong', 'SugityCreativeCSRinMuaraGembong.png', '<p>On December 17, 2022, SUGITY conducted a tree planting ceremony at Pantai Bahagia, Muara Gembong, Bekasi. The planting initiative was driven by the region\'s vulnerability to submersion due to coastal erosion, necessitating preventive measures such as tree planting. The activity is planned to take place from 2022 to 2024, with a target of planting a total of 45,000 Mangrove trees. It is hoped that this undertaking will help curb the rate of erosion and enhance the economic well-being of the local community.&nbsp;</p><p>Merit activity: The event received a positive response from the local community and the regional government (PEMDA), resulting in coverage by five local media outlets.</p>', 1, '2021-12-30 19:47:40', '2024-01-07 19:51:31'),
(6, 'Muara Gembong Mangrove Forest', 'MuaraGembongMangroveForest.png', '<p>On December 17, 2022, SUGITY conducted a tree planting ceremony at Pantai Bahagia, Muara Gembong, Bekasi. The planting initiative was driven by the region\'s vulnerability to submersion due to coastal erosion, necessitating preventive measures such as tree planting. The activity is planned to take place from 2022 to 2024, with a target of planting a total of 45,000 Mangrove trees. It is hoped that this undertaking will help curb the rate of erosion and enhance the economic well-being of the local community.&nbsp;</p><p>Merit activity: The event received a positive response from the local community and the regional government (PEMDA), resulting in coverage by five local media outlets.</p>', 1, '2021-12-30 19:47:41', '2024-01-07 19:51:08'),
(7, 'Ehon Literacy Space', 'RuangLiterasiEhon.png', '<p>To foster a culture of reading interest among children, SUGITY collaborates with the COMMUNITY READING FORUM to organize drawing and storytelling competitions for children aged 4 to 7. The theme of the event is inspired by the picture books (EHON) created by Motoko Matsuda. Through this activity, it is hoped that the children of employees and the local community can develop a strong passion for reading from an early age.&nbsp;</p><p>Merit activity: The initiative has received a positive response from the local community and the regional government (PEMDA), garnering coverage in six local media outlets.</p>', 1, '2021-01-30 19:47:39', '2024-01-07 19:50:26'),
(8, 'Ehon Storytelling Frame', 'BingkaiCeritaStorytellingEhon.png', '<p>To foster a culture of reading interest among children, SUGITY collaborates with the COMMUNITY READING FORUM to organize drawing and storytelling competitions for children aged 4 to 7. The theme of the event is inspired by the picture books (EHON) created by Motoko Matsuda. Through this activity, it is hoped that the children of employees and the local community can develop a strong passion for reading from an early age.&nbsp;</p><p>Merit activity: The initiative has received a positive response from the local community and the regional government (PEMDA), garnering coverage in six local media outlets.</p>', 1, '2021-01-30 19:47:39', '2024-01-07 19:48:54'),
(9, 'Handover of Sacrificial Animals to Jamiul Khoir Rawajulang Mosque', 'medium_card_1_1704631568.jpg', '<p>Every year, Sugity carries out its Corporate Social Responsibility (CSR) program in the religious domain, specifically in the form of animal sacrifice donations. This initiative serves as a manifestation of social responsibility towards the surrounding community, with benefits that can be felt by the local residents. This year, Sugity donated a total of 2 cows, distributed in the vicinity of Sugity\'s locations in Cibitung and Karawang. In his address, Mr. Suzuki, the President Director of Sugity, conveyed the following points:</p><p>1. Sugity is situated in the midst of the community, and the happiness of the community contributes to Sugity\'s own happiness.</p><p>2. The success of Sugity is also derived from the support of the surrounding community; hence, Sugity expresses gratitude for the support and collaboration that has been established.&nbsp;</p><p>The sacrificial animals donated by Sugity were received directly by the chairman of the Mosque Prosperity Council (DKM) of Masjid Jamiul Khoir in Rawajulang, Mr. Amin. In his statement, Mr. Amin expressed, \"As the DKM, we express our heartfelt thanks to Sugity, who cares and is consistently active every year in conducting CSR animal sacrifice, which is beneficial for the surrounding community.\"</p>', 1, '2021-06-29 19:47:39', '2024-01-07 19:48:17'),
(10, 'Planting 45,000 Mangrove Trees in Muara Gembong', 'mangrove_1_1704700506.jpg', '<p>Against the backdrop of the current global issue of increasing CO2 emissions and the local environmental concern of coastal abrasion in the Bekasi region, there is a need for tangible activities that can contribute to the environment, biodiversity, and the socio-economic well-being of the surrounding community. One such initiative is being undertaken by TAB Group Indonesia (SUGITY, TTEC, RPT), which involves the ongoing planting of mangrove trees in Kampung Beting, Desa Pantai Bahagia, Kecamatan Muaragembong.</p><p>The Muara Gembong Mangrove Forest is a long-term program spanning three years, aiming to plant a total of 45,000 mangrove trees (15,000 per year). In 2023, the ceremonial activity was attended by TAB guests Kimura-san and Kino-san, who conveyed a message: the Trees Planting activity is crucial as a contribution against global warming. They emphasized the importance of starting with small actions to preserve the environment.</p><p>It is hoped that through this CSR initiative, benefits will accrue to all parties involved, including the government, the local community, and the sustainability of our joint venture, SUGITY Company.</p>', 1, '2021-11-29 19:47:39', '2024-01-08 00:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `news_content_gallery`
--

CREATE TABLE `news_content_gallery` (
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_content_gallery`
--

INSERT INTO `news_content_gallery` (`news_id`, `img`, `created_at`, `updated_at`) VALUES
(10, '1_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(10, '2_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(10, '3_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(10, '4_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(10, '5_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(10, '6_1704699666.jpg', '2024-01-08 00:41:06', '2024-01-08 00:41:06'),
(9, '2_1704699721.jpg', '2024-01-08 00:42:01', '2024-01-08 00:42:01'),
(9, '3_1704699721.jpg', '2024-01-08 00:42:01', '2024-01-08 00:42:01'),
(8, '1_1704699998.jpg', '2024-01-08 00:46:38', '2024-01-08 00:46:38'),
(8, '2_1704699998.jpg', '2024-01-08 00:46:38', '2024-01-08 00:46:38'),
(8, '3_1704699998.jpg', '2024-01-08 00:46:38', '2024-01-08 00:46:38'),
(8, '4_1704699998.jpg', '2024-01-08 00:46:38', '2024-01-08 00:46:38'),
(7, '1_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '2_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '3_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '4_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '1_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '2_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '3_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(7, '4_1704700015.jpg', '2024-01-08 00:46:55', '2024-01-08 00:46:55'),
(1, '2_1704700195.jpg', '2024-01-08 00:49:55', '2024-01-08 00:49:55'),
(1, '3_1704700195.jpg', '2024-01-08 00:49:55', '2024-01-08 00:49:55'),
(1, '4_1704700195.jpg', '2024-01-08 00:49:55', '2024-01-08 00:49:55'),
(2, '11_1704700235.jpg', '2024-01-08 00:50:35', '2024-01-08 00:50:35'),
(2, '12_1704700235.jpg', '2024-01-08 00:50:35', '2024-01-08 00:50:35'),
(2, 'img_4148_1704700235.jpg', '2024-01-08 00:50:35', '2024-01-08 00:50:35'),
(2, 'img_4283_1704700235.jpg', '2024-01-08 00:50:35', '2024-01-08 00:50:35'),
(3, '12_1704700270.jpg', '2024-01-08 00:51:10', '2024-01-08 00:51:10'),
(3, 'img_4148_1704700270.jpg', '2024-01-08 00:51:10', '2024-01-08 00:51:10'),
(3, 'img_4270_1704700270.jpg', '2024-01-08 00:51:10', '2024-01-08 00:51:10'),
(3, 'img_4283_1704700270.jpg', '2024-01-08 00:51:10', '2024-01-08 00:51:10'),
(4, 'picture1_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture4_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture6_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture7_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture8_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture9_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(4, 'picture10_1704700302.jpg', '2024-01-08 00:51:42', '2024-01-08 00:51:42'),
(5, 'picture1_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture4_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture5_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture6_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture8_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture9_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(5, 'picture10_1704700332.jpg', '2024-01-08 00:52:12', '2024-01-08 00:52:12'),
(6, 'picture1_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture4_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture5_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture6_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture7_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture9_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27'),
(6, 'picture10_1704700347.jpg', '2024-01-08 00:52:27', '2024-01-08 00:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `left_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `img`, `left_content`, `right_content`, `created_at`, `updated_at`) VALUES
(1, 'Gran Max Jaklingko', 'Public Transport', '3_1704635663.png', '<ul><li>Ergonomic Dashboard</li><li>Spacious cabin</li><li>Safety Body Structure</li><li>Efficient Full Consumption</li><li>Small Turning Radius</li><li>Emergency Door</li></ul>', '<ul><li>Power Slide Door</li><li>Passanger Seats</li><li>Cabin Partition</li><li>3 LED Running Text</li><li>OBU (On Board Unit)</li><li>TV Monitor</li><li>A/C Double Blower</li><li>4 CCTV Camera &amp; DVR</li><li>Vynil Floor</li><li>Speed &amp; Reverse Buzzer</li><li>Emergency Door Access</li><li>Fire Extinguisher</li></ul>', '2024-01-03 01:18:03', '2024-01-07 06:54:23'),
(2, 'Gran Max Wira Wiri SBY', 'Public Transport', '2_1704634494.png', '<ul><li>OEM product for Electric Door&nbsp;</li><li>Parts &amp; Wiring installation meets OEM standard&nbsp;</li><li>Durable designed for Heavy Duty used&nbsp;</li><li>Providing highest &amp; reliable material quality&nbsp;</li><li>Highest standard for safety installation &amp; fire hazards protection.</li></ul>', '<ul><li>Power Slide Door</li><li>Telematics component</li><li>AC Double Blower&nbsp;</li><li>Seat &amp; Floor modification</li><li>Cabin Partition</li><li>Speed &amp; Rear Buzzer</li></ul>', '2024-01-03 01:18:03', '2024-01-08 02:16:05'),
(3, 'HiAce Wira-Wiri SBY', 'Public Transport', '1_1704634476.png', '<ul><li>Japan OEM product for Electric Door&nbsp;</li><li>Parts &amp; Wiring installation meets OEM standard&nbsp;</li><li>Durable designed for Heavy Duty used&nbsp;</li><li>Providing highest &amp; reliable material quality&nbsp;</li><li>Highest standard for safety installation &amp; fire hazards protection</li></ul>', '<ul><li>Power Slide Door</li><li>Telematics components</li><li>Speed Buzzer</li><li>Rear Buzzer</li><li>Fire Extinguisher</li></ul>', '2024-01-03 01:18:03', '2024-01-08 02:15:33'),
(4, 'Voxy Welcab', 'Healthcare Vehicle', '1_1704636435.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:07:15'),
(5, 'HiAce Medical Mover', 'Healthcare Vehicle', '2_1704636368.png', '<ul><li>Japan OEM Product&nbsp;</li><li>Parts &amp; Wiring installation meets OEM Standard&nbsp;</li></ul><p><strong>Optional accsesoris :&nbsp;</strong></p><ul><li>Body stand belt&nbsp;</li><li>Strap (4 Point) for wheelchair</li></ul>', '<ul><li>Operation Button (Reclining, Sliding, Lifting)</li><li>Foot Rest&nbsp;</li><li>Arm Rest&nbsp;</li><li>Wireless Remote</li><li>Remote holder</li></ul>', '2024-01-03 01:18:03', '2024-01-08 02:20:21'),
(6, 'HiAce Ambulance', 'Healthcare Vehicle', '4_1704636460.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:07:40'),
(9, 'Gran Max Ambulance', 'Healthcare Vehicle', '6_1704636534.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:08:54'),
(10, 'Innova Ambulance', 'Healthcare Vehicle', '5_1704636500.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:08:20'),
(11, 'Cash Carrier Fortuner', 'Export Vehicle', '1_1704636556.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:09:16'),
(12, 'Fortuner Ambulance', 'Export Vehicle', '2_1704636571.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:09:31'),
(13, 'Sub Assy Instrument Panel', 'Interior Part', '1_1704636611.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:10:11'),
(14, 'Instrument Panel', 'Interior Part', '2_1704636627.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:10:27'),
(15, 'Door Trim', 'Interior Part', '3_1704636768.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:12:48'),
(16, 'Box Console', 'Interior Part', '4_1704636789.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:13:09'),
(17, 'Quarter Door Trim', 'Interior Part', '5_1704636808.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:13:28'),
(18, 'Door Glove', 'Interior Part', '6_1704636827.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:13:47'),
(19, 'Register', 'Interior Part', '7_1704636856.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:14:16'),
(20, 'Rear Bumper Yaris', 'Exterior Part', '1_1704636946.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:15:46'),
(21, 'Rear Bumper Yaris Cross', 'Exterior Part', '6_1704637035.png', NULL, NULL, '2024-01-05 09:36:53', '2024-01-07 07:17:15'),
(22, 'Front Bumper Yaris', 'Exterior Part', '2_1704636962.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:16:02'),
(23, 'Front Bumper Yaris Cross', 'Exterior Part', '7_1704637051.png', NULL, NULL, '2024-01-05 09:37:33', '2024-01-07 07:17:31'),
(24, 'Grille', 'Exterior Part', '3_1704636979.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:16:19'),
(25, 'Spoiler', 'Exterior Part', '4_1704636999.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:16:39'),
(26, 'Mud Guard', 'Exterior Part', '5_1704637016.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:16:56'),
(27, 'Big Mold', 'Mold', '1_1704637145.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:19:05'),
(28, 'Medium Mold', 'Mold', '2_1704637128.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:18:48'),
(29, 'Small Mold', 'Mold', '3_1704637111.png', NULL, NULL, '2024-01-03 01:18:03', '2024-01-07 07:18:31'),
(30, 'Fortuner Patrol', 'Export Vehicle', '10_1704637257.png', NULL, NULL, '2024-01-05 09:29:40', '2024-01-07 07:20:57'),
(31, 'Vios Patrol', 'Export Vehicle', '9_1704637225.png', NULL, NULL, '2024-01-05 09:31:04', '2024-01-07 07:20:25'),
(32, 'Car Promotion', 'Other', '2_1704726247.png', NULL, NULL, '2024-01-08 08:04:07', '2024-01-08 08:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `products_content_gallery`
--

CREATE TABLE `products_content_gallery` (
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_content_gallery`
--

INSERT INTO `products_content_gallery` (`products_id`, `type`, `img`, `created_at`, `updated_at`) VALUES
(3, 'interior', '1(1)_1704702974.jpg', '2024-01-08 01:36:14', '2024-01-08 01:36:14'),
(3, 'interior', '2(1)_1704702974.jpg', '2024-01-08 01:36:14', '2024-01-08 01:36:14'),
(3, 'interior', '3(1)_1704702974.jpg', '2024-01-08 01:36:14', '2024-01-08 01:36:14'),
(3, 'interior', '4(1)_1704702974.jpg', '2024-01-08 01:36:14', '2024-01-08 01:36:14'),
(3, 'interior', '6(1)_1704702974.jpg', '2024-01-08 01:36:14', '2024-01-08 01:36:14'),
(3, 'interior', '8(1)_1704702974.jpg', '2024-01-08 01:36:14', '2024-01-08 01:36:14'),
(3, 'interior', '9(1)_1704702974.jpg', '2024-01-08 01:36:14', '2024-01-08 01:36:14'),
(3, 'exterior', '1_1704703467.png', '2024-01-08 01:44:27', '2024-01-08 01:44:27'),
(3, 'exterior', '21_1704703467.png', '2024-01-08 01:44:27', '2024-01-08 01:44:27'),
(2, 'interior', '1_1704704370.jpg', '2024-01-08 01:59:30', '2024-01-08 01:59:30'),
(2, 'interior', '2_1704704370.jpg', '2024-01-08 01:59:30', '2024-01-08 01:59:30'),
(2, 'interior', '3_1704704370.jpg', '2024-01-08 01:59:30', '2024-01-08 01:59:30'),
(2, 'interior', '4_1704704370.jpg', '2024-01-08 01:59:30', '2024-01-08 01:59:30'),
(2, 'exterior', '1_1704704370.png', '2024-01-08 01:59:30', '2024-01-08 01:59:30'),
(2, 'exterior', '2_1_1704704370.png', '2024-01-08 01:59:30', '2024-01-08 01:59:30'),
(1, 'interior', '1_1704705440.jpg', '2024-01-08 02:17:20', '2024-01-08 02:17:20'),
(1, 'interior', '2_1704705440.jpg', '2024-01-08 02:17:20', '2024-01-08 02:17:20'),
(1, 'interior', '3_1704705440.jpg', '2024-01-08 02:17:20', '2024-01-08 02:17:20'),
(1, 'exterior', '1_1704705440.jpg', '2024-01-08 02:17:20', '2024-01-08 02:17:20'),
(1, 'exterior', '2_1704705440.jpg', '2024-01-08 02:17:20', '2024-01-08 02:17:20'),
(1, 'exterior', '3_1704705440.jpg', '2024-01-08 02:17:20', '2024-01-08 02:17:20'),
(5, 'interior', '2(1)_1704705622.jpg', '2024-01-08 02:20:22', '2024-01-08 02:20:22'),
(5, 'interior', '3(1)_1704705622.jpg', '2024-01-08 02:20:22', '2024-01-08 02:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Vehicle Business', 'Focused on vehicle assembly and conversion, our growth started with Kijang Krista (1996-2022), Toyota Dyna & Hino Dutro (1996-2009), and Toyota NAV1 (2012-2016). Since 2017, our innovation expanded our offerings to Hiace Luxury, Fortuner CCV, Welcab Vehicles (Sienta & Voxy), Public Transport (Hiace & Granmax), and Hiace Medical Mover, emphasizing our commitment to advanced, tailored conversion vehicles.', '1.1-overlay-image-service-section.png', '2024-01-03 01:18:04', '2024-01-03 01:18:04'),
(2, 'Part Business', 'As the initial core business in Sugity, the automotive parts business has been running resin injection since 1996, and along its process cultivating into painting & sub assy processes which are advancing toward automation.', '2-overlay-image-service-section.png', '2024-01-03 01:18:04', '2024-01-03 01:18:04'),
(3, 'Mold Business', 'Mold Making Business is one of our core business that produces iron-based plastic mold. Initiated in 2004 from in-house mold making by producing small mold, we continued to make bumpers in 2014 to finally reached the ASEAN market in 2018. As one of our business pillars that contributes to the company\'s profit, we targeted to be the No.1 Mold Maker all over the ASEAN.', '3-overlay-image-service-section.png', '2024-01-03 01:18:04', '2024-01-03 01:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `position` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `x_offset` float(8,2) DEFAULT NULL,
  `y_offset` float(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `tagline`, `page`, `position`, `x_offset`, `y_offset`, `created_at`, `updated_at`) VALUES
(6, 'banner_2_v3_1704728912.png', '<p><span style=\"font-size:56px;\"><strong>HiAce Wira-Wiri</strong></span><br><span style=\"font-size:21px;\">The TOYOTA HiAce Wira-Wiri has been developed specifically for the secure and efficient transportation&nbsp;</span><br><span style=\"font-size:21px;\">of cash, valuables, and passengers, prioritizing a seamless blend of security and operational&nbsp;</span><br><span style=\"font-size:21px;\">effectiveness.</span></p>', 'Home', 'Bottom Left', NULL, NULL, '2024-01-08 08:48:32', '2024-01-08 09:26:55'),
(9, 'banner_3_v3_1704731591.png', '<p><span style=\"font-size:56px;\"><strong>Instrument Panel</strong></span></p><p><span style=\"font-size:21px;\">The instrument panel sub-assembly: a vital component orchestrating crucial vehicle data and controls,&nbsp;</span><br><span style=\"font-size:21px;\">ensuring seamless functionality and convenience at your fingertips.</span><br>&nbsp;</p>', 'Home', 'Bottom Left', NULL, NULL, '2024-01-08 09:33:11', '2024-01-08 09:34:14'),
(10, 'banner_4_v4_1704731784.png', '<p><span style=\"font-size:56px;\"><strong>Vehicle Assembly</strong></span></p><p><span style=\"font-size:21px;\">Sugity, linked to Toyota Autobody, shifted from assembly to innovative vehicle conversions since 2017,</span><br><span style=\"font-size:21px;\">prioritizing quality, safety, and durability.&nbsp;</span></p>', 'Home', 'Top Right', NULL, NULL, '2024-01-08 09:36:24', '2024-01-08 09:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2024-01-03 01:18:02', '$2y$12$1.FSmG93sf1vn/9GuKFhQ.zhK4nzs9Yf/V.EDtDgKUbRYeQPwsfHi', 'UBRVB4994a', '2024-01-03 01:18:03', '2024-01-03 01:18:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bod`
--
ALTER TABLE `bod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csr`
--
ALTER TABLE `csr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csr_content_gallery`
--
ALTER TABLE `csr_content_gallery`
  ADD KEY `csr_content_gallery_csr_id_foreign` (`csr_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_content_gallery`
--
ALTER TABLE `news_content_gallery`
  ADD KEY `news_content_gallery_news_id_foreign` (`news_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_content_gallery`
--
ALTER TABLE `products_content_gallery`
  ADD KEY `products_content_gallery_products_id_foreign` (`products_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `bod`
--
ALTER TABLE `bod`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `csr`
--
ALTER TABLE `csr`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `csr_content_gallery`
--
ALTER TABLE `csr_content_gallery`
  ADD CONSTRAINT `csr_content_gallery_csr_id_foreign` FOREIGN KEY (`csr_id`) REFERENCES `csr` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news_content_gallery`
--
ALTER TABLE `news_content_gallery`
  ADD CONSTRAINT `news_content_gallery_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_content_gallery`
--
ALTER TABLE `products_content_gallery`
  ADD CONSTRAINT `products_content_gallery_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
