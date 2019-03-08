ALTER TABLE `tbl_endereco` 
 DROP  FOREIGN KEY `FK_tbl_endereco_tbl_usuario`
;

ALTER TABLE `tbl_endereco` 
 ADD CONSTRAINT `FK_tbl_endereco_tbl_usuario`
	FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE Restrict ON UPDATE Restrict
;

