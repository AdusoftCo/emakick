-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 05:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `camisycametas`
--

CREATE TABLE `camisycametas` (
  `id` int(3) UNSIGNED NOT NULL,
  `cod_art` varchar(10) DEFAULT NULL,
  `id_prov` int(3) UNSIGNED NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio_doc` decimal(10,2) NOT NULL,
  `precio_oferta` decimal(10,2) NOT NULL,
  `fecha_alta` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fabricants`
--

CREATE TABLE `fabricants` (
  `id` int(3) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fec_alta` date DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fabricants`
--

INSERT INTO `fabricants` (`id`, `nombre`, `fec_alta`, `telefono`) VALUES
(1, 'Danoi', '2023-02-07', '1131362079'),
(2, 'Curemy', '2023-02-07', '1133268429'),
(3, 'Bellisima', '2023-02-07', '1128645967'),
(4, 'Ciriaco JyL', '2023-02-07', NULL),
(5, 'Elvis', '2023-02-07', '1144055405'),
(6, 'Barack', '2023-02-07', '1158037876'),
(7, 'Jenka', '2023-02-07', NULL),
(8, 'M x M', '2023-02-07', NULL),
(9, 'Malena', '2023-02-07', NULL),
(10, 'Rosalu', '2023-02-07', NULL),
(11, 'Sugary', '2023-02-07', NULL),
(12, 'Zantino -Edwin', '2023-02-07', NULL),
(13, 'Elemento', '2023-02-07', NULL),
(14, 'Mundo', '2023-02-07', NULL),
(15, 'Dufour', '2023-02-07', NULL),
(16, 'G3', '2023-02-07', '114991-3479'),
(17, 'Stefy -Angel', '2023-02-07', NULL),
(18, 'Hernan -Pjms', '2023-02-07', NULL),
(19, 'Loren\'s', '2023-02-07', NULL),
(20, 'DEENY', '2023-02-07', NULL),
(21, 'CAPICUA', '2023-02-07', NULL),
(22, 'LUANA', '2023-02-24', NULL),
(24, 'COCOT', '2023-03-01', ''),
(25, 'RHYTON', '2023-03-01', ''),
(26, 'DYNAMIC FOOT', '2023-03-01', ''),
(27, 'MALENA', '2023-03-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `femeninterior`
--

CREATE TABLE `femeninterior` (
  `id` int(3) UNSIGNED NOT NULL,
  `cod_art` varchar(10) NOT NULL,
  `id_prov` int(3) UNSIGNED NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio_doc` decimal(10,2) DEFAULT NULL,
  `precio_oferta` decimal(10,2) DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `femeninterior`
--

INSERT INTO `femeninterior` (`id`, `cod_art`, `id_prov`, `descripcion`, `precio_doc`, `precio_oferta`, `fecha_alta`, `fecha_baja`, `imagen`) VALUES
(4, '111p', 4, 'Universal J&L con Elast.Escama Alg.Lycra', '6300.00', '850.00', '2023-05-01', NULL, NULL),
(5, '600', 11, 'Universal Bombacha Dama Alg.Lycra Lisa', '9000.00', '850.00', '2023-03-23', NULL, NULL),
(7, '07', 8, 'Super Especial MxM Alg.L Lisa Elast.Coronita', '12900.00', '1500.00', '2023-05-24', NULL, NULL),
(8, '08', 8, 'Super Super Especial MxM Alg/L Lisa Elast.Coronita', '14860.00', '1500.00', '2023-05-16', NULL, NULL),
(9, '112p', 8, 'Bombacha Universal MxM Alg/Lycra lisa', '8580.00', '850.00', '2023-05-16', NULL, NULL),
(10, '600p', 8, 'Vedetina Especial MxM Alg.Lycra t.3-4-5', '5820.00', '700.00', '2023-05-24', NULL, NULL),
(11, '25', 1, 'Bombacha Señora embut.T.6 Extra Grande', '6000.00', '700.00', '2023-05-24', NULL, NULL),
(12, '24', 1, 'Bombacha Señora Embut.T.5 Extra Grande', '5850.00', '700.00', '2023-05-24', NULL, NULL),
(13, '27', 1, 'Bombacha Señora Embut.Alg.Estamp T.1 al 4', '5010.00', '600.00', '2023-05-24', NULL, ''),
(14, 'srat0', 1, 'Bombacha Señora Embut.Alg T.0 ', '3400.00', '500.00', '2023-05-24', NULL, ''),
(15, 'tc', 1, 'Bombacha Tiro Corto Alg.Estamp', '4500.00', '500.00', '2023-05-24', NULL, ''),
(16, '112', 19, 'Colaless Dama Alg.L M y L / Idem Culot Less', '3000.00', '300.00', '2023-05-24', '0000-00-00', ''),
(17, '113', 19, 'Vedetina Dama Alg.L M y L', '3000.00', '300.00', '2023-05-24', '0000-00-00', ''),
(18, '104', 7, 'Colaless Dama Alg.L Estamp Varios', '4850.00', '500.00', '2023-05-24', '0000-00-00', ''),
(19, '401', 7, 'Boxer Juvenil Alg.L Estamp Varios', '8200.00', '850.00', '2023-05-24', '0000-00-00', ''),
(20, '800', 2, 'Culote Dama Manos Esp.Alg.Lycra (y ROSA)', '10660.00', '1000.00', '2023-05-24', '0000-00-00', ''),
(21, '5214/34', 20, 'Culote Dama Vedetina Alg.L Cint.Puntilla S/STOCK', '4300.00', '500.00', '2023-05-24', '0000-00-00', ''),
(22, '650', 2, 'Culote Dama Patitas Alg.L (y ROSA)', '9500.00', '900.00', '2023-05-24', '0000-00-00', ''),
(23, '705', 2, 'Boxer Dama Especial Alg.L (y ROSA)', '11200.00', '1100.00', '2023-05-24', NULL, NULL),
(24, '46/49', 10, 'Tiro Corto Dama L / Vedetina L Alg Liso S/STOCK', '4200.00', '700.00', '2023-05-24', NULL, NULL),
(25, '48', 10, 'Tiro Corto Dama M Alg.L Liso S/STOCK', '3800.00', '650.00', '2023-05-24', NULL, NULL),
(26, '8053NEU', 21, 'Bombachas lycra del L al XXXL', '6800.00', '750.00', '2023-02-03', NULL, NULL),
(27, 'K721', 21, 'Bombacha Dama Microfibra (L-XL) (XXL-XXXL)', '19.00', '1200.00', '2023-05-24', NULL, NULL),
(28, '230/1511', 21, 'Vedetinas Microfibra Varios Talles', '6000.00', '750.00', '2023-02-03', NULL, NULL),
(29, '2315', 21, 'Vedetina c/Encaje del L al XXL', '6000.00', '750.00', '2023-02-03', NULL, NULL),
(32, '3001L', 21, 'Culote encaje [TODOS LOS MODELOS]', '6100.00', '750.00', '2023-02-24', NULL, NULL),
(33, 'A0410', 21, 'Vedetina Faja Microfibra del M al XL', '8500.00', '800.00', '2023-02-24', NULL, NULL),
(45, '020', 22, 'Conjunto Dama Desagujado Arm.Less Aro', '15100.00', '1500.00', '2023-05-24', '0000-00-00', ''),
(47, '08', 22, 'Conjunto Dama Triang.Alg Picot Less S/Aro', '12750.00', '1250.00', '2023-05-24', NULL, NULL),
(48, '010', 22, 'Conjunto Dama Triang.Alg Puntilla Less S/Aro', '12750.00', '1250.00', '2023-05-24', '0000-00-00', ''),
(50, '07', 22, 'Comjunto Dama Triang Victoria/Tomy/Calvin S/Aro', '13500.00', '1250.00', '2023-05-24', '0000-00-00', ''),
(51, '23', 1, 'Bombacha Nena Embut.Alg.Estamp t.0 al 4', '3900.00', '475.00', '2023-05-24', '0000-00-00', ''),
(52, '24', 1, 'Bombacha Nena Embut.Alg.Estamp T.5', '4500.00', '500.00', '2023-05-24', '0000-00-00', ''),
(53, '22', 4, 'Culote Nena Alg.L Estamp T.2-4', '3900.00', '400.00', '2023-05-24', '0000-00-00', ''),
(54, '620', 7, 'Bombacha Nena Alg.L.Estamp.Faja T.1-2-3', '5000.00', '500.00', '2023-05-24', '0000-00-00', ''),
(56, '630', 7, 'Culote Nena Alg.L.Estamp Faja T.4', '6100.00', '600.00', '2023-05-24', '0000-00-00', ''),
(57, '650', 7, 'Bombacha Nena Alg.L.Estamp T.4', '6100.00', '600.00', '2023-05-24', '0000-00-00', ''),
(60, '55', 3, 'Conjunto Nena Bretel Alg.L T.Unico', '6700.00', '900.00', '2023-05-24', '0000-00-00', ''),
(61, '83', 3, 'Conjunto Nena Bretel Alg.L C/Push T.Unico', '8100.00', '900.00', '2023-05-24', '0000-00-00', ''),
(62, '88', 3, 'Conjunto Nena Deportivo Alg.L C/Push T.Unico', '9500.00', '1000.00', '2023-05-24', '0000-00-00', ''),
(70, '31', 4, 'Super Especial Dama Alg.L Lisa', '7200.00', '1050.00', '2023-05-24', NULL, NULL),
(98, '111p', 0, 'Universal J&L con Faja Alg.Lycra', '7110.00', '850.00', '2023-01-23', NULL, NULL),
(99, '111p', 0, 'Universal J&L con Faja Alg.Lycra', '7110.00', '850.00', '2023-04-10', NULL, NULL),
(100, '07', 0, 'Super Especial MxM Alg.Lycra Lisa Elastico Coronita', '9850.00', '1000.00', '2023-01-23', NULL, NULL),
(101, '07', 0, 'Super Especial MxM Alg.Lycra Lisa Elastico Coronita', '9850.00', '1000.00', '2023-04-10', NULL, NULL),
(102, '07', 0, 'Super Especial MxM Alg.Lycra Lisa Elastico Coronita', '9850.00', '1000.00', '2023-04-10', NULL, NULL),
(103, '07', 0, 'Super Especial MxM Alg.Lycra Lisa Elastico Coronita', '9850.00', '1000.00', '2023-04-10', NULL, NULL),
(104, '08', 0, 'Super SuperEspecial MxM Alg/Lycra lisa Elastico Coronita', '11340.00', '1200.00', '2023-01-23', NULL, NULL),
(105, '08', 0, 'Super SuperEspecial MxM Alg/Lycra lisa Elastico Coronita', '11340.00', '1200.00', '2023-01-23', NULL, NULL),
(106, '08', 0, 'Super SuperEspecial MxM Alg/Lycra lisa Elastico Coronita', '11340.00', '1200.00', '2023-01-23', NULL, NULL),
(107, '111p', 0, 'Universal J&L con Faja Alg.Lycra', '7110.00', '850.00', '2023-01-23', NULL, NULL),
(108, '111p', 0, 'Universal J&L con Faja Alg.Lycra', '7110.00', '850.00', '2023-04-10', NULL, NULL),
(109, '08', 0, 'Super SuperEspecial MxM Alg/Lycra lisa Elastico Coronita', '11340.00', '1200.00', '2023-01-23', NULL, NULL),
(110, '08', 0, 'Super SuperEspecial MxM Alg/Lycra lisa Elastico Coronita', '11340.00', '1200.00', '2023-01-23', NULL, NULL),
(111, '110p', 0, 'Bombacha Señora Tiro Corto Faja Alg.Lycra T.1 al 4', '5500.00', '700.00', '2023-04-06', NULL, NULL),
(191, '032', 22, 'Conjunto Dama Versalles/Tomy/Calvin Arm.Less Aro', '16150.00', '1500.00', '2023-05-24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `masculinos`
--

CREATE TABLE `masculinos` (
  `id` int(3) UNSIGNED NOT NULL,
  `cod_art` varchar(10) DEFAULT NULL,
  `id_prov` int(3) UNSIGNED NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio_doc` decimal(10,2) NOT NULL,
  `precio_oferta` decimal(10,2) NOT NULL,
  `fecha_alta` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int(3) UNSIGNED NOT NULL,
  `cod_art` varchar(10) DEFAULT NULL,
  `id_prov` int(3) UNSIGNED NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio_doc` decimal(10,2) NOT NULL,
  `precio_oferta` decimal(10,2) NOT NULL,
  `fecha_alta` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `cod_art`, `id_prov`, `descripcion`, `precio_doc`, `precio_oferta`, `fecha_alta`, `fecha_baja`, `imagen`) VALUES
(29, '740', 13, 'Termica Chicos Extra Alg.Lycra surtido t.3', '8800.00', '1000.00', '2023-05-01', '0000-00-00', ''),
(30, '750', 13, 'Termica Juvenil Extra Alg.Lycra surtido t.4', '9500.00', '1100.00', '2023-05-01', '0000-00-00', ''),
(31, '022/023', 13, 'Invisible Dama Estámp-Liso B/N', '4200.00', '450.00', '2023-05-01', NULL, ''),
(32, '101', 13, 'Soquete Dama Estamp/Deportiva/Lisa Surt/ByN ', '4600.00', '500.00', '2023-05-01', NULL, ''),
(33, '551', 13, 'Soquete Dama Soft c.Lengueta Toalla planta', '5200.00', '550.00', '2023-05-01', '0000-00-00', ''),
(34, '200/201/20', 13, 'Media Rayada/Lisa Surt/B-N-A/Estamp', '6100.00', '650.00', '2023-05-01', '0000-00-00', ''),
(35, '203', 13, 'Media 3/4 Dama Lisa surtida/Negra', '7600.00', '800.00', '2023-05-01', '0000-00-00', ''),
(36, '720', 13, 'Termica 3/4 Dama Extra Alg.Lycra surtida', '11200.00', '1200.00', '2023-05-01', '0000-00-00', ''),
(37, '011', 13, 'Invisible Alta hombre surt.Liso/ByN/Negro', '4600.00', '500.00', '2023-05-01', '0000-00-00', ''),
(38, '012/013', 13, 'Invisible Alta hombre Clasico surt/Urbano', '4600.00', '500.00', '2023-05-01', '0000-00-00', ''),
(39, '102', 13, 'Soquete hombre Deportivo/Liso surt/Rayado/Blanco/Negro', '5100.00', '550.00', '2023-05-01', '0000-00-00', ''),
(40, '501', 13, 'Soquete Soft Hombre c.Lengueta Toalla Planta', '5700.00', '600.00', '2023-03-01', '0000-00-00', ''),
(41, '951/952/95', 13, 'Media hombre Clasico/Moderno/Rombo/Neg/Azul/Blanc/Urbano', '6900.00', '700.00', '2023-05-01', '0000-00-00', ''),
(42, '953D', 13, 'Soquete Alto Hombre FIT Deportivo', '6100.00', '650.00', '2023-05-01', '0000-00-00', ''),
(43, '730', 13, 'Termico 3/4 Hombre Extra Alg.Lycra', '12100.00', '1300.00', '2023-05-01', '0000-00-00', ''),
(44, '333', 14, 'Media Hombre Termica Estampada', '11500.00', '1200.00', '2023-05-01', '0000-00-00', ''),
(45, '9020', 14, 'Media Hombre Deport Toalla Liso B/N', '5400.00', '650.00', '2023-05-01', '0000-00-00', ''),
(46, '1010/1012', 14, 'Soquete Hombre Estamp/Liso B-N', '4100.00', '450.00', '2023-05-01', '0000-00-00', ''),
(47, '666', 14, 'Media Dama Termica Estampada ', '10800.00', '1200.00', '2023-05-01', '0000-00-00', ''),
(48, '6020', 14, 'Media Dama Deportivo Toalla B/N', '5100.00', '600.00', '2023-05-01', '0000-00-00', ''),
(49, '4010/4012', 14, 'Soquete Dama Alg.Estampada/Lisa B-N', '3800.00', '425.00', '2023-05-01', '0000-00-00', ''),
(50, '505', 25, 'Medias Hombre Alg.Liso Surt.Color', '4800.00', '500.00', '2023-05-01', '0000-00-00', ''),
(51, '2000', 26, 'Medias Tubo TOALLA VARIOS COLORES', '2500.00', '300.00', '2023-05-01', '0000-00-00', ''),
(52, '1002', 24, 'Media Multifil Dama t.1 al 4 color 32', '4600.00', '600.00', '2023-05-01', '0000-00-00', ''),
(53, '1053', 24, 'Media Multifil Dama t.5 color 32/N', '5000.00', '700.00', '2023-05-01', '0000-00-00', ''),
(54, '420', 24, 'Media Multifil 3/4 Dama color 32/N', '4250.00', '550.00', '2023-03-01', '0000-00-00', ''),
(55, '102', 27, 'Media Red C/puntilla silicona (blanco ,negro, rojo)', '9200.00', '1100.00', '2023-03-01', '0000-00-00', ''),
(56, '101', 27, 'Media Lycra C/puntilla Silicona (Negro y Rojo)', '9200.00', '1100.00', '2023-03-01', '0000-00-00', ''),
(57, '112', 27, 'Media de Red C/ puntilla Ancha colores (Rojo y Negro)', '9200.00', '1100.00', '2023-03-01', '0000-00-00', ''),
(58, '111', 27, 'Media Lycra C/puntilla Ancha colores (Negro,Rojo)', '9200.00', '1100.00', '2023-03-01', '0000-00-00', ''),
(59, '402', 27, 'Panty Portaliga Red colores (Negro y Rojo)', '14500.00', '1100.00', '2023-03-01', '0000-00-00', ''),
(60, '401', 27, 'Panty Portaliga Lisa colores (Negro y Rojo)', '14500.00', '1100.00', '2023-03-01', '0000-00-00', ''),
(61, '202', 27, 'Panty Medias Red (Blanco,Negro,Rojo y Natural)', '9500.00', '1100.00', '2023-03-01', '0000-00-00', ''),
(62, '205', 27, 'Portaliga C/Puntilla Colores ( Blanco,Negro y Rojo)', '11500.00', '1100.00', '2023-03-01', '0000-00-00', ''),
(63, '31', 27, 'Media 7/8 Lycra  Colores surt-Negro', '7200.00', '800.00', '2023-03-01', '0000-00-00', ''),
(70, '720', 13, 'Térmica Extra Alg/Lycra Surtidas Chicos t.2', '8300.00', '900.00', '2023-05-01', NULL, ''),
(78, '104', 13, 'Soquete Blanco/ Azul/ Estampado Surt./ Varon T.1', '3500.00', '350.00', '2023-05-01', NULL, ''),
(79, '104', 13, 'Soquete Blanco/ Azul/ Estampado Surt./ Varon T.2', '3800.00', '400.00', '2023-05-01', NULL, ''),
(80, '105', 13, 'Soquete Blanco/ Azul/ Estampado Surt./ Varon T.4', '4300.00', '500.00', '2023-05-01', NULL, ''),
(81, '102', 13, 'Soquete Blanco/ Azul/ Estampado Surt./ Varon T.3', '4000.00', '450.00', '2023-05-01', NULL, ''),
(82, '105', 13, 'Soquete Elemento Juvenil Estampado Surt. talle 5', '4500.00', '500.00', '2023-05-01', NULL, ''),
(90, '1011', 13, 'Media Caña Estampada Surtidas', '2900.00', '300.00', '2023-05-01', NULL, ''),
(91, '1020', 13, 'Media Caña Surtida Estampado/ Varon t.0', '4000.00', '400.00', '2023-05-01', NULL, ''),
(92, '1020', 13, 'Media Caña Surtida Estampado/ Varon t.1', '4200.00', '450.00', '2023-05-01', NULL, ''),
(93, '1020', 13, 'Media Caña Surtida Estampado/ Varon t.2', '4500.00', '475.00', '2023-05-01', NULL, ''),
(94, '1020', 13, 'Media Caña Surtida Estampado/ Varon t.3', '5000.00', '500.00', '2023-05-01', NULL, ''),
(95, '1090', 13, 'Media Caña Surtida Estampado/ Varon t.4', '5500.00', '550.00', '2023-05-01', NULL, ''),
(96, '1090', 13, 'Media Caña Surtida Estampado/ Varon t.5', '5800.00', '600.00', '2023-05-01', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camisycametas`
--
ALTER TABLE `camisycametas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_medias_proveedores` (`id_prov`);

--
-- Indexes for table `fabricants`
--
ALTER TABLE `fabricants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `femeninterior`
--
ALTER TABLE `femeninterior`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prov` (`id_prov`);

--
-- Indexes for table `masculinos`
--
ALTER TABLE `masculinos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_medias_proveedores` (`id_prov`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_medias_proveedores` (`id_prov`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camisycametas`
--
ALTER TABLE `camisycametas`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fabricants`
--
ALTER TABLE `fabricants`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `femeninterior`
--
ALTER TABLE `femeninterior`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `masculinos`
--
ALTER TABLE `masculinos`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `femeninterior`
--
ALTER TABLE `femeninterior`
  ADD CONSTRAINT `femen_fk` FOREIGN KEY (`id_prov`) REFERENCES `fabricants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `fk_medias_proveedores` FOREIGN KEY (`id_prov`) REFERENCES `fabricants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
