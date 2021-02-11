-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2021 a las 21:33:14
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mcdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Frec_Max_MHZ` int(11) NOT NULL,
  `Num_Pines` int(11) NOT NULL,
  `Mem_Prog_KB` float NOT NULL,
  `Ram` int(11) NOT NULL,
  `EE_Prom` int(11) NOT NULL,
  `ADC` int(11) NOT NULL,
  `UART` int(11) NOT NULL,
  `I2C` int(11) NOT NULL,
  `Tmr_8_Bits` int(11) NOT NULL,
  `Tmr_16_Bits` int(11) NOT NULL,
  `Tmr_32_Bits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Marca`, `Modelo`, `Frec_Max_MHZ`, `Num_Pines`, `Mem_Prog_KB`, `Ram`, `EE_Prom`, `ADC`, `UART`, `I2C`, `Tmr_8_Bits`, `Tmr_16_Bits`, `Tmr_32_Bits`) VALUES
(28, 'Microchip', 'PIC16F84', 20, 18, 2, 68, 224, 0, 0, 0, 1, 0, 0),
(29, 'Microchip', 'PIC16F628', 20, 18, 4, 64, 128, 0, 1, 1, 2, 1, 0),
(30, 'Microchip', 'PIC16F883', 20, 28, 7, 256, 256, 11, 1, 1, 2, 1, 0),
(31, 'Microchip', 'PIC16F886', 20, 28, 14, 368, 256, 11, 1, 1, 2, 1, 0),
(32, 'Microchip', 'PIC16F887', 20, 40, 14, 368, 256, 14, 1, 1, 2, 1, 0),
(33, 'Microchip', 'PIC18F2520', 40, 28, 32, 1500, 256, 10, 1, 1, 1, 3, 0),
(34, 'Microchip', 'PIC18F4520', 40, 40, 32, 1500, 256, 13, 1, 1, 1, 3, 0),
(35, 'Microchip', 'PIC18F4550', 48, 40, 32, 2000, 256, 10, 1, 1, 1, 3, 0),
(36, 'Microchip', 'PIC24F04KA201', 32, 20, 4, 512, 0, 9, 1, 1, 0, 3, 1),
(37, 'Microchip', 'PIC32MZ2064DAS169', 200, 169, 2048, 640000, 0, 45, 6, 5, 0, 9, 4),
(38, 'Atmel', 'ATmega32', 16, 44, 32, 2048, 1024, 8, 1, 1, 2, 1, 3),
(39, 'Atmel', 'ATmega16', 16, 44, 16, 1024, 512, 8, 1, 1, 2, 1, 0),
(40, 'Atmel', 'ATmega64', 16, 64, 64, 6400, 2048, 8, 2, 1, 2, 2, 0),
(41, 'Atmel', 'ATmega6450A', 20, 100, 64, 6400, 2048, 8, 1, 1, 2, 1, 0),
(42, 'Atmel', 'ATMEGA4808', 20, 32, 48, 6400, 256, 12, 3, 1, 0, 4, 0),
(43, 'Atmel', 'ATMEGA3208', 20, 32, 32, 4096, 256, 12, 3, 1, 0, 4, 0),
(44, 'Atmel', 'ATmega328', 20, 32, 32, 2048, 1024, 8, 1, 1, 2, 1, 0),
(45, 'Atmel', 'ATMEGA1608', 20, 32, 16, 2048, 256, 12, 3, 1, 0, 4, 0),
(46, 'Atmel', 'ATmega8A', 16, 32, 8, 1024, 512, 8, 1, 1, 2, 1, 0),
(47, 'Atmel', 'ATmega48', 20, 32, 8, 512, 256, 8, 1, 1, 2, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`, `admin`, `id`) VALUES
('admin', 'admincsw', 1, 1),
('guest', 'guestcsw', 0, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
