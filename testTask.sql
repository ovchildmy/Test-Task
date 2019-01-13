-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Янв 13 2019 г., 17:37
-- Версия сервера: 5.5.50
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testTask`
--

-- --------------------------------------------------------

--
-- Структура таблицы `db_users`
--

CREATE TABLE IF NOT EXISTS `db_users` (
  `id` int(4) NOT NULL,
  `name` varchar(15) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `interests` varchar(1000) NOT NULL,
  `placebirthday` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `db_users`
--

INSERT INTO `db_users` (`id`, `name`, `surname`, `birthday`, `interests`, `placebirthday`, `password`, `profession`, `mail`) VALUES
(3, 'тест', 'Тест тест 123', '2011-12-11', 'Ru Mo river- ', 'as asdf asdf 123 ', 'pas', 'Програмёрр*', 'mail@m.r'),
(4, '', '', '0000-00-00', '', '', '', '', 'm@m.a'),
(5, '', '', '0000-00-00', '', '', '', '', 'ASF@asdf.sdfa'),
(6, 'фыва', '', '0000-00-00', '', '', '', '', 'ASF@asdf.sdfa'),
(7, 'фываasd', '', '0000-00-00', '', '', '', '', 'ASF@asdf.sdfa'),
(8, 'asg', '', '0000-00-00', '', '', 'asdf', '', 'ASF@asdf.sdfa'),
(9, 'фываf', '', '0000-00-00', '', '', 'asdf', '', 'ASF@asdf.sdfa'),
(10, 'фываff', '', '0000-00-00', '', '', 'asdf', '', 'ASF@asdf.sdfa');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
