-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema heroku_9d96ea2f7df1ba5
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema heroku_9d96ea2f7df1ba5
-- -----------------------------------------------------
USE `heroku_9d96ea2f7df1ba5` ;

-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`cliente` (
  `idCedula` DOUBLE NOT NULL COMMENT 'Número de cedula',
  `nombre` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Nombre del usuario',
  `apellido` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Apellido del usuario',
  `telefono` DOUBLE NOT NULL DEFAULT 0 COMMENT 'Telefóno del usuario',
  `direccion` VARCHAR(80) NULL DEFAULT '' COMMENT 'Dirección del usuario',
  `visible` BOOLEAN NOT NULL DEFAULT '1' COMMENT 'Campo para eliminación lógica', 
  `correo` VARCHAR(45) NULL COMMENT 'Correo electronico',
  `contrasena` VARCHAR(300) NOT NULL COMMENT 'Contraseña del usuario\n',
  `createdAt` TIMESTAMP NULL DEFAULT current_timestamp COMMENT 'Fecha de creación',
  `createdBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que creo el registro',
  `updatedAt` TIMESTAMP NULL ,
  `updatedBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que actualizó el registro',
  PRIMARY KEY (`idCedula`))
ENGINE = InnoDB;
 
 ALTER TABLE cliente CHARACTER SET utf8 COLLATE utf8_general_ci;

-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`veterin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`veterin` (
  `idVeterin` INT NOT NULL AUTO_INCREMENT,
  `rol` INT NOT NULL COMMENT 'Nombre de la mascota',
  `cargo` VARCHAR(45) NOT NULL COMMENT 'Nombre de la mascota',
  `nombre` VARCHAR(100) NOT NULL,
  `visible` BOOLEAN NOT NULL DEFAULT '1' COMMENT 'Campo para eliminación lógica',
  `createdAt` TIMESTAMP NULL DEFAULT current_timestamp COMMENT 'Fecha de creación',
  `createdBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que creo el registro',
  `updatedAt` TIMESTAMP NULL,
  `updatedBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que actualizó el registro', 
  PRIMARY KEY (`idVeterin`))
ENGINE = InnoDB;

ALTER TABLE veterin CHARACTER SET utf8 COLLATE utf8_general_ci;

-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`servicios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`servicios` (
  `idServi` INT NOT NULL AUTO_INCREMENT COMMENT 'Identificador de servicios',
  `servicios` VARCHAR(45) NOT NULL COMMENT 'Desparacitantes aplicados a las mascotas',
  `visible` BOOLEAN NOT NULL DEFAULT '1' COMMENT 'Campo para eliminación lógica', 
  `createdAt` TIMESTAMP NULL DEFAULT current_timestamp COMMENT 'Fecha de creación',
  `createdBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que creo el registro',
  `updatedAt` TIMESTAMP NULL ,
  `updatedBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que actualizó el registro',
  PRIMARY KEY (`idServi`))
ENGINE = InnoDB;

ALTER TABLE servicios CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`citas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`citas` (
  `idCitas` INT NOT NULL AUTO_INCREMENT COMMENT 'Indice de citas ',
  `fecha` TIMESTAMP NULL,
  `hora` TIME NOT NULL COMMENT 'Hora de la cita',
  `motivo` VARCHAR(45) NOT NULL COMMENT 'Motivo de la cita',
  `visible` BOOLEAN NOT NULL DEFAULT '1' COMMENT 'Campo para eliminación lógica',
  `createdAt` TIMESTAMP NULL DEFAULT current_timestamp COMMENT 'Fecha de creación',
  `createdBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que creo el registro',
  `updatedAt` TIMESTAMP NULL,
  `updatedBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que actualizó el registro', 
  `cliente_idCedula` DOUBLE NOT NULL,
  `servicios_idServi` INT NOT NULL,
  `veterin_idVeterin` INT NOT NULL,
  PRIMARY KEY (`idCitas`),
  UNIQUE INDEX `idCitas_UNIQUE` (`idCitas` ASC),
  CONSTRAINT `fk_citas_cliente1`
    FOREIGN KEY (`cliente_idCedula`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`cliente` (`idCedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_servicios1`
    FOREIGN KEY (`servicios_idServi`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`servicios` (`idServi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_veterin1`
    FOREIGN KEY (`veterin_idVeterin`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`veterin` (`idVeterin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

