ALTER TABLE `tbl_usuario` 
 DROP  INDEX `Uk_Super_usuario`
;

ALTER TABLE `tbl_usuario` 
 DROP COLUMN `code_cookie_hash`
;

ALTER TABLE `tbl_usuario` 
 MODIFY COLUMN `super_usuario` CHAR(100) 	 NULL
;

CREATE TABLE `tbl_endereco`
(
	`id_endereco` INT NOT NULL AUTO_INCREMENT,
	`id_usuario` INT NOT NULL,
	`id_cidade` INT NOT NULL,
	`endereco` VARCHAR(200) NOT NULL,
	`numero` VARCHAR(50) NOT NULL,
	`complemento` VARCHAR(100) 	 NULL,
	`bairro` VARCHAR(100) NOT NULL,
	`cep` VARCHAR(10) NOT NULL,
	CONSTRAINT `PK_tbl_endereco` PRIMARY KEY (`id_endereco` ASC)
)
;

ALTER TABLE `tbl_usuario` 
 ADD CONSTRAINT `Uk_Super_usuario` UNIQUE (`super_usuario` ASC)
;

ALTER TABLE `tbl_endereco` 
 ADD CONSTRAINT `FK_tbl_endereco_tbl_usuario`
	FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE Restrict ON UPDATE Restrict
;

