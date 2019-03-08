CREATE TABLE `tbl_usuario`(  
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(150) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `senha` VARCHAR(64) NOT NULL,
  `ativo` CHAR(1) NOT NULL,
  `dt_cadastro` DATETIME NOT NULL,
  `hash` VARCHAR(255) NULL,
  `dt_hash_exp` DATETIME NULL,
  `cadastro_completo` CHAR(1) NOT NULL,
  `dt_nascimento` DATETIME NULL,
  `celular` CHAR(15) NULL,
  `sexo` CHAR(1) NULL,
  `super_usuario` CHAR(100) NULL,
  PRIMARY KEY (`id_usuario`),
  CONSTRAINT Uk_Email UNIQUE (email),
  CONSTRAINT Uk_Super_usuario UNIQUE (super_usuario)
);