ALTER TABLE citas CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`mascota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`mascota` (
  `idMascotas` INT NOT NULL AUTO_INCREMENT COMMENT 'Indice de la mascota',
  `numChip` DOUBLE NOT NULL COMMENT 'Número de indentificaión de la mascota',
  `nombre` VARCHAR(45) NOT NULL COMMENT 'Nombre de la mascota',
  `especie` VARCHAR(45) NOT NULL COMMENT 'Especie de la mascota',
  `sexo` TINYINT(1) NOT NULL COMMENT 'Sexo de la mascota',
  `raza` VARCHAR(45) NOT NULL COMMENT 'Raza de la mascota',
  `fecNacimi` TIMESTAMP NULL,
  `fecEsterili` DATETIME NULL COMMENT 'Fecha de esterilización de la mascota',
  `visible` BOOLEAN NOT NULL  DEFAULT '1' COMMENT 'Campo para eliminació lógica',
  `createdAt` TIMESTAMP NULL DEFAULT current_timestamp COMMENT 'Fecha de creación',
  `createdBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que creo el registro',
  `updatedAt` TIMESTAMP NULL,
  `updatedBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que actualizó el registro', 
  `cliente_idCedula` DOUBLE NOT NULL,
  PRIMARY KEY (`idMascotas`),
  UNIQUE INDEX `idMascotas_UNIQUE` (`idMascotas` ASC),
  UNIQUE INDEX `Nombre_copy1_UNIQUE` (`numChip` ASC),
  CONSTRAINT `fk_mascota_cliente1`
    FOREIGN KEY (`cliente_idCedula`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`cliente` (`idCedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

ALTER TABLE mascota CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`controles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`controles` (
  `idControl` INT NOT NULL AUTO_INCREMENT COMMENT 'Inidice de controles',
  `fecha` TIMESTAMP NULL,
  `peso` INT NOT NULL COMMENT 'Peso del control',
  `diagnos` LONGTEXT NULL COMMENT 'Diagnostico de la mascota durante el control',
  `trata` LONGTEXT NULL COMMENT 'Tratamiento formulado a la mascota',
  `observ` LONGTEXT NULL COMMENT 'Observaciones adicionales sobre el control',
  `visible` BOOLEAN NOT NULL  DEFAULT '1' COMMENT 'Campo para eliminación lógica', 
  `createdAt` TIMESTAMP NULL DEFAULT current_timestamp COMMENT 'Fecha de creación',
  `createdBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que creo el registro',
  `updatedAt` TIMESTAMP NULL,
  `updatedBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que actualizó el registro',
  `mascota_idMascotas` INT NOT NULL,
  `veterin_idVeterin` INT NOT NULL,
  PRIMARY KEY (`idControl`),
  UNIQUE INDEX `idControles_UNIQUE` (`idControl` ASC),
  CONSTRAINT `fk_controles_mascota1`
    FOREIGN KEY (`mascota_idMascotas`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`mascota` (`idMascotas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_controles_veterin1`
    FOREIGN KEY (`veterin_idVeterin`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`veterin` (`idVeterin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

ALTER TABLE controles CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`examenes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`examenes` (
  `idExam` INT NOT NULL AUTO_INCREMENT COMMENT 'Indice de los examenes',
  `tipo` VARCHAR(45) NOT NULL COMMENT 'Descripción del exámen realizado',
  `resulta` MEDIUMTEXT NOT NULL COMMENT 'Resultado del exámen',
  `lab` VARCHAR(45) NOT NULL COMMENT 'Nombre del laboratorio que realizó el exámen\n',
  `visible` BOOLEAN NOT NULL DEFAULT '1' COMMENT 'Campo para eliminación lógica',
  `createdAt` TIMESTAMP NULL DEFAULT current_timestamp COMMENT 'Fecha de creación',
  `createdBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que creo el registro',
  `updatedAt` TIMESTAMP NULL ,
  `updatedBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que actualizó el registro', 
  PRIMARY KEY (`idExam`),
  UNIQUE INDEX `idExamenes_UNIQUE` (`idExam` ASC))
ENGINE = InnoDB;

ALTER TABLE examenes CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`vacunas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`vacunas` (
  `idVacun` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL COMMENT 'Nombre de la vacuna',
  `visible` BOOLEAN NOT NULL DEFAULT '1' COMMENT 'Campo para eliminación lógica',
  `createdAt` TIMESTAMP NULL DEFAULT current_timestamp COMMENT 'Fecha de creación',
  `createdBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que creo el registro',
  `updatedAt` TIMESTAMP NULL,
  `updatedBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que actualizó el registro', 
  PRIMARY KEY (`idVacun`))
