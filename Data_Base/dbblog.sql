-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2019 a las 04:34:33
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dtblog`
--

CREATE TABLE `dtblog` (
  `ID_titulo` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descripcion` varchar(140) NOT NULL,
  `contenido` varchar(1100) NOT NULL,
  `enlace` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dtblog`
--

INSERT INTO `dtblog` (`ID_titulo`, `titulo`, `fecha`, `categoria`, `descripcion`, `contenido`, `enlace`) VALUES
(2, 'Activar cuenta de Azure', '2019-03-11', 'Azure', 'Tip & Trick - Activar cuenta con Microsoft Imagine', 'Microsoft Azure for Students Starter está disponible para estudiantes acreditados sin costo, compromiso ni límite de tiempo alguno. Más adelante podrá tener acceso a mas servicios, si lo desea, pero desde hoy mismo puede hospedar sus aplicaciones y sitios web con toda la eficacia de la nube de Microsoft y de forma totalmente gratuita.', 'SHYekINw6fo'),
(3, 'Yammer, Planner y Forms', '2019-03-13', 'Office 365', 'Microsoft Ignite 2016: Novedades en Yammer, Microsoft Forms y Microsoft Planner', 'La semana pasada se celebró el evento Microsoft Ignite 2018 en Orlando, un evento en el que se presentaron multitud de novedades para toda la plataforma de Microsoft 365. Continuando con la serie de post que estamos publicando, vamos a enumerar alguna de las novedades de los servicios de Yammer, Microsoft Forms y Microsoft Planner.', 'fA_BypsPInM'),
(4, 'Introducción a Office 365 Educación', '2019-03-12', 'Office 365', 'Esta introducción a Office 365 nos ayudará a saber cuales son las herramientas, este video tiene contenido del canal de youtube Microsoft', 'Obtener Office 365 de forma gratuita. No se trata de una versión de prueba. Tanto alumnos como profesores cumplen los requisitos para obtener Office 365 Educación, que incluye Word, Excel, PowerPoint, OneNote y, ahora, Microsoft Teams, además de otras herramientas para la clase.', 'uXi2aIaOoto'),
(5, 'SharePoint, Delve, Video, Word, Excel, PowerPoint, OneNote y Sway', '2019-03-04', 'Office 365', 'Si usted ya se encuentra trabajando en su empresa con  Office 365 es importante que conozca y aprenda todas las ventajas que tiene.', 'Office 365 no solo nos permite descargar e instalar las diferentes herramientas que ofrece, sino también permite acceder a ellas vía online (sin necesidad de ser descargadas), agilizando su uso y el poder trabajar con ellas de forma rápida.\r\n\r\nEsto nos permite crear y editar documentos de Word, OneNote, PowerPoint y Excel desde un explorador.\r\n\r\nRealmente puedes estar tranquilo si utilizas Office 365 ya que todas sus herramientas están disponibles con un contrato de nivel de servicio (SLA) con respaldo financiero que garantiza un tiempo de actividad del 99,9 %, es decir, los servicios prácticamente siempre van a estar garantizados y activos', '7hbG4U468EY'),
(6, 'Outlook, Contactos, Calendario y OneDrive', '2019-03-27', 'Office 365', 'Nuevas funciones móviles de Calendario, Correo y Outlook para que seas más productivo', 'El año pasado, lanzamos la versión beta de Outlook.com para ofrecerte una bandeja de entrada más rápida, inteligente y personalizada. Queremos agradecer a los millones de personas que han participado en la versión beta en los últimos seis meses y han proporcionado comentarios valiosos. Para concluir la primera fase de la versión beta, vamos a implementar la nueva experiencia de Correo para todos los usuarios de Outlook.com y a lanzar nuevas experiencias beta en Calendario y Contactos.\r\n\r\nVeamos qué puedes esperar ver en Outlook.com en las próximas semanas.', '4hxxvBtqwac');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dtcomentario`
--

CREATE TABLE `dtcomentario` (
  `ID_comentario` int(11) NOT NULL,
  `titulo` varchar(140) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `respuesta` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dtcomentario`
--

INSERT INTO `dtcomentario` (`ID_comentario`, `titulo`, `comentario`, `respuesta`) VALUES
(1, 'primer titulo', '12213212112', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dtblog`
--
ALTER TABLE `dtblog`
  ADD PRIMARY KEY (`ID_titulo`),
  ADD UNIQUE KEY `ID_titulo` (`ID_titulo`);

--
-- Indices de la tabla `dtcomentario`
--
ALTER TABLE `dtcomentario`
  ADD PRIMARY KEY (`ID_comentario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dtblog`
--
ALTER TABLE `dtblog`
  MODIFY `ID_titulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dtcomentario`
--
ALTER TABLE `dtcomentario`
  MODIFY `ID_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
