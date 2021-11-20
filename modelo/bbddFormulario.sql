-- si existe que la borre
DROP DATABASE IF EXISTS ifpdb;

-- creo la bbdd
CREATE DATABASE ifpdb;

use ifpdb;


-- creo las tablas con los campos
CREATE TABLE ifpdb.usuarios (id  VARCHAR(50) NOT NULL , 
                                contrasena VARCHAR(100) NOT NULL , 
                                correo     VARCHAR(255) NOT NULL ,  
                                nombre     VARCHAR(255) NOT NULL ,
                                PRIMARY KEY  (id)) ENGINE = InnoDB;

CREATE TABLE ifpdb.acrividades ( id INT NOT NULL AUTO_INCREMENT ,  
                                        titulo  VARCHAR(200) NOT NULL , 
                                        ciudad  VARCHAR(100) NOT NULL , 
                                        fecha   DATE NOT NULL ,  
                                        precio  BIT NOT NULL ,
                                        usuario VARCHAR(50) NOT NULL ,    
                                        PRIMARY KEY  (id)) ENGINE = InnoDB;