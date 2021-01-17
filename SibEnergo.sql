-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 17 2021 г., 13:43
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `SibEnergo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `Currency` varchar(255) NOT NULL,
  `Letter` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `Currency`, `Letter`) VALUES
(61, 'Евро', 'EUR'),
(62, 'Доллары США', 'USD'),
(63, 'Украинские гривны', 'UAH'),
(64, 'Белорусские рубли', 'BYN');

-- --------------------------------------------------------

--
-- Структура таблицы `currencies_name`
--

CREATE TABLE `currencies_name` (
  `id` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Letter` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currencies_name`
--

INSERT INTO `currencies_name` (`id`, `Name`, `Letter`) VALUES
(10, 'Датские кроны', 'DKK'),
(13, 'Индийские рупийи', 'INR'),
(14, 'Казахстанские тенге', 'KZT'),
(15, 'Канадские доллары', 'CAD'),
(18, 'Молдавские леи', 'MDL'),
(19, 'Новые туркменские манаты', 'TMT'),
(20, 'Норвежские кроны', 'NOK'),
(21, 'Польские злотые', 'PLN'),
(22, 'Румынские леи', 'RON'),
(23, 'СДР', 'XDR'),
(24, 'Сингапурские доллары', 'SGD'),
(25, 'Таджикские сомони', 'TJS'),
(26, 'Турецкие лиры', 'TRY'),
(29, 'Фунты стерлингов ', 'GBP'),
(30, 'Шведские кроны', 'SEK'),
(32, 'Южноафриканские рэнды', 'ZAR'),
(33, 'Японские иены', 'JPY'),
(37, 'Узбекские сумы', 'UZS'),
(38, 'Чешские кроны', 'CZK'),
(40, 'Швейцарские франки', 'CHF'),
(46, 'Азербайджанские манаты', 'AZN'),
(47, 'Армянские драмы', 'AMD'),
(49, 'Гонконгские доллары', 'HKD'),
(50, 'Болгарские левы', 'BGN'),
(51, 'Бразильские реалы', 'BRL'),
(52, 'Воны Республики Корея', 'KRW'),
(53, 'Венгерские форинты', 'HUF'),
(54, 'Австралийские доллары', 'AUD'),
(55, 'Китайские юани', 'CNY'),
(56, 'Киргизские сомы', 'KGS');

-- --------------------------------------------------------

--
-- Структура таблицы `Currencies_name_archive`
--

CREATE TABLE `Currencies_name_archive` (
  `id` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Letter` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Currencies_name_archive`
--

INSERT INTO `Currencies_name_archive` (`id`, `Name`, `Letter`) VALUES
(1, 'Австралийские доллары', 'AUD'),
(2, 'Азербайджанские манаты', 'AZN'),
(3, 'Армянские драмы', 'AMD'),
(4, 'Белорусские рубли', 'BYN'),
(5, 'Болгарские левы', 'BGN'),
(6, 'Бразильские реалы', 'BRL'),
(7, 'Венгерские форинты', 'HUF'),
(8, 'Воны Республики Корея', 'KRW'),
(9, 'Гонконгские доллары', 'HKD'),
(10, 'Датские кроны', 'DKK'),
(11, 'Доллары США', 'USD'),
(12, 'Евро', 'EUR'),
(13, 'Индийские рупийи', 'INR'),
(14, 'Казахстанские тенге', 'KZT'),
(15, 'Канадские доллары', 'CAD'),
(16, 'Киргизские сомы', 'KGS'),
(17, 'Китайские юани', 'CNY'),
(18, 'Молдавские леи', 'MDL'),
(19, 'Новые туркменские манаты', 'TMT'),
(20, 'Норвежские кроны', 'NOK'),
(21, 'Польские злотые', 'PLN'),
(22, 'Румынские леи', 'RON'),
(23, 'СДР', 'XDR'),
(24, 'Сингапурские доллары', 'SGD'),
(25, 'Таджикские сомони', 'TJS'),
(26, 'Турецкие лиры', 'TRY'),
(27, 'Узбекские сумы', 'UZS'),
(28, 'Украинские гривны', 'UAH'),
(29, 'Фунты стерлингов ', 'GBP'),
(30, 'Шведские кроны', 'SEK'),
(31, 'Швейцарские франки', 'CHF'),
(32, 'Южноафриканские рэнды', 'ZAR'),
(33, 'Японские иены', 'JPY'),
(34, 'Чешские кроны', 'CZK');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `currencies_name`
--
ALTER TABLE `currencies_name`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Currencies_name_archive`
--
ALTER TABLE `Currencies_name_archive`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT для таблицы `currencies_name`
--
ALTER TABLE `currencies_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `Currencies_name_archive`
--
ALTER TABLE `Currencies_name_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
