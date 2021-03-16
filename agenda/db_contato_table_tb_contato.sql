
-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

CREATE TABLE `tb_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `telefone` char(15) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `favorito` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_contato`
--

INSERT INTO `tb_contato` (`id`, `nome`, `telefone`, `email`, `descricao`, `nascimento`, `favorito`) VALUES
(1, 'Mi', '(15) 99865-5625', NULL, 'Quero repitir', NULL, NULL),
(2, 'Mi. Assis', '(15) 99655-5435', NULL, 'Saudade do que agente ainda não viveu', NULL, NULL),
(3, 'Ale. Bernardis', '(13) 85264-7852', NULL, 'Sonho de consumo', NULL, NULL),
(4, 'Geovanna', '(13) 98564-5236', NULL, '                        Ai ai Bagaço, assim tu acaba comigo                    ', '0000-00-00', 1),
(5, 'Lais', '(11) 98745-6325', NULL, 'Esse mês não passa', NULL, NULL),
(6, 'Andressa', '(11) 97854-6532', NULL, '', NULL, NULL),
(9, 'Gabi', '(13) 9856-8593', NULL, 'Ai se eu te pego', '1998-05-03', NULL),
(10, 'Carol', '(11) 98657-3745', NULL, '', '1995-09-23', NULL),
(12, 'Taty', '(11)98745-7869', NULL, 'fsdkfiksd', '1998-06-25', NULL),
(34, 'Jaque', '(13) 98756-4632', NULL, 'fdefsdf', '1995-02-17', 1),
(40, 'Gilda', '(13) 99876-5786', NULL, 'sdgfg', '0000-00-00', 1),
(46, 'katarine', '(13) 97875-9854', NULL, '', '2000-06-05', 1),
(56, 'Lais', '(11) 98745-6325', NULL, 'Esse mês não passa', '0000-00-00', 0);
