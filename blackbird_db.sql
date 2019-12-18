-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2019 a las 21:34:31
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blackbird_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `cantidad_total` int(10) UNSIGNED DEFAULT NULL,
  `precio_total` decimal(10,0) UNSIGNED DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Especiales'),
(2, 'Clásicas'),
(3, 'De Autor'),
(4, 'Veggies'),
(5, 'Bebidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `pais` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `pais`) VALUES
(1, 'Afganistán'),
(2, 'Albania'),
(3, 'Alemania'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua y Barbuda'),
(7, 'Arabia Saudita'),
(8, 'Argelia'),
(9, 'Argentina'),
(10, 'Armenia'),
(11, 'Australia'),
(12, 'Austria'),
(13, 'Azerbaiyán'),
(14, 'Bahamas'),
(15, 'Bangladés'),
(16, 'Barbados'),
(17, 'Baréin'),
(18, 'Bélgica'),
(19, 'Belice'),
(20, 'Benín'),
(21, 'Bielorrusia'),
(22, 'Birmania'),
(23, 'Bolivia'),
(24, 'Bosnia y Herzegovina'),
(25, 'Botsuana'),
(26, 'Brasil'),
(27, 'Brunéi'),
(28, 'Bulgaria'),
(29, 'Burkina Faso'),
(30, 'Burundi'),
(31, 'Bután'),
(32, 'Cabo Verde'),
(33, 'Camboya'),
(34, 'Camerún'),
(35, 'Canadá'),
(36, 'Catar'),
(37, 'Chad'),
(38, 'Chile'),
(39, 'China'),
(40, 'Chipre'),
(41, 'Ciudad del Vaticano'),
(42, 'Colombia'),
(43, 'Comoras'),
(44, 'Corea del Norte'),
(45, 'Corea del Sur('),
(46, ')Costa de Marfil'),
(47, 'Costa Rica'),
(48, 'Croacia'),
(49, 'Cuba'),
(50, 'Dinamarca'),
(51, 'Dominica'),
(52, 'Ecuador'),
(53, 'Egipto'),
(54, 'El Salvador'),
(55, 'Emiratos Árabes Unidos'),
(56, 'Eritrea'),
(57, 'Eslovaquia'),
(58, 'Eslovenia'),
(59, 'España'),
(60, 'Estados Unidos'),
(61, 'Estonia'),
(62, 'Etiopía'),
(63, 'Filipinas'),
(64, 'Finlandia'),
(65, 'Fiyi'),
(66, 'Francia'),
(67, 'Gabón'),
(68, 'Gambia'),
(69, 'Georgia'),
(70, 'Ghana'),
(71, 'Granada'),
(72, 'Grecia'),
(73, 'Guatemala'),
(74, 'Guyana'),
(75, 'Guinea'),
(76, 'Guinea ecuatorial'),
(77, 'Guinea-Bisáu'),
(78, 'Haití'),
(79, 'Honduras'),
(80, 'Hungría'),
(81, 'India'),
(82, 'Indonesia'),
(83, 'Irak'),
(84, 'Irán'),
(85, 'Irlanda'),
(86, 'Islandia'),
(87, 'Islas Marshall'),
(88, 'Islas Salomón'),
(89, 'Israel'),
(90, 'Italia'),
(91, 'Jamaica'),
(92, 'Japón'),
(93, 'Jordania'),
(94, 'Kazajistán'),
(95, 'Kenia'),
(96, 'Kirguistán'),
(97, 'Kiribati'),
(98, 'Kuwait'),
(99, 'Laos'),
(100, 'Lesoto'),
(101, 'Letonia'),
(102, 'Líbano'),
(103, 'Liberia'),
(104, 'Libia'),
(105, 'Liechtenstein'),
(106, 'Lituania'),
(107, 'Luxemburgo'),
(108, 'Madagascar'),
(109, 'Malasia'),
(110, 'Malaui'),
(111, 'Maldivas'),
(112, 'Malí'),
(113, 'Malta'),
(114, 'Marruecos'),
(115, 'Mauricio'),
(116, 'Mauritania'),
(117, 'México'),
(118, 'Micronesia'),
(119, 'Moldavia'),
(120, 'Mónaco'),
(121, 'Mongolia'),
(122, 'Montenegro'),
(123, 'Mozambique'),
(124, 'Namibia'),
(125, 'Nauru'),
(126, 'Nepal'),
(127, 'Nicaragua'),
(128, 'Níger'),
(129, 'Nigeria'),
(130, 'Noruega'),
(131, 'Nueva Zelanda'),
(132, 'Omán'),
(133, 'Países Bajos'),
(134, 'Pakistán'),
(135, 'Palaos'),
(136, 'Panamá'),
(137, 'Papúa Nueva Guinea'),
(138, 'Paraguay'),
(139, 'Perú'),
(140, 'Polonia'),
(141, 'Portugal'),
(142, 'Reino Unido'),
(143, 'República Centroafricana'),
(144, 'República Checa'),
(145, 'República de Macedonia'),
(146, 'República del Congo'),
(147, 'República Dominicana'),
(148, 'República Sudafricana'),
(149, 'Ruanda'),
(150, 'Rumania'),
(151, 'Rusia'),
(152, 'Samoa'),
(153, 'San Marino'),
(154, 'Santa Lucía'),
(155, 'Santo Tomé y Príncipe'),
(156, 'Senegal'),
(157, 'Serbia'),
(158, 'Seychelles'),
(159, 'Sierra Leona'),
(160, 'Singapur'),
(161, 'Siria'),
(162, 'Somalia'),
(163, 'Sri Lanka'),
(164, 'Suazilandia'),
(165, 'Sudán'),
(166, 'Sudán del Sur'),
(167, 'Suecia'),
(168, 'Suiza'),
(169, 'Surinam'),
(170, 'Tailandia'),
(171, 'Tanzania'),
(172, 'Tayikistán'),
(173, 'Timor Oriental'),
(174, 'Togo'),
(175, 'Tonga'),
(176, 'Trinidad y Tobago'),
(177, 'Túnez'),
(178, 'Turkmenistán'),
(179, 'Turquía'),
(180, 'Tuvalu'),
(181, 'Ucrania'),
(182, 'Uganda'),
(183, 'Uruguay'),
(184, 'Uzbekistán'),
(185, 'Vanuatu'),
(186, 'Venezuela'),
(187, 'Vietnam'),
(188, 'Yemen'),
(189, 'Yibuti'),
(190, 'Zambia'),
(191, 'Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estado_envio` enum('RECHAZADO','ENVIADO','PROCESANDO','FINALIZADO','ACEPTADO') DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `descuento` int(10) UNSIGNED DEFAULT NULL,
  `calorias` int(10) UNSIGNED DEFAULT NULL,
  `historial_ventas` int(10) UNSIGNED DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `ingredientes` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descuento`, `calorias`, `historial_ventas`, `categoria_id`, `imagen`, `ingredientes`) VALUES
(3, 'Veganus', '280', 10, 365, NULL, 4, 'B3GDpi0xA6wHUDivPC0mq3UNn0Mxh5wG27hyZKDD.jpeg', 'QUINOA Y SEMILLAS / HAMBURGUESA DE QUINOA Y SELECCIÓN DE SEMILLAS, CON QUESO A ELECCIÓN LECHUGA Y TOMATES FRESCOS!'),
(4, 'Queso', '290', 5, 465, NULL, 2, 's0U6bRDljMV2mgonIO2bqWVbYuXhSspnQ4Cpk0Q4.jpeg', 'QUESO / HAMBURGUESA CASERA CON QUESO CHEDDAR, LECHUGA, TOMATE Y PEPINOS CASEROS EN VINAGRE.'),
(5, 'Panceta y Cheddar', '385', 10, 800, NULL, 1, 'n2yekkJ5hdDvaKU7662KW7Y6uBF6lRHR3IfzT8SN.jpeg', 'COMPLETA / HAMBURGUESA CASERA CON PANCETA, QUESO CHEDDAR, CEBOLLA CARAMELIZADA, LECHUGA, TOMATE Y PEPINOS.'),
(6, 'De Cordero', '520', 5, 477, NULL, 1, 'jcFtRr3ImuqP3q1Bc3LKibV71i02J3qZHYSMsyru.jpeg', 'CORDERO / HAMBURGUESA DE CORDERO CON CHUTNEY DE PERA CASERO, RÚCULA Y TOMATES SECOS!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'mateo', 'mateo@mateo.com', NULL, '$2y$10$VxqHulSUhmmclwa7quuVsOghRhdftqNveOp.X5wHUByP8/fd.BFhO', NULL, '2019-12-03 03:12:43', '2019-12-03 03:12:43', NULL),
(2, 'juan', 'juan@perez.com', NULL, '$2y$10$woZ6JCOPBVboJFwmGmOL1OYHszKrRaANQVN.k.Xo4ACCHKCrK26Ly', NULL, '2019-12-11 20:53:46', '2019-12-11 20:53:46', NULL),
(3, 'seba', 'seba@seba.com', NULL, '$2y$10$Sx3oWKrLXhEABx6oi4hHbO.f0Jbl1H9SeKAypzpUIAkIHomGgdBi2', 'lJxnAgNzEgUYnyzVdNnRuG2ObhrXQFgSCuAxXL59SS36x0jRqCq0ShblTCey', '2019-12-11 21:45:07', '2019-12-11 21:45:07', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `nacionalidad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `imagen_UNIQUE` (`imagen`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
