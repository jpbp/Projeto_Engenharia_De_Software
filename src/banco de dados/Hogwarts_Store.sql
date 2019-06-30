-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jun-2019 às 09:26
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojahogwarts`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `nome` varchar(45) NOT NULL,
  `cpf` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `residencial` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `celular` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(45) NOT NULL,
  `cep` bigint(8) UNSIGNED ZEROFILL NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `numero` varchar(45) NOT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `cpf`, `residencial`, `celular`, `email`, `cep`, `logradouro`, `bairro`, `cidade`, `complemento`, `numero`, `estado`) VALUES
('Leonardo', 00000051544, 00004454154, 00012545145, 'leo@comp', 00372000, 'rua y', 'centro', 'lavras', '', '454', 'Ro'),
('Leonardo Silva', 00000124514, 00000012545, 00001521554, 'leo@comp', 00372000, 'rua y', 'centro', 'lavras', '', '45', 'Ro'),
('Leonardo', 00000545345, 00000000004, 00012545145, 'leo@comp', 00372000, 'rua y', 'centro', 'lavras', '', '42', 'Ro'),
('Gellert Grindewald', 00001234741, 00001255555, 00001111111, 'Gellert@Grindewald.com', 37200000, 'Rua Primeiro de maio', 'centro', 'Lavras', '', '64', 'Mi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `nome` varchar(45) NOT NULL,
  `cpf` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `celular` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `residencial` bigint(11) UNSIGNED ZEROFILL DEFAULT NULL,
  `Email` varchar(45) NOT NULL,
  `cep` bigint(8) NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `username` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`nome`, `cpf`, `celular`, `residencial`, `Email`, `cep`, `logradouro`, `bairro`, `cidade`, `numero`, `estado`, `username`, `complemento`, `senha`) VALUES
('João Paulo', 00000000111, 00123456789, 00000123456, 'jpbp@computacao.ufla', 372000, 'rua x', 'centro', 'lavras', '64', 'MG', 'jpbp', 'nada', '123'),
('JoÃ£o Paulo Pena', 00000002752, 01146055800, 00000007252, 'jpbp@computacao', 7714600, 'Rua Joaquim Manoel de Macedo', '275', 'Caieiras', '275', 'SÃ', '27', '75', '275'),
('JoÃ£o Paulo Pena', 00000144444, 01146055800, 00000044444, 'jpbp@computacao', 7714600, 'Rua Joaquim Manoel de Macedo', 'centro', 'Caieiras', '4', 'SÃ', 'jppppp', 'nada', '123'),
('matheus', 00000554514, 00000545454, 00000005444, 'oajsoajs', 4, '545', 'asdsa', 'dds', '25', 'Ri', 'math', 'asd', '144'),
('JoÃ£o Paulo Pena', 00012414141, 01146055800, 00000411414, 'jpbp@computacao', 7714600, 'Rua Joaquim Manoel de Macedo', 'fdgdf', 'Caieiras', '1424', 'SÃ', 'dfgd', 'fdgg', '1212'),
('Gabrielle Cuba', 12345678912, 35123456789, 03544441234, 'gabicuba@comp', 37200000, 'rua dos cravos', 'perimetral', 'Sao Paulo', '12', 'sp', 'gabicuba', 'nada', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerentes`
--

CREATE TABLE `gerentes` (
  `cpf` bigint(11) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gerentes`
--

INSERT INTO `gerentes` (`cpf`) VALUES
(00000000111);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `idPedido` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `qtde` int(3) DEFAULT NULL,
  `nomeProduto` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item_pedido`
--

INSERT INTO `item_pedido` (`idPedido`, `idProduto`, `qtde`, `nomeProduto`, `preco`) VALUES
(1, 13, 3, 'vassoura xt-300', '00045000.00'),
(1, 14, 50, 'celular', '00003300.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `dataPedido` datetime NOT NULL,
  `NomeBruxo` varchar(45) NOT NULL,
  `cpfFuncionario` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `Clientes_cpf` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `cep` bigint(8) NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `preco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `dataPedido`, `NomeBruxo`, `cpfFuncionario`, `Clientes_cpf`, `cep`, `logradouro`, `cidade`, `numero`, `estado`, `complemento`, `preco`) VALUES
(1, '2019-06-30 00:00:00', 'Gellert Grindewald', 12345678912, 00001234741, 37200000, 'Rua Primeiro de maio nÂº64', 'Lavras', '45', 'MG', 'gdfg', '48300.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProdutos` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(7,2) NOT NULL,
  `descricao` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `quantidade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProdutos`, `nome`, `preco`, `descricao`, `quantidade`) VALUES
(13, 'vassoura xt-300', '15000.00', 'foda', 5),
(14, 'celular', '66.00', 'ccxzcxzc', 8);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `gerentes`
--
ALTER TABLE `gerentes`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD UNIQUE KEY `indexuq` (`idPedido`,`idProduto`),
  ADD KEY `fk_IdPedido_idx` (`idPedido`),
  ADD KEY `fk_IdProduto_idx` (`idProduto`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`),
  ADD UNIQUE KEY `pedUq` (`idPedido`,`cpfFuncionario`),
  ADD KEY `fk_cpfFuncionario_idx` (`cpfFuncionario`),
  ADD KEY `fk_Pedidos_Clientes1_idx` (`Clientes_cpf`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProdutos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProdutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `gerentes`
--
ALTER TABLE `gerentes`
  ADD CONSTRAINT `fk_Gerentes_Funcionarios1` FOREIGN KEY (`cpf`) REFERENCES `funcionarios` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD CONSTRAINT `fk_IdPedido` FOREIGN KEY (`idPedido`) REFERENCES `pedidos` (`idPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_IdProduto` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProdutos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_Pedidos_Clientes1` FOREIGN KEY (`Clientes_cpf`) REFERENCES `clientes` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cpfFuncionario` FOREIGN KEY (`cpfFuncionario`) REFERENCES `funcionarios` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
