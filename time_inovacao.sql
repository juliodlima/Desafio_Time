-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11-Ago-2019 às 00:02
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `time_inovacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id_pessoa` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `idade` varchar(20) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `comp_comportamentais` varchar(255) NOT NULL,
  `comp_tecnicas` varchar(255) NOT NULL,
  `data_inscricao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id_pessoa`, `nome`, `data_nascimento`, `idade`, `endereco`, `telefone`, `celular`, `comp_comportamentais`, `comp_tecnicas`, `data_inscricao`) VALUES
(1, 'JosÃ© Henrique Lima', '1975-05-02', '44 anos', 'Rua da AurilÃ¢ndia, 578 - bairro Matadouro - Nova Lima', '031 34157886', '031 956568787', ' Adaptabilidade, ComunicaÃ§Ã£o', 'Conhecimento em Marketing Digital', '0000-00-00'),
(2, 'JoÃ£o Henrique', '1995-07-31', '20 anos', 'Rua do Bicalho, 45 - bairro Cristais - Nova Lima', '031 955663247', '031 988565652', 'EquilÃ­brio emocional, Criatividade, Adaptabilidade, ComunicaÃ§Ã£o', 'AnÃ¡lise de Dados, EspÃ­rito Empreendedor, Habilidade de NegociaÃ§Ã£o', '0000-00-00'),
(3, 'Sandra Maria CÃ©zar ', '1955-11-29', '64 anos', 'Rua Augusto dos Anjos, 1555 - EdifÃ­cio Skorpius - Bairro SÃ£o JoÃ£o Batista - Belo Horizonte - MG', '031 34255566', '031 985852323', 'Criatividade, Adaptabilidade, ComunicaÃ§Ã£o', 'Habilidade de NegociaÃ§Ã£o', '0000-00-00'),
(4, 'JÃºlia CÃ©zar Lima', '2013-06-15', '6 anos', 'Rua Guapira, 267 - Bairro Ipanema - Belo Horizonte - MG', '031 34166565', '031 987875454', 'Trabalho em equipe, MotivaÃ§Ã£o', 'EspÃ­rito Empreendedor, Habilidade de NegociaÃ§Ã£o', '0000-00-00'),
(5, 'Carolina Fernanda Cezar', '1983-06-09', '30 anos', 'Rua dos Crenaques 435, Ap.202 - Bl.04 - Bairro Santa Monica', '31988049655', '31988049655', 'LideranÃ§a, Trabalho em equipe, MotivaÃ§Ã£o', 'Habilidade com InformÃ¡tica e Tecnologia, Conhecimento em Marketing Digital', '0000-00-00'),
(0, 'JosÃ© Saturnino de Lima', '1934-11-29', '84 anos', 'Rua Guararapes, 547 - Bairro GlÃ³ria - Belo Horizonte - MG', '031 41234556', '031 984845657', 'LideranÃ§a, Trabalho em equipe, MotivaÃ§Ã£o', 'Habilidade com InformÃ¡tica e Tecnologia, Conhecimento em Marketing Digital', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
