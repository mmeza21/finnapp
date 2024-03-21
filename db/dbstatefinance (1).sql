-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2024 a las 04:15:26
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbstatefinance`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_results`
--

CREATE TABLE `tbl_results` (
  `id_result` int(11) NOT NULL,
  `co_person_cost` double(9,4) DEFAULT NULL,
  `co_medical_fees` double(9,4) DEFAULT NULL,
  `co_medication_cost` double(9,4) DEFAULT NULL,
  `co_material_cost` double(9,4) DEFAULT NULL,
  `co_maintenance` double(9,4) DEFAULT NULL,
  `co_investigation_cost` double(9,4) DEFAULT NULL,
  `co_lab_cost` double(9,4) DEFAULT NULL,
  `co_image_cost` double(9,4) DEFAULT NULL,
  `co_intercenter_ohsjd_cost` double(9,4) DEFAULT NULL,
  `co_other_cost` double(9,4) DEFAULT NULL,
  `ga_person_admin_expenses` double(9,4) DEFAULT NULL,
  `ga_professional_fees` double(9,4) DEFAULT NULL,
  `ga_bank_expenses` double(9,4) DEFAULT NULL,
  `ga_various_admin_sales_expenses` double(9,4) DEFAULT NULL,
  `ga_contributions_curia_community_expenses` double(9,4) DEFAULT NULL,
  `ga_trial_legal_expenses` double(9,4) DEFAULT NULL,
  `ga_portfolio_impairment_provision` double(9,4) DEFAULT NULL,
  `ga_inventory_impairrment_provision` double(9,4) DEFAULT NULL,
  `ga_other_low_asset_provision` double(9,4) DEFAULT NULL,
  `other_no_operating_income` double(9,4) DEFAULT NULL,
  `other_no_operating_expenses` double(9,4) DEFAULT NULL,
  `interest_earned_net_exchange_difference` double(9,4) DEFAULT NULL,
  `interest_paid_third_parties_bank` double(9,4) DEFAULT NULL,
  `interest_paid_ohsjd` double(9,4) DEFAULT NULL,
  `sf_cash_bank` double(9,4) DEFAULT NULL,
  `sf_accounts_receivable` double(9,4) DEFAULT NULL,
  `sf_inventory` double(9,4) DEFAULT NULL,
  `sf_other_current_asset` double(9,4) DEFAULT NULL,
  `sf_non_current_investment` double(9,4) DEFAULT NULL,
  `sf_property_plant_equipment` double(9,4) DEFAULT NULL,
  `sf_other_asset` double(9,4) DEFAULT NULL,
  `sf_account_payable_business_debt` double(9,4) DEFAULT NULL,
  `sf_bank_debt_financial_obligation` double(9,4) DEFAULT NULL,
  `sf_social_debt_rem_social_burdens` double(9,4) DEFAULT NULL,
  `sf_account_payable_ohcsjd` double(9,4) DEFAULT NULL,
  `sf_other_current_liabilities` double(9,4) DEFAULT NULL,
  `sf_bank_debt_lp_loans` double(9,4) DEFAULT NULL,
  `sf_tax_social_debt` double(9,4) DEFAULT NULL,
  `sf_forecasts` double(9,4) DEFAULT NULL,
  `sf_other_passive` double(9,4) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rols`
--

CREATE TABLE `tbl_rols` (
  `id_rol` int(11) NOT NULL,
  `name_rol` varchar(45) DEFAULT NULL,
  `desc_rol` varchar(200) NOT NULL,
  `statte_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_rols`
--

INSERT INTO `tbl_rols` (`id_rol`, `name_rol`, `desc_rol`, `statte_rol`) VALUES
(1, 'Administrador', 'Permite administrar todo el sistema', 1),
(5, 'Visor', 'Usuario con permisos de solo visualizaciÃ³n', 1),
(6, 'Dev', 'Programa', 1),
(7, 'Desing', 'DiseÃ±a', 1),
(8, 'Arq', 'Arma', 1),
(9, 'BD', 'base de datos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(45) DEFAULT NULL,
  `pass_user` varchar(45) DEFAULT NULL,
  `firts_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email_user` varchar(100) DEFAULT NULL,
  `statte_user` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `name_user`, `pass_user`, `firts_name`, `last_name`, `email_user`, `statte_user`, `id_rol`) VALUES
(1, 'mmeza', 'admin', 'Manuel', 'Meza Lazaro', 'm21.meza@gmail.com', 1, 1),
(2, 'jpereza', 'visor', 'Jennifer', 'Perez', 'prada@gmail.com', 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_results`
--
ALTER TABLE `tbl_results`
  ADD PRIMARY KEY (`id_result`);

--
-- Indices de la tabla `tbl_rols`
--
ALTER TABLE `tbl_rols`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_rols`
--
ALTER TABLE `tbl_rols`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
