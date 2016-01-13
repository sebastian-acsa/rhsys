-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2015 a las 16:24:37
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rhsys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automoviles`
--

CREATE TABLE `automoviles` (
  `automovil_id` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `ano` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `placas` varchar(45) NOT NULL,
  `oxxo` varchar(45) NOT NULL,
  `empleado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `automoviles`
--

INSERT INTO `automoviles` (`automovil_id`, `marca`, `modelo`, `ano`, `color`, `placas`, `oxxo`, `empleado_id`) VALUES
(1, 'vw', 'eur', '2015-11-20', 'negro', 'nty-8523', '789654-01', 4),
(2, 'vw', 'eur', '2015-11-20', 'negro', 'nty-8523', '789654-01', 4),
(3, 'VW', 'eur', '2015-11-27', 'negro', 'nty-8523', '789654-01', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambios_empleados`
--

CREATE TABLE `cambios_empleados` (
  `cambio_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `empleado_num_old` int(11) DEFAULT NULL,
  `empleado_num_new` int(11) DEFAULT NULL,
  `nombre_old` text,
  `nombre_new` text,
  `apellido_p_old` text,
  `apellido_p_new` text,
  `apellido_m_old` text,
  `apellido_m_new` text,
  `su_aut_old` float DEFAULT NULL,
  `su_aut_new` float DEFAULT NULL,
  `su_neg_old` decimal(10,2) DEFAULT NULL,
  `su_neg_new` decimal(10,2) DEFAULT NULL,
  `sd_old` decimal(10,2) DEFAULT NULL,
  `sd_new` decimal(10,2) DEFAULT NULL,
  `sdi_old` decimal(10,2) DEFAULT NULL,
  `sdi_new` decimal(10,2) DEFAULT NULL,
  `sd_text_old` text,
  `sd_text_new` text,
  `su_sem_old` decimal(10,2) DEFAULT NULL,
  `su_sem_new` decimal(10,2) DEFAULT NULL,
  `su_sem_text_old` text,
  `su_sem_text_new` text,
  `su_men_b_old` decimal(10,2) DEFAULT NULL,
  `su_men_b_new` decimal(10,2) DEFAULT NULL,
  `su_men_b_text_old` text,
  `su_men_b_text_new` text,
  `imss_desc_old` decimal(10,2) DEFAULT NULL,
  `imss_desc_new` decimal(10,2) DEFAULT NULL,
  `isr_desc_old` decimal(10,2) DEFAULT NULL,
  `isr_desc_new` decimal(10,2) DEFAULT NULL,
  `su_sem_efectivo_old` decimal(10,2) DEFAULT NULL,
  `su_sem_efectivo_new` decimal(10,2) DEFAULT NULL,
  `f_ajuste_su_old` date DEFAULT NULL,
  `f_ajuste_su_new` date DEFAULT NULL,
  `num_cta_ban_old` text,
  `num_cta_ban_new` text,
  `cta_ban_clabe_old` text,
  `cta_ban_clabe_new` text,
  `cta_ban_id_old` int(11) DEFAULT NULL,
  `cta_ban_id_new` int(11) DEFAULT NULL,
  `nom_id_old` varchar(45) DEFAULT NULL,
  `nom_id_new` varchar(45) DEFAULT NULL,
  `area_id_old` varchar(54) DEFAULT NULL,
  `area_id_new` varchar(54) DEFAULT NULL,
  `departamento_id_old` varchar(45) DEFAULT NULL,
  `departamento_id_new` varchar(45) DEFAULT NULL,
  `razon_social_id_old` int(11) DEFAULT NULL,
  `razon_social_id_new` int(11) DEFAULT NULL,
  `puesto_old` varchar(45) DEFAULT NULL,
  `puesto_new` varchar(45) DEFAULT NULL,
  `status_old` int(11) DEFAULT NULL,
  `status_new` int(11) DEFAULT NULL,
  `curp_old` text,
  `curp_new` text,
  `rfc_old` text,
  `rfc_new` text,
  `f_nacimiento_old` date DEFAULT NULL,
  `f_nacimiento_new` date DEFAULT NULL,
  `l_nacimiento_old` text,
  `l_nacimiento_new` text,
  `dir_calle_old` text,
  `dir_calle_new` text,
  `dir_colonia_old` text,
  `dir_colonia_new` text,
  `dir_cp_old` int(11) DEFAULT NULL,
  `dir_cp_new` int(11) DEFAULT NULL,
  `dir_entidad_old` text,
  `dir_entidad_new` text,
  `infonavit_old` text,
  `infonavit_new` text,
  `infonavit_num_cred_old` text,
  `infonavit_num_cred_new` text,
  `factor_descuento_old` int(11) DEFAULT NULL,
  `factor_descuento_new` int(11) DEFAULT NULL,
  `vsm_old` int(11) DEFAULT NULL,
  `vsm_new` int(11) DEFAULT NULL,
  `trabajador_tipo_old` int(11) DEFAULT NULL,
  `trabajador_tipo_new` int(11) DEFAULT NULL,
  `correo_acsa_old` text,
  `correo_acsa_new` text,
  `correo_personal_old` text,
  `correo_personal_new` text,
  `cel_acsa_old` text,
  `cel_acsa_new` text,
  `cel_personal_old` text,
  `cel_personal_new` text,
  `tel_personal_old` text,
  `tel_personal_new` text,
  `fecha_baja_old` date DEFAULT NULL,
  `fecha_baja_new` date DEFAULT NULL,
  `baja_motivo_old` text,
  `baja_motivo_new` text,
  `contrato_tipo_old` int(11) DEFAULT NULL,
  `contrato_tipo_new` int(11) DEFAULT NULL,
  `contrato_fecha_old` date DEFAULT NULL,
  `contrato_fecha_new` date DEFAULT NULL,
  `edad_old` int(11) DEFAULT NULL,
  `edad_new` int(11) DEFAULT NULL,
  `sexo_old` char(1) DEFAULT NULL,
  `sexo_new` char(1) DEFAULT NULL,
  `estado_civil_old` text,
  `estado_civil_new` text,
  `nacionalidad_old` text,
  `nacionalidad_new` text,
  `fecha_ingreso_old` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_ingreso_new` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `proyecto_tipo_old` text,
  `proyecto_tipo_new` text,
  `sede_old` text,
  `sede_new` text,
  `jefe_id_old` int(11) DEFAULT NULL,
  `jefe_id_new` int(11) DEFAULT NULL,
  `imss_num_old` int(11) DEFAULT NULL,
  `imss_num_new` int(11) DEFAULT NULL,
  `no_plastico_old` varchar(45) NOT NULL,
  `no_plastico_new` varchar(45) NOT NULL,
  `cedula_old` varchar(45) NOT NULL,
  `cedula_new` varchar(45) NOT NULL,
  `estudios_old` varchar(45) NOT NULL,
  `estudios_new` varchar(45) NOT NULL,
  `exp_prof_old` varchar(45) NOT NULL,
  `exp_prof_new` varchar(45) NOT NULL,
  `tipo_obra_old` varchar(125) NOT NULL,
  `tipo_obra_new` varchar(125) NOT NULL,
  `su_sem_fiscal_old` decimal(10,2) NOT NULL,
  `su_sem_fiscal_new` decimal(10,2) NOT NULL,
  `pais_old` varchar(45) NOT NULL,
  `pais_new` varchar(45) NOT NULL,
  `no_banco_old` varchar(45) NOT NULL,
  `no_banco_new` varchar(45) NOT NULL,
  `f_cambio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `su_actual_old` decimal(10,2) NOT NULL,
  `su_actual_new` decimal(10,2) NOT NULL,
  `tipo_cambio` varchar(45) NOT NULL,
  `quien_edita` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cambios_empleados`
--

INSERT INTO `cambios_empleados` (`cambio_id`, `empleado_id`, `empleado_num_old`, `empleado_num_new`, `nombre_old`, `nombre_new`, `apellido_p_old`, `apellido_p_new`, `apellido_m_old`, `apellido_m_new`, `su_aut_old`, `su_aut_new`, `su_neg_old`, `su_neg_new`, `sd_old`, `sd_new`, `sdi_old`, `sdi_new`, `sd_text_old`, `sd_text_new`, `su_sem_old`, `su_sem_new`, `su_sem_text_old`, `su_sem_text_new`, `su_men_b_old`, `su_men_b_new`, `su_men_b_text_old`, `su_men_b_text_new`, `imss_desc_old`, `imss_desc_new`, `isr_desc_old`, `isr_desc_new`, `su_sem_efectivo_old`, `su_sem_efectivo_new`, `f_ajuste_su_old`, `f_ajuste_su_new`, `num_cta_ban_old`, `num_cta_ban_new`, `cta_ban_clabe_old`, `cta_ban_clabe_new`, `cta_ban_id_old`, `cta_ban_id_new`, `nom_id_old`, `nom_id_new`, `area_id_old`, `area_id_new`, `departamento_id_old`, `departamento_id_new`, `razon_social_id_old`, `razon_social_id_new`, `puesto_old`, `puesto_new`, `status_old`, `status_new`, `curp_old`, `curp_new`, `rfc_old`, `rfc_new`, `f_nacimiento_old`, `f_nacimiento_new`, `l_nacimiento_old`, `l_nacimiento_new`, `dir_calle_old`, `dir_calle_new`, `dir_colonia_old`, `dir_colonia_new`, `dir_cp_old`, `dir_cp_new`, `dir_entidad_old`, `dir_entidad_new`, `infonavit_old`, `infonavit_new`, `infonavit_num_cred_old`, `infonavit_num_cred_new`, `factor_descuento_old`, `factor_descuento_new`, `vsm_old`, `vsm_new`, `trabajador_tipo_old`, `trabajador_tipo_new`, `correo_acsa_old`, `correo_acsa_new`, `correo_personal_old`, `correo_personal_new`, `cel_acsa_old`, `cel_acsa_new`, `cel_personal_old`, `cel_personal_new`, `tel_personal_old`, `tel_personal_new`, `fecha_baja_old`, `fecha_baja_new`, `baja_motivo_old`, `baja_motivo_new`, `contrato_tipo_old`, `contrato_tipo_new`, `contrato_fecha_old`, `contrato_fecha_new`, `edad_old`, `edad_new`, `sexo_old`, `sexo_new`, `estado_civil_old`, `estado_civil_new`, `nacionalidad_old`, `nacionalidad_new`, `fecha_ingreso_old`, `fecha_ingreso_new`, `proyecto_tipo_old`, `proyecto_tipo_new`, `sede_old`, `sede_new`, `jefe_id_old`, `jefe_id_new`, `imss_num_old`, `imss_num_new`, `no_plastico_old`, `no_plastico_new`, `cedula_old`, `cedula_new`, `estudios_old`, `estudios_new`, `exp_prof_old`, `exp_prof_new`, `tipo_obra_old`, `tipo_obra_new`, `su_sem_fiscal_old`, `su_sem_fiscal_new`, `pais_old`, `pais_new`, `no_banco_old`, `no_banco_new`, `f_cambio`, `su_actual_old`, `su_actual_new`, `tipo_cambio`, `quien_edita`) VALUES
(1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11000, 11000, '10000.00', '10000.00', '12000.00', '12000.00', NULL, NULL, NULL, NULL, '2500.00', '2301.37', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '99.00', '1801.37', '2015-11-18', '2015-11-18', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-19 00:45:55', '2015-11-19 00:45:55', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '500.00', '', '', '', '98588', '2015-11-19 00:45:55', '0.00', '0.00', '', ''),
(2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11000, 11000, '10000.00', '10000.00', '12000.00', '12000.00', NULL, NULL, NULL, NULL, '2500.00', '2301.37', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '99.00', '1801.37', '2015-11-18', '2015-11-18', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-19 00:47:52', '2015-11-19 00:47:52', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '500.00', '', '', '', '98588', '2015-11-19 00:47:52', '0.00', '0.00', '', ''),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11000, 11000, '10000.00', '10000.00', '12000.00', '12000.00', NULL, NULL, NULL, NULL, '2500.00', '2301.37', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '99.00', '1801.37', '2015-11-18', '2015-11-18', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-19 00:50:16', '2015-11-19 00:50:16', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '500.00', '', '', '', '98588', '2015-11-19 00:50:16', '0.00', '0.00', '', ''),
(4, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11000, 11000, '10000.00', '10000.00', '12000.00', '12000.00', NULL, NULL, NULL, NULL, '2301.37', '2301.37', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '1801.37', '1801.37', '2015-11-18', '2015-11-18', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-19 01:12:06', '2015-11-19 01:12:06', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '500.00', '500.00', '', '', '98588', '98588', '2015-11-19 01:12:06', '10000.00', '12000.00', 'Economico', ''),
(5, 3, NULL, NULL, 'sebastian', 'sebastiano', 'treviño', 'treviño', 'treviño', 'treviño', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dyufighikjop', 'dyufighikjop', 'fgjkghkfvhgfhjg', 'fgjkghkfvhgfhjg', '2008-07-28', '2008-07-28', 'monterrey', 'monterrey', '', '', '', '', 0, 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GarnaMao@gmail.com', 'GarnaMao@gmail.com', NULL, NULL, '8181818182', '8181818182', '818181818181', '818181818181', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'M', 'Soltero', 'Soltero', 'mexicana', 'mexicana', '2015-11-20 14:54:42', '2015-11-20 14:54:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '', '', '2015-11-20 14:54:42', '0.00', '0.00', 'Personal', ''),
(6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11000, 11000, '10000.00', '10000.00', '12000.00', '12000.00', NULL, NULL, NULL, NULL, '2301.37', '3452.05', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '1801.37', '3452.05', '2015-11-20', '2015-11-20', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-21 00:31:27', '2015-11-21 00:31:27', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '500.00', '0.00', '', '', '98588', '98588', '2015-11-21 00:31:27', '12000.00', '15000.00', 'Economico', 'demo'),
(7, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11000, 11000, '10000.00', '10000.00', '12000.00', '12000.00', NULL, NULL, NULL, NULL, '3452.05', '3682.19', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '3452.05', '3582.19', '2015-11-20', '2015-11-20', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-21 00:40:19', '2015-11-21 00:40:19', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '100.00', '', '', '98588', '98588', '2015-11-21 00:40:19', '15000.00', '16000.00', 'Economico', 'demo'),
(8, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11000, 11000, '10000.00', '10000.00', '12000.00', '12000.00', NULL, NULL, NULL, NULL, '3682.19', '3682.19', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '3582.19', '3572.19', '2015-11-20', '2015-11-20', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-21 00:44:24', '2015-11-21 00:44:24', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '100.00', '110.00', '', '', '98588', '98588', '2015-11-21 00:44:24', '16000.00', '16000.00', 'Economico', 'demo'),
(9, 3, NULL, NULL, 'sebastiano', 'sebastiano', 'treviño', 'treviño', 'treviño', 'treviño', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dyufighikjop', 'dyufighikjop', 'fgjkghkfvhgfhjg', 'fgjkghkfvhgfhjg', '2008-07-28', '2008-07-28', 'monterrey', 'monterrey', '', '', '', '', 0, 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GarnaMao@gmail.com', 'GarnaMao@gmail.com', NULL, NULL, '8181818182', '8181818182', '818181818181', '818181818181', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'M', 'Soltero', 'Soltero', 'mexicana', 'mexicana', '2015-11-21 16:09:43', '2015-11-21 16:09:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '', '', '2015-11-21 16:09:43', '0.00', '0.00', 'Personal', ''),
(10, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11000, 0, '10000.00', '0.00', '12000.00', '0.00', NULL, NULL, NULL, NULL, '3682.19', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '3572.19', '0.00', '2015-11-23', '2015-11-23', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-23 21:42:47', '2015-11-23 21:42:47', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '110.00', '0.00', '', '', '98588', '98588', '2015-11-23 21:42:47', '16000.00', '0.00', 'Economico', 'demo'),
(11, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, '0.00', '3682.19', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '0.00', '3682.19', '2015-11-23', '2015-11-23', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-23 21:43:12', '2015-11-23 21:43:12', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '98588', '98588', '2015-11-23 21:43:12', '0.00', '16000.00', 'Economico', 'demo'),
(12, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14000, 0, '12000.00', '0.00', '15000.00', '0.00', NULL, NULL, NULL, NULL, '3682.19', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '3682.19', '0.00', '2015-11-23', '2015-11-23', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-23 22:09:16', '2015-11-23 22:09:16', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '98588', '98588', '2015-11-23 22:09:16', '16000.00', '12.00', 'Economico', 'demo'),
(13, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '0.00', '0.00', '2015-11-23', '2015-11-23', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-23 22:19:16', '2015-11-23 22:19:16', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '98588', '98588', '2015-11-23 22:19:16', '12.00', '0.00', 'Economico', 'demo'),
(14, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15000, NULL, '12000.00', NULL, '14000.00', NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '0.00', '0.00', '2015-11-23', '2015-11-23', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-23 22:37:55', '2015-11-23 22:37:55', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '98588', '98588', '2015-11-23 22:37:55', '10000.00', '16000.00', 'Economico', 'demo'),
(15, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15000, NULL, '12000.00', NULL, '14000.00', NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '0.00', '0.00', '2015-11-23', '2015-11-23', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-23 22:39:03', '2015-11-23 22:39:03', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '98588', '98588', '2015-11-23 22:39:03', '16000.00', '14.00', 'Economico', 'demo'),
(16, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15000, NULL, '12000.00', NULL, '14000.00', NULL, NULL, NULL, NULL, NULL, '0.00', '3452.05', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '0.00', '3452.05', '2015-11-23', '2015-11-23', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-23 22:41:08', '2015-11-23 22:41:08', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '98588', '98588', '2015-11-23 22:41:08', '14.00', '15000.00', 'Economico', 'demo'),
(17, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15000, NULL, '12000.00', NULL, '14000.00', NULL, NULL, NULL, NULL, NULL, '3452.05', '3452.05', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '3452.05', '3452.05', '2015-11-23', '2015-11-23', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-23 22:42:14', '2015-11-23 22:42:14', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '98588', '98588', '2015-11-23 22:42:14', '15000.00', '15000.00', 'Economico', 'demo'),
(18, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15000, NULL, '12000.00', NULL, '14000.00', NULL, NULL, NULL, NULL, NULL, '3452.05', '3452.05', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '3452.05', '3452.05', '2015-11-23', '2015-11-23', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-23 22:44:03', '2015-11-23 22:44:03', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '98588', '98588', '2015-11-23 22:44:03', '15000.00', '15000.00', 'Economico', 'demo'),
(19, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15000, NULL, '12000.00', NULL, '14000.00', NULL, NULL, NULL, NULL, NULL, '3452.05', '3452.05', NULL, NULL, NULL, NULL, NULL, NULL, '999.00', '999.00', '999.00', '999.00', '3452.05', '2452.05', '2015-11-23', '2015-11-23', '9999', '9999', '9999', '9999', 6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-23 22:47:36', '2015-11-23 22:47:36', NULL, NULL, NULL, NULL, NULL, NULL, 9999, 9999, '', '', '', '', '', '', '', '', '', '', '0.00', '1000.00', '', '', '98588', '98588', '2015-11-23 22:47:36', '15000.00', '15000.00', 'Economico', 'demo'),
(20, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15000, NULL, '10000.00', NULL, '0.00', NULL, NULL, NULL, NULL, NULL, '2301.37', '2761.64', NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '1301.37', '1761.64', '2015-11-23', '2015-11-23', '', '', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-24 01:41:07', '2015-11-24 01:41:07', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', '', '', '', '', '', '', '', '', '', '1000.00', '1000.00', '', '', '', '', '2015-11-24 01:41:07', '10000.00', '12000.00', 'Economico', 'demo'),
(21, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15000, NULL, '10000.00', NULL, '0.00', NULL, NULL, NULL, NULL, NULL, '2761.64', '2991.78', NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '1761.64', '2991.78', '2015-11-23', '2015-11-23', '', '', '', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-24 01:41:53', '2015-11-24 01:41:53', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', '', '', '', '', '', '', '', '', '', '1000.00', '0.00', '', '', '', '', '2015-11-24 01:41:53', '12000.00', '13000.00', 'Economico', 'demo'),
(22, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', 0, 1, '1_1', '1_2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-28 17:38:01', '2015-11-28 17:38:01', '338', '375', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '', '', '2015-11-28 17:38:01', '0.00', '0.00', 'Puesto', ''),
(23, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', 1, 1, '1_2', '1_3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-28 17:41:21', '2015-11-28 17:41:21', '375', '375', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '', '', '', '', '2015-11-28 17:41:21', '0.00', '0.00', 'Puesto', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `departamento_id` int(11) NOT NULL,
  `nombre` varchar(125) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`departamento_id`, `nombre`, `orden`) VALUES
(1, 'Diseño', 1),
(3, 'Sistemas', 11),
(4, 'Comercial', 2),
(5, 'Construccion', 5),
(6, 'Presupuestos Y Concursos', 2),
(7, 'Admin.Proy', 4),
(8, 'Control de Cobranza', 6),
(9, 'Abastecimiento', 8),
(10, 'Calidad y Seguridad', 6),
(11, 'Mtto y Limpieza', 12),
(12, 'Contabilidad', 5),
(13, 'RH', 9),
(14, 'Contraloria', 7),
(15, 'Planeacion de Proyectos', 3),
(16, 'Juridico', 10),
(17, 'Finanzas', 4),
(18, 'Relaciones Institucionales', 3),
(99, 'Direccion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `empleado_id` int(11) NOT NULL,
  `empleado_num` int(11) DEFAULT NULL,
  `nombre` text,
  `apellido_p` text,
  `apellido_m` text,
  `su_aut` float DEFAULT NULL,
  `su_neg` decimal(10,2) DEFAULT NULL,
  `sd` decimal(10,2) DEFAULT NULL,
  `sdi` decimal(10,2) DEFAULT NULL,
  `sd_text` text,
  `su_sem` decimal(10,2) DEFAULT NULL,
  `su_sem_text` text,
  `su_men_b` decimal(10,2) DEFAULT NULL,
  `su_men_b_text` text,
  `imss_desc` decimal(10,2) DEFAULT NULL,
  `isr_desc` decimal(10,2) DEFAULT NULL,
  `su_sem_efectivo` decimal(10,2) DEFAULT NULL,
  `f_ajuste_su` date DEFAULT NULL,
  `num_cta_ban` text,
  `cta_ban_clabe` text,
  `cta_ban_id` int(11) DEFAULT NULL,
  `nom_id` varchar(45) DEFAULT NULL,
  `area_id` varchar(54) DEFAULT NULL,
  `departamento_id` varchar(45) DEFAULT NULL,
  `razon_social_id` int(11) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `curp` text,
  `rfc` text,
  `f_nacimiento` date DEFAULT NULL,
  `l_nacimiento` text,
  `dir_calle` text,
  `dir_colonia` text,
  `dir_cp` int(11) DEFAULT NULL,
  `dir_entidad` text,
  `dir_municipio` varchar(45) NOT NULL,
  `infonavit` text,
  `infonavit_num_cred` text,
  `factor_descuento` int(11) DEFAULT NULL,
  `vsm` int(11) DEFAULT NULL,
  `trabajador_tipo` int(11) DEFAULT NULL,
  `correo_acsa` text,
  `correo_personal` text,
  `cel_acsa` text,
  `cel_personal` text,
  `tel_personal` text,
  `fecha_baja` date DEFAULT NULL,
  `baja_motivo` text,
  `contrato_tipo` int(11) DEFAULT NULL,
  `contrato_fecha` date DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `estado_civil` text,
  `nacionalidad` text,
  `fecha_ingreso` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `proyecto_tipo` text,
  `sede` text,
  `jefe_id` int(11) DEFAULT NULL,
  `imss_num` int(11) DEFAULT NULL,
  `no_plastico` varchar(45) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `carrera` varchar(65) NOT NULL,
  `estudios` varchar(45) NOT NULL,
  `exp_prof` varchar(45) NOT NULL,
  `tipo_obra` varchar(125) NOT NULL,
  `su_sem_fiscal` decimal(10,2) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `no_banco` varchar(45) NOT NULL,
  `su_actual` decimal(10,2) NOT NULL,
  `su_anterior` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`empleado_id`, `empleado_num`, `nombre`, `apellido_p`, `apellido_m`, `su_aut`, `su_neg`, `sd`, `sdi`, `sd_text`, `su_sem`, `su_sem_text`, `su_men_b`, `su_men_b_text`, `imss_desc`, `isr_desc`, `su_sem_efectivo`, `f_ajuste_su`, `num_cta_ban`, `cta_ban_clabe`, `cta_ban_id`, `nom_id`, `area_id`, `departamento_id`, `razon_social_id`, `puesto`, `status`, `curp`, `rfc`, `f_nacimiento`, `l_nacimiento`, `dir_calle`, `dir_colonia`, `dir_cp`, `dir_entidad`, `dir_municipio`, `infonavit`, `infonavit_num_cred`, `factor_descuento`, `vsm`, `trabajador_tipo`, `correo_acsa`, `correo_personal`, `cel_acsa`, `cel_personal`, `tel_personal`, `fecha_baja`, `baja_motivo`, `contrato_tipo`, `contrato_fecha`, `edad`, `sexo`, `estado_civil`, `nacionalidad`, `fecha_ingreso`, `proyecto_tipo`, `sede`, `jefe_id`, `imss_num`, `no_plastico`, `cedula`, `carrera`, `estudios`, `exp_prof`, `tipo_obra`, `su_sem_fiscal`, `pais`, `no_banco`, `su_actual`, `su_anterior`) VALUES
(1, NULL, 'sebastian', 'treviño', 'salinas', 0, '0.00', '0.00', NULL, NULL, '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0000-00-00', '', '', 0, NULL, '', '', 0, '', 1, '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, 'M', 'Soltero', '', '0000-00-00 00:00:00', '', '', 0, 0, '', '', '', '', '', '', '0.00', '', '', '0.00', '0.00'),
(2, NULL, 'sebastian', 'treviño', 'salinas', 11000, '10000.00', '12000.00', NULL, NULL, '2500.00', '', '9999.00', 'vhjvhj', '999.00', '999.00', '99.00', '0000-00-00', '9999', '9999', 6, NULL, '2', 'Sistemas', 0, 'developer', 1, 'dyufighikjop', 'fgjkghkfvhgfhjg', '2008-07-28', 'monterrey', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'GarnaMao@gmail.com', '8481818', '8181818181', '818181818181', NULL, NULL, NULL, NULL, 0, 'M', 'Soltero', 'mexicana', '0000-00-00 00:00:00', 'A', 'vjhk', 0, 9999, '9999', '', '', '', '', '', '0.00', '', '', '0.00', '0.00'),
(3, NULL, 'sebastiano', 'treviño', 'treviño', 15000, '12000.00', '14000.00', NULL, NULL, '3452.05', '', '9999.00', 'vhjvhj', '999.00', '999.00', '2452.05', '2015-11-23', '9999', '9999', 6, NULL, '2', '3', 1, '3_1', 1, 'dyufighikjop', 'fgjkghkfvhgfhjg', '2008-07-28', 'monterrey', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'GarnaMao@gmail.com', '8481818', '8181818182', '818181818181', NULL, NULL, NULL, NULL, 0, 'M', 'Soltero', 'mexicana', '0000-00-00 00:00:00', '0', 'vjhk', 0, 9999, '9999', '8554655', '', 'asvbn', '2', '', '1000.00', '', '98588', '15000.00', '15000.00'),
(4, NULL, 'sebastian', 'treviño', 'salinas', 11000, '10000.00', '12000.00', NULL, NULL, '2301.37', NULL, NULL, NULL, '999.00', '999.00', '2101.37', NULL, '9999', '9999', 6, NULL, '1', '1', 1, '1_3', 1, 'dyufighikjop', 'fgjkghkfvhgfhjg', '1990-07-26', 'monterrey', 'afdfg', 'asf', 6500, 'vugv', '', NULL, NULL, NULL, NULL, NULL, NULL, 'GarnaMao@gmail.com', NULL, '8181818181', '818181818181', NULL, NULL, NULL, NULL, NULL, 'M', 'Soltero', 'mexicana', '2015-11-13 18:45:45', '375', NULL, 0, 9999, '', '85469872396', '', 'chgc', '1', '', '200.00', 'mexico', '985', '0.00', '0.00'),
(5, NULL, 'el inactivo', '', '', 0, '0.00', '0.00', NULL, NULL, '0.00', NULL, NULL, NULL, '0.00', '0.00', '0.00', NULL, '', '', 0, NULL, '', '', 0, '', 0, '', '', '0000-00-00', '', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '2015-11-17 20:39:20', '', NULL, 0, 0, '', '8547854785', '', 'secundaria', '0', '', '0.00', '', '', '0.00', '0.00'),
(6, NULL, 'sebastiano', 'treviño', 'salinas', 15000, '10000.00', '0.00', NULL, NULL, '2991.78', NULL, NULL, NULL, '0.00', '0.00', '2991.78', '2015-11-23', '', '', 0, NULL, '1', '1', 1, '1_1', 1, 'dyufighikjop', 'fgjkghkfvhgfhjg', '2015-12-31', 'monterrey', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'GarnaMao@gmail.com', NULL, '', '818181818181', NULL, NULL, NULL, NULL, NULL, 'M', 'Casado', 'mexicana', '2015-11-24 01:40:22', '375', NULL, 0, 0, '', '85469872396', '', 'chgc', '0', '', '0.00', 'mexico', '', '13000.00', '12000.00'),
(7, NULL, 'prueba', 'final', 'final', 11000, '10000.00', '12000.00', NULL, NULL, '2301.37', NULL, NULL, NULL, '999.00', '999.00', '1301.37', NULL, '9999', '9999', 6, NULL, '2', '3', 1, '3_1', 1, 'dyufighikjop', 'fgjkghkfvhgfhjg', '1989-08-28', 'monterrey', 'afdfg', 'asf', 6500, 'vugv', '', NULL, NULL, NULL, NULL, NULL, NULL, 'GarnaMao@gmail.com', NULL, '8181818181', '818181818181', '0000-00-00', NULL, NULL, NULL, NULL, 'M', 'Soltero', 'mexicana', '2015-09-15 05:00:00', '0', NULL, 0, 9999, '', '85469872396', '', 'chgc', 'hvcjh', '', '1000.00', 'mexico', '985', '10000.00', '0.00'),
(8, NULL, 'sebastian', 'treviño', 'salinas', 11000, '10000.00', '12000.00', NULL, NULL, '2301.37', NULL, NULL, NULL, '999.00', '999.00', '2301.37', NULL, '9999', '9999', 6, NULL, '1', '1', 1, '1_1', 1, 'dyufighikjop', 'fgjkghkfvhgfhjg', '1987-12-22', 'monterrey', 'afdfg', 'asf', 6500, 'vugv', 'aassaa', NULL, NULL, NULL, NULL, NULL, NULL, 'GarnaMao@gmail.com', NULL, '8181818181', '818181818181', '0000-00-00', NULL, NULL, NULL, NULL, 'M', 'Soltero', 'mexicana', '1980-12-19 06:00:00', '377', NULL, 0, 9999, '', '85469872396', '', 'chgc', 'Civil', '', '0.00', 'mexico', '985', '10000.00', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiares`
--

CREATE TABLE `familiares` (
  `familiar_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `familiares`
--

INSERT INTO `familiares` (`familiar_id`, `empleado_id`, `nombre`, `tipo`, `edad`, `direccion`) VALUES
(2, 0, 'sebastiana', '2', 54, 'hbgasiufgadfy'),
(3, 0, 'sebastiana', '2', 54, 'hbgasiufgadfy'),
(4, 6, 'sebastiana', '2', 54, 'hbgasiufgadfy'),
(5, 4, '', '4', 0, ''),
(6, 3, '', '', 0, ''),
(7, 6, '', '4', 0, ''),
(8, 4, '', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mtto_automoviles`
--

CREATE TABLE `mtto_automoviles` (
  `mtto_id` int(11) NOT NULL,
  `automovil_id` int(11) NOT NULL,
  `kilometraje` varchar(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `num_proy` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `tipo` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `num_proy`, `nombre`, `tipo`, `status`) VALUES
(1, 29, 'AYD ABASOLO AGUA POTABLE', 4, 3),
(2, 285, 'CECVAC SAN PEDRO DEMOLICION', 1, 3),
(3, 198, 'MPIO MONTEMORELOS TEATRO DE LA CIUDAD', 5, 6),
(4, 338, 'FEMSA OXXO SIERRA VISTA JUAREZ N.L.', 2, 4),
(5, 305, 'MEX SCT DISTRIBUIDOR VIAL AEROPUERTO TOLUCA', 4, 4),
(6, 292, 'MEX SCT DURANGO-PARRAL PAVIMENTACION', 4, 4),
(7, 201, 'MPIO ALLENDE PLAZA BUGAMBILIAS', 4, 6),
(8, 312, 'MEX PEMEX', 5, 6),
(9, 293, 'MEX SCT CHIHUAHUA PARRAL PAVIMENTACION', 4, 4),
(10, 296, 'CECVAC SAN PEDRO EDIFICIO', 5, 3),
(11, 9, 'OFICINAS ALLENDE', 5, 3),
(12, 1, 'ZPI PABLO ELIZONDO OFICINA', 1, 3),
(13, 244, 'MPIO GENERAL TERAN SABINO GORDO ALBERCA', 5, 3),
(14, 309, 'MPIO  GRAL TREVIÑO COL. COLOSIO INTRODUCCION DE DRENAJE ', 4, 4),
(15, 341, 'FEMSA CONSTRUCCION DE OXXO MONTE CRISTAL JUAREZ N.L.', 2, 4),
(16, 213, 'PABELLON M REMODELACION PASEO OCAMPO', 2, 4),
(17, 344, 'FRISA OBRA CIVIL SUBESTACIÓN ', 3, 4),
(18, 86, 'TURISMO NL CENTRO CULTURAL MINA', 4, 3),
(19, 229, 'OP EDO NL PARQUE PIPO', 4, 3),
(20, 304, 'MEX FONATUR PLAYA ESPIRITU SINALOA URBANIZACION', 4, 3),
(21, 64, 'AYD MORONES CONTINGENCIA', 4, 3),
(22, 290, 'PODER JUDICIAL JUZGADO DISTRITO MONTERREY', 5, 4),
(23, 2, 'PABLO ELIZONDO ALBERCA', 1, 3),
(24, 10, 'LUIS MENDOZA PALAPA', 6, 3),
(25, 205, 'RESIDENCIA SAN ANTONIO METEPEC', 1, 3),
(26, 35, 'PEPSI APODACA MURO DE CONTENCION Y RAMPAS', 3, 3),
(27, 188, 'CUAHTEMOC REPARACION IGLESIA', 5, 3),
(28, 134, 'VALLE DEL CARRIZAL ACCESO', 1, 3),
(29, 147, 'GUDELIO CAVAZOS CASA', 1, 3),
(30, 8, 'GUSTAVO CAVAZOS CASA', 1, 3),
(31, 52, 'ZPI COCE EUGENIO A. SOLIS', 5, 3),
(32, 146, 'SUSY MARROQUIN CASA ALLENDE', 1, 3),
(33, 49, 'MERCADO LINARES (OBRAS ANTERIORES)', 4, 3),
(34, 51, 'MONTEMORELOS RECREATIVO', 4, 3),
(35, 27, 'PENTHOUSE', 1, 3),
(36, 347, 'FEMSA CONSTRUCCIÓN DE OXXO FRESNO CADEREYTA N.L. ', 2, 4),
(37, 297, 'EMILIA STA MARIA CASA MONTEMORELOS REMODELACION', 1, 3),
(38, 56, 'COCE 10 DESIDERIO TREVIÑO', 5, 3),
(39, 262, 'FIESTA AMERICANA SAN PEDRO SHOW ROOM', 2, 3),
(40, 352, 'OP DEL EDO TAMPS, HOSPITAL GRAL  MATAMOROS', 5, 4),
(41, 356, 'PASTELERÍA LETY, ALMACÉN GENERAL, SAN NICOLÁS DE LOS GARZA, N.L., OBRA CIVIL Y ACABADOS', 3, 4),
(42, 57, 'COCE 10 JOSE LEZAMA', 5, 3),
(43, 343, 'REA REMODELACION DE BAÑOS CIENEGA DE FLORES N.L.', 3, 3),
(44, 17, 'COCE CARLOS CANSECO', 5, 3),
(45, 282, 'DALTON ESPACIO DEL VALLE GUADALAJARA', 1, 3),
(46, 21, 'PYECSA', 2, 3),
(47, 24, 'WHIRLPOOL APODACA BOD PINT', 3, 3),
(48, 25, 'COCE REHABILITACIONES', 4, 3),
(49, 36, 'AYD MONTERREY MORONES PRIETO COLECTOR SUR', 4, 3),
(50, 39, 'COCE CECUBI 106 2011 1/2', 5, 3),
(51, 38, 'PEPSI APODACA PAVIMENTACION EXTERIOR', 3, 3),
(52, 37, 'PEPSI APODACA ILUMINACION EXTERIOR', 3, 3),
(53, 26, 'MONTEMORELOS PLAZA BUROCRATAS', 4, 3),
(54, 20, 'CLISA FRACC SAN ANTONIO OUTDOOR', 6, 3),
(55, 298, 'MPIO MONTEMORELOS SERVICIOS PRIMARIOS BACHEO', 4, 3),
(56, 18, 'CLISA OFICINAS', 5, 3),
(57, 13, 'S. PUBLICOS PLAZA LA MODERNA', 4, 3),
(58, 19, 'OP DEL EDO ALUMBRADO LA ERMITA', 4, 3),
(59, 15, 'COVA II', 1, 3),
(60, 11, 'COCE NUEVA CREACION', 5, 3),
(61, 12, 'AYD SANTAROSA-MEZQUITAL', 4, 3),
(62, 14, 'COCE RAYMUNDO RIVERA', 5, 3),
(63, 184, 'MPIO ALLENDE TEATRO DE LA CIUDAD', 5, 3),
(64, 89, 'GUSTAVO CAVAZOS CASA 2012', 1, 3),
(65, 6, 'OP EDO NL CIUDAD POLICIAL', 5, 3),
(66, 286, 'CECVAC EDIFICIO MANZANARES SAN PEDRO ESTRUCTURA', 1, 4),
(67, 251, 'LAS TERRAZAS MURO NORTE', 1, 3),
(68, 180, 'SCT P.E.CARR.POZARRICA-VERACRUZ', 4, 3),
(69, 291, 'MEX SCT ZACATECAS-FRESNILLO PAVIMENTACION', 4, 4),
(70, 69, 'INIFED JOSE MARIA CARDENAS', 5, 3),
(71, 70, 'INIFED SERAFIN PEÑA', 5, 3),
(72, 71, 'INIFED NIÑOS HEROES', 5, 3),
(73, 289, 'PODER JUDICIAL TRIBUNAL MIXTO SALTILLO REMODELACION', 5, 4),
(74, 72, 'INIFED GUADALUPE SALAZAR', 5, 3),
(75, 74, 'TERAN MODULO DEPORTIVO', 4, 3),
(76, 190, 'MONTEMORELOS PARQUE TEMATICO ETAPA 3', 4, 3),
(77, 75, 'OP EDO NL UNIVERSIDAD CS CASETA PROV', 5, 3),
(78, 271, 'GHONER NAVES INDUSTRIALES', 3, 4),
(79, 81, 'MONTEMORELOS DEPORTIVO LA AMISTAD', 4, 3),
(80, 248, 'LAS TERRAZAS FACHADA LADRILLO', 1, 4),
(81, 40, 'GERARDO CAVAZOS CASA', 1, 3),
(82, 23, 'MONTEMORELOS REMODELACION PLAZA GIL DE LEYVA', 4, 3),
(83, 22, 'MONTEMORELOS TRES PLAZAS', 4, 3),
(84, 113, 'JUAN RUBEN LA MOLIENDA 3', 5, 3),
(85, 107, 'INIFED SEC. TEC. 22 GUSTAVO FARIAS FERNANDEZ', 5, 3),
(86, 125, 'SUSY SALAZAR CASA', 1, 3),
(87, 4, 'PUNTO CENTRAL FASE 2 ', 1, 3),
(88, 256, 'METROPOLITAN SAN PEDRO CANCELERÍA', 1, 4),
(89, 284, 'INVURQ HOSPITAL TECOLUTLA ', 5, 4),
(90, 340, 'FEMSA CONSTRUCCIÓN DE OXXO EL PAISANO MONTEMORELOS N.L.', 2, 4),
(91, 349, 'EDIFICIO INSIGNIA OBRA CIVIL Y ESTRUCTURA DE CONCRETO SALTILLO, COAHUILA', 5, 4),
(92, 118, 'COCE TECHUMBRE JN CASIMIRO S. GONZALEZ', 5, 3),
(93, 58, 'COCE 10 JUAN DE DIOS PEZA', 5, 3),
(94, 43, 'ZPI 11 TURISMO NL MMORELOS MIRADOR ET.1', 4, 3),
(95, 67, 'TERAN CENTRO HISTORICO ILUMINACION 2A ETAPA', 4, 3),
(96, 73, 'OP EDO NL CASA ESTUDIANTE', 5, 3),
(97, 87, 'TURISMO NL CENTRO CULTURAL LINARES', 4, 3),
(98, 68, 'FELIPE MARROQUIN DEPARTAMENTO', 1, 3),
(99, 94, 'TERAN CENTRO HISTORICO  ELECTRIFICACION 2A ETAPA 2012', 4, 3),
(100, 7, 'TERAN CENTRO HISTORICO BANQUETAS ', 4, 3),
(101, 95, 'JUAN RUBEN LA MOLIENDA 2', 5, 3),
(102, 181, 'CASA SANTA CECILIA', 5, 3),
(103, 97, 'ABRAHAM G VAO', 1, 3),
(104, 96, 'ACSA ESTUDIO O2', 5, 3),
(105, 103, 'INIFED ADOLFO LOPEZ MATEOS', 5, 3),
(106, 104, 'INIFED HEROES DEL 47', 5, 3),
(107, 105, 'INIFED LIC. ARTURO B. DE LA GARZA', 5, 3),
(108, 106, 'INIFED PLAN DE AYUTLA', 5, 3),
(109, 116, 'COCE IMPER ABELARDO A. LEAL NO. 3', 5, 3),
(110, 129, 'DS EDO NL MTTO. 5 CENTROS COMUNITARIOS', 5, 3),
(111, 135, 'CECUBI EXPLANADA', 5, 3),
(112, 138, 'ICIFED PRIM VICTORIANO TREVIÑO', 5, 3),
(113, 139, 'ICIFED PRIM RUBEN DARIO', 5, 3),
(114, 140, 'ICIFED PRIM RUBEN ALANIS', 5, 3),
(115, 142, 'VALLE DEL CARRIZAL BANQUETAS', 4, 3),
(116, 223, 'MPIO ALLENDE REHABILITACION PLAZA LAS MORAS', 4, 6),
(117, 101, 'SANTA BARBARA N13', 4, 3),
(118, 143, 'RESIDENCIA ARREDONDO', 1, 3),
(119, 98, 'TALLER DE MOTOCICLETAS', 2, 3),
(120, 137, 'ICIFED PRIM SILVINO JARAMILLO', 5, 3),
(121, 160, 'CENTRO COMERCIAL MONTEMORELOS', 2, 3),
(122, 60, 'COCE 10 LUIS GONZALEZ', 5, 3),
(123, 59, 'COCE 10 JUVENTINO GONZALEZ', 5, 3),
(124, 62, 'COCE 10 SILVESTRE REVUELTAS', 5, 3),
(125, 128, 'OP EDO NL ECOVIA', 4, 3),
(126, 144, 'ICIFED SEC NUEVA CREACION CIENEGA DE FLORES', 5, 3),
(127, 224, 'MADISA AMPLIACION DE NAVE PLANTA SANTA CATARINA', 3, 4),
(128, 121, 'TURISMO NL MUSEO ALLENDE 3', 4, 3),
(129, 99, 'TORREVILLAS OFICINAS', 5, 3),
(130, 127, 'COCE TECHUMBRE SEC TEC 52 FRANCISCO VILLA', 5, 3),
(131, 131, 'GERARDO CAVAZOS CASA 2012', 1, 3),
(132, 132, 'LA GRAN FAMILIA', 5, 3),
(133, 141, 'PYECSA PH01', 5, 3),
(134, 133, 'RANCHO EL PERTIGO REHABILITACION', 6, 3),
(135, 28, 'COCE IMPERMEABILIZACIONES', 5, 3),
(136, 31, 'IMPER OFICINAS ALLENDE', 5, 3),
(137, 32, 'TERAN CENTRO HISTORICO FACHADAS', 4, 3),
(138, 33, 'TERAN UNIDAD DEPORTIVA', 4, 3),
(139, 34, 'COCE IMPERMEABILIZACIONES ETAPA 2', 5, 3),
(140, 319, 'INTERNACIONAL DE INVERSIONES SAQQARA AMENIDADES  SAN PEDRO GZA. GARCÍA.', 5, 4),
(141, 102, 'TERAN MODULO DEPORTIVO PASTO', 4, 3),
(142, 117, 'COCE TECHUMBRE CAM FRAY PONCE DE LEÓN', 5, 3),
(143, 45, 'COCE OFICINAS TRIBUNAL NL', 5, 3),
(144, 46, 'TERAN CENTRO HISTORICO  ', 4, 3),
(145, 214, 'CASA HIRAM SAENZ SANTAMARIA', 1, 6),
(146, 48, 'ZPI 2 TERAN PUENTE COLGANTE REHABILITACION', 4, 3),
(147, 55, 'COCE 10 CUAUHTEMOC', 5, 3),
(148, 187, 'COPACHISA PROYECTO ARTHUR BARDA PERIMETRAL', 2, 3),
(149, 148, 'MARIA FERNANDA REMODELACION CASA', 1, 3),
(150, 54, 'COCE 10 ALFREDO ZALCE', 5, 3),
(151, 136, 'BENAVIDES REMODELACION ALITAS REMEX', 2, 3),
(152, 50, 'TERAN CENTRO HISTORICO  ELECTRIFICACION 1A ETAPA', 4, 3),
(153, 88, 'TURISMO NL PROYECTO MACROPLAZA', 4, 3),
(154, 91, 'COCE CECUBI 2012', 5, 3),
(155, 185, 'ESTETICA PLAZA LAS VILLAS', 2, 3),
(156, 177, 'ICIFED NUEVA CREACION PESQUERIA', 5, 3),
(157, 175, 'ICIFED LUIS TIJERINA', 5, 3),
(158, 47, 'TERAN FUENTE PLAZA ZARAGOZA', 4, 3),
(159, 76, 'OP EDO NL UNIVERSIDAD CS ESCUELA BASIC', 5, 3),
(160, 77, 'OP EDO NL UNIVERSIDAD CS INGENIERIAS', 5, 3),
(161, 78, 'OP EDO NL UNIVERSIDAD CS TORRE VIG', 5, 3),
(162, 79, 'SIST CAMINOS NL DR COSS PUENTE', 4, 3),
(163, 84, 'TURISMO NL MUSEO ALLENDE', 4, 3),
(164, 212, 'PABELLON M ALBAÑILERIA', 2, 4),
(165, 182, 'SIST CAMINOS RECONSTRUCCION PUENTE CALERAS', 4, 3),
(166, 217, 'EDIFICIO OFICINAS TECNICO ADMINISTRATIVAS MATAMOROS', 5, 4),
(167, 216, 'ELECTRIFICACION RURAL ZONA VALLES', 4, 4),
(168, 228, 'CFE CENTRO DE DISTRIBUCION GARCIA', 3, 4),
(169, 163, 'BENAVIDES REMODELACION HIMALAYA', 2, 3),
(170, 279, 'OP EDO NL PGJ PALACIO DE JUSTICIA PROY EJECUTIVO ', 5, 3),
(171, 174, 'ICIFED PRIM VIRGINIA JIMENEZ', 5, 3),
(172, 172, 'KATTY SANCHEZ REMODELACION CASA', 1, 3),
(173, 167, 'DOMENE REMODELACION CASA', 1, 3),
(174, 170, 'AYD SAN ANTONIO ALLENDE COLECTOR SANITARIO', 4, 3),
(175, 258, 'BANORTE', 2, 4),
(176, 316, 'ESCALA TOWN HOUSES INSTALACIONES HIDRÁULICAS', 5, 4),
(177, 355, 'CORPORATIVO PLENITUD, GUADALAJARA, OBRA CIVIL', 2, 4),
(178, 169, 'MONTEMORELOS PARQUE TEMATICO', 4, 3),
(179, 166, 'ORANGE RANCHO LA LOMA INGENIERIAS', 4, 3),
(180, 227, 'COPACHISA PROYECTO ARTHUR MONTERREY PAVIMENTACION', 4, 4),
(181, 237, 'PODER JUDICIAL SALA JUICIOS ORALES NEZAHUATLCOYTL EDOMEX', 5, 4),
(182, 236, 'PODER JUDICIAL SALA DE AUDIENCIA COATZACOALCOS VER', 5, 4),
(183, 278, 'AYD MONTEMORELOS COLECTOR N57', 4, 3),
(184, 183, 'MONTEMORELOS PARQUE TEMATICO ETAPA 2', 4, 3),
(185, 200, 'MPIO GENERAL TERAN UNIDAD DEPORTIVA PEC', 4, 6),
(186, 273, 'SCT NAYARIT PAVIMENTACION-TUNEL ', 4, 4),
(187, 270, 'SCT PAVIMENTACION CALERA NUEVA ALIANZA ZACATECAS', 4, 4),
(188, 42, 'ZPI TERAN CENTRO HISTORICO BANQUETAS', 4, 3),
(189, 269, 'SCT PAVIMENTACION CAMINO SANTARITA ZACATECAS', 4, 4),
(190, 274, 'MPIO TOLUCA PASEO DE LA LUZ PAVIMENTACION', 4, 4),
(191, 249, 'LAS TERRAZAS ESTRUCTURA ELEVADORES', 1, 4),
(192, 238, 'FANTASIAS MIGUEL CITADEL', 2, 4),
(193, 265, 'ADHOC TOWN HOUSES BOSQUES DEL VALLE', 1, 4),
(194, 225, 'ELECTRIFICACION RURAL 9 TAMAZUCHALE', 4, 4),
(195, 263, 'FIESTA AMERICANA SAN PEDRO MUROS ELEVADORES', 2, 4),
(196, 235, 'PEPSI CENTRO DE DISTRIBUCION DURANGO', 3, 4),
(197, 325, 'PEMEX MANTENIMIENTO DEPORTIVO CIUDAD DEL CARMEN CAMPECHE', 5, 6),
(198, 191, 'PE OP EDO NL UNIVERSIDAD CIENCIAS DE LA SEGURIDAD', 5, 3),
(199, 243, 'FIESTA AMERICANA SAN PEDRO  ALBAÑILERIA Y ACABADOS', 2, 3),
(200, 173, 'OP EDO NL HOSPITAL MONTEMORELOS 2', 5, 3),
(201, 240, 'MPIO ALLENDE OFICINAS ADMINISTRATIVAS SEGUNDO PISO', 5, 6),
(202, 327, 'PEMEX CENDIS MANTENIMIENTO', 3, 6),
(203, 329, 'DELTA DESARROLLOS PLAZA VIA MONTERREY', 2, 4),
(204, 315, 'CAPITEL DESARROLLO AZUNA OFICINAS CANCUN', 5, 4),
(205, 226, 'ELECTRIFICACION RURAL 10 TAMAZUCHALE', 4, 4),
(206, 63, 'TERAN CENTRO HISTORICO ILUMINACION 1', 4, 3),
(207, 82, 'OP EDO NL OFICINA GENERAL', 5, 3),
(208, 112, 'INIFED SERTOMA PIO X', 5, 3),
(209, 159, 'OP EDO NL OFICINAS CONCILIACION 2013', 5, 3),
(210, 192, 'SCT CHENCOLLI-HOPELCHEN-CAMPECHE', 4, 3),
(211, 294, 'ICIFED CASA BOTE SANTIAGO', 5, 3),
(212, 168, 'OP EDO NL HOSPITAL MONTEMORELOS', 5, 3),
(213, 193, 'AYD EL CARMEN AMPIACION COLECTOR N21', 4, 3),
(214, 334, 'MEX IMSS UNIDAD MEDICINA FAMILIAR NO. 76, 10 CONSULTORIOS EN URUAPAN MICHOACAN', 5, 4),
(215, 331, 'PEPSI ALTA Y MEDIA TENSION MEXICO', 3, 4),
(216, 335, 'OP DEL EDO TAMPS, HOSPITAL GENERAL DE CIUDAD MADERO ', 5, 4),
(217, 158, 'BENAVIDES REMODELACION VASCONCELOS', 2, 3),
(218, 301, 'ICIFED RUBEN VILLARREAL EL CARMEN', 5, 4),
(219, 66, 'PYECSA HELIPUERTO', 5, 3),
(220, 277, 'SCT CD VALLES-TAMPICO CARRETERA', 4, 4),
(221, 275, 'MPIO TOLUCA SANTIN PUENTE PEATONAL', 4, 3),
(222, 232, 'MPIO TOLUCA TIANGUIS AVIACION AUTOPAN ', 4, 3),
(223, 176, 'SCT P.E.TALUD.JALAPA-VERACRUZ', 4, 3),
(224, 322, 'CASA COLINA BLANCA SAN PEDRO, N.L.', 5, 3),
(225, 100, 'SATYA', 5, 3),
(226, 93, 'PUNTO CENTRAL FASE 2 2012', 2, 3),
(227, 288, 'FEMSA OXXO MONTERREY 1 ', 2, 4),
(228, 85, 'TURISMO NL MUSEO ALLENDE 2DA ETAPA', 4, 3),
(229, 16, 'COCE ELVIRA RDZ.', 5, 3),
(230, 108, 'INIFED GUADALUPE AMOR', 5, 3),
(231, 109, 'INIFED PROFRA. LIBRADA GUAJARDO GONZALEZ', 5, 3),
(232, 110, 'INIFED PROFR. JUAN GARZA FERNANDEZ', 5, 3),
(233, 111, 'INIFED SOR JUANA I. DE LA CRUZ', 5, 3),
(234, 90, 'PYECSA HELIPUERTO 2012', 5, 3),
(235, 124, 'COCE CECUBI GRADAS', 5, 3),
(236, 41, 'OP EDO NL OFICINAS CONCILIACION Y ARBITRAJE', 5, 3),
(237, 314, 'OP EDO NL HOSPITAL MONTEMORELOS 3', 5, 3),
(238, 231, 'MONTEMORELOS PARQUE TEMATICO ETAPA 4', 4, 3),
(239, 283, 'ORANGE LA NACION MONTERREY', 1, 3),
(240, 345, 'IP PROYECTOS LIVING TEC ALIMENTACION HIDRAULICA A EDIFICIO MONTERREY, N.L.', 4, 4),
(241, 120, 'COCE TECHUMBRE HECTOR VALDEZ TREVIÑO', 5, 3),
(242, 119, 'COCE TECHUMBRE JN ADOLFO PRIETO', 5, 3),
(243, 250, 'LAS TERRAZAS RED PLUVIAL', 1, 3),
(244, 92, 'EMILIA SANTAMARIA ', 1, 3),
(245, 114, 'COCE IMPER MARIA DE JSUS LOZANO DE SALINAS', 5, 3),
(246, 115, 'COCE IMPER CENTENARIA MIGUEL HIDALGO', 5, 3),
(247, 122, 'CLISA OFICINAS 2012', 5, 3),
(248, 154, 'LAMPAZOS REMODELACION CASA', 1, 3),
(249, 152, 'PUNTO CENTRAL AMENIDADES', 2, 3),
(250, 123, 'CASA LAS MISIONES GALO', 1, 3),
(251, 149, 'SCT P.E. CARR HUIJAPAN-PINOTEPA OAXACA', 4, 3),
(252, 151, 'MONTEMORELOS ANDADOR DE CONCRETO COLONIA BUROCRATAS', 4, 3),
(253, 153, 'IGLESIA ALLENDE BANCAS', 5, 3),
(254, 161, 'CHERRY BLOSSOM ', 2, 3),
(255, 162, 'BENAVIDES REMODELACION COLOSIO', 2, 3),
(256, 164, 'BENAVIDES REMODELACION CONSTITUYENTES DE QUERETARO', 2, 3),
(257, 155, 'IGLESIA SABINAS RETABLO', 5, 3),
(258, 317, 'CECVAC REMODELACIÓN MÓDULO 10 SAN PEDRO GARZA GARCÍA', 5, 3),
(259, 150, 'SCT P.E. ENTR PACHUCA-TUXPAN', 4, 3),
(260, 156, 'SCT P.E. CORR COAHUILA-SINALOA ', 4, 3),
(261, 83, 'OFICINAS LA MOLIENDA', 5, 3),
(262, 80, 'SIST CAMINOS NL CAMINO A LOS MIMBRES', 4, 3),
(263, 126, 'FAMILIA AGUIRRE CASA HABITACION', 1, 3),
(264, 44, 'ROBERTO SAENZ CABALLERO CASA', 1, 3),
(265, 157, 'SERGIO ALANIS CASA', 1, 3),
(266, 186, 'PABELLON M TABLARROCA Y PINTURA', 2, 3),
(267, 179, 'PYECSA CASA GALO ADECUACION', 1, 3),
(268, 178, 'ORANGE RANCHO LA LOMA URBANIZACION', 4, 3),
(269, 300, 'ICIFED SILVINO JARAMILLO EL CARMEN', 5, 3),
(270, 53, 'COCE 10 ABRIL 30', 5, 3),
(271, 145, 'BENAVIDES REMODELACION BIF LAS AMERICAS', 2, 3),
(272, 307, 'SALINAS CASA AGUALEGUAS RESTAURACION', 1, 3),
(273, 323, 'ORANGE INVESTMENTS NOUPARC ACABADOS SANTA CATARINA N.L.', 5, 3),
(274, 359, 'IMSS SUPERVISIÓN Y CONTROL DE DESARROLLO DEL PROYECTO INTEGRAL DEL HOSPITAL GENENRAL REGIONAL 260 CAMAS SUSTENTABLE, EN EL MARQUÉS, QUERÉTARO.', 5, 4),
(275, 281, 'CENTRO COMERCIAL MONTEMORELOS ETAPA 2', 2, 3),
(276, 366, 'MONTEMORELOS PARQUE TEMATICO ETAPA 5', 4, 3),
(277, 358, 'ARBOLEDA RESIDENCIAL TORRES CASSEA /DAHLIA, SAN PEDRO FACHADAS', 1, 3),
(278, 354, 'PUEBLO SERENA, VALLE ALTO MTY,  ALBAÑILERÍA Y ACABADOS', 2, 3),
(279, 363, 'AEROPUERTO DEL BAJÍO,  SALA VIP, SILAO GTO, ACABADOS', 2, 4),
(280, 342, 'HOTEL FIESTA AMERICANA EN PABELLON M (HABITACION MUESTRA)', 1, 3),
(281, 171, 'SCT P.E.CARR.VERACRUZ-VERACRUZ', 4, 3),
(282, 324, 'ORANGE INVESTMENTS NOUPARC OBRAS EXTERIORES SANTA CATARINA N.L.', 5, 3),
(283, 310, 'MEX AEROPUERTO DF CAMPAMENTO', 5, 4),
(284, 219, 'MPIO ALLENDE EXPLANADA CULTURAL', 5, 3),
(285, 362, 'JL BALLI MARTÍNEZ, TORRE TREBOL, SAN PEDRO, ALBAÑILERÍA', 2, 4),
(286, 360, 'DOMENE CASA SAN PEDRO PINTURA', 1, 3),
(287, 326, 'PEPSI LAMINACION Y PAVIMENTACION ALTAMIRA TAMAULIPAS', 3, 3),
(288, 320, 'ORANGE INVESTMENTS NOUPARC FACHADAS SANTA CATARINA N.L.', 5, 3),
(289, 65, 'CASA LACUNZA', 1, 3),
(290, 361, 'MPIO ALLENDE, CALLE FUTURO LIBRAMIENTO SECC. EL VERGEL PAVIMENTACIÓN  ', 4, 3),
(291, 365, 'MPIO GENERAL TERAN SABINO GORDO ETAPA 3 REHABILITACION', 4, 3),
(292, 195, 'ICIFED CENTRO DE ALTO RENDIMIENTO NIÑOS HEROES', 5, 3),
(293, 61, 'COCE 10 MANUEL ACUÑA', 5, 3),
(294, 367, 'QUIFER MEXICANA SKALA CORPORATIVO ETAPA 2 OBRA CIVIL', 2, 4),
(295, 374, 'MPIO GENERAL TERAN SABINO GORDO ETAPA 4 TROTAPISTA', 5, 3),
(296, 377, 'ARBOLEDA RESIDENCIAL TORRES CASSEA /DAHLIA, SAN PEDRO ALBAÑILERIA Y TABLAROCA', 1, 3),
(297, 318, 'QUIFER MEXICANA SKALA CORPORATIVO TLALNEPANTLA ESTADO DE MÉXICO', 5, 3),
(298, 375, 'PLAZA SERENA EDIFICIO J, MTY. N.L, OBRA CIVIL', 2, 3),
(299, 369, 'OP DEL EDO TAMPS, MERCADO JUÁREZ-HIDALGO, TAMPICO, TAMPS. INFRAESTRUCTURA', 4, 3),
(300, 371, 'GACM CAMINO DE ACCESO AEROPUERTO DE LA CD. DE MÉXICO', 4, 4),
(301, 130, 'PLAZA COMERCIAL MONTEMORELOS', 2, 3),
(302, 280, 'MPIO GENERAL TERAN SABINO GORDO ETAPA 2 ', 5, 3),
(303, 370, 'GACM NIVELACIÓN Y LIMPIEZA AEROPUERTO CD. DE MÉXICO', 4, 4),
(304, 368, 'OP DEL EDO TAMPS, PLAZA DE LAS HIJAS DE TAMPICO, INFRAESTRUCTURA.', 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `puesto_id` int(11) NOT NULL,
  `nombre` varchar(125) NOT NULL,
  `departamento_id` int(11) NOT NULL,
  `clave` varchar(5) NOT NULL,
  `sueldo_tope` decimal(10,2) NOT NULL,
  `jefe_inmediato` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`puesto_id`, `nombre`, `departamento_id`, `clave`, `sueldo_tope`, `jefe_inmediato`, `orden`) VALUES
(1, 'Gerente de Diseño', 1, '1_1', '0.00', 0, 1),
(2, 'Diseñador', 1, '1_2', '0.00', 1, 2),
(4, 'Programador', 3, '3_1', '0.00', 5, 0),
(5, 'Encargado de Soporte', 3, '3_2', '0.00', 5, 0),
(6, 'Auxiliar de Soporte', 3, '3_3', '0.00', 5, 0),
(8, 'Vendedor', 4, '4_2', '0.00', 43, 0),
(9, 'Gerente de Contruccion', 5, '5_1', '0.00', 44, 1),
(10, 'Superintendente Gral.', 5, '5_2', '0.00', 9, 2),
(11, 'Superintendente Operativo', 5, '5_3', '0.00', 10, 3),
(12, 'Superintendente Adminsitrativo', 7, '7_4', '0.00', 22, 4),
(13, 'Residente Gral. (ROA)', 5, '5_4', '0.00', 11, 4),
(14, 'Residente Operativo (RO)', 5, '5_6', '0.00', 11, 5),
(15, 'Residente Adminstrativo (RA)', 7, '7_7', '0.00', 12, 6),
(16, 'Residente Aux. Operativo', 5, '5_8', '0.00', 11, 6),
(17, 'Residente Aux. Adminstrativo', 7, '7_9', '0.00', 12, 6),
(18, 'Gerente Psp y Concursos', 6, '6_1', '0.00', 44, 1),
(19, 'Analista de Psp', 6, '6_2', '0.00', 18, 3),
(20, 'Aux. de Psp', 6, '6_3', '0.00', 18, 4),
(21, 'Encargado de Normatividad', 6, '6_4', '0.00', 18, 2),
(22, 'Gerente de Admon de Proyectos', 7, '7_1', '0.00', 44, 1),
(23, 'Administrador de Proyectos', 7, '7_2', '0.00', 22, 2),
(24, 'Adminstrador de ERP', 7, '7_3', '0.00', 22, 3),
(25, 'Gerente de Cobranza', 8, '8_1', '0.00', 45, 0),
(26, 'Aux. de Cobranza', 8, '8_2', '0.00', 25, 0),
(27, 'Encargado de Compras', 9, '9_1', '0.00', 45, 0),
(28, 'Aux. de Compras', 9, '9_2', '0.00', 27, 0),
(29, 'Residente LEAD', 10, '10_1', '0.00', 44, 1),
(30, 'Auxiliar de limpieza', 11, '11_1', '0.00', 36, 0),
(31, 'Gerente de Cotabilidad/Tesoreria', 12, '12_1', '0.00', 45, 0),
(32, 'Encargado Contablidad', 12, '12_2', '0.00', 31, 0),
(33, 'Aux. Contable', 12, '12_3', '0.00', 32, 0),
(34, 'Tesorero/Bancos', 12, '12_4', '0.00', 32, 0),
(35, 'Tesorero/Pagos', 12, '12_5', '0.00', 32, 0),
(36, 'Encargado de RH', 13, '13_1', '0.00', 45, 0),
(37, 'Contralor', 14, '14_1', '0.00', 45, 0),
(38, 'Aux. de contralor', 14, '14_2', '0.00', 37, 0),
(39, 'Gerente de Planeacion de Proy.', 15, '15_1', '0.00', 44, 1),
(40, 'Aux de Planeacion de Proy.', 15, '15_2', '0.00', 39, 2),
(41, 'Gerente Juridico', 16, '16_1', '0.00', 45, 0),
(42, 'Gerente de Finanzas', 17, '17_1', '0.00', 45, 0),
(43, 'Director General', 99, '99_1', '0.00', 0, 0),
(44, 'Gerente Operativo', 99, '99_2', '0.00', 43, 0),
(45, 'Director Adminstrativo', 99, '99_3', '0.00', 43, 0),
(46, 'Asistente de Direccion Gral.', 99, '99_5', '0.00', 43, 0),
(47, 'Gerente de Relaciones Institucionales', 18, '18_1', '0.00', 43, 0),
(48, 'Asistente de Relaciones Institucionales', 18, '18_2', '0.00', 47, 0),
(49, 'Practicante de Sistemas', 3, '3_4', '0.00', 5, 0),
(50, 'Practicante de Comercial', 4, '4_3', '0.00', 0, 0),
(51, 'Practicante de Control de Cobranza', 8, '8_3', '0.00', 25, 0),
(52, 'Practicante de Abastecimiento', 9, '9_3', '0.00', 27, 0),
(53, 'Practicante de Contabilidad', 12, '12_6', '0.00', 32, 0),
(54, 'Practicante de RH', 13, '13_2', '0.00', 36, 0),
(55, 'Practicante de Contraloria', 14, '14_3', '0.00', 37, 0),
(56, 'Practicante de Juridico', 16, '16_2', '0.00', 41, 0),
(57, 'Practicante de Finanza', 17, '17_2', '0.00', 42, 0),
(58, 'Practicante de Relaciones Institucionales', 18, '18_3', '0.00', 47, 0),
(59, 'Asistente de Servicios', 99, '99_7', '0.00', 62, 0),
(60, 'Asistente de Direccion Adminstrativa', 99, '99_6', '0.00', 0, 0),
(61, 'Practicante Diseñador', 1, '1_3', '0.00', 0, 3),
(62, 'Cordinador De Servicios', 99, '99_4', '0.00', 0, 0),
(63, 'Practicante de Direccion', 99, '99_9', '0.00', 0, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `session_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_move` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `tel_id` int(11) NOT NULL,
  `compania` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `num_cuenta` varchar(45) NOT NULL,
  `razon_social` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `puesto` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `name`, `puesto`, `activo`) VALUES
(1, 'sebastian', 'qwerty', 'sebastian t', 'Desarrollo', 1),
(2, 'demo', 'demo', 'demo', 'demo', 1),
(3, 'miroslava', 'qwertyui', 'Miroslava Linares', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automoviles`
--
ALTER TABLE `automoviles`
  ADD PRIMARY KEY (`automovil_id`);

--
-- Indices de la tabla `cambios_empleados`
--
ALTER TABLE `cambios_empleados`
  ADD PRIMARY KEY (`cambio_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`departamento_id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`empleado_id`);

--
-- Indices de la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD PRIMARY KEY (`familiar_id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`puesto_id`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`tel_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automoviles`
--
ALTER TABLE `automoviles`
  MODIFY `automovil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cambios_empleados`
--
ALTER TABLE `cambios_empleados`
  MODIFY `cambio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `empleado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `familiares`
--
ALTER TABLE `familiares`
  MODIFY `familiar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;
--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `puesto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `tel_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
