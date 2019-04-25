diff --cc banco.sql
index fe8c87d,a69653c..0000000
--- a/banco.sql
+++ b/banco.sql
@@@ -1224,74 -1098,125 +1224,148 @@@ DEFAULT CHARACTER SET = utf8
  
  
  -- -----------------------------------------------------
 --- Table `mob_share`.`tbl_home_sessao5`
 +-- Table `mob_share`.`tbl_aprovacao_veiculo_copy1`
  -- -----------------------------------------------------
++<<<<<<< HEAD
 +CREATE TABLE IF NOT EXISTS `mob_share`.`tbl_aprovacao_veiculo_copy1` (
 +  `id_aprovacao_veiculo` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'c├│digo da tabela aprova├º├úo do ve├¡culo',
 +  `status_aprovacao` TINYINT(4) NOT NULL COMMENT 'status de aprova├º├úo',
 +  `id_usuario_cms` INT(11) NOT NULL COMMENT 'c├│digo do usu├írio do cms',
 +  `id_veiculo` INT(11) NOT NULL COMMENT 'c├│digo da tabela ve├¡culo',
 +  PRIMARY KEY (`id_aprovacao_veiculo`),
 +  INDEX `fk_tbl_aprovacao_veiculo_tbl_veiculo_idx` (`id_veiculo` ASC),
 +  INDEX `fk_tbl_aprovacao_veiculo_tbl_usuario_cms_idx` (`id_usuario_cms` ASC),
 +  CONSTRAINT `fk_tbl_avaliacao_veiculo_tbl_usuario_cms0`
 +    FOREIGN KEY (`id_usuario_cms`)
 +    REFERENCES `mob_share`.`tbl_usuario_cms` (`id_usuario_cms`),
 +  CONSTRAINT `fk_tbl_avaliacao_veiculo_tbl_veiculo0`
 +    FOREIGN KEY (`id_veiculo`)
 +    REFERENCES `mob_share`.`tbl_veiculo` (`id_veiculo`))
 +ENGINE = InnoDB
 +DEFAULT CHARACTER SET = utf8;
