-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2022 às 23:16
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdcadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `ENDERECO` varchar(50) NOT NULL,
  `CPF_CNPJ` int(11) NOT NULL,
  `SENHA` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbusuarios`
--

INSERT INTO `tbusuarios` (`ID`, `NOME`, `ENDERECO`, `CPF_CNPJ`, `SENHA`) VALUES
(1, '_adm_dba_', '_adm_dba_', 12345, '_adm_dba_');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
