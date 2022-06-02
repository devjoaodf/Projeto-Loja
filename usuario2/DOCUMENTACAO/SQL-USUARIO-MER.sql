-- -----------------------------------------------------
-- Schema LOJA
-- -----------------------------------------------------
CREATE DATABASE `LOJA`;
USE `LOJA` ;

-- -----------------------------------------------------
-- Table `usuario`
-- -----------------------------------------------------
CREATE TABLE usuario (
  `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(20) NOT NULL,
  `login` VARCHAR(10) NOT NULL,
  `senha` VARCHAR(8) NOT NULL,
  PRIMARY KEY (`idUsuario`));
