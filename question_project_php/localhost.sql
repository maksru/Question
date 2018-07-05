-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 04 2018 г., 16:24
-- Версия сервера: 5.5.52-log
-- Версия PHP: 7.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `question`
--
CREATE DATABASE IF NOT EXISTS `question` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `question`;

-- --------------------------------------------------------

--
-- Структура таблицы `view`
--

CREATE TABLE `view` (
  `id` int(11) UNSIGNED NOT NULL,
  `check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adtime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `view`
--

INSERT INTO `view` (`id`, `check`, `email`, `message`, `adtime`) VALUES
(122, '1', 'vobucompany@bigmir.net', 'ывапывап', '2018-07-04 15:01'),
(123, '2', 'orinchak.@elox.com.ua', 'ыпваывап', '2018-07-04 15:01'),
(124, '1', 'orinchak.@elox.com.ua', 'ыфвафыва', '2018-07-04 15:15'),
(125, '2', 'vobucompany@bigmir.net', 'dfgsdfgsd', '2018-07-04 15:37'),
(126, '3', 'orinchak.@elox.com.ua', 'sdfgsdfg', '2018-07-04 15:37'),
(127, '3', 'dasasg@sdgasg.asg', 'asdfasdf', '2018-07-04 16:13');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
