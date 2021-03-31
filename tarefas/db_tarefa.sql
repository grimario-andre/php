-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Mar-2021 às 16:32
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_tarefa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_anexo`
--

CREATE TABLE `tb_anexo` (
  `id` int(11) NOT NULL,
  `tarefa_id` int(11) NOT NULL,
  `tarefa_nm` varchar(20) NOT NULL,
  `arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_anexo`
--

INSERT INTO `tb_anexo` (`id`, `tarefa_id`, `tarefa_nm`, `arquivo`) VALUES
(7, 1, 'texto', 'texto.zip'),
(8, 1, 'texto', 'texto.zip'),
(9, 1, 'texto', 'texto.zip');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tarefa`
--

CREATE TABLE `tb_tarefa` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `prazo` date DEFAULT NULL,
  `prioridade` int(1) DEFAULT NULL,
  `concluida` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tarefa`
--

INSERT INTO `tb_tarefa` (`id`, `nome`, `descricao`, `prazo`, `prioridade`, `concluida`) VALUES
(1, 'Estudar PHP', '                Continuar meus estudos de PHP e MYSQL                ', '0000-00-00', 1, 0),
(2, 'Estudar HTML5', 'HTML5 é importatne', NULL, 2, NULL),
(5, 'Estudar Css 3', '                                dsd                                ', '0000-00-00', 2, 0),
(34, 'Estudar Python mundo', '                                Linguagem baseada em C, conhecimentos básicos                                ', '0000-00-00', 2, 1),
(44, 'Estudar SQL', 'Muito importante para deve web usando PHP, ASP ou Node.js                                                    ', '0000-00-00', 3, 0),
(51, 'Aprender REST', '                                Muito Importante esse conceito.                                                                ', '0000-00-00', 2, 0),
(67, 'Estudar JavaScript', '                                Muito importante para autenticações.                                    ', '0000-00-00', 2, 0),
(68, 'Estudar JavaScript', '                Muito importante para autenticações.                    ', '0000-00-00', 2, 0),
(69, 'Estudar JavaScript', '                                Muito importante para autenticações.                                    ', '2021-03-12', 3, 0),
(84, 'Validação formulário', 'testando validação formulário.                            ', '0000-00-00', 3, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_anexo`
--
ALTER TABLE `tb_anexo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_anexo` (`tarefa_id`);

--
-- Índices para tabela `tb_tarefa`
--
ALTER TABLE `tb_tarefa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_anexo`
--
ALTER TABLE `tb_anexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_tarefa`
--
ALTER TABLE `tb_tarefa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_anexo`
--
ALTER TABLE `tb_anexo`
  ADD CONSTRAINT `tb_anexo` FOREIGN KEY (`tarefa_id`) REFERENCES `tb_tarefa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
