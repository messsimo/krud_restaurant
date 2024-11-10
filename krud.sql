-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Ноя 10 2024 г., 05:10
-- Версия сервера: 5.7.39
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `krud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `ora` time NOT NULL,
  `persons` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `telefon`, `data`, `ora`, `persons`, `created_at`) VALUES
(1, 'Daniel', 'danikmihai23@mail.ru', 60029911, '2024-09-20 00:00:00', '13:00:00', 2, '2024-09-18 16:02:14');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Antreuri', 'antreuri_cat.png', NULL, NULL),
(2, 'Salate', 'salate_cat.png', NULL, NULL),
(3, 'Ciorbe și Supe', 'supe_cat.png', NULL, NULL),
(4, 'Paste și Risotto', 'paste_cat.png', NULL, NULL),
(5, 'Carne de Pasăre', 'carnePas_cat.png', NULL, NULL),
(6, 'Carne de Porc', 'carnePorc_cat.png', NULL, NULL),
(8, 'Burgeri', 'burgeri_cat.png', NULL, NULL),
(9, 'Pește', 'peste_cat.png', NULL, NULL),
(10, 'Garnituri', 'garnituri_cat.png', NULL, NULL),
(11, 'Sosuri', 'sosuri_cat.png', NULL, NULL),
(12, 'Deserturi', 'deserturi_cat.png', NULL, NULL),
(13, 'Meniu de Post', 'menuPost_cat.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `telefon`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@mail.ru', 123456789, 'test test test test', '2024-09-22 17:14:52', '2024-09-22 17:14:52'),
(2, 'test', 'test@mail.ru', 123456789, 'test test test test', '2024-09-22 17:15:09', '2024-09-22 17:15:09');

-- --------------------------------------------------------

--
-- Структура таблицы `dishes`
--

CREATE TABLE `dishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nutritional_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `category`, `price`, `photo`, `description`, `nutritional_info`, `created_at`, `updated_at`) VALUES
(1, 'Cremă de feta cu sfeclă roșie', 'Antreuri', '39 lei', 'antreuri_prod1.png', 'Brânză Feta, sfeclă roșie, ulei măsline, semințe de dovleac, baghetă și lipie /150g / 40g / 40g', 'Informații nutriționale: Energie (kj/kcal) :494.83/2070.36, Grasimi (g) :23.91 din care: Acizi grasi saturati (g): 15.05, Glucide (g) :48.85 din care: Zaharuri 7.13g, Proteine (g): 22.54, Sare (g): 5.03', NULL, NULL),
(2, 'Humus cu morcov', 'Antreuri', '33 lei', 'antreuri_prod2.png', 'Hummus cu morcov este o pastă cremoasă din năut, cu adaos de morcov ras sau copt, care îi oferă un gust ușor dulceag și o culoare vibrantă.', NULL, NULL, NULL),
(3, 'Cremă de ardei copți', 'Antreuri', '28 lei', 'antreuri_prod3.png', 'Ardei copți la foc viu, miez de nucă, usturoi, pesmet, fulgi de chilli, ulei de măsline, baghetă și lipie 170g / 40g / 40g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2742.8 / 654.9, Grăsimi (g): 35.7 din care: Acizi grași saturați (g) 4.3, Glucide (g): 70.6 din care: Zaharuri (g): 8.3, Proteine (g): 14.5, Sare (g): 3.3', NULL, NULL),
(4, 'Guacamole', 'Antreuri', '35 lei', 'antreuri_prod4.png', 'Avocado, ceapă roșie, usturoi, zeamă de lămâie și lime, roșii cherry confiate, semințe de chia, baghetă și lipie 170g / 40g / 40g', NULL, NULL, NULL),
(5, 'Humus', 'Antreuri', '30 lei', 'antreuri_prod5.png', 'Năut, tahini (pastă de susan), usturoi, zeamă de lămâie, paprika, sumac, roșii cherry, muguri de pin, baghetă și lipie 180g / 40g / 40g', 'Valoare Energetică (kJ/kcal): 2276.8 / 543.4, Grăsimi (g): 22.5 din care: Acizi grași saturați (g) 3.3, Glucide (g): 69 din care: Zaharuri\r\n(g): 2.5, Proteine (g): 20.4, Sare (g): 3.4', NULL, NULL),
(6, 'Patế home made', 'Antreuri', '32 lei', 'antreuri_prod6.png', 'Ficaței de pui, unt aromatizant cu cimbru, anșoa, ceapă caramelizată, roșii cherry, caju, baghetă și lipie  170g / 40g / 40g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2875.6 / 686.9, Grăsimi (g): 34.4 din care: Acizi grași saturați (g) 13.2, Glucide (g): 51.8 din care: Zaharuri (g): 7.7, Proteine (g): 40.7, Sare (g): 12.4', NULL, NULL),
(7, 'Salată de vinete', 'Antreuri', '28 lei', 'antreuri_prod7.png', 'Vinete coapte la foc viu, ulei de floarea soarelui, ceapă verde, roșii cherry, baghetă și lipie 170g / 40g / 40g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 1342.1 / 319.7, Grăsimi (g): 11.2 din care: Acizi grași saturați (g) 1.1, Glucide (g): 50.6 din care: Zaharuri (g): 7.6, Proteine (g): 7.2, Sare (g): 3.3', NULL, NULL),
(8, 'Salată cu vinete la grătar și feta', 'Salate', '40 lei', 'salate_prod1.png', 'Vinete la grătar, brânză Feta, măsline Kalamata, roșii cherry, pătrunjel / 350g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 1730.79/ 413.67, Grasimi (g) : 29.38 din care: Acizi grasi saturati (g): 15.47, Glucide (g): 20.01 din care: Zaharuri (g): 6.65, Proteine (g): 19.49, Sare (g): 8.15', NULL, NULL),
(9, 'Zuchinni la cuptor cu feta', 'Salate', '40 lei', 'salate_prod2.png', 'Zucchini, brânză Feta, sos de roșii, ulei de măsline, muguri de pin / 350g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 1249.97/ 298.75, Grasimi (g) : 22.16 din care: Acizi grasi saturati (g): 12.38, Glucide (g): 10.11 din care: Zaharuri (g): 7.02, Proteine (g): 17.11, Sare (g): 2.79', NULL, NULL),
(10, 'Salată Caesar', 'Salate', '46 lei', 'salate_prod3.png', 'Salată verde din grădină, rucola, dressing Caesar, pui de fermă, roșii cherry, bacon crocant, parmezan și crutoane aromate 350g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 3510.5 / 843.8, Grăsimi (g): 54.5 din care: Acizi grași saturați (g) 11.8, Glucide (g): 35.6 din care: Zaharuri (g): 12.6, Proteine (g): 53.4, Sare (g): 4.3', NULL, NULL),
(11, 'Salată Cobb', 'Salate', '49 lei', 'salate_prod4.png', 'Salată verde din grădină, rucola, dressing Caesar, avocado, roșii cherry, ouă de prepeliță, telemea de vacă, pui de fermă și ceapă verde 400g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 3212.5 / 773.9, Grăsimi (g): 62.6 din care: Acizi grași saturați (g) 14.5, Glucide (g): 13.7 din care: Zaharuri (g): 4.8, Proteine (g): 40, Sare (g): 4.5', NULL, NULL),
(12, 'Salată cu tofu dulce-acrișor', 'Salate', '41 lei', 'salate_prod5.png', 'Tofu prăjit, baby spanac, quinoa, măr verde, alune de pădure prăjite, apio, roșii cherry 400g', NULL, NULL, NULL),
(13, 'Salată de fasole', 'Salate', '32 lei', 'salate_prod6.png', 'Fasole roșie, ceapă roșie, salată verde, rucola, ardei kapia, alune de pădure zdrobite, oțet balsamic, ulei de floarea soarelui presat la rece, oțet 350g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 1070 / 255.3, Grăsimi (g): 9.3 din care: Acizi grași saturați (g) 1.6, Glucide (g): 35.6 din care: Zaharuri (g): 8.5, Proteine (g): 11.7, Sare (g): 1.4', NULL, NULL),
(14, 'Salată Krud', 'Salate', '69 lei', 'salate_prod7.png', 'Baby spanac, ardei kapia, halloumi, mușchi de vită maturat, boabe de năut, ceapă roșie, mix alune, 400g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2619.6 / 628.9, Grăsimi (g): 40 din care: Acizi grași saturați (g) 18.5, Glucide (g): 24.6 din care: Zaharuri (g): 9.1, Proteine (g): 46.1, Sare (g): 4.4', NULL, NULL),
(15, 'Vânăta Krud', 'Salate', '34 lei', 'salate_prod8.png', 'Jumătate de vânătă de grădină făcută la cuptor, asezonată cu sos de roșii cherry, sos blue cheese și sos chimichurri, parmezan 300g', NULL, NULL, NULL),
(16, 'Supă cremă de ciuperci', 'Ciorbe și Supe', '33 lei', 'supe_prod1.png', NULL, NULL, NULL, NULL),
(17, 'Supă cremă de roșii cu cheddar toast', 'Ciorbe și Supe', '30 lei', 'supe_prod2.png', NULL, NULL, NULL, NULL),
(18, 'Ciorbă de văcuță', 'Ciorbe și Supe', '29 lei', 'supe_prod3.png', 'Supă de văcuță, legume din grădină, borș acru și pâine de casă 400g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 607.9 / 144.9, Grăsimi (g): 3.9 din care: Acizi grași saturați (g) 0.2, Glucide (g): 12.4 din care: Zaharuri (g): 4.8, Proteine (g): 13.5, Sare (g): 3.6', NULL, NULL),
(19, 'Ciorbă Rădăuțeană', 'Ciorbe și Supe', '28 lei', 'supe_prod4.png', 'Supă de pui, smântână, ouă  și legume, usturoi, oțet și pâine de casă 400g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 3502.9 / 844.4, Grăsimi (g): 67.1 din care: Acizi grași saturați (g) 30.2, Glucide (g): 22 din care: Zaharuri (g): 10.6, Proteine (g): 39.4, Sare (g): 8.8', NULL, NULL),
(20, 'Supă cremă de legume de sezon', 'Ciorbe și Supe', '25 lei', 'supe_prod5.png', 'Supă cremă din legume, ierburi aromatice și crutoane din pâine de casă 400g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 805.6 / 193.8, Grăsimi (g): 12.6 din care: Acizi grași saturați (g) 8, Glucide (g): 18.8 din care: Zaharuri (g): 7.9, Proteine (g): 3.1, Sare (g): 0.4', NULL, NULL),
(21, 'Zamă Moldovenească', 'Ciorbe și Supe', '26 lei', 'supe_prod6.png', 'Supă de pui legume, tăiței proaspeți făcuți în bucătăria Krud, borș acru de casă și pâine de casă 400g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 3029.9 / 727, Grăsimi (g): 48 din care: Acizi grași saturați (g) 8.9, Glucide (g): 23.2 din care: Zaharuri(g): 11.8, Proteine (g): 50.6, Sare (g): 2.4', NULL, NULL),
(22, 'Gnochi cu roșii cherry și pesto', 'Paste și Risotto', '40 lei', 'pasta_prod1.png', 'Gnocchi, sos pesto home-made, rosii cherry, parmezan / 335g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2789.5 / 668.3, Grăsimi (g): 38.9 din care: Acizi grași saturați (g) 10.3, Glucide (g): 62.9 din care: Zaharuri (g): 3, Proteine (g): 19.4, Sare (g): 3', NULL, NULL),
(23, 'Penne Pomodoro', 'Paste și Risotto', '37 lei', 'pasta_prod2.png', 'Penne, sos de roșii, parmezan, unt, busuioc proaspăt 370g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 3184.6 / 756.6, Grăsimi (g): 26.8 din care: Acizi grași saturați (g) 14, Glucide (g): 96.2 din care: Zaharuri (g): 7.6, Proteine (g): 34.3, Sare (g): 4', NULL, NULL),
(24, 'Risotto cu pui și rucola', 'Paste și Risotto', '49 lei', 'pasta_prod3.png', 'Orez Arborio, piept de pui, mascarpone, parmezan, rucola, zeamă de lămâie, ulei de măsline  400g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 4325 / 1039.7, Grăsimi (g): 70.1 din care: Acizi grași saturați (g) 34.1, Glucide (g): 46.7 din care: Zaharuri (g): 2, Proteine (g): 54.8, Sare (g): 3.6', NULL, NULL),
(25, 'Spaghetti Carbonara', 'Paste și Risotto', '46 lei', 'pasta_prod4.png', 'Spaghetti home-made, gălbenuș de ou, pancetta, parmezan 350 g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 4129.5 / 984.2, Grăsimi (g): 46.4 din care: Acizi grași saturați (g) 21.5, Glucide (g): 88.6 din care: Zaharuri (g): 0.8, Proteine (g): 55.6, Sare (g): 3.6', NULL, NULL),
(26, 'Tagliatelle Alla Puttanesca', 'Paste și Risotto', '39 lei', 'pasta_prod5.png', 'Tagliatelle home-made, roșii cherry, măsline Kalamata, usturoi, busuioc, vin alb, ulei, parmeza 320g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2709.7 / 654.4, Grăsimi (g): 55.2 din care: Acizi grași saturați (g) 21.4, Glucide (g): 18.4 din care: Zaharuri (g): 4.2, Proteine (g): 17.6, Sare (g): 7.9', NULL, NULL),
(27, 'Tagliatelle de casă cu ragu de vită', 'Paste și Risotto', '45 lei', 'pasta_prod6.png', 'Tagliatelle home-made, ragu de vită Black Angus, unt, parmezan 400g\r\n\r\n', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 4654.5 / 1112, Grăsimi (g): 56.6 din care: Acizi grași saturați (g) 28.1, Glucide (g): 96.1 din care: Zaharuri (g): 6.1, Proteine (g): 52.5, Sare (g): 2', NULL, NULL),
(44, 'Piept de curcan cu gorgonzola', 'Carne de Pasăre', '53 lei', 'carPas_prod1.png', 'Piept de curcan, sos alb cu gorgonzola, roșii deshidratate / 380g\r\n\r\n', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 4380.31/ 1046.92, Grasimi (g) : 80.08 din care: Acizi grasi saturati (g): 53.04, Glucide (g): 25.79 din care: Zaharuri (g): 9.3, Proteine (g): 69.61, Sare (g): 5.19', NULL, NULL),
(45, 'Piept de pui cu hribi', 'Carne de Pasăre', '47 lei', 'carPas_prod2.png', 'Piept de pui, hribi, ciuperci, sos de smântână, mămăligă prăjită / 200g / 150g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 3308.2 / 788.4, Grăsimi (g): 38.3 din care: Acizi grași saturați (g) 22.8, Glucide (g): 47.8 din care: Zaharuri (g): 2.8, Proteine (g): 57.7, Sare (g): 2.8', NULL, NULL),
(46, 'Pui toscan', 'Carne de Pasăre', '51 lei', 'carPas_prod3.png', NULL, NULL, NULL, NULL),
(47, 'Scaloppine all Limone', 'Carne de Pasăre', '46 lei', 'carPas_prod4.png', NULL, NULL, NULL, NULL),
(48, 'Curcan marinat în suc de rodie', 'Carne de Pasăre', '52 lei', 'carPas_prod5.png', 'Frigărui din pulpă de curcan, cartof dulce gratinat cu parmezan, baby spanac, rodie proaspătă 200g / 200g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 1843.3 / 437.2, Grăsimi (g): 8.8 din care: Acizi grași saturați (g) 3.9, Glucide (g): 43.8 din care: Zaharuri (g): 14.8, Proteine (g): 47.5, Sare (g): 2.8', NULL, NULL),
(49, 'Piept de pui', 'Carne de Pasăre', '41 lei', 'carPas_prod6.png', 'Piept de pui gătit la grătar cu piure de cartofi, aromatizat cu cimbru și telemea de vacă, sos demi glace 180g / 200g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2515.1 / 601.6, Grăsimi (g): 23.9 din care: Acizi grași saturați (g) 7.7, Glucide (g): 26.3 din care: Zaharuri (g): 4.4, Proteine (g): 72.4, Sare (g): 5.2', NULL, NULL),
(50, 'Pui teriyaki', 'Carne de Pasăre', '47 lei', 'carPas_prod7.png', 'Piept de pui marinat în stil chinezesc gătit la grătar, orez basmati prăjit cu ou, morcov marinat, ceapă verde  160g / 120g / 100g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2858.7 / 680.5, Grăsimi (g): 17.8 din care: Acizi grași saturați (g) 4, Glucide (g): 66.7 din care: Zaharuri (g): 19.5, Proteine (g): 64.5, Sare (g): 5.2', NULL, NULL),
(51, 'Șnițel crocant de pui', 'Carne de Pasăre', '45 lei', 'carPas_prod8.png', 'Carne de pui în crustă de panko (pesmet japonez) presărat cu fulgi de sare Maldon și boabe de piper roșu, sos barbeque și sos de maioneză homemade cu muștar 250g / 50g / 50g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 3972.6 / 952.1, Grăsimi (g): 51.2 din care: Acizi grași saturați (g) 7.8, Glucide (g): 60.2 din care: Zaharuri (g): 10.2, Proteine (g): 62.5, Sare (g): 4.6', NULL, NULL),
(57, 'Coaste Spicy Mango', 'Carne de Porc', '69 lei', 'carPorc_prod1.png', 'Coaste de porc, sos spicy mango, pancetta, cartofi wedges, salată de ceapă roșie cu sumac / 370g / 120g / 80g', 'Informații nutriționale:Valoare energetica ( kj/kcal) : 6017.42/ 1438.2, Grasimi (g) : 107.05 din care: Acizi grasi saturati (g): 37.08, Glucide (g): 43.06 din care: Zaharuri (g): 0.95, Proteine (g): 69.01, Sare (g): 3.58', NULL, NULL),
(58, 'Coaste de porc glazurate cu sos barbeque', 'Carne de Porc', '70 lei', 'carPorc_prod2.png', 'Coaste de porc, sos barbeque, ceapă, usturoi, coriandru, salată coleslaw, castraveți murați în casă, cartofi copți, lipie 300g / 50g / 250g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 6998 / 1678.4, Grăsimi (g): 98.1 din care: Acizi grași saturați (g) 33.2, Glucide (g): 112 din care: Zaharuri (g): 29.7, Proteine (g): 92.9, Sare (g): 7.5', NULL, NULL),
(59, 'Mușchiuleț de porc', 'Carne de Porc', '62 lei', 'carPorc_prod3.png', 'Mușchiuleț de porc, piure de cartof dulce, mix de salată, sos de gorgonzola 180g / 150g / 70g', NULL, NULL, NULL),
(60, 'Shashlyk', 'Carne de Porc', '64 lei', 'carPorc_prod4.png', 'Ceafă maturată de porc marinată în casă, servită cu sos chimichurri, salată coleslaw, lipie 260g / 50g / 100g / 50g', '', NULL, NULL),
(61, 'Tomahawk', 'Carne de Porc', '59 lei', 'carPorc_prod5.png', 'Cotlet maturat de porc cu os servit cu sos chimichurri, maioneză homemade și salată coleslaw, lipie 300g / 50g / 100g / 50g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 5704.4 / 1366.6, Grăsimi (g): 83.2 din care: Acizi grași saturați (g) 6.3, Glucide (g): 51.3 din care: Zaharuri (g): 13.5, Proteine (g): 100.4, Sare (g): 7.3', NULL, NULL),
(62, 'Caprese Burger', 'Burgeri', '47 lei', 'bur_prod1.png', 'Chiflă, carne de vită, rucola, sos pesto home-made, mozzarella, roșii / 350g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 3474.43/ 830.41, Grasimi (g) : 42.76 din care: Acizi grasi saturati (g): 26.47, Glucide (g): 65.76 din care: Zaharuri (g): 5.6 , Proteine (g): 60.99, Sare (g): 4.73', NULL, NULL),
(63, 'Dublu Cheeseburger', 'Burgeri', '43 lei', 'bur_prod2.png', NULL, NULL, NULL, NULL),
(64, 'Burger Baconator de Vită', 'Burgeri', '46 lei', 'bur_prod3.png', 'Chiflă homemade, carne de vită Black Angus tocată și condimentată in bucataria Krud, bacon, ou, cașcaval cheddar, sos barbeque picant, sos maioneză homemade și muștar, salată verde, castraveți murați, rondele de ceapă roșie 350g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 5604.5 / 1347.3, Grăsimi (g): 99.9 din care: Acizi grași saturați (g) 31.6, Glucide (g): 62.8 din care: Zaharuri (g): 11, Proteine (g): 50.2, Sare (g): 3.4', NULL, NULL),
(65, 'Burger de pui', 'Burgeri', '39 lei', 'bur_prod4.png', 'Chiflă home-made, piept de pui în crustă de panko (pesmet japonez), sos maioneză home-made și muștar, salată coleslaw, castraveți murați 300g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 4067.4 / 972.2, Grăsimi (g): 47 din care: Acizi grași saturați (g) 10.1, Glucide (g): 86.3 din care: Zaharuri (g): 11.8, Proteine (g): 53.7, Sare (g): 4.8', NULL, NULL),
(66, 'Burger Italian de Vită', 'Burgeri', '40 lei', 'bur_prod5.png', 'Chiflă homemade, carne de vită Black Angus tocată și condimentată in bucataria Krud, cașcaval cheddar, sos barbeque, sos de maioneză homemade și muștar, rucola, rondele de ceapă roșie, roșii 300g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 4133.6 / 996.9, Grăsimi (g): 66.7 din care: Acizi grași saturați (g) 23.9, Glucide (g): 62.8 din care: Zaharuri (g): 11.8, Proteine (g): 36.4, Sare (g): 1.8', NULL, NULL),
(67, 'Burger Krud', 'Burgeri', '46 lei', 'bur_prod6.png', 'Chiflă home-made, pulpă de miel Noua Zeelandă tocată și condimentată în bucătăria Krud, pastă harissa (ușor picantă), sos de iaurt cu usturoi și mentă, cașcaval cheddar, rucola 300g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2655 / 632.7, Grăsimi (g): 33.3 din care: Acizi grași saturați (g) 5.4, Glucide (g): 48.9 din care: Zaharuri(g): 5.4, Proteine (g): 36.2, Sare (g): 3.4', NULL, NULL),
(68, 'Veggie Burger', 'Burgeri', '36 lei', 'bur_prod7.png', 'Chiflă home-made, năut, mazăre, cartofi, ceapă verde, pătrunjel, usturoi, roșii, castraveți murați, ceapă roșie, sos barbeque 300g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2915.5 / 693.9, Grăsimi (g): 12.2 din care: Acizi grași saturați (g) 2.2, Glucide (g): 124.1 din care: Zaharuri (g): 15.5, Proteine (g): 29.8, Sare (g): 6.4', NULL, NULL),
(69, 'Lup de mare cu sos mediteranean', 'Pește', '72 lei', 'peste_prod1.png', NULL, NULL, NULL, NULL),
(70, 'Păstrăv în crustă de porumb', 'Pește', '51 lei', 'peste_prod2.png', 'Păstrăv prăjit tradițional în crustă de porumb, servit cu mămăliguță și sos de mujdei făcut în casă 300g / 100g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 5256.6 / 1252.1, Grăsimi (g): 69.5 din care: Acizi grași saturați (g) 17, Glucide (g): 79 din care: Zaharuri (g): 1, Proteine (g): 83.1, Sare (g): 10.2', NULL, NULL),
(71, 'Somon', 'Pește', '79 lei', 'peste_prod3.png', 'Somon de ocean prăjit în tigaie, crustă superioară crocantă, sos olandez de casă, piure de cartofi, broccoli blanșat și fâșii de dovlecei 200g / 150g / 50g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 3404.8 / 820.7, Grăsimi (g): 65.2 din care: Acizi grași saturați (g) 18.1, Glucide (g): 18.1 din care: Zaharuri (g): 4, Proteine (g): 42.4, Sare (g): 3.6', NULL, NULL),
(72, 'Cartofi prăjiți cu telemea de vacă', 'Garnituri', '18 lei', 'garnituri_prod1.png', NULL, NULL, NULL, NULL),
(73, 'Chips de cartofi home-made\r\n', 'Garnituri', '16 lei', 'garnituri_prod2.png', 'Chips de cartofi home-made 100g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 622 / 146.6, Grăsimi (g): 0.2 din care: Acizi grași saturați (g) 0, Glucide (g): 33.8 din care: Zaharuri (g):1.2, Proteine (g): 3.8, Sare (g): 1', NULL, NULL),
(74, 'Loaded chicken fries', 'Garnituri', '33 lei', 'garnituri_prod3.png', NULL, NULL, NULL, NULL),
(75, 'Salată de varză cu morcov', 'Garnituri', '18 mdl', 'garnituri_prod4.png', NULL, NULL, NULL, NULL),
(76, 'Cartofi aurii cu usturoi și mărar', 'Garnituri', '18 lei', 'garnituri_prod5.png', '200g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 628.8 / 148.2, Grăsimi (g): 0.2 din care: Acizi grași saturați (g) 0, Glucide (g): 34.1 din care: Zaharuri(g): 1.2, Proteine (g): 3.9, Sare (g): 1', NULL, NULL),
(77, 'Cartofi piure', 'Garnituri', '17 lei', 'garnituri_prod6.png', 'Cartofi piure cu telemea de vacă, unt  200g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 1456.5 / 348.3, Grăsimi (g): 20.4 din care: Acizi grași saturați (g) 13.1, Glucide (g): 32.9 din care: Zaharuri (g): 2.7, Proteine (g): 9.7, Sare (g): 2.2', NULL, NULL),
(78, 'Cartofi prăjiți cu parmezan', 'Garnituri', '18 lei', 'garnituri_prod7.png', '200 g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 3042.5 / 722.1, Grăsimi (g): 28.9 din care: Acizi grași saturați (g) 8.8, Glucide (g): 105.7 din care: Zaharuri (g): 17.7, Proteine (g): 16.1, Sare (g): 2.5', NULL, NULL),
(79, 'Castraveți murați în casă', 'Garnituri', '12 lei', 'garnituri_prod8.png', '180 g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 100.41/ 24, Grasimi (g) : 0.75 din care: Acizi grasi saturati (g): 0.15, Glucide (g): 1.5 din care: Zaharuri (g): 0.75, Proteine (g): 1.5, Sare (g): 3', NULL, NULL),
(80, 'Coleslaw', 'Garnituri', '17 lei', 'garnituri_prod9.png', 'Varză roșie, ceapă roșie, morcov, maioneză home-made, smântână, boia afumată, zahăr brun 200g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 721.6 / 174.3, Grăsimi (g): 14.4 din care: Acizi grași saturați (g) 2.4, Glucide (g): 10.9 din care: Zaharuri (g): 7.2, Proteine (g): 1.3, Sare (g): 1.2', NULL, NULL),
(81, 'Legume la grătar', 'Garnituri', '23 lei', 'garnituri_prod10.png', 'Legume proaspete din gradină, asezonate cu busuioc și ierburi aromatice, gătite la grătar 200g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 1040.4 / 250.9, Grăsimi (g): 16.3 din care: Acizi grași saturați (g) 2.3, Glucide (g): 25 din care: Zaharuri(g): 14.3, Proteine (g): 5.9, Sare (g): 3.1', NULL, NULL),
(82, 'Loaded fries', 'Garnituri', '29 lei', 'garnituri_prod11.png', 'Cartofi prăjiți cu toping de brânză cedar, salam picant Ventricina și măsline  300g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 5034.7 / 1197.4, Grăsimi (g): 56.8 din care: Acizi grași saturați (g) 19.8, Glucide (g): 159.4 din care: Zaharuri (g): 27.5, Proteine (g): 22.2, Sare (g): 3.6', NULL, NULL),
(83, 'Orez cu legume', 'Garnituri', '20 lei', 'garnituri_prod12.png', 'Orez basmati sote cu legume proaspete, unt 150g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 1458.3 / 346.5, Grăsimi (g): 10.7 din care: Acizi grași saturați (g) 1.6, Glucide (g): 57.6 din care: Zaharuri (g): 3.1, Proteine (g): 6.2, Sare (g): 2', NULL, NULL),
(84, 'Pâine făcută în casă', 'Garnituri', '7 lei', 'garnituri_prod13.png', '150 g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 1523.26/ 364.07, Grasimi (g) : 1.57 din care: Acizi grasi saturati (g): 0.6, Glucide (g): 75.97 din care: Zaharuri (g): 2, Proteine (g): 11.98, Sare (g): 2.43', NULL, NULL),
(85, 'Salată rucola și praz', 'Garnituri', '23 lei', 'garnituri_prod14.png', 'Rucola, praz și ulei de trufe 150g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 350.8 / 84, Grăsimi (g): 5.3 din care: Acizi grași saturați (g) 0.6, Glucide (g): 7.9 din care: Zaharuri (g):2.4, Proteine (g): 3.3, Sare (g): 2', NULL, NULL),
(86, 'Salată verde', 'Garnituri', '17 lei', 'garnituri_prod15.png', 'Salată verde, rucola, castraveți, roșii cherry, ulei de măsline 200g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 347.7 / 83.7, Grăsimi (g): 5.6 din care: Acizi grași saturați (g) 0.7, Glucide (g): 7.1 din care: Zaharuri(g): 4.4, Proteine (g): 2.3, Sare (g): 2.1', NULL, NULL),
(87, 'Sos picant', 'Sosuri', '9 lei', 'sousuri_prod1.png', 'Ardei iute tocat mărunt, ulei de măsline 50g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 1057.3 / 256.8, Grăsimi (g): 27.5 din care: Acizi grași saturați (g) 4.2, Glucide (g): 1.9 din care:Zaharuri (g): 0, Proteine (g): 0.4, Sare (g): 1', NULL, NULL),
(88, 'Mujdei făcut în casă', 'Sosuri', '7 lei', 'sousuri_prod2.png', '50 g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 1707.9 / 413.9, Grăsimi (g): 39.5 din care: Acizi grași saturați (g) 4.1, Glucide (g): 12.7 din care: Zaharuri (g): 1.1, Proteine (g): 2.7, Sare (g): 1.3', NULL, NULL),
(89, 'Sos barbeque', 'Sosuri', '7 lei', 'sousuri_prod3.png', '50 g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 444.9 / 106.2, Grăsimi (g): 4.3 din care: Acizi grași saturați (g) 0.6, Glucide (g): 15.9 din care: Zaharuri(g): 12.9, Proteine (g): 1.8, Sare (g): 1.9', NULL, NULL),
(90, 'Sos de gorgonzola', 'Sosuri', '8 lei', 'sousuri_prod4.png', '50 g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 1298.7 / 311.1, Grăsimi (g): 30.9 din care: Acizi grași saturați (g) 20.6, Glucide (g): 2 din care: Zaharuri(g): 0, Proteine (g): 6.2, Sare (g): 0.5', NULL, NULL),
(91, 'Sos de iaurt cu usturoi și mentă', 'Sosuri', '7 lei', 'sousuri_prod5.png', '50 g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 485.9 / 116.3, Grăsimi (g): 9.3 din care: Acizi grași saturați (g) 4.9, Glucide (g): 3.6 din care: Zaharuri(g): 0.3, Proteine (g): 4.5, Sare (g): 0.9', NULL, NULL),
(92, 'Sos de maioneză homemade cu muștar', 'Sosuri', '7 lei', 'sousuri_prod6.png', '50 g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2891.8 / 703, Grăsimi (g): 76.8 din care: Acizi grași saturați (g) 8.6, Glucide (g): 0.2 din care: Zaharuri(g): 0.1, Proteine (g): 2.5, Sare (g): 0.8', NULL, NULL),
(93, 'Sos de roșii', 'Sosuri', '7 lei', 'sousuri_prod7.png', '70 g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 186.9 / 44.8, Grăsimi (g): 2.2 din care: Acizi grași saturați (g) 0.3, Glucide (g): 4.2 din care: Zaharuri(g): 3.5, Proteine (g): 1.6, Sare (g): 0.5', NULL, NULL),
(94, 'Sos harrisa (ușor picante)', 'Sosuri', '9 lei', 'sousuri_prod8.png', '50 g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 433.9 / 103.7, Grăsimi (g): 5.3 din care: Acizi grași saturați (g) 0.7, Glucide (g): 11.7 din care: Zaharuri(g): 0.3, Proteine (g): 2.6, Sare (g): 1', NULL, NULL),
(109, 'Millefeuille', 'Deserturi', '31 lei', 'desert_prod1.png', 'Foietaj, făină de grâu, ouă, lapte, frișcă, unt, zahăr, vanilie / 150g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 3338.28 / 797.87, Grasimi (g) : 53.32 din care: Acizi grasi saturati (g): 19.92, Glucide (g): 46.23 din care: Zaharuri (g): 32.78, Proteine (g): 11.34, Sare (g):0.66', NULL, NULL),
(110, 'Alivancă', 'Deserturi', '28 lei', 'desert_prod2.png', 'Desert tradițional din brânză de vaci, ouă, făină de porumb, servită cu dulceață din băcănia Krud 200g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 2181.45/ 521.38, Grasimi (g) : 20.98 din care: Acizi grasi saturati (g): 13.12, Glucide (g): 43.09  din care: Zaharuri (g): 50.07, Proteine (g): 15.76, Sare (g): 0.89', NULL, NULL),
(111, 'Tartă vegană cu mere', 'Deserturi', '27 lei  ', 'desert_prod3.png', 'Făină, mere, margarină, zahăr, scorțișoară, stafide, miez de nucă caramelizat 150g   ', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 2777.63/ 663.87, Grasimi (g) : 27.4 din care: Acizi grasi saturati (g): 8.2, Glucide (g): 57.04 din care: Zaharuri (g): 57.7, Proteine (g): 6.7, Sare (g): 1.63', NULL, NULL),
(112, 'Tiramisu', 'Deserturi', '29 lei', 'desert_prod4.png', 'Pișcoturi însiropate în cafea și cremă ușoară de mascarpone 200g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 2777.63/ 541.78, Grasimi (g) : 32.89 din care: Acizi grasi saturati (g): 20.56, Glucide (g): 50.95 din care: Zaharuri (g): 40.33, Proteine (g): 8.36, Sare (g): 0', NULL, NULL),
(113, 'Tort de morcovi', 'Deserturi', '29 lei', 'desert_prod5.png', 'Faină de grâu, scorțișoară, zahăr brun, morcov ras, fistic măcinat, vanilie, cremă de brânză, ouă, unt 150g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 3422.30/ 817.95, Grasimi (g) : 56.36 din care: Acizi grasi saturati (g): 17.05, Glucide (g): 47.15 din care: Zaharuri (g): 35.66, Proteine (g): 7.77, Sare (g): 21.15', NULL, NULL),
(114, 'Tort Red Velvet', 'Deserturi', '29 lei', 'desert_prod6.png', 'Frișcă, lapte, mascarpone, iaurt, cremă de brânză, unt, ou, zahăr, cacao, făină de grâu, praf de copt 150g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 2229.40/ 532.84, Grasimi (g) : 28.8 din care: Acizi grasi saturati (g): 18.68, Glucide (g): 36.05 din care: Zaharuri (g): 43.97, Proteine (g): 6.69, Sare (g): 1.38', NULL, NULL),
(215, 'Zuchinni la cuptor cu năut și quinoa', 'Meniu de Post', '40 lei', 'post_prod2.png', 'Zucchini, quinoa, rosii cherry, năut, ardei gras, ceapă roșie, pătrunjel, zaatar, sos tahini / 350g', 'Informații nutriționale: Valoare energetica ( kj/kcal) : 1316.74/ 314.71, Grasimi (g) : 14.45 din care: Acizi grasi saturati (g): 3.41, Glucide (g): 34.35 din care: Zaharuri (g): 9.28, Proteine (g): 13.43, Sare (g): 1.22', NULL, NULL),
(216, 'Cremă de ardei copți1', 'Meniu de Post', '28 lei', 'post_prod3.png', 'Ardei copți la foc viu, miez de nucă, usturoi, pesmet, fulgi de chilli, ulei de măsline, baghetă și lipie 170g / 40g / 40g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2742.8 / 654.9, Grăsimi (g): 35.7 din care: Acizi grași saturați (g) 4.3, Glucide (g): 70.6 din care: Zaharuri (g): 8.3, Proteine (g): 14.5, Sare (g): 3.3', NULL, NULL),
(222, 'Tagliatelle Alla Puttanesca1', 'Meniu de Post', '39 lei', 'post_prod9.png', 'Tagliatelle home-made, roșii cherry, măsline Kalamata, usturoi, busuioc, vin alb, ulei, parmeza 320g', 'Informații nutriționale: Valoare Energetică (kJ/kcal): 2709.7 / 654.4, Grăsimi (g): 55.2 din care: Acizi grași saturați (g) 21.4, Glucide (g): 18.4 din care: Zaharuri (g): 4.2, Proteine (g): 17.6, Sare (g): 7.9', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_09_07_091718_create_dishes_table', 1),
(2, '2024_09_07_092158_create_categories_table', 2),
(3, '2024_09_07_092406_create_sessions_table', 3),
(4, '2024_09_18_111715_create_booking_table', 4),
(5, '2024_09_22_195654_create_contacts_table', 5),
(7, '2024_09_23_100953_create_orders_table', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dishes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `telefon`, `email`, `dishes`, `total`, `delivery_method`, `payment`, `message`, `created_at`, `updated_at`) VALUES
(2, 'test', 12345678, 'test@mail.ru', 'Salată Krud (Количество: 1), Mușchiuleț de porc (Количество: 1)', '131', 'Ridică din restaurant', 'Numerar la primire', NULL, '2024-09-25 08:45:30', '2024-09-25 08:45:30'),
(3, 'Daniel', 60029911, 'danikmihai23@mail.ru', 'Mușchiuleț de porc (Количество: 2), Cartofi prăjiți cu parmezan (Количество: 1)', '142', 'Livrare la domiciliu în ZONA METROPOLITANĂ Iași: 21,00 lei', 'on', NULL, '2024-09-26 05:41:58', '2024-09-26 05:41:58');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('d9ecuMEA8UzuuxVeuulatFfOA54lRwQZFwzdLbQo', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Safari/605.1.15', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ0c0S1NGbzJ2SDl2ZUxKUzY5Yzl4ZDdTNWNrQ1FkdzVwQTRhN3hvUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YTowOnt9fQ==', 1731215423),
('dHcF8HhPdxFQVh1Tu0J2u2KMPswkBHb1ma6yM56L', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Safari/605.1.15', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVk01MFBuV29KeVhQbEpKczFuZzlJdzZXcUFGYTRybFdhWTBNaFFnYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YToxOntpOjk7YTo2OntzOjI6ImlkIjtpOjk7czo0OiJuYW1lIjtzOjI2OiJadWNoaW5uaSBsYSBjdXB0b3IgY3UgZmV0YSI7czo1OiJwaG90byI7czoxNjoic2FsYXRlX3Byb2QyLnBuZyI7czo1OiJwcmljZSI7ZDo0MDtzOjg6InF1YW50aXR5IjtpOjE7czo1OiJ0b3RhbCI7ZDo0MDt9fX0=', 1730444262),
('TNCttr0ccmCFBRRGs4clHH5JiE7PCUrBxohDVwz8', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkIwbmJVeGIxbDRUTnNtTEk1SmNkYmhSV1hUaGh1dERQTElycXVycCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1730444266);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category` (`category`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `dishes_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
