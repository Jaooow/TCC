-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 24-Nov-2021 às 12:45
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `tcc`
--
CREATE DATABASE IF NOT EXISTS `tcc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `tipo_de_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_adm`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `email`, `senha`, `tipo_de_usuario`) VALUES
(1, 'adm@adm.com.br', '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_negociacao`
--

CREATE TABLE IF NOT EXISTS `itens_negociacao` (
  `id_itens_negociacao` int(11) NOT NULL AUTO_INCREMENT,
  `cod_produto` int(11) NOT NULL,
  `cod_negociacao` int(11) NOT NULL,
  `preco_unitario` varchar(10) NOT NULL,
  `preco_final` varchar(10) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id_itens_negociacao`),
  KEY `cod_produto` (`cod_produto`),
  KEY `cod_negociacao` (`cod_negociacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `negociacao`
--

CREATE TABLE IF NOT EXISTS `negociacao` (
  `id_negociacao` int(11) NOT NULL AUTO_INCREMENT,
  `cod_comprador` int(11) NOT NULL,
  `cod_vendedor` int(11) NOT NULL,
  `data_negociacao` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_negociacao`),
  KEY `cod_comprador` (`cod_comprador`),
  KEY `cod_vendedor` (`cod_vendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `nome` varchar(300) NOT NULL,
  `preco` float NOT NULL,
  `tipo_produto` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `cod_vendedor` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_produto`),
  KEY `cod_vendendor` (`cod_vendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nome` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `tipo_de_negocio` varchar(300) NOT NULL,
  `tipo_de_usuario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE IF NOT EXISTS `vendedores` (
  `id_vendedores` int(11) NOT NULL AUTO_INCREMENT,
  `nome_vendedor` varchar(100) NOT NULL,
  `tipo_negocio` varchar(300) NOT NULL,
  `cnpj` varchar(300) DEFAULT NULL,
  `documentacao` varchar(100) DEFAULT NULL,
  `regiao` varchar(300) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `cod_vendedor` int(11) NOT NULL,
  PRIMARY KEY (`id_vendedores`),
  KEY `cod_vendedor` (`cod_vendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `itens_negociacao`
--
ALTER TABLE `itens_negociacao`
  ADD CONSTRAINT `itens_negociacao_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id_produto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itens_negociacao_ibfk_2` FOREIGN KEY (`cod_negociacao`) REFERENCES `negociacao` (`id_negociacao`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `negociacao`
--
ALTER TABLE `negociacao`
  ADD CONSTRAINT `negociacao_ibfk_1` FOREIGN KEY (`cod_comprador`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `negociacao_ibfk_2` FOREIGN KEY (`cod_vendedor`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`cod_vendedor`) REFERENCES `vendedores` (`cod_vendedor`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD CONSTRAINT `vendedores_ibfk_1` FOREIGN KEY (`cod_vendedor`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
