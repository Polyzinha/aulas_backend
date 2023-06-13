
CREATE TABLE IF NOT EXISTS `disciplina` (
  `codigo` INT NOT NULL auto_increment,
  `nome` VARCHAR(45) NOT NULL,
  `ementa` VARCHAR(45) NOT NULL,
  `carga_horaria` INT NOT NULL,
  `bibliografia` text NOT NULL,
  PRIMARY KEY (`codigo`))
ENGINE = InnoDB;
