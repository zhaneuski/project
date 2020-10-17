-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 08 2020 г., 21:40
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `parnership`
--
CREATE DATABASE IF NOT EXISTS `parnership` DEFAULT CHARACTER SET utf16 COLLATE utf16_bin;
USE `parnership`;

-- --------------------------------------------------------

--
-- Структура таблицы `application`
--

CREATE TABLE `application` (
  `id` int NOT NULL COMMENT '№',
  `caption` varchar(60) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'caption',
  `content` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'content',
  `image` varchar(50) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'image',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'date',
  `users_id` int NOT NULL COMMENT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Дамп данных таблицы `application`
--

INSERT INTO `application` (`id`, `caption`, `content`, `image`, `date`, `users_id`) VALUES
(90, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting', 'lampochka.jpg', '2020-10-01 23:08:46', 49),
(91, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting', 'kran.jpg', '2020-10-01 23:09:04', 50),
(92, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesetting', 'domofon.jpg', '2020-10-01 23:09:25', 47),
(93, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting', 'okno.jpg', '2020-10-01 23:12:50', 46),
(94, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting', 'skameika.jpg', '2020-10-01 23:13:09', 48),
(95, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesetting', 'stena.jpg', '2020-10-01 23:13:40', 52),
(96, 'CAPTION', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally ', 'kran.jpg', '2020-10-01 23:14:29', 54),
(97, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesetting', 'lampochka.jpg', '2020-10-02 02:42:42', 47),
(98, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesetting', 'okno.jpg', '2020-10-02 02:43:01', 47),
(99, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesetting', 'stena.jpg', '2020-10-02 02:43:37', 46),
(100, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesetting', 'kran.jpg', '2020-10-02 02:44:13', 46),
(101, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesetting', 'domofon.jpg', '2020-10-02 02:44:50', 48),
(102, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesetting', 'kran.jpg', '2020-10-02 02:45:10', 48),
(103, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesetting', 'okno.jpg', '2020-10-02 02:45:50', 49),
(104, 'CAPTION', 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing and typesettingLorem Ipsum is simply dummy text of the printing and typesetting', 'domofon.jpg', '2020-10-02 02:46:10', 49),
(105, 'CAPTION 1234466', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ', 'skameika.jpg', '2020-10-02 19:36:33', 49),
(106, 'Заголовок', 'заявка', 'lampochka.jpg', '2020-10-02 19:49:46', 52);

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `id` int NOT NULL COMMENT '№',
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'user type',
  `cod` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'code'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id`, `name`, `cod`) VALUES
(1, 'administrator', 'admin'),
(2, 'chairman', 'chairman'),
(3, 'tenant', 'landlord');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL COMMENT '№',
  `header` varchar(60) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'News Caption',
  `newscontent` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'Content',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `header`, `newscontent`, `date`) VALUES
(31, 'CAPTION 11', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur. Repellat tenetur dolores eaque, voluptatibus amet nam. Omnis ipsum voluptate minima', '2020-09-15 16:52:10'),
(32, 'CAPTION 12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur. Repellat tenetur dolores eaque, voluptatibus amet nam. Omnis ipsum voluptate minima', '2020-09-15 16:52:22'),
(33, 'CAPTION 13', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus ', '2020-09-15 16:52:32'),
(34, 'CAPTION 14', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur. Repellat tenetur dolores eaque, voluptatibus amet nam. Omnis ipsum voluptate minima', '2020-09-15 16:52:59'),
(35, 'CAPTION 15', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur. Repellat tenetur dolores eaque, voluptatibus amet nam. Omnis ipsum voluptate minima', '2020-09-15 16:53:10'),
(36, 'CAPTION 16', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur. Repellat tenetur dolores eaque, voluptatibus amet nam. Omnis ipsum voluptate minima', '2020-09-15 16:53:27'),
(37, 'CAPTION 17', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur. Repellat tenetur dolores eaque, voluptatibus amet nam. Omnis ipsum voluptate minima', '2020-09-15 16:53:41'),
(41, 'CAPTION 88888', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur. Repellat tenetur dolores eaque, voluptatibus amet nam. Omnis ipsum voluptate minima\r\n', '2020-09-22 19:20:04'),
(43, 'CAPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur.\r\n', '2020-09-22 21:07:23'),
(44, 'CAPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur.\r\n', '2020-09-22 21:07:45'),
(45, 'CAPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur.', '2020-10-02 19:30:53'),
(46, 'CAPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto omnis libero voluptate recusandae natus temporibus quisquam, deserunt consectetur.', '2020-10-02 19:31:03');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL COMMENT '№',
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'apartment number',
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'phone number',
  `group_id` int NOT NULL COMMENT 'group',
  `FIO` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'full name\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `group_id`, `FIO`) VALUES
(2, 'admin', 'admin', 1, 'Zhenevski'),
(3, '999', '999', 2, 'Ivanov'),
(46, '1', '123456789', 3, 'Petrov'),
(47, '2', '123456789', 3, 'Sidorenko'),
(48, '3', '123456789', 3, 'Motsnaya'),
(49, '4', '123456789', 3, 'Sidorov'),
(50, '5', '123456789', 3, 'Kazakova'),
(51, '6', '123456789', 3, 'nikiforova'),
(52, '7', '123456789', 3, 'Zhukov'),
(53, '8', '123456789', 3, 'Peterson'),
(54, '9', '123456789', 3, 'Avdeenko'),
(55, '10', '123456789', 3, 'Zabelskaya'),
(56, '11', '123456789', 3, 'Gvozdeva');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Индексы таблицы `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `application`
--
ALTER TABLE `application`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=57;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
