-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-02-2019 a las 11:09:32
-- Versión del servidor: 10.2.19-MariaDB-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `osolelar_baigorria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `texto_es` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `texto_en` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `texto_br` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `seccion` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `orden` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `imagen`, `titulo_es`, `titulo_en`, `titulo_br`, `texto_es`, `texto_en`, `texto_br`, `seccion`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'articulos__laboratorio.jpg', 'LABORATORIO', 'LABORATORY', 'LABORATÓRIO', '<p>En complemento de nuestra planta en la Localidad de Caseros, Buenoas Aires, contamos con un laboratorio propio de Investigaci&oacute;n y Desarrollo, con un &eacute;nfasis especial en la mejora continua y la trazabilidad de los procesos productivos.&nbsp;</p>', '<p>In addition to our plant in the Town of Caseros, Buenoas Aires, we have our own Research and Development laboratory, with a special emphasis on the continuous improvement and traceability of production processes.</p>', '<p>Al&eacute;m de nossa f&aacute;brica na cidade de Caseros, Buenoas Aires, temos nosso pr&oacute;prio laborat&oacute;rio de Pesquisa e Desenvolvimento, com &ecirc;nfase especial na melhoria cont&iacute;nua e na rastreabilidade dos processos de produ&ccedil;&atilde;o.</p>', 'calidad', 'AA', '2018-12-07 22:15:48', '2018-12-21 16:16:27'),
(2, 'articulos__desarrollo.jpg', 'INGENIERÍA Y DESARROLLO', 'ENGINEERING AND DEVELOPMENT', 'ENGENHARIA E DESENVOLVIMENTO', '<p>En Taller Baigorria tenemos como desaf&iacute;o superarnos d&iacute;a a d&iacute;a basados en la innovaci&oacute;n tecnol&oacute;gica, la capacitaci&oacute;n, la inversi&oacute;n productiva y la mejora continua.&nbsp;</p>', '<p>In Taller Baigorria we have the challenge to improve ourselves day by day based on technological innovation, training, productive investment and continuous improvement.</p>', '<p>Em Taller Baigorria temos o desafio de nos aperfei&ccedil;oar dia a dia com base em inova&ccedil;&atilde;o tecnol&oacute;gica, treinamento, investimento produtivo e melhoria cont&iacute;nua.</p>', 'calidad', 'BB', '2018-12-07 22:16:34', '2018-12-21 16:16:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `imagen`, `titulo_es`, `titulo_en`, `titulo_br`, `seccion`, `video`, `ruta`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'banner__home.jpg', 'Industria Metálurgica 100% Argentina', '100% Metallurgical Industry Argentina', '100% Indústria Metalúrgica Argentina', 'home', 'CX2B6ID_gWY', NULL, 'AA', '2018-12-05 17:46:34', '2018-12-21 16:20:31'),
(2, 'banner__portada-expor.jpg', 'Exportación', 'Export', 'Exportação', 'exportacion', NULL, NULL, 'AA', '2018-12-07 17:05:00', '2018-12-21 16:24:46'),
(3, 'banner__portada-calidad.jpg', 'Calidad', 'Quality', 'Qualidade', 'calidad', NULL, NULL, 'AA', '2018-12-07 17:27:44', '2018-12-21 16:20:00'),
(4, 'banner__portada_catalogo.jpg', 'Buscar', 'Search', 'Encontra', 'catalogo', NULL, NULL, 'AA', '2018-12-17 21:50:22', '2018-12-23 02:58:22'),
(5, 'banner__portada_pedidos.jpg', 'Carrito', 'Cart', 'Carrinho', 'carrito', NULL, NULL, 'AA', '2018-12-18 18:33:38', '2018-12-21 16:36:56'),
(6, 'banner__busca.jpg', 'Buscar', 'Search', 'Pesquisar', 'busca', NULL, NULL, 'AA', '2018-12-20 04:52:13', '2018-12-21 16:42:09'),
(7, 'banner__lista-precios.jpg', 'Lista de precios', 'Price list', 'Lista de preços', 'listadeprecios', NULL, NULL, 'AA', '2018-12-20 05:17:23', '2018-12-21 16:39:20'),
(8, 'banner__calidad.jpg', 'Bienvenido a nuestra zona privada para clientes.', 'Welcome to our private zone for clients', 'Bem-vindo à nossa zona privada para os clientes', 'privatezone', NULL, NULL, 'AA', '2018-12-27 17:53:39', '2018-12-27 17:53:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidades`
--

CREATE TABLE `calidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `imagen`, `titulo_es`, `titulo_en`, `titulo_br`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'categorias__c1.jpg', 'Espárragos, conos y tuercas', 'Asparagus, cones and nuts', 'Espargos, cones e nozes', 'AA', '2018-12-10 19:56:58', '2018-12-21 19:11:04'),
(2, 'categorias__c2.jpg', 'Bulones y tuercas de ruedas', 'Bolts and wheel nuts', 'Parafusos e porcas de roda', 'BB', '2018-12-10 19:57:05', '2018-12-21 19:26:09'),
(3, 'categorias__c3.jpg', 'Piezas para tapa de cilindro', 'Parts for cylinder cover', 'Peças para tampa de cilindro', 'CC', '2018-12-10 19:57:22', '2018-12-21 19:26:46'),
(4, 'categorias__c4.jpg', 'Bulones y tuercas para cardan', 'Cardan nuts and bolts', 'Porcas e parafusos de cardan', 'DD', '2018-12-10 19:57:35', '2018-12-21 19:27:09'),
(5, 'categorias__c5.jpg', 'Tornillos de centro elástico', 'Elastic center screws', 'Parafusos centrais elásticos', 'EE', '2018-12-10 19:57:41', '2018-12-21 19:27:36'),
(6, 'categorias__a-medida.jpg', 'Piezas especiales a pedido', 'Special pieces on request  ', 'Peças especiais a pedido', 'FF', '2018-12-10 19:57:49', '2018-12-21 19:28:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE `certificados` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ficha` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `certificados`
--

