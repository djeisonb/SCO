SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `SCO` ;

CREATE SCHEMA IF NOT EXISTS `SCO` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;

USE `SCO`;

CREATE  TABLE IF NOT EXISTS `SCO`.`associados` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `tipo_cota` INT(11) NOT NULL ,
  `data_adesao` DATE NOT NULL ,
  `nome_associado` VARCHAR(100) NOT NULL ,
  `cpf_associado` VARCHAR(14) NOT NULL ,
  `numero_identidade` VARCHAR(10) NOT NULL ,
  `data_expedicao` DATE NOT NULL ,
  `orgao_emissor` VARCHAR(6) NOT NULL ,
  `data_nascimento` DATE NOT NULL ,
  `naturalidade` VARCHAR(50) NOT NULL ,
  `estado` INT(11) NOT NULL ,
  `nacionalidade` INT(11) NOT NULL ,
  `nome_pai` VARCHAR(100) NOT NULL ,
  `nome_mae` VARCHAR(100) NOT NULL ,
  `sexo` VARCHAR(9) NOT NULL ,
  `escolaridade` INT(11) NOT NULL ,
  `estado_civil` VARCHAR(50) NOT NULL ,
  `endereco_residencial` VARCHAR(70) NOT NULL ,
  `numero` INT(6) NOT NULL ,
  `complemento` VARCHAR(8) NOT NULL ,
  `bairro` VARCHAR(45) NOT NULL ,
  `cidade` VARCHAR(45) NOT NULL ,
  `cep` VARCHAR(9) NOT NULL ,
  `tipo_residencia` INT(11) NOT NULL ,
  `anos_residencia` INT(3) NOT NULL ,
  `telefone` VARCHAR(13) NOT NULL ,
  `celular` VARCHAR(13) NOT NULL ,
  PRIMARY KEY (`id`, `tipo_cota`, `estado`, `nacionalidade`, `escolaridade`, `tipo_residencia`) ,
  INDEX `fk_associados_tipo_cota1` (`tipo_cota` ASC) ,
  INDEX `fk_associados_estados1` (`estado` ASC) ,
  INDEX `fk_associados_escolaridades1` (`escolaridade` ASC) ,
  INDEX `fk_associados_tipo_residencia1` (`tipo_residencia` ASC) ,
  INDEX `fk_associados_nacionalidade1` (`nacionalidade` ASC) ,
  CONSTRAINT `fk_associados_tipo_cota1`
    FOREIGN KEY (`tipo_cota` )
    REFERENCES `SCO`.`tipo_cota` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_associados_estados1`
    FOREIGN KEY (`estado` )
    REFERENCES `SCO`.`estados` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_associados_escolaridades1`
    FOREIGN KEY (`escolaridade` )
    REFERENCES `SCO`.`escolaridades` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_associados_tipo_residencia1`
    FOREIGN KEY (`tipo_residencia` )
    REFERENCES `SCO`.`tipo_residencia` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_associados_nacionalidade1`
    FOREIGN KEY (`nacionalidade` )
    REFERENCES `SCO`.`nacionalidade` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `SCO`.`estados` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `sigla_estado` VARCHAR(2) NOT NULL ,
  `nome_estado` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `SCO`.`tipo_cota` (
  `id` INT(11) NOT NULL ,
  `tipo_cota` VARCHAR(30) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `SCO`.`escolaridades` (
  `id` INT(11) NOT NULL ,
  `descricao` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `SCO`.`tipo_residencia` (
  `id` INT(11) NOT NULL ,
  `descricao` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `SCO`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `data_criacao` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `nome_completo` VARCHAR(70) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  `usuario` VARCHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  `senha` VARCHAR(32) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  `id_grupo` INT(11) NOT NULL ,
  `status` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`id`, `id_grupo`) ,
  INDEX `fk_usuarios_grupos_usuarios1` (`id_grupo` ASC) ,
  CONSTRAINT `fk_usuarios_grupos_usuarios1`
    FOREIGN KEY (`id_grupo` )
    REFERENCES `SCO`.`grupos_usuarios` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'Contém os dados de acesso dos usuarios';

CREATE  TABLE IF NOT EXISTS `SCO`.`grupos_usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `abreviacao` VARCHAR(5) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  `nome_grupo` VARCHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  `descricao` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE  TABLE IF NOT EXISTS `SCO`.`nacionalidade` (
  `id` INT(11) NOT NULL ,
  `descricao` VARCHAR(20) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
