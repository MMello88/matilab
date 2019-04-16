CREATE TABLE `tbl_usuario`(  
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(150) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `senha` VARCHAR(64) NOT NULL,
  `dt_nascimento` DATETIME NULL,
  `celular` CHAR(15) NULL,
  `sexo` CHAR(1) NULL,
  `super_usuario` CHAR(100) NULL,
  `biografia` VARCHAR(300) NULL,
  `compania` VARCHAR(150) NULL,
  `contratacao` CHAR(1) NULL,
  `imagem_perfil` VARCHAR(100) NULL,
  `url_linkedin` VARCHAR(150) NULL,
  `url_facebook` VARCHAR(150) NULL,
  `url_twitter` VARCHAR(150) NULL,
  `url_github` VARCHAR(150) NULL,
  `ativo` CHAR(1) NOT NULL,
  `cadastro_completo` CHAR(1) NOT NULL,
  `dt_cadastro` DATETIME NOT NULL,
  `hash` VARCHAR(255) NULL,
  `dt_hash_exp` DATETIME NULL,
  `code_cookie_hash` VARCHAR(150) NULL,
  `hash_email` VARCHAR(250) NULL,
  `email_valid` CHAR(1) NULL,
  `ver_cad_usuario` CHAR(1) NULL,
  PRIMARY KEY (`id_usuario`),
  CONSTRAINT Uk_Email UNIQUE (email),
  CONSTRAINT Uk_Super_usuario UNIQUE (super_usuario),
  CONSTRAINT Uk_Code_Cookie UNIQUE (code_cookie_hash)
);

CREATE TABLE IF NOT EXISTS `tbl_ci_sessions` (
        `id` VARCHAR(128) NOT NULL,
        `ip_address` VARCHAR(45) NOT NULL,
        `timestamp` INT(10) UNSIGNED DEFAULT 0 NOT NULL,
        `data` BLOB NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
);

ALTER TABLE tbl_ci_sessions ADD PRIMARY KEY (id);