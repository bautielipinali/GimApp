----- tipo usuarios -----

CREATE TABLE tipo_usuario  (
  id_rol int(11) NOT NULL AUTO_INCREMENT,
  tipo_usuario varchar(10)NOT NULL,
  PRIMARY KEY (id_rol)
)


----- usuarios -----

CREATE TABLE usuarios (
  id_user int(11) NOT NULL AUTO_INCREMENT,
  id_rol int(11) NOT NULL,
  nombre varchar(100)NOT NULL,
  email varchar(100) NOT NULL,
  clave varchar(100) NOT NULL,
  PRIMARY KEY (id_user),
  FOREIGN KEY (id_rol) REFERENCES tipo_usuario(id_rol)
)


----- empleados -----

CREATE TABLE empleados (
  id_empleado int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  dni varchar(20) NOT NULL,
  cargo varchar(100) NOT NULL,
  PRIMARY KEY (id_empleado)
) 


----- horarios ----

CREATE TABLE horarios(
id_horario int(11) NOT NULL AUTO_INCREMENT,
horario varchar(100) NOT NULL,
PRIMARY KEY (id_horario)
) 


----- turnos -----

CREATE TABLE turnos (
  id_turno int(11) NOT NULL AUTO_INCREMENT,
  id_horario int(11) NOT NULL,
  nombre varchar(100) NOT NULL,
  apellido varchar(100) NOT NULL,
  actividad varchar(100) NOT NULL,
  PRIMARY KEY (id_turno),
  FOREIGN KEY (id_horario) REFERENCES horarios(id_horario)
)