-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 14 2026 г., 20:40
-- Версия сервера: 5.7.39-log
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eda`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blud`
--

CREATE TABLE `blud` (
  `id_blud` int(11) NOT NULL,
  `id_restoran` int(11) NOT NULL,
  `name_blud` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blud`
--

INSERT INTO `blud` (`id_blud`, `id_restoran`, `name_blud`) VALUES
(1, 3, 'уха'),
(2, 2, 'пицца'),
(3, 3, 'паста с креветками'),
(4, 4, 'хачпури');

-- --------------------------------------------------------

--
-- Структура таблицы `restoran`
--

CREATE TABLE `restoran` (
  `id_restoran` int(11) NOT NULL,
  `name_restoran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `restoran`
--

INSERT INTO `restoran` (`id_restoran`, `name_restoran`) VALUES
(1, 'french'),
(2, 'горыныч'),
(3, 'казачий'),
(4, 'белый рояль');

-- --------------------------------------------------------

--
-- Структура таблицы `social_logins`
--

CREATE TABLE `social_logins` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `provider` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_user_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `fio` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `fio`, `login`, `password`, `phone`) VALUES
(1, 'Иванов Антон Павлович', 'admin', 'admin22', '+7(988)-876-22-55'),
(2, 'Коршунов Алексей Викторович', 'korsun', '123kor', '+7(988)-876-22-00'),
(3, 'wolf', 'wolf', '222wolf', '+7(988)-567-22-45'),
(4, 'wolf', 'wolf', '222wolf', '+7(988)-567-22-45'),
(5, 'Лукьянов Роман Петрович', 'luk', 'luk222', '+7(988)-866-33-55'),
(6, 'Лукьянов Роман Петрович', 'luk', 'luk222', '+7(988)-866-33-55');

-- --------------------------------------------------------

--
-- Структура таблицы `zacaz`
--

CREATE TABLE `zacaz` (
  `id_zacaz` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_restoran` int(11) NOT NULL,
  `time` time(6) NOT NULL,
  `adres_dostavki` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oplata` varchar(23) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zacaz`
--

INSERT INTO `zacaz` (`id_zacaz`, `id_user`, `id_restoran`, `time`, `adres_dostavki`, `oplata`) VALUES
(1, 1, 1, '03:45:00.000000', '21 линия', ''),
(2, 5, 2, '13:57:00.000000', '10 линия 6', 'наличные'),
(3, 5, 2, '02:44:00.000000', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blud`
--
ALTER TABLE `blud`
  ADD PRIMARY KEY (`id_blud`),
  ADD KEY `id_restoran` (`id_restoran`);

--
-- Индексы таблицы `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id_restoran`);

--
-- Индексы таблицы `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_provider_user` (`provider`,`provider_user_id`),
  ADD KEY `idx_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `zacaz`
--
ALTER TABLE `zacaz`
  ADD PRIMARY KEY (`id_zacaz`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_restoran` (`id_restoran`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blud`
--
ALTER TABLE `blud`
  MODIFY `id_blud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id_restoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `zacaz`
--
ALTER TABLE `zacaz`
  MODIFY `id_zacaz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `blud`
--
ALTER TABLE `blud`
  ADD CONSTRAINT `blud_ibfk_1` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `zacaz`
--
ALTER TABLE `zacaz`
  ADD CONSTRAINT `zacaz_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zacaz_ibfk_2` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
