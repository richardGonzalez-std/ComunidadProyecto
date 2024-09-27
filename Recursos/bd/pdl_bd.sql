-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 09:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdl_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `datos_planilla`
--

CREATE TABLE `datos_planilla` (
  `ci` varchar(50) NOT NULL,
  `estatura` text NOT NULL,
  `apellido_student` text NOT NULL,
  `nombre_student` text NOT NULL,
  `lugar_nacimiento` text NOT NULL,
  `fecha_nacimiento` text NOT NULL,
  `edad` text NOT NULL,
  `sexo` text DEFAULT NULL,
  `estado` text NOT NULL,
  `pais` text NOT NULL,
  `direccion` text NOT NULL,
  `correo_student` text NOT NULL,
  `name_madre` text NOT NULL,
  `edad_madre` text NOT NULL,
  `ci_madre` text NOT NULL,
  `nacionalidad_madre` text NOT NULL,
  `parentesco_madre` text NOT NULL,
  `ocupacion_madre` text NOT NULL,
  `telefono_madre` text NOT NULL,
  `correo_madre` text NOT NULL,
  `nombre_padre` text NOT NULL,
  `edad_padre` text NOT NULL,
  `ci_padre` text NOT NULL,
  `nacionalidad_padre` text NOT NULL,
  `parentesco_padre` text NOT NULL,
  `ocupacion_padre` text NOT NULL,
  `telefono_padre` text NOT NULL,
  `correo_padre` text NOT NULL,
  `estatura_padre` text NOT NULL,
  `peso` int(11) NOT NULL,
  `camisa` int(11) NOT NULL,
  `pantalon` int(11) NOT NULL,
  `zapatos` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registro_usuario`
--

CREATE TABLE `registro_usuario` (
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `priv_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `registro_usuario`
--

INSERT INTO `registro_usuario` (`nombre`, `correo`, `usuario`, `password`, `id`, `fecha`, `priv_user`) VALUES
('Administrador de base de datos', '1234', 'admin', 'admin', 18, '2023-03-17 21:52:44', 1),
('richard', 'adsad', 'dass', 'dass', 19, '2023-03-17 21:55:51', 0),
('zarahy jurado', 'zaraJurado@hotmail.com', 'zara32jurado', '1234', 20, '2023-03-24 17:16:32', 1),
('jose regalado', 'joseregalado1234@hotmail.com', 'jose1234rega', '1234', 21, '2023-03-24 17:19:48', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datos_planilla`
--
ALTER TABLE `datos_planilla`
  ADD PRIMARY KEY (`ci`);

--
-- Indexes for table `registro_usuario`
--
ALTER TABLE `registro_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registro_usuario`
--
ALTER TABLE `registro_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
