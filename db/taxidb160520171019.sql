-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 15 2017 г., 09:19
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `taxidb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `userdb`
--

CREATE TABLE `userdb` (
  `id` int(11) NOT NULL,
  `project` char(250) DEFAULT NULL,
  `nane` char(250) DEFAULT NULL,
  `date` char(250) NOT NULL,
  `time` char(250) NOT NULL,
  `address` char(250) NOT NULL,
  `area` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `userdb`
--

INSERT INTO `userdb` (`id`, `project`, `nane`, `date`, `time`, `address`, `area`) VALUES
(1, 'fireportal', 'Инокентий Алексеевич Иванов', '11.05.2017', '22:20', 'ул. Гагарина 86', 'Красногвардейский'),
(3, 'Flyuia', 'Василий Васильев Васильевич', '10.05.2017', '22:30', 'Кирова 21', 'Кировский'),
(4, 'Fireportal', 'Алексей Алексеевич Алексеев', '18.05.2017', '23:00', 'Рабочая 40', 'Красногвардейский'),
(5, 'firepotal', 'Иван Иванович Иванов', '12.05.2017', '23:00', 'Калинова 77', 'Самарский район, Днепроптеровск'),
(6, 'Fireportal', 'Евгений Евгеньевич Свистунов', '29.05.2017', '22.38', 'ул. Кавалерийская 12', 'Красногвардейский район, Днепр'),
(12, 'fireportal', 'john', '15.05.2017', '18.00', 'Рабочая 10', 'Красногвардейский район, Днепр'),
(13, 'fireportal', 'john', '15.05.2017', '18.00', 'Рабочая 10', 'Красногвардейский район, Днепр'),
(14, 'fireportal', 'john', '15.05.2017', '18.00', 'Рабочая 10', 'Красногвардейский район, Днепр'),
(16, 'fireportal', 'Борис Борисов Борисович', '14.05.2017', '17:20', 'шинник 12', 'Петровпавловка, Днепропетровская обл.'),
(17, 'fireportal', 'Волынець Татьяна Владимировна', '14.05.2017', '17:20', 'Лесорубовка', 'Новокузненск Днепропетровская обл.'),
(18, 'fireportal', 'Кирилл Кириллович Киррилов', '15.05.2017', '10:05', 'шинник 12', 'индустриальный');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `userdb`
--
ALTER TABLE `userdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