++=======
+ CREATE TABLE IF NOT EXISTS `mob_share`.`tbl_home_sessao5` (
+   `id_home_sessao5` INT NOT NULL AUTO_INCREMENT,
+   `status_sessao5` FLOAT NOT NULL,
+   `titulo_sessao5` VARCHAR(45) NOT NULL,
+   `subtitulo1_sessao5` VARCHAR(45) NOT NULL,
+   `subtitulo2_sessao5` VARCHAR(45) NOT NULL,
+   `subtitulo3_sessao5` VARCHAR(45) NOT NULL,
+   `subtitulo4_sessao5` VARCHAR(45) NOT NULL,
+   `foto1_sessao5` VARCHAR(255) NOT NULL,
+   `foto2_sessao5` VARCHAR(255) NOT NULL,
+   `foto3_sessao5` VARCHAR(255) NOT NULL,
+   `foto4_sessao5` VARCHAR(255) NOT NULL,
+   `texto1_sessao5` TEXT NOT NULL,
+   `texto2_sessao5` TEXT NOT NULL,
+   `texto3_sessao5` TEXT NOT NULL,
+   `texto4_sessao5` TEXT NOT NULL,
+   PRIMARY KEY (`id_home_sessao5`))
+ ENGINE = InnoDB;
+ 
+ /* Altera├º├Áes */
+ /* + tbl_percentual
+  * tbl_tipo_veiculo {
+  *	+ id_tipo_veiculo  auto_increment
+  * }
+ */
+ 
+ 
+ /* Altera├º├úo
+   + tbl_fale_conosco{
+     + adicionando campo mensagem_fale_conosco 
+     + retirando NOT NULL nome_fale_conosco e celular_fale_conosco
+   } */
+ 
+ ALTER TABLE `tbl_fale_conosco` 
+ CHANGE COLUMN `nome_fale_conosco` `nome_fale_conosco` VARCHAR(100) NULL COMMENT 'nome da p├ígina fale conosco' ,
+ ADD COLUMN `celular_fale_conosco` VARCHAR(20) NULL COMMENT 'telefone da p├ígina fale conosco' ,
+ ADD COLUMN `mensagem_fale_conosco` TEXT NOT NULL AFTER `celular_fale_conosco`;
+ 
+ 
++>>>>>>> 385a39c2f7a9cfe931a373e91a12623bb89dd9d4
  
 -/* Altera├º├Áes 
 -   + tbl_cliente{
 -     + senha varchar(255)
 -   }
 -*/
 -ALTER TABLE tbl_cliente
 -CHANGE COLUMN `senha` `senha` VARCHAR(255) NOT NULL ;
  
 -/* Altera├º├Áes : Criando a tabela tbl_acessorio_veiculo que existe no modelo logico mas estranhamente esta ausente no modelo fisico atual
 +-- -----------------------------------------------------
 +-- Table `mob_share`.`tbl_avaliacao_locatario_copy1`
 +-- -----------------------------------------------------
 +CREATE TABLE IF NOT EXISTS `mob_share`.`tbl_avaliacao_locatario_copy1` (
 +  `id_avaliacao_locatario` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'c├│digo  da tabe├ºa de avalia├º├úo do locatario',
 +  `nota` FLOAT NULL DEFAULT NULL COMMENT 'nota do locatario',
 +  `comentario` TEXT NOT NULL COMMENT 'coment├írio da avalia├º├úo do locat├írio',
 +  `data_avaliacao` DATE NOT NULL COMMENT 'data da avalia├º├úo do locatario',
 +  `id_locacao` INT(11) NOT NULL COMMENT 'c├│digo da tabela loca├º├úo',
 +  PRIMARY KEY (`id_avaliacao_locatario`),
 +  INDEX `fk_tbl_avaliacao_locacao_tbl_locacao_idx` (`id_locacao` ASC),
 +  CONSTRAINT `fk_tbl_avaliacao_locacao_tbl_locacao0`
 +    FOREIGN KEY (`id_locacao`)
 +    REFERENCES `mob_share`.`tbl_locacao` (`id_locacao`))
 +ENGINE = InnoDB
 +DEFAULT CHARACTER SET = utf8;
  
 -   + tbl_acessorio_veiculo
  
 -*/
 +-- -----------------------------------------------------
 +-- Table `mob_share`.`tbl_avaliacao_servico_copy1`
 +-- -----------------------------------------------------
 +CREATE TABLE IF NOT EXISTS `mob_share`.`tbl_avaliacao_servico_copy1` (
 +  `id_avaliacao_servico` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'c├│digo da tabela avalia├º├úo servi├ºo',
 +  `nota` FLOAT NULL DEFAULT NULL COMMENT 'nota da avalia├º├úo',
 +  `data_avaliacao` DATE NOT NULL COMMENT 'data da avalia├º├úo',
 +  `id_locacao` INT(11) NOT NULL COMMENT 'c├│digo da tabela loca├º├úo',
 +  `comentario` TEXT NULL DEFAULT NULL COMMENT 'coment├íria da loca├º├úo',
 +  PRIMARY KEY (`id_avaliacao_servico`),
 +  INDEX `fk_tbl_avaliacao_servico_tbl_locacao_idx` (`id_locacao` ASC),
 +  CONSTRAINT `fk_tbl_avaliacao_servico_tbl_locacao0`
 +    FOREIGN KEY (`id_locacao`)
 +    REFERENCES `mob_share`.`tbl_locacao` (`id_locacao`))
 +ENGINE = InnoDB
 +DEFAULT CHARACTER SET = utf8;
  
 -CREATE TABLE IF NOT EXISTS `mob_share`.`tbl_acessorio_veiculo` (
 -  `idtbl_acessorio_tbl_veiculo` INT NOT NULL AUTO_INCREMENT COMMENT 'c├│digo da tabela de acess├│rio do ve├¡culo',
 -  `id_acessorio` INT NULL COMMENT 'c├│digo da tabela acess├│rio',
 -  `id_veiculo` INT NULL COMMENT 'c├│digo da tabela de ve├¡culo',
 -  PRIMARY KEY (`idtbl_acessorio_tbl_veiculo`),
 -  INDEX `fk_tbl_acessorio_veiculo_tbl_veiculo_idx` (`id_veiculo` ASC),
 -  INDEX `fk_tbl_acessorio_veiculo_tbl_acessorio_idx` (`id_acessorio` ASC),
 -  CONSTRAINT `fk_tbl_acessorio_veiculo_tbl_veiculo`
 -    FOREIGN KEY (`id_veiculo`)
 -    REFERENCES `tbl_veiculo` (`id_veiculo`)
 -    ON DELETE NO ACTION
 -    ON UPDATE NO ACTION,
 -  CONSTRAINT `fk_tbl_acessorio_veiculo_tbl_acessorio`
 -    FOREIGN KEY (`id_acessorio`)
 -    REFERENCES `tbl_acessorios` (`id_acessorios`)
 -    ON DELETE NO ACTION
 -    ON UPDATE NO ACTION)
 -ENGINE = InnoDB
 -
 -/* Altera├º├Áes 
 -   + tbl_aprovacao_veiculo{
 -     + mensagem TEXT 
 -   }
 -*/
 -ALTER TABLE `mob_share`.`tbl_aprovacao_veiculo` 
 -ADD COLUMN `mensagem` TEXT NOT NULL AFTER `id_veiculo`;
 -/* Altera├º├Áes
 -   + tbl_usuario_cms{
 -     + senha varchar(255)
 -   }
 -*/
 -ALTER TABLE `mob_share`.`tbl_usuario_cms` 
 -CHANGE COLUMN `senha` `senha` VARCHAR(255) NOT NULL COMMENT 'senha do usu├írio do cms' ;
  
