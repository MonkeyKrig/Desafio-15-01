


CREATE TABLE `cadastro` (
  `nome` varchar(50) NOT NULL,
  `telefone` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `email_rec` varchar(35) NOT NULL,
  `Data_nasc` int(10) NOT NULL,
  `cidade_nasc` varchar(50) DEFAULT NULL,
  `bairro_nasc` varchar(20) DEFAULT NULL,
  `CPF` int(11) NOT NULL,
  `rg` int(11) NOT NULL,
  `data_emissao_rg` int(8) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` int(5) NOT NULL,
  `compl` int(5) NOT NULL,
  `bairro` varchar(10) NOT NULL,
  `cidade` varchar(10) NOT NULL,
  `cep` int(10) DEFAULT NULL,
  `nome_usuario` varchar(12) DEFAULT NULL,
  `senha` varchar(20) NOT NULL,
  `profissão` varchar(20) DEFAULT NULL,
  `nivel_escolaridade` varchar(25) NOT NULL,
  `estado_civil` varchar(10) DEFAULT NULL,
  `altura` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
