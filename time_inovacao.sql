-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12-Ago-2019 às 16:32
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
-- Estrutura da tabela `competencias`
--

CREATE TABLE `competencias` (
  `id_competencia` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `competencias`
--

INSERT INTO `competencias` (`id_competencia`, `nome`, `tipo`) VALUES
(2, 'Adaptabilidade', 'Comportamental'),
(3, 'LideranÃ§a', 'Comportamental'),
(4, 'Trabalho em Equipe', 'Comportamental'),
(5, 'MotivaÃ§Ã£o', 'Comportamental'),
(6, 'EquilÃ­brio Emocional', 'Comportamental'),
(7, 'Criatividade', 'Comportamental'),
(8, 'ComunicaÃ§Ã£o', 'Comportamental'),
(9, 'NegociaÃ§Ã£o', 'Comportamental'),
(10, 'Empatia', 'Comportamental'),
(11, 'Aprendizado ContÃ­nuo', 'Comportamental'),
(12, 'Ã‰tica', 'Comportamental'),
(13, 'PrudÃªncia', 'Comportamental'),
(14, 'Habilidade com InformÃ¡tica e Tecnologia', 'Tecnica'),
(15, 'Conhecimento em Marketing Digital', 'Tecnica'),
(16, 'AnÃ¡lise de Dados', 'Tecnica'),
(17, 'Habilidade de NegociaÃ§Ã£o', 'Tecnica'),
(18, 'EspÃ­rito Empreendedor', 'Tecnica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id_pessoa` int(11) NOT NULL,
  `nome_pessoa` varchar(255) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `idade` varchar(20) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `data_inscricao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id_pessoa`, `nome_pessoa`, `data_nascimento`, `idade`, `endereco`, `telefone`, `celular`, `data_inscricao`) VALUES
(1, 'JosÃ© Henrique Lima', '1975-05-02', '44 anos', 'Rua da AurilÃ¢ndia, 578 - bairro Matadouro - Nova Lima', '031 34157886', '031 956568787', '2019-08-01'),
(2, 'JoÃ£o Henrique', '1995-07-31', '20 anos', 'Rua do Bicalho, 45 - bairro Cristais - Nova Lima', '031 955663247', '031 988565652', '2019-08-02'),
(3, 'Sandra Maria CÃ©zar ', '1955-11-29', '64 anos', 'Rua Augusto dos Anjos, 1555 - EdifÃ­cio Skorpius - Bairro SÃ£o JoÃ£o Batista - Belo Horizonte - MG', '031 34255566', '031 985852323', '2019-08-03'),
(4, 'JÃºlia CÃ©zar Lima', '2013-06-15', '6 anos', 'Rua Guapira, 267 - Bairro Ipanema - Belo Horizonte - MG', '031 34166565', '031 987875454', '2019-08-04'),
(5, 'Carolina Fernanda Cezar', '1983-06-09', '31 anos', 'Rua dos Crenaques 435, Ap.202 - Bl.04 - Bairro Santa Monica', '31988049655', '31988049655', '2019-08-11'),
(7, 'JosÃ© Saturnino de Lima', '1934-11-29', '84 anos', 'Rua Guararapes, 547 - Bairro GlÃ³ria - Belo Horizonte - MG', '031 41234556', '031 984845657', '2019-08-06'),
(9, 'JULIO CESAR DE LIMA lima', '1995-08-17', '44 anos', 'Rua dos Crenaques 435, Ap.202 - Bl.04', '31988049655', '31988049655', '2019-08-11'),
(10, 'JULIO DE LIMA lima lima', '2000-07-21', '20 anos', 'Rua dos Crenaques, 435', '31988049655', '31988049655', '0000-00-00'),
(11, 'JULIO CESAR DE LIMA', '2000-01-01', '30 anos', 'Rua dos Crenaques 435, Ap.202 - Bl.04', '31988049655', '31988049655', '0000-00-00'),
(12, 'TESTE FINAL PARA IR DORMIR', '2000-02-01', '44 anos', 'Rua dos Crenaques 435, Ap.202 - Bl.04', '31988049655', '31988049655', '0000-00-00'),
(13, 'JULIO DE LIMA CESAR', '2000-03-03', '30 anos', 'Rua dos Crenaques, 435', '31988049655', '31988049655', '2019-08-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_competencia`
--

CREATE TABLE `pessoa_competencia` (
  `id_pessoa_competencia` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `id_competencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa_competencia`
--

INSERT INTO `pessoa_competencia` (`id_pessoa_competencia`, `id_pessoa`, `id_competencia`) VALUES
(20, 5, 7),
(21, 5, 9),
(22, 5, 16),
(23, 9, 13),
(24, 9, 18),
(25, 11, 2),
(26, 11, 14),
(27, 12, 2),
(28, 12, 3),
(29, 12, 12),
(30, 12, 13),
(31, 12, 15),
(32, 12, 17),
(50, 13, 2),
(51, 13, 3),
(52, 13, 4),
(53, 13, 5),
(54, 13, 6),
(55, 13, 7),
(56, 13, 8),
(57, 13, 9),
(58, 13, 10),
(59, 13, 11),
(60, 13, 12),
(61, 13, 14),
(62, 13, 15),
(63, 13, 16),
(64, 13, 17);

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
-- Índices para tabela `competencias`
--
ALTER TABLE `competencias`
  ADD PRIMARY KEY (`id_competencia`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Índices para tabela `pessoa_competencia`
--
ALTER TABLE `pessoa_competencia`
  ADD PRIMARY KEY (`id_pessoa_competencia`);

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
-- AUTO_INCREMENT de tabela `competencias`
--
ALTER TABLE `competencias`
  MODIFY `id_competencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `pessoa_competencia`
--
ALTER TABLE `pessoa_competencia`
  MODIFY `id_pessoa_competencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
