-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 21 2020 г., 21:41
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
  `caption` varchar(60) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'Тема заявки',
  `content` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'Содержание',
  `image` varchar(50) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'Изображение',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата',
  `users_id` int NOT NULL COMMENT 'Пользователь'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Дамп данных таблицы `application`
--

INSERT INTO `application` (`id`, `caption`, `content`, `image`, `date`, `users_id`) VALUES
(3, 'труба', 'не горит', 'фывфв', '2020-08-21 19:30:00', 30),
(4, 'труба', 'горит', 'фывфв', '2020-08-21 19:30:35', 30),
(5, 'окно', 'разбито', '', '2020-08-21 20:09:23', 3),
(6, 'заявка', 'фыввфвфывфвфвфывфвыф', '', '2020-08-21 21:38:59', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `id` int NOT NULL COMMENT '№',
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Имя',
  `cod` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Код'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id`, `name`, `cod`) VALUES
(1, 'Администратор', 'admin'),
(2, 'Председатель', 'chairman'),
(3, 'Жилец', 'landlord');

-- --------------------------------------------------------

--
-- Структура таблицы `phonebook`
--

CREATE TABLE `phonebook` (
  `id` int NOT NULL COMMENT '№',
  `phone` varchar(50) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'Тема новости',
  `adress` varchar(100) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'Содержание',
  `name` varchar(60) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL COMMENT 'Дата'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Дамп данных таблицы `phonebook`
--

INSERT INTO `phonebook` (`id`, `phone`, `adress`, `name`) VALUES
(1, '1234567', 'number', 'Petya'),
(2, '7654321', 'number', 'Nick'),
(3, '22222', 'numb', 'Name'),
(4, '333333', 'ggggg', 'fffff'),
(5, '33333', 'street', 'Mike'),
(8, '1234567', 'adress', 'name'),
(9, 'погода', 'хорошая погода', '10 июня 1989');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL COMMENT '№',
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Номер квартиры',
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Номер телефона',
  `group_id` int NOT NULL COMMENT 'Группа',
  `FIO` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ФИО'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `group_id`, `FIO`) VALUES
(2, '89', '+375298983940', 1, 'Женевский В.И.'),
(3, '2', '+375291234567', 2, 'Иванов И.И.'),
(30, '128', '123', 3, 'Петров П.П.'),
(31, '300', '123', 3, 'asdad');

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
-- Индексы таблицы `phonebook`
--
ALTER TABLE `phonebook`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `phonebook`
--
ALTER TABLE `phonebook`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=32;

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