INSERT INTO `certificados` (`id`, `titulo_es`, `titulo_en`, `titulo_br`, `seccion`, `ficha`, `orden`, `created_at`, `updated_at`) VALUES
(3, 'Certificación ISO 9001:2015', 'ISO 9001: 2015 Certification', 'Certificação ISO 9001: 2015', 'calidad', 'certificados__TallerBaigorria-Certificado-ISO-9001-2015-CASEROS.jpg', 'AA', '2018-12-07 20:29:41', '2018-12-21 16:40:00'),
(4, 'Política de Calidad', 'Quality politics', 'Política de qualidade', 'calidad', 'certificados__TallerBaigorria-Certificado-ISO-9001-2015-CASEROS.jpg', 'BB', '2018-12-07 20:29:53', '2018-12-21 16:40:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `user`, `first_name`, `last_name`, `phone`, `address`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto2_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto2_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto2_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `imagen`, `titulo_es`, `subtitulo_es`, `texto_es`, `titulo_en`, `subtitulo_en`, `texto_en`, `titulo_br`, `subtitulo_br`, `texto_br`, `texto2_es`, `texto2_en`, `texto2_br`, `ruta`, `orden`, `seccion`, `created_at`, `updated_at`) VALUES
(1, 'contenidos__home1.jpg', 'TALLER BAIGORRIA', 'Nuestra Historia', '<p>Somos una industria metal&uacute;rgica 100% argentina fundada en 1960, dedicada a la fabricaci&oacute;n de elementos de sujeci&oacute;n. Nos especializamos en la producci&oacute;n de ESP&Aacute;RRAGOS, BULONES (PERNOS / BIRLOS), TORNILLOS y TUERCAS para el sector Automotr&iacute;z, Agr&iacute;cola, Maquinaria Vial e Industrial.&nbsp;</p>', 'BAIGORRIA WORKSHOP', 'Our History', '<p>We are a 100% Argentine metallurgical industry founded in 1960, dedicated to the manufacture of fasteners. We specialize in the production of ASPARAGUS, BULONES (BOLTS / BIRLS), SCREWS and NUTS for the Automotive, Agricultural, Road and Industrial Machinery sector.</p>', 'WORKSHOP DA BAIGORRIA', 'Nossa história', '<p>Somos uma ind&uacute;stria 100% metal&uacute;rgica argentina fundada em 1960, dedicada &agrave; fabrica&ccedil;&atilde;o de fixadores. Somos especializados na produ&ccedil;&atilde;o de ASPARGOS, BULONES (PARAFUSOS / BIRLS), PARAFUSOS e PORCAS para o setor Automotivo, Agr&iacute;cola, Rodovi&aacute;rio e M&aacute;quinas Industriais.</p>', NULL, NULL, NULL, '#', 'AA', 'home', NULL, '2018-12-21 16:22:18'),
(2, 'contenidos__empresa.jpg', 'TALLER BAIGORRIA', 'Nuestra Historia', '<p>Somos una industria metal&uacute;rgica 100% argentina fundada en 1960, dedicada a la fabricaci&oacute;n de elementos de sujeci&oacute;n. Nos especializamos en la producci&oacute;n de ESP&Aacute;RRAGOS, BULONES (PERNOS / BIRLOS), TORNILLOS y TUERCAS para el sector AUTOMOTRIZ, AGR&Iacute;COLA, de MAQUINARIA VIAL e INDUSTRIAL. En Taller Baigorria encontrar&aacute; una ventaja &uacute;nica en el mundo: la m&aacute;s variada gama de esp&aacute;rragos para uso automotor, industrial y agr&iacute;cola, con stock permanente. Gracias a una experiencia de m&aacute;s de 50 a&ntilde;os, hemos logrado estandarizar las diversas l&iacute;neas de producto, garantizando la existencia de una alternativa para solucionar la falta de la pieza original. Todo esto respaldado t&eacute;cnicamente por la utilizaci&oacute;n de normas automotrices, DIN y ASTM. Contamos tambi&eacute;n con una amplia gama de bulones para rueda y maza automotor de diversas marcas de veh&iacute;culos &ndash;europeas, norteamericanas y orientales-.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#', 'AA', 'empresa', NULL, '2018-12-06 21:11:41'),
(3, 'no-imagen.jpg', 'titulo español', 'subtitulo español', 'texto español', 'titulo english', 'subtitulo english', 'texto english', 'titulo portugues', 'subtitulo portugues', 'texto portugues', NULL, NULL, NULL, '#', NULL, 'contacto', NULL, NULL),
(4, 'no-imagen.jpg', 'Acepto los términos y condiciones de privacidad', 'Términos y condiciones de privacidad', '<p>T&eacute;rminos y condiciones de privacidad</p>', 'I accept the terms and conditions of privacy', 'Terms and conditions of privacy', '<p>Terms and conditions of privacy</p>', 'Eu aceito os termos e condições de privacidade', 'Termos e condições de privacidade', '<p>Termos e condi&ccedil;&otilde;es de privacidade</p>', NULL, NULL, NULL, '#', 'AA', 'condiciones', NULL, '2018-12-21 16:41:40'),
(5, 'contenidos__home2.jpg', 'MÁS DE 50 AÑOS EN EL RUBRO', 'El más variado Catálogo', '<p>En Taller Baigorria encontrar&aacute; una ventaja &uacute;nica en el mundo: la m&aacute;s variada gama de esp&aacute;rragos para uso automotor, industrial y agr&iacute;cola, con stock permanente. Gracias a una experiencia de m&aacute;s de 50 a&ntilde;os, hemos logrado estandarizar las diversas l&iacute;neas de producto, garantizando la existencia de una alternativa para solucionar la falta de la pieza original.&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BB', 'home', '2018-12-07 15:20:14', '2018-12-07 15:20:14'),
(6, 'contenidos__home3.jpg', 'CONOCÉ MÁS', 'Misión y Visión', '<p>Es nuestra misi&oacute;n en Taller Baigorria satisfacer las necesidades del cliente, tanto en el mercado interno como externo, fabricando y entregando productos de calidad y seguridad, con responsabilidad, compromiso y a precios competitivos. Nuestro desaf&iacute;o es superarnos d&iacute;a a d&iacute;a en la innovaci&oacute;n tecnol&oacute;gica, la capacitaci&oacute;n y la inversi&oacute;n productiva.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CC', 'home', '2018-12-07 15:21:29', '2018-12-07 15:21:29'),
(7, 'contenidos__map.fw.png', 'Exportamos a más de 15 países de América, Europa y África', '+ presencia en toda la República Argentina', '<p>Nuestras ventas est&aacute;n orientadas tanto al mercado interno como externo. Tenemos presencia en toda la Rep&uacute;blica Argentina y exportamos a m&aacute;s de 15 pa&iacute;ses de Am&eacute;rica, Europa y &Aacute;frica. Proveemos a terminales automotrices y empresas autopartistas certificadas. Nuestros altos est&aacute;ndares de calidad de producto y control de procesos nos respaldan.</p>', 'We export to more than 15 countries in America, Europe and Africa', '+ presence throughout the Argentine Republic', '<p>Our sales are oriented to both the internal and external markets. We have presence throughout the Argentine Republic and export to more than 15 countries in America, Europe and Africa. We provide automotive terminals and certified auto parts companies. Our high standards of product quality and process control support us.</p>', 'Nós exportamos para mais de 15 países na América, Europa e África', '+ presença em toda a República Argentina  ', '<p>Nossas vendas s&atilde;o orientadas para os mercados interno e externo. Temos presen&ccedil;a em toda a Rep&uacute;blica Argentina e exportamos para mais de 15 pa&iacute;ses na Am&eacute;rica, Europa e &Aacute;frica. Fornecemos terminais automotivos e empresas certificadas de autope&ccedil;as. Nossos altos padr&otilde;es de qualidade de produto e controle de processo nos apoiam.</p>', '<p><span style=\"font-size:22px\"><strong>Conforman nuestra cartera de clientes</strong></span></p>\r\n\r\n<p>&middot; Distribuidores y mayoristas del mercado de reposici&oacute;n automotriz (aftermarket)</p>\r\n\r\n<p>&middot; Fabricantes de maquinaria agr&iacute;cola</p>\r\n\r\n<p>&middot; Fabricantes de maquinas viales</p>\r\n\r\n<p>&middot; Fabricantes de ejes originales para camiones y remolques</p>\r\n\r\n<p>&middot; Industrias el&eacute;ctricas</p>\r\n\r\n<p>&middot; Terminales automotrices</p>', '<p><span style=\"font-size:22px\"><strong>Make up our client portfolio</strong></span></p>\r\n\r\n<p>&middot; Distributors and wholesalers of the automotive aftermarket</p>\r\n\r\n<p>&middot; Manufacturers of agricultural machinery</p>\r\n\r\n<p>&middot; Manufacturers of road machines</p>\r\n\r\n<p>&middot; Manufacturers of original axles for trucks and trailers</p>\r\n\r\n<p>&middot; Electrical industries</p>\r\n\r\n<p>&middot; Automotive terminals</p>', '<p><span style=\"font-size:22px\"><strong>Compor nossa carteira de clientes</strong></span></p>\r\n\r\n<p>&middot; Distribuidores e atacadistas do mercado de reposi&ccedil;&atilde;o automotivo</p>\r\n\r\n<p>&middot; Fabricantes de m&aacute;quinas agr&iacute;colas</p>\r\n\r\n<p>&middot; Fabricantes de m&aacute;quinas rodovi&aacute;rias</p>\r\n\r\n<p>&middot; Fabricantes de eixos originais para caminh&otilde;es e reboques</p>\r\n\r\n<p>&middot; Ind&uacute;strias El&eacute;tricas</p>\r\n\r\n<p>&middot; Terminais automotivos<br />\r\n&nbsp;</p>', NULL, 'AA', 'exportacion', '2018-12-07 17:21:20', '2018-12-21 16:27:19'),
(8, 'contenidos__img.jpg', 'Política de Calidad Taller Baigorria', NULL, '<p>Comprometidos con la m&aacute;xima calidad de nuestros productos bajo normas internacionales</p>', 'Baigorria Workshop Quality Policy', NULL, '<p>Committed to the highest quality of our products under international standards</p>', 'Política de Qualidade do Workshop Baigorria', NULL, '<p>Comprometida com a mais alta qualidade de nossos produtos sob padr&otilde;es internacionais</p>', NULL, NULL, NULL, NULL, 'AA', 'calidad', '2018-12-07 17:29:05', '2018-12-21 16:32:20'),
(9, 'contenidos__quality.jpg', 'Asumiendo un compromiso de excelencia en la calidad de nuestros productos', NULL, '<p>En Taller Baigorria contamos con la certificaci&oacute;n ISO-9001 y estamos en proceso de certificaci&oacute;n ISO-TS 16949 en los pr&oacute;ximos meses. Todos nuestros productos son fabricados en aceros aleados comprados directamente en acer&iacute;as locales e internacionales: SAE 10B22, SAE 1038, SAE 4140, SAE 5135, SAE 51B35, PL22D y PL30 con el tratamiento t&eacute;rmico y recubrimiento superficial adecuado, garantizando las calidades 8.8, 10.9, 12.9, G5 y G8 seg&uacute;n corresponda.</p>\r\n\r\n<p>Nuestro proceso de fabricaci&oacute;n esta certificado desde el suministro de la materia prima con certificaciones de cada uno de los materiales utilizados, pasando por la fabricaci&oacute;n del producto y finalmente con la certificaci&oacute;n de calidad de los tratamientos t&eacute;rmicos y superficiales realizados externamente para lo cual contamos con proveedores certificados y de amplia trayectoria en el mercado.</p>', 'Assuming a commitment to excellence in the quality of our products', NULL, '<p>In Taller Baigorria we have the ISO-9001 certification and we are in the ISO-TS 16949 certification process in the coming months. All our products are manufactured in alloyed steel purchased directly from local and international steelworks: SAE 10B22, SAE 1038, SAE 4140, SAE 5135, SAE 51B35, PL22D and PL30 with the thermal treatment and adequate surface coating, guaranteeing the qualities 8.8, 10.9, 12.9, G5 and G8 as appropriate.</p>\r\n\r\n<p>Our manufacturing process is certified from the supply of raw material with certifications of each of the materials used, through the manufacture of the product and finally with the quality certification of thermal and surface treatments performed externally for which we have suppliers certificates and extensive experience in the market.</p>', 'Assumindo um compromisso com a excelência na qualidade de nossos produtos', NULL, '<p>Em Taller Baigorria temos a certifica&ccedil;&atilde;o ISO-9001 e estamos nos processos de certifica&ccedil;&atilde;o ISO-TS 16949 nos pr&oacute;ximos meses. Todos os nossos produtos s&atilde;o fabricados em a&ccedil;o ligado adquirido diretamente de sider&uacute;rgicas locais e internacionais: SAE 10B22, SAE 1038, SAE 4140, SAE 5135, SAE 51B35, PL22D e PL30 com o tratamento t&eacute;rmico e revestimento superficial adequado, garantindo as qualidades 8.8, 10.9, 12.9, G5 e G8 conforme apropriado.</p>\r\n\r\n<p>Nosso processo de fabrica&ccedil;&atilde;o &eacute; certificado a partir do fornecimento de mat&eacute;ria-prima com certifica&ccedil;&otilde;es de cada um dos materiais utilizados, atrav&eacute;s da fabrica&ccedil;&atilde;o do produto e, finalmente, com a certifica&ccedil;&atilde;o da qualidade dos tratamentos t&eacute;rmicos e de superf&iacute;cie realizados externamente para os quais temos fornecedores certificados e ampla experi&ecirc;ncia no mercado.</p>', NULL, NULL, NULL, NULL, 'BB', 'calidad', '2018-12-10 14:35:49', '2018-12-21 16:33:54'),
(10, 'contenidos__i3.png', 'Taller Baigorria', 'Taller Baigorria', '<p>En Taller Baigorria encontrar&aacute; una ventaja &uacute;nica en el mundo: la m&aacute;s variada gama de esp&aacute;rragos para uso automotor, industrial y agr&iacute;cola, con stock permanente. Gracias a una experiencia de m&aacute;s de 50 a&ntilde;os, hemos logrado estandarizar las diversas l&iacute;neas de producto, garantizando la existencia de una alternativa para solucionar la falta de la pieza original.&nbsp;</p>', 'Taller Baigorria', 'Taller Baigorria', '<p>At Taller Baigorria you will find a unique advantage in the world: the most varied range of asparagus for automotive, industrial and agricultural use, with permanent stock. Thanks to an experience of more than 50 years, we have managed to standardize the various product lines, guaranteeing the existence of an alternative to solve the lack of the original part.</p>', 'Taller Baigorria', 'Taller Baigorria', '<p>Em Taller Baigorria voc&ecirc; encontrar&aacute; uma vantagem &uacute;nica no mundo: a mais variada gama de aspargos para uso automotivo, industrial e agr&iacute;cola, com estoque permanente. Gra&ccedil;as a uma experi&ecirc;ncia de mais de 50 anos, conseguimos padronizar as diversas linhas de produtos, garantindo a exist&ecirc;ncia de uma alternativa para solucionar a falta da pe&ccedil;a original.</p>', NULL, NULL, NULL, NULL, 'AA', 'privatezone', '2018-12-27 17:57:55', '2018-12-28 22:31:50'),
(11, 'contenidos__i3.png', 'Taller Baigorria', NULL, '<p>En Taller Baigorria encontrar&aacute; una ventaja &uacute;nica en el mundo: la m&aacute;s variada gama de esp&aacute;rragos para uso automotor, industrial y agr&iacute;cola, con stock permanente. Gracias a una experiencia de m&aacute;s de 50 a&ntilde;os, hemos logrado estandarizar las diversas l&iacute;neas de producto, garantizando la existencia de una alternativa para solucionar la falta de la pieza original.&nbsp;</p>', 'Taller Baigorria', NULL, '<p>At Taller Baigorria you will find a unique advantage in the world: the most varied range of asparagus for automotive, industrial and agricultural use, with permanent stock. Thanks to an experience of more than 50 years, we have managed to standardize the various product lines, guaranteeing the existence of an alternative to solve the lack of the original part.</p>', 'Taller Baigorria', NULL, '<p>Em Taller Baigorria voc&ecirc; encontrar&aacute; uma vantagem &uacute;nica no mundo: a mais variada gama de aspargos para uso automotivo, industrial e agr&iacute;cola, com estoque permanente. Gra&ccedil;as a uma experi&ecirc;ncia de mais de 50 anos, conseguimos padronizar as diversas linhas de produtos, garantindo a exist&ecirc;ncia de uma alternativa para solucionar a falta da pe&ccedil;a original.</p>', NULL, NULL, NULL, NULL, 'BB', 'privatezone', '2018-12-27 17:57:55', '2018-12-27 17:57:55'),
(12, 'contenidos__i3.png', 'Baigorria', NULL, '<p>En Taller Baigorria encontrar&aacute; una ventaja &uacute;nica en el mundo: la m&aacute;s variada gama de esp&aacute;rragos para uso automotor, industrial y agr&iacute;cola, con stock permanente. Gracias a una experiencia de m&aacute;s de 50 a&ntilde;os, hemos logrado estandarizar las diversas l&iacute;neas de producto, garantizando la existencia de una alternativa para solucionar la falta de la pieza original.&nbsp;</p>', 'Baigorria', NULL, '<p>At Taller Baigorria you will find a unique advantage in the world: the most varied range of asparagus for automotive, industrial and agricultural use, with permanent stock. Thanks to an experience of more than 50 years, we have managed to standardize the various product lines, guaranteeing the existence of an alternative to solve the lack of the original part.</p>', 'Baigorria', NULL, '<p>Em Taller Baigorria voc&ecirc; encontrar&aacute; uma vantagem &uacute;nica no mundo: a mais variada gama de aspargos para uso automotivo, industrial e agr&iacute;cola, com estoque permanente. Gra&ccedil;as a uma experi&ecirc;ncia de mais de 50 anos, conseguimos padronizar as diversas linhas de produtos, garantindo a exist&ecirc;ncia de uma alternativa para solucionar a falta da pe&ccedil;a original.</p>', NULL, NULL, NULL, NULL, 'CC', 'privatezone', '2018-12-27 17:57:55', '2018-12-27 17:57:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `tipo`, `texto`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'correo', 'info@baigorria.com', 'AA', NULL, '2018-12-11 16:09:57'),
(2, 'direccion', 'Escultor Santiago Parodi 3864, Caseros. Código Postal: 1678', 'BB', NULL, '2018-12-11 16:10:16'),
(3, 'telefono', '(+54 11) 4750-7556', 'CC', NULL, '2018-12-11 16:10:26'),
(4, 'mapa', NULL, 'AA', NULL, NULL),
(5, 'telefono2', '(+54 11) 4759-8996', 'DD', NULL, '2018-12-11 16:11:36'),
(6, 'Info', 'https://www.smartsupp.com/app/dashboard/', '', NULL, '2018-12-11 16:11:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `imagen`, `titulo_es`, `texto_es`, `titulo_en`, `texto_en`, `titulo_br`, `texto_br`, `ruta`, `orden`, `seccion`, `created_at`, `updated_at`) VALUES
(1, 'destacados__d1.jpg', 'Productos', '<p>En Taller Baigorria encontrar&aacute; una ventaja &uacute;nica en el mundo: la m&aacute;s variada gama de esp&aacute;rragos, con stock permanente.</p>', 'Products', '<p>In Baigorria Workshop you will find a unique advantage in the world: the most varied range of asparagus, with permanent stock.</p>', 'Produtos', '<p>No Workshop Baigorria voc&ecirc; encontrar&aacute; uma vantagem &uacute;nica no mundo: a mais variada gama de espargos, com estoque permanente.</p>', '#', 'AA', 'home', NULL, '2018-12-21 16:15:35'),
(2, 'destacados__d2.jpg', 'Taller Baigorria', '<p>Somos una industria metal&uacute;rgica 100% argentina fundada en 1960, dedicada a la fabricaci&oacute;n de elementos de sujeci&oacute;n</p>', 'Baigorria Workshop', '<p>We are a 100% Argentine metallurgical industry founded in 1960, dedicated to the manufacture of fasteners</p>', 'Oficina Baigorria', '<p>Somos uma ind&uacute;stria 100% metal&uacute;rgica argentina fundada em 1960, dedicada &agrave; fabrica&ccedil;&atilde;o de fixadores</p>', '#', 'AA', 'home', NULL, '2018-12-21 16:16:43'),
(3, 'destacados__calidad.jpg', 'Calidad', '<p>Gracias a la tecnolog&iacute;a y a la certificaci&oacute;n de nuestros procesos, cumplimos con los est&aacute;ndares de calidad requeridos</p>', 'Quality', '<p>Thanks to the technology and the certification of our processes, we comply with the required quality standards</p>', 'Qualidade', '<p>Gra&ccedil;as &agrave; tecnologia e &agrave; certifica&ccedil;&atilde;o dos nossos processos, cumprimos os padr&otilde;es de qualidade exigidos</p>', '#', 'AA', 'home', NULL, '2019-01-07 21:17:12'),
(4, NULL, NULL, '<p>Comprimiso con la innovaci&oacute;n, la capacitaci&oacute;n, la inversi&oacute;n productiva y mejora continua.</p>', NULL, '<p>Commitment to innovation, training, productive investment and continuous improvement.</p>', NULL, '<p>Compromisso com a inova&ccedil;&atilde;o, treinamento, investimento produtivo e melhoria cont&iacute;nua.</p>', NULL, 'AA', 'calidad', '2018-12-07 18:12:15', '2018-12-21 16:34:33'),
(5, NULL, NULL, '<p>Fabricar productos de calidad y seguridad, con responsabilidad, y a &nbsp;precios competitivos</p>', NULL, '<p>To manufacture products of quality and safety, with responsibility, and at competitive prices</p>', NULL, '<p>Fabricar produtos de qualidade e seguran&ccedil;a, com responsabilidade e a pre&ccedil;os competitivos</p>', NULL, 'BB', 'calidad', '2018-12-07 21:03:41', '2018-12-21 16:34:54'),
(6, NULL, NULL, '<p>Es nuestra misi&oacute;n satisfacer las necesidades del cliente, tanto en el mercado interno como externo</p>', NULL, '<p>&Eacute; nossa miss&atilde;o satisfazer as necessidades do cliente, tanto no mercado interno quanto externo</p>', NULL, '<p>It is our mission to satisfy the needs of the client, both in the internal and external market</p>', NULL, 'CC', 'calidad', '2018-12-07 21:25:37', '2018-12-21 16:35:20'),
(7, NULL, NULL, '<p>Contar con la m&aacute;s variada gama de esp&aacute;rragos para uso automotor, industrial y agr&iacute;cola</p>', NULL, '<p>Have the most varied range of asparagus for automotive, industrial and agricultural use</p>', NULL, '<p>Tenha a mais variada gama de espargos para uso automotivo, industrial e agr&iacute;cola</p>', NULL, 'DD', 'calidad', '2018-12-07 21:25:46', '2018-12-21 16:35:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iconos`
--

CREATE TABLE `iconos` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `iconos`
--

INSERT INTO `iconos` (`id`, `imagen`, `titulo_es`, `titulo_en`, `titulo_br`, `seccion`, `orden`, `ruta`, `created_at`, `updated_at`) VALUES
(1, 'iconos__i1.png', 'Stock permanente y  la más variada gama', 'Permanent stock and the most varied range', 'Estoque permanente e a mais variada gama', NULL, 'AA', NULL, '2018-12-05 15:49:54', '2018-12-21 16:22:49'),
(2, 'iconos__i2.png', 'Certificados de Calidad', 'Quality Certificates', 'Certificados de Qualidade', NULL, 'BB', NULL, '2018-12-05 15:50:03', '2018-12-21 16:23:26'),
(3, 'iconos__i3.png', 'Más de 50 años de Trayectoria', 'More than 50 years of experience', 'Mais de 50 anos de experiência', NULL, 'CC', NULL, '2018-12-05 15:50:10', '2018-12-21 16:23:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineatiempos`
--

CREATE TABLE `lineatiempos` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lineatiempos`
--

INSERT INTO `lineatiempos` (`id`, `imagen`, `titulo_es`, `texto_es`, `titulo_en`, `texto_en`, `titulo_br`, `texto_br`, `ruta`, `seccion`, `orden`, `created_at`, `updated_at`) VALUES
(1, NULL, '1960', '<p>Gracias a la tecnolog&iacute;a incorporada en los &uacute;ltimos a&ntilde;os y a la certificaci&oacute;n de nuestros procesos, cumplimos con los est&aacute;ndares de calidad para los productos requeridos por terminales automotrices e industriales.</p>', '1960', NULL, '1960', NULL, NULL, NULL, 'AA', '2018-12-06 17:39:46', '2018-12-06 17:39:46'),
(2, NULL, '1990', '<p>Gracias a la tecnolog&iacute;a incorporada en los &uacute;ltimos a&ntilde;os y a la certificaci&oacute;n de nuestros procesos, cumplimos con los est&aacute;ndares de calidad para los productos requeridos por terminales automotrices e industriales.</p>', '1990', NULL, '1990', NULL, NULL, NULL, 'BB', '2018-12-06 17:39:57', '2018-12-06 17:39:57'),
(3, NULL, '1996', '<p>Gracias a la tecnolog&iacute;a incorporada en los &uacute;ltimos a&ntilde;os y a la certificaci&oacute;n de nuestros procesos, cumplimos con los est&aacute;ndares de calidad para los productos requeridos por terminales automotrices e industriales.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 'CC', '2018-12-06 17:40:09', '2018-12-06 17:40:09'),
(4, NULL, '2002', '<p>Gracias a la tecnolog&iacute;a incorporada en los &uacute;ltimos a&ntilde;os y a la certificaci&oacute;n de nuestros procesos, cumplimos con los est&aacute;ndares de calidad para los productos requeridos por terminales automotrices e industriales.</p>', '2002', NULL, '2002', NULL, NULL, NULL, 'DD', '2018-12-06 17:40:28', '2018-12-06 17:40:28'),
(5, NULL, '2015', '<p>Gracias a la tecnolog&iacute;a incorporada en los &uacute;ltimos a&ntilde;os y a la certificaci&oacute;n de nuestros procesos, cumplimos con los est&aacute;ndares de calidad para los productos requeridos por terminales automotrices e industriales.</p>', '2015', NULL, '2015', NULL, NULL, NULL, 'EE', '2018-12-06 17:40:42', '2018-12-06 17:40:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE `listas` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `ficha` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `seccion` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `ruta` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `orden` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `listas`
--

INSERT INTO `listas` (`id`, `imagen`, `titulo_es`, `titulo_en`, `titulo_br`, `ficha`, `seccion`, `ruta`, `orden`, `created_at`, `updated_at`) VALUES
(2, 'listadeprecios__lista-precios-baigorria.jpg', 'Lista de productos 2019', 'List of products 2019', 'Lista de produtos 2019', 'listadeprecios__fichas__plano_producot.jpg', 'privada', NULL, 'AA', '2018-12-20 05:56:15', '2018-12-21 16:43:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `tipo`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'header', 'logos__logo-baigorria.jpg', 'AA', NULL, '2018-12-20 16:45:21'),
(2, 'footer', 'logos__logo-baigorria footer.png', 'BB', NULL, '2018-12-20 16:47:23'),
(3, 'favicon', 'logos__taller-baigorria-favicon.png', 'CC', NULL, '2018-12-20 16:48:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatos`
--

CREATE TABLE `metadatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metadatos`
--

INSERT INTO `metadatos` (`id`, `keyword`, `texto`, `seccion`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'keywords', 'descripcion', 'home', 'AA', NULL, NULL),
(2, 'keywords', 'descripcion', 'empresa', 'BB', NULL, NULL),
(3, 'keywords', 'descripcion', 'contacto', 'CC', NULL, NULL),
(4, 'productos', 'productos', 'productos', 'DD', NULL, NULL),
(5, 'exportacion', 'exportacion', 'exportacion', 'EE', NULL, NULL),
(6, 'calidad', 'calidad', 'calidad', 'FF', NULL, NULL),
(7, 'registro', 'registro', 'registro', 'FF', NULL, NULL),
(8, 'buscar', 'buscar', 'buscar', 'HH', NULL, NULL),
(9, 'catalogo', 'catalogo', 'catalogo', 'HH', NULL, NULL),
(10, 'carrito', 'carrito', 'carrito', 'II', NULL, NULL),
(11, 'listadeprecios', 'listadeprecios', 'listadeprecios', 'II', NULL, NULL),
(12, 'privatezone', 'privatezone', 'privatezone', 'JJ', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(170, '2014_10_12_100000_create_password_resets_table', 1),
(171, '2018_12_01_100000_create_datos_table', 1),
(172, '2018_12_02_100000_create_logos_table', 1),
(173, '2018_12_03_100000_create_contenidos_table', 1),
(174, '2018_12_04_100000_create_sliders_table', 1),
(175, '2018_12_05_100000_create_metadatos_table', 1),
(176, '2018_12_06_100000_create_redes_table', 1),
(192, '2018_12_04_134644_create_destacados_table', 2),
(193, '2018_12_04_134734_create_actividades_table', 2),
(194, '2018_12_04_134748_create_banners_table', 2),
(195, '2018_12_04_134832_create_lineatiempos_table', 2),
(196, '2018_12_04_135518_create_politicas_table', 2),
(197, '2018_12_04_135548_create_certificados_table', 2),
(198, '2018_12_04_135622_create_calidades_table', 2),
(199, '2018_12_08_000000_create_iconos_table', 3),
(210, '2018_12_03_134938_create_pedidos_table', 4),
(211, '2018_12_04_134938_create_categorias_table', 4),
(212, '2018_12_04_134956_create_productos_table', 4),
(213, '2018_12_04_135011_create_presentaciones_table', 4),
(214, '2014_10_12_000000_create_users_table', 5),
(215, '2014_10_12_000000_create_clients_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iva` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_usuario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_presentacion`
--

CREATE TABLE `pedido_presentacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iva` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pedido` int(10) UNSIGNED DEFAULT NULL,
  `id_presentacion` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE `politicas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentaciones`
--

CREATE TABLE `presentaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medida_a` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medida_b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medida_c` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medida_d` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medida_e` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medida_f` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medida_g` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marca` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dureza` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terminacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ficha` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_a` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_c` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_d` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_e` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_f` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidadxcaja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_producto` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `presentaciones`
--

INSERT INTO `presentaciones` (`id`, `codigo`, `titulo_es`, `titulo_en`, `titulo_br`, `oem`, `tipo`, `medida_a`, `medida_b`, `medida_c`, `medida_d`, `medida_e`, `medida_f`, `medida_g`, `marca`, `modelo`, `dureza`, `terminacion`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `ficha`, `orden`, `precio`, `precio_a`, `precio_b`, `precio_c`, `precio_d`, `precio_e`, `precio_f`, `cantidadxcaja`, `id_producto`, `created_at`, `updated_at`) VALUES
(1, 'P-12-002', 'Tuerca RDA. Cónica - GM', 'RDA nut. Conic - GM', 'Porca RDA. Cônico - GM', NULL, NULL, '7/16 UNF', '19', '14', NULL, '7/16 NF', NULL, NULL, NULL, NULL, NULL, 'ZN AZUL', 'presentaciones__i1.jpg', NULL, NULL, NULL, NULL, 'AA', '2', '20.1', '20.2', '20.3', '20.4', '20.5', '20.6', '24', 2, '2018-12-10 21:31:52', '2018-12-27 01:29:15'),
(2, 'P-12-004', 'Tuerca RDA. Cónica - Ford', 'RDA nut. Conic - Ford', 'Porca RDA. Cônico - Ford', NULL, NULL, '1/2 UNF', '20.6', '16', NULL, NULL, NULL, NULL, 'Ford', NULL, NULL, 'AZ AMARILLA', NULL, NULL, NULL, NULL, 'fichas__plano_producot.jpg', 'BB', '2', '15.1', '15.2', '15.3', '15.4', '15.5', '15.6', '10', 2, '2018-12-13 19:54:12', '2018-12-27 01:28:46'),
(3, 'P-12-005', 'Producto De Prueba', 'Product of test', 'Product de poba', NULL, NULL, '1/2 UNF', '20.6', '16', NULL, NULL, NULL, NULL, 'Ford', 'Ford', NULL, 'AZ AMARILLA', NULL, NULL, NULL, NULL, 'fichas__plano_producot.jpg', 'BB', '2', NULL, NULL, NULL, NULL, NULL, NULL, '10', 2, '2018-12-13 19:54:12', '2018-12-21 19:19:58'),
(4, 'P-01-058', 'BULÓN DE RUEDA CHEVROLET C-30 9/16\" X48 NF', 'WHEEL BOLT CHEVROLET C-30 9/16 \"X48 NF', 'PARAFUSO DE RODAS CHEVROLET C-30 9/16 \"X48 NF', '', '2', '48 mm', '23 mm', '18 mm', '10 mm', '9/16', '15.9 mm', '', 'Chevrolet', 'C-30', 'G 8', 'Negro/Black', '', '', '', '', '', 'ORD01', 'precio', '100', '100.2', '100.3', '100.4', '100.5', '100.7', '12', 1, NULL, NULL),
(5, 'P-01-062', 'BULÓN CHEVROLET ASTRO / FORD MUSTANG 1/2X1 1/2 NF', 'CHEVROLET BOLT ASTRO / FORD MUSTANG 1 / 2X1 1/2 NF', 'PARAFUSO CHEVROLET ASTRO / FORD MUSTANG 1 / 2X1 1/2 NF', '1486230', '1', '38 mm', '26 mm', '10 mm', '7.5 mm', '1/2', '15.8 mm', '', 'Cadillac, Ford, Chevrolet-GM', 'Cadillac: Deville (71-60), Eldorado (66-60). Ford: Mustang, Pinto (80-74). Thunderbird, ZX2 (03-98). Chevrolet-GM: Astro, Safari Van', 'G 8', 'Negro/Black', 'P-01-062_1.jpg', '', '', '', '', 'ORD02', 'precio', '100', '100.2', '100.3', '100.4', '100.5', '100.7', '12', 1, NULL, NULL),
(6, 'P-01-064', 'BULON DE RUEDA CAMARO / CHEVY II / IMPALA / CHEROCKEE 7/16\" X 1 1/2\" NF ', 'WHEEL BULK CAMARO / CHEVY II / IMPALA / CHEROCKEE 7/16 \"X 1 1/2\" NF', 'RODA GRANUL CAMARO / CHEVY II / IMPALA / CHEROCKEE 7/16 \"X 1 1/2\" NF', '9590259/71', '2', '38 mm', '27 mm', '8.5 mm', '3.5 mm', '7/16', '11.8 mm', '', 'Buick, Jeep, Oldsmobile, Pontiac', '\"Buick: Century (1981-73), LeSabre (1985-71),  Regal (1981-73),  Skyhawk (1980-75). Cadillac: Seville 1976. Chevrolet: Camaro, Caprice  (1990-66), Chevelle (73-64), El Camino (81-64), Chevy ll (66-64), Corvette (1982-61),  Impala, Impala SS, Kingswood, Townsman (85-60) 1985-77 Trasero 1970-1960 Tras y Del. , Malibu (81-73), Monza (80-75), Vega (77-71), Nova (1979-62). Jeep: Cherokee 1983-74 Tras. Grand Wagoneer (1991-84), J-Series, Pickup, Gladiator (1988-74). Oldsmobile: Calais, Cutlass Calais (1981-78), Cutlass (1983-73), Delta 88, Delmont 88, Dynamic 88, EightyEight, Fiesta, Holiday, Royale, Super 88. Pontiac:  Bonneville (81-77), Firebird, Firefly, Grand Am, Grand LeMans, Grand Prix, LeMans, Parisienne, Phoenix, Sunbird, Sunfire (80-76). Chevrolet-GMC Truck: Blazer Tras. (1991-71), C, R 10/15/1500 Pickup/Suburban (1970-67), Caballero Tras. (1981-76), Jimmy (1991-81), K, V10/15/1500 Pickup/Suburban (1991-88)\"', 'G 8', 'Negro/Black', 'P-01-064_1.jpg', '', '', '', '', 'ORD03', 'precio', '100', '100.2', '100.3', '100.4', '100.5', '100.7', '12', 1, NULL, NULL),
(7, 'P-01-066', 'BULON DE RUEDA PICK UP / SUBURBAN 9/16\" X 3 NF', 'WHEEL BOLT PICK UP / SUBURBAN 9/16 \"X 3 NF', 'PARAFUSO DE RODAS PICK UP / SUBURBAN 9/16 \"X 3 NF', '3988538', '2', '75 mm', '33 mm', '27 mm', '22 mm', '9/16', '16 mm', '', 'Chevrolet', 'C, R20/25/2500 Pickup/Suburban C, R30/35/3500 Pickup, G30/35 Van, K, V20/25/2500 Pickup/Suburban, K, V30/35/3500 Pickup, P30/35 Forward Control', 'G 8', 'Negro/Black', 'P-01-066_1.jpg', '', '', '', '', 'ORD04', 'precio', '100', '100.2', '100.3', '100.4', '100.5', '100.7', '12', 1, NULL, NULL),
(8, 'P-01-068', 'BULON DE RUEDA PICK UP CR 30/35/3500 9/16\"X3 9/16\" NF', 'WHEEL BOLT PICK UP CR 30/35/3500 9/16 \"X3 9/16\" NF', 'PARAFUSO DE RODA ESCOLHA CR 30/35/3500 9/16 \"X3 9/16\" NF', '355815', '2', '90 mm', '45 mm', '33 mm', '22 mm', '9/16', '16 mm', '', 'Chevrolet', 'C, R 30/35/3500 Pickup, 630-35 1996-75, K, V30/35/3500 1988-79, P 30/35 Forward Control', 'G 8', 'Negro/Black', 'P-01-068_1.jpg', '', '', '', '', 'ORD05', 'precio', '100', '100.2', '100.3', '100.4', '100.5', '100.7', '12', 1, NULL, NULL),
(9, 'P-01-070', 'BULON DE RUEDA CHEVROLET CRUZE / S-10 / BLAZER / TRADEBLAZER', 'WHEEL BOLT CHEVROLET CRUZE / S-10 / BLAZER / TRADEBLAZER', 'PARAFUSO DE RODAS CHEVROLET CRUZE / S-10 / BLAZER / TRADEBLAZER', '9590475/76', '2', '43 mm', '32.5 mm', '9.5 mm', '6 mm', '12 x 1.5', '13 mm', '', 'Buick, Cadillac, Honda,Isuzu, Lincoln, Mazda:Mercury, Merkur, Oldsmobile, Pontiac, Saab, Saturn, AM General,Isuzu Truck', 'Buick: Allure, Century, Electra, Electra 225, LaCrosse, LeSabre (05-71), Lucerne (11-06), Rendezvous (07-02), Rainer (07-04), Terraza (07-05), Park Avenue (05-91), Reatta (91-88), Regal (15-11) (04-82), Riviera (99-71), Roadmaster (96-91), Somerset (87-85), Skyhawk (89-75), Skylark, Special (98-71), Verano (2012). Cadillac: Allanté (93-87), Fleetwood FWD (93-85), Cimarron, CTS (09-06), DTS, SRX (15-04), STS (11-06), XLR (09-04), XTS (15-13), Deville, Concours (05-85), Eldorado (02-79), Fleetwood RWD, Seville. Chrevrolet: Beretta (96-87), Cavalier (05-00) (99-82 see below) , Corsica (96-87 w/ steel wheels - for aluminum wheels - see below), Camaro, Caprice (15-11), Caprice (96-66), Cavalier (99-88), Corsica (93-89 w/ Aluminum wheels), Cavalier (87-82), Celebrity (90-82), Chevelle (86-82), Citation (85-80), El Camino (87-82), Cobalt (10-05), HHR, Equinox (06-05), Corvette, Cruze, Trax (15-13), Impala, Impala SS, Kingswood, Townsman (08-00), Lumina (01-95), MonteCarlo (08-95), Malibu (12-97),Malibu Classic (05-04), Malibu Maxx (08-04), Venture (05-97), Impala, Impala SS, Kingswood, Townsman (96-94), Lumina (94-90), MonteCarlo (88-82), Malibu (83-82), Lumina APV, Uplander, Volt, Caballero, Canyon (2015, 12-09), Colorado (2015, 12-04), Equinox (15-05), Envoy (09-02), LLV Postal Vehicle, S10/15 Blazer (04-82), TrailBlazer, Jimmy, Pickup, Sonoma (04-91), Syclone, Typhoon, Venture Van (05-97). Honda: Passport. Isuzu: Ascender. Lincoln: LS. Mazda: 5, MX5 Miata (15-06), 6, CX7 (12-07), CX9 (15-07). Mercury: Capri. Merkur: Scorpio, XRATi. Oldsmobile: 98, Achieva (98-92), Alero (04-99), Aurora (03-95), Bravada (04-91), Calais, Cutlass Calais, Ciera, Cutlass Ciera (1996-82), Custom Cruiser, Cutlass, Cutlass Supreme, Delta 88, Delmont 88, Dynamic 88, EightyEight, Fiesta, Holiday, Royale, Super 88, Firenza, Intrigue, Intrigue, LSS, Omega 1984-80, Silhouette (1990-2004), Toronado (1992-1966). Pontiac: 6000 (91-82), Bonneville (05-77), Catalina, Executive, Fiero (88-84), Aztek, Firebird, Firefly (00-95), G3 (10-09), G5 (10-07), G6 (10-05), Montana SV6 (10-05), Pursuit (06-05), Solstice (09-06), Torrent (09-06), Grand Am, Grand Prix, J2000, Montana (2004-99), Phoenix (1984-77), Sunbird, Sunfire (05-95), Trans Sport. Saab: 9-7X. Saturn: Astra (09-08), Aura (09-07), Relay (07-05), Ion (07-02), Vue (10-02), Sky (10-07), L, SC, SL, SW Series (04-91), 825 (88-87), 827 (91-89). AM General: Hummer H3, H3T (10-09). Isuzu Truck: Amigo, Pickup, Ascender (08-06), I-290 (08-06), I-350 (06), I-370 (08-07), Hombre (00-96), Rodeo, Rodeo Sport (04-98), ', '10,9', 'Negro/Black', 'P-01-070_1.jpg', '', '', '', '', 'ORD06', 'precio', '100', '100.2', '100.3', '100.4', '100.5', '100.7', '12', 1, NULL, NULL),
(10, 'P-01-072', 'BULÓN DE RUEDA CHEVROLET SAVANA 14 X 49 P 1.50', 'WHEEL BOLT CHEVROLET SAVANA 14 X 49 P 1.50', 'PARAFUSO DE RODAS CHEVROLET SAVANA 14 X 49 P 1.50', '12338057', '2', '49 33', '33.5 mm', '14.5 mm', '8 mm', '14 X 1.5', '15.8 mm', '', 'Chebrolet', 'Chevrolet – GMC: C, R10/15/1500 Pickup/suburban 1999-88, C, R20/25/2500 Pickup/Suburban 2008-88, C, R30/35/3500 Pickup 2001-91, Express 2500 (2002-96), K, V10/15/1500 Pickup/Suburban 1999-85, K, V20/25/2500 Pickup/Suburban 2002-88, Savana 2500 2002-96, Savana 3500 2002-96', '10,9', 'Negro/Black', 'P-01-072_1.jpg', '', '', '', '', 'ORD07', 'precio', '100', '100.2', '100.3', '100.4', '100.5', '100.7', '12', 1, NULL, NULL),
(11, 'P-01-074', 'BULON DE RUEDA BLAZER TRASERO 14 X 43 P 1.50', 'WHEEL BOLT REAR BLAZER 14 X 43 P 1.50', 'PARAFUSO DE RODA BORRACHA TRASEIRA 14 X 43 P 1.50', '12338040', '2', '43 mm', '37 mm', '6.5 mm', '3.5 mm', '14 X 1.5', '15.8 mm', '', '', 'Chrevrolet: Blazer Tras. (1994-71), C, R 10/15/1500 Pickup/Suburban (1/2 ton 2WD), Express 1500, K, V10/15/1500 Pickup/Suburban ½ Ton 4WD, K, V20/25/2500 Pickup/Suburban (3/4 Ton 4WD), Tahoe, Yukon (incl. Denali). Trasero', '10,9', 'Negro/Black', 'P-01-074_1.jpg', '', '', '', '', 'ORD08', 'precio', '100', '100.2', '100.3', '100.4', '100.5', '100.7', '12', 1, NULL, NULL),
(12, 'P-01-076', 'BULÓN DE RUEDA BLAZER / S-10 14X43 P 1,50', 'BLAZ DE RUEDA BLAZER / S-10 14X43 P 1.50', 'BLAZ DE RUEDA BLAZER / S-10 14X43 P 1,50', '15589426', '2', '43 mm', '25 mm', '16.5 mm', '8 mm', '14 X 1.5', '15.8  mm', '', '', 'Chevrolet: R 10/15/1500 Pickup, Suburban 1999-96, Savanna 1500, Sonoma (04-03), S10, Blazer (2002-96), Savana 2800 (2002-96), Tahoe-Yukon (1999-95)C', '10,9', 'Negro/Black', 'P-01-076_1.jpg', '', '', '', '', 'ORD09', 'precio', '100', '100.2', '100.3', '100.4', '100.5', '100.7', '12', 1, NULL, NULL),
(13, 'P-01-086', 'BULÓN DE RUEDA R30/25/3500 9/16\"X2 1/8\" NF', 'WHEEL BOLT R30 / 25/3500 9/16 \"X2 1/8\" NF', 'PARAFUSO DE RODA R30 / 25/3500 9/16 \"X2 1/8\" NF', '334388', '2', '54 mm', '41 mm', '12.5 mm', '7 mm', '9/16', '16.1 mm', '', 'Chevrolet-GMC', 'Chevrolet-GMC: C, R30/35/3500 Pickup Delantero (1991-74), G30/35 Van Del (1996-75), P30/35 Forward Control 1 Ton Chassis Del. (1999-75), ', 'G 8', 'Negro/Black', 'P-01-086_1.jpg', '', '', '', '', 'ORD10', 'precio', '100', '100.2', '100.3', '100.4', '100.5', '100.7', '12', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plano` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ficha` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_categoria` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `titulo_es`, `titulo_en`, `titulo_br`, `texto_es`, `texto_en`, `texto_br`, `plano`, `ficha`, `orden`, `id_categoria`, `created_at`, `updated_at`) VALUES
(1, 'productos__p-01-062_1.jpg', 'Bulones para rueda y maza automotor', 'Bolts for wheel and self-propelled hammer', 'Parafusos para rodas e martelos automotores', NULL, NULL, NULL, NULL, NULL, 'AA', 2, '2018-12-10 20:22:14', '2019-01-03 19:42:47'),
(2, 'productos__p2.jpg', 'Tuercas cónicas para rueda', 'Tapered wheel nuts', 'Porcas de roda cônica', '<p>L&iacute;nea de tuercas c&oacute;nicas y hexagonales realizadas con tecnolog&iacute;a especializada para garantizas la mejor calidad.</p>', '<p>Line of conical and hexagonal nuts made with specialized technology to guarantee the best quality.</p>', '<p>Linha de porcas c&ocirc;nicas e hexagonais feitas com tecnologia especializada para garantir a melhor qualidade.</p>', 'planos__plano_producot.jpg', NULL, 'BB', 2, '2018-12-10 20:22:29', '2018-12-21 19:29:09'),
(3, 'productos__p3.jpg', 'Tuercas para rueda cromadas o de lujo', 'Chrome or luxury wheel nuts', 'Porcas de rodas cromadas ou de luxo', NULL, NULL, NULL, NULL, NULL, 'CC', 2, '2018-12-10 20:22:38', '2018-12-21 19:29:46'),
(4, 'productos__p4.jpg', 'Línea pesada: bulones para ruedas, tuercas, arandelas y conjuntos para camión', 'Heavy line: bolts for wheels, nuts, washers and sets for truck', 'Linha pesada: parafusos para rodas, porcas, arruelas e conjuntos para caminhões', NULL, NULL, NULL, NULL, NULL, 'DD', 2, '2018-12-10 20:22:47', '2018-12-21 19:30:01'),
(5, 'productos__copyright.png', 'Espárragos', NULL, NULL, '<p>Esp&aacute;rragos</p>', NULL, NULL, NULL, NULL, 'AA', 1, '2018-12-27 01:07:14', '2018-12-27 01:07:14'),
(6, 'productos__copyright.png', 'Prueba', 'Test', 'Poba', '<p>Prueba</p>', '<p>Test</p>', '<p>Poba</p>', NULL, NULL, 'AA', 5, '2018-12-27 20:13:12', '2018-12-27 20:13:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(10) UNSIGNED NOT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `seccion`, `titulo`, `icono`, `imagen`, `link`, `orden`, `created_at`, `updated_at`) VALUES
(4, NULL, 'Facebook', 'fab fa-facebook', NULL, 'https://www.facebook.com/tallerbaigorrias.a/?ref=br_rs', 'AA', '2018-12-11 16:25:14', '2018-12-21 14:12:11'),
(5, NULL, 'Youtube', 'fab fa-youtube', NULL, 'https://www.youtube.com/channel/UC9IrWVsDusnvCiywakhwqgg', 'BB', '2018-12-11 16:25:58', '2018-12-21 14:12:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo_br` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `imagen`, `titulo_es`, `subtitulo_es`, `titulo_en`, `subtitulo_en`, `titulo_br`, `subtitulo_br`, `orden`, `seccion`, `created_at`, `updated_at`) VALUES
(1, 'sliders___home.jpg', '<p>SOLUCIONES EN FIJACI&Oacute;N&nbsp;</p>', '<p>Tecnolog&iacute;a y precisi&oacute;n fabricaci&oacute;n de elementos de sujeci&oacute;n</p>', '<p>FIXING SOLUTIONS</p>', '<p>Technology and precision fabrication of fasteners</p>', '<p>SOLU&Ccedil;&Otilde;ES DE FIXA&Ccedil;&Atilde;O</p>', '<p>Tecnologia e fabrica&ccedil;&atilde;o de precis&atilde;o de fixadores</p>', 'AA', 'home', NULL, '2018-12-21 17:19:39'),
(2, 'sliders__empresa.jpg', '<p>58 A&Ntilde;OS DE TRAYECTORIA</p>', '<p>Industria Argentina</p>', '<p>titulo english</p>', '<p>subtitulo english</p>', '<p>titulo portugues</p>', '<p>subtitulo portugues</p>', 'AA', 'empresa', NULL, '2018-12-04 16:38:19'),
(3, 'sliders__baigorria-slider-01.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'bb', 'home', '2018-12-21 16:12:27', '2018-12-21 16:12:27'),
(4, 'sliders__baigorria-slider-02.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'cc', 'home', '2018-12-21 16:32:59', '2018-12-21 16:32:59'),
(5, 'sliders__baigorria-slider-03.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'cc', 'home', '2018-12-21 16:43:27', '2018-12-21 16:43:27'),
(6, 'sliders__baigorria-slider-04.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'dd', 'home', '2018-12-21 16:49:24', '2018-12-21 16:49:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razon_social` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidad` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido_mostrar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_bulones` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_esparragos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_especial` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `habilitado` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `first_name`, `last_name`, `razon_social`, `phone`, `address`, `localidad`, `email`, `role`, `contenido_mostrar`, `precio_bulones`, `precio_esparragos`, `precio_especial`, `habilitado`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'carlos@carlos.com', 'Carlos', 'Soporte', 'razon social', '5183597343', 'Osole', 'localidad', NULL, 'cliente', 'AA', 'b', 'a', 'c', 'on', '$2y$10$LXyk8SS8/EZ8L13yHbqoP.3Urw6LTz7SXQooTIrlbEHbnP.sJoHGG', 'azD57w9kTxzdqlEjLocgKu8nkusbwybeI0cQx8V5FfKrjMdGNqSuTXHz7PDB', '2018-12-14 20:47:17', '2019-01-02 15:45:12'),
(9, 'pablo', 'Pablo', 'Cabañuz', NULL, '1535645453', 'Osole', NULL, 'soporte@osole.es', 'admin', NULL, NULL, NULL, NULL, NULL, '$2y$10$7lmZIcGteQg9tEA5bYh7q.DTxmihmBmyH6mceaEhA74coFmttMXTK', 'gfZkCmUqVKcWv8gMYXVFR7EvuavLWKKvk2ylwEqkTFdqIcSUa5DNNgfjObfh', '2018-12-20 06:37:49', '2018-12-20 06:37:49'),
(10, 'pedro@gmail.com', 'Pedro', 'Perez', 'Osole', '1154545252', 'Argentina', 'Buenos Aires', NULL, 'cliente', 'BB', 'b', 'a', 'c', 'on', '$2y$10$pSZSMLsgxP6Ltg5gmijOQOYqF73JdydtiYk9oy5kB6BeGpTcBkNq.', 'f3b990mWTLfHRCZXBop8qWsfWGXIJKdoURji9cqrfPqFQSGtujlK9K8xHY7j', '2019-01-02 22:24:07', '2019-01-02 22:25:45'),
(11, 'prueba', 'prueba', NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, '$2y$10$Bm8tr3YoQlXY9W0l9rdDL..MGtqnCDlOaqa29K0u8L8hMFdQuJU6K', 'CQwrWTvqUAaHyWepjC6azhBeCjPLlLAHOBxuNuPYbew8EoCoHxXqeQDKkgWE', '2019-01-07 18:03:04', '2019-01-07 18:03:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `users` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `country` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `visitors`
--

INSERT INTO `visitors` (`id`, `users`, `country`, `created_at`, `updated_at`) VALUES
(1, '0', 'Bhutan', NULL, NULL),
(2, '0', 'Democratic Republic of the Congo', NULL, NULL),
(3, '0', 'Liechtenstein', NULL, NULL),
(4, '0', 'Maldives', NULL, NULL),
(5, '0', 'Sudan', NULL, NULL),
(6, '0', 'Zimbabwe', NULL, NULL),
(7, '0', 'Mauritania', NULL, NULL),
(8, '0', 'Mozambique', NULL, NULL),
(9, '0', 'Nigeria', NULL, NULL),
(10, '0', 'Swaziland', NULL, NULL),
(11, '0', 'Tanzania', NULL, NULL),
(12, '0', 'Iraq', NULL, NULL),
(13, '0', 'Guyana', NULL, NULL),
(14, '0', 'Namibia', NULL, NULL),
(15, '0', 'Senegal', NULL, NULL),
(16, '0', 'Turkmenistan', NULL, NULL),
(17, '0', 'Afghanistan', NULL, NULL),
(18, '0', 'Andorra', NULL, NULL),
(19, '0', 'Fiji', NULL, NULL),
(20, '0', 'Gabon', NULL, NULL),
(21, '0', 'Uzbekistan', NULL, NULL),
(22, '0', 'Cameroon', NULL, NULL),
(23, '0', 'Cuba', NULL, NULL),
(24, '0', 'Faroe Islands', NULL, NULL),
(25, '0', 'El Salvador', NULL, NULL),
(26, '0', 'Caribbean', NULL, NULL),
(27, '0', 'Ethiopia', NULL, NULL),
(28, '0', 'Mongolia', NULL, NULL),
(29, '0', 'Puerto Rico', NULL, NULL),
(30, '0', 'Samoa', NULL, NULL),
(31, '0', 'Myanmar', NULL, NULL),
(32, '0', 'Nicaragua', NULL, NULL),
(33, '0', 'Seychelles', NULL, NULL),
(34, '0', 'Tajikistan', NULL, NULL),
(35, '0', 'Dominican Republic', NULL, NULL),
(36, '0', 'Guinea', NULL, NULL),
(37, '0', 'Barbados', NULL, NULL),
(38, '0', 'CI', NULL, NULL),
(39, '0', 'Laos', NULL, NULL),
(40, '0', 'Libya', NULL, NULL),
(41, '0', 'Panama', NULL, NULL),
(42, '0', 'Bahrain', NULL, NULL),
(43, '0', 'Benin', NULL, NULL),
(44, '0', 'Ghana', NULL, NULL),
(45, '0', 'Haiti', NULL, NULL),
(46, '0', 'Montenegro', NULL, NULL),
(47, '0', 'Somalia', NULL, NULL),
(48, '0', 'Syria', NULL, NULL),
(49, '0', 'Ecuador', NULL, NULL),
(50, '0', 'Honduras', NULL, NULL),
(51, '0', 'Madagascar', NULL, NULL),
(52, '0', 'Papua New Guinea', NULL, NULL),
(53, '0', 'Tunisia', NULL, NULL),
(54, '0', 'Angola', NULL, NULL),
(55, '0', 'Botswana', NULL, NULL),
(56, '0', 'Cyprus', NULL, NULL),
(57, '0', 'Algeria', NULL, NULL),
(58, '0', 'Bahamas', NULL, NULL),
(59, '0', 'New Caledonia', NULL, NULL),
(60, '0', 'Uganda', NULL, NULL),
(61, '0', 'Yemen', NULL, NULL),
(62, '0', 'Zambia', NULL, NULL),
(63, '0', 'Antarctica', NULL, NULL),
(64, '0', 'Paraguay', NULL, NULL),
(65, '0', 'Jamaica', NULL, NULL),
(66, '0', 'Palestine', NULL, NULL),
(67, '0', 'Bolivia', NULL, NULL),
(68, '0', 'Bosnia and Herzegovina', NULL, NULL),
(69, '0', 'Vietnam', NULL, NULL),
(70, '0', 'Kenya', NULL, NULL),
(71, '0', 'Luxembourg', NULL, NULL),
(72, '0', 'Niger', NULL, NULL),
(73, '0', 'Kuwait', NULL, NULL),
(74, '0', 'Hawaii', NULL, NULL),
(75, '0', 'Scotland', NULL, NULL),
(76, '0', 'Cambodia', NULL, NULL),
(77, '0', 'Uruguay', NULL, NULL),
(78, '0', 'Kyrgyzstan', NULL, NULL),
(79, '0', 'Saudi Arabia', NULL, NULL),
(80, '0', 'Indonesia', NULL, NULL),
(81, '0', 'Azerbaijan', NULL, NULL),
(82, '0', 'United Arab Emirates', NULL, NULL),
(83, '0', 'Mauritius', NULL, NULL),
(84, '0', 'Morocco', NULL, NULL),
(85, '0', 'Albania', NULL, NULL),
(86, '0', 'South Korea', NULL, NULL),
(87, '0', 'Kazakhstan', NULL, NULL),
(88, '0', 'Macedonia', NULL, NULL),
(89, '0', 'Venezuela', NULL, NULL),
(90, '0', 'Taiwan', NULL, NULL),
(91, '0', 'Qatar', NULL, NULL),
(92, '0', 'Jordan', NULL, NULL),
(93, '0', 'Iceland', NULL, NULL),
(94, '0', 'Guatemala', NULL, NULL),
(95, '0', 'Costa Rica', NULL, NULL),
(96, '0', 'Hong Kong', NULL, NULL),
(97, '0', 'San Marino', NULL, NULL),
(98, '0', 'Colombia', NULL, NULL),
(99, '0', 'Moldova', NULL, NULL),
(100, '0', 'Armenia', NULL, NULL),
(101, '0', 'Malta', NULL, NULL),
(102, '0', 'Nepal', NULL, NULL),
(103, '0', 'Lebanon', NULL, NULL),
(104, '0', 'Malaysia', NULL, NULL),
(105, '0', 'Serbia', NULL, NULL),
(106, '0', 'Peru', NULL, NULL),
(107, '0', 'Trinidad and Tobago', NULL, NULL),
(108, '0', 'Lithuania', NULL, NULL),
(109, '0', 'Estonia', NULL, NULL),
(110, '0', 'Georgia', NULL, NULL),
(111, '0', 'Iran', NULL, NULL),
(112, '0', 'Chile', NULL, NULL),
(113, '0', 'Latvia', NULL, NULL),
(114, '0', 'Thailand', NULL, NULL),
(115, '0', 'Egypt', NULL, NULL),
(116, '0', 'Slovenia', NULL, NULL),
(117, '0', 'Mexico', NULL, NULL),
(118, '0', 'Belarus', NULL, NULL),
(119, '0', 'Slovakia', NULL, NULL),
(120, '0', 'Sri Lanka', NULL, NULL),
(121, '0', 'Croatia', NULL, NULL),
(122, '0', 'Philippines', NULL, NULL),
(123, '0', 'Bangladesh', NULL, NULL),
(124, '0', 'Turkey', NULL, NULL),
(125, '0', 'Romania', NULL, NULL),
(126, '0', 'Italy', NULL, NULL),
(127, '0', 'South Africa', NULL, NULL),
(128, '0', 'Hungary', NULL, NULL),
(129, '0', 'Pakistan', NULL, NULL),
(130, '0', 'Portugal', NULL, NULL),
(131, '0', 'Ukraine', NULL, NULL),
(132, '0', 'Greece', NULL, NULL),
(133, '0', 'Oman', NULL, NULL),
(134, '10', 'Argentina', NULL, NULL),
(135, '0', 'Singapore', NULL, NULL),
(136, '0', 'Bulgaria', NULL, NULL),
(137, '0', 'Japan', NULL, NULL),
(138, '0', 'Czech Republic ', NULL, NULL),
(139, '0', 'Ireland', NULL, NULL),
(140, '0', 'China', NULL, NULL),
(141, '0', 'Finland', NULL, NULL),
(142, '2', 'Brazil', NULL, NULL),
(143, '0', 'Norway', NULL, NULL),
(144, '0', 'Austria', NULL, NULL),
(145, '0', 'Denmark', NULL, NULL),
(146, '0', 'Belgium', NULL, NULL),
(147, '0', 'New Zealand', NULL, NULL),
(148, '0', 'Spain', NULL, NULL),
(149, '0', 'Switzerland', NULL, NULL),
(150, '0', 'Russia', NULL, NULL),
(151, '0', 'Poland', NULL, NULL),
(152, '0', 'Israel', NULL, NULL),
(153, '0', 'Sweden', NULL, NULL),
(154, '0', 'Netherlands', NULL, NULL),
(155, '0', 'France', NULL, NULL),
(156, '0', 'Australia', NULL, NULL),
(157, '0', 'Canada', NULL, NULL),
(158, '0', 'India', NULL, NULL),
(159, '0', 'Germany', NULL, NULL),
(160, '0', 'United Kingdom', NULL, NULL),
(161, '0', 'United States', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calidades`
--
ALTER TABLE `calidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `iconos`
--
ALTER TABLE `iconos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineatiempos`
--
ALTER TABLE `lineatiempos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido_presentacion`
--
ALTER TABLE `pedido_presentacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_presentacion_id_pedido_foreign` (`id_pedido`),
  ADD KEY `pedido_presentacion_id_presentacion_foreign` (`id_presentacion`);

--
-- Indices de la tabla `politicas`
--
ALTER TABLE `politicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `presentaciones`
--
ALTER TABLE `presentaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presentaciones_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id_categoria_foreign` (`id_categoria`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `calidades`
--
ALTER TABLE `calidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `certificados`
--
ALTER TABLE `certificados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `iconos`
--
ALTER TABLE `iconos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lineatiempos`
--
ALTER TABLE `lineatiempos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido_presentacion`
--
ALTER TABLE `pedido_presentacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `politicas`
--
ALTER TABLE `politicas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `presentaciones`
--
ALTER TABLE `presentaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido_presentacion`
--
ALTER TABLE `pedido_presentacion`
  ADD CONSTRAINT `pedido_presentacion_id_pedido_foreign` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedido_presentacion_id_presentacion_foreign` FOREIGN KEY (`id_presentacion`) REFERENCES `presentaciones` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `presentaciones`
--
ALTER TABLE `presentaciones`
  ADD CONSTRAINT `presentaciones_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
