-- -----------------------------------------------------
-- Table `sco`.`associados`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `associados` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome_associado` VARCHAR(100) NOT NULL ,
  `cpf_associado` VARCHAR(14) NOT NULL ,
  `numero_identidade` VARCHAR(10) NOT NULL ,
  `data_expedicao` DATE NOT NULL ,
  `orgao_emissor` VARCHAR(6) NOT NULL ,
  `data_nascimento` DATE NOT NULL ,
  `naturalidade` VARCHAR(50) NOT NULL ,
  `estado` VARCHAR(2) NOT NULL ,
  `nome_pai` VARCHAR(100) NOT NULL ,
  `nome_mae` VARCHAR(100) NOT NULL ,
  `sexo` INT(1) NOT NULL ,
  `escolaridade` VARCHAR(60) NOT NULL ,
  `estado_civil` VARCHAR(50) NOT NULL ,
  `endereco_residencial` VARCHAR(70) NOT NULL ,
  `numero` INT(6) NOT NULL ,
  `complemento` VARCHAR(8) NOT NULL ,
  `bairro` VARCHAR(45) NOT NULL ,
  `cidade` VARCHAR(45) NOT NULL ,
  `cep` VARCHAR(9) NOT NULL ,
  `residencia` INT(1) NOT NULL ,
  `anos_residencia` INT(3) NOT NULL ,
  `telefone` VARCHAR(13) NOT NULL ,
  `celular` VARCHAR(13) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;