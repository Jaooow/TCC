-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 13-Jul-2021 às 07:13
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
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `foto` longblob NOT NULL,
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `cod_produto` int(11) NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `cod_produto` (`cod_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`foto`, `id_foto`, `cod_produto`) VALUES
('', 17, 19),
('', 18, 20);

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
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_produto`),
  KEY `cod_vendendor` (`cod_vendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `preco`, `tipo_produto`, `descricao`, `quantidade`, `cod_vendedor`, `id_produto`) VALUES
('dsfg', 345, '', 'sdfg', 0, 7, 19),
('abacaxi ', 5, 'COMIDAS', 'abacaxi doce ', 0, 8, 20);

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
  `telefone` varchar(20) NOT NULL,
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `tipo_de_negocio`, `tipo_de_usuario`, `telefone`, `id_usuario`) VALUES
('chris', 'Christian.c.g.f777@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Ausente', 1, '', 4),
('amanda', 'amanda@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Ausente', 1, '', 5),
('jao', 'jao@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Autonomo', 2, '', 7),
('fernando ', 'fernando@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Autonomo', 2, '', 8);

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
  `cod_vendedor` int(11) NOT NULL,
  PRIMARY KEY (`id_vendedores`),
  UNIQUE KEY `cnpj` (`cnpj`),
  KEY `cod_vendedor` (`cod_vendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id_vendedores`, `tipo_negocio`, `cnpj`, `documentacao`, `regiao`, `cod_vendedor`) VALUES
(1, 'Autonomo', '83297', '', '', 7),
(2, 'Autonomo', '', '', '', 7),
(3, 'Autonomo', '88', '', '', 7);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id_produto`);

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