ENGINE = InnoDB;

ALTER TABLE vacunas CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`despara`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`despara` (
  `idDespara` INT NOT NULL AUTO_INCREMENT COMMENT 'Indice de desparacitante',
  `nombre` VARCHAR(45) NOT NULL COMMENT 'Nombre del desparacitante',
  `visible` BOOLEAN NOT NULL DEFAULT '1' COMMENT 'Campo para eliminación lógica', 
  `createdAt` TIMESTAMP NULL DEFAULT current_timestamp COMMENT 'Fecha de creación',
  `createdBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que creo el registro',
  `updatedAt` TIMESTAMP NULL ,
  `updatedBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que actualizó el registro',
  PRIMARY KEY (`idDespara`))
ENGINE = InnoDB;

ALTER TABLE despara CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`procedi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`procedi` (
  `idProc` INT NOT NULL AUTO_INCREMENT COMMENT 'Indice de procedimientos',
  `fecha` DATETIME NULL,
  `sigDosis` DATETIME NULL COMMENT 'Siguiente dosis del medicamento aplicado',
  `visible` BOOLEAN NOT NULL  DEFAULT '1' COMMENT 'Campo para eliminació lógica', 
  `createdAt` TIMESTAMP NULL DEFAULT current_timestamp COMMENT 'Fecha de creación',
  `createdBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que creo el registro',
  `updatedAt` TIMESTAMP NULL,
  `updatedBy` VARCHAR(45) NOT NULL DEFAULT 'Scripts' COMMENT 'Usuario o módulo que actualizó el registro',
  `mascota_idMascotas` INT NOT NULL,
  `vacunas_idVacun` INT NOT NULL,
  `despara_idDespara` INT NOT NULL,
  `veterin_idVeterin` INT NOT NULL,
  `examenes_idExam` INT NOT NULL,
  PRIMARY KEY (`idProc`),
  UNIQUE INDEX `idProcedimientos_UNIQUE` (`idProc` ASC),
  CONSTRAINT `fk_procedi_mascota1`
    FOREIGN KEY (`mascota_idMascotas`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`mascota` (`idMascotas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_procedi_vacunas1`
    FOREIGN KEY (`vacunas_idVacun`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`vacunas` (`idVacun`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_procedi_despara1`
    FOREIGN KEY (`despara_idDespara`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`despara` (`idDespara`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_procedi_veterin1`
    FOREIGN KEY (`veterin_idVeterin`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`veterin` (`idVeterin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_procedi_examenes1`
    FOREIGN KEY (`examenes_idExam`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`examenes` (`idExam`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

ALTER TABLE procedi CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`usuario_s`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`usuario_s` (
  `usuId` INT(11) NOT NULL AUTO_INCREMENT,
  `usuLogin` VARCHAR(50) NOT NULL,
  `usuPassword` VARCHAR(100) NOT NULL,
  `usuUsuSesion` VARCHAR(20) NULL DEFAULT 'Null',
  `usuEstado` TINYINT(1) NOT NULL DEFAULT 1,
  `usuCreatedAt` TIMESTAMP NULL DEFAULT current_timestamp,
  `usuUpdatedAt` TIMESTAMP NULL ,
  PRIMARY KEY (`usuId`),
  UNIQUE INDEX `usuLogin_UNIQUE` (`usuLogin` ASC))
ENGINE = InnoDB;

ALTER TABLE usuario_s CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`persona` (
  `perId` INT(11) NOT NULL COMMENT 'Nos muestra el Id de la tabla persona',
  `perDocumento` VARCHAR(20) NOT NULL COMMENT 'Nos muestra el documento de la persona',
  `perNombre` VARCHAR(100)  NOT NULL COMMENT 'Nos muestra el nombre de la persona',
  `perApellido` VARCHAR(255) NOT NULL COMMENT 'Nos muestra el apellido de la persona',
  `perEstado` TINYINT(1) NOT NULL DEFAULT "1",
  `perUsuSesion` VARCHAR(20) NULL DEFAULT NULL,
  `perCreatedAt` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `perUpdatedAt` TIMESTAMP NULL,
  `usuario_s_usuld` INT(11) NOT NULL,
  `usuario_s_usuId` INT(11) NOT NULL,
  PRIMARY KEY (`perId`, `usuario_s_usuId`),
  UNIQUE INDEX `uniq_documento` (`perDocumento` ASC),
  CONSTRAINT `fk_persona_usuario_s1`
    FOREIGN KEY (`usuario_s_usuId`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`usuario_s` (`usuId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Esta tabla nos muestra los datos de la persona';

ALTER TABLE persona CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`rol` (
  `rolId` INT(11) NOT NULL AUTO_INCREMENT,
  `rolNombre` VARCHAR(32) NOT NULL,
  `rolDescripcion` VARCHAR(255) NOT NULL,
  `rolEstado` TINYINT(1) NOT NULL DEFAULT 1,
  `rolUsuSesion` VARCHAR(45) NULL DEFAULT 'Null',
  `rolCreatedAt` TIMESTAMP NULL DEFAULT current_timestamp,
  `rolUpdatedAt` TIMESTAMP NULL,
  PRIMARY KEY (`rolId`),
  UNIQUE INDEX `rolNombre_UNIQUE` (`rolNombre` ASC))
ENGINE = InnoDB;

ALTER TABLE rol CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`usuario_s_roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`usuario_s_roles` (
  `id_rol` INT(11) NOT NULL,
  `estado` TINYINT(1) NOT NULL DEFAULT "1",
  `fechaUserRol` TIMESTAMP NULL,
  `usuRolUsuSesion` VARCHAR(20) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL ,
  `usuario_s_usuId` INT(11) NOT NULL,
  PRIMARY KEY (`id_rol`, `usuario_s_usuId`),
  CONSTRAINT `usuario_s_roles_fk_rolidrol`
    FOREIGN KEY (`id_rol`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`rol` (`rolId`),
  CONSTRAINT `fk_usuario_s_roles_usuario_s1`
    FOREIGN KEY (`usuario_s_usuId`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`usuario_s` (`usuId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

ALTER TABLE usuario_s_roles CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`categorialibro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`categorialibro` (
  `catLibId` INT(11) NOT NULL AUTO_INCREMENT,
  `catLibNombre` VARCHAR(60) CHARACTER SET 'utf8' NOT NULL,
  `catLibEstado` TINYINT(1) NOT NULL DEFAULT '1',
  `catLibObservacion` VARCHAR(500) CHARACTER SET 'utf8' NULL DEFAULT NULL,
  PRIMARY KEY (`catLibId`))
ENGINE = InnoDB;

ALTER TABLE categorialibro CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `heroku_9d96ea2f7df1ba5`.`libros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_9d96ea2f7df1ba5`.`libros` (
  `isbn` INT(5) NOT NULL DEFAULT '0',
  `titulo` VARCHAR(236) NULL DEFAULT NULL,
  `autor` VARCHAR(305) NULL DEFAULT NULL,
  `precio` VARCHAR(10) NULL DEFAULT NULL,
  `estado` TINYINT(1) NOT NULL DEFAULT '1',
  `categoriaLibro_catLibId` INT(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`isbn`, `categoriaLibro_catLibId`),
  CONSTRAINT `fk_libros_categoriaLibro1`
    FOREIGN KEY (`categoriaLibro_catLibId`)
    REFERENCES `heroku_9d96ea2f7df1ba5`.`categorialibro` (`catLibId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

ALTER TABLE libros CHARACTER SET utf8 COLLATE utf8_general_ci;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
