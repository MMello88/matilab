ALTER TABLE `tbl_endereco` 
 DROP  FOREIGN KEY `FK_tbl_endereco_tbl_usuario`
;

ALTER TABLE `tbl_endereco` 
 ADD CONSTRAINT `FK_tbl_endereco_tbl_usuario`
	FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE  tbl_cidade
 ADD CONSTRAINT `PK_tbl_cidade` PRIMARY KEY (`id_cidade`)
;

ALTER TABLE  tbl_estado
 ADD CONSTRAINT `PK_tbl_estado` PRIMARY KEY (`id_estado` ASC)
;

ALTER TABLE  tbl_pais
 ADD CONSTRAINT `PK_tbl_pais` PRIMARY KEY (`id_cidade` ASC)
;

ALTER TABLE `tbl_cidade` 
 MODIFY COLUMN `id_cidade` INT NOT NULL AUTO_INCREMENT
;

ALTER TABLE `tbl_estado` 
 MODIFY COLUMN `id_estado` INT NOT NULL AUTO_INCREMENT
;

ALTER TABLE `tbl_pais` 
 MODIFY COLUMN `id_cidade` INT NOT NULL AUTO_INCREMENT
;

