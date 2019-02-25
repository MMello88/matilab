CREATE TABLE `tbl_usuario`(  
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(150) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `senha` VARCHAR(64) NOT NULL,
  `hash` VARCHAR(255) NULL,
  `ativo` CHAR(1) NOT NULL,
  `dt_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`id_usuario`),
  CONSTRAINT Uk_Email UNIQUE (email)
);