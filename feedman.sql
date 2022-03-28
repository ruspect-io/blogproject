-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 28 2022 г., 21:22
-- Версия сервера: 10.5.11-MariaDB-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `feedman`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `text` text NOT NULL,
  `pobdate` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `text`, `pobdate`, `user_id`) VALUES
(1, 'Donauts', 'dwr werr we wer werew werwe r%%%%%%', '2022-03-27 20:10:06', 14),
(2, 'Donauts', 'dwr werr we wer werew werwe r%%%%%%', '2022-03-27 20:10:10', 15),
(3, 'Donautsssdsd', 'dwr werr we wer wesdsddsrew werwe r%%%%%%', '2022-03-27 20:10:10', 14),
(4, 'ewrwe', 'ewewew ewe we we', '2022-03-27 20:13:37', 15),
(5, 'ewrwe', 'ewewew ewe we we', '2022-03-27 20:13:37', 15),
(6, NULL, 'ytufhuuftyuyurtf', '2022-03-28 14:00:18', NULL),
(7, NULL, 'fdgsfdgsfgsfddg', '2022-03-28 14:00:22', NULL),
(8, NULL, 'fdgsfdgsfgsfddg', '2022-03-28 14:01:09', NULL),
(9, NULL, 'fdgsfdgsfgsfddg', '2022-03-28 14:01:16', NULL),
(10, NULL, '', '2022-03-28 15:10:12', NULL),
(22, NULL, 'hgjfhgjfghj', '2022-03-28 15:27:06', NULL),
(23, NULL, 'dfadsfasdfadsfadsfadsf', '2022-03-28 15:27:12', 14),
(24, 'makaka', 'dddddddddddddddddddddddddddddddddddddddddddddddddd', '2022-03-28 15:27:21', 17),
(25, NULL, 'aaaaaaaaaaaaaaaaaa', '2022-03-28 15:28:21', NULL),
(26, NULL, 'fggggggggg', '2022-03-28 15:38:39', NULL),
(27, NULL, 'aaaaaaaaaaaaaa', '2022-03-28 15:38:51', NULL),
(28, NULL, 'aaaaaaaaaaaaaa', '2022-03-28 15:41:00', NULL),
(29, NULL, 'ddddddddd', '2022-03-28 15:41:12', NULL),
(30, NULL, 'ddddddddddddddddddddddddddddddddddd', '2022-03-28 15:46:50', NULL),
(31, NULL, 'ddddddddddddddddddddddddddddddddddd', '2022-03-28 15:49:12', NULL),
(32, NULL, 'sssssssssss', '2022-03-28 15:49:18', NULL),
(33, NULL, 'sssssssssss', '2022-03-28 15:50:36', NULL),
(34, NULL, 'ffffffffffffffffffff', '2022-03-28 16:42:29', 14),
(35, NULL, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', '2022-03-28 16:42:36', 14),
(36, NULL, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', '2022-03-28 16:44:21', 14),
(37, NULL, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', '2022-03-28 17:07:49', 14),
(38, NULL, 'gggggghhhhhgg', '2022-03-28 18:27:25', 14),
(39, NULL, 'gggggghhhhhgg', '2022-03-28 18:27:57', 14),
(40, NULL, 'gggggghhhhhgg', '2022-03-28 18:27:57', 14),
(41, 'ruspect', 'mama yokerro', '2022-03-28 18:53:57', 14),
(42, 'ruspect', 'mama yokerro', '2022-03-28 18:56:03', 14),
(43, 'ruspect', 'ddddddddddddd', '2022-03-28 19:17:04', 14),
(44, 'ruspect', 'gggggggggggg', '2022-03-28 19:17:09', 14),
(45, 'ruspect', 'mmmmmmmmm', '2022-03-28 19:17:16', 14),
(46, 'ruspect', 'oooooooooooooooooooo', '2022-03-28 19:25:39', 14),
(47, 'ruspect', '000000000 000000000000000000000000000000000000000 000000000000000000000000000000000 00000000000000000000000000000000 000000000000000000000000000000000000 000000000000000000000000000', '2022-03-28 19:31:29', 14),
(48, 'ruspect', '000000000 000000000000000000000000000000000000000 000000000000000000000000000000000 00000000000000000000000000000000 000000000000000000000000000000000000 000000000000000000000000000', '2022-03-28 19:32:24', 14),
(49, 'ruspect', '000000000 000000000000000000000000000000000000000 000000000000000000000000000000000 00000000000000000000000000000000 000000000000000000000000000000000000 000000000000000000000000000', '2022-03-28 19:34:00', 14),
(50, 'ruspect', '000000000 000000000000000000000000000000000000000 000000000000000000000000000000000 00000000000000000000000000000000 000000000000000000000000000000000000 000000000000000000000000000', '2022-03-28 19:34:23', 14),
(51, 'ruspect', 'м', '2022-03-28 19:34:37', 14),
(52, 'ruspect', 'м', '2022-03-28 19:35:12', 14),
(53, 'ruspect', '000000000 000000000000000000000000000000000000000 000000000000000000000000000000000 00000000000000000000000000000000 000000000000000000000000000000000000 000000000000000000000000000', '2022-03-28 19:36:25', 14),
(54, 'ruspect', '000000000 000000000000000000000000000000000000000 000000000000000000000000000000000 00000000000000000000000000000000 000000000000000000000000000000000000 000000000000000000000000000', '2022-03-28 19:36:43', 14),
(55, 'ruspect', 'павпра ап вап авп авва ', '2022-03-28 19:36:59', 14),
(56, 'ruspect', 'авпа вап вап авап ава', '2022-03-28 19:37:20', 14),
(57, 'ruspect', 'паввап вка вка ва еавп а кп ', '2022-03-28 19:37:33', 14),
(58, 'ruspect', 'авпап вап вапа авп вап ', '2022-03-28 19:41:55', 14),
(59, 'ruspect', 'вап вап аввапав пвап вап авп ', '2022-03-28 19:42:03', 14),
(60, 'ruspect', 'вап пвапав апрке ннгн шнкеныекк уе ', '2022-03-28 19:43:01', 14),
(61, 'ruspect', 'вкенг венгнегв негшвен в вне', '2022-03-28 19:46:32', 14),
(64, 'ruspect', 'sssssssssssssss', '2022-03-28 19:57:55', 14),
(65, 'ruspect', 'sssssssssssssss', '2022-03-28 19:58:36', 14),
(66, 'ruspect', 'dfsg sdf gsfdg sfd gsfd', '2022-03-28 19:58:42', 14),
(67, NULL, ' gfdsg fg fd gggggg', '2022-03-28 19:58:55', 14),
(68, NULL, 'gggggggggggg', '2022-03-28 19:59:04', 14),
(69, 'ruspect', 'gggggggggggg', '2022-03-28 20:01:08', 14),
(70, 'ruspect', 'rtyyrttyryrt', '2022-03-28 20:01:13', 14),
(71, 'ruspect', 'gggggggg', '2022-03-28 20:27:21', 14),
(72, 'ruspect', 'gggggggg', '2022-03-28 20:27:39', 14),
(73, 'ruspect', 'gggggggg', '2022-03-28 20:34:46', 14),
(74, 'ruspect', 'fffffff', '2022-03-28 20:34:51', 14),
(75, 'ruspect', 'fffffff', '2022-03-28 20:36:35', 14),
(76, 'ruspect', 'fggffghgf', '2022-03-28 20:46:10', 14),
(77, 'ruspect', 'eeeeeeeee', '2022-03-28 20:46:17', 14),
(78, 'ruspect', 'eeeeeeeee', '2022-03-28 20:47:18', 14),
(79, 'ruspect', 'eeeeeeeee', '2022-03-28 20:48:03', 14),
(80, 'ruspect', 'eeeeeeeee', '2022-03-28 20:48:44', 14),
(81, 'ruspect', 'eeeeeeeee', '2022-03-28 20:49:32', 14),
(82, 'ruspect', 'eeeeeeeee', '2022-03-28 20:49:43', 14),
(83, 'ruspect', 'eeeeeeeee', '2022-03-28 20:50:33', 14),
(84, 'ruspect', 'eeeeeeeee', '2022-03-28 20:50:55', 14),
(85, 'ruspect', 'eeeeeeeee', '2022-03-28 20:55:47', 14),
(86, 'ruspect', 'eeeeeeeee', '2022-03-28 20:56:18', 14),
(87, 'ruspect', 'eeeeeeeee', '2022-03-28 20:58:03', 14),
(88, 'ruspect', 'eeeeeeeee', '2022-03-28 21:01:08', 14),
(89, 'ruspect', 'eeeeeeeee', '2022-03-28 21:02:00', 14),
(90, 'ruspect', 'eeeeeeeee', '2022-03-28 21:02:29', 14),
(91, 'ruspect', 'eeeeeeeee', '2022-03-28 21:02:44', 14),
(92, 'ruspect', 'eeeeeeeee', '2022-03-28 21:03:34', 14),
(93, 'ruspect', 'eeeeeeeee', '2022-03-28 21:04:49', 14),
(94, 'ruspect', 'eeeeeeeee', '2022-03-28 21:05:04', 14),
(95, 'ruspect', 'eeeeeeeee', '2022-03-28 21:05:18', 14),
(96, 'ruspect', 'eeeeeeeee', '2022-03-28 21:05:43', 14),
(97, 'ruspect', 'eeeeeeeee', '2022-03-28 21:06:34', 14),
(98, 'ruspect', 'eeeeeeeee', '2022-03-28 21:08:04', 14),
(99, 'ruspect', 'eeeeeeeee', '2022-03-28 21:08:04', 14);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `fullname`, `telephone`) VALUES
(14, 'ruspect', 'ruspect@gmail.com', '$2y$10$hwt25ipD00wBECxIdrdat.x2EuENm6B.1yBdsXunY4pSzrss5EIP.', 'RUSLAN EGOROV', 504632213),
(15, 'asd', 'ruspect@gmail.comaa', '$2y$10$taYpFgJm2d0IRgVDtrgNKuOCnDXu79nPWvlqI7SrFL3O3YYWR1iBi', 'RUSLAN EGOROV', 504632212),
(16, 'starscrapper', 'ruspect@gmail.com2', '$2y$10$Q/Ax/gHcFQptuzqgRkwk0OFNaSUqT9tavH01QbmpKqxWQrwMg.X2C', 'RUSLAN EGOROV', 504632),
(17, 'makaka', 'makaka@makaka.com', '$2y$10$YE6aShnpxCEKNXD62/kQ0OGKtGlUQGweAMt4bgYpEwl9DzdFL3kHC', 'makak makakkovi4', 988765),
(18, 'qwe', 'assad@fgffdg.df', '$2y$10$FIc6M90zz0ph5QHWve/yOehgc9ycQ3wojBHOI.HA30flNhErD0R02', 'dfgdf fdgfgfd ', 345435),
(19, 'fdfd', 'fdfd@vbvb.fgh', '$2y$10$vVG8d2QiVy3Cc1stIKKmtO2aqY.91XimZKjiynU544XhDiu9huEuK', 'dfdf dfdf', 3454534);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
