CREATE DATABASE db_mtdpage;
use db_mtdpage;
drop database db_mtdpage;

create table DB_Contenido_Entrada_Evento(
id_Contenido_Entrada_Evento int not null auto_increment,
dt_Titulo_Entrada_Evento varchar(300) not null,
dt_Contenido_Entrada_Evento varchar(350),
dt_Categoria_Entrada_Evento varchar(200),
PRIMARY KEY(id_Contenido_Entrada_Evento)
);
create table DB_Imagenes_Entrada_Evento(
id_Imagen_Entrada_Evento int not null auto_increment,
id_Contenido_Entrada_Evento int,
dt_Imagen_Entrada_Evento longblob not null,
dt_Fecha_Entrada_Evento varchar(50),
dt_Hora_Entrada_Evento varchar(50),
FOREIGN KEY(id_Contenido_Entrada_Evento) References 
DB_Contenido_Entrada_Eventos(id_Contenido_Entrada_Evento),
PRIMARY KEY(id_Imagen_Entrada_Evento)
);
create table DB_Descripcion_Entrada_Evento(
id_Descripcion_Entrada_Evento int not null auto_increment,
id_Imagen_Entrada_Evento int,
dt_Descripcion_Entrada_Evento varchar(500),
dt_Ubicacion_Entrada_Evento varchar(150),
FOREIGN KEY(id_Imagen_Entrada_Evento) References 
DB_Imagenes_Entrada_Evento(id_Imagen_Entrada_Evento),
primary key(id_Descripcion_Entrada_Evento)
);
create table DB_Contenido_Publicado_Evento(
id_Contenido_Publicado_Evento int not null auto_increment,
dt_Titulo_Publicado_Evento varchar(300) not null,
dt_Contenido_Publicado_Evento varchar(350),
dt_Categoria_Publicado_Evento varchar(200),
PRIMARY KEY(id_Contenido_Publicado_Evento)
);
create table DB_Imagenes_Publicado_Evento(
id_Imagen_Publicado_Evento int not null auto_increment,
id_Contenido_Publicado_Evento int,
dt_Imagen_Publicado_Evento longblob not null,
dt_Fecha_Publicado_Evento varchar(50),
dt_Hora_Publicado_Evento varchar(50),
FOREIGN KEY(id_Contenido_Publicado_Evento) References 
DB_Contenido_Entrada_Eventos(id_Contenido_Publicado_Evento),
PRIMARY KEY(id_Imagen_Publicado_Evento)
);
create table DB_Descripcion_Publicado_Evento(
id_Descripcion_Publicado_Evento int not null auto_increment,
id_Imagen_Publicado_Evento int,
dt_Descripcion_Publicado_Evento varchar(500),
dt_Ubicacion_Publicado_Evento varchar(150),
FOREIGN KEY(id_Imagen_Publicado_Evento) References 
DB_Imagenes_Entrada_Evento(id_Imagen_Publicado_Evento),
primary key(id_Descripcion_Publicado_Evento)
);
create table DB_Comentarios_Evento_Publicados(
id_Comentarios_Evento_Publicados int,
dt_Comentario_Eventos_Publicados varchar(500),
primary key(id_Comentarios_Evento_Publicados)
);
create table DB_Comentarios_Evento_Entrada(
id_Comentarios_Evento_Entrada int,
dt_Comentario_Evento_Entrada varchar(500),
primary key(id_Comentarios_Evento_Entrada)
);
------------------------------------------------------------------------------------------
create table DB_Contenido_Entrada_Blog(
id_Contenido_Entrada_Blog int not null auto_increment,
dt_Titulo_Entrada_Blog varchar(300) not null,
dt_Contenido_Entrada_Blog varchar(350),
dt_Categoria_Entrada_Blog varchar(200),
PRIMARY KEY(id_Contenido_Entrada_Blog)
);
create table DB_Imagenes_Entrada_Blog(
id_Imagen_Entrada_Blog int not null auto_increment,
id_Contenido_Entrada_Blog int,
dt_Imagen_Entrada_Blog longblob not null,
dt_Fecha_Entrada_Blog varchar(50),
dt_Hora_Entrada_Blog varchar(50),
FOREIGN KEY(id_Contenido_Entrada_Blog) References 
DB_Contenido_Entrada_Eventos(id_Contenido_Entrada_Blog),
PRIMARY KEY(id_Imagen_Entrada_Blog)
);
create table DB_Descripcion_Entrada_Blog(
id_Descripcion_Entrada_Blog int not null auto_increment,
id_Imagen_Entrada_Blog int,
dt_Descripcion_Entrada_Blog varchar(500),
dt_Ubicacion_Entrada_Blog varchar(150),
FOREIGN KEY(id_Imagen_Entrada_Blog) References 
DB_Imagenes_Entrada_Evento(id_Imagen_Entrada_Blog),
primary key(id_Descripcion_Entrada_Blog)
);
create table DB_Contenido_Publicado_Blog(
id_Contenido_Publicado_Blog int not null auto_increment,
dt_Titulo_Publicado_Blog varchar(300) not null,
dt_Contenido_Publicado_Blog varchar(350),
dt_Categoria_Publicado_Blog varchar(200),
PRIMARY KEY(id_Contenido_Publicado_Blog)
);
create table DB_Imagenes_Publicado_Blog(
id_Imagen_Publicado_Blog int not null auto_increment,
id_Contenido_Publicado_Blog int,
dt_Imagen_Publicado_Blog longblob not null,
dt_Fecha_Publicado_Blog varchar(50),
dt_Hora_Publicado_Blog varchar(50),
FOREIGN KEY(id_Contenido_Publicado_Blog) References 
DB_Contenido_Entrada_Eventos(id_Contenido_Publicado_Blog),
PRIMARY KEY(id_Imagen_Publicado_Blog)
);
create table DB_Descripcion_Publicado_Blog(
id_Descripcion_Publicado_Blog int not null auto_increment,
id_Imagen_Publicado_Blog int,
dt_Descripcion_Publicado_Blog varchar(500),
dt_Ubicacion_Publicado_Blog varchar(150),
FOREIGN KEY(id_Imagen_Publicado_Blog) References 
DB_Imagenes_Entrada_Evento(id_Imagen_Publicado_Blog),
primary key(id_Descripcion_Publicado_Blog)
);
create table DB_Comentarios_Blog_Publicados(
id_Comentarios_Blog_Publicados int,
dt_Comentario_Blog_Publicados varchar(500),
primary key(id_Comentarios_Blog_Publicados)
);
create table DB_Comentarios_Blog_Entrada(
id_Comentarios_Blog_Entrada int,
dt_Comentario_Blog_Entrada varchar(500),
primary key(id_Comentarios_Blog_Entrada)
);

create table Db_Registro_Evento(
id_Registro_Evento int not null auto_increment,
Nombre_Participante varchar(200),
Email_Participante varchar(200),
Telefono_Participante varchar(200),
Direccion_Participante varchar(300),
Edad_Participante varchar(40),
Universidad_Participante varchar(200),
Comentarios_Participante varchar(800),
fecha_ingreso datetime,
/*condicion tinyint(1),*/
primary key(id_Registro_Evento)
);
create table registro(
idregistro int not null auto_increment,
nombre varchar(200) not null,
email varchar(200)  not null,
telefono varchar(200)  not null,
direccion varchar(300)  not null,
edad varchar(40)  not null,
universidad varchar(200)  not null,
comentarios varchar(800) ,
condicion tinyint(1),
primary key(idcategoria)
);