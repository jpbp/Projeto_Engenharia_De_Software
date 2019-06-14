-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema lojahogwarts
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lojahogwarts
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lojahogwarts` DEFAULT CHARACTER SET latin1 ;
USE `lojahogwarts` ;

-- -----------------------------------------------------
-- Table `lojahogwarts`.`Clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojahogwarts`.`Clientes` (
  `nome` VARCHAR(45) NOT NULL,
  `cpf` BIGINT(11) UNSIGNED ZEROFILL NOT NULL,
  `residencial` BIGINT(11) UNSIGNED ZEROFILL NOT NULL,
  `celular` BIGINT(11) UNSIGNED ZEROFILL NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `cep` BIGINT(8) UNSIGNED ZEROFILL NOT NULL,
  `logradouro` VARCHAR(45) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `complemento` VARCHAR(45) NULL,
  `numero` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lojahogwarts`.`Funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojahogwarts`.`Funcionarios` (
  `nome` VARCHAR(45) NOT NULL,
  `cpf` BIGINT(11) UNSIGNED ZEROFILL NOT NULL,
  `celular` BIGINT(11) UNSIGNED ZEROFILL NOT NULL,
  `residencial` BIGINT(11) UNSIGNED ZEROFILL NULL,
  `Email` VARCHAR(45) NOT NULL,
  `cep` BIGINT(8) NOT NULL,
  `logradouro` VARCHAR(45) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `complemento` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lojahogwarts`.`Gerentes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojahogwarts`.`Gerentes` (
  `cpf` BIGINT(11) UNSIGNED ZEROFILL NOT NULL,
  PRIMARY KEY (`cpf`),
  CONSTRAINT `fk_Gerentes_Funcionarios1`
    FOREIGN KEY (`cpf`)
    REFERENCES `lojahogwarts`.`Funcionarios` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lojahogwarts`.`Pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojahogwarts`.`Pedidos` (
  `idPedido` INT(11) NOT NULL,
  `dataPedido` DATETIME NOT NULL,
  `NomeBruxo` VARCHAR(45) NOT NULL,
  `Nomeproduto` VARCHAR(45) NOT NULL,
  `enderecoEntrega` VARCHAR(200) NOT NULL,
  `cpfFuncionario` BIGINT(11) UNSIGNED ZEROFILL NOT NULL,
  `Clientes_cpf` BIGINT(11) UNSIGNED ZEROFILL NOT NULL,
  `preço` DECIMAL(6,2) NOT NULL,
  `quantidade` INT NOT NULL,
  PRIMARY KEY (`idPedido`),
  INDEX `fk_cpfFuncionario_idx` (`cpfFuncionario` ASC),
  UNIQUE INDEX `pedUq` (`idPedido` ASC, `cpfFuncionario` ASC),
  INDEX `fk_Pedidos_Clientes1_idx` (`Clientes_cpf` ASC),
  CONSTRAINT `fk_cpfFuncionario`
    FOREIGN KEY (`cpfFuncionario`)
    REFERENCES `lojahogwarts`.`Funcionarios` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedidos_Clientes1`
    FOREIGN KEY (`Clientes_cpf`)
    REFERENCES `lojahogwarts`.`Clientes` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lojahogwarts`.`Produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojahogwarts`.`Produtos` (
  `idProdutos` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco` DECIMAL(7,2) NOT NULL,
  `descricao` VARCHAR(45) NULL DEFAULT NULL,
  `quantidade` int(3) NOT NULL,
  PRIMARY KEY (`idProdutos`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lojahogwarts`.`Item_Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojahogwarts`.`Item_Pedido` (
  `idPedido` INT(11) NOT NULL,
  `idProduto` INT(11) NOT NULL,
  `Iditempedido` INT(11) NOT NULL AUTO_INCREMENT,
  `qtde` VARCHAR(45) NULL,
  PRIMARY KEY (`Iditempedido`),
  INDEX `fk_IdPedido_idx` (`idPedido` ASC),
  INDEX `fk_IdProduto_idx` (`idProduto` ASC),
  UNIQUE INDEX `indexuq` (`idPedido` ASC, `idProduto` ASC),
  CONSTRAINT `fk_IdPedido`
    FOREIGN KEY (`idPedido`)
    REFERENCES `lojahogwarts`.`Pedidos` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_IdProduto`
    FOREIGN KEY (`idProduto`)
    REFERENCES `lojahogwarts`.`Produtos` (`idProdutos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
