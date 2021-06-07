-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 10:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `comingsoon`
--

CREATE TABLE `comingsoon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starring` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comingsoon`
--

INSERT INTO `comingsoon` (`id`, `title`, `year`, `starring`, `director`, `genre`, `poster`, `rating`, `description`, `duration`, `trailer`, `created_at`, `updated_at`) VALUES
(1, 'The Last Song', '2010', 'Miley Cyrus, Liam Hemsworth, Greg Kinnear, Kelly Preston, Bobby Coleman', 'Julie Anne Robinson', 'romance', 'TheLastSong.jpg', 'PG', 'A rebellious girl is sent to a Southern beach town for the summer to stay with her father. Through their mutual love of music, the estranged duo learn to reconnect. ', '107 Minutes', 'https://www.youtube.com/embed/vZH0Nf4KLBo', '2020-05-10 08:00:00', '2020-05-10 08:00:00'),
(2, 'So Undercover', '2012', 'Miley Cyrus, Jeremy Piven, Mike O\'Malley', 'Tom Vaughan', 'Action, Comedy, Crime', 'SoUndercover.jpg', 'PG-13', 'A tough, street-smart private eye is hired by the FBI to go undercover in a college sorority. ', '94 Minutes', 'https://www.youtube.com/embed/fUNXNLyr7tU', '2020-05-10 11:00:00', '2020-05-10 11:00:00'),
(3, 'Monte Carlo', '2011', 'Selena Gomez, Leighton Meester, Katie Cassidy ', 'Thomas Bezucha\r\n', 'Adventure, Comedy, Family', 'MonteCarlo.jpg', 'PG', 'Three young women vacationing in Paris find themselves whisked away to Monte Carlo after one of the girls is mistaken for a British heiress.', '109 Minutes', 'https://www.youtube.com/embed/Rxm_bVVhbr8', '2020-05-10 10:00:00', '2020-05-10 10:00:00'),
(6, 'Fifty Shades of Grey', '2015', 'Dakota Johnson, Jamie Dornan, Jennifer Ehle', 'Sam Taylor-Johnson', 'Drama, Romance, Thriller', 'FiftyShades.jpg', 'R', 'Literature student Anastasia Steele\'s life changes forever when she meets handsome, yet tormented, billionaire Christian Grey.', '125 Minutes', 'https://www.youtube.com/embed/SfZWFDs0LxA', '2020-05-24 00:02:05', '2020-05-24 00:02:05'),
(7, 'Charlie\'s Angels', '2019', 'Kristen Stewart, Naomi Scott, Ella Balinska', 'Elizabeth Banks', 'Action, Adventure, Comedy ', 'CharliesAngels.jpg', 'PG-13', 'When a young systems engineer blows the whistle on a dangerous technology, Charlie\'s Angels are called into action, putting their lives on the line to protect us all.', '118 Minutes', 'https://www.youtube.com/embed/RSUq4VfWfjE', '2020-05-23 20:02:40', '2020-05-23 20:02:40'),
(10, 'Underdog', '2007', 'Peter Dinklage, Jason Lee, Amy Adams', 'Frederik Du Chau', 'Action, Adventure, Comedy', 'Underdog.jpg', 'PG', 'A Beagle must use his newly-bestowed superpowers to defend Capitol City from mad scientist Simon Barsinister.', '84 Minutes', 'https://www.youtube.com/embed/6jooThaqeYg', '2020-05-23 07:00:09', '2020-05-23 07:00:09'),
(12, 'Camp Rock', '2008', 'Demi Lovato, Joe Jonas, Meaghan Martin', 'Matthew Diamond', 'Comedy, Family, Music ', 'CampRock.jpg', 'TV-G', 'At a music camp for gifted teens, a popular teen idol overhears a girl singing and sets out to find who the talented voice belongs to. What he doesn\'t know is that the girl is actually a camp kitchen worker with a fear of being heard.', '94 Minutes', 'https://www.youtube.com/embed/chqevL3FSz8', '2020-05-20 20:05:04', '2020-05-20 20:05:04'),
(13, 'Bumblebee', '2018', 'Hailee Steinfeld, Jorge Lendeborg Jr., John Cena', 'Travis Knight', 'Action, Adventure, Sci-Fi', 'Bumblebee.jpg', 'PG-13', 'On the run in the year 1987, Bumblebee finds refuge in a junkyard in a small California beach town. On the cusp of turning 18 and trying to find her place in the world, Charlie Watson discovers Bumblebee, battle-scarred and broken.', '114 Minutes', 'https://www.youtube.com/embed/lcwmDAYt22k', '2020-05-24 05:29:30', '2020-05-24 05:29:30'),
(14, 'Interstellar', '2014', 'Matthew McConaughey, Anne Hathaway, Jessica Chastain', 'Christopher Nolan', 'Adventure, Drama, Sci-Fi', 'Interstellar.jpg', 'PG-13', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', '170 Minutes', 'https://www.youtube.com/embed/zSWdZVtXT7E', '2020-05-23 21:43:22', '2020-05-23 21:43:22'),
(15, 'Divergent', '2014', ' Shailene Woodley, Theo James, Kate Winslet', 'Neil Burger', 'Action, Adventure, Mystery', 'Divergent.jpg', 'PG-13', 'In a world divided by factions based on virtues, Tris learns she\'s Divergent and won\'t fit in. When she discovers a plot to destroy Divergents, Tris and the mysterious Four must find out what makes Divergents dangerous before it\'s too late.', '135 Minutes', 'https://www.youtube.com/embed/sutgWjz10sM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seats` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `studio` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `email`, `title`, `seats`, `time`, `studio`, `created_at`, `updated_at`) VALUES
(1, 'user@cinema.com', 'Jexi', 'A3,A4', '2', '2', '2020-05-25 12:07:11', '2020-05-25 12:07:11'),
(2, 'user@cinema.com', 'Jexi', 'A3,A4', '2', '2', '2020-05-25 12:09:39', '2020-05-25 12:09:39'),
(3, 'user@cinema.com', 'Jexi', 'A5,A6,A7,A8', '4', '2', '2020-05-25 12:10:51', '2020-05-25 12:10:51'),
(4, 'user@cinema.com', 'Jexi', 'A9,A10', '2', '2', '2020-05-25 12:11:21', '2020-05-25 12:11:21'),
(5, 'user@cinema.com', 'Jexi', 'A9,A10', '2', '2', '2020-05-25 12:13:36', '2020-05-25 12:13:36'),
(6, 'user@cinema.com', 'Jexi', 'A11', '1', '2', '2020-05-25 12:14:54', '2020-05-25 12:14:54'),
(7, 'user@cinema.com', 'Jexi', 'A11', '1', '2', '2020-05-25 12:14:54', '2020-05-25 12:14:54'),
(8, 'user@cinema.com', 'Jexi', 'B1', '1', '2', '2020-05-25 12:15:34', '2020-05-25 12:15:34'),
(9, 'user@cinema.com', 'Jexi', 'B1', '1', '2', '2020-05-25 12:15:49', '2020-05-25 12:15:49'),
(10, 'user@cinema.com', 'Jexi', 'B2', '1', '2', '2020-05-25 12:15:59', '2020-05-25 12:15:59'),
(11, 'user@cinema.com', 'Jexi', 'B3,B4', '12.00', '2', '2020-05-25 12:21:49', '2020-05-25 12:21:49'),
(12, 'user@cinema.com', 'Jexi', 'C6,C7', '12.00', '2', '2020-05-25 20:02:35', '2020-05-25 20:02:35'),
(13, 'user@cinema.com', 'Jexi', 'B6,B7', '12.00', '2', '2020-06-01 15:22:12', '2020-06-01 15:22:12'),
(14, 'user@cinema.com', 'Jexi', 'A6,A7,A8,A9', '15.00', '1', '2020-06-01 19:05:37', '2020-06-01 19:05:37'),
(15, 'user@cinema.com', 'Jexi', 'A1,A2,A3', '15.00', '1', '2020-06-01 19:10:25', '2020-06-01 19:10:25'),
(16, 'user@cinema.com', 'Jexi', 'A1,A2', '15.00', '1', '2020-06-01 19:12:22', '2020-06-01 19:12:22');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2020_05_10_083120_create_movies_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starring` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `year`, `starring`, `director`, `genre`, `poster`, `rating`, `description`, `duration`, `trailer`, `created_at`, `updated_at`) VALUES
(2, 'Joker', '2019', 'Joaquin Phoenix, Robert De Niro, Zazie Beetz', 'Todd Philip', 'Crime, Drama, Thriller', 'joker.jpg', 'R', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', '122 Minutes', 'https://www.youtube.com/embed/zAGVQLHvwOY', '2020-05-10 11:00:00', '2020-05-10 11:00:00'),
(3, 'My Hero Accademia', '2018', 'Daiki Yamashita, Kenta Miyake, Mirai Shida', 'Kenji Nagasaki\r\n', 'Animation, Action, Adventure', 'hero.jpg', 'PG-13', 'All-Might dan Deku menerima undangan untuk mengunjungi sebuah kota buatan yang terapung dan disebut I Island di mana mereka bertemu seorang gadis dan bertempur melawan seorang penjahat yang menyandera para penduduk pulau itu.', '100 Minutes', 'https://www.youtube.com/embed/eU7FlWNWr8o', '2020-05-10 10:00:00', '2020-05-10 10:00:00'),
(6, 'Jexi', '2020', 'Adam Devine, Rose Byrne, Alexandra Shipp, Ron Funches, Charlyne Yi, Michael Pena, Wanda Sykes, Kid Cudi, Justin Hartley', 'Jon Lucas, Scott Moore', 'Comedy', 'jexi.jpg', 'R', 'Phil (Adam Devine) memiliki ketergantungan besar dengan ponselnya. Karena hal ini, ia tidak memiliki teman dan pacar. Saat harus mengganti ponsel pintarnya dengan model terbaru yang canggih dan punya fitur asisten virtual (Jexi), hidupnya kini lebih baik. Namun kecerdasan tinggi Jexi perlahan membuat hidup Phil menjadi mimpi buruk.', '120 Menit', 'https://www.youtube.com/embed/txSOaY-je-o', '2020-05-25 09:22:42', '2020-05-25 09:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `dob` date NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `address` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `email`, `age`, `dob`, `picture`, `address`, `created_at`, `updated_at`) VALUES
(1, 'user@cinema.com', 18, '2020-05-13', 'IMG_20191228_0002.jpg', 'Tangerang', '2020-05-25 14:43:26', '2020-05-25 14:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `screening` varchar(255) NOT NULL,
  `seats` varchar(255) DEFAULT ' ',
  `price` varchar(255) NOT NULL,
  `studio` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `title`, `screening`, `seats`, `price`, `studio`, `created_at`, `updated_at`) VALUES
(1, 'Jexi', '12.00', 'A1,A2A12,A3,A4,A3,A4,A3,A4,A5,A6,A7,A8,A9,A10,A9,A10,A11,A11,B1,B1,B2,B3,B4,C6,C7,B6,B7', '20.000', '2', '2020-05-24 11:56:32', '2020-05-24 11:56:32'),
(3, 'Jexi', '15.00', 'asd,A1,A2', '20000', '1', '2020-05-25 05:51:01', '2020-05-25 05:51:01'),
(4, 'Jexi', '12.00', ' ', '20.000', '3', '2020-05-25 07:53:45', '2020-05-25 07:53:45'),
(5, 'Joker', '12.00', ' ', '20.000', '1', '2020-06-02 08:38:24', '2020-06-02 08:38:24'),
(6, 'Joker', '15.00', ' ', '20.000', '1', '2020-06-02 08:38:34', '2020-06-02 08:38:34'),
(7, 'My Hero Accademia', '13.00', ' ', '20.000', '2', '2020-06-02 08:38:54', '2020-06-02 08:38:54'),
(8, 'Joker', '15.00', ' ', '25000', '2', '2020-06-02 08:39:17', '2020-06-02 08:39:17'),
(9, 'My Hero Accademia', '15.00', ' ', '25000', '2', '2020-06-02 08:39:17', '2020-06-02 08:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@cinema.com', NULL, 1, '$2y$10$cJj3YbxnLuUlmdVIGQmeleeA/Pk9aVRrL8SSH6tV37dSaVbTDbnT.', NULL, '2020-05-08 04:40:27', '2020-05-08 04:40:27'),
(2, 'Mantap', 'user@cinema.com', NULL, 0, '$2y$10$Q8PRllsDHPMSYaYDtg/DNeOsjZhptHKbhEREbhUOlkhACKIxcOhze', NULL, '2020-05-08 04:40:27', '2020-05-08 04:40:27'),
(3, 'rere', 'regina@ikanlele.com', NULL, NULL, '$2y$10$nNUEoKzQVw/wdablOE9wuexmgXLCNRROEi06mWi.LmJquNO0wsa8m', NULL, '2020-05-09 00:38:30', '2020-05-09 00:38:30'),
(4, 'Kevin Andreejan Susanto', 'kevin@cinema.com', NULL, NULL, '$2y$10$D3f7Lgqx9.INP7grRkblb.WS.6kR6HP3I7Xym6HDTuKpa5cty3B.i', NULL, '2020-05-25 05:45:31', '2020-05-25 05:45:31'),
(5, 'Kevin Andreejan Susanto', 'kevin@cine.com', NULL, NULL, '$2y$10$SS.jByOvFGcXDt9wIynosOGrPd/Wvk358D40W9Mlqb/JGSvBNXD.C', NULL, '2020-05-25 05:46:22', '2020-05-25 05:46:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comingsoon`
--
ALTER TABLE `comingsoon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movies_title_unique` (`title`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movies_title_unique` (`title`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
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
-- AUTO_INCREMENT for table `comingsoon`
--
ALTER TABLE `comingsoon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
