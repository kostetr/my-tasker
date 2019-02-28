-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 28 2019 г., 16:04
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

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
(2, 'Инженер-испытатель I категории'),
(3, 'Инженер-испытатель II категории'),
(4, 'Инженер-испытатель III категории'),
(5, 'Испытатель измерительных систем 5 категории'),
(6, 'Испытатель измерительных систем 4 категории'),
(7, 'Испытатель измерительных систем 3 категории'),
(8, 'Испытатель измерительных систем 2 категории'),
(9, 'Испытатель измерительных систем 1 категории');

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
  `gender_id` int(10) UNSIGNED NOT NULL,
  `birthday` date NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `reset_rating_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `id_doc`, `login`, `password`, `name`, `surname`, `patronymic`, `gender_id`, `birthday`, `post_id`, `group_id`, `reset_rating_date`) VALUES
(1, 28960, 'kostetr', '$2y$10$xr2XQ.RQ6OBdw4vLANtV1OpPUwjRjnjmGDHqLNMB7rW/tChTx6iji', 'Константин', 'Рябушенко', 'Григорьевич', 3, '1988-04-28', 2, 1, NULL);

--
-- Индексы сохранённых таблиц
--

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
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

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
