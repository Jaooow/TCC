-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Jul-2021 às 03:41
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
(1, 'christian.g@aluno.ifsp.edu.br', '12345', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_negocio`
--

CREATE TABLE IF NOT EXISTS `itens_negocio` (
  `id_itens` int(11) NOT NULL AUTO_INCREMENT,
  `cod_produto` int(11) NOT NULL,
  `cod_vendedor` int(11) NOT NULL,
  `cod_negocio` int(11) NOT NULL,
  PRIMARY KEY (`id_itens`),
  KEY `cod_produto` (`cod_produto`),
  KEY `cod_vendedor` (`cod_vendedor`),
  KEY `cod_negocio` (`cod_negocio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `negocios`
--

CREATE TABLE IF NOT EXISTS `negocios` (
  `id_negocio` int(11) NOT NULL AUTO_INCREMENT,
  `cod_usuario` int(11) NOT NULL,
  `data` varchar(20) NOT NULL,
  PRIMARY KEY (`id_negocio`),
  KEY `cod_usuario` (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `preco`, `tipo_produto`, `descricao`, `quantidade`, `cod_vendedor`, `foto`, `id_produto`) VALUES
('banana', 1, '', 'banana maçã', 1, 4, 'd3df5af8e44cab7af3b3326183849ad2.jpg', 1),
('banana2', 2, '', 'banana maçã2', 2, 4, '41d7d2d0498e4ce4cb31c76dd750ecc4.jpg', 2),
('banana3', 3, '', 'banana maçã3', 3, 4, 'd0567246b8b68e2026ca533832755deb.jpg', 3),
('banana4', 4, 'COMIDAS', 'banana maçã4', 4, 4, 'e423258a486d7a6c97b7f2d5034f4b85.jpg', 4),
('banana5', 4, 'COMIDAS', 'banana maçã5', 4, 4, '4fd2245ee0bf6b6cac67df3ae7d505eb.jpg', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `tipo_de_negocio`, `tipo_de_usuario`, `id_usuario`) VALUES
('chris', 'Christian.c.g.f777@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Autonomo', 2, 4),
('amanda', 'amanda@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Ausente', 1, 5),
('jao', 'jao@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Autonomo', 2, 7),
('fernando ', 'fernando@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Autonomo', 2, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE IF NOT EXISTS `vendedores` (
  `id_vendedores` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_negocio` varchar(300) NOT NULL,
  `cnpj` varchar(300) DEFAULT NULL,
  `documentacao` longblob,
  `regiao` varchar(300) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `cod_vendedor` int(11) NOT NULL,
  PRIMARY KEY (`id_vendedores`),
  UNIQUE KEY `cnpj` (`cnpj`),
  KEY `cod_vendedor` (`cod_vendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id_vendedores`, `tipo_negocio`, `cnpj`, `documentacao`, `regiao`, `telefone`, `cod_vendedor`) VALUES
(1, 'Autonomo', '83297', '', '', '', 4),
(2, 'Autonomo', '', '', '', '', 7),
(3, 'Autonomo', '88', '', '', '', 7);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `itens_negocio`
--
ALTER TABLE `itens_negocio`
  ADD CONSTRAINT `itens_negocio_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id_produto`),
  ADD CONSTRAINT `itens_negocio_ibfk_2` FOREIGN KEY (`cod_vendedor`) REFERENCES `vendedores` (`id_vendedores`),
  ADD CONSTRAINT `itens_negocio_ibfk_3` FOREIGN KEY (`cod_negocio`) REFERENCES `negocios` (`id_negocio`);

--
-- Limitadores para a tabela `negocios`
--
ALTER TABLE `negocios`
  ADD CONSTRAINT `negocios_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`cod_vendedor`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD CONSTRAINT `vendedores_ibfk_1` FOREIGN KEY (`cod_vendedor`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
