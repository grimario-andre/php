
-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vaga`
--

CREATE TABLE `tb_vaga` (
  `id` int(11) NOT NULL,
  `placa` varchar(15) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `modelo` varchar(15) DEFAULT NULL,
  `hentrada` time DEFAULT NULL,
  `hsaida` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_vaga`
--

INSERT INTO `tb_vaga` (`id`, `placa`, `marca`, `modelo`, `hentrada`, `hsaida`) VALUES
(1, 'kis-7856', 'VolksWagem', 'G-5', '15:45:00', '16:59:00'),
(2, 'htg-5634', 'Renaut', 'G-3', '10:45:00', '12:00:00'),
(3, 'afd-8907', 'Ford', 'G-2', '09:15:00', '11:30:00'),
(4, 'abd-0145', 'Hyunday', 'G_5', '08:00:00', '10:15:00'),
(5, 'abd-4862', 'fdfd', '', NULL, NULL),
(26, 'jkh-8907', 'fiat', 'sandero', NULL, NULL),
(27, 'gdh-1098', 'Renault', 'C4 Palas', '03:05:00', '04:06:00'),
(28, 'Array', 'Renault', 'C4 Palas', '03:05:00', '04:06:00'),
(34, '1gdh-1098', 'Renault', 'C4 Palas', '03:05:00', '04:06:00'),
(65, '', 'fd', 'fd', '00:00:00', '00:00:00'),
(70, 'kjh-5869', 'juramento', 'jumento', '15:30:00', '16:30:00');
