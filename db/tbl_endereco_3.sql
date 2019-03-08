ALTER TABLE `tbl_endereco` 
 DROP  FOREIGN KEY `FK_tbl_endereco_tbl_usuario`
;

ALTER TABLE `tbl_cidade` 
 DROP COLUMN `estado`
;

ALTER TABLE `tbl_cidade` 
 DROP COLUMN `id`
;

ALTER TABLE `tbl_cidade` 
 DROP COLUMN `link`
;

ALTER TABLE `tbl_cidade` 
 DROP COLUMN `status`
;

ALTER TABLE `tbl_estado` 
 DROP COLUMN `id`
;

ALTER TABLE `tbl_estado` 
 DROP COLUMN `pais`
;

ALTER TABLE `tbl_pais` 
 DROP COLUMN `id`
;

ALTER TABLE `tbl_cidade` 
 ADD `ativo` CHAR(1) NOT NULL
;

ALTER TABLE `tbl_cidade` 
 ADD `id_cidade` INT NOT NULL 
;

ALTER TABLE `tbl_cidade` 
 ADD `id_estado` INT NOT NULL
;

ALTER TABLE `tbl_cidade` 
 ADD `slug` VARCHAR(120) 	 NULL
;

ALTER TABLE `tbl_estado` 
 ADD `id_estado` INT NOT NULL 
;

ALTER TABLE `tbl_estado` 
 ADD `id_pais` INT NOT NULL
;

ALTER TABLE `tbl_pais` 
 ADD `id_cidade` INT NOT NULL 
;

ALTER TABLE `tbl_cidade` 
 MODIFY COLUMN `nome` VARCHAR(120) NOT NULL
;

ALTER TABLE `tbl_estado` 
 MODIFY COLUMN `nome` VARCHAR(75) NOT NULL
;

ALTER TABLE `tbl_estado` 
 MODIFY COLUMN `uf` VARCHAR(2) NOT NULL
;

ALTER TABLE `tbl_pais` 
 MODIFY COLUMN `nome` VARCHAR(60) NOT NULL
;

ALTER TABLE `tbl_pais` 
 MODIFY COLUMN `sigla` VARCHAR(10) NOT NULL
;

ALTER TABLE `tbl_endereco` 
 ADD CONSTRAINT `FK_tbl_endereco_tbl_usuario`
	FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE  
 ADD CONSTRAINT `PK_tbl_cidade` PRIMARY KEY (`id_cidade` ASC)
;

ALTER TABLE  
 ADD CONSTRAINT `PK_tbl_estado` PRIMARY KEY (`id_estado` ASC)
;

ALTER TABLE  
 ADD CONSTRAINT `PK_tbl_pais` PRIMARY KEY (`id_cidade` ASC)
;

