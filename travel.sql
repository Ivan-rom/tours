-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2022 г., 17:05
-- Версия сервера: 5.6.51
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `travel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tours`
--

CREATE TABLE `tours` (
  `tours_id` int(11) NOT NULL,
  `tours_title` varchar(255) NOT NULL,
  `tours_description` text NOT NULL,
  `tours_image` varchar(255) NOT NULL,
  `tours_price` int(11) NOT NULL,
  `tours_slider` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tours`
--

INSERT INTO `tours` (`tours_id`, `tours_title`, `tours_description`, `tours_image`, `tours_price`, `tours_slider`) VALUES
(17, 'asdasd', 'asdasdfasdfasdf as sadf asdf sdf sdfsad  sa df asd  fs dfa  sdasfsa dfsdfsd a sdfs a sfsdfa  a s d asdfsfasfsd ', 'image-1.jpeg', 333, 1),
(18, 'rqwerqqrw', 'fghjfghjfgjfjghjfgjhfghjfghfghj fg fg hjfg h g gghjghjgjfjfjhgjg fgjhgfjhjfghj ff fghjghjf ghj fghj fghjgjghj ', 'image-2.jpeg', 5436, 1),
(19, 'hglsdkfjgh', 'ahsdk jhfah; ahsdj fhas;hd;fahsd;fh aslhd;l jshd kjfhsdkjhf ksjhd jkajshd kjsh jskjdhh hjksjhk jh hdj ksjhdfsdf skdj hkjshd kjfhskjdfh sdjfkajhsd hjfkshdjfks shdjfksjdfhaksj hjkahjhjfsk h h j sdfhj ', 'image-3.jpeg', 354345, 1),
(21, 'Поездка в Турцию', 'Супер пупер поездка за недорого и на долго вы точно не пожалеете дааааа купите пожалуйста!!!', 'turkish.jpeg', 25000, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tours_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tours`
--
ALTER TABLE `tours`
  MODIFY `tours_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
