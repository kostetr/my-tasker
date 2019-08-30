-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 30 2019 г., 18:18
-- Версия сервера: 5.6.41
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tasklist`
--

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, '81'),
(2, '83'),
(3, '85'),
(4, '87'),
(5, '806'),
(6, '809');

-- --------------------------------------------------------

--
-- Структура таблицы `gender`
--

CREATE TABLE `gender` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(3, 'Мужской'),
(4, 'Женский');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` int(3) NOT NULL,
  `secret_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `value`, `secret_pass`) VALUES
(1, 'root', 100, 'wB9GvtiF2KpDG3D7iyPvUqYFggRUj2LwzfwuEeLvsBt3E9mr3qyrl0UvpaHaqkJ741SuDZt48QieuLqkn4bxSmOjwPxX6WRICOp90NsJJTH5752dySyHebQqwVYbkBUXMfEZ8ESXTDoGOFrvMhY8o17LJLwLqb3INtgiw0tS3Cp7efufCQgkBJrOAuCxqZ1f6soaQR0nl1SxYQGwRPxKuO3ktIaM3gqw7iMd9qTavFUWVnDvGEZiVAIBVamMQbh'),
(2, 'admin', 200, 'grVbIlG4mAb5K35cknNIna9Is32mCVhUBwkCtbScaOULtT5XT4V3NpEqUEY91kPti4k3FCqX8Z5HWzCdUUW1AUcKw04TBt7XRrET9fGgBhZVGgFGwt2IR0SyQjHwoc5QuxxUDlyDFGLTrK8hN0m103C4cvTaIMBJWMuwY9KnsiVWAlHWo8xE9ZLJlspxV8F3VJYKU4TxHI2qPqk21o2Gd8mJudGScRg6LlhXertNu2r2NrJFr0FRuKIHn3vBnMc'),
(3, 'user', 300, 'zo1fFe0MJXilZK4ZRDLybo67kmevoHzYuXPRX7tjxeabwN955rO6h47L2y6HS2SJRMTYB2nJscKVKP0FeH4C8GMpCl83M79jOv6PeNA7D7diquBbwS0c4k4mCaSDq5mSIsHILvs1j313uwk8LqdOdo84dJaODxDJBZRmGMpVgGwZEnehQ6KI8wC08Ne5ulIPV8ZCQirrNNzlLRcf9JowwQINgpk1v2KN7ljuqqrR0kZw4HtVKqk930ZxrgpjqWE');

-- --------------------------------------------------------

--
-- Структура таблицы `inventory_database`
--

CREATE TABLE `inventory_database` (
  `id` int(11) NOT NULL,
  `complex` int(3) NOT NULL,
  `number_id` int(3) NOT NULL,
  `department_id` int(3) NOT NULL,
  `pantry_807` int(255) NOT NULL,
  `type_of_equipment_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(5) DEFAULT NULL,
  `building` varchar(5) DEFAULT NULL,
  `room` varchar(5) DEFAULT NULL,
  `departament_user_id` int(11) DEFAULT NULL,
  `responsible_user` varchar(255) DEFAULT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`) VALUES
(1, 'Ведущий инженер'),
(2, 'Инженер-испытатель I кат.'),
(3, 'Инженер-испытатель II кат.'),
(4, 'Инженер-испытатель III кат.'),
(5, 'Исп. изм. систем 5 кат.'),
(6, 'Исп. изм. систем 4 кат.'),
(7, 'Исп. изм. систем 3 кат.'),
(8, 'Исп. изм. систем 2 кат.'),
(9, 'Исп. изм. систем 1 кат.');

-- --------------------------------------------------------

--
-- Структура таблицы `type_of_equipment`
--

CREATE TABLE `type_of_equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_of_equipment`
--

INSERT INTO `type_of_equipment` (`id`, `name`) VALUES
(1, 'ПК'),
(2, 'Принтер'),
(3, 'МФУ'),
(4, 'Плоттер');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_doc` int(7) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `patronymic` varchar(100) NOT NULL,
  `phone` varchar(18) DEFAULT NULL,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `birthday` date NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `registered` date NOT NULL,
  `reset_rating_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `id_doc`, `login`, `password`, `name`, `surname`, `patronymic`, `phone`, `gender_id`, `birthday`, `post_id`, `group_id`, `registered`, `reset_rating_date`) VALUES
(1, 28960, 'kostetr', '$2y$10$xr2XQ.RQ6OBdw4vLANtV1OpPUwjRjnjmGDHqLNMB7rW/tChTx6iji', 'Константин', 'Рябушенко', 'Григорьевич', '+38(068)448-67-40', 3, '1988-04-28', 2, 1, '2019-02-27', NULL),
(2, 28961, 'kostetr2', '$2y$10$xr2XQ.RQ6OBdw4vLANtV1OpPUwjRjnjmGDHqLNMB7rW/tChTx6iji', 'Константин', 'Рябушенко', 'Григорьевич', '+38(068)448-67-40', 3, '1988-04-28', 2, 2, '2019-02-27', NULL),
(18, 30392, 'kostya', '$2y$10$QSflEYNX4opl.BCmv0AX4unV4oyd/GoyA1..rdPvTKYEFss63y2S2', 'Константин', 'Павлючик', 'Васильевич', '+38(097)234-60-82', 3, '1983-08-18', 3, 3, '2019-03-01', NULL),
(19, 11111, 'QWEQWE', '$2y$10$22rtQsqI2wsfK3tiKE3bU.sgcEXUBMIAikibtxEAnsnKsiz5Ia1Mm', 'QWEQWE', 'QWESQWE', 'QEWQWEQWE', '+38(068)448-67-40', 3, '2222-12-12', 5, 2, '2019-03-06', NULL),
(20, 11111, 'sdfdddd', '$2y$10$CBqVCBQJ2ckG9TNugohuFe/1biUiB5rfxywAYm5R7nQxrQSVNun3S', 'fghfgh', 'sdfsdfs', 'sdfsdf', '+38(111)111-11-11', 3, '2111-11-11', 8, 2, '2019-03-09', NULL),
(21, 11111, 'kos49', '$2y$10$wAyxJMu4RoqmdI0hj.IhDOoXp6euk8eDYGyJx0t7ws4/DYRstzLzy', '494949', '4949494', '4949494', '+38(111)111-11-11', 4, '2222-12-13', 3, 1, '2019-03-23', NULL),
(22, 12312, 'фывфвыфв', '$2y$10$gyGbjYbD7cSvR91aDlziaeAfX1yc259UuYIx8QQ0FuafOaPUaPTle', 'ываываы', 'ываываыва', 'ываывавыа', '+38(111)111-11-11', 3, '2111-12-12', 1, 1, '2019-03-26', NULL),
(23, 22222, 'cbcrrrr', '$2y$10$/RTkEjj/B7jAmBCqeEhaJemJzIuWEvICm7R8EqfyGDZru/gkJevje', '49494949', 'sdsdfsf', '4949494', '+38(949)499-49-49', 3, '2111-12-12', 8, 1, '2019-03-26', NULL),
(24, 12322, 'kostetrkkkk', '$2y$10$XbozyfX1/KTbyeD1Irrvpe.sEmHZJpJzvumpYR0imBU463frR0q1C', 'dfsdfsdf', 'sadfsfddf', 'dfgdfgdfg', '+38(222)222-22-22', 3, '2111-12-11', 1, 1, '2019-03-26', NULL),
(25, 28962, 'kostetr23', '$2y$10$luzYFN10v4qHB5dTKCmTBuunzUqrd1/v/ksEnVyCAt1Wo.nzISi9W', 'Константин', 'Рябушенко', 'Григорьевич', '+38(068)448-67-40', 3, '1988-04-28', 2, 1, '2019-03-27', NULL),
(28, 11211, '2kostetr', '$2y$10$8CcxKCdwaFcvZE2CRO8gTO87eOlAEfqTtLWnmGM.Gmt3pOKjLGMQu', 'adfssddfds', 'sdfsdfsdfs', 'sdfgsdfgsf', '+38(112)112-31-23', 3, '2111-12-12', 1, 1, '2019-03-27', NULL),
(29, 49149, 'asdasdasd', '$2y$10$a4RuJ8uXeOGwa2ABJDSLvubPTEPZ/APWXTuGcQ3xhEssRH01gK9W.', 'qweqwe', 'qweqwe', 'qweqwe', '+38(111)111-11-11', 3, '2111-12-11', 1, 1, '2019-03-27', NULL),
(30, 33225, 'star2510', '$2y$10$80AtdIcJLPjyQtwuAsKTlO4xIUN40g2kgYOb4HfMC9sGRXvmhD8GO', 'Алена', 'Стародубова', 'Николаевна', '+38(097)079-88-69', 4, '1985-10-25', 4, 1, '2019-03-27', NULL),
(31, 28494, 'kostetr3', '$2y$10$XCrIvJKM3nI5gKOxkP7P3OcED4dwB75x4AC93znNQt5drfTID.vg.', 'dfjgdfgh', 'fdgndfgh', ';ldfgk;ldfkg', '+38(068)448-67-40', 3, '2222-11-22', 2, 3, '2019-05-19', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `inventory_database`
--
ALTER TABLE `inventory_database`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_of_equipment_id` (`type_of_equipment_id`),
  ADD KEY `departament_user_id` (`departament_user_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Индексы таблицы `type_of_equipment`
--
ALTER TABLE `type_of_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `gender_id` (`gender_id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `inventory_database`
--
ALTER TABLE `inventory_database`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `type_of_equipment`
--
ALTER TABLE `type_of_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `inventory_database`
--
ALTER TABLE `inventory_database`
  ADD CONSTRAINT `inventory_database_ibfk_1` FOREIGN KEY (`type_of_equipment_id`) REFERENCES `type_of_equipment` (`id`),
  ADD CONSTRAINT `inventory_database_ibfk_2` FOREIGN KEY (`departament_user_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `inventory_database_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