++<<<<<<< HEAD
 +-- -----------------------------------------------------
 +-- Table `mob_share`.`tbl_bancos_copy1`
 +-- -----------------------------------------------------
 +CREATE TABLE IF NOT EXISTS `mob_share`.`tbl_bancos_copy1` (
 +  `id_banco` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'c├│digo da tabela bancas',
 +  `nome_banco` VARCHAR(60) NOT NULL COMMENT 'nome do banco',
 +  `agencia_numero` VARCHAR(20) NOT NULL COMMENT 'n├║mero da ag├¬ncia',
 +  `cidade` VARCHAR(100) NULL DEFAULT NULL COMMENT 'cidade do banco',
 +  `uf` VARCHAR(2) NULL DEFAULT NULL COMMENT 'estado do banco',
 +  PRIMARY KEY (`id_banco`))
 +ENGINE = InnoDB
 +DEFAULT CHARACTER SET = utf8;
++=======
+ /* Altera├º├Áes
+    + tbl_anuncio{
+      + id_anuncio AUTO_INCREMENT
+ 	 + status_aprovado denovo essa mania de not null mesmo o anuncio n├úo estando aprovado quando ├® criado
+    }
+ */
+ ALTER TABLE `mob_share`.`tbl_anuncio` 
+ CHANGE COLUMN `id_anuncio` `id_anuncio` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'c├│digo da tabela an├║ncio' ;
+ 
+ 
+ ALTER TABLE `mob_share`.`tbl_anuncio` 
+ CHANGE COLUMN `status_aprovado` `status_aprovado` TINYINT(2) NULL COMMENT 'status aprovado do an├║ncio' ;
+ 
+ /* Altera├º├Áes : N├úo achei aonde esta o valor hora
+ 	+ tbl_anuncio{
+ 	  + valor_hora decimal(10,2)
+ 	}
+ */
+ ALTER TABLE `mob_share`.`tbl_anuncio` 
+ ADD COLUMN `valor_hora` DECIMAL(10,2) NOT NULL DEFAULT 1 AFTER `status_aprovado`;
+ 
+ /* Altera├º├Áes : sem o campo mensagem
+ 	+ tbl_aprovacao_anuncio{
+ 	  + menssagem text(1021)
+ 	}
+ */
+ ALTER TABLE `mob_share`.`tbl_aprovacao_anuncio` 
+ ADD COLUMN `mensagem` TEXT(1021) NOT NULL AFTER `id_usuario_cms`;
+ 
++>>>>>>> 385a39c2f7a9cfe931a373e91a12623bb89dd9d4
  
  
  SET SQL_MODE=@OLD_SQL_MODE;
