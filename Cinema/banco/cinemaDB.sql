-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema CinemaDB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema CinemaDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CinemaDB` DEFAULT CHARACTER SET utf8 ;
USE `CinemaDB` ;

-- -----------------------------------------------------
-- Table `CinemaDB`.`Cinema`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CinemaDB`.`Cinema` (
  `idCinema` INT NOT NULL AUTO_INCREMENT,
  `CNPJ` VARCHAR(45) NOT NULL,
  `Localizção` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCinema`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CinemaDB`.`Filme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CinemaDB`.`Filme` (
  `idFilme` INT NOT NULL AUTO_INCREMENT,
  `Titulo` VARCHAR(45) NOT NULL,
  `Duração` VARCHAR(45) NOT NULL,
  `Classificação` VARCHAR(45) NOT NULL,
  `Ano` VARCHAR(45) NOT NULL,
  `Genero` VARCHAR(45) NOT NULL,
  `Banner` VARCHAR(45) NOT NULL,
  `Diretor` VARCHAR(45) NOT NULL,
  `Sinopse` VARCHAR(45) NOT NULL,
  `Dublado` TINYINT NOT NULL,
  PRIMARY KEY (`idFilme`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CinemaDB`.`Sessão`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CinemaDB`.`Sessão` (
  `idSessão` INT NOT NULL AUTO_INCREMENT,
  `Data` DATE NOT NULL,
  `Horário` VARCHAR(45) NOT NULL,
  `Tipo` ENUM('3D,2D') NOT NULL,
  `Sala` VARCHAR(45) NOT NULL,
  `QtdeLugares` INT NOT NULL,
  `Filme_idFilme` INT NOT NULL,
  PRIMARY KEY (`idSessão`),
  INDEX `fk_Sessão_Filme1_idx` (`Filme_idFilme` ASC) VISIBLE,
  CONSTRAINT `fk_Sessão_Filme1`
    FOREIGN KEY (`Filme_idFilme`)
    REFERENCES `CinemaDB`.`Filme` (`idFilme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CinemaDB`.`Funcionário`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CinemaDB`.`Funcionário` (
  `idFuncionário` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `CPF` VARCHAR(45) NOT NULL,
  `Cargo` VARCHAR(45) NOT NULL,
  `Salário` VARCHAR(45) NOT NULL,
  `Endereço` VARCHAR(45) NOT NULL,
  `Telefone` VARCHAR(45) NOT NULL,
  `Cinema_idCinema` INT NOT NULL,
  PRIMARY KEY (`idFuncionário`),
  INDEX `fk_Funcionário_Cinema1_idx` (`Cinema_idCinema` ASC) VISIBLE,
  CONSTRAINT `fk_Funcionário_Cinema1`
    FOREIGN KEY (`Cinema_idCinema`)
    REFERENCES `CinemaDB`.`Cinema` (`idCinema`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CinemaDB`.`Cinema_has_Filme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CinemaDB`.`Cinema_has_Filme` (
  `Cinema_idCinema` INT NOT NULL,
  `Filme_idFilme` INT NOT NULL,
  PRIMARY KEY (`Cinema_idCinema`, `Filme_idFilme`),
  INDEX `fk_Cinema_has_Filme_Filme1_idx` (`Filme_idFilme` ASC) VISIBLE,
  INDEX `fk_Cinema_has_Filme_Cinema1_idx` (`Cinema_idCinema` ASC) VISIBLE,
  CONSTRAINT `fk_Cinema_has_Filme_Cinema1`
    FOREIGN KEY (`Cinema_idCinema`)
    REFERENCES `CinemaDB`.`Cinema` (`idCinema`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cinema_has_Filme_Filme1`
    FOREIGN KEY (`Filme_idFilme`)
    REFERENCES `CinemaDB`.`Filme` (`idFilme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CinemaDB`.`Relatório`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CinemaDB`.`Relatório` (
  `idRelatório` INT NOT NULL AUTO_INCREMENT,
  `Mes-Ano` VARCHAR(45) NOT NULL,
  `QtdeIngressos` INT NOT NULL,
  `Receita` FLOAT NOT NULL,
  PRIMARY KEY (`idRelatório`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CinemaDB`.`Compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CinemaDB`.`Compra` (
  `idCompra` INT NOT NULL AUTO_INCREMENT,
  `Qtde Itens` INT NOT NULL,
  `Total` FLOAT NOT NULL,
  `Relatório_idRelatório` INT NOT NULL,
  PRIMARY KEY (`idCompra`),
  INDEX `fk_Compra_Relatório1_idx` (`Relatório_idRelatório` ASC) VISIBLE,
  CONSTRAINT `fk_Compra_Relatório1`
    FOREIGN KEY (`Relatório_idRelatório`)
    REFERENCES `CinemaDB`.`Relatório` (`idRelatório`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CinemaDB`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CinemaDB`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `CPF` VARCHAR(45) NOT NULL,
  `Compra_idCompra` INT NOT NULL,
  PRIMARY KEY (`idCliente`),
  INDEX `fk_Cliente_Compra1_idx` (`Compra_idCompra` ASC) VISIBLE,
  CONSTRAINT `fk_Cliente_Compra1`
    FOREIGN KEY (`Compra_idCompra`)
    REFERENCES `CinemaDB`.`Compra` (`idCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CinemaDB`.`Ingresso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CinemaDB`.`Ingresso` (
  `idIngresso` INT NOT NULL AUTO_INCREMENT,
  `Valor` FLOAT NOT NULL,
  `Tipo` ENUM('Meia', 'Normal') NOT NULL,
  `Poltrona` INT NOT NULL,
  `Compra_idCompra` INT NOT NULL,
  `Sessão_idSessão` INT NOT NULL,
  PRIMARY KEY (`idIngresso`),
  INDEX `fk_Ingresso_Compra1_idx` (`Compra_idCompra` ASC) VISIBLE,
  INDEX `fk_Ingresso_Sessão1_idx` (`Sessão_idSessão` ASC) VISIBLE,
  CONSTRAINT `fk_Ingresso_Compra1`
    FOREIGN KEY (`Compra_idCompra`)
    REFERENCES `CinemaDB`.`Compra` (`idCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ingresso_Sessão1`
    FOREIGN KEY (`Sessão_idSessão`)
    REFERENCES `CinemaDB`.`Sessão` (`idSessão`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
